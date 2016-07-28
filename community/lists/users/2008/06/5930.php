<?
$subject_val = "Re: [OMPI users] Error in mx_init message";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 18 12:19:28 2008" -->
<!-- isoreceived="20080618161928" -->
<!-- sent="Wed, 18 Jun 2008 17:19:10 +0100" -->
<!-- isosent="20080618161910" -->
<!-- name="SLIM H.A." -->
<!-- email="h.a.slim_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error in mx_init message" -->
<!-- id="BDDB7C5009659447B2F1747B53854FE801BDF611_at_EXDUR1.mds.ad.dur.ac.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="787FD4F1-0B21-42DC-B3EE-5FA874388777_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error in mx_init message<br>
<strong>From:</strong> SLIM H.A. (<em>h.a.slim_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-18 12:19:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5931.php">SLIM H.A.: "Re: [OMPI users] Error in mx_init message"</a>
<li><strong>Previous message:</strong> <a href="5929.php">Peter Diamessis: "[OMPI users] Open MPI timeout problems."</a>
<li><strong>In reply to:</strong> <a href="5928.php">George Bosilca: "Re: [OMPI users] Error in mx_init message"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5931.php">SLIM H.A.: "Re: [OMPI users] Error in mx_init message"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of George Bosilca
</span><br>
<span class="quotelev1">&gt; Sent: 18 June 2008 15:27
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Error in mx_init message
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is a different issue. On top of Myrinet, Open MPI support two
</span><br>
<span class="quotelev1">&gt; nodes: cm and the others. Basically, the difference is how 
</span><br>
<span class="quotelev1">&gt; the card will be used. If you only specify the btls then Open 
</span><br>
<span class="quotelev1">&gt; MPI will try to initialize the CM PML and that's how this 
</span><br>
<span class="quotelev1">&gt; error message appears. If you add OMPI_MCA_pml=^cm to your 
</span><br>
<span class="quotelev1">&gt; environment, then this warning will go away.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 18, 2008, at 4:22 PM, SLIM H.A. wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have OpenMPI-1.2.5 configured with myrinet and infiniband:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; OMPI_MCA_btl=openib,self,sm
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The job runs with the &quot;error&quot; message
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &quot;Error in mx_init (error MX driver not loaded.)&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; which makes sense in itself as there is no myrinet card on the node.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is it correct to assume that the ib interconnect will be 
</span><br>
<span class="quotelev1">&gt; used anyway?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I saw an old email with a similar query and a comment that this 
</span><br>
<span class="quotelev2">&gt; &gt; message would be removed in a future release, has that happened yet?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Henk
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
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5931.php">SLIM H.A.: "Re: [OMPI users] Error in mx_init message"</a>
<li><strong>Previous message:</strong> <a href="5929.php">Peter Diamessis: "[OMPI users] Open MPI timeout problems."</a>
<li><strong>In reply to:</strong> <a href="5928.php">George Bosilca: "Re: [OMPI users] Error in mx_init message"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5931.php">SLIM H.A.: "Re: [OMPI users] Error in mx_init message"</a>
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
