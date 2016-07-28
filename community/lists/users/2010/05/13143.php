<?
$subject_val = "Re: [OMPI users] Building 1.4.x on mac snow leopard with intel compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 24 10:45:26 2010" -->
<!-- isoreceived="20100524144526" -->
<!-- sent="Mon, 24 May 2010 08:45:04 -0600" -->
<!-- isosent="20100524144504" -->
<!-- name="Glass, Micheal W" -->
<!-- email="mwglass_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Building 1.4.x on mac snow leopard with intel compilers" -->
<!-- id="C81FED10.6CCA%mwglass_at_sandia.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="[OMPI users] Building 1.4.x on mac snow leopard with intel compilers" -->
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
<strong>Subject:</strong> Re: [OMPI users] Building 1.4.x on mac snow leopard with intel compilers<br>
<strong>From:</strong> Glass, Micheal W (<em>mwglass_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-24 10:45:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13144.php">Dawid Laszuk: "Re: [OMPI users] mpirun: symbol lookup error: mpirun: undefined symbol:orte_xml_fp"</a>
<li><strong>Previous message:</strong> <a href="13142.php">Rajnesh Jindel: "[OMPI users] Process doesn't exit on remote machine when using hostfile"</a>
<li><strong>Maybe in reply to:</strong> <a href="13131.php">Glass, Micheal W: "[OMPI users] Building 1.4.x on mac snow leopard with intel compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13146.php">Jeff Squyres: "Re: [OMPI users] Building 1.4.x on mac snow leopard with intel compilers"</a>
<li><strong>Reply:</strong> <a href="13146.php">Jeff Squyres: "Re: [OMPI users] Building 1.4.x on mac snow leopard with intel compilers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, I'm sure I'm picking up the newly built version.  I've run ompi_info to verify my path is correct.
<br>
<p>I've have a little more information now...  I rebuilt openmpi 1.4.2 with the '--enable-debug' option to configure and when I run a simple mpi program on 2 processors with an MPI_Reduce() call:
<br>
<p>MPI_Reduce(&amp;mypi, &amp;pi, 1, MPI_DOUBLE, MPI_SUM, 0, MPI_COMM_WORLD);
<br>
<p>I see:
<br>
<p>[macsierra:89600] *** An error occurred in MPI_Reduce: the reduction operation MPI_SUM is not defined on the MPI_DOUBLE datatype
<br>
[macsierra:89600] *** on communicator MPI_COMM_WORLD
<br>
[macsierra:89600] *** MPI_ERR_OP: invalid reduce operation
<br>
[macsierra:89600] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
<p>Thanks,
<br>
Mike
<br>
<p><p><p><span class="quotelev1">&gt; On May 23, 2010, at 12:43 PM, Doug Reeder wrote:
</span><br>
<span class="quotelev1">&gt; Mike,
</span><br>
<span class="quotelev1">&gt; Are you sure that you are getting the openmpi that you built and not
</span><br>
<span class="quotelev1">&gt; the one supplied w/ OS X. I use modules to make sure that I am getting
</span><br>
<span class="quotelev1">&gt; the openmpi version I build instead of the OS X suppleid version.
</span><br>
<span class="quotelev1">&gt; Doug Reeder
</span><br>
<span class="quotelev1">&gt; On May 23, 2010, at 10:45 AM, Glass, Micheal W wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I'm having problems building a working version of openmpi 1.4.1/2 on
</span><br>
<span class="quotelev2">&gt; &gt; a new Apple Mac Pro (dual quad-core nehalem processors) running snow
</span><br>
<span class="quotelev2">&gt; &gt; leopard (10.6.3) with the Intel 11.1 compilers. I've tried the Intel
</span><br>
<span class="quotelev2">&gt; &gt; 11.1.084 and 11.1.088 versions of the compilers. Everything appears
</span><br>
<span class="quotelev2">&gt; &gt; to build just fine and some mpi test programs run but whenever I run
</span><br>
<span class="quotelev2">&gt; &gt; a program with an MPI_Reduce() or MPI_Allreduce() I get a segfault
</span><br>
<span class="quotelev2">&gt; &gt; (even with np=1). I'm building openmpi with:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; configure -without-xgrid -prefix=&lt;my install path&gt; CC=icc CXX=icpc
</span><br>
<span class="quotelev2">&gt; &gt; F77=ifort FC=ifort
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; When I build openmpi 1.4.1/2 with the GNU 4.3 compilers (installed
</span><br>
<span class="quotelev2">&gt; &gt; via macports) using:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; configure -without-xgrid -prefix=&lt;my install path&gt; CC=gcc-mp-4.3
</span><br>
<span class="quotelev2">&gt; &gt; CXX=g++-mp-4.3 F77=gfortran-mp-4.3 FC=gfortran-mp-4.3
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; all my mpi tests (6000+) run fine. Any help would be appreciated.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt; Mike
</span><br>
<p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13143/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13144.php">Dawid Laszuk: "Re: [OMPI users] mpirun: symbol lookup error: mpirun: undefined symbol:orte_xml_fp"</a>
<li><strong>Previous message:</strong> <a href="13142.php">Rajnesh Jindel: "[OMPI users] Process doesn't exit on remote machine when using hostfile"</a>
<li><strong>Maybe in reply to:</strong> <a href="13131.php">Glass, Micheal W: "[OMPI users] Building 1.4.x on mac snow leopard with intel compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13146.php">Jeff Squyres: "Re: [OMPI users] Building 1.4.x on mac snow leopard with intel compilers"</a>
<li><strong>Reply:</strong> <a href="13146.php">Jeff Squyres: "Re: [OMPI users] Building 1.4.x on mac snow leopard with intel compilers"</a>
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
