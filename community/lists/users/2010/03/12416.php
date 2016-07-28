<?
$subject_val = "[OMPI users] strange problem with OpenMPI + rankfile + Intel compiler 11.0.074 + centos/fedora-12";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 24 00:49:09 2010" -->
<!-- isoreceived="20100324044909" -->
<!-- sent="Wed, 24 Mar 2010 05:49:01 +0100" -->
<!-- isosent="20100324044901" -->
<!-- name="Anton Starikov" -->
<!-- email="ant.starikov_at_[hidden]" -->
<!-- subject="[OMPI users] strange problem with OpenMPI + rankfile + Intel compiler 11.0.074 + centos/fedora-12" -->
<!-- id="C89A99DD-1784-49C5-9FD3-6258060DCBB1_at_gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] strange problem with OpenMPI + rankfile + Intel compiler 11.0.074 + centos/fedora-12<br>
<strong>From:</strong> Anton Starikov (<em>ant.starikov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-24 00:49:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12417.php">ananda.mudar_at_[hidden]: "[OMPI users] Meaning and the significance of MCA parameter &quot;opal_cr_use_thread&quot;"</a>
<li><strong>Previous message:</strong> <a href="12415.php">Fernando Lemos: "Re: [OMPI users] ompi-checkpoint hangs when using in multiple clusters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12498.php">Jeff Squyres: "Re: [OMPI users] strange problem with OpenMPI + rankfile + Intelcompiler 11.0.074 + centos/fedora-12"</a>
<li><strong>Reply:</strong> <a href="12498.php">Jeff Squyres: "Re: [OMPI users] strange problem with OpenMPI + rankfile + Intelcompiler 11.0.074 + centos/fedora-12"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Intel compiler 11.0.074
<br>
OpenMPI 1.4.1
<br>
<p>Two different OSes: centos 5.4 (2.6.18 kernel) and Fedora-12 (2.6.32 kernel)
<br>
Two different CPUs: Opteron 248 and Opteron 8356.
<br>
<p>same binary for OpenMPI. Same binary for user code (vasp compiled for older arch)
<br>
<p>When I supply rankfile, then depending on combo of OS and CPU results are different
<br>
<p>centos+Opt8356 : works
<br>
centos+Opt248 : works
<br>
fedora+Opt8356 : works
<br>
fedora+Opt248 : fails
<br>
<p>rankfile is (in case of Opt248)
<br>
<p>rank 0=node014 slot=1
<br>
rank 1=node014 slot=0
<br>
<p>I tried play with formats, leave one slot (and start one process) - it doesn't change result
<br>
Without rankfile it works on all combos.
<br>
Just in case, all this happens inside of cpuset which always wraps all slots given in rankfile (I just use torque with cpusets and my custom patch for torque which also creates rankfile for openmpi, in this case MPI tasks are bound to particular cores and multithreaded codes limited by given cpuset).
<br>
<p>AFAIR, it also works without problem on both hardware setups with 1.3.x/1.4.0 and 2.6.30 kernel from OpenSuSE 11.1.
<br>
<p>Strangely, but when I run OSU benchmarks (osu_bw etc), it works without any problems.
<br>
<p><p>And finally two errorlogs (starting 1 and 2 processes):
<br>
<p>mpirun -mca paffinity_base_verbose 8  -np 1 vasp
<br>
[node014:26373] mca:base:select:(paffinity) Querying component [linux]
<br>
[node014:26373] mca:base:select:(paffinity) Query of component [linux] set priority to 10
<br>
[node014:26373] mca:base:select:(paffinity) Selected component [linux]
<br>
[node014:26373] paffinity slot assignment: slot_list == 1
<br>
[node014:26373] paffinity slot assignment: rank 0 runs on cpu #1 (#1)
<br>
[node014:26374] mca:base:select:(paffinity) Querying component [linux]
<br>
[node014:26374] mca:base:select:(paffinity) Query of component [linux] set priority to 10
<br>
[node014:26374] mca:base:select:(paffinity) Selected component [linux]
<br>
[node014:26374] paffinity slot assignment: slot_list == 1
<br>
[node014:26374] paffinity slot assignment: rank 0 runs on cpu #1 (#1)
<br>
[node014:26374] *** An error occurred in MPI_Comm_rank
<br>
[node014:26374] *** on a NULL communicator
<br>
[node014:26374] *** Unknown error
<br>
[node014:26374] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
forrtl: severe (174): SIGSEGV, segmentation fault occurred
<br>
Image              PC                Routine            Line        Source             
<br>
libmpi.so.0        00002ACC26BB36C3  Unknown               Unknown  Unknown
<br>
libmpi.so.0        00002ACC26BA0EB8  Unknown               Unknown  Unknown
<br>
libmpi.so.0        00002ACC26BA0B4B  Unknown               Unknown  Unknown
<br>
libmpi.so.0        00002ACC26BCF77E  Unknown               Unknown  Unknown
<br>
libmpi_f77.so.0    00002ACC269528FB  Unknown               Unknown  Unknown
<br>
vasp               000000000046FE66  Unknown               Unknown  Unknown
<br>
vasp               0000000000486102  Unknown               Unknown  Unknown
<br>
vasp               000000000042A1AB  Unknown               Unknown  Unknown
<br>
vasp               000000000042A02C  Unknown               Unknown  Unknown
<br>
libc.so.6          000000364DE1EB1D  Unknown               Unknown  Unknown
<br>
vasp               0000000000429F29  Unknown               Unknown  Unknown
<br>
--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 0 with PID 26374 on
<br>
node node014 exiting without calling &quot;finalize&quot;. This may
<br>
have caused other processes in the application to be
<br>
terminated by signals sent by mpirun (as reported here).
<br>
--------------------------------------------------------------------------
<br>
<p>$ mpirun -mca paffinity_base_verbose 8  -np 2 vasp
<br>
[node014:26402] mca:base:select:(paffinity) Querying component [linux]
<br>
[node014:26402] mca:base:select:(paffinity) Query of component [linux] set priority to 10
<br>
[node014:26402] mca:base:select:(paffinity) Selected component [linux]
<br>
[node014:26402] paffinity slot assignment: slot_list == 1
<br>
[node014:26402] paffinity slot assignment: rank 0 runs on cpu #1 (#1)
<br>
[node014:26402] paffinity slot assignment: slot_list == 0
<br>
[node014:26402] paffinity slot assignment: rank 1 runs on cpu #0 (#0)
<br>
[node014:26403] mca:base:select:(paffinity) Querying component [linux]
<br>
[node014:26403] mca:base:select:(paffinity) Query of component [linux] set priority to 10
<br>
[node014:26403] mca:base:select:(paffinity) Selected component [linux]
<br>
[node014:26404] mca:base:select:(paffinity) Querying component [linux]
<br>
[node014:26404] mca:base:select:(paffinity) Query of component [linux] set priority to 10
<br>
[node014:26404] mca:base:select:(paffinity) Selected component [linux]
<br>
[node014:26403] paffinity slot assignment: slot_list == 1
<br>
[node014:26403] paffinity slot assignment: rank 0 runs on cpu #1 (#1)
<br>
[node014:26403] *** An error occurred in MPI_Comm_rank
<br>
[node014:26403] *** on a NULL communicator
<br>
[node014:26403] *** Unknown error
<br>
[node014:26403] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
[node014:26404] paffinity slot assignment: slot_list == 0
<br>
[node014:26404] paffinity slot assignment: rank 1 runs on cpu #0 (#0)
<br>
forrtl: severe (174): SIGSEGV, segmentation fault occurred
<br>
Image              PC                Routine            Line        Source             
<br>
libmpi.so.0        00002B06529E76C3  Unknown               Unknown  Unknown
<br>
libmpi.so.0        00002B06529D4EB8  Unknown               Unknown  Unknown
<br>
libmpi.so.0        00002B06529D4B4B  Unknown               Unknown  Unknown
<br>
libmpi.so.0        00002B0652A0377E  Unknown               Unknown  Unknown
<br>
libmpi_f77.so.0    00002B06527868FB  Unknown               Unknown  Unknown
<br>
vasp               000000000046FE66  Unknown               Unknown  Unknown
<br>
vasp               0000000000486102  Unknown               Unknown  Unknown
<br>
vasp               000000000042A1AB  Unknown               Unknown  Unknown
<br>
vasp               000000000042A02C  Unknown               Unknown  Unknown
<br>
libc.so.6          000000364DE1EB1D  Unknown               Unknown  Unknown
<br>
vasp               0000000000429F29  Unknown               Unknown  Unknown
<br>
forrtl: severe (174): SIGSEGV, segmentation fault occurred
<br>
Image              PC                Routine            Line        Source             
<br>
libmpi.so.0        00002B808D8266C3  Unknown               Unknown  Unknown
<br>
libmpi.so.0        00002B808D813EB8  Unknown               Unknown  Unknown
<br>
libmpi.so.0        00002B808D813B4B  Unknown               Unknown  Unknown
<br>
libmpi.so.0        00002B808D84277E  Unknown               Unknown  Unknown
<br>
libmpi_f77.so.0    00002B808D5C58FB  Unknown               Unknown  Unknown
<br>
vasp               000000000046FE66  Unknown               Unknown  Unknown
<br>
vasp               0000000000486102  Unknown               Unknown  Unknown
<br>
vasp               000000000042A1AB  Unknown               Unknown  Unknown
<br>
vasp               000000000042A02C  Unknown               Unknown  Unknown
<br>
libc.so.6          000000364DE1EB1D  Unknown               Unknown  Unknown
<br>
vasp               0000000000429F29  Unknown               Unknown  Unknown
<br>
--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 0 with PID 26403 on
<br>
node node014 exiting without calling &quot;finalize&quot;. This may
<br>
have caused other processes in the application to be
<br>
terminated by signals sent by mpirun (as reported here).
<br>
--------------------------------------------------------------------------
<br>
[node014:26402] 1 more process has sent help message help-mpi-errors.txt / mpi_errors_are_fatal unknown handle
<br>
[node014:26402] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
<br>
<p><p><p>Anton
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12417.php">ananda.mudar_at_[hidden]: "[OMPI users] Meaning and the significance of MCA parameter &quot;opal_cr_use_thread&quot;"</a>
<li><strong>Previous message:</strong> <a href="12415.php">Fernando Lemos: "Re: [OMPI users] ompi-checkpoint hangs when using in multiple clusters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12498.php">Jeff Squyres: "Re: [OMPI users] strange problem with OpenMPI + rankfile + Intelcompiler 11.0.074 + centos/fedora-12"</a>
<li><strong>Reply:</strong> <a href="12498.php">Jeff Squyres: "Re: [OMPI users] strange problem with OpenMPI + rankfile + Intelcompiler 11.0.074 + centos/fedora-12"</a>
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
