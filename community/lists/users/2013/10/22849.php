<?
$subject_val = "Re: [OMPI users] [EXTERNAL] MPI_THREAD_SINGLE vs. MPI_THREAD_FUNNELED";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Oct 27 01:21:42 2013" -->
<!-- isoreceived="20131027052142" -->
<!-- sent="Sat, 26 Oct 2013 22:21:38 -0700" -->
<!-- isosent="20131027052138" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [EXTERNAL] MPI_THREAD_SINGLE vs. MPI_THREAD_FUNNELED" -->
<!-- id="E28FABCB-95CC-441D-9DF8-16EBE569F6E4_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CA+ssbKVVzQeOO7+-f=LB+9=ZSbpeLxjT8sCLdEpAyEvZqTAtWw_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-27 01:21:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22850.php">Tommi Laiho: "[OMPI users] Odd and long error with OpenMPI and OpenFOAM."</a>
<li><strong>Previous message:</strong> <a href="22848.php">Saliya Ekanayake: "Re: [OMPI users] [EXTERNAL] MPI_THREAD_SINGLE vs. MPI_THREAD_FUNNELED"</a>
<li><strong>In reply to:</strong> <a href="22848.php">Saliya Ekanayake: "Re: [OMPI users] [EXTERNAL] MPI_THREAD_SINGLE vs. MPI_THREAD_FUNNELED"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It's the same situation as with any of the bindings - we don't really support it at this time. All the bindings ultimately funnel down into the C implementation, so when that becomes fully thread safe, then so will the rest of the bindings.
<br>
<p><p>On Oct 26, 2013, at 6:39 PM, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Since this is a conversation on thread support, I have a quick related question. Is MPI_THREAD_MULTIPLE supported with OpenMPI's Java binding?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt; Saliya
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Oct 23, 2013 at 2:40 PM, Jeff Hammond &lt;jeff.science_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; And in practice the difference between FUNNELED and SERIALIZED will be
</span><br>
<span class="quotelev1">&gt; very small.  The differences might emerge from thread-local state and
</span><br>
<span class="quotelev1">&gt; thread-specific network registration, but I don't see this being
</span><br>
<span class="quotelev1">&gt; required.  Hence, for most purposes SINGLE=FUNNELED=SERIALIZED is
</span><br>
<span class="quotelev1">&gt; equivalent to NOMUTEX and MULTIPLE is MUTEX, where MUTEX refers to the
</span><br>
<span class="quotelev1">&gt; internal mutex required to make MPI reentrant.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Oct 23, 2013 at 1:18 PM, Tim Prince &lt;n8tm_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On 10/23/2013 01:02 PM, Barrett, Brian W wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 10/22/13 10:23 AM, &quot;Jai Dayal&quot; &lt;dayalsoap_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I, for the life of me, can't understand the difference between these two
</span><br>
<span class="quotelev2">&gt; &gt; init_thread modes.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; MPI_THREAD_SINGLE states that &quot;only one thread will execute&quot;, but
</span><br>
<span class="quotelev2">&gt; &gt; MPI_THREAD_FUNNELED states &quot;The process may be multi-threaded, but only the
</span><br>
<span class="quotelev2">&gt; &gt; main thread will make MPI calls (all MPI calls are funneled to the main
</span><br>
<span class="quotelev2">&gt; &gt; thread).&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If I use MPI_THREAD_SINGLE, and just create a bunch of pthreads that dumbly
</span><br>
<span class="quotelev2">&gt; &gt; loop in the background, the MPI library will have no way of detecting this,
</span><br>
<span class="quotelev2">&gt; &gt; nor should this have any affects on the machine.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This is exactly the same as MPI_THREAD_FUNNELED. What exactly does it mean
</span><br>
<span class="quotelev2">&gt; &gt; with &quot;only one thread will execute?&quot; The openmpi library has absolutely zero
</span><br>
<span class="quotelev2">&gt; &gt; way of knowng I've spawned other pthreads, and since these pthreads aren't
</span><br>
<span class="quotelev2">&gt; &gt; actually doing MPI communication, I fail to see how this would interfere.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Technically, if you call MPI_INIT_THREAD with MPI_THREAD_SINGLE, you have
</span><br>
<span class="quotelev2">&gt; &gt; made a promise that you will not create any other threads in your
</span><br>
<span class="quotelev2">&gt; &gt; application.  There was a time where OSes shipped threaded and non-threaded
</span><br>
<span class="quotelev2">&gt; &gt; malloc, for example, so knowing that might be important for that last bit of
</span><br>
<span class="quotelev2">&gt; &gt; performance.  There are also some obscure corner cases of the memory model
</span><br>
<span class="quotelev2">&gt; &gt; of some architectures where you might get unexpected results if you made an
</span><br>
<span class="quotelev2">&gt; &gt; MPI Receive call in an thread and accessed that buffer later from another
</span><br>
<span class="quotelev2">&gt; &gt; thread, which may require memory barriers inside the implementation, so
</span><br>
<span class="quotelev2">&gt; &gt; there could be some differences between SINGLE and FUNNELED due to those
</span><br>
<span class="quotelev2">&gt; &gt; barriers.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; In Open MPI, we'll handle those corner cases whether you init for SINGLE or
</span><br>
<span class="quotelev2">&gt; &gt; FUNNELED, so there's really no practical difference for Open MPI, but you're
</span><br>
<span class="quotelev2">&gt; &gt; then slightly less portable.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm asking because I'm using an open_mpi build ontop of infiniband, and the
</span><br>
<span class="quotelev2">&gt; &gt; maximum thread mode is MPI_THREAD_SINGLE.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; That doesn't seem right; which version of Open MPI are you using?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Brian
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; As Brian said, you aren't likely to be running on a system like Windows 98
</span><br>
<span class="quotelev2">&gt; &gt; where non-thread-safe libraries were preferred.  My colleagues at NASA
</span><br>
<span class="quotelev2">&gt; &gt; insist that any properly built MPI will support MPI_THREAD_FUNNELED by
</span><br>
<span class="quotelev2">&gt; &gt; default, even when the documentation says explicit setting in
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Init_thread() is mandatory.  The statement which I see in OpenMPI doc
</span><br>
<span class="quotelev2">&gt; &gt; says all MPI calls must be made by the thread which calls MPI_Init_thread.
</span><br>
<span class="quotelev2">&gt; &gt; Apparently it will work if plain MPI_Init is used instead.  This theory
</span><br>
<span class="quotelev2">&gt; &gt; appears to hold up for all the MPI implementations of interest.  The
</span><br>
<span class="quotelev2">&gt; &gt; additional threads referred to are &quot;inside the MPI rank,&quot; although I suppose
</span><br>
<span class="quotelev2">&gt; &gt; additional application threads not involved with MPI are possible.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Hammond
</span><br>
<span class="quotelev1">&gt; jeff.science_at_[hidden]
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Saliya Ekanayake esaliya_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; Cell 812-391-4914 Home 812-961-6383
</span><br>
<span class="quotelev1">&gt; <a href="http://saliya.org">http://saliya.org</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22849/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22850.php">Tommi Laiho: "[OMPI users] Odd and long error with OpenMPI and OpenFOAM."</a>
<li><strong>Previous message:</strong> <a href="22848.php">Saliya Ekanayake: "Re: [OMPI users] [EXTERNAL] MPI_THREAD_SINGLE vs. MPI_THREAD_FUNNELED"</a>
<li><strong>In reply to:</strong> <a href="22848.php">Saliya Ekanayake: "Re: [OMPI users] [EXTERNAL] MPI_THREAD_SINGLE vs. MPI_THREAD_FUNNELED"</a>
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
