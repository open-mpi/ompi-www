<?
$subject_val = "Re: [OMPI devel] 1.8.4rc Status";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 15 20:47:34 2014" -->
<!-- isoreceived="20141216014734" -->
<!-- sent="Mon, 15 Dec 2014 17:47:32 -0800" -->
<!-- isosent="20141216014732" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.8.4rc Status" -->
<!-- id="CAAvDA17cvCPP6hgG6yJSAzP1jHQxyYemOGAh=uWsT86U+zgjAA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAvDA143G1fhp7Bid+09+UZYgLA9Z0HQ6KUs4RA-=usz8-oyQA_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-12-15 20:47:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16608.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.8.4rc Status"</a>
<li><strong>Previous message:</strong> <a href="16606.php">Ralph Castain: "Re: [OMPI devel] 1.8.4rc Status"</a>
<li><strong>In reply to:</strong> <a href="16605.php">Paul Hargrove: "Re: [OMPI devel] 1.8.4rc Status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16608.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.8.4rc Status"</a>
<li><strong>Reply:</strong> <a href="16608.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.8.4rc Status"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have tried with a oob_tcp_if_include setting so that there is now only 1
<br>
interface.
<br>
Even with just one interface and -mt=yes in both LDFLAGS and
<br>
wrapper-ldflags I *still* getting messages like
<br>
<p>[pcp-j-20:11470] mca_oob_tcp_accept: accept() failed: Error 0 (0).
<br>
------------------------------------------------------------
<br>
A process or daemon was unable to complete a TCP connection
<br>
to another process:
<br>
&nbsp;&nbsp;Local host:    pcp-j-20
<br>
&nbsp;&nbsp;Remote host:   172.16.0.120
<br>
This is usually caused by a firewall on the remote host. Please
<br>
check that any firewall (e.g., iptables) has been disabled and
<br>
try again.
<br>
------------------------------------------------------------
<br>
<p><p>I am getting less certain that my speculation about thread-safe libs is
<br>
correct.
<br>
<p>-Paul
<br>
<p>On Mon, Dec 15, 2014 at 1:24 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A little more reading finds that...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Docs says that one needs &quot;-mt&quot; without the &quot;=yes&quot;.
</span><br>
<span class="quotelev1">&gt; That will work for both old and new compilers, where &quot;-mt=yes&quot; chokes
</span><br>
<span class="quotelev1">&gt; older ones.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, man pages say &quot;-mt&quot; must come before &quot;-lpthread&quot; in the link command.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Dec 15, 2014 at 12:52 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, Dec 15, 2014 at 5:35 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 7. Linkage issue on Solaris-11 reported by Paul Hargrove. Missing the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; multi-threaded C libraries, apparently need &quot;-mt=yes&quot; in both compile and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; link. Need someone to investigate.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The lack of multi-thread libraries is my SPECULATION.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The fact that configuring with LDFLAGS=-mt=yes did not help may or may
</span><br>
<span class="quotelev2">&gt;&gt; not prove anything.
</span><br>
<span class="quotelev2">&gt;&gt; I didn't see them in &quot;mpicc -show&quot; and so maybe they needed to be in
</span><br>
<span class="quotelev2">&gt;&gt; wrapper-ldflags instead.
</span><br>
<span class="quotelev2">&gt;&gt; My time this week is quite limited, but I can &quot;fire an forget&quot; tests of
</span><br>
<span class="quotelev2">&gt;&gt; any tarballs you provide.
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
<span class="quotelev2">&gt;&gt;
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
<p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16607/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16608.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.8.4rc Status"</a>
<li><strong>Previous message:</strong> <a href="16606.php">Ralph Castain: "Re: [OMPI devel] 1.8.4rc Status"</a>
<li><strong>In reply to:</strong> <a href="16605.php">Paul Hargrove: "Re: [OMPI devel] 1.8.4rc Status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16608.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.8.4rc Status"</a>
<li><strong>Reply:</strong> <a href="16608.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.8.4rc Status"</a>
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
