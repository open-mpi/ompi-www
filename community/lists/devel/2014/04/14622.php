<?
$subject_val = "Re: [OMPI devel] RFC: Remove heterogeneous support";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr 27 22:50:47 2014" -->
<!-- isoreceived="20140428025047" -->
<!-- sent="Mon, 28 Apr 2014 11:50:41 +0900" -->
<!-- isosent="20140428025041" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Remove heterogeneous support" -->
<!-- id="535DC201.3060006_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9BA9C343-EEF0-402F-96CD-EA5C18BCB3EC_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Remove heterogeneous support<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-27 22:50:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14623.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<li><strong>Previous message:</strong> <a href="14621.php">Ralph Castain: "[OMPI devel] RFC: continue cleanup of build system abstractions"</a>
<li><strong>In reply to:</strong> <a href="14618.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14623.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<li><strong>Reply:</strong> <a href="14623.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
According to Jeff's comment, OpenMPI compiled with
<br>
--enable-heterogeneous is broken even in an homogeneous cluster.
<br>
<p>as a first step, MTT could be ran with OpenMPI compiled with
<br>
--enable-heterogenous and running on an homogeneous cluster
<br>
(ideally on both little and big endian) in order to identify and fix the
<br>
bug/regression.
<br>
/* this build is currently disabled in the MTT config of the
<br>
cisco-community cluster */
<br>
<p>Gilles
<br>
<p>On 2014/04/26 9:41, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; So it sounds like we may have a test platform, which leaves the question of repair
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; George: can you give us some idea of what was broken and/or pointers on what needs to be done to repair it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14623.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<li><strong>Previous message:</strong> <a href="14621.php">Ralph Castain: "[OMPI devel] RFC: continue cleanup of build system abstractions"</a>
<li><strong>In reply to:</strong> <a href="14618.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14623.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<li><strong>Reply:</strong> <a href="14623.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
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
