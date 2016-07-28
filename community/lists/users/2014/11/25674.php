<?
$subject_val = "Re: [OMPI users] mpirun error";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  4 18:06:08 2014" -->
<!-- isoreceived="20141104230608" -->
<!-- sent="Tue, 4 Nov 2014 23:06:06 +0000" -->
<!-- isosent="20141104230606" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun error" -->
<!-- id="7867F97D-32B0-4E1E-8A7F-782006C0EB07_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4582413.HAr0cQaKh5_at_jfsanchez-inspiron-1525" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun error<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-04 18:06:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25675.php">jfsanchez: "Re: [OMPI users] mpirun error"</a>
<li><strong>Previous message:</strong> <a href="25673.php">jfsanchez: "[OMPI users] mpirun error"</a>
<li><strong>In reply to:</strong> <a href="25673.php">jfsanchez: "[OMPI users] mpirun error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25675.php">jfsanchez: "Re: [OMPI users] mpirun error"</a>
<li><strong>Reply:</strong> <a href="25675.php">jfsanchez: "Re: [OMPI users] mpirun error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 4, 2014, at 5:56 PM, jfsanchez &lt;jfsanchez_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; mpirun -np 4 test
</span><br>
<p>Try:
<br>
<p>mpirun -np 4 ./test
<br>
<p>To specifically get the &quot;test&quot; executable in your directory (vs. /bin/test, which OMPI may have found in your PATH).
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
<li><strong>Next message:</strong> <a href="25675.php">jfsanchez: "Re: [OMPI users] mpirun error"</a>
<li><strong>Previous message:</strong> <a href="25673.php">jfsanchez: "[OMPI users] mpirun error"</a>
<li><strong>In reply to:</strong> <a href="25673.php">jfsanchez: "[OMPI users] mpirun error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25675.php">jfsanchez: "Re: [OMPI users] mpirun error"</a>
<li><strong>Reply:</strong> <a href="25675.php">jfsanchez: "Re: [OMPI users] mpirun error"</a>
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
