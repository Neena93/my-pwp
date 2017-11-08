# personal website to show employers 

## Milestone 1 Feedback
Great job on your purpose/audience/goal, and your Persona is excellent - you've done a nice job stepping into her shoes and outlining her needs as an end user. This level of detail can certainly guide your content and design choices in your design phase.  

Taking a general approach to your professional portfolio and targeting a wider audience within the IT community isn't a bad approach when you're starting out. Heads up though: If you feel that you're leaning more towards targeting potential  clients for freelance gigs, you may want to specifically design your content around  appealing to potential clients. There's quite a bit of difference between marketing your skills for clients or customers vs. the IT community and potential employers.

That being said, I definitely think that you can create a PWP that bridges the gap between appealing to potential employers *and* potential clients at the same time. Think of ways that you can illustrate your tech skills that is both informative (for potential employers) while being visually engaging and "friendly" enough for potential clients.

Overall really nice work, and your code is looking good too. There were some minor  technical notes - see Edits &amp; Suggestions below. Your Milestone 1 passes at [Tier III](https://bootcamp-coders.cnm.edu/projects/personal/rubric/). You're clear to begin Milestone 2a.

### Edits &amp; Suggestions
- Line 1 of your .gitignore is missing the "." - it should be `.DS_Store`
- I would move the `/images` directory inside `/public_html/documentation`. This way it will be isolated to this section alone, and won't interfere with the development of the real site going fwd.
- Your Issa Rae image isn't loading because the path is incorrect - just remove the leading "/" so it looks like this: `src="images/issa-rae.jpg"`. Remember to always set some relevant content in the `alt` attribute as well.


## Milestone 2a
### Feedback 

You have a few small errors in your Html if you are intrested  here is the link to [W3C Validator](https://validator.w3.org/nu/?doc=https%3A%2F%2Fbootcamp-coders.cnm.edu%2F~tpurnell%2Fmy-pwp-tanisha%2Fpublic_html%2Fdocumentation%2Fmilestone-2.php). I can also not find your wireframes in the github repo. 

The Content Strategy is well laid out and I can get a general premise of what you want to accomplish. Unfortuantly the content strategy does not match the wireframes, in some key aspects. I have laid out a few questions that I had. You seem unsure of some of the finer points you want to accomplish for PWP. 


### Inconsistencies I have questions about:
* Round image at top of desktop wireframe, square image on mobile? Is this intentional?

* What are the round "buttons"? - See comments below.

* Portfolio section on mobile informs me that each thumbnail will have it's own paragraph/text section, instead on one huge paragraph/text section below each thumbnail as seen on desktop wireframe. This will make a big difference in the HTML structure and necessary Bootstrap classes needed in this section - and I'm not 100% certain on what you intend to do here. Given what I see, you may need to really mix and match column classes to get this to work right. Take a "mobile first" approach to this - and it could get a little tricky. Make sure you are absolutely clear on your plan before you code. On the XS breakpoint I might opt to make the photo and text stack, since horizontal space could become too tight for reading. Just be aware of this. This would probably be the approach I would take.

* I don't see the corresponding text for the Contact Form on the mobile view. Is this intentional?

* Social media icons in footer are not included in the desktop layout. Is this intentional?

* FB and G+ social media at bottom of About Me section on desktop, but not mobile. Is this intentional?

### TL; DR: 
The inconsistencies I see between the wireframes can negatively impact your development unless you are crystal clear on your plan. I'm not certain which are "features" and which are "bugs"... what's intentional in these wireframes and what's not. For a client or workplace, consistency and accuracy in wireframes is expected, as they are often a client deliverable that requires sign-off. The content strategy is supposed to help clarify the design plan, and that way we could help with suggestions, tools, and methods for your development. I would clarify or refine this plan - for yourself - a little more before beginning development.

### NAVIGATION
* Not sure what the numbered circles are at the bottom of the page - and it's not stated in the content strategy. This really needs to be clarified, so you can plan your development phase.

* My thought is that this is intended to be navigation bar... something like this perhaps: https://tympanus.net/codrops/2014/01/21/dot-navigation-styles/. If so, this is how it can be done... I would place the "dot links" in a fixed bottom footer (rather that have them repeat in different sections down the page), and add "anchor links" that correspond to the proper page section. Now, that's the first step. To highlight the proper "nav dot" per section - have a look at integrating Scrollspy, which is built into Bootstrap: https://getbootstrap.com/docs/4.0/components/scrollspy/. If you wanted to add jQuery smooth scrolling into the mix, have a look at this page: https://css-tricks.com/snippets/jquery/smooth-scrolling/

* The complexity of even small design ideas such as this kind of navigation is why it's important to clarify in the content strategy. That way we can determine project requirements and a development plan. I'm still not entirely sure if what I mentioned above is what you intended. If you have any additional questions - please let us know.

### Grade Tier II
