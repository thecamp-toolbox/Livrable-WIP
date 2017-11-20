The idea : make nice presentation online with a little back-office. Also unite all the different items that have to be generated for projects (proposition, brief, livrable, etc.). 

Tested on http://doc.thecamp.fr 

# How-to

## Structure 

Programs > Program (client HP) > Slideshow
Also, possibility to have projects under program. 

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
- chapter slide 
- full page image (contained)

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

## Based on a mix between Kirby and Webslides

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

- Find a way to limit number of items on portfolio slide (and images) to 8 and distribute on any number of slides (ex. 15 items => 2 slides) (cf. long-list)
- Download of all documents on project page 
- Checker player vidéo 
- add untimed phase in schedule
- page->title on print 
- icons instead of titles on schedule slide (so it works in any language)

## Before going live 

- better 'program' page  
- better 'slideshow' card 
- Check on mobile (specifically bottom padding)
- Ajouter des if () partout pour que ça fonctionne même quand certains champs sont absents. Surtout les images (ex. cover). 
- weird behavior of slideshow cards on hover 
- pb h3 cover

## Future 

- Make 'network' to dropdwon select people 
- Add 'user select' dropdpwn that adds a 'your contact' slide at the end (with auto bio)
- Make nice little how-to with images of slides 
- Drag & drop reordering of slides on slideshow page 
- table of content auto 
- Add slides numbers when printed (pass variable through all snipets?)
- Call slideshows in slideshows (ex. thecamp presentation in livrable)
- Text alignement in blueprint and other customization (image blend type on cover)
- Better Font Awesome integration (Kirby tag?)
- Better 'user' profile that allows for linking (tel info, avatar image, etc.)
- Better images gallery slide 
- slide thecamp map (?) 
- push notifications to the client when somthing is added to their page   
- fullscreen video goes weird on print to PDF 
- add page snippet next to page name in backoffice list 
- create special user type that only accesses his program and make sure pages are hidden for other users. Also, point users directly to their program when they login through dedicated page. 
- make better slide loop that automatically goes through slide templates and passes right variables
- better image management, so you don't have to resize images when you upload them
- find way to duplicate slideshow from one client to the other 
- limit number of words here and there to prevent overflowing 
- auto slideshows (like info pratiques with map, list of spaces, etc.)
- doc upload by users 
- pass all pages that aren't Webslides on Bootstrap?
- options to change card image width (cf. Webslides options)
- Being able to load participants straight from excel file 

## Templates to add 

- project (under program)
- logos client 
- creator (person with bio and possibly, dropdown to select from user list) 
- pricing 


