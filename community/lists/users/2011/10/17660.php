<?
$subject_val = "Re: [OMPI users] Error when calling MPI_Init";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 31 15:39:47 2011" -->
<!-- isoreceived="20111031193947" -->
<!-- sent="Mon, 31 Oct 2011 15:39:42 -0400" -->
<!-- isosent="20111031193942" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error when calling MPI_Init" -->
<!-- id="8656B47E-3C81-4BD4-8FEE-A26E54D40807_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="56D095A2-424A-4BCE-883B-FA560622E2F1_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error when calling MPI_Init<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-31 15:39:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/11/17661.php">amine mrabet: "[OMPI users] probl&#232;me with MPI_FINALIZE"</a>
<li><strong>Previous message:</strong> <a href="17659.php">Weston, Stephen: "Re: [OMPI users] Error when calling MPI_Init"</a>
<li><strong>In reply to:</strong> <a href="17658.php">Ralph Castain: "Re: [OMPI users] Error when calling MPI_Init"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 31, 2011, at 12:33 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev2">&gt;&gt; A colleague who reads this list pointed out to me that the
</span><br>
<span class="quotelev2">&gt;&gt; problem is probably because the cluster that I'm using has
</span><br>
<span class="quotelev2">&gt;&gt; QLogic infiniband cards that apparently require 
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_MCA_orte_precondition_transports to be set.  That
</span><br>
<span class="quotelev2">&gt;&gt; may be the answer to my question.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That was my next question :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Your colleague is correct. Alternatively, you can tell OMPI to ignore the psm interface to those cards by either configuring it out (--without-psm) or at run time by setting the envar OMPI_MCA_mtl=^psm
</span><br>
<p>Note that your original workaround:
<br>
<p><span class="quotelev3">&gt;&gt;&gt; I can work around the problem by setting the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;OMPI_MCA_orte_precondition_transports&quot; environment variable
</span><br>
<span class="quotelev3">&gt;&gt;&gt; before running the program using the command:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; % eval &quot;export `mpirun env | grep OMPI_MCA_orte_precondition_transports`&quot;
</span><br>
<p>might actually be a good idea here, because PSM is the most performant interface on QLogic cards.
<br>
<p>However, if your application doesn't care (i.e., it's not bound by extremely low latency, message injection rates, or high bandwidth), then it might not matter.
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
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/11/17661.php">amine mrabet: "[OMPI users] probl&#232;me with MPI_FINALIZE"</a>
<li><strong>Previous message:</strong> <a href="17659.php">Weston, Stephen: "Re: [OMPI users] Error when calling MPI_Init"</a>
<li><strong>In reply to:</strong> <a href="17658.php">Ralph Castain: "Re: [OMPI users] Error when calling MPI_Init"</a>
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
