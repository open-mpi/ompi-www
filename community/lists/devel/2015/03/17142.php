<?
$subject_val = "Re: [OMPI devel] Master failure of oob_tcp on Solaris";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 20 15:01:41 2015" -->
<!-- isoreceived="20150320190141" -->
<!-- sent="Fri, 20 Mar 2015 12:01:34 -0700" -->
<!-- isosent="20150320190134" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Master failure of oob_tcp on Solaris" -->
<!-- id="CAAvDA16bk-Ge7bVs7rNO+Q5Ww5eW+RSzAoKcSocJUsikiJuqJA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="DC82AAA0-DEBA-4BCD-A6D4-B2AFCDAF70DC_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Master failure of oob_tcp on Solaris<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-20 15:01:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17143.php">Paul Hargrove: "Re: [OMPI devel] Master failure of oob_tcp on Solaris"</a>
<li><strong>Previous message:</strong> <a href="17141.php">Ralph Castain: "Re: [OMPI devel] New binding warnings in master"</a>
<li><strong>In reply to:</strong> <a href="17139.php">Ralph Castain: "Re: [OMPI devel] Master failure of oob_tcp on Solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17143.php">Paul Hargrove: "Re: [OMPI devel] Master failure of oob_tcp on Solaris"</a>
<li><strong>Reply:</strong> <a href="17143.php">Paul Hargrove: "Re: [OMPI devel] Master failure of oob_tcp on Solaris"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>Yes, it failed.
<br>
Sorry, had meant to include more of the output than I did (see below).
<br>
<p>My Solaris systems moved (physically relocated the disks) yesterday between
<br>
what *should* have been essentially identical hardware.  At the moment I am
<br>
looking into the ssh message, though I am sure I should have all the host
<br>
keys associated with the correct hostnames and IPs already.
<br>
<p>-Paul
<br>
<p>full output:
<br>
<p>$ mpirun -mca btl sm,self,verbs -np 2 -host pcp-j-31,pcp-j-35
<br>
examples/ring_c'
<br>
[pcp-j-35:01400]
<br>
[/shared/OMPI/openmpi-master-solaris11-x64-ib-ss12u3/openmpi-dev-1351-gccba8ce/orte/mca/oob/tcp/oob_tcp_common.c:103]
<br>
setsockopt(TCP_KEEPALIVE) failed: Option not supported by protocol (99)
<br>
ssh_exchange_identification: Connection closed by remote host^M
<br>
--------------------------------------------------------------------------
<br>
ORTE was unable to reliably start one or more daemons.
<br>
This usually is caused by:
<br>
<p>* not finding the required libraries and/or binaries on
<br>
&nbsp;&nbsp;one or more nodes. Please check your PATH and LD_LIBRARY_PATH
<br>
&nbsp;&nbsp;settings, or configure OMPI with --enable-orterun-prefix-by-default
<br>
<p>* lack of authority to execute on one or more specified nodes.
<br>
&nbsp;&nbsp;Please verify your allocation and authorities.
<br>
<p>* the inability to write startup files into /tmp
<br>
(--tmpdir/orte_tmpdir_base).
<br>
&nbsp;&nbsp;Please check with your sys admin to determine the correct location to use.
<br>
<p>*  compilation of the orted with dynamic libraries when static are required
<br>
&nbsp;&nbsp;(e.g., on Cray). Please check your configure cmd line and consider using
<br>
&nbsp;&nbsp;one of the contrib/platform definitions for your system type.
<br>
<p>* an inability to create a connection back to mpirun due to a
<br>
&nbsp;&nbsp;lack of common network interfaces and/or no route found between
<br>
&nbsp;&nbsp;them. Please check network connectivity (including firewalls
<br>
&nbsp;&nbsp;and network routing requirements).
<br>
--------------------------------------------------------------------------
<br>
<p><p><p><p>On Fri, Mar 20, 2015 at 7:13 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It should have kept running, albeit with that warning - did the program
</span><br>
<span class="quotelev1">&gt; actually fail?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 19, 2015, at 10:05 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Seen earlier today with last night's master tarball:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpirun -mca btl sm,self,verbs -np 2 -host pcp-j-31,pcp-j-35
</span><br>
<span class="quotelev1">&gt; examples/ring_c'
</span><br>
<span class="quotelev1">&gt; [pcp-j-35:01400]
</span><br>
<span class="quotelev1">&gt; [/shared/OMPI/openmpi-master-solaris11-x64-ib-ss12u3/openmpi-dev-1351-gccba8ce/orte/mca/oob/tcp/oob_tcp_common.c:103]
</span><br>
<span class="quotelev1">&gt; setsockopt(TCP_KEEPALIVE) failed: Option not supported by protocol (99)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/03/17138.php">http://www.open-mpi.org/community/lists/devel/2015/03/17138.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/03/17139.php">http://www.open-mpi.org/community/lists/devel/2015/03/17139.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17142/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17143.php">Paul Hargrove: "Re: [OMPI devel] Master failure of oob_tcp on Solaris"</a>
<li><strong>Previous message:</strong> <a href="17141.php">Ralph Castain: "Re: [OMPI devel] New binding warnings in master"</a>
<li><strong>In reply to:</strong> <a href="17139.php">Ralph Castain: "Re: [OMPI devel] Master failure of oob_tcp on Solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17143.php">Paul Hargrove: "Re: [OMPI devel] Master failure of oob_tcp on Solaris"</a>
<li><strong>Reply:</strong> <a href="17143.php">Paul Hargrove: "Re: [OMPI devel] Master failure of oob_tcp on Solaris"</a>
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
