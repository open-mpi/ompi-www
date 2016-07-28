<?
$subject_val = "Re: [OMPI devel] SCTP noisy failure";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 12 20:58:18 2007" -->
<!-- isoreceived="20071213015818" -->
<!-- sent="Wed, 12 Dec 2007 17:58:12 -0800" -->
<!-- isosent="20071213015812" -->
<!-- name="Brad Penoff" -->
<!-- email="penoff_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SCTP noisy failure" -->
<!-- id="b89c3c270712121758x4f4c2b02ld55148c7a2ae8a6d_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="82DA58B1-5CEF-446E-A13E-C3326E75D366_at_cisco.com" -->
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
<strong>From:</strong> Brad Penoff (<em>penoff_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-12 20:58:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2837.php">Jeff Squyres: "Re: [OMPI devel] SCTP noisy failure"</a>
<li><strong>Previous message:</strong> <a href="2835.php">Jeff Squyres: "Re: [OMPI devel] SCTP noisy failure"</a>
<li><strong>In reply to:</strong> <a href="2835.php">Jeff Squyres: "Re: [OMPI devel] SCTP noisy failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2837.php">Jeff Squyres: "Re: [OMPI devel] SCTP noisy failure"</a>
<li><strong>Reply:</strong> <a href="2837.php">Jeff Squyres: "Re: [OMPI devel] SCTP noisy failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 12, 2007 5:44 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Dec 12, 2007, at 7:16 PM, Brad Penoff wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Does your system have sctp in the kernel as a module?  This is the
</span><br>
<span class="quotelev2">&gt; &gt; default for most Linux systems so you may have to &quot;modprobe sctp&quot; to
</span><br>
<span class="quotelev2">&gt; &gt; get rid of the ESOCKTNOSUPPORT...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That's not really the issue: I don't *want* SCTP support.  :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a default RHEL4U4 install and now Open MPI is complaining on a
</span><br>
<span class="quotelev1">&gt; default mpirun.  Open MPI should work out of the box -- warning free
</span><br>
<span class="quotelev1">&gt; -- on all supported operating systems.
</span><br>
<p>Haha, I caught that part as well (about the exclusivity &quot;fix&quot;).  I was
<br>
just curious why the error is there in the first place because, after
<br>
all, everyone should want SCTP support, right ;-) ?  I didn't know
<br>
that any Linux distro had lksctp-tools installed by default, but the
<br>
module not loaded... learn something new every day though.
<br>
<p>So there's two issues (exclusivity not working as expected and then
<br>
the SCTP failure if you actually wanted SCTP support) and I'm
<br>
concerned about the one that most of you are not, I'm guessing ;-).
<br>
<p>I'll try to look at the other problem too though...
<br>
<p>brad
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2837.php">Jeff Squyres: "Re: [OMPI devel] SCTP noisy failure"</a>
<li><strong>Previous message:</strong> <a href="2835.php">Jeff Squyres: "Re: [OMPI devel] SCTP noisy failure"</a>
<li><strong>In reply to:</strong> <a href="2835.php">Jeff Squyres: "Re: [OMPI devel] SCTP noisy failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2837.php">Jeff Squyres: "Re: [OMPI devel] SCTP noisy failure"</a>
<li><strong>Reply:</strong> <a href="2837.php">Jeff Squyres: "Re: [OMPI devel] SCTP noisy failure"</a>
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
