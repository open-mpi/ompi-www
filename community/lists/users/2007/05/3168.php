<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue May  1 10:54:12 2007" -->
<!-- isoreceived="20070501145412" -->
<!-- sent="Tue, 01 May 2007 16:54:06 +0200" -->
<!-- isosent="20070501145406" -->
<!-- name="Ole Holm Nielsen" -->
<!-- email="Ole.H.Nielsen_at_[hidden]" -->
<!-- subject="[OMPI users] Torque and OpenMPI 1.2.1 problems" -->
<!-- id="4637548E.6050504_at_fysik.dtu.dk" -->
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
<strong>From:</strong> Ole Holm Nielsen (<em>Ole.H.Nielsen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-01 10:54:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3169.php">Brian Barrett: "Re: [OMPI users] OpenMPI 1.2.1: &quot;configure --enable-static&quot;: then make ends with error"</a>
<li><strong>Previous message:</strong> <a href="3167.php">Jeff Squyres: "Re: [OMPI users] MPI_Comm_Accept / MPI::Comm::Accept problem."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3171.php">Ralph Castain: "Re: [OMPI users] Torque and OpenMPI 1.2.1 problems"</a>
<li><strong>Reply:</strong> <a href="3171.php">Ralph Castain: "Re: [OMPI users] Torque and OpenMPI 1.2.1 problems"</a>
<li><strong>Reply:</strong> <a href="3175.php">Bas van der Vlies: "Re: [OMPI users] Torque and OpenMPI 1.2.1 problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We have built OpenMPI 1.2.1 with support for Torque 2.1.8 and its
<br>
Task Manager interface.  We use the PGI 6.2-4 compiler and the
<br>
--with-tm option as described in
<br>
<a href="http://www.open-mpi.org/faq/?category=building#build-rte-tm">http://www.open-mpi.org/faq/?category=building#build-rte-tm</a>
<br>
for building an OpenMPI RPM on a Pentium-4 machine running CentOS 4.4
<br>
(RHEL4U4 clone).  The TM interface seems to be available as it should:
<br>
<p># ompi_info | grep tm
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA memory: ptmalloc2 (MCA v1.0, API v1.0, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: tm (MCA v1.0, API v1.3, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pls: tm (MCA v1.0, API v1.3, Component v1.2.1)
<br>
<p>When we submit a Torque batch job running the example code in
<br>
openmpi-1.2.1/examples/hello_c.c we get this error message:
<br>
<p>/usr/local/openmpi-1.2.1-pgi/bin/mpirun -np 2 -machinefile $PBS_NODEFILE hello_c
<br>
[u126.dcsc.fysik.dtu.dk:11981] pls:tm: failed to poll for a spawned proc, return 
<br>
status = 17002
<br>
[u126.dcsc.fysik.dtu.dk:11981] [0,0,0] ORTE_ERROR_LOG: In errno in file 
<br>
rmgr_urm.c at line 462
<br>
[u126.dcsc.fysik.dtu.dk:11981] mpirun: spawn failed with errno=-11
<br>
<p>When we run the same code in an interactive (non-Torque) shell the
<br>
hello_c code works correctly:
<br>
<p># /usr/local/openmpi-1.2.1-pgi/bin/mpirun -np 2 -machinefile hostfile hello_c
<br>
Hello, world, I am 0 of 2
<br>
Hello, world, I am 1 of 2
<br>
<p>To prove that the Torque TM interface is working correctly we also make this
<br>
test within the Torque batch job using the Torque pbsdsh command:
<br>
<p>pbsdsh hostname
<br>
u126.dcsc.fysik.dtu.dk
<br>
u113.dcsc.fysik.dtu.dk
<br>
<p>So obviously something is broken between Torque 2.1.8 and OpenMPI 1.2.1
<br>
with respect to the TM interface, whereas either one alone seems to work
<br>
correctly.  Can anyone suggest a solution to this problem ?
<br>
<p>I wonder if this problem may be related to this list thread:
<br>
<a href="http://www.open-mpi.org/community/lists/users/2007/04/3028.php">http://www.open-mpi.org/community/lists/users/2007/04/3028.php</a>
<br>
<p>Details of configuration:
<br>
-------------------------
<br>
<p>We use the buildrpm.sh script from
<br>
<a href="http://www.open-mpi.org/software/ompi/v1.2/srpm.php">http://www.open-mpi.org/software/ompi/v1.2/srpm.php</a>
<br>
and change the following options in the script:
<br>
<p>prefix=&quot;/usr/local/openmpi-1.2.1-pgi&quot;
<br>
<p>configure_options=&quot;--with-tm=/usr/local FC=pgf90 F77=pgf90 CC=pgcc CXX=pgCC 
<br>
CFLAGS=-Msignextend CXXFLAGS=-Msignextend --with-wrapper-cflags=-Msignextend 
<br>
--with-wrapper-cxxflags=-Msignextend FFLAGS
<br>
=-Msignextend FCFLAGS=-Msignextend --with-wrapper-fflags=-Msignextend 
<br>
--with-wrapper-fcflags=-Msignextend&quot;
<br>
rpmbuild_options=${rpmbuild_options}&quot; --define 'install_in_opt 0' --define 
<br>
'install_shell_scripts 1' --define 'install_modulefile 0'&quot;
<br>
rpmbuild_options=${rpmbuild_options}&quot; --define '_prefix ${prefix}'&quot;
<br>
<p>build_single=yes
<br>
<p><pre>
-- 
Ole Holm Nielsen
Department of Physics, Technical University of Denmark
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3169.php">Brian Barrett: "Re: [OMPI users] OpenMPI 1.2.1: &quot;configure --enable-static&quot;: then make ends with error"</a>
<li><strong>Previous message:</strong> <a href="3167.php">Jeff Squyres: "Re: [OMPI users] MPI_Comm_Accept / MPI::Comm::Accept problem."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3171.php">Ralph Castain: "Re: [OMPI users] Torque and OpenMPI 1.2.1 problems"</a>
<li><strong>Reply:</strong> <a href="3171.php">Ralph Castain: "Re: [OMPI users] Torque and OpenMPI 1.2.1 problems"</a>
<li><strong>Reply:</strong> <a href="3175.php">Bas van der Vlies: "Re: [OMPI users] Torque and OpenMPI 1.2.1 problems"</a>
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
