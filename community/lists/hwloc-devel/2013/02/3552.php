<?
$subject_val = "Re: [hwloc-devel] libpci: GPL";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 18 23:26:54 2013" -->
<!-- isoreceived="20130219042654" -->
<!-- sent="Tue, 19 Feb 2013 15:26:47 +1100" -->
<!-- isosent="20130219042647" -->
<!-- name="Christopher Samuel" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] libpci: GPL" -->
<!-- id="5122FF07.70405_at_unimelb.edu.au" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC42CC81FA_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] libpci: GPL<br>
<strong>From:</strong> Christopher Samuel (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-18 23:26:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3553.php">Christopher Samuel: "Re: [hwloc-devel] libpci: GPL"</a>
<li><strong>Previous message:</strong> <a href="3551.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.6.2rc2r5343)"</a>
<li><strong>In reply to:</strong> <a href="3489.php">Jeff Squyres (jsquyres): "[hwloc-devel] libpci: GPL"</a>
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
<p>/*
<br>
&nbsp;* Trying to catch up with email, but I've not seen the question of
<br>
&nbsp;* whether or not linking proprietary-&gt;BSD-&gt;GPL was OK or not addressed
<br>
&nbsp;* yet.
<br>
&nbsp;*/
<br>
<p>On 06/02/13 08:50, Jeff Squyres (jsquyres) wrote:
<br>
<p><span class="quotelev1">&gt; It was just pointed out to me that libpci is licensed under the GPL
</span><br>
<span class="quotelev1">&gt; (not the LGPL).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hence, even though hwloc is BSD, if it links to libpci.*, it's
</span><br>
<span class="quotelev1">&gt; tainted.
</span><br>
<p>I wouldn't say hwloc is tainted, more that you were tainting the GPL'd
<br>
code by linking the proprietary code to it, but that's just case of
<br>
perspective. ;-)
<br>
<p>After a brief search of the GPL FAQs I'd say the closest I can get is:
<br>
<p><a href="http://www.gnu.org/licenses/old-licenses/gpl-2.0-faq.html#GPLWrapper">http://www.gnu.org/licenses/old-licenses/gpl-2.0-faq.html#GPLWrapper</a>
<br>
<p># I'd like to incorporate GPL-covered software in my proprietary
<br>
# system. Can I do this by putting a &#147;wrapper&#148; module, under a
<br>
# GPL-compatible lax permissive license (such as the X11 license)
<br>
# in between the GPL-covered part and the proprietary part?
<br>
#
<br>
#    No. The X11 license is compatible with the GPL, so you can add a
<br>
# module to the GPL-covered program and put it under the X11 license.
<br>
# But if you were to incorporate them both in a larger program, that
<br>
# whole would include the GPL-covered part, so it would have to be
<br>
# licensed as a whole under the GNU GPL.
<br>
#
<br>
#     The fact that proprietary module A communicates with GPL-covered
<br>
# module C only through X11-licensed module B is legally irrelevant;
<br>
# what matters is the fact that module C is included in the whole.
<br>
<p>So yes, if you want to permit proprietary code to link to hwloc then
<br>
you need to stick to permissive licenses in hwlocs dependencies.
<br>
<p>Disclaimer: IANAL, I don't play a lawyer on TV (or the Internet),
<br>
batteries not included, caveat emptor, dates in calendar are closer
<br>
than they appear, etc, etc, etc...
<br>
<p>Of course it might be possible to ask the pciutils maintainer to split
<br>
out libpci from pciutils and LGPL it.
<br>
<p>Interestingly, Steam for Linux appears to have linked to libpci..
<br>
<p><a href="http://steamcommunity.com/app/221410/discussions/1/846938351130480716/">http://steamcommunity.com/app/221410/discussions/1/846938351130480716/</a>
<br>
<p>cheers!
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
Version: GnuPG v1.4.11 (GNU/Linux)
<br>
Comment: Using GnuPG with Thunderbird - <a href="http://www.enigmail.net/">http://www.enigmail.net/</a>
<br>
<p>iEYEARECAAYFAlEi/wcACgkQO2KABBYQAh+MyACfdd9CyGvIcIIHZD2pTvVM1ZXG
<br>
6SUAn1Yr9D4knUhld9F/fa68EzR64Xnq
<br>
=Sd+l
<br>
-----END PGP SIGNATURE-----
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3553.php">Christopher Samuel: "Re: [hwloc-devel] libpci: GPL"</a>
<li><strong>Previous message:</strong> <a href="3551.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.6.2rc2r5343)"</a>
<li><strong>In reply to:</strong> <a href="3489.php">Jeff Squyres (jsquyres): "[hwloc-devel] libpci: GPL"</a>
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
