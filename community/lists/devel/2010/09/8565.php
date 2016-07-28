<?
$subject_val = "Re: [OMPI devel] Autogen.pl, romio and autoconf 2.66";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 28 19:35:53 2010" -->
<!-- isoreceived="20100928233553" -->
<!-- sent="Tue, 28 Sep 2010 19:35:47 -0400" -->
<!-- isosent="20100928233547" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Autogen.pl, romio and autoconf 2.66" -->
<!-- id="09FE7FEB-1429-49CC-893E-D1449F095BD6_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="3CEB9470-EC2B-418F-93D9-55C1E5A5978A_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Autogen.pl, romio and autoconf 2.66<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-28 19:35:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8566.php">Jeff Squyres: "[OMPI devel] 1.5rc7 is now out"</a>
<li><strong>Previous message:</strong> <a href="8564.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] Autogen.pl, romio and autoconf 2.66"</a>
<li><strong>In reply to:</strong> <a href="8564.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] Autogen.pl, romio and autoconf 2.66"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 28, 2010, at 6:27 PM, Aur&#233;lien Bouteiller wrote:
<br>
<p><span class="quotelev3">&gt;&gt;&gt; This looks like Libtool or Automake isn't installed properly...?
</span><br>
<span class="quotelev1">&gt; You were right on that one. The system provided automake on Kraken is broken. Fixed by installing my own. 
</span><br>
<p>Keep in mind (from HACKING):
<br>
<p>2. Build and install the tools in the following order:
<br>
<p>&nbsp;&nbsp;&nbsp;2a. m4
<br>
&nbsp;&nbsp;&nbsp;2b. Autoconf
<br>
&nbsp;&nbsp;&nbsp;2c. Automake
<br>
&nbsp;&nbsp;&nbsp;2d. Libtool
<br>
<p>3. You MUST install all four tools into the same prefix directory.
<br>
&nbsp;&nbsp;&nbsp;These four tools are somewhat inter-related, and if they're going
<br>
&nbsp;&nbsp;&nbsp;to be used together, they MUST share a common installation prefix.
<br>
<p>(actually, that's not quite true -- m4 can be elsewhere -- but the other 3 must share a common prefix)
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8566.php">Jeff Squyres: "[OMPI devel] 1.5rc7 is now out"</a>
<li><strong>Previous message:</strong> <a href="8564.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] Autogen.pl, romio and autoconf 2.66"</a>
<li><strong>In reply to:</strong> <a href="8564.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] Autogen.pl, romio and autoconf 2.66"</a>
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
