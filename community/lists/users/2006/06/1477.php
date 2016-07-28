<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun 28 08:23:05 2006" -->
<!-- isoreceived="20060628122305" -->
<!-- sent="Wed, 28 Jun 2006 08:22:53 -0400" -->
<!-- isosent="20060628122253" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fw: OpenMPI version 1.1" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AFAE95D2_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] Fw: OpenMPI version 1.1" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-28 08:22:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1478.php">openmpi-user: "Re: [OMPI users] OpenMPI 1.1: Signal:10 info.si_errno:0(Unknown, error:	0), si_code:1(BUS_ADRALN) (Terry D. Dontje)"</a>
<li><strong>Previous message:</strong> <a href="1476.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] rsh/ssh is work but mpirun hang ?"</a>
<li><strong>Maybe in reply to:</strong> <a href="1460.php">Swamy Kandadai: "[OMPI users] Fw: OpenMPI version 1.1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
A common problem that I have seen is that all nodes in the cluster may
<br>
not be configured identically.  For example, can you confirm that eth1
<br>
is your gigE interface on all nodes?  It might have accidentally been
<br>
configured to be your IPoIB interface on some nodes. 
<br>
<p>If that's not the case, let us know and we'll track this down further.
<br>
<p>Thanks!
<br>
<p><p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Swamy Kandadai
</span><br>
<span class="quotelev1">&gt; Sent: Friday, June 23, 2006 10:22 PM
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] Fw: OpenMPI version 1.1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dr. Swamy N. Kandadai
</span><br>
<span class="quotelev1">&gt; Certified Sr. Consulting IT Specialist
</span><br>
<span class="quotelev1">&gt; HPC Benchmark Center
</span><br>
<span class="quotelev1">&gt; System &amp; Technology Group, Poughkeepsie, NY
</span><br>
<span class="quotelev1">&gt; Phone:( 845) 433 -8429 (8-293) Fax:(845)432-9789
</span><br>
<span class="quotelev1">&gt; swamy_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://w3.ibm.com/sales/systems/benchmarks">http://w3.ibm.com/sales/systems/benchmarks</a>
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
<span class="quotelev1">&gt; ----- Forwarded by Swamy Kandadai/Poughkeepsie/IBM on 
</span><br>
<span class="quotelev1">&gt; 06/23/2006 10:21 PM
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;                                                               
</span><br>
<span class="quotelev1">&gt;              
</span><br>
<span class="quotelev1">&gt;              Swamy                                            
</span><br>
<span class="quotelev1">&gt;              
</span><br>
<span class="quotelev1">&gt;              Kandadai/Poughkee                                
</span><br>
<span class="quotelev1">&gt;              
</span><br>
<span class="quotelev1">&gt;              psie/IBM                                         
</span><br>
<span class="quotelev1">&gt;           To 
</span><br>
<span class="quotelev1">&gt;                                        users_at_[hidden]     
</span><br>
<span class="quotelev1">&gt;              
</span><br>
<span class="quotelev1">&gt;              06/23/2006 09:52                                 
</span><br>
<span class="quotelev1">&gt;           cc 
</span><br>
<span class="quotelev1">&gt;              PM                                               
</span><br>
<span class="quotelev1">&gt;              
</span><br>
<span class="quotelev1">&gt;                                                               
</span><br>
<span class="quotelev1">&gt;      Subject 
</span><br>
<span class="quotelev1">&gt;                                        OpenMPI version 1.1    
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
<span class="quotelev1">&gt; Hi:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am trying to run OpenMPI on a couple of nodes. These nodes 
</span><br>
<span class="quotelev1">&gt; have several
</span><br>
<span class="quotelev1">&gt; interfaces: eth0 (which is a GigE),
</span><br>
<span class="quotelev1">&gt; eth1 (which is a GigE with Jumbo frames enabled), IpoIB, myr0 
</span><br>
<span class="quotelev1">&gt; in addition
</span><br>
<span class="quotelev1">&gt; to loopback (l0).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I want to use exclusively eth1 and I am running with this option:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun --mca btl_tcp_if_include eth1 -machinefile hf -np 2 IMB-MPI1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; where IMB-MPI1 is the Intel message passing benchmark.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Different times, it has different behaviors:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I ran on one set of nodes and I got a typical GigE behavior 
</span><br>
<span class="quotelev1">&gt; (around 100
</span><br>
<span class="quotelev1">&gt; MB/s). On a different pairs of nodes
</span><br>
<span class="quotelev1">&gt; it is giving me the BW consistent with IpoIB (around 700 MB/s).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can u help me what I am doing wrong? How can I force it to 
</span><br>
<span class="quotelev1">&gt; use eth1 on all
</span><br>
<span class="quotelev1">&gt; nodes?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I just built OpenMPI with the following option:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=$BINDIR  --disable-io-romio
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Swamy
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dr. Swamy N. Kandadai
</span><br>
<span class="quotelev1">&gt; Certified Sr. Consulting IT Specialist
</span><br>
<span class="quotelev1">&gt; HPC Benchmark Center
</span><br>
<span class="quotelev1">&gt; System &amp; Technology Group, Poughkeepsie, NY
</span><br>
<span class="quotelev1">&gt; Phone:( 845) 433 -8429 (8-293) Fax:(845)432-9789
</span><br>
<span class="quotelev1">&gt; swamy_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://w3.ibm.com/sales/systems/benchmarks">http://w3.ibm.com/sales/systems/benchmarks</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1478.php">openmpi-user: "Re: [OMPI users] OpenMPI 1.1: Signal:10 info.si_errno:0(Unknown, error:	0), si_code:1(BUS_ADRALN) (Terry D. Dontje)"</a>
<li><strong>Previous message:</strong> <a href="1476.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] rsh/ssh is work but mpirun hang ?"</a>
<li><strong>Maybe in reply to:</strong> <a href="1460.php">Swamy Kandadai: "[OMPI users] Fw: OpenMPI version 1.1"</a>
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
