<?
$subject_val = "Re: [OMPI users] tests for heterogenous installations?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 16 15:26:37 2009" -->
<!-- isoreceived="20090316192637" -->
<!-- sent="Mon, 16 Mar 2009 15:26:31 -0400" -->
<!-- isosent="20090316192631" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] tests for heterogenous installations?" -->
<!-- id="7B5B0F89-3247-4B34-8DF9-4DE12DAC4B32_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49BE9A27.3010302_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] tests for heterogenous installations?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-16 15:26:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8469.php">Doug Reeder: "Re: [OMPI users] Installation Problems with Openmpi-1.2.9"</a>
<li><strong>Previous message:</strong> <a href="8467.php">Ralph Castain: "Re: [OMPI users] Installation Problems with Openmpi-1.2.9"</a>
<li><strong>In reply to:</strong> <a href="8465.php">Yury Tarasievich: "Re: [OMPI users] tests for heterogenous installations?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8472.php">Yury Tarasievich: "Re: [OMPI users] tests for heterogenous installations?"</a>
<li><strong>Reply:</strong> <a href="8472.php">Yury Tarasievich: "Re: [OMPI users] tests for heterogenous installations?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 16, 2009, at 2:27 PM, Yury Tarasievich wrote:
<br>
<p><span class="quotelev1">&gt; Well, no. What I would want is, say, MPI variation of &quot;hello world&quot;  
</span><br>
<span class="quotelev1">&gt; that
</span><br>
<span class="quotelev1">&gt; would output the phrase char by char, one char per the participating
</span><br>
<span class="quotelev1">&gt; host, and doing it in correct (so, MPI-synchronised) order. Hosts  
</span><br>
<span class="quotelev1">&gt; may be
</span><br>
<span class="quotelev1">&gt; heterogenous.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Or possibly some trivial implementation of poisson method, adapted for
</span><br>
<span class="quotelev1">&gt; such an environment?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It's just that I won't be capable to write this myself in the
</span><br>
<span class="quotelev1">&gt; foreseeable future, and I need to test the new installations. I wasn't
</span><br>
<span class="quotelev1">&gt; able to find something like this in the net.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>Open MPI contains two test programs: &quot;hello world&quot; and &quot;ring&quot; in each  
<br>
of the 4 languages (C, C++, F77, F90) in the examples/ directory.
<br>
<p>Would those work for you?  The &quot;ring&quot; message passes an integer  
<br>
message around in a ring; if the message passing is not working  
<br>
properly in a heterogeneous environment, then this program will  
<br>
certainly fail (the integer message is how many more times to send the  
<br>
message around the ring).
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
<li><strong>Next message:</strong> <a href="8469.php">Doug Reeder: "Re: [OMPI users] Installation Problems with Openmpi-1.2.9"</a>
<li><strong>Previous message:</strong> <a href="8467.php">Ralph Castain: "Re: [OMPI users] Installation Problems with Openmpi-1.2.9"</a>
<li><strong>In reply to:</strong> <a href="8465.php">Yury Tarasievich: "Re: [OMPI users] tests for heterogenous installations?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8472.php">Yury Tarasievich: "Re: [OMPI users] tests for heterogenous installations?"</a>
<li><strong>Reply:</strong> <a href="8472.php">Yury Tarasievich: "Re: [OMPI users] tests for heterogenous installations?"</a>
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
