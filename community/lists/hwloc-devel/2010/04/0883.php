<?
$subject_val = "Re: [hwloc-devel] Embedding: is it worth it?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr  4 12:15:44 2010" -->
<!-- isoreceived="20100404161544" -->
<!-- sent="Sun, 4 Apr 2010 18:15:37 +0200" -->
<!-- isosent="20100404161537" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Embedding: is it worth it?" -->
<!-- id="20100404161537.GE3973_at_const.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="54A7A5DD-9FB4-44DB-A6E3-38D12417531A_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Embedding: is it worth it?<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-04 12:15:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0884.php">MPI Team: "[hwloc-devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>Previous message:</strong> <a href="0882.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1910"</a>
<li><strong>In reply to:</strong> <a href="0877.php">Jeff Squyres: "Re: [hwloc-devel] Embedding: is it worth it?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0887.php">Jeff Squyres: "Re: [hwloc-devel] Embedding: is it worth it?"</a>
<li><strong>Reply:</strong> <a href="0887.php">Jeff Squyres: "Re: [hwloc-devel] Embedding: is it worth it?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres, le Fri 02 Apr 2010 14:51:06 -0400, a &#233;crit :
<br>
<span class="quotelev1">&gt; On Apr 2, 2010, at 2:25 PM, Samuel Thibault wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; But to use an external PLPA/libltdl/whatever, OMPI's configure would just call their configure
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I'm not 100% sure what RedHat etc. do, but in Debian the policy wouldn't
</span><br>
<span class="quotelev2">&gt; &gt; be to do this, but to just link against the existing installed library,
</span><br>
<span class="quotelev2">&gt; &gt; i.e. use the installed hwloc.pc file only, _not_ run its configure
</span><br>
<span class="quotelev2">&gt; &gt; script.  I believe that's what RedHat etc. mean.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To be clear, if OMPI is to use the internal/embedded copy, it would just call the $path_to_hwloc/configure.
</span><br>
<p>Do you mean that if OMPI had to be able to use an external copy in some
<br>
cases, for the internal case it would now just use ./configure?  Why
<br>
is it so?  Can't the main ./configure call the hwloc m4 stuff or not
<br>
depending on whether the internal or the external version is used?
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0884.php">MPI Team: "[hwloc-devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>Previous message:</strong> <a href="0882.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1910"</a>
<li><strong>In reply to:</strong> <a href="0877.php">Jeff Squyres: "Re: [hwloc-devel] Embedding: is it worth it?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0887.php">Jeff Squyres: "Re: [hwloc-devel] Embedding: is it worth it?"</a>
<li><strong>Reply:</strong> <a href="0887.php">Jeff Squyres: "Re: [hwloc-devel] Embedding: is it worth it?"</a>
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
