<?
$subject_val = "Re: [OMPI users] processes aborting on MPI_Finalize";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 29 15:29:21 2008" -->
<!-- isoreceived="20080229202921" -->
<!-- sent="Fri, 29 Feb 2008 15:28:51 -0500" -->
<!-- isosent="20080229202851" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] processes aborting on MPI_Finalize" -->
<!-- id="1659859F-0CA5-4199-84FA-DDE815ABA66C_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="8BF06A36E7AD424197195998D9A0B8E10122F262_at_FBRMLBR01.Enterprise.afmc.ds.af.mil" -->
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
<strong>Subject:</strong> Re: [OMPI users] processes aborting on MPI_Finalize<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-29 15:28:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5107.php">Jeff Squyres: "Re: [OMPI users] Error compiling open-mpi"</a>
<li><strong>Previous message:</strong> <a href="5105.php">Gleb Natapov: "Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with	MPI_Reduce and MPI_Gather"</a>
<li><strong>In reply to:</strong> <a href="5050.php">Adams, Samuel D AFRL/RHDR: "Re: [OMPI users] processes aborting on MPI_Finalize"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for the delay in replying.
<br>
<p>It's hard to say where the error is.  I *hope* it's not in the release  
<br>
version of OMPI.  :)
<br>
<p>Have you run through a memory checking debugger such as valgrind?   
<br>
Seeing errors in free() like this are *usually* some kind of heap  
<br>
violation (e.g., a bad or multiple free, or a buffer overflow, or  
<br>
somesuch).
<br>
<p><p>On Feb 20, 2008, at 11:48 AM, Adams, Samuel D AFRL/RHDR wrote:
<br>
<p><span class="quotelev1">&gt; I noticed that I was spitting this out on stderr:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is this an OpenMPI problem?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [prodnode31:26364] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [prodnode31:26364] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [prodnode31:26364] Signal code:  (128)
</span><br>
<span class="quotelev1">&gt; [prodnode31:26364] Failing at address: (nil)
</span><br>
<span class="quotelev1">&gt; [prodnode31:26364] [ 0] /lib64/libpthread.so.0 [0x35cea0dd40]
</span><br>
<span class="quotelev1">&gt; [prodnode31:26364] [ 1]
</span><br>
<span class="quotelev1">&gt; /usr/local/profiles/gcc-openmpi/lib/libopen-pal.so.0(_int_free+0x18e)
</span><br>
<span class="quotelev1">&gt; [0x2aaaaafcb99e]
</span><br>
<span class="quotelev1">&gt; [prodnode31:26364] [ 2]
</span><br>
<span class="quotelev1">&gt; /usr/local/profiles/gcc-openmpi/lib/libopen-pal.so.0(free+0xbd)
</span><br>
<span class="quotelev1">&gt; [0x2aaaaafcbd9d]
</span><br>
<span class="quotelev1">&gt; [prodnode31:26364] [ 3] /usr/local/profiles/gcc-openmpi/lib/ 
</span><br>
<span class="quotelev1">&gt; libmpi.so.0
</span><br>
<span class="quotelev1">&gt; [0x2aaaaaad4589]
</span><br>
<span class="quotelev1">&gt; [prodnode31:26364] [ 4]
</span><br>
<span class="quotelev1">&gt; /usr/local/profiles/gcc-openmpi/lib/openmpi/ 
</span><br>
<span class="quotelev1">&gt; mca_btl_tcp.so(mca_btl_tcp_c
</span><br>
<span class="quotelev1">&gt; omponent_close+0x109) [0x2aaab0e341e9]
</span><br>
<span class="quotelev1">&gt; [prodnode31:26364] [ 5]
</span><br>
<span class="quotelev1">&gt; /usr/local/profiles/gcc-openmpi/lib/libopen-pal.so. 
</span><br>
<span class="quotelev1">&gt; 0(mca_base_components
</span><br>
<span class="quotelev1">&gt; _close+0x83) [0x2aaaaafbbe53]
</span><br>
<span class="quotelev1">&gt; [prodnode31:26364] [ 6]
</span><br>
<span class="quotelev1">&gt; /usr/local/profiles/gcc-openmpi/lib/libmpi.so.0(mca_btl_base_close 
</span><br>
<span class="quotelev1">&gt; +0xb3)
</span><br>
<span class="quotelev1">&gt; [0x2aaaaab1da13]
</span><br>
<span class="quotelev1">&gt; [prodnode31:26364] [ 7]
</span><br>
<span class="quotelev1">&gt; /usr/local/profiles/gcc-openmpi/lib/openmpi/ 
</span><br>
<span class="quotelev1">&gt; mca_pml_ob1.so(mca_pml_ob1_c
</span><br>
<span class="quotelev1">&gt; omponent_close+0x35) [0x2aaab060fd55]
</span><br>
<span class="quotelev1">&gt; [prodnode31:26364] [ 8]
</span><br>
<span class="quotelev1">&gt; /usr/local/profiles/gcc-openmpi/lib/libopen-pal.so. 
</span><br>
<span class="quotelev1">&gt; 0(mca_base_components
</span><br>
<span class="quotelev1">&gt; _close+0x83) [0x2aaaaafbbe53]
</span><br>
<span class="quotelev1">&gt; [prodnode31:26364] [ 9]
</span><br>
<span class="quotelev1">&gt; /usr/local/profiles/gcc-openmpi/lib/libmpi.so.0(mca_pml_base_close 
</span><br>
<span class="quotelev1">&gt; +0x48)
</span><br>
<span class="quotelev1">&gt; [0x2aaaaab23818]
</span><br>
<span class="quotelev1">&gt; [prodnode31:26364] [10]
</span><br>
<span class="quotelev1">&gt; /usr/local/profiles/gcc-openmpi/lib/libmpi.so.0(ompi_mpi_finalize 
</span><br>
<span class="quotelev1">&gt; +0x1a2)
</span><br>
<span class="quotelev1">&gt; [0x2aaaaaaeda02]
</span><br>
<span class="quotelev1">&gt; [prodnode31:26364] [11] /home/sam/code/fdtd/fdtd_0.4/fdtd(main+0x1b2)
</span><br>
<span class="quotelev1">&gt; [0x4054f2]
</span><br>
<span class="quotelev1">&gt; [prodnode31:26364] [12] /lib64/libc.so.6(__libc_start_main+0xf4)
</span><br>
<span class="quotelev1">&gt; [0x35ce21d8a4]
</span><br>
<span class="quotelev1">&gt; [prodnode31:26364] [13] /home/sam/code/fdtd/fdtd_0.4/fdtd [0x4035e9]
</span><br>
<span class="quotelev1">&gt; [prodnode31:26364] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; mpirun noticed that job rank 0 with PID 26364 on node
</span><br>
<span class="quotelev1">&gt; prodnode31.brooks.af.mil exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sam Adams
</span><br>
<span class="quotelev1">&gt; General Dynamics Information Technology
</span><br>
<span class="quotelev1">&gt; Phone: 210.536.5945
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]  
</span><br>
<span class="quotelev1">&gt; On
</span><br>
<span class="quotelev1">&gt; Behalf Of Adams, Samuel D AFRL/RHDR
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, February 19, 2008 3:02 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] processes aborting on MPI_Finalize
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is probably some coding error on my part, but under some problem
</span><br>
<span class="quotelev1">&gt; divisions I get processes aborting when I call MPI_Finalize().   
</span><br>
<span class="quotelev1">&gt; Perhaps
</span><br>
<span class="quotelev1">&gt; they are still waiting incorrectly to recived some message or  
</span><br>
<span class="quotelev1">&gt; something
</span><br>
<span class="quotelev1">&gt; like that.  Sometimes it seems to work.  Is there a good way to get to
</span><br>
<span class="quotelev1">&gt; the bottom of this error?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----output-----
</span><br>
<span class="quotelev1">&gt; 4 additional processes aborted (not shown)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sam Adams
</span><br>
<span class="quotelev1">&gt; General Dynamics Information Technology
</span><br>
<span class="quotelev1">&gt; Phone: 210.536.5945
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="5107.php">Jeff Squyres: "Re: [OMPI users] Error compiling open-mpi"</a>
<li><strong>Previous message:</strong> <a href="5105.php">Gleb Natapov: "Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with	MPI_Reduce and MPI_Gather"</a>
<li><strong>In reply to:</strong> <a href="5050.php">Adams, Samuel D AFRL/RHDR: "Re: [OMPI users] processes aborting on MPI_Finalize"</a>
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
