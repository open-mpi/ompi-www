<?
$subject_val = "Re: [OMPI users] problem starting a ompi job in a mix BE/LE cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  2 11:14:53 2015" -->
<!-- isoreceived="20150602151453" -->
<!-- sent="Tue, 02 Jun 2015 10:14:55 -0500" -->
<!-- isosent="20150602151455" -->
<!-- name="Steve Wise" -->
<!-- email="swise_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem starting a ompi job in a mix BE/LE cluster" -->
<!-- id="556DC86F.7000500_at_opengridcomputing.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="09C1D048-230F-4613-94FD-87AD738A64E5_at_open-mpi.org" -->
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
<strong>Date:</strong> 2015-06-02 11:14:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27033.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problem starting a ompi job in a mix BE/LE cluster"</a>
<li><strong>Previous message:</strong> <a href="27031.php">Ralph Castain: "Re: [OMPI users] problem starting a ompi job in a mix BE/LE cluster"</a>
<li><strong>In reply to:</strong> <a href="27031.php">Ralph Castain: "Re: [OMPI users] problem starting a ompi job in a mix BE/LE cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27035.php">Ralph Castain: "Re: [OMPI users] problem starting a ompi job in a mix BE/LE cluster"</a>
<li><strong>Reply:</strong> <a href="27035.php">Ralph Castain: "Re: [OMPI users] problem starting a ompi job in a mix BE/LE cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 6/2/2015 10:04 AM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 2, 2015, at 7:10 AM, Steve Wise &lt;swise_at_[hidden] 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:swise_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 6/1/2015 9:51 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I&#146;m wondering if it is also possible that the error message is 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; simply printing that ID incorrectly. Looking at the code, it appears 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that we do perform the network byte translation correctly when we 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; setup the data for transmission between the processes. However, I 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; don&#146;t see that translation being done before we print the error 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; message. Hence, I think the error message is printing out the device 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ID incorrectly - and the problem truly is just that the queues are 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; different.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Does the code convert the device id/part number into HBO before 
</span><br>
<span class="quotelev2">&gt;&gt; looking it up in the .ini file?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; All I could see was that it is converted to NBO for transmission, and 
</span><br>
<span class="quotelev1">&gt; to HBO at the remote end for use.  So both sides should have accurate 
</span><br>
<span class="quotelev1">&gt; IDs. I don&#146;t know what happens beyond that, I&#146;m afraid - this isn&#146;t my 
</span><br>
<span class="quotelev1">&gt; particular code area.
</span><br>
<span class="quotelev1">&gt;
</span><br>
That makes 2 of us :)
<br>
<p>Where is this code located in the ompi tree?
<br>
<p>Are there any verbose parameters that will help show more detail on how 
<br>
it is searching the .ini file?
<br>
<p><p><span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Assuming atlas3 is just displaying the vendor and part numbers w/o 
</span><br>
<span class="quotelev2">&gt;&gt; converting to HBO, they do look correct.  part ID 21505 is 0x5401, 
</span><br>
<span class="quotelev2">&gt;&gt; and part ID 22282240 is 0x5401 swapped:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [root_at_atlas3 openmpi]# echo $((0x5401))
</span><br>
<span class="quotelev2">&gt;&gt; 21505
</span><br>
<span class="quotelev2">&gt;&gt; [root_at_atlas3 openmpi]# echo $((0x01540000))
</span><br>
<span class="quotelev2">&gt;&gt; 22282240
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Looking at the .ini on both nodes however, I see valid and identical 
</span><br>
<span class="quotelev2">&gt;&gt; entries for device 0x1425/0x5401:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [root_at_ppc64-rhel71 openmpi]# grep -3 0x5401 *ini
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [Chelsio T5]
</span><br>
<span class="quotelev2">&gt;&gt; vendor_id = 0x1425
</span><br>
<span class="quotelev2">&gt;&gt; vendor_part_id = 
</span><br>
<span class="quotelev2">&gt;&gt; 0xb000,0xb001,0x5400,0x5401,0x5402,0x5403,0x5404,0x5405,0x5406,0x5407,0x5408,0x5409,0x540a,0x540b,0x540c,0x540d,0x540e,0x540f,0x5410,0x5411,0x5412,0x5413
</span><br>
<span class="quotelev2">&gt;&gt; use_eager_rdma = 1
</span><br>
<span class="quotelev2">&gt;&gt; mtu = 2048
</span><br>
<span class="quotelev2">&gt;&gt; receive_queues = P,65536,64
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [root_at_atlas3 openmpi]# grep -3 0x5401 *ini
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [Chelsio T5]
</span><br>
<span class="quotelev2">&gt;&gt; vendor_id = 0x1425
</span><br>
<span class="quotelev2">&gt;&gt; vendor_part_id = 
</span><br>
<span class="quotelev2">&gt;&gt; 0xb000,0xb001,0x5400,0x5401,0x5402,0x5403,0x5404,0x5405,0x5406,0x5407,0x5408,0x5409,0x540a,0x540b,0x540c,0x540d,0x540e,0x540f,0x5410,0x5411,0x5412,0x5413
</span><br>
<span class="quotelev2">&gt;&gt; use_eager_rdma = 1
</span><br>
<span class="quotelev2">&gt;&gt; mtu = 2048
</span><br>
<span class="quotelev2">&gt;&gt; receive_queues = P,65536,64
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So I still think somehow the one node is looking up the wrong entry 
</span><br>
<span class="quotelev2">&gt;&gt; in the .ini file.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also:  Attached are the ompi-info outputs and a diff of the two.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Steve.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jun 1, 2015, at 7:30 PM, Jeff Squyres (jsquyres) 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This is not a heterogeneous run-time issue -- it's the issue that 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Nathan cited: that OMPI detected different receive queue setups on 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; different machines.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; As the error message states; the openib BTL simply cannot handle 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; when different MPI processes specific different receive queue 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; specifications.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; You mentioned that the device ID is being incorrectly identified: 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; is that OMPI's fault, or something wrong with the device itself?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Jun 1, 2015, at 6:06 PM, Steve Wise 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;swise_at_[hidden] &lt;mailto:swise_at_[hidden]&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On 6/1/2015 9:53 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Well, I checked and it looks to me like &#151;hetero-apps is a stale 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; option in the master at least - I don&#146;t see where it gets used.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Looking at the code, I would suspect that something didn&#146;t get 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; configured correctly - either the &#151;enable-heterogeneous flag 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; didn&#146;t get set on one side, or we incorrectly failed to identify 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the BE machine, or both. You might run ompi_info on the two sides 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; and verify they both were built correctly
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; We'll check ompi_info...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Steve.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post: 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/06/27025.php">http://www.open-mpi.org/community/lists/users/2015/06/27025.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; For corporate legal information go to: 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post: 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/06/27026.php">http://www.open-mpi.org/community/lists/users/2015/06/27026.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; post:<a href="http://www.open-mpi.org/community/lists/users/2015/06/27027.php">http://www.open-mpi.org/community/lists/users/2015/06/27027.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;atlas3_ompi_info.txt&gt;&lt;diff.txt&gt;&lt;ppc64_ompi_info.txt&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this 
</span><br>
<span class="quotelev2">&gt;&gt; post:<a href="http://www.open-mpi.org/community/lists/users/2015/06/27030.php">http://www.open-mpi.org/community/lists/users/2015/06/27030.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/06/27031.php">http://www.open-mpi.org/community/lists/users/2015/06/27031.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27032/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27033.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problem starting a ompi job in a mix BE/LE cluster"</a>
<li><strong>Previous message:</strong> <a href="27031.php">Ralph Castain: "Re: [OMPI users] problem starting a ompi job in a mix BE/LE cluster"</a>
<li><strong>In reply to:</strong> <a href="27031.php">Ralph Castain: "Re: [OMPI users] problem starting a ompi job in a mix BE/LE cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27035.php">Ralph Castain: "Re: [OMPI users] problem starting a ompi job in a mix BE/LE cluster"</a>
<li><strong>Reply:</strong> <a href="27035.php">Ralph Castain: "Re: [OMPI users] problem starting a ompi job in a mix BE/LE cluster"</a>
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
