<?
$subject_val = "[OMPI users] My MPI build is broke, don't know why/how";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 23 19:03:30 2012" -->
<!-- isoreceived="20120823230330" -->
<!-- sent="Thu, 23 Aug 2012 16:03:25 -0700" -->
<!-- isosent="20120823230325" -->
<!-- name="Jim Kusznir" -->
<!-- email="jkusznir_at_[hidden]" -->
<!-- subject="[OMPI users] My MPI build is broke, don't know why/how" -->
<!-- id="CAA3eeYDnQLeRw=51tVKGSimQAWeV4Yei3Vh8U4Zf6TEf_BYwAg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] My MPI build is broke, don't know why/how<br>
<strong>From:</strong> Jim Kusznir (<em>jkusznir_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-23 19:03:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19995.php">Ralph Castain: "Re: [OMPI users] My MPI build is broke, don't know why/how"</a>
<li><strong>Previous message:</strong> <a href="19993.php">Lloyd Brown: "Re: [OMPI users] PG compilers and OpenMPI 1.6.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19995.php">Ralph Castain: "Re: [OMPI users] My MPI build is broke, don't know why/how"</a>
<li><strong>Reply:</strong> <a href="19995.php">Ralph Castain: "Re: [OMPI users] My MPI build is broke, don't know why/how"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all:
<br>
<p>I recently rebuilt my cluster from rocks 5 to rocks 6 (which is based
<br>
on CentOS 6.2) using the official spec file and my build options as
<br>
before.  It all built successfully and all appeared good.  That is,
<br>
until one tried to use it.  This is built with torque integration, and
<br>
its run through torque.  When a user's job runs, this ends up in the
<br>
error file and the program does not run successfully:
<br>
<p>--------------------------------------------------------------------------
<br>
Open RTE was unable to open the hostfile:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/opt/openmpi-gcc/1.6/etc/openmpi-default-hostfile
<br>
Check to make sure the path and filename are correct.
<br>
--------------------------------------------------------------------------
<br>
[compute-0-2.local:13834] [[12466,0],0] ORTE_ERROR_LOG: Not found in
<br>
file base/rmaps_base_support_fns.c at line 88
<br>
[compute-0-2.local:13834] [[12466,0],0] ORTE_ERROR_LOG: Not found in
<br>
file rmaps_rr.c at line 82
<br>
[compute-0-2.local:13834] [[12466,0],0] ORTE_ERROR_LOG: Not found in
<br>
file base/rmaps_base_map_job.c at line 88
<br>
[compute-0-2.local:13834] [[12466,0],0] ORTE_ERROR_LOG: Not found in
<br>
file base/plm_base_launch_support.c at line 105
<br>
[compute-0-2.local:13834] [[12466,0],0] ORTE_ERROR_LOG: Not found in
<br>
file plm_tm_module.c at line 194
<br>
--------------------------------------------------------------------------
<br>
A daemon (pid unknown) died unexpectedly on signal 1  while attempting to
<br>
launch so we are aborting.
<br>
<p>There may be more information reported by the environment (see above).
<br>
<p>This may be because the daemon was unable to find all the needed shared
<br>
libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
<br>
location of the shared libraries on the remote nodes and this will
<br>
automatically be forwarded to the remote nodes.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that the job aborted, but has no info as to the process
<br>
that caused that situation.
<br>
--------------------------------------------------------------------------
<br>
<p>This has been confirmed with several different node assignments.  Any
<br>
ideas on cause or fixes?
<br>
<p>I built it with this command:
<br>
rpmbuild -bb --define 'install_in_opt 1' --define 'install_modulefile
<br>
1' --define 'modules_rpm_name environment-modules' --define
<br>
'build_all_in_one_rpm 0' --define 'configure_options
<br>
--with-tm=/opt/torque' --define '_name openmpi-gcc' --define 'makeopts
<br>
-J8' openmpi.spec
<br>
<p>(and the PGI version was built with:
<br>
CC=pgcc CXX=pgCC F77=pgf77 FC=pgf90 rpmbuild -bb --define
<br>
'install_in_opt 1' --define 'install_modulefile 1' --define
<br>
'modules_rpm_name environment-modules' --define 'build_all_in_one_rpm
<br>
0'  --define 'configure_options --with-tm=/opt/torque' --define '_name
<br>
openmpi-pgi' --define 'use_default_rpm_opt_flags 0' openmpi.spec
<br>
)
<br>
<p>--Jim
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19995.php">Ralph Castain: "Re: [OMPI users] My MPI build is broke, don't know why/how"</a>
<li><strong>Previous message:</strong> <a href="19993.php">Lloyd Brown: "Re: [OMPI users] PG compilers and OpenMPI 1.6.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19995.php">Ralph Castain: "Re: [OMPI users] My MPI build is broke, don't know why/how"</a>
<li><strong>Reply:</strong> <a href="19995.php">Ralph Castain: "Re: [OMPI users] My MPI build is broke, don't know why/how"</a>
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
