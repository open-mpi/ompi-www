<?
$subject_val = "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  2 12:51:20 2011" -->
<!-- isoreceived="20110302175120" -->
<!-- sent="Wed, 2 Mar 2011 12:51:14 -0500" -->
<!-- isosent="20110302175114" -->
<!-- name="Michael Shuey" -->
<!-- email="shuey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] RoCE (IBoE) &amp;amp; OpenMPI" -->
<!-- id="AANLkTiky2Kd=gOqHCbySWeAO8BZ=8qsAsZgCp3GQ+ysN_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5D913FA0-1062-4388-ABC5-0FF9DC2DFFBD_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI<br>
<strong>From:</strong> Michael Shuey (<em>shuey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-02 12:51:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15785.php">Jeff Squyres: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="15783.php">Massimo Cafaro: "Re: [OMPI users] MPI_File_Read_all and large file"</a>
<li><strong>In reply to:</strong> <a href="15768.php">Jeff Squyres: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15785.php">Jeff Squyres: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<li><strong>Reply:</strong> <a href="15785.php">Jeff Squyres: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Honestly, I don't know - I haven't looked into the source.  OFED 1.5.2
<br>
has a version of ibv_rc_pingpong that's been modified to work with
<br>
RoCE; you can pass the gid_index and SL as command-line arguments.
<br>
I'm not sure how that's handled at the IB layer, but the source may be
<br>
a good place to start.
<br>
<p><pre>
--
Mike Shuey
On Tue, Mar 1, 2011 at 9:14 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
&gt; I thought you mentioned in a prior email that you had gotten one or two other OFED sample applications to work properly. &#160;How are they setting the SL? &#160;Are they not using the RDMA CM?
&gt;
&gt;
&gt; On Mar 1, 2011, at 7:35 AM, Michael Shuey wrote:
&gt;
&gt;&gt; So, since RoCE has no SM, and setting an SL is required to get
&gt;&gt; lossless ethernet on Cisco switches (and possibly others), does this
&gt;&gt; mean that RoCE will never work correctly with OpenMPI on Cisco
&gt;&gt; hardware?
&gt;&gt;
&gt;&gt; --
&gt;&gt; Mike Shuey
&gt;&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt; On Tue, Mar 1, 2011 at 3:42 AM, Doron Shoham &lt;dorons_at_[hidden]&gt; wrote:
&gt;&gt;&gt; Hi,
&gt;&gt;&gt;
&gt;&gt;&gt; Regarding to using a specific SL with RDMA CM, I've checked in the code and it seems that RDMA_CM uses the SL from the SA.
&gt;&gt;&gt; So if you want to configure a specific SL, you need to do it via the SM.
&gt;&gt;&gt;
&gt;&gt;&gt; Doron
&gt;&gt;&gt;
&gt;&gt;&gt; -----Original Message-----
&gt;&gt;&gt; From: Jeff Squyres [mailto:jsquyres_at_[hidden]]
&gt;&gt;&gt; Sent: Thursday, February 24, 2011 3:45 PM
&gt;&gt;&gt; To: Michael Shuey
&gt;&gt;&gt; Cc: Open MPI Users , Mike Dubman
&gt;&gt;&gt; Subject: Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI
&gt;&gt;&gt;
&gt;&gt;&gt; On Feb 24, 2011, at 8:00 AM, Michael Shuey wrote:
&gt;&gt;&gt;
&gt;&gt;&gt;&gt; Late yesterday I did have a chance to test the patch Jeff provided
&gt;&gt;&gt;&gt; (against 1.4.3 - testing 1.5.x is on the docket for today). &#160;While it
&gt;&gt;&gt;&gt; works, in that I can specify a gid_index,
&gt;&gt;&gt;
&gt;&gt;&gt; Great! &#160;I'll commit that to the trunk and start the process of moving it to the v1.5.x series (I know you haven't tested it yet, but it's essentially the same patch, just slightly adjusted for each of the 3 branches).
&gt;&gt;&gt;
&gt;&gt;&gt;&gt; it doesn't do everything
&gt;&gt;&gt;&gt; required - my traffic won't match a lossless CoS on the ethernet
&gt;&gt;&gt;&gt; switch. &#160;Specifying a GID is only half of it; I really need to also
&gt;&gt;&gt;&gt; specify a service level.
&gt;&gt;&gt;
&gt;&gt;&gt; RoCE requires the use of the RDMA CM (I think?), and I didn't think there was a way to request a specific SL via the RDMA CM...? &#160;(I could certainly be wrong here)
&gt;&gt;&gt;
&gt;&gt;&gt; I think Mellanox will need to follow up with these questions...
&gt;&gt;&gt;
&gt;&gt;&gt; --
&gt;&gt;&gt; Jeff Squyres
&gt;&gt;&gt; jsquyres_at_[hidden]
&gt;&gt;&gt; For corporate legal information go to:
&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt; users mailing list
&gt;&gt;&gt; users_at_[hidden]
&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;&gt;
&gt;&gt;
&gt;&gt; _______________________________________________
&gt;&gt; users mailing list
&gt;&gt; users_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;
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
<li><strong>Next message:</strong> <a href="15785.php">Jeff Squyres: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="15783.php">Massimo Cafaro: "Re: [OMPI users] MPI_File_Read_all and large file"</a>
<li><strong>In reply to:</strong> <a href="15768.php">Jeff Squyres: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15785.php">Jeff Squyres: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<li><strong>Reply:</strong> <a href="15785.php">Jeff Squyres: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
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
