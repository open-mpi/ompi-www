<?
$subject_val = "Re: [OMPI users] Can't run with more than two nodes in the hostfile";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 14 13:13:56 2014" -->
<!-- isoreceived="20140714171356" -->
<!-- sent="Mon, 14 Jul 2014 19:13:55 +0200" -->
<!-- isosent="20140714171355" -->
<!-- name="Ricardo Fern&#195;&#161;ndez-Perea" -->
<!-- email="rfernandezperea_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can't run with more than two nodes in the hostfile" -->
<!-- id="CAKW9TZqzg_cDKXye-a9FAj_Wys8bGGA47_qxNoaXmoXO4dZdwA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="C0021288-B7B3-4DA0-BC39-51F133A3AFC0_at_open-mpi.org" -->
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
<strong>From:</strong> Ricardo Fern&#195;&#161;ndez-Perea (<em>rfernandezperea_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-14 13:13:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24767.php">Ralph Castain: "Re: [OMPI users] Can't run with more than two nodes in the hostfile"</a>
<li><strong>Previous message:</strong> <a href="24765.php">Ralph Castain: "Re: [OMPI users] Can't run with more than two nodes in the hostfile"</a>
<li><strong>In reply to:</strong> <a href="24765.php">Ralph Castain: "Re: [OMPI users] Can't run with more than two nodes in the hostfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24767.php">Ralph Castain: "Re: [OMPI users] Can't run with more than two nodes in the hostfile"</a>
<li><strong>Reply:</strong> <a href="24767.php">Ralph Castain: "Re: [OMPI users] Can't run with more than two nodes in the hostfile"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you for the fast answer
<br>
<p>While that resolve my problem with cross ssh authentication   a command as
<br>
<p>/opt/openmpi/bin/mpirun  --mca mtl mx --mca pml cm --mca
<br>
plm_rsh_no_tree_spawn 1 -hostfile hostfile ompi_info
<br>
<p>just hung with no output and although there is a ssh connexion no orte
<br>
program is initiated in the destination nodes
<br>
<p>and while
<br>
<p>/opt/openmpi/bin/mpirun  -host host18 ompi_info
<br>
<p>works
<br>
<p>/opt/openmpi/bin/mpirun  --mca plm_rsh_no_tree_spawn 1 -host host18
<br>
ompi_info
<br>
<p>hangs, is there some condition in the use of this parameter.
<br>
<p>Yours truly
<br>
<p>Ricardo
<br>
<p><p><p>On Mon, Jul 14, 2014 at 6:35 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; During the 1.7 series and for all follow-on series, OMPI changed to a mode
</span><br>
<span class="quotelev1">&gt; where it launches a daemon on all allocated nodes at the startup of mpirun.
</span><br>
<span class="quotelev1">&gt; This allows us to determine the hardware topology of the nodes and take
</span><br>
<span class="quotelev1">&gt; that into account when mapping. You can override that behavior by either
</span><br>
<span class="quotelev1">&gt; adding --novm to your cmd line (which will impact your mapping/binding
</span><br>
<span class="quotelev1">&gt; options), or by specifying the hosts to use by editing your hostfile, or
</span><br>
<span class="quotelev1">&gt; adding --host host1,host2 to your cmd line
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The rsh launcher defaults to a tree-based pattern, thus requiring that we
</span><br>
<span class="quotelev1">&gt; be able to ssh from one compute node to another. You can change that to a
</span><br>
<span class="quotelev1">&gt; less scalable direct mode by adding
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --mca plm_rsh_no_tree_spawn 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; to the cmd line
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 14, 2014, at 9:21 AM, Ricardo Fern&#195;&#161;ndez-Perea &lt;
</span><br>
<span class="quotelev1">&gt; rfernandezperea_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm trying to update to openMPI 1.8.1 thru ssh  and Myrinet
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; running a command as
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /opt/openmpi/bin/mpirun --verbose --mca mtl mx --mca pml cm  -hostfile
</span><br>
<span class="quotelev1">&gt; hostfile -np 16
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; when the hostfile contain only two nodes as
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; host1 slots=8 max-slots=8
</span><br>
<span class="quotelev2">&gt; &gt; host2 slots=8 max-slots=8
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; it runs perfectly but when the hostfile has a third node as
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; host1 slots=8 max-slots=8
</span><br>
<span class="quotelev2">&gt; &gt; host2 slots=8 max-slots=8
</span><br>
<span class="quotelev2">&gt; &gt; host3 slots=8 max-slots=8
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; it try to establish an ssh connection between  the running hosts1 and
</span><br>
<span class="quotelev1">&gt; host3 that should not run any process  that fails hanging the process
</span><br>
<span class="quotelev1">&gt; without signaling.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; my ompi_info is as follow
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                 Package: Open MPI XXX Distribution
</span><br>
<span class="quotelev2">&gt; &gt;                 Open MPI: 1.8.1
</span><br>
<span class="quotelev2">&gt; &gt;   Open MPI repo revision: r31483
</span><br>
<span class="quotelev2">&gt; &gt;    Open MPI release date: Apr 22, 2014
</span><br>
<span class="quotelev2">&gt; &gt;                 Open RTE: 1.8.1
</span><br>
<span class="quotelev2">&gt; &gt;   Open RTE repo revision: r31483
</span><br>
<span class="quotelev2">&gt; &gt;    Open RTE release date: Apr 22, 2014
</span><br>
<span class="quotelev2">&gt; &gt;                     OPAL: 1.8.1
</span><br>
<span class="quotelev2">&gt; &gt;       OPAL repo revision: r31483
</span><br>
<span class="quotelev2">&gt; &gt;        OPAL release date: Apr 22, 2014
</span><br>
<span class="quotelev2">&gt; &gt;                  MPI API: 3.0
</span><br>
<span class="quotelev2">&gt; &gt;             Ident string: 1.8.1
</span><br>
<span class="quotelev2">&gt; &gt;                   Prefix: /opt/openmpi
</span><br>
<span class="quotelev2">&gt; &gt;  Configured architecture: x86_64-apple-darwin9.8.0
</span><br>
<span class="quotelev2">&gt; &gt;           Configure host: XXXX
</span><br>
<span class="quotelev2">&gt; &gt;            Configured by: XXXX
</span><br>
<span class="quotelev2">&gt; &gt;            Configured on: Thu Jun 12 10:37:33 CEST 2014
</span><br>
<span class="quotelev2">&gt; &gt;           Configure host: XXXX
</span><br>
<span class="quotelev2">&gt; &gt;                 Built by: XXXX
</span><br>
<span class="quotelev2">&gt; &gt;                 Built on: Thu Jun 12 11:13:16 CEST 2014
</span><br>
<span class="quotelev2">&gt; &gt;               Built host: XXXX
</span><br>
<span class="quotelev2">&gt; &gt;               C bindings: yes
</span><br>
<span class="quotelev2">&gt; &gt;             C++ bindings: yes
</span><br>
<span class="quotelev2">&gt; &gt;              Fort mpif.h: yes (single underscore)
</span><br>
<span class="quotelev2">&gt; &gt;             Fort use mpi: yes (full: ignore TKR)
</span><br>
<span class="quotelev2">&gt; &gt;        Fort use mpi size: deprecated-ompi-info-value
</span><br>
<span class="quotelev2">&gt; &gt;         Fort use mpi_f08: yes
</span><br>
<span class="quotelev2">&gt; &gt;  Fort mpi_f08 compliance: The mpi_f08 module is available, but due to
</span><br>
<span class="quotelev2">&gt; &gt;                           limitations in the ifort compiler, does not
</span><br>
<span class="quotelev1">&gt; support
</span><br>
<span class="quotelev2">&gt; &gt;                           the following: array subsections, direct
</span><br>
<span class="quotelev1">&gt; passthru
</span><br>
<span class="quotelev2">&gt; &gt;                           (where possible) to underlying Open MPI's C
</span><br>
<span class="quotelev2">&gt; &gt;                           functionality
</span><br>
<span class="quotelev2">&gt; &gt;   Fort mpi_f08 subarrays: no
</span><br>
<span class="quotelev2">&gt; &gt;            Java bindings: no
</span><br>
<span class="quotelev2">&gt; &gt;   Wrapper compiler rpath: unnecessary
</span><br>
<span class="quotelev2">&gt; &gt;               C compiler: icc
</span><br>
<span class="quotelev2">&gt; &gt;      C compiler absolute: /opt/intel/Compiler/11.1/080/bin/intel64/icc
</span><br>
<span class="quotelev2">&gt; &gt;   C compiler family name: INTEL
</span><br>
<span class="quotelev2">&gt; &gt;       C compiler version: 1110.20091130
</span><br>
<span class="quotelev2">&gt; &gt;             C++ compiler: icpc
</span><br>
<span class="quotelev2">&gt; &gt;    C++ compiler absolute: /opt/intel/Compiler/11.1/080/bin/intel64/icpc
</span><br>
<span class="quotelev2">&gt; &gt;            Fort compiler: ifort
</span><br>
<span class="quotelev2">&gt; &gt;        Fort compiler abs: /opt/intel/Compiler/11.1/080/bin/intel64/ifort
</span><br>
<span class="quotelev2">&gt; &gt;          Fort ignore TKR: yes (!DEC$ ATTRIBUTES NO_ARG_CHECK ::)
</span><br>
<span class="quotelev2">&gt; &gt;    Fort 08 assumed shape: no
</span><br>
<span class="quotelev2">&gt; &gt;       Fort optional args: yes
</span><br>
<span class="quotelev2">&gt; &gt;       Fort BIND(C) (all): yes
</span><br>
<span class="quotelev2">&gt; &gt;       Fort ISO_C_BINDING: yes
</span><br>
<span class="quotelev2">&gt; &gt;  Fort SUBROUTINE BIND(C): yes
</span><br>
<span class="quotelev2">&gt; &gt;        Fort TYPE,BIND(C): yes
</span><br>
<span class="quotelev2">&gt; &gt;  Fort T,BIND(C,name=&quot;a&quot;): yes
</span><br>
<span class="quotelev2">&gt; &gt;             Fort PRIVATE: yes
</span><br>
<span class="quotelev2">&gt; &gt;           Fort PROTECTED: yes
</span><br>
<span class="quotelev2">&gt; &gt;            Fort ABSTRACT: yes
</span><br>
<span class="quotelev2">&gt; &gt;        Fort ASYNCHRONOUS: yes
</span><br>
<span class="quotelev2">&gt; &gt;           Fort PROCEDURE: yes
</span><br>
<span class="quotelev2">&gt; &gt;  Fort f08 using wrappers: yes
</span><br>
<span class="quotelev2">&gt; &gt;              C profiling: yes
</span><br>
<span class="quotelev2">&gt; &gt;            C++ profiling: yes
</span><br>
<span class="quotelev2">&gt; &gt;    Fort mpif.h profiling: yes
</span><br>
<span class="quotelev2">&gt; &gt;   Fort use mpi profiling: yes
</span><br>
<span class="quotelev2">&gt; &gt;    Fort use mpi_f08 prof: yes
</span><br>
<span class="quotelev2">&gt; &gt;           C++ exceptions: no
</span><br>
<span class="quotelev2">&gt; &gt;           Thread support: posix (MPI_THREAD_MULTIPLE: no, OPAL support:
</span><br>
<span class="quotelev1">&gt; yes,
</span><br>
<span class="quotelev2">&gt; &gt;                           OMPI progress: no, ORTE progress: yes, Event
</span><br>
<span class="quotelev1">&gt; lib:
</span><br>
<span class="quotelev2">&gt; &gt;                           yes)
</span><br>
<span class="quotelev2">&gt; &gt;            Sparse Groups: no
</span><br>
<span class="quotelev2">&gt; &gt;   Internal debug support: no
</span><br>
<span class="quotelev2">&gt; &gt;   MPI interface warnings: yes
</span><br>
<span class="quotelev2">&gt; &gt;      MPI parameter check: runtime
</span><br>
<span class="quotelev2">&gt; &gt; Memory profiling support: no
</span><br>
<span class="quotelev2">&gt; &gt; Memory debugging support: no
</span><br>
<span class="quotelev2">&gt; &gt;          libltdl support: yes
</span><br>
<span class="quotelev2">&gt; &gt;    Heterogeneous support: no
</span><br>
<span class="quotelev2">&gt; &gt;  mpirun default --prefix: no
</span><br>
<span class="quotelev2">&gt; &gt;          MPI I/O support: yes
</span><br>
<span class="quotelev2">&gt; &gt;        MPI_WTIME support: gettimeofday
</span><br>
<span class="quotelev2">&gt; &gt;      Symbol vis. support: yes
</span><br>
<span class="quotelev2">&gt; &gt;    Host topology support: yes
</span><br>
<span class="quotelev2">&gt; &gt;           MPI extensions:
</span><br>
<span class="quotelev2">&gt; &gt;    FT Checkpoint support: no (checkpoint thread: no)
</span><br>
<span class="quotelev2">&gt; &gt;    C/R Enabled Debugging: no
</span><br>
<span class="quotelev2">&gt; &gt;      VampirTrace support: yes
</span><br>
<span class="quotelev2">&gt; &gt;   MPI_MAX_PROCESSOR_NAME: 256
</span><br>
<span class="quotelev2">&gt; &gt;     MPI_MAX_ERROR_STRING: 256
</span><br>
<span class="quotelev2">&gt; &gt;      MPI_MAX_OBJECT_NAME: 64
</span><br>
<span class="quotelev2">&gt; &gt;         MPI_MAX_INFO_KEY: 36
</span><br>
<span class="quotelev2">&gt; &gt;         MPI_MAX_INFO_VAL: 256
</span><br>
<span class="quotelev2">&gt; &gt;        MPI_MAX_PORT_NAME: 1024
</span><br>
<span class="quotelev2">&gt; &gt;   MPI_MAX_DATAREP_STRING: 128
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/07/24764.php">http://www.open-mpi.org/community/lists/users/2014/07/24764.php</a>
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/07/24765.php">http://www.open-mpi.org/community/lists/users/2014/07/24765.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24766/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24767.php">Ralph Castain: "Re: [OMPI users] Can't run with more than two nodes in the hostfile"</a>
<li><strong>Previous message:</strong> <a href="24765.php">Ralph Castain: "Re: [OMPI users] Can't run with more than two nodes in the hostfile"</a>
<li><strong>In reply to:</strong> <a href="24765.php">Ralph Castain: "Re: [OMPI users] Can't run with more than two nodes in the hostfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24767.php">Ralph Castain: "Re: [OMPI users] Can't run with more than two nodes in the hostfile"</a>
<li><strong>Reply:</strong> <a href="24767.php">Ralph Castain: "Re: [OMPI users] Can't run with more than two nodes in the hostfile"</a>
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
