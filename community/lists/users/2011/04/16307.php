<?
$subject_val = "Re: [OMPI users] Need help buiding OpenMPI with Intel v12.0 compilers on Linux";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 21 18:35:22 2011" -->
<!-- isoreceived="20110421223522" -->
<!-- sent="Thu, 21 Apr 2011 18:35:16 -0400" -->
<!-- isosent="20110421223516" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Need help buiding OpenMPI with Intel v12.0 compilers on Linux" -->
<!-- id="588C7AF6-9A18-4BE6-A96D-05800581E9E5_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20110420094421.69425y5xfaomo10k_at_webtools.cc.umanitoba.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] Need help buiding OpenMPI with Intel v12.0 compilers on Linux<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-21 18:35:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16308.php">Brock Palen: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<li><strong>Previous message:</strong> <a href="16306.php">Jeff Squyres: "Re: [OMPI users] using openib and psm together"</a>
<li><strong>In reply to:</strong> <a href="16295.php">Ormiston, Scott J.: "Re: [OMPI users] Need help buiding OpenMPI with Intel v12.0 compilers on Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16361.php">Tru Huynh: "Re: [OMPI users] Need help buiding OpenMPI with Intel v12.0 compilers on Linux"</a>
<li><strong>Reply:</strong> <a href="16361.php">Tru Huynh: "Re: [OMPI users] Need help buiding OpenMPI with Intel v12.0 compilers on Linux"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 20, 2011, at 10:44 AM, Ormiston, Scott J. wrote:
<br>
<p><span class="quotelev1">&gt; I originally thought the configure was fine, but now tht I check through the config.log, I see that it had errors:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; conftest.c(49): error #2379: cannot open source file &quot;ac_nonexistent.h&quot;
</span><br>
<span class="quotelev1">&gt;  #include &lt;ac_nonexistent.h&gt;
</span><br>
<p>It's normal and expected for there to be lots of errors in config.log.  
<br>
<p>There's a bunch of tests in configure that are designed to succeed on some systems and fail on others.  
<br>
<p>So don't read anything into the failures that you see in config.log -- unless configure itself fails.  Then we generally go look at the *last* failures in config.log to start backtracking to figure out what went wrong.
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
<li><strong>Next message:</strong> <a href="16308.php">Brock Palen: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<li><strong>Previous message:</strong> <a href="16306.php">Jeff Squyres: "Re: [OMPI users] using openib and psm together"</a>
<li><strong>In reply to:</strong> <a href="16295.php">Ormiston, Scott J.: "Re: [OMPI users] Need help buiding OpenMPI with Intel v12.0 compilers on Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16361.php">Tru Huynh: "Re: [OMPI users] Need help buiding OpenMPI with Intel v12.0 compilers on Linux"</a>
<li><strong>Reply:</strong> <a href="16361.php">Tru Huynh: "Re: [OMPI users] Need help buiding OpenMPI with Intel v12.0 compilers on Linux"</a>
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
