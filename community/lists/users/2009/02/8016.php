<?
$subject_val = "[OMPI users] strange error, seems inable to launch job";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 11 05:10:40 2009" -->
<!-- isoreceived="20090211101040" -->
<!-- sent="Wed, 11 Feb 2009 11:10:34 +0100" -->
<!-- isosent="20090211101034" -->
<!-- name="Mr Yann JOBIC" -->
<!-- email="jobic_at_[hidden]" -->
<!-- subject="[OMPI users] strange error, seems inable to launch job" -->
<!-- id="4992A41A.2000908_at_polytech.univ-mrs.fr" -->
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
<strong>Subject:</strong> [OMPI users] strange error, seems inable to launch job<br>
<strong>From:</strong> Mr Yann JOBIC (<em>jobic_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-11 05:10:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8017.php">Åke Sandgren: "[OMPI users] Bug in openmpi 1.3 orte/mca/plm/tm/Makefile.am"</a>
<li><strong>Previous message:</strong> <a href="8015.php">simone marras: "Re: [OMPI users] again on &quot;...mpif90, mpif77 compiler is 	non-functional&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8020.php">Ralph Castain: "Re: [OMPI users] strange error, seems inable to launch job"</a>
<li><strong>Reply:</strong> <a href="8020.php">Ralph Castain: "Re: [OMPI users] strange error, seems inable to launch job"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all,
<br>
<p>I compiled ompi v1.3 (tarball)  with the intel compiler on debian etch. 
<br>
Everything went fine, thanks for the FAQ (quite complet)
<br>
<p>But, when i'm running a job, i've got this error :
<br>
Trixy03-jobic% mpirun --verbose --debug-daemons -np 4 ./exe
<br>
[Trixy03:15140] [[19525,0],0] orted_cmd: received add_local_procs
<br>
[Trixy03:15140] [[19525,0],0] node[0].name Trixy03 daemon 0 arch ffc91200
<br>
--------------------------------------------------------------------------
<br>
mpirun was unable to launch the specified application as it encountered 
<br>
an error:
<br>
<p>Error: pipe function call failed when setting up I/O forwarding subsystem
<br>
Node: Trixy03
<br>
<p>while attempting to start process rank 0.
<br>
--------------------------------------------------------------------------
<br>
<p>I don't understand what's going on, and how to debug...
<br>
I compiled mpich1, and i can successfully launch a job.
<br>
<p>Have you got some ideas of what's going on ?
<br>
<p>Many thanks,
<br>
<p>Yann
<br>
<p>PS : Some possible interesting information :
<br>
Open MPI SVN revision: r20295
<br>
Open MPI release date: Jan 19, 2009
<br>
Open RTE: 1.3
<br>
Build CFLAGS: -DNDEBUG -mp1 -m64 -O3 -fno-alias -msse3 -static-intel 
<br>
-finline-functions -fno-strict-aliasing
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-restrict -fexceptions -pthread -fvisibility=hidden
<br>
Build CXXFLAGS: -DNDEBUG -mp1 -m64 -O3 -fno-alias -msse3 -static-intel 
<br>
-finline-functions -fexceptions -pthread
<br>
Build FFLAGS: -mp1 -m64 -O3 -fno-alias -msse3 -static-intel -fexceptions
<br>
Build FCFLAGS: -mp1 -m64 -O3 -fno-alias -msse3 -static-intel 
<br>
-fexceptions -fexceptions
<br>
Build LDFLAGS: -export-dynamic  -fexceptions
<br>
Build LIBS: -lnsl -lutil 
<br>
Wrapper extra CFLAGS: -fexceptions -pthread
<br>
Wrapper extra CXXFLAGS: -fexceptions -pthread
<br>
Wrapper extra FFLAGS: -fexceptions
<br>
Wrapper extra FCFLAGS: -fexceptions
<br>
Wrapper extra LDFLAGS:    
<br>
Wrapper extra LIBS:   -ldl   -Wl,--export-dynamic -lnsl -lutil
<br>
<p><p><p><pre>
-- 
___________________________
Yann JOBIC
HPC engineer
Polytech Marseille DME
IUSTI-CNRS UMR 6595
Technop&#244;le de Ch&#226;teau Gombert
5 rue Enrico Fermi
13453 Marseille cedex 13
Tel : (33) 4 91 10 69 39
  ou  (33) 4 91 10 69 43
Fax : (33) 4 91 10 69 69 
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8017.php">Åke Sandgren: "[OMPI users] Bug in openmpi 1.3 orte/mca/plm/tm/Makefile.am"</a>
<li><strong>Previous message:</strong> <a href="8015.php">simone marras: "Re: [OMPI users] again on &quot;...mpif90, mpif77 compiler is 	non-functional&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8020.php">Ralph Castain: "Re: [OMPI users] strange error, seems inable to launch job"</a>
<li><strong>Reply:</strong> <a href="8020.php">Ralph Castain: "Re: [OMPI users] strange error, seems inable to launch job"</a>
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
