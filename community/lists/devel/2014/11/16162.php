<?
$subject_val = "Re: [OMPI devel] [1.8.4rc1] REGRESSION on Solaris-11/x86 with two subnets";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  3 22:23:38 2014" -->
<!-- isoreceived="20141104032338" -->
<!-- sent="Mon, 3 Nov 2014 19:23:34 -0800" -->
<!-- isosent="20141104032334" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [1.8.4rc1] REGRESSION on Solaris-11/x86 with two subnets" -->
<!-- id="CAAvDA146uS+2fFaCyb7E-WPhXsjoEWD-dPx9xWp=XROf0yjKag_at_mail.gmail.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="060843CD-8DA0-4371-AA70-AEC085EB8771_at_gmail.com" -->
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
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-03 22:23:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16163.php">Ralph Castain: "Re: [OMPI devel] [1.8.4rc1] REGRESSION on Solaris-11/x86 with two subnets"</a>
<li><strong>Previous message:</strong> <a href="16161.php">Ralph Castain: "Re: [OMPI devel] [1.8.4rc1] REGRESSION on Solaris-11/x86 with two subnets"</a>
<li><strong>In reply to:</strong> <a href="16161.php">Ralph Castain: "Re: [OMPI devel] [1.8.4rc1] REGRESSION on Solaris-11/x86 with two subnets"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16163.php">Ralph Castain: "Re: [OMPI devel] [1.8.4rc1] REGRESSION on Solaris-11/x86 with two subnets"</a>
<li><strong>Reply:</strong> <a href="16163.php">Ralph Castain: "Re: [OMPI devel] [1.8.4rc1] REGRESSION on Solaris-11/x86 with two subnets"</a>
<li><strong>Reply:</strong> <a href="16164.php">Paul Hargrove: "Re: [OMPI devel] [1.8.4rc1] REGRESSION on Solaris-11/x86 with two subnets"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>Requested output is attached.
<br>
<p>I have a Linux/x86 system with the same network configuration and will soon
<br>
be able to determine if the problem is specific to Solaris.
<br>
<p>-Paul
<br>
<p><p>On Mon, Nov 3, 2014 at 7:11 PM, Ralph Castain &lt;rhc.openmpi_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Could you please set -mca oob_base_verbose 20? I'm not sure why the
</span><br>
<span class="quotelev1">&gt; connection is failing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 3, 2014, at 5:56 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not clear if the following failure is Solaris-specific, but it *IS* a
</span><br>
<span class="quotelev1">&gt; regression relative to 1.8.3.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The system has 2 IPV4 interfaces:
</span><br>
<span class="quotelev1">&gt;    Ethernet on 172.16.0.119/16
</span><br>
<span class="quotelev1">&gt;    IPoIB on 172.18.0.119/16
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ ifconfig bge0
</span><br>
<span class="quotelev1">&gt; bge0: flags=1004843&lt;UP,BROADCAST,RUNNING,MULTICAST,DHCP,IPv4&gt; mtu 1500
</span><br>
<span class="quotelev1">&gt; index 2
</span><br>
<span class="quotelev1">&gt;         inet 172.16.0.119 netmask ffff0000 broadcast 172.16.255.255
</span><br>
<span class="quotelev1">&gt; $ ifconfig pFFFF.ibp0
</span><br>
<span class="quotelev1">&gt; pFFFF.ibp0: flags=1001000843&lt;UP,BROADCAST,RUNNING,MULTICAST,IPv4,FIXEDMTU&gt;
</span><br>
<span class="quotelev1">&gt; mtu 2044 index 3
</span><br>
<span class="quotelev1">&gt;         inet 172.18.0.119 netmask ffff0000 broadcast 172.18.255.255
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, I get a message from mca/oob/tcp about not being able to
</span><br>
<span class="quotelev1">&gt; communicate between these two interfaces ON THE SAME NODE:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ /shared/OMPI/openmpi-1.8.4rc1-solaris11-x86-ib-ss12u3/INST/bin/mpirun
</span><br>
<span class="quotelev1">&gt; -mca btl sm,self,openib -np 1 -host pcp-j-19 examples/ring_c
</span><br>
<span class="quotelev1">&gt; [pcp-j-19:00899] mca_oob_tcp_accept: accept() failed: Error 0 (0).
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A process or daemon was unable to complete a TCP connection
</span><br>
<span class="quotelev1">&gt; to another process:
</span><br>
<span class="quotelev1">&gt;   Local host:    pcp-j-19
</span><br>
<span class="quotelev1">&gt;   Remote host:   172.18.0.119
</span><br>
<span class="quotelev1">&gt; This is usually caused by a firewall on the remote host. Please
</span><br>
<span class="quotelev1">&gt; check that any firewall (e.g., iptables) has been disabled and
</span><br>
<span class="quotelev1">&gt; try again.
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Let me know what sort of verbose options I should use to gather any
</span><br>
<span class="quotelev1">&gt; additional info you may need.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Oct 31, 2014 at 7:14 PM, Ralph Castain &lt;rhc.openmpi_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi folks
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I know 1.8.4 isn't entirely complete just yet, but I'd like to get a head
</span><br>
<span class="quotelev2">&gt;&gt; start on the testing so we can release by Fri Nov 7th. So please take a
</span><br>
<span class="quotelev2">&gt;&gt; little time and test the current tarball:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/software/ompi/v1.8/">http://www.open-mpi.org/software/ompi/v1.8/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16138.php">http://www.open-mpi.org/community/lists/devel/2014/10/16138.php</a>
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
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt;  _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16160.php">http://www.open-mpi.org/community/lists/devel/2014/11/16160.php</a>
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16161.php">http://www.open-mpi.org/community/lists/devel/2014/11/16161.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900

</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16162/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16162/oob_base_verbose_20.txt">oob_base_verbose_20.txt</a>
</ul>
<!-- attachment="oob_base_verbose_20.txt" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16163.php">Ralph Castain: "Re: [OMPI devel] [1.8.4rc1] REGRESSION on Solaris-11/x86 with two subnets"</a>
<li><strong>Previous message:</strong> <a href="16161.php">Ralph Castain: "Re: [OMPI devel] [1.8.4rc1] REGRESSION on Solaris-11/x86 with two subnets"</a>
<li><strong>In reply to:</strong> <a href="16161.php">Ralph Castain: "Re: [OMPI devel] [1.8.4rc1] REGRESSION on Solaris-11/x86 with two subnets"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16163.php">Ralph Castain: "Re: [OMPI devel] [1.8.4rc1] REGRESSION on Solaris-11/x86 with two subnets"</a>
<li><strong>Reply:</strong> <a href="16163.php">Ralph Castain: "Re: [OMPI devel] [1.8.4rc1] REGRESSION on Solaris-11/x86 with two subnets"</a>
<li><strong>Reply:</strong> <a href="16164.php">Paul Hargrove: "Re: [OMPI devel] [1.8.4rc1] REGRESSION on Solaris-11/x86 with two subnets"</a>
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
