<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep 21 10:06:42 2006" -->
<!-- isoreceived="20060921140642" -->
<!-- sent="Thu, 21 Sep 2006 16:06:34 +0200" -->
<!-- isosent="20060921140634" -->
<!-- name="&#197;ke Sandgren" -->
<!-- email="ake.sandgren_at_[hidden]" -->
<!-- subject="Re: [OMPI users] BLACS Tester installation errors" -->
<!-- id="1158847594.6285.60.camel_at_skalman.hpc2n.umu.se" -->
<!-- inreplyto="45125AB80200005100004051_at_groupwise.wmich.edu" -->
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
<strong>From:</strong> &#197;ke Sandgren (<em>ake.sandgren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-21 10:06:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1886.php">Lydia Heck: "[OMPI users] sed: command garbled:"</a>
<li><strong>Previous message:</strong> <a href="1884.php">Benjamin Gaudio: "[OMPI users] BLACS Tester installation errors"</a>
<li><strong>In reply to:</strong> <a href="1884.php">Benjamin Gaudio: "[OMPI users] BLACS Tester installation errors"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 2006-09-21 at 09:26 -0400, Benjamin Gaudio wrote:
<br>
<span class="quotelev1">&gt; I have installed OpenMPI 1.1.1 for the first time yesterday and am
</span><br>
<span class="quotelev1">&gt; now having trouble getting the BLACS Tester to install properly. 
</span><br>
<span class="quotelev1">&gt; OpenMPI seemed to build without error, and BLACS also built without
</span><br>
<span class="quotelev1">&gt; any apparent errors.  When I tried to install the Blacs tester, one
</span><br>
<span class="quotelev1">&gt; of the first lines of output was:
</span><br>
<p>To compile blacstest with g77 you need
<br>
-fugly-complex -fno-globals -Wno-globals
<br>
Add this to TESTING/Makefile
<br>
where it compiles blacstest.
<br>
<p>blacstest.o : blacstest.f
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$(F77) -fugly-complex -fno-globals -Wno-globals
<br>
$(F77NO_OPTFLAGS) -c $*.f
<br>
<p><pre>
-- 
Ake Sandgren, HPC2N, Umea University, S-90187 Umea, Sweden
Internet: ake_at_[hidden]   Phone: +46 90 7866134 Fax: +46 90 7866126
Mobile: +46 70 7716134 WWW: <a href="http://www.hpc2n.umu.se">http://www.hpc2n.umu.se</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1886.php">Lydia Heck: "[OMPI users] sed: command garbled:"</a>
<li><strong>Previous message:</strong> <a href="1884.php">Benjamin Gaudio: "[OMPI users] BLACS Tester installation errors"</a>
<li><strong>In reply to:</strong> <a href="1884.php">Benjamin Gaudio: "[OMPI users] BLACS Tester installation errors"</a>
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
