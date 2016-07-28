<?
$subject_val = "Re: [OMPI users] Fwd: problem for multiple clusters using mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 24 10:56:55 2014" -->
<!-- isoreceived="20140324145655" -->
<!-- sent="Mon, 24 Mar 2014 15:56:54 +0100" -->
<!-- isosent="20140324145654" -->
<!-- name="Hamid Saeed" -->
<!-- email="e.hamidsaeed_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fwd: problem for multiple clusters using mpirun" -->
<!-- id="CAADBNWzBtwMHnUW6PxfFgrZqTZcKsH2VYJF0OwieT710xVxsfA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="60EC5A4D-7829-4012-8440-60D2B6B75071_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fwd: problem for multiple clusters using mpirun<br>
<strong>From:</strong> Hamid Saeed (<em>e.hamidsaeed_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-24 10:56:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23944.php">Ralph Castain: "Re: [OMPI users] delays in Isend"</a>
<li><strong>Previous message:</strong> <a href="23942.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fwd: problem for multiple clusters using mpirun"</a>
<li><strong>In reply to:</strong> <a href="23942.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fwd: problem for multiple clusters using mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23947.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fwd: problem for multiple clusters using mpirun"</a>
<li><strong>Reply:</strong> <a href="23947.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fwd: problem for multiple clusters using mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I added the &quot;self&quot; e.g
<br>
<p>hsaeed_at_karp:~/Task4_mpi/scatterv$ mpirun -np 8 --mca btl ^openib --mca
<br>
btl_tcp_if_exclude sm,self,lo,br0,br1,ib0,br2 --host karp,wirth ./scatterv
<br>
<p>Enter passphrase for key '/home/hsaeed/.ssh/id_rsa':
<br>
--------------------------------------------------------------------------
<br>
<p>ERROR::
<br>
<p>At least one pair of MPI processes are unable to reach each other for
<br>
MPI communications.  This means that no Open MPI device has indicated
<br>
that it can be used to communicate between these processes.  This is
<br>
an error; Open MPI requires that all MPI processes be able to reach
<br>
each other.  This error can sometimes be the result of forgetting to
<br>
specify the &quot;self&quot; BTL.
<br>
<p>&nbsp;&nbsp;Process 1 ([[15751,1],7]) is on host: wirth
<br>
&nbsp;&nbsp;Process 2 ([[15751,1],0]) is on host: karp
<br>
&nbsp;&nbsp;BTLs attempted: self sm
<br>
<p>Your MPI job is now going to abort; sorry.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
MPI_INIT has failed because at least one MPI process is unreachable
<br>
from another.  This *usually* means that an underlying communication
<br>
plugin -- such as a BTL or an MTL -- has either not loaded or not
<br>
allowed itself to be used.  Your MPI job will now abort.
<br>
<p>You may wish to try to narrow down the problem;
<br>
<p>&nbsp;* Check the output of ompi_info to see which BTL/MTL plugins are
<br>
&nbsp;&nbsp;&nbsp;available.
<br>
&nbsp;* Run your application with MPI_THREAD_SINGLE.
<br>
&nbsp;* Set the MCA parameter btl_base_verbose to 100 (or mtl_base_verbose,
<br>
&nbsp;&nbsp;&nbsp;if using MTL-based communications) to see exactly which
<br>
&nbsp;&nbsp;&nbsp;communication plugins were considered and/or discarded.
<br>
--------------------------------------------------------------------------
<br>
[wirth:40329] *** An error occurred in MPI_Init
<br>
[wirth:40329] *** on a NULL communicator
<br>
[wirth:40329] *** Unknown error
<br>
[wirth:40329] *** MPI_ERRORS_ARE_FATAL: your MPI job will now abort
<br>
--------------------------------------------------------------------------
<br>
An MPI process is aborting at a time when it cannot guarantee that all
<br>
of its peer processes in the job will be killed properly.  You should
<br>
double check that everything has shut down cleanly.
<br>
<p>&nbsp;&nbsp;Reason:     Before MPI_INIT completed
<br>
&nbsp;&nbsp;Local host: wirth
<br>
&nbsp;&nbsp;PID:        40329
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 7 with PID 40329 on
<br>
node wirth exiting improperly. There are two reasons this could occur:
<br>
<p>1. this process did not call &quot;init&quot; before exiting, but others in
<br>
the job did. This can cause a job to hang indefinitely while it waits
<br>
for all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
<br>
then ALL processes must call &quot;init&quot; prior to termination.
<br>
<p>2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
<br>
By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
<br>
exiting or it will be considered an &quot;abnormal termination&quot;
<br>
<p>This may have caused other processes in the application to be
<br>
terminated by signals sent by mpirun (as reported here).
<br>
--------------------------------------------------------------------------
<br>
[karp:29513] 1 more process has sent help message help-mca-bml-r2.txt /
<br>
unreachable proc
<br>
[karp:29513] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all
<br>
help / error messages
<br>
[karp:29513] 1 more process has sent help message help-mpi-runtime /
<br>
mpi_init:startup:pml-add-procs-fail
<br>
[karp:29513] 1 more process has sent help message help-mpi-errors.txt /
<br>
mpi_errors_are_fatal unknown handle
<br>
[karp:29513] 1 more process has sent help message help-mpi-runtime.txt /
<br>
ompi mpi abort:cannot guarantee all killed
<br>
<p>I tried every combination for btl_tcp_if_include or exclude...
<br>
<p>I cant figure out what is wrong.
<br>
I can easily talk with the remote pc using netcat.
<br>
I am sure i am very near to the solution but..
<br>
<p>regards.
<br>
<p><p><p>On Mon, Mar 24, 2014 at 3:25 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; If you you use btl_tcp_if_exclude, you also need to exclude the loopback
</span><br>
<span class="quotelev1">&gt; interface.  Loopback is excluded by the default value of
</span><br>
<span class="quotelev1">&gt; btl_tcp_if_exclude, but if you overwrite that value, then you need to
</span><br>
<span class="quotelev1">&gt; *also* include the loopback interface in the new value.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 24, 2014, at 4:57 AM, Hamid Saeed &lt;e.hamidsaeed_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hello,
</span><br>
<span class="quotelev2">&gt; &gt; Still i am facing problems.
</span><br>
<span class="quotelev2">&gt; &gt; I checked there is no firewall which is acting as a barrier for the mpi
</span><br>
<span class="quotelev1">&gt; communication.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; even i used the execution line like
</span><br>
<span class="quotelev2">&gt; &gt; hsaeed_at_karp:~/Task4_mpi/scatterv$ mpiexec -n 2 --mca btl_tcp_if_exclude
</span><br>
<span class="quotelev1">&gt; br2 -host wirth,karp ./a.out
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Now the output hangup without displaying any error.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Used &quot;..exclude bt2&quot; because the failed connection was from bt2 as you
</span><br>
<span class="quotelev1">&gt; can see in the &quot;ifconfig&quot; output mentioned above.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I know there is something wrong but i am almost unable to figure it out.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I need some more kind suggestions.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; regards.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Fri, Mar 21, 2014 at 6:05 PM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Do you have any firewalling enabled on these machines?  If so, you'll
</span><br>
<span class="quotelev1">&gt; want to either disable it, or allow random TCP connections between any of
</span><br>
<span class="quotelev1">&gt; the cluster nodes.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mar 21, 2014, at 10:24 AM, Hamid Saeed &lt;e.hamidsaeed_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /sbin/ifconfig
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; hsaeed_at_karp:~$ /sbin/ifconfig
</span><br>
<span class="quotelev3">&gt; &gt; &gt; br0       Link encap:Ethernet  HWaddr 00:25:90:59:c9:ba
</span><br>
<span class="quotelev3">&gt; &gt; &gt;           inet addr:134.106.3.231  Bcast:134.106.3.255
</span><br>
<span class="quotelev1">&gt;  Mask:255.255.255.0
</span><br>
<span class="quotelev3">&gt; &gt; &gt;           inet6 addr: fe80::225:90ff:fe59:c9ba/64 Scope:Link
</span><br>
<span class="quotelev3">&gt; &gt; &gt;           UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev3">&gt; &gt; &gt;           RX packets:49080961 errors:0 dropped:50263 overruns:0 frame:0
</span><br>
<span class="quotelev3">&gt; &gt; &gt;           TX packets:43279252 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev3">&gt; &gt; &gt;           collisions:0 txqueuelen:0
</span><br>
<span class="quotelev3">&gt; &gt; &gt;           RX bytes:41348407558 (38.5 GiB)  TX bytes:80505842745 (74.9
</span><br>
<span class="quotelev1">&gt; GiB)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; br1       Link encap:Ethernet  HWaddr 00:25:90:59:c9:bb
</span><br>
<span class="quotelev3">&gt; &gt; &gt;           inet addr:134.106.53.231  Bcast:134.106.53.255
</span><br>
<span class="quotelev1">&gt;  Mask:255.255.255.0
</span><br>
<span class="quotelev3">&gt; &gt; &gt;           inet6 addr: fe80::225:90ff:fe59:c9bb/64 Scope:Link
</span><br>
<span class="quotelev3">&gt; &gt; &gt;           UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev3">&gt; &gt; &gt;           RX packets:41573060 errors:0 dropped:50261 overruns:0 frame:0
</span><br>
<span class="quotelev3">&gt; &gt; &gt;           TX packets:1693509 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev3">&gt; &gt; &gt;           collisions:0 txqueuelen:0
</span><br>
<span class="quotelev3">&gt; &gt; &gt;           RX bytes:6177072160 (5.7 GiB)  TX bytes:230617435 (219.9 MiB)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; br2       Link encap:Ethernet  HWaddr 00:c0:0a:ec:02:e7
</span><br>
<span class="quotelev3">&gt; &gt; &gt;           inet addr:10.231.2.231  Bcast:10.231.2.255
</span><br>
<span class="quotelev1">&gt;  Mask:255.255.255.0
</span><br>
<span class="quotelev3">&gt; &gt; &gt;           UP BROADCAST MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev3">&gt; &gt; &gt;           RX packets:0 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev3">&gt; &gt; &gt;           TX packets:0 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev3">&gt; &gt; &gt;           collisions:0 txqueuelen:0
</span><br>
<span class="quotelev3">&gt; &gt; &gt;           RX bytes:0 (0.0 B)  TX bytes:0 (0.0 B)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; eth0      Link encap:Ethernet  HWaddr 00:25:90:59:c9:ba
</span><br>
<span class="quotelev3">&gt; &gt; &gt;           UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev3">&gt; &gt; &gt;           RX packets:69108377 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev3">&gt; &gt; &gt;           TX packets:86459066 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev3">&gt; &gt; &gt;           collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev3">&gt; &gt; &gt;           RX bytes:43533091399 (40.5 GiB)  TX bytes:83359370885 (77.6
</span><br>
<span class="quotelev1">&gt; GiB)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;           Memory:dfe60000-dfe80000
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; eth1      Link encap:Ethernet  HWaddr 00:25:90:59:c9:bb
</span><br>
<span class="quotelev3">&gt; &gt; &gt;           UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev3">&gt; &gt; &gt;           RX packets:43531546 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev3">&gt; &gt; &gt;           TX packets:1716151 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev3">&gt; &gt; &gt;           collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev3">&gt; &gt; &gt;           RX bytes:7201915977 (6.7 GiB)  TX bytes:232026383 (221.2 MiB)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;           Memory:dfee0000-dff00000
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; lo        Link encap:Local Loopback
</span><br>
<span class="quotelev3">&gt; &gt; &gt;           inet addr:127.0.0.1  Mask:255.0.0.0
</span><br>
<span class="quotelev3">&gt; &gt; &gt;           inet6 addr: ::1/128 Scope:Host
</span><br>
<span class="quotelev3">&gt; &gt; &gt;           UP LOOPBACK RUNNING  MTU:16436  Metric:1
</span><br>
<span class="quotelev3">&gt; &gt; &gt;           RX packets:10890707 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev3">&gt; &gt; &gt;           TX packets:10890707 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev3">&gt; &gt; &gt;           collisions:0 txqueuelen:0
</span><br>
<span class="quotelev3">&gt; &gt; &gt;           RX bytes:36194379576 (33.7 GiB)  TX bytes:36194379576 (33.7
</span><br>
<span class="quotelev1">&gt; GiB)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; tap0      Link encap:Ethernet  HWaddr 00:c0:0a:ec:02:e7
</span><br>
<span class="quotelev3">&gt; &gt; &gt;           UP BROADCAST MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev3">&gt; &gt; &gt;           RX packets:0 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev3">&gt; &gt; &gt;           TX packets:0 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev3">&gt; &gt; &gt;           collisions:0 txqueuelen:500
</span><br>
<span class="quotelev3">&gt; &gt; &gt;           RX bytes:0 (0.0 B)  TX bytes:0 (0.0 B)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; When i execute the following line
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; hsaeed_at_karp:~/Task4_mpi/scatterv$ mpiexec -n 2 -host wirth,karp
</span><br>
<span class="quotelev1">&gt; ./a.out
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; i receive Error
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; [wirth][[59430,1],0][btl_tcp_endpoint.c:655:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 10.231.2.231 failed: Connection refused (111)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; NOTE: Karp and wirth are two machines on ssh cluster.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Fri, Mar 21, 2014 at 3:13 PM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Mar 21, 2014, at 10:09 AM, Hamid Saeed &lt;e.hamidsaeed_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; I think i have a tcp connection. As for as i know my cluster is
</span><br>
<span class="quotelev1">&gt; not configured for Infiniband (IB).
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Ok.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; but even for tcp connections.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; mpirun -n 2 -host master,node001 --mca btl tcp,sm,self
</span><br>
<span class="quotelev1">&gt; ./helloworldmpi
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; mpirun -n 2 -host master,node001 ./helloworldmpi
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; These line are not working they output
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Error like
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; [btl_tcp_endpoint.c:655:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to xx.xxx.x.xxx failed: Connection refused (111)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; What are the IP addresses reported by connect()?  (i.e., the address
</span><br>
<span class="quotelev1">&gt; you X'ed out)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Send the output from ifconfig on each of your servers.  Note that some
</span><br>
<span class="quotelev1">&gt; Linux distributions do not put ifconfig in the default PATH of normal
</span><br>
<span class="quotelev1">&gt; users; look for it in/sbin/ifconfig or /usr/sbin/ifconfig.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hamid Saeed
</span><br>
<span class="quotelev3">&gt; &gt; &gt; CoSynth GmbH &amp; Co. KG
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Escherweg 2 - 26121 Oldenburg - Germany
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Tel +49 441 9722 738 | Fax -278
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.cosynth.com">http://www.cosynth.com</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; Hamid Saeed
</span><br>
<span class="quotelev2">&gt; &gt; CoSynth GmbH &amp; Co. KG
</span><br>
<span class="quotelev2">&gt; &gt; Escherweg 2 - 26121 Oldenburg - Germany
</span><br>
<span class="quotelev2">&gt; &gt; Tel +49 441 9722 738 | Fax -278
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.cosynth.com">http://www.cosynth.com</a>
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
_______________________________________________
Hamid Saeed
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23943/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23944.php">Ralph Castain: "Re: [OMPI users] delays in Isend"</a>
<li><strong>Previous message:</strong> <a href="23942.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fwd: problem for multiple clusters using mpirun"</a>
<li><strong>In reply to:</strong> <a href="23942.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fwd: problem for multiple clusters using mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23947.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fwd: problem for multiple clusters using mpirun"</a>
<li><strong>Reply:</strong> <a href="23947.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fwd: problem for multiple clusters using mpirun"</a>
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
