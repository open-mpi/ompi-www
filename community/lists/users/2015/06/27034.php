<?
$subject_val = "Re: [OMPI users] problem starting a ompi job in a mix BE/LE cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  2 11:46:05 2015" -->
<!-- isoreceived="20150602154605" -->
<!-- sent="Wed, 3 Jun 2015 00:46:02 +0900" -->
<!-- isosent="20150602154602" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem starting a ompi job in a mix BE/LE cluster" -->
<!-- id="CAAkFZ5suxoQCMzXHn7JNH_K+5h-NjUZadG9HiieJwks4Vw7dug_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="DD4BF59D-EC75-48C7-8D15-DD678BA99C38_at_cisco.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-02 11:46:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27035.php">Ralph Castain: "Re: [OMPI users] problem starting a ompi job in a mix BE/LE cluster"</a>
<li><strong>Previous message:</strong> <a href="27033.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problem starting a ompi job in a mix BE/LE cluster"</a>
<li><strong>In reply to:</strong> <a href="27033.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problem starting a ompi job in a mix BE/LE cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27037.php">Steve Wise: "Re: [OMPI users] problem starting a ompi job in a mix BE/LE cluster"</a>
<li><strong>Reply:</strong> <a href="27037.php">Steve Wise: "Re: [OMPI users] problem starting a ompi job in a mix BE/LE cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Steve,
<br>
<p><p>MCA_BTL_OPENIB_MODEX_MSG_{HTON,NTOH} do not convert all the fields of the
<br>
mca_btl_openib_modex_message_t struct.
<br>
<p>I would start here ...
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Wednesday, June 3, 2015, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Steve --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think that this falls directly in your prevue since you volunteered to
</span><br>
<span class="quotelev1">&gt; maintain the openib BTL (this HCA ID thing is part of the openib BTL
</span><br>
<span class="quotelev1">&gt; bootstrapping).  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Jun 2, 2015, at 10:04 AM, Ralph Castain &lt;rhc_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Jun 2, 2015, at 7:10 AM, Steve Wise &lt;swise_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On 6/1/2015 9:51 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I&#226;&#128;&#153;m wondering if it is also possible that the error message is simply
</span><br>
<span class="quotelev1">&gt; printing that ID incorrectly. Looking at the code, it appears that we do
</span><br>
<span class="quotelev1">&gt; perform the network byte translation correctly when we setup the data for
</span><br>
<span class="quotelev1">&gt; transmission between the processes. However, I don&#226;&#128;&#153;t see that translation
</span><br>
<span class="quotelev1">&gt; being done before we print the error message. Hence, I think the error
</span><br>
<span class="quotelev1">&gt; message is printing out the device ID incorrectly - and the problem truly
</span><br>
<span class="quotelev1">&gt; is just that the queues are different.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Does the code convert the device id/part number into HBO before looking
</span><br>
<span class="quotelev1">&gt; it up in the .ini file?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; All I could see was that it is converted to NBO for transmission, and to
</span><br>
<span class="quotelev1">&gt; HBO at the remote end for use.  So both sides should have accurate IDs. I
</span><br>
<span class="quotelev1">&gt; don&#226;&#128;&#153;t know what happens beyond that, I&#226;&#128;&#153;m afraid - this isn&#226;&#128;&#153;t my particular
</span><br>
<span class="quotelev1">&gt; code area.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Assuming atlas3 is just displaying the vendor and part numbers w/o
</span><br>
<span class="quotelev1">&gt; converting to HBO, they do look correct.  part ID 21505 is 0x5401, and part
</span><br>
<span class="quotelev1">&gt; ID 22282240 is 0x5401 swapped:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [root_at_atlas3 openmpi]# echo $((0x5401))
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 21505
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [root_at_atlas3 openmpi]# echo $((0x01540000))
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 22282240
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Looking at the .ini on both nodes however, I see valid and identical
</span><br>
<span class="quotelev1">&gt; entries for device 0x1425/0x5401:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [root_at_ppc64-rhel71 openmpi]# grep -3 0x5401 *ini
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Chelsio T5]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; vendor_id = 0x1425
</span><br>
<span class="quotelev3">&gt; &gt;&gt; vendor_part_id =
</span><br>
<span class="quotelev1">&gt; 0xb000,0xb001,0x5400,0x5401,0x5402,0x5403,0x5404,0x5405,0x5406,0x5407,0x5408,0x5409,0x540a,0x540b,0x540c,0x540d,0x540e,0x540f,0x5410,0x5411,0x5412,0x5413
</span><br>
<span class="quotelev3">&gt; &gt;&gt; use_eager_rdma = 1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mtu = 2048
</span><br>
<span class="quotelev3">&gt; &gt;&gt; receive_queues = P,65536,64
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [root_at_atlas3 openmpi]# grep -3 0x5401 *ini
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Chelsio T5]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; vendor_id = 0x1425
</span><br>
<span class="quotelev3">&gt; &gt;&gt; vendor_part_id =
</span><br>
<span class="quotelev1">&gt; 0xb000,0xb001,0x5400,0x5401,0x5402,0x5403,0x5404,0x5405,0x5406,0x5407,0x5408,0x5409,0x540a,0x540b,0x540c,0x540d,0x540e,0x540f,0x5410,0x5411,0x5412,0x5413
</span><br>
<span class="quotelev3">&gt; &gt;&gt; use_eager_rdma = 1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mtu = 2048
</span><br>
<span class="quotelev3">&gt; &gt;&gt; receive_queues = P,65536,64
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; So I still think somehow the one node is looking up the wrong entry in
</span><br>
<span class="quotelev1">&gt; the .ini file.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Also:  Attached are the ompi-info outputs and a diff of the two.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Steve.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; On Jun 1, 2015, at 7:30 PM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden] &lt;javascript:;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; This is not a heterogeneous run-time issue -- it's the issue that
</span><br>
<span class="quotelev1">&gt; Nathan cited: that OMPI detected different receive queue setups on
</span><br>
<span class="quotelev1">&gt; different machines.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; As the error message states; the openib BTL simply cannot handle when
</span><br>
<span class="quotelev1">&gt; different MPI processes specific different receive queue specifications.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; You mentioned that the device ID is being incorrectly identified: is
</span><br>
<span class="quotelev1">&gt; that OMPI's fault, or something wrong with the device itself?
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; On Jun 1, 2015, at 6:06 PM, Steve Wise &lt;swise_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; On 6/1/2015 9:53 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Well, I checked and it looks to me like &#226;&#128;&#148;hetero-apps is a stale
</span><br>
<span class="quotelev1">&gt; option in the master at least - I don&#226;&#128;&#153;t see where it gets used.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Looking at the code, I would suspect that something didn&#226;&#128;&#153;t get
</span><br>
<span class="quotelev1">&gt; configured correctly - either the &#226;&#128;&#148;enable-heterogeneous flag didn&#226;&#128;&#153;t get set
</span><br>
<span class="quotelev1">&gt; on one side, or we incorrectly failed to identify the BE machine, or both.
</span><br>
<span class="quotelev1">&gt; You might run ompi_info on the two sides and verify they both were built
</span><br>
<span class="quotelev1">&gt; correctly
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; We'll check ompi_info...
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Thanks!
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Steve.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; users_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/06/27025.php">http://www.open-mpi.org/community/lists/users/2015/06/27025.php</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; jsquyres_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/06/27026.php">http://www.open-mpi.org/community/lists/users/2015/06/27026.php</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/06/27027.php">http://www.open-mpi.org/community/lists/users/2015/06/27027.php</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &lt;atlas3_ompi_info.txt&gt;&lt;diff.txt&gt;&lt;ppc64_ompi_info.txt&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/06/27030.php">http://www.open-mpi.org/community/lists/users/2015/06/27030.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/06/27031.php">http://www.open-mpi.org/community/lists/users/2015/06/27031.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/06/27033.php">http://www.open-mpi.org/community/lists/users/2015/06/27033.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27034/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27035.php">Ralph Castain: "Re: [OMPI users] problem starting a ompi job in a mix BE/LE cluster"</a>
<li><strong>Previous message:</strong> <a href="27033.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problem starting a ompi job in a mix BE/LE cluster"</a>
<li><strong>In reply to:</strong> <a href="27033.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problem starting a ompi job in a mix BE/LE cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27037.php">Steve Wise: "Re: [OMPI users] problem starting a ompi job in a mix BE/LE cluster"</a>
<li><strong>Reply:</strong> <a href="27037.php">Steve Wise: "Re: [OMPI users] problem starting a ompi job in a mix BE/LE cluster"</a>
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
