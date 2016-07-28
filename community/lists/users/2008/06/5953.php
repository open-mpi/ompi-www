<?
$subject_val = "Re: [OMPI users] Improving error messages";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 20 20:15:44 2008" -->
<!-- isoreceived="20080621001544" -->
<!-- sent="Fri, 20 Jun 2008 20:13:04 -0400" -->
<!-- isosent="20080621001304" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Improving error messages" -->
<!-- id="096DE6D7-03D4-4FCB-A311-1FCCB9A86DC7_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C4DF7B2F-4078-4160-B08C-8FB0C7FD8400_at_myri.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Improving error messages<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-20 20:13:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5954.php">Jeff Squyres: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<li><strong>Previous message:</strong> <a href="5952.php">Scott Atchley: "[OMPI users] Improving error messages"</a>
<li><strong>In reply to:</strong> <a href="5952.php">Scott Atchley: "[OMPI users] Improving error messages"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I agree so much that I just recently filed a bug about this same issue:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/1338">https://svn.open-mpi.org/trac/ompi/ticket/1338</a>
<br>
<p>Thanks for the feedback, though -- this turns it from a hypothetical  
<br>
issue into a &quot;it has happened to at least one user&quot; issue...
<br>
<p><p>On Jun 20, 2008, at 8:00 PM, Scott Atchley wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We had a customer using 1.2.6 with MX. We were running his jobs,  
</span><br>
<span class="quotelev1">&gt; some of which used the MX BTL and some used the MX MTL.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; He added a few more nodes to the cluster and installed the same  
</span><br>
<span class="quotelev1">&gt; OMPI. When we tried to run jobs that spanned the new nodes, the jobs  
</span><br>
<span class="quotelev1">&gt; failed. I did not keep the error messages, but it seems to be a  
</span><br>
<span class="quotelev1">&gt; standard message about a component such as &quot;self&quot; not found.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem in fact was that he installed OMPI, but for some reason  
</span><br>
<span class="quotelev1">&gt; neither the MX BTL nor the MX MTL were installed. Thus, the failure.  
</span><br>
<span class="quotelev1">&gt; I do not believe the error message for the BTL runs ever  
</span><br>
<span class="quotelev1">&gt; specifically mentioned a missing MX component even though we were  
</span><br>
<span class="quotelev1">&gt; setting &quot;--mca btl self,sm,mx&quot; (we did not specify MX when using the  
</span><br>
<span class="quotelev1">&gt; MTL, we only used &quot;--mca pml cm&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It would be helpful in the case where a OMPI cannot run _and_ a  
</span><br>
<span class="quotelev1">&gt; module is specifically requested but not available to be mentioned  
</span><br>
<span class="quotelev1">&gt; in the error message.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Scott
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
<li><strong>Next message:</strong> <a href="5954.php">Jeff Squyres: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<li><strong>Previous message:</strong> <a href="5952.php">Scott Atchley: "[OMPI users] Improving error messages"</a>
<li><strong>In reply to:</strong> <a href="5952.php">Scott Atchley: "[OMPI users] Improving error messages"</a>
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
