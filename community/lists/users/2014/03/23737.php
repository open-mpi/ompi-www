<?
$subject_val = "Re: [OMPI users] OpenMPI job initializing problem";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar  2 12:44:11 2014" -->
<!-- isoreceived="20140302174411" -->
<!-- sent="Sun, 2 Mar 2014 17:44:09 +0000" -->
<!-- isosent="20140302174409" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI job initializing problem" -->
<!-- id="5E2AB899-3FD9-4FF6-8217-7907E1A8CC89_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="A252C5C3-C117-4E1F-9A41-122C8ECAEACC_at_open-mpi.org" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-02 12:44:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23738.php">Gustavo Correa: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<li><strong>Previous message:</strong> <a href="23736.php">Ralph Castain: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<li><strong>In reply to:</strong> <a href="23736.php">Ralph Castain: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23738.php">Gustavo Correa: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<li><strong>Reply:</strong> <a href="23738.php">Gustavo Correa: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW: /usr/include/infiniband/verbs.h is the normal location for verbs.h.  Don't add --with-verbs=/usr/include/infinband; it won't work.
<br>
<p>Please send all the information listed here and we can have a look at your logs:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p><p>On Mar 2, 2014, at 7:16 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; It should have been looking in the same place - check to see where you installed the inifiniband support. Is &quot;verbs.h&quot; under your /usr/include?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In looking at the code, the 1.6 series searched for verbs.h in /usr/include/infiniband. The 1.7 series also does (though it doesn't look quite right to me), but it wouldn't hurt to add it yourself
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --with-verbs=/usr/include/infiniband --with-verbs-libdir=/usr/lib64/infiniband
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; or something like that
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 1, 2014, at 11:56 PM, Beichuan Yan &lt;beichuan.yan_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph and Gus,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1. Thank you for your suggestion. I built Open MPI 1.6.5 with the following command: 
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --prefix=/work4/projects/openmpi/openmpi-1.6.5-gcc-compilers-4.7.3 --with-tm=/opt/pbs/default --with-openib=  --with-openib-libdir=/usr/lib64
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In my job script, I need to specify the IB subnet like this:
</span><br>
<span class="quotelev2">&gt;&gt; TCP=&quot;--mca btl_tcp_if_include 10.148.0.0/16&quot;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun $TCP -np 64 -hostfile $PBS_NODEFILE ./paraEllip3d input.txt
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Then my job can get initialized and run correctly each time!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2. However, to build Open MPI 1.7.4 with another command (in order to test/compare shared-memory performance of Open MPI):
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --prefix=/work4/projects/openmpi/openmpi-1.7.4-gcc-compilers-4.7.3 --with-tm=/opt/pbs/default --with-verbs=  --with-verbs-libdir=/usr/lib64
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It gets error as follows:
</span><br>
<span class="quotelev2">&gt;&gt; ============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; == Modular Component Architecture (MCA) setup
</span><br>
<span class="quotelev2">&gt;&gt; ============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; checking for subdir args...  '--prefix=/work4/projects/openmpi/openmpi-1.7.4-gcc-compilers-4.7.3' '--with-tm=/opt/pbs/default' '--with-verbs=' '--with-verbs-libdir=/usr/lib64' 'CC=gcc' 'CXX=g++'
</span><br>
<span class="quotelev2">&gt;&gt; checking --with-verbs value... simple ok (unspecified)
</span><br>
<span class="quotelev2">&gt;&gt; checking --with-verbs-libdir value... sanity check ok (/usr/lib64)
</span><br>
<span class="quotelev2">&gt;&gt; configure: WARNING: Could not find verbs.h in the usual locations under
</span><br>
<span class="quotelev2">&gt;&gt; configure: error: Cannot continue
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Our system is Red Hat 6.4. Do we need to install more packages of Infiniband? Can you please advise?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Beichuan Yan
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Friday, February 28, 2014 15:59
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] OpenMPI job initializing problem
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; HI Beichuan
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; To add to what Ralph said,
</span><br>
<span class="quotelev2">&gt;&gt; the RHEL OpenMPI package probably wasn't built with with PBS Pro support either.
</span><br>
<span class="quotelev2">&gt;&gt; Besides, OMPI 1.5.4 (RHEL version) is old.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; **
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You will save yourself time and grief if you read the installation FAQs, before you install from the source tarball:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=building">http://www.open-mpi.org/faq/?category=building</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; However, as Ralph said, that is your best bet, and it is quite easy to get right.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; See this FAQ on how to build with PBS Pro support:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=building#build-rte-tm">http://www.open-mpi.org/faq/?category=building#build-rte-tm</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; And this one on how to build with Infiniband support:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=building#build-p2p">http://www.open-mpi.org/faq/?category=building#build-p2p</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Here is how to select the installation directory (--prefix):
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=building#easy-build">http://www.open-mpi.org/faq/?category=building#easy-build</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Here is how to select the compilers (gcc,g++, and gfortran are fine):
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=building#build-compilers">http://www.open-mpi.org/faq/?category=building#build-compilers</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I hope this helps,
</span><br>
<span class="quotelev2">&gt;&gt; Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 02/28/2014 12:36 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Almost certainly, the redhat package wasn't built with matching 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; infiniband support and so we aren't picking it up. I'd suggest 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; downloading the latest 1.7.4 or 1.7.5 nightly tarball, or even the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; latest 1.6 tarball if you want the stable release, and build it 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; yourself so you *know* it was built for your system.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Feb 28, 2014, at 9:20 AM, Beichuan Yan &lt;beichuan.yan_at_[hidden] 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;mailto:beichuan.yan_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi there,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am running jobs on clusters with Infiniband connection. They 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; installed OpenMPI v1.5.4 via REDHAT 6 yum package). My problem is 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that although my jobs gets queued and started by PBS PRO quickly, 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; most of the time they don't really run (occasionally they really run) 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and give error info like this (even though there are a lot of CPU/IB 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; resource
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [r2i6n7][[25564,1],0][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_com
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; plete_connect]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; connect() to 192.168.159.156 failed: Connection refused (111) And 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; even though when a job gets started and runs well, it prompts this
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; error:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -----
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; WARNING: There was an error initializing an OpenFabrics device.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Local host: r1i2n6
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Local device: mlx4_0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ----- 1. Here is the info from one of the compute nodes:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -bash-4.1$ /sbin/ifconfig
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; eth0 Link encap:Ethernet HWaddr 8C:89:A5:E3:D2:96 inet 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; addr:192.168.159.205 Bcast:192.168.159.255 Mask:255.255.255.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; inet6 addr: fe80::8e89:a5ff:fee3:d296/64 Scope:Link UP BROADCAST 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; RUNNING MULTICAST MTU:1500 Metric:1 RX packets:48879864 errors:0 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; dropped:0 overruns:17 frame:0 TX packets:39286060 errors:0 dropped:0 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; overruns:0 carrier:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; RX bytes:54771093645 (51.0 GiB) TX bytes:37512462596 (34.9 GiB)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Memory:dfc00000-dfc20000
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ifconfig uses the ioctl access method to get the full address 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; information, which limits hardware addresses to 8 bytes.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Because Infiniband address has 20 bytes, only the first 8 bytes are 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; displayed correctly.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ifconfig is obsolete! For replacement check ip.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ib0 Link encap:InfiniBand HWaddr
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 80:00:00:48:FE:C0:00:00:00:00:00:00:00:00:00:00:00:00:00:00
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; inet addr:10.148.0.114 Bcast:10.148.255.255 Mask:255.255.0.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; inet6 addr: fe80::202:c903:fb:3489/64 Scope:Link UP BROADCAST RUNNING 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MULTICAST MTU:65520 Metric:1 RX packets:43807414 errors:0 dropped:0 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; overruns:0 frame:0 TX packets:10534050 errors:0 dropped:24 overruns:0 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; carrier:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; collisions:0 txqueuelen:256
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; RX bytes:47824448125 (44.5 GiB) TX bytes:44764010514 (41.6 GiB) lo 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link encap:Local Loopback inet addr:127.0.0.1 Mask:255.0.0.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; inet6 addr: ::1/128 Scope:Host
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; UP LOOPBACK RUNNING MTU:16436 Metric:1 RX packets:17292 errors:0 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; dropped:0 overruns:0 frame:0 TX packets:17292 errors:0 dropped:0 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; overruns:0 carrier:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; collisions:0 txqueuelen:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; RX bytes:1492453 (1.4 MiB) TX bytes:1492453 (1.4 MiB) -bash-4.1$ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; chkconfig --list iptables iptables 0:off 1:off 2:on 3:on 4:on 5:on 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 6:off 2. I tried various parameters below but none of them can assure 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; my jobs get initialized and run:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #TCP=&quot;--mca btl ^tcp&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #TCP=&quot;--mca btl self,openib&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #TCP=&quot;--mca btl_tcp_if_exclude lo&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #TCP=&quot;--mca btl_tcp_if_include eth0&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #TCP=&quot;--mca btl_tcp_if_include eth0, ib0&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #TCP=&quot;--mca btl_tcp_if_exclude 192.168.0.0/24,127.0.0.1/8 --mca 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; oob_tcp_if_exclude 192.168.0.0/24,127.0.0.1/8&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #TCP=&quot;--mca btl_tcp_if_include 10.148.0.0/16&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun $TCP -hostfile $PBS_NODEFILE -np 8 ./paraEllip3d input.txt 3. 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Then I turned to Intel MPI, which surprisingly starts and runs my job 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; correctly each time (though it is a little slower than OpenMPI, maybe 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 15% slower, but it works each time).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Can you please advise? Many thanks.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sincerely,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Beichuan Yan
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23738.php">Gustavo Correa: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<li><strong>Previous message:</strong> <a href="23736.php">Ralph Castain: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<li><strong>In reply to:</strong> <a href="23736.php">Ralph Castain: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23738.php">Gustavo Correa: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<li><strong>Reply:</strong> <a href="23738.php">Gustavo Correa: "Re: [OMPI users] OpenMPI job initializing problem"</a>
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
