<?
$subject_val = "Re: [MTT users] Can not find my testing results in OMPI MTT DB";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  8 17:08:21 2008" -->
<!-- isoreceived="20080708210821" -->
<!-- sent="Tue, 8 Jul 2008 17:08:15 -0400" -->
<!-- isosent="20080708210815" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] Can not find my testing results in OMPI MTT DB" -->
<!-- id="0EB42897-15B7-4E7E-B99E-76D35DEFA7E3_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080708210508.GB62746_at_sun.com" -->
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
<strong>Subject:</strong> Re: [MTT users] Can not find my testing results in OMPI MTT DB<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-08 17:08:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0594.php">Pavel Shamis (Pasha): "Re: [MTT users] Can not find my testing results in OMPI MTT DB"</a>
<li><strong>Previous message:</strong> <a href="0592.php">Ethan Mallove: "Re: [MTT users] Can not find my testing results in OMPI MTT DB"</a>
<li><strong>In reply to:</strong> <a href="0592.php">Ethan Mallove: "Re: [MTT users] Can not find my testing results in OMPI MTT DB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0594.php">Pavel Shamis (Pasha): "Re: [MTT users] Can not find my testing results in OMPI MTT DB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 8, 2008, at 5:05 PM, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; If you are running on the trunk, there's this Test run INI
</span><br>
<span class="quotelev1">&gt; parameter:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  submit_results_after_each = 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That tells MTT to submit results after each new test
</span><br>
<span class="quotelev1">&gt; executable. This might add significant overhead, but at
</span><br>
<span class="quotelev1">&gt; least you'd have some results in the DB to look at. I'll go
</span><br>
<span class="quotelev1">&gt; ahead and add &quot;submit_results_after_n_tests&quot;. (Is that an
</span><br>
<span class="quotelev1">&gt; okay name?) E.g., this would submit results after every 100
</span><br>
<span class="quotelev1">&gt; new test executables.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  submit_results_after_n_tests = 100
</span><br>
<p>FWIW, I think it would be better to handle in the reporter plugin  
<br>
itself.  I.e., the plugin should know that its target (i.e., the OMPI  
<br>
apache server) can only handle N results at a time, and break up the  
<br>
submits accordingly.  N can be an INI value, if desired.
<br>
<p>Just my $0.02.  :-)
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
<li><strong>Next message:</strong> <a href="0594.php">Pavel Shamis (Pasha): "Re: [MTT users] Can not find my testing results in OMPI MTT DB"</a>
<li><strong>Previous message:</strong> <a href="0592.php">Ethan Mallove: "Re: [MTT users] Can not find my testing results in OMPI MTT DB"</a>
<li><strong>In reply to:</strong> <a href="0592.php">Ethan Mallove: "Re: [MTT users] Can not find my testing results in OMPI MTT DB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0594.php">Pavel Shamis (Pasha): "Re: [MTT users] Can not find my testing results in OMPI MTT DB"</a>
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
