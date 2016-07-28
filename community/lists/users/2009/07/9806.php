<?
$subject_val = "Re: [OMPI users] OpenMPI vs Intel MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  2 10:34:29 2009" -->
<!-- isoreceived="20090702143429" -->
<!-- sent="Thu, 02 Jul 2009 07:34:37 -0700" -->
<!-- isosent="20090702143437" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI vs Intel MPI" -->
<!-- id="4A4CC57D.3050500_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="OFCAA71CBC.BB5D6241-ON852575E7.004A72A0-852575E7.004BBD3C_at_us.ibm.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI vs Intel MPI<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-02 10:34:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9807.php">Eugene Loh: "Re: [OMPI users] OpenMPI vs Intel MPI"</a>
<li><strong>Previous message:</strong> <a href="9805.php">Lenny Verkhovsky: "Re: [OMPI users] OpenMPI vs Intel MPI"</a>
<li><strong>In reply to:</strong> <a href="9804.php">Swamy Kandadai: "Re: [OMPI users] OpenMPI vs Intel MPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Swamy Kandadai wrote:
<br>
<p><span class="quotelev1">&gt; Jeff:
</span><br>
<span class="quotelev1">&gt;
</span><br>
I'm not Jeff, but...
<br>
<p>Linpack has different characteristics at different problem sizes.  At 
<br>
small problem sizes, any number of different overheads could be the 
<br>
problem.  At large problem sizes, one should approach the peak 
<br>
floating-point performance of the machine and the efficiency of one's 
<br>
DGEMM (and blocking one uses, etc.) should become the issues.  So, one 
<br>
question is whether there is a difference in the overheads or whether 
<br>
the large-N performance is actually different.
<br>
<p>I recommend measuring performance for a range of matrix sizes.  The data 
<br>
should be able to tell you if there are performance differences at small 
<br>
N that disappear with sufficiently large N or if there is a performance 
<br>
difference that would persist regardless of how large one were to make N.
<br>
<p>Again, I think it's better to look at trends as a function of N rather 
<br>
than just looking at one data point.  You can get better understanding 
<br>
that way.  Plus, it's cheaper!  (Run time grows as N^3, so it's faster 
<br>
to run many small Ns than to run one or two blockbuster Ns.)
<br>
<p>Anyhow, one would think the data will indicate that large-N performance 
<br>
is independent of the MPI implementation -- so long as you use the same 
<br>
DGEMMs in both cases (and you say you're using MKL in both cases).  But 
<br>
this is an important assumption to check.
<br>
<p>If it's a matter of small-N overheads taking the edge off your big-N 
<br>
performance, then you could maybe start profiling small-N runs.
<br>
<p><span class="quotelev1">&gt; I am running on a 2.66 GHz Nehalem node. On this node, the turbo mode 
</span><br>
<span class="quotelev1">&gt; and hyperthreading are enabled.
</span><br>
<span class="quotelev1">&gt; When I run LINPACK with Intel MPI, I get 82.68 GFlops without much 
</span><br>
<span class="quotelev1">&gt; trouble.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I ran with OpenMPI (I have OpenMPI 1.2.8 but my colleague was 
</span><br>
<span class="quotelev1">&gt; using 1.3.2). I was using the same MKL libraries both with OpenMPI and
</span><br>
<span class="quotelev1">&gt; Intel MPI. But with OpenMPI, the best I got so far is 80.22 GFlops and 
</span><br>
<span class="quotelev1">&gt; I could never achieve close to what I am getting with Intel MPI.
</span><br>
<span class="quotelev1">&gt; Here are muy options with OpenMPI:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -n 8 --machinefile hf --mca rmaps_rank_file_path rankfile --mca 
</span><br>
<span class="quotelev1">&gt; coll_sm_info_num_procs 8 --mca btl self,sm -mca mpi_leave_pinned 1 
</span><br>
<span class="quotelev1">&gt; ./xhpl_ompi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is my rankfile:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; at rankfile
</span><br>
<span class="quotelev1">&gt; rank 0=i02n05 slot=0
</span><br>
<span class="quotelev1">&gt; rank 1=i02n05 slot=1
</span><br>
<span class="quotelev1">&gt; rank 2=i02n05 slot=2
</span><br>
<span class="quotelev1">&gt; rank 3=i02n05 slot=3
</span><br>
<span class="quotelev1">&gt; rank 4=i02n05 slot=4
</span><br>
<span class="quotelev1">&gt; rank 5=i02n05 slot=5
</span><br>
<span class="quotelev1">&gt; rank 6=i02n05 slot=6
</span><br>
<span class="quotelev1">&gt; rank 7=i02n05 slot=7
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In this case the physical cores are 0-7 while the additional logical 
</span><br>
<span class="quotelev1">&gt; processors with hyperthreading are 8-15.
</span><br>
<span class="quotelev1">&gt; With &quot;top&quot; command, I could see all the 8 tasks are running on 8 
</span><br>
<span class="quotelev1">&gt; different physical cores. I did not see
</span><br>
<span class="quotelev1">&gt; 2 MPI tasks running on the same physical core. Also, the program is 
</span><br>
<span class="quotelev1">&gt; not paging as the problem size
</span><br>
<span class="quotelev1">&gt; fits in the meory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you have any ideas how I can improve the performance so that it 
</span><br>
<span class="quotelev1">&gt; matches with Intel MPI performance?
</span><br>
<span class="quotelev1">&gt; Any suggestions will be greatly appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9807.php">Eugene Loh: "Re: [OMPI users] OpenMPI vs Intel MPI"</a>
<li><strong>Previous message:</strong> <a href="9805.php">Lenny Verkhovsky: "Re: [OMPI users] OpenMPI vs Intel MPI"</a>
<li><strong>In reply to:</strong> <a href="9804.php">Swamy Kandadai: "Re: [OMPI users] OpenMPI vs Intel MPI"</a>
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
