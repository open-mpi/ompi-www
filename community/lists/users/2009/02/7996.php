<?
$subject_val = "Re: [OMPI users] open-mpi ssh hostname problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  9 04:36:59 2009" -->
<!-- isoreceived="20090209093659" -->
<!-- sent="Mon, 09 Feb 2009 10:37:03 +0100" -->
<!-- isosent="20090209093703" -->
<!-- name="Bernhard Knapp" -->
<!-- email="bernhard.knapp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] open-mpi ssh hostname problem" -->
<!-- id="498FF93F.3080904_at_meduniwien.ac.at" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="mailman.15.1234026024.23358.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] open-mpi ssh hostname problem<br>
<strong>From:</strong> Bernhard Knapp (<em>bernhard.knapp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-09 04:37:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7997.php">Ralph Castain: "Re: [OMPI users] Job hangs when daemon does not report back from remote machine"</a>
<li><strong>Previous message:</strong> <a href="7995.php">Ted Yu: "Re: [OMPI users] Global Communicator"</a>
<li><strong>Maybe in reply to:</strong> <a href="7980.php">Bernhard Knapp: "[OMPI users] open-mpi ssh hostname problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the hint. If I set the hostname via the console command 
<br>
hostname it does not work but if I use the GUI instead to change the 
<br>
name it works fine (problem solved). May be there are more commands 
<br>
necessary than simply hostname to make it running on the console? 
<br>
Bernhard ------------------------------ Message: 4 Date: Fri, 6 Feb 2009 
<br>
17:48:44 -0500 From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt; Subject: Re: 
<br>
[OMPI users] open-mpi ssh hostname problem To: Open MPI Users 
<br>
&lt;users_at_[hidden]&gt; Message-ID: 
<br>
&lt;340A96DD-6CD3-4BEC-BCBD-92AA2CFDD46C_at_[hidden]&gt; Content-Type: 
<br>
text/plain; charset=US-ASCII; format=flowed; delsp=yes I'm not quite 
<br>
sure what you did here; did you set the IP address and hostname to 
<br>
something that is resolvable via gethostbyname()? E.g., does the 
<br>
hostname exist in DNS or in /etc/hosts and match the IP address that you 
<br>
set? On Feb 6, 2009, at 6:18 AM, Bernhard Knapp wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Dear users
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am using the parallel software Gromacs on Fedora8 nodes. I  
</span><br>
<span class="quotelev2">&gt;&gt; installed the software and run it without problems but thereafter I  
</span><br>
<span class="quotelev2">&gt;&gt; moved the node to our server-room and did the following:
</span><br>
<span class="quotelev2">&gt;&gt; - set ip adress, subnetmask and gateway
</span><br>
<span class="quotelev2">&gt;&gt; - changed the ssh port in /etc/ssh/sshd_config since we use port  
</span><br>
<span class="quotelev2">&gt;&gt; forwarding on our router and /usr/sbin/semanage port -a -t  
</span><br>
<span class="quotelev2">&gt;&gt; inetd_child_port_t -p tcp 5101
</span><br>
<span class="quotelev2">&gt;&gt; - changed the firewall settings to additionally allow the new port
</span><br>
<span class="quotelev2">&gt;&gt; - changed the hostname via hostname command
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Then I started exactly the same simulation (same command, same data)  
</span><br>
<span class="quotelev2">&gt;&gt; as before (before the network configuration) and it comes up with  
</span><br>
<span class="quotelev2">&gt;&gt; the following error:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ssh: quoVadis01: Name or service not known
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; A daemon (pid 5039) died unexpectedly with status 255 while attempting
</span><br>
<span class="quotelev2">&gt;&gt; to launch so we are aborting.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This may be because the daemon was unable to find all the needed  
</span><br>
<span class="quotelev2">&gt;&gt; shared
</span><br>
<span class="quotelev2">&gt;&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to  
</span><br>
<span class="quotelev2">&gt;&gt; have the
</span><br>
<span class="quotelev2">&gt;&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev2">&gt;&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev2">&gt;&gt; that caused that situation.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Currently the simulation is only running in parallel on the local 4  
</span><br>
<span class="quotelev2">&gt;&gt; cores and not using the network at all.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Why is it a problem for open-mpi to change the hostname from  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;localhost&quot; to &quot;quoVadis01&quot;? If i change the hostname back it works  
</span><br>
<span class="quotelev2">&gt;&gt; again. How can I make open-mpi running using a hostname different to  
</span><br>
<span class="quotelev2">&gt;&gt; localhost. Simply to reinstall mpi after changing the hostname does  
</span><br>
<span class="quotelev2">&gt;&gt; not help.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; cheers
</span><br>
<span class="quotelev2">&gt;&gt; Bernhard
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>-- Jeff Squyres Cisco Systems
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7996/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7997.php">Ralph Castain: "Re: [OMPI users] Job hangs when daemon does not report back from remote machine"</a>
<li><strong>Previous message:</strong> <a href="7995.php">Ted Yu: "Re: [OMPI users] Global Communicator"</a>
<li><strong>Maybe in reply to:</strong> <a href="7980.php">Bernhard Knapp: "[OMPI users] open-mpi ssh hostname problem"</a>
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
