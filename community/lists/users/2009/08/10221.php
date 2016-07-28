<?
$subject_val = "Re: [OMPI users] strange IMB runs";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug  6 09:31:00 2009" -->
<!-- isoreceived="20090806133100" -->
<!-- sent="Thu, 6 Aug 2009 09:30:54 -0400" -->
<!-- isosent="20090806133054" -->
<!-- name="Michael Di Domenico" -->
<!-- email="mdidomenico4_at_[hidden]" -->
<!-- subject="Re: [OMPI users] strange IMB runs" -->
<!-- id="e75d22a90908060630i22bfa64by81ef51208bde1840_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4A7302BF.8030606_at_cs.uh.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] strange IMB runs<br>
<strong>From:</strong> Michael Di Domenico (<em>mdidomenico4_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-06 09:30:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10222.php">Prasadcse Perera: "Re: [OMPI users] Parallel Quicksort"</a>
<li><strong>Previous message:</strong> <a href="10220.php">Torgny Faxen: "Re: [OMPI users] Performance difference on OpenMPI, IntelMPI and ScaliMPI"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/07/10156.php">Edgar Gabriel: "Re: [OMPI users] strange IMB runs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10324.php">Michael Di Domenico: "Re: [OMPI users] strange IMB runs"</a>
<li><strong>Reply:</strong> <a href="10324.php">Michael Di Domenico: "Re: [OMPI users] strange IMB runs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here's an interesting data point.  I installed the RHEL rpm version of
<br>
OpenMPI 1.2.7-6 for ia64
<br>
<p>mpirun -np 2 -mca btl self,sm -mca mpi_paffinity_alone 1 -mca
<br>
mpi_leave_pinned 1 $PWD/IMB-MPI1 pingpong
<br>
<p>With v1.3 and -mca btl self,sm i get ~150MB/sec
<br>
With v1.3 and -mca btl self,tcp i get ~550MB/sec
<br>
<p>With v1.2.7-6 and -mca btl self,sm i get ~225MB/sec
<br>
With v1.2.7-6 and -mca btl self,tcp i get ~650MB/sec
<br>
<p><p>On Fri, Jul 31, 2009 at 10:42 AM, Edgar Gabriel&lt;gabriel_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Michael Di Domenico wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpi_leave_pinned didn't help still at ~145MB/sec
</span><br>
<span class="quotelev2">&gt;&gt; btl_sm_eager_limit from 4096 to 8192 pushes me upto ~212MB/sec, but
</span><br>
<span class="quotelev2">&gt;&gt; pushing it past that doesn't change it anymore
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Are there any intelligent programs that can go through and test all
</span><br>
<span class="quotelev2">&gt;&gt; the different permutations of tunables for openmpi?  Outside of me
</span><br>
<span class="quotelev2">&gt;&gt; just writing an ugly looping script...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; actually there is,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://svn.open-mpi.org/svn/otpo/trunk/">http://svn.open-mpi.org/svn/otpo/trunk/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; this tool has been used to tune openib parameter, and I would guess that it
</span><br>
<span class="quotelev1">&gt; could be used without any modification to also run netpipe over sm...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Edgar
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Jul 29, 2009 at 1:55 PM, Dorian Krause&lt;doriankrause_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --mca mpi_leave_pinned 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; might help. Take a look at the FAQ for various tuning parameters.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Michael Di Domenico wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm not sure I understand what's actually happened here.  I'm running
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; IMB on an HP superdome, just comparing the PingPong benchmark
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; HP-MPI v2.3
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Max ~ 700-800MB/sec
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OpenMPI v1.3
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -mca btl self,sm - Max ~ 125-150MB/sec
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -mca btl self,tcp - Max ~ 500-550MB/sec
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Is this behavior expected?  Are there any tunables to get the OpenMPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; sockets up near HP-MPI?
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10222.php">Prasadcse Perera: "Re: [OMPI users] Parallel Quicksort"</a>
<li><strong>Previous message:</strong> <a href="10220.php">Torgny Faxen: "Re: [OMPI users] Performance difference on OpenMPI, IntelMPI and ScaliMPI"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/07/10156.php">Edgar Gabriel: "Re: [OMPI users] strange IMB runs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10324.php">Michael Di Domenico: "Re: [OMPI users] strange IMB runs"</a>
<li><strong>Reply:</strong> <a href="10324.php">Michael Di Domenico: "Re: [OMPI users] strange IMB runs"</a>
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
