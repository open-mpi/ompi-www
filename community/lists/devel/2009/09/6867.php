<?
$subject_val = "[OMPI devel] Ticket #1982 - Fortran MPI_IN_PLACE issue";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 22 10:05:28 2009" -->
<!-- isoreceived="20090922140528" -->
<!-- sent="Tue, 22 Sep 2009 08:05:16 -0600" -->
<!-- isosent="20090922140516" -->
<!-- name="David Gunter" -->
<!-- email="dog_at_[hidden]" -->
<!-- subject="[OMPI devel] Ticket #1982 - Fortran MPI_IN_PLACE issue" -->
<!-- id="B5C331E5-945F-4DC4-9393-4B905BFFCC9D_at_lanl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] Ticket #1982 - Fortran MPI_IN_PLACE issue<br>
<strong>From:</strong> David Gunter (<em>dog_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-22 10:05:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6868.php">David Gunter: "Re: [OMPI devel] Ticket #1982 - Fortran MPI_IN_PLACE issue"</a>
<li><strong>Previous message:</strong> <a href="6866.php">Pallab Datta: "[OMPI devel] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6868.php">David Gunter: "Re: [OMPI devel] Ticket #1982 - Fortran MPI_IN_PLACE issue"</a>
<li><strong>Reply:</strong> <a href="6868.php">David Gunter: "Re: [OMPI devel] Ticket #1982 - Fortran MPI_IN_PLACE issue"</a>
<li><strong>Reply:</strong> <a href="6869.php">Jeff Squyres: "Re: [OMPI devel] Ticket #1982 - Fortran MPI_IN_PLACE issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've been playing around with Jeff's &quot;bogus&quot; tarball and I, too, see  
<br>
it fail on OS X.  If I make the following changes it works perfectly:
<br>
<p>in configure.in
<br>
<p>1) replace -fno-common with -fcommon
<br>
2) add -flat_namespace as part of the arguments for creating shared  
<br>
libs.
<br>
<p>After that, things work fine:
<br>
<p>(dog_at_domdechant 63%) main
<br>
&nbsp;&nbsp;Fortran MPI_BOTTOM is          93
<br>
Assigning C variables
<br>
MPI_SEND_F: This is BOTTOM: 0x2040 == (0x6020/17, 0x6024/18,  
<br>
0x2040/19, 0x602c/20)
<br>
&nbsp;&nbsp;Fortran MPI_BOTTOM is          19
<br>
&nbsp;&nbsp;Fortran MPI_BOTTOM is          32
<br>
MPI_SEND_F: This is BOTTOM: 0x2040 == (0x6020/17, 0x6024/18,  
<br>
0x2040/32, 0x602c/20)
<br>
&nbsp;&nbsp;Fortran MPI_BOTTOM is          32
<br>
<p>I still don't see what the problem is for the two different versions  
<br>
of OMPI are.
<br>
<p>OSX 10.5.8, GCC 4.4.1, most recent libtool, autoconf, automake and m4.
<br>
<p>-david
<br>
<pre>
--
David Gunter
HPC-3: Parallel Tools Team
Los Alamos National Laboratory
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6868.php">David Gunter: "Re: [OMPI devel] Ticket #1982 - Fortran MPI_IN_PLACE issue"</a>
<li><strong>Previous message:</strong> <a href="6866.php">Pallab Datta: "[OMPI devel] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6868.php">David Gunter: "Re: [OMPI devel] Ticket #1982 - Fortran MPI_IN_PLACE issue"</a>
<li><strong>Reply:</strong> <a href="6868.php">David Gunter: "Re: [OMPI devel] Ticket #1982 - Fortran MPI_IN_PLACE issue"</a>
<li><strong>Reply:</strong> <a href="6869.php">Jeff Squyres: "Re: [OMPI devel] Ticket #1982 - Fortran MPI_IN_PLACE issue"</a>
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
