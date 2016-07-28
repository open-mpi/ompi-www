<?
$subject_val = "Re: [OMPI users] Firewall settings for MPI communication";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  2 10:44:28 2016" -->
<!-- isoreceived="20160602144428" -->
<!-- sent="Thu, 02 Jun 2016 16:44:26 +0200" -->
<!-- isosent="20160602144426" -->
<!-- name="Ping Wang" -->
<!-- email="ping.wang_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Firewall settings for MPI communication" -->
<!-- id="b325d5b938b2dd41aa0a2300aa08f8b3_at_ascssrv" -->
<!-- charset="utf-8" -->
<!-- inreplyto="AE97B273-C16B-4BC3-BC30-924D2569717D_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Firewall settings for MPI communication<br>
<strong>From:</strong> Ping Wang (<em>ping.wang_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-02 10:44:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29350.php">Ralph Castain: "Re: [OMPI users] Firewall settings for MPI communication"</a>
<li><strong>Previous message:</strong> <a href="29348.php">Edgar Gabriel: "Re: [OMPI users] Regression in MPI_File_close?!"</a>
<li><strong>In reply to:</strong> <a href="29342.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Firewall settings for MPI communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29350.php">Ralph Castain: "Re: [OMPI users] Firewall settings for MPI communication"</a>
<li><strong>Reply:</strong> <a href="29350.php">Ralph Castain: "Re: [OMPI users] Firewall settings for MPI communication"</a>
<li><strong>Reply:</strong> <a href="29351.php">Gilles Gouaillardet: "Re: [OMPI users] Firewall settings for MPI communication"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I've installed Open MPI v1.10.2. Every VM on the cloud has two IPs (internal IP, public IP). 
<br>
When I run: mpirun --host &lt;internal IP&gt; hostname, the output is the hostname of the VM.
<br>
But when I run: mpirun --host &lt;public IP&gt; hostname, the output is 
<br>
<p>bash: orted: command not found
<br>
--------------------------------------------------------------------------
<br>
ORTE was unable to reliably start one or more daemons.
<br>
This usually is caused by:
<br>
<p>* not finding the required libraries and/or binaries on
<br>
&nbsp;&nbsp;one or more nodes. Please check your PATH and LD_LIBRARY_PATH
<br>
&nbsp;&nbsp;settings, or configure OMPI with --enable-orterun-prefix-by-default
<br>
<p>* lack of authority to execute on one or more specified nodes.
<br>
&nbsp;&nbsp;Please verify your allocation and authorities.
<br>
<p>* the inability to write startup files into /tmp (--tmpdir/orte_tmpdir_base).
<br>
&nbsp;&nbsp;Please check with your sys admin to determine the correct location to use.
<br>
<p>*  compilation of the orted with dynamic libraries when static are required
<br>
&nbsp;&nbsp;(e.g., on Cray). Please check your configure cmd line and consider using
<br>
&nbsp;&nbsp;one of the contrib/platform definitions for your system type.
<br>
<p>* an inability to create a connection back to mpirun due to a
<br>
&nbsp;&nbsp;lack of common network interfaces and/or no route found between
<br>
&nbsp;&nbsp;them. Please check network connectivity (including firewalls
<br>
&nbsp;&nbsp;and network routing requirements).
<br>
<p>Both IPs are the IP of the VM where MPI is running. Did I do something wrong in the configuration? 
<br>
<p>Thanks for any help.
<br>
<p>Ping 
<br>
<p>-----Urspr&#195;&#188;ngliche Nachricht-----
<br>
Von: users [mailto:users-bounces_at_[hidden]] Im Auftrag von Jeff Squyres (jsquyres)
<br>
Gesendet: Mittwoch, 1. Juni 2016 15:02
<br>
An: Open MPI User's List
<br>
Betreff: Re: [OMPI users] Firewall settings for MPI communication
<br>
<p>In addition, you might want to consider upgrading to Open MPI v1.10.x (v1.6.x is fairly ancient).
<br>
<p><span class="quotelev1">&gt; On Jun 1, 2016, at 7:46 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; which network are your VMs using for communications ?
</span><br>
<span class="quotelev1">&gt; if this is tcp, then you also have to specify a restricted set of 
</span><br>
<span class="quotelev1">&gt; allowed ports for the tcp btl
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; that would be something like
</span><br>
<span class="quotelev1">&gt; mpirun --mca btl_tcp_dynamic_ports 49990-50010 ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; please double check the Open MPI 1.6.5 parameter and syntax with 
</span><br>
<span class="quotelev1">&gt; ompi_info --all (or check the archives, I think I posted the correct 
</span><br>
<span class="quotelev1">&gt; command line a few weeks ago)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wednesday, June 1, 2016, Ping Wang &lt;ping.wang_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; I'm using Open MPI 1.6.5 to run OpenFOAM in parallel on several VMs on 
</span><br>
<span class="quotelev1">&gt; a cloud. mpirun hangs without any error messages. I think this is a 
</span><br>
<span class="quotelev1">&gt; firewall issue. Because when I open all the TCP ports(1-65535) in the 
</span><br>
<span class="quotelev1">&gt; security group of VMs, mpirun works well. However I was suggested to 
</span><br>
<span class="quotelev1">&gt; open as less ports as possible. So I have to limit MPI to run on a 
</span><br>
<span class="quotelev1">&gt; range of ports. I opened the port range 49990-50010 for MPI 
</span><br>
<span class="quotelev1">&gt; communication. And use command
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun --mca oob_tcp_dynamic_ports 49990-50010 -np 4 --hostfile machines simpleFoam &#226;&#128;&#147;parallel. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But it still hangs. How can I specify a port range that OpenMPI will use? I appreciate any help you can provide.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ping Wang
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;image001.png&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ping Wang
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Automotive Simulation Center Stuttgart e.V.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Nobelstra&#195;&#159;e 15
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; D-70569 Stuttgart
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Telefon: +49 711 699659-14
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Fax: +49 711 699659-29
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; E-Mail: ping.wang_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Web: <a href="http://www.asc-s.de">http://www.asc-s.de</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Social Media: &lt;image002.gif&gt;/asc.stuttgart
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------
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
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/06/29340.php">http://www.open-mpi.org/community/lists/users/2016/06/29340.php</a>
</span><br>
<p><p><pre>
--
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
_______________________________________________
users mailing list
users_at_[hidden]
Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29342.php">http://www.open-mpi.org/community/lists/users/2016/06/29342.php</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29350.php">Ralph Castain: "Re: [OMPI users] Firewall settings for MPI communication"</a>
<li><strong>Previous message:</strong> <a href="29348.php">Edgar Gabriel: "Re: [OMPI users] Regression in MPI_File_close?!"</a>
<li><strong>In reply to:</strong> <a href="29342.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Firewall settings for MPI communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29350.php">Ralph Castain: "Re: [OMPI users] Firewall settings for MPI communication"</a>
<li><strong>Reply:</strong> <a href="29350.php">Ralph Castain: "Re: [OMPI users] Firewall settings for MPI communication"</a>
<li><strong>Reply:</strong> <a href="29351.php">Gilles Gouaillardet: "Re: [OMPI users] Firewall settings for MPI communication"</a>
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
