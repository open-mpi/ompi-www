<?
$subject_val = "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 30 12:05:14 2010" -->
<!-- isoreceived="20101130170514" -->
<!-- sent="Tue, 30 Nov 2010 12:05:08 -0500" -->
<!-- isosent="20101130170508" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!" -->
<!-- id="57FDBB91-1673-486C-BF0E-CFD320314369_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4CF50FAB.30402_at_mc.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-30 12:05:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8748.php">Jeff Squyres: "[OMPI devel] 1.5.1rc1 is out"</a>
<li><strong>Previous message:</strong> <a href="8746.php">Terry Dontje: "Re: [OMPI devel] 1.5 plans"</a>
<li><strong>In reply to:</strong> <a href="8744.php">Ken Cain: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8735.php">Ralph Castain: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Excellent points Ken; thanks!
<br>
<p>I expanded the FAQ entry here to include these points:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=openfabrics#ofa-fork">http://www.open-mpi.org/faq/?category=openfabrics#ofa-fork</a>
<br>
<p><p><p>On Nov 30, 2010, at 9:52 AM, Ken Cain wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We have had some recent experience with this in an Open MPI 1.4.x version and thought it would be useful to contribute to the discussion. Please see below.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 29, 2010, at 6:25 PM, George Bosilca wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The main problem is that openib require to pin memory pages in order to take advantage of RMA features. There is a major issues with these pinned pages and fork, leading to segmentation fault in some specific cases. However, we only pin the pages on the MPI calls related to data transfers. Therefore, if you call fork __before__ any other MPI data transfer function (but after MPI_Init as you use the process rank), your application should be safe.
</span><br>
<span class="quotelev2">&gt;&gt; Note that Open MPI also pins some internal memory during MPI_INIT, but that memory is totally internal to libmpi, so you should be safe (i.e., you should never be able to find it and therefore never be able to try to touch it).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is what we believe happened in our testing:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. MPI_init allocated and pinned down some memory. This memory was 64 byte aligned and not page-aligned to 4096 bytes. So an allocation that ideally should have resulted in 2 pages being pinned, actually had 3 pages pinned with lots of unused memory on the 3rd page.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. A child process created via popen tried to allocate some memory (perhaps a byproduct of popen execution itself) and was allocated memory on that last page with lots of unused memory. When the child tried to touch the allocation, there was seg fault.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We could reduce the probability of this happenning by changing the alignment of MPI allocations to 4096 bytes. But since MPI allocations are not sized to be multiple of page size, this isn't a foolproof method.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; One way (agreed not ideal) to avoid the potential seg fault is to set the MCA parameter btl_openib_want_fork_suppoort = 0. But then you are &quot;trusting&quot; any child processes to not intentionally or as a result of a bug, touch the memory regions that have been registered/pinned by the parent.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; How can one be sure that the disabling the warning is ok? Could you please elaborate on what makes forks vulnerable? May be that will guide the developers to make an informed decision on whether to disable them or find another alternative.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; No way to know at 100%. Now for an elaborate answer: Once upon a time ... The fork story is a long and boring one, we would all have preferred to never heard about it (believe me). A quick and compressed version can be found on the QLogic download page (<a href="http://filedownloads.qlogic.com/files/driver/70277/release_QLogicIB-Basic_4400_Rev_A.html">http://filedownloads.qlogic.com/files/driver/70277/release_QLogicIB-Basic_4400_Rev_A.html</a>).
</span><br>
<span class="quotelev2">&gt;&gt; That's a good summary.  The issue is with OFED itself, not with Open MPI.
</span><br>
<span class="quotelev2">&gt;&gt; Note, too, that calling popen() should also be safe (even though we'll warn about it -- our atfork hook has no way of knowing whether you're calling system, popen, or something else).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Ken
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Ken Cain
</span><br>
<span class="quotelev1">&gt; Mercury Computer Systems, Inc. (<a href="http://www.mc.com">http://www.mc.com</a>)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This message is intended only for the designated recipient(s) and may
</span><br>
<span class="quotelev1">&gt; contain confidential or proprietary information of Mercury Computer
</span><br>
<span class="quotelev1">&gt; Systems, Inc. This message is solely intended to facilitate business
</span><br>
<span class="quotelev1">&gt; discussions and does not constitute an express or implied offer to sell
</span><br>
<span class="quotelev1">&gt; or purchase any products, services, or support. Any commitments must be
</span><br>
<span class="quotelev1">&gt; made in writing and signed by duly authorized representatives of each
</span><br>
<span class="quotelev1">&gt; party.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8748.php">Jeff Squyres: "[OMPI devel] 1.5.1rc1 is out"</a>
<li><strong>Previous message:</strong> <a href="8746.php">Terry Dontje: "Re: [OMPI devel] 1.5 plans"</a>
<li><strong>In reply to:</strong> <a href="8744.php">Ken Cain: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8735.php">Ralph Castain: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
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
