<?
$subject_val = "Re: [OMPI users] Firewall settings for MPI communication";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  2 12:35:21 2016" -->
<!-- isoreceived="20160602163521" -->
<!-- sent="Thu, 02 Jun 2016 18:35:18 +0200" -->
<!-- isosent="20160602163518" -->
<!-- name="Ping Wang" -->
<!-- email="ping.wang_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Firewall settings for MPI communication" -->
<!-- id="69123c9f3196c747a310d9c920e95f6d_at_ascssrv" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAAkFZ5sKjkKopk-+a8Yb1cSP8t55dPYtqzq=FrysDqLz6Oq4aQ_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2016-06-02 12:35:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29353.php">Gilles Gouaillardet: "Re: [OMPI users] Firewall settings for MPI communication"</a>
<li><strong>Previous message:</strong> <a href="29351.php">Gilles Gouaillardet: "Re: [OMPI users] Firewall settings for MPI communication"</a>
<li><strong>In reply to:</strong> <a href="29351.php">Gilles Gouaillardet: "Re: [OMPI users] Firewall settings for MPI communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29353.php">Gilles Gouaillardet: "Re: [OMPI users] Firewall settings for MPI communication"</a>
<li><strong>Reply:</strong> <a href="29353.php">Gilles Gouaillardet: "Re: [OMPI users] Firewall settings for MPI communication"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
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
<p>Von: users [mailto:users-bounces_at_[hidden]] Im Auftrag von Gilles Gouaillardet
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
<p>On Thursday, June 2, 2016, Ping Wang &lt;ping.wang_at_[hidden]&gt; wrote:
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
Von: users [mailto:users-bounces_at_[hidden] &lt;javascript:;&gt; ] Im Auftrag von Jeff Squyres (jsquyres)
<br>
Gesendet: Mittwoch, 1. Juni 2016 15:02
<br>
An: Open MPI User's List
<br>
Betreff: Re: [OMPI users] Firewall settings for MPI communication
<br>
<p>In addition, you might want to consider upgrading to Open MPI v1.10.x (v1.6.x is fairly ancient).
<br>
<p><span class="quotelev1">&gt; On Jun 1, 2016, at 7:46 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden] &lt;javascript:;&gt; &gt; wrote:
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
<span class="quotelev1">&gt; On Wednesday, June 1, 2016, Ping Wang &lt;ping.wang_at_[hidden] &lt;javascript:;&gt; &gt; wrote:
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
<span class="quotelev1">&gt; E-Mail: ping.wang_at_[hidden] &lt;javascript:;&gt; 
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
<span class="quotelev1">&gt; users_at_[hidden] &lt;javascript:;&gt; 
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
jsquyres_at_[hidden] &lt;javascript:;&gt; 
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
_______________________________________________
users mailing list
users_at_[hidden] &lt;javascript:;&gt; 
Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29342.php">http://www.open-mpi.org/community/lists/users/2016/06/29342.php</a>
_______________________________________________
users mailing list
users_at_[hidden] &lt;javascript:;&gt; 
Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29349.php">http://www.open-mpi.org/community/lists/users/2016/06/29349.php</a>
</pre>
<p>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29352/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29353.php">Gilles Gouaillardet: "Re: [OMPI users] Firewall settings for MPI communication"</a>
<li><strong>Previous message:</strong> <a href="29351.php">Gilles Gouaillardet: "Re: [OMPI users] Firewall settings for MPI communication"</a>
<li><strong>In reply to:</strong> <a href="29351.php">Gilles Gouaillardet: "Re: [OMPI users] Firewall settings for MPI communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29353.php">Gilles Gouaillardet: "Re: [OMPI users] Firewall settings for MPI communication"</a>
<li><strong>Reply:</strong> <a href="29353.php">Gilles Gouaillardet: "Re: [OMPI users] Firewall settings for MPI communication"</a>
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
