<?
$subject_val = "Re: [OMPI users] [EXTERNAL] MPI_THREAD_SINGLE vs. MPI_THREAD_FUNNELED";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 23 14:40:50 2013" -->
<!-- isoreceived="20131023184050" -->
<!-- sent="Wed, 23 Oct 2013 13:40:29 -0500" -->
<!-- isosent="20131023184029" -->
<!-- name="Jeff Hammond" -->
<!-- email="jeff.science_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [EXTERNAL] MPI_THREAD_SINGLE vs. MPI_THREAD_FUNNELED" -->
<!-- id="CAGKz=uKC=Efh6nVeT9vcNZpOZuQAgNMta7XgDZXaDK5308akEQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="52681308.3020604_at_aol.com" -->
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
<strong>From:</strong> Jeff Hammond (<em>jeff.science_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-23 14:40:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22831.php">Shamis, Pavel: "Re: [OMPI users] Get your Open MPI schwag!"</a>
<li><strong>Previous message:</strong> <a href="22829.php">Tim Prince: "Re: [OMPI users] [EXTERNAL] MPI_THREAD_SINGLE vs. MPI_THREAD_FUNNELED"</a>
<li><strong>In reply to:</strong> <a href="22829.php">Tim Prince: "Re: [OMPI users] [EXTERNAL] MPI_THREAD_SINGLE vs. MPI_THREAD_FUNNELED"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22848.php">Saliya Ekanayake: "Re: [OMPI users] [EXTERNAL] MPI_THREAD_SINGLE vs. MPI_THREAD_FUNNELED"</a>
<li><strong>Reply:</strong> <a href="22848.php">Saliya Ekanayake: "Re: [OMPI users] [EXTERNAL] MPI_THREAD_SINGLE vs. MPI_THREAD_FUNNELED"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
And in practice the difference between FUNNELED and SERIALIZED will be
<br>
very small.  The differences might emerge from thread-local state and
<br>
thread-specific network registration, but I don't see this being
<br>
required.  Hence, for most purposes SINGLE=FUNNELED=SERIALIZED is
<br>
equivalent to NOMUTEX and MULTIPLE is MUTEX, where MUTEX refers to the
<br>
internal mutex required to make MPI reentrant.
<br>
<p>Jeff
<br>
<p>On Wed, Oct 23, 2013 at 1:18 PM, Tim Prince &lt;n8tm_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On 10/23/2013 01:02 PM, Barrett, Brian W wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 10/22/13 10:23 AM, &quot;Jai Dayal&quot; &lt;dayalsoap_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I, for the life of me, can't understand the difference between these two
</span><br>
<span class="quotelev1">&gt; init_thread modes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_THREAD_SINGLE states that &quot;only one thread will execute&quot;, but
</span><br>
<span class="quotelev1">&gt; MPI_THREAD_FUNNELED states &quot;The process may be multi-threaded, but only the
</span><br>
<span class="quotelev1">&gt; main thread will make MPI calls (all MPI calls are funneled to the main
</span><br>
<span class="quotelev1">&gt; thread).&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I use MPI_THREAD_SINGLE, and just create a bunch of pthreads that dumbly
</span><br>
<span class="quotelev1">&gt; loop in the background, the MPI library will have no way of detecting this,
</span><br>
<span class="quotelev1">&gt; nor should this have any affects on the machine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is exactly the same as MPI_THREAD_FUNNELED. What exactly does it mean
</span><br>
<span class="quotelev1">&gt; with &quot;only one thread will execute?&quot; The openmpi library has absolutely zero
</span><br>
<span class="quotelev1">&gt; way of knowng I've spawned other pthreads, and since these pthreads aren't
</span><br>
<span class="quotelev1">&gt; actually doing MPI communication, I fail to see how this would interfere.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Technically, if you call MPI_INIT_THREAD with MPI_THREAD_SINGLE, you have
</span><br>
<span class="quotelev1">&gt; made a promise that you will not create any other threads in your
</span><br>
<span class="quotelev1">&gt; application.  There was a time where OSes shipped threaded and non-threaded
</span><br>
<span class="quotelev1">&gt; malloc, for example, so knowing that might be important for that last bit of
</span><br>
<span class="quotelev1">&gt; performance.  There are also some obscure corner cases of the memory model
</span><br>
<span class="quotelev1">&gt; of some architectures where you might get unexpected results if you made an
</span><br>
<span class="quotelev1">&gt; MPI Receive call in an thread and accessed that buffer later from another
</span><br>
<span class="quotelev1">&gt; thread, which may require memory barriers inside the implementation, so
</span><br>
<span class="quotelev1">&gt; there could be some differences between SINGLE and FUNNELED due to those
</span><br>
<span class="quotelev1">&gt; barriers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In Open MPI, we'll handle those corner cases whether you init for SINGLE or
</span><br>
<span class="quotelev1">&gt; FUNNELED, so there's really no practical difference for Open MPI, but you're
</span><br>
<span class="quotelev1">&gt; then slightly less portable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm asking because I'm using an open_mpi build ontop of infiniband, and the
</span><br>
<span class="quotelev1">&gt; maximum thread mode is MPI_THREAD_SINGLE.
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
<span class="quotelev1">&gt; As Brian said, you aren't likely to be running on a system like Windows 98
</span><br>
<span class="quotelev1">&gt; where non-thread-safe libraries were preferred.  My colleagues at NASA
</span><br>
<span class="quotelev1">&gt; insist that any properly built MPI will support MPI_THREAD_FUNNELED by
</span><br>
<span class="quotelev1">&gt; default, even when the documentation says explicit setting in
</span><br>
<span class="quotelev1">&gt; MPI_Init_thread() is mandatory.  The statement which I see in OpenMPI doc
</span><br>
<span class="quotelev1">&gt; says all MPI calls must be made by the thread which calls MPI_Init_thread.
</span><br>
<span class="quotelev1">&gt; Apparently it will work if plain MPI_Init is used instead.  This theory
</span><br>
<span class="quotelev1">&gt; appears to hold up for all the MPI implementations of interest.  The
</span><br>
<span class="quotelev1">&gt; additional threads referred to are &quot;inside the MPI rank,&quot; although I suppose
</span><br>
<span class="quotelev1">&gt; additional application threads not involved with MPI are possible.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><p><pre>
-- 
Jeff Hammond
jeff.science_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22831.php">Shamis, Pavel: "Re: [OMPI users] Get your Open MPI schwag!"</a>
<li><strong>Previous message:</strong> <a href="22829.php">Tim Prince: "Re: [OMPI users] [EXTERNAL] MPI_THREAD_SINGLE vs. MPI_THREAD_FUNNELED"</a>
<li><strong>In reply to:</strong> <a href="22829.php">Tim Prince: "Re: [OMPI users] [EXTERNAL] MPI_THREAD_SINGLE vs. MPI_THREAD_FUNNELED"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22848.php">Saliya Ekanayake: "Re: [OMPI users] [EXTERNAL] MPI_THREAD_SINGLE vs. MPI_THREAD_FUNNELED"</a>
<li><strong>Reply:</strong> <a href="22848.php">Saliya Ekanayake: "Re: [OMPI users] [EXTERNAL] MPI_THREAD_SINGLE vs. MPI_THREAD_FUNNELED"</a>
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
