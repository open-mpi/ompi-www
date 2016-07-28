<?
$subject_val = "Re: [OMPI users] No output when adding host to hostfile";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May 10 03:02:24 2014" -->
<!-- isoreceived="20140510070224" -->
<!-- sent="Sat, 10 May 2014 09:02:20 +0200" -->
<!-- isosent="20140510070220" -->
<!-- name="Wijnberg, Tom" -->
<!-- email="TWij_at_[hidden]" -->
<!-- subject="Re: [OMPI users] No output when adding host to hostfile" -->
<!-- id="A210B65968E5994895DD3EAB8AC49C5F018C8CE0_at_FS22.APPLIKON.LOCAL" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="AA7F7212-45CC-4AC0-854B-4F641C19890C_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] No output when adding host to hostfile<br>
<strong>From:</strong> Wijnberg, Tom (<em>TWij_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-10 03:02:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24342.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Intercommunicators Collective Communciation"</a>
<li><strong>Previous message:</strong> <a href="24340.php">Ralph Castain: "Re: [OMPI users] Issue running mpi program"</a>
<li><strong>In reply to:</strong> <a href="24332.php">Ralph Castain: "Re: [OMPI users] No output when adding host to hostfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24344.php">Ralph Castain: "Re: [OMPI users] No output when adding host to hostfile"</a>
<li><strong>Reply:</strong> <a href="24344.php">Ralph Castain: "Re: [OMPI users] No output when adding host to hostfile"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>Thank you for your reply. My problem does sound a bit like the bug you are describing however I'm not quite sure yet. I have implemented the exact same setup between 2 virtual machines and in that setup everything runs correctly. I did test if the local firewall was the problem but no luck. I'm uncertain if perhaps the local admin also is limiting traffic within the network through a firewall however I find that unlikely, but I will ask him on Monday. It did occur to me that perhaps the port forwarding is not setup correctly. I have forwarded port 22 from the virtualbox host to the virtual machine but perhaps openmpi requires more than just this port? The need to have your firewall not block TCP connections between pc's does seem to indicate this.
<br>
<p>As for the PATH and LD_LIBRARY_PATH how can I check if these are set correctly. When I login into the slave pc I'm able to use mpirun locally without the need to set any variables. To me this would seem to indicate that the problem is not related to the PATH or LD_LIBRARY_PATH. However when I try and add the master to the hosts file (so using them the wrong way around) I get the exact same behavior as observed before.
<br>
<p>Currently I'm leaning towards a problem with port forwarding however I can't find information of openmpi requires more than just port 22 to work.
<br>
<p>Regards,
<br>
TWij
<br>
<p><pre>
--
Metrohm Applikon&#160;B.V.
De Brauwweg 13
3125 AE Schiedam
The NetherlandsLIBRARY_PATH
Phone: +31 (0)10 298 3555
Direct: +31 (0)10 298 3579
DISCLAIMER:
This e-mail and any attachment sent with it are intended exclusively for the addressee(s), and may not be passed on to, or made available for use by any person other than the addressee(s). Any and every liability resulting from any electronic transmission is ruled out.
If you are not the intended recipient, please contact the sender by reply email and destroy all copies of the original message.
-----Original Message-----
From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
Sent: vrijdag 9 mei 2014 15:46
To: Open MPI Users
Subject: Re: [OMPI users] No output when adding host to hostfile
There is a known bug in the 1.8.1 release whereby daemons failing to start on a remote node will cause a silent failure. This has been fixed for the upcoming 1.8.2 release, but you might want to use one of the nightly 1.8.2 snapshots in the interim.
Most likely causes:
* not finding the required libraries on the remote node because the default PATH and LD_LIBRARY_PATH aren't setup correctly
* firewall preventing TCP connections between the machines
Ralph
On May 9, 2014, at 5:30 AM, Wijnberg, Tom &lt;TWij_at_[hidden]&gt; wrote:
&gt; Hi,
&gt; 
&gt; I have encountered a problem with openmpi I can't seem to be able to 
&gt; diagnose or find precedence in in the mailing-list. I have two pc's 
&gt; with a fresh install of Arch linux and openmpi 1.8.1. One is a 
&gt; dedicated PC and the other is a virtualbox installation. The 
&gt; virtualbox install is the master and I'm able to use mpirun without a 
&gt; problem (compiled a small program that prints to stdout). In and output are as follows:
&gt; 
&gt;&gt; $ mpirun -n 4 -hostfile mpiHosts myprogram hello MPI user: from 
&gt;&gt; process = 1 on machine=vArch, of NCPU=4 processes hello MPI user: 
&gt;&gt; from process = 0 on machine=vArch, of NCPU=4 processes hello MPI 
&gt;&gt; user: from process = 2 on machine=vArch, of NCPU=4 processes hello 
&gt;&gt; MPI user: from  process = 3 on machine=vArch, of NCPU=4
&gt; processes
&gt; 
&gt; Running programs on a single machine is not a problem. Also I'm able 
&gt; to log into both machines using ssh without the need for a password so 
&gt; communication between the machines should be oke. However when I add 
&gt; the second host to the hostfile the I get no more feedback. What I 
&gt; mean with this is that I get the following.
&gt; 
&gt;&gt; $ echo &quot;10.5.10.224 slots=4&quot; &gt;&gt; mpiHosts $ mpirun -n 8 -hostfile $ 
&gt;&gt; mpirun -n 4 -hostfile mpiHosts myprogram
&gt;&gt; 
&gt; 
&gt; No output is returned. I'm not sure if this is intended behavior but 
&gt; it seems incorrect to me. Can anyone provide me with some insight as 
&gt; to why I'm observing this en how I can diagnose the problem.
&gt; 
&gt; Regards,
&gt; TWij
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24342.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Intercommunicators Collective Communciation"</a>
<li><strong>Previous message:</strong> <a href="24340.php">Ralph Castain: "Re: [OMPI users] Issue running mpi program"</a>
<li><strong>In reply to:</strong> <a href="24332.php">Ralph Castain: "Re: [OMPI users] No output when adding host to hostfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24344.php">Ralph Castain: "Re: [OMPI users] No output when adding host to hostfile"</a>
<li><strong>Reply:</strong> <a href="24344.php">Ralph Castain: "Re: [OMPI users] No output when adding host to hostfile"</a>
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
