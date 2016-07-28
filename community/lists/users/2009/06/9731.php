<?
$subject_val = "Re: [OMPI users] MX questions";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 26 09:53:49 2009" -->
<!-- isoreceived="20090626135349" -->
<!-- sent="Fri, 26 Jun 2009 09:53:38 -0400" -->
<!-- isosent="20090626135338" -->
<!-- name="Scott Atchley" -->
<!-- email="atchley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MX questions" -->
<!-- id="ED182365-0CDE-47DE-A945-B7D1B34C77B7_at_myri.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="87prcrf6rr.fsf_at_liv.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] MX questions<br>
<strong>From:</strong> Scott Atchley (<em>atchley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-26 09:53:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9732.php">Ralph Castain: "Re: [OMPI users] Open specific port TCP/IP in MPI"</a>
<li><strong>Previous message:</strong> <a href="9730.php">Dave Love: "Re: [OMPI users] MX questions"</a>
<li><strong>In reply to:</strong> <a href="9729.php">Dave Love: "Re: [OMPI users] MX questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9745.php">Dave Love: "Re: [OMPI users] MX questions"</a>
<li><strong>Reply:</strong> <a href="9745.php">Dave Love: "Re: [OMPI users] MX questions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 26, 2009, at 9:45 AM, Dave Love wrote:
<br>
<p><span class="quotelev1">&gt; Scott Atchley &lt;atchley_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I believe the answer is yes as long as all NICs are in the same  
</span><br>
<span class="quotelev2">&gt;&gt; fabric
</span><br>
<span class="quotelev2">&gt;&gt; (they usually are).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks.  Do you mean it won't if, in this case, the two NICs are on
</span><br>
<span class="quotelev1">&gt; separate switches?
</span><br>
<p>Dave,
<br>
<p>George's answer supersedes mine. You must be using the MX bonding  
<br>
driver to use more than one NIC per host. The NICs do not have to be  
<br>
connected to the same switches, but they must be part of the same  
<br>
fabric (i.e. all NICs are in the same map). Each NIC's (board's)  
<br>
output in mx_info should list all NICs in the host.
<br>
<p>If you do not have the bonding driver, you can get it from  
<br>
help_at_myri.com.
<br>
<p>Scott
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9732.php">Ralph Castain: "Re: [OMPI users] Open specific port TCP/IP in MPI"</a>
<li><strong>Previous message:</strong> <a href="9730.php">Dave Love: "Re: [OMPI users] MX questions"</a>
<li><strong>In reply to:</strong> <a href="9729.php">Dave Love: "Re: [OMPI users] MX questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9745.php">Dave Love: "Re: [OMPI users] MX questions"</a>
<li><strong>Reply:</strong> <a href="9745.php">Dave Love: "Re: [OMPI users] MX questions"</a>
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
