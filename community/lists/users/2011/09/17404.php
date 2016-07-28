<?
$subject_val = "[OMPI users] problems with Intel 12.x compilers and OpenMPI (1.4.3)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 23 05:51:19 2011" -->
<!-- isoreceived="20110923095119" -->
<!-- sent="Fri, 23 Sep 2011 11:51:14 +0200" -->
<!-- isosent="20110923095114" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="[OMPI users] problems with Intel 12.x compilers and OpenMPI (1.4.3)" -->
<!-- id="4E7C5692.7050606_at_rz.rwth-aachen.de" -->
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
<strong>Subject:</strong> [OMPI users] problems with Intel 12.x compilers and OpenMPI (1.4.3)<br>
<strong>From:</strong> Paul Kapinos (<em>kapinos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-23 05:51:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17405.php">Jeff Squyres: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<li><strong>Previous message:</strong> <a href="17403.php">Uday Kumar Reddy B: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17429.php">Jeff Squyres: "Re: [OMPI users] problems with Intel 12.x compilers and OpenMPI (1.4.3)"</a>
<li><strong>Reply:</strong> <a href="17429.php">Jeff Squyres: "Re: [OMPI users] problems with Intel 12.x compilers and OpenMPI (1.4.3)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Open MPI volks,
<br>
<p>we see some quite strange effects with our installations of Open MPI 
<br>
1.4.3 with Intel 12.x compilers, which makes us puzzling: Different 
<br>
programs reproducibly deadlock or die with errors alike the below-listed 
<br>
ones.
<br>
<p>Some of the errors looks alike programming issue at first look (well, a 
<br>
deadlock *is* usually a programming error) but we do not believe it is 
<br>
so: the errors arise in many well-tested codes including HPL (*) and 
<br>
only with a special compiler + Open MPI version (Intel 12.x compiler + 
<br>
open MPI 1.4.3) and only on special number of processes (usually high 
<br>
ones). For example, HPL reproducible deadlocks with 72 procs and dies 
<br>
with error message #2 with 384 processes.
<br>
<p>All this errors seem to be somehow related to MPI communicators; and 
<br>
1.4.4rc3 and in 1.5.3 and 1.5.4 seem not to have this problem. Also 
<br>
1.4.3 if using together with Intel 11.x compielr series seem to be 
<br>
unproblematic. So probably this:
<br>
<p>(1.4.4 release notes:)
<br>
- Fixed a segv in MPI_Comm_create when called with GROUP_EMPTY.
<br>
&nbsp;&nbsp;&nbsp;Thanks to Dominik Goeddeke for finding this.
<br>
<p>is also fix for our issues? Or maybe not, because 1.5.3 is _older_ than 
<br>
this fix?
<br>
<p>As far as we workarounded the problem by switching our production to 
<br>
1.5.3 this issue is not a &quot;burning&quot; one; but I decieded still to post 
<br>
this because any issue on such fundamental things may be interesting for 
<br>
developers.
<br>
<p>Best wishes,
<br>
Paul Kapinos
<br>
<p><p>(*) <a href="http://www.netlib.org/benchmark/hpl/">http://www.netlib.org/benchmark/hpl/</a>
<br>
<p>################################################################
<br>
Fatal error in MPI_Comm_size: Invalid communicator, error stack:
<br>
MPI_Comm_size(111): MPI_Comm_size(comm=0x0, size=0x6f4a90) failed
<br>
MPI_Comm_size(69).: Invalid communicator
<br>
<p>################################################################
<br>
[linuxbdc05.rz.RWTH-Aachen.DE:23219] *** An error occurred in MPI_Comm_split
<br>
[linuxbdc05.rz.RWTH-Aachen.DE:23219] *** on communicator MPI 
<br>
COMMUNICATOR 3 SPLIT FROM 0
<br>
[linuxbdc05.rz.RWTH-Aachen.DE:23219] *** MPI_ERR_IN_STATUS: error code 
<br>
in status
<br>
[linuxbdc05.rz.RWTH-Aachen.DE:23219] *** MPI_ERRORS_ARE_FATAL (your MPI 
<br>
job will now abort)
<br>
<p>################################################################
<br>
forrtl: severe (71): integer divide by zero
<br>
Image PC Routine Line Source
<br>
libmpi.so.0 00002AAAAD9EDF52 Unknown Unknown Unknown
<br>
libmpi.so.0 00002AAAAD9EE45D Unknown Unknown Unknown
<br>
libmpi.so.0 00002AAAAD9C3375 Unknown Unknown Unknown
<br>
libmpi_f77.so.0 00002AAAAD75C37A Unknown Unknown Unknown
<br>
vasp_mpi_gamma 000000000057E010 Unknown Unknown Unknown
<br>
vasp_mpi_gamma 000000000059F636 Unknown Unknown Unknown
<br>
vasp_mpi_gamma 0000000000416C5A Unknown Unknown Unknown
<br>
vasp_mpi_gamma 0000000000A62BEE Unknown Unknown Unknown
<br>
libc.so.6 0000003EEB61EC5D Unknown Unknown Unknown
<br>
vasp_mpi_gamma 0000000000416A29 Unknown Unknown Unknown
<br>
<p><p><pre>
-- 
Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
RWTH Aachen University, Center for Computing and Communication
Seffenter Weg 23,  D 52074  Aachen (Germany)
Tel: +49 241/80-24915

</pre>
<hr>
<ul>
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17404/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17405.php">Jeff Squyres: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<li><strong>Previous message:</strong> <a href="17403.php">Uday Kumar Reddy B: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17429.php">Jeff Squyres: "Re: [OMPI users] problems with Intel 12.x compilers and OpenMPI (1.4.3)"</a>
<li><strong>Reply:</strong> <a href="17429.php">Jeff Squyres: "Re: [OMPI users] problems with Intel 12.x compilers and OpenMPI (1.4.3)"</a>
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
