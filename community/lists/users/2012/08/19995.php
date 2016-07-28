<?
$subject_val = "Re: [OMPI users] My MPI build is broke, don't know why/how";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 23 19:29:48 2012" -->
<!-- isoreceived="20120823232948" -->
<!-- sent="Thu, 23 Aug 2012 16:29:40 -0700" -->
<!-- isosent="20120823232940" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] My MPI build is broke, don't know why/how" -->
<!-- id="2541CA80-E95E-4CF1-A7CE-98CB4E7DF190_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAA3eeYDnQLeRw=51tVKGSimQAWeV4Yei3Vh8U4Zf6TEf_BYwAg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] My MPI build is broke, don't know why/how<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-23 19:29:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19996.php">Jeff Squyres (jsquyres): "Re: [OMPI users] PG compilers and OpenMPI 1.6.1"</a>
<li><strong>Previous message:</strong> <a href="19994.php">Jim Kusznir: "[OMPI users] My MPI build is broke, don't know why/how"</a>
<li><strong>In reply to:</strong> <a href="19994.php">Jim Kusznir: "[OMPI users] My MPI build is broke, don't know why/how"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The 1.6 code always expects to find the default hostfile, even if it is empty. We always install it by default, so I don't know why yours isn't there. In the future, we just ignore it if we don't find it.
<br>
<p>You have two options:
<br>
<p>1. create that file and leave it empty
<br>
<p>2. you can work around it by adding --default-hostfile none to your cmd line, or adding OMPI_MCA_orte_default_hostfile=none to your environment. If you want to do this for everyone on the system, then add &quot;orte_default_hostfile=none&quot; to your default MCA param file.
<br>
<p>HTH
<br>
Ralph
<br>
<p>On Aug 23, 2012, at 4:03 PM, Jim Kusznir &lt;jkusznir_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi all:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I recently rebuilt my cluster from rocks 5 to rocks 6 (which is based
</span><br>
<span class="quotelev1">&gt; on CentOS 6.2) using the official spec file and my build options as
</span><br>
<span class="quotelev1">&gt; before.  It all built successfully and all appeared good.  That is,
</span><br>
<span class="quotelev1">&gt; until one tried to use it.  This is built with torque integration, and
</span><br>
<span class="quotelev1">&gt; its run through torque.  When a user's job runs, this ends up in the
</span><br>
<span class="quotelev1">&gt; error file and the program does not run successfully:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Open RTE was unable to open the hostfile:
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-gcc/1.6/etc/openmpi-default-hostfile
</span><br>
<span class="quotelev1">&gt; Check to make sure the path and filename are correct.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [compute-0-2.local:13834] [[12466,0],0] ORTE_ERROR_LOG: Not found in
</span><br>
<span class="quotelev1">&gt; file base/rmaps_base_support_fns.c at line 88
</span><br>
<span class="quotelev1">&gt; [compute-0-2.local:13834] [[12466,0],0] ORTE_ERROR_LOG: Not found in
</span><br>
<span class="quotelev1">&gt; file rmaps_rr.c at line 82
</span><br>
<span class="quotelev1">&gt; [compute-0-2.local:13834] [[12466,0],0] ORTE_ERROR_LOG: Not found in
</span><br>
<span class="quotelev1">&gt; file base/rmaps_base_map_job.c at line 88
</span><br>
<span class="quotelev1">&gt; [compute-0-2.local:13834] [[12466,0],0] ORTE_ERROR_LOG: Not found in
</span><br>
<span class="quotelev1">&gt; file base/plm_base_launch_support.c at line 105
</span><br>
<span class="quotelev1">&gt; [compute-0-2.local:13834] [[12466,0],0] ORTE_ERROR_LOG: Not found in
</span><br>
<span class="quotelev1">&gt; file plm_tm_module.c at line 194
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A daemon (pid unknown) died unexpectedly on signal 1  while attempting to
</span><br>
<span class="quotelev1">&gt; launch so we are aborting.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev1">&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
</span><br>
<span class="quotelev1">&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev1">&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev1">&gt; that caused that situation.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This has been confirmed with several different node assignments.  Any
</span><br>
<span class="quotelev1">&gt; ideas on cause or fixes?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I built it with this command:
</span><br>
<span class="quotelev1">&gt; rpmbuild -bb --define 'install_in_opt 1' --define 'install_modulefile
</span><br>
<span class="quotelev1">&gt; 1' --define 'modules_rpm_name environment-modules' --define
</span><br>
<span class="quotelev1">&gt; 'build_all_in_one_rpm 0' --define 'configure_options
</span><br>
<span class="quotelev1">&gt; --with-tm=/opt/torque' --define '_name openmpi-gcc' --define 'makeopts
</span><br>
<span class="quotelev1">&gt; -J8' openmpi.spec
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (and the PGI version was built with:
</span><br>
<span class="quotelev1">&gt; CC=pgcc CXX=pgCC F77=pgf77 FC=pgf90 rpmbuild -bb --define
</span><br>
<span class="quotelev1">&gt; 'install_in_opt 1' --define 'install_modulefile 1' --define
</span><br>
<span class="quotelev1">&gt; 'modules_rpm_name environment-modules' --define 'build_all_in_one_rpm
</span><br>
<span class="quotelev1">&gt; 0'  --define 'configure_options --with-tm=/opt/torque' --define '_name
</span><br>
<span class="quotelev1">&gt; openmpi-pgi' --define 'use_default_rpm_opt_flags 0' openmpi.spec
</span><br>
<span class="quotelev1">&gt; )
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --Jim
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19996.php">Jeff Squyres (jsquyres): "Re: [OMPI users] PG compilers and OpenMPI 1.6.1"</a>
<li><strong>Previous message:</strong> <a href="19994.php">Jim Kusznir: "[OMPI users] My MPI build is broke, don't know why/how"</a>
<li><strong>In reply to:</strong> <a href="19994.php">Jim Kusznir: "[OMPI users] My MPI build is broke, don't know why/how"</a>
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
