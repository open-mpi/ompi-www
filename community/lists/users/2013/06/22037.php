<?
$subject_val = "Re: [OMPI users] openmpi-lsb_launch failed";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  6 04:53:59 2013" -->
<!-- isoreceived="20130606085359" -->
<!-- sent="Thu, 6 Jun 2013 01:53:52 -0700" -->
<!-- isosent="20130606085352" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi-lsb_launch failed" -->
<!-- id="87D90A16-AAC1-4AF9-9165-9611E391EF1B_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="F0F64029F488D042A3BA93A67596AE3E02256A47_at_BANMLVEM04.e2k.ad.ge.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi-lsb_launch failed<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-06 04:53:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22038.php">Ralph Castain: "Re: [OMPI users] Oversubcription for mimd/mpmd mpiruns"</a>
<li><strong>Previous message:</strong> <a href="22036.php">Nima Aghajari: "[OMPI users] Oversubcription for mimd/mpmd mpiruns"</a>
<li><strong>In reply to:</strong> <a href="22035.php">Murthy, Mahalakshmi (GE Global Research, consultant): "Re: [OMPI users] openmpi-lsb_launch failed"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Wow - that is ancient! Can you update to something more recent - perhaps something like 1.6.4?
<br>
<p>I have no idea what the problem might be in something that old, but it certainly was working with LSF back then. Can you run a simple app, perhaps something like &quot;mpirun -n 1 hostname&quot;?
<br>
<p><p>On Jun 5, 2013, at 11:29 PM, &quot;Murthy, Mahalakshmi (GE Global Research, consultant)&quot; &lt;Mahalakshmi.Murthy_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi ,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; We are using openmpi version 1.4.5.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks and Regards,
</span><br>
<span class="quotelev1">&gt; Mahalakshmi Murthy [Maha]
</span><br>
<span class="quotelev1">&gt; TCS | GE Global Research
</span><br>
<span class="quotelev1">&gt; Mail ID: Mahalakshmi.Murthy_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Mobile No:8147923917
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, June 05, 2013 7:39 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] openmpi-lsb_launch failed
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Could you please tell us the OMPI version you are using?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; On Jun 5, 2013, at 6:09 AM, &quot;Murthy, Mahalakshmi (GE Global Research, consultant)&quot; &lt;Mahalakshmi.Murthy_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Team,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; We have a concern when we launch Fluent with openmpi we get the following error message.
</span><br>
<span class="quotelev1">&gt; ===========================================================================================
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; ORTE_ERROR_LOG: The specified application failed to start in file plm_lsf_module.c at line 308
</span><br>
<span class="quotelev1">&gt; lsb_launch failed: 0
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; ===========================================================================================
</span><br>
<span class="quotelev1">&gt; Could you please provide us a fix for this solution.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks and Regards,
</span><br>
<span class="quotelev1">&gt; Mahalakshmi Murthy [Maha]
</span><br>
<span class="quotelev1">&gt; TCS | GE Global Research
</span><br>
<span class="quotelev1">&gt; Mail ID: Mahalakshmi.Murthy_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Mobile No:81479239
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22037/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22038.php">Ralph Castain: "Re: [OMPI users] Oversubcription for mimd/mpmd mpiruns"</a>
<li><strong>Previous message:</strong> <a href="22036.php">Nima Aghajari: "[OMPI users] Oversubcription for mimd/mpmd mpiruns"</a>
<li><strong>In reply to:</strong> <a href="22035.php">Murthy, Mahalakshmi (GE Global Research, consultant): "Re: [OMPI users] openmpi-lsb_launch failed"</a>
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
