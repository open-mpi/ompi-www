<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Feb 14 13:03:14 2007" -->
<!-- isoreceived="20070214180314" -->
<!-- sent="Wed, 14 Feb 2007 11:02:59 -0700" -->
<!-- isosent="20070214180259" -->
<!-- name="Brian W. Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI users] first time user - can run mpi job SMP but not over cluster" -->
<!-- id="8C847DB1-2B03-452D-8FFF-D05647D40B96_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="260E13A4-ED03-48FA-8FE0-84184931497D_at_cisco.com" -->
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
<strong>From:</strong> Brian W. Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-14 13:02:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2697.php">Alex Tumanov: "Re: [OMPI users] NetPipe benchmark &amp; spanning multiple interconnects"</a>
<li><strong>Previous message:</strong> <a href="2695.php">Jeff Squyres: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<li><strong>In reply to:</strong> <a href="2695.php">Jeff Squyres: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2699.php">Jeff Squyres: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<li><strong>Reply:</strong> <a href="2699.php">Jeff Squyres: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 14, 2007, at 10:50 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Feb 14, 2007, at 12:43 PM, Adrian Knoth wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Blah.  We definitely need to work on our error messages.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think we could use gai_strerror(3) for this. If we could agree to
</span><br>
<span class="quotelev2">&gt;&gt; get
</span><br>
<span class="quotelev2">&gt;&gt; rid of SUSv2 and rely on RFC 3493 ;)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It would not be too difficult to add gai_strerror() checking into
</span><br>
<span class="quotelev1">&gt; configure; that makes it portable everywhere (i.e., we can have code
</span><br>
<span class="quotelev1">&gt; paths for systems that do and do not have gai_strerror()).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Patches would be happily accepted.  :D
</span><br>
<p>Check the trunk...  Already gives an error message saying something  
<br>
reasonable...
<br>
<p><pre>
-- 
   Brian Barrett
   Open MPI Team, CCS-1
   Los Alamos National Laboratory
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2697.php">Alex Tumanov: "Re: [OMPI users] NetPipe benchmark &amp; spanning multiple interconnects"</a>
<li><strong>Previous message:</strong> <a href="2695.php">Jeff Squyres: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<li><strong>In reply to:</strong> <a href="2695.php">Jeff Squyres: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2699.php">Jeff Squyres: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<li><strong>Reply:</strong> <a href="2699.php">Jeff Squyres: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
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
