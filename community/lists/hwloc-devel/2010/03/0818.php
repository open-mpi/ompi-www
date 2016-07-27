<?
$subject_val = "Re: [hwloc-devel] Attribute unsed not regognized";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 26 14:03:48 2010" -->
<!-- isoreceived="20100326180348" -->
<!-- sent="Fri, 26 Mar 2010 19:03:42 +0100" -->
<!-- isosent="20100326180342" -->
<!-- name="Bert Wesarg" -->
<!-- email="bert.wesarg_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Attribute unsed not regognized" -->
<!-- id="36ca99e91003261103t761f8759rbb1ac81f10cb9ce2_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="20100326144936.GW31139_at_const.bordeaux.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Attribute unsed not regognized<br>
<strong>From:</strong> Bert Wesarg (<em>bert.wesarg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-26 14:03:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0819.php">Jeff Squyres: "Re: [hwloc-devel] Strange difference"</a>
<li><strong>Previous message:</strong> <a href="0817.php">Brice Goglin: "Re: [hwloc-devel] Strange difference"</a>
<li><strong>In reply to:</strong> <a href="0806.php">Samuel Thibault: "Re: [hwloc-devel] Attribute unsed not regognized"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Mar 26, 2010 at 15:49, Samuel Thibault &lt;samuel.thibault_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Bert Wesarg, le Fri 26 Mar 2010 11:09:05 +0100, a &#195;&#169;crit :
</span><br>
<span class="quotelev2">&gt;&gt; AFAIK the correct usage would be:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;int square(int __attribute__ ((__unused__)) arg1, int arg2) {
</span><br>
<span class="quotelev2">&gt;&gt; return arg2; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I.e. the attribute is between type and name.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you have a reference on this? &#194;&#160;For variables, the gcc manual always
</span><br>
<span class="quotelev1">&gt; puts them after the name, and in the source code of gcc itself I see it
</span><br>
<span class="quotelev1">&gt; there almost all the time... Also, there is an issue with e.g.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; void f(void * __attribute__((unused)) p) {
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The following
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; void f(void __attribute__((unused)) * p) {
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; does pass, but looks odd to me: it's not the data pointed by p that we
</span><br>
<span class="quotelev1">&gt; want to qualify as unused... Which ones of the above pass with your gcc?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Configured with: ../src/configure -v --with-pkgversion='Ubuntu
</span><br>
<span class="quotelev2">&gt;&gt; 4.4.1-4ubuntu9'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#226;&#130;&#172; gcc --version
</span><br>
<span class="quotelev1">&gt; gcc (Debian 4.4.2-9) 4.4.3 20100108 (prerelease)
</span><br>
<span class="quotelev1">&gt; &#226;&#130;&#172; gcc --version
</span><br>
<span class="quotelev1">&gt; gcc (Debian 4.3.4-5) 4.3.4
</span><br>
<span class="quotelev1">&gt; &#226;&#130;&#172; gcc-4.5 --version
</span><br>
<span class="quotelev1">&gt; gcc-4.5 (Debian 4.5-20100202-1) 4.5.0 20100202 (experimental) [trunk revision 156452]
</span><br>
<span class="quotelev1">&gt; $ gcc --version
</span><br>
<span class="quotelev1">&gt; gcc (GCC) 3.4.6 &#194;&#160; &#194;&#160; (on solaris)
</span><br>
<span class="quotelev1">&gt; $ gcc --version
</span><br>
<span class="quotelev1">&gt; gcc (GCC) 4.1.2 20080704 (Red Hat 4.1.2-46)
</span><br>
<span class="quotelev1">&gt; $ gcc --version
</span><br>
<span class="quotelev1">&gt; gcc (GCC) 4.0.2 &#194;&#160; &#194;&#160; (on AIX)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; All these don't have any problem with the above. &#194;&#160;This really looks
</span><br>
<span class="quotelev1">&gt; to me like a bug introduced by Ubuntu, probably along their agressive
</span><br>
<span class="quotelev1">&gt; fortifying policies.
</span><br>
<p>Thanks, I will look into this and send it to the ubuntu maintainer.
<br>
<p>Bert
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Samuel
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0819.php">Jeff Squyres: "Re: [hwloc-devel] Strange difference"</a>
<li><strong>Previous message:</strong> <a href="0817.php">Brice Goglin: "Re: [hwloc-devel] Strange difference"</a>
<li><strong>In reply to:</strong> <a href="0806.php">Samuel Thibault: "Re: [hwloc-devel] Attribute unsed not regognized"</a>
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
