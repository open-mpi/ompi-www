<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep  6 08:35:26 2007" -->
<!-- isoreceived="20070906123526" -->
<!-- sent="Thu, 6 Sep 2007 08:35:01 -0400" -->
<!-- isosent="20070906123501" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[MTT devel] First cut at MTT web pages" -->
<!-- id="E2665FE9-5658-4D00-95C0-9205B107752C_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-06 08:35:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0085.php">Josh Hursey: "Re: [MTT devel] [MTT users] Test runs not getting into database"</a>
<li><strong>Previous message:</strong> <a href="0083.php">Josh Hursey: "Re: [MTT devel] [MTT users] Test runs not getting into database"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0088.php">Ethan Mallove: "Re: [MTT devel] First cut at MTT web pages"</a>
<li><strong>Reply:</strong> <a href="0088.php">Ethan Mallove: "Re: [MTT devel] First cut at MTT web pages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I put up a skeleton of the MTT web pages on the OMPI web site, but  
<br>
didn't link to them from anywhere.  This actually involved changing a  
<br>
bunch of infrastructure because we published the name /projects/mtt/  
<br>
in the paper but PLPA was under /software/plpa/.  So I had to move  
<br>
PLPA to be under /projects/plpa/....etc.  You probably don't care  
<br>
about the details.  ;-)
<br>
<p>Anyway, /projects/mtt/ now exists and has skeleton content.  I even  
<br>
put up dummy tarballs (that are empty).  Two things to note:
<br>
<p>1. There are 3 places where I have links to MTT content on the OMPI  
<br>
web site.  If you are in a personal checkout (i.e., if the first two  
<br>
chars of REQUEST_URI are &quot;/~&quot;), the links will show up and be noted  
<br>
with &quot;(FIX)&quot; in red.  If you're on the live OMPI web site, the links  
<br>
don't show up (yet).
<br>
<p>2. Our OMPI MTT testing results are in /mtt/ -- the MTT project site  
<br>
is /projects/mtt/.  This actually creates a problem for the left-hand  
<br>
navigation scheme because it looks at the basename of the subdir to  
<br>
know when to print the sub-menus.  For example, if you view a  
<br>
personal checkout and go to /projects/mtt/, you'll see the MTT  
<br>
project sub-menu listed twice on the left.  I could add a hackaround  
<br>
in the PHP of the OMPI web site, but thinking about it a little, I  
<br>
wonder if it would be better to simply move the OMPI MTT testing  
<br>
results to /testing/ (with an appropriate apache-level redirects left  
<br>
at /mtt/ so that all old permalinks and whatnot continue to work).   
<br>
We'll need to get everyone to update their client INI files, though  
<br>
-- I'm not sure that LWP will understand a POST redirect...?
<br>
<p>Comments?
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0085.php">Josh Hursey: "Re: [MTT devel] [MTT users] Test runs not getting into database"</a>
<li><strong>Previous message:</strong> <a href="0083.php">Josh Hursey: "Re: [MTT devel] [MTT users] Test runs not getting into database"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0088.php">Ethan Mallove: "Re: [MTT devel] First cut at MTT web pages"</a>
<li><strong>Reply:</strong> <a href="0088.php">Ethan Mallove: "Re: [MTT devel] First cut at MTT web pages"</a>
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
