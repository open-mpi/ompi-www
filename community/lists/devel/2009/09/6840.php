<?
$subject_val = "Re: [OMPI devel] application hangs with multiple dup";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 16 10:52:05 2009" -->
<!-- isoreceived="20090916145205" -->
<!-- sent="Wed, 16 Sep 2009 09:52:03 -0500" -->
<!-- isosent="20090916145203" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] application hangs with multiple dup" -->
<!-- id="4AB0FB93.6010104_at_cs.uh.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="6A09E960-F652-4C56-B04D-CFF7EB6BFBBB_at_cisco.com" -->
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
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-16 10:52:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6841.php">Wolfgang Bangerth: "Re: [OMPI devel] Deadlock when creating too many communicators"</a>
<li><strong>Previous message:</strong> <a href="6839.php">Kiril Dichev: "Re: [OMPI devel] Infiniband always disabled for required	threadlevel	MPI_THREAD_MULTIPLE ?"</a>
<li><strong>In reply to:</strong> <a href="6838.php">Jeff Squyres: "Re: [OMPI devel] application hangs with multiple dup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6843.php">Edgar Gabriel: "Re: [OMPI devel] application hangs with multiple dup"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
there is a ticket on that topic already (#2009),  and I just added some 
<br>
comments to that...
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Sep 10, 2009, at 7:12 PM, Edgar Gabriel wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; so I can confirm that I can reproduce the hang, and we (George, Rainer
</span><br>
<span class="quotelev2">&gt;&gt; and me) have looked into that and are continue digging.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I hate to say that, but it looked to us as if messages were 'lost'
</span><br>
<span class="quotelev2">&gt;&gt; (sender clearly called send and but the data is not in any of the queues
</span><br>
<span class="quotelev2">&gt;&gt; on the receiver side), which seems to be consistent with two other bug
</span><br>
<span class="quotelev2">&gt;&gt; reports currently being discussed on the mailing list. I could reproduce
</span><br>
<span class="quotelev2">&gt;&gt; the hang with both sm and tcp,  so its probably not a btl issue but
</span><br>
<span class="quotelev2">&gt;&gt; somewhere higher.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is this is, indeed, happening, someone please file a bug in trac.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
-- 
Edgar Gabriel
Assistant Professor
Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
Department of Computer Science          University of Houston
Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6841.php">Wolfgang Bangerth: "Re: [OMPI devel] Deadlock when creating too many communicators"</a>
<li><strong>Previous message:</strong> <a href="6839.php">Kiril Dichev: "Re: [OMPI devel] Infiniband always disabled for required	threadlevel	MPI_THREAD_MULTIPLE ?"</a>
<li><strong>In reply to:</strong> <a href="6838.php">Jeff Squyres: "Re: [OMPI devel] application hangs with multiple dup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6843.php">Edgar Gabriel: "Re: [OMPI devel] application hangs with multiple dup"</a>
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
