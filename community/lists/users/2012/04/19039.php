<?
$subject_val = "Re: [OMPI users] MPI_Send, MPI_Recv problem on Mac and Linux";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 18 08:17:12 2012" -->
<!-- isoreceived="20120418121712" -->
<!-- sent="Wed, 18 Apr 2012 08:17:07 -0400" -->
<!-- isosent="20120418121707" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Send, MPI_Recv problem on Mac and Linux" -->
<!-- id="09F99338-C944-404E-B823-AF21F4E26C50_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAMY80yjODXinbQ-dHgA65_=ojhzbUFpN1R9KtZbyQA1F4y+zEA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Send, MPI_Recv problem on Mac and Linux<br>
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-18 08:17:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19040.php">Peter Sels: "Re: [OMPI users] MPI_Send, MPI_Recv problem on Mac and Linux"</a>
<li><strong>Previous message:</strong> <a href="19038.php">Jeffrey Squyres: "Re: [OMPI users] machine exited on signal 11 (Segmentation fault)."</a>
<li><strong>In reply to:</strong> <a href="19037.php">Peter Sels: "Re: [OMPI users] MPI_Send, MPI_Recv problem on Mac and Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19040.php">Peter Sels: "Re: [OMPI users] MPI_Send, MPI_Recv problem on Mac and Linux"</a>
<li><strong>Reply:</strong> <a href="19040.php">Peter Sels: "Re: [OMPI users] MPI_Send, MPI_Recv problem on Mac and Linux"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 18, 2012, at 3:15 AM, Peter Sels wrote:
<br>
<p><span class="quotelev1">&gt; I suppose with C++ MPI it's possible to enforce more strict type
</span><br>
<span class="quotelev1">&gt; checking using template or so.)
</span><br>
<p>Not really, unfortunately.  :-(
<br>
<p>The idea is to be able to send *anything* through the (void*) choice buffer designation -- that includes even sending a pointer address if you want to.  We also wouldn't want to restrict the choice buffer to known/pre-defined data types, because then you couldn't send user-defined structs and the like.  The Forum also explicitly rejected enforcing hierarchy (a la Java, where every sendable item must be derived from a common ancestor).
<br>
<p>For example, it may actually be *useful* to send a pointer address via MPI_SEND.  Granted, a pointer address is usually only valid locally, but:
<br>
<p>- maybe you're sending a pointer address to a shared memory location, and it could be valid in another remote process
<br>
- maybe you're sending a pointer address so that it can be echoed back to you later (e.g., as a context)
<br>
- ...
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19040.php">Peter Sels: "Re: [OMPI users] MPI_Send, MPI_Recv problem on Mac and Linux"</a>
<li><strong>Previous message:</strong> <a href="19038.php">Jeffrey Squyres: "Re: [OMPI users] machine exited on signal 11 (Segmentation fault)."</a>
<li><strong>In reply to:</strong> <a href="19037.php">Peter Sels: "Re: [OMPI users] MPI_Send, MPI_Recv problem on Mac and Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19040.php">Peter Sels: "Re: [OMPI users] MPI_Send, MPI_Recv problem on Mac and Linux"</a>
<li><strong>Reply:</strong> <a href="19040.php">Peter Sels: "Re: [OMPI users] MPI_Send, MPI_Recv problem on Mac and Linux"</a>
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
