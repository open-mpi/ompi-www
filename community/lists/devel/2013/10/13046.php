<?
$subject_val = "[OMPI devel] 1.6.5 large matrix test doesn't pass (decode) ?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  4 01:42:36 2013" -->
<!-- isoreceived="20131004054236" -->
<!-- sent="Fri, 04 Oct 2013 15:42:31 +1000" -->
<!-- isosent="20131004054231" -->
<!-- name="Christopher Samuel" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.6.5 large matrix test doesn't pass (decode) ?" -->
<!-- id="524E5547.6020006_at_unimelb.edu.au" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] 1.6.5 large matrix test doesn't pass (decode) ?<br>
<strong>From:</strong> Christopher Samuel (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-04 01:42:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13047.php">Jeff Squyres (jsquyres): "[OMPI devel] Please check 1.7.3 NEWS bullets"</a>
<li><strong>Previous message:</strong> <a href="13045.php">George Bosilca: "Re: [OMPI devel] &quot;make check&quot; failure in opal_datatype_test (v1.6.5)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13054.php">KAWASHIMA Takahiro: "Re: [OMPI devel] 1.6.5 large matrix test doesn't pass (decode) ?"</a>
<li><strong>Reply:</strong> <a href="13054.php">KAWASHIMA Takahiro: "Re: [OMPI devel] 1.6.5 large matrix test doesn't pass (decode) ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>Not sure if this is important, or expected, but I ran a make check out
<br>
of interest after seeing recent emails and saw the final one of these
<br>
tests be reported as &quot;NOT PASSED&quot; (it seems to be the only failure).
<br>
<p>No idea if this is important or not.  The text I see is:
<br>
<p>&nbsp;#
<br>
&nbsp;* TEST UPPER MATRIX
<br>
&nbsp;#
<br>
<p>test upper matrix
<br>
complete raw in 7 microsec
<br>
decode [NOT PASSED]
<br>
<p><p>This happens on both our Nehalem and SandyBridge clusters and we are
<br>
building with the system GCC.  I've attached the full log from our
<br>
Nehalem cluster (RHEL 6.4).
<br>
<p><p>Our configure script is:
<br>
<p>#!/bin/bash
<br>
<p>BASE=`basename $PWD | sed -e s,-,/,`
<br>
<p>module purge
<br>
<p>./configure --prefix=/usr/local/${BASE} --with-slurm --with-openib \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-static  --enable-shared
<br>
<p>make -j
<br>
<p><p>I'm away on leave next week (first break for a year, yay!) but back
<br>
the week after..
<br>
<p>All the best,
<br>
Chris
<br>
- -- 
<br>
&nbsp;Christopher Samuel        Senior Systems Administrator
<br>
&nbsp;VLSCI - Victorian Life Sciences Computation Initiative
<br>
&nbsp;Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
<br>
&nbsp;<a href="http://www.vlsci.org.au/">http://www.vlsci.org.au/</a>      <a href="http://twitter.com/vlsci">http://twitter.com/vlsci</a>
<br>
<p>-----BEGIN PGP SIGNATURE-----
<br>
Version: GnuPG v1.4.12 (GNU/Linux)
<br>
Comment: Using GnuPG with Thunderbird - <a href="http://www.enigmail.net/">http://www.enigmail.net/</a>
<br>
<p>iEYEARECAAYFAlJOVUcACgkQO2KABBYQAh+J/QCfX+U1kZvtgFL1UxyIZBbNdqyW
<br>
PC4An2AciGo2BkOq5RnceDYjACcUsV7X
<br>
=0VKJ
<br>
-----END PGP SIGNATURE-----
<br>
<p>
<br><hr>
<ul>
<li>text/x-log attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13046/1.6.5-make-check.log">1.6.5-make-check.log</a>
</ul>
<!-- attachment="1.6.5-make-check.log" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13047.php">Jeff Squyres (jsquyres): "[OMPI devel] Please check 1.7.3 NEWS bullets"</a>
<li><strong>Previous message:</strong> <a href="13045.php">George Bosilca: "Re: [OMPI devel] &quot;make check&quot; failure in opal_datatype_test (v1.6.5)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13054.php">KAWASHIMA Takahiro: "Re: [OMPI devel] 1.6.5 large matrix test doesn't pass (decode) ?"</a>
<li><strong>Reply:</strong> <a href="13054.php">KAWASHIMA Takahiro: "Re: [OMPI devel] 1.6.5 large matrix test doesn't pass (decode) ?"</a>
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
