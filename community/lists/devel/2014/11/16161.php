<?
$subject_val = "Re: [OMPI devel] [1.8.4rc1] REGRESSION on Solaris-11/x86 with two subnets";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  3 22:11:24 2014" -->
<!-- isoreceived="20141104031124" -->
<!-- sent="Mon, 3 Nov 2014 19:11:20 -0800" -->
<!-- isosent="20141104031120" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc.openmpi_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [1.8.4rc1] REGRESSION on Solaris-11/x86 with two subnets" -->
<!-- id="060843CD-8DA0-4371-AA70-AEC085EB8771_at_gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAAvDA16mwA=kHD2--zmwH=ccqn3__oFgJ-W2V2sj_Ke2fFgQEg_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-11-03 22:11:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16162.php">Paul Hargrove: "Re: [OMPI devel] [1.8.4rc1] REGRESSION on Solaris-11/x86 with two subnets"</a>
<li><strong>Previous message:</strong> <a href="16160.php">Paul Hargrove: "[OMPI devel] [1.8.4rc1] REGRESSION on Solaris-11/x86 with two subnets"</a>
<li><strong>In reply to:</strong> <a href="16160.php">Paul Hargrove: "[OMPI devel] [1.8.4rc1] REGRESSION on Solaris-11/x86 with two subnets"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16162.php">Paul Hargrove: "Re: [OMPI devel] [1.8.4rc1] REGRESSION on Solaris-11/x86 with two subnets"</a>
<li><strong>Reply:</strong> <a href="16162.php">Paul Hargrove: "Re: [OMPI devel] [1.8.4rc1] REGRESSION on Solaris-11/x86 with two subnets"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Could you please set -mca oob_base_verbose 20? I&#146;m not sure why the connection is failing.
<br>
<p>Thanks
<br>
Ralph
<br>
<p><span class="quotelev1">&gt; On Nov 3, 2014, at 5:56 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Not clear if the following failure is Solaris-specific, but it *IS* a regression relative to 1.8.3.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The system has 2 IPV4 interfaces:
</span><br>
<span class="quotelev1">&gt;    Ethernet on 172.16.0.119/16 &lt;<a href="http://172.16.0.119/16">http://172.16.0.119/16</a>&gt;
</span><br>
<span class="quotelev1">&gt;    IPoIB on 172.18.0.119/16 &lt;<a href="http://172.18.0.119/16">http://172.18.0.119/16</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ ifconfig bge0
</span><br>
<span class="quotelev1">&gt; bge0: flags=1004843&lt;UP,BROADCAST,RUNNING,MULTICAST,DHCP,IPv4&gt; mtu 1500 index 2
</span><br>
<span class="quotelev1">&gt;         inet 172.16.0.119 netmask ffff0000 broadcast 172.16.255.255
</span><br>
<span class="quotelev1">&gt; $ ifconfig pFFFF.ibp0
</span><br>
<span class="quotelev1">&gt; pFFFF.ibp0: flags=1001000843&lt;UP,BROADCAST,RUNNING,MULTICAST,IPv4,FIXEDMTU&gt; mtu 2044 index 3
</span><br>
<span class="quotelev1">&gt;         inet 172.18.0.119 netmask ffff0000 broadcast 172.18.255.255
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, I get a message from mca/oob/tcp about not being able to communicate between these two interfaces ON THE SAME NODE:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ /shared/OMPI/openmpi-1.8.4rc1-solaris11-x86-ib-ss12u3/INST/bin/mpirun -mca btl sm,self,openib -np 1 -host pcp-j-19 examples/ring_c
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
<span class="quotelev1">&gt; Let me know what sort of verbose options I should use to gather any additional info you may need.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Oct 31, 2014 at 7:14 PM, Ralph Castain &lt;rhc.openmpi_at_[hidden] &lt;mailto:rhc.openmpi_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hi folks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I know 1.8.4 isn&#146;t entirely complete just yet, but I&#146;d like to get a head start on the testing so we can release by Fri Nov 7th. So please take a little time and test the current tarball:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/software/ompi/v1.8/">http://www.open-mpi.org/software/ompi/v1.8/</a> &lt;<a href="http://www.open-mpi.org/software/ompi/v1.8/">http://www.open-mpi.org/software/ompi/v1.8/</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16138.php">http://www.open-mpi.org/community/lists/devel/2014/10/16138.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/10/16138.php">http://www.open-mpi.org/community/lists/devel/2014/10/16138.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden] &lt;mailto:PHHargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16160.php">http://www.open-mpi.org/community/lists/devel/2014/11/16160.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16161/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16162.php">Paul Hargrove: "Re: [OMPI devel] [1.8.4rc1] REGRESSION on Solaris-11/x86 with two subnets"</a>
<li><strong>Previous message:</strong> <a href="16160.php">Paul Hargrove: "[OMPI devel] [1.8.4rc1] REGRESSION on Solaris-11/x86 with two subnets"</a>
<li><strong>In reply to:</strong> <a href="16160.php">Paul Hargrove: "[OMPI devel] [1.8.4rc1] REGRESSION on Solaris-11/x86 with two subnets"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16162.php">Paul Hargrove: "Re: [OMPI devel] [1.8.4rc1] REGRESSION on Solaris-11/x86 with two subnets"</a>
<li><strong>Reply:</strong> <a href="16162.php">Paul Hargrove: "Re: [OMPI devel] [1.8.4rc1] REGRESSION on Solaris-11/x86 with two subnets"</a>
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
