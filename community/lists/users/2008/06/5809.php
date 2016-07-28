<?
$subject_val = "Re: [OMPI users] OpenIB problem: error polling HP CQ...";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  4 14:27:45 2008" -->
<!-- isoreceived="20080604182745" -->
<!-- sent="Wed, 4 Jun 2008 14:27:28 -0400" -->
<!-- isosent="20080604182728" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenIB problem: error polling HP CQ..." -->
<!-- id="1B3C2EFA-E2BE-44FC-9596-50BE583BD4C8_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="d105ee120805290050j63a8efe6h4f454bd0087b08a0_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenIB problem: error polling HP CQ...<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-04 14:27:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5810.php">Jeff Squyres: "Re: [OMPI users] Problem with X forwarding"</a>
<li><strong>Previous message:</strong> <a href="5808.php">Brock Palen: "Re: [OMPI users] Open MPI instructional videos"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/05/5746.php">Matt Hughes: "[OMPI users] OpenIB problem: error polling HP CQ..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5835.php">Matt Hughes: "Re: [OMPI users] OpenIB problem: error polling HP CQ..."</a>
<li><strong>Reply:</strong> <a href="5835.php">Matt Hughes: "Re: [OMPI users] OpenIB problem: error polling HP CQ..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We have made a *lot* of changes to the run-time support for spawn and  
<br>
some changes to the FLUSH support in the openib BTL for the upcoming  
<br>
v1.3 series.
<br>
<p>Would it be possible for you to try a trunk nightly tarball snapshot,  
<br>
perchance?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/nightly/trunk/">http://www.open-mpi.org/nightly/trunk/</a>
<br>
<p><p>On May 29, 2008, at 3:50 AM, Matt Hughes wrote:
<br>
<p><span class="quotelev1">&gt; I have a program which uses MPI::Comm::Spawn to start processes on
</span><br>
<span class="quotelev1">&gt; compute nodes (c0-0, c0-1, etc).  The communication between the
</span><br>
<span class="quotelev1">&gt; compute nodes consists of ISend and IRecv pairs, while communication
</span><br>
<span class="quotelev1">&gt; between the compute nodes consists of gather and bcast operations.
</span><br>
<span class="quotelev1">&gt; After executing ~80 successful loops (gather/bcast pairs), I get this
</span><br>
<span class="quotelev1">&gt; error message from the head node process during a gather call:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [0,1,0][btl_openib_component.c:1332:btl_openib_component_progress]
</span><br>
<span class="quotelev1">&gt; from headnode.local to: c0-0 error polling HP CQ with status WORK
</span><br>
<span class="quotelev1">&gt; REQUEST FLUSHED ERROR status number 5 for wr_id 18504944 opcode 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The relevant environment variables:
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_btl_openib_rd_num=128
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_btl_openib_verbose=1
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_btl_base_verbose=1
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_btl_openib_rd_low=75
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_btl_base_debug=1
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_btl_openib_warn_no_hca_params_found=0
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_btl_openib_warn_default_gid_prefix=0
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_btl=self,openib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If rd_low and rd_num are left at their default values, the program
</span><br>
<span class="quotelev1">&gt; simply hangs in the gather call after about 20 iterations (a gather
</span><br>
<span class="quotelev1">&gt; and a bcast).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can anyone shed any light on what this error message means or what
</span><br>
<span class="quotelev1">&gt; might be done about it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; mch
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
<li><strong>Next message:</strong> <a href="5810.php">Jeff Squyres: "Re: [OMPI users] Problem with X forwarding"</a>
<li><strong>Previous message:</strong> <a href="5808.php">Brock Palen: "Re: [OMPI users] Open MPI instructional videos"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/05/5746.php">Matt Hughes: "[OMPI users] OpenIB problem: error polling HP CQ..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5835.php">Matt Hughes: "Re: [OMPI users] OpenIB problem: error polling HP CQ..."</a>
<li><strong>Reply:</strong> <a href="5835.php">Matt Hughes: "Re: [OMPI users] OpenIB problem: error polling HP CQ..."</a>
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
