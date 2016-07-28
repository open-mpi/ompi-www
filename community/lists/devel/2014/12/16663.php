<?
$subject_val = "Re: [OMPI devel] 1.8.4rc Status";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 17 22:17:07 2014" -->
<!-- isoreceived="20141218031707" -->
<!-- sent="Wed, 17 Dec 2014 19:17:03 -0800" -->
<!-- isosent="20141218031703" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.8.4rc Status" -->
<!-- id="CAAvDA15zKsZKcfnVGzrQtnFWhUsZ9bHCuYUyQCqV2D2+LnAbGQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20502418-92F6-4815-B58F-C7FDDA28CBF2_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.8.4rc Status<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-17 22:17:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16664.php">Ralph Castain: "Re: [OMPI devel] 1.8.4rc Status"</a>
<li><strong>Previous message:</strong> <a href="16662.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] 1.8.4rc Status"</a>
<li><strong>In reply to:</strong> <a href="16660.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.8.4rc Status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16664.php">Ralph Castain: "Re: [OMPI devel] 1.8.4rc Status"</a>
<li><strong>Reply:</strong> <a href="16664.php">Ralph Castain: "Re: [OMPI devel] 1.8.4rc Status"</a>
<li><strong>Reply:</strong> <a href="16667.php">Paul Hargrove: "Re: [OMPI devel] 1.8.4rc Status"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Short version:
<br>
<p>v1.8 nightly (v1.8.3-313-g54c80c2) PASSED my testing.
<br>
<p>In full:
<br>
<p>I gave openmpi-v1.8.3-313-g54c80c2 a try.
<br>
In this test I did not add -D_REENTRANT or -mt to any flags at configure
<br>
time.
<br>
In addition to --prefix, I passed the following:
<br>
<p>--enable-debug --with-verbs \
<br>
CC=cc CXX=CC FC=f90 \
<br>
CFLAGS=-m64 --with-wrapper-cflags=-m64 \
<br>
FCFLAGS=-m64 --with-wrapper-fcflags=-m64 \
<br>
CXXFLAGS='-m64 -library=stlport4' --with-wrapper-cxxflags='-m64
<br>
-library=stlport4'
<br>
<p><p>So, this was essentially an &quot;out of the box&quot; build with the configure
<br>
options needed for the compilers and ABI I desire.
<br>
They are the same options I have used successfully with 1.8.3.
<br>
So, I believe the regression I had observed relative to 1.8.3 has ben
<br>
resolved.
<br>
<p>I am going to run the nightly on other configs on both my Solaris-11/x86-64
<br>
and Solaris-10/SPARC systems.
<br>
I just want to be sure some other compile/abi/arch combination didn't get
<br>
broken by accident.
<br>
I will post my results to the list (probably Thu lunch time in California).
<br>
<p>-Paul
<br>
<p>On Wed, Dec 17, 2014 at 2:54 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Paul --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The __sun macro check is now in the OMPI 1.8 tree, and is in the latest
</span><br>
<span class="quotelev1">&gt; nightly tarball.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I'm following this thread right -- and I might not be! -- I think
</span><br>
<span class="quotelev1">&gt; Gilles is saying that now that the __sun check is in, it should fix this
</span><br>
<span class="quotelev1">&gt; -mt/-D_REENTRANT/whatever problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you confirm?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 16, 2014, at 1:55 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Gilles,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am running mpirun on a host that ALSO will run one of the application
</span><br>
<span class="quotelev1">&gt; processes.
</span><br>
<span class="quotelev2">&gt; &gt; Requested ifconfig and netstat outputs appear below.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -Paul
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [phargrov_at_pcp-j-20 ~]$ ifconfig -a
</span><br>
<span class="quotelev2">&gt; &gt; lo0: flags=2001000849&lt;UP,LOOPBACK,RUNNING,MULTICAST,IPv4,VIRTUAL&gt; mtu
</span><br>
<span class="quotelev1">&gt; 8232 index 1
</span><br>
<span class="quotelev2">&gt; &gt;         inet 127.0.0.1 netmask ff000000
</span><br>
<span class="quotelev2">&gt; &gt; bge0: flags=1004843&lt;UP,BROADCAST,RUNNING,MULTICAST,DHCP,IPv4&gt; mtu 1500
</span><br>
<span class="quotelev1">&gt; index 2
</span><br>
<span class="quotelev2">&gt; &gt;         inet 172.16.0.120 netmask ffff0000 broadcast 172.16.255.255
</span><br>
<span class="quotelev2">&gt; &gt; pFFFF.ibp0:
</span><br>
<span class="quotelev1">&gt; flags=1001000843&lt;UP,BROADCAST,RUNNING,MULTICAST,IPv4,FIXEDMTU&gt; mtu 2044
</span><br>
<span class="quotelev1">&gt; index 3
</span><br>
<span class="quotelev2">&gt; &gt;         inet 172.18.0.120 netmask ffff0000 broadcast 172.18.255.255
</span><br>
<span class="quotelev2">&gt; &gt; lo0: flags=2002000849&lt;UP,LOOPBACK,RUNNING,MULTICAST,IPv6,VIRTUAL&gt; mtu
</span><br>
<span class="quotelev1">&gt; 8252 index 1
</span><br>
<span class="quotelev2">&gt; &gt;         inet6 ::1/128
</span><br>
<span class="quotelev2">&gt; &gt; bge0: flags=20002004841&lt;UP,RUNNING,MULTICAST,DHCP,IPv6&gt; mtu 1500 index 2
</span><br>
<span class="quotelev2">&gt; &gt;         inet6 fe80::250:45ff:fe5c:2b0/10
</span><br>
<span class="quotelev2">&gt; &gt; [phargrov_at_pcp-j-20 ~]$ netstat -nr
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Routing Table: IPv4
</span><br>
<span class="quotelev2">&gt; &gt;   Destination           Gateway           Flags  Ref     Use
</span><br>
<span class="quotelev1">&gt;  Interface
</span><br>
<span class="quotelev2">&gt; &gt; -------------------- -------------------- ----- ----- ----------
</span><br>
<span class="quotelev1">&gt; ---------
</span><br>
<span class="quotelev2">&gt; &gt; default              172.16.254.1         UG        2     158463 bge0
</span><br>
<span class="quotelev2">&gt; &gt; 127.0.0.1            127.0.0.1            UH        5     398913 lo0
</span><br>
<span class="quotelev2">&gt; &gt; 172.16.0.0           172.16.0.120         U         4  135241319 bge0
</span><br>
<span class="quotelev2">&gt; &gt; 172.18.0.0           172.18.0.120         U         3         26
</span><br>
<span class="quotelev1">&gt; pFFFF.ibp0
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Routing Table: IPv6
</span><br>
<span class="quotelev2">&gt; &gt;   Destination/Mask            Gateway                   Flags Ref   Use
</span><br>
<span class="quotelev1">&gt;   If
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------- --------------------------- ----- ---
</span><br>
<span class="quotelev1">&gt; ------- -----
</span><br>
<span class="quotelev2">&gt; &gt; ::1                         ::1                         UH      2
</span><br>
<span class="quotelev1">&gt;  0 lo0
</span><br>
<span class="quotelev2">&gt; &gt; fe80::/10                   fe80::250:45ff:fe5c:2b0     U       2
</span><br>
<span class="quotelev1">&gt;  0 bge0
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Tue, Dec 16, 2014 at 2:55 AM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev1">&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Paul,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; could you please send the output of
</span><br>
<span class="quotelev2">&gt; &gt; ifconfig -a
</span><br>
<span class="quotelev2">&gt; &gt; netstat -nr
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; on the three hosts you are using
</span><br>
<span class="quotelev2">&gt; &gt; (i assume you are still invoking mpirun from one node, and tasks are
</span><br>
<span class="quotelev1">&gt; running on two other nodes)
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
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 2014/12/16 16:00, Paul Hargrove wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Gilles,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I looked again carefully and I am *NOT* finding -D_REENTRANT passed to
</span><br>
<span class="quotelev1">&gt; most
</span><br>
<span class="quotelev3">&gt; &gt;&gt; compilations.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; It appears to be used for building libevent and vt, but nothing else.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The output from configure contains
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; checking if more special flags are required for pthreads... -D_REENTRANT
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; only in the libevent and vt sub-configure portions.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; When configured for gcc on Solaris-11 I see the following in configure
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; checking for C optimization flags... -m64 -D_REENTRANT -g
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -finline-functions -fno-strict-aliasing
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; but with CC=cc the equivalent line is
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; checking for C optimization flags... -m64 -g
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; In both cases the &quot;-m64&quot; is from the CFLAGS I have passed to configure.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; However, when I use CFLAGS=&quot;-m64 -D_REENTRANT&quot; the problem DOES NOT go
</span><br>
<span class="quotelev1">&gt; away.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I see
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [pcp-j-20:24740] mca_oob_tcp_accept: accept() failed: Error 0 (11).
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; A process or daemon was unable to complete a TCP connection
</span><br>
<span class="quotelev3">&gt; &gt;&gt; to another process:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   Local host:    pcp-j-20
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   Remote host:   172.18.0.120
</span><br>
<span class="quotelev3">&gt; &gt;&gt; This is usually caused by a firewall on the remote host. Please
</span><br>
<span class="quotelev3">&gt; &gt;&gt; check that any firewall (e.g., iptables) has been disabled and
</span><br>
<span class="quotelev3">&gt; &gt;&gt; try again.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; which is at least appears to have a non-zero errno.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; A quick grep through /usr/include/sys/errno shows 11 is EAGAIN.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; With the oob.patch you provided the failed accept goes away, BUT the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; connection still fails:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; A process or daemon was unable to complete a TCP connection
</span><br>
<span class="quotelev3">&gt; &gt;&gt; to another process:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   Local host:    pcp-j-20
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   Remote host:   172.18.0.120
</span><br>
<span class="quotelev3">&gt; &gt;&gt; This is usually caused by a firewall on the remote host. Please
</span><br>
<span class="quotelev3">&gt; &gt;&gt; check that any firewall (e.g., iptables) has been disabled and
</span><br>
<span class="quotelev3">&gt; &gt;&gt; try again.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Use of &quot;-mca oob_tcp_if_include bge0&quot; to use a single interface did not
</span><br>
<span class="quotelev1">&gt; fix
</span><br>
<span class="quotelev3">&gt; &gt;&gt; this.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -Paul
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Mon, Dec 15, 2014 at 7:18 PM, Paul Hargrove
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &lt;phhargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Gilles,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I am NOT seeing the problem with gcc.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; It is only occurring with the Studio compilers.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; As I've already reported, I have tried adding either &quot;-mt&quot; or
</span><br>
<span class="quotelev1">&gt; &quot;-mt=yes&quot; to
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; both LDFLAGS and --with-wrapper-ldflags.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; The &quot;cc&quot; manpage (on the Solaris-10 system I can get to right now)
</span><br>
<span class="quotelev1">&gt; says:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;      -mt  Compile and link for multithreaded code.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;           This option passes -D_REENTRANT to the preprocessor and
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;           passes -lthread in the correct order to ld.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;           The -mt option is required if the application or
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;           libraries are multithreaded.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;           To ensure proper library linking order, you must use
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;           this option, rather than -lthread, to link with lib-
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;           thread.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;           If you are using POSIX threads, you must link with the
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;           options -mt -lpthread.  The -mt option is necessary
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;           because libC and libCrun need libthread for a mul-
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;           tithreaded application.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;           If you compile and link in separate steps and you com-
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;           pile with -mt, you might get unexpected results. If you
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;           compile one translation unit with -mt, compile all
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;           units of the program with -mt.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I cannot connect to my Solaris-11 system right now, but I recall the
</span><br>
<span class="quotelev1">&gt; text
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; to be quite similar.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Mon, Dec 15, 2014 at 7:12 PM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; gilles.gouaillardet_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;  Paul,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; did you manually set -mt ?
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; if i remember correctly, solaris 11 (at least with gcc compilers) do
</span><br>
<span class="quotelev1">&gt; not
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; need any flags
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; (except the -D_REENTRANT that is added automatically)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; On 2014/12/16 12:10, Paul Hargrove wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Gilles,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I will try the patch when I can.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; However, our network is undergoing network maintenance right now,
</span><br>
<span class="quotelev1">&gt; leaving
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; me unable to reach the necessary hosts.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; As for -D_REENTRANT, I had already reported having verified in the
</span><br>
<span class="quotelev1">&gt; &quot;make&quot;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; output that it had been added automatically.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Additionally, the docs say that &quot;-mt&quot; *also* passes -D_REENTRANT to
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; preprocessor.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; On Mon, Dec 15, 2014 at 6:07 PM, Gilles Gouaillardet
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; &lt;gilles.gouaillardet_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;  wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;  Paul,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; could you please make sure configure added  &quot;-D_REENTRANT&quot; to the
</span><br>
<span class="quotelev1">&gt; CFLAGS ?
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; /* otherwise, errno is a global variable instead of a per thread
</span><br>
<span class="quotelev1">&gt; variable,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; which can
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; explains some weird behaviour. note this should have been already
</span><br>
<span class="quotelev1">&gt; fixed */
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; assuming -D_REENTRANT is set, could you please give the attached
</span><br>
<span class="quotelev1">&gt; patch a
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; try ?
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; i suspect the CLOSE_THE_SOCKET macro resets errno, and hence the
</span><br>
<span class="quotelev1">&gt; confusing
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; error message
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; e.g. failed: Error 0 (0)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; FWIW, master is also affected.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; On 2014/12/16 10:47, Paul Hargrove wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I have tried with a oob_tcp_if_include setting so that there is now
</span><br>
<span class="quotelev1">&gt; only 1
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; interface.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Even with just one interface and -mt=yes in both LDFLAGS and
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; wrapper-ldflags I *still* getting messages like
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [pcp-j-20:11470] mca_oob_tcp_accept: accept() failed: Error 0 (0).
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; A process or daemon was unable to complete a TCP connection
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; to another process:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   Local host:    pcp-j-20
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   Remote host:   172.16.0.120
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; This is usually caused by a firewall on the remote host. Please
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; check that any firewall (e.g., iptables) has been disabled and
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; try again.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I am getting less certain that my speculation about thread-safe libs
</span><br>
<span class="quotelev1">&gt; is
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; correct.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; On Mon, Dec 15, 2014 at 1:24 PM, Paul Hargrove
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; &lt;phhargrove_at_[hidden]&gt; &lt;phhargrove_at_[hidden]&gt; &lt;phhargrove_at_[hidden]&gt; &lt;
</span><br>
<span class="quotelev1">&gt; phhargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;  wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;  A little more reading finds that...
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Docs says that one needs &quot;-mt&quot; without the &quot;=yes&quot;.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; That will work for both old and new compilers, where &quot;-mt=yes&quot; chokes
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; older ones.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Also, man pages say &quot;-mt&quot; must come before &quot;-lpthread&quot; in the link
</span><br>
<span class="quotelev1">&gt; command.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; On Mon, Dec 15, 2014 at 12:52 PM, Paul Hargrove
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; &lt;phhargrove_at_[hidden]&gt; &lt;phhargrove_at_[hidden]&gt; &lt;phhargrove_at_[hidden]&gt; &lt;
</span><br>
<span class="quotelev1">&gt; phhargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; On Mon, Dec 15, 2014 at 5:35 AM, Ralph Castain
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; &lt;rhc_at_[hidden]&gt; &lt;rhc_at_[hidden]&gt; &lt;rhc_at_[hidden]&gt; &lt;
</span><br>
<span class="quotelev1">&gt; rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;  wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;  7. Linkage issue on Solaris-11 reported by Paul Hargrove. Missing the
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; multi-threaded C libraries, apparently need &quot;-mt=yes&quot; in both compile
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; link. Need someone to investigate.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; The lack of multi-thread libraries is my SPECULATION.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; The fact that configuring with LDFLAGS=-mt=yes did not help may or may
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; not prove anything.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I didn't see them in &quot;mpicc -show&quot; and so maybe they needed to be in
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; wrapper-ldflags instead.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; My time this week is quite limited, but I can &quot;fire an forget&quot; tests
</span><br>
<span class="quotelev1">&gt; of
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; any tarballs you provide.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Paul H. Hargrove
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Computer Science Department               Tel:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Lawrence Berkeley National Laboratory     Fax:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Paul H. Hargrove
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Computer Science Department               Tel:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Lawrence Berkeley National Laboratory     Fax:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; devel mailing
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; listdevel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Subscription:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16607.php">http://www.open-mpi.org/community/lists/devel/2014/12/16607.php</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; devel mailing
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; listdevel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Subscription:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16608.php">http://www.open-mpi.org/community/lists/devel/2014/12/16608.php</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; devel mailing
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; listdevel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Subscription:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16610.php">http://www.open-mpi.org/community/lists/devel/2014/12/16610.php</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Subscription:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16611.php">http://www.open-mpi.org/community/lists/devel/2014/12/16611.php</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Paul H. Hargrove
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; PHHargrove_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Computer Science Department               Tel:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; +1-510-495-2352
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Lawrence Berkeley National Laboratory     Fax:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; +1-510-486-6900
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subscription:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16613.php">http://www.open-mpi.org/community/lists/devel/2014/12/16613.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16615.php">http://www.open-mpi.org/community/lists/devel/2014/12/16615.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev2">&gt; &gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt; &gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16617.php">http://www.open-mpi.org/community/lists/devel/2014/12/16617.php</a>
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
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16660.php">http://www.open-mpi.org/community/lists/devel/2014/12/16660.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16663/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16664.php">Ralph Castain: "Re: [OMPI devel] 1.8.4rc Status"</a>
<li><strong>Previous message:</strong> <a href="16662.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] 1.8.4rc Status"</a>
<li><strong>In reply to:</strong> <a href="16660.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.8.4rc Status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16664.php">Ralph Castain: "Re: [OMPI devel] 1.8.4rc Status"</a>
<li><strong>Reply:</strong> <a href="16664.php">Ralph Castain: "Re: [OMPI devel] 1.8.4rc Status"</a>
<li><strong>Reply:</strong> <a href="16667.php">Paul Hargrove: "Re: [OMPI devel] 1.8.4rc Status"</a>
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
