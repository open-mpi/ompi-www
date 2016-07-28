<?
$subject_val = "Re: [OMPI devel] SCTP noisy failure";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 12 21:03:38 2007" -->
<!-- isoreceived="20071213020338" -->
<!-- sent="Wed, 12 Dec 2007 21:03:30 -0500" -->
<!-- isosent="20071213020330" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SCTP noisy failure" -->
<!-- id="EDF71C61-5A7F-4365-9FD3-ED22A7E052DC_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="b89c3c270712121758x4f4c2b02ld55148c7a2ae8a6d_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] SCTP noisy failure<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-12 21:03:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2838.php">Jeff Squyres: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>Previous message:</strong> <a href="2836.php">Brad Penoff: "Re: [OMPI devel] SCTP noisy failure"</a>
<li><strong>In reply to:</strong> <a href="2836.php">Brad Penoff: "Re: [OMPI devel] SCTP noisy failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2839.php">Brad Penoff: "Re: [OMPI devel] SCTP noisy failure"</a>
<li><strong>Reply:</strong> <a href="2839.php">Brad Penoff: "Re: [OMPI devel] SCTP noisy failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 12, 2007, at 8:58 PM, Brad Penoff wrote:
<br>
<p><span class="quotelev2">&gt;&gt; That's not really the issue: I don't *want* SCTP support.  :)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have a default RHEL4U4 install and now Open MPI is complaining on a
</span><br>
<span class="quotelev2">&gt;&gt; default mpirun.  Open MPI should work out of the box -- warning free
</span><br>
<span class="quotelev2">&gt;&gt; -- on all supported operating systems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Haha, I caught that part as well (about the exclusivity &quot;fix&quot;).  I was
</span><br>
<span class="quotelev1">&gt; just curious why the error is there in the first place because, after
</span><br>
<span class="quotelev1">&gt; all, everyone should want SCTP support, right ;-) ?
</span><br>
<p>;-)
<br>
<p><span class="quotelev1">&gt; I didn't know
</span><br>
<span class="quotelev1">&gt; that any Linux distro had lksctp-tools installed by default, but the
</span><br>
<span class="quotelev1">&gt; module not loaded... learn something new every day though.
</span><br>
<p>Gotta love those screwy software authors!
<br>
<p>(I'm sure lots of people say that about us, too :-) )
<br>
<p><span class="quotelev1">&gt; So there's two issues (exclusivity not working as expected and then
</span><br>
<span class="quotelev1">&gt; the SCTP failure if you actually wanted SCTP support) and I'm
</span><br>
<span class="quotelev1">&gt; concerned about the one that most of you are not, I'm guessing ;-).
</span><br>
<p><p>I think exclusivity *is* working -- this is before that comes into  
<br>
play, IIRC.  The _init function is querying your BTL to see if it  
<br>
wants to run.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2838.php">Jeff Squyres: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>Previous message:</strong> <a href="2836.php">Brad Penoff: "Re: [OMPI devel] SCTP noisy failure"</a>
<li><strong>In reply to:</strong> <a href="2836.php">Brad Penoff: "Re: [OMPI devel] SCTP noisy failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2839.php">Brad Penoff: "Re: [OMPI devel] SCTP noisy failure"</a>
<li><strong>Reply:</strong> <a href="2839.php">Brad Penoff: "Re: [OMPI devel] SCTP noisy failure"</a>
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
