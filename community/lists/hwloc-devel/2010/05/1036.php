<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2168";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 28 11:49:34 2010" -->
<!-- isoreceived="20100528154934" -->
<!-- sent="Fri, 28 May 2010 17:49:16 +0200" -->
<!-- isosent="20100528154916" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2168" -->
<!-- id="20100528154916.GL4784_at_const.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="201005281527.o4SFRl6w009321_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2168<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-28 11:49:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1037.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2166)"</a>
<li><strong>Previous message:</strong> <a href="1035.php">Jeff Squyres: "[hwloc-devel] 1.0.1rc1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
bgoglin_at_[hidden], le Fri 28 May 2010 11:27:47 -0400, a &#233;crit :
<br>
<span class="quotelev1">&gt; Add a backend info string, except in XML since we may not want to override the one that we got from the XML file
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +  add_object_info(topology-&gt;levels[0][0], strdup(&quot;Backend=AIX&quot;));
</span><br>
<p>Mmm, this will probably need to be extendable: for instance, one may
<br>
want to use the OS support for NUMA levels and the x86 support for cache
<br>
levels, and a cisco module for network levels, etc.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1037.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2166)"</a>
<li><strong>Previous message:</strong> <a href="1035.php">Jeff Squyres: "[hwloc-devel] 1.0.1rc1"</a>
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
