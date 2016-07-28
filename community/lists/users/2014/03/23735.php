<?
$subject_val = "Re: [OMPI users] OpenMPI job initializing problem";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar  2 02:55:50 2014" -->
<!-- isoreceived="20140302075550" -->
<!-- sent="Sun, 2 Mar 2014 00:56:11 -0700" -->
<!-- isosent="20140302075611" -->
<!-- name="Beichuan Yan" -->
<!-- email="beichuan.yan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI job initializing problem" -->
<!-- id="D67303F39678724DA65819E042CB369892A81D07FC_at_EXC2.ad.colorado.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="531114B1.5060700_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI job initializing problem<br>
<strong>From:</strong> Beichuan Yan (<em>beichuan.yan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-02 02:56:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23736.php">Ralph Castain: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<li><strong>Previous message:</strong> <a href="23734.php">Brice Goglin: "Re: [OMPI users] Heterogeneous cluster problem - mixing AMD and Intel nodes"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/02/23726.php">Gus Correa: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23736.php">Ralph Castain: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<li><strong>Reply:</strong> <a href="23736.php">Ralph Castain: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph and Gus,
<br>
<p>1. Thank you for your suggestion. I built Open MPI 1.6.5 with the following command: 
<br>
./configure --prefix=/work4/projects/openmpi/openmpi-1.6.5-gcc-compilers-4.7.3 --with-tm=/opt/pbs/default --with-openib=  --with-openib-libdir=/usr/lib64
<br>
<p>In my job script, I need to specify the IB subnet like this:
<br>
TCP=&quot;--mca btl_tcp_if_include 10.148.0.0/16&quot;
<br>
mpirun $TCP -np 64 -hostfile $PBS_NODEFILE ./paraEllip3d input.txt
<br>
<p>Then my job can get initialized and run correctly each time!
<br>
<p>2. However, to build Open MPI 1.7.4 with another command (in order to test/compare shared-memory performance of Open MPI):
<br>
./configure --prefix=/work4/projects/openmpi/openmpi-1.7.4-gcc-compilers-4.7.3 --with-tm=/opt/pbs/default --with-verbs=  --with-verbs-libdir=/usr/lib64
<br>
<p>It gets error as follows:
<br>
============================================================================
<br>
== Modular Component Architecture (MCA) setup
<br>
============================================================================
<br>
checking for subdir args...  '--prefix=/work4/projects/openmpi/openmpi-1.7.4-gcc-compilers-4.7.3' '--with-tm=/opt/pbs/default' '--with-verbs=' '--with-verbs-libdir=/usr/lib64' 'CC=gcc' 'CXX=g++'
<br>
checking --with-verbs value... simple ok (unspecified)
<br>
checking --with-verbs-libdir value... sanity check ok (/usr/lib64)
<br>
configure: WARNING: Could not find verbs.h in the usual locations under
<br>
configure: error: Cannot continue
<br>
<p>Our system is Red Hat 6.4. Do we need to install more packages of Infiniband? Can you please advise?
<br>
<p>Thanks,
<br>
Beichuan Yan
<br>
<p><p>-----Original Message-----
<br>
From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Gus Correa
<br>
Sent: Friday, February 28, 2014 15:59
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] OpenMPI job initializing problem
<br>
<p>HI Beichuan
<br>
<p>To add to what Ralph said,
<br>
the RHEL OpenMPI package probably wasn't built with with PBS Pro support either.
<br>
Besides, OMPI 1.5.4 (RHEL version) is old.
<br>
<p>**
<br>
<p>You will save yourself time and grief if you read the installation FAQs, before you install from the source tarball:
<br>
<p><a href="http://www.open-mpi.org/faq/?category=building">http://www.open-mpi.org/faq/?category=building</a>
<br>
<p>However, as Ralph said, that is your best bet, and it is quite easy to get right.
<br>
<p><p>See this FAQ on how to build with PBS Pro support:
<br>
<p><a href="http://www.open-mpi.org/faq/?category=building#build-rte-tm">http://www.open-mpi.org/faq/?category=building#build-rte-tm</a>
<br>
<p>And this one on how to build with Infiniband support:
<br>
<p><a href="http://www.open-mpi.org/faq/?category=building#build-p2p">http://www.open-mpi.org/faq/?category=building#build-p2p</a>
<br>
<p>Here is how to select the installation directory (--prefix):
<br>
<p><a href="http://www.open-mpi.org/faq/?category=building#easy-build">http://www.open-mpi.org/faq/?category=building#easy-build</a>
<br>
<p>Here is how to select the compilers (gcc,g++, and gfortran are fine):
<br>
<p><a href="http://www.open-mpi.org/faq/?category=building#build-compilers">http://www.open-mpi.org/faq/?category=building#build-compilers</a>
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
<p>On 02/28/2014 12:36 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Almost certainly, the redhat package wasn't built with matching 
</span><br>
<span class="quotelev1">&gt; infiniband support and so we aren't picking it up. I'd suggest 
</span><br>
<span class="quotelev1">&gt; downloading the latest 1.7.4 or 1.7.5 nightly tarball, or even the 
</span><br>
<span class="quotelev1">&gt; latest 1.6 tarball if you want the stable release, and build it 
</span><br>
<span class="quotelev1">&gt; yourself so you *know* it was built for your system.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 28, 2014, at 9:20 AM, Beichuan Yan &lt;beichuan.yan_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:beichuan.yan_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi there,
</span><br>
<span class="quotelev2">&gt;&gt; I am running jobs on clusters with Infiniband connection. They 
</span><br>
<span class="quotelev2">&gt;&gt; installed OpenMPI v1.5.4 via REDHAT 6 yum package). My problem is 
</span><br>
<span class="quotelev2">&gt;&gt; that although my jobs gets queued and started by PBS PRO quickly, 
</span><br>
<span class="quotelev2">&gt;&gt; most of the time they don't really run (occasionally they really run) 
</span><br>
<span class="quotelev2">&gt;&gt; and give error info like this (even though there are a lot of CPU/IB 
</span><br>
<span class="quotelev2">&gt;&gt; resource
</span><br>
<span class="quotelev2">&gt;&gt; available):
</span><br>
<span class="quotelev2">&gt;&gt; [r2i6n7][[25564,1],0][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_com
</span><br>
<span class="quotelev2">&gt;&gt; plete_connect]
</span><br>
<span class="quotelev2">&gt;&gt; connect() to 192.168.159.156 failed: Connection refused (111) And 
</span><br>
<span class="quotelev2">&gt;&gt; even though when a job gets started and runs well, it prompts this
</span><br>
<span class="quotelev2">&gt;&gt; error:
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt; WARNING: There was an error initializing an OpenFabrics device.
</span><br>
<span class="quotelev2">&gt;&gt; Local host: r1i2n6
</span><br>
<span class="quotelev2">&gt;&gt; Local device: mlx4_0
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; ----- 1. Here is the info from one of the compute nodes:
</span><br>
<span class="quotelev2">&gt;&gt; -bash-4.1$ /sbin/ifconfig
</span><br>
<span class="quotelev2">&gt;&gt; eth0 Link encap:Ethernet HWaddr 8C:89:A5:E3:D2:96 inet 
</span><br>
<span class="quotelev2">&gt;&gt; addr:192.168.159.205 Bcast:192.168.159.255 Mask:255.255.255.0
</span><br>
<span class="quotelev2">&gt;&gt; inet6 addr: fe80::8e89:a5ff:fee3:d296/64 Scope:Link UP BROADCAST 
</span><br>
<span class="quotelev2">&gt;&gt; RUNNING MULTICAST MTU:1500 Metric:1 RX packets:48879864 errors:0 
</span><br>
<span class="quotelev2">&gt;&gt; dropped:0 overruns:17 frame:0 TX packets:39286060 errors:0 dropped:0 
</span><br>
<span class="quotelev2">&gt;&gt; overruns:0 carrier:0
</span><br>
<span class="quotelev2">&gt;&gt; collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev2">&gt;&gt; RX bytes:54771093645 (51.0 GiB) TX bytes:37512462596 (34.9 GiB)
</span><br>
<span class="quotelev2">&gt;&gt; Memory:dfc00000-dfc20000
</span><br>
<span class="quotelev2">&gt;&gt; Ifconfig uses the ioctl access method to get the full address 
</span><br>
<span class="quotelev2">&gt;&gt; information, which limits hardware addresses to 8 bytes.
</span><br>
<span class="quotelev2">&gt;&gt; Because Infiniband address has 20 bytes, only the first 8 bytes are 
</span><br>
<span class="quotelev2">&gt;&gt; displayed correctly.
</span><br>
<span class="quotelev2">&gt;&gt; Ifconfig is obsolete! For replacement check ip.
</span><br>
<span class="quotelev2">&gt;&gt; ib0 Link encap:InfiniBand HWaddr
</span><br>
<span class="quotelev2">&gt;&gt; 80:00:00:48:FE:C0:00:00:00:00:00:00:00:00:00:00:00:00:00:00
</span><br>
<span class="quotelev2">&gt;&gt; inet addr:10.148.0.114 Bcast:10.148.255.255 Mask:255.255.0.0
</span><br>
<span class="quotelev2">&gt;&gt; inet6 addr: fe80::202:c903:fb:3489/64 Scope:Link UP BROADCAST RUNNING 
</span><br>
<span class="quotelev2">&gt;&gt; MULTICAST MTU:65520 Metric:1 RX packets:43807414 errors:0 dropped:0 
</span><br>
<span class="quotelev2">&gt;&gt; overruns:0 frame:0 TX packets:10534050 errors:0 dropped:24 overruns:0 
</span><br>
<span class="quotelev2">&gt;&gt; carrier:0
</span><br>
<span class="quotelev2">&gt;&gt; collisions:0 txqueuelen:256
</span><br>
<span class="quotelev2">&gt;&gt; RX bytes:47824448125 (44.5 GiB) TX bytes:44764010514 (41.6 GiB) lo 
</span><br>
<span class="quotelev2">&gt;&gt; Link encap:Local Loopback inet addr:127.0.0.1 Mask:255.0.0.0
</span><br>
<span class="quotelev2">&gt;&gt; inet6 addr: ::1/128 Scope:Host
</span><br>
<span class="quotelev2">&gt;&gt; UP LOOPBACK RUNNING MTU:16436 Metric:1 RX packets:17292 errors:0 
</span><br>
<span class="quotelev2">&gt;&gt; dropped:0 overruns:0 frame:0 TX packets:17292 errors:0 dropped:0 
</span><br>
<span class="quotelev2">&gt;&gt; overruns:0 carrier:0
</span><br>
<span class="quotelev2">&gt;&gt; collisions:0 txqueuelen:0
</span><br>
<span class="quotelev2">&gt;&gt; RX bytes:1492453 (1.4 MiB) TX bytes:1492453 (1.4 MiB) -bash-4.1$ 
</span><br>
<span class="quotelev2">&gt;&gt; chkconfig --list iptables iptables 0:off 1:off 2:on 3:on 4:on 5:on 
</span><br>
<span class="quotelev2">&gt;&gt; 6:off 2. I tried various parameters below but none of them can assure 
</span><br>
<span class="quotelev2">&gt;&gt; my jobs get initialized and run:
</span><br>
<span class="quotelev2">&gt;&gt; #TCP=&quot;--mca btl ^tcp&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #TCP=&quot;--mca btl self,openib&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #TCP=&quot;--mca btl_tcp_if_exclude lo&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #TCP=&quot;--mca btl_tcp_if_include eth0&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #TCP=&quot;--mca btl_tcp_if_include eth0, ib0&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #TCP=&quot;--mca btl_tcp_if_exclude 192.168.0.0/24,127.0.0.1/8 --mca 
</span><br>
<span class="quotelev2">&gt;&gt; oob_tcp_if_exclude 192.168.0.0/24,127.0.0.1/8&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #TCP=&quot;--mca btl_tcp_if_include 10.148.0.0/16&quot;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun $TCP -hostfile $PBS_NODEFILE -np 8 ./paraEllip3d input.txt 3. 
</span><br>
<span class="quotelev2">&gt;&gt; Then I turned to Intel MPI, which surprisingly starts and runs my job 
</span><br>
<span class="quotelev2">&gt;&gt; correctly each time (though it is a little slower than OpenMPI, maybe 
</span><br>
<span class="quotelev2">&gt;&gt; 15% slower, but it works each time).
</span><br>
<span class="quotelev2">&gt;&gt; Can you please advise? Many thanks.
</span><br>
<span class="quotelev2">&gt;&gt; Sincerely,
</span><br>
<span class="quotelev2">&gt;&gt; Beichuan Yan
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23736.php">Ralph Castain: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<li><strong>Previous message:</strong> <a href="23734.php">Brice Goglin: "Re: [OMPI users] Heterogeneous cluster problem - mixing AMD and Intel nodes"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/02/23726.php">Gus Correa: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23736.php">Ralph Castain: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<li><strong>Reply:</strong> <a href="23736.php">Ralph Castain: "Re: [OMPI users] OpenMPI job initializing problem"</a>
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
