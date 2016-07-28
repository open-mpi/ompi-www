<?
$subject_val = "Re: [hwloc-devel] Support for solaris lgrp_affinity_set";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 20 07:13:02 2010" -->
<!-- isoreceived="20100820111302" -->
<!-- sent="Fri, 20 Aug 2010 13:12:56 +0200" -->
<!-- isosent="20100820111256" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Support for solaris lgrp_affinity_set" -->
<!-- id="20100820111256.GO4685_at_const.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4C6E5C03.1030903_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Support for solaris lgrp_affinity_set<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-20 07:12:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1272.php">Terry Dontje: "Re: [hwloc-devel] Support for solaris lgrp_affinity_set"</a>
<li><strong>Previous message:</strong> <a href="1270.php">Terry Dontje: "Re: [hwloc-devel] Support for solaris lgrp_affinity_set"</a>
<li><strong>In reply to:</strong> <a href="1270.php">Terry Dontje: "Re: [hwloc-devel] Support for solaris lgrp_affinity_set"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1272.php">Terry Dontje: "Re: [hwloc-devel] Support for solaris lgrp_affinity_set"</a>
<li><strong>Reply:</strong> <a href="1272.php">Terry Dontje: "Re: [hwloc-devel] Support for solaris lgrp_affinity_set"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Terry Dontje, le Fri 20 Aug 2010 06:42:11 -0400, a &#233;crit :
<br>
<span class="quotelev1">&gt; Samuel Thibault wrote:
</span><br>
<span class="quotelev2">&gt; &gt;I eventually added using lgrp_affinity_set(). Not as a replacement for
</span><br>
<span class="quotelev2">&gt; &gt;processor_bind, as AIUI, lgrp_affinity_set() doesn't permit to specify
</span><br>
<span class="quotelev2">&gt; &gt;precise processors.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I believe (and I might be wrong here) that there are premade lgrps that 
</span><br>
<span class="quotelev1">&gt; correspond to precise processors.
</span><br>
<p>This is unfortunately not the case on the box we have at INRIA:
<br>
<p>lgrp 0 has 0 children
<br>
<p>while there are two cores on the machine.
<br>
<p><span class="quotelev1">&gt; This is what led me to believe that using lgrp_affinity_set() might
</span><br>
<span class="quotelev1">&gt; help in being able to bind to multiple processors.
</span><br>
<p>If there was assurance that there is a lgrp for them, yes, but
<br>
apparently it's not always true.
<br>
<p><span class="quotelev1">&gt; Unfortunately I don't have the exact particulars to give you.  If I get 
</span><br>
<span class="quotelev1">&gt; some time in the next couple weeks I'll see if I can come up with some 
</span><br>
<span class="quotelev1">&gt; example code that might be able to do the above.
</span><br>
<p>Actually, what would more helpful would be access to some big solaris
<br>
machine, as we (INRIA) currently don't even have access to a NUMA
<br>
solaris machine.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1272.php">Terry Dontje: "Re: [hwloc-devel] Support for solaris lgrp_affinity_set"</a>
<li><strong>Previous message:</strong> <a href="1270.php">Terry Dontje: "Re: [hwloc-devel] Support for solaris lgrp_affinity_set"</a>
<li><strong>In reply to:</strong> <a href="1270.php">Terry Dontje: "Re: [hwloc-devel] Support for solaris lgrp_affinity_set"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1272.php">Terry Dontje: "Re: [hwloc-devel] Support for solaris lgrp_affinity_set"</a>
<li><strong>Reply:</strong> <a href="1272.php">Terry Dontje: "Re: [hwloc-devel] Support for solaris lgrp_affinity_set"</a>
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
