<?
$subject_val = "Re: [OMPI users] Bugs in MPI_Abort() -- MPI_Finalize()?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  2 08:59:51 2010" -->
<!-- isoreceived="20100602125951" -->
<!-- sent="Wed, 2 Jun 2010 08:59:46 -0400" -->
<!-- isosent="20100602125946" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bugs in MPI_Abort() -- MPI_Finalize()?" -->
<!-- id="741E5943-1D5A-4E7F-A2F7-0A37D6AF8963_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTik8vQgomnIIx_gKfm_D7C4C7shKZloFYYk93UZo_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Bugs in MPI_Abort() -- MPI_Finalize()?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-02 08:59:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13202.php">Jeff Squyres: "Re: [OMPI users] 1.4.2 build problem"</a>
<li><strong>Previous message:</strong> <a href="13200.php">guillaume ranquet: "Re: [OMPI users] Segmentation fault in MPI_Finalize with	IB	hardware and memory manager."</a>
<li><strong>In reply to:</strong> <a href="13199.php">Ralph Castain: "Re: [OMPI users] Bugs in MPI_Abort() -- MPI_Finalize()?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13204.php">Yves Caniou: "Re: [OMPI users] Bugs in MPI_Abort() -- MPI_Finalize()?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 2, 2010, at 8:03 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; I built it with gcc 4.2.1, though - I know we have a problem with shared memory hanging when built with gcc 4.4.x, so I wonder if the issue here is your use of gcc 4.5?
</span><br>
<p>It's not yet clear that we have a shared memory problem with gcc 4.4.x -- IBM and Cisco have been unable to replicate.
<br>
<p><span class="quotelev1">&gt; Can you try running this again with -mca btl ^sm?
</span><br>
<p>This would be good data.  Can you also send exactly how you're configuring and building OMPI?
<br>
<p>I have built OMPI 1.4.2 with gcc 4.4.1 and 4.5 and have been unable to replicate either the shared memory problem or this problem.  :-(
<br>
<p>That being said, I'm running on an Intel 5580 (Nehalem EP); I do not have any AMD machines to test on.
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
<li><strong>Next message:</strong> <a href="13202.php">Jeff Squyres: "Re: [OMPI users] 1.4.2 build problem"</a>
<li><strong>Previous message:</strong> <a href="13200.php">guillaume ranquet: "Re: [OMPI users] Segmentation fault in MPI_Finalize with	IB	hardware and memory manager."</a>
<li><strong>In reply to:</strong> <a href="13199.php">Ralph Castain: "Re: [OMPI users] Bugs in MPI_Abort() -- MPI_Finalize()?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13204.php">Yves Caniou: "Re: [OMPI users] Bugs in MPI_Abort() -- MPI_Finalize()?"</a>
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
