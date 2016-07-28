<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue May  1 12:32:07 2007" -->
<!-- isoreceived="20070501163207" -->
<!-- sent="Tue, 01 May 2007 10:32:03 -0600" -->
<!-- isosent="20070501163203" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Torque and OpenMPI 1.2.1 problems" -->
<!-- id="C25CC7A3.2A7F%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4637548E.6050504_at_fysik.dtu.dk" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-01 12:32:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3172.php">Ole Holm Nielsen: "Re: [OMPI users] Torque and OpenMPI 1.2.1 problems"</a>
<li><strong>Previous message:</strong> <a href="3170.php">Rob: "Re: [OMPI users] OpenMPI 1.2.1: &quot;configure --enable-static&quot;: then make ends with error"</a>
<li><strong>In reply to:</strong> <a href="3168.php">Ole Holm Nielsen: "[OMPI users] Torque and OpenMPI 1.2.1 problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3172.php">Ole Holm Nielsen: "Re: [OMPI users] Torque and OpenMPI 1.2.1 problems"</a>
<li><strong>Reply:</strong> <a href="3172.php">Ole Holm Nielsen: "Re: [OMPI users] Torque and OpenMPI 1.2.1 problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The most likely problem is that you have a path or library issue regarding
<br>
the location of the OpenMPI/OpenRTE executables when running batch versus
<br>
interactive. We see this sometimes when the shell startups differ in those
<br>
two modes.
<br>
<p>You might try just running a batch vs interactive printenv to see if
<br>
differences exist.
<br>
<p>As far as I know, there are no compatibility issues with Torque at this
<br>
time. 
<br>
<p>Ralph
<br>
<p><p>On 5/1/07 8:54 AM, &quot;Ole Holm Nielsen&quot; &lt;Ole.H.Nielsen_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; We have built OpenMPI 1.2.1 with support for Torque 2.1.8 and its
</span><br>
<span class="quotelev1">&gt; Task Manager interface.  We use the PGI 6.2-4 compiler and the
</span><br>
<span class="quotelev1">&gt; --with-tm option as described in
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=building#build-rte-tm">http://www.open-mpi.org/faq/?category=building#build-rte-tm</a>
</span><br>
<span class="quotelev1">&gt; for building an OpenMPI RPM on a Pentium-4 machine running CentOS 4.4
</span><br>
<span class="quotelev1">&gt; (RHEL4U4 clone).  The TM interface seems to be available as it should:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # ompi_info | grep tm
</span><br>
<span class="quotelev1">&gt;                MCA memory: ptmalloc2 (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA ras: tm (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA pls: tm (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When we submit a Torque batch job running the example code in
</span><br>
<span class="quotelev1">&gt; openmpi-1.2.1/examples/hello_c.c we get this error message:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.2.1-pgi/bin/mpirun -np 2 -machinefile $PBS_NODEFILE
</span><br>
<span class="quotelev1">&gt; hello_c
</span><br>
<span class="quotelev1">&gt; [u126.dcsc.fysik.dtu.dk:11981] pls:tm: failed to poll for a spawned proc,
</span><br>
<span class="quotelev1">&gt; return 
</span><br>
<span class="quotelev1">&gt; status = 17002
</span><br>
<span class="quotelev1">&gt; [u126.dcsc.fysik.dtu.dk:11981] [0,0,0] ORTE_ERROR_LOG: In errno in file
</span><br>
<span class="quotelev1">&gt; rmgr_urm.c at line 462
</span><br>
<span class="quotelev1">&gt; [u126.dcsc.fysik.dtu.dk:11981] mpirun: spawn failed with errno=-11
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When we run the same code in an interactive (non-Torque) shell the
</span><br>
<span class="quotelev1">&gt; hello_c code works correctly:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # /usr/local/openmpi-1.2.1-pgi/bin/mpirun -np 2 -machinefile hostfile hello_c
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 0 of 2
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 1 of 2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To prove that the Torque TM interface is working correctly we also make this
</span><br>
<span class="quotelev1">&gt; test within the Torque batch job using the Torque pbsdsh command:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; pbsdsh hostname
</span><br>
<span class="quotelev1">&gt; u126.dcsc.fysik.dtu.dk
</span><br>
<span class="quotelev1">&gt; u113.dcsc.fysik.dtu.dk
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So obviously something is broken between Torque 2.1.8 and OpenMPI 1.2.1
</span><br>
<span class="quotelev1">&gt; with respect to the TM interface, whereas either one alone seems to work
</span><br>
<span class="quotelev1">&gt; correctly.  Can anyone suggest a solution to this problem ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I wonder if this problem may be related to this list thread:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2007/04/3028.php">http://www.open-mpi.org/community/lists/users/2007/04/3028.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Details of configuration:
</span><br>
<span class="quotelev1">&gt; -------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We use the buildrpm.sh script from
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/software/ompi/v1.2/srpm.php">http://www.open-mpi.org/software/ompi/v1.2/srpm.php</a>
</span><br>
<span class="quotelev1">&gt; and change the following options in the script:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; prefix=&quot;/usr/local/openmpi-1.2.1-pgi&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; configure_options=&quot;--with-tm=/usr/local FC=pgf90 F77=pgf90 CC=pgcc CXX=pgCC
</span><br>
<span class="quotelev1">&gt; CFLAGS=-Msignextend CXXFLAGS=-Msignextend --with-wrapper-cflags=-Msignextend
</span><br>
<span class="quotelev1">&gt; --with-wrapper-cxxflags=-Msignextend FFLAGS
</span><br>
<span class="quotelev1">&gt; =-Msignextend FCFLAGS=-Msignextend --with-wrapper-fflags=-Msignextend
</span><br>
<span class="quotelev1">&gt; --with-wrapper-fcflags=-Msignextend&quot;
</span><br>
<span class="quotelev1">&gt; rpmbuild_options=${rpmbuild_options}&quot; --define 'install_in_opt 0' --define
</span><br>
<span class="quotelev1">&gt; 'install_shell_scripts 1' --define 'install_modulefile 0'&quot;
</span><br>
<span class="quotelev1">&gt; rpmbuild_options=${rpmbuild_options}&quot; --define '_prefix ${prefix}'&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; build_single=yes
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3172.php">Ole Holm Nielsen: "Re: [OMPI users] Torque and OpenMPI 1.2.1 problems"</a>
<li><strong>Previous message:</strong> <a href="3170.php">Rob: "Re: [OMPI users] OpenMPI 1.2.1: &quot;configure --enable-static&quot;: then make ends with error"</a>
<li><strong>In reply to:</strong> <a href="3168.php">Ole Holm Nielsen: "[OMPI users] Torque and OpenMPI 1.2.1 problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3172.php">Ole Holm Nielsen: "Re: [OMPI users] Torque and OpenMPI 1.2.1 problems"</a>
<li><strong>Reply:</strong> <a href="3172.php">Ole Holm Nielsen: "Re: [OMPI users] Torque and OpenMPI 1.2.1 problems"</a>
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
