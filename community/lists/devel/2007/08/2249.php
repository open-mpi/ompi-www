<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug 28 14:50:59 2007" -->
<!-- isoreceived="20070828185059" -->
<!-- sent="Tue, 28 Aug 2007 14:50:30 -0400" -->
<!-- isosent="20070828185030" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Patch for reporter and friends" -->
<!-- id="2DA2DDB4-2D67-4F56-B17E-268F22E46331_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="7AF120E9-BC53-4E09-BC1A-A6A6F20AA48D_at_cisco.com" -->
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
<strong>Date:</strong> 2007-08-28 14:50:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2250.php">Andrew Friedley: "[OMPI devel] UD BTL alltoall hangs"</a>
<li><strong>Previous message:</strong> <a href="2248.php">Jeff Squyres: "[OMPI devel] Patch for reporter and friends"</a>
<li><strong>In reply to:</strong> <a href="2248.php">Jeff Squyres: "[OMPI devel] Patch for reporter and friends"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
@#$%@#$%
<br>
<p>Sorry; I keep sending to devel instead of mtt-devel.
<br>
<p>On Aug 28, 2007, at 2:48 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Attached is a patch for the PHP side of things that does the  
</span><br>
<span class="quotelev1">&gt; following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  * Creates a config.inc file for centralization of various user- 
</span><br>
<span class="quotelev1">&gt; settable parameters:
</span><br>
<span class="quotelev1">&gt;    * HTTP username/password for curl (passwords still protected;  
</span><br>
<span class="quotelev1">&gt; see code)
</span><br>
<span class="quotelev1">&gt;    * MTT database name/username/password
</span><br>
<span class="quotelev1">&gt;    * HTML header / footer
</span><br>
<span class="quotelev1">&gt;    * Google Analytics account number
</span><br>
<span class="quotelev1">&gt;  * Use the config.inc values in reporter, stats, and submit
</span><br>
<span class="quotelev1">&gt;  * Preliminary GA integration; if GA account number set in config.inc:
</span><br>
<span class="quotelev1">&gt;    * Report actual reporter URL
</span><br>
<span class="quotelev1">&gt;    * Report stats URL
</span><br>
<span class="quotelev1">&gt;    * Note that submits are not tracked by GA because the MTT client  
</span><br>
<span class="quotelev1">&gt; does not understand javascript
</span><br>
<span class="quotelev1">&gt;  * Moved &quot;deny_mirror&quot; functionality out of report.inc to  
</span><br>
<span class="quotelev1">&gt; config.inc because it's very www.open-mpi.org-specific
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;mtt-php.patch&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="2250.php">Andrew Friedley: "[OMPI devel] UD BTL alltoall hangs"</a>
<li><strong>Previous message:</strong> <a href="2248.php">Jeff Squyres: "[OMPI devel] Patch for reporter and friends"</a>
<li><strong>In reply to:</strong> <a href="2248.php">Jeff Squyres: "[OMPI devel] Patch for reporter and friends"</a>
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
