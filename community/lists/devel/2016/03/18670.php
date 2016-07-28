<?
$subject_val = "[OMPI devel] Network atomic operations";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  3 17:26:46 2016" -->
<!-- isoreceived="20160303222646" -->
<!-- sent="Thu, 3 Mar 2016 17:26:45 -0500" -->
<!-- isosent="20160303222645" -->
<!-- name="dpchoudh ." -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="[OMPI devel] Network atomic operations" -->
<!-- id="CAHXxYDjCL-i+Azzvz5razmLhO3PzK=7eiRBVh7SGwygUnRbcpg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] Network atomic operations<br>
<strong>From:</strong> dpchoudh . (<em>dpchoudh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-03 17:26:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18671.php">Dave Turner: "[OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran"</a>
<li><strong>Previous message:</strong> <a href="18669.php">Mark Santcroos: "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18687.php">Mike Dubman: "Re: [OMPI devel] Network atomic operations"</a>
<li><strong>Reply:</strong> <a href="18687.php">Mike Dubman: "Re: [OMPI devel] Network atomic operations"</a>
<li><strong>Reply:</strong> <a href="18688.php">Nathan Hjelm: "Re: [OMPI devel] Network atomic operations"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all
<br>
<p>Here is a 101 level question:
<br>
<p>OpenMPI supports many transports, out of the box, and can be extended to
<br>
support those which it does not. Some of these transports, such as
<br>
infiniband, provide hardware atomic operations on remote memory, whereas
<br>
others, such as iWARP, do not.
<br>
<p>My question is: how (and where in the code base) does openMPI use this
<br>
feature, on those hardware that support it? What is the penalty, in terms
<br>
of additional code, runtime performance and all other considerations, on a
<br>
hardware that does not support it?
<br>
<p>Thanks in advance.
<br>
Durga
<br>
<p>Life is complex. It has real and imaginary parts.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18670/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18671.php">Dave Turner: "[OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran"</a>
<li><strong>Previous message:</strong> <a href="18669.php">Mark Santcroos: "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18687.php">Mike Dubman: "Re: [OMPI devel] Network atomic operations"</a>
<li><strong>Reply:</strong> <a href="18687.php">Mike Dubman: "Re: [OMPI devel] Network atomic operations"</a>
<li><strong>Reply:</strong> <a href="18688.php">Nathan Hjelm: "Re: [OMPI devel] Network atomic operations"</a>
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
