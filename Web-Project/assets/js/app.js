// sidebar toggle function
const sidebarToggle = () => {
    document.body.classList.toggle('sidebar-open');
}

//sidebar trigger

const sidebarTrigger = document.getElementById('main-header__sidebar-toggle')

// Add the event listner'
sidebarTrigger.addEventListener('click', sidebarToggle)




// sidebar collapse function
const sidebarCollapse = () => {
    document.body.classList.toggle('sidebar-collapsed');
}

//sidebar trigger

const sidebarCollapseTrigger = document.getElementById('sidebar__collapse')

// Add the event listner'
sidebarCollapseTrigger.addEventListener('click', sidebarCollapse)



// Theme switcher function
const switchTheme = () => {
    const rootElem = document.documentElement
    let dataTheme = rootElem.getAttribute('data-theme'), 
        newTheme

    newTheme = (dataTheme === 'light') ? 'dark' : 'light'

    rootElem.setAttribute('data-theme', newTheme)

    localStorage.setItem("theme", newTheme)
}

document.querySelector('#sidebar__theme-switcher').addEventListener('click', switchTheme)
