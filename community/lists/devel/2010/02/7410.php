<?
$subject_val = "Re: [OMPI devel] failure withzero-lengthReduce()andbothsbuf=rbuf=NULL";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 11 10:29:51 2010" -->
<!-- isoreceived="20100211152951" -->
<!-- sent="Thu, 11 Feb 2010 10:29:45 -0500" -->
<!-- isosent="20100211152945" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] failure withzero-lengthReduce()andbothsbuf=rbuf=NULL" -->
<!-- id="07DC975E-17F7-4D77-AD36-6079E5E6CFB1_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="859DBEA6-3E98-4478-ADAB-0F8AAC95FB10_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] failure withzero-lengthReduce()andbothsbuf=rbuf=NULL<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-11 10:29:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7411.php">George Bosilca: "Re: [OMPI devel] Request_free() and Cancel() with REQUEST_NULL"</a>
<li><strong>Previous message:</strong> <a href="7409.php">Lisandro Dalcin: "[OMPI devel] Request_free() and Cancel() with REQUEST_NULL"</a>
<li><strong>In reply to:</strong> <a href="7407.php">George Bosilca: "Re: [OMPI devel] failure withzero-lengthReduce()andbothsbuf=rbuf=NULL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7416.php">Christian Siebert: "Re: [OMPI devel] failure withzero-lengthReduce()andbothsbuf=rbuf=NULL"</a>
<li><strong>Reply:</strong> <a href="7416.php">Christian Siebert: "Re: [OMPI devel] failure withzero-lengthReduce()andbothsbuf=rbuf=NULL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 11, 2010, at 10:04 AM, George Bosilca wrote:
<br>
<p><span class="quotelev2">&gt;&gt; I misparsed your reply. Yes, bcast(1) *can* sync if it wants to. I don't have a spec handy to check if bcast(0) is defined or not (similar to reduce). If it is, then sure, it could sync as well.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have to disagree here. There are no synchronization in MPI except MPI_Barrier.
</span><br>
<p>There's no synchronization *guarantee* in MPI collectives except for MPI_BARRIER.
<br>
<p><span class="quotelev1">&gt; At best, a bcast(1) is a one way synchronization, as the only knowledge it gives to any rank (except root) is that the root has reached the bcast. No assumptions about the other ranks should be made, as this is strongly dependent on the underlying algorithm, and the upper level do not have a way to know which algorithm is used. Similarly, a reduce(1) is the opposite of the bcast(1), the only certain thing is at the root and it means all other ranks had reached the reduce(1). 
</span><br>
<p>I don't think we're disagreeing here.  All I'm saying is that BCAST *can* synchronize; I'm not saying it has to.  For example, using OMPI's sync coll module is perfectly legal because the MPI spec does not disallow synchronizing for collectives.  MPI only *requires* synchronizing for BARRIER.
<br>
<p>Right?
<br>
<p><span class="quotelev1">&gt; Therefore, we can argue as much as you want about what the correct arguments of a reduce call should be, a reduce(count=0) is one of the meaningless MPI calls and as such should not be tolerated.
</span><br>
<p>No disagreement there.  I wish we could error on it.  &quot;Darn the IMB torpedos!  Full speed ahead!!&quot;  ;-)
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
<li><strong>Next message:</strong> <a href="7411.php">George Bosilca: "Re: [OMPI devel] Request_free() and Cancel() with REQUEST_NULL"</a>
<li><strong>Previous message:</strong> <a href="7409.php">Lisandro Dalcin: "[OMPI devel] Request_free() and Cancel() with REQUEST_NULL"</a>
<li><strong>In reply to:</strong> <a href="7407.php">George Bosilca: "Re: [OMPI devel] failure withzero-lengthReduce()andbothsbuf=rbuf=NULL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7416.php">Christian Siebert: "Re: [OMPI devel] failure withzero-lengthReduce()andbothsbuf=rbuf=NULL"</a>
<li><strong>Reply:</strong> <a href="7416.php">Christian Siebert: "Re: [OMPI devel] failure withzero-lengthReduce()andbothsbuf=rbuf=NULL"</a>
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
