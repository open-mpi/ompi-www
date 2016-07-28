<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Nov 22 00:10:25 2006" -->
<!-- isoreceived="20061122051025" -->
<!-- sent="Wed, 22 Nov 2006 00:09:07 -0500" -->
<!-- isosent="20061122050907" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MX performance problem on two processor nodes" -->
<!-- id="B70ADFF6-4025-4D3C-96C0-E2BA3956DF5D_at_umich.edu" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="B8983A9DF4CA054D8F9FFC97903B449441DD28_at_NDJSEVS13.ndc.nasa.gov" -->
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
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-22 00:09:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2212.php">Epitropakis Mixalis 00064: "Re: [OMPI users] Advice for a cluster software"</a>
<li><strong>Previous message:</strong> <a href="2210.php">Iannetti, Anthony C. \(GRC-RTB0\): "[OMPI users] 1.2b1 make failed on Mac 10.4"</a>
<li><strong>In reply to:</strong> <a href="2209.php">Iannetti, Anthony C. \(GRC-RTB0\): "Re: [OMPI users] MX performance problem on two processor nodes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Feel free to correct me if im wrong.
<br>
<p>OMPI assumes you have a fast network and checks for them.  If they  
<br>
are not found it falls back to tcp.
<br>
<p>So if you leave out the --mca etc etc....   It should use the mx if  
<br>
its available.  Im not sure how MX responds  if one of the hosts does  
<br>
not have a working card (not activated)  because the mpi job will  
<br>
still run.  Just not using MX to that host.  All other hosts will us MX.
<br>
<p>If openmpi sees that a node has more than one cpu (SMP)  It will use  
<br>
the sm (shared mem)  method to communicate over the mx.  and if a  
<br>
proc sends to its self,  the self method is used.  So its like a  
<br>
priority order.
<br>
<p>I know there is a way (its in the archives)  to see the priority on  
<br>
how OMPI choses what method to use.  and uses the highest priority  
<br>
that will allow the communication to complete.
<br>
<p>I know there is also some magic being working on/implemented.  That  
<br>
will stripe over multiple networks for large messages when more  
<br>
bandwidth is needed.  I dont know if OMPI will have this ability or  
<br>
not.  Someone else can chime in on that.
<br>
<p>Brock Palen
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p>On Nov 21, 2006, at 11:28 PM, Iannetti, Anthony C. ((GRC-RTB0)) wrote:
<br>
<p><span class="quotelev1">&gt; Dear OpenMPI List:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From looking at a recent thread, I see an mpirun command with  
</span><br>
<span class="quotelev1">&gt; shared memory and mx:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun &#150;mca btl mx,sm,self &#150;np 2 pi3f90.x
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This works.  I may have forgot to mention it, but I am using  
</span><br>
<span class="quotelev1">&gt; 1.1.2.  I see there is an &#150;mca mtl in version 1.2b1 .  I do not  
</span><br>
<span class="quotelev1">&gt; think this exists in 1.1.2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Still, I would like to know what &#150;mca is given automatically.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tony
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
<span class="quotelev1">&gt; Anthony C. Iannetti, P.E.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; NASA Glenn Research Center
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Propulsion Systems Division, Combustion Branch
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 21000 Brookpark Road, MS 5-10
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cleveland, OH 44135
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; phone: (216)433-5586
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; email: Anthony.C.Iannetti_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please note:  All opinions expressed in this message are my own and  
</span><br>
<span class="quotelev1">&gt; NOT of NASA.  Only the NASA Administrator can speak on behalf of NASA.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From: Iannetti, Anthony C. (GRC-RTB0)
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, November 21, 2006 8:39 PM
</span><br>
<span class="quotelev1">&gt; To: 'users_at_[hidden]'
</span><br>
<span class="quotelev1">&gt; Subject: MX performance problem on two processor nodes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dear OpenMPI List:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             I am running the Myrinet MX btl with OpenMPI on MacOSX  
</span><br>
<span class="quotelev1">&gt; 10.4.  I am running into a problem.  When I run on one processor  
</span><br>
<span class="quotelev1">&gt; per node, OpenMPI runs just fine.   When I run on two processors  
</span><br>
<span class="quotelev1">&gt; per node (slots=2), it seems to take forever (something is hanging).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is the command:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun &#150;mca btl mx,self &#150;np 2 pi3f90.x
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, if I give the command:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun &#150;np 2 pi3f90.x
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The process runs normally. But, I do not know if it is using the  
</span><br>
<span class="quotelev1">&gt; Myrinet network.  Is there a way to diagnose this problem.  mpirun &#150; 
</span><br>
<span class="quotelev1">&gt; v and &#150;d do not seem to indicate which mca is actually being used.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tony
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anthony C. Iannetti, P.E.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; NASA Glenn Research Center
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Propulsion Systems Division, Combustion Branch
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 21000 Brookpark Road, MS 5-10
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cleveland, OH 44135
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; phone: (216)433-5586
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; email: Anthony.C.Iannetti_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please note:  All opinions expressed in this message are my own and  
</span><br>
<span class="quotelev1">&gt; NOT of NASA.  Only the NASA Administrator can speak on behalf of NASA.
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2211/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2212.php">Epitropakis Mixalis 00064: "Re: [OMPI users] Advice for a cluster software"</a>
<li><strong>Previous message:</strong> <a href="2210.php">Iannetti, Anthony C. \(GRC-RTB0\): "[OMPI users] 1.2b1 make failed on Mac 10.4"</a>
<li><strong>In reply to:</strong> <a href="2209.php">Iannetti, Anthony C. \(GRC-RTB0\): "Re: [OMPI users] MX performance problem on two processor nodes"</a>
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
