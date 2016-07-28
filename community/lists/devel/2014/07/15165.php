<?
$subject_val = "Re: [OMPI devel] Onesided failures";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 16 09:59:38 2014" -->
<!-- isoreceived="20140716135938" -->
<!-- sent="Wed, 16 Jul 2014 06:59:35 -0700" -->
<!-- isosent="20140716135935" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Onesided failures" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F36047583D03_at_HQMAIL02.nvidia.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="epgxgjtx179bwfyyirx0e25k.1405518583105_at_email.android.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Onesided failures<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-16 09:59:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15166.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>Previous message:</strong> <a href="15164.php">Gilles GOUAILLARDET: "Re: [OMPI devel] Onesided failures"</a>
<li><strong>In reply to:</strong> <a href="15164.php">Gilles GOUAILLARDET: "Re: [OMPI devel] Onesided failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15190.php">Gilles Gouaillardet: "Re: [OMPI devel] Onesided failures"</a>
<li><strong>Reply:</strong> <a href="15190.php">Gilles Gouaillardet: "Re: [OMPI devel] Onesided failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sounds like a good plan.  Thanks for looking into this Gilles!
<br>
Regards,
<br>
Rolf
<br>

<br>
From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Gilles GOUAILLARDET
<br>
Sent: Wednesday, July 16, 2014 9:53 AM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] Onesided failures
<br>

<br>
Rolf,
<br>

<br>
From the man page of MPI_Win_allocate_shared
<br>

<br>
It is the user's responsibility to ensure that the communicator comm represents a group of processes that can create a shared memory segment that can be accessed by all processes in the group
<br>

<br>
And from the mtt logs, you are running 4 tasks on 2 nodes.
<br>

<br>
Unless I am missing something obvious, I will update the test tomorrow and add a comm split to ensure MPI_Win_allocate_shared is called from single node communicator and skip the test if this impossible
<br>

<br>
Cheers,
<br>

<br>
Gilles
<br>

<br>
Rolf vandeVaart &lt;rvandevaart_at_[hidden]&lt;mailto:rvandevaart_at_[hidden]&gt;&gt; wrote:
<br>
On both 1.8 and trunk (as Ralph mentioned in meeting) we are seeing three tests fail.
<br>
<a href="http://mtt.open-mpi.org/index.php?do_redir=2205">http://mtt.open-mpi.org/index.php?do_redir=2205</a>
<br>

<br>
Ibm/onesided/win_allocate_shared
<br>
Ibm/onesided/win_allocated_shared_mpifh
<br>
Ibm/onesided/win_allocated_shared_usempi
<br>

<br>
Is there a ticket that covers these failures?
<br>

<br>
Thanks,
<br>
Rolf
<br>
________________________________
<br>
This email message is for the sole use of the intended recipient(s) and may contain confidential information.  Any unauthorized review, use, disclosure or distribution is prohibited.  If you are not the intended recipient, please contact the sender by reply email and destroy all copies of the original message.
<br>
________________________________
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15165/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15166.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>Previous message:</strong> <a href="15164.php">Gilles GOUAILLARDET: "Re: [OMPI devel] Onesided failures"</a>
<li><strong>In reply to:</strong> <a href="15164.php">Gilles GOUAILLARDET: "Re: [OMPI devel] Onesided failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15190.php">Gilles Gouaillardet: "Re: [OMPI devel] Onesided failures"</a>
<li><strong>Reply:</strong> <a href="15190.php">Gilles Gouaillardet: "Re: [OMPI devel] Onesided failures"</a>
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
