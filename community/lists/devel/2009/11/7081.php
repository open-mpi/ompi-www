<?
$subject_val = "[OMPI devel] 1.3.4 blocker";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  3 20:33:24 2009" -->
<!-- isoreceived="20091104013324" -->
<!-- sent="Tue, 3 Nov 2009 20:33:20 -0500" -->
<!-- isosent="20091104013320" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.3.4 blocker" -->
<!-- id="06C70E88-A6A1-4DF2-9A83-F7430725B710_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] 1.3.4 blocker<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-03 20:33:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7082.php">Jeff Squyres: "[OMPI devel] Another 1.3.4 blocker: mpi_test_suite failing"</a>
<li><strong>Previous message:</strong> <a href="7080.php">Jeff Squyres: "Re: [OMPI devel] Adding (3rd party?) MCA modules to the build system"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Avneesh/QLogic just pointed out to me that we have a binary  
<br>
compatibility issue (he's going to file a blocker ticket shortly).   
<br>
When we changed the .so version numbers right before 1.3.4rc3, we made  
<br>
it that apps compiled with 1.3.3 will not run against 1.3.4 because  
<br>
the apps are dependent upon libopen-rte and libopen-pal.  This is  
<br>
likely because the wrapper compilers explicitly -lopen-rte and -lopen- 
<br>
pal, rather than letting them get pulled in implicitly (I *think*  
<br>
that's why -- but it's late and I haven't tried it).
<br>
<p>Simple test: mpicc hello.c -o hello against a 1.3.3 install.  Then  
<br>
change your LD_LIBRARY_PATH to point to a 1.3.4rc3 install (assumedly  
<br>
in a different tree).  Run ldd on hello; it'll show libopen-rte.so and  
<br>
libopen-pal.so as not found.
<br>
<p>It's too late to fix this for the 1.3/1.4 series; perhaps we can fix  
<br>
it in the 1.5 series properly.  But I think we might have to lie about  
<br>
the .so version numbers for 1.3.4 to make the binary compatibility work.
<br>
<p>George / Brad -- we should chat on the phone tomorrow to figure this  
<br>
out (when I have more brain power to think about this properly).  :-(
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7082.php">Jeff Squyres: "[OMPI devel] Another 1.3.4 blocker: mpi_test_suite failing"</a>
<li><strong>Previous message:</strong> <a href="7080.php">Jeff Squyres: "Re: [OMPI devel] Adding (3rd party?) MCA modules to the build system"</a>
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
