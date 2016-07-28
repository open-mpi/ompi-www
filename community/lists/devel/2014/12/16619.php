<?
$subject_val = "Re: [OMPI devel] OMPI devel] 1.8.4rc Status";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 16 20:35:29 2014" -->
<!-- isoreceived="20141217013529" -->
<!-- sent="Wed, 17 Dec 2014 10:35:16 +0900" -->
<!-- isosent="20141217013516" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI devel] 1.8.4rc Status" -->
<!-- id="tk7uf9cxkmpws5sucvgcbfsx.1418780116942_at_email.android.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="[OMPI devel] OMPI devel] 1.8.4rc Status" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OMPI devel] 1.8.4rc Status<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-16 20:35:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16620.php">Paul Hargrove: "Re: [OMPI devel] OMPI devel] 1.8.4rc Status"</a>
<li><strong>Previous message:</strong> <a href="16618.php">Joshua Ladd: "Re: [OMPI devel] [OMPI users] Warning about not enough registerable memory on SL6.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16620.php">Paul Hargrove: "Re: [OMPI devel] OMPI devel] 1.8.4rc Status"</a>
<li><strong>Reply:</strong> <a href="16620.php">Paul Hargrove: "Re: [OMPI devel] OMPI devel] 1.8.4rc Status"</a>
<li><strong>Maybe reply:</strong> <a href="16662.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] 1.8.4rc Status"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Paul,
<br>
<p>Are you invoking mpirun on pcp-j-20 ?
<br>
If yes, what does
<br>
getent hosts pcp-j-20
<br>
says ?
<br>
<p>BTW, did you try without -m64 ?
<br>
<p>Does the following work
<br>
ping/ssh 172.18.0.120
<br>
<p>Honestly, this output makes very little sense to me, so i am asking way too much info hoping i can reproduce this issue or get a hint on what can possibly goes wrong.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;Gilles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I am running mpirun on a host that ALSO will run one of the application processes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Requested ifconfig and netstat outputs appear below.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;-Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;[phargrov_at_pcp-j-20 ~]$ ifconfig -a
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;lo0: flags=2001000849&lt;UP,LOOPBACK,RUNNING,MULTICAST,IPv4,VIRTUAL&gt; mtu 8232 index 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; inet 127.0.0.1 netmask ff000000&#194;&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;bge0: flags=1004843&lt;UP,BROADCAST,RUNNING,MULTICAST,DHCP,IPv4&gt; mtu 1500 index 2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; inet 172.16.0.120 netmask ffff0000 broadcast 172.16.255.255
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;pFFFF.ibp0: flags=1001000843&lt;UP,BROADCAST,RUNNING,MULTICAST,IPv4,FIXEDMTU&gt; mtu 2044 index 3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; inet 172.18.0.120 netmask ffff0000 broadcast 172.18.255.255
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;lo0: flags=2002000849&lt;UP,LOOPBACK,RUNNING,MULTICAST,IPv6,VIRTUAL&gt; mtu 8252 index 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; inet6 ::1/128&#194;&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;bge0: flags=20002004841&lt;UP,RUNNING,MULTICAST,DHCP,IPv6&gt; mtu 1500 index 2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; inet6 fe80::250:45ff:fe5c:2b0/10&#194;&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;[phargrov_at_pcp-j-20 ~]$ netstat -nr
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Routing Table: IPv4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160; Destination &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; Gateway &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; Flags &#194;&#160;Ref &#194;&#160; &#194;&#160; Use &#194;&#160; &#194;&#160; Interface&#194;&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;-------------------- -------------------- ----- ----- ---------- ---------&#194;&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;default &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;172.16.254.1 &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; UG &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;2 &#194;&#160; &#194;&#160; 158463 bge0 &#194;&#160; &#194;&#160; &#194;&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;127.0.0.1 &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;127.0.0.1 &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;UH &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;5 &#194;&#160; &#194;&#160; 398913 lo0 &#194;&#160; &#194;&#160; &#194;&#160;&#194;&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;172.16.0.0 &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; 172.16.0.120 &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; U &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; 4 &#194;&#160;135241319 bge0 &#194;&#160; &#194;&#160; &#194;&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;172.18.0.0 &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; 172.18.0.120 &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; U &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; 3 &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; 26 pFFFF.ibp0&#194;&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Routing Table: IPv6
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160; Destination/Mask &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;Gateway &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; Flags Ref &#194;&#160; Use &#194;&#160; &#194;&#160;If &#194;&#160;&#194;&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;--------------------------- --------------------------- ----- --- ------- -----&#194;&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;::1 &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; ::1 &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; UH &#194;&#160; &#194;&#160; &#194;&#160;2 &#194;&#160; &#194;&#160; &#194;&#160; 0 lo0 &#194;&#160;&#194;&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;fe80::/10 &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; fe80::250:45ff:fe5c:2b0 &#194;&#160; &#194;&#160; U &#194;&#160; &#194;&#160; &#194;&#160; 2 &#194;&#160; &#194;&#160; &#194;&#160; 0 bge0&#194;&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Tue, Dec 16, 2014 at 2:55 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Paul,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;could you please send the output of
</span><br>
<span class="quotelev1">&gt;ifconfig -a
</span><br>
<span class="quotelev1">&gt;netstat -nr
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;on the three hosts you are using
</span><br>
<span class="quotelev1">&gt;(i assume you are still invoking mpirun from one node, and tasks are running on two other nodes)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On 2014/12/16 16:00, Paul Hargrove wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Gilles, I looked again carefully and I am *NOT* finding -D_REENTRANT passed to most compilations. It appears to be used for building libevent and vt, but nothing else. The output from configure contains checking if more special flags are required for pthreads... -D_REENTRANT only in the libevent and vt sub-configure portions. When configured for gcc on Solaris-11 I see the following in configure checking for C optimization flags... -m64 -D_REENTRANT -g -finline-functions -fno-strict-aliasing but with CC=cc the equivalent line is checking for C optimization flags... -m64 -g In both cases the &quot;-m64&quot; is from the CFLAGS I have passed to configure. However, when I use CFLAGS=&quot;-m64 -D_REENTRANT&quot; the problem DOES NOT go away. I see [pcp-j-20:24740] mca_oob_tcp_accept: accept() failed: Error 0 (11). ------------------------------------------------------------ A process or daemon was unable to complete a TCP connection to another process: Local host: pcp-j-20 Remote host: 172.18.0.120 This is usually caused by a firewall on the remote host. Please check that any firewall (e.g., iptables) has been disabled and try again. ------------------------------------------------------------ which is at least appears to have a non-zero errno. A quick grep through /usr/include/sys/errno shows 11 is EAGAIN. With the oob.patch you provided the failed accept goes away, BUT the connection still fails: ------------------------------------------------------------ A process or daemon was unable to complete a TCP connection to another process: Local host: pcp-j-20 Remote host: 172.18.0.120 This is usually caused by a firewall on the remote host. Please check that any firewall (e.g., iptables) has been disabled and try again. ------------------------------------------------------------ Use of &quot;-mca oob_tcp_if_include bge0&quot; to use a single interface did not fix this. -Paul On Mon, Dec 15, 2014 at 7:18 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote: 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Gilles, I am NOT seeing the problem with gcc. It is only occurring with the Studio compilers. As I've already reported, I have tried adding either &quot;-mt&quot; or &quot;-mt=yes&quot; to both LDFLAGS and --with-wrapper-ldflags. The &quot;cc&quot; manpage (on the Solaris-10 system I can get to right now) says: -mt Compile and link for multithreaded code. This option passes -D_REENTRANT to the preprocessor and passes -lthread in the correct order to ld. The -mt option is required if the application or libraries are multithreaded. To ensure proper library linking order, you must use this option, rather than -lthread, to link with lib- thread. If you are using POSIX threads, you must link with the options -mt -lpthread. The -mt option is necessary because libC and libCrun need libthread for a mul- tithreaded application. If you compile and link in separate steps and you com- pile with -mt, you might get unexpected results. If you compile one translation unit with -mt, compile all units of the program with -mt. I cannot connect to my Solaris-11 system right now, but I recall the text to be quite similar. -Paul On Mon, Dec 15, 2014 at 7:12 PM, Gilles Gouaillardet &lt; gilles.gouaillardet_at_[hidden]&gt; wrote: 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Paul, did you manually set -mt ? if i remember correctly, solaris 11 (at least with gcc compilers) do not need any flags (except the -D_REENTRANT that is added automatically) Cheers, Gilles On 2014/12/16 12:10, Paul Hargrove wrote: Gilles, I will try the patch when I can. However, our network is undergoing network maintenance right now, leaving me unable to reach the necessary hosts. As for -D_REENTRANT, I had already reported having verified in the &quot;make&quot; output that it had been added automatically. Additionally, the docs say that &quot;-mt&quot; *also* passes -D_REENTRANT to the preprocessor. -Paul On Mon, Dec 15, 2014 at 6:07 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote: Paul, could you please make sure configure added &quot;-D_REENTRANT&quot; to the CFLAGS ? /* otherwise, errno is a global variable instead of a per thread variable, which can explains some weird behaviour. note this should have been already fixed */ assuming -D_REENTRANT is set, could you please give the attached patch a try ? i suspect the CLOSE_THE_SOCKET macro resets errno, and hence the confusing error message e.g. failed: Error 0 (0) FWIW, master is also affected. Cheers, Gilles On 2014/12/16 10:47, Paul Hargrove wrote: I have tried with a oob_tcp_if_include setting so that there is now only 1 interface. Even with just one interface and -mt=yes in both LDFLAGS and wrapper-ldflags I *still* getting messages like [pcp-j-20:11470] mca_oob_tcp_accept: accept() failed: Error 0 (0). ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;------------------------------ A process or daemon was unable to complete a TCP connection to another process: Local host: pcp-j-20 Remote host: 172.16.0.120 This is usually caused by a firewall on the remote host. Please check that any firewall (e.g., iptables) has been disabled and try again. ------------------------------ ------------------------------ I am getting less certain that my speculation about thread-safe libs is correct. -Paul On Mon, Dec 15, 2014 at 1:24 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; &lt;phhargrove_at_[hidden]&gt; &lt;phhargrove_at_[hidden]&gt; &lt;phhargrove_at_[hidden]&gt; wrote: A little more reading finds that... Docs says that one needs &quot;-mt&quot; without the &quot;=yes&quot;. That will work for both old and new compilers, where &quot;-mt=yes&quot; chokes older ones. Also, man pages say &quot;-mt&quot; must come before &quot;-lpthread&quot; in the link command. -Paul On Mon, Dec 15, 2014 at 12:52 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; &lt;phhargrove_at_[hidden]&gt; &lt;phhargrove_at_[hidden]&gt; &lt;phhargrove_at_[hidden]&gt; wrote: On Mon, Dec 15, 2014 at 5:35 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; &lt;rhc_at_[hidden]&gt; &lt;rhc_at_[hidden]&gt; &lt;rhc_at_[hidden]&gt; wrote: 7. Linkage issue on Solaris-11 reported by Paul Hargrove. Missing the multi-threaded C libraries, apparently need &quot;-mt=yes&quot; in both compile and link. Need someone to investigate. The lack of multi-thread libraries is my SPECULATION. The fact that configuring with LDFLAGS=-mt=yes did not help may or may not prove anything. I didn't see them in &quot;mpicc -show&quot; and so maybe they needed to be in wrapper-ldflags instead. My time this week is quite limited, but I can &quot;fire an forget&quot; tests of any tarballs you provide. -Paul -- Paul H. Hargrove PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Computer Languages &amp; Systems Software (CLaSS) Group Computer Science Department Tel: +1-510-495-2352 Lawrence Berkeley National Laboratory Fax: +1-510-486-6900 -- Paul H. Hargrove PHHargrove_at_[hidden] Computer Languages &amp; Systems Software (CLaSS) Group Computer Science Department Tel: +1-510-495-2352 Lawrence Berkeley National Laboratory Fax: +1-510-486-6900 _______________________________________________ devel mailing listdevel_at_[hidden] Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16607.php">http://www.open-mpi.org/community/lists/devel/2014/12/16607.php</a> _______________________________________________ devel mailing listdevel_at_[hidden] Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Link to this post:<a href="http://www.open-mpi.org/community/lists/devel/2014/12/16608.php">http://www.open-mpi.org/community/lists/devel/2014/12/16608.php</a> _______________________________________________ devel mailing listdevel_at_[hidden] Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16610.php">http://www.open-mpi.org/community/lists/devel/2014/12/16610.php</a> _______________________________________________ devel mailing list devel_at_[hidden] Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16611.php">http://www.open-mpi.org/community/lists/devel/2014/12/16611.php</a> 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;-- Paul H. Hargrove PHHargrove_at_[hidden] Computer Languages &amp; Systems Software (CLaSS) Group Computer Science Department Tel: +1-510-495-2352 Lawrence Berkeley National Laboratory Fax: +1-510-486-6900 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________ devel mailing list devel_at_[hidden] Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16613.php">http://www.open-mpi.org/community/lists/devel/2014/12/16613.php</a> 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16615.php">http://www.open-mpi.org/community/lists/devel/2014/12/16615.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;-- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Paul H. Hargrove &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Computer Science Department &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Lawrence Berkeley National Laboratory &#194;&#160; &#194;&#160; Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16619/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16620.php">Paul Hargrove: "Re: [OMPI devel] OMPI devel] 1.8.4rc Status"</a>
<li><strong>Previous message:</strong> <a href="16618.php">Joshua Ladd: "Re: [OMPI devel] [OMPI users] Warning about not enough registerable memory on SL6.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16620.php">Paul Hargrove: "Re: [OMPI devel] OMPI devel] 1.8.4rc Status"</a>
<li><strong>Reply:</strong> <a href="16620.php">Paul Hargrove: "Re: [OMPI devel] OMPI devel] 1.8.4rc Status"</a>
<li><strong>Maybe reply:</strong> <a href="16662.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] 1.8.4rc Status"</a>
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
