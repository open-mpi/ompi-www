<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug 30 20:33:30 2007" -->
<!-- isoreceived="20070831003330" -->
<!-- sent="Thu, 30 Aug 2007 20:33:07 -0400" -->
<!-- isosent="20070831003307" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[MTT devel] supposed-to-fail" -->
<!-- id="4F0B02C9-8BD5-4C5F-AD96-42548DE7F4F1_at_cisco.com" -->
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
<strong>Date:</strong> 2007-08-30 20:33:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0066.php">Josh Hursey: "Re: [MTT devel] change description in db"</a>
<li><strong>Previous message:</strong> <a href="0064.php">Jeff Squyres: "[MTT devel] change description in db"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ethan --
<br>
<p>Ok, I think I fixed it the supposed-to-fail problem.  I tried for a  
<br>
while to make a funclet wrapper around perl's map function, but the  
<br>
syntax for how you had to call it got uglier and uglier.  So I gave  
<br>
up.  Instead, I made a &amp;prepend() funclet, and use it like this:
<br>
<p>simple_failures:tests = &amp;find_executables(&amp;prepend(&quot;src/&quot;, &amp;cat 
<br>
(&quot;supposed_to_fail&quot;)))
<br>
<p>It ain't sexy, but it works.  This should get you up and going.
<br>
<p>The bad news is that in doing this, I think I had a bad realization:  
<br>
for any funclet that can take an array as an argument, it really can  
<br>
take one of three things:
<br>
<p>- a string
<br>
- an array of strings
<br>
- a reference to an array of strings
<br>
<p>The third is because all funclets that return arrays actually return  
<br>
references to arrays (ie., they &quot;return \@ret;&quot;).  I think that all  
<br>
the functlets need to be expanded to be able to handle this  
<br>
possibility.  This isn't hard, but it is menial labor and I don't  
<br>
have the brainpower to handle that at the moment.
<br>
<p>This came up because
<br>
<p>&nbsp;&nbsp;&nbsp;&amp;find_executables(&amp;prepend(&quot;src/&quot;, &amp;cat(&quot;supposed_to_fail&quot;)))
<br>
<p>&amp;cat() returns an \@array which then gets fed to &amp;prepend().  &amp;prepend 
<br>
() then returns an \@array which gets fed to &amp;find_executables().  It  
<br>
took me a while to figure out that this is what was happening.
<br>
<p>Can you confirm this conclusion (that we need to update all the  
<br>
funclets), just to make sure I'm not out of my mind?
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
<li><strong>Next message:</strong> <a href="0066.php">Josh Hursey: "Re: [MTT devel] change description in db"</a>
<li><strong>Previous message:</strong> <a href="0064.php">Jeff Squyres: "[MTT devel] change description in db"</a>
<!-- nextthread="start" -->
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
