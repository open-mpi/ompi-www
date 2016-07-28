<?
$subject_val = "Re: [OMPI users] CPU burning in Wait state";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  4 18:42:33 2008" -->
<!-- isoreceived="20080904224233" -->
<!-- sent="Thu, 4 Sep 2008 23:42:17 +0100" -->
<!-- isosent="20080904224217" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] CPU burning in Wait state" -->
<!-- id="5E450085-B5E8-48C1-A100-08B7436E9DF7_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="48C0003E.6040505_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] CPU burning in Wait state<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-04 18:42:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6471.php">Davi Vercillo C. Garcia (デビッド): "[OMPI users] Warnings in Ubuntu Hardy"</a>
<li><strong>Previous message:</strong> <a href="6469.php">Eugene Loh: "Re: [OMPI users] CPU burning in Wait state"</a>
<li><strong>In reply to:</strong> <a href="6469.php">Eugene Loh: "Re: [OMPI users] CPU burning in Wait state"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 4, 2008, at 4:35 PM, Eugene Loh wrote:
<br>
<p><span class="quotelev2">&gt;&gt; There are many alternatives to polling hard.  One is to yield the  
</span><br>
<span class="quotelev2">&gt;&gt; CPU if someone else is asking for it.  Again, Open MPI has some  
</span><br>
<span class="quotelev2">&gt;&gt; support for this today with the &quot;mpi_yield_when_idle&quot; variable.   
</span><br>
<span class="quotelev2">&gt;&gt; Right?  Might not be all of what someone wants, but the above  
</span><br>
<span class="quotelev2">&gt;&gt; discussion just seems not to account for this.  In any case, I  
</span><br>
<span class="quotelev2">&gt;&gt; verified that it does do something useful in at least one case.
</span><br>
<p>Yes, we do do that, as you verified.  The main intent of that features  
<br>
was to support oversubscribing (e.g., developing a parallel app on a  
<br>
laptop or limited-processor desktop).
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6471.php">Davi Vercillo C. Garcia (デビッド): "[OMPI users] Warnings in Ubuntu Hardy"</a>
<li><strong>Previous message:</strong> <a href="6469.php">Eugene Loh: "Re: [OMPI users] CPU burning in Wait state"</a>
<li><strong>In reply to:</strong> <a href="6469.php">Eugene Loh: "Re: [OMPI users] CPU burning in Wait state"</a>
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
