<?
$subject_val = "[OMPI devel] 1.8.5rc1 and OOB on Cray XC30";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 16 16:29:24 2015" -->
<!-- isoreceived="20150416202924" -->
<!-- sent="Thu, 16 Apr 2015 16:29:21 -0400" -->
<!-- isosent="20150416202921" -->
<!-- name="Aur&#195;&#169;lien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.8.5rc1 and OOB on Cray XC30" -->
<!-- id="C0DFD52C-65B5-456C-AF57-5DFB623B3DEF_at_icl.utk.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA14B7h1_hdH9xG=JUUZOEKeXx4+mAitR=5php98gh0Kykg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] 1.8.5rc1 and OOB on Cray XC30<br>
<strong>From:</strong> Aur&#195;&#169;lien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-16 16:29:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17235.php">Nathan Hjelm: "Re: [OMPI devel] 1.8.5rc1 and OOB on Cray XC30"</a>
<li><strong>Previous message:</strong> <a href="17233.php">Gilles Gouaillardet: "Re: [OMPI devel] Common symbols warning"</a>
<li><strong>In reply to:</strong> <a href="17181.php">Paul Hargrove: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17235.php">Nathan Hjelm: "Re: [OMPI devel] 1.8.5rc1 and OOB on Cray XC30"</a>
<li><strong>Reply:</strong> <a href="17235.php">Nathan Hjelm: "Re: [OMPI devel] 1.8.5rc1 and OOB on Cray XC30"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Improved support for Cray
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cray's compilers, networks or the programming environment in general?
</span><br>
<p>I can compile on our Cray XC30, but not run with the options I used previously with trunk. Is there some secret sauce I am missing here ?
<br>
I get an error with OOB on the node daemons. ESS PMI, RAS and PLM ALPS.
<br>
<p><p>/lustre/medusa/bouteill/openmpi-1.8.5rc1/bin/mpirun -np 1   -mca btl ugni,sm,self -mca coll tuned,basic,self -mca orte_tmpdir_base /var/tmp -mca plm_base_strip_prefix_from_node_names 1 -nolocal -novm  --debug-daemons -mca oob_base_verbose 1000 -mca ras_alps_apstat_cmd $(which apstat) -mca ras alps  -mca oob_tcp_if_include ipogif0  -map-by node hostname
<br>
[aprun6-darter:16915] mca: base: components_register: registering oob components
<br>
[aprun6-darter:16915] mca: base: components_register: found loaded component tcp
<br>
[aprun6-darter:16915] mca: base: components_register: component tcp register function successful
<br>
[aprun6-darter:16915] mca: base: components_open: opening oob components
<br>
[aprun6-darter:16915] mca: base: components_open: found loaded component tcp
<br>
[aprun6-darter:16915] mca: base: components_open: component tcp open function successful
<br>
[aprun6-darter:16915] mca:oob:select: checking available component tcp
<br>
[aprun6-darter:16915] mca:oob:select: Querying component [tcp]
<br>
[aprun6-darter:16915] oob:tcp: component_available called
<br>
[aprun6-darter:16915] WORKING INTERFACE 1 KERNEL INDEX 1 FAMILY: V4
<br>
[aprun6-darter:16915] [[54804,0],0] oob:tcp:init rejecting interface lo (not in include list)
<br>
[aprun6-darter:16915] WORKING INTERFACE 2 KERNEL INDEX 1 FAMILY: V4
<br>
[aprun6-darter:16915] [[54804,0],0] oob:tcp:init rejecting interface lo (not in include list)
<br>
[aprun6-darter:16915] WORKING INTERFACE 3 KERNEL INDEX 3 FAMILY: V4
<br>
[aprun6-darter:16915] [[54804,0],0] oob:tcp:init adding 10.128.2.134 to our list of V4 connections
<br>
[aprun6-darter:16915] WORKING INTERFACE 4 KERNEL INDEX 5 FAMILY: V4
<br>
[aprun6-darter:16915] [[54804,0],0] oob:tcp:init rejecting interface eth1 (not in include list)
<br>
[aprun6-darter:16915] [[54804,0],0] TCP STARTUP
<br>
[aprun6-darter:16915] [[54804,0],0] attempting to bind to IPv4 port 0
<br>
[aprun6-darter:16915] [[54804,0],0] assigned IPv4 port 57286
<br>
[aprun6-darter:16915] mca:oob:select: Adding component to end
<br>
[aprun6-darter:16915] mca:oob:select: Found 1 active transports
<br>
[nid00414:32573] mca: base: components_register: registering oob components
<br>
[nid00414:32573] mca: base: components_register: found loaded component tcp
<br>
[nid00414:32573] mca: base: components_register: component tcp register function successful
<br>
[nid00414:32573] mca: base: components_open: opening oob components
<br>
[nid00414:32573] mca: base: components_open: found loaded component tcp
<br>
[nid00414:32573] mca: base: components_open: component tcp open function successful
<br>
[nid00414:32573] mca:oob:select: checking available component tcp
<br>
[nid00414:32573] mca:oob:select: Querying component [tcp]
<br>
[nid00414:32573] oob:tcp: component_available called
<br>
[nid00414:32573] WORKING INTERFACE 1 KERNEL INDEX 1 FAMILY: V4
<br>
[nid00414:32573] [[54804,0],1] oob:tcp:init rejecting interface lo (not in include list)
<br>
[nid00414:32573] WORKING INTERFACE 2 KERNEL INDEX 2 FAMILY: V4
<br>
[nid00414:32573] [[54804,0],1] oob:tcp:init adding 10.128.1.161 to our list of V4 connections
<br>
[nid00414:32573] [[54804,0],1] TCP STARTUP
<br>
[nid00414:32573] [[54804,0],1] attempting to bind to IPv4 port 0
<br>
[nid00414:32573] [[54804,0],1] assigned IPv4 port 57372
<br>
[nid00414:32573] mca:oob:select: Adding component to end
<br>
[nid00414:32573] mca:oob:select: Found 1 active transports
<br>
Daemon [[54804,0],1] checking in as pid 32573 on host nid00414
<br>
[nid00414:32573] [[54804,0],1] orted: up and running - waiting for commands!
<br>
[nid00414:32573] [[54804,0],1] OOB_SEND: rml_oob_send.c:199
<br>
[nid00414:32573] [[54804,0],1] OOB_SEND: rml_oob_send.c:199
<br>
[nid00414:32573] [[54804,0],1]: set_addr to uri 3591634944.0;tcp://10.128.2.134:57286
<br>
[nid00414:32573] [[54804,0],1]:set_addr checking if peer [[54804,0],0] is reachable via component tcp
<br>
[nid00414:32573] [[54804,0],1] oob:tcp: working peer [[54804,0],0] address tcp://10.128.2.134:57286
<br>
[nid00414:32573] [[54804,0],1] PASSING ADDR 10.128.2.134 TO MODULE
<br>
[nid00414:32573] [[54804,0],1]:tcp set addr for peer [[54804,0],0]
<br>
[nid00414:32573] [[54804,0],1]: peer [[54804,0],0] is reachable via component tcp
<br>
[nid00414:32573] [[54804,0],1] OOB_SEND: rml_oob_send.c:199
<br>
[nid00414:32573] [[54804,0],1] oob:base:send to target [[INVALID],INVALID]
<br>
[nid00414:32573] [[54804,0],1] oob:base:send unknown peer [[INVALID],INVALID]
<br>
[nid00414:32573] [[54804,0],1] is NOT reachable by TCP
<br>
Application 1329706 exit codes: 1
<br>
Application 1329706 resources: utime ~0s, stime ~0s, Rss ~5304, inblocks ~6404, outblocks ~28
<br>
--------------------------------------------------------------------------
<br>
An ORTE daemon has unexpectedly failed after launch and before
<br>
communicating back to mpirun. This could be caused by a number
<br>
of factors, including an inability to create a connection back
<br>
to mpirun due to a lack of common network interfaces and/or no
<br>
route found between them. Please check network connectivity
<br>
(including firewalls and network routing requirements).
<br>
--------------------------------------------------------------------------
<br>
[aprun6-darter:16915] [[54804,0],0] TCP SHUTDOWN
<br>
[aprun6-darter:16915] mca: base: close: component tcp closed
<br>
[aprun6-darter:16915] mca: base: close: unloading component tcp
<br>
<p><p><p><pre>
--
Aur&#233;lien Bouteiller ~ <a href="https://icl.cs.utk.edu/~bouteill/">https://icl.cs.utk.edu/~bouteill/</a>
</pre>
<p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17234/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17234/signature.asc">Message signed with OpenPGP using GPGMail</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17235.php">Nathan Hjelm: "Re: [OMPI devel] 1.8.5rc1 and OOB on Cray XC30"</a>
<li><strong>Previous message:</strong> <a href="17233.php">Gilles Gouaillardet: "Re: [OMPI devel] Common symbols warning"</a>
<li><strong>In reply to:</strong> <a href="17181.php">Paul Hargrove: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17235.php">Nathan Hjelm: "Re: [OMPI devel] 1.8.5rc1 and OOB on Cray XC30"</a>
<li><strong>Reply:</strong> <a href="17235.php">Nathan Hjelm: "Re: [OMPI devel] 1.8.5rc1 and OOB on Cray XC30"</a>
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
