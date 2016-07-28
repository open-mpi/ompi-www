<?
$subject_val = "Re: [OMPI users] Hang in MPI_Comm_split in 2 RHEL Linux nodes with INTEL MIC cards";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr 26 12:02:10 2015" -->
<!-- isoreceived="20150426160210" -->
<!-- sent="Sun, 26 Apr 2015 12:02:07 -0400" -->
<!-- isosent="20150426160207" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Hang in MPI_Comm_split in 2 RHEL Linux nodes with INTEL MIC cards" -->
<!-- id="CAMJJpkVFo57TFvqk0yonE4U6Jcm+fSpw3Awy0fgyAbsoxWEwkg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CANw8Oj4MNLLX1ZvoVnptCScK+fZJWdrDOOaH2XFC_DOjmAPMOg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Hang in MPI_Comm_split in 2 RHEL Linux nodes with INTEL MIC cards<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-26 12:02:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26792.php">Andy Riebs: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<li><strong>Previous message:</strong> <a href="26790.php">Ralph Castain: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<li><strong>In reply to:</strong> <a href="26788.php">Manumachu Reddy: "Re: [OMPI users] Hang in MPI_Comm_split in 2 RHEL Linux nodes with INTEL MIC cards"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/05/26836.php">Manumachu Reddy: "Re: [OMPI users] Hang in MPI_Comm_split in 2 RHEL Linux nodes with INTEL MIC cards"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/05/26836.php">Manumachu Reddy: "Re: [OMPI users] Hang in MPI_Comm_split in 2 RHEL Linux nodes with INTEL MIC cards"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
With the arguments I sent you the error about connection refused should
<br>
have disappeared. Let's try to force all traffic over the first TCP
<br>
interface eth3. Try the following flags to your mpirun:
<br>
<p>--mca pml ob1 --mca btl tcp,sm,self --mca btl_tcp_if_include eth3
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On Sun, Apr 26, 2015 at 8:04 AM, Manumachu Reddy &lt;manumachu.reddy_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi George,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am afraid the suggestion to use bcl_tcp_if_exclude has not applied. I
</span><br>
<span class="quotelev1">&gt; executed the following command:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *shell$ mpirun --mca btl_tcp_if_exclude mic0,mic1 -app appfile*
</span><br>
<span class="quotelev1">&gt; &lt;the same output and hang&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please let me know if there are options to mpirun (apart from -v) to get
</span><br>
<span class="quotelev1">&gt; verbose output to understand what is happening.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Apr 24, 2015 at 5:59 PM, George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Manumachu,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Both nodes have the same IP for their Phi (mic0 and mic1). This is OK as
</span><br>
<span class="quotelev2">&gt;&gt; long as they don't try to connect to each other using these addresses. A
</span><br>
<span class="quotelev2">&gt;&gt; simple fix is to prevent OMPI from using the supposedly local mic0 and mic1
</span><br>
<span class="quotelev2">&gt;&gt; IP. Add --mca btl_tcp_if_exclude mic0,mic1 to your mpirun command and
</span><br>
<span class="quotelev2">&gt;&gt; things should start working better.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; George.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 24, 2015, at 03:32, Manumachu Reddy &lt;manumachu.reddy_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear OpenMPI Users,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I request your help to resolve a hang in my OpenMPI application.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My OpenMPI application hangs in MPI_Comm_split() operation. The code for
</span><br>
<span class="quotelev2">&gt;&gt; this simple application is at the end of this email. Broadcast works fine.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My experimental setup comprises of two RHEL6.4 Linux nodes. Each node has
</span><br>
<span class="quotelev2">&gt;&gt; 2 mic cards. Please note that although there are mic cards, I do not use
</span><br>
<span class="quotelev2">&gt;&gt; mic cards in my OpenMPI application.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have tested with two OpenMPI versions (1.6.5, 1.8.4). I see the hang in
</span><br>
<span class="quotelev2">&gt;&gt; both the versions. OpenMPI is installed using the following command:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./configure
</span><br>
<span class="quotelev2">&gt;&gt; --prefix=/home/manumachu/OpenMPI/openmpi-1.8.4/OPENMPI_INSTALL_ICC CC=&quot;icc
</span><br>
<span class="quotelev2">&gt;&gt; -fPIC&quot; CXX=&quot;icpc -fPIC&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have made sure I have turned off the firewall using the following
</span><br>
<span class="quotelev2">&gt;&gt; commands:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; sudo service iptables save
</span><br>
<span class="quotelev2">&gt;&gt; sudo service iptables stop
</span><br>
<span class="quotelev2">&gt;&gt; sudo chkconfig iptables off
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I made sure the mic cards are online and healthy. I am able to login to
</span><br>
<span class="quotelev2">&gt;&gt; the mic cards.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I use an appfile to launch 2 processes on each node.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have also attached the &quot;ifconfig&quot; list for each node. Could this
</span><br>
<span class="quotelev2">&gt;&gt; problem be related to multiple network interfaces (from the application
</span><br>
<span class="quotelev2">&gt;&gt; output also shown at the end of the email)?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Please let me know if you need further information and I look forward to
</span><br>
<span class="quotelev2">&gt;&gt; your suggestions.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best Regards
</span><br>
<span class="quotelev2">&gt;&gt; Manumachu
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *Application*
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; int main(int argc, char** argv)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;     int me, hostnamelen;
</span><br>
<span class="quotelev2">&gt;&gt;     char hostname[MPI_MAX_PROCESSOR_NAME];
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Get_processor_name(hostname, &amp;hostnamelen);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Comm_rank(MPI_COMM_WORLD, &amp;me);
</span><br>
<span class="quotelev2">&gt;&gt;     printf(&quot;Hostname %s: Me is %d.\n&quot;, hostname, me);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     int a;
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Bcast(&amp;a, 1, MPI_INT, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     printf(&quot;Hostname %s: Me %d broadcasted.\n&quot;, hostname, me);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Comm intraNodeComm;
</span><br>
<span class="quotelev2">&gt;&gt;     int rc = MPI_Comm_split(
</span><br>
<span class="quotelev2">&gt;&gt;                 MPI_COMM_WORLD,
</span><br>
<span class="quotelev2">&gt;&gt;                 me,
</span><br>
<span class="quotelev2">&gt;&gt;                 me,
</span><br>
<span class="quotelev2">&gt;&gt;                 &amp;intraNodeComm
</span><br>
<span class="quotelev2">&gt;&gt;     );
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     if (rc != MPI_SUCCESS)
</span><br>
<span class="quotelev2">&gt;&gt;     {
</span><br>
<span class="quotelev2">&gt;&gt;        printf(&quot;MAIN: Problems MPI_Comm_split...Exiting...\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;        return -1;
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     printf(&quot;Hostname %s: Me %d after comm split.\n&quot;, hostname, me);
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Comm_free(&amp;intraNodeComm);
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     return 0;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *Application output*
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hostname server5: Me is 0.
</span><br>
<span class="quotelev2">&gt;&gt; Hostname server5: Me is 1.
</span><br>
<span class="quotelev2">&gt;&gt; Hostname server5: Me 1 broadcasted.
</span><br>
<span class="quotelev2">&gt;&gt; Hostname server5: Me 0 broadcasted.
</span><br>
<span class="quotelev2">&gt;&gt; [server5][[50702,1],0][btl_tcp_endpoint.c:655:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev2">&gt;&gt; connect() to 172.31.1.254 failed: Connection refused (111)
</span><br>
<span class="quotelev2">&gt;&gt; [server5][[50702,1],1][btl_tcp_endpoint.c:655:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev2">&gt;&gt; connect() to 172.31.1.254 failed: Connection refused (111)
</span><br>
<span class="quotelev2">&gt;&gt; Hostname server2: Me is 2.
</span><br>
<span class="quotelev2">&gt;&gt; Hostname server2: Me 2 broadcasted.
</span><br>
<span class="quotelev2">&gt;&gt; Hostname server2: Me is 3.
</span><br>
<span class="quotelev2">&gt;&gt; Hostname server2: Me 3 broadcasted.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *server2 ifconfig*
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; eth0      Link encap:Ethernet...
</span><br>
<span class="quotelev2">&gt;&gt;           UP BROADCAST MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev2">&gt;&gt;           ...
</span><br>
<span class="quotelev2">&gt;&gt; eth1      Link encap:Ethernet...
</span><br>
<span class="quotelev2">&gt;&gt;           UP BROADCAST MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev2">&gt;&gt;           ...
</span><br>
<span class="quotelev2">&gt;&gt; eth2      Link encap:Ethernet...
</span><br>
<span class="quotelev2">&gt;&gt;           UP BROADCAST MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev2">&gt;&gt;           ...
</span><br>
<span class="quotelev2">&gt;&gt; eth3      Link encap:Ethernet...
</span><br>
<span class="quotelev2">&gt;&gt;           inet addr:172.17.27.17  Bcast:172.17.27.255  Mask:255.255.255.0
</span><br>
<span class="quotelev2">&gt;&gt;           inet6 addr: fe80::921b:eff:fe42:a5ba/64 Scope:Link
</span><br>
<span class="quotelev2">&gt;&gt;           UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev2">&gt;&gt;           ...
</span><br>
<span class="quotelev2">&gt;&gt; lo        Link encap:Local Loopback
</span><br>
<span class="quotelev2">&gt;&gt;           inet addr:127.0.0.1  Mask:255.0.0.0
</span><br>
<span class="quotelev2">&gt;&gt;           UP LOOPBACK RUNNING  MTU:65536  Metric:1
</span><br>
<span class="quotelev2">&gt;&gt;           ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mic0      Link encap:Ethernet
</span><br>
<span class="quotelev2">&gt;&gt;           inet addr:172.31.1.254  Bcast:172.31.1.255  Mask:255.255.255.0
</span><br>
<span class="quotelev2">&gt;&gt;           ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mic1      Link encap:Ethernet...
</span><br>
<span class="quotelev2">&gt;&gt;           inet addr:172.31.2.254  Bcast:172.31.2.255  Mask:255.255.255.0
</span><br>
<span class="quotelev2">&gt;&gt;           ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *server5 ifconfig*
</span><br>
<span class="quotelev2">&gt;&gt; eth0      Link encap:Ethernet...
</span><br>
<span class="quotelev2">&gt;&gt;           UP BROADCAST MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev2">&gt;&gt;           ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; eth1      Link encap:Ethernet...
</span><br>
<span class="quotelev2">&gt;&gt;           UP BROADCAST MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev2">&gt;&gt;           ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; eth2      Link encap:Ethernet...
</span><br>
<span class="quotelev2">&gt;&gt;           UP BROADCAST MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev2">&gt;&gt;           ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; eth3      Link encap:Ethernet...
</span><br>
<span class="quotelev2">&gt;&gt;           inet addr:172.17.27.14  Bcast:172.17.27.255  Mask:255.255.255.0
</span><br>
<span class="quotelev2">&gt;&gt;           UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev2">&gt;&gt;           ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; lo        Link encap:Local Loopback
</span><br>
<span class="quotelev2">&gt;&gt;           inet addr:127.0.0.1  Mask:255.0.0.0
</span><br>
<span class="quotelev2">&gt;&gt;           ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mic0      Link encap:Ethernet...
</span><br>
<span class="quotelev2">&gt;&gt;           inet addr:172.31.1.254  Bcast:172.31.1.255  Mask:255.255.255.0
</span><br>
<span class="quotelev2">&gt;&gt;           UP BROADCAST RUNNING  MTU:64512  Metric:1
</span><br>
<span class="quotelev2">&gt;&gt;           ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mic1      Link encap:Ethernet...
</span><br>
<span class="quotelev2">&gt;&gt;           inet addr:172.31.2.254  Bcast:172.31.2.255  Mask:255.255.255.0
</span><br>
<span class="quotelev2">&gt;&gt;           ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/04/26780.php">http://www.open-mpi.org/community/lists/users/2015/04/26780.php</a>
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
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/04/26784.php">http://www.open-mpi.org/community/lists/users/2015/04/26784.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Best Regards
</span><br>
<span class="quotelev1">&gt; Ravi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/04/26788.php">http://www.open-mpi.org/community/lists/users/2015/04/26788.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26791/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26792.php">Andy Riebs: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<li><strong>Previous message:</strong> <a href="26790.php">Ralph Castain: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<li><strong>In reply to:</strong> <a href="26788.php">Manumachu Reddy: "Re: [OMPI users] Hang in MPI_Comm_split in 2 RHEL Linux nodes with INTEL MIC cards"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/05/26836.php">Manumachu Reddy: "Re: [OMPI users] Hang in MPI_Comm_split in 2 RHEL Linux nodes with INTEL MIC cards"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/05/26836.php">Manumachu Reddy: "Re: [OMPI users] Hang in MPI_Comm_split in 2 RHEL Linux nodes with INTEL MIC cards"</a>
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
