<?
$subject_val = "Re: [OMPI users] General question on the implementation ofa&quot;scheduler&quot; on client side...";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 21 15:59:43 2010" -->
<!-- isoreceived="20100521195943" -->
<!-- sent="Fri, 21 May 2010 15:59:37 -0400" -->
<!-- isosent="20100521195937" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] General question on the implementation ofa&amp;quot;scheduler&amp;quot; on client side..." -->
<!-- id="774A79AD-8906-4A7B-B9BF-7848F6FE9545_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTimTTDTnDzimTEmQXds3bkUQ2FU-3-M8zblcZkyE_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] General question on the implementation ofa&quot;scheduler&quot; on client side...<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-21 15:59:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13129.php">Pankatz, Klaus: "Re: [OMPI users] An error occured in MPI_Bcast; MPI_ERR_TYPE: invalid datatype"</a>
<li><strong>Previous message:</strong> <a href="13127.php">Michael E. Thomadakis: "Re: [OMPI users] Some Questions on Building OMPI on Linux Em64t"</a>
<li><strong>In reply to:</strong> <a href="13116.php">Olivier Riff: "Re: [OMPI users] General question on the implementation of a&quot;scheduler&quot; on client side..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13132.php">Olivier Riff: "Re: [OMPI users] General question on the implementation ofa&quot;scheduler&quot; on client side..."</a>
<li><strong>Reply:</strong> <a href="13132.php">Olivier Riff: "Re: [OMPI users] General question on the implementation ofa&quot;scheduler&quot; on client side..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 21, 2010, at 3:13 AM, Olivier Riff wrote:
<br>
<p><span class="quotelev1">&gt; -&gt; That is what I was thinking about to implement. As you mentioned, and specifically for my case where I mainly send short messages, there might not be much win. By the way, are their some benchmarks testing sequential MPI_ISend versus MPI_BCAST for instance ? The aim is to determine up which buffer size a MPI_BCast is worth to be used for my case. You can answer that the test is easy to do and that I can test it by myself :)
</span><br>
<p>&quot;It depends&quot;.  :-)
<br>
<p>You're probably best writing a benchmark yourself that mirrors what your application is going to do.
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
<li><strong>Next message:</strong> <a href="13129.php">Pankatz, Klaus: "Re: [OMPI users] An error occured in MPI_Bcast; MPI_ERR_TYPE: invalid datatype"</a>
<li><strong>Previous message:</strong> <a href="13127.php">Michael E. Thomadakis: "Re: [OMPI users] Some Questions on Building OMPI on Linux Em64t"</a>
<li><strong>In reply to:</strong> <a href="13116.php">Olivier Riff: "Re: [OMPI users] General question on the implementation of a&quot;scheduler&quot; on client side..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13132.php">Olivier Riff: "Re: [OMPI users] General question on the implementation ofa&quot;scheduler&quot; on client side..."</a>
<li><strong>Reply:</strong> <a href="13132.php">Olivier Riff: "Re: [OMPI users] General question on the implementation ofa&quot;scheduler&quot; on client side..."</a>
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
