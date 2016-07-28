<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4554 - trunk/utils";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 29 16:29:05 2012" -->
<!-- isoreceived="20120629202905" -->
<!-- sent="Fri, 29 Jun 2012 22:28:50 +0200 (CEST)" -->
<!-- isosent="20120629202850" -->
<!-- name="Brice Goglin" -->
<!-- email="brice.goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4554 - trunk/utils" -->
<!-- id="1956331553.9578628.1341001730900.JavaMail.root_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20120629201847.GW27398_at_type.inf.ufrgs.br" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4554 - trunk/utils<br>
<strong>From:</strong> Brice Goglin (<em>brice.goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-29 16:28:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3141.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4554 - trunk/utils"</a>
<li><strong>Previous message:</strong> <a href="3139.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4554 - trunk/utils"</a>
<li><strong>In reply to:</strong> <a href="3139.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4554 - trunk/utils"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3141.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4554 - trunk/utils"</a>
<li><strong>Reply:</strong> <a href="3141.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4554 - trunk/utils"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
----- Mail original -----
<br>
<span class="quotelev1">&gt; De: &quot;Samuel Thibault&quot; &lt;samuel.thibault_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &#192;: &quot;Hardware locality development list&quot; &lt;hwloc-devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Envoy&#233;: Vendredi 29 Juin 2012 22:18:47
</span><br>
<span class="quotelev1">&gt; Objet: Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4554 - trunk/utils
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice Goglin, le Fri 29 Jun 2012 22:10:30 +0200, a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; --pid doesn't care about binding, it just changes things like
</span><br>
<span class="quotelev2">&gt; &gt; cgroups
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Uh?  It's in there since a long time: lstopo-draw.c pu_draw():
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       else if (pid == 0)
</span><br>
<span class="quotelev1">&gt;         hwloc_get_cpubind(topology, bind, 0);
</span><br>
<span class="quotelev1">&gt;       if (bind &amp;&amp; hwloc_bitmap_isset(bind, level-&gt;os_index))
</span><br>
<span class="quotelev1">&gt;         methods-&gt;box(output, RUNNING_R_COLOR, RUNNING_G_COLOR,
</span><br>
<span class="quotelev1">&gt;         RUNNING_B_COLOR, depth, x, *retwidth, y, *retheight);
</span><br>
<p>Arg, I was using the console output (hwloc-nox). The manpage doesn't specify whether --pid 0 works in console mode. I don't have the source code at hand. But if it's colorizing boxes, I assume it doesn't :)
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3141.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4554 - trunk/utils"</a>
<li><strong>Previous message:</strong> <a href="3139.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4554 - trunk/utils"</a>
<li><strong>In reply to:</strong> <a href="3139.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4554 - trunk/utils"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3141.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4554 - trunk/utils"</a>
<li><strong>Reply:</strong> <a href="3141.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4554 - trunk/utils"</a>
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
