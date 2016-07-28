<?
$subject_val = "Re: [hwloc-devel] Attribute unsed not regognized";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 26 10:49:42 2010" -->
<!-- isoreceived="20100326144942" -->
<!-- sent="Fri, 26 Mar 2010 15:49:36 +0100" -->
<!-- isosent="20100326144936" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Attribute unsed not regognized" -->
<!-- id="20100326144936.GW31139_at_const.bordeaux.inria.fr" -->
<!-- charset="iso-8859-15" -->
<!-- inreplyto="36ca99e91003260309p6a2cbd78nc8513c225d5fd235_at_mail.gmail.com" -->
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
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-26 10:49:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0807.php">Brice Goglin: "Re: [hwloc-devel] Strange difference"</a>
<li><strong>Previous message:</strong> <a href="0805.php">Jeff Squyres: "[hwloc-devel] Strange difference"</a>
<li><strong>In reply to:</strong> <a href="0795.php">Bert Wesarg: "[hwloc-devel] Attribute unsed not regognized"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0809.php">Samuel Thibault: "Re: [hwloc-devel] Attribute unsed not regognized"</a>
<li><strong>Reply:</strong> <a href="0809.php">Samuel Thibault: "Re: [hwloc-devel] Attribute unsed not regognized"</a>
<li><strong>Reply:</strong> <a href="0818.php">Bert Wesarg: "Re: [hwloc-devel] Attribute unsed not regognized"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Bert Wesarg, le Fri 26 Mar 2010 11:09:05 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; AFAIK the correct usage would be:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;          int square(int __attribute__ ((__unused__)) arg1, int arg2) {
</span><br>
<span class="quotelev1">&gt; return arg2; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I.e. the attribute is between type and name.
</span><br>
<p>Do you have a reference on this?  For variables, the gcc manual always
<br>
puts them after the name, and in the source code of gcc itself I see it
<br>
there almost all the time... Also, there is an issue with e.g.
<br>
<p>void f(void * __attribute__((unused)) p) {
<br>
}
<br>
<p>The following
<br>
<p>void f(void __attribute__((unused)) * p) {
<br>
}
<br>
<p>does pass, but looks odd to me: it's not the data pointed by p that we
<br>
want to qualify as unused... Which ones of the above pass with your gcc?
<br>
<p><span class="quotelev1">&gt; Configured with: ../src/configure -v --with-pkgversion='Ubuntu
</span><br>
<span class="quotelev1">&gt; 4.4.1-4ubuntu9'
</span><br>
<p>&#164; gcc --version
<br>
gcc (Debian 4.4.2-9) 4.4.3 20100108 (prerelease)
<br>
&#164; gcc --version
<br>
gcc (Debian 4.3.4-5) 4.3.4
<br>
&#164; gcc-4.5 --version
<br>
gcc-4.5 (Debian 4.5-20100202-1) 4.5.0 20100202 (experimental) [trunk revision 156452]
<br>
$ gcc --version
<br>
gcc (GCC) 3.4.6     (on solaris)
<br>
$ gcc --version
<br>
gcc (GCC) 4.1.2 20080704 (Red Hat 4.1.2-46)
<br>
$ gcc --version
<br>
gcc (GCC) 4.0.2     (on AIX)
<br>
<p>All these don't have any problem with the above.  This really looks
<br>
to me like a bug introduced by Ubuntu, probably along their agressive
<br>
fortifying policies.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0807.php">Brice Goglin: "Re: [hwloc-devel] Strange difference"</a>
<li><strong>Previous message:</strong> <a href="0805.php">Jeff Squyres: "[hwloc-devel] Strange difference"</a>
<li><strong>In reply to:</strong> <a href="0795.php">Bert Wesarg: "[hwloc-devel] Attribute unsed not regognized"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0809.php">Samuel Thibault: "Re: [hwloc-devel] Attribute unsed not regognized"</a>
<li><strong>Reply:</strong> <a href="0809.php">Samuel Thibault: "Re: [hwloc-devel] Attribute unsed not regognized"</a>
<li><strong>Reply:</strong> <a href="0818.php">Bert Wesarg: "Re: [hwloc-devel] Attribute unsed not regognized"</a>
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
