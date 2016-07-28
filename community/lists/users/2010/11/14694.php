<?
$subject_val = "[OMPI users] OpenMPI checkpoint/restart";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  4 05:40:22 2010" -->
<!-- isoreceived="20101104094022" -->
<!-- sent="Thu, 4 Nov 2010 15:09:58 +0530" -->
<!-- isosent="20101104093958" -->
<!-- name="Sai Sudheesh" -->
<!-- email="saisudheesh_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI checkpoint/restart" -->
<!-- id="AANLkTimGcPZjy_OG2VC0hqH7PFwq4h5Ms6AqkMxksfc0_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI checkpoint/restart<br>
<strong>From:</strong> Sai Sudheesh (<em>saisudheesh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-04 05:39:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14695.php">Ondrej Marsalek: "[OMPI users] Infiniband error"</a>
<li><strong>Previous message:</strong> <a href="14693.php">Prentice Bisbal: "Re: [OMPI users] open MPI please recommend a debugger for open MPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi All,
<br>
<p><p>I am experimenting with the  openMPI checkpoint and restart mechanism.
<br>
I have installed blcr-0.8.2 in /usr directory of Redhat linux system,RHEL 5
<br>
(2.6..18-164.el5).
<br>
I have unpacked openmpi-1.4.2 to /usr and installed.
<br>
<p>while configuring openMPI I used the following commands
<br>
#./configure --with-blcr=cr --enable-ft-thread --enable-mpi-threads
<br>
--with-blcr=/usr/local --with-blcr-libdir=/usr/local/lib
<br>
#make
<br>
#make install
<br>
<p>after this i tried to run my application
<br>
using
<br>
#mpirun -np 4 -am ft-enable-cr a.out
<br>
<p>then I got the following error
<br>
---------------------------------------------------------------------
<br>
It lools like MPI_INIT failed for some reason; your parallel process is
<br>
likely to abort. There are many
<br>
reasons that a parallel process can fail during MPI_INIT; some of due to
<br>
configuration or
<br>
environment problems. This failure appears to be internal failure; here is
<br>
some additionan information(which may only relevant to an openMPI
<br>
developer);
<br>
<p>&nbsp;ompi-mpi_ini:orte_init failed
<br>
--&gt;Returned &quot;Error&quot; (-1) instead of &quot;Success&quot;(0)
<br>
[localhost.localdomain:28655][[INVALID,INVALID] ORTE_ERROR_LOG:Errorin file
<br>
runtime/orte_init.c at line 77
<br>
<p>***The MPI-Init() function was called before MPI_INIT was invoked.
<br>
***This is disallowed by MPI standard.
<br>
***Your MPI job will now abort
<br>
[localhost.localdomain]Abort before MPI_INIT completed successfully; not
<br>
able to guarantee that all other process are killed!
<br>
<p>-------------------------------------------------------------------------
<br>
<p>section 1 of the error mesage was repeated many times..
<br>
<p>What may went wrong with this?
<br>
How can I resolve this?
<br>
<p><p><p>regards
<br>
sai sudheesh
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14694/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14695.php">Ondrej Marsalek: "[OMPI users] Infiniband error"</a>
<li><strong>Previous message:</strong> <a href="14693.php">Prentice Bisbal: "Re: [OMPI users] open MPI please recommend a debugger for open MPI"</a>
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
