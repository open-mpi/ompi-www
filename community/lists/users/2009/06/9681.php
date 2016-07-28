<?
$subject_val = "Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2 forcing all MPI traffic over Ethernet instead of using Infiniband";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 23 14:43:03 2009" -->
<!-- isoreceived="20090623184303" -->
<!-- sent="Tue, 23 Jun 2009 12:42:57 -0600" -->
<!-- isosent="20090623184257" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2 forcing all MPI traffic over Ethernet instead of using Infiniband" -->
<!-- id="71d2d8cc0906231142n2ec0371cm240cf8db068326b2_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="FEE2030FCA0E463C8152D3DD24EE2153_at_inspiron9100" -->
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
<strong>Subject:</strong> Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2 forcing all MPI traffic over Ethernet instead of using Infiniband<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-23 14:42:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9682.php">Jim Kress: "Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2 forcing all MPI	traffic over Ethernet instead of using Infiniband"</a>
<li><strong>Previous message:</strong> <a href="9680.php">Jim Kress: "Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2 forcing all MPI	traffic over Ethernet instead of using Infiniband"</a>
<li><strong>In reply to:</strong> <a href="9680.php">Jim Kress: "Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2 forcing all MPI	traffic over Ethernet instead of using Infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9683.php">Jim Kress: "Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2forcing all MPI traffic over Ethernet instead of using Infiniband"</a>
<li><strong>Reply:</strong> <a href="9683.php">Jim Kress: "Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2forcing all MPI traffic over Ethernet instead of using Infiniband"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Assuming you aren't oversubscribing your nodes, set mpi_paffinity_alone=1.
<br>
<p>BTW: did you set that mpi_show_mca_params option to ensure the app is
<br>
actually seeing these params?
<br>
<p><p>On Tue, Jun 23, 2009 at 12:35 PM, Jim Kress &lt;jimkress_58_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; I assume you a referring to the openmpi-mca-params.conf file
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As I indicated previously, my first run was with the line
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; btl=self,openib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As the only entry in the openmpi-mca-params.conf file.  This my default
</span><br>
<span class="quotelev1">&gt; setting and was what I used, and it worked well, for v 1.2.8
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then I tried
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; btl=self,openib
</span><br>
<span class="quotelev1">&gt; mpi_yield_when_idle=0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As the only entries in the openmpi-mca-params.conf file.  No difference in
</span><br>
<span class="quotelev1">&gt; the results.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then I tried
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; btl=self,openib
</span><br>
<span class="quotelev1">&gt; mpi_yield_when_idle=0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As the only entries in the openmpi-mca-params.conf file and also set the
</span><br>
<span class="quotelev1">&gt; environment variable OMPI_MCA_mpi_leave_pinned=0
</span><br>
<span class="quotelev1">&gt; No difference in the results.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What else can I provide?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; By the way, did you read the message where I retracted my assumption about
</span><br>
<span class="quotelev1">&gt; MPI traffic being forced over Ethernet?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jim
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt; &gt; From: users-bounces_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Pavel Shamis (Pasha)
</span><br>
<span class="quotelev2">&gt; &gt; Sent: Tuesday, June 23, 2009 7:24 AM
</span><br>
<span class="quotelev2">&gt; &gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] 50% performance reduction due to
</span><br>
<span class="quotelev2">&gt; &gt; OpenMPI v 1.3.2 forcing all MPI traffic over Ethernet instead
</span><br>
<span class="quotelev2">&gt; &gt; of using Infiniband
</span><br>
<span class="quotelev2">&gt; &gt;
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
<span class="quotelev3">&gt; &gt; &gt; For the app I am using, ORCA (a Quantum Chemistry program), when it
</span><br>
<span class="quotelev3">&gt; &gt; &gt; was compiled using openMPI 1.2.8 and run under 1.2.8 with the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; following in the openmpi-mca-params.conf file:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; btl=self,openib
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; the app ran fine with no traffic over my Ethernet network and all
</span><br>
<span class="quotelev3">&gt; &gt; &gt; traffic over my Infiniband network.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; However, now that ORCA has been recompiled with openMPI
</span><br>
<span class="quotelev2">&gt; &gt; v1.3.2 and run
</span><br>
<span class="quotelev3">&gt; &gt; &gt; under 1.3.2 (using the same openmpi-mca-params.conf file), the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; performance has been reduced by 50% and all the MPI traffic
</span><br>
<span class="quotelev2">&gt; &gt; is going
</span><br>
<span class="quotelev3">&gt; &gt; &gt; over the Ethernet network.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; As a matter of fact, the openMPI v1.3.2 performance now
</span><br>
<span class="quotelev2">&gt; &gt; looks exactly
</span><br>
<span class="quotelev3">&gt; &gt; &gt; like the performance I get if I use MPICH 1.2.7.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Anyone have any ideas:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 1) How could this have happened?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 2) How can I fix it?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; a 50% reduction in performance is just not acceptable.  Ideas/
</span><br>
<span class="quotelev3">&gt; &gt; &gt; suggestions would be appreciated.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Jim
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9681/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9682.php">Jim Kress: "Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2 forcing all MPI	traffic over Ethernet instead of using Infiniband"</a>
<li><strong>Previous message:</strong> <a href="9680.php">Jim Kress: "Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2 forcing all MPI	traffic over Ethernet instead of using Infiniband"</a>
<li><strong>In reply to:</strong> <a href="9680.php">Jim Kress: "Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2 forcing all MPI	traffic over Ethernet instead of using Infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9683.php">Jim Kress: "Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2forcing all MPI traffic over Ethernet instead of using Infiniband"</a>
<li><strong>Reply:</strong> <a href="9683.php">Jim Kress: "Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2forcing all MPI traffic over Ethernet instead of using Infiniband"</a>
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
