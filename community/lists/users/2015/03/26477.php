<?
$subject_val = "Re: [OMPI users] will openmpi with infiniband support fall back to ethernet if infiniband not available?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 16 10:26:02 2015" -->
<!-- isoreceived="20150316142602" -->
<!-- sent="Mon, 16 Mar 2015 07:25:57 -0700" -->
<!-- isosent="20150316142557" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] will openmpi with infiniband support fall back to ethernet if infiniband not available?" -->
<!-- id="8D3AB6DB-CFA3-4B28-B0ED-942E2FC19B99_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CANKY03VK=22XA-ya5MJXHwsVn1t8byC=taK=3fKQj_bZ+URQTg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] will openmpi with infiniband support fall back to ethernet if infiniband not available?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-16 10:25:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26478.php">Fabricio Cannini: "Re: [OMPI users] Cannot compile 1.8.x with intel 12.1 and 'io-romio' enabled"</a>
<li><strong>Previous message:</strong> <a href="26476.php">Pablo Escobar Lopez: "[OMPI users] will openmpi with infiniband support fall back to ethernet if infiniband not available?"</a>
<li><strong>In reply to:</strong> <a href="26476.php">Pablo Escobar Lopez: "[OMPI users] will openmpi with infiniband support fall back to ethernet if infiniband not available?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Should work just fine. If it finds IB libraries on the machines that don&#226;&#128;&#153;t have IB hardware, you might see a warning that it couldn&#226;&#128;&#153;t find an IB NIC (not sure, but I think it might).
<br>
<p>No configuration tweaks should be required.
<br>
<p><p><span class="quotelev1">&gt; On Mar 16, 2015, at 3:59 AM, Pablo Escobar Lopez &lt;pablo.escobarlopez_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am planning to upgrade my software stack and now I will have machines without infiniband and machines with infiniband, I would like to share the same software stack across all those machines if possible.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am thinking about trying to compile openmpi with infiniband support (I would compile openmpi in one of the machine connected to the infiniband network) and then use this openmpi version also in the non infiniband machines. I am expecting that when using this version of openmpi with infiniband support enabled in a non-infiniband machine openmpi will detect this and will fallback to use ethernet. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Am I expecting correctly or this won't work? Does anyone has experience with this scenario?  In case this is possible, is there any configuration/compilation tweaks required when building openmpi for this to work?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thanks in advance for any help.
</span><br>
<span class="quotelev1">&gt; regards,
</span><br>
<span class="quotelev1">&gt; Pablo.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Pablo Escobar L&#195;&#179;pez
</span><br>
<span class="quotelev1">&gt; HPC systems engineer
</span><br>
<span class="quotelev1">&gt; Biozentrum, University of Basel
</span><br>
<span class="quotelev1">&gt; Swiss Institute of Bioinformatics SIB
</span><br>
<span class="quotelev1">&gt; Email: pablo.escobarlopez_at_[hidden] &lt;mailto:pablo.escobarlopez_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Phone: +41 61 267 21 80
</span><br>
<span class="quotelev1">&gt; <a href="http://www.biozentrum.unibas.ch">http://www.biozentrum.unibas.ch</a> &lt;<a href="http://www.biozentrum.unibas.ch/">http://www.biozentrum.unibas.ch/</a>&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/03/26476.php">http://www.open-mpi.org/community/lists/users/2015/03/26476.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26477/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26478.php">Fabricio Cannini: "Re: [OMPI users] Cannot compile 1.8.x with intel 12.1 and 'io-romio' enabled"</a>
<li><strong>Previous message:</strong> <a href="26476.php">Pablo Escobar Lopez: "[OMPI users] will openmpi with infiniband support fall back to ethernet if infiniband not available?"</a>
<li><strong>In reply to:</strong> <a href="26476.php">Pablo Escobar Lopez: "[OMPI users] will openmpi with infiniband support fall back to ethernet if infiniband not available?"</a>
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
