<?
$subject_val = "[OMPI users] RE : RE : Bug when mixing sent types in version 1.6";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 11 10:16:43 2012" -->
<!-- isoreceived="20120611141643" -->
<!-- sent="Mon, 11 Jun 2012 16:16:37 +0200" -->
<!-- isosent="20120611141637" -->
<!-- name="BOUVIER Benjamin" -->
<!-- email="benjamin.bouvier_at_[hidden]" -->
<!-- subject="[OMPI users] RE : RE : Bug when mixing sent types in version 1.6" -->
<!-- id="20010_1339424197_4FD5FDC5_20010_11388_1_49CF97100DDD4B4A9C4DC89905CA59A310187E5E21_at_THSONEA01CMS07P.one.grp" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="7D1DE29B-B3FE-4574-B06A-537ECFA5EF85_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI users] RE : RE : Bug when mixing sent types in version 1.6<br>
<strong>From:</strong> BOUVIER Benjamin (<em>benjamin.bouvier_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-11 10:16:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19492.php">Jeff Squyres: "Re: [OMPI users] RE : RE : Bug when mixing sent types in version 1.6"</a>
<li><strong>Previous message:</strong> <a href="19490.php">Mudassar Majeed: "[OMPI users] Reducing across nodes communication in MPI"</a>
<li><strong>In reply to:</strong> <a href="19488.php">Jeff Squyres: "Re: [OMPI users] RE :  Bug when mixing sent types in version 1.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19492.php">Jeff Squyres: "Re: [OMPI users] RE : RE : Bug when mixing sent types in version 1.6"</a>
<li><strong>Reply:</strong> <a href="19492.php">Jeff Squyres: "Re: [OMPI users] RE : RE : Bug when mixing sent types in version 1.6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p><span class="quotelev1">&gt; I'd guess that running net pipe with 3 procs may be undefined.
</span><br>
<p>It is indeed undefined. Running the net pipe program locally with 3 processors blocks, on my computer.
<br>
<p>This issue is especially weird as there is no problem for running the example program on network with MPICH2 implementation, for 2 processes.
<br>
<p>However, with MPICH2, it fails with 3 processes and blocks also on connect (&quot;Connection refused&quot;), which could indicate that it's actually a network issue, with both MPICH2 and OMPI. I don't know how many connections OMPI use to send the data in the example program, but with the assumption that it tries to open 2 connections (while for the same program, MPICH2 only uses one connection, which is another hypothesis), maybe the number of connections is the right way to look for. I'll ask MPICH2 users on their mailing list, so as to get their opinion about it.
<br>
<p>Now that I know the program doesn't work both with OMPI and MPICH2 implementations, I guess it's not dependant of MPI implementation.
<br>
<p>If you have any ideas or comments, I would be pleased to hear them.
<br>
<p><pre>
--
Benjamin Bouvier
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19492.php">Jeff Squyres: "Re: [OMPI users] RE : RE : Bug when mixing sent types in version 1.6"</a>
<li><strong>Previous message:</strong> <a href="19490.php">Mudassar Majeed: "[OMPI users] Reducing across nodes communication in MPI"</a>
<li><strong>In reply to:</strong> <a href="19488.php">Jeff Squyres: "Re: [OMPI users] RE :  Bug when mixing sent types in version 1.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19492.php">Jeff Squyres: "Re: [OMPI users] RE : RE : Bug when mixing sent types in version 1.6"</a>
<li><strong>Reply:</strong> <a href="19492.php">Jeff Squyres: "Re: [OMPI users] RE : RE : Bug when mixing sent types in version 1.6"</a>
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
