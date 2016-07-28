<?
$subject_val = "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 30 09:52:32 2010" -->
<!-- isoreceived="20101130145232" -->
<!-- sent="Tue, 30 Nov 2010 09:52:27 -0500" -->
<!-- isosent="20101130145227" -->
<!-- name="Ken Cain" -->
<!-- email="kcain_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!" -->
<!-- id="4CF50FAB.30402_at_mc.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3602F6C3-99E1-408E-8BF4-0FEC1E08F8E2_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!<br>
<strong>From:</strong> Ken Cain (<em>kcain_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-30 09:52:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8745.php">Joshua Hursey: "Re: [OMPI devel] 1.5 plans"</a>
<li><strong>Previous message:</strong> <a href="8743.php">Terry Dontje: "Re: [OMPI devel] 1.5 plans"</a>
<li><strong>In reply to:</strong> <a href="8736.php">Jeff Squyres: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8747.php">Jeff Squyres: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<li><strong>Reply:</strong> <a href="8747.php">Jeff Squyres: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>We have had some recent experience with this in an Open MPI 1.4.x 
<br>
version and thought it would be useful to contribute to the discussion. 
<br>
Please see below.
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Nov 29, 2010, at 6:25 PM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The main problem is that openib require to pin memory pages in order to take advantage of RMA features. There is a major issues with these pinned pages and fork, leading to segmentation fault in some specific cases. However, we only pin the pages on the MPI calls related to data transfers. Therefore, if you call fork __before__ any other MPI data transfer function (but after MPI_Init as you use the process rank), your application should be safe.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note that Open MPI also pins some internal memory during MPI_INIT, but that memory is totally internal to libmpi, so you should be safe (i.e., you should never be able to find it and therefore never be able to try to touch it).
</span><br>
<p>This is what we believe happened in our testing:
<br>
<p>1. MPI_init allocated and pinned down some memory. This memory was 64 
<br>
byte aligned and not page-aligned to 4096 bytes. So an allocation that 
<br>
ideally should have resulted in 2 pages being pinned, actually had 3 
<br>
pages pinned with lots of unused memory on the 3rd page.
<br>
<p>2. A child process created via popen tried to allocate some memory 
<br>
(perhaps a byproduct of popen execution itself) and was allocated memory 
<br>
on that last page with lots of unused memory. When the child tried to 
<br>
touch the allocation, there was seg fault.
<br>
<p>We could reduce the probability of this happenning by changing the 
<br>
alignment of MPI allocations to 4096 bytes. But since MPI allocations 
<br>
are not sized to be multiple of page size, this isn't a foolproof method.
<br>
<p>One way (agreed not ideal) to avoid the potential seg fault is to set 
<br>
the MCA parameter btl_openib_want_fork_suppoort = 0. But then you are 
<br>
&quot;trusting&quot; any child processes to not intentionally or as a result of a 
<br>
bug, touch the memory regions that have been registered/pinned by the 
<br>
parent.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; How can one be sure that the disabling the warning is ok? Could you please elaborate on what makes forks vulnerable? May be that will guide the developers to make an informed decision on whether to disable them or find another alternative.
</span><br>
<span class="quotelev2">&gt;&gt; No way to know at 100%. Now for an elaborate answer: Once upon a time ... The fork story is a long and boring one, we would all have preferred to never heard about it (believe me). A quick and compressed version can be found on the QLogic download page (<a href="http://filedownloads.qlogic.com/files/driver/70277/release_QLogicIB-Basic_4400_Rev_A.html">http://filedownloads.qlogic.com/files/driver/70277/release_QLogicIB-Basic_4400_Rev_A.html</a>).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That's a good summary.  The issue is with OFED itself, not with Open MPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note, too, that calling popen() should also be safe (even though we'll warn about it -- our atfork hook has no way of knowing whether you're calling system, popen, or something else).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Thanks,
<br>
<p>-Ken
<br>
<pre>
-- 
Ken Cain
Mercury Computer Systems, Inc. (<a href="http://www.mc.com">http://www.mc.com</a>)
This message is intended only for the designated recipient(s) and may
contain confidential or proprietary information of Mercury Computer
Systems, Inc. This message is solely intended to facilitate business
discussions and does not constitute an express or implied offer to sell
or purchase any products, services, or support. Any commitments must be
made in writing and signed by duly authorized representatives of each
party.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8745.php">Joshua Hursey: "Re: [OMPI devel] 1.5 plans"</a>
<li><strong>Previous message:</strong> <a href="8743.php">Terry Dontje: "Re: [OMPI devel] 1.5 plans"</a>
<li><strong>In reply to:</strong> <a href="8736.php">Jeff Squyres: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8747.php">Jeff Squyres: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<li><strong>Reply:</strong> <a href="8747.php">Jeff Squyres: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
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
