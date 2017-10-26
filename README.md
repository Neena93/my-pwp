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
