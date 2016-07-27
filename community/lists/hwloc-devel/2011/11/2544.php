<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3971";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 25 04:09:09 2011" -->
<!-- isoreceived="20111125090909" -->
<!-- sent="Fri, 25 Nov 2011 10:09:04 +0100" -->
<!-- isosent="20111125090904" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3971" -->
<!-- id="4ECF5B30.1020402_at_inria.fr" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="201111250756.pAP7ushG022343_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3971<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-25 04:09:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2545.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3971"</a>
<li><strong>Previous message:</strong> <a href="2543.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.3.1rc1r3966)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2545.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3971"</a>
<li><strong>Maybe reply:</strong> <a href="2545.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3971"</a>
<li><strong>Maybe reply:</strong> <a href="2546.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3971"</a>
<li><strong>Maybe reply:</strong> <a href="2547.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3971"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't see any call to cuInit(). Does it mean that we don't have to
<br>
wait 3s during startup as usual with CUDA?
<br>
<p>Brice
<br>
<p><p><p><p>Le 25/11/2011 08:56, sthibaul_at_[hidden] a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt; Author: sthibaul
</span><br>
<span class="quotelev1">&gt; Date: 2011-11-25 02:56:52 EST (Fri, 25 Nov 2011)
</span><br>
<span class="quotelev1">&gt; New Revision: 3971
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/hwloc/changeset/3971">https://svn.open-mpi.org/trac/hwloc/changeset/3971</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Add experimental CUDA device detection. Still has to be re-tuned to look better.
</span><br>
<span class="quotelev1">&gt; Added:
</span><br>
<span class="quotelev1">&gt;    branches/cuda/src/topology-cuda.c
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;    branches/cuda/NEWS                      |     1                                         
</span><br>
<span class="quotelev1">&gt;    branches/cuda/config/hwloc.m4           |    46 ++++++++++++++++++++++++++++++++++++++++
</span><br>
<span class="quotelev1">&gt;    branches/cuda/config/hwloc_internal.m4  |    30 --------------------------              
</span><br>
<span class="quotelev1">&gt;    branches/cuda/include/hwloc/rename.h    |     2 +                                       
</span><br>
<span class="quotelev1">&gt;    branches/cuda/include/private/private.h |     4 +++                                     
</span><br>
<span class="quotelev1">&gt;    branches/cuda/src/Makefile.am           |    10 ++++++--                                
</span><br>
<span class="quotelev1">&gt;    branches/cuda/src/topology.c            |     8 +++++-                                  
</span><br>
<span class="quotelev1">&gt;    7 files changed, 66 insertions(+), 35 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2545.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3971"</a>
<li><strong>Previous message:</strong> <a href="2543.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.3.1rc1r3966)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2545.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3971"</a>
<li><strong>Maybe reply:</strong> <a href="2545.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3971"</a>
<li><strong>Maybe reply:</strong> <a href="2546.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3971"</a>
<li><strong>Maybe reply:</strong> <a href="2547.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3971"</a>
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
