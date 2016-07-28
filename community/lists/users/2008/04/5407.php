<?
$subject_val = "Re: [OMPI users] mpicc -showme:compile output (possible bug report)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 17 01:47:09 2008" -->
<!-- isoreceived="20080417054709" -->
<!-- sent="Thu, 17 Apr 2008 07:47:02 +0200" -->
<!-- isosent="20080417054702" -->
<!-- name="Crni Gorac" -->
<!-- email="cgorac_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpicc -showme:compile output (possible bug report)" -->
<!-- id="c02b565a0804162247n4a6f01ffr5e6e3ea77304aaf9_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="1208407004.5376.0.camel_at_rscpc28.anu.edu.au" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpicc -showme:compile output (possible bug report)<br>
<strong>From:</strong> Crni Gorac (<em>cgorac_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-17 01:47:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5408.php">Cally K: "Re: [OMPI users] open mpi on smp"</a>
<li><strong>Previous message:</strong> <a href="5406.php">Rodriguez, Jose: "[OMPI users] fortran90 and c++ wrappers don't work"</a>
<li><strong>In reply to:</strong> <a href="5405.php">Terry Frankcombe: "Re: [OMPI users] mpicc -showme:compile output (possible bug report)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Apr 17, 2008 at 6:36 AM, Terry Frankcombe &lt;terry_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Given that discussion, might I suggest an (untested) workaround would be
</span><br>
<span class="quotelev1">&gt;  to --prefix OpenMPI into a non-standard location?
</span><br>
<p>It is possible approach, but there are others - it is also possible to
<br>
provide specific CMake variable value on CMake command line, and it
<br>
will find OpenMPI fine then.  But both are kind of hassle, it is of
<br>
course perfectly normal to install OpenMPI to usual locations, and
<br>
given comments above, I'm inclined to think that OpenMPI behavior, in
<br>
not printing &quot;-I&quot; and &quot;-L&quot; flags on &quot;-showme:compile&quot; and
<br>
&quot;-showme:link&quot;, is actually desired here.  So this probably should be
<br>
classified as CMake bug.
<br>
<p>Regards.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5408.php">Cally K: "Re: [OMPI users] open mpi on smp"</a>
<li><strong>Previous message:</strong> <a href="5406.php">Rodriguez, Jose: "[OMPI users] fortran90 and c++ wrappers don't work"</a>
<li><strong>In reply to:</strong> <a href="5405.php">Terry Frankcombe: "Re: [OMPI users] mpicc -showme:compile output (possible bug report)"</a>
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
