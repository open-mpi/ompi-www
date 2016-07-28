<?
$subject_val = "Re: [OMPI users] Allgather in inter-communicator bug,";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 20 14:58:29 2010" -->
<!-- isoreceived="20100520185829" -->
<!-- sent="Thu, 20 May 2010 14:58:22 -0400" -->
<!-- isosent="20100520185822" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Allgather in inter-communicator bug," -->
<!-- id="38486439-4188-446A-A301-5E5AF157065A_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTil8wfK9VkNAVVvRk4vMaATXie8lhImYTM6OgPLg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Allgather in inter-communicator bug,<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-20 14:58:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13116.php">Olivier Riff: "Re: [OMPI users] General question on the implementation of a&quot;scheduler&quot; on client side..."</a>
<li><strong>Previous message:</strong> <a href="13114.php">Lisandro Dalcin: "Re: [OMPI users] Allgather in inter-communicator bug,"</a>
<li><strong>In reply to:</strong> <a href="13114.php">Lisandro Dalcin: "Re: [OMPI users] Allgather in inter-communicator bug,"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 20, 2010, at 2:52 PM, Lisandro Dalcin wrote:
<br>
<p><span class="quotelev1">&gt; Jeff, you should really learn Python and give a try to mpi4py. Even if
</span><br>
<span class="quotelev1">&gt; you do not consider Python a language for serious, production work
</span><br>
<span class="quotelev1">&gt; :-), it would be a VERY productive one for writing tests targeting
</span><br>
<span class="quotelev1">&gt; MPI.
</span><br>
<p>Freely admitted laziness on my part (read: not enough cycles in the day to do what Cisco already pays me to do...).  :-(
<br>
<p><span class="quotelev1">&gt; However, mpi4py have a BIG issue: not enough man-power for
</span><br>
<span class="quotelev1">&gt; writing decent documentation.
</span><br>
<p>Same issue here!  Maybe we should Google Wave it...  ;-)
<br>
<p><span class="quotelev1">&gt; So you are suggesting my code could be buggy? No way ! ;-) . Slightly
</span><br>
<span class="quotelev1">&gt; more serious: almost all my bug reports were discovered while
</span><br>
<span class="quotelev1">&gt; unittesting mpi4py and getting failures when running with Open MPI, so
</span><br>
<span class="quotelev1">&gt; I'm really confident about my Python bindings.
</span><br>
<p>I can't tell you how much we appreciate these reports.
<br>
<p>I know exactly the position you're in; I did the same thing years ago (ick!) with the is (was!) the MPI C++ bindings and with Object Oriented MPI (OOMPI).  They were portable packages that ran on lots of different MPI's; their respective test suites found lots of problems in various MPI implementations.  The LAM/MPI guys sent me a t-shirt for my efforts, which pretty much locked in my long slide into the deep, dark world of MPI implementers.  ;-)
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
<li><strong>Next message:</strong> <a href="13116.php">Olivier Riff: "Re: [OMPI users] General question on the implementation of a&quot;scheduler&quot; on client side..."</a>
<li><strong>Previous message:</strong> <a href="13114.php">Lisandro Dalcin: "Re: [OMPI users] Allgather in inter-communicator bug,"</a>
<li><strong>In reply to:</strong> <a href="13114.php">Lisandro Dalcin: "Re: [OMPI users] Allgather in inter-communicator bug,"</a>
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
