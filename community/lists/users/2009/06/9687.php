<?
$subject_val = "Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2	forcing all MPI	traffic over Ethernet instead of using Infiniband";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 23 17:21:14 2009" -->
<!-- isoreceived="20090623212114" -->
<!-- sent="Tue, 23 Jun 2009 15:20:58 -0600" -->
<!-- isosent="20090623212058" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2	forcing all MPI	traffic over Ethernet instead of using Infiniband" -->
<!-- id="B8F72FFC-1A51-459C-817C-2DA1A0875020_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1245789082.5089.5.camel_at_master.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2	forcing all MPI	traffic over Ethernet instead of using Infiniband<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-23 17:20:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9688.php">Jim Kress ORG: "Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2	forcing all MPI	traffic over Ethernet instead of using Infiniband"</a>
<li><strong>Previous message:</strong> <a href="9686.php">Jim Kress ORG: "Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2	forcing all MPI	traffic over Ethernet instead of using Infiniband"</a>
<li><strong>In reply to:</strong> <a href="9686.php">Jim Kress ORG: "Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2	forcing all MPI	traffic over Ethernet instead of using Infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9689.php">Jim Kress ORG: "Re: [OMPI users] 50% performance reduction due to OpenMPI v	1.3.2	forcing all MPI	traffic over Ethernet instead of using Infiniband"</a>
<li><strong>Reply:</strong> <a href="9689.php">Jim Kress ORG: "Re: [OMPI users] 50% performance reduction due to OpenMPI v	1.3.2	forcing all MPI	traffic over Ethernet instead of using Infiniband"</a>
<li><strong>Reply:</strong> <a href="9691.php">Jim Kress ORG: "Re: [OMPI users] 50% performance reduction due to OpenMPI v	1.3.2	forcing all MPI	traffic over Ethernet instead of using Infiniband"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm...just to be clear - did you run this against OMPI 1.3.2, or  
<br>
1.2.8? I see a 1.2.8 in your app name, hence the question.
<br>
<p>This option only works with 1.3.2, I'm afraid - it was a new feature.
<br>
<p>Ralph
<br>
<p>On Jun 23, 2009, at 2:31 PM, Jim Kress ORG wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I did the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; export OMPI_MCA_mpi_show_mca_params=&quot;file,env&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; then I checked and found it via the set command as
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_mpi_show_mca_params=file,env
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I then ran my application
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./orca hexatriene_TDDFT_get_asa_input_parallel_1.inp &gt;
</span><br>
<span class="quotelev1">&gt; 1.2.8_test_crafted_input_file.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and got the expected ORCA output in the .out file but nothing at the
</span><br>
<span class="quotelev1">&gt; command line or in the .out file about mca_params
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What did I do wrong?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jim
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, 2009-06-22 at 19:40 -0600, Ralph Castain wrote:
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
<span class="quotelev3">&gt;&gt;&gt; For the app I am using, ORCA (a Quantum Chemistry program), when it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; was
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compiled using openMPI 1.2.8 and run under 1.2.8 with the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; following in
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
<span class="quotelev3">&gt;&gt;&gt; However, now that ORCA has been recompiled with openMPI v1.3.2 and  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; run
</span><br>
<span class="quotelev3">&gt;&gt;&gt; under 1.3.2 (using the same openmpi-mca-params.conf file), the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; performance has been reduced by 50% and all the MPI traffic is going
</span><br>
<span class="quotelev3">&gt;&gt;&gt; over the Ethernet network.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As a matter of fact, the openMPI v1.3.2 performance now looks  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; exactly
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="9688.php">Jim Kress ORG: "Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2	forcing all MPI	traffic over Ethernet instead of using Infiniband"</a>
<li><strong>Previous message:</strong> <a href="9686.php">Jim Kress ORG: "Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2	forcing all MPI	traffic over Ethernet instead of using Infiniband"</a>
<li><strong>In reply to:</strong> <a href="9686.php">Jim Kress ORG: "Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2	forcing all MPI	traffic over Ethernet instead of using Infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9689.php">Jim Kress ORG: "Re: [OMPI users] 50% performance reduction due to OpenMPI v	1.3.2	forcing all MPI	traffic over Ethernet instead of using Infiniband"</a>
<li><strong>Reply:</strong> <a href="9689.php">Jim Kress ORG: "Re: [OMPI users] 50% performance reduction due to OpenMPI v	1.3.2	forcing all MPI	traffic over Ethernet instead of using Infiniband"</a>
<li><strong>Reply:</strong> <a href="9691.php">Jim Kress ORG: "Re: [OMPI users] 50% performance reduction due to OpenMPI v	1.3.2	forcing all MPI	traffic over Ethernet instead of using Infiniband"</a>
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
