<?
$subject_val = "Re: [hwloc-devel] Servet and hwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  6 09:48:53 2011" -->
<!-- isoreceived="20110606134853" -->
<!-- sent="Mon, 6 Jun 2011 15:48:48 +0200" -->
<!-- isosent="20110606134848" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Servet and hwloc" -->
<!-- id="20110606134848.GW4921_at_const.bordeaux.inria.fr" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[hwloc-devel] Servet and hwloc" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Servet and hwloc<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-06 09:48:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2182.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.3a1r3508)"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2011/05/2180.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.3a1r3505)"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2010/06/1098.php">Samuel Thibault: "[hwloc-devel] Servet and hwloc"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It should be soon possible to easily integrate a servet-based backend,
<br>
which uses performance measurements to infer the topology.
<br>
<p>Samuel
<br>
<p>----- Forwarded message from Jorge Gonzalez Dominguez &lt;jgonzalezd_at_[hidden]&gt; -----
<br>
<p>From: Jorge Gonzalez Dominguez &lt;jgonzalezd_at_[hidden]&gt;
<br>
To: Samuel Thibault &lt;samuel.thibault_at_[hidden]&gt;
<br>
Subject: Re: Servet and hwloc
<br>
Date: Mon, 6 Jun 2011 14:58:32 +0200 (CEST)
<br>
Message-ID: &lt;1345007238.1249498.1307365112426.JavaMail.root_at_[hidden]&gt;
<br>
<p>Hello Samuel,
<br>
<p>We have just developed a new version of Servet, which includes an API to 
<br>
automatically obtain the hardware information within another application 
<br>
or tool. We have found some bugs that we are trying to solve and we 
<br>
expect that the new version will be available during this month.
<br>
<p>As you were interested in using Servet within hwloc, attached you will 
<br>
find the reference manual of the new version of Servet so that you can 
<br>
have an overview of the syntax and functionality of the library. Please, 
<br>
feel free to make any suggestion and we will try to consider it before 
<br>
the release.
<br>
<p>Regards,
<br>
<p>Jorge
<br>
<p>----- Mensaje original -----
<br>
<span class="quotelev1">&gt; De: &quot;Samuel Thibault&quot; &lt;samuel.thibault_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Para: jgonzalezd_at_[hidden]
</span><br>
<span class="quotelev1">&gt; CC: hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Enviados: Viernes, 25 de Junio 2010 17:42:42
</span><br>
<span class="quotelev1">&gt; Asunto: Servet and hwloc
</span><br>
<span class="quotelev1">&gt; Hello Jorge,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've just noticed Servet in the ipdps 2010 proceedings. There
</span><br>
<span class="quotelev1">&gt; are probably interesting things to do between Servet and hwloc
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/projects/hwloc/">http://www.open-mpi.org/projects/hwloc/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On one hand, servet could use hwloc to get binding implementations
</span><br>
<span class="quotelev1">&gt; on various OSes. Indeed, Servet version 1.0 actually doesn't even
</span><br>
<span class="quotelev1">&gt; build on Debian Linux systems: you need to #define _GNU_SOURCE
</span><br>
<span class="quotelev1">&gt; before including &lt;sched.h&gt;, and then use CPU_ZERO/CPU_SET instead of
</span><br>
<span class="quotelev1">&gt; __CPU_ZERO/__CPU_SET, and these are specific to Linux of course. Just
</span><br>
<span class="quotelev1">&gt; using hwloc for that part will provide you wide OS support.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On the other hand hwloc has the following TODO item: on OSes or
</span><br>
<span class="quotelev1">&gt; systems
</span><br>
<span class="quotelev1">&gt; which don't know the cache size and sharing from the hardware itself,
</span><br>
<span class="quotelev1">&gt; just find out from measures, which is exactly what Servet just does :)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ideally, Servet would be using the BSD licence but it's currently GPL.
</span><br>
<span class="quotelev1">&gt; Maybe a compromise would be to make Servet a library which some BSD
</span><br>
<span class="quotelev1">&gt; plugin of hwloc could be compiled against if the user already has
</span><br>
<span class="quotelev1">&gt; Servet
</span><br>
<span class="quotelev1">&gt; installed. That would need Servet made a library.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What do you think?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Samuel
</span><br>
<p><p><p>----- End forwarded message -----
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2182.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.3a1r3508)"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2011/05/2180.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.3a1r3505)"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2010/06/1098.php">Samuel Thibault: "[hwloc-devel] Servet and hwloc"</a>
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
