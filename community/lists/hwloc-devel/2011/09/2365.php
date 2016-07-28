<?
$subject_val = "Re: [hwloc-devel] Something lighter-weight than XML?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep  5 03:58:22 2011" -->
<!-- isoreceived="20110905075822" -->
<!-- sent="Mon, 05 Sep 2011 17:58:10 +1000" -->
<!-- isosent="20110905075810" -->
<!-- name="Christopher Samuel" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Something lighter-weight than XML?" -->
<!-- id="4E648112.9080901_at_unimelb.edu.au" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C837C029-9D2B-4AAD-B6BA-859B38357AC9_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Something lighter-weight than XML?<br>
<strong>From:</strong> Christopher Samuel (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-05 03:58:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2366.php">Samuel Thibault: "Re: [hwloc-devel] xmlbuffer and xmlFree()"</a>
<li><strong>Previous message:</strong> <a href="2364.php">Brice Goglin: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<li><strong>In reply to:</strong> <a href="2351.php">Jeff Squyres: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2345.php">Marcelo Alaniz: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>On 02/09/11 19:54, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Fail enough,
</span><br>
<p>Nice Freudian slip. :-)
<br>
<p><span class="quotelev1">&gt; but do the back-end nodes have libxml?
</span><br>
<p>Apparently so..
<br>
<p>rpm --root /bgsys/drivers/ppcfloor/linux/OS -qa | grep -i xml
<br>
libxml2-2.6.23-22
<br>
<p>That's the I/O node filesystem, which is what the compute node
<br>
kernel maps I/O's back to I believe.  Mind you most people on
<br>
BG do statically linking as dynamic linking is rather new there.
<br>
<p><span class="quotelev1">&gt;  For us to do what we want, it would need to be available on
</span><br>
<span class="quotelev1">&gt; all nodes because the OMPI orted processes would be querying
</span><br>
<span class="quotelev1">&gt; hwloc for the local topology and then sending it to the &quot;head&quot;
</span><br>
<span class="quotelev1">&gt; node process (usually mpirun) for further analysis and process
</span><br>
<span class="quotelev1">&gt; mapping.
</span><br>
<p>Umm, not sure that'll work on a BG because you can't fork() or
<br>
execve() on a BG, the IBM mpirun runs on the login node and talks
<br>
to an mpirund on the service node which then launches the users
<br>
code on the compute nodes via the Navigator API.
<br>
<p>cheers,
<br>
Chris
<br>
- -- 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Christopher Samuel - Senior Systems Administrator
<br>
&nbsp;VLSCI - Victorian Life Sciences Computation Initiative
<br>
&nbsp;Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.vlsci.unimelb.edu.au/">http://www.vlsci.unimelb.edu.au/</a>
<br>
<p>-----BEGIN PGP SIGNATURE-----
<br>
Version: GnuPG v1.4.11 (GNU/Linux)
<br>
Comment: Using GnuPG with Mozilla - <a href="http://enigmail.mozdev.org/">http://enigmail.mozdev.org/</a>
<br>
<p>iEYEARECAAYFAk5kgRIACgkQO2KABBYQAh+EHgCfQhsNl5axcV+tHQ6jrAJW6Pq6
<br>
6EQAn3Dc4qkwoRd23KimXh9rrO0CKz9n
<br>
=xlWv
<br>
-----END PGP SIGNATURE-----
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2366.php">Samuel Thibault: "Re: [hwloc-devel] xmlbuffer and xmlFree()"</a>
<li><strong>Previous message:</strong> <a href="2364.php">Brice Goglin: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<li><strong>In reply to:</strong> <a href="2351.php">Jeff Squyres: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2345.php">Marcelo Alaniz: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
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
