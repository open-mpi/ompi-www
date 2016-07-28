<?
$subject_val = "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 14 12:16:47 2015" -->
<!-- isoreceived="20150414161647" -->
<!-- sent="Tue, 14 Apr 2015 09:16:43 -0700" -->
<!-- isosent="20150414161643" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5" -->
<!-- id="5C0D46D7-C4A7-4C0F-B390-55355B7FB067_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAowFmN0nO1rqmX2Tg8YW_rGEyz-1kNvNU-pJ5vXLhVXYZnLiA_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-04-14 12:16:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26723.php">Nick Papior Andersen: "[OMPI users] One-sided communication, a missing/non-existing API call"</a>
<li><strong>Previous message:</strong> <a href="26721.php">George Bosilca: "Re: [OMPI users] mpi_type_create_struct not working for large counts"</a>
<li><strong>In reply to:</strong> <a href="26662.php">Thomas Klimpel: "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26750.php">Thomas Klimpel: "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5"</a>
<li><strong>Reply:</strong> <a href="26750.php">Thomas Klimpel: "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We found a locking error in vader - this has been fixed in the OMPI master and will be in the 1.8.5 nightly tarball tomorrow.
<br>
<p>Thanks!
<br>
Ralph
<br>
<p><span class="quotelev1">&gt; On Apr 9, 2015, at 1:26 PM, Thomas Klimpel &lt;jacques.gentzen_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried 1.8.5rc1 now. It behaves very similar to 1.8.4 from my point of view (and completely different from 1.6.5). The warning
</span><br>
<span class="quotelev1">&gt; [warn] opal_libevent2021_event_base_loop: reentrant invocation.  Only one event_base_loop can run on each event_base at once.
</span><br>
<span class="quotelev1">&gt; is still there.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It's easy for me to (re)produce a deadlock with both 1.8.4 and 1.8.5rc1. With 1.8.5rc1, I sometimes even get the deadlock without the warning. The following seems crucial for reproducing the deadlock
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1) start a worker on the same node as the master
</span><br>
<span class="quotelev1">&gt; 2) chop big messages into 1k blocks. With 2k blocks, the deadlocks become rarer, and with 4k blocks (or no choping at all), the deadlocks seem to be gone.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the deadlock happens even with a single worker
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #0  0x000000363f20e054 in __lll_lock_wait () from /lib64/libpthread.so.0
</span><br>
<span class="quotelev1">&gt; #1  0x000000363f209388 in _L_lock_854 () from /lib64/libpthread.so.0
</span><br>
<span class="quotelev1">&gt; #2  0x000000363f209257 in pthread_mutex_lock () from /lib64/libpthread.so.0
</span><br>
<span class="quotelev1">&gt; #3  0x00007f9901d47343 in mca_btl_vader_component_progress () from /homes/data/public/Development/3rdParty/install/openmpi-1.8.5rc1/Linux-x86_64-redhat.6.3/M64/lib/openmpi/mca_btl_vader.so
</span><br>
<span class="quotelev1">&gt; #4  0x00007f9910a9b49a in opal_progress () from /homes/data/public/Development/3rdParty/install/openmpi-1.8.5rc1/Linux-x86_64-redhat.6.3/M64/lib/libopen-pal.so.6
</span><br>
<span class="quotelev1">&gt; #5  0x00007f990170594d in mca_pml_ob1_send () from /homes/data/public/Development/3rdParty/install/openmpi-1.8.5rc1/Linux-x86_64-redhat.6.3/M64/lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26662.php">http://www.open-mpi.org/community/lists/users/2015/04/26662.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26723.php">Nick Papior Andersen: "[OMPI users] One-sided communication, a missing/non-existing API call"</a>
<li><strong>Previous message:</strong> <a href="26721.php">George Bosilca: "Re: [OMPI users] mpi_type_create_struct not working for large counts"</a>
<li><strong>In reply to:</strong> <a href="26662.php">Thomas Klimpel: "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26750.php">Thomas Klimpel: "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5"</a>
<li><strong>Reply:</strong> <a href="26750.php">Thomas Klimpel: "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5"</a>
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
