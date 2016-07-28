<?
$subject_val = "Re: [OMPI devel] periodic hangs of hello_usempi.x on uh jenkins slave";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  3 15:12:55 2015" -->
<!-- isoreceived="20150903191255" -->
<!-- sent="Thu, 3 Sep 2015 12:12:52 -0700" -->
<!-- isosent="20150903191252" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] periodic hangs of hello_usempi.x on uh jenkins slave" -->
<!-- id="3124E5FF-A5D3-4A00-A136-AEB00D70DFE0_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAF1Cqj4YUUGO21Vx-2U5=GJJAyzwYD4csx+AHBJ68gTCSQxG+Q_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-03 15:12:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17947.php">Howard Pritchard: "Re: [OMPI devel] periodic hangs of hello_usempi.x on uh jenkins slave"</a>
<li><strong>Previous message:</strong> <a href="17945.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-2436-g7adb9b7"</a>
<li><strong>In reply to:</strong> <a href="17943.php">Howard Pritchard: "[OMPI devel] periodic hangs of hello_usempi.x on uh jenkins slave"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17947.php">Howard Pritchard: "Re: [OMPI devel] periodic hangs of hello_usempi.x on uh jenkins slave"</a>
<li><strong>Reply:</strong> <a href="17947.php">Howard Pritchard: "Re: [OMPI devel] periodic hangs of hello_usempi.x on uh jenkins slave"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I&#226;&#128;&#153;ll try to replicate, and provide some diagnostics targeting this exchange. What is happening is that the client process is attempting to connect to the ORTE daemon, and for some reason the connection isn&#226;&#128;&#153;t generating a response from the daemon.
<br>
<p>I&#226;&#128;&#153;ll also add a timeout function in there so we don&#226;&#128;&#153;t hang when this happens, but instead cleanly error out.
<br>
<p><p><span class="quotelev1">&gt; On Sep 3, 2015, at 11:15 AM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Folks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm seeing again a case of a hang (yes I'm going to start using timeout) of a two process
</span><br>
<span class="quotelev1">&gt; run on the iu jenkins server for master.  This is the --disable-dlopen jenkins project for
</span><br>
<span class="quotelev1">&gt; the IU jenkins server.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I attached to the hanging processes and get this for a backtrace:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #0  0x00007fdd4ca7ae94 in recv () from /lib64/libpthread.so.0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #1  0x00007fdd4bab622a in opal_pmix_pmix1xx_pmix_usock_recv_blocking (sd=13, data=0x7fff9342fb78 &quot;&amp;&quot;, size=4)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     at src/usock/usock.c:157
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #2  0x00007fdd4babad69 in recv_connect_ack (sd=13) at src/client/pmix_client.c:777
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #3  0x00007fdd4babbc59 in usock_connect (addr=0x7fff9342fe80) at src/client/pmix_client.c:1026
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #4  0x00007fdd4bab88ae in connect_to_server (address=0x7fff9342fe80, cbdata=0x7fff9342fc30) at src/client/pmix_client.c:177
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #5  0x00007fdd4bab90f7 in OPAL_PMIX_PMIX1XX_PMIx_Init (proc=0x7fdd4c2e9820 &lt;myproc&gt;) at src/client/pmix_client.c:329
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #6  0x00007fdd4bff1892 in pmix1_client_init () at pmix1_client.c:58
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #7  0x00007fdd4c37ce1d in pmi_component_query (module=0x7fff9342ffd0, priority=0x7fff9342ffcc) at ess_pmi_component.c:89
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #8  0x00007fdd4bf54c38 in mca_base_select (type_name=0x7fdd4c45e5b9 &quot;ess&quot;, output_id=-1, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     components_available=0x7fdd4c6b21d0 &lt;orte_ess_base_framework+80&gt;, best_module=0x7fff93430000, best_component=0x7fff93430008)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     at mca_base_components_select.c:73
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #9  0x00007fdd4c373f0d in orte_ess_base_select () at base/ess_base_select.c:39
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #10 0x00007fdd4c312fed in orte_init (pargc=0x0, pargv=0x0, flags=32) at runtime/orte_init.c:221
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #11 0x00007fdd4d788e26 in ompi_mpi_init (argc=0, argv=0x0, requested=0, provided=0x7fff934300fc) at runtime/ompi_mpi_init.c:468
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #12 0x00007fdd4d7be27a in PMPI_Init (argc=0x7fff93430138, argv=0x7fff93430130) at pinit.c:84
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #13 0x00007fdd4dce515e in ompi_init_f (ierr=0x7fff9343043c) at pinit_f.c:82
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #14 0x0000000000400dff in MAIN__ ()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #15 0x0000000000400f38 in main ()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This seems to only happen periodically.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any suggestions on how to further analyze?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Howard
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/09/17943.php">http://www.open-mpi.org/community/lists/devel/2015/09/17943.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17946/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17947.php">Howard Pritchard: "Re: [OMPI devel] periodic hangs of hello_usempi.x on uh jenkins slave"</a>
<li><strong>Previous message:</strong> <a href="17945.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-2436-g7adb9b7"</a>
<li><strong>In reply to:</strong> <a href="17943.php">Howard Pritchard: "[OMPI devel] periodic hangs of hello_usempi.x on uh jenkins slave"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17947.php">Howard Pritchard: "Re: [OMPI devel] periodic hangs of hello_usempi.x on uh jenkins slave"</a>
<li><strong>Reply:</strong> <a href="17947.php">Howard Pritchard: "Re: [OMPI devel] periodic hangs of hello_usempi.x on uh jenkins slave"</a>
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
