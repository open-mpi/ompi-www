<?
$subject_val = "Re: [hwloc-devel] release status";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  2 16:32:41 2009" -->
<!-- isoreceived="20091002203241" -->
<!-- sent="Fri, 2 Oct 2009 22:32:33 +0200" -->
<!-- isosent="20091002203233" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] release status" -->
<!-- id="20091002203233.GA28936_at_const" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="5DFC06AD-6DDE-4C88-8B25-1DB5E02E2047_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] release status<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-02 16:32:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0137.php">Fawzi Mohamed: "Re: [hwloc-devel] release status"</a>
<li><strong>Previous message:</strong> <a href="0135.php">Jeff Squyres: "Re: [hwloc-devel] release status"</a>
<li><strong>In reply to:</strong> <a href="0135.php">Jeff Squyres: "Re: [hwloc-devel] release status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0137.php">Fawzi Mohamed: "Re: [hwloc-devel] release status"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres, le Fri 02 Oct 2009 16:22:45 -0400, a &#233;crit :
<br>
<span class="quotelev1">&gt; *If* there is a problem, I'm sure that casting through a neutral
</span><br>
<span class="quotelev1">&gt; type would resolve the problem (e.g., if the public handle type was
</span><br>
<span class="quotelev1">&gt; &quot;unsigned long&quot;).
</span><br>
<p>Errr.  I'm rather sure that it would just _hide_ the problem, if there
<br>
was any.
<br>
<p>The linker remembers sizes to make sure there are no possible
<br>
incoherency issues.  The problem you had in OpenMPI is that it doesn't
<br>
know that the underlying structure is actually hidden from the
<br>
application programmer, and that not checking the size is actually safe.
<br>
In the case of malloc, the void* pointer is already a neutral type
<br>
concerning the size.  Only _function_ pointers are not so neutral on
<br>
some archs like ia64.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0137.php">Fawzi Mohamed: "Re: [hwloc-devel] release status"</a>
<li><strong>Previous message:</strong> <a href="0135.php">Jeff Squyres: "Re: [hwloc-devel] release status"</a>
<li><strong>In reply to:</strong> <a href="0135.php">Jeff Squyres: "Re: [hwloc-devel] release status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0137.php">Fawzi Mohamed: "Re: [hwloc-devel] release status"</a>
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
