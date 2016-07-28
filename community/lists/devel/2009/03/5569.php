<?
$subject_val = "Re: [OMPI devel] 1.3.1rc3 was borked; 1.3.1rc4 is out";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  3 22:57:46 2009" -->
<!-- isoreceived="20090304035746" -->
<!-- sent="Tue, 3 Mar 2009 22:57:42 -0500 (EST)" -->
<!-- isosent="20090304035742" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.3.1rc3 was borked; 1.3.1rc4 is out" -->
<!-- id="alpine.DEB.1.10.0903032256350.13539_at_marvin.we-be-smart.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="alpine.DEB.1.10.0903031530450.20458_at_marvin.we-be-smart.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.3.1rc3 was borked; 1.3.1rc4 is out<br>
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-03 22:57:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5570.php">Terry Dontje: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<li><strong>Previous message:</strong> <a href="5568.php">Eugene Loh: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<li><strong>In reply to:</strong> <a href="5561.php">Brian W. Barrett: "Re: [OMPI devel] 1.3.1rc3 was borked; 1.3.1rc4 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5572.php">Ralph H. Castain: "Re: [OMPI devel] 1.3.1rc3 was borked; 1.3.1rc4 is out"</a>
<li><strong>Reply:</strong> <a href="5572.php">Ralph H. Castain: "Re: [OMPI devel] 1.3.1rc3 was borked; 1.3.1rc4 is out"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 3 Mar 2009, Brian W. Barrett wrote:
<br>
<p><span class="quotelev1">&gt; On Tue, 3 Mar 2009, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1.3.1rc3 had a race condition in the ORTE shutdown sequence.  The only 
</span><br>
<span class="quotelev2">&gt;&gt; difference between rc3 and rc4 was a fix for that race condition.  Please 
</span><br>
<span class="quotelev2">&gt;&gt; test ASAP:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   <a href="http://www.open-mpi.org/software/ompi/v1.3/">http://www.open-mpi.org/software/ompi/v1.3/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm sorry, I've failed to test rc1 &amp; rc2 on Catamount.  I'm getting a compile 
</span><br>
<span class="quotelev1">&gt; failure in the ORTE code.  I'll do a bit more testing and send Ralph an 
</span><br>
<span class="quotelev1">&gt; e-mail this afternoon.
</span><br>
<p><p>Attached is a patch against v1.3 branch that makes it work on Red Storm. 
<br>
I'm not sure it's right, so I'm just e-mailing it rather than committing.. 
<br>
Sorry Ralph, but can you take a look? :(
<br>
<p>Brian
<br>

<br><hr>
<ul>
<li>TEXT/x-diff attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-5569/ompi_13_rs.diff">ompi_13_rs.diff</a>
</ul>
<!-- attachment="ompi_13_rs.diff" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5570.php">Terry Dontje: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<li><strong>Previous message:</strong> <a href="5568.php">Eugene Loh: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<li><strong>In reply to:</strong> <a href="5561.php">Brian W. Barrett: "Re: [OMPI devel] 1.3.1rc3 was borked; 1.3.1rc4 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5572.php">Ralph H. Castain: "Re: [OMPI devel] 1.3.1rc3 was borked; 1.3.1rc4 is out"</a>
<li><strong>Reply:</strong> <a href="5572.php">Ralph H. Castain: "Re: [OMPI devel] 1.3.1rc3 was borked; 1.3.1rc4 is out"</a>
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
