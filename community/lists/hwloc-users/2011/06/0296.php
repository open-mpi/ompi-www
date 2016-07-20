<?
$subject_val = "Re: [hwloc-users] Patch to disable GCC __builtin_ operations";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  8 17:58:49 2011" -->
<!-- isoreceived="20110608215849" -->
<!-- sent="Wed, 8 Jun 2011 23:58:43 +0200" -->
<!-- isosent="20110608215843" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Patch to disable GCC __builtin_ operations" -->
<!-- id="20110608215843.GH4889_at_const.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="310306783.1297397.1307564933212.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Patch to disable GCC __builtin_ operations<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-08 17:58:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0297.php">Josh Hursey: "Re: [hwloc-users] Patch to disable GCC __builtin_ operations"</a>
<li><strong>Previous message:</strong> <a href="0295.php">Jeff Squyres: "Re: [hwloc-users] Patch to disable GCC __builtin_ operations"</a>
<li><strong>Maybe in reply to:</strong> <a href="0290.php">Josh Hursey: "[hwloc-users] Patch to disable GCC __builtin_ operations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0297.php">Josh Hursey: "Re: [hwloc-users] Patch to disable GCC __builtin_ operations"</a>
<li><strong>Reply:</strong> <a href="0297.php">Josh Hursey: "Re: [hwloc-users] Patch to disable GCC __builtin_ operations"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Josh Hursey, le Wed 08 Jun 2011 22:28:53 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; I hit a problem when installing hwloc statically on a machine with a
</span><br>
<span class="quotelev1">&gt; slightly different gcc support libraries and OSs on the head/compile
</span><br>
<span class="quotelev1">&gt; node versus the compute nodes. The builtin functions would cause hwloc
</span><br>
<span class="quotelev1">&gt; to segfault when run on the compute nodes. By disabling the builtin
</span><br>
<span class="quotelev1">&gt; operations, and using the more portable techniques seemed to do the
</span><br>
<span class="quotelev1">&gt; trick.
</span><br>
<p>This is very odd.  How does it segfault exactly?  Unless you are (or
<br>
your distribution is) using an -march=something option, gcc is not
<br>
supposed to produce code which can not be run on another machine.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0297.php">Josh Hursey: "Re: [hwloc-users] Patch to disable GCC __builtin_ operations"</a>
<li><strong>Previous message:</strong> <a href="0295.php">Jeff Squyres: "Re: [hwloc-users] Patch to disable GCC __builtin_ operations"</a>
<li><strong>Maybe in reply to:</strong> <a href="0290.php">Josh Hursey: "[hwloc-users] Patch to disable GCC __builtin_ operations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0297.php">Josh Hursey: "Re: [hwloc-users] Patch to disable GCC __builtin_ operations"</a>
<li><strong>Reply:</strong> <a href="0297.php">Josh Hursey: "Re: [hwloc-users] Patch to disable GCC __builtin_ operations"</a>
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
