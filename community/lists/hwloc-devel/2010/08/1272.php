<?
$subject_val = "Re: [hwloc-devel] Support for solaris lgrp_affinity_set";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 20 07:23:04 2010" -->
<!-- isoreceived="20100820112304" -->
<!-- sent="Fri, 20 Aug 2010 07:21:56 -0400" -->
<!-- isosent="20100820112156" -->
<!-- name="Terry Dontje" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Support for solaris lgrp_affinity_set" -->
<!-- id="4C6E6554.9030308_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20100820111256.GO4685_at_const.famille.thibault.fr" -->
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
<strong>Date:</strong> 2010-08-20 07:21:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1273.php">Samuel Thibault: "Re: [hwloc-devel] Support for solaris lgrp_affinity_set"</a>
<li><strong>Previous message:</strong> <a href="1271.php">Samuel Thibault: "Re: [hwloc-devel] Support for solaris lgrp_affinity_set"</a>
<li><strong>In reply to:</strong> <a href="1271.php">Samuel Thibault: "Re: [hwloc-devel] Support for solaris lgrp_affinity_set"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1273.php">Samuel Thibault: "Re: [hwloc-devel] Support for solaris lgrp_affinity_set"</a>
<li><strong>Reply:</strong> <a href="1273.php">Samuel Thibault: "Re: [hwloc-devel] Support for solaris lgrp_affinity_set"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Samuel Thibault wrote:
<br>
<span class="quotelev1">&gt; Terry Dontje, le Fri 20 Aug 2010 06:42:11 -0400, a &#233;crit :
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Samuel Thibault wrote:
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I eventually added using lgrp_affinity_set(). Not as a replacement for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processor_bind, as AIUI, lgrp_affinity_set() doesn't permit to specify
</span><br>
<span class="quotelev3">&gt;&gt;&gt; precise processors.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; I believe (and I might be wrong here) that there are premade lgrps that 
</span><br>
<span class="quotelev2">&gt;&gt; correspond to precise processors.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is unfortunately not the case on the box we have at INRIA:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; lgrp 0 has 0 children
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; while there are two cores on the machine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
That may be due to the version of Solaris you have installed.  I am not 
<br>
sure if any of the S10 updates have these premade lgroups.  Can you tell 
<br>
me what S10 update you are running.
<br>
<span class="quotelev2">&gt;&gt; This is what led me to believe that using lgrp_affinity_set() might
</span><br>
<span class="quotelev2">&gt;&gt; help in being able to bind to multiple processors.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If there was assurance that there is a lgrp for them, yes, but
</span><br>
<span class="quotelev1">&gt; apparently it's not always true.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Unfortunately I don't have the exact particulars to give you.  If I get 
</span><br>
<span class="quotelev2">&gt;&gt; some time in the next couple weeks I'll see if I can come up with some 
</span><br>
<span class="quotelev2">&gt;&gt; example code that might be able to do the above.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Actually, what would more helpful would be access to some big solaris
</span><br>
<span class="quotelev1">&gt; machine, as we (INRIA) currently don't even have access to a NUMA
</span><br>
<span class="quotelev1">&gt; solaris machine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
I have access to some of these types of machines internally.  I believe 
<br>
all of the larger ones are SPARC based.  Unfortunately, there is no way 
<br>
I can get you access to them since they are development machines behind 
<br>
our firewall and our policy does not allow for such.
<br>
<p>Is there a set of tests you would like me to run for you?
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-1272/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/hwloc-devel/att-1272/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1273.php">Samuel Thibault: "Re: [hwloc-devel] Support for solaris lgrp_affinity_set"</a>
<li><strong>Previous message:</strong> <a href="1271.php">Samuel Thibault: "Re: [hwloc-devel] Support for solaris lgrp_affinity_set"</a>
<li><strong>In reply to:</strong> <a href="1271.php">Samuel Thibault: "Re: [hwloc-devel] Support for solaris lgrp_affinity_set"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1273.php">Samuel Thibault: "Re: [hwloc-devel] Support for solaris lgrp_affinity_set"</a>
<li><strong>Reply:</strong> <a href="1273.php">Samuel Thibault: "Re: [hwloc-devel] Support for solaris lgrp_affinity_set"</a>
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
