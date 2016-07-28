<?
$subject_val = "[OMPI devel] adding new functions to a BTL";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 22 14:01:40 2008" -->
<!-- isoreceived="20081022180140" -->
<!-- sent="Wed, 22 Oct 2008 11:04:45 -0700" -->
<!-- isosent="20081022180445" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="[OMPI devel] adding new functions to a BTL" -->
<!-- id="48FF6B3D.2020305_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> [OMPI devel] adding new functions to a BTL<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-22 14:04:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4787.php">Jeff Squyres: "Re: [OMPI devel] Direct routed module"</a>
<li><strong>Previous message:</strong> <a href="4785.php">Greg Watson: "Re: [OMPI devel] -display-map"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4789.php">Jeff Squyres: "Re: [OMPI devel] adding new functions to a BTL"</a>
<li><strong>Reply:</strong> <a href="4789.php">Jeff Squyres: "Re: [OMPI devel] adding new functions to a BTL"</a>
<li><strong>Reply:</strong> <a href="4791.php">Jeff Squyres: "Re: [OMPI devel] adding new functions to a BTL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm trying to prototype an idea inside OMPI and am running into a problem.
<br>
<p>I want to add a new function to a BTL and to have the PML call this 
<br>
function.  I can't just put such a function call into the PML (not even 
<br>
for my prototype) since the PML is loaded before the BTL and so the PML 
<br>
will complain about a missing symbol.
<br>
<p>So, the PML will just have to refer to the function symbolically and I 
<br>
need to figure out the BTL function address &quot;at the appropriate time&quot; 
<br>
(after the BTL is loaded but before I need to call my function).
<br>
<p>I tried to dlopen the BTL (seemed successful... I got back a non-NULL 
<br>
handle), but dlsym can't seem to find any of the symbols in the BTL (not 
<br>
even ones that existed before I started any of my work).
<br>
<p>I can describe other things I tried or other things I think are supposed 
<br>
to work (but that I am reluctant to try), but let's cut to the chase:  HELP!
<br>
<p>Please note that I'm a newbie OMPI developer and so I'm really 
<br>
interested in doing the simplest thing possible to try my prototype.  I 
<br>
recognize that certain things will have to be done to add &quot;real code&quot; 
<br>
back to the code base, but at this point I'd prefer to defer difficult 
<br>
work and just test the ideas of my prototype.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4787.php">Jeff Squyres: "Re: [OMPI devel] Direct routed module"</a>
<li><strong>Previous message:</strong> <a href="4785.php">Greg Watson: "Re: [OMPI devel] -display-map"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4789.php">Jeff Squyres: "Re: [OMPI devel] adding new functions to a BTL"</a>
<li><strong>Reply:</strong> <a href="4789.php">Jeff Squyres: "Re: [OMPI devel] adding new functions to a BTL"</a>
<li><strong>Reply:</strong> <a href="4791.php">Jeff Squyres: "Re: [OMPI devel] adding new functions to a BTL"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
