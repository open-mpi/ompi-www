<?
$subject_val = "Re: [OMPI users] Notifier Framework howto";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 10 18:19:51 2009" -->
<!-- isoreceived="20091210231951" -->
<!-- sent="Thu, 10 Dec 2009 18:19:46 -0500" -->
<!-- isosent="20091210231946" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Notifier Framework howto" -->
<!-- id="AF259D4F-3546-446E-8B0F-54D64530520D_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="6E882F4C-77A0-45A2-82F2-5439659172AF_at_umich.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-10 18:19:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11515.php">Eugene Loh: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<li><strong>Previous message:</strong> <a href="11513.php">Jeff Squyres: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<li><strong>In reply to:</strong> <a href="11506.php">Brock Palen: "[OMPI users] Notifier Framework howto"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11591.php">Ralph Castain: "Re: [OMPI users] Notifier Framework howto"</a>
<li><strong>Reply:</strong> <a href="11591.php">Ralph Castain: "Re: [OMPI users] Notifier Framework howto"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 10, 2009, at 5:06 PM, Brock Palen wrote:
<br>
<p><span class="quotelev1">&gt; I would like to try out the notifier framework, problem is I am having  trouble finding documentation for it,  I am digging around the website  and not finding much.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Currently we have a problem where hosts are throwing up errors like:
</span><br>
<span class="quotelev1">&gt; [nyx0891.engin.umich.edu][[25560,1],45][btl_tcp_endpoint.c:
</span><br>
<span class="quotelev1">&gt; 631:mca_btl_tcp_endpoint_complete_connect] connect() failed: 
</span><br>
<span class="quotelev1">&gt; Connection timed out (110)
</span><br>
<p>Yoinks.  Any idea why this is happening?
<br>
<p><span class="quotelev1">&gt; We would like when this happens to notify us, so we can put time 
</span><br>
<span class="quotelev1">&gt; stamps on events going on on the network.  Is this even possible with 
</span><br>
<span class="quotelev1">&gt; the frame work?  See we don't show any interfaces coming up and down, 
</span><br>
<span class="quotelev1">&gt; or any errors on interfaces, so we are looking to isolate the problem 
</span><br>
<span class="quotelev1">&gt; more.  Only the MPI library knows when this happens.
</span><br>
<p>It's not well documented.  So let's start here...
<br>
<p>The first issue is that we currently only have notifier calls down in the openib BTL -- not any of the others.  :-(  We put it there because there was specific requests to be notified when IB links went down.  We then used those as a request for comment from the community, asking &quot;do you like this? do you want more?&quot;  We kinda got nothing back, and I'll admit that we kinda forgot about it -- and therefore never added notifier calls elsewhere in the code.  :-\
<br>
<p>We designed the notifier in OMPI to be trivially easy to use throughout the code base -- it's just adding a single function call where the error occurs.  Would you, perchance, be interested in adding any of these in the TCP BTL?  I'd be happy to point you in the right direction... :-)
<br>
<p>After that, it's just a matter of enabling a notifier:
<br>
<p>&nbsp;&nbsp;mpirun --mca notifier syslog ...
<br>
<p>Each notifier has some MCA params that are fairly obvious -- use:
<br>
<p>&nbsp;&nbsp;ompi_info --param notifier all
<br>
<p>to see them.  There's 3 notifier plugins:
<br>
<p>- command: execute any arbitrary command.  It must run in finite (short) time.  You use MCA params to set the command (we can pass some strings down to the command; see the ompi_info help string for more details), and set a timeout such that if the command runs for that many seconds without exiting, we'll kill it.
<br>
<p>- syslog: because it was simple to do -- we just output a string to the syslog.
<br>
<p>- twitter: because it was fun to do.  ;-)  Actually, the rationale was that you can tweet to a private feed and then slave an RSS reader to it to see if anything happens.  It will need to be able to reach the general internet (i.e., twitter.com); proxies are not supported.  Set your twitter username/password via MCA params.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11515.php">Eugene Loh: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<li><strong>Previous message:</strong> <a href="11513.php">Jeff Squyres: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<li><strong>In reply to:</strong> <a href="11506.php">Brock Palen: "[OMPI users] Notifier Framework howto"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11591.php">Ralph Castain: "Re: [OMPI users] Notifier Framework howto"</a>
<li><strong>Reply:</strong> <a href="11591.php">Ralph Castain: "Re: [OMPI users] Notifier Framework howto"</a>
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
