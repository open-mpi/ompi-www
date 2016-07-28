<?
$subject_val = "Re: [OMPI devel] [1.8.4rc1] REGRESSION on Solaris-11/x86 with two subnets";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  4 00:13:53 2014" -->
<!-- isoreceived="20141104051353" -->
<!-- sent="Mon, 3 Nov 2014 21:13:50 -0800" -->
<!-- isosent="20141104051350" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc.openmpi_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [1.8.4rc1] REGRESSION on Solaris-11/x86 with two subnets" -->
<!-- id="3E1B5FD9-56F2-42BE-9E36-15FCB4C0FEA1_at_gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="54586059.20106_at_iferc.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [1.8.4rc1] REGRESSION on Solaris-11/x86 with two subnets<br>
<strong>From:</strong> Ralph Castain (<em>rhc.openmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-04 00:13:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16171.php">Joshua Ladd: "Re: [OMPI devel] osu_mbw_mr error"</a>
<li><strong>Previous message:</strong> <a href="16169.php">Gilles Gouaillardet: "Re: [OMPI devel] [1.8.4rc1] REGRESSION on Solaris-11/x86 with two subnets"</a>
<li><strong>In reply to:</strong> <a href="16169.php">Gilles Gouaillardet: "Re: [OMPI devel] [1.8.4rc1] REGRESSION on Solaris-11/x86 with two subnets"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16164.php">Paul Hargrove: "Re: [OMPI devel] [1.8.4rc1] REGRESSION on Solaris-11/x86 with two subnets"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ah, okay - thanks for clarifying that!
<br>
<p><span class="quotelev1">&gt; On Nov 3, 2014, at 9:12 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That works too since pthread is mandatory now
</span><br>
<span class="quotelev1">&gt; (i previously made a RFC and removing the --with-threads configure option is in my todo list)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 2014/11/04 14:10, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Curious - why put it under condition of pthread config? I just added it to the &#147;if solaris&#148; section - i.e., add the flag if we are under solaris, regardless of someone asking for thread support. Since we require that libevent be thread-enabled, it seemed safer to always ensure those flags are set.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Nov 3, 2014, at 9:05 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; &lt;mailto:gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FYI, here is attached the patch i am working on (still testing ...)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; aa207ad2f3de5b649e5439d06dca90d86f5a82c2 should be reverted then.
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
<span class="quotelev3">&gt;&gt;&gt; On 2014/11/04 13:56, Paul Hargrove wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; You will see from the message I sent a moment ago that -D_REENTRANT on
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Solaris appears to be the problem.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; However, I will also try the trunk tarball as you have requested.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Mon, Nov 3, 2014 at 8:53 PM, Ralph Castain &lt;rhc.openmpi_at_[hidden]&gt; &lt;mailto:rhc.openmpi_at_[hidden]&gt; &lt;mailto:rhc.openmpi_at_[hidden]&gt; &lt;mailto:rhc.openmpi_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hmmm...Paul, would you be able to try this with the latest trunk tarball?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This looks familiar to me, and I wonder if we are just missing a changeset
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; from the trunk that fixed the handshake issues we had with failing over
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; from one transport to another.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Nov 3, 2014, at 7:23 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; &lt;mailto:phhargrove_at_[hidden]&gt; &lt;mailto:phhargrove_at_[hidden]&gt; &lt;mailto:phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Requested output is attached.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I have a Linux/x86 system with the same network configuration and will
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; soon be able to determine if the problem is specific to Solaris.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Mon, Nov 3, 2014 at 7:11 PM, Ralph Castain &lt;rhc.openmpi_at_[hidden]&gt; &lt;mailto:rhc.openmpi_at_[hidden]&gt; &lt;mailto:rhc.openmpi_at_[hidden]&gt; &lt;mailto:rhc.openmpi_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Could you please set -mca oob_base_verbose 20? I'm not sure why the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; connection is failing.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Nov 3, 2014, at 5:56 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; &lt;mailto:phhargrove_at_[hidden]&gt; &lt;mailto:phhargrove_at_[hidden]&gt; &lt;mailto:phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Not clear if the following failure is Solaris-specific, but it *IS* a
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; regression relative to 1.8.3.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The system has 2 IPV4 interfaces:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;    Ethernet on 172.16.0.119/16
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;    IPoIB on 172.18.0.119/16
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; $ ifconfig bge0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; bge0: flags=1004843&lt;UP,BROADCAST,RUNNING,MULTICAST,DHCP,IPv4&gt; mtu 1500
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; index 2
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         inet 172.16.0.119 netmask ffff0000 broadcast 172.16.255.255
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; $ ifconfig pFFFF.ibp0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; pFFFF.ibp0:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; flags=1001000843&lt;UP,BROADCAST,RUNNING,MULTICAST,IPv4,FIXEDMTU&gt; mtu 2044
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; index 3
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         inet 172.18.0.119 netmask ffff0000 broadcast 172.18.255.255
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; However, I get a message from mca/oob/tcp about not being able to
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; communicate between these two interfaces ON THE SAME NODE:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; $ /shared/OMPI/openmpi-1.8.4rc1-solaris11-x86-ib-ss12u3/INST/bin/mpirun
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -mca btl sm,self,openib -np 1 -host pcp-j-19 examples/ring_c
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [pcp-j-19:00899] mca_oob_tcp_accept: accept() failed: Error 0 (0).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; A process or daemon was unable to complete a TCP connection
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; to another process:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   Local host:    pcp-j-19
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   Remote host:   172.18.0.119
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; This is usually caused by a firewall on the remote host. Please
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; check that any firewall (e.g., iptables) has been disabled and
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; try again.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Let me know what sort of verbose options I should use to gather any
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; additional info you may need.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Fri, Oct 31, 2014 at 7:14 PM, Ralph Castain &lt;rhc.openmpi_at_[hidden]&gt; &lt;mailto:rhc.openmpi_at_[hidden]&gt; &lt;mailto:rhc.openmpi_at_[hidden]&gt; &lt;mailto:rhc.openmpi_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi folks
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I know 1.8.4 isn't entirely complete just yet, but I'd like to get a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; head start on the testing so we can release by Fri Nov 7th. So please take
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; a little time and test the current tarball:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/software/ompi/v1.8/">http://www.open-mpi.org/software/ompi/v1.8/</a> &lt;<a href="http://www.open-mpi.org/software/ompi/v1.8/">http://www.open-mpi.org/software/ompi/v1.8/</a>&gt; &lt;<a href="http://www.open-mpi.org/software/ompi/v1.8/">http://www.open-mpi.org/software/ompi/v1.8/</a>&gt; &lt;<a href="http://www.open-mpi.org/software/ompi/v1.8/">http://www.open-mpi.org/software/ompi/v1.8/</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt; &lt;mailto:devel_at_[hidden]&gt; &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt; &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt; &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16138.php">http://www.open-mpi.org/community/lists/devel/2014/10/16138.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/10/16138.php">http://www.open-mpi.org/community/lists/devel/2014/10/16138.php</a>&gt; &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/10/16138.php">http://www.open-mpi.org/community/lists/devel/2014/10/16138.php</a>&gt; &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/10/16138.php">http://www.open-mpi.org/community/lists/devel/2014/10/16138.php</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden] &lt;mailto:PHHargrove_at_[hidden]&gt; &lt;mailto:PHHargrove_at_[hidden]&gt; &lt;mailto:PHHargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt; &lt;mailto:devel_at_[hidden]&gt; &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt; &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt; &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16160.php">http://www.open-mpi.org/community/lists/devel/2014/11/16160.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/11/16160.php">http://www.open-mpi.org/community/lists/devel/2014/11/16160.php</a>&gt; &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/11/16160.php">http://www.open-mpi.org/community/lists/devel/2014/11/16160.php</a>&gt; &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/11/16160.php">http://www.open-mpi.org/community/lists/devel/2014/11/16160.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt; &lt;mailto:devel_at_[hidden]&gt; &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt; &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt; &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16161.php">http://www.open-mpi.org/community/lists/devel/2014/11/16161.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/11/16161.php">http://www.open-mpi.org/community/lists/devel/2014/11/16161.php</a>&gt; &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/11/16161.php">http://www.open-mpi.org/community/lists/devel/2014/11/16161.php</a>&gt; &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/11/16161.php">http://www.open-mpi.org/community/lists/devel/2014/11/16161.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden] &lt;mailto:PHHargrove_at_[hidden]&gt; &lt;mailto:PHHargrove_at_[hidden]&gt; &lt;mailto:PHHargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  &lt;oob_base_verbose=20.txt&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt; &lt;mailto:devel_at_[hidden]&gt; &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt; &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt; &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16162.php">http://www.open-mpi.org/community/lists/devel/2014/11/16162.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/11/16162.php">http://www.open-mpi.org/community/lists/devel/2014/11/16162.php</a>&gt; &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/11/16162.php">http://www.open-mpi.org/community/lists/devel/2014/11/16162.php</a>&gt; &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/11/16162.php">http://www.open-mpi.org/community/lists/devel/2014/11/16162.php</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt; &lt;mailto:devel_at_[hidden]&gt; &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt; &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt; &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16163.php">http://www.open-mpi.org/community/lists/devel/2014/11/16163.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/11/16163.php">http://www.open-mpi.org/community/lists/devel/2014/11/16163.php</a>&gt; &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/11/16163.php">http://www.open-mpi.org/community/lists/devel/2014/11/16163.php</a>&gt; &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/11/16163.php">http://www.open-mpi.org/community/lists/devel/2014/11/16163.php</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt; &lt;mailto:devel_at_[hidden]&gt; &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt; &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt; &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16165.php">http://www.open-mpi.org/community/lists/devel/2014/11/16165.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/11/16165.php">http://www.open-mpi.org/community/lists/devel/2014/11/16165.php</a>&gt; &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/11/16165.php">http://www.open-mpi.org/community/lists/devel/2014/11/16165.php</a>&gt; &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/11/16165.php">http://www.open-mpi.org/community/lists/devel/2014/11/16165.php</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;reentrant.diff&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16167.php">http://www.open-mpi.org/community/lists/devel/2014/11/16167.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/11/16167.php">http://www.open-mpi.org/community/lists/devel/2014/11/16167.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16168.php">http://www.open-mpi.org/community/lists/devel/2014/11/16168.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/11/16168.php">http://www.open-mpi.org/community/lists/devel/2014/11/16168.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16169.php">http://www.open-mpi.org/community/lists/devel/2014/11/16169.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16170/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16171.php">Joshua Ladd: "Re: [OMPI devel] osu_mbw_mr error"</a>
<li><strong>Previous message:</strong> <a href="16169.php">Gilles Gouaillardet: "Re: [OMPI devel] [1.8.4rc1] REGRESSION on Solaris-11/x86 with two subnets"</a>
<li><strong>In reply to:</strong> <a href="16169.php">Gilles Gouaillardet: "Re: [OMPI devel] [1.8.4rc1] REGRESSION on Solaris-11/x86 with two subnets"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16164.php">Paul Hargrove: "Re: [OMPI devel] [1.8.4rc1] REGRESSION on Solaris-11/x86 with two subnets"</a>
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
