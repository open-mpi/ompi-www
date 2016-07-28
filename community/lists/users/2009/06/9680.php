<?
$subject_val = "Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2 forcing all MPI	traffic over Ethernet instead of using Infiniband";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 23 14:35:43 2009" -->
<!-- isoreceived="20090623183543" -->
<!-- sent="Tue, 23 Jun 2009 14:35:35 -0400" -->
<!-- isosent="20090623183535" -->
<!-- name="Jim Kress" -->
<!-- email="jimkress_58_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2 forcing all MPI	traffic over Ethernet instead of using Infiniband" -->
<!-- id="FEE2030FCA0E463C8152D3DD24EE2153_at_inspiron9100" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4A40BB59.6060708_at_dev.mellanox.co.il" -->
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
<strong>Subject:</strong> Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2 forcing all MPI	traffic over Ethernet instead of using Infiniband<br>
<strong>From:</strong> Jim Kress (<em>jimkress_58_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-23 14:35:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9681.php">Ralph Castain: "Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2 forcing all MPI traffic over Ethernet instead of using Infiniband"</a>
<li><strong>Previous message:</strong> <a href="9679.php">Ray Muno: "Re: [OMPI users] OpenMPI and SGE"</a>
<li><strong>In reply to:</strong> <a href="9670.php">Pavel Shamis (Pasha): "Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2 forcing all MPI	traffic over Ethernet instead of using Infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9681.php">Ralph Castain: "Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2 forcing all MPI traffic over Ethernet instead of using Infiniband"</a>
<li><strong>Reply:</strong> <a href="9681.php">Ralph Castain: "Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2 forcing all MPI traffic over Ethernet instead of using Infiniband"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I assume you a referring to the openmpi-mca-params.conf file
<br>
<p>As I indicated previously, my first run was with the line
<br>
<p>btl=self,openib
<br>
<p>As the only entry in the openmpi-mca-params.conf file.  This my default
<br>
setting and was what I used, and it worked well, for v 1.2.8
<br>
<p>Then I tried
<br>
<p>btl=self,openib
<br>
mpi_yield_when_idle=0
<br>
<p>As the only entries in the openmpi-mca-params.conf file.  No difference in
<br>
the results.
<br>
<p>Then I tried
<br>
<p>btl=self,openib
<br>
mpi_yield_when_idle=0
<br>
<p>As the only entries in the openmpi-mca-params.conf file and also set the
<br>
environment variable OMPI_MCA_mpi_leave_pinned=0
<br>
No difference in the results.
<br>
<p>What else can I provide?
<br>
<p>By the way, did you read the message where I retracted my assumption about
<br>
MPI traffic being forced over Ethernet?
<br>
<p>Jim
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Pavel Shamis (Pasha)
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, June 23, 2009 7:24 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] 50% performance reduction due to 
</span><br>
<span class="quotelev1">&gt; OpenMPI v 1.3.2 forcing all MPI traffic over Ethernet instead 
</span><br>
<span class="quotelev1">&gt; of using Infiniband
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jim,
</span><br>
<span class="quotelev1">&gt; Can you please share with us you mca conf file.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Pasha.
</span><br>
<span class="quotelev1">&gt; Jim Kress ORG wrote:
</span><br>
<span class="quotelev2">&gt; &gt; For the app I am using, ORCA (a Quantum Chemistry program), when it 
</span><br>
<span class="quotelev2">&gt; &gt; was compiled using openMPI 1.2.8 and run under 1.2.8 with the 
</span><br>
<span class="quotelev2">&gt; &gt; following in the openmpi-mca-params.conf file:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; btl=self,openib
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; the app ran fine with no traffic over my Ethernet network and all 
</span><br>
<span class="quotelev2">&gt; &gt; traffic over my Infiniband network.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; However, now that ORCA has been recompiled with openMPI 
</span><br>
<span class="quotelev1">&gt; v1.3.2 and run 
</span><br>
<span class="quotelev2">&gt; &gt; under 1.3.2 (using the same openmpi-mca-params.conf file), the 
</span><br>
<span class="quotelev2">&gt; &gt; performance has been reduced by 50% and all the MPI traffic 
</span><br>
<span class="quotelev1">&gt; is going 
</span><br>
<span class="quotelev2">&gt; &gt; over the Ethernet network.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; As a matter of fact, the openMPI v1.3.2 performance now 
</span><br>
<span class="quotelev1">&gt; looks exactly 
</span><br>
<span class="quotelev2">&gt; &gt; like the performance I get if I use MPICH 1.2.7.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Anyone have any ideas:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1) How could this have happened?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2) How can I fix it?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; a 50% reduction in performance is just not acceptable.  Ideas/ 
</span><br>
<span class="quotelev2">&gt; &gt; suggestions would be appreciated.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Jim
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9681.php">Ralph Castain: "Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2 forcing all MPI traffic over Ethernet instead of using Infiniband"</a>
<li><strong>Previous message:</strong> <a href="9679.php">Ray Muno: "Re: [OMPI users] OpenMPI and SGE"</a>
<li><strong>In reply to:</strong> <a href="9670.php">Pavel Shamis (Pasha): "Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2 forcing all MPI	traffic over Ethernet instead of using Infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9681.php">Ralph Castain: "Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2 forcing all MPI traffic over Ethernet instead of using Infiniband"</a>
<li><strong>Reply:</strong> <a href="9681.php">Ralph Castain: "Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2 forcing all MPI traffic over Ethernet instead of using Infiniband"</a>
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
