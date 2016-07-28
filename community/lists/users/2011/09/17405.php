<?
$subject_val = "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 23 06:03:33 2011" -->
<!-- isoreceived="20110923100333" -->
<!-- sent="Fri, 23 Sep 2011 06:03:26 -0400" -->
<!-- isosent="20110923100326" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi -cc=&amp;lt;compiler name&amp;gt; option" -->
<!-- id="E5B4F78F-584D-46F8-BDAC-75E83ABE83F3_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CALA1MBKoNR-KrGhPNLBN0QnPjFzBpJX4uZx40tkxF71ZOYDOqw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-23 06:03:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17406.php">Uday Kumar Reddy B: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<li><strong>Previous message:</strong> <a href="17404.php">Paul Kapinos: "[OMPI users] problems with Intel 12.x compilers and OpenMPI (1.4.3)"</a>
<li><strong>In reply to:</strong> <a href="17403.php">Uday Kumar Reddy B: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17407.php">Uday Kumar Reddy B: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<li><strong>Reply:</strong> <a href="17407.php">Uday Kumar Reddy B: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 23, 2011, at 2:04 AM, Uday Kumar Reddy B wrote:
<br>
<p><span class="quotelev1">&gt; Okay. BTW, mpicc only has 7 cmdline options, and you probably already
</span><br>
<span class="quotelev1">&gt; support some of them (-show), and they are all provided for good
</span><br>
<span class="quotelev1">&gt; reason.  
</span><br>
<p>I assume you mean that *MPICH's* mpicc has 7 command line options.  Open MPI's mpicc only has 1: --showme (although it has multiple forms).  It looks like we did make -show be a synonym for --showme, though.
<br>
<p>The FAQ items I sent earlier (and the OMPI mpicc.1 man page) show how we chose to use environment variables instead of command line options for altering the wrapper compiler's behavior.
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
<li><strong>Next message:</strong> <a href="17406.php">Uday Kumar Reddy B: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<li><strong>Previous message:</strong> <a href="17404.php">Paul Kapinos: "[OMPI users] problems with Intel 12.x compilers and OpenMPI (1.4.3)"</a>
<li><strong>In reply to:</strong> <a href="17403.php">Uday Kumar Reddy B: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17407.php">Uday Kumar Reddy B: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<li><strong>Reply:</strong> <a href="17407.php">Uday Kumar Reddy B: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
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
