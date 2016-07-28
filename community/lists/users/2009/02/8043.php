<?
$subject_val = "Re: [OMPI users] strange error, seems inable to launch job";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 12 15:08:09 2009" -->
<!-- isoreceived="20090212200809" -->
<!-- sent="Thu, 12 Feb 2009 21:07:59 +0100" -->
<!-- isosent="20090212200759" -->
<!-- name="jobic" -->
<!-- email="jobic_at_[hidden]" -->
<!-- subject="Re: [OMPI users] strange error, seems inable to launch job" -->
<!-- id="4994819F.5040605_at_polytech.univ-mrs.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9EB1DD3E-186E-4F92-A18C-D6C92392587A_at_lanl.gov" -->
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
<strong>From:</strong> jobic (<em>jobic_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-12 15:07:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8044.php">Reuben D. Budiardja: "Re: [OMPI users] OpenMPI and Valgrind"</a>
<li><strong>Previous message:</strong> <a href="8042.php">Ashley Pittman: "Re: [OMPI users] OpenMPI and Valgrind"</a>
<li><strong>In reply to:</strong> <a href="8020.php">Ralph Castain: "Re: [OMPI users] strange error, seems inable to launch job"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Thanks for pointing me the location of the problem.
<br>
That came from my /dev, and the rights on the files.
<br>
I reinstalled linux, and i can now use openmpi correctly.
<br>
Still i don't know how i broke badly the system like this....
<br>
<p>Yann
<br>
<p>Ralph Castain a &#233;crit :
<br>
<span class="quotelev1">&gt; Never seen that one before, though we did put the test in there &quot;just 
</span><br>
<span class="quotelev1">&gt; in case&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Basically, this message indicates that the system returned an error 
</span><br>
<span class="quotelev1">&gt; when we attempted to dup2 the stdout/err file descriptors so we could 
</span><br>
<span class="quotelev1">&gt; setup a pipe by which we can forward that output to you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have no idea why the system would refuse the request. You might 
</span><br>
<span class="quotelev1">&gt; check your fd limits to see if they are strangely low, or write a 
</span><br>
<span class="quotelev1">&gt; little test program to see if there is something strange about pipe 
</span><br>
<span class="quotelev1">&gt; permissions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Most likely thing I can think of, though, is that you possibly are 
</span><br>
<span class="quotelev1">&gt; picking up incompatible libraries, or something got crosswise during 
</span><br>
<span class="quotelev1">&gt; build.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 11, 2009, at 3:10 AM, Mr Yann JOBIC wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I compiled ompi v1.3 (tarball)  with the intel compiler on debian 
</span><br>
<span class="quotelev2">&gt;&gt; etch. Everything went fine, thanks for the FAQ (quite complet)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But, when i'm running a job, i've got this error :
</span><br>
<span class="quotelev2">&gt;&gt; Trixy03-jobic% mpirun --verbose --debug-daemons -np 4 ./exe
</span><br>
<span class="quotelev2">&gt;&gt; [Trixy03:15140] [[19525,0],0] orted_cmd: received add_local_procs
</span><br>
<span class="quotelev2">&gt;&gt; [Trixy03:15140] [[19525,0],0] node[0].name Trixy03 daemon 0 arch 
</span><br>
<span class="quotelev2">&gt;&gt; ffc91200
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun was unable to launch the specified application as it 
</span><br>
<span class="quotelev2">&gt;&gt; encountered an error:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Error: pipe function call failed when setting up I/O forwarding 
</span><br>
<span class="quotelev2">&gt;&gt; subsystem
</span><br>
<span class="quotelev2">&gt;&gt; Node: Trixy03
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; while attempting to start process rank 0.
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don't understand what's going on, and how to debug...
</span><br>
<span class="quotelev2">&gt;&gt; I compiled mpich1, and i can successfully launch a job.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Have you got some ideas of what's going on ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Many thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yann
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; PS : Some possible interesting information :
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI SVN revision: r20295
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI release date: Jan 19, 2009
</span><br>
<span class="quotelev2">&gt;&gt; Open RTE: 1.3
</span><br>
<span class="quotelev2">&gt;&gt; Build CFLAGS: -DNDEBUG -mp1 -m64 -O3 -fno-alias -msse3 -static-intel 
</span><br>
<span class="quotelev2">&gt;&gt; -finline-functions -fno-strict-aliasing
</span><br>
<span class="quotelev2">&gt;&gt;                        -restrict -fexceptions -pthread 
</span><br>
<span class="quotelev2">&gt;&gt; -fvisibility=hidden
</span><br>
<span class="quotelev2">&gt;&gt; Build CXXFLAGS: -DNDEBUG -mp1 -m64 -O3 -fno-alias -msse3 
</span><br>
<span class="quotelev2">&gt;&gt; -static-intel -finline-functions -fexceptions -pthread
</span><br>
<span class="quotelev2">&gt;&gt; Build FFLAGS: -mp1 -m64 -O3 -fno-alias -msse3 -static-intel -fexceptions
</span><br>
<span class="quotelev2">&gt;&gt; Build FCFLAGS: -mp1 -m64 -O3 -fno-alias -msse3 -static-intel 
</span><br>
<span class="quotelev2">&gt;&gt; -fexceptions -fexceptions
</span><br>
<span class="quotelev2">&gt;&gt; Build LDFLAGS: -export-dynamic  -fexceptions
</span><br>
<span class="quotelev2">&gt;&gt; Build LIBS: -lnsl -lutil Wrapper extra CFLAGS: -fexceptions -pthread
</span><br>
<span class="quotelev2">&gt;&gt; Wrapper extra CXXFLAGS: -fexceptions -pthread
</span><br>
<span class="quotelev2">&gt;&gt; Wrapper extra FFLAGS: -fexceptions
</span><br>
<span class="quotelev2">&gt;&gt; Wrapper extra FCFLAGS: -fexceptions
</span><br>
<span class="quotelev2">&gt;&gt; Wrapper extra LDFLAGS:    Wrapper extra LIBS:   -ldl   
</span><br>
<span class="quotelev2">&gt;&gt; -Wl,--export-dynamic -lnsl -lutil
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8044.php">Reuben D. Budiardja: "Re: [OMPI users] OpenMPI and Valgrind"</a>
<li><strong>Previous message:</strong> <a href="8042.php">Ashley Pittman: "Re: [OMPI users] OpenMPI and Valgrind"</a>
<li><strong>In reply to:</strong> <a href="8020.php">Ralph Castain: "Re: [OMPI users] strange error, seems inable to launch job"</a>
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
