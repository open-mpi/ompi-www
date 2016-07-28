<?
$subject_val = "Re: [OMPI users] Help tracing casue of readv errors";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 25 06:41:56 2009" -->
<!-- isoreceived="20091125114156" -->
<!-- sent="Wed, 25 Nov 2009 11:41:55 +0000" -->
<!-- isosent="20091125114155" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help tracing casue of readv errors" -->
<!-- id="1259149315.3358.1589.camel_at_alpha" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4B0D16A1.5070401_at_numericalrocks.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Help tracing casue of readv errors<br>
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-25 06:41:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11282.php">Atle Rudshaug: "Re: [OMPI users] Programming help required in Interleaving	computation+communication !"</a>
<li><strong>Previous message:</strong> <a href="11280.php">Atle Rudshaug: "Re: [OMPI users] Help tracing casue of readv errors"</a>
<li><strong>In reply to:</strong> <a href="11280.php">Atle Rudshaug: "Re: [OMPI users] Help tracing casue of readv errors"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 2009-11-25 at 12:36 +0100, Atle Rudshaug wrote:
<br>
<p><span class="quotelev1">&gt; I got a similar error when using non-blocking communication on large 
</span><br>
<span class="quotelev1">&gt; datasets. I could not figure out why this was happening, since it seemed 
</span><br>
<span class="quotelev1">&gt; sort of random. I eventually bypassed the problem by switching to 
</span><br>
<span class="quotelev1">&gt; blocking communication, which felt kind of sad...If anyone knows if this 
</span><br>
<span class="quotelev1">&gt; is a bug in OpenMPI or connected to hardware somehow, please share.
</span><br>
<p>You could easily be running out of memory on one node by saturating it
<br>
with messages, all of which may need to be buffered.  Have you checked
<br>
the offending nodes for messages from the OOM killer?
<br>
<p>Ashley,
<br>
<p><pre>
-- 
Ashley Pittman, Bath, UK.
Padb - A parallel job inspection tool for cluster computing
<a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11282.php">Atle Rudshaug: "Re: [OMPI users] Programming help required in Interleaving	computation+communication !"</a>
<li><strong>Previous message:</strong> <a href="11280.php">Atle Rudshaug: "Re: [OMPI users] Help tracing casue of readv errors"</a>
<li><strong>In reply to:</strong> <a href="11280.php">Atle Rudshaug: "Re: [OMPI users] Help tracing casue of readv errors"</a>
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
