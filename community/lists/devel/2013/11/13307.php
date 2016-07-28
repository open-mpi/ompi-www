<?
$subject_val = "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 22 20:06:16 2013" -->
<!-- isoreceived="20131123010616" -->
<!-- sent="Sat, 23 Nov 2013 12:06:15 +1100" -->
<!-- isosent="20131123010615" -->
<!-- name="Christopher Samuel" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme" -->
<!-- id="528FFF87.4070003_at_unimelb.edu.au" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="89F0872D-37D3-47E9-8574-55A05E5B929C_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme<br>
<strong>From:</strong> Christopher Samuel (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-22 20:06:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13308.php">Ralph Castain: "Re: [OMPI devel] [PATCH] Trying to get the C/R code to compile again"</a>
<li><strong>Previous message:</strong> <a href="13306.php">Christopher Samuel: "[OMPI devel] Happy Open-MPI day everyone!"</a>
<li><strong>In reply to:</strong> <a href="13286.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>On 16/11/13 02:00, Jeff Squyres (jsquyres) wrote:
<br>
<p><span class="quotelev1">&gt; This actually raises a point that MPI_T makes you read individual 
</span><br>
<span class="quotelev1">&gt; pvars separately -- there's no &quot;atomically read this array of
</span><br>
<span class="quotelev1">&gt; pvars&quot; functionality.  That could lead to inconsistent results
</span><br>
<span class="quotelev1">&gt; (e.g., first you read a network stat, and then you read an MPI
</span><br>
<span class="quotelev1">&gt; layer stat -- but under the covers, the network stat could have
</span><br>
<span class="quotelev1">&gt; changed by the time you read the MPI layer stat).  Hmm.
</span><br>
<p>I suspect there's not much of a way around this, other than pausing
<br>
all MPI operations until you've read a value back from the OS.   But
<br>
then if you want to read multiple values from the OS you're going to
<br>
be out of luck there too.   Unless I'm missing something?
<br>
<p>So perhaps the best thing is to just document this prominently.
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
Version: GnuPG v1.4.14 (GNU/Linux)
<br>
Comment: Using GnuPG with Thunderbird - <a href="http://www.enigmail.net/">http://www.enigmail.net/</a>
<br>
<p>iEYEARECAAYFAlKP/4cACgkQO2KABBYQAh/ZPwCgkdZA184I9S3q0lwzBMJAB+lM
<br>
JAIAnA5iVFlXHAdTt+au5SIgsUBJ4pka
<br>
=0mM0
<br>
-----END PGP SIGNATURE-----
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13308.php">Ralph Castain: "Re: [OMPI devel] [PATCH] Trying to get the C/R code to compile again"</a>
<li><strong>Previous message:</strong> <a href="13306.php">Christopher Samuel: "[OMPI devel] Happy Open-MPI day everyone!"</a>
<li><strong>In reply to:</strong> <a href="13286.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
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
