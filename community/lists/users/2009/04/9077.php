<?
$subject_val = "Re: [OMPI users] pls_rsh_agent deprecated?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 23 14:33:44 2009" -->
<!-- isoreceived="20090423183344" -->
<!-- sent="Thu, 23 Apr 2009 14:33:38 -0400" -->
<!-- isosent="20090423183338" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] pls_rsh_agent deprecated?" -->
<!-- id="013DA910-C2D2-4714-943A-A6516EE2B6C5_at_cisco.com" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="71d2d8cc0904230556p46591730p8c270e6d0ccd02c5_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] pls_rsh_agent deprecated?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-23 14:33:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9078.php">Jeff Squyres: "Re: [OMPI users] Launching MPI app manually when rsh/ssh can't beused..."</a>
<li><strong>Previous message:</strong> <a href="9076.php">Jeff Squyres: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>In reply to:</strong> <a href="9068.php">Ralph Castain: "Re: [OMPI users] pls_rsh_agent deprecated?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Excellent point -- the FAQ was outdated.  Along with some other FAQ  
<br>
updates this morning, I updated these two entries:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=running#pls-rsh-agent">http://www.open-mpi.org/faq/?category=running#pls-rsh-agent</a>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=rsh#rsh-not-ssh">http://www.open-mpi.org/faq/?category=rsh#rsh-not-ssh</a>
<br>
<p>Sorry for the confusion!
<br>
<p><p>On Apr 23, 2009, at 8:56 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; It will still work, but it has been deprecated. Are you talking  
</span><br>
<span class="quotelev1">&gt; about the 1.3.x series, or in our development trunk?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the 1.3.x series, the parameter is now plm_rsh_agent.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the trunk, you can also specify it as orte_rsh_agent.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Apr 23, 2009 at 6:14 AM, Katz, Jacob &lt;jacob.katz_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried using pls_rsh_agent parameter as instructed in <a href="http://www.open-mpi.org/faq/?category=rsh">http://www.open-mpi.org/faq/?category=rsh</a> 
</span><br>
<span class="quotelev1">&gt; , but got a message that it&#146;s deprecated. Is this so? Has it been  
</span><br>
<span class="quotelev1">&gt; superseded by some other parameters?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jacob M. Katz | jacob.katz_at_[hidden] | Work: +972-4-865-5726 | iNet:  
</span><br>
<span class="quotelev1">&gt; (8)-465-5726
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Intel Israel (74) Limited
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This e-mail and any attachments may contain confidential material for
</span><br>
<span class="quotelev1">&gt; the sole use of the intended recipient(s). Any review or distribution
</span><br>
<span class="quotelev1">&gt; by others is strictly prohibited. If you are not the intended
</span><br>
<span class="quotelev1">&gt; recipient, please contact the sender and delete all copies.
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
<li><strong>Next message:</strong> <a href="9078.php">Jeff Squyres: "Re: [OMPI users] Launching MPI app manually when rsh/ssh can't beused..."</a>
<li><strong>Previous message:</strong> <a href="9076.php">Jeff Squyres: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>In reply to:</strong> <a href="9068.php">Ralph Castain: "Re: [OMPI users] pls_rsh_agent deprecated?"</a>
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
