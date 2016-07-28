<?
$subject_val = "Re: [OMPI devel] SCTP noisy failure";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 12 22:24:37 2007" -->
<!-- isoreceived="20071213032437" -->
<!-- sent="Wed, 12 Dec 2007 19:24:31 -0800" -->
<!-- isosent="20071213032431" -->
<!-- name="Brad Penoff" -->
<!-- email="penoff_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SCTP noisy failure" -->
<!-- id="b89c3c270712121924m5e73f2b4q678fa8808c51794_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EDF71C61-5A7F-4365-9FD3-ED22A7E052DC_at_cisco.com" -->
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
<strong>Date:</strong> 2007-12-12 22:24:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2840.php">Gleb Natapov: "Re: [OMPI devel] New BTL parameter"</a>
<li><strong>Previous message:</strong> <a href="2838.php">Jeff Squyres: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>In reply to:</strong> <a href="2837.php">Jeff Squyres: "Re: [OMPI devel] SCTP noisy failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2845.php">Jeff Squyres: "Re: [OMPI devel] SCTP noisy failure"</a>
<li><strong>Reply:</strong> <a href="2845.php">Jeff Squyres: "Re: [OMPI devel] SCTP noisy failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 12, 2007 6:03 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Dec 12, 2007, at 8:58 PM, Brad Penoff wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; That's not really the issue: I don't *want* SCTP support.  :)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I have a default RHEL4U4 install and now Open MPI is complaining on a
</span><br>
<span class="quotelev3">&gt; &gt;&gt; default mpirun.  Open MPI should work out of the box -- warning free
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -- on all supported operating systems.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Haha, I caught that part as well (about the exclusivity &quot;fix&quot;).  I was
</span><br>
<span class="quotelev2">&gt; &gt; just curious why the error is there in the first place because, after
</span><br>
<span class="quotelev2">&gt; &gt; all, everyone should want SCTP support, right ;-) ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ;-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I didn't know
</span><br>
<span class="quotelev2">&gt; &gt; that any Linux distro had lksctp-tools installed by default, but the
</span><br>
<span class="quotelev2">&gt; &gt; module not loaded... learn something new every day though.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gotta love those screwy software authors!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (I'm sure lots of people say that about us, too :-) )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; So there's two issues (exclusivity not working as expected and then
</span><br>
<span class="quotelev2">&gt; &gt; the SCTP failure if you actually wanted SCTP support) and I'm
</span><br>
<span class="quotelev2">&gt; &gt; concerned about the one that most of you are not, I'm guessing ;-).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think exclusivity *is* working -- this is before that comes into
</span><br>
<span class="quotelev1">&gt; play, IIRC.  The _init function is querying your BTL to see if it
</span><br>
<span class="quotelev1">&gt; wants to run.
</span><br>
<p>OK, I've done a commit (r16951) to make it less noisy.  Let me know
<br>
how it goes because I can't reproduce this at the moment.
<br>
<p>I'm really curious about this release of Red Hat though....
<br>
<p>On my Ubuntu system, if I try to create an SCTP socket and the kernel
<br>
module isn't loaded/modprobe'd, the system loads it automatically
<br>
based off the entry in the modules alias file which tells the system
<br>
where to find the appropriate .ko file.
<br>
<p>These mappings seem to be messed up in the Red Hat out-of-the-box
<br>
RHEL4U4 release though, if I'm understanding things correctly...  does
<br>
anyone know if this is is a known problem for this particular distro?
<br>
If not, I'll try to get to installing and playing with this release
<br>
eventually (working on Solaris support for the SCTP BTL (1-1) and a
<br>
few other non-OpenMPI things at the moment though...).
<br>
<p>Thanks,
<br>
brad
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
<li><strong>Next message:</strong> <a href="2840.php">Gleb Natapov: "Re: [OMPI devel] New BTL parameter"</a>
<li><strong>Previous message:</strong> <a href="2838.php">Jeff Squyres: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>In reply to:</strong> <a href="2837.php">Jeff Squyres: "Re: [OMPI devel] SCTP noisy failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2845.php">Jeff Squyres: "Re: [OMPI devel] SCTP noisy failure"</a>
<li><strong>Reply:</strong> <a href="2845.php">Jeff Squyres: "Re: [OMPI devel] SCTP noisy failure"</a>
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
