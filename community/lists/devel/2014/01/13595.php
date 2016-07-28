<?
$subject_val = "Re: [OMPI devel] 1.7.4rc2r30031 - FreeBSD mpirun warning";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  8 18:58:54 2014" -->
<!-- isoreceived="20140108235854" -->
<!-- sent="Wed, 8 Jan 2014 15:58:52 -0800" -->
<!-- isosent="20140108235852" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.4rc2r30031 - FreeBSD mpirun warning" -->
<!-- id="CAAvDA17xBtX_27MxrCe63npCEG4Q62NcUy=e79YJob9mffX2Tg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="723E7F8B-66F7-4231-A366-78DF3B9570E4_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.7.4rc2r30031 - FreeBSD mpirun warning<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-08 18:58:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13596.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30031 - FreeBSD mpirun warning"</a>
<li><strong>Previous message:</strong> <a href="13594.php">Paul Hargrove: "[OMPI devel] 1.7.4rc2r30148 - out-of-date mpirun usage output"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/12/13546.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30031 - FreeBSD mpirun warning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13596.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30031 - FreeBSD mpirun warning"</a>
<li><strong>Reply:</strong> <a href="13596.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30031 - FreeBSD mpirun warning"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Dec 20, 2013 at 4:16 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I'll silence it - thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Ralph,
<br>
<p>As of the current tarball (1.7.4rc2r30148) this warning is still present.
<br>
I have also now encountered the identical message on NetBSD-6/x86:
<br>
<p>-bash-4.2$ mpirun -np 1 --bind-to none examples/ring_c
<br>
[pcp-j-17:02298] [[54421,1],0] ORTE_ERROR_LOG: Bad parameter in file
<br>
/home/phargrov/OMPI/openmpi-1.7-latest-netbsd6-i386/openmpi-1.7-latest/orte/mca/oob/tcp/oob_tcp.c
<br>
at line 291
<br>
--------------------------------------------------------------------------
<br>
WARNING: An invalid value was given for btl_tcp_if_exclude.  This
<br>
value will be ignored.
<br>
<p>&nbsp;&nbsp;Local host: pcp-j-17
<br>
&nbsp;&nbsp;Value:      127.0.0.1/8
<br>
&nbsp;&nbsp;Message:    Did not find interface matching this subnet
<br>
--------------------------------------------------------------------------
<br>
<p>-Paul
<br>
<p><p><span class="quotelev1">&gt; On Dec 20, 2013, at 3:20 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Dec 20, 2013 at 3:12 PM, Dave Goodell (dgoodell) &lt;
</span><br>
<span class="quotelev1">&gt; dgoodell_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 20, 2013, at 4:43 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; The warning is correct that no such interface exists.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; However 127.0.0.1/24 DOES exist:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; $ ifconfig lo0 inet
</span><br>
<span class="quotelev3">&gt;&gt; &gt; lo0: flags=8049&lt;UP,LOOPBACK,RUNNING,MULTICAST&gt; metric 0 mtu 16384
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        options=600003&lt;RXCSUM,TXCSUM,RXCSUM_IPV6,TXCSUM_IPV6&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        inet 127.0.0.1 netmask 0xff000000
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Minor quibble, Paul: that looks like 127.0.0.1/8 to me, not /24...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have no specific help to offer for this issue though, sorry.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Right, I think I put my IP hat on backwards.
</span><br>
<span class="quotelev1">&gt; Either way, the loopback interface exists and so the warning is a sign
</span><br>
<span class="quotelev1">&gt; that something is amiss.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW:
</span><br>
<span class="quotelev1">&gt; Trying &quot;mpirun -mca btl self,sm -np 2 examples/ring_c&quot; still hangs (w/o
</span><br>
<span class="quotelev1">&gt; this warning).
</span><br>
<span class="quotelev1">&gt; So, I doubt that issue is related to whatever is going on with respect IP
</span><br>
<span class="quotelev1">&gt; interfaces.
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13595/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13596.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30031 - FreeBSD mpirun warning"</a>
<li><strong>Previous message:</strong> <a href="13594.php">Paul Hargrove: "[OMPI devel] 1.7.4rc2r30148 - out-of-date mpirun usage output"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/12/13546.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30031 - FreeBSD mpirun warning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13596.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30031 - FreeBSD mpirun warning"</a>
<li><strong>Reply:</strong> <a href="13596.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30031 - FreeBSD mpirun warning"</a>
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
