<?
$subject_val = "Re: [OMPI devel] RTE Framework";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 23 02:57:16 2013" -->
<!-- isoreceived="20130123075716" -->
<!-- sent="Wed, 23 Jan 2013 07:31:55 +0000" -->
<!-- isosent="20130123073155" -->
<!-- name="Richard Graham" -->
<!-- email="richardg_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RTE Framework" -->
<!-- id="3D8F945A4E59E644AE9205E5CD3708E5188246E3_at_MTIDAG01.mtl.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="69A29AB53D57F54D81061A9E4E45B8FD317CFB08_at_EXMB01.srn.sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RTE Framework<br>
<strong>From:</strong> Richard Graham (<em>richardg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-23 02:31:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11966.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27881 -	trunk/ompi/mca/btl/tcp"</a>
<li><strong>Previous message:</strong> <a href="11964.php">Ralph Castain: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<li><strong>In reply to:</strong> <a href="11956.php">Barrett, Brian W: "[OMPI devel] RFC: RTE Framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11968.php">Ralph Castain: "Re: [OMPI devel] RTE Framework"</a>
<li><strong>Reply:</strong> <a href="11968.php">Ralph Castain: "Re: [OMPI devel] RTE Framework"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian,
<br>
&nbsp;&nbsp;First - thanks.  I am very happy this is proceeding.
<br>
&nbsp;&nbsp;General question here - do you have any idea how much global state sits behind the current implementation ?  What I am trying to gauge at what level of granularity one can bring in additional capabilities.
<br>
&nbsp;&nbsp;I have not looked in detail yet, but will in the near future.
<br>
<p>Thanks,
<br>
Rich
<br>
<p>-----Original Message-----
<br>
From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On Behalf Of Barrett, Brian W
<br>
Sent: Monday, January 21, 2013 9:31 PM
<br>
To: Open MPI Developers
<br>
Subject: [OMPI devel] RFC: RTE Framework
<br>
<p>Hi all -
<br>
<p>As discussed at the December developer's meeting, a number of us have been working on a framework in OMPI to encompass the RTE resources (typically provided by ORTE).  This follows on work Oak Ridge did on the ORCA layer, which ended up having a number of technical challenges and was dropped for a simpler approach.
<br>
<p>The interface is still a work in process and designed around the concept that the ORTE component is a thin renaming around ORTE itself (this was one of the points the ORTE developers felt strongly about).  We think it's ready for comments and coming into the trunk, so are trying to get it looked at by a broader community.  The Mercurial repository is available
<br>
at:
<br>
<p>&nbsp;&nbsp;<a href="https://bitbucket.org/rhc/ompi-trunk">https://bitbucket.org/rhc/ompi-trunk</a>
<br>
<p>This work is focussed only on the creation of a framework to encompass the RTE interface between OMPI and ORTE.  There are currently two components:
<br>
the ORTE component and a test component implemented over PMI.  The PMI component is only really useful if ORTE is disabled at autogen time with the --no-orte option to autogen.  Future work to build against an external OMPI (in progress, on a different branch) will make using non-orte components slightly more useful.
<br>
<p>Anyway, if there aren't any major comments, I'll plan on bringing this work to the trunk this weekend (Jan 26/27).
<br>
<p>Brian
<br>
<p><pre>
--
  Brian W. Barrett
  Scalable System Software Group
  Sandia National Laboratories
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11966.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27881 -	trunk/ompi/mca/btl/tcp"</a>
<li><strong>Previous message:</strong> <a href="11964.php">Ralph Castain: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<li><strong>In reply to:</strong> <a href="11956.php">Barrett, Brian W: "[OMPI devel] RFC: RTE Framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11968.php">Ralph Castain: "Re: [OMPI devel] RTE Framework"</a>
<li><strong>Reply:</strong> <a href="11968.php">Ralph Castain: "Re: [OMPI devel] RTE Framework"</a>
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
