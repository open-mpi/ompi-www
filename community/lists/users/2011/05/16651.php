<?
$subject_val = "Re: [OMPI users] BLCR support not building on 1.5.3";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 27 15:54:29 2011" -->
<!-- isoreceived="20110527195429" -->
<!-- sent="Fri, 27 May 2011 12:54:25 -0700 (PDT)" -->
<!-- isosent="20110527195425" -->
<!-- name="Bill Johnstone" -->
<!-- email="beejstone3_at_[hidden]" -->
<!-- subject="Re: [OMPI users] BLCR support not building on 1.5.3" -->
<!-- id="197028.51776.qm_at_web121816.mail.ne1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="645B43D6-BCBD-4463-B1D6-C2AB3E08A07E_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] BLCR support not building on 1.5.3<br>
<strong>From:</strong> Bill Johnstone (<em>beejstone3_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-27 15:54:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16652.php">Joshua Hursey: "Re: [OMPI users] BLCR support not building on 1.5.3"</a>
<li><strong>Previous message:</strong> <a href="16650.php">Joshua Hursey: "Re: [OMPI users] BLCR support not building on 1.5.3"</a>
<li><strong>In reply to:</strong> <a href="16650.php">Joshua Hursey: "Re: [OMPI users] BLCR support not building on 1.5.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16652.php">Joshua Hursey: "Re: [OMPI users] BLCR support not building on 1.5.3"</a>
<li><strong>Reply:</strong> <a href="16652.php">Joshua Hursey: "Re: [OMPI users] BLCR support not building on 1.5.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p><p>Thank you very much for this.&#160; I've replied further below:
<br>
<p><p>----- Original Message -----
<br>
<span class="quotelev1">&gt; From: Joshua Hursey &lt;jjhursey_at_[hidden]&gt;
</span><br>
[...]
<br>
<span class="quotelev1">&gt; What other configure options are you passing to Open MPI? Specifically the 
</span><br>
<span class="quotelev1">&gt; configure test will always fail if '--with-ft=cr' is not specified - by 
</span><br>
<span class="quotelev1">&gt; default Open MPI will only build the BLCR component if C/R FT is requested by 
</span><br>
<span class="quotelev1">&gt; the user.
</span><br>
<p>This was it!&#160; Now the BLCR supports builds in just fine.
<br>
<p>If I may offer some feedback:
<br>
<p>When I think &quot;Checkpoint/Restart&quot;, I don't immediately think &quot;Fault Tolerance&quot;; rather, I'm interested in it for a better alternative to suspend/resume.&#160; So I had *no* idea turning on the &quot;ft&quot; configure option this was a prerequisite for BLCR support to compile from just reading the configure help, configure output, docs, etc.
<br>
<p>I'd like to request that this be made easier to spot.&#160; At a minimum, the configure -help output could mention this when it gets to talking about BLCR, or C/R in general.
<br>
<p>Additionally, in general when configuring components, it would be nice in the config logs if there was a way to get more details about the tests (and why they failed) than just &quot;can compile...no&quot;.&#160; This may require more invasive changes - not being super-knowledgeable about configure, I don't know how much work this would be.
<br>
<p>Lastly, the standard Open MPI documentation (particularly the FAQ) could be updated in the C/R or BLCR sections to reflect the need for the &quot;--with-ft=cr&quot; argument.
<br>
<p>Again, I really appreciate the assistance.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16652.php">Joshua Hursey: "Re: [OMPI users] BLCR support not building on 1.5.3"</a>
<li><strong>Previous message:</strong> <a href="16650.php">Joshua Hursey: "Re: [OMPI users] BLCR support not building on 1.5.3"</a>
<li><strong>In reply to:</strong> <a href="16650.php">Joshua Hursey: "Re: [OMPI users] BLCR support not building on 1.5.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16652.php">Joshua Hursey: "Re: [OMPI users] BLCR support not building on 1.5.3"</a>
<li><strong>Reply:</strong> <a href="16652.php">Joshua Hursey: "Re: [OMPI users] BLCR support not building on 1.5.3"</a>
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
