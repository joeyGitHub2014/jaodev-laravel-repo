require('./bootstrap')
import barba from '@barba/core'
import gsap from 'gsap'
 
const animationEnter = (container) => {
    return gsap.from(container, {autoAlpha:0, duration:.9, clearProps: 'all', ease:'power4.out'})

}
const animationLeave = (container) => {
    console.log('leaving')

    return gsap.to(container, {autoAlpha:0, duration:.9, clearProps: 'all', ease:'power4.out'})
    
}   
  
barba.init({
    transitions: 
    [
        {
            once({next}){
                console.log('once')
                animationEnter(next.container)
            },
            leave: ({current}) => animationLeave(current.container),
            enter({next}){
                console.log('entering')
                animationEnter(next.container)
            },
            
        }
    ]
})
          