<?
$subject_val = "Re: [OMPI devel] Master failure of oob_tcp on Solaris";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 20 16:44:25 2015" -->
<!-- isoreceived="20150320204425" -->
<!-- sent="Fri, 20 Mar 2015 13:44:20 -0700" -->
<!-- isosent="20150320204420" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Master failure of oob_tcp on Solaris" -->
<!-- id="CAAvDA16uO3_-8HxmU9OuvFrzMWTPQynki5fd7wVdgOKiPdScPQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAvDA16bk-Ge7bVs7rNO+Q5Ww5eW+RSzAoKcSocJUsikiJuqJA_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-03-20 16:44:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17144.php">Ralph Castain: "Re: [OMPI devel] Master failure of oob_tcp on Solaris"</a>
<li><strong>Previous message:</strong> <a href="17142.php">Paul Hargrove: "Re: [OMPI devel] Master failure of oob_tcp on Solaris"</a>
<li><strong>In reply to:</strong> <a href="17142.php">Paul Hargrove: "Re: [OMPI devel] Master failure of oob_tcp on Solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17144.php">Ralph Castain: "Re: [OMPI devel] Master failure of oob_tcp on Solaris"</a>
<li><strong>Reply:</strong> <a href="17144.php">Ralph Castain: "Re: [OMPI devel] Master failure of oob_tcp on Solaris"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>The ssh message did turn out to be my fault.
<br>
With it resolved I now get the TCP_KEEPALIVE warning 4 times instead of
<br>
once, but the run proceeds just fine.
<br>
<p>So, this is not a failure - just an undesired warning.
<br>
Sorry to have &quot;cried wolf&quot;.
<br>
<p>-Paul
<br>
<p>On Fri, Mar 20, 2015 at 12:01 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, it failed.
</span><br>
<span class="quotelev1">&gt; Sorry, had meant to include more of the output than I did (see below).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My Solaris systems moved (physically relocated the disks) yesterday
</span><br>
<span class="quotelev1">&gt; between what *should* have been essentially identical hardware.  At the
</span><br>
<span class="quotelev1">&gt; moment I am looking into the ssh message, though I am sure I should have
</span><br>
<span class="quotelev1">&gt; all the host keys associated with the correct hostnames and IPs already.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; full output:
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
<span class="quotelev1">&gt; ssh_exchange_identification: Connection closed by remote host^M
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ORTE was unable to reliably start one or more daemons.
</span><br>
<span class="quotelev1">&gt; This usually is caused by:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * not finding the required libraries and/or binaries on
</span><br>
<span class="quotelev1">&gt;   one or more nodes. Please check your PATH and LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt;   settings, or configure OMPI with --enable-orterun-prefix-by-default
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * lack of authority to execute on one or more specified nodes.
</span><br>
<span class="quotelev1">&gt;   Please verify your allocation and authorities.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * the inability to write startup files into /tmp
</span><br>
<span class="quotelev1">&gt; (--tmpdir/orte_tmpdir_base).
</span><br>
<span class="quotelev1">&gt;   Please check with your sys admin to determine the correct location to
</span><br>
<span class="quotelev1">&gt; use.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *  compilation of the orted with dynamic libraries when static are required
</span><br>
<span class="quotelev1">&gt;   (e.g., on Cray). Please check your configure cmd line and consider using
</span><br>
<span class="quotelev1">&gt;   one of the contrib/platform definitions for your system type.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * an inability to create a connection back to mpirun due to a
</span><br>
<span class="quotelev1">&gt;   lack of common network interfaces and/or no route found between
</span><br>
<span class="quotelev1">&gt;   them. Please check network connectivity (including firewalls
</span><br>
<span class="quotelev1">&gt;   and network routing requirements).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Mar 20, 2015 at 7:13 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It should have kept running, albeit with that warning - did the program
</span><br>
<span class="quotelev2">&gt;&gt; actually fail?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 19, 2015, at 10:05 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Seen earlier today with last night's master tarball:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ mpirun -mca btl sm,self,verbs -np 2 -host pcp-j-31,pcp-j-35
</span><br>
<span class="quotelev2">&gt;&gt; examples/ring_c'
</span><br>
<span class="quotelev2">&gt;&gt; [pcp-j-35:01400]
</span><br>
<span class="quotelev2">&gt;&gt; [/shared/OMPI/openmpi-master-solaris11-x64-ib-ss12u3/openmpi-dev-1351-gccba8ce/orte/mca/oob/tcp/oob_tcp_common.c:103]
</span><br>
<span class="quotelev2">&gt;&gt; setsockopt(TCP_KEEPALIVE) failed: Option not supported by protocol (99)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
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
<span class="quotelev2">&gt;&gt;  _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/03/17138.php">http://www.open-mpi.org/community/lists/devel/2015/03/17138.php</a>
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
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/03/17139.php">http://www.open-mpi.org/community/lists/devel/2015/03/17139.php</a>
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
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17143/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17144.php">Ralph Castain: "Re: [OMPI devel] Master failure of oob_tcp on Solaris"</a>
<li><strong>Previous message:</strong> <a href="17142.php">Paul Hargrove: "Re: [OMPI devel] Master failure of oob_tcp on Solaris"</a>
<li><strong>In reply to:</strong> <a href="17142.php">Paul Hargrove: "Re: [OMPI devel] Master failure of oob_tcp on Solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17144.php">Ralph Castain: "Re: [OMPI devel] Master failure of oob_tcp on Solaris"</a>
<li><strong>Reply:</strong> <a href="17144.php">Ralph Castain: "Re: [OMPI devel] Master failure of oob_tcp on Solaris"</a>
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
