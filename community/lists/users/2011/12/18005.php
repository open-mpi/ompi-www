<?
$subject_val = "Re: [OMPI users] Error launching w/ 1.5.3 on IB mthca nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 19 07:30:18 2011" -->
<!-- isoreceived="20111219123018" -->
<!-- sent="Mon, 19 Dec 2011 07:29:43 -0500" -->
<!-- isosent="20111219122943" -->
<!-- name="TERRY DONTJE" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error launching w/ 1.5.3 on IB mthca nodes" -->
<!-- id="4EEF2E37.3020606_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1324278654.10207.140661013380245_at_webmail.messagingengine.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error launching w/ 1.5.3 on IB mthca nodes<br>
<strong>From:</strong> TERRY DONTJE (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-19 07:29:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18006.php">Yevgeny Kliteynik: "Re: [OMPI users] Error launching w/ 1.5.3 on IB mthca nodes"</a>
<li><strong>Previous message:</strong> <a href="18004.php">V. Ram: "Re: [OMPI users] Error launching w/ 1.5.3 on IB mthca nodes"</a>
<li><strong>In reply to:</strong> <a href="18004.php">V. Ram: "Re: [OMPI users] Error launching w/ 1.5.3 on IB mthca nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18007.php">Mathieu westphal: "[OMPI users] exploitation of vampirTrace generated otf files."</a>
<li><strong>Reply:</strong> <a href="18007.php">Mathieu westphal: "[OMPI users] exploitation of vampirTrace generated otf files."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 12/19/2011 2:10 AM, V. Ram wrote:
<br>
<span class="quotelev1">&gt; On Thu, Dec 15, 2011, at 09:28 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Very strange.  I have a lot of older mthca-based HCAs in my Cisco MPI
</span><br>
<span class="quotelev2">&gt;&gt; test cluster, and I don't see these kinds of problems.
</span><br>
<span class="quotelev1">&gt; Can I ask what version of OFED you're using, or what version of OFED the
</span><br>
<span class="quotelev1">&gt; IB software stack is coming from?
</span><br>
<span class="quotelev1">&gt;
</span><br>
Just to set expectations here, Jeff is on vacation until January so he 
<br>
might not reply to this anytime soon.
<br>
<p>--td
<br>
<span class="quotelev1">&gt; Thank you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; V. Ram
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 15, 2011, at 7:24 PM, V. Ram wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Terry,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks so much for the response.  My replies are in-line below.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Thu, Dec 15, 2011, at 07:00 AM, TERRY DONTJE wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; IIRC, RNR's are usually due to the receiving side not having a segment
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; registered and ready to receive data on a QP.  The btl does go through a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; big dance and does its own flow control to make sure this doesn't happen.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So when this happens are both the sending and receiving nodes using
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mthca's to communicate with?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes.  For the newer nodes using onboard mlx4, this issue doesn't arise.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The mlx4-based nodes are using the same core switch as the mthca nodes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; By any chance is it a particular node (or pair of nodes) this seems to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; happen with?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; No.  I've got 40 nodes total with this hardware configuration, and the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problem has been seen on most/all nodes at one time or another.  It
</span><br>
<span class="quotelev3">&gt;&gt;&gt; doesn't seem, based on the limited number of observable parameters I'm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; aware of, to be dependent on the number of nodes involved.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It is an intermittent problem, but when it happens, it happens at job
</span><br>
<span class="quotelev3">&gt;&gt;&gt; launch, and it does occur most of the time.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; V. Ram
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --td
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Open MPI InfiniBand gurus and/or Mellanox: could I please get some
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; assistance with this? Any suggestions on tunables or debugging
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parameters to try?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thank you very much.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Mon, Dec 12, 2011, at 10:42 AM, V. Ram wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; We are running a cluster that has a good number of older nodes with
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Mellanox IB HCAs that have the &quot;mthca&quot; device name (&quot;ib_mthca&quot; kernel
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; module).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; These adapters are all at firmware level 4.8.917 .
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The Open MPI in use is 1.5.3 , kernel 2.6.39 , x86-64. Jobs are
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; launched/managed using Slurm 2.2.7. The IB software and drivers
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; correspond to OFED 1.5.3.2 , and I've verified that the kernel modules
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; in use are all from this OFED version.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On nodes with the mthca hardware *only*, we get frequent, but
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; intermittent job startup failures, with messages like:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /////////////////////////////////
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [[19373,1],54][btl_openib_component.c:3320:handle_wc] from compute-c3-07
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; to: compute-c3-01 error polling LP CQ with status RECEIVER NOT READY
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; RETRY EXCEEDED ERROR status
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; number 13 for wr_id 2a25c200 opcode 128 vendor error 135 qp_idx 0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The OpenFabrics &quot;receiver not ready&quot; retry count on a per-peer
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; connection between two MPI processes has been exceeded. In general,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; this should not happen because Open MPI uses flow control on per-peer
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; connections to ensure that receivers are always ready when data is
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; sent.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [further standard error text snipped...]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Below is some information about the host that raised the error and the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; peer to which it was connected:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Local host: compute-c3-07
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Local device: mthca0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Peer host: compute-c3-01
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; You may need to consult with your system administrator to get this
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; problem fixed.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /////////////////////////////////
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; During these job runs, I have monitored the InfiniBand performance
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; counters on the endpoints and switch. No telltale counters for any of
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; these ports change during these failed job initiations.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ibdiagnet works fine and properly enumerates the fabric and related
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; performance counters, both from the affected nodes, as well as other
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; nodes attached to the IB switch. The IB connectivity itself seems fine
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; from these nodes.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Other nodes with different HCAs use the same InfiniBand fabric
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; continuously without any issue, so I don't think it's the fabric/switch.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I'm at a loss for what to do next to try and find the root cause of the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; issue. I suspect something perhaps having to do with the mthca
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; support/drivers, but how can I track this down further?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Thank you,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; V. Ram.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.fastmail.fm">http://www.fastmail.fm</a> - One of many happy users:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   <a href="http://www.fastmail.fm/docs/quotes.html">http://www.fastmail.fm/docs/quotes.html</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<p><pre>
-- 
Oracle
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18005/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-18005/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18006.php">Yevgeny Kliteynik: "Re: [OMPI users] Error launching w/ 1.5.3 on IB mthca nodes"</a>
<li><strong>Previous message:</strong> <a href="18004.php">V. Ram: "Re: [OMPI users] Error launching w/ 1.5.3 on IB mthca nodes"</a>
<li><strong>In reply to:</strong> <a href="18004.php">V. Ram: "Re: [OMPI users] Error launching w/ 1.5.3 on IB mthca nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18007.php">Mathieu westphal: "[OMPI users] exploitation of vampirTrace generated otf files."</a>
<li><strong>Reply:</strong> <a href="18007.php">Mathieu westphal: "[OMPI users] exploitation of vampirTrace generated otf files."</a>
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
