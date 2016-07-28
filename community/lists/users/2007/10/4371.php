<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 31 18:11:43 2007" -->
<!-- isoreceived="20071031221143" -->
<!-- sent="Wed, 31 Oct 2007 17:11:39 -0500" -->
<!-- isosent="20071031221139" -->
<!-- name="Jon Mason" -->
<!-- email="jon_at_[hidden]" -->
<!-- subject="[OMPI users] mpirun udapl problem" -->
<!-- id="20071031221139.GB28931_at_opengridcomputing.com" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Jon Mason (<em>jon_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-31 18:11:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4372.php">Tim Prins: "Re: [OMPI users] mpirun udapl problem"</a>
<li><strong>Previous message:</strong> <a href="4370.php">Oleg Morajko: "Re: [OMPI users] How to construct a datatype over two different arrays?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4372.php">Tim Prins: "Re: [OMPI users] mpirun udapl problem"</a>
<li><strong>Reply:</strong> <a href="4372.php">Tim Prins: "Re: [OMPI users] mpirun udapl problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am having a bit of a problem getting udapl to work via mpirun (over
<br>
open-mpi, obviously).  I am running a basic pingpong test and I get the
<br>
following error.
<br>
<p># mpirun --n 2 --host vic12-10g,vic20-10g -mca btl udapl,self /usr/mpi/gcc/open*/tests/IMB*/IMB-MPI1 pingpong
<br>
--------------------------------------------------------------------------
<br>
Process 0.1.1 is unable to reach 0.1.0 for MPI communication.
<br>
If you specified the use of a BTL component, you may have
<br>
forgotten a component (such as &quot;self&quot;) in the list of
<br>
usable components.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
It looks like MPI_INIT failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during MPI_INIT; some of which are due to configuration or
<br>
environment
<br>
problems.  This failure appears to be an internal failure; here's some
<br>
additional information (which may only be relevant to an Open MPI
<br>
developer):
<br>
<p>&nbsp;&nbsp;PML add procs failed
<br>
&nbsp;&nbsp;--&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
--------------------------------------------------------------------------
<br>
Process 0.1.0 is unable to reach 0.1.1 for MPI communication.
<br>
If you specified the use of a BTL component, you may have
<br>
forgotten a component (such as &quot;self&quot;) in the list of
<br>
usable components.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
It looks like MPI_INIT failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during MPI_INIT; some of which are due to configuration or
<br>
environment
<br>
problems.  This failure appears to be an internal failure; here's some
<br>
additional information (which may only be relevant to an Open MPI
<br>
developer):
<br>
<p>&nbsp;&nbsp;PML add procs failed
<br>
&nbsp;&nbsp;--&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
<p><p><p>The command is successful if udapl is replaced with tcp or openib.  So I
<br>
think my setup is correct.  Also, dapltest successfully completes
<br>
without any problems over IB or iWARP.
<br>
<p>Any thoughts or suggestions would be greatly appreciated.
<br>
<p>Thanks,
<br>
Jon
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4372.php">Tim Prins: "Re: [OMPI users] mpirun udapl problem"</a>
<li><strong>Previous message:</strong> <a href="4370.php">Oleg Morajko: "Re: [OMPI users] How to construct a datatype over two different arrays?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4372.php">Tim Prins: "Re: [OMPI users] mpirun udapl problem"</a>
<li><strong>Reply:</strong> <a href="4372.php">Tim Prins: "Re: [OMPI users] mpirun udapl problem"</a>
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
