<?
$subject_val = "[OMPI users] Improving error messages";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 20 20:00:50 2008" -->
<!-- isoreceived="20080621000050" -->
<!-- sent="Fri, 20 Jun 2008 20:00:30 -0400" -->
<!-- isosent="20080621000030" -->
<!-- name="Scott Atchley" -->
<!-- email="atchley_at_[hidden]" -->
<!-- subject="[OMPI users] Improving error messages" -->
<!-- id="C4DF7B2F-4078-4160-B08C-8FB0C7FD8400_at_myri.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] Improving error messages<br>
<strong>From:</strong> Scott Atchley (<em>atchley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-20 20:00:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5953.php">Jeff Squyres: "Re: [OMPI users] Improving error messages"</a>
<li><strong>Previous message:</strong> <a href="5951.php">Joshua Bernstein: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5953.php">Jeff Squyres: "Re: [OMPI users] Improving error messages"</a>
<li><strong>Reply:</strong> <a href="5953.php">Jeff Squyres: "Re: [OMPI users] Improving error messages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>We had a customer using 1.2.6 with MX. We were running his jobs, some  
<br>
of which used the MX BTL and some used the MX MTL.
<br>
<p>He added a few more nodes to the cluster and installed the same OMPI.  
<br>
When we tried to run jobs that spanned the new nodes, the jobs failed.  
<br>
I did not keep the error messages, but it seems to be a standard  
<br>
message about a component such as &quot;self&quot; not found.
<br>
<p>The problem in fact was that he installed OMPI, but for some reason  
<br>
neither the MX BTL nor the MX MTL were installed. Thus, the failure. I  
<br>
do not believe the error message for the BTL runs ever specifically  
<br>
mentioned a missing MX component even though we were setting &quot;--mca  
<br>
btl self,sm,mx&quot; (we did not specify MX when using the MTL, we only  
<br>
used &quot;--mca pml cm&quot;.
<br>
<p>It would be helpful in the case where a OMPI cannot run _and_ a module  
<br>
is specifically requested but not available to be mentioned in the  
<br>
error message.
<br>
<p>Thanks,
<br>
<p>Scott
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5953.php">Jeff Squyres: "Re: [OMPI users] Improving error messages"</a>
<li><strong>Previous message:</strong> <a href="5951.php">Joshua Bernstein: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5953.php">Jeff Squyres: "Re: [OMPI users] Improving error messages"</a>
<li><strong>Reply:</strong> <a href="5953.php">Jeff Squyres: "Re: [OMPI users] Improving error messages"</a>
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
