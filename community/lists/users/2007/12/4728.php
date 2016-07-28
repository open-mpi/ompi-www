<?
$subject_val = "Re: [OMPI users] new to MPI+infiniband";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 19 08:56:15 2007" -->
<!-- isoreceived="20071219135615" -->
<!-- sent="Wed, 19 Dec 2007 08:55:48 -0500" -->
<!-- isosent="20071219135548" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] new to MPI+infiniband" -->
<!-- id="C1F4C1C5-D47F-4A9C-8096-9D4754A5E6DF_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="OF22BFDFFC.AC12A339-ON862573B6.004BDC11-862573B6.004BF3C9_at_exxonmobil.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] new to MPI+infiniband<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-19 08:55:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4729.php">Caird, Andrew J: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<li><strong>Previous message:</strong> <a href="4727.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] new to MPI+infiniband"</a>
<li><strong>In reply to:</strong> <a href="4727.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] new to MPI+infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4742.php">Brian Budge: "Re: [OMPI users] new to MPI+infiniband"</a>
<li><strong>Reply:</strong> <a href="4742.php">Brian Budge: "Re: [OMPI users] new to MPI+infiniband"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In general, you need a functioning IB subsystem on your machines for  
<br>
OMPI to build for and use IB.  This includes both the set of kernel  
<br>
drivers and the userspace libraries.  In particular, Open MPI v1.2  
<br>
uses the &quot;ibverbs&quot; library.  If OMPI can find the ibverbs library and  
<br>
headers during its configure phase, it will build IB support and try  
<br>
to use it at run time.
<br>
<p>You can see if OMPI finds what it needs in the stdout of configure --  
<br>
search for the string &quot;openib&quot; and see where it configures the BTL  
<br>
openib component.  If it ends with a message indicating that it will  
<br>
compile the openib BTL component, then you're good.  If not, you'll  
<br>
see some specific tests that fail that indicate why it won't include  
<br>
that support (e.g., can't find the right header files or somesuch).
<br>
<p><p>On Dec 19, 2007, at 8:49 AM, pat.o'bryant_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Brian,
</span><br>
<span class="quotelev1">&gt;    Here is how I do it:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --prefix /opt/openmpi-1.2.4 --with-openib=/usr/local/ 
</span><br>
<span class="quotelev1">&gt; ofed \
</span><br>
<span class="quotelev1">&gt; --without-tm CC=icc CXX=icpc F77=ifort FC=ifort \
</span><br>
<span class="quotelev1">&gt; --with-threads=posix --enable-mpi-threads
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             &quot;Brian Budge&quot;
</span><br>
<span class="quotelev1">&gt;             &lt;brian.budge_at_g
</span><br>
<span class="quotelev1">&gt;              
</span><br>
<span class="quotelev1">&gt; mail.com&gt;                                                  To
</span><br>
<span class="quotelev1">&gt;             Sent by:                 &quot;Open MPI Users&quot;
</span><br>
<span class="quotelev1">&gt;             users-bounces@           &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;             open- 
</span><br>
<span class="quotelev1">&gt; mpi.org                                               cc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                                                    
</span><br>
<span class="quotelev1">&gt; Subject
</span><br>
<span class="quotelev1">&gt;             12/19/07 12:35           [OMPI users] new to MPI 
</span><br>
<span class="quotelev1">&gt; +infiniband
</span><br>
<span class="quotelev1">&gt;             AM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Please respond
</span><br>
<span class="quotelev1">&gt;                   to
</span><br>
<span class="quotelev1">&gt;             Open MPI Users
</span><br>
<span class="quotelev1">&gt;             &lt;users_at_open-mp
</span><br>
<span class="quotelev1">&gt;                 i.org&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi all -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have been using OpenMPI for quite a while now, and its working out  
</span><br>
<span class="quotelev1">&gt; great.
</span><br>
<span class="quotelev1">&gt; I was looking at the FAQ and trying to figure out how to configure  
</span><br>
<span class="quotelev1">&gt; OpenMPI
</span><br>
<span class="quotelev1">&gt; with infiniband.  It shows how to enable IB pointing to the OFED  
</span><br>
<span class="quotelev1">&gt; directory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have infiniband built into the kernel, along with IP over IB and  
</span><br>
<span class="quotelev1">&gt; with the
</span><br>
<span class="quotelev1">&gt; Mellanox drivers.  What would I still need to install, and how would I
</span><br>
<span class="quotelev1">&gt; configure OpenMPI to work with this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;  Brian_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="4729.php">Caird, Andrew J: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<li><strong>Previous message:</strong> <a href="4727.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] new to MPI+infiniband"</a>
<li><strong>In reply to:</strong> <a href="4727.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] new to MPI+infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4742.php">Brian Budge: "Re: [OMPI users] new to MPI+infiniband"</a>
<li><strong>Reply:</strong> <a href="4742.php">Brian Budge: "Re: [OMPI users] new to MPI+infiniband"</a>
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
