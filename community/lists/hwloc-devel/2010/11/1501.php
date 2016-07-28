<?
$subject_val = "Re: [hwloc-devel] PCI device location in hwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 18 17:46:54 2010" -->
<!-- isoreceived="20101118224654" -->
<!-- sent="Fri, 19 Nov 2010 09:46:48 +1100" -->
<!-- isosent="20101118224648" -->
<!-- name="Christopher Samuel" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] PCI device location in hwloc" -->
<!-- id="4CE5ACD8.7080306_at_unimelb.edu.au" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4CE53B42.50500_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] PCI device location in hwloc<br>
<strong>From:</strong> Christopher Samuel (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-18 17:46:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1502.php">Samuel Thibault: "Re: [hwloc-devel] PCI device location in hwloc"</a>
<li><strong>Previous message:</strong> <a href="1500.php">Samuel Thibault: "Re: [hwloc-devel] ***UNCHECKED*** [WARNING: A/V UNSCANNABLE]Re: hwloc-distrib --among"</a>
<li><strong>In reply to:</strong> <a href="1493.php">Brice Goglin: "Re: [hwloc-devel] PCI device location in hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1505.php">Christopher Samuel: "Re: [hwloc-devel] PCI device location in hwloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>On 19/11/10 01:42, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; Hello Chris,
</span><br>
<p>Hello!  Good to talk to you today. :-)
<br>
<p><span class="quotelev1">&gt; It's not in trunk yet. Try this branch instead:
</span><br>
<span class="quotelev1">&gt;   <a href="https://svn.open-mpi.org/svn/hwloc/branches/libpci">https://svn.open-mpi.org/svn/hwloc/branches/libpci</a>
</span><br>
<p>Wonderful, thank you!  I've attached what it shows on our
<br>
SGI Altix XE270 management node (with a dual ported IB card).
<br>
<p>Does the information occur to the right of the socket with
<br>
the closest distance to the devices ?
<br>
<p><span class="quotelev1">&gt; We are not sure yet how we should expose all these devices. Right now,
</span><br>
<span class="quotelev1">&gt; we have a new BRIDGE type, a PCI_DEVICE type, and a OS_DEVICE type
</span><br>
<span class="quotelev1">&gt; (which corresponds to OS names such as eth0 or sda1 or... nothing for
</span><br>
<span class="quotelev1">&gt; gpus). If you have any feeling about all this, please tell us :)
</span><br>
<p>Well at the moment that looks rather nice to me, though it
<br>
would indeed be good to see GPUs labelled to - though I've
<br>
seen your comment in the source saying:
<br>
<p>/* FIXME: what about gpus? could try class &quot;drm&quot;, but
<br>
&nbsp;&nbsp;&nbsp;proprietary drivers won't appear there */
<br>
<p>I don't have any boxes at all with GPUs in them, so I'm not
<br>
sure what to suggest there. :-(
<br>
<p>cheers,
<br>
Chris
<br>
- -- 
<br>
&nbsp;Christopher Samuel - Senior Systems Administrator
<br>
&nbsp;VLSCI - Victorian Life Sciences Computational Initiative
<br>
&nbsp;Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.vlsci.unimelb.edu.au/">http://www.vlsci.unimelb.edu.au/</a>
<br>
<p>-----BEGIN PGP SIGNATURE-----
<br>
Version: GnuPG v1.4.10 (GNU/Linux)
<br>
Comment: Using GnuPG with Mozilla - <a href="http://enigmail.mozdev.org/">http://enigmail.mozdev.org/</a>
<br>
<p>iEYEARECAAYFAkzlrNgACgkQO2KABBYQAh8HTACgg1gmjzEFb+SspmEWPmKD4aAx
<br>
v14An2h4TB1mSZmCGQJuuj/MET57y+Oc
<br>
=sx9r
<br>
-----END PGP SIGNATURE-----
<br>
<p>
<br><hr>
<img src="http://www.open-mpi.org/community/lists/hwloc-devel/att-1501/bruce-m.png" alt="bruce-m.png">
<!-- attachment="bruce-m.png" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1502.php">Samuel Thibault: "Re: [hwloc-devel] PCI device location in hwloc"</a>
<li><strong>Previous message:</strong> <a href="1500.php">Samuel Thibault: "Re: [hwloc-devel] ***UNCHECKED*** [WARNING: A/V UNSCANNABLE]Re: hwloc-distrib --among"</a>
<li><strong>In reply to:</strong> <a href="1493.php">Brice Goglin: "Re: [hwloc-devel] PCI device location in hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1505.php">Christopher Samuel: "Re: [hwloc-devel] PCI device location in hwloc"</a>
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
