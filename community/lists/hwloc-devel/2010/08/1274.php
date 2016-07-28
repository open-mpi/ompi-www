<?
$subject_val = "Re: [hwloc-devel] Support for solaris lgrp_affinity_set";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 20 08:29:38 2010" -->
<!-- isoreceived="20100820122938" -->
<!-- sent="Fri, 20 Aug 2010 08:29:18 -0400" -->
<!-- isosent="20100820122918" -->
<!-- name="Terry Dontje" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Support for solaris lgrp_affinity_set" -->
<!-- id="4C6E751E.60302_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20100820121544.GW4685_at_const.famille.thibault.fr" -->
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
<strong>Date:</strong> 2010-08-20 08:29:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1275.php">Samuel Thibault: "Re: [hwloc-devel] Support for solaris lgrp_affinity_set"</a>
<li><strong>Previous message:</strong> <a href="1273.php">Samuel Thibault: "Re: [hwloc-devel] Support for solaris lgrp_affinity_set"</a>
<li><strong>In reply to:</strong> <a href="1273.php">Samuel Thibault: "Re: [hwloc-devel] Support for solaris lgrp_affinity_set"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1275.php">Samuel Thibault: "Re: [hwloc-devel] Support for solaris lgrp_affinity_set"</a>
<li><strong>Reply:</strong> <a href="1275.php">Samuel Thibault: "Re: [hwloc-devel] Support for solaris lgrp_affinity_set"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Samuel Thibault wrote:
<br>
<span class="quotelev1">&gt; Terry Dontje, le Fri 20 Aug 2010 07:21:56 -0400, a &#233;crit :
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Samuel Thibault wrote:
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is unfortunately not the case on the box we have at INRIA:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lgrp 0 has 0 children
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; while there are two cores on the machine.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; That may be due to the version of Solaris you have installed.  I am not 
</span><br>
<span class="quotelev2">&gt;&gt; sure if any of the S10 updates have these premade lgroups.  Can you tell 
</span><br>
<span class="quotelev2">&gt;&gt; me what S10 update you are running.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't think I know how to do this unfortunately :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #uname -a                                                     
</span><br>
<span class="quotelev1">&gt; SunOS pipol8 5.10 Generic_137138-09 i86pc i386 i86pc Solaris
</span><br>
<span class="quotelev1">&gt; #cat /etc/release
</span><br>
<span class="quotelev1">&gt;                        Solaris 10 10/08 s10x_u6wos_07b X86
</span><br>
<span class="quotelev1">&gt;   
</span><br>
The u6 above is for update 6.  I know there is an u8 available but I 
<br>
cannot guarrantee you it will have the premade lgroup.  Actually more I 
<br>
think about it I bet S10 never will.
<br>
<span class="quotelev1">&gt;            Copyright 2008 Sun Microsystems, Inc.  All Rights Reserved.
</span><br>
<span class="quotelev1">&gt;                         Use is subject to license terms.
</span><br>
<span class="quotelev1">&gt;                             Assembled 27 October 2008
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; I have access to some of these types of machines internally.  I believe 
</span><br>
<span class="quotelev2">&gt;&gt; all of the larger ones are SPARC based.  Unfortunately, there is no way 
</span><br>
<span class="quotelev2">&gt;&gt; I can get you access to them since they are development machines behind 
</span><br>
<span class="quotelev2">&gt;&gt; our firewall and our policy does not allow for such.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there a set of tests you would like me to run for you?
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The output of lstopo with --enable-debug given to ./configure should
</span><br>
<span class="quotelev1">&gt; already be very good.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
Ok, I'll see if I can wrangle some time in the future.  Should I send 
<br>
the results directly to you Samuel?
<br>
<p>--td
<br>
<span class="quotelev1">&gt; Samuel
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p><p><pre>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-1274/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/hwloc-devel/att-1274/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1275.php">Samuel Thibault: "Re: [hwloc-devel] Support for solaris lgrp_affinity_set"</a>
<li><strong>Previous message:</strong> <a href="1273.php">Samuel Thibault: "Re: [hwloc-devel] Support for solaris lgrp_affinity_set"</a>
<li><strong>In reply to:</strong> <a href="1273.php">Samuel Thibault: "Re: [hwloc-devel] Support for solaris lgrp_affinity_set"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1275.php">Samuel Thibault: "Re: [hwloc-devel] Support for solaris lgrp_affinity_set"</a>
<li><strong>Reply:</strong> <a href="1275.php">Samuel Thibault: "Re: [hwloc-devel] Support for solaris lgrp_affinity_set"</a>
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
