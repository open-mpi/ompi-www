<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug 27 19:38:47 2007" -->
<!-- isoreceived="20070827233847" -->
<!-- sent="Mon, 27 Aug 2007 19:38:30 -0400" -->
<!-- isosent="20070827233830" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] &amp;amp;find() broken?" -->
<!-- id="EDABCF9A-8D63-4BDC-A26E-4AB9E8F8CF36_at_cisco.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-27 19:38:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2237.php">Jeff Squyres: "Re: [OMPI devel] &amp;find() broken?"</a>
<li><strong>Previous message:</strong> <a href="2235.php">Ralf Wildenhues: "Re: [OMPI devel] Trunk issue?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2237.php">Jeff Squyres: "Re: [OMPI devel] &amp;find() broken?"</a>
<li><strong>Reply:</strong> <a href="2237.php">Jeff Squyres: "Re: [OMPI devel] &amp;find() broken?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ethan --
<br>
<p>You said to me in IM:
<br>
<p>&quot;i'm getting stuck trying to use MTT::Functions::find. it's returning  
<br>
EVERY file under the directory i give it.&quot;
<br>
<p>Can you cite a specific example?  Is this on the jms-new-parser branch?
<br>
<p>Keep in mind that you need to supply a *perl* regexp (not a shell  
<br>
regexp).  For example:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;argv = -i &amp;find(&quot;coll_.+.ski&quot;, &quot;input_files&quot;)
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
<li><strong>Next message:</strong> <a href="2237.php">Jeff Squyres: "Re: [OMPI devel] &amp;find() broken?"</a>
<li><strong>Previous message:</strong> <a href="2235.php">Ralf Wildenhues: "Re: [OMPI devel] Trunk issue?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2237.php">Jeff Squyres: "Re: [OMPI devel] &amp;find() broken?"</a>
<li><strong>Reply:</strong> <a href="2237.php">Jeff Squyres: "Re: [OMPI devel] &amp;find() broken?"</a>
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
