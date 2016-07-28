<?
$subject_val = "[OMPI users] Hang in MPI_Comm_split in 2 RHEL Linux nodes with INTEL MIC cards";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 24 03:32:14 2015" -->
<!-- isoreceived="20150424073214" -->
<!-- sent="Fri, 24 Apr 2015 13:02:11 +0530" -->
<!-- isosent="20150424073211" -->
<!-- name="Manumachu Reddy" -->
<!-- email="manumachu.reddy_at_[hidden]" -->
<!-- subject="[OMPI users] Hang in MPI_Comm_split in 2 RHEL Linux nodes with INTEL MIC cards" -->
<!-- id="CANw8Oj45vd9WGTab4iafWsYW6xndVnrp8HW3LGONjk+Hj=HMXA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Hang in MPI_Comm_split in 2 RHEL Linux nodes with INTEL MIC cards<br>
<strong>From:</strong> Manumachu Reddy (<em>manumachu.reddy_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-24 03:32:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26781.php">Subhra Mazumdar: "Re: [OMPI users] MPI_THREAD_MULTIPLE and openib btl"</a>
<li><strong>Previous message:</strong> <a href="26779.php">Mike Dubman: "Re: [OMPI users] MPI_THREAD_MULTIPLE and openib btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26784.php">George Bosilca: "Re: [OMPI users] Hang in MPI_Comm_split in 2 RHEL Linux nodes with INTEL MIC cards"</a>
<li><strong>Reply:</strong> <a href="26784.php">George Bosilca: "Re: [OMPI users] Hang in MPI_Comm_split in 2 RHEL Linux nodes with INTEL MIC cards"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear OpenMPI Users,
<br>
<p>I request your help to resolve a hang in my OpenMPI application.
<br>
<p>My OpenMPI application hangs in MPI_Comm_split() operation. The code for
<br>
this simple application is at the end of this email. Broadcast works fine.
<br>
<p>My experimental setup comprises of two RHEL6.4 Linux nodes. Each node has 2
<br>
mic cards. Please note that although there are mic cards, I do not use mic
<br>
cards in my OpenMPI application.
<br>
<p>I have tested with two OpenMPI versions (1.6.5, 1.8.4). I see the hang in
<br>
both the versions. OpenMPI is installed using the following command:
<br>
<p>./configure
<br>
--prefix=/home/manumachu/OpenMPI/openmpi-1.8.4/OPENMPI_INSTALL_ICC CC=&quot;icc
<br>
-fPIC&quot; CXX=&quot;icpc -fPIC&quot;
<br>
<p>I have made sure I have turned off the firewall using the following
<br>
commands:
<br>
<p>sudo service iptables save
<br>
sudo service iptables stop
<br>
sudo chkconfig iptables off
<br>
<p>I made sure the mic cards are online and healthy. I am able to login to the
<br>
mic cards.
<br>
<p>I use an appfile to launch 2 processes on each node.
<br>
<p>I have also attached the &quot;ifconfig&quot; list for each node. Could this problem
<br>
be related to multiple network interfaces (from the application output also
<br>
shown at the end of the email)?
<br>
<p>Please let me know if you need further information and I look forward to
<br>
your suggestions.
<br>
<p>Best Regards
<br>
Manumachu
<br>
<p>*Application*
<br>
<p>#include &lt;stdio.h&gt;
<br>
#include &lt;mpi.h&gt;
<br>
<p>int main(int argc, char** argv)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int me, hostnamelen;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;char hostname[MPI_MAX_PROCESSOR_NAME];
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Get_processor_name(hostname, &amp;hostnamelen);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;me);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Hostname %s: Me is %d.\n&quot;, hostname, me);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;int a;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Bcast(&amp;a, 1, MPI_INT, 0, MPI_COMM_WORLD);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Hostname %s: Me %d broadcasted.\n&quot;, hostname, me);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm intraNodeComm;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int rc = MPI_Comm_split(
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_COMM_WORLD,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;me,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;me,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;intraNodeComm
<br>
&nbsp;&nbsp;&nbsp;&nbsp;);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if (rc != MPI_SUCCESS)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;MAIN: Problems MPI_Comm_split...Exiting...\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return -1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Hostname %s: Me %d after comm split.\n&quot;, hostname, me);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_free(&amp;intraNodeComm);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>*Application output*
<br>
<p>Hostname server5: Me is 0.
<br>
Hostname server5: Me is 1.
<br>
Hostname server5: Me 1 broadcasted.
<br>
Hostname server5: Me 0 broadcasted.
<br>
[server5][[50702,1],0][btl_tcp_endpoint.c:655:mca_btl_tcp_endpoint_complete_connect]
<br>
connect() to 172.31.1.254 failed: Connection refused (111)
<br>
[server5][[50702,1],1][btl_tcp_endpoint.c:655:mca_btl_tcp_endpoint_complete_connect]
<br>
connect() to 172.31.1.254 failed: Connection refused (111)
<br>
Hostname server2: Me is 2.
<br>
Hostname server2: Me 2 broadcasted.
<br>
Hostname server2: Me is 3.
<br>
Hostname server2: Me 3 broadcasted.
<br>
<p>*server2 ifconfig*
<br>
<p>eth0      Link encap:Ethernet...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP BROADCAST MULTICAST  MTU:1500  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...
<br>
eth1      Link encap:Ethernet...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP BROADCAST MULTICAST  MTU:1500  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...
<br>
eth2      Link encap:Ethernet...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP BROADCAST MULTICAST  MTU:1500  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...
<br>
eth3      Link encap:Ethernet...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:172.17.27.17  Bcast:172.17.27.255  Mask:255.255.255.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 addr: fe80::921b:eff:fe42:a5ba/64 Scope:Link
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...
<br>
lo        Link encap:Local Loopback
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:127.0.0.1  Mask:255.0.0.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP LOOPBACK RUNNING  MTU:65536  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...
<br>
<p>mic0      Link encap:Ethernet
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:172.31.1.254  Bcast:172.31.1.255  Mask:255.255.255.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...
<br>
<p>mic1      Link encap:Ethernet...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:172.31.2.254  Bcast:172.31.2.255  Mask:255.255.255.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...
<br>
<p>*server5 ifconfig*
<br>
eth0      Link encap:Ethernet...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP BROADCAST MULTICAST  MTU:1500  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...
<br>
<p>eth1      Link encap:Ethernet...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP BROADCAST MULTICAST  MTU:1500  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...
<br>
<p>eth2      Link encap:Ethernet...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP BROADCAST MULTICAST  MTU:1500  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...
<br>
<p>eth3      Link encap:Ethernet...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:172.17.27.14  Bcast:172.17.27.255  Mask:255.255.255.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...
<br>
<p>lo        Link encap:Local Loopback
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:127.0.0.1  Mask:255.0.0.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...
<br>
<p>mic0      Link encap:Ethernet...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:172.31.1.254  Bcast:172.31.1.255  Mask:255.255.255.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP BROADCAST RUNNING  MTU:64512  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...
<br>
<p>mic1      Link encap:Ethernet...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:172.31.2.254  Bcast:172.31.2.255  Mask:255.255.255.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26780/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26781.php">Subhra Mazumdar: "Re: [OMPI users] MPI_THREAD_MULTIPLE and openib btl"</a>
<li><strong>Previous message:</strong> <a href="26779.php">Mike Dubman: "Re: [OMPI users] MPI_THREAD_MULTIPLE and openib btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26784.php">George Bosilca: "Re: [OMPI users] Hang in MPI_Comm_split in 2 RHEL Linux nodes with INTEL MIC cards"</a>
<li><strong>Reply:</strong> <a href="26784.php">George Bosilca: "Re: [OMPI users] Hang in MPI_Comm_split in 2 RHEL Linux nodes with INTEL MIC cards"</a>
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
