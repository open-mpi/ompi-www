<?
$subject_val = "[OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 10 12:11:53 2010" -->
<!-- isoreceived="20101110171153" -->
<!-- sent="Wed, 10 Nov 2010 17:11:47 +0000" -->
<!-- isosent="20101110171147" -->
<!-- name="Number Cruncher" -->
<!-- email="number.cruncher_at_[hidden]" -->
<!-- subject="[OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12" -->
<!-- id="4CDAD253.6010804_at_ntlworld.com" -->
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
<strong>Subject:</strong> [OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12<br>
<strong>From:</strong> Number Cruncher (<em>number.cruncher_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-10 12:11:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14723.php">Jed Brown: "Re: [OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12"</a>
<li><strong>Previous message:</strong> <a href="14721.php">Gedaliah Wolosh: "[OMPI users] Compile fails OMPI-1.4.3 Sun Studio 12.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14723.php">Jed Brown: "Re: [OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12"</a>
<li><strong>Reply:</strong> <a href="14723.php">Jed Brown: "Re: [OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12"</a>
<li><strong>Maybe reply:</strong> <a href="14733.php">Number Cruncher: "Re: [OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just some observations from a concerned user with a temperamental Open 
<br>
MPI program (1.4.3):
<br>
<p>Fedora 14 (just released) includes glibc-2.12 which has optimized 
<br>
versions of memcpy, including a copy backward.
<br>
<a href="http://sourceware.org/git/?p=glibc.git;a=commitdiff;h=6fb8cbcb58a29fff73eb2101b34caa19a7f88eba">http://sourceware.org/git/?p=glibc.git;a=commitdiff;h=6fb8cbcb58a29fff73eb2101b34caa19a7f88eba</a>
<br>
<p>I think the overlapping memcpy issue reported previously may be actively 
<br>
triggered by this optimized memcpy and produce incorrect data.
<br>
<p>Related posts:
<br>
<a href="http://www.open-mpi.org/community/lists/users/2009/04/9069.php">http://www.open-mpi.org/community/lists/users/2009/04/9069.php</a>
<br>
<a href="http://www.open-mpi.org/community/lists/users/2008/01/4918.php">http://www.open-mpi.org/community/lists/users/2008/01/4918.php</a>
<br>
<a href="http://www.open-mpi.org/community/lists/users/2007/08/3872.php">http://www.open-mpi.org/community/lists/users/2007/08/3872.php</a>
<br>
<p>Original developer response:
<br>
<a href="http://www.open-mpi.org/community/lists/users/2007/08/3873.php">http://www.open-mpi.org/community/lists/users/2007/08/3873.php</a>
<br>
<p>Current ticket:
<br>
<a href="https://svn.open-mpi.org/trac/ompi/ticket/1903">https://svn.open-mpi.org/trac/ompi/ticket/1903</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14723.php">Jed Brown: "Re: [OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12"</a>
<li><strong>Previous message:</strong> <a href="14721.php">Gedaliah Wolosh: "[OMPI users] Compile fails OMPI-1.4.3 Sun Studio 12.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14723.php">Jed Brown: "Re: [OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12"</a>
<li><strong>Reply:</strong> <a href="14723.php">Jed Brown: "Re: [OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12"</a>
<li><strong>Maybe reply:</strong> <a href="14733.php">Number Cruncher: "Re: [OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12"</a>
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
