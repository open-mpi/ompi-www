<?
$subject_val = "Re: [OMPI users] Error in mx_init message";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 18 10:26:57 2008" -->
<!-- isoreceived="20080618142657" -->
<!-- sent="Wed, 18 Jun 2008 16:26:44 +0200" -->
<!-- isosent="20080618142644" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error in mx_init message" -->
<!-- id="787FD4F1-0B21-42DC-B3EE-5FA874388777_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="BDDB7C5009659447B2F1747B53854FE801BDF60D_at_EXDUR1.mds.ad.dur.ac.uk" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-18 10:26:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5929.php">Peter Diamessis: "[OMPI users] Open MPI timeout problems."</a>
<li><strong>Previous message:</strong> <a href="5927.php">SLIM H.A.: "[OMPI users] Error in mx_init message"</a>
<li><strong>In reply to:</strong> <a href="5927.php">SLIM H.A.: "[OMPI users] Error in mx_init message"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5930.php">SLIM H.A.: "Re: [OMPI users] Error in mx_init message"</a>
<li><strong>Reply:</strong> <a href="5930.php">SLIM H.A.: "Re: [OMPI users] Error in mx_init message"</a>
<li><strong>Reply:</strong> <a href="5931.php">SLIM H.A.: "Re: [OMPI users] Error in mx_init message"</a>
<li><strong>Reply:</strong> <a href="5933.php">SLIM H.A.: "Re: [OMPI users] Error in mx_init message"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is a different issue. On top of Myrinet, Open MPI support two  
<br>
nodes: cm and the others. Basically, the difference is how the card  
<br>
will be used. If you only specify the btls then Open MPI will try to  
<br>
initialize the CM PML and that's how this error message appears. If  
<br>
you add OMPI_MCA_pml=^cm to your environment, then this warning will  
<br>
go away.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jun 18, 2008, at 4:22 PM, SLIM H.A. wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have OpenMPI-1.2.5 configured with myrinet and infiniband:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_btl=openib,self,sm
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The job runs with the &quot;error&quot; message
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;Error in mx_init (error MX driver not loaded.)&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; which makes sense in itself as there is no myrinet card on the node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is it correct to assume that the ib interconnect will be used anyway?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I saw an old email with a similar query and a comment that this  
</span><br>
<span class="quotelev1">&gt; message
</span><br>
<span class="quotelev1">&gt; would be removed in a future release, has that happened yet?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Henk
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
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5928/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5929.php">Peter Diamessis: "[OMPI users] Open MPI timeout problems."</a>
<li><strong>Previous message:</strong> <a href="5927.php">SLIM H.A.: "[OMPI users] Error in mx_init message"</a>
<li><strong>In reply to:</strong> <a href="5927.php">SLIM H.A.: "[OMPI users] Error in mx_init message"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5930.php">SLIM H.A.: "Re: [OMPI users] Error in mx_init message"</a>
<li><strong>Reply:</strong> <a href="5930.php">SLIM H.A.: "Re: [OMPI users] Error in mx_init message"</a>
<li><strong>Reply:</strong> <a href="5931.php">SLIM H.A.: "Re: [OMPI users] Error in mx_init message"</a>
<li><strong>Reply:</strong> <a href="5933.php">SLIM H.A.: "Re: [OMPI users] Error in mx_init message"</a>
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
