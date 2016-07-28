<?
$subject_val = "Re: [OMPI users] No output when adding host to hostfile";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May 10 13:23:29 2014" -->
<!-- isoreceived="20140510172329" -->
<!-- sent="Sat, 10 May 2014 10:22:18 -0700" -->
<!-- isosent="20140510172218" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] No output when adding host to hostfile" -->
<!-- id="A555D65C-8F20-47AA-BA69-0DA3EC0B8B45_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="A210B65968E5994895DD3EAB8AC49C5F018C8CE0_at_FS22.APPLIKON.LOCAL" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-10 13:22:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24345.php">Hamed Mortazavi: "[OMPI users] errors while making openmpi"</a>
<li><strong>Previous message:</strong> <a href="24343.php">Imran Ali: "Re: [OMPI users] MPI File Open does not work"</a>
<li><strong>In reply to:</strong> <a href="24341.php">Wijnberg, Tom: "Re: [OMPI users] No output when adding host to hostfile"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 10, 2014, at 12:02 AM, Wijnberg, Tom &lt;TWij_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you for your reply. My problem does sound a bit like the bug you are describing however I'm not quite sure yet. I have implemented the exact same setup between 2 virtual machines and in that setup everything runs correctly. I did test if the local firewall was the problem but no luck. I'm uncertain if perhaps the local admin also is limiting traffic within the network through a firewall however I find that unlikely, but I will ask him on Monday. It did occur to me that perhaps the port forwarding is not setup correctly. I have forwarded port 22 from the virtualbox host to the virtual machine but perhaps openmpi requires more than just this port? The need to have your firewall not block TCP connections between pc's does seem to indicate this.
</span><br>
<p>This is likely to be the problem, then. OMPI requires several ports: (a) one port for the daemons to connect back to mpirun, and (b) at least one port for the TCP BTL. Your best solution is to remove the firewall on the virtual machine completely, but if you must do it with port forwarding, you can open up some specific ports and pass them to OMPI. For example, if you open up port 1234 and ports 6789-6792:
<br>
<p>-mca oob_tcp_static_ipv4_ports 1234-2000 -mca btl_tcp_port_min_v4 6789 -mca btl_tcp_port_range_v4 3
<br>
<p>Note that you don't have to open up all the oob tcp ports as only the daemon needs to connect back thru the firewall. However, once you specify static ports, you have to provide enough entries for all the local procs to connect back to the daemon - we don't currently offer the option of defining static ports only for the daemons while leaving the app procs dynamic.
<br>
<p>Per ompi_info:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA oob: parameter &quot;oob_tcp_static_ipv4_ports&quot; (current
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;value: &quot;&quot;, data source: default, level: 9 dev/all,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;type: string)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Static ports for daemons and procs (IPv4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_tcp_port_min_v4&quot; (current value:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;1024&quot;, data source: default, level: 2 user/detail,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;type: int)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The minimum port where the TCP BTL will try to bind
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(default 1024)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_tcp_port_range_v4&quot; (current value:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;64511&quot;, data source: default, level: 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;user/detail, type: int)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The number of ports where the TCP BTL will try to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bind (default 64511). This parameter together with
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;the port min, define a range of ports where Open
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI will open sockets.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As for the PATH and LD_LIBRARY_PATH how can I check if these are set correctly. When I login into the slave pc I'm able to use mpirun locally without the need to set any variables. To me this would seem to indicate that the problem is not related to the PATH or LD_LIBRARY_PATH. However when I try and add the master to the hosts file (so using them the wrong way around) I get the exact same behavior as observed before.
</span><br>
<p>Check out the FAQ - login executes a different default setup script than remote execution:
<br>
<p><a href="http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path">http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path</a>
<br>
<p>You might also be able to add --enable-orterun-prefix-by-default to your configure line if the install location is the same on both machines.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Currently I'm leaning towards a problem with port forwarding however I can't find information of openmpi requires more than just port 22 to work.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; TWij
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Metrohm Applikon B.V.
</span><br>
<span class="quotelev1">&gt; De Brauwweg 13
</span><br>
<span class="quotelev1">&gt; 3125 AE Schiedam
</span><br>
<span class="quotelev1">&gt; The NetherlandsLIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; Phone: +31 (0)10 298 3555
</span><br>
<span class="quotelev1">&gt; Direct: +31 (0)10 298 3579
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; DISCLAIMER:
</span><br>
<span class="quotelev1">&gt; This e-mail and any attachment sent with it are intended exclusively for the addressee(s), and may not be passed on to, or made available for use by any person other than the addressee(s). Any and every liability resulting from any electronic transmission is ruled out.
</span><br>
<span class="quotelev1">&gt; If you are not the intended recipient, please contact the sender by reply email and destroy all copies of the original message.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
</span><br>
<span class="quotelev1">&gt; Sent: vrijdag 9 mei 2014 15:46
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] No output when adding host to hostfile
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There is a known bug in the 1.8.1 release whereby daemons failing to start on a remote node will cause a silent failure. This has been fixed for the upcoming 1.8.2 release, but you might want to use one of the nightly 1.8.2 snapshots in the interim.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Most likely causes:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * not finding the required libraries on the remote node because the default PATH and LD_LIBRARY_PATH aren't setup correctly
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * firewall preventing TCP connections between the machines
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 9, 2014, at 5:30 AM, Wijnberg, Tom &lt;TWij_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have encountered a problem with openmpi I can't seem to be able to 
</span><br>
<span class="quotelev2">&gt;&gt; diagnose or find precedence in in the mailing-list. I have two pc's 
</span><br>
<span class="quotelev2">&gt;&gt; with a fresh install of Arch linux and openmpi 1.8.1. One is a 
</span><br>
<span class="quotelev2">&gt;&gt; dedicated PC and the other is a virtualbox installation. The 
</span><br>
<span class="quotelev2">&gt;&gt; virtualbox install is the master and I'm able to use mpirun without a 
</span><br>
<span class="quotelev2">&gt;&gt; problem (compiled a small program that prints to stdout). In and output are as follows:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ mpirun -n 4 -hostfile mpiHosts myprogram hello MPI user: from 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process = 1 on machine=vArch, of NCPU=4 processes hello MPI user: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from process = 0 on machine=vArch, of NCPU=4 processes hello MPI 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; user: from process = 2 on machine=vArch, of NCPU=4 processes hello 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI user: from  process = 3 on machine=vArch, of NCPU=4
</span><br>
<span class="quotelev2">&gt;&gt; processes
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Running programs on a single machine is not a problem. Also I'm able 
</span><br>
<span class="quotelev2">&gt;&gt; to log into both machines using ssh without the need for a password so 
</span><br>
<span class="quotelev2">&gt;&gt; communication between the machines should be oke. However when I add 
</span><br>
<span class="quotelev2">&gt;&gt; the second host to the hostfile the I get no more feedback. What I 
</span><br>
<span class="quotelev2">&gt;&gt; mean with this is that I get the following.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ echo &quot;10.5.10.224 slots=4&quot; &gt;&gt; mpiHosts $ mpirun -n 8 -hostfile $ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -n 4 -hostfile mpiHosts myprogram
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; No output is returned. I'm not sure if this is intended behavior but 
</span><br>
<span class="quotelev2">&gt;&gt; it seems incorrect to me. Can anyone provide me with some insight as 
</span><br>
<span class="quotelev2">&gt;&gt; to why I'm observing this en how I can diagnose the problem.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; TWij
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24344/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24345.php">Hamed Mortazavi: "[OMPI users] errors while making openmpi"</a>
<li><strong>Previous message:</strong> <a href="24343.php">Imran Ali: "Re: [OMPI users] MPI File Open does not work"</a>
<li><strong>In reply to:</strong> <a href="24341.php">Wijnberg, Tom: "Re: [OMPI users] No output when adding host to hostfile"</a>
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
