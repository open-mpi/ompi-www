<?
$subject_val = "Re: [OMPI devel] 1.10.0 issue";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  4 08:57:42 2015" -->
<!-- isoreceived="20150904125742" -->
<!-- sent="Fri, 4 Sep 2015 14:57:40 +0200" -->
<!-- isosent="20150904125740" -->
<!-- name="Michal Schmidt" -->
<!-- email="mschmidt_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.10.0 issue" -->
<!-- id="55E99544.8050701_at_redhat.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="3DA95866-15C1-48B9-AD9C-D454AF1B9E54_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.10.0 issue<br>
<strong>From:</strong> Michal Schmidt (<em>mschmidt_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-04 08:57:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17966.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: Remove --without-hwloc configure option"</a>
<li><strong>Previous message:</strong> <a href="17964.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove --without-hwloc configure option"</a>
<li><strong>In reply to:</strong> <a href="17933.php">Ralph Castain: "Re: [OMPI devel] 1.10.0 issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17967.php">Ralph Castain: "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>Reply:</strong> <a href="17967.php">Ralph Castain: "Re: [OMPI devel] 1.10.0 issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 09/03/2015 03:47 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; I guess I didn&#226;&#128;&#153;t make it clear in my prior comment, so let me try
</span><br>
<span class="quotelev1">&gt; again. I understand about dlopen and the fix that George proposed -
</span><br>
<span class="quotelev1">&gt; we had internally discussed this as well. However, the questions that
</span><br>
<span class="quotelev1">&gt; raises are:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. how does the distro (Michal) decide which PSM module to disable by
</span><br>
<span class="quotelev1">&gt; default in their package?
</span><br>
<p>In the RHEL package I have disabled PSM2 by default in
<br>
openmpi-mca-params.conf:
<br>
<p># Disable the psm2 MTL by default.
<br>
# Workaround for <a href="https://bugzilla.redhat.com/show_bug.cgi?id=1259835">https://bugzilla.redhat.com/show_bug.cgi?id=1259835</a>
<br>
# This avoids a conflict between libpsm2.so.2 and libpsm_infinipath.so.1.
<br>
mtl = ^psm2
<br>
# If psm2 is needed, comment out the above line and uncomment
<br>
# the following two lines. This will disable MCAs that are known to
<br>
# depend on libpsm_infinipath.so.1:
<br>
#   mtl = ^psm,ofi
<br>
#   btl = ^usnic
<br>
<p><span class="quotelev1">&gt; 2. how does the user &#226;&#128;&#156;discover&#226;&#128;&#157; that their fabric has automatically
</span><br>
<span class="quotelev1">&gt; been disabled, especially since this has never been the case before?
</span><br>
<p>There will be a release note.
<br>
OmniPath was not previously supported in RHEL at all, so it's not like
<br>
I'm disabling something that used to work.
<br>
<p>Regards,
<br>
Michal
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17966.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: Remove --without-hwloc configure option"</a>
<li><strong>Previous message:</strong> <a href="17964.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove --without-hwloc configure option"</a>
<li><strong>In reply to:</strong> <a href="17933.php">Ralph Castain: "Re: [OMPI devel] 1.10.0 issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17967.php">Ralph Castain: "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>Reply:</strong> <a href="17967.php">Ralph Castain: "Re: [OMPI devel] 1.10.0 issue"</a>
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
