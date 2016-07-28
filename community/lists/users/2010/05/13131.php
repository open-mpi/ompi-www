<?
$subject_val = "[OMPI users] Building 1.4.x on mac snow leopard with intel compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Sun May 23 13:46:06 2010" -->
<!-- isoreceived="20100523174606" -->
<!-- sent="Sun, 23 May 2010 11:45:47 -0600" -->
<!-- isosent="20100523174547" -->
<!-- name="Glass, Micheal W" -->
<!-- email="mwglass_at_[hidden]" -->
<!-- subject="[OMPI users] Building 1.4.x on mac snow leopard with intel compilers" -->
<!-- id="C81EC5EB.94C9%mwglass_at_sandia.gov" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Building 1.4.x on mac snow leopard with intel compilers<br>
<strong>From:</strong> Glass, Micheal W (<em>mwglass_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-23 13:45:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13132.php">Olivier Riff: "Re: [OMPI users] General question on the implementation ofa&quot;scheduler&quot; on client side..."</a>
<li><strong>Previous message:</strong> <a href="13130.php">Dawid Laszuk: "[OMPI users] mpirun: symbol lookup error: mpirun: undefined symbol: orte_xml_fp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13133.php">Doug Reeder: "Re: [OMPI users] Building 1.4.x on mac snow leopard with intel compilers"</a>
<li><strong>Reply:</strong> <a href="13133.php">Doug Reeder: "Re: [OMPI users] Building 1.4.x on mac snow leopard with intel compilers"</a>
<li><strong>Maybe reply:</strong> <a href="13143.php">Glass, Micheal W: "Re: [OMPI users] Building 1.4.x on mac snow leopard with intel compilers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm having problems building a working version of openmpi 1.4.1/2 on a new Apple Mac Pro (dual quad-core nehalem processors) running snow leopard (10.6.3) with the Intel 11.1 compilers. I've tried the Intel 11.1.084 and 11.1.088 versions of the compilers.  Everything appears to build just fine and some mpi test programs run but whenever I run a program with an MPI_Reduce() or MPI_Allreduce() I get a segfault (even with np=1).  I'm building openmpi with:
<br>
<p>configure -without-xgrid -prefix=&lt;my install path&gt; CC=icc CXX=icpc F77=ifort FC=ifort
<br>
<p>When I build openmpi 1.4.1/2 with the GNU 4.3 compilers (installed via macports) using:
<br>
<p>configure -without-xgrid -prefix=&lt;my install path&gt; CC=gcc-mp-4.3 CXX=g++-mp-4.3 F77=gfortran-mp-4.3 FC=gfortran-mp-4.3
<br>
<p>all my mpi tests (6000+) run fine.  Any help would be appreciated.
<br>
<p>Thanks,
<br>
Mike
<br>
<p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13131/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13132.php">Olivier Riff: "Re: [OMPI users] General question on the implementation ofa&quot;scheduler&quot; on client side..."</a>
<li><strong>Previous message:</strong> <a href="13130.php">Dawid Laszuk: "[OMPI users] mpirun: symbol lookup error: mpirun: undefined symbol: orte_xml_fp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13133.php">Doug Reeder: "Re: [OMPI users] Building 1.4.x on mac snow leopard with intel compilers"</a>
<li><strong>Reply:</strong> <a href="13133.php">Doug Reeder: "Re: [OMPI users] Building 1.4.x on mac snow leopard with intel compilers"</a>
<li><strong>Maybe reply:</strong> <a href="13143.php">Glass, Micheal W: "Re: [OMPI users] Building 1.4.x on mac snow leopard with intel compilers"</a>
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
