<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Sep 24 21:03:32 2007" -->
<!-- isoreceived="20070925010332" -->
<!-- sent="Mon, 24 Sep 2007 21:03:08 -0400" -->
<!-- isosent="20070925010308" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[MTT devel] If jpgraph is missing..." -->
<!-- id="73DF0D01-C1E5-4674-9CC7-7849C0D11009_at_cisco.com" -->
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
<strong>Date:</strong> 2007-09-24 21:03:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0129.php">Ethan Mallove: "Re: [MTT devel] if whatami is missing..."</a>
<li><strong>Previous message:</strong> <a href="0127.php">Jeff Squyres: "[MTT devel] if whatami is missing..."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can one of you guys update the reporter to gracefully handle if  
<br>
jpgraph is not present?  I suggest making a simple &quot;include&quot; test to  
<br>
see if jpgraph is available (or even a file_exists() test?  whatever  
<br>
works/is easier), and if it isn't, print a simple message about  
<br>
&quot;JpGraph is not available, so no graphs are shown&quot; or somesuch, but  
<br>
keep the links to the raw data.
<br>
<p>See <a href="https://svn.open-mpi.org/trac/mtt/ticket/319">https://svn.open-mpi.org/trac/mtt/ticket/319</a>.
<br>
<p>Extra bonus points if you put the hook in config.inc to allow jpgraph  
<br>
to be available at some non-default location.  ;-)
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
<li><strong>Next message:</strong> <a href="0129.php">Ethan Mallove: "Re: [MTT devel] if whatami is missing..."</a>
<li><strong>Previous message:</strong> <a href="0127.php">Jeff Squyres: "[MTT devel] if whatami is missing..."</a>
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
