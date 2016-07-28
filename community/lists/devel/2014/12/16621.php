<?
$subject_val = "Re: [OMPI devel] OMPI devel] 1.8.4rc Status";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 16 21:25:14 2014" -->
<!-- isoreceived="20141217022514" -->
<!-- sent="Wed, 17 Dec 2014 11:25:13 +0900" -->
<!-- isosent="20141217022513" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI devel] 1.8.4rc Status" -->
<!-- id="5490E989.9010509_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAvDA17qehRLSE_EN3ZPF6yHWbs99MyB7m-f6cpMD3t0fBEX1g_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-12-16 21:25:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16622.php">Paul Hargrove: "Re: [OMPI devel] OMPI devel] 1.8.4rc Status"</a>
<li><strong>Previous message:</strong> <a href="16620.php">Paul Hargrove: "Re: [OMPI devel] OMPI devel] 1.8.4rc Status"</a>
<li><strong>In reply to:</strong> <a href="16620.php">Paul Hargrove: "Re: [OMPI devel] OMPI devel] 1.8.4rc Status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16622.php">Paul Hargrove: "Re: [OMPI devel] OMPI devel] 1.8.4rc Status"</a>
<li><strong>Reply:</strong> <a href="16622.php">Paul Hargrove: "Re: [OMPI devel] OMPI devel] 1.8.4rc Status"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Paul,
<br>
<p>if 1.8.3 with -m64 and the same compilers runs fine, then please do not
<br>
bother running 1.8.4rc4 without -m64.
<br>
/* i understand you are busy and i hardly believe -m64 is the root cause */
<br>
<p>a regression i can think of involves the flags we use for pthreads :
<br>
for bad reasons, we initially tested the following flags on solaris :
<br>
-pthread
<br>
-pthreads
<br>
-mt
<br>
<p>with solarisstudio 12.4, -mt was chosen
<br>
<p>1.8.4rc4 has a bug (fixed in the v1.8 git): -D_REENTRANT is not
<br>
automatically added, so you have to do it manually.
<br>
i just figured out that -mt is unlikely automatically.
<br>
do we need this and where ?
<br>
CFLAGS ? (or is -D_REENTRANT enough ?)
<br>
LDFLAGS ? (that might be solaris and/or solarisstudio (12.4) specific
<br>
and i simply ignore it)
<br>
<p>Bottom line, i do invite you to test 1.8.4rc4 again and with
<br>
CFLAGS=&quot;-mt&quot;
<br>
or
<br>
CFLAGS=&quot;-mt -m64&quot;
<br>
if you previously tested 1.8.3 with -m64
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p><p>On 2014/12/17 11:05, Paul Hargrove wrote:
<br>
<span class="quotelev1">&gt; Gilles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; First, please note that prior tests of 1.8.3 ran with no problems on these
</span><br>
<span class="quotelev1">&gt; hosts.
</span><br>
<span class="quotelev1">&gt; So, I *think* this problem is a regression.
</span><br>
<span class="quotelev1">&gt; However, I am not 100% certain that this *exact* configuration was tested.
</span><br>
<span class="quotelev1">&gt; So, I am RE-running a test of 1.8.3 now to be absolutely sure if this is a
</span><br>
<span class="quotelev1">&gt; regression.
</span><br>
<span class="quotelev1">&gt; I will report the outcome when I can.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have limited time to run the tests you are asking for.  I will do my
</span><br>
<span class="quotelev1">&gt; best, but am concerned that I won't be responsive enough and may hold up
</span><br>
<span class="quotelev1">&gt; the release.  I fully understand why you ask multiple questions in one
</span><br>
<span class="quotelev1">&gt; email to keep things moving.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am running mpirun on pcp-j-20 and &quot;getent hosts pcp-j-20&quot; run there yields
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ getent hosts pcp-j-20
</span><br>
<span class="quotelev1">&gt; 127.0.0.1       pcp-j-20 pcp-j-20.local localhost loghost
</span><br>
<span class="quotelev1">&gt; 172.16.0.120    pcp-j-20 pcp-j-20.local localhost loghost
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In case it matters: there is an entry for 172.18.0.0.120 in /etc/hosts as
</span><br>
<span class="quotelev1">&gt; pcp-j-20-ib.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I will run a test tonight to determine if the same issue is present without
</span><br>
<span class="quotelev1">&gt; &quot;-m64&quot;.
</span><br>
<span class="quotelev1">&gt; I will report the outcome when I can.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, I can ping and ssh to &quot;pcp-j-{19,20}&quot; and &quot;172.{16,18}.0.{119,120}&quot;.
</span><br>
<span class="quotelev1">&gt; I see the following if run on either pcp-j-19 or pcp-j-20:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ for x in {pcp-j-,172.{16,18}.0.1}{19,20}; do ssh $x echo OK connecting to
</span><br>
<span class="quotelev1">&gt; $x; done
</span><br>
<span class="quotelev1">&gt; OK connecting to pcp-j-19
</span><br>
<span class="quotelev1">&gt; OK connecting to pcp-j-20
</span><br>
<span class="quotelev1">&gt; OK connecting to 172.16.0.119
</span><br>
<span class="quotelev1">&gt; OK connecting to 172.16.0.120
</span><br>
<span class="quotelev1">&gt; OK connecting to 172.18.0.119
</span><br>
<span class="quotelev1">&gt; OK connecting to 172.18.0.120
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I will report on the 1.8.3 and the non-m64 runs when they are done.
</span><br>
<span class="quotelev1">&gt; Meanwhile, if you have other things you want run let me know.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Dec 16, 2014 at 5:35 PM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev1">&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Thanks Paul,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Are you invoking mpirun on pcp-j-20 ?
</span><br>
<span class="quotelev2">&gt;&gt; If yes, what does
</span><br>
<span class="quotelev2">&gt;&gt; getent hosts pcp-j-20
</span><br>
<span class="quotelev2">&gt;&gt; says ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; BTW, did you try without -m64 ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Does the following work
</span><br>
<span class="quotelev2">&gt;&gt; ping/ssh 172.18.0.120
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Honestly, this output makes very little sense to me, so i am asking way
</span><br>
<span class="quotelev2">&gt;&gt; too much info hoping i can reproduce this issue or get a hint on what can
</span><br>
<span class="quotelev2">&gt;&gt; possibly goes wrong.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Gilles,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am running mpirun on a host that ALSO will run one of the application
</span><br>
<span class="quotelev2">&gt;&gt; processes.
</span><br>
<span class="quotelev2">&gt;&gt; Requested ifconfig and netstat outputs appear below.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [phargrov_at_pcp-j-20 ~]$ ifconfig -a
</span><br>
<span class="quotelev2">&gt;&gt; lo0: flags=2001000849&lt;UP,LOOPBACK,RUNNING,MULTICAST,IPv4,VIRTUAL&gt; mtu 8232
</span><br>
<span class="quotelev2">&gt;&gt; index 1
</span><br>
<span class="quotelev2">&gt;&gt;         inet 127.0.0.1 netmask ff000000
</span><br>
<span class="quotelev2">&gt;&gt; bge0: flags=1004843&lt;UP,BROADCAST,RUNNING,MULTICAST,DHCP,IPv4&gt; mtu 1500
</span><br>
<span class="quotelev2">&gt;&gt; index 2
</span><br>
<span class="quotelev2">&gt;&gt;         inet 172.16.0.120 netmask ffff0000 broadcast 172.16.255.255
</span><br>
<span class="quotelev2">&gt;&gt; pFFFF.ibp0: flags=1001000843&lt;UP,BROADCAST,RUNNING,MULTICAST,IPv4,FIXEDMTU&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mtu 2044 index 3
</span><br>
<span class="quotelev2">&gt;&gt;         inet 172.18.0.120 netmask ffff0000 broadcast 172.18.255.255
</span><br>
<span class="quotelev2">&gt;&gt; lo0: flags=2002000849&lt;UP,LOOPBACK,RUNNING,MULTICAST,IPv6,VIRTUAL&gt; mtu 8252
</span><br>
<span class="quotelev2">&gt;&gt; index 1
</span><br>
<span class="quotelev2">&gt;&gt;         inet6 ::1/128
</span><br>
<span class="quotelev2">&gt;&gt; bge0: flags=20002004841&lt;UP,RUNNING,MULTICAST,DHCP,IPv6&gt; mtu 1500 index 2
</span><br>
<span class="quotelev2">&gt;&gt;         inet6 fe80::250:45ff:fe5c:2b0/10
</span><br>
<span class="quotelev2">&gt;&gt; [phargrov_at_pcp-j-20 ~]$ netstat -nr
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Routing Table: IPv4
</span><br>
<span class="quotelev2">&gt;&gt;   Destination           Gateway           Flags  Ref     Use     Interface
</span><br>
<span class="quotelev2">&gt;&gt; -------------------- -------------------- ----- ----- ---------- ---------
</span><br>
<span class="quotelev2">&gt;&gt; default              172.16.254.1         UG        2     158463 bge0
</span><br>
<span class="quotelev2">&gt;&gt; 127.0.0.1            127.0.0.1            UH        5     398913 lo0
</span><br>
<span class="quotelev2">&gt;&gt; 172.16.0.0           172.16.0.120         U         4  135241319 bge0
</span><br>
<span class="quotelev2">&gt;&gt; 172.18.0.0           172.18.0.120         U         3         26
</span><br>
<span class="quotelev2">&gt;&gt; pFFFF.ibp0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Routing Table: IPv6
</span><br>
<span class="quotelev2">&gt;&gt;   Destination/Mask            Gateway                   Flags Ref   Use
</span><br>
<span class="quotelev2">&gt;&gt;  If
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------- --------------------------- ----- --- -------
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt; ::1                         ::1                         UH      2       0
</span><br>
<span class="quotelev2">&gt;&gt; lo0
</span><br>
<span class="quotelev2">&gt;&gt; fe80::/10                   fe80::250:45ff:fe5c:2b0     U       2       0
</span><br>
<span class="quotelev2">&gt;&gt; bge0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Dec 16, 2014 at 2:55 AM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev2">&gt;&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Paul,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; could you please send the output of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ifconfig -a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; netstat -nr
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on the three hosts you are using
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (i assume you are still invoking mpirun from one node, and tasks are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; running on two other nodes)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 2014/12/16 16:00, Paul Hargrove wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gilles,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I looked again carefully and I am *NOT* finding -D_REENTRANT passed to most
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compilations.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It appears to be used for building libevent and vt, but nothing else.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The output from configure contains
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking if more special flags are required for pthreads... -D_REENTRANT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; only in the libevent and vt sub-configure portions.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When configured for gcc on Solaris-11 I see the following in configure
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for C optimization flags... -m64 -D_REENTRANT -g
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -finline-functions -fno-strict-aliasing
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but with CC=cc the equivalent line is
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for C optimization flags... -m64 -g
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In both cases the &quot;-m64&quot; is from the CFLAGS I have passed to configure.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, when I use CFLAGS=&quot;-m64 -D_REENTRANT&quot; the problem DOES NOT go away.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I see
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pcp-j-20:24740] mca_oob_tcp_accept: accept() failed: Error 0 (11).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A process or daemon was unable to complete a TCP connection
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to another process:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Local host:    pcp-j-20
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Remote host:   172.18.0.120
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is usually caused by a firewall on the remote host. Please
</span><br>
<span class="quotelev3">&gt;&gt;&gt; check that any firewall (e.g., iptables) has been disabled and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; try again.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; which is at least appears to have a non-zero errno.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A quick grep through /usr/include/sys/errno shows 11 is EAGAIN.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; With the oob.patch you provided the failed accept goes away, BUT the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; connection still fails:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A process or daemon was unable to complete a TCP connection
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to another process:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Local host:    pcp-j-20
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Remote host:   172.18.0.120
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is usually caused by a firewall on the remote host. Please
</span><br>
<span class="quotelev3">&gt;&gt;&gt; check that any firewall (e.g., iptables) has been disabled and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; try again.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Use of &quot;-mca oob_tcp_if_include bge0&quot; to use a single interface did not fix
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mon, Dec 15, 2014 at 7:18 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Gilles,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am NOT seeing the problem with gcc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It is only occurring with the Studio compilers.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As I've already reported, I have tried adding either &quot;-mt&quot; or &quot;-mt=yes&quot; to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; both LDFLAGS and --with-wrapper-ldflags.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The &quot;cc&quot; manpage (on the Solaris-10 system I can get to right now) says:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      -mt  Compile and link for multithreaded code.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           This option passes -D_REENTRANT to the preprocessor and
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           passes -lthread in the correct order to ld.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           The -mt option is required if the application or
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           libraries are multithreaded.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           To ensure proper library linking order, you must use
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           this option, rather than -lthread, to link with lib-
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           thread.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           If you are using POSIX threads, you must link with the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           options -mt -lpthread.  The -mt option is necessary
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           because libC and libCrun need libthread for a mul-
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           tithreaded application.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           If you compile and link in separate steps and you com-
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           pile with -mt, you might get unexpected results. If you
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           compile one translation unit with -mt, compile all
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           units of the program with -mt.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I cannot connect to my Solaris-11 system right now, but I recall the text
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to be quite similar.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mon, Dec 15, 2014 at 7:12 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Paul,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; did you manually set -mt ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if i remember correctly, solaris 11 (at least with gcc compilers) do not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; need any flags
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (except the -D_REENTRANT that is added automatically)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 2014/12/16 12:10, Paul Hargrove wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gilles,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I will try the patch when I can.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, our network is undergoing network maintenance right now, leaving
</span><br>
<span class="quotelev3">&gt;&gt;&gt; me unable to reach the necessary hosts.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As for -D_REENTRANT, I had already reported having verified in the &quot;make&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; output that it had been added automatically.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Additionally, the docs say that &quot;-mt&quot; *also* passes -D_REENTRANT to the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; preprocessor.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mon, Dec 15, 2014 at 6:07 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Paul,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; could you please make sure configure added  &quot;-D_REENTRANT&quot; to the CFLAGS ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /* otherwise, errno is a global variable instead of a per thread variable,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; which can
</span><br>
<span class="quotelev3">&gt;&gt;&gt; explains some weird behaviour. note this should have been already fixed */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; assuming -D_REENTRANT is set, could you please give the attached patch a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; try ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i suspect the CLOSE_THE_SOCKET macro resets errno, and hence the confusing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; error message
</span><br>
<span class="quotelev3">&gt;&gt;&gt; e.g. failed: Error 0 (0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FWIW, master is also affected.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 2014/12/16 10:47, Paul Hargrove wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have tried with a oob_tcp_if_include setting so that there is now only 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; interface.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Even with just one interface and -mt=yes in both LDFLAGS and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrapper-ldflags I *still* getting messages like
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pcp-j-20:11470] mca_oob_tcp_accept: accept() failed: Error 0 (0).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A process or daemon was unable to complete a TCP connection
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to another process:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Local host:    pcp-j-20
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Remote host:   172.16.0.120
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is usually caused by a firewall on the remote host. Please
</span><br>
<span class="quotelev3">&gt;&gt;&gt; check that any firewall (e.g., iptables) has been disabled and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; try again.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am getting less certain that my speculation about thread-safe libs is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; correct.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mon, Dec 15, 2014 at 1:24 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; &lt;phhargrove_at_[hidden]&gt; &lt;phhargrove_at_[hidden]&gt; &lt;phhargrove_at_[hidden]&gt; &lt;phhargrove_at_[hidden]&gt; &lt;phhargrove_at_[hidden]&gt; &lt;phhargrove_at_[hidden]&gt; &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  A little more reading finds that...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Docs says that one needs &quot;-mt&quot; without the &quot;=yes&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; That will work for both old and new compilers, where &quot;-mt=yes&quot; chokes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; older ones.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Also, man pages say &quot;-mt&quot; must come before &quot;-lpthread&quot; in the link command.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mon, Dec 15, 2014 at 12:52 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; &lt;phhargrove_at_[hidden]&gt; &lt;phhargrove_at_[hidden]&gt; &lt;phhargrove_at_[hidden]&gt; &lt;phhargrove_at_[hidden]&gt; &lt;phhargrove_at_[hidden]&gt; &lt;phhargrove_at_[hidden]&gt; &lt;phhargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mon, Dec 15, 2014 at 5:35 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; &lt;rhc_at_[hidden]&gt; &lt;rhc_at_[hidden]&gt; &lt;rhc_at_[hidden]&gt; &lt;rhc_at_[hidden]&gt; &lt;rhc_at_[hidden]&gt; &lt;rhc_at_[hidden]&gt; &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  7. Linkage issue on Solaris-11 reported by Paul Hargrove. Missing the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; multi-threaded C libraries, apparently need &quot;-mt=yes&quot; in both compile and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; link. Need someone to investigate.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The lack of multi-thread libraries is my SPECULATION.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The fact that configuring with LDFLAGS=-mt=yes did not help may or may
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not prove anything.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I didn't see them in &quot;mpicc -show&quot; and so maybe they needed to be in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrapper-ldflags instead.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My time this week is quite limited, but I can &quot;fire an forget&quot; tests of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; any tarballs you provide.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing listdevel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16607.php">http://www.open-mpi.org/community/lists/devel/2014/12/16607.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing listdevel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:<a href="http://www.open-mpi.org/community/lists/devel/2014/12/16608.php">http://www.open-mpi.org/community/lists/devel/2014/12/16608.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing listdevel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16610.php">http://www.open-mpi.org/community/lists/devel/2014/12/16610.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing listdevel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:<a href="http://www.open-mpi.org/community/lists/devel/2014/12/16611.php">http://www.open-mpi.org/community/lists/devel/2014/12/16611.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing listdevel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16613.php">http://www.open-mpi.org/community/lists/devel/2014/12/16613.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16615.php">http://www.open-mpi.org/community/lists/devel/2014/12/16615.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev2">&gt;&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16619.php">http://www.open-mpi.org/community/lists/devel/2014/12/16619.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16620.php">http://www.open-mpi.org/community/lists/devel/2014/12/16620.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16621/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16622.php">Paul Hargrove: "Re: [OMPI devel] OMPI devel] 1.8.4rc Status"</a>
<li><strong>Previous message:</strong> <a href="16620.php">Paul Hargrove: "Re: [OMPI devel] OMPI devel] 1.8.4rc Status"</a>
<li><strong>In reply to:</strong> <a href="16620.php">Paul Hargrove: "Re: [OMPI devel] OMPI devel] 1.8.4rc Status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16622.php">Paul Hargrove: "Re: [OMPI devel] OMPI devel] 1.8.4rc Status"</a>
<li><strong>Reply:</strong> <a href="16622.php">Paul Hargrove: "Re: [OMPI devel] OMPI devel] 1.8.4rc Status"</a>
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
