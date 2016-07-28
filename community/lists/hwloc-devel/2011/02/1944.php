<?
$subject_val = "[hwloc-devel] Fwd: Fw: How to get cache sizes on AIX 6.1 ?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 17 01:02:07 2011" -->
<!-- isoreceived="20110217060207" -->
<!-- sent="Thu, 17 Feb 2011 17:01:54 +1100" -->
<!-- isosent="20110217060154" -->
<!-- name="Christopher Samuel" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="[hwloc-devel] Fwd: Fw: How to get cache sizes on AIX 6.1 ?" -->
<!-- id="4D5CB9D2.1040901_at_unimelb.edu.au" -->
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
<strong>Subject:</strong> [hwloc-devel] Fwd: Fw: How to get cache sizes on AIX 6.1 ?<br>
<strong>From:</strong> Christopher Samuel (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-17 01:01:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1945.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.2a1r3175)"</a>
<li><strong>Previous message:</strong> <a href="1943.php">MPI Team: "[hwloc-devel] === CREATE FAILURE (trunk) ==="</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1967.php">Samuel Thibault: "Re: [hwloc-devel] Fwd: Fw: How to get cache sizes on AIX 6.1 ?"</a>
<li><strong>Maybe reply:</strong> <a href="1967.php">Samuel Thibault: "Re: [hwloc-devel] Fwd: Fw: How to get cache sizes on AIX 6.1 ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>Hi folks,
<br>
<p>I spotted the comment recently about not knowing how to
<br>
determine cache sizes on AIX and so I pinged (pung?) a
<br>
friend of mine at IBM in case he could find out.
<br>
<p>Looks like he had some success (attached).. :-)
<br>
<p>cheers!
<br>
Chris
<br>
<p>- -------- Original Message --------
<br>
Subject: 	Fw: How to get cache sizes on AIX 6.1 ?
<br>
Date: 	Thu, 17 Feb 2011 15:28:24 +1100
<br>
From: 	Peter Zutenis &lt;zutenis_at_[hidden]&gt;
<br>
To: 	samuel_at_[hidden]
<br>
<p><p><p>Chris,
<br>
<p>The attached bit of code may help you. I hope it is what you are after.
<br>
<p>P.S. Must curry soon..............
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*Peter Zutenis *
<br>
Senior I/T Specialist - pSeries, powerVM and AIX
<br>
Systems and Technology Group IBM Australia Ltd 60 City Road Southgate, 3006
<br>
Ph: 61-3-9626-6841 Mobile: 0413 274 855
<br>
Email: zutenis_at_[hidden]
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&lt;<a href="http://www.ibm.com/systems/power/">http://www.ibm.com/systems/power/</a>&gt;
<br>
<p><p><p>- ----- Forwarded by Peter Zutenis/Australia/IBM on 17/02/2011 15:26 -----
<br>
From: 	Peter Farrell/Australia/IBM
<br>
To: 	Peter Zutenis/Australia/IBM_at_IBMAU
<br>
Date: 	17/02/2011 12:24
<br>
Subject: 	Re: Fw: How to get cache sizes on AIX 6.1 ?
<br>
<p><p>- ------------------------------------------------------------------------
<br>
<p><p>Peter,
<br>
<p>It's not all my own work, a modification of something I found on the
<br>
Internet. Tested on Power4 but I see no reason why it shouldn't work on
<br>
the other boxes.
<br>
<p>Peter F.
<br>
<p><p><p><p><p>From:        Peter Zutenis/Australia/IBM
<br>
To:        Peter Farrell/Australia/IBM_at_IBMAU
<br>
Date:        16/02/2011 04:01 PM
<br>
Subject:        Fw: How to get cache sizes on AIX 6.1 ?
<br>
- ------------------------------------------------------------------------
<br>
<p><p><p>Hi Pete,
<br>
<p>Hope all is well.
<br>
<p>Got this interesting request from a client of mine. Do you have any idea
<br>
how I can pursue this within IBM ?
<br>
<p>Cheers,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*Peter Zutenis *
<br>
Senior I/T Specialist - pSeries, powerVM and AIX
<br>
Systems and Technology Group IBM Australia Ltd 60 City Road Southgate, 3006
<br>
Ph: 61-3-9626-6841 Mobile: 0413 274 855
<br>
Email: zutenis_at_[hidden]
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&lt;<a href="http://www.ibm.com/systems/power/">http://www.ibm.com/systems/power/</a>&gt;
<br>
<p><p><p>- ----- Forwarded by Peter Zutenis/Australia/IBM on 16/02/2011 16:00 -----
<br>
From: 	Christopher Samuel &lt;samuel_at_[hidden]&gt;
<br>
To: 	Peter Zutenis/Australia/IBM_at_IBMAU
<br>
Date: 	15/02/2011 14:04
<br>
Subject: 	How to get cache sizes on AIX 6.1 ?
<br>
<p><p>- ------------------------------------------------------------------------
<br>
<p><p><p>Hiya Peter!
<br>
<p>Long time no speak (or tweet!).
<br>
<p>The hwloc folks were asked:
<br>
<p>$ btw: are there any plans to fully support POWER6
<br>
$ and/or POWER7 running AIX6.1 for the future?
<br>
$ Actually we can get the topology right but cache
<br>
$ sizes are missing.
<br>
<p>Their response was:
<br>
<p>#                 obj-&gt;attr-&gt;cache.size = 0; /* TODO: ? */
<br>
#
<br>
# :)
<br>
#
<br>
# I don't know which AIX API can provide it.
<br>
<p>Would you have any idea how to get the cache size
<br>
programaticaly from user space on AIX ?
<br>
<p>cheers!
<br>
Chris
<br>
-----BEGIN PGP SIGNATURE-----
<br>
Version: GnuPG v1.4.10 (GNU/Linux)
<br>
Comment: Using GnuPG with Mozilla - <a href="http://enigmail.mozdev.org/">http://enigmail.mozdev.org/</a>
<br>
<p>iEYEARECAAYFAk1cudIACgkQO2KABBYQAh9QnACfafgXOxJcs2PlTBCQmIG2rBKG
<br>
uKQAniWz1qWHkLwBi+dBHj4FnmqZ7cNl
<br>
=z5mY
<br>
-----END PGP SIGNATURE-----
<br>
<p>
<br><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-1944/qcpu.c">qcpu.c</a>
</ul>
<!-- attachment="qcpu.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1945.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.2a1r3175)"</a>
<li><strong>Previous message:</strong> <a href="1943.php">MPI Team: "[hwloc-devel] === CREATE FAILURE (trunk) ==="</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1967.php">Samuel Thibault: "Re: [hwloc-devel] Fwd: Fw: How to get cache sizes on AIX 6.1 ?"</a>
<li><strong>Maybe reply:</strong> <a href="1967.php">Samuel Thibault: "Re: [hwloc-devel] Fwd: Fw: How to get cache sizes on AIX 6.1 ?"</a>
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
