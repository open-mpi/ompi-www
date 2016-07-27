<?
$subject_val = "Re: [hwloc-devel] CMake instead of m4";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 14 06:37:13 2011" -->
<!-- isoreceived="20110214113713" -->
<!-- sent="Mon, 14 Feb 2011 06:36:56 -0500" -->
<!-- isosent="20110214113656" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] CMake instead of m4" -->
<!-- id="6D32032A-6BF9-4BA8-B89E-620C2DCA2ED6_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D58A5B0.9080909_at_unimelb.edu.au" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] CMake instead of m4<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-14 06:36:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1932.php">Jeff Squyres: "Re: [hwloc-devel] What does this C99 notation mean?"</a>
<li><strong>Previous message:</strong> <a href="1930.php">Christopher Samuel: "Re: [hwloc-devel] CMake instead of m4"</a>
<li><strong>In reply to:</strong> <a href="1930.php">Christopher Samuel: "Re: [hwloc-devel] CMake instead of m4"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Both the Autotools and CMake are fine systems. We have used the Autotools for the past several years in OMPI projects for the following reasons:
<br>
<p>- Autotools bootstrap a tarball (ie, the user does not need to have the Autotools installed), whereas CMake requires that the user have it installed. This is probably the most important issue - requiring the user have the build tool installed was a deal-breaker for us. We actually almost switched OMPI to scons a few years ago but ended up not doing so because of this. 
<br>
<p>- the Autotools people have given us *truly excellent* support over the past several years. 
<br>
<p>- the Autotools support more compilers than other solutions. 
<br>
<p>My knowledge on #1 and #3 might be a little dated, but that's what it was the last time I checked (perhaps 2-3 years ago?). 
<br>
<p>Sent from my PDA. No type good. 
<br>
<p>On Feb 13, 2011, at 10:48 PM, &quot;Christopher Samuel&quot; &lt;samuel_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; -----BEGIN PGP SIGNED MESSAGE-----
</span><br>
<span class="quotelev1">&gt; Hash: SHA1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 14/02/11 05:04, LdK wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Why don't you use CMake instead of autoconf/automake
</span><br>
<span class="quotelev2">&gt;&gt; old couple as build system ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any extra dependency that's needed for a piece of software
</span><br>
<span class="quotelev1">&gt; to be installed decreases its attractiveness to potential
</span><br>
<span class="quotelev1">&gt; users and (very important to hwloc) integrators.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The benefit to sysadmins such as myself of packages
</span><br>
<span class="quotelev1">&gt; using autotools is that they should work with whatever
</span><br>
<span class="quotelev1">&gt; the system has already and not require another package
</span><br>
<span class="quotelev1">&gt; to be installed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Whenever we come across a piece of software we need to
</span><br>
<span class="quotelev1">&gt; install here that uses CMake there's a collective sigh
</span><br>
<span class="quotelev1">&gt; of &quot;oh no, not again&quot;..
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Think of using autotools as a way of increasing your
</span><br>
<span class="quotelev1">&gt; karma by taking a little bit more pain in return for
</span><br>
<span class="quotelev1">&gt; decreasing a whole lot more sysadmins pain.. ;-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; cheers!
</span><br>
<span class="quotelev1">&gt; Chris
</span><br>
<span class="quotelev1">&gt; - -- 
</span><br>
<span class="quotelev1">&gt;    Christopher Samuel - Senior Systems Administrator
</span><br>
<span class="quotelev1">&gt; VLSCI - Victorian Life Sciences Computation Initiative
</span><br>
<span class="quotelev1">&gt; Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.vlsci.unimelb.edu.au/">http://www.vlsci.unimelb.edu.au/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----BEGIN PGP SIGNATURE-----
</span><br>
<span class="quotelev1">&gt; Version: GnuPG v1.4.10 (GNU/Linux)
</span><br>
<span class="quotelev1">&gt; Comment: Using GnuPG with Mozilla - <a href="http://enigmail.mozdev.org/">http://enigmail.mozdev.org/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; iEYEARECAAYFAk1YpbAACgkQO2KABBYQAh8kjwCeJEpjJ+qEX2nvWewyfryvoAIg
</span><br>
<span class="quotelev1">&gt; MsMAoJLDPS9aGcNkNoFzS/OcLpwvi6YV
</span><br>
<span class="quotelev1">&gt; =SI2F
</span><br>
<span class="quotelev1">&gt; -----END PGP SIGNATURE-----
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1932.php">Jeff Squyres: "Re: [hwloc-devel] What does this C99 notation mean?"</a>
<li><strong>Previous message:</strong> <a href="1930.php">Christopher Samuel: "Re: [hwloc-devel] CMake instead of m4"</a>
<li><strong>In reply to:</strong> <a href="1930.php">Christopher Samuel: "Re: [hwloc-devel] CMake instead of m4"</a>
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
