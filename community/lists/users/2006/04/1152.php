<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Apr 26 15:02:30 2006" -->
<!-- isoreceived="20060426190230" -->
<!-- sent="Wed, 26 Apr 2006 13:02:27 -0600 (MDT)" -->
<!-- isosent="20060426190227" -->
<!-- name="damien_at_[hidden]" -->
<!-- email="damien_at_[hidden]" -->
<!-- subject="Re: [OMPI users] which is better: 64x1 or 32x2" -->
<!-- id="54723.142.179.218.30.1146078147.squirrel_at_mail.khubla.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="C835B9C9CB0F1C4E9DA48913C9E8F8AF7539B1_at_xmb-rtp-215.amer.cisco.com" -->
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
<strong>From:</strong> <a href="mailto:damien_at_[hidden]?Subject=Re:%20[OMPI%20users]%20which%20is%20better:%2064x1%20or%2032x2"><em>damien_at_[hidden]</em></a><br>
<strong>Date:</strong> 2006-04-26 15:02:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1153.php">Michael Kluskens: "Re: [OMPI users] Spawn and Disconnect"</a>
<li><strong>Previous message:</strong> <a href="1151.php">sdamjad: "[OMPI users] Make and config error"</a>
<li><strong>In reply to:</strong> <a href="1150.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] which is better: 64x1 or 32x2"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
A thing to look at is how much bandwidth the models require compared to
<br>
the CPU load.  You can redline gigabit ethernet with a 1GHz PIII and a
<br>
64-bit PCI bus.  Opterons on a decent motherboard will definitely keep a
<br>
gigabit line chock full.  With dual-core you get the advantage of very
<br>
fast processor-to-processor communication but you'll run the risk of
<br>
choking on the ethernet connection.  You might be OK if you can get
<br>
dual-ethernet connections on the motherboard and run channel-bonding to
<br>
increase the bandwidth, but your switch has to be able to handle it.
<br>
<p>Damien
<br>
<p><span class="quotelev1">&gt; You might want to take this question over to the Beowulf list -- they
</span><br>
<span class="quotelev1">&gt; talk a lot more about cluster configurations than we do -- and/or the
</span><br>
<span class="quotelev1">&gt; mm4 and wein2k support lists (since they know the details of those
</span><br>
<span class="quotelev1">&gt; applications -- if you're going to have a cluster for a specific set of
</span><br>
<span class="quotelev1">&gt; applications, it can be best to get input from the developers who know
</span><br>
<span class="quotelev1">&gt; the applications best, and what their communication characteristics
</span><br>
<span class="quotelev1">&gt; are).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of hpc_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Wednesday, April 26, 2006 12:23 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subject: [OMPI users] which is better: 64x1 or 32x2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I want to build an hpc cluster for running mm5 and wien2k
</span><br>
<span class="quotelev2">&gt;&gt; scientific applications for my physics coledge. both of them
</span><br>
<span class="quotelev2">&gt;&gt; use MPI.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Interconnection between nodes: GigEth (Cisco 24 port GigEth)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It seems I have two choices for nodes:
</span><br>
<span class="quotelev2">&gt;&gt;  * 32 dual core opteron processors (1 GB ram for each node)
</span><br>
<span class="quotelev2">&gt;&gt;  * 64 single core opteron processors (2 GB ram for each node)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Which is better (performance &amp; price)?
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
<span class="quotelev1">&gt;
</span><br>
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
<li><strong>Next message:</strong> <a href="1153.php">Michael Kluskens: "Re: [OMPI users] Spawn and Disconnect"</a>
<li><strong>Previous message:</strong> <a href="1151.php">sdamjad: "[OMPI users] Make and config error"</a>
<li><strong>In reply to:</strong> <a href="1150.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] which is better: 64x1 or 32x2"</a>
<!-- nextthread="start" -->
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
