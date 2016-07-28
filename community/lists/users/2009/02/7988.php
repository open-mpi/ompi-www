<?
$subject_val = "Re: [OMPI users] open-mpi ssh hostname problem";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  6 17:48:53 2009" -->
<!-- isoreceived="20090206224853" -->
<!-- sent="Fri, 6 Feb 2009 17:48:44 -0500" -->
<!-- isosent="20090206224844" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] open-mpi ssh hostname problem" -->
<!-- id="340A96DD-6CD3-4BEC-BCBD-92AA2CFDD46C_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="498C1C92.4050208_at_meduniwien.ac.at" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-06 17:48:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7989.php">Hana Milani: "[OMPI users] signal 15 (terminated)"</a>
<li><strong>Previous message:</strong> <a href="7987.php">Jeff Squyres: "Re: [OMPI users] Global Communicator"</a>
<li><strong>In reply to:</strong> <a href="7980.php">Bernhard Knapp: "[OMPI users] open-mpi ssh hostname problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7996.php">Bernhard Knapp: "Re: [OMPI users] open-mpi ssh hostname problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm not quite sure what you did here; did you set the IP address and  
<br>
hostname to something that is resolvable via gethostbyname()?  E.g.,  
<br>
does the hostname exist in DNS or in /etc/hosts and match the IP  
<br>
address that you set?
<br>
<p><p>On Feb 6, 2009, at 6:18 AM, Bernhard Knapp wrote:
<br>
<p><span class="quotelev1">&gt; Dear users
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am using the parallel software Gromacs on Fedora8 nodes. I  
</span><br>
<span class="quotelev1">&gt; installed the software and run it without problems but thereafter I  
</span><br>
<span class="quotelev1">&gt; moved the node to our server-room and did the following:
</span><br>
<span class="quotelev1">&gt; - set ip adress, subnetmask and gateway
</span><br>
<span class="quotelev1">&gt; - changed the ssh port in /etc/ssh/sshd_config since we use port  
</span><br>
<span class="quotelev1">&gt; forwarding on our router and /usr/sbin/semanage port -a -t  
</span><br>
<span class="quotelev1">&gt; inetd_child_port_t -p tcp 5101
</span><br>
<span class="quotelev1">&gt; - changed the firewall settings to additionally allow the new port
</span><br>
<span class="quotelev1">&gt; - changed the hostname via hostname command
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then I started exactly the same simulation (same command, same data)  
</span><br>
<span class="quotelev1">&gt; as before (before the network configuration) and it comes up with  
</span><br>
<span class="quotelev1">&gt; the following error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ssh: quoVadis01: Name or service not known
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A daemon (pid 5039) died unexpectedly with status 255 while attempting
</span><br>
<span class="quotelev1">&gt; to launch so we are aborting.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This may be because the daemon was unable to find all the needed  
</span><br>
<span class="quotelev1">&gt; shared
</span><br>
<span class="quotelev1">&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to  
</span><br>
<span class="quotelev1">&gt; have the
</span><br>
<span class="quotelev1">&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev1">&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev1">&gt; that caused that situation.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Currently the simulation is only running in parallel on the local 4  
</span><br>
<span class="quotelev1">&gt; cores and not using the network at all.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Why is it a problem for open-mpi to change the hostname from  
</span><br>
<span class="quotelev1">&gt; &quot;localhost&quot; to &quot;quoVadis01&quot;? If i change the hostname back it works  
</span><br>
<span class="quotelev1">&gt; again. How can I make open-mpi running using a hostname different to  
</span><br>
<span class="quotelev1">&gt; localhost. Simply to reinstall mpi after changing the hostname does  
</span><br>
<span class="quotelev1">&gt; not help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cheers
</span><br>
<span class="quotelev1">&gt; Bernhard
</span><br>
<span class="quotelev1">&gt;
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7989.php">Hana Milani: "[OMPI users] signal 15 (terminated)"</a>
<li><strong>Previous message:</strong> <a href="7987.php">Jeff Squyres: "Re: [OMPI users] Global Communicator"</a>
<li><strong>In reply to:</strong> <a href="7980.php">Bernhard Knapp: "[OMPI users] open-mpi ssh hostname problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7996.php">Bernhard Knapp: "Re: [OMPI users] open-mpi ssh hostname problem"</a>
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
