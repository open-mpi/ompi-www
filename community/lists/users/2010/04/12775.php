<?
$subject_val = "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and  CentOS";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 26 02:45:49 2010" -->
<!-- isoreceived="20100426064549" -->
<!-- sent="Mon, 26 Apr 2010 08:38:08 +0200" -->
<!-- isosent="20100426063808" -->
<!-- name="Sylvestre Ledru" -->
<!-- email="sylvestre.ledru_at_[hidden]" -->
<!-- subject="Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and  CentOS" -->
<!-- id="1272263888.1523.76233.camel_at_korcula.inria.fr" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="u2m28d120cc1004251933z97313a56jb33b1bf1a194e8c6_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and  CentOS<br>
<strong>From:</strong> Sylvestre Ledru (<em>sylvestre.ledru_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-26 02:38:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12776.php">Ashley Pittman: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<li><strong>Previous message:</strong> <a href="12774.php">jody: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<li><strong>In reply to:</strong> <a href="12772.php">Asad Ali: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12791.php">Dave Love: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and  CentOS"</a>
<li><strong>Reply:</strong> <a href="12791.php">Dave Love: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and  CentOS"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Le lundi 26 avril 2010 &#195;&#160; 14:33 +1200, Asad Ali a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt; Hi Jodi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I once got different results when running on a 64-Bit platform
</span><br>
<span class="quotelev1">&gt; instead of 
</span><br>
<span class="quotelev2">&gt; &gt; a 32 bit platform - if i remember correctly, the reason was that on
</span><br>
<span class="quotelev1">&gt; the 
</span><br>
<span class="quotelev2">&gt; &gt; 32-bit platform 80bit extended precision floats were used but on the
</span><br>
<span class="quotelev1">&gt; 64bit 
</span><br>
<span class="quotelev2">&gt; &gt; platform only 64bit floats. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Could you please give me an idea as how to check this extended
</span><br>
<span class="quotelev1">&gt; precision.
</span><br>
This code will set the precision to double:
<br>
<p>#include &lt;fpu_control.h&gt;
<br>
fpu_control_t _cw; 
<br>
_FPU_GETCW(_cw); 
<br>
_cw = (_cw &amp; ~_FPU_DOUBLE) | _FPU_EXTENDED;
<br>
_FPU_SETCW(_cw); 
<br>
<p>You should get the same result on 32 &amp; 64 bits CPU then.
<br>
<p>Sylvestre
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12776.php">Ashley Pittman: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<li><strong>Previous message:</strong> <a href="12774.php">jody: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<li><strong>In reply to:</strong> <a href="12772.php">Asad Ali: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12791.php">Dave Love: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and  CentOS"</a>
<li><strong>Reply:</strong> <a href="12791.php">Dave Love: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and  CentOS"</a>
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
