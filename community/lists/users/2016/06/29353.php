<?
$subject_val = "Re: [OMPI users] Firewall settings for MPI communication";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  2 18:13:50 2016" -->
<!-- isoreceived="20160602221350" -->
<!-- sent="Fri, 3 Jun 2016 07:13:46 +0900" -->
<!-- isosent="20160602221346" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Firewall settings for MPI communication" -->
<!-- id="CAAkFZ5vhTfzJuTSj6EGJg-PXbqei0K3_5h_G+XBC-iME6=xEgQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="69123c9f3196c747a310d9c920e95f6d_at_ascssrv" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-02 18:13:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29354.php">dpchoudh .: "[OMPI users] PSM vs PSM2"</a>
<li><strong>Previous message:</strong> <a href="29352.php">Ping Wang: "Re: [OMPI users] Firewall settings for MPI communication"</a>
<li><strong>In reply to:</strong> <a href="29352.php">Ping Wang: "Re: [OMPI users] Firewall settings for MPI communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29386.php">Ping Wang: "Re: [OMPI users] Firewall settings for MPI communication"</a>
<li><strong>Reply:</strong> <a href="29386.php">Ping Wang: "Re: [OMPI users] Firewall settings for MPI communication"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The syntax is
<br>
configure --enable-mpirun-prefix-by-default --prefix=&lt;path to OpenMPI&gt; ...
<br>
<p>all hosts must be able to ssh each other passwordless.
<br>
that means you need to generate a user ssh key pair on all hosts, add your
<br>
public keys to the list of authorized keys, and ssh to all hosts in order
<br>
to populate your known hosts
<br>
(ssh requires you confirm host public keys the very first time you ssh to a
<br>
new host)
<br>
iirc, that can be automated with ssh-keyscan.
<br>
<p>when ssh is fully configured, mpirun should work just fine
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Friday, June 3, 2016, Ping Wang &lt;ping.wang_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thank you Gilles for your suggestion.  I tried:  mpirun --prefix &lt;path to
</span><br>
<span class="quotelev1">&gt; Open MPI&gt;  --host &lt;public IP&gt; hostname, then it works.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I&#226;&#128;&#153;m sure both IPs are the ones of the VM on which mpirun is running, and
</span><br>
<span class="quotelev1">&gt; they are unique.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I also configured Open MPI with --enable-mpirun-prefix-by-default, but I
</span><br>
<span class="quotelev1">&gt; still need to add --prefix &lt;path to Open MPI&gt; to get mpirun work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I used: ./configure --enable-mpirun-prefix-by-default =&quot;&lt;path to Open
</span><br>
<span class="quotelev1">&gt; MPI&gt;  &quot;
</span><br>
<span class="quotelev1">&gt;              make
</span><br>
<span class="quotelev1">&gt;              make install
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Did I miss something or I misunderstood the way to configure Open MPI?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I run: ssh &lt; internal/public IP &gt; `which orted`
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The output is: Warning: Permanently added &lt; internal/public IP &gt; '
</span><br>
<span class="quotelev1">&gt; (ECDSA) to the list of known hosts.
</span><br>
<span class="quotelev1">&gt; /usr/local/bin/orted
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is it all right?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ping
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
<span class="quotelev1">&gt; *Von:* users [mailto:users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','users-bounces_at_[hidden]');&gt;] *Im Auftrag
</span><br>
<span class="quotelev1">&gt; von *Gilles Gouaillardet
</span><br>
<span class="quotelev1">&gt; *Gesendet:* Donnerstag, 2. Juni 2016 17:06
</span><br>
<span class="quotelev1">&gt; *An:* Open MPI Users
</span><br>
<span class="quotelev1">&gt; *Betreff:* Re: [OMPI users] Firewall settings for MPI communication
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; are you saying both IP are the ones of the VM on which mpirun is running ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; orted is only launched on all the machines *except* the one running mpirun.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; can you double/triple check the IPs are ok and unique ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; for example, mpirun --host &lt;internal IP&gt; /sbin/ifconfig -a
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; can you also make sure Open MPI is installed on all your VMs in the same
</span><br>
<span class="quotelev1">&gt; directory ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; also make sure Open MPI has all the dependencies on all the VMs
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ssh xxx ldd `which orted`
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; should show no missing dependency
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; generally speaking, I recommend you configure Open MPI with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --enable-mpirun-prefix-by-default
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; you can also try to replace
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; `which mpirun`
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; or
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --prefix &lt;path to Open MPI&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thursday, June 2, 2016, Ping Wang &lt;ping.wang_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','ping.wang_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've installed Open MPI v1.10.2. Every VM on the cloud has two IPs
</span><br>
<span class="quotelev1">&gt; (internal IP, public IP).
</span><br>
<span class="quotelev1">&gt; When I run: mpirun --host &lt;internal IP&gt; hostname, the output is the
</span><br>
<span class="quotelev1">&gt; hostname of the VM.
</span><br>
<span class="quotelev1">&gt; But when I run: mpirun --host &lt;public IP&gt; hostname, the output is
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; bash: orted: command not found
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ORTE was unable to reliably start one or more daemons.
</span><br>
<span class="quotelev1">&gt; This usually is caused by:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * not finding the required libraries and/or binaries on
</span><br>
<span class="quotelev1">&gt;   one or more nodes. Please check your PATH and LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt;   settings, or configure OMPI with --enable-orterun-prefix-by-default
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * lack of authority to execute on one or more specified nodes.
</span><br>
<span class="quotelev1">&gt;   Please verify your allocation and authorities.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * the inability to write startup files into /tmp
</span><br>
<span class="quotelev1">&gt; (--tmpdir/orte_tmpdir_base).
</span><br>
<span class="quotelev1">&gt;   Please check with your sys admin to determine the correct location to
</span><br>
<span class="quotelev1">&gt; use.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *  compilation of the orted with dynamic libraries when static are required
</span><br>
<span class="quotelev1">&gt;   (e.g., on Cray). Please check your configure cmd line and consider using
</span><br>
<span class="quotelev1">&gt;   one of the contrib/platform definitions for your system type.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * an inability to create a connection back to mpirun due to a
</span><br>
<span class="quotelev1">&gt;   lack of common network interfaces and/or no route found between
</span><br>
<span class="quotelev1">&gt;   them. Please check network connectivity (including firewalls
</span><br>
<span class="quotelev1">&gt;   and network routing requirements).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Both IPs are the IP of the VM where MPI is running. Did I do something
</span><br>
<span class="quotelev1">&gt; wrong in the configuration?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for any help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ping
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Urspr&#195;&#188;ngliche Nachricht-----
</span><br>
<span class="quotelev1">&gt; Von: users [mailto:users-bounces_at_[hidden]] Im Auftrag von Jeff
</span><br>
<span class="quotelev1">&gt; Squyres (jsquyres)
</span><br>
<span class="quotelev1">&gt; Gesendet: Mittwoch, 1. Juni 2016 15:02
</span><br>
<span class="quotelev1">&gt; An: Open MPI User's List
</span><br>
<span class="quotelev1">&gt; Betreff: Re: [OMPI users] Firewall settings for MPI communication
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In addition, you might want to consider upgrading to Open MPI v1.10.x
</span><br>
<span class="quotelev1">&gt; (v1.6.x is fairly ancient).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Jun 1, 2016, at 7:46 AM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev1">&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; which network are your VMs using for communications ?
</span><br>
<span class="quotelev2">&gt; &gt; if this is tcp, then you also have to specify a restricted set of
</span><br>
<span class="quotelev2">&gt; &gt; allowed ports for the tcp btl
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; that would be something like
</span><br>
<span class="quotelev2">&gt; &gt; mpirun --mca btl_tcp_dynamic_ports 49990-50010 ...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; please double check the Open MPI 1.6.5 parameter and syntax with
</span><br>
<span class="quotelev2">&gt; &gt; ompi_info --all (or check the archives, I think I posted the correct
</span><br>
<span class="quotelev2">&gt; &gt; command line a few weeks ago)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Cheers,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Gilles
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Wednesday, June 1, 2016, Ping Wang &lt;ping.wang_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I'm using Open MPI 1.6.5 to run OpenFOAM in parallel on several VMs on
</span><br>
<span class="quotelev2">&gt; &gt; a cloud. mpirun hangs without any error messages. I think this is a
</span><br>
<span class="quotelev2">&gt; &gt; firewall issue. Because when I open all the TCP ports(1-65535) in the
</span><br>
<span class="quotelev2">&gt; &gt; security group of VMs, mpirun works well. However I was suggested to
</span><br>
<span class="quotelev2">&gt; &gt; open as less ports as possible. So I have to limit MPI to run on a
</span><br>
<span class="quotelev2">&gt; &gt; range of ports. I opened the port range 49990-50010 for MPI
</span><br>
<span class="quotelev2">&gt; &gt; communication. And use command
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpirun --mca oob_tcp_dynamic_ports 49990-50010 -np 4 --hostfile machines
</span><br>
<span class="quotelev1">&gt; simpleFoam &#226;&#128;&#147;parallel.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; But it still hangs. How can I specify a port range that OpenMPI will
</span><br>
<span class="quotelev1">&gt; use? I appreciate any help you can provide.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Best,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Ping Wang
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &lt;image001.png&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Ping Wang
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Automotive Simulation Center Stuttgart e.V.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Nobelstra&#195;&#159;e 15
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; D-70569 Stuttgart
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Telefon: +49 711 699659-14
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Fax: +49 711 699659-29
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; E-Mail: ping.wang_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Web: <a href="http://www.asc-s.de">http://www.asc-s.de</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Social Media: &lt;image002.gif&gt;/asc.stuttgart
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/community/lists/users/2016/06/29340.php">http://www.open-mpi.org/community/lists/users/2016/06/29340.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/06/29342.php">http://www.open-mpi.org/community/lists/users/2016/06/29342.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/06/29349.php">http://www.open-mpi.org/community/lists/users/2016/06/29349.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29353/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29354.php">dpchoudh .: "[OMPI users] PSM vs PSM2"</a>
<li><strong>Previous message:</strong> <a href="29352.php">Ping Wang: "Re: [OMPI users] Firewall settings for MPI communication"</a>
<li><strong>In reply to:</strong> <a href="29352.php">Ping Wang: "Re: [OMPI users] Firewall settings for MPI communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29386.php">Ping Wang: "Re: [OMPI users] Firewall settings for MPI communication"</a>
<li><strong>Reply:</strong> <a href="29386.php">Ping Wang: "Re: [OMPI users] Firewall settings for MPI communication"</a>
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
