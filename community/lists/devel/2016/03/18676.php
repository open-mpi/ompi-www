<?
$subject_val = "Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  3 21:29:01 2016" -->
<!-- isoreceived="20160304022901" -->
<!-- sent="Fri, 4 Mar 2016 13:28:59 +1100" -->
<!-- isosent="20160304022859" -->
<!-- name="Christopher Samuel" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran" -->
<!-- id="56D8F2EB.3020303_at_unimelb.edu.au" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAFGXdkw18XGEiJ92ec5Q=ed0J7v_MnxQe3pROYCQ1LP4gEGzKg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran<br>
<strong>From:</strong> Christopher Samuel (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-03 21:28:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18677.php">Gilles Gouaillardet: "Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran"</a>
<li><strong>Previous message:</strong> <a href="18675.php">Larry Baker: "Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran"</a>
<li><strong>In reply to:</strong> <a href="18671.php">Dave Turner: "[OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18677.php">Gilles Gouaillardet: "Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran"</a>
<li><strong>Reply:</strong> <a href="18677.php">Gilles Gouaillardet: "Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 04/03/16 12:17, Dave Turner wrote:
<br>
<p><span class="quotelev1">&gt;      My understanding is that OpenMPI built with either Intel or
</span><br>
<span class="quotelev1">&gt; GNU compilers should be able to use the other compilers using the
</span><br>
<span class="quotelev1">&gt; OMPI_CC and OMPI_FC environmental variables.
</span><br>
<p>Sadly not, we tried this but when our one of our very few FORTRAN users
<br>
(who happened to be our director) tried to use it it failed because the
<br>
mpi.mod module created during the build is compiler dependent. :-(
<br>
<p>So ever since we've done separate builds for GCC and for Intel.
<br>
<p>All the best!
<br>
Chris
<br>
<pre>
-- 
 Christopher Samuel        Senior Systems Administrator
 VLSCI - Victorian Life Sciences Computation Initiative
 Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
 <a href="http://www.vlsci.org.au/">http://www.vlsci.org.au/</a>      <a href="http://twitter.com/vlsci">http://twitter.com/vlsci</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18677.php">Gilles Gouaillardet: "Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran"</a>
<li><strong>Previous message:</strong> <a href="18675.php">Larry Baker: "Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran"</a>
<li><strong>In reply to:</strong> <a href="18671.php">Dave Turner: "[OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18677.php">Gilles Gouaillardet: "Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran"</a>
<li><strong>Reply:</strong> <a href="18677.php">Gilles Gouaillardet: "Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran"</a>
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
