<?
$subject_val = "Re: [OMPI devel] [patch] libnbc intercommunicator iallgather bug";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 30 11:52:12 2014" -->
<!-- isoreceived="20140930155212" -->
<!-- sent="Tue, 30 Sep 2014 15:52:10 +0000" -->
<!-- isosent="20140930155210" -->
<!-- name="Pritchard Jr., Howard" -->
<!-- email="howardp_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [patch] libnbc intercommunicator iallgather bug" -->
<!-- id="5F6FB0CDAF4F98419A0D970E1F65ED05B5ABD9_at_ECS-EXG-P-MB05.win.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140930132202.ba73a63cc8d6425930374e48_at_jp.fujitsu.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [patch] libnbc intercommunicator iallgather bug<br>
<strong>From:</strong> Pritchard Jr., Howard (<em>howardp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-30 11:52:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15947.php">Jeff Squyres (jsquyres): "[OMPI devel] Github migration: tomorrow"</a>
<li><strong>Previous message:</strong> <a href="15945.php">Nathan Hjelm: "Re: [OMPI devel] Neighbor collectives with periodic Cartesian topologies of size one"</a>
<li><strong>In reply to:</strong> <a href="15940.php">Kawashima, Takahiro: "[OMPI devel] [patch] libnbc intercommunicator iallgather bug"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Takahiro,
<br>
<p>Thanks very much for the patch and the test!  
<br>
<p>After the git migration we'll open an issue and patch nbc_iallgather.
<br>
This will get pushed to 1.8.4.
<br>
<p>Howard
<br>
<p><p>-----Original Message-----
<br>
From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Kawashima, Takahiro
<br>
Sent: Monday, September 29, 2014 10:22 PM
<br>
To: devel_at_[hidden]
<br>
Subject: [OMPI devel] [patch] libnbc intercommunicator iallgather bug
<br>
<p>Hi,
<br>
<p>The attached program intercommunicator-iallgather.c outputs message &quot;MPI Error in MPI_Testall() (18)&quot; forever and doesn't finish. This is because libnbc has typos of send/recv.
<br>
<p>See attached intercommunicator-iallgather.patch for the fix.
<br>
The patch modifies iallgather_inter and iallgather_intra.
<br>
The modification of iallgather_intra is just for symmetry with iallgather_inter. Users guarantee the consistency of send/recv.
<br>
<p>Both trunk and v1.8 branch have this issue.
<br>
<p>Regards,
<br>
Takahiro Kawashima,
<br>
MPI development team,
<br>
Fujitsu
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15947.php">Jeff Squyres (jsquyres): "[OMPI devel] Github migration: tomorrow"</a>
<li><strong>Previous message:</strong> <a href="15945.php">Nathan Hjelm: "Re: [OMPI devel] Neighbor collectives with periodic Cartesian topologies of size one"</a>
<li><strong>In reply to:</strong> <a href="15940.php">Kawashima, Takahiro: "[OMPI devel] [patch] libnbc intercommunicator iallgather bug"</a>
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
