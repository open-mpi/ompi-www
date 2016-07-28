<?
$subject_val = "[OMPI devel] MTT: added long COMM_SPAWN test";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 20 13:27:53 2009" -->
<!-- isoreceived="20090520172753" -->
<!-- sent="Wed, 20 May 2009 13:27:36 -0400" -->
<!-- isosent="20090520172736" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] MTT: added long COMM_SPAWN test" -->
<!-- id="D1194982-3B55-4AA6-BCC5-AE5F8673323E_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] MTT: added long COMM_SPAWN test<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-20 13:27:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6079.php">Terry Dontje: "Re: [OMPI devel] totalview with OMPI 1.3 on rh5 linux"</a>
<li><strong>Previous message:</strong> <a href="6077.php">Jeff Squyres: "[OMPI devel] CMR one-sided changes?  (r21134)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just added a loop_spawn test to the IBM test suite that,  
<br>
unsurprisingly, does a big ol' loop over COMM_SPAWN (2000 spawns, to  
<br>
be exact).
<br>
<p>Those who are running the IBM test suite in MTT, take note: it takes a  
<br>
long time to complete -- probably longer than your default timeout.  I  
<br>
added the following to my INI file in my IBM test run section:
<br>
<p># Big loop o' spawns
<br>
loop_spawn:tests = dynamic/loop_spawn
<br>
loop_spawn:np = 1
<br>
loop_spawn:pass = &amp;and(&amp;test_wifexited(), &amp;eq(&amp;test_wexitstatus(),0))
<br>
loop_spawn:exclusive = 1
<br>
loop_spawn:timeout = 600
<br>
<p>On the trunk with btl=tcp,self and np=1 on 3-year-old xeon 4-core  
<br>
server, it ran in about 3.5 minutes.  It failed with btl-openib,self  
<br>
after about 1300 spawns (claiming not enough qp's).  I'll file a  
<br>
ticket about that.
<br>
<p>It fails on v1.3 after ~120 spawns (regardless of BTL) claiming it had  
<br>
run out of fd's.  I'll file a ticket about that.
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
<li><strong>Next message:</strong> <a href="6079.php">Terry Dontje: "Re: [OMPI devel] totalview with OMPI 1.3 on rh5 linux"</a>
<li><strong>Previous message:</strong> <a href="6077.php">Jeff Squyres: "[OMPI devel] CMR one-sided changes?  (r21134)"</a>
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
