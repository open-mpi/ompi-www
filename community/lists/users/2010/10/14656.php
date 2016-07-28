<?
$subject_val = "Re: [OMPI users] mixed versions of openmpi ? (1.4.1 and 1.4.3)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 29 12:54:15 2010" -->
<!-- isoreceived="20101029165415" -->
<!-- sent="Fri, 29 Oct 2010 18:54:35 +0200" -->
<!-- isosent="20101029165435" -->
<!-- name="guillaume ranquet" -->
<!-- email="guillaume.ranquet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mixed versions of openmpi ? (1.4.1 and 1.4.3)" -->
<!-- id="4CCAFC4B.2050105_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="A31B6FEA-F133-4FB6-8C79-F3231CE397DA_at_staff.uni-marburg.de" -->
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
<strong>From:</strong> guillaume ranquet (<em>guillaume.ranquet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-29 12:54:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14657.php">Reuti: "Re: [OMPI users] mixed versions of openmpi ? (1.4.1 and 1.4.3)"</a>
<li><strong>Previous message:</strong> <a href="14655.php">Jeff Squyres: "Re: [OMPI users] mixed versions of openmpi ? (1.4.1 and 1.4.3)"</a>
<li><strong>In reply to:</strong> <a href="14654.php">Reuti: "Re: [OMPI users] mixed versions of openmpi ? (1.4.1 and 1.4.3)"</a>
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
<p>I guess we will play it safe and upgrade every cluster at once so that
<br>
we won't get bad surprises.
<br>
<p>thank you Jeff.
<br>
On 10/29/2010 06:40 PM, Reuti wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Am 29.10.2010 um 18:27 schrieb Jeff Squyres:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'd have to go check 1.4.3 and 1.4.1 to be sure, but I would generally *NOT* assume that different versions like this are compatible.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm getting confused, as these versions are exactly fitting &quot;x.(y+1).*&quot; which you mention below. So they should work together by design.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI makes an ABI promise (that started with version 1.3.2) that all the releases in a given feature series and its corresponding super-stable series (i.e., x.y.* and x.(y+1).*, where y is odd) are ABI compatible.  But we make no guarantees about wire protocols being compatible, or other things like that.  
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So in general, it's &quot;pleasantly surprising&quot; if the different releases work together, but I wouldn't rely on it *at all*.  :-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<p>If I get it well, ABI compatible means something compiled with x.y.*
<br>
will run on x.y+1.* without the need for you to recompile.
<br>
mixing x.y and x.y+1 on the same machinefile (and that's what we are
<br>
talking about) can only work by accident, not by design.
<br>
<p><span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 29, 2010, at 12:12 PM, guillaume ranquet wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p>-----BEGIN PGP SIGNATURE-----
<br>
Version: GnuPG v2.0.16 (GNU/Linux)
<br>
Comment: Using GnuPG with Mozilla - <a href="http://enigmail.mozdev.org/">http://enigmail.mozdev.org/</a>
<br>
<p>iQEcBAEBAgAGBQJMyvxLAAoJEEzIl7PMEAliTnoH/R4GhehUiFZo6eeSh/Rv9KJc
<br>
ZhAJIRTFH0z7+R2V4ggDyIWFVEv0mktQq/WEqQTbGNyVVvhWVFjCxrI7deZ+FkZS
<br>
EFv9oIlKM6gNR+cFdoN4xW4ZfiIoCTGddG6XOxLXkZQnhaG30s5UUmIuoBLvgQhb
<br>
mTq43WdEPpWsSuyMzo48hizT1PFqpPR101ITnIa2y4T5FC5QktJhbp85HbPaNE2Z
<br>
ej7kwXcgLEnTDk9wF4rZRah8vdIdtxwghwGhytVLqMFBCB4MR8hWMYTakJbIOt/7
<br>
GkFtOv0D7hruHhl9dNk+o8VyHMQq6bzlqs3UdQxW1Hx1N2w0ngHK6fzfUnYRVVY=
<br>
=TsJh
<br>
-----END PGP SIGNATURE-----
<br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14656/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14657.php">Reuti: "Re: [OMPI users] mixed versions of openmpi ? (1.4.1 and 1.4.3)"</a>
<li><strong>Previous message:</strong> <a href="14655.php">Jeff Squyres: "Re: [OMPI users] mixed versions of openmpi ? (1.4.1 and 1.4.3)"</a>
<li><strong>In reply to:</strong> <a href="14654.php">Reuti: "Re: [OMPI users] mixed versions of openmpi ? (1.4.1 and 1.4.3)"</a>
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
