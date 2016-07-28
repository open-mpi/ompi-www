<?
$subject_val = "Re: [OMPI users] [EXTERNAL] MPI_THREAD_SINGLE vs. MPI_THREAD_FUNNELED";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 23 13:04:39 2013" -->
<!-- isoreceived="20131023170439" -->
<!-- sent="Wed, 23 Oct 2013 17:02:02 +0000" -->
<!-- isosent="20131023170202" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [EXTERNAL] MPI_THREAD_SINGLE vs. MPI_THREAD_FUNNELED" -->
<!-- id="CE8D5C2A.14675%bwbarre_at_sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAMJ-YiQ1LZoHkZSeNit1dbkcdGLXNbsJjknF2-JVRe=ynNV_vg_at_mail.gmail.com" -->
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
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-23 13:02:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22823.php">Mike Dubman: "Re: [OMPI users] Get your Open MPI schwag!"</a>
<li><strong>Previous message:</strong> <a href="22821.php">Jai Dayal: "[OMPI users] MPI_THREAD_SINGLE vs. MPI_THREAD_FUNNELED"</a>
<li><strong>In reply to:</strong> <a href="22821.php">Jai Dayal: "[OMPI users] MPI_THREAD_SINGLE vs. MPI_THREAD_FUNNELED"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22825.php">Jeff Hammond: "Re: [OMPI users] [EXTERNAL] MPI_THREAD_SINGLE vs. MPI_THREAD_FUNNELED"</a>
<li><strong>Reply:</strong> <a href="22825.php">Jeff Hammond: "Re: [OMPI users] [EXTERNAL] MPI_THREAD_SINGLE vs. MPI_THREAD_FUNNELED"</a>
<li><strong>Reply:</strong> <a href="22829.php">Tim Prince: "Re: [OMPI users] [EXTERNAL] MPI_THREAD_SINGLE vs. MPI_THREAD_FUNNELED"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 10/22/13 10:23 AM, &quot;Jai Dayal&quot; &lt;dayalsoap_at_[hidden]&lt;mailto:dayalsoap_at_[hidden]&gt;&gt; wrote:
<br>
<p>I, for the life of me, can't understand the difference between these two init_thread modes.
<br>
<p>MPI_THREAD_SINGLE states that &quot;only one thread will execute&quot;, but MPI_THREAD_FUNNELED states &quot;The process may be multi-threaded, but only the main thread will make MPI calls (all MPI calls are funneled to the main thread).&quot;
<br>
<p>If I use MPI_THREAD_SINGLE, and just create a bunch of pthreads that dumbly loop in the background, the MPI library will have no way of detecting this, nor should this have any affects on the machine.
<br>
<p>This is exactly the same as MPI_THREAD_FUNNELED. What exactly does it mean with &quot;only one thread will execute?&quot; The openmpi library has absolutely zero way of knowng I've spawned other pthreads, and since these pthreads aren't actually doing MPI communication, I fail to see how this would interfere.
<br>
<p>Technically, if you call MPI_INIT_THREAD with MPI_THREAD_SINGLE, you have made a promise that you will not create any other threads in your application.  There was a time where OSes shipped threaded and non-threaded malloc, for example, so knowing that might be important for that last bit of performance.  There are also some obscure corner cases of the memory model of some architectures where you might get unexpected results if you made an MPI Receive call in an thread and accessed that buffer later from another thread, which may require memory barriers inside the implementation, so there could be some differences between SINGLE and FUNNELED due to those barriers.
<br>
<p>In Open MPI, we'll handle those corner cases whether you init for SINGLE or FUNNELED, so there's really no practical difference for Open MPI, but you're then slightly less portable.
<br>
<p>I'm asking because I'm using an open_mpi build ontop of infiniband, and the maximum thread mode is MPI_THREAD_SINGLE.
<br>
<p>That doesn't seem right; which version of Open MPI are you using?
<br>
<p>Brian
<br>
<p><p><pre>
--
  Brian W. Barrett
  Scalable System Software Group
  Sandia National Laboratories
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22822/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22823.php">Mike Dubman: "Re: [OMPI users] Get your Open MPI schwag!"</a>
<li><strong>Previous message:</strong> <a href="22821.php">Jai Dayal: "[OMPI users] MPI_THREAD_SINGLE vs. MPI_THREAD_FUNNELED"</a>
<li><strong>In reply to:</strong> <a href="22821.php">Jai Dayal: "[OMPI users] MPI_THREAD_SINGLE vs. MPI_THREAD_FUNNELED"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22825.php">Jeff Hammond: "Re: [OMPI users] [EXTERNAL] MPI_THREAD_SINGLE vs. MPI_THREAD_FUNNELED"</a>
<li><strong>Reply:</strong> <a href="22825.php">Jeff Hammond: "Re: [OMPI users] [EXTERNAL] MPI_THREAD_SINGLE vs. MPI_THREAD_FUNNELED"</a>
<li><strong>Reply:</strong> <a href="22829.php">Tim Prince: "Re: [OMPI users] [EXTERNAL] MPI_THREAD_SINGLE vs. MPI_THREAD_FUNNELED"</a>
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
