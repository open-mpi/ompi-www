<?
$subject_val = "Re: [OMPI users] problem starting a ompi job in a mix BE/LE cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  2 10:10:50 2015" -->
<!-- isoreceived="20150602141050" -->
<!-- sent="Tue, 02 Jun 2015 09:10:52 -0500" -->
<!-- isosent="20150602141052" -->
<!-- name="Steve Wise" -->
<!-- email="swise_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem starting a ompi job in a mix BE/LE cluster" -->
<!-- id="556DB96C.1070005_at_opengridcomputing.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="4B7DEFFB-C990-445B-9EB2-35A7B707056A_at_open-mpi.org" -->
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
<strong>Date:</strong> 2015-06-02 10:10:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27031.php">Ralph Castain: "Re: [OMPI users] problem starting a ompi job in a mix BE/LE cluster"</a>
<li><strong>Previous message:</strong> <a href="27029.php">Timur Ismagilov: "Re: [OMPI users] Fwd[2]: OMPI yalla vs impi"</a>
<li><strong>In reply to:</strong> <a href="27027.php">Ralph Castain: "Re: [OMPI users] problem starting a ompi job in a mix BE/LE cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27031.php">Ralph Castain: "Re: [OMPI users] problem starting a ompi job in a mix BE/LE cluster"</a>
<li><strong>Reply:</strong> <a href="27031.php">Ralph Castain: "Re: [OMPI users] problem starting a ompi job in a mix BE/LE cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 6/1/2015 9:51 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; I&#226;&#128;&#153;m wondering if it is also possible that the error message is simply printing that ID incorrectly. Looking at the code, it appears that we do perform the network byte translation correctly when we setup the data for transmission between the processes. However, I don&#226;&#128;&#153;t see that translation being done before we print the error message. Hence, I think the error message is printing out the device ID incorrectly - and the problem truly is just that the queues are different.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Does the code convert the device id/part number into HBO before looking 
<br>
it up in the .ini file?
<br>
<p>Assuming atlas3 is just displaying the vendor and part numbers w/o 
<br>
converting to HBO, they do look correct.  part ID 21505 is 0x5401, and 
<br>
part ID 22282240 is 0x5401 swapped:
<br>
<p>[root_at_atlas3 openmpi]# echo $((0x5401))
<br>
21505
<br>
[root_at_atlas3 openmpi]# echo $((0x01540000))
<br>
22282240
<br>
<p>Looking at the .ini on both nodes however, I see valid and identical 
<br>
entries for device 0x1425/0x5401:
<br>
<p>[root_at_ppc64-rhel71 openmpi]# grep -3 0x5401 *ini
<br>
<p>[Chelsio T5]
<br>
vendor_id = 0x1425
<br>
vendor_part_id = 
<br>
0xb000,0xb001,0x5400,0x5401,0x5402,0x5403,0x5404,0x5405,0x5406,0x5407,0x5408,0x5409,0x540a,0x540b,0x540c,0x540d,0x540e,0x540f,0x5410,0x5411,0x5412,0x5413
<br>
use_eager_rdma = 1
<br>
mtu = 2048
<br>
receive_queues = P,65536,64
<br>
<p>[root_at_atlas3 openmpi]# grep -3 0x5401 *ini
<br>
<p>[Chelsio T5]
<br>
vendor_id = 0x1425
<br>
vendor_part_id = 
<br>
0xb000,0xb001,0x5400,0x5401,0x5402,0x5403,0x5404,0x5405,0x5406,0x5407,0x5408,0x5409,0x540a,0x540b,0x540c,0x540d,0x540e,0x540f,0x5410,0x5411,0x5412,0x5413
<br>
use_eager_rdma = 1
<br>
mtu = 2048
<br>
receive_queues = P,65536,64
<br>
<p>So I still think somehow the one node is looking up the wrong entry in 
<br>
the .ini file.
<br>
<p>Also:  Attached are the ompi-info outputs and a diff of the two.
<br>
<p>Steve.
<br>
<p><p><p><span class="quotelev2">&gt;&gt; On Jun 1, 2015, at 7:30 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is not a heterogeneous run-time issue -- it's the issue that Nathan cited: that OMPI detected different receive queue setups on different machines.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As the error message states; the openib BTL simply cannot handle when different MPI processes specific different receive queue specifications.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You mentioned that the device ID is being incorrectly identified: is that OMPI's fault, or something wrong with the device itself?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jun 1, 2015, at 6:06 PM, Steve Wise &lt;swise_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 6/1/2015 9:53 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Well, I checked and it looks to me like &#226;&#128;&#148;hetero-apps is a stale option in the master at least - I don&#226;&#128;&#153;t see where it gets used.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Looking at the code, I would suspect that something didn&#226;&#128;&#153;t get configured correctly - either the &#226;&#128;&#148;enable-heterogeneous flag didn&#226;&#128;&#153;t get set on one side, or we incorrectly failed to identify the BE machine, or both. You might run ompi_info on the two sides and verify they both were built correctly
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We'll check ompi_info...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Steve.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/06/27025.php">http://www.open-mpi.org/community/lists/users/2015/06/27025.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/06/27026.php">http://www.open-mpi.org/community/lists/users/2015/06/27026.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/06/27027.php">http://www.open-mpi.org/community/lists/users/2015/06/27027.php</a>
</span><br>
<p><p>


<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27030/atlas3_ompi_info.txt">atlas3_ompi_info.txt</a>
</ul>
<!-- attachment="atlas3_ompi_info.txt" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27030/diff.txt">diff.txt</a>
</ul>
<!-- attachment="diff.txt" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27030/ppc64_ompi_info.txt">ppc64_ompi_info.txt</a>
</ul>
<!-- attachment="ppc64_ompi_info.txt" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27031.php">Ralph Castain: "Re: [OMPI users] problem starting a ompi job in a mix BE/LE cluster"</a>
<li><strong>Previous message:</strong> <a href="27029.php">Timur Ismagilov: "Re: [OMPI users] Fwd[2]: OMPI yalla vs impi"</a>
<li><strong>In reply to:</strong> <a href="27027.php">Ralph Castain: "Re: [OMPI users] problem starting a ompi job in a mix BE/LE cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27031.php">Ralph Castain: "Re: [OMPI users] problem starting a ompi job in a mix BE/LE cluster"</a>
<li><strong>Reply:</strong> <a href="27031.php">Ralph Castain: "Re: [OMPI users] problem starting a ompi job in a mix BE/LE cluster"</a>
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
