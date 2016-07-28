<?
$subject_val = "Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2 forcing all MPI	traffic over Ethernet instead of using Infiniband";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 23 15:29:58 2009" -->
<!-- isoreceived="20090623192958" -->
<!-- sent="Tue, 23 Jun 2009 15:29:50 -0400" -->
<!-- isosent="20090623192950" -->
<!-- name="Jim Kress" -->
<!-- email="jimkress_58_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2 forcing all MPI	traffic over Ethernet instead of using Infiniband" -->
<!-- id="3CF59699C0214F23B30C47B75F40E122_at_inspiron9100" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4A411848.4090201_at_ldeo.columbia.edu" -->
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
<strong>Date:</strong> 2009-06-23 15:29:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9683.php">Jim Kress: "Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2forcing all MPI traffic over Ethernet instead of using Infiniband"</a>
<li><strong>Previous message:</strong> <a href="9681.php">Ralph Castain: "Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2 forcing all MPI traffic over Ethernet instead of using Infiniband"</a>
<li><strong>In reply to:</strong> <a href="9678.php">Gus Correa: "Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2 forcing all MPI	traffic over Ethernet instead of using Infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9685.php">Gus Correa: "Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2 forcing all MPI	traffic over Ethernet instead of using Infiniband"</a>
<li><strong>Reply:</strong> <a href="9685.php">Gus Correa: "Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2 forcing all MPI	traffic over Ethernet instead of using Infiniband"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Are you speaking of the configure for the application or for OpenMPI?
<br>
<p>I have no control over the application since it is provided as an executable
<br>
only.
<br>
<p>Jim 
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Gus Correa
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, June 23, 2009 2:01 PM
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
<span class="quotelev1">&gt; Hi Jim, list
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Have you checked if configure caught your IB libraries properly?
</span><br>
<span class="quotelev1">&gt; IIRR there has been some changes since 1.2.8 on how configure 
</span><br>
<span class="quotelev1">&gt; searches for libraries (e.g. finding libnuma was a problem, 
</span><br>
<span class="quotelev1">&gt; now fixed).
</span><br>
<span class="quotelev1">&gt; Chances are that if you used some old script or command line 
</span><br>
<span class="quotelev1">&gt; to run configure, it may not have worked as you expected.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Check the output of ompi_info -config.
</span><br>
<span class="quotelev1">&gt; It should show -lrdmacm -libverbs, otherwise it skipped IB.
</span><br>
<span class="quotelev1">&gt; In this case you can reconfigure, pointing to the IB library location.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you have a log of your configure step you can also search 
</span><br>
<span class="quotelev1">&gt; it for openib, libverbs, etc, to see if it did what you expected.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I hope this helps,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Gustavo Correa
</span><br>
<span class="quotelev1">&gt; Lamont-Doherty Earth Observatory - Columbia University 
</span><br>
<span class="quotelev1">&gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Pavel Shamis (Pasha) wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Jim,
</span><br>
<span class="quotelev2">&gt; &gt; Can you please share with us you mca conf file.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Pasha.
</span><br>
<span class="quotelev2">&gt; &gt; Jim Kress ORG wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; For the app I am using, ORCA (a Quantum Chemistry 
</span><br>
<span class="quotelev1">&gt; program), when it 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; was compiled using openMPI 1.2.8 and run under 1.2.8 with the 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; following in the openmpi-mca-params.conf file:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; btl=self,openib
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the app ran fine with no traffic over my Ethernet network and all 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; traffic over my Infiniband network.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; However, now that ORCA has been recompiled with openMPI v1.3.2 and 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; run under 1.3.2 (using the same openmpi-mca-params.conf file), the 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; performance has been reduced by 50% and all the MPI 
</span><br>
<span class="quotelev1">&gt; traffic is going 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; over the Ethernet network.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; As a matter of fact, the openMPI v1.3.2 performance now 
</span><br>
<span class="quotelev1">&gt; looks exactly 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; like the performance I get if I use MPICH 1.2.7.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Anyone have any ideas:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 1) How could this have happened?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 2) How can I fix it?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; a 50% reduction in performance is just not acceptable.  Ideas/ 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; suggestions would be appreciated.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Jim
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   
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
<li><strong>Next message:</strong> <a href="9683.php">Jim Kress: "Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2forcing all MPI traffic over Ethernet instead of using Infiniband"</a>
<li><strong>Previous message:</strong> <a href="9681.php">Ralph Castain: "Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2 forcing all MPI traffic over Ethernet instead of using Infiniband"</a>
<li><strong>In reply to:</strong> <a href="9678.php">Gus Correa: "Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2 forcing all MPI	traffic over Ethernet instead of using Infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9685.php">Gus Correa: "Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2 forcing all MPI	traffic over Ethernet instead of using Infiniband"</a>
<li><strong>Reply:</strong> <a href="9685.php">Gus Correa: "Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2 forcing all MPI	traffic over Ethernet instead of using Infiniband"</a>
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
