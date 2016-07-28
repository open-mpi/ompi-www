<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar 22 15:26:08 2007" -->
<!-- isoreceived="20070322192608" -->
<!-- sent="Thu, 22 Mar 2007 13:26:03 -0600" -->
<!-- isosent="20070322192603" -->
<!-- name="Marcus G. Daniels" -->
<!-- email="mdaniels_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Cell EIB support for OpenMPI" -->
<!-- id="4602D84B.8070700_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4602B346.8080001_at_graphics.stanford.edu" -->
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
<strong>From:</strong> Marcus G. Daniels (<em>mdaniels_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-22 15:26:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2887.php">Geoff Galitz: "[OMPI users] hostfile syntax"</a>
<li><strong>Previous message:</strong> <a href="2885.php">Heywood, Todd: "Re: [OMPI users] MPI processes  swapping out"</a>
<li><strong>In reply to:</strong> <a href="2882.php">Mike Houston: "Re: [OMPI users] Cell EIB support for OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2901.php">Marcus G. Daniels: "Re: [OMPI users] Cell EIB support for OpenMPI"</a>
<li><strong>Reply:</strong> <a href="2901.php">Marcus G. Daniels: "Re: [OMPI users] Cell EIB support for OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mike Houston wrote:
<br>
<span class="quotelev1">&gt; The main issue with this, and addressed at the end 
</span><br>
<span class="quotelev1">&gt; of the report, is that the code size is going to be a problem as data 
</span><br>
<span class="quotelev1">&gt; and code must live in the same 256KB in each SPE. 
</span><br>
Just for reference, here are the stripped shared library sizes for 
<br>
OpenMPI 1.2 as built on a Mercury Cell system.  This is for the PPU, not 
<br>
SPU..
<br>
<p>-rwxr-xr-x 1 mdaniels world  11216 Mar 22  2007 libmca_common_sm.so.0.0.0
<br>
-rwxr-xr-x 1 mdaniels world 191440 Mar 22  2007 libmpi_cxx.so.0.0.0
<br>
-rwxr-xr-x 1 mdaniels world 827440 Mar 22  2007 libmpi.so.0.0.0
<br>
-rwxr-xr-x 1 mdaniels world 327912 Mar 22  2007 libopen-pal.so.0.0.0
<br>
-rwxr-xr-x 1 mdaniels world 556584 Mar 22  2007 libopen-rte.so.0.0.0
<br>
<p>Using -Os instead of -O3:
<br>
<p>-rwxr-xr-x 1 mdaniels world  11232 Mar 22  2007 libmca_common_sm.so.0.0.0
<br>
-rwxr-xr-x 1 mdaniels world 258280 Mar 22  2007 libmpi_cxx.so.0.0.0
<br>
-rwxr-xr-x 1 mdaniels world 749688 Mar 22  2007 libmpi.so.0.0.0
<br>
-rwxr-xr-x 1 mdaniels world 296648 Mar 22  2007 libopen-pal.so.0.0.0
<br>
-rwxr-xr-x 1 mdaniels world 501712 Mar 22  2007 libopen-rte.so.0.0.0
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2887.php">Geoff Galitz: "[OMPI users] hostfile syntax"</a>
<li><strong>Previous message:</strong> <a href="2885.php">Heywood, Todd: "Re: [OMPI users] MPI processes  swapping out"</a>
<li><strong>In reply to:</strong> <a href="2882.php">Mike Houston: "Re: [OMPI users] Cell EIB support for OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2901.php">Marcus G. Daniels: "Re: [OMPI users] Cell EIB support for OpenMPI"</a>
<li><strong>Reply:</strong> <a href="2901.php">Marcus G. Daniels: "Re: [OMPI users] Cell EIB support for OpenMPI"</a>
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
