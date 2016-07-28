<?
$subject_val = "[OMPI users] Open MPI unable to find threading support for PGI or Sun Studio";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 28 12:02:54 2008" -->
<!-- isoreceived="20080728160254" -->
<!-- sent="Mon, 28 Jul 2008 17:02:47 +0100 (BST)" -->
<!-- isosent="20080728160247" -->
<!-- name="Mark Dixon" -->
<!-- email="m.c.dixon_at_[hidden]" -->
<!-- subject="[OMPI users] Open MPI unable to find threading support for PGI or Sun Studio" -->
<!-- id="alpine.GSO.1.10.0807281654540.3921_at_sunserv2" -->
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
<strong>Subject:</strong> [OMPI users] Open MPI unable to find threading support for PGI or Sun Studio<br>
<strong>From:</strong> Mark Dixon (<em>m.c.dixon_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-28 12:02:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6155.php">Mark Borgerding: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="6153.php">Brock Palen: "Re: [OMPI users] How to cease the process triggered by OPENMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6163.php">Jeff Squyres: "Re: [OMPI users] Open MPI unable to find threading support for PGI or Sun Studio"</a>
<li><strong>Reply:</strong> <a href="6163.php">Jeff Squyres: "Re: [OMPI users] Open MPI unable to find threading support for PGI or Sun Studio"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I've been attempting to build Open MPI 1.2.6 using a variety of compilers 
<br>
including, but not limited to, PGI 7.1-6 and Sun Studio 12 (200709) on a 
<br>
CentOS 5.2 32-bit Intel box.
<br>
<p>Building against either of the above compilers results in the following 
<br>
message produced by configure:
<br>
<p>************************************************************************
<br>
<p>Open MPI was unable to find threading support on your system.  In the
<br>
near future, the OMPI development team is considering requiring
<br>
threading support for proper OMPI execution.  This is in part because
<br>
we are not aware of any users that do not have thread support - so we
<br>
need you to e-mail us at ompi_at_[hidden] and let us know about this
<br>
problem.
<br>
<p>************************************************************************
<br>
<p>I don't see this when building against the Intel 10.1.015 or GNU GCC 4.1.2 
<br>
compilers. I cannot see any answer to this in the FAQ or list archives.
<br>
<p>I've attached files showing the output of configure and my environment to 
<br>
this message.
<br>
<p>Is this expected?
<br>
<p>Thanks,
<br>
<p>Mark
<br>
<pre>
-- 
-----------------------------------------------------------------
Mark Dixon                       Email    : m.c.dixon_at_[hidden]
HPC/Grid Systems Support         Tel (int): 35429
Information Systems Services     Tel (ext): +44(0)113 343 5429
University of Leeds, LS2 9JT, UK
-----------------------------------------------------------------


</pre>
<hr>
<ul>
<li>APPLICATION/OCTET-STREAM attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6154/sunstudio-build.txt.bz2">sunstudio-build.txt.bz2</a>
</ul>
<!-- attachment="sunstudio-build.txt.bz2" -->
<hr>
<ul>
<li>APPLICATION/OCTET-STREAM attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6154/pgi-build.txt.bz2">pgi-build.txt.bz2</a>
</ul>
<!-- attachment="pgi-build.txt.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6155.php">Mark Borgerding: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="6153.php">Brock Palen: "Re: [OMPI users] How to cease the process triggered by OPENMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6163.php">Jeff Squyres: "Re: [OMPI users] Open MPI unable to find threading support for PGI or Sun Studio"</a>
<li><strong>Reply:</strong> <a href="6163.php">Jeff Squyres: "Re: [OMPI users] Open MPI unable to find threading support for PGI or Sun Studio"</a>
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
