<?
$subject_val = "[OMPI devel] RFC: Adding OMPI_CHECK_WITHDIR checks";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 20 19:45:02 2009" -->
<!-- isoreceived="20090121004502" -->
<!-- sent="Tue, 20 Jan 2009 19:44:52 -0500" -->
<!-- isosent="20090121004452" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: Adding OMPI_CHECK_WITHDIR checks" -->
<!-- id="2CF9DBBF-F472-409E-A89C-245C17FC361A_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: Adding OMPI_CHECK_WITHDIR checks<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-20 19:44:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5246.php">Eugene Loh: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>Previous message:</strong> <a href="5244.php">Jeff Squyres: "Re: [OMPI devel] Make Error: io_romio_ad_wait.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5315.php">Jeff Squyres: "Re: [OMPI devel] RFC: Adding OMPI_CHECK_WITHDIR checks"</a>
<li><strong>Reply:</strong> <a href="5315.php">Jeff Squyres: "Re: [OMPI devel] RFC: Adding OMPI_CHECK_WITHDIR checks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What: Adding OMPI_CHECK_WITHDIR checks in various .m4 files
<br>
<p>Why: Help prevent user errors via --with-&lt;foo&gt;=DIR configure options
<br>
<p>Where: config/*m4 and */mca/*/*/configure.m4 files, affecting the  
<br>
following environments:
<br>
- bproc (***)
<br>
- gm (***)
<br>
- loadleveler (***)
<br>
- lsf
<br>
- mx (***)
<br>
- open fabrics
<br>
- portals (***)
<br>
- psm (***)
<br>
- tm
<br>
- udapl
<br>
- elan (***)
<br>
- sctp
<br>
- blcr (***)
<br>
- libnuma
<br>
- valgrind
<br>
===&gt; I could not easily test the (***) environments
<br>
<p>When: For OMPI v1.4 (could be convinced to make it for v1.3.1)
<br>
<p>Timeout: COB Thursday, Jan 29, 2009
<br>
<p>------------
<br>
<p>The intent for OMPI v1.3's new OMPI_CHECK_WITHDIR m4 macro was to fix  
<br>
a case where a user was doing the following:
<br>
<p>&nbsp;&nbsp;&nbsp;./configure --with-openib=/path/to/nonexistent/OFED/installation
<br>
<p>...but configure succeeded anyway because the sysadmins had installed  
<br>
OFED into /usr.  Hence, the user was getting something unexpected.
<br>
<p>OMPI_CHECK_WITHDIR does a very basic sanity check on directories  
<br>
provided by --with-&lt;foo&gt;=DIR configure options.  Specifically, it  
<br>
checks if the directory exists and if a token file exists in that  
<br>
directory (specifically, it calls &quot;ls &lt;token_file&gt;&quot;, so wildcards are  
<br>
acceptable).  If either of those tests fail, configure aborts with an  
<br>
appropriate error message.  This macro was used in the openib BTL  
<br>
configure stuff, but we didn't add it anywhere else.  I'm now adding  
<br>
it everywhere we have a --with-&lt;foo&gt;=DIR, which are in various .m4  
<br>
files in the environments described above.
<br>
<p>Here's the hg where I added OMPI_CHECK_WITHDIR to all the environments  
<br>
listed above, but was unable to test the (***) environments:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/hg/hgwebdir.cgi/jsquyres/">http://www.open-mpi.org/hg/hgwebdir.cgi/jsquyres/</a> 
<br>
ompi_check_withdir/
<br>
<p>We could bring this patch to v1.3.1 or we could wait until v1.4.  I  
<br>
don't really care either way.
<br>
<p>I plan to bring this work into the trunk next Thursday COB; it would  
<br>
be great if those who have the (*) environments could pull down the hg  
<br>
tree before then and give it a whirl so we can fix any problems  
<br>
beforehand.
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
<li><strong>Next message:</strong> <a href="5246.php">Eugene Loh: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>Previous message:</strong> <a href="5244.php">Jeff Squyres: "Re: [OMPI devel] Make Error: io_romio_ad_wait.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5315.php">Jeff Squyres: "Re: [OMPI devel] RFC: Adding OMPI_CHECK_WITHDIR checks"</a>
<li><strong>Reply:</strong> <a href="5315.php">Jeff Squyres: "Re: [OMPI devel] RFC: Adding OMPI_CHECK_WITHDIR checks"</a>
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
