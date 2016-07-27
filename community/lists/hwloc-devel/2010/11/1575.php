<?
$subject_val = "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 23 03:28:22 2010" -->
<!-- isoreceived="20101123082822" -->
<!-- sent="Tue, 23 Nov 2010 09:28:17 +0100" -->
<!-- isosent="20101123082817" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64" -->
<!-- id="20101123082817.GK5401_at_const.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="823783119.750013.1290499413427.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-23 03:28:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1576.php">Samuel Thibault: "Re: [hwloc-devel] hwloc to be included in RHEL 6.1"</a>
<li><strong>Previous message:</strong> <a href="1574.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>Maybe in reply to:</strong> <a href="1507.php">Christopher Samuel: "[hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Christopher Samuel, le Tue 23 Nov 2010 09:03:33 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; -----BEGIN PGP SIGNED MESSAGE-----
</span><br>
<span class="quotelev1">&gt; Hash: SHA1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 22/11/10 07:48, Christopher Samuel wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; *** glibc detected *** /tmp/hwloc/hwloc-1.1rc2/tests/.libs/hwloc_bind:
</span><br>
<span class="quotelev2">&gt; &gt; free(): invalid next size (fast): 0x1001c240 ***
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now this is weird - if I configure it with CFLAGS=&quot;-m64 -g&quot;
</span><br>
<span class="quotelev1">&gt; (SLES PPC defaults to 32-bit, as does RHEL) then it passes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But if I build on this laptop with CFLAGS=&quot;-m32 -g&quot; then
</span><br>
<span class="quotelev1">&gt; doesn't fail..
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does that ring any bells ?
</span><br>
<p>You can never know when some corruption is at work :)
<br>
(32bit makes things less aligned, thus more prone to buffer-overflow).
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1576.php">Samuel Thibault: "Re: [hwloc-devel] hwloc to be included in RHEL 6.1"</a>
<li><strong>Previous message:</strong> <a href="1574.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>Maybe in reply to:</strong> <a href="1507.php">Christopher Samuel: "[hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
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
