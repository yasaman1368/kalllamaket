// The regular expression  /[^\d.]/g  is used
//  within the  replace()  method to find all
//  characters that are not digits or decimal points. 
let text='125@#jkldhkas00';
formattedText=parseFloat(text.replace(/[^\d.]/g,''))
