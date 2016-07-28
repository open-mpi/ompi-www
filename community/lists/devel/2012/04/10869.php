<?
$subject_val = "[OMPI devel] [PATCH] Open MPI on ARMv5";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 13 23:13:44 2012" -->
<!-- isoreceived="20120414031344" -->
<!-- sent="Fri, 13 Apr 2012 23:13:39 -0400" -->
<!-- isosent="20120414031339" -->
<!-- name="Evan Clinton" -->
<!-- email="evan.m.clinton_at_[hidden]" -->
<!-- subject="[OMPI devel] [PATCH] Open MPI on ARMv5" -->
<!-- id="CALQMFq1YgnyV8t=e2EZE1Vc-rHrsUjoiMuqK=7q96aX4mzQN0w_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] [PATCH] Open MPI on ARMv5<br>
<strong>From:</strong> Evan Clinton (<em>evan.m.clinton_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-13 23:13:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10870.php">TERRY DONTJE: "Re: [OMPI devel] Non-zero exit status"</a>
<li><strong>Previous message:</strong> <a href="10868.php">Ralph Castain: "Re: [OMPI devel] Non-zero exit status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10895.php">Jeffrey Squyres: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<li><strong>Reply:</strong> <a href="10895.php">Jeffrey Squyres: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<li><strong>Maybe reply:</strong> <a href="10919.php">Evan Clinton: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<li><strong>Maybe reply:</strong> <a href="10934.php">Leif Lindholm: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/05/10962.php">Evan Clinton: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
At present Open MPI only supports ARMv7 processors.  Attached is a
<br>
patch against current trunk (r26270) that extends the atomic
<br>
operations and memory barriers code to work with ARMv5 and ARMv6 ones,
<br>
too.
<br>
<p>For v6, the only changes were to use &quot;mcr p15, 0, r0, c7, c10, 5&quot;
<br>
instead of the unavailable DMB instruction, and to disable the 64 bit
<br>
compare-exchange function (which I understand is not vital for Open
<br>
MPI on 32 bit platforms?).  For v5, it was a bit trickier; the
<br>
processor lacks nice memory barrier instructions or proper atomic
<br>
operations.  Fortunately, the Linux kernel offers several helper
<br>
functions on ARM, and I've used those here.
<br>
<p>The changes build and pass all of the assembly-related tests in the
<br>
test folder and the hello world examples run on my &quot;armv5tel&quot; box
<br>
running Debian with Linux 2.6.32-5.  It should also run fine on ARMv6
<br>
boxes, and presumably v4, but I don't have either to test on.
<br>
<p>Documentation for the Linux kernel helper functions:
<br>
<a href="http://git.kernel.org/?p=linux/kernel/git/torvalds/linux.git;a=blob;f=Documentation/arm/kernel_user_helpers.txt">http://git.kernel.org/?p=linux/kernel/git/torvalds/linux.git;a=blob;f=Documentation/arm/kernel_user_helpers.txt</a>
<br>
<p>I've sent in a contributor agreement so there should be no IP problems.
<br>
<p>Hopefully this is useful,
<br>
Evan Clinton
<br>
<p>
<br><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10869/ompi_armv5.diff">ompi_armv5.diff</a>
</ul>
<!-- attachment="ompi_armv5.diff" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10870.php">TERRY DONTJE: "Re: [OMPI devel] Non-zero exit status"</a>
<li><strong>Previous message:</strong> <a href="10868.php">Ralph Castain: "Re: [OMPI devel] Non-zero exit status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10895.php">Jeffrey Squyres: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<li><strong>Reply:</strong> <a href="10895.php">Jeffrey Squyres: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<li><strong>Maybe reply:</strong> <a href="10919.php">Evan Clinton: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<li><strong>Maybe reply:</strong> <a href="10934.php">Leif Lindholm: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/05/10962.php">Evan Clinton: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
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
