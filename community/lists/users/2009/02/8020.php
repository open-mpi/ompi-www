<?
$subject_val = "Re: [OMPI users] strange error, seems inable to launch job";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 11 10:04:32 2009" -->
<!-- isoreceived="20090211150432" -->
<!-- sent="Wed, 11 Feb 2009 08:04:17 -0700" -->
<!-- isosent="20090211150417" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] strange error, seems inable to launch job" -->
<!-- id="9EB1DD3E-186E-4F92-A18C-D6C92392587A_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4992A41A.2000908_at_polytech.univ-mrs.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] strange error, seems inable to launch job<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-11 10:04:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8021.php">Ashley Pittman: "Re: [OMPI users] Supporting OpenMPI compiled for multiple compilers"</a>
<li><strong>Previous message:</strong> <a href="8019.php">Ralph Castain: "Re: [OMPI users] Bug in openmpi 1.3 orte/mca/plm/tm/Makefile.am"</a>
<li><strong>In reply to:</strong> <a href="8016.php">Mr Yann JOBIC: "[OMPI users] strange error, seems inable to launch job"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8030.php">Mr Yann JOBIC: "Re: [OMPI users] strange error, seems inable to launch job"</a>
<li><strong>Reply:</strong> <a href="8030.php">Mr Yann JOBIC: "Re: [OMPI users] strange error, seems inable to launch job"</a>
<li><strong>Reply:</strong> <a href="8043.php">jobic: "Re: [OMPI users] strange error, seems inable to launch job"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Never seen that one before, though we did put the test in there &quot;just  
<br>
in case&quot;.
<br>
<p>Basically, this message indicates that the system returned an error  
<br>
when we attempted to dup2 the stdout/err file descriptors so we could  
<br>
setup a pipe by which we can forward that output to you.
<br>
<p>I have no idea why the system would refuse the request. You might  
<br>
check your fd limits to see if they are strangely low, or write a  
<br>
little test program to see if there is something strange about pipe  
<br>
permissions.
<br>
<p>Most likely thing I can think of, though, is that you possibly are  
<br>
picking up incompatible libraries, or something got crosswise during  
<br>
build.
<br>
<p>Ralph
<br>
<p>On Feb 11, 2009, at 3:10 AM, Mr Yann JOBIC wrote:
<br>
<p><span class="quotelev1">&gt; Hello all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I compiled ompi v1.3 (tarball)  with the intel compiler on debian  
</span><br>
<span class="quotelev1">&gt; etch. Everything went fine, thanks for the FAQ (quite complet)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But, when i'm running a job, i've got this error :
</span><br>
<span class="quotelev1">&gt; Trixy03-jobic% mpirun --verbose --debug-daemons -np 4 ./exe
</span><br>
<span class="quotelev1">&gt; [Trixy03:15140] [[19525,0],0] orted_cmd: received add_local_procs
</span><br>
<span class="quotelev1">&gt; [Trixy03:15140] [[19525,0],0] node[0].name Trixy03 daemon 0 arch  
</span><br>
<span class="quotelev1">&gt; ffc91200
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun was unable to launch the specified application as it  
</span><br>
<span class="quotelev1">&gt; encountered an error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Error: pipe function call failed when setting up I/O forwarding  
</span><br>
<span class="quotelev1">&gt; subsystem
</span><br>
<span class="quotelev1">&gt; Node: Trixy03
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; while attempting to start process rank 0.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't understand what's going on, and how to debug...
</span><br>
<span class="quotelev1">&gt; I compiled mpich1, and i can successfully launch a job.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Have you got some ideas of what's going on ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Many thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yann
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PS : Some possible interesting information :
</span><br>
<span class="quotelev1">&gt; Open MPI SVN revision: r20295
</span><br>
<span class="quotelev1">&gt; Open MPI release date: Jan 19, 2009
</span><br>
<span class="quotelev1">&gt; Open RTE: 1.3
</span><br>
<span class="quotelev1">&gt; Build CFLAGS: -DNDEBUG -mp1 -m64 -O3 -fno-alias -msse3 -static-intel  
</span><br>
<span class="quotelev1">&gt; -finline-functions -fno-strict-aliasing
</span><br>
<span class="quotelev1">&gt;                        -restrict -fexceptions -pthread - 
</span><br>
<span class="quotelev1">&gt; fvisibility=hidden
</span><br>
<span class="quotelev1">&gt; Build CXXFLAGS: -DNDEBUG -mp1 -m64 -O3 -fno-alias -msse3 -static- 
</span><br>
<span class="quotelev1">&gt; intel -finline-functions -fexceptions -pthread
</span><br>
<span class="quotelev1">&gt; Build FFLAGS: -mp1 -m64 -O3 -fno-alias -msse3 -static-intel - 
</span><br>
<span class="quotelev1">&gt; fexceptions
</span><br>
<span class="quotelev1">&gt; Build FCFLAGS: -mp1 -m64 -O3 -fno-alias -msse3 -static-intel - 
</span><br>
<span class="quotelev1">&gt; fexceptions -fexceptions
</span><br>
<span class="quotelev1">&gt; Build LDFLAGS: -export-dynamic  -fexceptions
</span><br>
<span class="quotelev1">&gt; Build LIBS: -lnsl -lutil Wrapper extra CFLAGS: -fexceptions -pthread
</span><br>
<span class="quotelev1">&gt; Wrapper extra CXXFLAGS: -fexceptions -pthread
</span><br>
<span class="quotelev1">&gt; Wrapper extra FFLAGS: -fexceptions
</span><br>
<span class="quotelev1">&gt; Wrapper extra FCFLAGS: -fexceptions
</span><br>
<span class="quotelev1">&gt; Wrapper extra LDFLAGS:    Wrapper extra LIBS:   -ldl   -Wl,--export- 
</span><br>
<span class="quotelev1">&gt; dynamic -lnsl -lutil
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; ___________________________
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yann JOBIC
</span><br>
<span class="quotelev1">&gt; HPC engineer
</span><br>
<span class="quotelev1">&gt; Polytech Marseille DME
</span><br>
<span class="quotelev1">&gt; IUSTI-CNRS UMR 6595
</span><br>
<span class="quotelev1">&gt; Technop&#244;le de Ch&#226;teau Gombert
</span><br>
<span class="quotelev1">&gt; 5 rue Enrico Fermi
</span><br>
<span class="quotelev1">&gt; 13453 Marseille cedex 13
</span><br>
<span class="quotelev1">&gt; Tel : (33) 4 91 10 69 39
</span><br>
<span class="quotelev1">&gt; ou  (33) 4 91 10 69 43
</span><br>
<span class="quotelev1">&gt; Fax : (33) 4 91 10 69 69  
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
<li><strong>Next message:</strong> <a href="8021.php">Ashley Pittman: "Re: [OMPI users] Supporting OpenMPI compiled for multiple compilers"</a>
<li><strong>Previous message:</strong> <a href="8019.php">Ralph Castain: "Re: [OMPI users] Bug in openmpi 1.3 orte/mca/plm/tm/Makefile.am"</a>
<li><strong>In reply to:</strong> <a href="8016.php">Mr Yann JOBIC: "[OMPI users] strange error, seems inable to launch job"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8030.php">Mr Yann JOBIC: "Re: [OMPI users] strange error, seems inable to launch job"</a>
<li><strong>Reply:</strong> <a href="8030.php">Mr Yann JOBIC: "Re: [OMPI users] strange error, seems inable to launch job"</a>
<li><strong>Reply:</strong> <a href="8043.php">jobic: "Re: [OMPI users] strange error, seems inable to launch job"</a>
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
