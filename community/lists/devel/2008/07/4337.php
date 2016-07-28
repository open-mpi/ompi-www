<?
$subject_val = "Re: [OMPI devel] IBCM error";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 14 07:09:47 2008" -->
<!-- isoreceived="20080714110947" -->
<!-- sent="Mon, 14 Jul 2008 07:09:42 -0400" -->
<!-- isosent="20080714110942" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] IBCM error" -->
<!-- id="70ABBCB0-D542-41FE-9A92-797F5FAED5AF_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="453d39990807140059t3061a6d6i4def07279d3c83ae_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] IBCM error<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-14 07:09:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4338.php">Pavel Shamis (Pasha): "Re: [OMPI devel] IBCM error"</a>
<li><strong>Previous message:</strong> <a href="4336.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<li><strong>In reply to:</strong> <a href="4335.php">Lenny Verkhovsky: "Re: [OMPI devel] IBCM error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4338.php">Pavel Shamis (Pasha): "Re: [OMPI devel] IBCM error"</a>
<li><strong>Reply:</strong> <a href="4338.php">Pavel Shamis (Pasha): "Re: [OMPI devel] IBCM error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 14, 2008, at 3:59 AM, Lenny Verkhovsky wrote:
<br>
<p><span class="quotelev1">&gt; Seems to be fixed.
</span><br>
<p>Well, it's &quot;fixed&quot; in that Pasha turned off the error message.  But  
<br>
the same issue is undoubtedly happening.
<br>
<p>I was asking for something a little stronger: perhaps we should  
<br>
actually have IBCM not try to be used unless it's specifically asked  
<br>
for.  Or maybe it shouldn't even build itself unless specifically  
<br>
asked for (which would obviously take care of the run-time issues as  
<br>
well).
<br>
<p>The whole point of doing IBCM was to have a simple and fast mechanism  
<br>
for IB wireup.  But with these two problems (IBCM not properly  
<br>
installed on all systems, and ib_cm_listen() fails periodically), it  
<br>
more or less makes it unusable.  Therefore we shouldn't recommend it  
<br>
to production customers, and per precedent elsewhere in the code base,  
<br>
we should either not build it by default and/or not use it unless  
<br>
specifically asked for.
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
<li><strong>Next message:</strong> <a href="4338.php">Pavel Shamis (Pasha): "Re: [OMPI devel] IBCM error"</a>
<li><strong>Previous message:</strong> <a href="4336.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<li><strong>In reply to:</strong> <a href="4335.php">Lenny Verkhovsky: "Re: [OMPI devel] IBCM error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4338.php">Pavel Shamis (Pasha): "Re: [OMPI devel] IBCM error"</a>
<li><strong>Reply:</strong> <a href="4338.php">Pavel Shamis (Pasha): "Re: [OMPI devel] IBCM error"</a>
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
