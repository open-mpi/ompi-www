<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May 31 00:51:41 2006" -->
<!-- isoreceived="20060531045141" -->
<!-- sent="Tue, 30 May 2006 22:51:15 -0600" -->
<!-- isosent="20060531045115" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi-1.1a7  on solaris10 opteron" -->
<!-- id="2267F4F8-5238-4327-818D-64487EC166D9_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="447ADF31.1020107_at_obs.ujf-grenoble.fr" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-31 00:51:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1334.php">imran shaik: "Re: [OMPI users] Few more questions"</a>
<li><strong>Previous message:</strong> <a href="1332.php">Brian Barrett: "Re: [OMPI users] Thread Safety"</a>
<li><strong>In reply to:</strong> <a href="1322.php">Francoise Roch: "[OMPI users] openmpi-1.1a7  on solaris10 opteron"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 29, 2006, at 5:46 AM, Francoise Roch wrote:
<br>
<p><span class="quotelev1">&gt; I still have a problem to select an interface with openmpi-1.1a7 on
</span><br>
<span class="quotelev1">&gt; solaris opteron.
</span><br>
<span class="quotelev1">&gt; I compile in 64 bit mode, with Studio11 compilers
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I attempted to force interface exclusion without success.
</span><br>
<span class="quotelev1">&gt; This problem is critical for us because we'll soon have Infiniband
</span><br>
<span class="quotelev1">&gt; interfaces for mpi traffic.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; roch_at_n15 ~/MPI &gt; mpirun --mca btl_tcp_if_exclude bge1 -np 2 -host
</span><br>
<span class="quotelev1">&gt; p15,p27 all2all
</span><br>
<span class="quotelev1">&gt; Process 0 is alive on n15
</span><br>
<span class="quotelev1">&gt; Process 1 is alive on n27
</span><br>
<span class="quotelev1">&gt; [n27:05110] *** An error occurred in MPI_Barrier
</span><br>
<span class="quotelev1">&gt; [n27:05110] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [n27:05110] *** MPI_ERR_INTERN: internal error
</span><br>
<span class="quotelev1">&gt; [n27:05110] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; 1 process killed (possibly by Open MPI)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The code works without mca btl_tcp_if_exclude option.
</span><br>
<p>It took me a while to realize what is going on.  Normally,  
<br>
btl_tcp_if_exclude excludes the lo devices so that they won't be used  
<br>
for the btl transport. When you explicitly set btl_tcp_if_exclude,  
<br>
you have to include lo0 (for Solaris) in the list or things go down  
<br>
hill. I can replicate Fran&#231;oise's problem on his cluster. However, if  
<br>
I instead do:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun --mca btl_tcp_if_exclude bge0,lo0 -np 2 --host n15,n27 ./ 
<br>
ring
<br>
<p>the routing issues are resolved and everything runs to completion.
<br>
<p>I'll make sure to update the documentation for 1.1 so that this  
<br>
hopefully doesn't confuse too many more people.
<br>
<p><p><p>Brian
<br>
<p><p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1334.php">imran shaik: "Re: [OMPI users] Few more questions"</a>
<li><strong>Previous message:</strong> <a href="1332.php">Brian Barrett: "Re: [OMPI users] Thread Safety"</a>
<li><strong>In reply to:</strong> <a href="1322.php">Francoise Roch: "[OMPI users] openmpi-1.1a7  on solaris10 opteron"</a>
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
