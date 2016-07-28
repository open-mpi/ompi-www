<?
$subject_val = "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  9 16:26:54 2015" -->
<!-- isoreceived="20150409202654" -->
<!-- sent="Thu, 9 Apr 2015 21:26:54 +0100" -->
<!-- isosent="20150409202654" -->
<!-- name="Thomas Klimpel" -->
<!-- email="jacques.gentzen_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5" -->
<!-- id="CAAowFmN0nO1rqmX2Tg8YW_rGEyz-1kNvNU-pJ5vXLhVXYZnLiA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="E3555A24-2B9C-40B7-ACCB-DD2E4A2A6E52_at_open-mpi.org" -->
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
<strong>Date:</strong> 2015-04-09 16:26:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26663.php">Subhra Mazumdar: "Re: [OMPI users] MPI_THREAD_MULTIPLE and openib btl"</a>
<li><strong>Previous message:</strong> <a href="26661.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3"</a>
<li><strong>In reply to:</strong> <a href="26652.php">Ralph Castain: "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26722.php">Ralph Castain: "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5"</a>
<li><strong>Reply:</strong> <a href="26722.php">Ralph Castain: "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I tried 1.8.5rc1 now. It behaves very similar to 1.8.4 from my point of
<br>
view (and completely different from 1.6.5). The warning
<br>
[warn] opal_libevent2021_event_base_loop: reentrant invocation.  Only one
<br>
event_base_loop can run on each event_base at once.
<br>
is still there.
<br>
<p>It's easy for me to (re)produce a deadlock with both 1.8.4 and 1.8.5rc1.
<br>
With 1.8.5rc1, I sometimes even get the deadlock without the warning. The
<br>
following seems crucial for reproducing the deadlock
<br>
<p>1) start a worker on the same node as the master
<br>
2) chop big messages into 1k blocks. With 2k blocks, the deadlocks become
<br>
rarer, and with 4k blocks (or no choping at all), the deadlocks seem to be
<br>
gone.
<br>
<p>the deadlock happens even with a single worker
<br>
<p>#0  0x000000363f20e054 in __lll_lock_wait () from /lib64/libpthread.so.0
<br>
#1  0x000000363f209388 in _L_lock_854 () from /lib64/libpthread.so.0
<br>
#2  0x000000363f209257 in pthread_mutex_lock () from /lib64/libpthread.so.0
<br>
#3  0x00007f9901d47343 in mca_btl_vader_component_progress () from
<br>
/homes/data/public/Development/3rdParty/install/openmpi-1.8.5rc1/Linux-x86_64-redhat.6.3/M64/lib/openmpi/mca_btl_vader.so
<br>
#4  0x00007f9910a9b49a in opal_progress () from
<br>
/homes/data/public/Development/3rdParty/install/openmpi-1.8.5rc1/Linux-x86_64-redhat.6.3/M64/lib/libopen-pal.so.6
<br>
#5  0x00007f990170594d in mca_pml_ob1_send () from
<br>
/homes/data/public/Development/3rdParty/install/openmpi-1.8.5rc1/Linux-x86_64-redhat.6.3/M64/lib/openmpi/mca_pml_ob1.so
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26662/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26663.php">Subhra Mazumdar: "Re: [OMPI users] MPI_THREAD_MULTIPLE and openib btl"</a>
<li><strong>Previous message:</strong> <a href="26661.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3"</a>
<li><strong>In reply to:</strong> <a href="26652.php">Ralph Castain: "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26722.php">Ralph Castain: "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5"</a>
<li><strong>Reply:</strong> <a href="26722.php">Ralph Castain: "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5"</a>
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
