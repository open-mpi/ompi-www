<?
$subject_val = "Re: [OMPI devel] RFC: Remove autogen.sh sym link";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  8 07:03:09 2014" -->
<!-- isoreceived="20140508110309" -->
<!-- sent="Thu, 08 May 2014 07:04:36 -0400" -->
<!-- isosent="20140508110436" -->
<!-- name="Stephen Poole" -->
<!-- email="swpoole_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Remove autogen.sh sym link" -->
<!-- id="536B64C4.6000906_at_gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="DCF2990E-73E4-4766-924E-F632F7E9F83F_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Remove autogen.sh sym link<br>
<strong>From:</strong> Stephen Poole (<em>swpoole_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-08 07:04:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14752.php">Ashley Pittman: "Re: [OMPI devel] RFC: Remove autogen.sh sym link"</a>
<li><strong>Previous message:</strong> <a href="14750.php">Joshua Ladd: "Re: [OMPI devel] RFC: Remove autogen.sh sym link"</a>
<li><strong>In reply to:</strong> <a href="14749.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: Remove autogen.sh sym link"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14752.php">Ashley Pittman: "Re: [OMPI devel] RFC: Remove autogen.sh sym link"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>+1
<br>
<p>Best
<br>
Steve...
<br>
<p><p>On 5/8/14, 6:08 AM, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; WHAT: Remove the backwards-compatibility autogen.sh sym link
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHY: Because it's time
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHERE: svn rm autogen.sh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; TIMEOUT: Teleconf next Tuesday, 13 May 2014
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MORE DETAIL:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We converted from autogen.sh to autogen.pl nearly 4 years ago
</span><br>
(2010-09-17).  The autogen.sh-&gt;autogen.pl sym link was put in shortly
<br>
thereafter as a stopgap measure to give people time to update their
<br>
automated scripts from autogen.sh to autogen.pl (or better yet, test and
<br>
see which name they should invoke).
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Every time I type &quot;./au&lt;tab&gt;&quot;, it stops at &quot;./autogen.&quot;, which is just
</span><br>
annoying.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It's been nearly 4 years.  I think it's time to cut the cord: remove
</span><br>
the autogen.sh sym link and move on.
<br>
<span class="quotelev1">&gt;
</span><br>
<p>-----BEGIN PGP SIGNATURE-----
<br>
Version: GnuPG/MacGPG2 v2.0.22 (Darwin)
<br>
Comment: GPGTools - <a href="http://gpgtools.org">http://gpgtools.org</a>
<br>
Comment: Using GnuPG with Thunderbird - <a href="http://www.enigmail.net/">http://www.enigmail.net/</a>
<br>
<p>iQIcBAEBAgAGBQJTa2TCAAoJECiO+w6Set8uM5cP/RvKUK79ics4EmAFub0SZW3k
<br>
TvskGXtSEIIS8G0YsiQq8ipdPSr0IhddaAr0oQx1y/fspzPKWvSzAFr0OUn8O9OM
<br>
636obLQfYkl0Eq98JdmS8fVJvOerwR9h2COahbvuybFJaE3W/2EkwY8zmzTqAj96
<br>
q5yhAJdYu0UaXrZWcpOuX5Q6FncSyE0+PM0msWcW8VeSu8MxAbF3ooQvcst03RgJ
<br>
gFaqDc447xyY+bV0GHuPRrd1nwU9p4JJsP4mLGvseXxMuIMAVkQfMVnyElDU4qsH
<br>
ZfqrzdtXS8UmHyWLxw/Ir75ZzEpE56LySfofqAzvO9BHxSnHvYCgcc8y7+jYIg9t
<br>
r2aC3gGmLkCXObG40OuF1s+O/t+UCEc6TiEvjYTUPJRmEvbimJ5aqzP5zX8/NuyY
<br>
yWe8JwdhASvvYf9Ps+tGaKw0nbH1Xx22zB6iBd3ARTv27ifvpZccVOtNHAYLBz0w
<br>
0RHTblHNUZlt2255lZkpHcUijL+MvgwU5wEh9MTpuYwb3mkD+y7Ql8Ag6guGyn1D
<br>
/nOZ/d3t2j4DSXVCsLCKyZOhZtcQDwWi23EMjn/0xaV4gMQIiGcGqFTOX+nuBw1m
<br>
YKxnc/eb+En84l0yFjppzDq45VhBhYPYJYHHyIRAPsoT/2Cv5SEj+JcJfeL9fpZO
<br>
/ytJJoXwfxCFnBaa2fq1
<br>
=8tsu
<br>
-----END PGP SIGNATURE-----
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14752.php">Ashley Pittman: "Re: [OMPI devel] RFC: Remove autogen.sh sym link"</a>
<li><strong>Previous message:</strong> <a href="14750.php">Joshua Ladd: "Re: [OMPI devel] RFC: Remove autogen.sh sym link"</a>
<li><strong>In reply to:</strong> <a href="14749.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: Remove autogen.sh sym link"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14752.php">Ashley Pittman: "Re: [OMPI devel] RFC: Remove autogen.sh sym link"</a>
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
