<?
$subject_val = "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  1 07:35:30 2011" -->
<!-- isoreceived="20110301123530" -->
<!-- sent="Tue, 1 Mar 2011 07:35:25 -0500" -->
<!-- isosent="20110301123525" -->
<!-- name="Michael Shuey" -->
<!-- email="shuey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] RoCE (IBoE) &amp;amp; OpenMPI" -->
<!-- id="AANLkTimPuobiWRTtydaZtKTp8SvPU1jYDTsc3nwJerXB_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="0FD6CF257BAE43458202BC270077F9D701C8F3_at_MTRCASDAG01.mtl.com" -->
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
<strong>From:</strong> Michael Shuey (<em>shuey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-01 07:35:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15760.php">Jeff Squyres: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="15758.php">Eye RCS 51: "[OMPI users] using MPI through Qt"</a>
<li><strong>Maybe in reply to:</strong> <a href="../../2011/02/15644.php">Michael Shuey: "[OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15760.php">Jeff Squyres: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<li><strong>Reply:</strong> <a href="15760.php">Jeff Squyres: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
So, since RoCE has no SM, and setting an SL is required to get
<br>
lossless ethernet on Cisco switches (and possibly others), does this
<br>
mean that RoCE will never work correctly with OpenMPI on Cisco
<br>
hardware?
<br>
<p><pre>
--
Mike Shuey
On Tue, Mar 1, 2011 at 3:42 AM, Doron Shoham &lt;dorons_at_[hidden]&gt; wrote:
&gt; Hi,
&gt;
&gt; Regarding to using a specific SL with RDMA CM, I've checked in the code and it seems that RDMA_CM uses the SL from the SA.
&gt; So if you want to configure a specific SL, you need to do it via the SM.
&gt;
&gt; Doron
&gt;
&gt; -----Original Message-----
&gt; From: Jeff Squyres [mailto:jsquyres_at_[hidden]]
&gt; Sent: Thursday, February 24, 2011 3:45 PM
&gt; To: Michael Shuey
&gt; Cc: Open MPI Users , Mike Dubman
&gt; Subject: Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI
&gt;
&gt; On Feb 24, 2011, at 8:00 AM, Michael Shuey wrote:
&gt;
&gt;&gt; Late yesterday I did have a chance to test the patch Jeff provided
&gt;&gt; (against 1.4.3 - testing 1.5.x is on the docket for today). &#160;While it
&gt;&gt; works, in that I can specify a gid_index,
&gt;
&gt; Great! &#160;I'll commit that to the trunk and start the process of moving it to the v1.5.x series (I know you haven't tested it yet, but it's essentially the same patch, just slightly adjusted for each of the 3 branches).
&gt;
&gt;&gt; it doesn't do everything
&gt;&gt; required - my traffic won't match a lossless CoS on the ethernet
&gt;&gt; switch. &#160;Specifying a GID is only half of it; I really need to also
&gt;&gt; specify a service level.
&gt;
&gt; RoCE requires the use of the RDMA CM (I think?), and I didn't think there was a way to request a specific SL via the RDMA CM...? &#160;(I could certainly be wrong here)
&gt;
&gt; I think Mellanox will need to follow up with these questions...
&gt;
&gt; --
&gt; Jeff Squyres
&gt; jsquyres_at_[hidden]
&gt; For corporate legal information go to:
&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt;
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15760.php">Jeff Squyres: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="15758.php">Eye RCS 51: "[OMPI users] using MPI through Qt"</a>
<li><strong>Maybe in reply to:</strong> <a href="../../2011/02/15644.php">Michael Shuey: "[OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15760.php">Jeff Squyres: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<li><strong>Reply:</strong> <a href="15760.php">Jeff Squyres: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
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
