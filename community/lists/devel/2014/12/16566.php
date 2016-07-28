<?
$subject_val = "Re: [OMPI devel] [1.8.4rc3] REGRESSION: connection problem on (multi-homed) Solaris host";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 12 19:29:42 2014" -->
<!-- isoreceived="20141213002942" -->
<!-- sent="Fri, 12 Dec 2014 16:29:38 -0800" -->
<!-- isosent="20141213002938" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [1.8.4rc3] REGRESSION: connection problem on (multi-homed) Solaris host" -->
<!-- id="9C09AB4B-7335-4C8F-87D4-884BB403399B_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAAvDA179tQZKCpF32uj0+iU+JLYJgouVUemy6CXTJkofv-t01g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [1.8.4rc3] REGRESSION: connection problem on (multi-homed) Solaris host<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-12 19:29:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16567.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] [1.8.4rc2] orterun SEGVs on Solaris-10/SPARC"</a>
<li><strong>Previous message:</strong> <a href="16565.php">Paul Hargrove: "Re: [OMPI devel] [1.8.4rc3] REGRESSION: connection problem on (multi-homed) Solaris host"</a>
<li><strong>In reply to:</strong> <a href="16565.php">Paul Hargrove: "Re: [OMPI devel] [1.8.4rc3] REGRESSION: connection problem on (multi-homed) Solaris host"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16568.php">Paul Hargrove: "Re: [OMPI devel] [1.8.4rc3] REGRESSION: connection problem on (multi-homed) Solaris host"</a>
<li><strong>Reply:</strong> <a href="16568.php">Paul Hargrove: "Re: [OMPI devel] [1.8.4rc3] REGRESSION: connection problem on (multi-homed) Solaris host"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
All right - I&#146;ll surrender and remove the timeout. Will release rc4 later tonight.
<br>
<p>Sorry for putting you thru this Paul - for some reason, these problems aren&#146;t showing up elsewhere.
<br>
<p><p><span class="quotelev1">&gt; On Dec 12, 2014, at 3:37 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Dec 12, 2014 at 2:58 PM, Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Aha! You are the first to fall thru the timeout. How interesting.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When it comes to the release candidates, I seem to own a lot of &quot;firsts&quot;.
</span><br>
<span class="quotelev1">&gt; It is not as fun as one might imagine :-).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you please try adding &#147;-mca oob_tcp_connect_timeout 5:0&#148;?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That appeared to produce a timeout of about 5 SECONDS (&quot;time mpirun&quot; reports 5.8s elapsed).  Was that really the intent?   No difference if I change &quot;5:0&quot; to &quot;5:00&quot;.  So, you might have an &quot;extra&quot; bug lurking there.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; New stderr attached for
</span><br>
<span class="quotelev1">&gt;   $ mpirun -mca oob_tcp_if_include bge0 -mca oob_tcp_connect_timeout 5:0 -mca oob_base_verbose 20 -mca btl sm,self,openib -np 2 -host pcp-j-19,pcp-j-20 examples/ring_c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Assuming &quot;5:0&quot; was intended to get a 5 MINUTE timeout, I also tried &quot;-mca oob_tcp_connect_timeout 300&quot;, and have also attached the resulting stderr.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No joy for either timeout value.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 12, 2014, at 8:53 AM, Paul Hargrove &lt;phhargrove_at_[hidden] &lt;mailto:phhargrove_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; First, I want to ask what became of the issue discussed in this thread?
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16160.php">http://www.open-mpi.org/community/lists/devel/2014/11/16160.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/11/16160.php">http://www.open-mpi.org/community/lists/devel/2014/11/16160.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I though we had concluded that one just needed -D_REENTRANT.
</span><br>
<span class="quotelev2">&gt;&gt; I mention that only for completeness, because I think my current problem is different.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The following works fine with 1.8.3, making the current behavior a regression.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am still on the same system as that previous report, and still/again see a message like the following:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; A process or daemon was unable to complete a TCP connection
</span><br>
<span class="quotelev2">&gt;&gt; to another process:
</span><br>
<span class="quotelev2">&gt;&gt;   Local host:    pcp-j-19
</span><br>
<span class="quotelev2">&gt;&gt;   Remote host:   172.18.0.120
</span><br>
<span class="quotelev2">&gt;&gt; This is usually caused by a firewall on the remote host. Please
</span><br>
<span class="quotelev2">&gt;&gt; check that any firewall (e.g., iptables) has been disabled and
</span><br>
<span class="quotelev2">&gt;&gt; try again.
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; ORTE was unable to reliably start one or more daemons.
</span><br>
<span class="quotelev2">&gt;&gt; This usually is caused by:
</span><br>
<span class="quotelev2">&gt;&gt; [...etc...]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It may be worth noting that the hostname pcp-j-19 (172.16.0.119) and the address 172.18.0.120 are on different subnets.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I CANNOT resolve the issue this time by adding -D_REENTRANT to CFLAGS at configure time (I didn't bother to check if it there by default now or not).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; NOR can I resolve it by using &quot;-mca oob_tcp_if_include bge0&quot; to allow only the 172.16.0.120 subnet.
</span><br>
<span class="quotelev2">&gt;&gt; IN FACT, the message is the same with that option, other than &quot;172.18&quot; changing to &quot;172.16&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I've attached the output generated by &quot;-mca oob_base_verbose 20&quot; both with and without the oob_tcp_if_include.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I should also note that that the following is my full mpirun command, which excludes the tcp BTL.
</span><br>
<span class="quotelev2">&gt;&gt; pcp-j-20$ mpirun -mca oob_tcp_if_include bge0 -mca oob_base_verbose 20 -mca btl sm,self,openib -np 2 -host pcp-j-19,pcp-j-20 examples/ring_c
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden] &lt;mailto:PHHargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev2">&gt;&gt; Computer Science Department               Tel: +1-510-495-2352 &lt;tel:%2B1-510-495-2352&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900 &lt;tel:%2B1-510-486-6900&gt;&lt;stdout-inc.txt&gt;&lt;stderr-2if.txt&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16551.php">http://www.open-mpi.org/community/lists/devel/2014/12/16551.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/12/16551.php">http://www.open-mpi.org/community/lists/devel/2014/12/16551.php</a>&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16561.php">http://www.open-mpi.org/community/lists/devel/2014/12/16561.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/12/16561.php">http://www.open-mpi.org/community/lists/devel/2014/12/16561.php</a>&gt;
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
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; &lt;stderr-inc-5_0.txt&gt;&lt;stderr-inc-300.txt&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16565.php">http://www.open-mpi.org/community/lists/devel/2014/12/16565.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/12/16565.php">http://www.open-mpi.org/community/lists/devel/2014/12/16565.php</a>&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16566/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16567.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] [1.8.4rc2] orterun SEGVs on Solaris-10/SPARC"</a>
<li><strong>Previous message:</strong> <a href="16565.php">Paul Hargrove: "Re: [OMPI devel] [1.8.4rc3] REGRESSION: connection problem on (multi-homed) Solaris host"</a>
<li><strong>In reply to:</strong> <a href="16565.php">Paul Hargrove: "Re: [OMPI devel] [1.8.4rc3] REGRESSION: connection problem on (multi-homed) Solaris host"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16568.php">Paul Hargrove: "Re: [OMPI devel] [1.8.4rc3] REGRESSION: connection problem on (multi-homed) Solaris host"</a>
<li><strong>Reply:</strong> <a href="16568.php">Paul Hargrove: "Re: [OMPI devel] [1.8.4rc3] REGRESSION: connection problem on (multi-homed) Solaris host"</a>
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
