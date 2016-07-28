<?
$subject_val = "Re: [OMPI users] InfiniBand, different OpenFabrics transport types";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul 10 02:48:47 2011" -->
<!-- isoreceived="20110710064847" -->
<!-- sent="Sun, 10 Jul 2011 09:48:32 +0300" -->
<!-- isosent="20110710064832" -->
<!-- name="Yevgeny Kliteynik" -->
<!-- email="kliteyn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] InfiniBand, different OpenFabrics transport types" -->
<!-- id="4E194B40.6080404_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1310144375.97939.YahooMailNeo_at_web121817.mail.ne1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] InfiniBand, different OpenFabrics transport types<br>
<strong>From:</strong> Yevgeny Kliteynik (<em>kliteyn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-10 02:48:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16877.php">Yevgeny Kliteynik: "Re: [OMPI users] Error-Open MPI over Infiniband: polling LP CQ with status LOCAL LENGTH ERROR"</a>
<li><strong>Previous message:</strong> <a href="16875.php">jody: "Re: [OMPI users] Error using hostfile"</a>
<li><strong>In reply to:</strong> <a href="16860.php">Bill Johnstone: "Re: [OMPI users] InfiniBand, different OpenFabrics transport types"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16887.php">Bill Johnstone: "Re: [OMPI users] InfiniBand, different OpenFabrics transport types"</a>
<li><strong>Reply:</strong> <a href="16887.php">Bill Johnstone: "Re: [OMPI users] InfiniBand, different OpenFabrics transport types"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Bill,
<br>
<p>On 08-Jul-11 7:59 PM, Bill Johnstone wrote:
<br>
<span class="quotelev1">&gt; Hello, and thanks for the reply.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----- Original Message -----
</span><br>
<span class="quotelev2">&gt;&gt; From: Jeff Squyres&lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Thursday, July 7, 2011 5:14 PM
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] InfiniBand, different OpenFabrics transport types
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 28, 2011, at 1:46 PM, Bill Johnstone wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   I have a heterogeneous network of InfiniBand-equipped hosts which are all
</span><br>
<span class="quotelev2">&gt;&gt; connected to the same backbone switch, an older SDR 10 Gb/s unit.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   One set of nodes uses the Mellanox &quot;ib_mthca&quot; driver, while the
</span><br>
<span class="quotelev2">&gt;&gt; other uses the &quot;mlx4&quot; driver.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   This is on Linux 2.6.32, with Open MPI 1.5.3 .
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   When I run Open MPI across these node types, I get an error message of the
</span><br>
<span class="quotelev2">&gt;&gt; form:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Open MPI detected two different OpenFabrics transport types in the same
</span><br>
<span class="quotelev2">&gt;&gt; Infiniband network.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Such mixed network trasport configuration is not supported by Open MPI.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Local host: compute-chassis-1-node-01
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Local adapter: mthca0 (vendor 0x5ad, part ID 25208)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Local transport type: MCA_BTL_OPENIB_TRANSPORT_UNKNOWN
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Wow, that's cool (&quot;UNKNOWN&quot;).  Are you using an old version of
</span><br>
<span class="quotelev2">&gt;&gt; OFED or something?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No, clean local build of OFED 1.5.3 packages, but I don't have the full huge complement of OFED packages installed, since our setup is not using IPoIB, SDP, etc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ibdiagnet, and all the usual suspects work as expected, and I'm able to do large scale Open MPI runs just fine, so long as I don't cross Mellanox HCA types.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Mellanox -- how can this happen?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Remote host: compute-chassis-3-node-01
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Remote Adapter: (vendor 0x2c9, part ID 26428)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Remote transport type: MCA_BTL_OPENIB_TRANSPORT_IB
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Two questions:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   1. Why is this occurring if both adapters have all the OpenIB software set
</span><br>
<span class="quotelev2">&gt;&gt; up?  Is it because Open MPI is trying to use functionality such as ConnectX with
</span><br>
<span class="quotelev2">&gt;&gt; the newer hardware, which is incompatible with older hardware, or is it
</span><br>
<span class="quotelev2">&gt;&gt; something more mundane?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It's basically a mismatch of IB capabilities -- Open MPI is trying to use
</span><br>
<span class="quotelev2">&gt;&gt; more advanced features in some nodes and not in others.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I also tried looking in the adapter-specific settings in the .ini file under /etc, but the only difference I found was in MTU, and I think that's configured on the switch.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   2. How can I use IB amongst these heterogeneous nodes?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Mellanox will need to answer this question...  It might be able to be done, but
</span><br>
<span class="quotelev2">&gt;&gt; I don't know how offhand.  The first issue is to figure out why you're
</span><br>
<span class="quotelev2">&gt;&gt; getting TRANSPORT_UNKNOWN on the one node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OK, please let me know what other things to try or what other info I can provide.
</span><br>
<p>I'll check the MCA_BTL_OPENIB_TRANSPORT_UNKNOWN thing and get back to you.
<br>
One question though, just to make sure we're on the same page: so the jobs do run OK on
<br>
the older HCAs, as long as they run *only* on the older HCAs, right?
<br>
Please make sure that the jobs are using only IB with &quot;--mca btl openib,self&quot; parameters.
<br>
<p>-- YK
<br>
&nbsp;
<br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16877.php">Yevgeny Kliteynik: "Re: [OMPI users] Error-Open MPI over Infiniband: polling LP CQ with status LOCAL LENGTH ERROR"</a>
<li><strong>Previous message:</strong> <a href="16875.php">jody: "Re: [OMPI users] Error using hostfile"</a>
<li><strong>In reply to:</strong> <a href="16860.php">Bill Johnstone: "Re: [OMPI users] InfiniBand, different OpenFabrics transport types"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16887.php">Bill Johnstone: "Re: [OMPI users] InfiniBand, different OpenFabrics transport types"</a>
<li><strong>Reply:</strong> <a href="16887.php">Bill Johnstone: "Re: [OMPI users] InfiniBand, different OpenFabrics transport types"</a>
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
