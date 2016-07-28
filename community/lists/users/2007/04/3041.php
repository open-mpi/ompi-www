<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Apr  7 14:23:42 2007" -->
<!-- isoreceived="20070407182342" -->
<!-- sent="Sat, 07 Apr 2007 14:23:36 -0400" -->
<!-- isosent="20070407182336" -->
<!-- name="de Almeida, Valmor F." -->
<!-- email="dealmeidav_at_[hidden]" -->
<!-- subject="[OMPI users] mca_btl_tcp_frag_send: writev failed with errno=104" -->
<!-- id="D2D7D9FE2492524A925313E2D82E1B5304F6A116_at_ORNLEXCHANGE.ornl.gov" -->
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
<strong>From:</strong> de Almeida, Valmor F. (<em>dealmeidav_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-07 14:23:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3042.php">de Almeida, Valmor F.: "Re: [OMPI users] OpenMPI 1.2 on MacOSX Intel Fails"</a>
<li><strong>Previous message:</strong> <a href="3040.php">Brian Powell: "[OMPI users] OpenMPI 1.2 on MacOSX Intel Fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3043.php">Adrian Knoth: "Re: [OMPI users] mca_btl_tcp_frag_send: writev failed with errno=104"</a>
<li><strong>Reply:</strong> <a href="3043.php">Adrian Knoth: "Re: [OMPI users] mca_btl_tcp_frag_send: writev failed with errno=104"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Is there a way to get detailed information on what this error may be?
<br>
<p>[x1:17287] mca_btl_tcp_frag_send: writev failed with errno=104
<br>
mpirun noticed that job rank 0 with PID 17287 on node x1 exited on
<br>
signal 15 (Terminated). 
<br>
15 additional processes aborted (not shown)
<br>
<p>Thanks,
<br>
<p><pre>
--
Valmor
Using MX-1.1.6 and
-&gt;ompi_info 
                Open MPI: 1.2.1a0r14250
   Open MPI SVN revision: r14250
                Open RTE: 1.2.1a0r14250
   Open RTE SVN revision: r14250
                    OPAL: 1.2.1a0r14250
       OPAL SVN revision: r14250
                  Prefix: /opt/intel-openmpi-1.2.1a0r14250
 Configured architecture: i686-pc-linux-gnu
           Configured by: root
              C bindings: yes
            C++ bindings: yes
      Fortran77 bindings: yes (all)
      Fortran90 bindings: yes
 Fortran90 bindings size: medium
              C compiler: icc
     C compiler absolute: /opt/icc-9.1.047/bin/icc
            C++ compiler: icpc
   C++ compiler absolute: /opt/icc-9.1.047/bin/icpc
      Fortran77 compiler: ifort
  Fortran77 compiler abs: /opt/ifort-9.1.041/bin/ifort
      Fortran90 compiler: ifort
  Fortran90 compiler abs: /opt/ifort-9.1.041/bin/ifort
             C profiling: yes
           C++ profiling: yes
     Fortran77 profiling: yes
     Fortran90 profiling: yes
          C++ exceptions: no
          Thread support: posix (mpi: no, progress: no)
  Internal debug support: no
     MPI parameter check: always
Memory profiling support: no
Memory debugging support: no
         libltdl support: yes
   Heterogeneous support: yes
 mpirun default --prefix: no
           MCA backtrace: execinfo (MCA v1.0, API v1.0, Component
v1.2.1)
              MCA memory: ptmalloc2 (MCA v1.0, API v1.0, Component
v1.2.1)
           MCA paffinity: linux (MCA v1.0, API v1.0, Component v1.2.1)
           MCA maffinity: first_use (MCA v1.0, API v1.0, Component
v1.2.1)
               MCA timer: linux (MCA v1.0, API v1.0, Component v1.2.1)
           MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3042.php">de Almeida, Valmor F.: "Re: [OMPI users] OpenMPI 1.2 on MacOSX Intel Fails"</a>
<li><strong>Previous message:</strong> <a href="3040.php">Brian Powell: "[OMPI users] OpenMPI 1.2 on MacOSX Intel Fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3043.php">Adrian Knoth: "Re: [OMPI users] mca_btl_tcp_frag_send: writev failed with errno=104"</a>
<li><strong>Reply:</strong> <a href="3043.php">Adrian Knoth: "Re: [OMPI users] mca_btl_tcp_frag_send: writev failed with errno=104"</a>
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
