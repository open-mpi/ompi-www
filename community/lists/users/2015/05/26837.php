<?
$subject_val = "Re: [OMPI users] Hang in MPI_Comm_split in 2 RHEL Linux nodes with INTEL MIC cards";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  5 10:48:10 2015" -->
<!-- isoreceived="20150505144810" -->
<!-- sent="Tue, 5 May 2015 08:48:00 -0600" -->
<!-- isosent="20150505144800" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Hang in MPI_Comm_split in 2 RHEL Linux nodes with INTEL MIC cards" -->
<!-- id="20150505144800.GC7839_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CANw8Oj7gdM9EgyZduPiwTpo4bBs_PHG2mT2dJ4nPx258sZoBxQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-05 10:48:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26838.php">David Shrader: "[OMPI users] what was ompi configured with?"</a>
<li><strong>Previous message:</strong> <a href="26836.php">Manumachu Reddy: "Re: [OMPI users] Hang in MPI_Comm_split in 2 RHEL Linux nodes with INTEL MIC cards"</a>
<li><strong>In reply to:</strong> <a href="26836.php">Manumachu Reddy: "Re: [OMPI users] Hang in MPI_Comm_split in 2 RHEL Linux nodes with INTEL MIC cards"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If any communication will be between two mics on the same node or
<br>
between a mic and its host I suggest using the scif btl instead of
<br>
tcp. You will see a factor of 10 or more improvement in latency by using
<br>
the scif interface.
<br>
<p>-Nathan
<br>
<p>On Tue, May 05, 2015 at 10:39:47AM +0530, Manumachu Reddy wrote:
<br>
<span class="quotelev1">&gt;    Hi George,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Sorry for the delay in writing to you.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Your latest suggestion has worked admirably well.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Thanks a lot for your help.
</span><br>
<span class="quotelev1">&gt;    On Sun, Apr 26, 2015 at 9:32 PM, George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;    wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      With the arguments I sent you the error about connection refused should
</span><br>
<span class="quotelev1">&gt;      have disappeared. Let's try to force all traffic over the first TCP
</span><br>
<span class="quotelev1">&gt;      interface eth3. Try the following flags to your mpirun: 
</span><br>
<span class="quotelev1">&gt;      --mca pml ob1 --mca btl tcp,sm,self --mca btl_tcp_if_include eth3
</span><br>
<span class="quotelev1">&gt;        George.
</span><br>
<span class="quotelev1">&gt;      On Sun, Apr 26, 2015 at 8:04 AM, Manumachu Reddy
</span><br>
<span class="quotelev1">&gt;      &lt;manumachu.reddy_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        Hi George,
</span><br>
<span class="quotelev1">&gt;        I am afraid the suggestion to use bcl_tcp_if_exclude has not applied.
</span><br>
<span class="quotelev1">&gt;        I executed the following command:
</span><br>
<span class="quotelev1">&gt;        shell$ mpirun --mca btl_tcp_if_exclude mic0,mic1 -app appfile
</span><br>
<span class="quotelev1">&gt;        &lt;the same output and hang&gt;
</span><br>
<span class="quotelev1">&gt;        Please let me know if there are options to mpirun (apart from -v) to
</span><br>
<span class="quotelev1">&gt;        get verbose output to understand what is happening.
</span><br>
<span class="quotelev1">&gt;        On Fri, Apr 24, 2015 at 5:59 PM, George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;        wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;          Manumachu,
</span><br>
<span class="quotelev1">&gt;          Both nodes have the same IP for their Phi (mic0 and mic1). This is
</span><br>
<span class="quotelev1">&gt;          OK as long as they don't try to connect to each other using these
</span><br>
<span class="quotelev1">&gt;          addresses. A simple fix is to prevent OMPI from using the supposedly
</span><br>
<span class="quotelev1">&gt;          local mic0 and mic1 IP. Add --mca btl_tcp_if_exclude mic0,mic1 to
</span><br>
<span class="quotelev1">&gt;          your mpirun command and things should start working better.
</span><br>
<span class="quotelev1">&gt;          George.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;          On Apr 24, 2015, at 03:32, Manumachu Reddy
</span><br>
<span class="quotelev1">&gt;          &lt;manumachu.reddy_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            Dear OpenMPI Users,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            I request your help to resolve a hang in my OpenMPI application.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            My OpenMPI application hangs in MPI_Comm_split() operation. The
</span><br>
<span class="quotelev1">&gt;            code for this simple application is at the end of this email.
</span><br>
<span class="quotelev1">&gt;            Broadcast works fine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            My experimental setup comprises of two RHEL6.4 Linux nodes. Each
</span><br>
<span class="quotelev1">&gt;            node has 2 mic cards. Please note that although there are mic
</span><br>
<span class="quotelev1">&gt;            cards, I do not use mic cards in my OpenMPI application.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            I have tested with two OpenMPI versions (1.6.5, 1.8.4). I see the
</span><br>
<span class="quotelev1">&gt;            hang in both the versions. OpenMPI is installed using the
</span><br>
<span class="quotelev1">&gt;            following command:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            ./configure
</span><br>
<span class="quotelev1">&gt;            --prefix=/home/manumachu/OpenMPI/openmpi-1.8.4/OPENMPI_INSTALL_ICC
</span><br>
<span class="quotelev1">&gt;            CC=&quot;icc -fPIC&quot; CXX=&quot;icpc -fPIC&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            I have made sure I have turned off the firewall using the
</span><br>
<span class="quotelev1">&gt;            following commands:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            sudo service iptables save
</span><br>
<span class="quotelev1">&gt;            sudo service iptables stop
</span><br>
<span class="quotelev1">&gt;            sudo chkconfig iptables off
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            I made sure the mic cards are online and healthy. I am able to
</span><br>
<span class="quotelev1">&gt;            login to the mic cards.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            I use an appfile to launch 2 processes on each node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            I have also attached the &quot;ifconfig&quot; list for each node. Could this
</span><br>
<span class="quotelev1">&gt;            problem be related to multiple network interfaces (from the
</span><br>
<span class="quotelev1">&gt;            application output also shown at the end of the email)?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            Please let me know if you need further information and I look
</span><br>
<span class="quotelev1">&gt;            forward to your suggestions.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            Best Regards
</span><br>
<span class="quotelev1">&gt;            Manumachu
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            Application
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt;            #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            int main(int argc, char** argv)
</span><br>
<span class="quotelev1">&gt;            {
</span><br>
<span class="quotelev1">&gt;                int me, hostnamelen;
</span><br>
<span class="quotelev1">&gt;                char hostname[MPI_MAX_PROCESSOR_NAME];
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                MPI_Get_processor_name(hostname, &amp;hostnamelen);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                MPI_Comm_rank(MPI_COMM_WORLD, &amp;me);
</span><br>
<span class="quotelev1">&gt;                printf(&quot;Hostname %s: Me is %d.\n&quot;, hostname, me);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                int a;
</span><br>
<span class="quotelev1">&gt;                MPI_Bcast(&amp;a, 1, MPI_INT, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                printf(&quot;Hostname %s: Me %d broadcasted.\n&quot;, hostname, me);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                MPI_Comm intraNodeComm;
</span><br>
<span class="quotelev1">&gt;                int rc = MPI_Comm_split(
</span><br>
<span class="quotelev1">&gt;                            MPI_COMM_WORLD,
</span><br>
<span class="quotelev1">&gt;                            me,
</span><br>
<span class="quotelev1">&gt;                            me,
</span><br>
<span class="quotelev1">&gt;                            &amp;intraNodeComm
</span><br>
<span class="quotelev1">&gt;                );
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                if (rc != MPI_SUCCESS)
</span><br>
<span class="quotelev1">&gt;                {
</span><br>
<span class="quotelev1">&gt;                   printf(&quot;MAIN: Problems MPI_Comm_split...Exiting...\n&quot;);
</span><br>
<span class="quotelev1">&gt;                   return -1;
</span><br>
<span class="quotelev1">&gt;                }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                printf(&quot;Hostname %s: Me %d after comm split.\n&quot;, hostname,
</span><br>
<span class="quotelev1">&gt;            me);
</span><br>
<span class="quotelev1">&gt;                MPI_Comm_free(&amp;intraNodeComm);
</span><br>
<span class="quotelev1">&gt;                MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                return 0;
</span><br>
<span class="quotelev1">&gt;            }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            Application output
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            Hostname server5: Me is 0.
</span><br>
<span class="quotelev1">&gt;            Hostname server5: Me is 1.
</span><br>
<span class="quotelev1">&gt;            Hostname server5: Me 1 broadcasted.
</span><br>
<span class="quotelev1">&gt;            Hostname server5: Me 0 broadcasted.
</span><br>
<span class="quotelev1">&gt;            [server5][[50702,1],0][btl_tcp_endpoint.c:655:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt;            connect() to 172.31.1.254 failed: Connection refused (111)
</span><br>
<span class="quotelev1">&gt;            [server5][[50702,1],1][btl_tcp_endpoint.c:655:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt;            connect() to 172.31.1.254 failed: Connection refused (111)
</span><br>
<span class="quotelev1">&gt;            Hostname server2: Me is 2.
</span><br>
<span class="quotelev1">&gt;            Hostname server2: Me 2 broadcasted.
</span><br>
<span class="quotelev1">&gt;            Hostname server2: Me is 3.
</span><br>
<span class="quotelev1">&gt;            Hostname server2: Me 3 broadcasted.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            server2 ifconfig
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            eth0      Link encap:Ethernet...
</span><br>
<span class="quotelev1">&gt;                      UP BROADCAST MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt;                      ...
</span><br>
<span class="quotelev1">&gt;            eth1      Link encap:Ethernet...
</span><br>
<span class="quotelev1">&gt;                      UP BROADCAST MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt;                      ...
</span><br>
<span class="quotelev1">&gt;            eth2      Link encap:Ethernet...
</span><br>
<span class="quotelev1">&gt;                      UP BROADCAST MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt;                      ...
</span><br>
<span class="quotelev1">&gt;            eth3      Link encap:Ethernet...
</span><br>
<span class="quotelev1">&gt;                      inet addr:172.17.27.17  Bcast:172.17.27.255 
</span><br>
<span class="quotelev1">&gt;            Mask:255.255.255.0
</span><br>
<span class="quotelev1">&gt;                      inet6 addr: fe80::921b:eff:fe42:a5ba/64 Scope:Link
</span><br>
<span class="quotelev1">&gt;                      UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt;                      ...
</span><br>
<span class="quotelev1">&gt;            lo        Link encap:Local Loopback 
</span><br>
<span class="quotelev1">&gt;                      inet addr:127.0.0.1  Mask:255.0.0.0
</span><br>
<span class="quotelev1">&gt;                      UP LOOPBACK RUNNING  MTU:65536  Metric:1
</span><br>
<span class="quotelev1">&gt;                      ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            mic0      Link encap:Ethernet
</span><br>
<span class="quotelev1">&gt;                      inet addr:172.31.1.254  Bcast:172.31.1.255 
</span><br>
<span class="quotelev1">&gt;            Mask:255.255.255.0
</span><br>
<span class="quotelev1">&gt;                      ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            mic1      Link encap:Ethernet...
</span><br>
<span class="quotelev1">&gt;                      inet addr:172.31.2.254  Bcast:172.31.2.255 
</span><br>
<span class="quotelev1">&gt;            Mask:255.255.255.0
</span><br>
<span class="quotelev1">&gt;                      ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            server5 ifconfig
</span><br>
<span class="quotelev1">&gt;            eth0      Link encap:Ethernet...
</span><br>
<span class="quotelev1">&gt;                      UP BROADCAST MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt;                      ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            eth1      Link encap:Ethernet...
</span><br>
<span class="quotelev1">&gt;                      UP BROADCAST MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt;                      ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            eth2      Link encap:Ethernet...
</span><br>
<span class="quotelev1">&gt;                      UP BROADCAST MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt;                      ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            eth3      Link encap:Ethernet...
</span><br>
<span class="quotelev1">&gt;                      inet addr:172.17.27.14  Bcast:172.17.27.255 
</span><br>
<span class="quotelev1">&gt;            Mask:255.255.255.0
</span><br>
<span class="quotelev1">&gt;                      UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt;                      ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            lo        Link encap:Local Loopback 
</span><br>
<span class="quotelev1">&gt;                      inet addr:127.0.0.1  Mask:255.0.0.0
</span><br>
<span class="quotelev1">&gt;                      ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            mic0      Link encap:Ethernet...
</span><br>
<span class="quotelev1">&gt;                      inet addr:172.31.1.254  Bcast:172.31.1.255 
</span><br>
<span class="quotelev1">&gt;            Mask:255.255.255.0
</span><br>
<span class="quotelev1">&gt;                      UP BROADCAST RUNNING  MTU:64512  Metric:1
</span><br>
<span class="quotelev1">&gt;                      ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            mic1      Link encap:Ethernet...
</span><br>
<span class="quotelev1">&gt;                      inet addr:172.31.2.254  Bcast:172.31.2.255 
</span><br>
<span class="quotelev1">&gt;            Mask:255.255.255.0
</span><br>
<span class="quotelev1">&gt;                      ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            _______________________________________________
</span><br>
<span class="quotelev1">&gt;            users mailing list
</span><br>
<span class="quotelev1">&gt;            users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;            Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;            Link to this post:
</span><br>
<span class="quotelev1">&gt;            <a href="http://www.open-mpi.org/community/lists/users/2015/04/26780.php">http://www.open-mpi.org/community/lists/users/2015/04/26780.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;          _______________________________________________
</span><br>
<span class="quotelev1">&gt;          users mailing list
</span><br>
<span class="quotelev1">&gt;          users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;          Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;          Link to this post:
</span><br>
<span class="quotelev1">&gt;          <a href="http://www.open-mpi.org/community/lists/users/2015/04/26784.php">http://www.open-mpi.org/community/lists/users/2015/04/26784.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        --
</span><br>
<span class="quotelev1">&gt;        Best Regards
</span><br>
<span class="quotelev1">&gt;        Ravi
</span><br>
<span class="quotelev1">&gt;        _______________________________________________
</span><br>
<span class="quotelev1">&gt;        users mailing list
</span><br>
<span class="quotelev1">&gt;        users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;        Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;        Link to this post:
</span><br>
<span class="quotelev1">&gt;        <a href="http://www.open-mpi.org/community/lists/users/2015/04/26788.php">http://www.open-mpi.org/community/lists/users/2015/04/26788.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      _______________________________________________
</span><br>
<span class="quotelev1">&gt;      users mailing list
</span><br>
<span class="quotelev1">&gt;      users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;      Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;      Link to this post:
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/community/lists/users/2015/04/26791.php">http://www.open-mpi.org/community/lists/users/2015/04/26791.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    --
</span><br>
<span class="quotelev1">&gt;    Best Regards
</span><br>
<span class="quotelev1">&gt;    Ravi
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/05/26836.php">http://www.open-mpi.org/community/lists/users/2015/05/26836.php</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26837/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26838.php">David Shrader: "[OMPI users] what was ompi configured with?"</a>
<li><strong>Previous message:</strong> <a href="26836.php">Manumachu Reddy: "Re: [OMPI users] Hang in MPI_Comm_split in 2 RHEL Linux nodes with INTEL MIC cards"</a>
<li><strong>In reply to:</strong> <a href="26836.php">Manumachu Reddy: "Re: [OMPI users] Hang in MPI_Comm_split in 2 RHEL Linux nodes with INTEL MIC cards"</a>
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
