<?
$subject_val = "Re: [OMPI devel] Should visibility and memchecker abort configure?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Oct  5 05:16:09 2008" -->
<!-- isoreceived="20081005091609" -->
<!-- sent="Sun, 5 Oct 2008 11:15:48 +0200" -->
<!-- isosent="20081005091548" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Should visibility and memchecker abort configure?" -->
<!-- id="20081005091548.GA14780_at_ins.uni-bonn.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="27383238-2D11-4BB0-80E5-4BF491E5B39D_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Should visibility and memchecker abort configure?<br>
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-05 05:15:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4737.php">Lenny Verkhovsky: "Re: [OMPI devel] rdma_connect() failure"</a>
<li><strong>Previous message:</strong> <a href="4735.php">Daniel Hansen: "[OMPI devel] segfault issue - possible bug in openmpi"</a>
<li><strong>In reply to:</strong> <a href="4731.php">Ralph Castain: "Re: [OMPI devel] Should visibility and memchecker abort configure?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4738.php">Jeff Squyres: "Re: [OMPI devel] Should visibility and memchecker abort configure?"</a>
<li><strong>Reply:</strong> <a href="4738.php">Jeff Squyres: "Re: [OMPI devel] Should visibility and memchecker abort configure?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>if you allow me my 2 cents:
<br>
<p>At configure time, it is possible to distinguish between several
<br>
different user inputs:
<br>
- the user typed --enable-foo,
<br>
- the user typed --disable-foo or --enable-foo=no,
<br>
- the user typed --enable-foo=ARG (ARG is available for further
<br>
&nbsp;&nbsp;inspection),
<br>
- the user used none of the above.
<br>
<p>IIUC you have already sorted out the visibility issue by using the last,
<br>
and the memchecker issue is about having an incompatible version
<br>
installed.  One typical semantics would be to not try to use the feature
<br>
at all if --disable-foo was explicitly passed.
<br>
<p>Hope that helps.
<br>
<p>Cheers,
<br>
Ralf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4737.php">Lenny Verkhovsky: "Re: [OMPI devel] rdma_connect() failure"</a>
<li><strong>Previous message:</strong> <a href="4735.php">Daniel Hansen: "[OMPI devel] segfault issue - possible bug in openmpi"</a>
<li><strong>In reply to:</strong> <a href="4731.php">Ralph Castain: "Re: [OMPI devel] Should visibility and memchecker abort configure?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4738.php">Jeff Squyres: "Re: [OMPI devel] Should visibility and memchecker abort configure?"</a>
<li><strong>Reply:</strong> <a href="4738.php">Jeff Squyres: "Re: [OMPI devel] Should visibility and memchecker abort configure?"</a>
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
