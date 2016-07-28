<?
$subject_val = "Re: [OMPI devel] OMPI devel] RoCE plus QDR IB tunable parameters";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 23 21:53:29 2015" -->
<!-- isoreceived="20150224025329" -->
<!-- sent="Mon, 23 Feb 2015 20:53:28 -0600" -->
<!-- isosent="20150224025328" -->
<!-- name="Dave Turner" -->
<!-- email="drdaveturner_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI devel] RoCE plus QDR IB tunable parameters" -->
<!-- id="CAFGXdkxJcYi0b+aooiaMXqPX5j2aO310UzJwj=iOEG79qamz7w_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="59FD14D4-922B-415E-B297-FF1564B14565_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OMPI devel] RoCE plus QDR IB tunable parameters<br>
<strong>From:</strong> Dave Turner (<em>drdaveturner_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-23 21:53:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17023.php">George Bosilca: "Re: [OMPI devel] OMPI devel] RoCE plus QDR IB tunable parameters"</a>
<li><strong>Previous message:</strong> <a href="17021.php">Jeff Squyres (jsquyres): "[OMPI devel] multi-rail performance"</a>
<li><strong>In reply to:</strong> <a href="17017.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI devel] RoCE plus QDR IB tunable parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17023.php">George Bosilca: "Re: [OMPI devel] OMPI devel] RoCE plus QDR IB tunable parameters"</a>
<li><strong>Reply:</strong> <a href="17023.php">George Bosilca: "Re: [OMPI devel] OMPI devel] RoCE plus QDR IB tunable parameters"</a>
<li><strong>Reply:</strong> <a href="17029.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI devel] RoCE plus QDR IB tunable parameters"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff, George,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;When I try to use yalla with the dev master I get the error message
<br>
below:
<br>
<p>~/openmpi-master/bin/mpirun -np 2 --mca pml yalla ./NPmpi.master -o np.out
<br>
*** Error in `/homes/daveturner/openmpi-master/bin/orted': free():
<br>
corrupted unsorted chunks: 0x0000000002351270 ***
<br>
<p>*** Error in `/homes/daveturner/openmpi-master/bin/orted': corrupted
<br>
double-linked list: 0x0000000002351260 ***
<br>
<p><p>George:  I'm not sure what the PML ob1 is that you refer to.  I'm running
<br>
with the
<br>
<p>default settings for the most part and trying to tune those.  When we had
<br>
nodes
<br>
<p>with just RoCE over 10 Gbps and just QDR IB, the latencies were the same
<br>
<p>at around 3 microseconds.  The bandwidths were around 10 Gbps and 30 Gbps.
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dave
<br>
<p>On Sun, Feb 22, 2015 at 5:37 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; Dave --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just out of curiosity, what kind of performance do you get when you use
</span><br>
<span class="quotelev1">&gt; MXM?  (e.g., the yalla PML on master)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Feb 19, 2015, at 6:41 PM, Dave Turner &lt;drdaveturner_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      I've downloaded the OpenMPI master as suggested and rerun all my
</span><br>
<span class="quotelev1">&gt; aggregate tests
</span><br>
<span class="quotelev2">&gt; &gt; across my system with QDR IB and 10 Gbps RoCE.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      The attached unidirectional.pdf graph is the ping-pong performance
</span><br>
<span class="quotelev1">&gt; for 1 core
</span><br>
<span class="quotelev2">&gt; &gt; on 1 machine to 1 core on the 2nd.  The red curve for OpenMPI 1.8.3
</span><br>
<span class="quotelev1">&gt; shows lower
</span><br>
<span class="quotelev2">&gt; &gt; performance for small and also medium message sizes for the base test
</span><br>
<span class="quotelev1">&gt; without
</span><br>
<span class="quotelev2">&gt; &gt; using any tuning parameters.  The green line from the OpenMPI master
</span><br>
<span class="quotelev1">&gt; shows lower
</span><br>
<span class="quotelev2">&gt; &gt; performance only for small messages, but great for medium size.  Turning
</span><br>
<span class="quotelev1">&gt; off the
</span><br>
<span class="quotelev2">&gt; &gt; 10 Gbps card entirely produces great performance for all message sizes.
</span><br>
<span class="quotelev1">&gt; So the
</span><br>
<span class="quotelev2">&gt; &gt; fixes in the master at least help, but it still seems to be choosing to
</span><br>
<span class="quotelev1">&gt; use RoCE for
</span><br>
<span class="quotelev2">&gt; &gt; small messages rather than QDR IB.  They both use the openib btl so I
</span><br>
<span class="quotelev1">&gt; assume it
</span><br>
<span class="quotelev2">&gt; &gt; just chooses one at random so this is probably not that surprising.
</span><br>
<span class="quotelev1">&gt; Since there are
</span><br>
<span class="quotelev2">&gt; &gt; no tunable parameters for multiple openib btl's, this cannot be manually
</span><br>
<span class="quotelev1">&gt; tuned.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      The bi-directional ping-pong tests show basically the same thing
</span><br>
<span class="quotelev1">&gt; with lower
</span><br>
<span class="quotelev2">&gt; &gt; performance for small message sizes for 1.8.3 and the master.  However,
</span><br>
<span class="quotelev1">&gt; I'm
</span><br>
<span class="quotelev2">&gt; &gt; also seeing the max bandwidth being limited to 44 Gbps instead of 60 Gbps
</span><br>
<span class="quotelev2">&gt; &gt; for the master for some reason.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      The aggregate tests in the 3rd graph are for 20 cores on one machine
</span><br>
<span class="quotelev2">&gt; &gt; yelling at 20 cores on the 2nd machine (bi-directional too).  They
</span><br>
<span class="quotelev1">&gt; likewise show
</span><br>
<span class="quotelev2">&gt; &gt; the lower 10 Gbps RoCE performance for small messages, and also show
</span><br>
<span class="quotelev2">&gt; &gt; the max bandwidth being limited to 45 Gbps for the master.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      Our solution for now is to simply exclude mlx4_1 which is the 10
</span><br>
<span class="quotelev1">&gt; Gbps card
</span><br>
<span class="quotelev2">&gt; &gt; which will give us QDR performance but not allow us to use the extra 10
</span><br>
<span class="quotelev1">&gt; Gbps
</span><br>
<span class="quotelev2">&gt; &gt; to channel bond for large messages.  It is more worrisome that max
</span><br>
<span class="quotelev1">&gt; bandwidth
</span><br>
<span class="quotelev2">&gt; &gt; on the bi-directional and aggregate tests using the master are slower
</span><br>
<span class="quotelev1">&gt; than they
</span><br>
<span class="quotelev2">&gt; &gt; should be.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                        Dave
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Wed, Feb 11, 2015 at 11:00 AM, &lt;devel-request_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Send devel mailing list submissions to
</span><br>
<span class="quotelev2">&gt; &gt;         devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; To subscribe or unsubscribe via the World Wide Web, visit
</span><br>
<span class="quotelev2">&gt; &gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; or, via email, send a message with subject or body 'help' to
</span><br>
<span class="quotelev2">&gt; &gt;         devel-request_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; You can reach the person managing the list at
</span><br>
<span class="quotelev2">&gt; &gt;         devel-owner_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; When replying, please edit your Subject line so it is more specific
</span><br>
<span class="quotelev2">&gt; &gt; than &quot;Re: Contents of devel digest...&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Today's Topics:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    1. Re: OMPI devel] RoCE plus QDR IB tunable parameters
</span><br>
<span class="quotelev2">&gt; &gt;       (George Bosilca)
</span><br>
<span class="quotelev2">&gt; &gt;    2. Re: OMPI devel] RoCE plus QDR IB tunable parameters
</span><br>
<span class="quotelev2">&gt; &gt;       (Howard Pritchard)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Message: 1
</span><br>
<span class="quotelev2">&gt; &gt; Date: Tue, 10 Feb 2015 20:41:30 -0500
</span><br>
<span class="quotelev2">&gt; &gt; From: George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; To: DrDaveTurner_at_[hidden], Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI devel] OMPI devel] RoCE plus QDR IB tunable
</span><br>
<span class="quotelev2">&gt; &gt;         parameters
</span><br>
<span class="quotelev2">&gt; &gt; Message-ID:
</span><br>
<span class="quotelev2">&gt; &gt;         &lt;
</span><br>
<span class="quotelev1">&gt; CAMJJpkXC6e_y34fU5VeJ0uHrrJ2z4CA89mN7WfWa5dSfx52s7A_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Content-Type: text/plain; charset=&quot;utf-8&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Somehow one of the most basic information about the capabilities of the
</span><br>
<span class="quotelev2">&gt; &gt; BTLs (bandwidth) disappeared from the MCA parameters and the one left
</span><br>
<span class="quotelev2">&gt; &gt; (latency) was mislabeled. This mishap not only prevented the
</span><br>
<span class="quotelev1">&gt; communication
</span><br>
<span class="quotelev2">&gt; &gt; engine from correctly ordering the BTL for small messages (the latency
</span><br>
<span class="quotelev2">&gt; &gt; bound part), but also introduced undesirable bias on the load-balance
</span><br>
<span class="quotelev2">&gt; &gt; between multiple devices logic (the bandwidth part).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I just pushed a fix  in master
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi/commit/e173f9b0c0c63c3ea24b8d8bc0ebafe1f1736acb">https://github.com/open-mpi/ompi/commit/e173f9b0c0c63c3ea24b8d8bc0ebafe1f1736acb</a>
</span><br>
<span class="quotelev1">&gt; .
</span><br>
<span class="quotelev2">&gt; &gt; Once validated this should be moved over the 1.8 branch.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Dave do you think it is possible to renew your experiment with the
</span><br>
<span class="quotelev1">&gt; current
</span><br>
<span class="quotelev2">&gt; &gt; master ?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   Thanks,
</span><br>
<span class="quotelev2">&gt; &gt;     George.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mon, Feb 9, 2015 at 2:57 PM, Dave Turner &lt;drdaveturner_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Gilles,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;      I tried running with btl_openib_cpc_include rdmacm and saw no
</span><br>
<span class="quotelev1">&gt; change.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;       Let's simplify the problem by forgetting about the channel
</span><br>
<span class="quotelev1">&gt; bonding.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; If I just do an aggregate test of 16 cores on one machine talking to
</span><br>
<span class="quotelev1">&gt; 16 on
</span><br>
<span class="quotelev3">&gt; &gt; &gt; a second machine without any settings changed from the default install
</span><br>
<span class="quotelev3">&gt; &gt; &gt; of OpenMPI, I see that RoCE over the 10 Gbps link is used for small
</span><br>
<span class="quotelev3">&gt; &gt; &gt; messages
</span><br>
<span class="quotelev3">&gt; &gt; &gt; then it switches over to QDR IB for large messages.  I don't see
</span><br>
<span class="quotelev1">&gt; channel
</span><br>
<span class="quotelev3">&gt; &gt; &gt; bonding
</span><br>
<span class="quotelev3">&gt; &gt; &gt; for large messages, but can turn this on with the btl_tcp_exclusivity
</span><br>
<span class="quotelev3">&gt; &gt; &gt; parameter.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;      I think there are 2 problems here, both related to the fact that
</span><br>
<span class="quotelev1">&gt; QDR
</span><br>
<span class="quotelev3">&gt; &gt; &gt; IB link and RoCE
</span><br>
<span class="quotelev3">&gt; &gt; &gt; both use the same openib btl.  The first problem is that the slower
</span><br>
<span class="quotelev1">&gt; RoCE
</span><br>
<span class="quotelev3">&gt; &gt; &gt; link is being chosen
</span><br>
<span class="quotelev3">&gt; &gt; &gt; for small messages, which does lower performance significantly.  The
</span><br>
<span class="quotelev3">&gt; &gt; &gt; second problem
</span><br>
<span class="quotelev3">&gt; &gt; &gt; is that I don't think there are parameters to allow for tuning of
</span><br>
<span class="quotelev1">&gt; multiple
</span><br>
<span class="quotelev3">&gt; &gt; &gt; openib btl's
</span><br>
<span class="quotelev3">&gt; &gt; &gt; to manually select one over the other.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        Dave
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Fri, Feb 6, 2015 at 8:24 PM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Dave,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; These settings tell ompi to use native infiniband on the ib qdr port
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; tcpo/ip on the other port.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; From the faq, roce is implemented in the openib btl
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; <a href="http://www.open-mpi.org/faq/?category=openfabrics#ompi-over-roce">http://www.open-mpi.org/faq/?category=openfabrics#ompi-over-roce</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Did you use
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; --mca btl_openib_cpc_include rdmacm
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; in your first tests ?
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; I had some second thougths about the bandwidth values, and imho they
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; should be 327680 and 81920 because of the 8/10 encoding
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; (And that being said, that should not change the measured performance)
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Also, could you try again by forcing the same btl_tcp_latency and
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; btl_openib_latency ?
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Cheers,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Gilles
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Dave Turner &lt;drdaveturner_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; George,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;      I can check with my guys on Monday but I think the bandwidth
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; parameters
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; are the defaults.  I did alter these to 40960 and 10240 as someone
</span><br>
<span class="quotelev1">&gt; else
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; suggested to me.  The attached graph shows the base red line, along
</span><br>
<span class="quotelev1">&gt; with
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; the manual balanced blue line and auto balanced green line (0's for
</span><br>
<span class="quotelev1">&gt; both).
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; This shift lower suggests to me that the higher TCP latency is being
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; pulled in.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; I'm not sure why the curves are shifted right.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;                         Dave
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; On Fri, Feb 6, 2015 at 5:32 PM, George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; Dave,
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; Based on your ompi_info.all the following bandwidth are reported on
</span><br>
<span class="quotelev1">&gt; your
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; system:
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;                 MCA btl: parameter &quot;btl_openib_bandwidth&quot; (current
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; value: &quot;4&quot;, data source: default, level: 5 tuner/detail, type:
</span><br>
<span class="quotelev1">&gt; unsigned)
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;                           Approximate maximum bandwidth of
</span><br>
<span class="quotelev1">&gt; interconnect
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; (0 = auto-detect value at run-time [not supported in all BTL
</span><br>
<span class="quotelev1">&gt; modules], &gt;= 1
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; = bandwidth in Mbps)
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;                  MCA btl: parameter &quot;btl_tcp_bandwidth&quot; (current
</span><br>
<span class="quotelev1">&gt; value:
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; &quot;100&quot;, data source: default, level: 5 tuner/detail, type: unsigned)
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;                           Approximate maximum bandwidth of
</span><br>
<span class="quotelev1">&gt; interconnect
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; (0 = auto-detect value at run-time [not supported in all BTL
</span><br>
<span class="quotelev1">&gt; modules], &gt;= 1
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; = bandwidth in Mbps)
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; This basically states that on your system the default values for
</span><br>
<span class="quotelev1">&gt; these
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; parameters are wrong, your TCP network being much faster than the
</span><br>
<span class="quotelev1">&gt; IB. This
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; explains the somewhat unexpected decision of OMPI.
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; As a possible solution I suggest you set these bandwidth values to
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; something more meaningful (directly in your configuration file). As
</span><br>
<span class="quotelev1">&gt; an
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; example,
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; btl_openib_bandwidth = 40000
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; btl_tcp_bandwidth = 10000
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; make more sense based on your HPC system description.
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;   George.
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; On Fri, Feb 6, 2015 at 5:37 PM, Dave Turner &lt;drdaveturner_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;      We have nodes in our HPC system that have 2 NIC's,
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; one being QDR IB and the second being a slower 10 Gbps card
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; configured for both RoCE and TCP.  Aggregate bandwidth
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; tests with 20 cores on one node yelling at 20 cores on a second
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; node (attached roce.ib.aggregate.pdf) show that without tuning
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; the slower RoCE interface is being used for small messages
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; then QDR IB is used for larger messages (red line).  Tuning
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; the tcp_exclusivity to 1024 to match the openib_exclusivity
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; adds another 20 Gbps of bidirectional bandwidth to the high end
</span><br>
<span class="quotelev1">&gt; (green
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; line),
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; and I'm guessing this is TCP traffic and not RoCE.
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;      So by default the slower interface is being chosen on the low
</span><br>
<span class="quotelev1">&gt; end,
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; and
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; I don't think there are tunable parameters to allow me to choose the
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; QDR interface as the default.  Going forward we'll probably just
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; disable
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; RoCE on these nodes and go with QDR IB plus 10 Gbps TCP for large
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; messages.
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;       However, I do think these issues will come up more in the
</span><br>
<span class="quotelev1">&gt; future.
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; With the low latency of RoCE matching IB, there are more
</span><br>
<span class="quotelev1">&gt; opportunities
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; to do channel bonding or allowing multiple interfaces for aggregate
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; traffic
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; for even smaller message sizes.
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;                 Dave Turner
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; Work:     DaveTurner_at_[hidden]     (785) 532-7791
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;              118 Nichols Hall, Manhattan KS  66502
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; Home:    DrDaveTurner_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;               cell: (785) 770-5929
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16951.php">http://www.open-mpi.org/community/lists/devel/2015/02/16951.php</a>
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; --
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Work:     DaveTurner_at_[hidden]     (785) 532-7791
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;              118 Nichols Hall, Manhattan KS  66502
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Home:    DrDaveTurner_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;               cell: (785) 770-5929
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Work:     DaveTurner_at_[hidden]     (785) 532-7791
</span><br>
<span class="quotelev3">&gt; &gt; &gt;              118 Nichols Hall, Manhattan KS  66502
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Home:    DrDaveTurner_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt;               cell: (785) 770-5929
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Link to this post:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16963.php">http://www.open-mpi.org/community/lists/devel/2015/02/16963.php</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -------------- next part --------------
</span><br>
<span class="quotelev2">&gt; &gt; HTML attachment scrubbed and removed
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Message: 2
</span><br>
<span class="quotelev2">&gt; &gt; Date: Tue, 10 Feb 2015 20:34:59 -0700
</span><br>
<span class="quotelev2">&gt; &gt; From: Howard Pritchard &lt;hppritcha_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; To: Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI devel] OMPI devel] RoCE plus QDR IB tunable
</span><br>
<span class="quotelev2">&gt; &gt;         parameters
</span><br>
<span class="quotelev2">&gt; &gt; Message-ID:
</span><br>
<span class="quotelev2">&gt; &gt;         &lt;CAF1Cqj5=GPfi=t8Jw6SSUBKjqut0ChgntTyXfU0diM=
</span><br>
<span class="quotelev1">&gt; MXs+9Yw_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Content-Type: text/plain; charset=&quot;utf-8&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; HI George,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'd say commit cf377db82 explains the vanishing of the bandwidth metric
</span><br>
<span class="quotelev1">&gt; as
</span><br>
<span class="quotelev2">&gt; &gt; well as the mis-labeling of the latency metric.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Howard
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2015-02-10 18:41 GMT-07:00 George Bosilca &lt;bosilca_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Somehow one of the most basic information about the capabilities of the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; BTLs (bandwidth) disappeared from the MCA parameters and the one left
</span><br>
<span class="quotelev3">&gt; &gt; &gt; (latency) was mislabeled. This mishap not only prevented the
</span><br>
<span class="quotelev1">&gt; communication
</span><br>
<span class="quotelev3">&gt; &gt; &gt; engine from correctly ordering the BTL for small messages (the latency
</span><br>
<span class="quotelev3">&gt; &gt; &gt; bound part), but also introduced undesirable bias on the load-balance
</span><br>
<span class="quotelev3">&gt; &gt; &gt; between multiple devices logic (the bandwidth part).
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I just pushed a fix  in master
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi/commit/e173f9b0c0c63c3ea24b8d8bc0ebafe1f1736acb">https://github.com/open-mpi/ompi/commit/e173f9b0c0c63c3ea24b8d8bc0ebafe1f1736acb</a>
</span><br>
<span class="quotelev1">&gt; .
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Once validated this should be moved over the 1.8 branch.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Dave do you think it is possible to renew your experiment with the
</span><br>
<span class="quotelev1">&gt; current
</span><br>
<span class="quotelev3">&gt; &gt; &gt; master ?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   Thanks,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     George.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Mon, Feb 9, 2015 at 2:57 PM, Dave Turner &lt;drdaveturner_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Gilles,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;      I tried running with btl_openib_cpc_include rdmacm and saw no
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; change.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;       Let's simplify the problem by forgetting about the channel
</span><br>
<span class="quotelev1">&gt; bonding.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; If I just do an aggregate test of 16 cores on one machine talking to
</span><br>
<span class="quotelev1">&gt; 16 on
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; a second machine without any settings changed from the default install
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; of OpenMPI, I see that RoCE over the 10 Gbps link is used for small
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; messages
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; then it switches over to QDR IB for large messages.  I don't see
</span><br>
<span class="quotelev1">&gt; channel
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; bonding
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; for large messages, but can turn this on with the btl_tcp_exclusivity
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; parameter.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;      I think there are 2 problems here, both related to the fact that
</span><br>
<span class="quotelev1">&gt; QDR
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; IB link and RoCE
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; both use the same openib btl.  The first problem is that the slower
</span><br>
<span class="quotelev1">&gt; RoCE
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; link is being chosen
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; for small messages, which does lower performance significantly.  The
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; second problem
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; is that I don't think there are parameters to allow for tuning of
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; multiple openib btl's
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; to manually select one over the other.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;                        Dave
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; On Fri, Feb 6, 2015 at 8:24 PM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; Dave,
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; These settings tell ompi to use native infiniband on the ib qdr port
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; tcpo/ip on the other port.
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; From the faq, roce is implemented in the openib btl
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=openfabrics#ompi-over-roce">http://www.open-mpi.org/faq/?category=openfabrics#ompi-over-roce</a>
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; Did you use
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; --mca btl_openib_cpc_include rdmacm
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; in your first tests ?
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; I had some second thougths about the bandwidth values, and imho they
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; should be 327680 and 81920 because of the 8/10 encoding
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; (And that being said, that should not change the measured
</span><br>
<span class="quotelev1">&gt; performance)
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; Also, could you try again by forcing the same btl_tcp_latency and
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; btl_openib_latency ?
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; Dave Turner &lt;drdaveturner_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; George,
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;      I can check with my guys on Monday but I think the bandwidth
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; parameters
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; are the defaults.  I did alter these to 40960 and 10240 as someone
</span><br>
<span class="quotelev1">&gt; else
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; suggested to me.  The attached graph shows the base red line, along
</span><br>
<span class="quotelev1">&gt; with
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; the manual balanced blue line and auto balanced green line (0's for
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; both).
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; This shift lower suggests to me that the higher TCP latency is being
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; pulled in.
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; I'm not sure why the curves are shifted right.
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;                         Dave
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; On Fri, Feb 6, 2015 at 5:32 PM, George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; Dave,
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; Based on your ompi_info.all the following bandwidth are reported on
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; your system:
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;                 MCA btl: parameter &quot;btl_openib_bandwidth&quot; (current
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; value: &quot;4&quot;, data source: default, level: 5 tuner/detail, type:
</span><br>
<span class="quotelev1">&gt; unsigned)
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;                           Approximate maximum bandwidth of
</span><br>
<span class="quotelev1">&gt; interconnect
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; (0 = auto-detect value at run-time [not supported in all BTL
</span><br>
<span class="quotelev1">&gt; modules], &gt;= 1
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; = bandwidth in Mbps)
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;                  MCA btl: parameter &quot;btl_tcp_bandwidth&quot; (current
</span><br>
<span class="quotelev1">&gt; value:
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; &quot;100&quot;, data source: default, level: 5 tuner/detail, type: unsigned)
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;                           Approximate maximum bandwidth of
</span><br>
<span class="quotelev1">&gt; interconnect
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; (0 = auto-detect value at run-time [not supported in all BTL
</span><br>
<span class="quotelev1">&gt; modules], &gt;= 1
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; = bandwidth in Mbps)
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; This basically states that on your system the default values for
</span><br>
<span class="quotelev1">&gt; these
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; parameters are wrong, your TCP network being much faster than the
</span><br>
<span class="quotelev1">&gt; IB. This
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; explains the somewhat unexpected decision of OMPI.
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; As a possible solution I suggest you set these bandwidth values to
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; something more meaningful (directly in your configuration file). As
</span><br>
<span class="quotelev1">&gt; an
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; example,
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; btl_openib_bandwidth = 40000
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; btl_tcp_bandwidth = 10000
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; make more sense based on your HPC system description.
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;   George.
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; On Fri, Feb 6, 2015 at 5:37 PM, Dave Turner &lt;drdaveturner_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt;      We have nodes in our HPC system that have 2 NIC's,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; one being QDR IB and the second being a slower 10 Gbps card
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; configured for both RoCE and TCP.  Aggregate bandwidth
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; tests with 20 cores on one node yelling at 20 cores on a second
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; node (attached roce.ib.aggregate.pdf) show that without tuning
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; the slower RoCE interface is being used for small messages
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; then QDR IB is used for larger messages (red line).  Tuning
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; the tcp_exclusivity to 1024 to match the openib_exclusivity
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; adds another 20 Gbps of bidirectional bandwidth to the high end
</span><br>
<span class="quotelev1">&gt; (green
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; line),
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; and I'm guessing this is TCP traffic and not RoCE.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt;      So by default the slower interface is being chosen on the low
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; end, and
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; I don't think there are tunable parameters to allow me to choose
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; QDR interface as the default.  Going forward we'll probably just
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; disable
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; RoCE on these nodes and go with QDR IB plus 10 Gbps TCP for large
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; messages.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt;       However, I do think these issues will come up more in the
</span><br>
<span class="quotelev1">&gt; future.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; With the low latency of RoCE matching IB, there are more
</span><br>
<span class="quotelev1">&gt; opportunities
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; to do channel bonding or allowing multiple interfaces for aggregate
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; traffic
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; for even smaller message sizes.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt;                 Dave Turner
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; Work:     DaveTurner_at_[hidden]     (785) 532-7791
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt;              118 Nichols Hall, Manhattan KS  66502
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; Home:    DrDaveTurner_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt;               cell: (785) 770-5929
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16951.php">http://www.open-mpi.org/community/lists/devel/2015/02/16951.php</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; Work:     DaveTurner_at_[hidden]     (785) 532-7791
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;              118 Nichols Hall, Manhattan KS  66502
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; Home:    DrDaveTurner_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;               cell: (785) 770-5929
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; --
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Work:     DaveTurner_at_[hidden]     (785) 532-7791
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;              118 Nichols Hall, Manhattan KS  66502
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Home:    DrDaveTurner_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;               cell: (785) 770-5929
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16963.php">http://www.open-mpi.org/community/lists/devel/2015/02/16963.php</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Link to this post:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16965.php">http://www.open-mpi.org/community/lists/devel/2015/02/16965.php</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -------------- next part --------------
</span><br>
<span class="quotelev2">&gt; &gt; HTML attachment scrubbed and removed
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Digest Footer
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; End of devel Digest, Vol 2917, Issue 1
</span><br>
<span class="quotelev2">&gt; &gt; **************************************
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Work:     DaveTurner_at_[hidden]     (785) 532-7791
</span><br>
<span class="quotelev2">&gt; &gt;              118 Nichols Hall, Manhattan KS  66502
</span><br>
<span class="quotelev2">&gt; &gt; Home:    DrDaveTurner_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;               cell: (785) 770-5929
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &lt;unidirectional.pdf&gt;&lt;bidirectional.pdf&gt;&lt;aggregate.pdf&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/02/17004.php">http://www.open-mpi.org/community/lists/devel/2015/02/17004.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Work:     DaveTurner_at_[hidden]     (785) 532-7791
             118 Nichols Hall, Manhattan KS  66502
Home:    DrDaveTurner_at_[hidden]
              cell: (785) 770-5929
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17022/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17023.php">George Bosilca: "Re: [OMPI devel] OMPI devel] RoCE plus QDR IB tunable parameters"</a>
<li><strong>Previous message:</strong> <a href="17021.php">Jeff Squyres (jsquyres): "[OMPI devel] multi-rail performance"</a>
<li><strong>In reply to:</strong> <a href="17017.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI devel] RoCE plus QDR IB tunable parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17023.php">George Bosilca: "Re: [OMPI devel] OMPI devel] RoCE plus QDR IB tunable parameters"</a>
<li><strong>Reply:</strong> <a href="17023.php">George Bosilca: "Re: [OMPI devel] OMPI devel] RoCE plus QDR IB tunable parameters"</a>
<li><strong>Reply:</strong> <a href="17029.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI devel] RoCE plus QDR IB tunable parameters"</a>
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
