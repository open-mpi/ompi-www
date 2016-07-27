<?
$subject_val = "Re: [hwloc-devel] Support for solaris lgrp_affinity_set";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 20 06:43:38 2010" -->
<!-- isoreceived="20100820104338" -->
<!-- sent="Fri, 20 Aug 2010 06:42:11 -0400" -->
<!-- isosent="20100820104211" -->
<!-- name="Terry Dontje" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Support for solaris lgrp_affinity_set" -->
<!-- id="4C6E5C03.1030903_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20100819153108.GB5327_at_const.bordeaux.inria.fr" -->
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
<strong>From:</strong> Terry Dontje (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-20 06:42:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1271.php">Samuel Thibault: "Re: [hwloc-devel] Support for solaris lgrp_affinity_set"</a>
<li><strong>Previous message:</strong> <a href="1269.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2418)"</a>
<li><strong>In reply to:</strong> <a href="1268.php">Samuel Thibault: "Re: [hwloc-devel] Support for solaris lgrp_affinity_set"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1271.php">Samuel Thibault: "Re: [hwloc-devel] Support for solaris lgrp_affinity_set"</a>
<li><strong>Reply:</strong> <a href="1271.php">Samuel Thibault: "Re: [hwloc-devel] Support for solaris lgrp_affinity_set"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Samuel Thibault wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Terry Dontje, le Fri 06 Aug 2010 13:11:30 -0400, a &#233;crit :
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Is anyone looking at replacing the Solaris processor_bind calls with 
</span><br>
<span class="quotelev2">&gt;&gt; lgrp_affinity_set calls in hwloc?
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I eventually added using lgrp_affinity_set(). Not as a replacement for
</span><br>
<span class="quotelev1">&gt; processor_bind, as AIUI, lgrp_affinity_set() doesn't permit to specify
</span><br>
<span class="quotelev1">&gt; precise processors.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
I believe (and I might be wrong here) that there are premade lgrps that 
<br>
correspond to precise processors.   In another life here at Oracle I've 
<br>
used OpenSolaris plgrp command to bind processes to lgrps that contained 
<br>
specific processors.  This is what led me to believe that
<br>
using lgrp_affinity_set() might help in being able to bind to multiple 
<br>
processors.
<br>
<p>Unfortunately I don't have the exact particulars to give you.  If I get 
<br>
some time in the next couple weeks I'll see if I can come up with some 
<br>
example code that might be able to do the above.
<br>
<p><pre>
-- 
Oracle
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle * - Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-1270/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/hwloc-devel/att-1270/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1271.php">Samuel Thibault: "Re: [hwloc-devel] Support for solaris lgrp_affinity_set"</a>
<li><strong>Previous message:</strong> <a href="1269.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2418)"</a>
<li><strong>In reply to:</strong> <a href="1268.php">Samuel Thibault: "Re: [hwloc-devel] Support for solaris lgrp_affinity_set"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1271.php">Samuel Thibault: "Re: [hwloc-devel] Support for solaris lgrp_affinity_set"</a>
<li><strong>Reply:</strong> <a href="1271.php">Samuel Thibault: "Re: [hwloc-devel] Support for solaris lgrp_affinity_set"</a>
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
