<?
$subject_val = "[OMPI users] MPI_Comm_accept and MPI_Comm_connect both use 100% one cpu core. Is it a bug?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  1 21:24:20 2010" -->
<!-- isoreceived="20100902012420" -->
<!-- sent="Thu, 02 Sep 2010 09:24:01 +0800" -->
<!-- isosent="20100902012401" -->
<!-- name="lyb" -->
<!-- email="linyb79_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Comm_accept and MPI_Comm_connect both use 100% one cpu core. Is it a bug?" -->
<!-- id="4C7EFCB1.2010201_at_163.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4C63D74D.7060702_at_163.com" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Comm_accept and MPI_Comm_connect both use 100% one cpu core. Is it a bug?<br>
<strong>From:</strong> lyb (<em>linyb79_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-01 21:24:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14158.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_accept and MPI_Comm_connect both use 100% one cpu core. Is it a bug?"</a>
<li><strong>Previous message:</strong> <a href="14156.php">Jaison Mulerikkal: "Re: [OMPI users] simplest way to check message queues"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/08/13984.php">lyb: "Re: [OMPI users] How to program with openmpi under MFC?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14158.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_accept and MPI_Comm_connect both use 100% one cpu core. Is it a bug?"</a>
<li><strong>Reply:</strong> <a href="14158.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_accept and MPI_Comm_connect both use 100% one cpu core. Is it a bug?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, All,
<br>
<p>I tested two sample applications on Windows 2003 Server, one use 
<br>
MPI_Comm_accept and other use MPI_Comm_connect,
<br>
when run into MPI_Comm_accept or MPI_Comm_connect, the application use 
<br>
100% one cpu core.  Is it a bug or some wrong?
<br>
<p>I tested with three version including Version 1.4 (stable) 
<br>
&lt;<a href="http://www.open-mpi.org/software/ompi/v1.4/">http://www.open-mpi.org/software/ompi/v1.4/</a>&gt;, Version 1.5 (prerelease) 
<br>
&lt;<a href="http://www.open-mpi.org/software/ompi/v1.5/">http://www.open-mpi.org/software/ompi/v1.5/</a>&gt; and trunk 23706 version.
<br>
<p>...
<br>
MPI_Open_port(MPI_INFO_NULL, port);
<br>
MPI_Comm_accept( port, MPI_INFO_NULL, 0, MPI_COMM_WORLD, &amp;client );
<br>
...
<br>
<p>...
<br>
MPI_Comm_connect( port, MPI_INFO_NULL, 0, MPI_COMM_WORLD, &amp;server );
<br>
...
<br>
<p>thanks a lot.
<br>
<p>lyb
<br>
<p><p><p><p><p><p><p>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14157/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14158.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_accept and MPI_Comm_connect both use 100% one cpu core. Is it a bug?"</a>
<li><strong>Previous message:</strong> <a href="14156.php">Jaison Mulerikkal: "Re: [OMPI users] simplest way to check message queues"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/08/13984.php">lyb: "Re: [OMPI users] How to program with openmpi under MFC?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14158.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_accept and MPI_Comm_connect both use 100% one cpu core. Is it a bug?"</a>
<li><strong>Reply:</strong> <a href="14158.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_accept and MPI_Comm_connect both use 100% one cpu core. Is it a bug?"</a>
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
