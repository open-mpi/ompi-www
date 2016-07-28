<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Apr 20 10:39:43 2006" -->
<!-- isoreceived="20060420143943" -->
<!-- sent="Thu, 20 Apr 2006 10:39:32 -0400" -->
<!-- isosent="20060420143932" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open-MPI and TCP port range" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AF6BC463_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] Open-MPI and TCP port range" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-20 10:39:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1096.php">sdamjad: "[OMPI users] Configuration error"</a>
<li><strong>Previous message:</strong> <a href="1094.php">Javier Fernandez Baldomero: "[OMPI users] how to diagnose mpirun problem"</a>
<li><strong>Maybe in reply to:</strong> <a href="1093.php">Laurent.POREZ_at_[hidden]: "[OMPI users] Open-MPI and TCP port range"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1103.php">Bogdan Costescu: "Re: [OMPI users] Open-MPI and TCP port range"</a>
<li><strong>Reply:</strong> <a href="1103.php">Bogdan Costescu: "Re: [OMPI users] Open-MPI and TCP port range"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greetings.  Apologies it's taken us so long to reply -- we're all at an
<br>
Open MPI workshop this week and it's consuming just about all of our
<br>
time.
<br>
<p>Right now, there is no way to restrict the port range that Open MPI will
<br>
use.  We simply ask the operating system for available ports and it
<br>
gives us a random one that is not being used.
<br>
<p>So if you're setting up servers that used fixed TCP/UDP ports, there
<br>
shouldn't be a problem -- when MPI jobs run, those servers should be
<br>
occupying the TCP/UDP ports in question, and therefore the MPI jobs
<br>
won't use them.  If you've got dynamic applications that aren't &quot;always
<br>
running&quot; (or nearly so) and therefore the TCP/UDP ports in question may
<br>
not always be reserved, you *could* clash with MPI jobs (e.g., an MPI
<br>
job could randomly take the port that you're expecting to be able to
<br>
use).
<br>
<p>BTW, I'm *assuming* that your jobs will use non-privileged ports.  Is
<br>
this right?  If they use privileged ports, then there's no conflict --
<br>
Open MPI doesn't use privileged ports.
<br>
<p>However, in practice, there's little chance of a conflict.  The port
<br>
range is so large that it's unlikely to happen (of course, saying that
<br>
pretty much guarantees that it *will* happen ;-) ).  Right now, there's
<br>
no way in Open MPI to restrict which TCP ports it uses.  If this becomes
<br>
a problem for you (i.e., the random MPI-chose-the-same-port-as-your-app
<br>
events happen a lot), let us know and we can probably put in some
<br>
controls to work around this.
<br>
&nbsp;
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of 
</span><br>
<span class="quotelev1">&gt; Laurent.POREZ_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, April 18, 2006 10:09 AM
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] Open-MPI and TCP port range
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am  a new user of Open-MPI, and I need to use 2 kinds of 
</span><br>
<span class="quotelev1">&gt; programs on an unique cluster :
</span><br>
<span class="quotelev1">&gt; 1) MPI based programs
</span><br>
<span class="quotelev1">&gt; 2) Others, using TCP and UDP
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In order to get my non-MPI programs run, I need to know which 
</span><br>
<span class="quotelev1">&gt; ports may be used by MPI programs.
</span><br>
<span class="quotelev1">&gt; Is there a way to know/set the range of the ports used by MPI 
</span><br>
<span class="quotelev1">&gt; programs ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; 	Laurent.
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
<li><strong>Next message:</strong> <a href="1096.php">sdamjad: "[OMPI users] Configuration error"</a>
<li><strong>Previous message:</strong> <a href="1094.php">Javier Fernandez Baldomero: "[OMPI users] how to diagnose mpirun problem"</a>
<li><strong>Maybe in reply to:</strong> <a href="1093.php">Laurent.POREZ_at_[hidden]: "[OMPI users] Open-MPI and TCP port range"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1103.php">Bogdan Costescu: "Re: [OMPI users] Open-MPI and TCP port range"</a>
<li><strong>Reply:</strong> <a href="1103.php">Bogdan Costescu: "Re: [OMPI users] Open-MPI and TCP port range"</a>
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
