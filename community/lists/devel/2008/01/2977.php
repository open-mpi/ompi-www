<?
$subject_val = "Re: [OMPI devel] SDP support for OPEN-MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 15 03:57:36 2008" -->
<!-- isoreceived="20080115085736" -->
<!-- sent="Tue, 15 Jan 2008 10:57:30 +0200" -->
<!-- isosent="20080115085730" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lennyb_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SDP support for OPEN-MPI" -->
<!-- id="39C75744D164D948A170E9792AF8E7CA4296EF_at_exil.voltaire.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="986DB5E1-412D-4B48-865B-7A8820430FAB_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] SDP support for OPEN-MPI<br>
<strong>From:</strong> Lenny Verkhovsky (<em>lennyb_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-15 03:57:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2978.php">Peter Breitenlohner: "[OMPI devel] patch for mpirun.1 manpage"</a>
<li><strong>Previous message:</strong> <a href="2976.php">Jeff Squyres: "Re: [OMPI devel] Integrating the memchecker branch"</a>
<li><strong>In reply to:</strong> <a href="2975.php">Jeff Squyres: "Re: [OMPI devel] SDP support for OPEN-MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3003.php">Jeff Squyres: "Re: [OMPI devel] SDP support for OPEN-MPI"</a>
<li><strong>Reply:</strong> <a href="3003.php">Jeff Squyres: "Re: [OMPI devel] SDP support for OPEN-MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]]
</span><br>
On
<br>
<span class="quotelev1">&gt; Behalf Of Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, January 15, 2008 6:13 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] SDP support for OPEN-MPI
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 13, 2008, at 8:19 AM, Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; What I meant was try to open an SDP socket.  If it fails because
</span><br>
SDP
<br>
<span class="quotelev3">&gt; &gt; &gt; is not supported / available to that peer, then open a regular
</span><br>
<span class="quotelev3">&gt; &gt; &gt; socket.  So you should still always have only 1 socket open to a
</span><br>
<span class="quotelev2">&gt; &gt; peer
</span><br>
<span class="quotelev3">&gt; &gt; &gt; (not 2).
</span><br>
<span class="quotelev2">&gt; &gt; Yes, but since the listener side doesn't know on which socket to
</span><br>
<span class="quotelev2">&gt; &gt; expect
</span><br>
<span class="quotelev2">&gt; &gt; a message it will need both sockets to be opened.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ah, you meant the listener socket -- not 2 sockets to each peer.  Ok,
</span><br>
<span class="quotelev1">&gt; fair enough.  Opening up one more listener socket in each process is
</span><br>
<span class="quotelev1">&gt; no big deal (IMO).
</span><br>
I thought in a large cluster it can be a problem.
<br>
<p><span class="quotelev4">&gt; &gt; &gt; &gt; If one of the machine is not supporting SDP user will get an
</span><br>
<span class="quotelev2">&gt; &gt; error.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Well, that's one way to go, but it's certainly less friendly.  It
</span><br>
<span class="quotelev3">&gt; &gt; &gt; means that the entire MPI job has to support SDP -- including
</span><br>
<span class="quotelev2">&gt; &gt; mpirun.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; What about clusters that do not have IB on the head node?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; They can use OOB over IP sockets and BTL on SDP, it should work.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, I'm fine with this -- IIRC, my point was that if SDP is not
</span><br>
<span class="quotelev1">&gt; available (and the user didn't explicitly ask for it), then it should
</span><br>
<span class="quotelev1">&gt; not be an error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; Perhaps a more general approach would be to [perhaps
</span><br>
<span class="quotelev2">&gt; &gt; additionally]
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; provide an MCA param to allow the user to specify the AF_*
</span><br>
value?
<br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; (AF_INET_SDP is a standardized value, right?  I.e., will it be
</span><br>
<span class="quotelev2">&gt; &gt; the
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; same on all Linux variants [and someday Solaris]?)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; I didn't find any standard on it, it seems to be &quot;randomly&quot;
</span><br>
<span class="quotelev2">&gt; &gt; selected
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; since the originally it was 26 and changed to 27 due to conflict
</span><br>
<span class="quotelev2">&gt; &gt; with
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; kernel's defines.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; This might make an even stronger case for having an MCA param for
</span><br>
it
<br>
<span class="quotelev3">&gt; &gt; &gt; -- if the AF_INET_SDP value is so broken that it's effectively
</span><br>
<span class="quotelev2">&gt; &gt; random,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; it may be necessary to override it on some platforms (especially
</span><br>
in
<br>
<span class="quotelev3">&gt; &gt; &gt; light of binary OMPI and OFED distributions that may not match).
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If we talking about passing AF_INET_SDP value only then
</span><br>
<span class="quotelev2">&gt; &gt; 1. Passing this value as mca parameter will not make any changes to
</span><br>
<span class="quotelev2">&gt; &gt; the
</span><br>
<span class="quotelev2">&gt; &gt; SDP code.
</span><br>
<span class="quotelev2">&gt; &gt; 2. Hopefully in the future AF_INET_SDP value can be gotten from the
</span><br>
<span class="quotelev2">&gt; &gt; libc,
</span><br>
<span class="quotelev2">&gt; &gt; And the value will be configured automatically.
</span><br>
<span class="quotelev2">&gt; &gt; 3. If we are talking about AF_INET value in general ( IPv4, IPv6,
</span><br>
SDP)
<br>
<span class="quotelev2">&gt; &gt; Then by making it constant with mca parameter we are limiting
</span><br>
<span class="quotelev2">&gt; &gt; ourselves
</span><br>
<span class="quotelev2">&gt; &gt; for one protocol only without being able to failover or using
</span><br>
<span class="quotelev2">&gt; &gt; different
</span><br>
<span class="quotelev2">&gt; &gt; protocols for different needs ( i.e. SDP for OOB and IPv4 for BTL )
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not sure what you mean.  The AF_INET values for v4 and v6 are
</span><br>
<span class="quotelev1">&gt; constantly compiled into OMPI via whatever values they are in the
</span><br>
<span class="quotelev1">&gt; system header files.  They're standardized values, right?
</span><br>
Yes.
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My understanding of what you were saying was that AF_INET_SDP is *not*
</span><br>
<span class="quotelev1">&gt; standardized such that it may actually be different values on
</span><br>
<span class="quotelev1">&gt; different systems.  Hence, an MPI app could be otherwise portable but
</span><br>
<span class="quotelev1">&gt; have a wrong value for AF_INET_SDP compiled into its code.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are you saying something else?
</span><br>
I thought you were talking about porting general AF_INET value (
<br>
IPv4,IPv6,SDP...). 
<br>
I do think that AF_INET_SDP will be standardized once, and will be a
<br>
constant value in the meanwhile for all systems.
<br>
Porting AF_INET_SDP will not minimize code changing, but will lower
<br>
flexibility ( using it for BTL and OOB independently). 
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; Patrick's got a good point: is there a reason not to do this?
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; (LD_PRELOAD and the like)  Is it problematic with the remote
</span><br>
<span class="quotelev2">&gt; &gt; orted's?
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Yes, it's problematic with remote orted's and it not really
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; transparent
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; as you might think.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Since we can't pass environments' variables to the orted's
</span><br>
during
<br>
<span class="quotelev4">&gt; &gt; &gt; &gt; runtime
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I think this depends on your environment.  If you're not using rsh
</span><br>
<span class="quotelev3">&gt; &gt; &gt; (which you shouldn't be for a large cluster, which is where SDP
</span><br>
<span class="quotelev2">&gt; &gt; would
</span><br>
<span class="quotelev3">&gt; &gt; &gt; matter most, right?), the resource manager typically copies the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; environment out to the cluster nodes.  So an LD_PRELOAD value
</span><br>
should
<br>
<span class="quotelev3">&gt; &gt; &gt; be set for the orteds as well.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I agree that it's problematic for rsh, but that might also be
</span><br>
<span class="quotelev2">&gt; &gt; solvable
</span><br>
<span class="quotelev3">&gt; &gt; &gt; (with some limits; there's only so many characters that we can
</span><br>
<span class="quotelev2">&gt; &gt; pass on
</span><br>
<span class="quotelev3">&gt; &gt; &gt; the command line -- we did investigate having a wrapper to the
</span><br>
orted
<br>
<span class="quotelev3">&gt; &gt; &gt; at one point to accept environment variables and then launch the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; orted, but this was so problematic / klunky that we abandoned the
</span><br>
<span class="quotelev2">&gt; &gt; idea).
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Using LD_PRELOAD will not allow us to use SDP and IP separately,
</span><br>
i.e.
<br>
<span class="quotelev2">&gt; &gt; SDP for OOB and IP for a BTL.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Why would you want to do that?  I would think that the biggest win
</span><br>
<span class="quotelev1">&gt; here would be SDP for OOB -- the heck with the BTL.  The BTL was just
</span><br>
<span class="quotelev1">&gt; done for completeness (right?); if you have OpenFabrics support, you
</span><br>
<span class="quotelev1">&gt; should be using the verbs BTL.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Perhaps I don't understand exactly what you are proposing.  I was
</span><br>
<span class="quotelev1">&gt; under the impression that you were going after a common case: mpirun
</span><br>
<span class="quotelev1">&gt; and the MPI jobs are running on back-end compute nodes where all of
</span><br>
<span class="quotelev1">&gt; them support SDP (although the other case of mpirun running on the
</span><br>
<span class="quotelev1">&gt; head node without SDP and all the MPI processes are running on back-
</span><br>
<span class="quotelev1">&gt; end nodes with SDP is also not-uncommon...).  Are you thinking of
</span><br>
<span class="quotelev1">&gt; something else, or are you looking for more flexibility?
</span><br>
I am just looking for more flexibility for the end user.
<br>
<p><span class="quotelev1">&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2978.php">Peter Breitenlohner: "[OMPI devel] patch for mpirun.1 manpage"</a>
<li><strong>Previous message:</strong> <a href="2976.php">Jeff Squyres: "Re: [OMPI devel] Integrating the memchecker branch"</a>
<li><strong>In reply to:</strong> <a href="2975.php">Jeff Squyres: "Re: [OMPI devel] SDP support for OPEN-MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3003.php">Jeff Squyres: "Re: [OMPI devel] SDP support for OPEN-MPI"</a>
<li><strong>Reply:</strong> <a href="3003.php">Jeff Squyres: "Re: [OMPI devel] SDP support for OPEN-MPI"</a>
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
