<?
$subject_val = "Re: [OMPI users] problem starting a ompi job in a mix BE/LE cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  2 13:01:42 2015" -->
<!-- isoreceived="20150602170142" -->
<!-- sent="Tue, 02 Jun 2015 12:01:11 -0500" -->
<!-- isosent="20150602170111" -->
<!-- name="Steve Wise" -->
<!-- email="swise_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem starting a ompi job in a mix BE/LE cluster" -->
<!-- id="556DE157.2070700_at_opengridcomputing.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAAkFZ5suxoQCMzXHn7JNH_K+5h-NjUZadG9HiieJwks4Vw7dug_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] problem starting a ompi job in a mix BE/LE cluster<br>
<strong>From:</strong> Steve Wise (<em>swise_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-02 13:01:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27038.php">Timur Ismagilov: "Re: [OMPI users] OMPI yalla vs impi"</a>
<li><strong>Previous message:</strong> <a href="27036.php">Steve Wise: "Re: [OMPI users] problem starting a ompi job in a mix BE/LE cluster"</a>
<li><strong>In reply to:</strong> <a href="27034.php">Gilles Gouaillardet: "Re: [OMPI users] problem starting a ompi job in a mix BE/LE cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27036.php">Steve Wise: "Re: [OMPI users] problem starting a ompi job in a mix BE/LE cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 6/2/2015 10:46 AM, Gilles Gouaillardet wrote:
<br>
<span class="quotelev1">&gt; Steve,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MCA_BTL_OPENIB_MODEX_MSG_{HTON,NTOH} do not convert all the fields of 
</span><br>
<span class="quotelev1">&gt; the mca_btl_openib_modex_message_t struct.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would start here ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Thanks.
<br>
<p><span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wednesday, June 3, 2015, Jeff Squyres (jsquyres) 
</span><br>
<span class="quotelev1">&gt; &lt;jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Steve --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I think that this falls directly in your prevue since you
</span><br>
<span class="quotelev1">&gt;     volunteered to maintain the openib BTL (this HCA ID thing is part
</span><br>
<span class="quotelev1">&gt;     of the openib BTL bootstrapping).  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; On Jun 2, 2015, at 10:04 AM, Ralph Castain &lt;rhc_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;javascript:;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; On Jun 2, 2015, at 7:10 AM, Steve Wise
</span><br>
<span class="quotelev1">&gt;     &lt;swise_at_[hidden] &lt;javascript:;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; On 6/1/2015 9:51 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; I&#146;m wondering if it is also possible that the error message is
</span><br>
<span class="quotelev1">&gt;     simply printing that ID incorrectly. Looking at the code, it
</span><br>
<span class="quotelev1">&gt;     appears that we do perform the network byte translation correctly
</span><br>
<span class="quotelev1">&gt;     when we setup the data for transmission between the processes.
</span><br>
<span class="quotelev1">&gt;     However, I don&#146;t see that translation being done before we print
</span><br>
<span class="quotelev1">&gt;     the error message. Hence, I think the error message is printing
</span><br>
<span class="quotelev1">&gt;     out the device ID incorrectly - and the problem truly is just that
</span><br>
<span class="quotelev1">&gt;     the queues are different.
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; Does the code convert the device id/part number into HBO before
</span><br>
<span class="quotelev1">&gt;     looking it up in the .ini file?
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; All I could see was that it is converted to NBO for
</span><br>
<span class="quotelev1">&gt;     transmission, and to HBO at the remote end for use.  So both sides
</span><br>
<span class="quotelev1">&gt;     should have accurate IDs. I don&#146;t know what happens beyond that,
</span><br>
<span class="quotelev1">&gt;     I&#146;m afraid - this isn&#146;t my particular code area.
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; Assuming atlas3 is just displaying the vendor and part numbers
</span><br>
<span class="quotelev1">&gt;     w/o converting to HBO, they do look correct. part ID 21505 is
</span><br>
<span class="quotelev1">&gt;     0x5401, and part ID 22282240 is 0x5401 swapped:
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; [root_at_atlas3 openmpi]# echo $((0x5401))
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; 21505
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; [root_at_atlas3 openmpi]# echo $((0x01540000))
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; 22282240
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; Looking at the .ini on both nodes however, I see valid and
</span><br>
<span class="quotelev1">&gt;     identical entries for device 0x1425/0x5401:
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; [root_at_ppc64-rhel71 openmpi]# grep -3 0x5401 *ini
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; [Chelsio T5]
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; vendor_id = 0x1425
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; vendor_part_id =
</span><br>
<span class="quotelev1">&gt;     0xb000,0xb001,0x5400,0x5401,0x5402,0x5403,0x5404,0x5405,0x5406,0x5407,0x5408,0x5409,0x540a,0x540b,0x540c,0x540d,0x540e,0x540f,0x5410,0x5411,0x5412,0x5413
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; use_eager_rdma = 1
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; mtu = 2048
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; receive_queues = P,65536,64
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; [root_at_atlas3 openmpi]# grep -3 0x5401 *ini
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; [Chelsio T5]
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; vendor_id = 0x1425
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; vendor_part_id =
</span><br>
<span class="quotelev1">&gt;     0xb000,0xb001,0x5400,0x5401,0x5402,0x5403,0x5404,0x5405,0x5406,0x5407,0x5408,0x5409,0x540a,0x540b,0x540c,0x540d,0x540e,0x540f,0x5410,0x5411,0x5412,0x5413
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; use_eager_rdma = 1
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; mtu = 2048
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; receive_queues = P,65536,64
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; So I still think somehow the one node is looking up the wrong
</span><br>
<span class="quotelev1">&gt;     entry in the .ini file.
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; Also:  Attached are the ompi-info outputs and a diff of the two.
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; Steve.
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt; On Jun 1, 2015, at 7:30 PM, Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev1">&gt;     &lt;jsquyres_at_[hidden] &lt;javascript:;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt; This is not a heterogeneous run-time issue -- it's the issue
</span><br>
<span class="quotelev1">&gt;     that Nathan cited: that OMPI detected different receive queue
</span><br>
<span class="quotelev1">&gt;     setups on different machines.
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt; As the error message states; the openib BTL simply cannot
</span><br>
<span class="quotelev1">&gt;     handle when different MPI processes specific different receive
</span><br>
<span class="quotelev1">&gt;     queue specifications.
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt; You mentioned that the device ID is being incorrectly
</span><br>
<span class="quotelev1">&gt;     identified: is that OMPI's fault, or something wrong with the
</span><br>
<span class="quotelev1">&gt;     device itself?
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;     &gt;&gt;&gt;&gt;&gt; On Jun 1, 2015, at 6:06 PM, Steve Wise
</span><br>
<span class="quotelev1">&gt;     &lt;swise_at_[hidden] &lt;javascript:;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;     &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;     &gt;&gt;&gt;&gt;&gt; On 6/1/2015 9:53 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;&gt;&gt;&gt;&gt; Well, I checked and it looks to me like &#151;hetero-apps is a
</span><br>
<span class="quotelev1">&gt;     stale option in the master at least - I don&#146;t see where it gets used.
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;&gt;&gt;&gt;&gt; Looking at the code, I would suspect that something didn&#146;t
</span><br>
<span class="quotelev1">&gt;     get configured correctly - either the &#151;enable-heterogeneous flag
</span><br>
<span class="quotelev1">&gt;     didn&#146;t get set on one side, or we incorrectly failed to identify
</span><br>
<span class="quotelev1">&gt;     the BE machine, or both. You might run ompi_info on the two sides
</span><br>
<span class="quotelev1">&gt;     and verify they both were built correctly
</span><br>
<span class="quotelev2">&gt;     &gt;&gt;&gt;&gt;&gt; We'll check ompi_info...
</span><br>
<span class="quotelev2">&gt;     &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;     &gt;&gt;&gt;&gt;&gt; Thanks!
</span><br>
<span class="quotelev2">&gt;     &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;     &gt;&gt;&gt;&gt;&gt; Steve.
</span><br>
<span class="quotelev2">&gt;     &gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;     &gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;     &gt;&gt;&gt;&gt;&gt; users_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev2">&gt;     &gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;     &gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/users/2015/06/27025.php">http://www.open-mpi.org/community/lists/users/2015/06/27025.php</a>
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt; jsquyres_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt; users_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;     &gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/users/2015/06/27026.php">http://www.open-mpi.org/community/lists/users/2015/06/27026.php</a>
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; users_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/users/2015/06/27027.php">http://www.open-mpi.org/community/lists/users/2015/06/27027.php</a>
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &lt;atlas3_ompi_info.txt&gt;&lt;diff.txt&gt;&lt;ppc64_ompi_info.txt&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; users_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/users/2015/06/27030.php">http://www.open-mpi.org/community/lists/users/2015/06/27030.php</a>
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;     &gt; users mailing list
</span><br>
<span class="quotelev2">&gt;     &gt; users_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;     &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/users/2015/06/27031.php">http://www.open-mpi.org/community/lists/users/2015/06/27031.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     --
</span><br>
<span class="quotelev1">&gt;     Jeff Squyres
</span><br>
<span class="quotelev1">&gt;     jsquyres_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt;     For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;     Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/users/2015/06/27033.php">http://www.open-mpi.org/community/lists/users/2015/06/27033.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/06/27034.php">http://www.open-mpi.org/community/lists/users/2015/06/27034.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27037/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27038.php">Timur Ismagilov: "Re: [OMPI users] OMPI yalla vs impi"</a>
<li><strong>Previous message:</strong> <a href="27036.php">Steve Wise: "Re: [OMPI users] problem starting a ompi job in a mix BE/LE cluster"</a>
<li><strong>In reply to:</strong> <a href="27034.php">Gilles Gouaillardet: "Re: [OMPI users] problem starting a ompi job in a mix BE/LE cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27036.php">Steve Wise: "Re: [OMPI users] problem starting a ompi job in a mix BE/LE cluster"</a>
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
