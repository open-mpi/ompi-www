<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29615 - in trunk: . contrib contrib/dist/linux debian debian/source";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  6 18:07:50 2013" -->
<!-- isoreceived="20131106230750" -->
<!-- sent="Wed, 6 Nov 2013 15:07:45 -0800" -->
<!-- isosent="20131106230745" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29615 - in trunk: . contrib contrib/dist/linux debian debian/source" -->
<!-- id="712E1FA0-51CC-428E-9988-802E12D35CCD_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="527AC963.3010705_at_unimelb.edu.au" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29615 - in trunk: . contrib contrib/dist/linux debian debian/source<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-06 18:07:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13215.php">Sylvestre Ledru: "Re: [OMPI devel] debian/ directory"</a>
<li><strong>Previous message:</strong> <a href="13213.php">Christopher Samuel: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29615 - in trunk: . contrib contrib/dist/linux debian debian/source"</a>
<li><strong>In reply to:</strong> <a href="13213.php">Christopher Samuel: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29615 - in trunk: . contrib contrib/dist/linux debian debian/source"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13216.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r29615 - in trunk: . contrib contrib/dist/linux debian debian/source"</a>
<li><strong>Reply:</strong> <a href="13216.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r29615 - in trunk: . contrib contrib/dist/linux debian debian/source"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Afraid I couldn't parse that debian link - no idea what any of it meant, and there was no identified problem listed there.
<br>
<p>My concern here is that we seem to be putting something in the OMPI code base that has nothing to do with OMPI itself. Debian has had an OMPI package for awhile now, and inserting the required infrastructure to create the desired package is part of that game. I have yet to see an explanation for what changed at their level that now requires a change at ours, so perhaps that would have been the place to start.
<br>
<p>Can someone explain what happened at the Debian packaging level? Maybe a directory is now required, or maybe some other solution would be better/appropriate.
<br>
<p><p><p>On Nov 6, 2013, at 2:57 PM, Christopher Samuel &lt;samuel_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; -----BEGIN PGP SIGNED MESSAGE-----
</span><br>
<span class="quotelev1">&gt; Hash: SHA1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 07/11/13 04:40, Mike Dubman wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I did not find debian packaging files in the OMPI tree, could you please
</span><br>
<span class="quotelev2">&gt;&gt; point me to it?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As Sylvestre explained Debian (and presumably Ubuntu too) will
</span><br>
<span class="quotelev1">&gt; automatically delete any /debian/ directory in an upstream tarball
</span><br>
<span class="quotelev1">&gt; and substitute their own packaging.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can see what they put in for sid (testing) here:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://ftp.de.debian.org/debian/pool/main/o/openmpi/openmpi_1.6.5-5.debian.tar.gz">http://ftp.de.debian.org/debian/pool/main/o/openmpi/openmpi_1.6.5-5.debian.tar.gz</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Whilst I can understand the enthusiasm I don't think it's
</span><br>
<span class="quotelev1">&gt; going to be very helpful to Debian; perhaps a better way to
</span><br>
<span class="quotelev1">&gt; assist would be to help out Sylvestre and the other Debian
</span><br>
<span class="quotelev1">&gt; maintainers?  This might be a handy place to start:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://qa.debian.org/developer.php?login=pkg-openmpi-maintainers%40lists.alioth.debian.org">http://qa.debian.org/developer.php?login=pkg-openmpi-maintainers%40lists.alioth.debian.org</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; All the best,
</span><br>
<span class="quotelev1">&gt; Chris
</span><br>
<span class="quotelev1">&gt; - -- 
</span><br>
<span class="quotelev1">&gt; Christopher Samuel        Senior Systems Administrator
</span><br>
<span class="quotelev1">&gt; VLSCI - Victorian Life Sciences Computation Initiative
</span><br>
<span class="quotelev1">&gt; Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
</span><br>
<span class="quotelev1">&gt; <a href="http://www.vlsci.org.au/">http://www.vlsci.org.au/</a>      <a href="http://twitter.com/vlsci">http://twitter.com/vlsci</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----BEGIN PGP SIGNATURE-----
</span><br>
<span class="quotelev1">&gt; Version: GnuPG v1.4.14 (GNU/Linux)
</span><br>
<span class="quotelev1">&gt; Comment: Using GnuPG with Thunderbird - <a href="http://www.enigmail.net/">http://www.enigmail.net/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; iEYEARECAAYFAlJ6yWMACgkQO2KABBYQAh/3pwCghbRhvVYPa5WV9XmcLzMQbCQB
</span><br>
<span class="quotelev1">&gt; mxsAn3LKsvax6RyiRtAj3Zag9yynEoe6
</span><br>
<span class="quotelev1">&gt; =sH/h
</span><br>
<span class="quotelev1">&gt; -----END PGP SIGNATURE-----
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13215.php">Sylvestre Ledru: "Re: [OMPI devel] debian/ directory"</a>
<li><strong>Previous message:</strong> <a href="13213.php">Christopher Samuel: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29615 - in trunk: . contrib contrib/dist/linux debian debian/source"</a>
<li><strong>In reply to:</strong> <a href="13213.php">Christopher Samuel: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29615 - in trunk: . contrib contrib/dist/linux debian debian/source"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13216.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r29615 - in trunk: . contrib contrib/dist/linux debian debian/source"</a>
<li><strong>Reply:</strong> <a href="13216.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r29615 - in trunk: . contrib contrib/dist/linux debian debian/source"</a>
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
