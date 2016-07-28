<?
$subject_val = "Re: [OMPI devel] [1.8.4rc3] REGRESSION: connection problem on (multi-homed) Solaris host";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 12 18:37:18 2014" -->
<!-- isoreceived="20141212233718" -->
<!-- sent="Fri, 12 Dec 2014 15:37:14 -0800" -->
<!-- isosent="20141212233714" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [1.8.4rc3] REGRESSION: connection problem on (multi-homed) Solaris host" -->
<!-- id="CAAvDA179tQZKCpF32uj0+iU+JLYJgouVUemy6CXTJkofv-t01g_at_mail.gmail.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="43049725-31A7-4C0D-92DD-6CD7DA65F2CA_at_open-mpi.org" -->
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
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-12 18:37:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16566.php">Ralph Castain: "Re: [OMPI devel] [1.8.4rc3] REGRESSION: connection problem on (multi-homed) Solaris host"</a>
<li><strong>Previous message:</strong> <a href="16564.php">Paul Hargrove: "Re: [OMPI devel] OMPI devel] [1.8.4rc2] orterun SEGVs on Solaris-10/SPARC"</a>
<li><strong>In reply to:</strong> <a href="16561.php">Ralph Castain: "Re: [OMPI devel] [1.8.4rc3] REGRESSION: connection problem on (multi-homed) Solaris host"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16566.php">Ralph Castain: "Re: [OMPI devel] [1.8.4rc3] REGRESSION: connection problem on (multi-homed) Solaris host"</a>
<li><strong>Reply:</strong> <a href="16566.php">Ralph Castain: "Re: [OMPI devel] [1.8.4rc3] REGRESSION: connection problem on (multi-homed) Solaris host"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Dec 12, 2014 at 2:58 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Aha! You are the first to fall thru the timeout. How interesting.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>When it comes to the release candidates, I seem to own a lot of &quot;firsts&quot;.
<br>
It is not as fun as one might imagine :-).
<br>
<p>Can you please try adding &quot;-mca oob_tcp_connect_timeout 5:0&quot;?
<br>
<span class="quotelev1">&gt;
</span><br>
<p>That appeared to produce a timeout of about 5 SECONDS (&quot;time mpirun&quot;
<br>
reports 5.8s elapsed).  Was that really the intent?   No difference if I
<br>
change &quot;5:0&quot; to &quot;5:00&quot;.  So, you might have an &quot;extra&quot; bug lurking there.
<br>
<p><p>New stderr attached for
<br>
&nbsp;&nbsp;$ mpirun -mca oob_tcp_if_include bge0 -mca oob_tcp_connect_timeout 5:0
<br>
-mca oob_base_verbose 20 -mca btl sm,self,openib -np 2 -host
<br>
pcp-j-19,pcp-j-20 examples/ring_c
<br>
<p>Assuming &quot;5:0&quot; was intended to get a 5 MINUTE timeout, I also tried &quot;-mca
<br>
oob_tcp_connect_timeout 300&quot;, and have also attached the resulting stderr.
<br>
<p>No joy for either timeout value.
<br>
<p>-Paul
<br>
<p><p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 12, 2014, at 8:53 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; First, I want to ask what became of the issue discussed in this thread?
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16160.php">http://www.open-mpi.org/community/lists/devel/2014/11/16160.php</a>
</span><br>
<span class="quotelev1">&gt; I though we had concluded that one just needed -D_REENTRANT.
</span><br>
<span class="quotelev1">&gt; I mention that only for completeness, because I think my current problem
</span><br>
<span class="quotelev1">&gt; is different.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The following works fine with 1.8.3, making the current behavior a
</span><br>
<span class="quotelev1">&gt; regression.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am still on the same system as that previous report, and still/again see
</span><br>
<span class="quotelev1">&gt; a message like the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A process or daemon was unable to complete a TCP connection
</span><br>
<span class="quotelev1">&gt; to another process:
</span><br>
<span class="quotelev1">&gt;   Local host:    pcp-j-19
</span><br>
<span class="quotelev1">&gt;   Remote host:   172.18.0.120
</span><br>
<span class="quotelev1">&gt; This is usually caused by a firewall on the remote host. Please
</span><br>
<span class="quotelev1">&gt; check that any firewall (e.g., iptables) has been disabled and
</span><br>
<span class="quotelev1">&gt; try again.
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ORTE was unable to reliably start one or more daemons.
</span><br>
<span class="quotelev1">&gt; This usually is caused by:
</span><br>
<span class="quotelev1">&gt; [...etc...]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It may be worth noting that the hostname pcp-j-19 (172.16.0.119) and the
</span><br>
<span class="quotelev1">&gt; address 172.18.0.120 are on different subnets.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I CANNOT resolve the issue this time by adding -D_REENTRANT to CFLAGS at
</span><br>
<span class="quotelev1">&gt; configure time (I didn't bother to check if it there by default now or not).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; NOR can I resolve it by using &quot;-mca oob_tcp_if_include bge0&quot; to allow only
</span><br>
<span class="quotelev1">&gt; the 172.16.0.120 subnet.
</span><br>
<span class="quotelev1">&gt; IN FACT, the message is the same with that option, other than &quot;172.18&quot;
</span><br>
<span class="quotelev1">&gt; changing to &quot;172.16&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've attached the output generated by &quot;-mca oob_base_verbose 20&quot; both with
</span><br>
<span class="quotelev1">&gt; and without the oob_tcp_if_include.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I should also note that that the following is my full mpirun command,
</span><br>
<span class="quotelev1">&gt; which excludes the tcp BTL.
</span><br>
<span class="quotelev1">&gt; pcp-j-20$ mpirun -mca oob_tcp_if_include bge0 -mca oob_base_verbose 20
</span><br>
<span class="quotelev1">&gt; -mca btl sm,self,openib -np 2 -host pcp-j-19,pcp-j-20 examples/ring_c
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;  &lt;stdout-inc.txt&gt;&lt;stderr-2if.txt&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16551.php">http://www.open-mpi.org/community/lists/devel/2014/12/16551.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16561.php">http://www.open-mpi.org/community/lists/devel/2014/12/16561.php</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16565/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16565/stderr-inc-5_0.txt">stderr-inc-5_0.txt</a>
</ul>
<!-- attachment="stderr-inc-5_0.txt" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16565/stderr-inc-300.txt">stderr-inc-300.txt</a>
</ul>
<!-- attachment="stderr-inc-300.txt" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16566.php">Ralph Castain: "Re: [OMPI devel] [1.8.4rc3] REGRESSION: connection problem on (multi-homed) Solaris host"</a>
<li><strong>Previous message:</strong> <a href="16564.php">Paul Hargrove: "Re: [OMPI devel] OMPI devel] [1.8.4rc2] orterun SEGVs on Solaris-10/SPARC"</a>
<li><strong>In reply to:</strong> <a href="16561.php">Ralph Castain: "Re: [OMPI devel] [1.8.4rc3] REGRESSION: connection problem on (multi-homed) Solaris host"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16566.php">Ralph Castain: "Re: [OMPI devel] [1.8.4rc3] REGRESSION: connection problem on (multi-homed) Solaris host"</a>
<li><strong>Reply:</strong> <a href="16566.php">Ralph Castain: "Re: [OMPI devel] [1.8.4rc3] REGRESSION: connection problem on (multi-homed) Solaris host"</a>
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
