<?
$subject_val = "Re: [OMPI users] [EXTERNAL] MPI_THREAD_SINGLE vs. MPI_THREAD_FUNNELED";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 23 14:18:49 2013" -->
<!-- isoreceived="20131023181849" -->
<!-- sent="Wed, 23 Oct 2013 14:18:48 -0400" -->
<!-- isosent="20131023181848" -->
<!-- name="Tim Prince" -->
<!-- email="n8tm_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [EXTERNAL] MPI_THREAD_SINGLE vs. MPI_THREAD_FUNNELED" -->
<!-- id="52681308.3020604_at_aol.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CE8D5C2A.14675%bwbarre_at_sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] [EXTERNAL] MPI_THREAD_SINGLE vs. MPI_THREAD_FUNNELED<br>
<strong>From:</strong> Tim Prince (<em>n8tm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-23 14:18:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22830.php">Jeff Hammond: "Re: [OMPI users] [EXTERNAL] MPI_THREAD_SINGLE vs. MPI_THREAD_FUNNELED"</a>
<li><strong>Previous message:</strong> <a href="22828.php">Paul Kapinos: "Re: [OMPI users] MPI_Init_thread hangs in OpenMPI 1.7.1 when using --enable-mpi-thread-multiple"</a>
<li><strong>In reply to:</strong> <a href="22822.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL] MPI_THREAD_SINGLE vs. MPI_THREAD_FUNNELED"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22830.php">Jeff Hammond: "Re: [OMPI users] [EXTERNAL] MPI_THREAD_SINGLE vs. MPI_THREAD_FUNNELED"</a>
<li><strong>Reply:</strong> <a href="22830.php">Jeff Hammond: "Re: [OMPI users] [EXTERNAL] MPI_THREAD_SINGLE vs. MPI_THREAD_FUNNELED"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 10/23/2013 01:02 PM, Barrett, Brian W wrote:
<br>
<span class="quotelev1">&gt; On 10/22/13 10:23 AM, &quot;Jai Dayal&quot; &lt;dayalsoap_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:dayalsoap_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I, for the life of me, can't understand the difference between
</span><br>
<span class="quotelev1">&gt;     these two init_thread modes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     MPI_THREAD_SINGLE states that &quot;only one thread will execute&quot;, but
</span><br>
<span class="quotelev1">&gt;     MPI_THREAD_FUNNELED states &quot;The process may be multi-threaded, but
</span><br>
<span class="quotelev1">&gt;     only the main thread will make MPI calls (all MPI calls are
</span><br>
<span class="quotelev1">&gt;     funneled to the main thread).&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     If I use MPI_THREAD_SINGLE, and just create a bunch of pthreads
</span><br>
<span class="quotelev1">&gt;     that dumbly loop in the background, the MPI library will have no
</span><br>
<span class="quotelev1">&gt;     way of detecting this, nor should this have any affects on the
</span><br>
<span class="quotelev1">&gt;     machine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     This is exactly the same as MPI_THREAD_FUNNELED. What exactly does
</span><br>
<span class="quotelev1">&gt;     it mean with &quot;only one thread will execute?&quot; The openmpi library
</span><br>
<span class="quotelev1">&gt;     has absolutely zero way of knowng I've spawned other pthreads, and
</span><br>
<span class="quotelev1">&gt;     since these pthreads aren't actually doing MPI communication, I
</span><br>
<span class="quotelev1">&gt;     fail to see how this would interfere.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Technically, if you call MPI_INIT_THREAD with MPI_THREAD_SINGLE, you 
</span><br>
<span class="quotelev1">&gt; have made a promise that you will not create any other threads in your 
</span><br>
<span class="quotelev1">&gt; application.  There was a time where OSes shipped threaded and 
</span><br>
<span class="quotelev1">&gt; non-threaded malloc, for example, so knowing that might be important 
</span><br>
<span class="quotelev1">&gt; for that last bit of performance.  There are also some obscure corner 
</span><br>
<span class="quotelev1">&gt; cases of the memory model of some architectures where you might get 
</span><br>
<span class="quotelev1">&gt; unexpected results if you made an MPI Receive call in an thread and 
</span><br>
<span class="quotelev1">&gt; accessed that buffer later from another thread, which may require 
</span><br>
<span class="quotelev1">&gt; memory barriers inside the implementation, so there could be some 
</span><br>
<span class="quotelev1">&gt; differences between SINGLE and FUNNELED due to those barriers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In Open MPI, we'll handle those corner cases whether you init for 
</span><br>
<span class="quotelev1">&gt; SINGLE or FUNNELED, so there's really no practical difference for Open 
</span><br>
<span class="quotelev1">&gt; MPI, but you're then slightly less portable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I'm asking because I'm using an open_mpi build ontop of
</span><br>
<span class="quotelev1">&gt;     infiniband, and the maximum thread mode is MPI_THREAD_SINGLE.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That doesn't seem right; which version of Open MPI are you using?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
As Brian said, you aren't likely to be running on a system like Windows 
<br>
98 where non-thread-safe libraries were preferred.  My colleagues at 
<br>
NASA insist that any properly built MPI will support MPI_THREAD_FUNNELED 
<br>
by default, even when the documentation says explicit setting in 
<br>
MPI_Init_thread() is mandatory.  The statement which I see in OpenMPI 
<br>
doc says all MPI calls must be made by the thread which calls 
<br>
MPI_Init_thread.  Apparently it will work if plain MPI_Init is used 
<br>
instead.  This theory appears to hold up for all the MPI implementations 
<br>
of interest.  The additional threads referred to are &quot;inside the MPI 
<br>
rank,&quot; although I suppose additional application threads not involved 
<br>
with MPI are possible.
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22829/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22830.php">Jeff Hammond: "Re: [OMPI users] [EXTERNAL] MPI_THREAD_SINGLE vs. MPI_THREAD_FUNNELED"</a>
<li><strong>Previous message:</strong> <a href="22828.php">Paul Kapinos: "Re: [OMPI users] MPI_Init_thread hangs in OpenMPI 1.7.1 when using --enable-mpi-thread-multiple"</a>
<li><strong>In reply to:</strong> <a href="22822.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL] MPI_THREAD_SINGLE vs. MPI_THREAD_FUNNELED"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22830.php">Jeff Hammond: "Re: [OMPI users] [EXTERNAL] MPI_THREAD_SINGLE vs. MPI_THREAD_FUNNELED"</a>
<li><strong>Reply:</strong> <a href="22830.php">Jeff Hammond: "Re: [OMPI users] [EXTERNAL] MPI_THREAD_SINGLE vs. MPI_THREAD_FUNNELED"</a>
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
