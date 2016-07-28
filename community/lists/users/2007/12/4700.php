<?
$subject_val = "[OMPI users] Torque and OpenMPI 1.2";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 18 11:10:05 2007" -->
<!-- isoreceived="20071218161005" -->
<!-- sent="Tue, 18 Dec 2007 10:09:58 -0600" -->
<!-- isosent="20071218160958" -->
<!-- name="pat.o'bryant_at_[hidden]" -->
<!-- email="pat.o'bryant_at_[hidden]" -->
<!-- subject="[OMPI users] Torque and OpenMPI 1.2" -->
<!-- id="OF85C3A1DA.35891577-ON862573B5.0054F4A8-862573B5.0058CBF6_at_exxonmobil.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] Torque and OpenMPI 1.2<br>
<strong>From:</strong> <a href="mailto:pat.o'bryant_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Torque%20and%20OpenMPI%201.2"><em>pat.o'bryant_at_[hidden]</em></a><br>
<strong>Date:</strong> 2007-12-18 11:09:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4701.php">Marco Sbrighi: "Re: [OMPI users] Bug in oob_tcp_[in|ex]clude?"</a>
<li><strong>Previous message:</strong> <a href="4699.php">Ralph H Castain: "Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4703.php">Reuti: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<li><strong>Reply:</strong> <a href="4703.php">Reuti: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<li><strong>Reply:</strong> <a href="4712.php">Jeff Squyres: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<li><strong>Maybe reply:</strong> <a href="4713.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<li><strong>Maybe reply:</strong> <a href="4736.php">Ralph H Castain: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;We have Torque as an mpi job scheduler. Additionally,  I have some
<br>
users that want to modify the contents of &quot;-hostfile&quot; when they execute
<br>
&quot;mpirun&quot;.  To allow the modification of the hostfile,  I downloaded OpenMPI
<br>
1.2 and attempted to do a &quot;configure&quot; with the options shown below:
<br>
<p>./configure --prefix /opt/openmpi-1.2 --with-openib=/usr/local/ofed
<br>
--with-tm=/usr/local/pbs CC=icc CXX=icpc F77=ifort FC=ifort
<br>
--with-threads=posix --enable-mpi-threads
<br>
<p>The configure fails with the following messages:
<br>
--------------------------------------------------------------------------
<br>
checking tm.h presence... yes
<br>
checking for tm.h... yes
<br>
looking for library in lib
<br>
checking for tm_finalize in -ltorque... no
<br>
looking for library in lib64
<br>
checking for tm_finalize in -ltorque... no
<br>
configure: error: TM support requested but not found.  Aborting
<br>
--------------------------------------------------------------------------
<br>
<p>In looking at the configure script there are typos for &quot;hapy&quot; for &quot;happy&quot;.
<br>
Correcting those made no difference. The &quot;config.log&quot; lists an &quot;-L&quot;
<br>
parameter that isn't the correct path for Torque. Our release of Torque,
<br>
2.2.0, contains libraries under &quot;/usr/local/pbs/x86_64&quot; not
<br>
&quot;/usr/local/pbs&quot; so the links will fail. I am assuming that the &quot;configure&quot;
<br>
script does not figure out the correct path for Torque 2.2.0 libraries.
<br>
<p>&nbsp;Config log messages:
<br>
--------------------------------------------------------------------------
<br>
configure:78250: result: no
<br>
configure:78274: result: looking for library in lib64
<br>
configure:78276: checking for tm_finalize in -ltorque
<br>
configure:78306: icc -o conftest -O3 -DNDEBUG -finline-functions
<br>
-fno-strict-aliasing -restrict -pthread  -I/usr/local/pbs/include
<br>
-L/usr/local/pbs/lib64 conftest.c -ltorque  -lnsl -lutil   &gt;&amp;5
<br>
ld: cannot find -ltorque
<br>
configure:78312: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
--------------------------------------------------------------------------
<br>
<p>So is there a &quot;configure&quot; script that works with Torque 2.2 and OpenMPI 1.2
<br>
?
<br>
<p>Thanks,
<br>
<p>J.W. (Pat) O'Bryant,Jr.
<br>
Business Line Infrastructure
<br>
Technical Systems, HPC
<br>
Office: 713-431-7022
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4701.php">Marco Sbrighi: "Re: [OMPI users] Bug in oob_tcp_[in|ex]clude?"</a>
<li><strong>Previous message:</strong> <a href="4699.php">Ralph H Castain: "Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4703.php">Reuti: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<li><strong>Reply:</strong> <a href="4703.php">Reuti: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<li><strong>Reply:</strong> <a href="4712.php">Jeff Squyres: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<li><strong>Maybe reply:</strong> <a href="4713.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<li><strong>Maybe reply:</strong> <a href="4736.php">Ralph H Castain: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
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
