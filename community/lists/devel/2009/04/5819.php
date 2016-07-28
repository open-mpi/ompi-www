<?
$subject_val = "[OMPI devel] 1.3.1 version/subversion discrepancy";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 14 00:43:01 2009" -->
<!-- isoreceived="20090414044301" -->
<!-- sent="Mon, 13 Apr 2009 21:42:56 -0700" -->
<!-- isosent="20090414044256" -->
<!-- name="Rob Egan" -->
<!-- email="rsegan_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.3.1 version/subversion discrepancy" -->
<!-- id="49E41450.4000008_at_lbl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] 1.3.1 version/subversion discrepancy<br>
<strong>From:</strong> Rob Egan (<em>rsegan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-14 00:42:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5820.php">George Bosilca: "Re: [OMPI devel] 1.3.1 version/subversion discrepancy"</a>
<li><strong>Previous message:</strong> <a href="5818.php">Jeff Squyres: "[OMPI devel] mpool errors fatal"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5820.php">George Bosilca: "Re: [OMPI devel] 1.3.1 version/subversion discrepancy"</a>
<li><strong>Reply:</strong> <a href="5820.php">George Bosilca: "Re: [OMPI devel] 1.3.1 version/subversion discrepancy"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I just installed Open MPI 1.3.1 and found that the following assertion
<br>
now fails.
<br>
<p>&nbsp;&nbsp;MPI_Get_version(&amp;version, &amp;subversion);
<br>
&nbsp;&nbsp;Assert(version == MPI_VERSION &amp;&amp; subversion == MPI_SUBVERSION);
<br>
<p><p>This is an excerpt from pyMPI, which I have been using with Open MPI 1.2.7.
<br>
<p>According to mpi.h, MPI_VERSION == 2 and MPI_SUBVERSION == 1, but the
<br>
procedure MPI_Get_version returns 2 and 0 for version &amp; subversion
<br>
respectively.
<br>
<p>I think this is a quick fix to sync up the mpi.h and get_version.c.
<br>
<p>Thanks,
<br>
Rob Egan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5820.php">George Bosilca: "Re: [OMPI devel] 1.3.1 version/subversion discrepancy"</a>
<li><strong>Previous message:</strong> <a href="5818.php">Jeff Squyres: "[OMPI devel] mpool errors fatal"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5820.php">George Bosilca: "Re: [OMPI devel] 1.3.1 version/subversion discrepancy"</a>
<li><strong>Reply:</strong> <a href="5820.php">George Bosilca: "Re: [OMPI devel] 1.3.1 version/subversion discrepancy"</a>
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
