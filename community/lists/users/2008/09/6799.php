<?
$subject_val = "[OMPI users] 1.2.2 to 1.2.7 differences.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 30 15:38:28 2008" -->
<!-- isoreceived="20080930193828" -->
<!-- sent="Tue, 30 Sep 2008 12:33:56 -0700" -->
<!-- isosent="20080930193356" -->
<!-- name="Joe Griffin" -->
<!-- email="joe.griffin_at_[hidden]" -->
<!-- subject="[OMPI users] 1.2.2 to 1.2.7 differences." -->
<!-- id="260B5BEEF399B143A0F6E5D1D73ED2311EFB71_at_NASCMEX01.na.mscsoftware.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="92FD7813-1A11-4B00-A7A3-94480367B054_at_stud.cs.uit.no" -->
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
<strong>Subject:</strong> [OMPI users] 1.2.2 to 1.2.7 differences.<br>
<strong>From:</strong> Joe Griffin (<em>joe.griffin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-30 15:33:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6800.php">Ralph Castain: "Re: [OMPI users] Running application with MPI_Comm_spawn() in	multithreaded environment"</a>
<li><strong>Previous message:</strong> <a href="6798.php">Jeff Squyres: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>In reply to:</strong> <a href="6797.php">Torje Henriksen: "Re: [OMPI users] Execution in multicore machines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/10/6817.php">Jeff Squyres: "Re: [OMPI users] 1.2.2 to 1.2.7 differences."</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/10/6817.php">Jeff Squyres: "Re: [OMPI users] 1.2.2 to 1.2.7 differences."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello All,
<br>
<p>&nbsp;
<br>
<p>My OpenMPI 1.2.2 version works fine.   I think OPAL_PREFIX has changed.
<br>
I install from RPM with --prefix.  When I run with 1.2.7 I get the
<br>
error:
<br>
<p>&nbsp;
<br>
<p>[em64t6:23450] [NO-NAME] ORTE_ERROR_LOG: Not found in file
<br>
runtime/orte_init_stage1.c at line 182
<br>
<p>------------------------------------------------------------------------
<br>
<pre>
--
Sorry!  You were supposed to get help about:
    orte_init:startup:internal-failure
from the file:
    help-orte-runtime
But I couldn't find any file matching that name.  Sorry!
 
 
I tried just running MPI run
 
em64t6 &lt;82&gt; setenv LD_LIBRARY_PATH /usr/local/openmpi-1.2.7/lib64/
em64t6 &lt;83&gt; setenv OPAL_PREFIX /usr/local/openmpi-1.2.7
em64t6 &lt;84&gt; /usr/local/openmpi-1.2.7/bin/mpirun --help
------------------------------------------------------------------------
--
Sorry!  You were supposed to get help about:
    orterun:usage
from the file:
    help-orterun.txt
But I couldn't find any file matching that name.  Sorry!
------------------------------------------------------------------------
--
 
 
The file exists, so I think my OPAL_PREFIX that worked in 1.2.2 does not
seem 
to work like 1.2.7:
 
em64t6 &lt;85&gt; ls -l $OPAL_PREFIX/share/openmpi/help-orterun.txt
-rw-r--r--  1 root root 5718 Sep 29 07:23
/usr/local/openmpi-1.2.7/share/openmpi
/help-orterun.txt
 
 
The above works with 1.2.2.  I searched the DOC and MAN pages for
OPAL_PREFIX, but could 
not find anything.   Can someone please tell me what has changed?   I am
including opmi_info for completeness:
 
 
em64t6 &lt;93&gt; /usr/local/openmpi-1.2.7/bin/ompi_info
                Open MPI: 1.2.7
   Open MPI SVN revision: r19401
                Open RTE: 1.2.7
   Open RTE SVN revision: r19401
                    OPAL: 1.2.7
       OPAL SVN revision: r19401
                  Prefix: /usr/local/openmpi-1.2.7
 Configured architecture: x86_64-redhat-linux-gnu
           Configured by: root
           Configured on: Mon Sep 29 07:15:16 PDT 2008
          Configure host: em64t6
                Built by: root
                Built on: Mon Sep 29 07:23:22 PDT 2008
              Built host: em64t6
              C bindings: yes
            C++ bindings: yes
      Fortran77 bindings: yes (all)
      Fortran90 bindings: no
 Fortran90 bindings size: na
              C compiler: gcc
     C compiler absolute: /usr/bin/gcc
            C++ compiler: g++
   C++ compiler absolute: /usr/bin/g++
      Fortran77 compiler: g77
  Fortran77 compiler abs: /usr/bin/g77
      Fortran90 compiler: none
  Fortran90 compiler abs: none
             C profiling: yes
           C++ profiling: yes
     Fortran77 profiling: yes
     Fortran90 profiling: no
          C++ exceptions: no
          Thread support: posix (mpi: no, progress: no)
  Internal debug support: no
     MPI parameter check: runtime
Memory profiling support: no
Memory debugging support: no
         libltdl support: yes
   Heterogeneous support: yes
 mpirun default --prefix: no
           MCA backtrace: execinfo (MCA v1.0, API v1.0, Component
v1.2.7)
              MCA memory: ptmalloc2 (MCA v1.0, API v1.0, Component
v1.2.7)
               MCA timer: linux (MCA v1.0, API v1.0, Component v1.2.7)
         MCA installdirs: env (MCA v1.0, API v1.0, Component v1.2.7)
         MCA installdirs: config (MCA v1.0, API v1.0, Component v1.2.7)
 
Can someone please tell me what has changed?
Regards,
Joe Griffin
 
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6799/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6800.php">Ralph Castain: "Re: [OMPI users] Running application with MPI_Comm_spawn() in	multithreaded environment"</a>
<li><strong>Previous message:</strong> <a href="6798.php">Jeff Squyres: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>In reply to:</strong> <a href="6797.php">Torje Henriksen: "Re: [OMPI users] Execution in multicore machines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/10/6817.php">Jeff Squyres: "Re: [OMPI users] 1.2.2 to 1.2.7 differences."</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/10/6817.php">Jeff Squyres: "Re: [OMPI users] 1.2.2 to 1.2.7 differences."</a>
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
