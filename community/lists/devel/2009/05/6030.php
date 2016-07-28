<?
$subject_val = "Re: [OMPI devel] Build failures on trunk? r21235";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 14 13:56:34 2009" -->
<!-- isoreceived="20090514175634" -->
<!-- sent="Thu, 14 May 2009 13:56:24 -0400" -->
<!-- isosent="20090514175624" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Build failures on trunk? r21235" -->
<!-- id="972E4FE8-81E0-40EB-B113-608EA0AF690F_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20090514174620.GA12180_at_gmx.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Build failures on trunk? r21235<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-14 13:56:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6031.php">Ralf Wildenhues: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<li><strong>Previous message:</strong> <a href="6029.php">Ralf Wildenhues: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<li><strong>In reply to:</strong> <a href="6029.php">Ralf Wildenhues: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6031.php">Ralf Wildenhues: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<li><strong>Reply:</strong> <a href="6031.php">Ralf Wildenhues: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<li><strong>Reply:</strong> <a href="6032.php">Brian W. Barrett: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 14, 2009, at 1:46 PM, Ralf Wildenhues wrote:
<br>
<p><span class="quotelev1">&gt; A more permanent workaround could be in OpenMPI to list each library
</span><br>
<span class="quotelev1">&gt; that is used *directly* by some other library as a dependency.  Sigh.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>We actually took pains to *not* do that; we *used* to do that and  
<br>
explicitly took it out.  :-\  IIRC, it had something to do with  
<br>
dlopen'ing libmpi.so...?
<br>
<p><span class="quotelev1">&gt; Or fix Debian Libtool.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>That sounds better to me, but I'm admittedly a little biased.  :-)
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
<li><strong>Next message:</strong> <a href="6031.php">Ralf Wildenhues: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<li><strong>Previous message:</strong> <a href="6029.php">Ralf Wildenhues: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<li><strong>In reply to:</strong> <a href="6029.php">Ralf Wildenhues: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6031.php">Ralf Wildenhues: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<li><strong>Reply:</strong> <a href="6031.php">Ralf Wildenhues: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<li><strong>Reply:</strong> <a href="6032.php">Brian W. Barrett: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
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
