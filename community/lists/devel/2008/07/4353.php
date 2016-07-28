<?
$subject_val = "Re: [OMPI devel] IBCM error";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 15 07:05:41 2008" -->
<!-- isoreceived="20080715110541" -->
<!-- sent="Tue, 15 Jul 2008 07:05:35 -0400" -->
<!-- isosent="20080715110535" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] IBCM error" -->
<!-- id="26433FBC-13B6-4970-8A19-818BC84C5C8C_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="44494.128.165.0.81.1216062253.squirrel_at_webmail.lanl.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-15 07:05:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4354.php">Ralph Castain: "Re: [OMPI devel] IBCM error"</a>
<li><strong>Previous message:</strong> <a href="4352.php">Pavel Shamis (Pasha): "Re: [OMPI devel] IBCM error"</a>
<li><strong>In reply to:</strong> <a href="4344.php">Ralph H. Castain: "Re: [OMPI devel] IBCM error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4354.php">Ralph Castain: "Re: [OMPI devel] IBCM error"</a>
<li><strong>Reply:</strong> <a href="4354.php">Ralph Castain: "Re: [OMPI devel] IBCM error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 14, 2008, at 3:04 PM, Ralph H. Castain wrote:
<br>
<p><span class="quotelev1">&gt; I've been quietly following this discussion, but now feel a need to  
</span><br>
<span class="quotelev1">&gt; jump
</span><br>
<span class="quotelev1">&gt; in here. I really must disagree with the idea of building either  
</span><br>
<span class="quotelev1">&gt; IBCM or
</span><br>
<span class="quotelev1">&gt; RDMACM support by default. Neither of these has been proven to  
</span><br>
<span class="quotelev1">&gt; reliably
</span><br>
<span class="quotelev1">&gt; work, or to be advantageous. Our own experiences in testing them  
</span><br>
<span class="quotelev1">&gt; have been
</span><br>
<span class="quotelev1">&gt; slightly negative at best. When the did work, they were slower, didn't
</span><br>
<span class="quotelev1">&gt; scale well, and unreliable.
</span><br>
<p>Minor clarification: we did not test RDMACM on RoadRunner.
<br>
<p>We only tested IBCM at scale (not RDMACM) and ran into a variety of  
<br>
issues -- most of which were bugs in Open MPI's use of IBCM -- that  
<br>
culminated in the ib_cm_listen() problem.  That problem is currently  
<br>
unsolved, and I agree that it unfortunately currently makes OMPI's  
<br>
IBCM support fairly useless.  Bonk.
<br>
<p>IBCM was thought to be a nice thing: a cheap/fast way to make IB  
<br>
connections that would get OOB out of the picture.  If the  
<br>
ib_cm_listen() problem is fixed, it may still be (Sean had an  
<br>
interesting suggestion; we'll see where it goes).  But I totally agree  
<br>
that it is somewhat of an unknown quantity at this point.  I also  
<br>
agree that the IBCM support in OMPI is not *necessary* because OOB  
<br>
works just fine (especially with the scalability improvements in v1.3).
<br>
<p>RDMACM, on the other hand, is *necessary* for iWARP connections.  We  
<br>
know it won't scale well because of ARP issues, to which the iWARP  
<br>
vendors are publishing their own solutions (pre-populating ARP caches,  
<br>
etc.).  Even when built and installed, RDMACM will not be used by  
<br>
default for IB hardware (you have to specifically ask for it).  Since  
<br>
it's necessary for iWARP, I think we need to build and install it by  
<br>
default.  Most importantly: production IB users won't be disturbed.
<br>
<p><span class="quotelev1">&gt; I'm not trying to rain on anyone's parade. These are worthwhile in the
</span><br>
<span class="quotelev1">&gt; long term. However, they clearly need further work to be &quot;ready for  
</span><br>
<span class="quotelev1">&gt; prime
</span><br>
<span class="quotelev1">&gt; time&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Accordingly, I would recommend that they -only- be built if  
</span><br>
<span class="quotelev1">&gt; specifically
</span><br>
<span class="quotelev1">&gt; requested. Remember, most of our users just build blindly. It makes no
</span><br>
<span class="quotelev1">&gt; sense to have them build support for what can only be classed as an
</span><br>
<span class="quotelev1">&gt; experimental capability at this time.
</span><br>
<p>I defer to Mellanox for a decision about the IBCM CPC.
<br>
<p>But for the RDMACM, per above, I am still in favor of building and  
<br>
installing it by default.
<br>
<p><span class="quotelev1">&gt; Also, note that the OFED install is less-than-reliable wrt IBCM and
</span><br>
<span class="quotelev1">&gt; RDMACM.
</span><br>
<p>True; the OFED install is less-than-reliable w.r.t. IBCM per the  
<br>
previously-discussed issue of not necessarily creating the /dev/ 
<br>
infiniband/ucm* devices.  There's a ticket open on the OpenFabrics  
<br>
bugzilla about it.  I wish it would get fixed.  :-)
<br>
<p>But I've not seen any problems with OFED's RDMACM installation.
<br>
<p>The only issue I've seen with RDMACM is when sites consciously chose  
<br>
to put the RDMACM libraries and/or modules on the head node (and  
<br>
therefore OMPI built support for it), but then chose not put them out  
<br>
on back-end compute nodes.  Keep in mind that this is *not* the  
<br>
default OFED installation pattern -- a human has to go manually modify  
<br>
a file to make it do that (I don't believe that there's even a menu  
<br>
option for that installation mode; you have to go hand-edit an OFED  
<br>
installation configuration file or simply choose not to put / remove  
<br>
certain RPMs out on back-end nodes).
<br>
<p><span class="quotelev1">&gt; We have spent considerable time chasing down installation problems
</span><br>
<span class="quotelev1">&gt; that allowed the system to build, but then caused it to crash-and- 
</span><br>
<span class="quotelev1">&gt; burn if
</span><br>
<span class="quotelev1">&gt; we attempted to use it. We have gained experience at knowing when/ 
</span><br>
<span class="quotelev1">&gt; where to
</span><br>
<span class="quotelev1">&gt; look now, but that doesn't lessen the reputation impact OMPI is  
</span><br>
<span class="quotelev1">&gt; getting as
</span><br>
<span class="quotelev1">&gt; a &quot;buggy, cantankerous beast&quot; according to our sys admins.
</span><br>
<p>Isn't the whole point of pre-release test versions is to find and fix  
<br>
such bugs?  ;-)
<br>
<p><span class="quotelev1">&gt; Not a reputation we should be encouraging.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Turning this off by default allows those more adventurous souls to  
</span><br>
<span class="quotelev1">&gt; explore
</span><br>
<span class="quotelev1">&gt; this capability, while letting our production-oriented customers  
</span><br>
<span class="quotelev1">&gt; install
</span><br>
<span class="quotelev1">&gt; and run in peace.
</span><br>
<p><p>Pasha was recommending that IBCM be built by default *but not used by  
<br>
default*.  So production users would still be able to run in peace --  
<br>
OOB will still be the default.  I see it pretty much like SLURM  
<br>
support: it's built by default, but it won't activate itself unless  
<br>
relevant.  But like I said above, I defer to Mellanox for IBCM.  :-)
<br>
<p>Just my $0.00000000002...
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
<li><strong>Next message:</strong> <a href="4354.php">Ralph Castain: "Re: [OMPI devel] IBCM error"</a>
<li><strong>Previous message:</strong> <a href="4352.php">Pavel Shamis (Pasha): "Re: [OMPI devel] IBCM error"</a>
<li><strong>In reply to:</strong> <a href="4344.php">Ralph H. Castain: "Re: [OMPI devel] IBCM error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4354.php">Ralph Castain: "Re: [OMPI devel] IBCM error"</a>
<li><strong>Reply:</strong> <a href="4354.php">Ralph Castain: "Re: [OMPI devel] IBCM error"</a>
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
