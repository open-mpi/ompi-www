<?
$subject_val = "Re: [OMPI devel] periodic hangs of hello_usempi.x on uh jenkins slave";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  3 15:53:49 2015" -->
<!-- isoreceived="20150903195349" -->
<!-- sent="Thu, 3 Sep 2015 13:53:47 -0600" -->
<!-- isosent="20150903195347" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] periodic hangs of hello_usempi.x on uh jenkins slave" -->
<!-- id="CAF1Cqj5EPGv6M07ZqTrd5uLWAX4ua2Eaop8ntnvODE=0yk3YoA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="AF9A6414-A33A-48F0-BB31-08FE25DF3BBC_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] periodic hangs of hello_usempi.x on uh jenkins slave<br>
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-03 15:53:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17950.php">Burette, Yohann: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master	updated.	dev-2436-g7adb9b7"</a>
<li><strong>Previous message:</strong> <a href="17948.php">Ralph Castain: "Re: [OMPI devel] periodic hangs of hello_usempi.x on uh jenkins slave"</a>
<li><strong>In reply to:</strong> <a href="17948.php">Ralph Castain: "Re: [OMPI devel] periodic hangs of hello_usempi.x on uh jenkins slave"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17957.php">Ralph Castain: "Re: [OMPI devel] periodic hangs of hello_usempi.x on uh jenkins slave"</a>
<li><strong>Reply:</strong> <a href="17957.php">Ralph Castain: "Re: [OMPI devel] periodic hangs of hello_usempi.x on uh jenkins slave"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
HI Ralph,
<br>
<p>If its any help,  the first run has yet to hang.  Its always one of the
<br>
subsequent mpirun's (and hence why its the fortran)
<br>
that shows this problem.
<br>
<p>Howard
<br>
<p><p>2015-09-03 13:52 GMT-06:00 Ralph Castain &lt;rhc_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Thanks! I&#226;&#128;&#153;ll at least try, and can certainly provide some diag output
</span><br>
<span class="quotelev1">&gt; (just have to live thru it when it doesn&#226;&#128;&#153;t fail, and hopefully it won&#226;&#128;&#153;t
</span><br>
<span class="quotelev1">&gt; change the timing so much that it won&#226;&#128;&#153;t reproduce any more)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 3, 2015, at 12:44 PM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Warning that it seems to be hard to reproduce, at least on the UH server.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Howard
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2015-09-03 13:12 GMT-06:00 Ralph Castain &lt;rhc_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I&#226;&#128;&#153;ll try to replicate, and provide some diagnostics targeting this
</span><br>
<span class="quotelev2">&gt;&gt; exchange. What is happening is that the client process is attempting to
</span><br>
<span class="quotelev2">&gt;&gt; connect to the ORTE daemon, and for some reason the connection isn&#226;&#128;&#153;t
</span><br>
<span class="quotelev2">&gt;&gt; generating a response from the daemon.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I&#226;&#128;&#153;ll also add a timeout function in there so we don&#226;&#128;&#153;t hang when this
</span><br>
<span class="quotelev2">&gt;&gt; happens, but instead cleanly error out.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 3, 2015, at 11:15 AM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Folks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm seeing again a case of a hang (yes I'm going to start using timeout)
</span><br>
<span class="quotelev2">&gt;&gt; of a two process
</span><br>
<span class="quotelev2">&gt;&gt; run on the iu jenkins server for master.  This is the --disable-dlopen
</span><br>
<span class="quotelev2">&gt;&gt; jenkins project for
</span><br>
<span class="quotelev2">&gt;&gt; the IU jenkins server.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I attached to the hanging processes and get this for a backtrace:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #0  0x00007fdd4ca7ae94 in recv () from /lib64/libpthread.so.0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #1  0x00007fdd4bab622a in opal_pmix_pmix1xx_pmix_usock_recv_blocking
</span><br>
<span class="quotelev2">&gt;&gt; (sd=13, data=0x7fff9342fb78 &quot;&amp;&quot;, size=4)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     at src/usock/usock.c:157
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #2  0x00007fdd4babad69 in recv_connect_ack (sd=13) at
</span><br>
<span class="quotelev2">&gt;&gt; src/client/pmix_client.c:777
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #3  0x00007fdd4babbc59 in usock_connect (addr=0x7fff9342fe80) at
</span><br>
<span class="quotelev2">&gt;&gt; src/client/pmix_client.c:1026
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #4  0x00007fdd4bab88ae in connect_to_server (address=0x7fff9342fe80,
</span><br>
<span class="quotelev2">&gt;&gt; cbdata=0x7fff9342fc30) at src/client/pmix_client.c:177
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #5  0x00007fdd4bab90f7 in OPAL_PMIX_PMIX1XX_PMIx_Init
</span><br>
<span class="quotelev2">&gt;&gt; (proc=0x7fdd4c2e9820 &lt;myproc&gt;) at src/client/pmix_client.c:329
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #6  0x00007fdd4bff1892 in pmix1_client_init () at pmix1_client.c:58
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #7  0x00007fdd4c37ce1d in pmi_component_query (module=0x7fff9342ffd0,
</span><br>
<span class="quotelev2">&gt;&gt; priority=0x7fff9342ffcc) at ess_pmi_component.c:89
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #8  0x00007fdd4bf54c38 in mca_base_select (type_name=0x7fdd4c45e5b9
</span><br>
<span class="quotelev2">&gt;&gt; &quot;ess&quot;, output_id=-1,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     components_available=0x7fdd4c6b21d0 &lt;orte_ess_base_framework+80&gt;,
</span><br>
<span class="quotelev2">&gt;&gt; best_module=0x7fff93430000, best_component=0x7fff93430008)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     at mca_base_components_select.c:73
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #9  0x00007fdd4c373f0d in orte_ess_base_select () at
</span><br>
<span class="quotelev2">&gt;&gt; base/ess_base_select.c:39
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #10 0x00007fdd4c312fed in orte_init (pargc=0x0, pargv=0x0, flags=32) at
</span><br>
<span class="quotelev2">&gt;&gt; runtime/orte_init.c:221
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #11 0x00007fdd4d788e26 in ompi_mpi_init (argc=0, argv=0x0, requested=0,
</span><br>
<span class="quotelev2">&gt;&gt; provided=0x7fff934300fc) at runtime/ompi_mpi_init.c:468
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #12 0x00007fdd4d7be27a in PMPI_Init (argc=0x7fff93430138,
</span><br>
<span class="quotelev2">&gt;&gt; argv=0x7fff93430130) at pinit.c:84
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #13 0x00007fdd4dce515e in ompi_init_f (ierr=0x7fff9343043c) at
</span><br>
<span class="quotelev2">&gt;&gt; pinit_f.c:82
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #14 0x0000000000400dff in MAIN__ ()
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #15 0x0000000000400f38 in main ()
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This seems to only happen periodically.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any suggestions on how to further analyze?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Howard
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/09/17943.php">http://www.open-mpi.org/community/lists/devel/2015/09/17943.php</a>
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/09/17946.php">http://www.open-mpi.org/community/lists/devel/2015/09/17946.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/09/17947.php">http://www.open-mpi.org/community/lists/devel/2015/09/17947.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/09/17948.php">http://www.open-mpi.org/community/lists/devel/2015/09/17948.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17949/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17950.php">Burette, Yohann: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master	updated.	dev-2436-g7adb9b7"</a>
<li><strong>Previous message:</strong> <a href="17948.php">Ralph Castain: "Re: [OMPI devel] periodic hangs of hello_usempi.x on uh jenkins slave"</a>
<li><strong>In reply to:</strong> <a href="17948.php">Ralph Castain: "Re: [OMPI devel] periodic hangs of hello_usempi.x on uh jenkins slave"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17957.php">Ralph Castain: "Re: [OMPI devel] periodic hangs of hello_usempi.x on uh jenkins slave"</a>
<li><strong>Reply:</strong> <a href="17957.php">Ralph Castain: "Re: [OMPI devel] periodic hangs of hello_usempi.x on uh jenkins slave"</a>
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
