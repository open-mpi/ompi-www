<?
$subject_val = "Re: [OMPI devel] IBCM error";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 15 07:31:55 2008" -->
<!-- isoreceived="20080715113155" -->
<!-- sent="Tue, 15 Jul 2008 05:30:58 -0600" -->
<!-- isosent="20080715113058" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] IBCM error" -->
<!-- id="C4A1E692.58A5%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="26433FBC-13B6-4970-8A19-818BC84C5C8C_at_cisco.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-15 07:30:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4355.php">Pavel Shamis (Pasha): "Re: [OMPI devel] IBCM error"</a>
<li><strong>Previous message:</strong> <a href="4353.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<li><strong>In reply to:</strong> <a href="4353.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4355.php">Pavel Shamis (Pasha): "Re: [OMPI devel] IBCM error"</a>
<li><strong>Reply:</strong> <a href="4355.php">Pavel Shamis (Pasha): "Re: [OMPI devel] IBCM error"</a>
<li><strong>Reply:</strong> <a href="4356.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 7/15/08 5:05 AM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Jul 14, 2008, at 3:04 PM, Ralph H. Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I've been quietly following this discussion, but now feel a need to
</span><br>
<span class="quotelev2">&gt;&gt; jump
</span><br>
<span class="quotelev2">&gt;&gt; in here. I really must disagree with the idea of building either
</span><br>
<span class="quotelev2">&gt;&gt; IBCM or
</span><br>
<span class="quotelev2">&gt;&gt; RDMACM support by default. Neither of these has been proven to
</span><br>
<span class="quotelev2">&gt;&gt; reliably
</span><br>
<span class="quotelev2">&gt;&gt; work, or to be advantageous. Our own experiences in testing them
</span><br>
<span class="quotelev2">&gt;&gt; have been
</span><br>
<span class="quotelev2">&gt;&gt; slightly negative at best. When the did work, they were slower, didn't
</span><br>
<span class="quotelev2">&gt;&gt; scale well, and unreliable.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Minor clarification: we did not test RDMACM on RoadRunner.
</span><br>
<p>Just for further clarification - I did, and it wasn't a particularly good
<br>
experience. Encountered several problems, none of them overwhelming, hence
<br>
my comments.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We only tested IBCM at scale (not RDMACM) and ran into a variety of
</span><br>
<span class="quotelev1">&gt; issues -- most of which were bugs in Open MPI's use of IBCM -- that
</span><br>
<span class="quotelev1">&gt; culminated in the ib_cm_listen() problem.  That problem is currently
</span><br>
<span class="quotelev1">&gt; unsolved, and I agree that it unfortunately currently makes OMPI's
</span><br>
<span class="quotelev1">&gt; IBCM support fairly useless.  Bonk.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; IBCM was thought to be a nice thing: a cheap/fast way to make IB
</span><br>
<span class="quotelev1">&gt; connections that would get OOB out of the picture.  If the
</span><br>
<span class="quotelev1">&gt; ib_cm_listen() problem is fixed, it may still be (Sean had an
</span><br>
<span class="quotelev1">&gt; interesting suggestion; we'll see where it goes).  But I totally agree
</span><br>
<span class="quotelev1">&gt; that it is somewhat of an unknown quantity at this point.  I also
</span><br>
<span class="quotelev1">&gt; agree that the IBCM support in OMPI is not *necessary* because OOB
</span><br>
<span class="quotelev1">&gt; works just fine (especially with the scalability improvements in v1.3).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; RDMACM, on the other hand, is *necessary* for iWARP connections.  We
</span><br>
<span class="quotelev1">&gt; know it won't scale well because of ARP issues, to which the iWARP
</span><br>
<span class="quotelev1">&gt; vendors are publishing their own solutions (pre-populating ARP caches,
</span><br>
<span class="quotelev1">&gt; etc.).  Even when built and installed, RDMACM will not be used by
</span><br>
<span class="quotelev1">&gt; default for IB hardware (you have to specifically ask for it).  Since
</span><br>
<span class="quotelev1">&gt; it's necessary for iWARP, I think we need to build and install it by
</span><br>
<span class="quotelev1">&gt; default.  Most importantly: production IB users won't be disturbed.
</span><br>
<p>If it is necessary for iWARP, then fine - so long as it is only used if
<br>
specifically requested.
<br>
<p>However, I would also ask that we be able to -not- build it upon request so
<br>
we can be certain a user doesn't attempt to use it by mistake (&quot;gee, that
<br>
looks interesting - let Mikey try it!&quot;). Ditto for ibcm support.
<br>
<p>This way, we can experiment with it and continue to learn the problems
<br>
without forcing our production people to deal with problem tickets because a
<br>
user tried something that has known problems.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm not trying to rain on anyone's parade. These are worthwhile in the
</span><br>
<span class="quotelev2">&gt;&gt; long term. However, they clearly need further work to be &quot;ready for
</span><br>
<span class="quotelev2">&gt;&gt; prime
</span><br>
<span class="quotelev2">&gt;&gt; time&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Accordingly, I would recommend that they -only- be built if
</span><br>
<span class="quotelev2">&gt;&gt; specifically
</span><br>
<span class="quotelev2">&gt;&gt; requested. Remember, most of our users just build blindly. It makes no
</span><br>
<span class="quotelev2">&gt;&gt; sense to have them build support for what can only be classed as an
</span><br>
<span class="quotelev2">&gt;&gt; experimental capability at this time.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I defer to Mellanox for a decision about the IBCM CPC.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But for the RDMACM, per above, I am still in favor of building and
</span><br>
<span class="quotelev1">&gt; installing it by default.
</span><br>
<p>Like I said, no problem - but give me a configure option so I can -not-
<br>
build it too.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Also, note that the OFED install is less-than-reliable wrt IBCM and
</span><br>
<span class="quotelev2">&gt;&gt; RDMACM.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; True; the OFED install is less-than-reliable w.r.t. IBCM per the
</span><br>
<span class="quotelev1">&gt; previously-discussed issue of not necessarily creating the /dev/
</span><br>
<span class="quotelev1">&gt; infiniband/ucm* devices.  There's a ticket open on the OpenFabrics
</span><br>
<span class="quotelev1">&gt; bugzilla about it.  I wish it would get fixed.  :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But I've not seen any problems with OFED's RDMACM installation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The only issue I've seen with RDMACM is when sites consciously chose
</span><br>
<span class="quotelev1">&gt; to put the RDMACM libraries and/or modules on the head node (and
</span><br>
<span class="quotelev1">&gt; therefore OMPI built support for it), but then chose not put them out
</span><br>
<span class="quotelev1">&gt; on back-end compute nodes.  Keep in mind that this is *not* the
</span><br>
<span class="quotelev1">&gt; default OFED installation pattern -- a human has to go manually modify
</span><br>
<span class="quotelev1">&gt; a file to make it do that (I don't believe that there's even a menu
</span><br>
<span class="quotelev1">&gt; option for that installation mode; you have to go hand-edit an OFED
</span><br>
<span class="quotelev1">&gt; installation configuration file or simply choose not to put / remove
</span><br>
<span class="quotelev1">&gt; certain RPMs out on back-end nodes).
</span><br>
<p>Guess what - we don't always put them out there because - tada - we don't
<br>
use them! What goes out on the backend is a stripped down version of
<br>
libraries we require. Given the huge number of libraries people provide
<br>
(looking at the bigger, beyond OMPI picture), it consumes a lot of limited
<br>
disk space to install every library on every node. So sometimes we build our
<br>
own rpm's to pick up only what we need.
<br>
<p>As long as --without-rdmacm --without-ibcm are present, then we are happy.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We have spent considerable time chasing down installation problems
</span><br>
<span class="quotelev2">&gt;&gt; that allowed the system to build, but then caused it to crash-and-
</span><br>
<span class="quotelev2">&gt;&gt; burn if
</span><br>
<span class="quotelev2">&gt;&gt; we attempted to use it. We have gained experience at knowing when/
</span><br>
<span class="quotelev2">&gt;&gt; where to
</span><br>
<span class="quotelev2">&gt;&gt; look now, but that doesn't lessen the reputation impact OMPI is
</span><br>
<span class="quotelev2">&gt;&gt; getting as
</span><br>
<span class="quotelev2">&gt;&gt; a &quot;buggy, cantankerous beast&quot; according to our sys admins.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Isn't the whole point of pre-release test versions is to find and fix
</span><br>
<span class="quotelev1">&gt; such bugs?  ;-)
</span><br>
<p>Tell that to a sys admin of a production system - better wear your helmet.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Not a reputation we should be encouraging.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Turning this off by default allows those more adventurous souls to
</span><br>
<span class="quotelev2">&gt;&gt; explore
</span><br>
<span class="quotelev2">&gt;&gt; this capability, while letting our production-oriented customers
</span><br>
<span class="quotelev2">&gt;&gt; install
</span><br>
<span class="quotelev2">&gt;&gt; and run in peace.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Pasha was recommending that IBCM be built by default *but not used by
</span><br>
<span class="quotelev1">&gt; default*.  So production users would still be able to run in peace --
</span><br>
<span class="quotelev1">&gt; OOB will still be the default.  I see it pretty much like SLURM
</span><br>
<span class="quotelev1">&gt; support: it's built by default, but it won't activate itself unless
</span><br>
<span class="quotelev1">&gt; relevant.  But like I said above, I defer to Mellanox for IBCM.  :-)
</span><br>
<p>I can turn off building SLURM support - can I do the same with ibcm and
<br>
rdmacm? No - which is the crux of the problem.
<br>
<p>Ralph
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just my $0.00000000002...
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4355.php">Pavel Shamis (Pasha): "Re: [OMPI devel] IBCM error"</a>
<li><strong>Previous message:</strong> <a href="4353.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<li><strong>In reply to:</strong> <a href="4353.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4355.php">Pavel Shamis (Pasha): "Re: [OMPI devel] IBCM error"</a>
<li><strong>Reply:</strong> <a href="4355.php">Pavel Shamis (Pasha): "Re: [OMPI devel] IBCM error"</a>
<li><strong>Reply:</strong> <a href="4356.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
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
