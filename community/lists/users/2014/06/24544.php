<?
$subject_val = "[OMPI users] Bug in OpenMPI-1.8.1: missing routines mpi_win_allocate_shared, mpi_win_shared_query  called from Ftn95-code";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  5 05:41:27 2014" -->
<!-- isoreceived="20140605094127" -->
<!-- sent="Thu, 5 Jun 2014 09:41:24 +0000" -->
<!-- isosent="20140605094124" -->
<!-- name="Michael.Rachner_at_[hidden]" -->
<!-- email="Michael.Rachner_at_[hidden]" -->
<!-- subject="[OMPI users] Bug in OpenMPI-1.8.1: missing routines mpi_win_allocate_shared, mpi_win_shared_query  called from Ftn95-code" -->
<!-- id="8337B490252F0944BF1D38541059627E17347171_at_DLREXMBX01.intra.dlr.de" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Bug in OpenMPI-1.8.1: missing routines mpi_win_allocate_shared, mpi_win_shared_query  called from Ftn95-code<br>
<strong>From:</strong> <a href="mailto:Michael.Rachner_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Bug%20in%20OpenMPI-1.8.1:%20missing%20routines%20mpi_win_allocate_shared,%20mpi_win_shared_query%20%20called%20from%20Ftn95-code"><em>Michael.Rachner_at_[hidden]</em></a><br>
<strong>Date:</strong> 2014-06-05 05:41:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24545.php">Ralph Castain: "Re: [OMPI users] [warn] Epoll ADD(1) on fd 0 failed"</a>
<li><strong>Previous message:</strong> <a href="24543.php">Alan Sang Loon: "[OMPI users] OpenMPI Compilation Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24618.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Bug in OpenMPI-1.8.1: missing routines mpi_win_allocate_shared, mpi_win_shared_query  called from Ftn95-code"</a>
<li><strong>Reply:</strong> <a href="24618.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Bug in OpenMPI-1.8.1: missing routines mpi_win_allocate_shared, mpi_win_shared_query  called from Ftn95-code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear developers of OpenMPI,
<br>
<p>I found that when building an executable from a Fortran95-code on a LINUX cluster with OpenMPI-1.8.1 (and INTEL-14.0.2 Ftn-compiler)
<br>
the following two MPI-3 routines do not exist:
<br>
<p>/dat/KERNEL/mpi3_sharedmem.f90:176: undefined reference to `mpi_win_allocate_shared_'
<br>
/dat/KERNEL/mpi3_sharedmem.f90:198: undefined reference to `mpi_win_shared_query_'
<br>
<p>It is just these 2 routines, which are  necessary for the MPI3- shared memory access of the same Fortran array from different processes on same node.
<br>
This is a breakthrough enabled by MPI-3, and for me the most important new feature of MPI-3,
<br>
because it allows saving much storage in the Ftn-code  and reduces a lot of MPI-data transmission required otherwise.
<br>
<p>Can you tell  me, when these 2 important MPI-routines will be available?
<br>
<p>Thank You
<br>
Michael Rachner
<br>
<p><p><p>Details:
<br>
<p>Version of MPI library used in this run:
<br>
[1,0]&lt;stdout&gt;:  Open MPI v1.8.1, package: Open MPI hpcoft14_at_cl3fr4 Distribution, ident: 1.8.1, Apr 22, 2014
<br>
<p>d0000000 cl3fr1 230$mpif90 -show
<br>
ifort -I/opt/mpi/openmpi/1.8.1-intel-14.0.2/include -I/opt/mpi/openmpi/1.8.1-intel-14.0.2/lib -L/opt/system/torque/4.2.7/lib -Wl,-rpath -Wl,/opt/system/torque/4.2.7/lib -Wl,-rpath -Wl,/opt/system/torque/4.2.7/lib -Wl,-rpath -Wl,/opt/system/torque/4.2.7/lib -Wl,-rpath -Wl,/opt/system/torque/4.2.7/lib -Wl,-rpath -Wl,/opt/mpi/openmpi/1.8.1-intel-14.0.2/lib -Wl,--enable-new-dtags -L/opt/mpi/openmpi/1.8.1-intel-14.0.2/lib -lmpi_usempif08 -lmpi_usempi_ignore_tkr -lmpi_mpifh -lmpi
<br>
d0000000 cl3fr1 231$
<br>
<p>--end of the email ---
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24544/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24545.php">Ralph Castain: "Re: [OMPI users] [warn] Epoll ADD(1) on fd 0 failed"</a>
<li><strong>Previous message:</strong> <a href="24543.php">Alan Sang Loon: "[OMPI users] OpenMPI Compilation Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24618.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Bug in OpenMPI-1.8.1: missing routines mpi_win_allocate_shared, mpi_win_shared_query  called from Ftn95-code"</a>
<li><strong>Reply:</strong> <a href="24618.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Bug in OpenMPI-1.8.1: missing routines mpi_win_allocate_shared, mpi_win_shared_query  called from Ftn95-code"</a>
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
