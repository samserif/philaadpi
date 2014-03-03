Hi There!

You can use this includes folder to start your own projects quicker and easier.

I've included an extension system for creating responsive widths.  Simply extend a selector with a placeholder in the following fractional syntax in the base stylesheet.

ex: 
.class {
	@extend %one-two;
}

In the preceeding placeholder, the first number ('one') corresponds to the numerator, while the second ('two') corresponds to the denominator. These fractions refer to the width of the parent container that it will occupy at a resolution equal to or greater than 1024px width. Mobile widths are addressed as well. Fractions up to denominator ten can be used in this format. Only the most simplified version of a fraction will work.  This means that %one-two will create an element with width 50%, while %five-ten will do nothing (most likely it will produce an error).

Other Shortcuts:

@include box-sizing($area) 

//  $area - can accept either border, padding, or content;
\\  This mixin will apply the specified box sizing to the element, 
\\  along with the needed vendor prefixes to support all browsers;

@include align($direction)

//  $direction - can accept either left, right, or center;
\\  This mixin will apply the specified text alignment to the element
\\  along with all of its children, both direct and indirect;

@include transition($time, $type)

//  $time - can accept a valid css time value;
//	$type - can accept a valid css transition type | Defaults to 'all';
\\  This mixin will apply a cross browser transition of the type and
\\  time specified to an element;

@extend %margin-auto

\\  Applies margin-left: auto; and margin-right: auto; to an element;