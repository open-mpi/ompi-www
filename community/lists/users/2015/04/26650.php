<?
$subject_val = "Re: [OMPI users] 1.8.3 executable with 1.8.4 mpirun/orted?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  8 10:43:02 2015" -->
<!-- isoreceived="20150408144302" -->
<!-- sent="Wed, 8 Apr 2015 07:42:58 -0700" -->
<!-- isosent="20150408144258" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 1.8.3 executable with 1.8.4 mpirun/orted?" -->
<!-- id="79F5AA70-0F55-4A75-9599-C92A5B4E9C51_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="F4DA6A1B-BCAC-4A62-B9FA-B95E66C12FB6_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] 1.8.3 executable with 1.8.4 mpirun/orted?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-08 10:42:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26651.php">Ralph Castain: "Re: [OMPI users] parsability of ompi_info --parsable output"</a>
<li><strong>Previous message:</strong> <a href="26649.php">Edgar Gabriel: "Re: [OMPI users] OpenMPI 1.8.4 - Java Library - allToAllv()"</a>
<li><strong>In reply to:</strong> <a href="26646.php">Ralph Castain: "Re: [OMPI users] 1.8.3 executable with 1.8.4 mpirun/orted?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26666.php">Alan Wild: "Re: [OMPI users] 1.8.3 executable with 1.8.4 mpirun/orted?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Meantime, I&#226;&#128;&#153;ve created a patch that should address this problem:
<br>
<p><a href="https://github.com/open-mpi/ompi-release/pull/227">https://github.com/open-mpi/ompi-release/pull/227</a> &lt;<a href="https://github.com/open-mpi/ompi-release/pull/227">https://github.com/open-mpi/ompi-release/pull/227</a>&gt;
<br>
<p>If you can and would like, please see if it resolves this for you.
<br>
<p><p><span class="quotelev1">&gt; On Apr 7, 2015, at 9:29 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hmmm&#226;&#128;&#166;yeah, we&#226;&#128;&#153;ve been discussing this point. It&#226;&#128;&#153;s a bit of a mixed bag. We hit problems where people don&#226;&#128;&#153;t get their paths set correctly on remote machines, and then we hang because of bad connections between incompatible versions. Same time, we hit these situations.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We&#226;&#128;&#153;re getting ready to release 1.8.5 - let me discuss with the team about what we can/should do to resolve these problems.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 7, 2015, at 8:43 PM, Alan Wild &lt;alan_at_[hidden] &lt;mailto:alan_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I know this isn't &quot;recommend&quot;, but a vendor recently gave me an executable compiled openmpi-1.8.3 and I happened to have recently completed a build of 1.8.4 (but didn't have 1.8.3 sitting around and the vendor refuses to provide his build).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Since these releases are so close they should be ABI compatible so I thought I would see what happens...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [arwild1_at_hplcslsp2 ~]$ mpirun -n 2 -H localhost vendor_app_mpi
</span><br>
<span class="quotelev2">&gt;&gt; [hplcslsp2:11394] [[56032,0],0] tcp_peer_recv_connect_ack: received different version from [[56032,1],0]: 1.8.3 instead of 1.8.4
</span><br>
<span class="quotelev2">&gt;&gt; [hplcslsp2:11394] [[56032,0],0] tcp_peer_recv_connect_ack: received different version from [[56032,1],1]: 1.8.3 instead of 1.8.4
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; and then everything hangs.  I can clearly see the output coming from 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ./orte/mca/oob/tcp/oob_tcp_connection.c
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; and where it returns
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; return ORTE_ERR_CONNECTION_REFUSED;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So it looks like I'm going to have to at least build 1.8.3, but is there any way to work around this given we are dealing with builds that are that close?  I'm really not interested in &quot;rolling back&quot; to 1.8.3 or providing both releases on my system.  
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; (yes, &quot;right answer&quot; is to get the vendor to provide his build... long stoy)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Alan
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; alan_at_[hidden] &lt;mailto:alan_at_[hidden]&gt; <a href="http://humbleville.blogspot.com">http://humbleville.blogspot.com</a> &lt;<a href="http://humbleville.blogspot.com/">http://humbleville.blogspot.com/</a>&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26645.php">http://www.open-mpi.org/community/lists/users/2015/04/26645.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26650/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26651.php">Ralph Castain: "Re: [OMPI users] parsability of ompi_info --parsable output"</a>
<li><strong>Previous message:</strong> <a href="26649.php">Edgar Gabriel: "Re: [OMPI users] OpenMPI 1.8.4 - Java Library - allToAllv()"</a>
<li><strong>In reply to:</strong> <a href="26646.php">Ralph Castain: "Re: [OMPI users] 1.8.3 executable with 1.8.4 mpirun/orted?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26666.php">Alan Wild: "Re: [OMPI users] 1.8.3 executable with 1.8.4 mpirun/orted?"</a>
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
