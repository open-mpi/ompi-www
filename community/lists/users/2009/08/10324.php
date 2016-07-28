<?
$subject_val = "Re: [OMPI users] strange IMB runs";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 12 11:40:53 2009" -->
<!-- isoreceived="20090812154053" -->
<!-- sent="Wed, 12 Aug 2009 11:40:48 -0400" -->
<!-- isosent="20090812154048" -->
<!-- name="Michael Di Domenico" -->
<!-- email="mdidomenico4_at_[hidden]" -->
<!-- subject="Re: [OMPI users] strange IMB runs" -->
<!-- id="e75d22a90908120840g3a489cb8s81574fb24d4ed214_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="e75d22a90908060630i22bfa64by81ef51208bde1840_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2009-08-12 11:40:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10325.php">Gus Correa: "Re: [OMPI users] PGI-9.0: -lpthread instead of -pthread"</a>
<li><strong>Previous message:</strong> <a href="10323.php">Eugene Loh: "Re: [OMPI users] Hooks for Collective's sync/transfer activity?"</a>
<li><strong>In reply to:</strong> <a href="10221.php">Michael Di Domenico: "Re: [OMPI users] strange IMB runs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10345.php">Eugene Loh: "Re: [OMPI users] strange IMB runs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
So pushing this along a little more
<br>
<p>running with openmpi-1.3 svn rev 20295
<br>
<p>mpirun -np 2
<br>
&nbsp;&nbsp;-mca btl sm,self
<br>
&nbsp;&nbsp;-mca mpi_paffinity_alone 1
<br>
&nbsp;&nbsp;-mca mpi_leave_pinned 1
<br>
&nbsp;&nbsp;-mca btl_sm_eager_limit 8192
<br>
$PWD/IMB-MPI1 pingpong
<br>
<p>Yields ~390MB/sec
<br>
<p>So we're getting there, but still only about half speed
<br>
<p><p>On Thu, Aug 6, 2009 at 9:30 AM, Michael Di
<br>
Domenico&lt;mdidomenico4_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Here's an interesting data point.  I installed the RHEL rpm version of
</span><br>
<span class="quotelev1">&gt; OpenMPI 1.2.7-6 for ia64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 -mca btl self,sm -mca mpi_paffinity_alone 1 -mca
</span><br>
<span class="quotelev1">&gt; mpi_leave_pinned 1 $PWD/IMB-MPI1 pingpong
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With v1.3 and -mca btl self,sm i get ~150MB/sec
</span><br>
<span class="quotelev1">&gt; With v1.3 and -mca btl self,tcp i get ~550MB/sec
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With v1.2.7-6 and -mca btl self,sm i get ~225MB/sec
</span><br>
<span class="quotelev1">&gt; With v1.2.7-6 and -mca btl self,tcp i get ~650MB/sec
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Jul 31, 2009 at 10:42 AM, Edgar Gabriel&lt;gabriel_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Michael Di Domenico wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpi_leave_pinned didn't help still at ~145MB/sec
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl_sm_eager_limit from 4096 to 8192 pushes me upto ~212MB/sec, but
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pushing it past that doesn't change it anymore
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Are there any intelligent programs that can go through and test all
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the different permutations of tunables for openmpi?  Outside of me
</span><br>
<span class="quotelev3">&gt;&gt;&gt; just writing an ugly looping script...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; actually there is,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://svn.open-mpi.org/svn/otpo/trunk/">http://svn.open-mpi.org/svn/otpo/trunk/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; this tool has been used to tune openib parameter, and I would guess that it
</span><br>
<span class="quotelev2">&gt;&gt; could be used without any modification to also run netpipe over sm...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Edgar
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Wed, Jul 29, 2009 at 1:55 PM, Dorian Krause&lt;doriankrause_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --mca mpi_leave_pinned 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; might help. Take a look at the FAQ for various tuning parameters.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Michael Di Domenico wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I'm not sure I understand what's actually happened here.  I'm running
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; IMB on an HP superdome, just comparing the PingPong benchmark
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; HP-MPI v2.3
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Max ~ 700-800MB/sec
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; OpenMPI v1.3
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -mca btl self,sm - Max ~ 125-150MB/sec
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -mca btl self,tcp - Max ~ 500-550MB/sec
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Is this behavior expected?  Are there any tunables to get the OpenMPI
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; sockets up near HP-MPI?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10325.php">Gus Correa: "Re: [OMPI users] PGI-9.0: -lpthread instead of -pthread"</a>
<li><strong>Previous message:</strong> <a href="10323.php">Eugene Loh: "Re: [OMPI users] Hooks for Collective's sync/transfer activity?"</a>
<li><strong>In reply to:</strong> <a href="10221.php">Michael Di Domenico: "Re: [OMPI users] strange IMB runs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10345.php">Eugene Loh: "Re: [OMPI users] strange IMB runs"</a>
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
