The idea : make nice presentation online with a little back-office. Also unite all the different items that have to be generated for projects (proposition, brief, livrable, etc.). 

# How-to

## Structure 

Projects > Project > livrable  

## Elements 

Text has to be entered using Markdown. 
To add an image, drag and drop it in the backoffice and then 'call' it with `(image: image-name.jpg)`

## Page templates 

- default slide (blank background, text in the center)
- cover slide (background image)
- card slide (image on half left)
- portfolio slide (list of items with an image for each) 
- quote 

## Other helpers 

We can create a nice button with : 

`(button: Go somewhere! link: http://link.com)`

# Based on a mix between Kirby and Webslides

Kirby is a file-based CMS.
Easy to setup. Easy to use. Flexible as hell.
Please buy a license at <http://getkirby.com/buy>

It uses Kirby plugins : 

- Subpagelist <https://github.com/flokosiol/kirby-subpagelist>
- Selector <https://github.com/storypioneers/kirby-selector>
- Kirby panel Prev-Next <https://github.com/jenstornell/kirby-panel-prevnext>

And also, Font Awesome

# Todo 

- Make a helper for image selection (Unsplah code, uploaded or default) to be added to default and cover slides 
- Plutôt avoir un dropdown pour choisir le genre de template qu'on veut 
- Ajouter des if () partout pour que ça fonctionne même quand certains champs sont absents
- Better Font Awesome integration
- Find a way to limit number of items on portfolio slide to 8 and distribute on any number of slides (ex. 15 items => 2 slides). 
- Add slides numbers when printed 

## Templates to add 

- steps (process) 
- project (with link etc. for benchmark) 
- columns (or add possibility on default)
- data 
- schedule 

