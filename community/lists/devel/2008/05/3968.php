<?
$subject_val = "Re: [OMPI devel] RFC: Linuxes shipping libibverbs";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 21 15:47:10 2008" -->
<!-- isoreceived="20080521194710" -->
<!-- sent="Wed, 21 May 2008 15:47:06 -0400 (EDT)" -->
<!-- isosent="20080521194706" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Linuxes shipping libibverbs" -->
<!-- id="Pine.LNX.4.64.0805211544210.10912_at_marvin.we-be-smart.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="BAA68214-4F16-4501-AD0E-C5DBF00F9F7F_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Linuxes shipping libibverbs<br>
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-21 15:47:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3969.php">Don Kerr: "[OMPI devel] openib btl build question"</a>
<li><strong>Previous message:</strong> <a href="3967.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>In reply to:</strong> <a href="3967.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3970.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Then we disagree on a core point.  I believe that users should never have 
<br>
something silently unexpected happen (like falling back to TCP from a high 
<br>
speed interconnect because of a NIC reset / software issue).  YOu clearly 
<br>
don't feel this way.  I don't really work on the project, but do have lots 
<br>
of experience being yelled at by users when something unexpected happens.
<br>
<p>I guarantee you we'll see a report of poor IB / application performance 
<br>
because of the silent fallback to TCP.  There's a reason that error 
<br>
message was put in.  I don't get a vote anymore, so do whatever you think 
<br>
is best.
<br>
<p>Brian
<br>
<p><p>On Wed, 21 May 2008, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; One thing I should clarify -- the ibverbs error message from my
</span><br>
<span class="quotelev1">&gt; previous mail is a red herring.  libibverbs prints that message on
</span><br>
<span class="quotelev1">&gt; systems where the kernel portions of the OFED stack are not installed
</span><br>
<span class="quotelev1">&gt; (such as the quick-n-dirty test that I did before -- all I did was
</span><br>
<span class="quotelev1">&gt; install libibverbs without the corresponding kernel stuff).  I
</span><br>
<span class="quotelev1">&gt; installed the whole OFED stack on a machine with no verbs-capable
</span><br>
<span class="quotelev1">&gt; hardware and verified that the libibverbs message does *not* appear
</span><br>
<span class="quotelev1">&gt; when the kernel bits are properly installed and running.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So we're only talking about the Open MPI warning message here.  More
</span><br>
<span class="quotelev1">&gt; below.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 21, 2008, at 12:17 PM, Brian W. Barrett wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. An out-of-the-box &quot;mpirun a.out&quot; will print warning messages in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; perfectly valid/good configurations (no verbs-capable hardware, but
</span><br>
<span class="quotelev3">&gt;&gt;&gt; just happen to have libibverbs installed).  This is a Big Deal.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Which is easily solved with a better error message, as Pasha
</span><br>
<span class="quotelev2">&gt;&gt; suggested.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I guess this is where we disagree: I don't believe that the issue is
</span><br>
<span class="quotelev1">&gt; solved by making a &quot;better&quot; message.  Specifically: this is the first
</span><br>
<span class="quotelev1">&gt; case where we're saying &quot;if you run with a valid configuration, you're
</span><br>
<span class="quotelev1">&gt; going to get a warning message and you have to do something extra to
</span><br>
<span class="quotelev1">&gt; turn it off.&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That just seems darn weird to me, especially when other MPI's don't do
</span><br>
<span class="quotelev1">&gt; the same thing.  Come to think of it, I can't think of many other
</span><br>
<span class="quotelev1">&gt; software packages that do that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In short: I think it's no longer safe to assume that machines with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libibverbs installed must also have verbs-capable hardware.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But here's the real problem -- with our current selection logic, a
</span><br>
<span class="quotelev2">&gt;&gt; user
</span><br>
<span class="quotelev2">&gt;&gt; with libibverbs but no IB cards gets an error message saying &quot;hey,
</span><br>
<span class="quotelev2">&gt;&gt; we need
</span><br>
<span class="quotelev2">&gt;&gt; you to set this flag to make this error go away&quot; (or would, per
</span><br>
<span class="quotelev2">&gt;&gt; Pasha's
</span><br>
<span class="quotelev2">&gt;&gt; suggestion).  A user with a busted IB stack on a node (which we
</span><br>
<span class="quotelev2">&gt;&gt; still saw
</span><br>
<span class="quotelev2">&gt;&gt; pretty often at LANL) starts using TCP and their application runs
</span><br>
<span class="quotelev2">&gt;&gt; like a
</span><br>
<span class="quotelev2">&gt;&gt; dog.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I guess it's a matter of how often you see errors in the IB stack that
</span><br>
<span class="quotelev2">&gt;&gt; cause nic initialization to fail.  The machines I tend to use still
</span><br>
<span class="quotelev2">&gt;&gt; exhibit this problem pretty often, but it's possible I just work on
</span><br>
<span class="quotelev2">&gt;&gt; bad
</span><br>
<span class="quotelev2">&gt;&gt; hardware more often than is usual in the wild.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I guess this is the central issue: what *is* the common case?  Which
</span><br>
<span class="quotelev1">&gt; set of users should be forced to do something different?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm claiming that now that the Linux distros are shipping libibverbs,
</span><br>
<span class="quotelev1">&gt; the number of users who have the openib BTL installed but do not have
</span><br>
<span class="quotelev1">&gt; verbs-capable hardware will be *much* larger than those with verbs-
</span><br>
<span class="quotelev1">&gt; capable hardware.  Hence, I think the pain point should be for the
</span><br>
<span class="quotelev1">&gt; smaller group (those with verbs-capable hardware): set an MCA param if
</span><br>
<span class="quotelev1">&gt; you want to see the warning message.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (we can debate the default value for the BTL-wide base param later --
</span><br>
<span class="quotelev1">&gt; let's first just debate the *concept* as specific to the openib BTL)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It would be great if libibverbs could return two different error
</span><br>
<span class="quotelev2">&gt;&gt; messages
</span><br>
<span class="quotelev2">&gt;&gt; - one for &quot;there's no IB card in this machine&quot; and one for &quot;there's
</span><br>
<span class="quotelev2">&gt;&gt; an IB
</span><br>
<span class="quotelev2">&gt;&gt; card here, but we can't initialize it&quot;.  I think that would make this
</span><br>
<span class="quotelev2">&gt;&gt; argument go away.  Open MPI could probably mimic that behavior by
</span><br>
<span class="quotelev2">&gt;&gt; parsing
</span><br>
<span class="quotelev2">&gt;&gt; the PCI tables, but that sounds ... painful.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, this capability in libiverbs would be good.  Parsing the PCI
</span><br>
<span class="quotelev1">&gt; tables doesn't sound like our role.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'll ask the libibverbs authors about it...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I guess the root of my concern is that unexpected behavior with no
</span><br>
<span class="quotelev2">&gt;&gt; explanation is (in my mind) the most dangerous case and the one we
</span><br>
<span class="quotelev2">&gt;&gt; should
</span><br>
<span class="quotelev2">&gt;&gt; address by default.  And turning this error message off is going to
</span><br>
<span class="quotelev2">&gt;&gt; cause
</span><br>
<span class="quotelev2">&gt;&gt; unexpected behavior without explanation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But more information is available, and subject to normal
</span><br>
<span class="quotelev1">&gt; troubleshooting techniques.  And if you're in an environment where you
</span><br>
<span class="quotelev1">&gt; *do* want to use verbs-capable hardware, then setting the MCA param
</span><br>
<span class="quotelev1">&gt; seems perfectly acceptable to me.  IIRC, LANL sets a whole pile of MCA
</span><br>
<span class="quotelev1">&gt; params in the top-level openmpi-mca-params.conf file that are specific
</span><br>
<span class="quotelev1">&gt; to their environment (right?).  If that's true, what's one more param?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Heck, the OMPI installed by OFED can set an MCA param in openmpi-mca-
</span><br>
<span class="quotelev1">&gt; params.cof by default (which is what most verbs-capable-hardware-users
</span><br>
<span class="quotelev1">&gt; utilize).  That would solve the issue for 98% of the IB/iWARP users
</span><br>
<span class="quotelev1">&gt; out there.  Those who compile from source would need to do it manually.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I agree that this is less than perfect.  My main point is that I
</span><br>
<span class="quotelev1">&gt; really don't like the idea of &quot;mpirun a.out&quot; will result in warning
</span><br>
<span class="quotelev1">&gt; messages for perfectly valid configurations.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3969.php">Don Kerr: "[OMPI devel] openib btl build question"</a>
<li><strong>Previous message:</strong> <a href="3967.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>In reply to:</strong> <a href="3967.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3970.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
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
