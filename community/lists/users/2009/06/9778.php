<?
$subject_val = "Re: [OMPI users] Apllication level checkpointing tools.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 30 10:08:21 2009" -->
<!-- isoreceived="20090630140821" -->
<!-- sent="Tue, 30 Jun 2009 10:08:16 -0400" -->
<!-- isosent="20090630140816" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Apllication level checkpointing tools." -->
<!-- id="B29FA5C8-CA39-4DC5-A40B-50262DDD23BB_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="OF77104898.F40B0C0A-ON652575E5.00475A59-652575E5.00473693_at_crlindia.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Apllication level checkpointing tools.<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-30 10:08:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9779.php">Durga Choudhury: "Re: [OMPI users] Apllication level checkpointing tools."</a>
<li><strong>Previous message:</strong> <a href="9777.php">Josh Hursey: "Re: [OMPI users] Checkpointing automatically at regular intervals"</a>
<li><strong>In reply to:</strong> <a href="9774.php">neeraj_at_[hidden]: "Re: [OMPI users] Apllication level checkpointing tools."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9779.php">Durga Choudhury: "Re: [OMPI users] Apllication level checkpointing tools."</a>
<li><strong>Reply:</strong> <a href="9779.php">Durga Choudhury: "Re: [OMPI users] Apllication level checkpointing tools."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Checkpoint/restart in Open MPI supports TCP, Shared Memory,  
<br>
Infiniband, and Myrinet interconnects (possibly others, but they have  
<br>
not been tested) [1]. Is this what you are looking for?
<br>
<p>-- Josh
<br>
<p>[1] Hursey, J., Mattox, T. I., and Lumsdaine, A. 2009. &quot;Interconnect  
<br>
agnostic checkpoint/restart in Open MPI&quot;
<br>
<a href="http://doi.acm.org/10.1145/1551609.1551619">http://doi.acm.org/10.1145/1551609.1551619</a>
<br>
<p>On Jun 30, 2009, at 9:00 AM, neeraj_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dear Mohamed,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Is there some checkpointing software for interconnect other  
</span><br>
<span class="quotelev1">&gt; than tcp say IB or Myrinet?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Neeraj Chourasia (MTS)
</span><br>
<span class="quotelev1">&gt; Computational Research Laboratories Ltd.
</span><br>
<span class="quotelev1">&gt; (A wholly Owned Subsidiary of TATA SONS Ltd)
</span><br>
<span class="quotelev1">&gt; B-101, ICC Trade Towers, Senapati Bapat Road
</span><br>
<span class="quotelev1">&gt; Pune 411016 (Mah) INDIA
</span><br>
<span class="quotelev1">&gt; (O) +91-20-6620 9863  (Fax) +91-20-6620 9862
</span><br>
<span class="quotelev1">&gt; M: +91.9225520634
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mohamed Slim bouguerra &lt;mohamed-slim.bouguerra_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Sent by: users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 06/30/2009 05:42 PM
</span><br>
<span class="quotelev1">&gt; Please respond to
</span><br>
<span class="quotelev1">&gt; Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To
</span><br>
<span class="quotelev1">&gt; Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; cc
</span><br>
<span class="quotelev1">&gt; Subject
</span><br>
<span class="quotelev1">&gt; Re: [OMPI users] Apllication level checkpointing tools.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dear Kritiraj,
</span><br>
<span class="quotelev1">&gt; You can use DMTCP  <a href="http://sourceforge.net/projects/dmtcp">http://sourceforge.net/projects/dmtcp</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 30 juin 09 &#224; 13:59, Kritiraj Sajadah a &#233;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Daer All,
</span><br>
<span class="quotelev2">&gt; &gt;          I have successfully comfigure OPENMPI with BLCR and id some
</span><br>
<span class="quotelev2">&gt; &gt; test. hover, i now want to do some testing with an Application Level
</span><br>
<span class="quotelev2">&gt; &gt; checkpointng tools.  I tried using libckpt but could not install it.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Do anyone of you know any open source application level
</span><br>
<span class="quotelev2">&gt; &gt; checkpointing tools available that i can install and test with
</span><br>
<span class="quotelev2">&gt; &gt; openmpi?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thank you
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Raj
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
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
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; =====-----=====-----===== Notice: The information contained in this  
</span><br>
<span class="quotelev1">&gt; e-mail message and/or attachments to it may contain confidential or  
</span><br>
<span class="quotelev1">&gt; privileged information. If you are not the intended recipient, any  
</span><br>
<span class="quotelev1">&gt; dissemination, use, review, distribution, printing or copying of the  
</span><br>
<span class="quotelev1">&gt; information contained in this e-mail message and/or attachments to  
</span><br>
<span class="quotelev1">&gt; it are strictly prohibited. If you have received this communication  
</span><br>
<span class="quotelev1">&gt; in error, please notify us by reply e-mail or telephone and  
</span><br>
<span class="quotelev1">&gt; immediately and permanently delete the message and any attachments.  
</span><br>
<span class="quotelev1">&gt; Internet communications cannot be guaranteed to be timely, secure,  
</span><br>
<span class="quotelev1">&gt; error or virus-free. The sender does not accept liability for any  
</span><br>
<span class="quotelev1">&gt; errors or omissions.Thank you =====-----=====-----=====
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
<li><strong>Next message:</strong> <a href="9779.php">Durga Choudhury: "Re: [OMPI users] Apllication level checkpointing tools."</a>
<li><strong>Previous message:</strong> <a href="9777.php">Josh Hursey: "Re: [OMPI users] Checkpointing automatically at regular intervals"</a>
<li><strong>In reply to:</strong> <a href="9774.php">neeraj_at_[hidden]: "Re: [OMPI users] Apllication level checkpointing tools."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9779.php">Durga Choudhury: "Re: [OMPI users] Apllication level checkpointing tools."</a>
<li><strong>Reply:</strong> <a href="9779.php">Durga Choudhury: "Re: [OMPI users] Apllication level checkpointing tools."</a>
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
