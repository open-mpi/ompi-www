<?
$subject_val = "Re: [OMPI users] strange IMB runs";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 13 01:50:56 2009" -->
<!-- isoreceived="20090813055056" -->
<!-- sent="Wed, 12 Aug 2009 22:51:33 -0700" -->
<!-- isosent="20090813055133" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] strange IMB runs" -->
<!-- id="4A83A9E5.6010501_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="e75d22a90907291041i1f092711p88bcafd6c30dc8ca_at_mail.gmail.com" -->
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
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-13 01:51:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10346.php">Lenny Verkhovsky: "Re: [OMPI users] OpenMPI 1.3 Infiniband Hang"</a>
<li><strong>Previous message:</strong> <a href="10344.php">David Singleton: "[OMPI users] PBS tm error returns"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/07/10128.php">Michael Di Domenico: "[OMPI users] strange IMB runs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10347.php">Ralph Castain: "Re: [OMPI users] strange IMB runs"</a>
<li><strong>Reply:</strong> <a href="10347.php">Ralph Castain: "Re: [OMPI users] strange IMB runs"</a>
<li><strong>Reply:</strong> <a href="10350.php">Michael Di Domenico: "Re: [OMPI users] strange IMB runs"</a>
<li><strong>Reply:</strong> <a href="10362.php">Michael Di Domenico: "Re: [OMPI users] strange IMB runs"</a>
<li><strong>Reply:</strong> <a href="10363.php">Michael Di Domenico: "Re: [OMPI users] strange IMB runs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I was away on vacation for two weeks and therefore missed most of this 
<br>
thread, but I'm quite interested.
<br>
<p>Michael Di Domenico wrote:
<br>
<p><span class="quotelev1"> &gt;I'm not sure I understand what's actually happened here.  I'm running
</span><br>
<span class="quotelev1"> &gt;IMB on an HP superdome, just comparing the PingPong benchmark
</span><br>
<span class="quotelev1"> &gt;
</span><br>
<span class="quotelev1"> &gt;HP-MPI v2.3
</span><br>
<span class="quotelev1"> &gt;Max ~ 700-800MB/sec
</span><br>
<span class="quotelev1"> &gt;
</span><br>
<span class="quotelev1"> &gt;OpenMPI v1.3
</span><br>
<span class="quotelev1"> &gt;-mca btl self,sm - Max ~ 125-150MB/sec
</span><br>
<span class="quotelev1"> &gt;-mca btl self,tcp - Max ~ 500-550MB/sec
</span><br>
<span class="quotelev1"> &gt;
</span><br>
<span class="quotelev1"> &gt;Is this behavior expected?  Are there any tunables to get the OpenMPI
</span><br>
<span class="quotelev1"> &gt;sockets up near HP-MPI?
</span><br>
<p>First, I want to understand the configuration.  It's just a single 
<br>
node.  No interconnect (InfiniBand or Ethernet or anything).  Right?
<br>
<p>If so, without knowing too much about the Superdome, I assume the only 
<br>
puzzle here is why the Open MPI sm bandwidth is so low.  The other stuff 
<br>
(like HP results or OMPI tcp results) are fine so far as I know.
<br>
<p>Specifically, I tried some on-node bandwidth tests on another system 
<br>
comparing sm and tcp, and tcp is about 1.4x slower than sm.  I think 
<br>
this is consistent with expectations and makes the OMPI tcp performance 
<br>
roughly consistent with the HP MPI performance.
<br>
<p>So, again, the single oddity here appears to be the very slow OMPI sm 
<br>
bandwidth.
<br>
<p>George Bosilca wrote:
<br>
<span class="quotelev1"> &gt;
</span><br>
<span class="quotelev1"> &gt;The leave pinned will not help in this context.
</span><br>
<p>Michael Di Domenico wrote:
<br>
<span class="quotelev1"> &gt;
</span><br>
<span class="quotelev1"> &gt;mpi_leave_pinned didn't help still at ~145MB/sec
</span><br>
<p>Right.  The &quot;leave pinned&quot; variable should be irrelevent, both for TCP 
<br>
(which isn't the issue here) and for sm (which is disturbingly low).
<br>
<p>Michael Di Domenico wrote:
<br>
<p><span class="quotelev1"> &gt;On Thu, Jul 30, 2009 at 10:08 AM, George Bosilca&lt;bosilca_at_[hidden]&gt; 
</span><br>
wrote:
<br>
<span class="quotelev2"> &gt;&gt;
</span><br>
<span class="quotelev2"> &gt;&gt;The Open MPI version is something you compiled or it came installed 
</span><br>
with the
<br>
<span class="quotelev2"> &gt;&gt;OS? If you compiled it can you please provide us the configure line?
</span><br>
<span class="quotelev1"> &gt;
</span><br>
<span class="quotelev1"> &gt;OpenMPI was compiled from source v1.3 with only a --prefix line, no
</span><br>
<span class="quotelev1"> &gt;other options.
</span><br>
<p>I think a configure line with only --prefix is okay, but for performance 
<br>
you probably need compiler optimization flags set one way or the other.  
<br>
One way is with environment variables.  E.g., for csh shell and GCC 
<br>
compilers, maybe something like:
<br>
<p>setenv CFLAGS      &quot;-O -m64 -g&quot;
<br>
setenv CXXFLAGS    &quot;-O -m64 -g&quot;
<br>
setenv FFLAGS      &quot;-O -m64 -g&quot;
<br>
setenv FCFLAGS     &quot;-O -m64 -g&quot;
<br>
<p>or whatever.
<br>
<p>That said, I just tried building OMPI with and without optimization, and 
<br>
the on-node bandwidth seems basically unaffected.  I suppose that is 
<br>
perhaps no surprise since the data movement will basically just be 
<br>
driven by memcpy calls anyhow.
<br>
<p>Michael Di Domenico wrote:
<br>
<span class="quotelev1"> &gt;
</span><br>
<span class="quotelev1"> &gt;Here's an interesting data point.  I installed the RHEL rpm version of
</span><br>
<span class="quotelev1"> &gt;OpenMPI 1.2.7-6 for ia64
</span><br>
<span class="quotelev1"> &gt;
</span><br>
<span class="quotelev1"> &gt;mpirun -np 2 -mca btl self,sm -mca mpi_paffinity_alone 1 -mca
</span><br>
<span class="quotelev1"> &gt;mpi_leave_pinned 1 $PWD/IMB-MPI1 pingpong
</span><br>
<span class="quotelev1"> &gt;
</span><br>
<span class="quotelev1"> &gt;With v1.3 and -mca btl self,sm i get ~150MB/sec
</span><br>
<span class="quotelev1"> &gt;With v1.3 and -mca btl self,tcp i get ~550MB/sec
</span><br>
<span class="quotelev1"> &gt;
</span><br>
<span class="quotelev1"> &gt;With v1.2.7-6 and -mca btl self,sm i get ~225MB/sec
</span><br>
<span class="quotelev1"> &gt;With v1.2.7-6 and -mca btl self,tcp i get ~650MB/sec
</span><br>
<p>Michael Di Domenico wrote:
<br>
<span class="quotelev1"> &gt;
</span><br>
<span class="quotelev1"> &gt;So pushing this along a little more
</span><br>
<span class="quotelev1"> &gt;
</span><br>
<span class="quotelev1"> &gt;running with openmpi-1.3 svn rev 20295
</span><br>
<span class="quotelev1"> &gt;
</span><br>
<span class="quotelev1"> &gt;mpirun -np 2
</span><br>
<span class="quotelev1"> &gt;  -mca btl sm,self
</span><br>
<span class="quotelev1"> &gt;  -mca mpi_paffinity_alone 1
</span><br>
<span class="quotelev1"> &gt;  -mca mpi_leave_pinned 1
</span><br>
<span class="quotelev1"> &gt;  -mca btl_sm_eager_limit 8192
</span><br>
<span class="quotelev1"> &gt;$PWD/IMB-MPI1 pingpong
</span><br>
<span class="quotelev1"> &gt;
</span><br>
<span class="quotelev1"> &gt;Yields ~390MB/sec
</span><br>
<span class="quotelev1"> &gt;
</span><br>
<span class="quotelev1"> &gt;So we're getting there, but still only about half speed
</span><br>
<p>One of the differences among MPI implementations is the default 
<br>
placement of processes within the node.  E.g., should processes by 
<br>
default be collocated on cores of the same socket or on cores of 
<br>
different sockets?  I don't know if that issue is applicable here (that 
<br>
is, HP MPI vs Open MPI or on Superdome architecture), but it's 
<br>
potentially an issue to look at.  With HP MPI, mpirun has a -cpu_bind 
<br>
switch for controlling placement.  With Open MPI, mpirun controls 
<br>
placement with -rankfile.
<br>
<p>E.g., what happens if you try
<br>
<p>% cat rf1
<br>
rank 0=XX  slot=0
<br>
rank 1=XX  slot=1
<br>
% cat rf2
<br>
rank 0=XX  slot=0
<br>
rank 1=XX  slot=2
<br>
% cat rf3
<br>
rank 0=XX  slot=0
<br>
rank 1=XX  slot=3
<br>
[...etc...]
<br>
% mpirun -np 2 --mca btl self,sm --host XX,XX -rf rf1 $PWD/IMB-MPI1 pingpong
<br>
% mpirun -np 2 --mca btl self,sm --host XX,XX -rf rf2 $PWD/IMB-MPI1 pingpong
<br>
% mpirun -np 2 --mca btl self,sm --host XX,XX -rf rf3 $PWD/IMB-MPI1 pingpong
<br>
[...etc...]
<br>
<p>where XX is the name of your node and you march through all the cores on 
<br>
your Superdome node?
<br>
<p>Also, I'm puzzled why you should see better results by changing 
<br>
btl_sm_eager_limit.  That shouldn't change long-message bandwidth, but 
<br>
only the message size at which one transitions from short to long 
<br>
messages.  If anything, tweaking btl_sm_max_send_size would be the 
<br>
variable to try.
<br>
<p>Final note:  Notice the space in &quot;Open MPI&quot;.  Some legal thing.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10346.php">Lenny Verkhovsky: "Re: [OMPI users] OpenMPI 1.3 Infiniband Hang"</a>
<li><strong>Previous message:</strong> <a href="10344.php">David Singleton: "[OMPI users] PBS tm error returns"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/07/10128.php">Michael Di Domenico: "[OMPI users] strange IMB runs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10347.php">Ralph Castain: "Re: [OMPI users] strange IMB runs"</a>
<li><strong>Reply:</strong> <a href="10347.php">Ralph Castain: "Re: [OMPI users] strange IMB runs"</a>
<li><strong>Reply:</strong> <a href="10350.php">Michael Di Domenico: "Re: [OMPI users] strange IMB runs"</a>
<li><strong>Reply:</strong> <a href="10362.php">Michael Di Domenico: "Re: [OMPI users] strange IMB runs"</a>
<li><strong>Reply:</strong> <a href="10363.php">Michael Di Domenico: "Re: [OMPI users] strange IMB runs"</a>
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
