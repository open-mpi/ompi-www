<?
$subject_val = "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 17 20:16:46 2015" -->
<!-- isoreceived="20150418001646" -->
<!-- sent="Fri, 17 Apr 2015 17:16:42 -0700" -->
<!-- isosent="20150418001642" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5" -->
<!-- id="861828B1-9ECD-4976-A177-3E0BA190C65A_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAAowFmPS9uFsKR7upTjPF=jj4C78VdDGekaAgWM4faGELnEoFQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-17 20:16:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26752.php">Subhra Mazumdar: "Re: [OMPI users] MPI_THREAD_MULTIPLE and openib btl"</a>
<li><strong>Previous message:</strong> <a href="26750.php">Thomas Klimpel: "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5"</a>
<li><strong>In reply to:</strong> <a href="26750.php">Thomas Klimpel: "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just FYI: I&#226;&#128;&#153;ve submitted a pull request to silence that annoying warning :-)
<br>
<p><span class="quotelev1">&gt; On Apr 16, 2015, at 12:02 PM, Thomas Klimpel &lt;jacques.gentzen_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph wrote:
</span><br>
<span class="quotelev2">&gt; &gt; We found a locking error in vader - this has been fixed in the OMPI master and will be in the 1.8.5 nightly tarball tomorrow.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tested with the nightly tarball now. The deadlocks are fixed. Thanks! The warning
</span><br>
<span class="quotelev1">&gt; [warn] opal_libevent2021_event_base_loop: reentrant invocation.  Only one event_base_loop can run on each event_base at once.
</span><br>
<span class="quotelev1">&gt; is still there, but it is much less annoying without the corresponding deadlocks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Another difference is that 1.8.4 often complains that I have requested too many workers (or that some libnuma would be missing), which I fix by adding --bind-to socket:overload-allowed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This problem also seems to be fixed now. It was still present in 1.8.5rc1.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; Thomas
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26750.php">http://www.open-mpi.org/community/lists/users/2015/04/26750.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26752.php">Subhra Mazumdar: "Re: [OMPI users] MPI_THREAD_MULTIPLE and openib btl"</a>
<li><strong>Previous message:</strong> <a href="26750.php">Thomas Klimpel: "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5"</a>
<li><strong>In reply to:</strong> <a href="26750.php">Thomas Klimpel: "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5"</a>
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
