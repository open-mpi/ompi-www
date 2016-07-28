<?
$subject_val = "Re: [OMPI devel] regression with derived datatypes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  8 03:49:26 2014" -->
<!-- isoreceived="20140508074926" -->
<!-- sent="Thu, 08 May 2014 16:49:31 +0900" -->
<!-- isosent="20140508074931" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] regression with derived datatypes" -->
<!-- id="536B370B.8090504_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AE45F2F55FE69B4F99BB3455E821D7153A8AFA04_at_ECS-EXG-P-MB07.win.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] regression with derived datatypes<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-08 03:49:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14747.php">Elena Elkina: "Re: [OMPI devel] regression with derived datatypes"</a>
<li><strong>Previous message:</strong> <a href="14745.php">Hjelm, Nathan T: "Re: [OMPI devel] regression with derived datatypes"</a>
<li><strong>In reply to:</strong> <a href="14745.php">Hjelm, Nathan T: "Re: [OMPI devel] regression with derived datatypes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14747.php">Elena Elkina: "Re: [OMPI devel] regression with derived datatypes"</a>
<li><strong>Reply:</strong> <a href="14747.php">Elena Elkina: "Re: [OMPI devel] regression with derived datatypes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nathan and George,
<br>
<p>here are the output files of the original test_scif.c
<br>
the command line was
<br>
<p>mpirun -np 2 -host localhost --mca btl scif,vader,self --mca
<br>
mpi_ddt_unpack_debug 1 --mca mpi_ddt_pack_debug 1 --mca
<br>
mpi_ddt_position_debug 1 a.out
<br>
<p>this is a silent failure and there is no core file
<br>
the test itself detects it did not receive the expected value
<br>
/* grep &quot;expected&quot; in the output */
<br>
<p>Gilles
<br>
<p>On 2014/05/08 16:43, Hjelm, Nathan T wrote:
<br>
<span class="quotelev1">&gt; If you can get me the backtrace from one of the crash core files I would like to see what is going on there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14747.php">Elena Elkina: "Re: [OMPI devel] regression with derived datatypes"</a>
<li><strong>Previous message:</strong> <a href="14745.php">Hjelm, Nathan T: "Re: [OMPI devel] regression with derived datatypes"</a>
<li><strong>In reply to:</strong> <a href="14745.php">Hjelm, Nathan T: "Re: [OMPI devel] regression with derived datatypes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14747.php">Elena Elkina: "Re: [OMPI devel] regression with derived datatypes"</a>
<li><strong>Reply:</strong> <a href="14747.php">Elena Elkina: "Re: [OMPI devel] regression with derived datatypes"</a>
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
