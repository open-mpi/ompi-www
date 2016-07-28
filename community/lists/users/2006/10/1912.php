<?
$subject_val = "Re: [OMPI users] BLACS &amp; OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct  2 18:39:38 2006" -->
<!-- isoreceived="20061002223938" -->
<!-- sent="Mon, 2 Oct 2006 18:39:26 -0400" -->
<!-- isosent="20061002223926" -->
<!-- name="Michael Kluskens" -->
<!-- email="mklus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] BLACS &amp;amp; OpenMPI" -->
<!-- id="77E31973-68E8-473C-A175-CFAC32E731FF_at_ieee.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="9AF9CC77-009F-42C2-8366-F0EB0DE38B2C_at_open-mpi.org" -->
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
<strong>From:</strong> Michael Kluskens (<em>mklus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-02 18:39:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1913.php">&#197;ke Sandgren: "Re: [OMPI users] BLACS &amp; OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="1911.php">George Bosilca: "Re: [OMPI users] BLACS &amp; OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="1911.php">George Bosilca: "Re: [OMPI users] BLACS &amp; OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1913.php">&#197;ke Sandgren: "Re: [OMPI users] BLACS &amp; OpenMPI"</a>
<li><strong>Reply:</strong> <a href="1913.php">&#197;ke Sandgren: "Re: [OMPI users] BLACS &amp; OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Having trouble getting BLACS to pass tests.
<br>
<p>OpenMPI, BLACS, and blacstester built just fine.  Tester reports  
<br>
errors for integer and real cases #1 and #51 and more for the other  
<br>
types..
<br>
<p>&lt;<a href="http://svn.open-mpi.org/trac/ompi/ticket/356">http://svn.open-mpi.org/trac/ompi/ticket/356</a>&gt; is an open ticket  
<br>
related to this.
<br>
<p>Any word on the status of that or what needs to be changed in OpenMPI?
<br>
<p><p><p>I'm building BLACS 1.1 with patch 3.
<br>
<p>OS is Debian 3.1r3 for AMD64 on a dual Opteron system.
<br>
<p>Configuring the Bmake.inc file, I started from the version for MPI &amp;  
<br>
Linux, changing these items
<br>
<p>BTOPdir = /usr/local/BLACS
<br>
BLACSDBGLVL = 1
<br>
MPIDIR = /usr/local
<br>
MPILIB =
<br>
INTFACE = -DAdd_
<br>
F77 = mpif77
<br>
CC = mpicc
<br>
<p><p>Michael
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1913.php">&#197;ke Sandgren: "Re: [OMPI users] BLACS &amp; OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="1911.php">George Bosilca: "Re: [OMPI users] BLACS &amp; OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="1911.php">George Bosilca: "Re: [OMPI users] BLACS &amp; OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1913.php">&#197;ke Sandgren: "Re: [OMPI users] BLACS &amp; OpenMPI"</a>
<li><strong>Reply:</strong> <a href="1913.php">&#197;ke Sandgren: "Re: [OMPI users] BLACS &amp; OpenMPI"</a>
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
