<?
$subject_val = "[OMPI devel] Bad performance (20% bandwidth loss) when compiling with GCC 5.2 instead of 4.x";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 14 12:33:13 2015" -->
<!-- isoreceived="20151014163313" -->
<!-- sent="Wed, 14 Oct 2015 18:33:07 +0200" -->
<!-- isosent="20151014163307" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="[OMPI devel] Bad performance (20% bandwidth loss) when compiling with GCC 5.2 instead of 4.x" -->
<!-- id="561E83C3.5040305_at_itc.rwth-aachen.de" -->
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
<strong>Subject:</strong> [OMPI devel] Bad performance (20% bandwidth loss) when compiling with GCC 5.2 instead of 4.x<br>
<strong>From:</strong> Paul Kapinos (<em>kapinos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-14 12:33:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18163.php">Nathan Hjelm: "Re: [OMPI devel] Bad performance (20% bandwidth loss) when compiling with GCC 5.2 instead of 4.x"</a>
<li><strong>Previous message:</strong> <a href="18161.php">Nathan Hjelm: "Re: [OMPI devel] 16 byte real in Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18163.php">Nathan Hjelm: "Re: [OMPI devel] Bad performance (20% bandwidth loss) when compiling with GCC 5.2 instead of 4.x"</a>
<li><strong>Reply:</strong> <a href="18163.php">Nathan Hjelm: "Re: [OMPI devel] Bad performance (20% bandwidth loss) when compiling with GCC 5.2 instead of 4.x"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Open MPI developer,
<br>
<p>We're puzzled by reproducible performance (bandwidth) penalty observed when 
<br>
comparing measurements via InfibiBand between two nodes, OpenMPI/1.10.0 compiled 
<br>
with *GCC/5.2* instead of GCC 4.8 and Intel compiler.
<br>
<p>Take a look at the attached picture of two measurements of NetPIPE 
<br>
<a href="http://bitspjoule.org/netpipe/">http://bitspjoule.org/netpipe/</a> benchmark done with one MPI rank per node, 
<br>
communicating via QDR InfiniBand (y axis: Mbps, y axis: sample number)
<br>
<p>Up to sample 64 (8195 bytes message size) the achieved performance is virtually 
<br>
the same; from sample 65 (12285 bytes, *less* than 12k) the version of GCC 
<br>
compiled using GCC 5.2 suffer form 20%+ penalty in bandwidth.
<br>
<p>The result is reproducible and independent from nodes and ever linux 
<br>
distribution (both Scientific Linux 6 and CentOS 7 have the same results). Both 
<br>
C and Fortran benchmarks offer the very same behaviour so it is *not* an f08 issue.
<br>
<p>The acchieved bandwidth is definitely IB-range (gigabytes per second), the 
<br>
communication is running via InfinfiBand in all cases (no failback to IP, huh).
<br>
<p>The compile line is the same; the output of ompi_info --all and --params is the 
<br>
very same (cf. attachments) up to added support for fortran-08 in /5.2 version.
<br>
<p>We know about existence of 'eager_limit' parameter, which is *not* changed and 
<br>
is 12288 in both versions (this is *less* that the first distinguishing sample).
<br>
<p>Again, for us the *only* difference is usage of other (new) GCC release.
<br>
<p>Any idea about this 20%+ bandwidth loss?
<br>
<p>Best
<br>
<p>Paul Kapinos
<br>
<pre>
-- 
Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
RWTH Aachen University, IT Center
Seffenter Weg 23,  D 52074  Aachen (Germany)
Tel: +49 241/80-24915



</pre>
<p>
<p>
<br><hr>
<img src="http://www.open-mpi.org/community/lists/devel/att-18162/GCC_48vs52t.png" alt="GCC_48vs52t.png">
<!-- attachment="GCC_48vs52t.png" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18162/ompi_info--param_btl_openib_-l_9.48.txt">ompi_info--param_btl_openib_-l_9.48.txt</a>
</ul>
<!-- attachment="ompi_info--param_btl_openib_-l_9.48.txt" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18162/ompi_info--param_btl_openib_-l_9.52.txt">ompi_info--param_btl_openib_-l_9.52.txt</a>
</ul>
<!-- attachment="ompi_info--param_btl_openib_-l_9.52.txt" -->
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18162/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18163.php">Nathan Hjelm: "Re: [OMPI devel] Bad performance (20% bandwidth loss) when compiling with GCC 5.2 instead of 4.x"</a>
<li><strong>Previous message:</strong> <a href="18161.php">Nathan Hjelm: "Re: [OMPI devel] 16 byte real in Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18163.php">Nathan Hjelm: "Re: [OMPI devel] Bad performance (20% bandwidth loss) when compiling with GCC 5.2 instead of 4.x"</a>
<li><strong>Reply:</strong> <a href="18163.php">Nathan Hjelm: "Re: [OMPI devel] Bad performance (20% bandwidth loss) when compiling with GCC 5.2 instead of 4.x"</a>
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
