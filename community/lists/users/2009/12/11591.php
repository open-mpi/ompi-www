<?
$subject_val = "Re: [OMPI users] Notifier Framework howto";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 17 15:52:26 2009" -->
<!-- isoreceived="20091217205226" -->
<!-- sent="Thu, 17 Dec 2009 13:52:16 -0700" -->
<!-- isosent="20091217205216" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Notifier Framework howto" -->
<!-- id="E3E2DCD0-74AC-4BA8-AB46-20FD868F1ED7_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AF259D4F-3546-446E-8B0F-54D64530520D_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Notifier Framework howto<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-17 15:52:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11592.php">Jeff Squyres: "Re: [OMPI users] Notifier Framework howto"</a>
<li><strong>Previous message:</strong> <a href="11590.php">Ralph Castain: "Re: [OMPI users] error performing MPI_Comm_spawn"</a>
<li><strong>In reply to:</strong> <a href="11514.php">Jeff Squyres: "Re: [OMPI users] Notifier Framework howto"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11592.php">Jeff Squyres: "Re: [OMPI users] Notifier Framework howto"</a>
<li><strong>Reply:</strong> <a href="11592.php">Jeff Squyres: "Re: [OMPI users] Notifier Framework howto"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If it would help, I have time and am willing to add notifier calls to this area of the code base. You'll still get the errors shown here as I always bury the notifier call behind the error check that surrounds these error messages to avoid impacting the critical path, but you would be able to gt syslog messages (or whatever channel you choose) as well.
<br>
<p>Ralph
<br>
<p>On Dec 10, 2009, at 4:19 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Dec 10, 2009, at 5:06 PM, Brock Palen wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I would like to try out the notifier framework, problem is I am having  trouble finding documentation for it,  I am digging around the website  and not finding much.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Currently we have a problem where hosts are throwing up errors like:
</span><br>
<span class="quotelev2">&gt;&gt; [nyx0891.engin.umich.edu][[25560,1],45][btl_tcp_endpoint.c:
</span><br>
<span class="quotelev2">&gt;&gt; 631:mca_btl_tcp_endpoint_complete_connect] connect() failed: 
</span><br>
<span class="quotelev2">&gt;&gt; Connection timed out (110)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yoinks.  Any idea why this is happening?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We would like when this happens to notify us, so we can put time 
</span><br>
<span class="quotelev2">&gt;&gt; stamps on events going on on the network.  Is this even possible with 
</span><br>
<span class="quotelev2">&gt;&gt; the frame work?  See we don't show any interfaces coming up and down, 
</span><br>
<span class="quotelev2">&gt;&gt; or any errors on interfaces, so we are looking to isolate the problem 
</span><br>
<span class="quotelev2">&gt;&gt; more.  Only the MPI library knows when this happens.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It's not well documented.  So let's start here...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The first issue is that we currently only have notifier calls down in the openib BTL -- not any of the others.  :-(  We put it there because there was specific requests to be notified when IB links went down.  We then used those as a request for comment from the community, asking &quot;do you like this? do you want more?&quot;  We kinda got nothing back, and I'll admit that we kinda forgot about it -- and therefore never added notifier calls elsewhere in the code.  :-\
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We designed the notifier in OMPI to be trivially easy to use throughout the code base -- it's just adding a single function call where the error occurs.  Would you, perchance, be interested in adding any of these in the TCP BTL?  I'd be happy to point you in the right direction... :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; After that, it's just a matter of enabling a notifier:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  mpirun --mca notifier syslog ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Each notifier has some MCA params that are fairly obvious -- use:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  ompi_info --param notifier all
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; to see them.  There's 3 notifier plugins:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - command: execute any arbitrary command.  It must run in finite (short) time.  You use MCA params to set the command (we can pass some strings down to the command; see the ompi_info help string for more details), and set a timeout such that if the command runs for that many seconds without exiting, we'll kill it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - syslog: because it was simple to do -- we just output a string to the syslog.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - twitter: because it was fun to do.  ;-)  Actually, the rationale was that you can tweet to a private feed and then slave an RSS reader to it to see if anything happens.  It will need to be able to reach the general internet (i.e., twitter.com); proxies are not supported.  Set your twitter username/password via MCA params.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11592.php">Jeff Squyres: "Re: [OMPI users] Notifier Framework howto"</a>
<li><strong>Previous message:</strong> <a href="11590.php">Ralph Castain: "Re: [OMPI users] error performing MPI_Comm_spawn"</a>
<li><strong>In reply to:</strong> <a href="11514.php">Jeff Squyres: "Re: [OMPI users] Notifier Framework howto"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11592.php">Jeff Squyres: "Re: [OMPI users] Notifier Framework howto"</a>
<li><strong>Reply:</strong> <a href="11592.php">Jeff Squyres: "Re: [OMPI users] Notifier Framework howto"</a>
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
