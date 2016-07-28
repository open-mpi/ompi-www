<?
$subject_val = "Re: [OMPI devel] New address selection for btl-tcp (was Re: [OMPI svn] svn:open-mpi r17307)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 22 12:14:33 2008" -->
<!-- isoreceived="20080222171433" -->
<!-- sent="Fri, 22 Feb 2008 11:14:26 -0600 (CST)" -->
<!-- isosent="20080222171426" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] New address selection for btl-tcp (was Re: [OMPI svn] svn:open-mpi r17307)" -->
<!-- id="Pine.LNX.4.64.0802221112030.31457_at_marvin.we-be-smart.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080222150408.GN493_at_ltw.loris.tv" -->
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
<strong>Subject:</strong> Re: [OMPI devel] New address selection for btl-tcp (was Re: [OMPI svn] svn:open-mpi r17307)<br>
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-22 12:14:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3291.php">Ralph Castain: "[OMPI devel] OMPI and Mac Leopard"</a>
<li><strong>Previous message:</strong> <a href="3289.php">Adrian Knoth: "Re: [OMPI devel] New address selection for btl-tcp (was Re: [OMPI svn]	svn:open-mpi r17307)"</a>
<li><strong>In reply to:</strong> <a href="3289.php">Adrian Knoth: "Re: [OMPI devel] New address selection for btl-tcp (was Re: [OMPI svn]	svn:open-mpi r17307)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/01/3091.php">Bogdan Costescu: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, 22 Feb 2008, Adrian Knoth wrote:
<br>
<p><p><span class="quotelev1">&gt; I see three approaches:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   a) remove lo globally (in if.c). I expect objections. ;)
</span><br>
<p>I object!  :).  But for a good reason -- it'll break things.  Someone 
<br>
tried this before, and the issue is when a node (like a laptop) only has 
<br>
lo -- then there are no reported interfaces, and either there needs to be 
<br>
lots of extra code in the oob / btl or things break.  So let's not go down 
<br>
this path again.
<br>
<p><span class="quotelev1">&gt;   b) print a warning from BTL/TCP if the interfaces in use contain lo.
</span><br>
<span class="quotelev1">&gt;      Like &quot;Warning: You've included the loopback for communication.
</span><br>
<span class="quotelev1">&gt;            This may cause hanging processes due to unreachable peers.&quot;
</span><br>
<p>I like this one.
<br>
<p><span class="quotelev1">&gt;   c) Throw away 127.0.0.1 on the remote side. But when doing so, what's
</span><br>
<span class="quotelev1">&gt;      the use for including it at all?
</span><br>
<p>This seems hard.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3291.php">Ralph Castain: "[OMPI devel] OMPI and Mac Leopard"</a>
<li><strong>Previous message:</strong> <a href="3289.php">Adrian Knoth: "Re: [OMPI devel] New address selection for btl-tcp (was Re: [OMPI svn]	svn:open-mpi r17307)"</a>
<li><strong>In reply to:</strong> <a href="3289.php">Adrian Knoth: "Re: [OMPI devel] New address selection for btl-tcp (was Re: [OMPI svn]	svn:open-mpi r17307)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/01/3091.php">Bogdan Costescu: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
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
