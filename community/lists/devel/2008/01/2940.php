<?
$subject_val = "Re: [OMPI devel] SDP support for OPEN-MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  8 07:45:33 2008" -->
<!-- isoreceived="20080108124533" -->
<!-- sent="Tue, 8 Jan 2008 14:45:25 +0200" -->
<!-- isosent="20080108124525" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lennyb_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SDP support for OPEN-MPI" -->
<!-- id="39C75744D164D948A170E9792AF8E7CA4296D2_at_exil.voltaire.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="0CBFB051-C74E-4937-9A75-D25C721CC3CD_at_cisco.com" -->
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
<strong>Date:</strong> 2008-01-08 07:45:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2941.php">Jeff Squyres: "Re: [OMPI devel] Cisco MTT runs"</a>
<li><strong>Previous message:</strong> <a href="2939.php">Josh Hursey: "Re: [OMPI devel] Cisco MTT runs"</a>
<li><strong>In reply to:</strong> <a href="2922.php">Jeff Squyres: "Re: [OMPI devel] SDP support for OPEN-MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2942.php">Jeff Squyres: "Re: [OMPI devel] SDP support for OPEN-MPI"</a>
<li><strong>Reply:</strong> <a href="2942.php">Jeff Squyres: "Re: [OMPI devel] SDP support for OPEN-MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;Hi all,
<br>
Hi,
<br>
Thanks for the responses.
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]]
</span><br>
On
<br>
<span class="quotelev1">&gt; Behalf Of Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, January 02, 2008 4:08 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] SDP support for OPEN-MPI
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 1, 2008, at 1:11 PM, Andrew Friedley wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; We would like to add SDP support for OPENMPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a few points -- this is the first:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would do this patch slightly differently.  I prefer to have as few
</span><br>
<span class="quotelev1">&gt; #if's as possible, so I'd do it to always have the struct members and
</span><br>
<span class="quotelev1">&gt; logic for the MCA-enable/disable of SDP support, but only actually
</span><br>
<span class="quotelev1">&gt; enable it if HAVE_DECL_AF_INET_SDP.  Hence, the number of #if's is
</span><br>
<span class="quotelev1">&gt; dramatically reduced -- you only need to #if the parts of the code
</span><br>
<span class="quotelev1">&gt; that actually try to use AF_INET_SDP (etc.).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'd also ditch the --enable-sdp; I think configure can figure that
</span><br>
<span class="quotelev1">&gt; stuff out by itself without an --enable switch.  Perhaps if people
</span><br>
<span class="quotelev1">&gt; really want the ability to turn SDP off at configure time, --disable-
</span><br>
<span class="quotelev1">&gt; sdp could be useful.  But that might not be too useful.
</span><br>
Unfortunatly AF_INET_SDP is not defined in the glibc and there is no
<br>
easy way to check it during config, Each app that uses SDP defines
<br>
AF_INET_SDP in its own headers.
<br>
Since the user can compile on the machine without SDP support and to
<br>
minimize the number of #if's we can always compile code with
<br>
sdp_support.
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Don't forget that we always have the &quot;bool&quot; type available; you can
</span><br>
<span class="quotelev1">&gt; use that for logicals (instead of int).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'd also add another MCA param that is read-only that indicates
</span><br>
<span class="quotelev1">&gt; whether SDP is support was compiled in or not (i.e.,
</span><br>
<span class="quotelev1">&gt; HAVE_DECL_AF_INET_SDP is 1, and therefore there was a value for
</span><br>
<span class="quotelev1">&gt; AF_INET_SDP).  This will allow you to query ompi_info and see if your
</span><br>
<span class="quotelev1">&gt; OMPI was configured for SDP support.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That way, you can have a consistent set of MCA params for the TCP
</span><br>
<span class="quotelev1">&gt; components regardless of platform.  I think that's somewhat
</span><br>
<span class="quotelev1">&gt; important.  To be user-friendly, I'd also emit a warning if someone
</span><br>
<span class="quotelev1">&gt; tries to enable SDP support and it's not available.  Note that SDP
</span><br>
<span class="quotelev1">&gt; could be unavailable for multiple reasons:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - wasn't available at compile time
</span><br>
<span class="quotelev1">&gt; - isn't available for the peer IP address that was used
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hence, if HAVE_DECL_AF_INET_SDP==1 and using AF_INET_SDP fails to that
</span><br>
<span class="quotelev1">&gt; peer, it might be desirable to try to fail over to using
</span><br>
<span class="quotelev1">&gt; AF_INET_something_else.  I'm still technically on vacation :-), so I
</span><br>
<span class="quotelev1">&gt; didn't look *too* closely at your patch, but I think you're doing that
</span><br>
<span class="quotelev1">&gt; (failing over if AF_INET_SDP doesn't work because of EAFNOSUPPORT),
</span><br>
<span class="quotelev1">&gt; which is good.
</span><br>
This is actually not implemented yet. 
<br>
Supporting failing over requires opening AF_INET sockets in addition to
<br>
SDP sockets, this can cause a problem in large clusters. 
<br>
If one of the machine is not supporting SDP user will get an error.
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would think the following would apply:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Error (or warning?): user requests SDP and HAVE_DECL_AF_INET_SDP is
</span><br>
0
<br>
<span class="quotelev1">&gt; - Error (or warning?): user requests SDP and HAVE_DECL_AF_INET_SDP is
</span><br>
<span class="quotelev1">&gt; 1, but using AF_INET_SDP failed
</span><br>
<span class="quotelev1">&gt; - Not an error: user does not request SDP, but HAVE_DECL_AF_INET_SDP
</span><br>
<span class="quotelev1">&gt; is 1 and AF_INET_SDP works
</span><br>
<span class="quotelev1">&gt; - Not an error: user does not request SDP, but HAVE_DECL_AF_INET_SDP
</span><br>
<span class="quotelev1">&gt; is 1 and AF_INET_SDP does not work, but is able to fail over to
</span><br>
<span class="quotelev1">&gt; AF_INET_something_else
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With all this, the support is still somewhat inconsistent -- you could
</span><br>
<span class="quotelev1">&gt; be using an OMPI that has HAVE_DECL_AF_INET_SDP==0, but you're running
</span><br>
<span class="quotelev1">&gt; on a system that has SDP available.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Perhaps a more general approach would be to [perhaps additionally]
</span><br>
<span class="quotelev1">&gt; provide an MCA param to allow the user to specify the AF_* value?
</span><br>
<span class="quotelev1">&gt; (AF_INET_SDP is a standardized value, right?  I.e., will it be the
</span><br>
<span class="quotelev1">&gt; same on all Linux variants [and someday Solaris]?)
</span><br>
I didn't find any standard on it, it seems to be &quot;randomly&quot; selected
<br>
since the originally it was 26 and changed to 27 due to conflict with
<br>
kernel's defines.
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; SDP can be used to accelerate job start ( oob over sdp ) and IPoIB
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; performance.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I fail to see the reason to pollute the TCP btl with IB-specific
</span><br>
<span class="quotelev3">&gt; &gt;&gt; SDP stuff.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; For the oob, this is arguable, but doesn't SDP allow for
</span><br>
<span class="quotelev3">&gt; &gt;&gt; *transparent*
</span><br>
<span class="quotelev3">&gt; &gt;&gt; socket replacement at runtime ? In this case, why not use this
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mechanism
</span><br>
<span class="quotelev3">&gt; &gt;&gt; and keep the code clean ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Patrick's got a good point: is there a reason not to do this?
</span><br>
<span class="quotelev1">&gt; (LD_PRELOAD and the like)  Is it problematic with the remote orted's?
</span><br>
Yes, it's problematic with remote orted's and it not really transparent
<br>
as you might think.
<br>
Since we can't pass environments' variables to the orted's during
<br>
runtime we must preload sdp library to each remote environment ( i.e.
<br>
bashrc ) This will cause all applications to use SDP instead of AF_INET.
<br>
Which means you can't choose specific protocol for specific application,
<br>
either you are using SDP or AF_INET for all.
<br>
SDP also can be loaded with appropriate /usr/local/ofed/etc/libsdp.conf
<br>
configuration but a simple user have no access to it usually.
<br>
(<a href="http://www.cisco.com/univercd/cc/td/doc/product/svbu/ofed/ofed_1_1/ofed">http://www.cisco.com/univercd/cc/td/doc/product/svbu/ofed/ofed_1_1/ofed</a>
<br>
_ug/sdp.htm#wp952927)
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Furthermore, why would a user choose to use SDP and TCP/IPoIB when
</span><br>
the
<br>
<span class="quotelev2">&gt; &gt; OpenIB BTL is available using the native verbs interface?  FWIW,
</span><br>
this
<br>
<span class="quotelev2">&gt; &gt; same sort of question gets asked of the uDAPL BTL -- the answer
</span><br>
there
<br>
<span class="quotelev2">&gt; &gt; being that the uDAPL BTL runs in places the OpenIB BTL does not.  Is
</span><br>
<span class="quotelev2">&gt; &gt; this true here as well?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Andrew's got a point point here, too -- accelerating the TCP BTL with
</span><br>
<span class="quotelev1">&gt; SDP seems kinda pointless.  I'm guessing that you did it because it
</span><br>
<span class="quotelev1">&gt; was just about the same work as was done in the TCP OOB (for which we
</span><br>
<span class="quotelev1">&gt; have no corresponding verbs interface).  Is that right?
</span><br>
Indeed. But it also seems that SDP has lower overhead than VERBS in some
<br>
cases.
<br>
<p>Tests with Sandia's overlapping benchmark 
<br>
<a href="http://www.cs.sandia.gov/smb/overhead.html#mozTocId316713">http://www.cs.sandia.gov/smb/overhead.html#mozTocId316713</a>
<br>
<p>VERBS results
<br>
msgsize iterations  iter_t      work_t      overhead    base_t
<br>
avail(%)
<br>
0       1000        16.892      15.309      1.583       7.029       77.5
<br>
2       1000        16.852      15.332      1.520       7.144       78.7
<br>
4       1000        16.932      15.312      1.620       7.128       77.3
<br>
8       1000        16.985      15.319      1.666       7.182       76.8
<br>
16      1000        16.886      15.297      1.589       7.219       78.0
<br>
32      1000        16.988      15.311      1.677       7.251       76.9
<br>
64      1000        16.944      15.299      1.645       7.457       77.9
<br>
<p>SDP results
<br>
0       1000        134.902     128.089     6.813       54.691      87.5
<br>
2       1000        135.064     128.196     6.868       55.283      87.6
<br>
4       1000        135.031     128.356     6.675       55.039      87.9
<br>
8       1000        130.460     125.908     4.552       52.010      91.2
<br>
16      1000        135.432     128.694     6.738       55.615      87.9
<br>
32      1000        135.228     128.494     6.734       55.627      87.9
<br>
64      1000        135.470     128.540     6.930       56.583      87.8
<br>
<p>IPoIB results
<br>
0       1000        252.953     247.053     5.900       119.977     95.1
<br>
2       1000        253.336     247.285     6.051       121.573     95.0
<br>
4       1000        254.147     247.041     7.106       122.110     94.2
<br>
8       1000        254.613     248.011     6.602       121.840     94.6
<br>
16      1000        255.662     247.952     7.710       124.738     93.8
<br>
32      1000        255.569     248.057     7.512       127.095     94.1
<br>
64      1000        255.867     248.308     7.559       132.858     94.3
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2941.php">Jeff Squyres: "Re: [OMPI devel] Cisco MTT runs"</a>
<li><strong>Previous message:</strong> <a href="2939.php">Josh Hursey: "Re: [OMPI devel] Cisco MTT runs"</a>
<li><strong>In reply to:</strong> <a href="2922.php">Jeff Squyres: "Re: [OMPI devel] SDP support for OPEN-MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2942.php">Jeff Squyres: "Re: [OMPI devel] SDP support for OPEN-MPI"</a>
<li><strong>Reply:</strong> <a href="2942.php">Jeff Squyres: "Re: [OMPI devel] SDP support for OPEN-MPI"</a>
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
