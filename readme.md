The idea : make nice presentation online with a little back-office. Also unite all the different items that have to be generated for projects (proposition, brief, livrable, etc.). 

# How-to

## Structure 

Projects > Project > livrable  

## Elements 

Text has to be entered using Markdown. 

To add an image, drag and drop it in the backoffice and then 'call' it with `(image: image-name.jpg)`

## Page templates 

- default slide (blank background, text centered)
- cover slide (background image)
- card slide (image on half left)
- portfolio slide (list of items with an image for each) 
- quote 
- data slide 
- steps (process) slide 

## Print

Open presentation in Chrome and use the Print > Print to PDF function 

## Other helpers 

### Button 

We can create a nice button with : 

`(button: Go somewhere! link: http://link.com)`

### Images

On slides that contain images, the priority is : 

- unsplash code (if there is one)
- selection from dropdown (if there is one)
- first alphabetical image (if there are any)
- a default image if there are none 

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

## asap

- Ajouter des if () partout pour que ça fonctionne même quand certains champs sont absents
- Find a way to limit number of items on portfolio slide to 8 and distribute on any number of slides (ex. 15 items => 2 slides)

## future 

- Better Font Awesome integration
- Add slides numbers when printed 
- Call slideshows in slideshows (ex. thecamp presentation in livrable)
- Text alingment ? 

## Templates to add 

- project (with link etc. for benchmark) 
- columns (or add possibility on default) 
- schedule 
- chapter 
- pricing 
- full page image / gallery 

