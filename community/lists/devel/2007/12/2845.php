<?
$subject_val = "Re: [OMPI devel] SCTP noisy failure";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 13 07:37:22 2007" -->
<!-- isoreceived="20071213123722" -->
<!-- sent="Thu, 13 Dec 2007 07:37:08 -0500" -->
<!-- isosent="20071213123708" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SCTP noisy failure" -->
<!-- id="F30E0AF1-496C-4D13-8CA5-36815C78528F_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="b89c3c270712121924m5e73f2b4q678fa8808c51794_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2007-12-13 07:37:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2846.php">George Bosilca: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>Previous message:</strong> <a href="2844.php">Jeff Squyres: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<li><strong>In reply to:</strong> <a href="2839.php">Brad Penoff: "Re: [OMPI devel] SCTP noisy failure"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 12, 2007, at 10:24 PM, Brad Penoff wrote:
<br>
<p><span class="quotelev1">&gt; OK, I've done a commit (r16951) to make it less noisy.  Let me know
</span><br>
<span class="quotelev1">&gt; how it goes because I can't reproduce this at the moment.
</span><br>
<p>That seemed to do it; thanks.
<br>
<p><span class="quotelev1">&gt; I'm really curious about this release of Red Hat though....
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On my Ubuntu system, if I try to create an SCTP socket and the kernel
</span><br>
<span class="quotelev1">&gt; module isn't loaded/modprobe'd, the system loads it automatically
</span><br>
<span class="quotelev1">&gt; based off the entry in the modules alias file which tells the system
</span><br>
<span class="quotelev1">&gt; where to find the appropriate .ko file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; These mappings seem to be messed up in the Red Hat out-of-the-box
</span><br>
<span class="quotelev1">&gt; RHEL4U4 release though, if I'm understanding things correctly...  does
</span><br>
<span class="quotelev1">&gt; anyone know if this is is a known problem for this particular distro?
</span><br>
<span class="quotelev1">&gt; If not, I'll try to get to installing and playing with this release
</span><br>
<span class="quotelev1">&gt; eventually (working on Solaris support for the SCTP BTL (1-1) and a
</span><br>
<span class="quotelev1">&gt; few other non-OpenMPI things at the moment though...).
</span><br>
<p>I do not know.  Keep in mind that RHEL4U4 is fairly ancient.
<br>
<p>FWIW, RHEL4Ux are systems that you have to pay for.  But the Centos  
<br>
distros are recompiles of the RHEL4 SRPMs, so they're pretty close in  
<br>
terms of what official RHEL4 systems are.
<br>
<p>BTW, my choice of RHEL4 is because that's what Cisco customers use and  
<br>
what we support (we see a lot of RHEL usage out in the commercial  
<br>
world).
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
<li><strong>Next message:</strong> <a href="2846.php">George Bosilca: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>Previous message:</strong> <a href="2844.php">Jeff Squyres: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<li><strong>In reply to:</strong> <a href="2839.php">Brad Penoff: "Re: [OMPI devel] SCTP noisy failure"</a>
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
