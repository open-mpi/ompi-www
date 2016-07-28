<?
$subject_val = "Re: [OMPI users] ORTE_ERROR_LOG";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 25 06:52:15 2013" -->
<!-- isoreceived="20131025105215" -->
<!-- sent="Fri, 25 Oct 2013 13:52:13 +0300" -->
<!-- isosent="20131025105213" -->
<!-- name="Tommi Laiho" -->
<!-- email="tommilaiho_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ORTE_ERROR_LOG" -->
<!-- id="DUB111-W13576D6B0F86EBF802870A0D40D0_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="392B66D8-3BBC-4621-9079-9BEC116DE466_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] ORTE_ERROR_LOG<br>
<strong>From:</strong> Tommi Laiho (<em>tommilaiho_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-25 06:52:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22845.php">Mike Dubman: "Re: [OMPI users] Get your Open MPI schwag!"</a>
<li><strong>Previous message:</strong> <a href="22843.php">Ralph Castain: "Re: [OMPI users] Get your Open MPI schwag!"</a>
<li><strong>In reply to:</strong> <a href="22841.php">Ralph Castain: "Re: [OMPI users] ORTE_ERROR_LOG"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22847.php">Ralph Castain: "Re: [OMPI users] ORTE_ERROR_LOG"</a>
<li><strong>Reply:</strong> <a href="22847.php">Ralph Castain: "Re: [OMPI users] ORTE_ERROR_LOG"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi.
<br>
<p>Yes I really put two mpiruns to the line. A newbie error, many thanks for help. 
<br>
<p>But now this seems to work:
<br>
<p>/opt/openmpi-1.6.5/bin/mpirun -hostfile /home/tommi2/Desktop/machinefile -np 14 icofoam cavity -parallel
<br>
<p><p>Anyway now when I try connect with this script to the slave computer it first asks for my password and it will be correctly.
<br>
<p>Then nothing just happens..maybe the master machine tries to connect to the slave machine but connection just cant 
<br>
be established. I disabled the firewall just to see if that was the reason but it didn't help. 
<br>
<p>Any ideas what is still wrong?
<br>
&nbsp;
<br>
<p><p><p>From: rhc_at_[hidden]
<br>
Date: Fri, 25 Oct 2013 02:13:58 -0700
<br>
To: users_at_[hidden]
<br>
Subject: Re: [OMPI users] ORTE_ERROR_LOG
<br>
<p>I see two &quot;mpirun&quot; cmds on that cmd line - is that a copy/paste error or did you really put two of them on one line?
<br>
<p>On Oct 24, 2013, at 10:27 PM, Tommi Laiho &lt;tommilaiho_at_[hidden]&gt; wrote:Hi
<br>
<p>I am trying to setup a simple two machines home cluster. Later I may increase the number to 4 machines. 
<br>
<p>I have a bridged modem so each of my machines has its own ip. 
<br>
<p>My target is now to calculate a simple OpenFOAM tutorial with two computers and together with 14 cores. 
<br>
<p>However when I run:
<br>
<p>mpirun /opt/openmpi-1.6.5/bin/mpirun -hostfile /home/tommi2/Desktop/machinefile -np 14 icofoam cavity -parallel
<br>
<p>I get this kind of error:
<br>
<p>[caelinux:31859] [[43391,1],0] ORTE_ERROR_LOG: A message is attempting to be sent to a process whose contact information is unknown in file rml_oob_send.c at line 104
<br>
[caelinux:31859] [[43391,1],0] could not get route to [[INVALID],INVALID]
<br>
[caelinux:31859] [[43391,1],0] ORTE_ERROR_LOG: A message is attempting to be sent to a process whose contact information is unknown in file base/plm_base_proxy.c at line 81
<br>
<p>Please tell me what to do in order to fix this and thanks in advance. The reason is probably simple cos I am a Linux newbie. 
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> 		 	   		  
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22844/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22845.php">Mike Dubman: "Re: [OMPI users] Get your Open MPI schwag!"</a>
<li><strong>Previous message:</strong> <a href="22843.php">Ralph Castain: "Re: [OMPI users] Get your Open MPI schwag!"</a>
<li><strong>In reply to:</strong> <a href="22841.php">Ralph Castain: "Re: [OMPI users] ORTE_ERROR_LOG"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22847.php">Ralph Castain: "Re: [OMPI users] ORTE_ERROR_LOG"</a>
<li><strong>Reply:</strong> <a href="22847.php">Ralph Castain: "Re: [OMPI users] ORTE_ERROR_LOG"</a>
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
