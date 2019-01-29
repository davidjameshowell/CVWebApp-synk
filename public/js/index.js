const username = $('input[name=username]')
const password = $('input[name=password]')
const message  = $('#error-message')
const modal    = $('.modal')
const textarea = $('textarea')

const getCookie = name => 
  document.cookie.split('; ')
    .filter(e => e.startsWith(name))[0]
    .split(`${name}=`)[1]

const notify = text => {
  if (Notification.permission === "granted") {
    var notification = new Notification('CVWebApp Insecure Blog', {
      body: text
    });
  }

  else if (Notification.permission !== "denied") {
    Notification.requestPermission().then(function (permission) {
      if (permission === "granted") {
        var notification = new Notification(text, {
          body: ''
        });
      }
    });
  }
}

const validateLogin = () => {
  let result = username.val() == ''
    || password.val() == ''

  if ( result ) {
    message.text('Username / Password is empty')
    message.animate({
      opacity: '-=1'
    }, 2500, () => {
      message.html('&nbsp;')
      message.css('opacity', 1)
    })
  }

  return !result
}

const showModal = () => {
  modal.fadeIn(500)
  textarea.focus()
}

const formatObject = ({username, is_admin, content, created_at}) =>
  `<div class="tile is-ancestor post" style="display:none">
    <div class="tile is-parent">
      <article class="tile is-child box card">
        <div class="card-content">
          <div class="media">
            <div class="media-left">
              <figure class="image is-48x48">
                <img src="public/img/96x96.png">
              </figure>
            </div>
            <div class="media-content">
              <p class="title is-4 has-text-dark">
                ${username}
              </p>
              <p class="subtitle is-6 has-text-dark">
                ${is_admin == 1 ? 'Admin' : 'User'} &dash; ${created_at}
              </p>
            </div>
          </div>
          <div class="content">
            ${content}
          </div>
        </div>
      </article>
    </div>
  </div>`

const load = (notif) => {
  $.ajax({
    url: 'http://localhost:8000/posts',
    method: 'GET',
    success: response => {
      let content = ''
      for ( let post of response ) {
        content += formatObject(post)
      }
      $('#posts').html(content)

      let posts = $('.post')
      for ( let post of posts ) {
        $(post).fadeIn(500)
      }

      notify(notif);
    }
  })
}

modal.hide()

$('.modal-background').click(() => {
  modal.fadeOut(500)
})

$('#post-button').click(() => {
  $.ajax({
    url: 'http://localhost:8000/posts',
    method: 'POST',
    data: {
      user_id: getCookie('id'),
      content: textarea.val()
    },
    success: response => {
      console.log(response)
      load('Posted!')
      modal.fadeOut(500)
      textarea.val('')
    },
    error : response => {
      console.error(response)
    }
  })
})

modal.keypress(e => {
  switch (e.key) {
    case "Escape":
      modal.fadeOut(500)
    break;
  }
})

if ( window.location.toString().endsWith(':8000/') )
  load('Post Loaded!')