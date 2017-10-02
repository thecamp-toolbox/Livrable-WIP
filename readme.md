The idea : make nice presentation online with a little back-office. Also unite all the different items that have to be generated for projects (proposition, brief, livrable, etc.). 

Tested on http://doc.thecamp.fr 

# How-to

## Structure 

Projects > Project > livrable  

## Elements 

Text has to be entered using Markdown. 

To add an image, drag and drop it in the backoffice and then 'call' it with `(image: image-name.jpg)`

## Page templates 

- default slide (blank background, text centered, with possilbity of adding columns) 
- cover slide (background image)
- card slide (image on half left)
- portfolio slide (list of items with an image for each) 
- quote 
- data slide 
- steps (process) slide 
- schedule template (timetable) 
- long list (for participants)

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
- Find a way to limit number of items on portfolio slide to 8 and distribute on any number of slides (ex. 15 items => 2 slides) (cf. long-list)
- Download of all documents on project page 

## Before going live 

- do something about nav 
- better 'project' page 
- hide pages for people not logged-in (or protect page by password)
- Check on mobile 

## Future 

- Add slides numbers when printed (pass variable through all snipets)
- Call slideshows in slideshows (ex. thecamp presentation in livrable)
- Text alignement in blueprint  
- Better Font Awesome integration
- Make 'network' to dropdwon select people 
- Better 'user' profile that allows for linking (tel info, avatar image, etc.)
- Better images gallery slide 
- slide thecamp map (?) 

## Templates to add 

- project (with link etc. for benchmark) 
- chapter 
- pricing 
- full page image 

