<?
$subject_val = "Re: [OMPI devel] application hangs with multiple dup";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 15 16:36:05 2009" -->
<!-- isoreceived="20090915203605" -->
<!-- sent="Tue, 15 Sep 2009 16:35:59 -0400" -->
<!-- isosent="20090915203559" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] application hangs with multiple dup" -->
<!-- id="6A09E960-F652-4C56-B04D-CFF7EB6BFBBB_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4AA987E7.7080108_at_cs.uh.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] application hangs with multiple dup<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-15 16:35:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6839.php">Kiril Dichev: "Re: [OMPI devel] Infiniband always disabled for required	threadlevel	MPI_THREAD_MULTIPLE ?"</a>
<li><strong>Previous message:</strong> <a href="6837.php">Thomas Ropars: "Re: [OMPI devel] application hangs with multiple dup"</a>
<li><strong>In reply to:</strong> <a href="6824.php">Edgar Gabriel: "Re: [OMPI devel] application hangs with multiple dup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6840.php">Edgar Gabriel: "Re: [OMPI devel] application hangs with multiple dup"</a>
<li><strong>Reply:</strong> <a href="6840.php">Edgar Gabriel: "Re: [OMPI devel] application hangs with multiple dup"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 10, 2009, at 7:12 PM, Edgar Gabriel wrote:
<br>
<p><span class="quotelev1">&gt; so I can confirm that I can reproduce the hang, and we (George, Rainer
</span><br>
<span class="quotelev1">&gt; and me) have looked into that and are continue digging.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hate to say that, but it looked to us as if messages were 'lost'
</span><br>
<span class="quotelev1">&gt; (sender clearly called send and but the data is not in any of the  
</span><br>
<span class="quotelev1">&gt; queues
</span><br>
<span class="quotelev1">&gt; on the receiver side), which seems to be consistent with two other bug
</span><br>
<span class="quotelev1">&gt; reports currently being discussed on the mailing list. I could  
</span><br>
<span class="quotelev1">&gt; reproduce
</span><br>
<span class="quotelev1">&gt; the hang with both sm and tcp,  so its probably not a btl issue but
</span><br>
<span class="quotelev1">&gt; somewhere higher.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Is this is, indeed, happening, someone please file a bug in trac.
<br>
<p>Thanks.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6839.php">Kiril Dichev: "Re: [OMPI devel] Infiniband always disabled for required	threadlevel	MPI_THREAD_MULTIPLE ?"</a>
<li><strong>Previous message:</strong> <a href="6837.php">Thomas Ropars: "Re: [OMPI devel] application hangs with multiple dup"</a>
<li><strong>In reply to:</strong> <a href="6824.php">Edgar Gabriel: "Re: [OMPI devel] application hangs with multiple dup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6840.php">Edgar Gabriel: "Re: [OMPI devel] application hangs with multiple dup"</a>
<li><strong>Reply:</strong> <a href="6840.php">Edgar Gabriel: "Re: [OMPI devel] application hangs with multiple dup"</a>
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
