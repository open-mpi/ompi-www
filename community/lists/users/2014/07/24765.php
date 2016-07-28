<?
$subject_val = "Re: [OMPI users] Can't run with more than two nodes in the hostfile";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 14 12:36:29 2014" -->
<!-- isoreceived="20140714163629" -->
<!-- sent="Mon, 14 Jul 2014 09:35:46 -0700" -->
<!-- isosent="20140714163546" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can't run with more than two nodes in the hostfile" -->
<!-- id="C0021288-B7B3-4DA0-BC39-51F133A3AFC0_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAKW9TZpM6hCsHfyCk3WcS4AawrjkFs+5QdQZ3HDUjrPdeg0_9Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Can't run with more than two nodes in the hostfile<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-14 12:35:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24766.php">Ricardo Fernández-Perea: "Re: [OMPI users] Can't run with more than two nodes in the hostfile"</a>
<li><strong>Previous message:</strong> <a href="24764.php">Ricardo Fern&#195;&#161;ndez-Perea: "[OMPI users] Can't run with more than two nodes in the hostfile"</a>
<li><strong>In reply to:</strong> <a href="24764.php">Ricardo Fern&#195;&#161;ndez-Perea: "[OMPI users] Can't run with more than two nodes in the hostfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24766.php">Ricardo Fernández-Perea: "Re: [OMPI users] Can't run with more than two nodes in the hostfile"</a>
<li><strong>Reply:</strong> <a href="24766.php">Ricardo Fernández-Perea: "Re: [OMPI users] Can't run with more than two nodes in the hostfile"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
During the 1.7 series and for all follow-on series, OMPI changed to a mode where it launches a daemon on all allocated nodes at the startup of mpirun. This allows us to determine the hardware topology of the nodes and take that into account when mapping. You can override that behavior by either adding --novm to your cmd line (which will impact your mapping/binding options), or by specifying the hosts to use by editing your hostfile, or adding --host host1,host2 to your cmd line
<br>
<p>The rsh launcher defaults to a tree-based pattern, thus requiring that we be able to ssh from one compute node to another. You can change that to a less scalable direct mode by adding
<br>
<p>--mca plm_rsh_no_tree_spawn 1
<br>
<p>to the cmd line
<br>
<p><p>On Jul 14, 2014, at 9:21 AM, Ricardo Fern&#225;ndez-Perea &lt;rfernandezperea_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I'm trying to update to openMPI 1.8.1 thru ssh  and Myrinet 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; running a command as 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/bin/mpirun --verbose --mca mtl mx --mca pml cm  -hostfile hostfile -np 16 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; when the hostfile contain only two nodes as
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; host1 slots=8 max-slots=8
</span><br>
<span class="quotelev1">&gt; host2 slots=8 max-slots=8
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; it runs perfectly but when the hostfile has a third node as 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; host1 slots=8 max-slots=8
</span><br>
<span class="quotelev1">&gt; host2 slots=8 max-slots=8
</span><br>
<span class="quotelev1">&gt; host3 slots=8 max-slots=8
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; it try to establish an ssh connection between  the running hosts1 and host3 that should not run any process  that fails hanging the process without signaling.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; my ompi_info is as follow
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                 Package: Open MPI XXX Distribution
</span><br>
<span class="quotelev1">&gt;                 Open MPI: 1.8.1
</span><br>
<span class="quotelev1">&gt;   Open MPI repo revision: r31483
</span><br>
<span class="quotelev1">&gt;    Open MPI release date: Apr 22, 2014
</span><br>
<span class="quotelev1">&gt;                 Open RTE: 1.8.1
</span><br>
<span class="quotelev1">&gt;   Open RTE repo revision: r31483
</span><br>
<span class="quotelev1">&gt;    Open RTE release date: Apr 22, 2014
</span><br>
<span class="quotelev1">&gt;                     OPAL: 1.8.1
</span><br>
<span class="quotelev1">&gt;       OPAL repo revision: r31483
</span><br>
<span class="quotelev1">&gt;        OPAL release date: Apr 22, 2014
</span><br>
<span class="quotelev1">&gt;                  MPI API: 3.0
</span><br>
<span class="quotelev1">&gt;             Ident string: 1.8.1
</span><br>
<span class="quotelev1">&gt;                   Prefix: /opt/openmpi
</span><br>
<span class="quotelev1">&gt;  Configured architecture: x86_64-apple-darwin9.8.0
</span><br>
<span class="quotelev1">&gt;           Configure host: XXXX
</span><br>
<span class="quotelev1">&gt;            Configured by: XXXX
</span><br>
<span class="quotelev1">&gt;            Configured on: Thu Jun 12 10:37:33 CEST 2014
</span><br>
<span class="quotelev1">&gt;           Configure host: XXXX
</span><br>
<span class="quotelev1">&gt;                 Built by: XXXX
</span><br>
<span class="quotelev1">&gt;                 Built on: Thu Jun 12 11:13:16 CEST 2014
</span><br>
<span class="quotelev1">&gt;               Built host: XXXX
</span><br>
<span class="quotelev1">&gt;               C bindings: yes
</span><br>
<span class="quotelev1">&gt;             C++ bindings: yes
</span><br>
<span class="quotelev1">&gt;              Fort mpif.h: yes (single underscore)
</span><br>
<span class="quotelev1">&gt;             Fort use mpi: yes (full: ignore TKR)
</span><br>
<span class="quotelev1">&gt;        Fort use mpi size: deprecated-ompi-info-value
</span><br>
<span class="quotelev1">&gt;         Fort use mpi_f08: yes
</span><br>
<span class="quotelev1">&gt;  Fort mpi_f08 compliance: The mpi_f08 module is available, but due to
</span><br>
<span class="quotelev1">&gt;                           limitations in the ifort compiler, does not support
</span><br>
<span class="quotelev1">&gt;                           the following: array subsections, direct passthru
</span><br>
<span class="quotelev1">&gt;                           (where possible) to underlying Open MPI's C
</span><br>
<span class="quotelev1">&gt;                           functionality
</span><br>
<span class="quotelev1">&gt;   Fort mpi_f08 subarrays: no
</span><br>
<span class="quotelev1">&gt;            Java bindings: no
</span><br>
<span class="quotelev1">&gt;   Wrapper compiler rpath: unnecessary
</span><br>
<span class="quotelev1">&gt;               C compiler: icc
</span><br>
<span class="quotelev1">&gt;      C compiler absolute: /opt/intel/Compiler/11.1/080/bin/intel64/icc
</span><br>
<span class="quotelev1">&gt;   C compiler family name: INTEL
</span><br>
<span class="quotelev1">&gt;       C compiler version: 1110.20091130
</span><br>
<span class="quotelev1">&gt;             C++ compiler: icpc
</span><br>
<span class="quotelev1">&gt;    C++ compiler absolute: /opt/intel/Compiler/11.1/080/bin/intel64/icpc
</span><br>
<span class="quotelev1">&gt;            Fort compiler: ifort
</span><br>
<span class="quotelev1">&gt;        Fort compiler abs: /opt/intel/Compiler/11.1/080/bin/intel64/ifort
</span><br>
<span class="quotelev1">&gt;          Fort ignore TKR: yes (!DEC$ ATTRIBUTES NO_ARG_CHECK ::)
</span><br>
<span class="quotelev1">&gt;    Fort 08 assumed shape: no
</span><br>
<span class="quotelev1">&gt;       Fort optional args: yes
</span><br>
<span class="quotelev1">&gt;       Fort BIND(C) (all): yes
</span><br>
<span class="quotelev1">&gt;       Fort ISO_C_BINDING: yes
</span><br>
<span class="quotelev1">&gt;  Fort SUBROUTINE BIND(C): yes
</span><br>
<span class="quotelev1">&gt;        Fort TYPE,BIND(C): yes
</span><br>
<span class="quotelev1">&gt;  Fort T,BIND(C,name=&quot;a&quot;): yes
</span><br>
<span class="quotelev1">&gt;             Fort PRIVATE: yes
</span><br>
<span class="quotelev1">&gt;           Fort PROTECTED: yes
</span><br>
<span class="quotelev1">&gt;            Fort ABSTRACT: yes
</span><br>
<span class="quotelev1">&gt;        Fort ASYNCHRONOUS: yes
</span><br>
<span class="quotelev1">&gt;           Fort PROCEDURE: yes
</span><br>
<span class="quotelev1">&gt;  Fort f08 using wrappers: yes
</span><br>
<span class="quotelev1">&gt;              C profiling: yes
</span><br>
<span class="quotelev1">&gt;            C++ profiling: yes
</span><br>
<span class="quotelev1">&gt;    Fort mpif.h profiling: yes
</span><br>
<span class="quotelev1">&gt;   Fort use mpi profiling: yes
</span><br>
<span class="quotelev1">&gt;    Fort use mpi_f08 prof: yes
</span><br>
<span class="quotelev1">&gt;           C++ exceptions: no
</span><br>
<span class="quotelev1">&gt;           Thread support: posix (MPI_THREAD_MULTIPLE: no, OPAL support: yes,
</span><br>
<span class="quotelev1">&gt;                           OMPI progress: no, ORTE progress: yes, Event lib:
</span><br>
<span class="quotelev1">&gt;                           yes)
</span><br>
<span class="quotelev1">&gt;            Sparse Groups: no
</span><br>
<span class="quotelev1">&gt;   Internal debug support: no
</span><br>
<span class="quotelev1">&gt;   MPI interface warnings: yes
</span><br>
<span class="quotelev1">&gt;      MPI parameter check: runtime
</span><br>
<span class="quotelev1">&gt; Memory profiling support: no
</span><br>
<span class="quotelev1">&gt; Memory debugging support: no
</span><br>
<span class="quotelev1">&gt;          libltdl support: yes
</span><br>
<span class="quotelev1">&gt;    Heterogeneous support: no
</span><br>
<span class="quotelev1">&gt;  mpirun default --prefix: no
</span><br>
<span class="quotelev1">&gt;          MPI I/O support: yes
</span><br>
<span class="quotelev1">&gt;        MPI_WTIME support: gettimeofday
</span><br>
<span class="quotelev1">&gt;      Symbol vis. support: yes
</span><br>
<span class="quotelev1">&gt;    Host topology support: yes
</span><br>
<span class="quotelev1">&gt;           MPI extensions: 
</span><br>
<span class="quotelev1">&gt;    FT Checkpoint support: no (checkpoint thread: no)
</span><br>
<span class="quotelev1">&gt;    C/R Enabled Debugging: no
</span><br>
<span class="quotelev1">&gt;      VampirTrace support: yes
</span><br>
<span class="quotelev1">&gt;   MPI_MAX_PROCESSOR_NAME: 256
</span><br>
<span class="quotelev1">&gt;     MPI_MAX_ERROR_STRING: 256
</span><br>
<span class="quotelev1">&gt;      MPI_MAX_OBJECT_NAME: 64
</span><br>
<span class="quotelev1">&gt;         MPI_MAX_INFO_KEY: 36
</span><br>
<span class="quotelev1">&gt;         MPI_MAX_INFO_VAL: 256
</span><br>
<span class="quotelev1">&gt;        MPI_MAX_PORT_NAME: 1024
</span><br>
<span class="quotelev1">&gt;   MPI_MAX_DATAREP_STRING: 128
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/07/24764.php">http://www.open-mpi.org/community/lists/users/2014/07/24764.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24766.php">Ricardo Fernández-Perea: "Re: [OMPI users] Can't run with more than two nodes in the hostfile"</a>
<li><strong>Previous message:</strong> <a href="24764.php">Ricardo Fern&#195;&#161;ndez-Perea: "[OMPI users] Can't run with more than two nodes in the hostfile"</a>
<li><strong>In reply to:</strong> <a href="24764.php">Ricardo Fern&#195;&#161;ndez-Perea: "[OMPI users] Can't run with more than two nodes in the hostfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24766.php">Ricardo Fernández-Perea: "Re: [OMPI users] Can't run with more than two nodes in the hostfile"</a>
<li><strong>Reply:</strong> <a href="24766.php">Ricardo Fernández-Perea: "Re: [OMPI users] Can't run with more than two nodes in the hostfile"</a>
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
