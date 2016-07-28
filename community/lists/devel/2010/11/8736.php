<?
$subject_val = "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 29 19:50:38 2010" -->
<!-- isoreceived="20101130005038" -->
<!-- sent="Mon, 29 Nov 2010 19:50:33 -0500" -->
<!-- isosent="20101130005033" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!" -->
<!-- id="3602F6C3-99E1-408E-8BF4-0FEC1E08F8E2_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="39825385-1CD1-4F7B-B7E2-1CF21B4E6544_at_eecs.utk.edu" -->
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
<strong>Date:</strong> 2010-11-29 19:50:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8737.php">ananda.mudar_at_[hidden]: "[OMPI devel] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="8735.php">Ralph Castain: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<li><strong>In reply to:</strong> <a href="8734.php">George Bosilca: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8744.php">Ken Cain: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<li><strong>Reply:</strong> <a href="8744.php">Ken Cain: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 29, 2010, at 6:25 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; The main problem is that openib require to pin memory pages in order to take advantage of RMA features. There is a major issues with these pinned pages and fork, leading to segmentation fault in some specific cases. However, we only pin the pages on the MPI calls related to data transfers. Therefore, if you call fork __before__ any other MPI data transfer function (but after MPI_Init as you use the process rank), your application should be safe.
</span><br>
<p>Note that Open MPI also pins some internal memory during MPI_INIT, but that memory is totally internal to libmpi, so you should be safe (i.e., you should never be able to find it and therefore never be able to try to touch it).
<br>
<p><span class="quotelev2">&gt;&gt; How can one be sure that the disabling the warning is ok? Could you please elaborate on what makes forks vulnerable? May be that will guide the developers to make an informed decision on whether to disable them or find another alternative.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No way to know at 100%. Now for an elaborate answer: Once upon a time ... The fork story is a long and boring one, we would all have preferred to never heard about it (believe me). A quick and compressed version can be found on the QLogic download page (<a href="http://filedownloads.qlogic.com/files/driver/70277/release_QLogicIB-Basic_4400_Rev_A.html">http://filedownloads.qlogic.com/files/driver/70277/release_QLogicIB-Basic_4400_Rev_A.html</a>).
</span><br>
<p>That's a good summary.  The issue is with OFED itself, not with Open MPI.
<br>
<p>Note, too, that calling popen() should also be safe (even though we'll warn about it -- our atfork hook has no way of knowing whether you're calling system, popen, or something else).
<br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="8737.php">ananda.mudar_at_[hidden]: "[OMPI devel] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="8735.php">Ralph Castain: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<li><strong>In reply to:</strong> <a href="8734.php">George Bosilca: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8744.php">Ken Cain: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<li><strong>Reply:</strong> <a href="8744.php">Ken Cain: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
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
