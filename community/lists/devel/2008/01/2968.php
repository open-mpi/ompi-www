<?
$subject_val = "Re: [OMPI devel] SDP support for OPEN-MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jan 13 08:19:13 2008" -->
<!-- isoreceived="20080113131913" -->
<!-- sent="Sun, 13 Jan 2008 15:19:07 +0200" -->
<!-- isosent="20080113131907" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lennyb_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SDP support for OPEN-MPI" -->
<!-- id="39C75744D164D948A170E9792AF8E7CA4296E7_at_exil.voltaire.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="D2259BD5-6123-414B-8838-22C84FC9DC42_at_cisco.com" -->
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
<strong>Date:</strong> 2008-01-13 08:19:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2969.php">Pavel Shamis (Pasha): "Re: [OMPI devel] [PATCH] openib btl: extensable cpc selection	enablement"</a>
<li><strong>Previous message:</strong> <a href="2967.php">Rayson Ho: "[OMPI devel] On Host Topology Description (carto)"</a>
<li><strong>In reply to:</strong> <a href="2942.php">Jeff Squyres: "Re: [OMPI devel] SDP support for OPEN-MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2975.php">Jeff Squyres: "Re: [OMPI devel] SDP support for OPEN-MPI"</a>
<li><strong>Reply:</strong> <a href="2975.php">Jeff Squyres: "Re: [OMPI devel] SDP support for OPEN-MPI"</a>
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
<span class="quotelev1">&gt; Sent: Tuesday, January 08, 2008 4:32 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] SDP support for OPEN-MPI
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 8, 2008, at 7:45 AM, Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hence, if HAVE_DECL_AF_INET_SDP==1 and using AF_INET_SDP fails to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; that
</span><br>
<span class="quotelev3">&gt; &gt;&gt; peer, it might be desirable to try to fail over to using
</span><br>
<span class="quotelev3">&gt; &gt;&gt; AF_INET_something_else.  I'm still technically on vacation :-), so
</span><br>
I
<br>
<span class="quotelev3">&gt; &gt;&gt; didn't look *too* closely at your patch, but I think you're doing
</span><br>
<span class="quotelev3">&gt; &gt;&gt; that
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (failing over if AF_INET_SDP doesn't work because of EAFNOSUPPORT),
</span><br>
<span class="quotelev3">&gt; &gt;&gt; which is good.
</span><br>
<span class="quotelev2">&gt; &gt; This is actually not implemented yet.
</span><br>
<span class="quotelev2">&gt; &gt; Supporting failing over requires opening AF_INET sockets in addition
</span><br>
<span class="quotelev2">&gt; &gt; to
</span><br>
<span class="quotelev2">&gt; &gt; SDP sockets, this can cause a problem in large clusters.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What I meant was try to open an SDP socket.  If it fails because SDP
</span><br>
<span class="quotelev1">&gt; is not supported / available to that peer, then open a regular
</span><br>
<span class="quotelev1">&gt; socket.  So you should still always have only 1 socket open to a peer
</span><br>
<span class="quotelev1">&gt; (not 2).
</span><br>
Yes, but since the listener side doesn't know on which socket to expect
<br>
a message it will need both sockets to be opened.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; If one of the machine is not supporting SDP user will get an error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Well, that's one way to go, but it's certainly less friendly.  It
</span><br>
<span class="quotelev1">&gt; means that the entire MPI job has to support SDP -- including mpirun.
</span><br>
<span class="quotelev1">&gt; What about clusters that do not have IB on the head node?
</span><br>
<span class="quotelev1">&gt;
</span><br>
They can use OOB over IP sockets and BTL on SDP, it should work.
<br>
&nbsp;
<br>
<span class="quotelev3">&gt; &gt;&gt; Perhaps a more general approach would be to [perhaps additionally]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; provide an MCA param to allow the user to specify the AF_* value?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (AF_INET_SDP is a standardized value, right?  I.e., will it be the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; same on all Linux variants [and someday Solaris]?)
</span><br>
<span class="quotelev2">&gt; &gt; I didn't find any standard on it, it seems to be &quot;randomly&quot; selected
</span><br>
<span class="quotelev2">&gt; &gt; since the originally it was 26 and changed to 27 due to conflict
</span><br>
with
<br>
<span class="quotelev2">&gt; &gt; kernel's defines.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This might make an even stronger case for having an MCA param for it
</span><br>
<span class="quotelev1">&gt; -- if the AF_INET_SDP value is so broken that it's effectively random,
</span><br>
<span class="quotelev1">&gt; it may be necessary to override it on some platforms (especially in
</span><br>
<span class="quotelev1">&gt; light of binary OMPI and OFED distributions that may not match).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
If we talking about passing AF_INET_SDP value only then 
<br>
1. Passing this value as mca parameter will not make any changes to the
<br>
SDP code.
<br>
2. Hopefully in the future AF_INET_SDP value can be gotten from the
<br>
libc, 
<br>
And the value will be configured automatically. 
<br>
3. If we are talking about AF_INET value in general ( IPv4, IPv6, SDP)
<br>
Then by making it constant with mca parameter we are limiting ourselves
<br>
for one protocol only without being able to failover or using different
<br>
protocols for different needs ( i.e. SDP for OOB and IPv4 for BTL )
<br>
<p><p><span class="quotelev3">&gt; &gt;&gt; Patrick's got a good point: is there a reason not to do this?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (LD_PRELOAD and the like)  Is it problematic with the remote
</span><br>
orted's?
<br>
<span class="quotelev2">&gt; &gt; Yes, it's problematic with remote orted's and it not really
</span><br>
<span class="quotelev2">&gt; &gt; transparent
</span><br>
<span class="quotelev2">&gt; &gt; as you might think.
</span><br>
<span class="quotelev2">&gt; &gt; Since we can't pass environments' variables to the orted's during
</span><br>
<span class="quotelev2">&gt; &gt; runtime
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think this depends on your environment.  If you're not using rsh
</span><br>
<span class="quotelev1">&gt; (which you shouldn't be for a large cluster, which is where SDP would
</span><br>
<span class="quotelev1">&gt; matter most, right?), the resource manager typically copies the
</span><br>
<span class="quotelev1">&gt; environment out to the cluster nodes.  So an LD_PRELOAD value should
</span><br>
<span class="quotelev1">&gt; be set for the orteds as well.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I agree that it's problematic for rsh, but that might also be solvable
</span><br>
<span class="quotelev1">&gt; (with some limits; there's only so many characters that we can pass on
</span><br>
<span class="quotelev1">&gt; the command line -- we did investigate having a wrapper to the orted
</span><br>
<span class="quotelev1">&gt; at one point to accept environment variables and then launch the
</span><br>
<span class="quotelev1">&gt; orted, but this was so problematic / klunky that we abandoned the
</span><br>
idea).
<br>
<span class="quotelev1">&gt; 
</span><br>
Using LD_PRELOAD will not allow us to use SDP and IP separately, i.e.
<br>
SDP for OOB and IP for a BTL.
<br>
<p><p><span class="quotelev2">&gt; &gt; we must preload sdp library to each remote environment ( i.e.
</span><br>
<span class="quotelev2">&gt; &gt; bashrc ) This will cause all applications to use SDP instead of
</span><br>
<span class="quotelev2">&gt; &gt; AF_INET.
</span><br>
<span class="quotelev2">&gt; &gt; Which means you can't choose specific protocol for specific
</span><br>
<span class="quotelev2">&gt; &gt; application,
</span><br>
<span class="quotelev2">&gt; &gt; either you are using SDP or AF_INET for all.
</span><br>
<span class="quotelev2">&gt; &gt; SDP also can be loaded with appropriate /usr/local/ofed/etc/
</span><br>
<span class="quotelev2">&gt; &gt; libsdp.conf
</span><br>
<span class="quotelev2">&gt; &gt; configuration but a simple user have no access to it usually.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
(<a href="http://www.cisco.com/univercd/cc/td/doc/product/svbu/ofed/ofed_1_1/ofed">http://www.cisco.com/univercd/cc/td/doc/product/svbu/ofed/ofed_1_1/ofed</a>
<br>
<span class="quotelev2">&gt; &gt; _ug/sdp.htm#wp952927)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Andrew's got a point point here, too -- accelerating the TCP BTL
</span><br>
with
<br>
<span class="quotelev3">&gt; &gt;&gt; SDP seems kinda pointless.  I'm guessing that you did it because it
</span><br>
<span class="quotelev3">&gt; &gt;&gt; was just about the same work as was done in the TCP OOB (for which
</span><br>
we
<br>
<span class="quotelev3">&gt; &gt;&gt; have no corresponding verbs interface).  Is that right?
</span><br>
<span class="quotelev2">&gt; &gt; Indeed. But it also seems that SDP has lower overhead than VERBS in
</span><br>
<span class="quotelev2">&gt; &gt; some
</span><br>
<span class="quotelev2">&gt; &gt; cases.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are you referring to the fact that the avail(%) column is lower for
</span><br>
<span class="quotelev1">&gt; verbs than SDP/IPoIB?  That seems like a pretty weird metric for such
</span><br>
<span class="quotelev1">&gt; small message counts.  What exactly does 77.5% of 0 bytes mean?
</span><br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My $0.02 is that the other columns are more compelling.  :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Tests with Sandia's overlapping benchmark
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.cs.sandia.gov/smb/overhead.html#mozTocId316713">http://www.cs.sandia.gov/smb/overhead.html#mozTocId316713</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; VERBS results
</span><br>
<span class="quotelev2">&gt; &gt; msgsize iterations  iter_t      work_t      overhead    base_t
</span><br>
<span class="quotelev2">&gt; &gt; avail(%)
</span><br>
<span class="quotelev2">&gt; &gt; 0       1000        16.892      15.309      1.583       7.029
</span><br>
<span class="quotelev2">&gt; &gt; 77.5
</span><br>
<span class="quotelev2">&gt; &gt; 2       1000        16.852      15.332      1.520       7.144
</span><br>
<span class="quotelev2">&gt; &gt; 78.7
</span><br>
<span class="quotelev2">&gt; &gt; 4       1000        16.932      15.312      1.620       7.128
</span><br>
<span class="quotelev2">&gt; &gt; 77.3
</span><br>
<span class="quotelev2">&gt; &gt; 8       1000        16.985      15.319      1.666       7.182
</span><br>
<span class="quotelev2">&gt; &gt; 76.8
</span><br>
<span class="quotelev2">&gt; &gt; 16      1000        16.886      15.297      1.589       7.219
</span><br>
<span class="quotelev2">&gt; &gt; 78.0
</span><br>
<span class="quotelev2">&gt; &gt; 32      1000        16.988      15.311      1.677       7.251
</span><br>
<span class="quotelev2">&gt; &gt; 76.9
</span><br>
<span class="quotelev2">&gt; &gt; 64      1000        16.944      15.299      1.645       7.457
</span><br>
<span class="quotelev2">&gt; &gt; 77.9
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; SDP results
</span><br>
<span class="quotelev2">&gt; &gt; 0       1000        134.902     128.089     6.813       54.691
</span><br>
<span class="quotelev2">&gt; &gt; 87.5
</span><br>
<span class="quotelev2">&gt; &gt; 2       1000        135.064     128.196     6.868       55.283
</span><br>
<span class="quotelev2">&gt; &gt; 87.6
</span><br>
<span class="quotelev2">&gt; &gt; 4       1000        135.031     128.356     6.675       55.039
</span><br>
<span class="quotelev2">&gt; &gt; 87.9
</span><br>
<span class="quotelev2">&gt; &gt; 8       1000        130.460     125.908     4.552       52.010
</span><br>
<span class="quotelev2">&gt; &gt; 91.2
</span><br>
<span class="quotelev2">&gt; &gt; 16      1000        135.432     128.694     6.738       55.615
</span><br>
<span class="quotelev2">&gt; &gt; 87.9
</span><br>
<span class="quotelev2">&gt; &gt; 32      1000        135.228     128.494     6.734       55.627
</span><br>
<span class="quotelev2">&gt; &gt; 87.9
</span><br>
<span class="quotelev2">&gt; &gt; 64      1000        135.470     128.540     6.930       56.583
</span><br>
<span class="quotelev2">&gt; &gt; 87.8
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; IPoIB results
</span><br>
<span class="quotelev2">&gt; &gt; 0       1000        252.953     247.053     5.900       119.977
</span><br>
<span class="quotelev2">&gt; &gt; 95.1
</span><br>
<span class="quotelev2">&gt; &gt; 2       1000        253.336     247.285     6.051       121.573
</span><br>
<span class="quotelev2">&gt; &gt; 95.0
</span><br>
<span class="quotelev2">&gt; &gt; 4       1000        254.147     247.041     7.106       122.110
</span><br>
<span class="quotelev2">&gt; &gt; 94.2
</span><br>
<span class="quotelev2">&gt; &gt; 8       1000        254.613     248.011     6.602       121.840
</span><br>
<span class="quotelev2">&gt; &gt; 94.6
</span><br>
<span class="quotelev2">&gt; &gt; 16      1000        255.662     247.952     7.710       124.738
</span><br>
<span class="quotelev2">&gt; &gt; 93.8
</span><br>
<span class="quotelev2">&gt; &gt; 32      1000        255.569     248.057     7.512       127.095
</span><br>
<span class="quotelev2">&gt; &gt; 94.1
</span><br>
<span class="quotelev2">&gt; &gt; 64      1000        255.867     248.308     7.559       132.858
</span><br>
<span class="quotelev2">&gt; &gt; 94.3
</span><br>
<span class="quotelev1">&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2969.php">Pavel Shamis (Pasha): "Re: [OMPI devel] [PATCH] openib btl: extensable cpc selection	enablement"</a>
<li><strong>Previous message:</strong> <a href="2967.php">Rayson Ho: "[OMPI devel] On Host Topology Description (carto)"</a>
<li><strong>In reply to:</strong> <a href="2942.php">Jeff Squyres: "Re: [OMPI devel] SDP support for OPEN-MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2975.php">Jeff Squyres: "Re: [OMPI devel] SDP support for OPEN-MPI"</a>
<li><strong>Reply:</strong> <a href="2975.php">Jeff Squyres: "Re: [OMPI devel] SDP support for OPEN-MPI"</a>
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
