<?
$subject_val = "Re: [OMPI users] tcp connectivity OS X and 1.3.3";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 12 17:47:55 2009" -->
<!-- isoreceived="20090812214755" -->
<!-- sent="Wed, 12 Aug 2009 17:47:45 -0400" -->
<!-- isosent="20090812214745" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] tcp connectivity OS X and 1.3.3" -->
<!-- id="4A833881.3030305_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="DF828E26-6004-4564-97C6-134B8D2BA9E5_at_uvic.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] tcp connectivity OS X and 1.3.3<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-12 17:47:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10338.php">Kenneth Yoshimoto: "[OMPI users] orte_launch_agent usage?"</a>
<li><strong>Previous message:</strong> <a href="10336.php">Dominik T&#225;borsk&#253;: "Re: [OMPI users] init failing"</a>
<li><strong>In reply to:</strong> <a href="10327.php">Jody Klymak: "Re: [OMPI users] tcp connectivity OS X and 1.3.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10271.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jody
<br>
<p>Jody Klymak wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 11, 2009, at  18:55 PM, Gus Correa wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Did you wipe off the old directories before reinstalling?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Check.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I prefer to install on a NFS mounted directory,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Check
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Have you tried to ssh from node to node on all possible pairs?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; check - fixed this today, works fine with the spawning user...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; How could you roll back to 1.1.5,
</span><br>
<span class="quotelev2">&gt;&gt; now that you overwrote the directories?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Oh, I still have it on another machine off the cluster in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi.  Will take just 5 mintues to reinstall.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Launching jobs with Torque is way much better than
</span><br>
<span class="quotelev2">&gt;&gt; using barebones mpirun.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; And you don't want to stay behind with the OpenMPI versions
</span><br>
<span class="quotelev2">&gt;&gt; and improvements either.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sure, but I'd like the jobs to be able to run at all..
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there any sense in rolling back to to 1.2.3 since that is known to 
</span><br>
<span class="quotelev1">&gt; work with OS X (its the one that comes with 10.5)?  My only guess at 
</span><br>
<span class="quotelev1">&gt; this point is other OS X users are using non-tcpip communication, and 
</span><br>
<span class="quotelev1">&gt; the tcp stuff just doesn't work in 1.3.3.
</span><br>
<p>Our production jobs are running with OpenMPI 1.3.2 on Infinband.
<br>
We have Linux clusters, not Mac OS X.
<br>
However, I ran OpenMPI 1.3.2 over TCP/IP on Gigabit Ethernet,
<br>
with HPL and other codes with no problem.
<br>
A lot of people use TCP/IP and GigE on Linux.
<br>
If anything, the problem would be  specific to TCP/IP on Mac OS X.
<br>
<p>Have you checked the system logs
<br>
(/var/log/messages or the Mac OS X equivalent)
<br>
on the nodes where the jobs fail?
<br>
Maybe the show some clue about what is going on.
<br>
<p>In case you need to roll back to OpenMPI 1.2.X,
<br>
you may still get Torque support.
<br>
The oldest OpenMPi version I installed was 1.2.7,
<br>
and it had Torque support.
<br>
I found references to Torque support in OpenMPI as far back as
<br>
1.0.3, hence 1.2.3 should have it.
<br>
<p>Gus Correa
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,  Jody
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jody Klymak
</span><br>
<span class="quotelev1">&gt; <a href="http://web.uvic.ca/~jklymak/">http://web.uvic.ca/~jklymak/</a>
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10338.php">Kenneth Yoshimoto: "[OMPI users] orte_launch_agent usage?"</a>
<li><strong>Previous message:</strong> <a href="10336.php">Dominik T&#225;borsk&#253;: "Re: [OMPI users] init failing"</a>
<li><strong>In reply to:</strong> <a href="10327.php">Jody Klymak: "Re: [OMPI users] tcp connectivity OS X and 1.3.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10271.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
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
