<?
$subject_val = "Re: [OMPI users] Firewall settings for MPI communication";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  7 06:57:59 2016" -->
<!-- isoreceived="20160607105759" -->
<!-- sent="Tue, 07 Jun 2016 12:57:55 +0200" -->
<!-- isosent="20160607105755" -->
<!-- name="Ping Wang" -->
<!-- email="ping.wang_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Firewall settings for MPI communication" -->
<!-- id="b36d7635bac03d40be0f0ff55b1e6991_at_ascssrv" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAAkFZ5vhTfzJuTSj6EGJg-PXbqei0K3_5h_G+XBC-iME6=xEgQ_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2016-06-07 06:57:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29387.php">Gilles Gouaillardet: "Re: [OMPI users] Firewall settings for MPI communication"</a>
<li><strong>Previous message:</strong> <a href="29385.php">Ralph Castain: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>In reply to:</strong> <a href="29353.php">Gilles Gouaillardet: "Re: [OMPI users] Firewall settings for MPI communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29387.php">Gilles Gouaillardet: "Re: [OMPI users] Firewall settings for MPI communication"</a>
<li><strong>Reply:</strong> <a href="29387.php">Gilles Gouaillardet: "Re: [OMPI users] Firewall settings for MPI communication"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all,
<br>
<p>&nbsp;
<br>
<p>after the correct configuration, mpirun (v 1.10.2) works fine when all tpc ports are open. I can ssh to all hosts without a password.
<br>
<p>Then it comes back to my first question: how to specify the ports for MPI communication? 
<br>
<p>I opened the ports 40000-50000 for outgoing traffic, when I run: 
<br>
<p>mpirun --mca btl_tcp_port_min_v4 40040 --mca btl_tcp_port_range_v4 10 --mca oob_tcp_static_ipv4_ports 40020 --host &lt;IP1&gt;,&lt;IP2&gt;  hostname
<br>
<p>it works, but not every time. Same as when I run mpirun  --mca oob_tcp_static_ipv4_ports 40020 --host &lt;IP1&gt;,&lt;IP2&gt;  hostname
<br>
<p>It is strange that sometimes I can get outputs, sometimes it just hangs. Did I miss something? 
<br>
<p>&nbsp;
<br>
<p>Best,
<br>
<p>Ping
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>Von: users [mailto:users-bounces_at_[hidden]] Im Auftrag von Gilles Gouaillardet
<br>
Gesendet: Freitag, 3. Juni 2016 00:14
<br>
An: Open MPI Users
<br>
Betreff: Re: [OMPI users] Firewall settings for MPI communication
<br>
<p>&nbsp;
<br>
<p>The syntax is
<br>
<p>configure --enable-mpirun-prefix-by-default --prefix=&lt;path to OpenMPI&gt; ...
<br>
<p>&nbsp;
<br>
<p>all hosts must be able to ssh each other passwordless.
<br>
<p>that means you need to generate a user ssh key pair on all hosts, add your public keys to the list of authorized keys, and ssh to all hosts in order to populate your known hosts
<br>
<p>(ssh requires you confirm host public keys the very first time you ssh to a new host)
<br>
<p>iirc, that can be automated with ssh-keyscan.
<br>
<p>&nbsp;
<br>
<p>when ssh is fully configured, mpirun should work just fine
<br>
<p>&nbsp;
<br>
<p>Cheers,
<br>
<p>&nbsp;
<br>
<p>Gilles
<br>
<p><p>On Friday, June 3, 2016, Ping Wang &lt; &lt;mailto:ping.wang_at_[hidden]&gt; ping.wang_at_[hidden]&gt; wrote:
<br>
<p>Hi,
<br>
<p>&nbsp;
<br>
<p>thank you Gilles for your suggestion.  I tried:  mpirun --prefix &lt;path to Open MPI&gt;  --host &lt;public IP&gt; hostname, then it works.
<br>
<p>I&#226;&#128;&#153;m sure both IPs are the ones of the VM on which mpirun is running, and they are unique. 
<br>
<p>&nbsp;
<br>
<p>I also configured Open MPI with --enable-mpirun-prefix-by-default, but I still need to add --prefix &lt;path to Open MPI&gt; to get mpirun work.
<br>
<p>I used: ./configure --enable-mpirun-prefix-by-default =&quot;&lt;path to Open MPI&gt;  &quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;make
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;make install
<br>
<p>Did I miss something or I misunderstood the way to configure Open MPI? 
<br>
<p>&nbsp;
<br>
<p>When I run: ssh &lt; internal/public IP &gt; `which orted`
<br>
<p>The output is: Warning: Permanently added &lt; internal/public IP &gt; ' (ECDSA) to the list of known hosts.
<br>
/usr/local/bin/orted
<br>
<p>Is it all right?
<br>
<p>&nbsp;
<br>
<p>Cheers,
<br>
<p>Ping
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>Von: users [mailto: &lt;javascript:_e(%7B%7D,'cvml','users-bounces_at_[hidden]');&gt; users-bounces_at_[hidden]] Im Auftrag von Gilles Gouaillardet
<br>
Gesendet: Donnerstag, 2. Juni 2016 17:06
<br>
An: Open MPI Users
<br>
Betreff: Re: [OMPI users] Firewall settings for MPI communication
<br>
<p>&nbsp;
<br>
<p>are you saying both IP are the ones of the VM on which mpirun is running ?
<br>
<p>orted is only launched on all the machines *except* the one running mpirun.
<br>
<p>&nbsp;
<br>
<p>can you double/triple check the IPs are ok and unique ?
<br>
<p>for example, mpirun --host &lt;internal IP&gt; /sbin/ifconfig -a
<br>
<p>can you also make sure Open MPI is installed on all your VMs in the same directory ?
<br>
<p>also make sure Open MPI has all the dependencies on all the VMs
<br>
<p>ssh xxx ldd `which orted`
<br>
<p>should show no missing dependency
<br>
<p>&nbsp;
<br>
<p>generally speaking, I recommend you configure Open MPI with
<br>
<p>--enable-mpirun-prefix-by-default
<br>
<p>&nbsp;
<br>
<p>you can also try to replace
<br>
<p>mpirun
<br>
<p>with
<br>
<p>`which mpirun`
<br>
<p>or
<br>
<p>mpirun --prefix &lt;path to Open MPI&gt;
<br>
<p>&nbsp;
<br>
<p>Cheers,
<br>
<p>&nbsp;
<br>
<p>Gilles
<br>
<p>On Thursday, June 2, 2016, Ping Wang &lt; &lt;javascript:_e(%7B%7D,'cvml','ping.wang_at_[hidden]');&gt; ping.wang_at_[hidden]&gt; wrote:
<br>
<p>Hi,
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
<p><span class="quotelev1">&gt; On Jun 1, 2016, at 7:46 AM, Gilles Gouaillardet &lt; &lt;mailto:gilles.gouaillardet_at_[hidden]&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
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
<span class="quotelev1">&gt; On Wednesday, June 1, 2016, Ping Wang &lt; &lt;mailto:ping.wang_at_[hidden]&gt; ping.wang_at_[hidden]&gt; wrote:
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
<span class="quotelev1">&gt; E-Mail:  &lt;mailto:ping.wang_at_[hidden]&gt; ping.wang_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Web:  &lt;<a href="http://www.asc-s.de">http://www.asc-s.de</a>&gt; <a href="http://www.asc-s.de">http://www.asc-s.de</a>
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
<span class="quotelev1">&gt;  &lt;mailto:users_at_[hidden]&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription:  &lt;<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt; <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;  &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/06/29340.php">http://www.open-mpi.org/community/lists/users/2016/06/29340.php</a>&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/06/29340.php">http://www.open-mpi.org/community/lists/users/2016/06/29340.php</a>
</span><br>
<p><p><pre>
--
Jeff Squyres
 &lt;mailto:jsquyres_at_[hidden]&gt; jsquyres_at_[hidden]
For corporate legal information go to:  &lt;<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
_______________________________________________
users mailing list
 &lt;mailto:users_at_[hidden]&gt; users_at_[hidden]
Subscription:  &lt;<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt; <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post:  &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/06/29342.php">http://www.open-mpi.org/community/lists/users/2016/06/29342.php</a>&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/06/29342.php">http://www.open-mpi.org/community/lists/users/2016/06/29342.php</a>
_______________________________________________
users mailing list
 &lt;mailto:users_at_[hidden]&gt; users_at_[hidden]
Subscription:  &lt;<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt; <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post:  &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/06/29349.php">http://www.open-mpi.org/community/lists/users/2016/06/29349.php</a>&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/06/29349.php">http://www.open-mpi.org/community/lists/users/2016/06/29349.php</a>
</pre>
<p>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29386/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29387.php">Gilles Gouaillardet: "Re: [OMPI users] Firewall settings for MPI communication"</a>
<li><strong>Previous message:</strong> <a href="29385.php">Ralph Castain: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>In reply to:</strong> <a href="29353.php">Gilles Gouaillardet: "Re: [OMPI users] Firewall settings for MPI communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29387.php">Gilles Gouaillardet: "Re: [OMPI users] Firewall settings for MPI communication"</a>
<li><strong>Reply:</strong> <a href="29387.php">Gilles Gouaillardet: "Re: [OMPI users] Firewall settings for MPI communication"</a>
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
