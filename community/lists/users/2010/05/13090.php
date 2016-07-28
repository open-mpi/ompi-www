<?
$subject_val = "Re: [OMPI users] openmpi + share points";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 19 12:07:08 2010" -->
<!-- isoreceived="20100519160708" -->
<!-- sent="Wed, 19 May 2010 12:07:03 -0400" -->
<!-- isosent="20100519160703" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi + share points" -->
<!-- id="34CE8819-76D7-4081-9B3B-7C0757A0076F_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="2F52DFFD-09F4-4944-9B26-1294BC7328F9_at_onera.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi + share points<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-19 12:07:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13091.php">Michael E. Thomadakis: "[OMPI users] Some Questions on Building OMPI on Linux Em64t"</a>
<li><strong>Previous message:</strong> <a href="13089.php">Yves Caniou: "[OMPI users] Execution don't go back to shell after MPI_Finalize()"</a>
<li><strong>In reply to:</strong> <a href="13088.php">Christophe Peyret: "Re: [OMPI users] openmpi + share points"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 19, 2010, at 5:12 AM, Christophe Peyret wrote:
<br>
<p><span class="quotelev1">&gt; 1) it doesn't work anymore, if I remove --prefix /Network/opt/openmpi-1.4.2 (is there a way to remove it on OSX, already declared  ?)
</span><br>
<p>I'm assuming you're referring to shared libraries and/or executables not being found if you don't specify the --prefix.
<br>
<p>There's several ways to avoid having to list --prefix -- see the FAQ, such as questions 1-4 on this page:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=running">http://www.open-mpi.org/faq/?category=running</a>
<br>
<p><span class="quotelev1">&gt; 2) I must use the option -static-intel at link else i have a problem with libiomp5.dylib not found
</span><br>
<p>Yep.  Or install the support intel libs on each node.  Either way works fine.
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
<li><strong>Next message:</strong> <a href="13091.php">Michael E. Thomadakis: "[OMPI users] Some Questions on Building OMPI on Linux Em64t"</a>
<li><strong>Previous message:</strong> <a href="13089.php">Yves Caniou: "[OMPI users] Execution don't go back to shell after MPI_Finalize()"</a>
<li><strong>In reply to:</strong> <a href="13088.php">Christophe Peyret: "Re: [OMPI users] openmpi + share points"</a>
<!-- nextthread="start" -->
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
