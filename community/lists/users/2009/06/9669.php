<?
$subject_val = "Re: [OMPI users] 50% performance reduction due to OpenMPI v	1.3.2 forcing all MPI	traffic over Ethernet instead of using	Infiniband";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 22 22:56:43 2009" -->
<!-- isoreceived="20090623025643" -->
<!-- sent="Mon, 22 Jun 2009 22:56:38 -0400" -->
<!-- isosent="20090623025638" -->
<!-- name="Don Kerr" -->
<!-- email="Don.Kerr_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 50% performance reduction due to OpenMPI v	1.3.2 forcing all MPI	traffic over Ethernet instead of using	Infiniband" -->
<!-- id="4A404466.8000808_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1245724586.28833.25.camel_at_master.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] 50% performance reduction due to OpenMPI v	1.3.2 forcing all MPI	traffic over Ethernet instead of using	Infiniband<br>
<strong>From:</strong> Don Kerr (<em>Don.Kerr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-22 22:56:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9670.php">Pavel Shamis (Pasha): "Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2 forcing all MPI	traffic over Ethernet instead of using Infiniband"</a>
<li><strong>Previous message:</strong> <a href="9668.php">Jim Kress ORG: "Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2	forcing all MPI	traffic over Ethernet instead of using Infiniband"</a>
<li><strong>In reply to:</strong> <a href="9668.php">Jim Kress ORG: "Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2	forcing all MPI	traffic over Ethernet instead of using Infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9686.php">Jim Kress ORG: "Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2	forcing all MPI	traffic over Ethernet instead of using Infiniband"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 06/22/09 22:36, Jim Kress ORG wrote:
<br>
<span class="quotelev1">&gt; Is there an environment variable (or variables) I can set to do the
</span><br>
<span class="quotelev1">&gt; equivalent?
</span><br>
<span class="quotelev1">&gt;   
</span><br>
OMPI_MCA_mpi_show_mca_params
<br>
<p>see: <a href="http://www.open-mpi.org/faq/?category=tuning#setting-mca-params">http://www.open-mpi.org/faq/?category=tuning#setting-mca-params</a>
<br>
<span class="quotelev1">&gt; Jim
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, 2009-06-22 at 19:40 -0600, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Sounds very strange, indeed. You might want to check that your app is  
</span><br>
<span class="quotelev2">&gt;&gt; actually getting the MCA param that you think it is. Try adding:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -mca mpi_show_mca_params file,env
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; to your cmd line. This will cause rank=0 to output the MCA params it  
</span><br>
<span class="quotelev2">&gt;&gt; thinks were set via the default files and/or environment (including  
</span><br>
<span class="quotelev2">&gt;&gt; cmd line).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 22, 2009, at 6:14 PM, Jim Kress ORG wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For the app I am using, ORCA (a Quantum Chemistry program), when it  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; was
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compiled using openMPI 1.2.8 and run under 1.2.8 with the following in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the openmpi-mca-params.conf file:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl=self,openib
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the app ran fine with no traffic over my Ethernet network and all
</span><br>
<span class="quotelev3">&gt;&gt;&gt; traffic over my Infiniband network.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, now that ORCA has been recompiled with openMPI v1.3.2 and run
</span><br>
<span class="quotelev3">&gt;&gt;&gt; under 1.3.2 (using the same openmpi-mca-params.conf file), the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; performance has been reduced by 50% and all the MPI traffic is going
</span><br>
<span class="quotelev3">&gt;&gt;&gt; over the Ethernet network.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As a matter of fact, the openMPI v1.3.2 performance now looks exactly
</span><br>
<span class="quotelev3">&gt;&gt;&gt; like the performance I get if I use MPICH 1.2.7.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Anyone have any ideas:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1) How could this have happened?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2) How can I fix it?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a 50% reduction in performance is just not acceptable.  Ideas/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; suggestions would be appreciated.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jim
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;     
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9669/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9670.php">Pavel Shamis (Pasha): "Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2 forcing all MPI	traffic over Ethernet instead of using Infiniband"</a>
<li><strong>Previous message:</strong> <a href="9668.php">Jim Kress ORG: "Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2	forcing all MPI	traffic over Ethernet instead of using Infiniband"</a>
<li><strong>In reply to:</strong> <a href="9668.php">Jim Kress ORG: "Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2	forcing all MPI	traffic over Ethernet instead of using Infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9686.php">Jim Kress ORG: "Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2	forcing all MPI	traffic over Ethernet instead of using Infiniband"</a>
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
