<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May  2 02:27:49 2007" -->
<!-- isoreceived="20070502062749" -->
<!-- sent="Wed, 02 May 2007 08:27:39 +0200" -->
<!-- isosent="20070502062739" -->
<!-- name="Bas van der Vlies" -->
<!-- email="basv_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Torque and OpenMPI 1.2.1 problems" -->
<!-- id="46382F5B.6070105_at_sara.nl" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Bas van der Vlies (<em>basv_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-02 02:27:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3176.php">Ole Holm Nielsen: "Re: [OMPI users] Torque and OpenMPI 1.2.1 problems"</a>
<li><strong>Previous message:</strong> <a href="3174.php">Rob: "Re: [OMPI users] Alpha system &amp; OpenMPI 1.2.1 does not work..."</a>
<li><strong>In reply to:</strong> <a href="3168.php">Ole Holm Nielsen: "[OMPI users] Torque and OpenMPI 1.2.1 problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3176.php">Ole Holm Nielsen: "Re: [OMPI users] Torque and OpenMPI 1.2.1 problems"</a>
<li><strong>Reply:</strong> <a href="3176.php">Ole Holm Nielsen: "Re: [OMPI users] Torque and OpenMPI 1.2.1 problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ole Holm Nielsen wrote:
<br>
<span class="quotelev1">&gt; We have built OpenMPI 1.2.1 with support for Torque 2.1.8 and its
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
<span class="quotelev1">&gt;               MCA memory: ptmalloc2 (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: tm (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: tm (MCA v1.0, API v1.3, Component v1.2.1)
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
<span class="quotelev1">&gt; [u126.dcsc.fysik.dtu.dk:11981] pls:tm: failed to poll for a spawned 
</span><br>
<span class="quotelev1">&gt; proc, return status = 17002
</span><br>
<span class="quotelev1">&gt; [u126.dcsc.fysik.dtu.dk:11981] [0,0,0] ORTE_ERROR_LOG: In errno in file 
</span><br>
<span class="quotelev1">&gt; rmgr_urm.c at line 462
</span><br>
<span class="quotelev1">&gt; [u126.dcsc.fysik.dtu.dk:11981] mpirun: spawn failed with errno=-11
</span><br>
<span class="quotelev1">&gt; 
</span><br>
Ole,
<br>
<p>&nbsp;&nbsp;You must use the following command:
<br>
{{{
<br>
mpiexec -np 2 ./a.out
<br>
<p>whello, i am 0 of 2
<br>
whello, i am 1 of 2
<br>
all is well that ends well
<br>
<p>}}}
<br>
<p>{{{
<br>
$ mpiexec -np 2 -machinefile $PBS_NODEFILE ./a.out
<br>
[ib-r6n19.irc.sara.nl:04999] pls:tm: failed to poll for a spawned proc, 
<br>
return status = 17002
<br>
[ib-r6n19.irc.sara.nl:04999] [0,0,0] ORTE_ERROR_LOG: In errno in file 
<br>
rmgr_urm.c at line 462
<br>
[ib-r6n19.irc.sara.nl:04999] mpiexec: spawn failed with errno=-11
<br>
}}}
<br>
<p><p><span class="quotelev1">&gt; When we run the same code in an interactive (non-Torque) shell the
</span><br>
<span class="quotelev1">&gt; hello_c code works correctly:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # /usr/local/openmpi-1.2.1-pgi/bin/mpirun -np 2 -machinefile hostfile 
</span><br>
<span class="quotelev1">&gt; hello_c
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 0 of 2
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 1 of 2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To prove that the Torque TM interface is working correctly we also make 
</span><br>
<span class="quotelev1">&gt; this
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
<span class="quotelev1">&gt; configure_options=&quot;--with-tm=/usr/local FC=pgf90 F77=pgf90 CC=pgcc 
</span><br>
<span class="quotelev1">&gt; CXX=pgCC CFLAGS=-Msignextend CXXFLAGS=-Msignextend 
</span><br>
<span class="quotelev1">&gt; --with-wrapper-cflags=-Msignextend --with-wrapper-cxxflags=-Msignextend 
</span><br>
<span class="quotelev1">&gt; FFLAGS
</span><br>
<span class="quotelev1">&gt; =-Msignextend FCFLAGS=-Msignextend --with-wrapper-fflags=-Msignextend 
</span><br>
<span class="quotelev1">&gt; --with-wrapper-fcflags=-Msignextend&quot;
</span><br>
<span class="quotelev1">&gt; rpmbuild_options=${rpmbuild_options}&quot; --define 'install_in_opt 0' 
</span><br>
<span class="quotelev1">&gt; --define 'install_shell_scripts 1' --define 'install_modulefile 0'&quot;
</span><br>
<span class="quotelev1">&gt; rpmbuild_options=${rpmbuild_options}&quot; --define '_prefix ${prefix}'&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; build_single=yes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
********************************************************************
*                                                                  *
*  Bas van der Vlies                     e-mail: basv_at_[hidden]      *
*  SARA - Academic Computing Services    phone:  +31 20 592 8012   *
*  Kruislaan 415                         fax:    +31 20 6683167    *
*  1098 SJ Amsterdam                                               *
*                                                                  *
********************************************************************
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3176.php">Ole Holm Nielsen: "Re: [OMPI users] Torque and OpenMPI 1.2.1 problems"</a>
<li><strong>Previous message:</strong> <a href="3174.php">Rob: "Re: [OMPI users] Alpha system &amp; OpenMPI 1.2.1 does not work..."</a>
<li><strong>In reply to:</strong> <a href="3168.php">Ole Holm Nielsen: "[OMPI users] Torque and OpenMPI 1.2.1 problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3176.php">Ole Holm Nielsen: "Re: [OMPI users] Torque and OpenMPI 1.2.1 problems"</a>
<li><strong>Reply:</strong> <a href="3176.php">Ole Holm Nielsen: "Re: [OMPI users] Torque and OpenMPI 1.2.1 problems"</a>
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
