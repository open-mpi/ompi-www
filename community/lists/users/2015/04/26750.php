<?
$subject_val = "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 16 15:02:54 2015" -->
<!-- isoreceived="20150416190254" -->
<!-- sent="Thu, 16 Apr 2015 20:02:53 +0100" -->
<!-- isosent="20150416190253" -->
<!-- name="Thomas Klimpel" -->
<!-- email="jacques.gentzen_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5" -->
<!-- id="CAAowFmPS9uFsKR7upTjPF=jj4C78VdDGekaAgWM4faGELnEoFQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="5C0D46D7-C4A7-4C0F-B390-55355B7FB067_at_open-mpi.org" -->
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
<strong>From:</strong> Thomas Klimpel (<em>jacques.gentzen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-16 15:02:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26751.php">Ralph Castain: "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5"</a>
<li><strong>Previous message:</strong> <a href="26749.php">Ralph Castain: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<li><strong>In reply to:</strong> <a href="26722.php">Ralph Castain: "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26751.php">Ralph Castain: "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5"</a>
<li><strong>Reply:</strong> <a href="26751.php">Ralph Castain: "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph wrote:
<br>
<span class="quotelev1">&gt; We found a locking error in vader - this has been fixed in the OMPI
</span><br>
master and will be in the 1.8.5 nightly tarball tomorrow.
<br>
<p>I tested with the nightly tarball now. The deadlocks are fixed. Thanks! The
<br>
warning
<br>
[warn] opal_libevent2021_event_base_loop: reentrant invocation.  Only one
<br>
event_base_loop can run on each event_base at once.
<br>
is still there, but it is much less annoying without the corresponding
<br>
deadlocks.
<br>
<p><p><span class="quotelev1">&gt; Another difference is that 1.8.4 often complains that I have requested
</span><br>
too many workers (or that some libnuma would be missing), which I fix by
<br>
adding --bind-to socket:overload-allowed.
<br>
<p>This problem also seems to be fixed now. It was still present in 1.8.5rc1.
<br>
<p>Thanks!
<br>
Thomas
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26750/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26751.php">Ralph Castain: "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5"</a>
<li><strong>Previous message:</strong> <a href="26749.php">Ralph Castain: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<li><strong>In reply to:</strong> <a href="26722.php">Ralph Castain: "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26751.php">Ralph Castain: "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5"</a>
<li><strong>Reply:</strong> <a href="26751.php">Ralph Castain: "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5"</a>
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
