<?
$subject_val = "[OMPI devel] periodic hangs of hello_usempi.x on uh jenkins slave";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  3 14:15:58 2015" -->
<!-- isoreceived="20150903181558" -->
<!-- sent="Thu, 3 Sep 2015 12:15:57 -0600" -->
<!-- isosent="20150903181557" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="[OMPI devel] periodic hangs of hello_usempi.x on uh jenkins slave" -->
<!-- id="CAF1Cqj4YUUGO21Vx-2U5=GJJAyzwYD4csx+AHBJ68gTCSQxG+Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] periodic hangs of hello_usempi.x on uh jenkins slave<br>
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-03 14:15:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17944.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove --without-hwloc configure option"</a>
<li><strong>Previous message:</strong> <a href="17942.php">Paul Hargrove: "Re: [OMPI devel] RFC: Remove --without-hwloc configure option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17946.php">Ralph Castain: "Re: [OMPI devel] periodic hangs of hello_usempi.x on uh jenkins slave"</a>
<li><strong>Reply:</strong> <a href="17946.php">Ralph Castain: "Re: [OMPI devel] periodic hangs of hello_usempi.x on uh jenkins slave"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Folks,
<br>
<p>I'm seeing again a case of a hang (yes I'm going to start using timeout) of
<br>
a two process
<br>
run on the iu jenkins server for master.  This is the --disable-dlopen
<br>
jenkins project for
<br>
the IU jenkins server.
<br>
<p>I attached to the hanging processes and get this for a backtrace:
<br>
<p>#0  0x00007fdd4ca7ae94 in recv () from /lib64/libpthread.so.0
<br>
<p>#1  0x00007fdd4bab622a in opal_pmix_pmix1xx_pmix_usock_recv_blocking
<br>
(sd=13, data=0x7fff9342fb78 &quot;&amp;&quot;, size=4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;at src/usock/usock.c:157
<br>
<p>#2  0x00007fdd4babad69 in recv_connect_ack (sd=13) at
<br>
src/client/pmix_client.c:777
<br>
<p>#3  0x00007fdd4babbc59 in usock_connect (addr=0x7fff9342fe80) at
<br>
src/client/pmix_client.c:1026
<br>
<p>#4  0x00007fdd4bab88ae in connect_to_server (address=0x7fff9342fe80,
<br>
cbdata=0x7fff9342fc30) at src/client/pmix_client.c:177
<br>
<p>#5  0x00007fdd4bab90f7 in OPAL_PMIX_PMIX1XX_PMIx_Init (proc=0x7fdd4c2e9820
<br>
&lt;myproc&gt;) at src/client/pmix_client.c:329
<br>
<p>#6  0x00007fdd4bff1892 in pmix1_client_init () at pmix1_client.c:58
<br>
<p>#7  0x00007fdd4c37ce1d in pmi_component_query (module=0x7fff9342ffd0,
<br>
priority=0x7fff9342ffcc) at ess_pmi_component.c:89
<br>
<p>#8  0x00007fdd4bf54c38 in mca_base_select (type_name=0x7fdd4c45e5b9 &quot;ess&quot;,
<br>
output_id=-1,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;components_available=0x7fdd4c6b21d0 &lt;orte_ess_base_framework+80&gt;,
<br>
best_module=0x7fff93430000, best_component=0x7fff93430008)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;at mca_base_components_select.c:73
<br>
<p>#9  0x00007fdd4c373f0d in orte_ess_base_select () at
<br>
base/ess_base_select.c:39
<br>
<p>#10 0x00007fdd4c312fed in orte_init (pargc=0x0, pargv=0x0, flags=32) at
<br>
runtime/orte_init.c:221
<br>
<p>#11 0x00007fdd4d788e26 in ompi_mpi_init (argc=0, argv=0x0, requested=0,
<br>
provided=0x7fff934300fc) at runtime/ompi_mpi_init.c:468
<br>
<p>#12 0x00007fdd4d7be27a in PMPI_Init (argc=0x7fff93430138,
<br>
argv=0x7fff93430130) at pinit.c:84
<br>
<p>#13 0x00007fdd4dce515e in ompi_init_f (ierr=0x7fff9343043c) at pinit_f.c:82
<br>
<p>#14 0x0000000000400dff in MAIN__ ()
<br>
<p>#15 0x0000000000400f38 in main ()
<br>
<p>This seems to only happen periodically.
<br>
<p>Any suggestions on how to further analyze?
<br>
<p>Howard
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17943/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17944.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove --without-hwloc configure option"</a>
<li><strong>Previous message:</strong> <a href="17942.php">Paul Hargrove: "Re: [OMPI devel] RFC: Remove --without-hwloc configure option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17946.php">Ralph Castain: "Re: [OMPI devel] periodic hangs of hello_usempi.x on uh jenkins slave"</a>
<li><strong>Reply:</strong> <a href="17946.php">Ralph Castain: "Re: [OMPI devel] periodic hangs of hello_usempi.x on uh jenkins slave"</a>
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
