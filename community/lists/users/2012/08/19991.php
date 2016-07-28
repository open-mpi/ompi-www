<?
$subject_val = "Re: [OMPI users] pax glitch when building on Tsubame 2.0";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 23 18:27:59 2012" -->
<!-- isoreceived="20120823222759" -->
<!-- sent="Fri, 24 Aug 2012 00:27:45 +0200" -->
<!-- isosent="20120823222745" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] pax glitch when building on Tsubame 2.0" -->
<!-- id="2FB9B906-DE02-4B0D-A11A-B42E149C3130_at_staff.uni-marburg.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20120823221315.GA20681_at_neuromancer" -->
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
<strong>Subject:</strong> Re: [OMPI users] pax glitch when building on Tsubame 2.0<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-23 18:27:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19992.php">Jeff Squyres: "Re: [OMPI users] PG compilers and OpenMPI 1.6.1"</a>
<li><strong>Previous message:</strong> <a href="19990.php">Andreas Sch&#228;fer: "Re: [OMPI users] pax glitch when building on Tsubame 2.0"</a>
<li><strong>In reply to:</strong> <a href="19990.php">Andreas Sch&#228;fer: "Re: [OMPI users] pax glitch when building on Tsubame 2.0"</a>
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
<p>Am 24.08.2012 um 00:13 schrieb Andreas Sch&#228;fer:
<br>
<p><span class="quotelev1">&gt; On 00:05 Fri 24 Aug     , Reuti wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Am 23.08.2012 um 23:28 schrieb Andreas Sch&#228;fer:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for style of include used by make... GNU
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking how to create a ustar tar archive... 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ATTENTION! pax archive volume change required.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ready for archive volume: 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Input archive name or &quot;.&quot; to quit pax.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Archive name &gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; what's in config.log for this section?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; configure:6906: tardir=conftest.dir &amp;&amp; eval pax -L -x ustar -w &quot;$tardir&quot; &gt;conftest.tar
</span><br>
<span class="quotelev1">&gt; pax: Ustar header field is too small for conftest.dir
</span><br>
<span class="quotelev1">&gt; pax: Ustar header field is too small for conftest.dir/file
</span><br>
<span class="quotelev1">&gt; configure:6909: $? = 1
</span><br>
<span class="quotelev1">&gt; configure:6913: pax -r &lt;conftest.tar
</span><br>
<span class="quotelev1">&gt; pax: Cannot identify format. Searching...
</span><br>
<span class="quotelev1">&gt; pax: End of archive volume 1 reached
</span><br>
<span class="quotelev1">&gt; pax: Sorry, unable to determine archive format.
</span><br>
<p>I think the problem is already before when checking tar:
<br>
<p>configure:6906: tardir=conftest.dir &amp;&amp; eval tar --format=ustar -chf - &quot;$tardir&quot; &gt;conftest.tar
<br>
tar: value 1000036115 out of uid_t range 0..2097151
<br>
tar: Error exit delayed from previous errors
<br>
<p>- -- Reuti
<br>
-----BEGIN PGP SIGNATURE-----
<br>
Version: GnuPG/MacGPG2 v2.0.18 (Darwin)
<br>
Comment: GPGTools - <a href="http://gpgtools.org">http://gpgtools.org</a>
<br>
<p>iEYEARECAAYFAlA2rmgACgkQo/GbGkBRnRq26ACg0XcN68XOPCSfLSz6xJnBriTd
<br>
cPMAn0i2GLFPD1qEgbKvayeZsce0U4xw
<br>
=7r25
<br>
-----END PGP SIGNATURE-----
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19992.php">Jeff Squyres: "Re: [OMPI users] PG compilers and OpenMPI 1.6.1"</a>
<li><strong>Previous message:</strong> <a href="19990.php">Andreas Sch&#228;fer: "Re: [OMPI users] pax glitch when building on Tsubame 2.0"</a>
<li><strong>In reply to:</strong> <a href="19990.php">Andreas Sch&#228;fer: "Re: [OMPI users] pax glitch when building on Tsubame 2.0"</a>
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
