<?
$subject_val = "Re: [OMPI devel] MPI_Bcast using TIPC";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 27 07:41:18 2011" -->
<!-- isoreceived="20110927114118" -->
<!-- sent="Tue, 27 Sep 2011 07:41:11 -0400" -->
<!-- isosent="20110927114111" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Bcast using TIPC" -->
<!-- id="FD758F08-F83F-432D-9226-7207D2FC5379_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4E819AC2.2030107_at_ericsson.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPI_Bcast using TIPC<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-27 07:41:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9764.php">Jeff Squyres: "[OMPI devel] OMPI 1.4.4rc4 has been posted"</a>
<li><strong>Previous message:</strong> <a href="9762.php">George Bosilca: "Re: [OMPI devel] MPI_Bcast using TIPC"</a>
<li><strong>In reply to:</strong> <a href="9761.php">Xin He: "[OMPI devel] MPI_Bcast using TIPC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9775.php">Xin He: "Re: [OMPI devel] MPI_Bcast using TIPC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 27, 2011, at 5:43 AM, Xin He wrote:
<br>
<p><span class="quotelev1">&gt; sorry that it takes so long for paper works of TIPC BTL. Hopefully I can get some feedback this week.
</span><br>
<p>Great.
<br>
<p><span class="quotelev1">&gt; However, I would like to do some work while waiting. For future work, I would like to add TIPC_broadcast
</span><br>
<span class="quotelev1">&gt; to support MPI_Bcast. But as I looked into TCP BTL code, I could not find any code doing broadcast. Does
</span><br>
<span class="quotelev1">&gt; that mean MPI_Bcast is actually done by sending one by one? In that case, in I want to add actual broadcast
</span><br>
<span class="quotelev1">&gt; support, which part should I change, I guess not just adding a BTL but also modify PML as well?
</span><br>
<p>MPI collectives are handled from another framework -- not the BTL, but the &quot;coll&quot; (collective) framework.  Look at ompi/mca/coll/coll.h.
<br>
<p>Most coll modules use the PML for transporting their messages.  That is, most of our current coll modules concentrate on algorithms (e.g., different bcast/reduce/gather/etc. algorithms) and use whatever transport is provided underneath.  So MPI_Bcast is likely already using the TIPC BTL for the individual point-to-point messages used by whatever algorithm is being used for the broadcast.
<br>
<p>Do you have some kind of TIPC native primitive for broadcast that you want to use?  If so, you could write a tipc coll component that has just the bcast method (and NULL for everything else).
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
<li><strong>Next message:</strong> <a href="9764.php">Jeff Squyres: "[OMPI devel] OMPI 1.4.4rc4 has been posted"</a>
<li><strong>Previous message:</strong> <a href="9762.php">George Bosilca: "Re: [OMPI devel] MPI_Bcast using TIPC"</a>
<li><strong>In reply to:</strong> <a href="9761.php">Xin He: "[OMPI devel] MPI_Bcast using TIPC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9775.php">Xin He: "Re: [OMPI devel] MPI_Bcast using TIPC"</a>
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
