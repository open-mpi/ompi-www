<?
$subject_val = "Re: [OMPI devel] Build failures on trunk? r21235";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 14 14:07:49 2009" -->
<!-- isoreceived="20090514180749" -->
<!-- sent="Thu, 14 May 2009 20:07:42 +0200" -->
<!-- isosent="20090514180742" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Build failures on trunk? r21235" -->
<!-- id="20090514180741.GC12180_at_gmx.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="972E4FE8-81E0-40EB-B113-608EA0AF690F_at_cisco.com" -->
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
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-14 14:07:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6032.php">Brian W. Barrett: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<li><strong>Previous message:</strong> <a href="6030.php">Jeff Squyres: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<li><strong>In reply to:</strong> <a href="6030.php">Jeff Squyres: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6032.php">Brian W. Barrett: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>* Jeff Squyres wrote on Thu, May 14, 2009 at 07:56:24PM CEST:
<br>
<span class="quotelev1">&gt; On May 14, 2009, at 1:46 PM, Ralf Wildenhues wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A more permanent workaround could be in OpenMPI to list each library
</span><br>
<span class="quotelev2">&gt;&gt; that is used *directly* by some other library as a dependency.  Sigh.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We actually took pains to *not* do that; we *used* to do that and  
</span><br>
<span class="quotelev1">&gt; explicitly took it out.  :-\  IIRC, it had something to do with  
</span><br>
<span class="quotelev1">&gt; dlopen'ing libmpi.so...?
</span><br>
<p>Admittedly, I didn't look at Open MPI in detail before writing my
<br>
previous reply.  So it would be nice to know the outcome of the
<br>
workaround anyway (I do have a Debian here, but different Libtool
<br>
versions and little time), there could also be another genuine bug
<br>
hiding there.  Dlopening sounds like Debian Libtool issue though,
<br>
and one worthy of a Debian bug report (because that is not intended
<br>
by them to fail).
<br>
<p>Thanks,
<br>
Ralf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6032.php">Brian W. Barrett: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<li><strong>Previous message:</strong> <a href="6030.php">Jeff Squyres: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<li><strong>In reply to:</strong> <a href="6030.php">Jeff Squyres: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6032.php">Brian W. Barrett: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
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
