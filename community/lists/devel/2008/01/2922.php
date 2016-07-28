<?
$subject_val = "Re: [OMPI devel] SDP support for OPEN-MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  1 21:07:47 2008" -->
<!-- isoreceived="20080102020747" -->
<!-- sent="Tue, 1 Jan 2008 21:07:40 -0500" -->
<!-- isosent="20080102020740" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SDP support for OPEN-MPI" -->
<!-- id="0CBFB051-C74E-4937-9A75-D25C721CC3CD_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="477A825D.2090509_at_open-mpi.org" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-01 21:07:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2923.php">Jeff Squyres: "Re: [OMPI devel] patch for building gm btl"</a>
<li><strong>Previous message:</strong> <a href="2921.php">Jeff Squyres: "Re: [OMPI devel] Cisco MTT runs"</a>
<li><strong>In reply to:</strong> <a href="2920.php">Andrew Friedley: "Re: [OMPI devel] SDP support for OPEN-MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2940.php">Lenny Verkhovsky: "Re: [OMPI devel] SDP support for OPEN-MPI"</a>
<li><strong>Reply:</strong> <a href="2940.php">Lenny Verkhovsky: "Re: [OMPI devel] SDP support for OPEN-MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 1, 2008, at 1:11 PM, Andrew Friedley wrote:
<br>
<p><span class="quotelev3">&gt;&gt;&gt; We would like to add SDP support for OPENMPI.
</span><br>
<p>I have a few points -- this is the first:
<br>
<p>I would do this patch slightly differently.  I prefer to have as few  
<br>
#if's as possible, so I'd do it to always have the struct members and  
<br>
logic for the MCA-enable/disable of SDP support, but only actually  
<br>
enable it if HAVE_DECL_AF_INET_SDP.  Hence, the number of #if's is  
<br>
dramatically reduced -- you only need to #if the parts of the code  
<br>
that actually try to use AF_INET_SDP (etc.).
<br>
<p>I'd also ditch the --enable-sdp; I think configure can figure that  
<br>
stuff out by itself without an --enable switch.  Perhaps if people  
<br>
really want the ability to turn SDP off at configure time, --disable- 
<br>
sdp could be useful.  But that might not be too useful.
<br>
<p>Don't forget that we always have the &quot;bool&quot; type available; you can  
<br>
use that for logicals (instead of int).
<br>
<p>I'd also add another MCA param that is read-only that indicates  
<br>
whether SDP is support was compiled in or not (i.e.,  
<br>
HAVE_DECL_AF_INET_SDP is 1, and therefore there was a value for  
<br>
AF_INET_SDP).  This will allow you to query ompi_info and see if your  
<br>
OMPI was configured for SDP support.
<br>
<p>That way, you can have a consistent set of MCA params for the TCP  
<br>
components regardless of platform.  I think that's somewhat  
<br>
important.  To be user-friendly, I'd also emit a warning if someone  
<br>
tries to enable SDP support and it's not available.  Note that SDP  
<br>
could be unavailable for multiple reasons:
<br>
<p>- wasn't available at compile time
<br>
- isn't available for the peer IP address that was used
<br>
<p>Hence, if HAVE_DECL_AF_INET_SDP==1 and using AF_INET_SDP fails to that  
<br>
peer, it might be desirable to try to fail over to using  
<br>
AF_INET_something_else.  I'm still technically on vacation :-), so I  
<br>
didn't look *too* closely at your patch, but I think you're doing that  
<br>
(failing over if AF_INET_SDP doesn't work because of EAFNOSUPPORT),  
<br>
which is good.
<br>
<p>I would think the following would apply:
<br>
<p>- Error (or warning?): user requests SDP and HAVE_DECL_AF_INET_SDP is 0
<br>
- Error (or warning?): user requests SDP and HAVE_DECL_AF_INET_SDP is  
<br>
1, but using AF_INET_SDP failed
<br>
- Not an error: user does not request SDP, but HAVE_DECL_AF_INET_SDP  
<br>
is 1 and AF_INET_SDP works
<br>
- Not an error: user does not request SDP, but HAVE_DECL_AF_INET_SDP  
<br>
is 1 and AF_INET_SDP does not work, but is able to fail over to  
<br>
AF_INET_something_else
<br>
<p>With all this, the support is still somewhat inconsistent -- you could  
<br>
be using an OMPI that has HAVE_DECL_AF_INET_SDP==0, but you're running  
<br>
on a system that has SDP available.
<br>
<p>Perhaps a more general approach would be to [perhaps additionally]  
<br>
provide an MCA param to allow the user to specify the AF_* value?   
<br>
(AF_INET_SDP is a standardized value, right?  I.e., will it be the  
<br>
same on all Linux variants [and someday Solaris]?)
<br>
<p><span class="quotelev3">&gt;&gt;&gt; SDP can be used to accelerate job start ( oob over sdp ) and IPoIB
</span><br>
<span class="quotelev3">&gt;&gt;&gt; performance.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I fail to see the reason to pollute the TCP btl with IB-specific  
</span><br>
<span class="quotelev2">&gt;&gt; SDP stuff.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For the oob, this is arguable, but doesn't SDP allow for  
</span><br>
<span class="quotelev2">&gt;&gt; *transparent*
</span><br>
<span class="quotelev2">&gt;&gt; socket replacement at runtime ? In this case, why not use this  
</span><br>
<span class="quotelev2">&gt;&gt; mechanism
</span><br>
<span class="quotelev2">&gt;&gt; and keep the code clean ?
</span><br>
<p>Patrick's got a good point: is there a reason not to do this?   
<br>
(LD_PRELOAD and the like)  Is it problematic with the remote orted's?
<br>
<p><span class="quotelev1">&gt; Furthermore, why would a user choose to use SDP and TCP/IPoIB when the
</span><br>
<span class="quotelev1">&gt; OpenIB BTL is available using the native verbs interface?  FWIW, this
</span><br>
<span class="quotelev1">&gt; same sort of question gets asked of the uDAPL BTL -- the answer there
</span><br>
<span class="quotelev1">&gt; being that the uDAPL BTL runs in places the OpenIB BTL does not.  Is
</span><br>
<span class="quotelev1">&gt; this true here as well?
</span><br>
<p><p>Andrew's got a point point here, too -- accelerating the TCP BTL with  
<br>
SDP seems kinda pointless.  I'm guessing that you did it because it  
<br>
was just about the same work as was done in the TCP OOB (for which we  
<br>
have no corresponding verbs interface).  Is that right?
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
<li><strong>Next message:</strong> <a href="2923.php">Jeff Squyres: "Re: [OMPI devel] patch for building gm btl"</a>
<li><strong>Previous message:</strong> <a href="2921.php">Jeff Squyres: "Re: [OMPI devel] Cisco MTT runs"</a>
<li><strong>In reply to:</strong> <a href="2920.php">Andrew Friedley: "Re: [OMPI devel] SDP support for OPEN-MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2940.php">Lenny Verkhovsky: "Re: [OMPI devel] SDP support for OPEN-MPI"</a>
<li><strong>Reply:</strong> <a href="2940.php">Lenny Verkhovsky: "Re: [OMPI devel] SDP support for OPEN-MPI"</a>
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
