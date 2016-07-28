<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar 23 00:22:28 2007" -->
<!-- isoreceived="20070323042228" -->
<!-- sent="Thu, 22 Mar 2007 21:22:50 -0700" -->
<!-- isosent="20070323042250" -->
<!-- name="Curtis Janssen" -->
<!-- email="cljanss_at_[hidden]" -->
<!-- subject="[OMPI users] has anybody used the Intel Thread Checker w/OpenMPI?" -->
<!-- id="4603561A.90601_at_sandia.gov" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Curtis Janssen (<em>cljanss_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-23 00:22:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2895.php">Jeffrey Stephen: "[OMPI users] error in MPI_Waitall"</a>
<li><strong>Previous message:</strong> <a href="2893.php">Tim Prins: "Re: [OMPI users] hostfile syntax"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2896.php">Rainer Keller: "Re: [OMPI users] has anybody used the Intel Thread Checker w/OpenMPI?"</a>
<li><strong>Reply:</strong> <a href="2896.php">Rainer Keller: "Re: [OMPI users] has anybody used the Intel Thread Checker w/OpenMPI?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm interested in getting OpenMPI working with a multi-threaded
<br>
application (MPI_THREAD_MULTIPLE is required).  I'm trying the trunk
<br>
from a couple weeks ago (1.3a1r14001) compiled for multi-threading and
<br>
threaded progress, and have had success with some small cases.  Larger
<br>
cases with the same algorithms fail (they work with MPICH2 1.0.5/TCP and
<br>
other thread-safe MPIs, so I don't think it is an application bug).  I
<br>
don't mind doing a little work to track down the problem, so I'm trying
<br>
to use the Intel Thread Checker.  I have the thread checker working with
<br>
my application when using Intel's MPI, but with OpenMPI it hangs.
<br>
OpenMPI is compiled for OFED 1.1, but I'm overriding communications with
<br>
&quot;-gmca btl self,tcp&quot; in the hope that OpenMPI won't do anything funky
<br>
that would cause the thread checker problems (like RMDA or writes from
<br>
other processes into shared memory segments).  Has anybody used the
<br>
Intel Thread Checker with OpenMPI successfully?
<br>
<p>Thanks,
<br>
Curt
<br>
<pre>
-- 
Curtis Janssen, cljanss_at_[hidden], +1 925-294-1509
Sandia National Labs, MS 9158, PO Box 969, Livermore, CA 94551, USA
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2895.php">Jeffrey Stephen: "[OMPI users] error in MPI_Waitall"</a>
<li><strong>Previous message:</strong> <a href="2893.php">Tim Prins: "Re: [OMPI users] hostfile syntax"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2896.php">Rainer Keller: "Re: [OMPI users] has anybody used the Intel Thread Checker w/OpenMPI?"</a>
<li><strong>Reply:</strong> <a href="2896.php">Rainer Keller: "Re: [OMPI users] has anybody used the Intel Thread Checker w/OpenMPI?"</a>
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
