<?
$subject_val = "Re: [OMPI users] Torque and OpenMPI 1.2";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 18 12:22:15 2007" -->
<!-- isoreceived="20071218172215" -->
<!-- sent="Tue, 18 Dec 2007 12:22:08 -0500" -->
<!-- isosent="20071218172208" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Torque and OpenMPI 1.2" -->
<!-- id="81CAAA31-9653-4036-B864-8802225990EF_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="OF85C3A1DA.35891577-ON862573B5.0054F4A8-862573B5.0058CBF6_at_exxonmobil.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Torque and OpenMPI 1.2<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-18 12:22:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4713.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<li><strong>Previous message:</strong> <a href="4711.php">Amit Kumar Saha: "Re: [OMPI users] Hi"</a>
<li><strong>In reply to:</strong> <a href="4700.php">pat.o'bryant_at_[hidden]: "[OMPI users] Torque and OpenMPI 1.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4713.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well that's fun.  Is this the library location where Torque put them  
<br>
by default?  What does &quot;pbs-config --libs&quot; return?
<br>
<p>Also -- I second Reuti's question: what is the nature of your  
<br>
requirement such that you need to be able to run outside of the nodes  
<br>
that have been allocated to a job?  Are you running on multiple  
<br>
clusters simultaneously, or something along those lones?
<br>
<p><p>On Dec 18, 2007, at 11:09 AM, pat.o'bryant_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt;     We have Torque as an mpi job scheduler. Additionally,  I have some
</span><br>
<span class="quotelev1">&gt; users that want to modify the contents of &quot;-hostfile&quot; when they  
</span><br>
<span class="quotelev1">&gt; execute
</span><br>
<span class="quotelev1">&gt; &quot;mpirun&quot;.  To allow the modification of the hostfile,  I downloaded  
</span><br>
<span class="quotelev1">&gt; OpenMPI
</span><br>
<span class="quotelev1">&gt; 1.2 and attempted to do a &quot;configure&quot; with the options shown below:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --prefix /opt/openmpi-1.2 --with-openib=/usr/local/ofed
</span><br>
<span class="quotelev1">&gt; --with-tm=/usr/local/pbs CC=icc CXX=icpc F77=ifort FC=ifort
</span><br>
<span class="quotelev1">&gt; --with-threads=posix --enable-mpi-threads
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The configure fails with the following messages:
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; checking tm.h presence... yes
</span><br>
<span class="quotelev1">&gt; checking for tm.h... yes
</span><br>
<span class="quotelev1">&gt; looking for library in lib
</span><br>
<span class="quotelev1">&gt; checking for tm_finalize in -ltorque... no
</span><br>
<span class="quotelev1">&gt; looking for library in lib64
</span><br>
<span class="quotelev1">&gt; checking for tm_finalize in -ltorque... no
</span><br>
<span class="quotelev1">&gt; configure: error: TM support requested but not found.  Aborting
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In looking at the configure script there are typos for &quot;hapy&quot; for  
</span><br>
<span class="quotelev1">&gt; &quot;happy&quot;.
</span><br>
<span class="quotelev1">&gt; Correcting those made no difference. The &quot;config.log&quot; lists an &quot;-L&quot;
</span><br>
<span class="quotelev1">&gt; parameter that isn't the correct path for Torque. Our release of  
</span><br>
<span class="quotelev1">&gt; Torque,
</span><br>
<span class="quotelev1">&gt; 2.2.0, contains libraries under &quot;/usr/local/pbs/x86_64&quot; not
</span><br>
<span class="quotelev1">&gt; &quot;/usr/local/pbs&quot; so the links will fail. I am assuming that the  
</span><br>
<span class="quotelev1">&gt; &quot;configure&quot;
</span><br>
<span class="quotelev1">&gt; script does not figure out the correct path for Torque 2.2.0  
</span><br>
<span class="quotelev1">&gt; libraries.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Config log messages:
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; configure:78250: result: no
</span><br>
<span class="quotelev1">&gt; configure:78274: result: looking for library in lib64
</span><br>
<span class="quotelev1">&gt; configure:78276: checking for tm_finalize in -ltorque
</span><br>
<span class="quotelev1">&gt; configure:78306: icc -o conftest -O3 -DNDEBUG -finline-functions
</span><br>
<span class="quotelev1">&gt; -fno-strict-aliasing -restrict -pthread  -I/usr/local/pbs/include
</span><br>
<span class="quotelev1">&gt; -L/usr/local/pbs/lib64 conftest.c -ltorque  -lnsl -lutil   &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; ld: cannot find -ltorque
</span><br>
<span class="quotelev1">&gt; configure:78312: $? = 1
</span><br>
<span class="quotelev1">&gt; configure: failed program was:
</span><br>
<span class="quotelev1">&gt; | /* confdefs.h.  */
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So is there a &quot;configure&quot; script that works with Torque 2.2 and  
</span><br>
<span class="quotelev1">&gt; OpenMPI 1.2
</span><br>
<span class="quotelev1">&gt; ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; J.W. (Pat) O'Bryant,Jr.
</span><br>
<span class="quotelev1">&gt; Business Line Infrastructure
</span><br>
<span class="quotelev1">&gt; Technical Systems, HPC
</span><br>
<span class="quotelev1">&gt; Office: 713-431-7022
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4713.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<li><strong>Previous message:</strong> <a href="4711.php">Amit Kumar Saha: "Re: [OMPI users] Hi"</a>
<li><strong>In reply to:</strong> <a href="4700.php">pat.o'bryant_at_[hidden]: "[OMPI users] Torque and OpenMPI 1.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4713.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
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
