<?
$subject_val = "Re: [OMPI devel] Open MPI v1.3rc4 has been posted";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 13 13:40:25 2009" -->
<!-- isoreceived="20090113184025" -->
<!-- sent="Tue, 13 Jan 2009 13:40:16 -0500" -->
<!-- isosent="20090113184016" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open MPI v1.3rc4 has been posted" -->
<!-- id="15A15D2F-B79A-44A0-B8EA-F277039DB80A_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="ea86ce220901130958m4daaa889ob168b07785647884_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Open MPI v1.3rc4 has been posted<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-13 13:40:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5139.php">Edgar Gabriel: "[OMPI devel] reduce_scatter bug with hierarch"</a>
<li><strong>Previous message:</strong> <a href="5137.php">Tim Mattox: "[OMPI devel] Open MPI v1.2.9rc2 has been posted"</a>
<li><strong>In reply to:</strong> <a href="5134.php">Tim Mattox: "[OMPI devel] Open MPI v1.3rc4 has been posted"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Per the teleconf this morning:
<br>
<p>1. Cisco sanity checks on 1.3rc4 look good
<br>
2. Cisco MTT failures that I saw were mostly due to:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- coll hierarch is failing with intel test Reduce_scatter_user_c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- intel tests failing when OMPI configured --without-mpi-param-check
<br>
&nbsp;&nbsp;&nbsp;&nbsp;The first of which is certainly not a blocker; the second of which  
<br>
is by design (i.e., need to strengthen the Intel tests to not fail).
<br>
<p>So -- Cisco gives a green light for 1.3 release.
<br>
<p>w00t!
<br>
<p><p>On Jan 13, 2009, at 12:58 PM, Tim Mattox wrote:
<br>
<p><span class="quotelev1">&gt; Hi All,
</span><br>
<span class="quotelev1">&gt; The fourth release candidate of Open MPI v1.3 is now available:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  <a href="http://www.open-mpi.org/software/ompi/v1.3/">http://www.open-mpi.org/software/ompi/v1.3/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please run it through it's paces as best you can.
</span><br>
<span class="quotelev1">&gt; Anticipated release of 1.3 is tonight/tomorrow.
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
</span><br>
<span class="quotelev1">&gt;  tmattox_at_[hidden] || timattox_at_[hidden]
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5139.php">Edgar Gabriel: "[OMPI devel] reduce_scatter bug with hierarch"</a>
<li><strong>Previous message:</strong> <a href="5137.php">Tim Mattox: "[OMPI devel] Open MPI v1.2.9rc2 has been posted"</a>
<li><strong>In reply to:</strong> <a href="5134.php">Tim Mattox: "[OMPI devel] Open MPI v1.3rc4 has been posted"</a>
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
