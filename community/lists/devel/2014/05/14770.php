<?
$subject_val = "Re: [OMPI devel] scif btl side effects";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 12 03:16:56 2014" -->
<!-- isoreceived="20140512071656" -->
<!-- sent="Mon, 12 May 2014 16:17:11 +0900" -->
<!-- isosent="20140512071711" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] scif btl side effects" -->
<!-- id="53707577.5020100_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AE45F2F55FE69B4F99BB3455E821D7153A8AF7EC_at_ECS-EXG-P-MB07.win.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] scif btl side effects<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-12 03:17:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14771.php">Gilles Gouaillardet: "Re: [OMPI devel] scif btl side effects"</a>
<li><strong>Previous message:</strong> <a href="14769.php">Mike Dubman: "Re: [OMPI devel] shmem_collect32 does not work with nlong == 0"</a>
<li><strong>In reply to:</strong> <a href="14724.php">Hjelm, Nathan T: "Re: [OMPI devel] scif btl side effects"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14771.php">Gilles Gouaillardet: "Re: [OMPI devel] scif btl side effects"</a>
<li><strong>Reply:</strong> <a href="14771.php">Gilles Gouaillardet: "Re: [OMPI devel] scif btl side effects"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nathan,
<br>
<p>On 2014/05/08 4:21, Hjelm, Nathan T wrote:
<br>
<span class="quotelev1">&gt; c) that being said, that should work so there is a bug
</span><br>
<span class="quotelev1">&gt; d) there is a regression in v1.8 and a bug that might have been always here
</span><br>
<span class="quotelev1">&gt; This is probably not a regression. The SCIF btl has been part of the 1.7 series for some time. The nightly MTTs are probably missing one of the cases that causes this problem. Hopefully we can get this fixed before 1.8.2.
</span><br>
as explained in #4610 (<a href="https://svn.open-mpi.org/trac/ompi/ticket/4610">https://svn.open-mpi.org/trac/ompi/ticket/4610</a>)
<br>
the root cause is in the way data are unpacked.
<br>
<p>The scif btl is ok :-)
<br>
<p>when using --mca btl scif,self fragments can be received out of order,
<br>
and that can trigger a bug introduced by r31496
<br>
<p>that being said, --mca btl scif,vader,self does not work with r31496
<br>
reverted.
<br>
the root cause is an other bug in the way data are unpacked, it happen
<br>
also when fragments are received out of order
<br>
*and* fragments contain a subpart of a predefined datatype.
<br>
in this case, the vader btl received a fragment of size 1325 *and* out
<br>
of order and that caused the bug.
<br>
<p>Gilles
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14771.php">Gilles Gouaillardet: "Re: [OMPI devel] scif btl side effects"</a>
<li><strong>Previous message:</strong> <a href="14769.php">Mike Dubman: "Re: [OMPI devel] shmem_collect32 does not work with nlong == 0"</a>
<li><strong>In reply to:</strong> <a href="14724.php">Hjelm, Nathan T: "Re: [OMPI devel] scif btl side effects"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14771.php">Gilles Gouaillardet: "Re: [OMPI devel] scif btl side effects"</a>
<li><strong>Reply:</strong> <a href="14771.php">Gilles Gouaillardet: "Re: [OMPI devel] scif btl side effects"</a>
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
