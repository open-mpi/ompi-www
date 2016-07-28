<?
$subject_val = "Re: [OMPI users] strange IMB runs";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 13 07:35:21 2009" -->
<!-- isoreceived="20090813113521" -->
<!-- sent="Thu, 13 Aug 2009 05:35:02 -0600" -->
<!-- isosent="20090813113502" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] strange IMB runs" -->
<!-- id="905B5F70-8EA9-4829-ADBD-2343A31FAB5D_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A83A9E5.6010501_at_sun.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-13 07:35:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10348.php">Ralph Castain: "Re: [OMPI users] PBS tm error returns"</a>
<li><strong>Previous message:</strong> <a href="10346.php">Lenny Verkhovsky: "Re: [OMPI users] OpenMPI 1.3 Infiniband Hang"</a>
<li><strong>In reply to:</strong> <a href="10345.php">Eugene Loh: "Re: [OMPI users] strange IMB runs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10350.php">Michael Di Domenico: "Re: [OMPI users] strange IMB runs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just a couple of data points:
<br>
<p>1. so we don't confuse folks, there is no legal thing about a space in  
<br>
OpenMPI. Heck, most of us developers drop the space in our  
<br>
discussions. It was put in there to avoid confusion with OpenMP. While  
<br>
the more marketing oriented worry about it, the rest of the world  
<br>
doesn't.
<br>
<p>2. we regularly see shared memory with lower bandwidth than openib in  
<br>
our tests on 1.3. sm's latency is better, but the bandwidth is lower.  
<br>
I'll provide numbers when I get in the office, and can test against  
<br>
tcp as well at that time.
<br>
<p>Ralph
<br>
<p>On Aug 12, 2009, at 11:51 PM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; I was away on vacation for two weeks and therefore missed most of  
</span><br>
<span class="quotelev1">&gt; this thread, but I'm quite interested.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Michael Di Domenico wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;I'm not sure I understand what's actually happened here.  I'm running
</span><br>
<span class="quotelev2">&gt; &gt;IMB on an HP superdome, just comparing the PingPong benchmark
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;HP-MPI v2.3
</span><br>
<span class="quotelev2">&gt; &gt;Max ~ 700-800MB/sec
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;OpenMPI v1.3
</span><br>
<span class="quotelev2">&gt; &gt;-mca btl self,sm - Max ~ 125-150MB/sec
</span><br>
<span class="quotelev2">&gt; &gt;-mca btl self,tcp - Max ~ 500-550MB/sec
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Is this behavior expected?  Are there any tunables to get the OpenMPI
</span><br>
<span class="quotelev2">&gt; &gt;sockets up near HP-MPI?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; First, I want to understand the configuration.  It's just a single  
</span><br>
<span class="quotelev1">&gt; node.  No interconnect (InfiniBand or Ethernet or anything).  Right?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If so, without knowing too much about the Superdome, I assume the  
</span><br>
<span class="quotelev1">&gt; only puzzle here is why the Open MPI sm bandwidth is so low.  The  
</span><br>
<span class="quotelev1">&gt; other stuff (like HP results or OMPI tcp results) are fine so far as  
</span><br>
<span class="quotelev1">&gt; I know.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Specifically, I tried some on-node bandwidth tests on another system  
</span><br>
<span class="quotelev1">&gt; comparing sm and tcp, and tcp is about 1.4x slower than sm.  I think  
</span><br>
<span class="quotelev1">&gt; this is consistent with expectations and makes the OMPI tcp  
</span><br>
<span class="quotelev1">&gt; performance roughly consistent with the HP MPI performance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, again, the single oddity here appears to be the very slow OMPI  
</span><br>
<span class="quotelev1">&gt; sm bandwidth.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;The leave pinned will not help in this context.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Michael Di Domenico wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;mpi_leave_pinned didn't help still at ~145MB/sec
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Right.  The &quot;leave pinned&quot; variable should be irrelevent, both for  
</span><br>
<span class="quotelev1">&gt; TCP (which isn't the issue here) and for sm (which is disturbingly  
</span><br>
<span class="quotelev1">&gt; low).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Michael Di Domenico wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;On Thu, Jul 30, 2009 at 10:08 AM, George  
</span><br>
<span class="quotelev1">&gt; Bosilca&lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;The Open MPI version is something you compiled or it came  
</span><br>
<span class="quotelev1">&gt; installed with the
</span><br>
<span class="quotelev3">&gt; &gt;&gt;OS? If you compiled it can you please provide us the configure line?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;OpenMPI was compiled from source v1.3 with only a --prefix line, no
</span><br>
<span class="quotelev2">&gt; &gt;other options.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think a configure line with only --prefix is okay, but for  
</span><br>
<span class="quotelev1">&gt; performance you probably need compiler optimization flags set one  
</span><br>
<span class="quotelev1">&gt; way or the other.  One way is with environment variables.  E.g., for  
</span><br>
<span class="quotelev1">&gt; csh shell and GCC compilers, maybe something like:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; setenv CFLAGS      &quot;-O -m64 -g&quot;
</span><br>
<span class="quotelev1">&gt; setenv CXXFLAGS    &quot;-O -m64 -g&quot;
</span><br>
<span class="quotelev1">&gt; setenv FFLAGS      &quot;-O -m64 -g&quot;
</span><br>
<span class="quotelev1">&gt; setenv FCFLAGS     &quot;-O -m64 -g&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; or whatever.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That said, I just tried building OMPI with and without optimization,  
</span><br>
<span class="quotelev1">&gt; and the on-node bandwidth seems basically unaffected.  I suppose  
</span><br>
<span class="quotelev1">&gt; that is perhaps no surprise since the data movement will basically  
</span><br>
<span class="quotelev1">&gt; just be driven by memcpy calls anyhow.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Michael Di Domenico wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Here's an interesting data point.  I installed the RHEL rpm version  
</span><br>
<span class="quotelev1">&gt; of
</span><br>
<span class="quotelev2">&gt; &gt;OpenMPI 1.2.7-6 for ia64
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;mpirun -np 2 -mca btl self,sm -mca mpi_paffinity_alone 1 -mca
</span><br>
<span class="quotelev2">&gt; &gt;mpi_leave_pinned 1 $PWD/IMB-MPI1 pingpong
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;With v1.3 and -mca btl self,sm i get ~150MB/sec
</span><br>
<span class="quotelev2">&gt; &gt;With v1.3 and -mca btl self,tcp i get ~550MB/sec
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;With v1.2.7-6 and -mca btl self,sm i get ~225MB/sec
</span><br>
<span class="quotelev2">&gt; &gt;With v1.2.7-6 and -mca btl self,tcp i get ~650MB/sec
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Michael Di Domenico wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;So pushing this along a little more
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;running with openmpi-1.3 svn rev 20295
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;mpirun -np 2
</span><br>
<span class="quotelev2">&gt; &gt;  -mca btl sm,self
</span><br>
<span class="quotelev2">&gt; &gt;  -mca mpi_paffinity_alone 1
</span><br>
<span class="quotelev2">&gt; &gt;  -mca mpi_leave_pinned 1
</span><br>
<span class="quotelev2">&gt; &gt;  -mca btl_sm_eager_limit 8192
</span><br>
<span class="quotelev2">&gt; &gt;$PWD/IMB-MPI1 pingpong
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Yields ~390MB/sec
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;So we're getting there, but still only about half speed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; One of the differences among MPI implementations is the default  
</span><br>
<span class="quotelev1">&gt; placement of processes within the node.  E.g., should processes by  
</span><br>
<span class="quotelev1">&gt; default be collocated on cores of the same socket or on cores of  
</span><br>
<span class="quotelev1">&gt; different sockets?  I don't know if that issue is applicable here  
</span><br>
<span class="quotelev1">&gt; (that is, HP MPI vs Open MPI or on Superdome architecture), but it's  
</span><br>
<span class="quotelev1">&gt; potentially an issue to look at.  With HP MPI, mpirun has a - 
</span><br>
<span class="quotelev1">&gt; cpu_bind switch for controlling placement.  With Open MPI, mpirun  
</span><br>
<span class="quotelev1">&gt; controls placement with -rankfile.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; E.g., what happens if you try
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; % cat rf1
</span><br>
<span class="quotelev1">&gt; rank 0=XX  slot=0
</span><br>
<span class="quotelev1">&gt; rank 1=XX  slot=1
</span><br>
<span class="quotelev1">&gt; % cat rf2
</span><br>
<span class="quotelev1">&gt; rank 0=XX  slot=0
</span><br>
<span class="quotelev1">&gt; rank 1=XX  slot=2
</span><br>
<span class="quotelev1">&gt; % cat rf3
</span><br>
<span class="quotelev1">&gt; rank 0=XX  slot=0
</span><br>
<span class="quotelev1">&gt; rank 1=XX  slot=3
</span><br>
<span class="quotelev1">&gt; [...etc...]
</span><br>
<span class="quotelev1">&gt; % mpirun -np 2 --mca btl self,sm --host XX,XX -rf rf1 $PWD/IMB-MPI1  
</span><br>
<span class="quotelev1">&gt; pingpong
</span><br>
<span class="quotelev1">&gt; % mpirun -np 2 --mca btl self,sm --host XX,XX -rf rf2 $PWD/IMB-MPI1  
</span><br>
<span class="quotelev1">&gt; pingpong
</span><br>
<span class="quotelev1">&gt; % mpirun -np 2 --mca btl self,sm --host XX,XX -rf rf3 $PWD/IMB-MPI1  
</span><br>
<span class="quotelev1">&gt; pingpong
</span><br>
<span class="quotelev1">&gt; [...etc...]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; where XX is the name of your node and you march through all the  
</span><br>
<span class="quotelev1">&gt; cores on your Superdome node?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, I'm puzzled why you should see better results by changing  
</span><br>
<span class="quotelev1">&gt; btl_sm_eager_limit.  That shouldn't change long-message bandwidth,  
</span><br>
<span class="quotelev1">&gt; but only the message size at which one transitions from short to  
</span><br>
<span class="quotelev1">&gt; long messages.  If anything, tweaking btl_sm_max_send_size would be  
</span><br>
<span class="quotelev1">&gt; the variable to try.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Final note:  Notice the space in &quot;Open MPI&quot;.  Some legal thing.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10348.php">Ralph Castain: "Re: [OMPI users] PBS tm error returns"</a>
<li><strong>Previous message:</strong> <a href="10346.php">Lenny Verkhovsky: "Re: [OMPI users] OpenMPI 1.3 Infiniband Hang"</a>
<li><strong>In reply to:</strong> <a href="10345.php">Eugene Loh: "Re: [OMPI users] strange IMB runs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10350.php">Michael Di Domenico: "Re: [OMPI users] strange IMB runs"</a>
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
