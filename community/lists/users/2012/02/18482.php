<?
$subject_val = "Re: [OMPI users] Different Prefix for different nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 15 11:08:53 2012" -->
<!-- isoreceived="20120215160853" -->
<!-- sent="Wed, 15 Feb 2012 11:08:48 -0500" -->
<!-- isosent="20120215160848" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Different Prefix for different nodes" -->
<!-- id="8B5AFC46-7D3D-4C60-BB62-13A4D0C5A3BC_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CALd0-531dYAh52-XfxnuiGas7HKtjJ9yMauD9hF4coShMyF1zw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Different Prefix for different nodes<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-15 11:08:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18483.php">Shamis, Pavel: "Re: [OMPI users] IB Memory Requirements, adjusting for reduced memory consumption"</a>
<li><strong>Previous message:</strong> <a href="18481.php">Jeff Squyres: "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
<li><strong>In reply to:</strong> <a href="18464.php">Tohiko Looka: "[OMPI users] Different Prefix for different nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18485.php">Tohiko Looka: "Re: [OMPI users] Different Prefix for different nodes"</a>
<li><strong>Reply:</strong> <a href="18485.php">Tohiko Looka: "Re: [OMPI users] Different Prefix for different nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 14, 2012, at 4:06 PM, Tohiko Looka wrote:
<br>
<p><span class="quotelev1">&gt; I'm trying to run my application on different nodes; each with a different path to OpenMPI libraries and binaries.
</span><br>
<span class="quotelev1">&gt; According to the documentation I can set '-prefix' on a per-context basis, so I can set '-prefix' differently
</span><br>
<span class="quotelev1">&gt; for each node, but I wasn't able to do it and I didn't find an example
</span><br>
<p>Yoinks -- that might be incorrect documentation.  I'm pretty sure --prefix is a global switch.
<br>
<p>If you have OMPI installed in different locations on different nodes, --prefix might not be a good solution.  Instead, you might well want to set your PATH/LD_LIBRARY_PATH in the shell startup files on each node (e.g., $HOME/.bashrc) to values that are relevant for that node.
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
<li><strong>Next message:</strong> <a href="18483.php">Shamis, Pavel: "Re: [OMPI users] IB Memory Requirements, adjusting for reduced memory consumption"</a>
<li><strong>Previous message:</strong> <a href="18481.php">Jeff Squyres: "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
<li><strong>In reply to:</strong> <a href="18464.php">Tohiko Looka: "[OMPI users] Different Prefix for different nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18485.php">Tohiko Looka: "Re: [OMPI users] Different Prefix for different nodes"</a>
<li><strong>Reply:</strong> <a href="18485.php">Tohiko Looka: "Re: [OMPI users] Different Prefix for different nodes"</a>
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
