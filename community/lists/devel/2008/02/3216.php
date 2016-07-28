<?
$subject_val = "[OMPI devel] ROMIO updates";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 12 14:13:01 2008" -->
<!-- isoreceived="20080212191301" -->
<!-- sent="Tue, 12 Feb 2008 14:12:29 -0500" -->
<!-- isosent="20080212191229" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] ROMIO updates" -->
<!-- id="6A7153E6-A5F4-4A8A-83BE-44FA789A961F_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] ROMIO updates<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-12 14:12:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3217.php">Jeff Squyres: "Re: [OMPI devel] New Driver BTL"</a>
<li><strong>Previous message:</strong> <a href="3215.php">Jeff Squyres: "Re: [OMPI devel] more memchecker q's"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just committed two patches to OMPI's ROMIO that I discussed this  
<br>
morning on the teleconf.  They remove two things from OMPI's bundled  
<br>
ROMIO:
<br>
<p>- function renaming (foo -&gt; io_romio_foo)
<br>
- file sym linking (foo.c -&gt; io_romio_foo.c)
<br>
<p>Although these features were added for a good reason (to abide by  
<br>
OMPI's component prefix rule), they make it much more difficult to  
<br>
track upstream ROMIO releases.  This tacking ability has been judged  
<br>
to be more important than the prefix rule, in this case.   
<br>
Additionally, since other MPI implementations include ROMIO without  
<br>
symbol/file renaming, we should be ok for all real-world MPI  
<br>
applications.
<br>
<p>When you update to &gt;=r17437, it will *not* require a new autogen/ 
<br>
configure, but you will see automake update a few makefiles when it  
<br>
gets to building the ROMIO component.
<br>
<p>Additionally, I updated the svn:ignores so that all the sym links that  
<br>
were previously created (e.g., io_romio_foo.c) will no longer be  
<br>
ignored.  You'll likely want to remove them yourself:
<br>
<p>shell$ cd ompi/mca/io/romio/romio
<br>
shell$ rm mpi-io/io_romio_*.c
<br>
shell$ rm adio/*/io_romio_*.c
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
<li><strong>Next message:</strong> <a href="3217.php">Jeff Squyres: "Re: [OMPI devel] New Driver BTL"</a>
<li><strong>Previous message:</strong> <a href="3215.php">Jeff Squyres: "Re: [OMPI devel] more memchecker q's"</a>
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
