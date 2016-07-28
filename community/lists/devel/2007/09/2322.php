<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep 18 09:44:55 2007" -->
<!-- isoreceived="20070918134455" -->
<!-- sent="Tue, 18 Sep 2007 09:44:42 -0400" -->
<!-- isosent="20070918134442" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Commit r16105" -->
<!-- id="04F907EC-7B0E-4C1F-972B-B81AF4A0C3F2_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20070918130612.GA10571_at_minantech.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-18 09:44:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2323.php">Gleb Natapov: "Re: [OMPI devel] Commit r16105"</a>
<li><strong>Previous message:</strong> <a href="2321.php">Gleb Natapov: "[OMPI devel] Commit r16105"</a>
<li><strong>In reply to:</strong> <a href="2321.php">Gleb Natapov: "[OMPI devel] Commit r16105"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2323.php">Gleb Natapov: "Re: [OMPI devel] Commit r16105"</a>
<li><strong>Reply:</strong> <a href="2323.php">Gleb Natapov: "Re: [OMPI devel] Commit r16105"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The setup of a communicators include as a last stage, a collective  
<br>
communication. As a result, some of the nodes can exit the collective  
<br>
before the others and therefore can start sending messages using this  
<br>
communicator [while some of the other nodes are still waiting for the  
<br>
collective completion]. This will lead to a situation where a node  
<br>
receive a message for a communicator that they are building up.
<br>
<p>There is a bug filled in trac about this. In FT-MPI we temporary put  
<br>
these messages in an internal queue, and deliver them to the right  
<br>
communicator only once this communicator is completely created.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Sep 18, 2007, at 9:06 AM, Gleb Natapov wrote:
<br>
<p><span class="quotelev1">&gt; George,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     In the comment you are saying that &quot;a message for a not yet  
</span><br>
<span class="quotelev1">&gt; existing
</span><br>
<span class="quotelev1">&gt; communicator can happen&quot;. Can you explain in what situation it can
</span><br>
<span class="quotelev1">&gt; happen?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; 			Gleb.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-2322/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2323.php">Gleb Natapov: "Re: [OMPI devel] Commit r16105"</a>
<li><strong>Previous message:</strong> <a href="2321.php">Gleb Natapov: "[OMPI devel] Commit r16105"</a>
<li><strong>In reply to:</strong> <a href="2321.php">Gleb Natapov: "[OMPI devel] Commit r16105"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2323.php">Gleb Natapov: "Re: [OMPI devel] Commit r16105"</a>
<li><strong>Reply:</strong> <a href="2323.php">Gleb Natapov: "Re: [OMPI devel] Commit r16105"</a>
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
