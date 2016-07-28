<?
$subject_val = "Re: [OMPI devel] IBCM error";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 14 15:04:20 2008" -->
<!-- isoreceived="20080714190420" -->
<!-- sent="Mon, 14 Jul 2008 13:04:13 -0600 (MDT)" -->
<!-- isosent="20080714190413" -->
<!-- name="Ralph H. Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] IBCM error" -->
<!-- id="44494.128.165.0.81.1216062253.squirrel_at_webmail.lanl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="43A788FD-B708-48AC-B3CE-EB5215F435AC_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] IBCM error<br>
<strong>From:</strong> Ralph H. Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-14 15:04:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4345.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<li><strong>Previous message:</strong> <a href="4343.php">Sean Hefty: "Re: [OMPI devel] IBCM error"</a>
<li><strong>In reply to:</strong> <a href="4342.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4353.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<li><strong>Reply:</strong> <a href="4353.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've been quietly following this discussion, but now feel a need to jump
<br>
in here. I really must disagree with the idea of building either IBCM or
<br>
RDMACM support by default. Neither of these has been proven to reliably
<br>
work, or to be advantageous. Our own experiences in testing them have been
<br>
slightly negative at best. When the did work, they were slower, didn't
<br>
scale well, and unreliable.
<br>
<p>I'm not trying to rain on anyone's parade. These are worthwhile in the
<br>
long term. However, they clearly need further work to be &quot;ready for prime
<br>
time&quot;.
<br>
<p>Accordingly, I would recommend that they -only- be built if specifically
<br>
requested. Remember, most of our users just build blindly. It makes no
<br>
sense to have them build support for what can only be classed as an
<br>
experimental capability at this time.
<br>
<p>Also, note that the OFED install is less-than-reliable wrt IBCM and
<br>
RDMACM. We have spent considerable time chasing down installation problems
<br>
that allowed the system to build, but then caused it to crash-and-burn if
<br>
we attempted to use it. We have gained experience at knowing when/where to
<br>
look now, but that doesn't lessen the reputation impact OMPI is getting as
<br>
a &quot;buggy, cantankerous beast&quot; according to our sys admins.
<br>
<p>Not a reputation we should be encouraging.
<br>
<p>Turning this off by default allows those more adventurous souls to explore
<br>
this capability, while letting our production-oriented customers install
<br>
and run in peace.
<br>
<p>Ralph
<br>
<p><p><p><span class="quotelev1">&gt; On Jul 14, 2008, at 9:21 AM, Pavel Shamis (Pasha) wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Should we not even build support for it?
</span><br>
<span class="quotelev2">&gt;&gt; I think IBCM CPC build should be enabled by default. The IBCM is
</span><br>
<span class="quotelev2">&gt;&gt; supplied with OFED so it should not be any problem during install.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ok.  But remember that there are at least some OS's where /dev/ucm* do
</span><br>
<span class="quotelev1">&gt; *not* get created by default for some unknown reason (even though IBCM
</span><br>
<span class="quotelev1">&gt; is installed).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PRO: don't even allow the possibility of running with it, because
</span><br>
<span class="quotelev3">&gt;&gt;&gt; we know that there are issues with the ibcm userspace library
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (i.e., reduce problem reports from users)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PRO: users don't have to have libibcm installed on compute nodes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (we've actually gotten some complaints about this)
</span><br>
<span class="quotelev2">&gt;&gt; We got compliances only for case when ompi was build on platform
</span><br>
<span class="quotelev2">&gt;&gt; with IBCM and after it was run on platform without IBCM.  Also we
</span><br>
<span class="quotelev2">&gt;&gt; did not have option to disable
</span><br>
<span class="quotelev2">&gt;&gt; the ibcm during compilation. So actually it was no way to install
</span><br>
<span class="quotelev2">&gt;&gt; OMPI on compute node. We added the option and the problem was
</span><br>
<span class="quotelev2">&gt;&gt; resolved.
</span><br>
<span class="quotelev2">&gt;&gt; In most cases the OFED install is the same on all nodes and it
</span><br>
<span class="quotelev2">&gt;&gt; should not be any problem to build IBCM support by default.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ok, sounds good.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4345.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<li><strong>Previous message:</strong> <a href="4343.php">Sean Hefty: "Re: [OMPI devel] IBCM error"</a>
<li><strong>In reply to:</strong> <a href="4342.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4353.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<li><strong>Reply:</strong> <a href="4353.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
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
