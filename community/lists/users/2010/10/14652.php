<?
$subject_val = "Re: [OMPI users] mixed versions of openmpi ? (1.4.1 and 1.4.3)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 29 12:27:17 2010" -->
<!-- isoreceived="20101029162717" -->
<!-- sent="Fri, 29 Oct 2010 12:27:12 -0400" -->
<!-- isosent="20101029162712" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mixed versions of openmpi ? (1.4.1 and 1.4.3)" -->
<!-- id="AC36D908-91E8-4471-BD71-4BE7E16E1636_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4CCAF253.1000201_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] mixed versions of openmpi ? (1.4.1 and 1.4.3)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-29 12:27:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14653.php">Eugene Loh: "Re: [OMPI users] Need Help for understand heat equation 2D mpi solving version"</a>
<li><strong>Previous message:</strong> <a href="14651.php">guillaume ranquet: "[OMPI users] mixed versions of openmpi ? (1.4.1 and 1.4.3)"</a>
<li><strong>In reply to:</strong> <a href="14651.php">guillaume ranquet: "[OMPI users] mixed versions of openmpi ? (1.4.1 and 1.4.3)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14654.php">Reuti: "Re: [OMPI users] mixed versions of openmpi ? (1.4.1 and 1.4.3)"</a>
<li><strong>Reply:</strong> <a href="14654.php">Reuti: "Re: [OMPI users] mixed versions of openmpi ? (1.4.1 and 1.4.3)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'd have to go check 1.4.3 and 1.4.1 to be sure, but I would generally *NOT* assume that different versions like this are compatible.
<br>
<p>Open MPI makes an ABI promise (that started with version 1.3.2) that all the releases in a given feature series and its corresponding super-stable series (i.e., x.y.* and x.(y+1).*, where y is odd) are ABI compatible.  But we make no guarantees about wire protocols being compatible, or other things like that.  
<br>
<p>So in general, it's &quot;pleasantly surprising&quot; if the different releases work together, but I wouldn't rely on it *at all*.  :-)
<br>
<p><p>On Oct 29, 2010, at 12:12 PM, guillaume ranquet wrote:
<br>
<p><span class="quotelev1">&gt; -----BEGIN PGP SIGNED MESSAGE-----
</span><br>
<span class="quotelev1">&gt; Hash: SHA1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi list,
</span><br>
<span class="quotelev1">&gt; I'm sorry to bother you with a stupid question.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; we intend to have for a short period of time, some nodes with 1.4.3 and
</span><br>
<span class="quotelev1">&gt; others with 1.4.1 (before upgrading everyone to 1.4.3).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I made various test and found both versions to be running together quite
</span><br>
<span class="quotelev1">&gt; well with a mixed set of nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; my tests were quite simple, I compiled and ran mpi hello_worlds with
</span><br>
<span class="quotelev1">&gt; both versions.
</span><br>
<span class="quotelev1">&gt; It wouldn't be serious for me to assume both versions fully compatible
</span><br>
<span class="quotelev1">&gt; after these tests -and I must admit I lack the time and technical
</span><br>
<span class="quotelev1">&gt; knowledge to run further testing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; has anyone any insight on what have changed that would break compatibility?
</span><br>
<span class="quotelev1">&gt; I guess nothing, since they are the same major.minor :)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; regards,
</span><br>
<span class="quotelev1">&gt; Guillaume Ranquet.
</span><br>
<span class="quotelev1">&gt; -----BEGIN PGP SIGNATURE-----
</span><br>
<span class="quotelev1">&gt; Version: GnuPG v2.0.16 (GNU/Linux)
</span><br>
<span class="quotelev1">&gt; Comment: Using GnuPG with Mozilla - <a href="http://enigmail.mozdev.org/">http://enigmail.mozdev.org/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; iQEcBAEBAgAGBQJMyvJTAAoJEEzIl7PMEAliT4kH/RY4WXhEO5R8H3DNIWW7Y91z
</span><br>
<span class="quotelev1">&gt; 6q4BrymLrBSl7rnnEgALBMiPGK9lQgqEtv9k3xCFbfOfWXIFreIHH8ZFDzt1BjQI
</span><br>
<span class="quotelev1">&gt; TZ58SwVE9CIMmESoJ1P52R+WCbKYur3U2eda//1cfnZ28ZYjnKN/xYlT/wv8hqg3
</span><br>
<span class="quotelev1">&gt; GsW+seMR8X+1nNFkH1UQHIBVO2cXaK24BtSe4cvDFaMaUbe0Qlmxg55BbCSYB4ED
</span><br>
<span class="quotelev1">&gt; VBbplp/ty0tojmZdJLqSsp7nZ84oCfvAfZf16fJTDHNYhUSvNz/fldnxWrm7WTUb
</span><br>
<span class="quotelev1">&gt; VzM94yJf0IHfNAB/YvpXECGFL9cPWeG/F6Bm+r6GSMRvd0MeLbp1HWJTbVYlCwo=
</span><br>
<span class="quotelev1">&gt; =NwEP
</span><br>
<span class="quotelev1">&gt; -----END PGP SIGNATURE-----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14653.php">Eugene Loh: "Re: [OMPI users] Need Help for understand heat equation 2D mpi solving version"</a>
<li><strong>Previous message:</strong> <a href="14651.php">guillaume ranquet: "[OMPI users] mixed versions of openmpi ? (1.4.1 and 1.4.3)"</a>
<li><strong>In reply to:</strong> <a href="14651.php">guillaume ranquet: "[OMPI users] mixed versions of openmpi ? (1.4.1 and 1.4.3)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14654.php">Reuti: "Re: [OMPI users] mixed versions of openmpi ? (1.4.1 and 1.4.3)"</a>
<li><strong>Reply:</strong> <a href="14654.php">Reuti: "Re: [OMPI users] mixed versions of openmpi ? (1.4.1 and 1.4.3)"</a>
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
