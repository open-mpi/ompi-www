<?
$subject_val = "Re: [hwloc-devel] Support for solaris lgrp_affinity_set";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 20 08:15:49 2010" -->
<!-- isoreceived="20100820121549" -->
<!-- sent="Fri, 20 Aug 2010 14:15:44 +0200" -->
<!-- isosent="20100820121544" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Support for solaris lgrp_affinity_set" -->
<!-- id="20100820121544.GW4685_at_const.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4C6E6554.9030308_at_oracle.com" -->
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
<strong>Date:</strong> 2010-08-20 08:15:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1274.php">Terry Dontje: "Re: [hwloc-devel] Support for solaris lgrp_affinity_set"</a>
<li><strong>Previous message:</strong> <a href="1272.php">Terry Dontje: "Re: [hwloc-devel] Support for solaris lgrp_affinity_set"</a>
<li><strong>In reply to:</strong> <a href="1272.php">Terry Dontje: "Re: [hwloc-devel] Support for solaris lgrp_affinity_set"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1274.php">Terry Dontje: "Re: [hwloc-devel] Support for solaris lgrp_affinity_set"</a>
<li><strong>Reply:</strong> <a href="1274.php">Terry Dontje: "Re: [hwloc-devel] Support for solaris lgrp_affinity_set"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Terry Dontje, le Fri 20 Aug 2010 07:21:56 -0400, a &#233;crit :
<br>
<span class="quotelev1">&gt; Samuel Thibault wrote:
</span><br>
<span class="quotelev2">&gt; &gt;This is unfortunately not the case on the box we have at INRIA:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;lgrp 0 has 0 children
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;while there are two cores on the machine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That may be due to the version of Solaris you have installed.  I am not 
</span><br>
<span class="quotelev1">&gt; sure if any of the S10 updates have these premade lgroups.  Can you tell 
</span><br>
<span class="quotelev1">&gt; me what S10 update you are running.
</span><br>
<p>I don't think I know how to do this unfortunately :)
<br>
<p>#uname -a                                                     
<br>
SunOS pipol8 5.10 Generic_137138-09 i86pc i386 i86pc Solaris
<br>
#cat /etc/release
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Solaris 10 10/08 s10x_u6wos_07b X86
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Copyright 2008 Sun Microsystems, Inc.  All Rights Reserved.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Use is subject to license terms.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Assembled 27 October 2008
<br>
<p><span class="quotelev1">&gt; I have access to some of these types of machines internally.  I believe 
</span><br>
<span class="quotelev1">&gt; all of the larger ones are SPARC based.  Unfortunately, there is no way 
</span><br>
<span class="quotelev1">&gt; I can get you access to them since they are development machines behind 
</span><br>
<span class="quotelev1">&gt; our firewall and our policy does not allow for such.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there a set of tests you would like me to run for you?
</span><br>
<p>The output of lstopo with --enable-debug given to ./configure should
<br>
already be very good.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1274.php">Terry Dontje: "Re: [hwloc-devel] Support for solaris lgrp_affinity_set"</a>
<li><strong>Previous message:</strong> <a href="1272.php">Terry Dontje: "Re: [hwloc-devel] Support for solaris lgrp_affinity_set"</a>
<li><strong>In reply to:</strong> <a href="1272.php">Terry Dontje: "Re: [hwloc-devel] Support for solaris lgrp_affinity_set"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1274.php">Terry Dontje: "Re: [hwloc-devel] Support for solaris lgrp_affinity_set"</a>
<li><strong>Reply:</strong> <a href="1274.php">Terry Dontje: "Re: [hwloc-devel] Support for solaris lgrp_affinity_set"</a>
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
