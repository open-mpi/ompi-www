<?
$subject_val = "Re: [OMPI users] selectively bind MPI to one HCA out of	available ones";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 15 09:43:55 2009" -->
<!-- isoreceived="20090715134355" -->
<!-- sent="Wed, 15 Jul 2009 09:43:47 -0400" -->
<!-- isosent="20090715134347" -->
<!-- name="Rolf Vandevaart" -->
<!-- email="Rolf.Vandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] selectively bind MPI to one HCA out of	available ones" -->
<!-- id="4A5DDD13.7070302_at_Sun.COM" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="OF90E770E5.5C3621C0-ON652575F4.004A647B-652575F4.004A40D4_at_crlindia.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] selectively bind MPI to one HCA out of	available ones<br>
<strong>From:</strong> Rolf Vandevaart (<em>Rolf.Vandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-15 09:43:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9981.php">Jeff Squyres: "Re: [OMPI users] questions about tracing OpenMPI program"</a>
<li><strong>Previous message:</strong> <a href="9979.php">Ralph Castain: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>In reply to:</strong> <a href="9976.php">neeraj_at_[hidden]: "Re: [OMPI users] selectively bind MPI to one HCA out of available	ones"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9977.php">Lenny Verkhovsky: "Re: [OMPI users] selectively bind MPI to one HCA out of available ones"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As Lenny said, you should use the if_include parameter.  Specifically, 
<br>
it would look like this depending on which ones you want to select.
<br>
<p>-mca btl_openib_if_include mtcha0
<br>
<p>or
<br>
<p>-mca btl_openib_if_include mtcha1
<br>
<p>Rolf
<br>
<p>On 07/15/09 09:33, neeraj_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         i found the mca parameter. It is btl_openib_max_btls which 
</span><br>
<span class="quotelev1">&gt; controls the available HCAs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         Thanks for helping.
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
<span class="quotelev1">&gt; *Ralph Castain &lt;rhc_at_[hidden]&gt;*
</span><br>
<span class="quotelev1">&gt; Sent by: users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 07/15/2009 06:54 PM
</span><br>
<span class="quotelev1">&gt; Please respond to
</span><br>
<span class="quotelev1">&gt; Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	
</span><br>
<span class="quotelev1">&gt; To
</span><br>
<span class="quotelev1">&gt; 	Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; cc
</span><br>
<span class="quotelev1">&gt; 	
</span><br>
<span class="quotelev1">&gt; Subject
</span><br>
<span class="quotelev1">&gt; 	Re: [OMPI users] selectively bind MPI to one HCA out of available       
</span><br>
<span class="quotelev1">&gt;  ones
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Take a look at the output from &quot;ompi_info --params btl openib&quot; and you 
</span><br>
<span class="quotelev1">&gt; will see the available MCA params to direct the openib subsystem. I 
</span><br>
<span class="quotelev1">&gt; believe you will find that you can indeed specify the interface.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Jul 15, 2009 at 7:15 AM, &lt;_neeraj_at_[hidden]_ 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:neeraj_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         I have a cluster where both HCA's of blade are active, but 
</span><br>
<span class="quotelev1">&gt; connected to different subnet.
</span><br>
<span class="quotelev1">&gt;         Is there an option in MPI to select one HCA out of available 
</span><br>
<span class="quotelev1">&gt; one's? I know it can be done by making changes in openmpi code, but i 
</span><br>
<span class="quotelev1">&gt; need clean interface like option during mpi launch time to select mthca0 
</span><br>
<span class="quotelev1">&gt; or mthca1?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         Any help is appreciated. Btw i just checked Mvapich and feature 
</span><br>
<span class="quotelev1">&gt; is there inside.
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
<span class="quotelev1">&gt; =====-----=====-----===== Notice: The information contained in this 
</span><br>
<span class="quotelev1">&gt; e-mail message and/or attachments to it may contain confidential or 
</span><br>
<span class="quotelev1">&gt; privileged information. If you are not the intended recipient, any 
</span><br>
<span class="quotelev1">&gt; dissemination, use, review, distribution, printing or copying of the 
</span><br>
<span class="quotelev1">&gt; information contained in this e-mail message and/or attachments to it 
</span><br>
<span class="quotelev1">&gt; are strictly prohibited. If you have received this communication in 
</span><br>
<span class="quotelev1">&gt; error, please notify us by reply e-mail or telephone and immediately and 
</span><br>
<span class="quotelev1">&gt; permanently delete the message and any attachments. Internet 
</span><br>
<span class="quotelev1">&gt; communications cannot be guaranteed to be timely, secure, error or 
</span><br>
<span class="quotelev1">&gt; virus-free. The sender does not accept liability for any errors or 
</span><br>
<span class="quotelev1">&gt; omissions.Thank you =====-----=====-----=====
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list_
</span><br>
<span class="quotelev1">&gt; __users_at_[hidden]_ &lt;mailto:users_at_[hidden]&gt;_
</span><br>
<span class="quotelev1">&gt; __<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>_
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
<span class="quotelev1">&gt; information contained in this e-mail message and/or attachments to it 
</span><br>
<span class="quotelev1">&gt; are strictly prohibited. If you have received this communication in 
</span><br>
<span class="quotelev1">&gt; error, please notify us by reply e-mail or telephone and immediately and 
</span><br>
<span class="quotelev1">&gt; permanently delete the message and any attachments. Internet 
</span><br>
<span class="quotelev1">&gt; communications cannot be guaranteed to be timely, secure, error or 
</span><br>
<span class="quotelev1">&gt; virus-free. The sender does not accept liability for any errors or 
</span><br>
<span class="quotelev1">&gt; omissions.Thank you =====-----=====-----=====
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<p><p><pre>
-- 
=========================
rolf.vandevaart_at_[hidden]
781-442-3043
=========================
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9981.php">Jeff Squyres: "Re: [OMPI users] questions about tracing OpenMPI program"</a>
<li><strong>Previous message:</strong> <a href="9979.php">Ralph Castain: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>In reply to:</strong> <a href="9976.php">neeraj_at_[hidden]: "Re: [OMPI users] selectively bind MPI to one HCA out of available	ones"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9977.php">Lenny Verkhovsky: "Re: [OMPI users] selectively bind MPI to one HCA out of available ones"</a>
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
