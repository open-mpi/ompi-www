<?
$subject_val = "Re: [OMPI users] Bogus memcpy or bogus  valgrind record";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 29 15:45:05 2009" -->
<!-- isoreceived="20090429194505" -->
<!-- sent="Wed, 29 Apr 2009 15:45:00 -0400" -->
<!-- isosent="20090429194500" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bogus memcpy or bogus  valgrind record" -->
<!-- id="AE5A9F6F-FA27-46EE-AE14-A431BA4459EE_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49F8AD46.4070403_at_59A2.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Bogus memcpy or bogus  valgrind record<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-29 15:45:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9149.php">jan: "Re: [OMPI users] users Digest, Vol 1217, Issue 2, Message3"</a>
<li><strong>Previous message:</strong> <a href="9147.php">Jed Brown: "Re: [OMPI users] Bogus memcpy or bogus  valgrind record"</a>
<li><strong>In reply to:</strong> <a href="9147.php">Jed Brown: "Re: [OMPI users] Bogus memcpy or bogus  valgrind record"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 29, 2009, at 3:40 PM, Jed Brown wrote:
<br>
<p><span class="quotelev2">&gt; &gt; But I'm able to replicate your error (but shouldn't the 2nd buffer  
</span><br>
<span class="quotelev1">&gt; be
</span><br>
<span class="quotelev2">&gt; &gt; the 1st + size (not 2)?) -- let me dig into it a bit... we  
</span><br>
<span class="quotelev1">&gt; definitely
</span><br>
<span class="quotelev2">&gt; &gt; shouldn't be getting invalid writes in the convertor, etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As Eugene pointed out earlier, it is fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   dataloctab = malloc (2 * (procglbnbr + 1) * sizeof (int));
</span><br>
<span class="quotelev1">&gt;   dataglbtab = dataloctab + 2;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; dataloctab is the 2-element send buffer, dataglbtab is the receive
</span><br>
<span class="quotelev1">&gt; buffer of length 2*procglbnbr.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>You're absolutely right -- sorry for not paying attention.
<br>
<p>Regardless, there still is a definite problem.  I'm digging...
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
<li><strong>Next message:</strong> <a href="9149.php">jan: "Re: [OMPI users] users Digest, Vol 1217, Issue 2, Message3"</a>
<li><strong>Previous message:</strong> <a href="9147.php">Jed Brown: "Re: [OMPI users] Bogus memcpy or bogus  valgrind record"</a>
<li><strong>In reply to:</strong> <a href="9147.php">Jed Brown: "Re: [OMPI users] Bogus memcpy or bogus  valgrind record"</a>
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
