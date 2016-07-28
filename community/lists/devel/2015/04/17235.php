<?
$subject_val = "Re: [OMPI devel] 1.8.5rc1 and OOB on Cray XC30";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 16 16:36:18 2015" -->
<!-- isoreceived="20150416203618" -->
<!-- sent="Thu, 16 Apr 2015 14:36:16 -0600" -->
<!-- isosent="20150416203616" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.8.5rc1 and OOB on Cray XC30" -->
<!-- id="20150416203616.GB41549_at_pn1246003.lanl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="C0DFD52C-65B5-456C-AF57-5DFB623B3DEF_at_icl.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.8.5rc1 and OOB on Cray XC30<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-16 16:36:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17236.php">David Singleton: "[OMPI devel] interaction with slurm 14.11"</a>
<li><strong>Previous message:</strong> <a href="17234.php">Aur&#195;&#169;lien Bouteiller: "[OMPI devel] 1.8.5rc1 and OOB on Cray XC30"</a>
<li><strong>In reply to:</strong> <a href="17234.php">Aur&#195;&#169;lien Bouteiller: "[OMPI devel] 1.8.5rc1 and OOB on Cray XC30"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17189.php">Paul Hargrove: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Take a look at contrib/platform/lanl/cray_xe6/optimized-lustre.conf. There are a
<br>
couple of MCA variables that need to be set in order to enable mpirun on Cray
<br>
systems.
<br>
<p>-Nathan
<br>
<p>On Thu, Apr 16, 2015 at 04:29:21PM -0400, Aur&#233;lien Bouteiller wrote:
<br>
<span class="quotelev1">&gt;       
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        - Improved support for Cray
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      Cray's compilers, networks or the programming environment in general? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    I can compile on our Cray XC30, but not run with the options I used
</span><br>
<span class="quotelev1">&gt;    previously with trunk. Is there some secret sauce I am missing here ? 
</span><br>
<span class="quotelev1">&gt;    I get an error with OOB on the node daemons. ESS PMI, RAS and PLM ALPS. 
</span><br>
<span class="quotelev1">&gt;    /lustre/medusa/bouteill/openmpi-1.8.5rc1/bin/mpirun -np 1   -mca btl
</span><br>
<span class="quotelev1">&gt;    ugni,sm,self -mca coll tuned,basic,self -mca orte_tmpdir_base /var/tmp
</span><br>
<span class="quotelev1">&gt;    -mca plm_base_strip_prefix_from_node_names 1 -nolocal -novm 
</span><br>
<span class="quotelev1">&gt;    --debug-daemons -mca oob_base_verbose 1000 -mca ras_alps_apstat_cmd
</span><br>
<span class="quotelev1">&gt;    $(which apstat) -mca ras alps  -mca oob_tcp_if_include ipogif0  -map-by
</span><br>
<span class="quotelev1">&gt;    node hostname 
</span><br>
<span class="quotelev1">&gt;    [aprun6-darter:16915] mca: base: components_register: registering oob
</span><br>
<span class="quotelev1">&gt;    components
</span><br>
<span class="quotelev1">&gt;    [aprun6-darter:16915] mca: base: components_register: found loaded
</span><br>
<span class="quotelev1">&gt;    component tcp
</span><br>
<span class="quotelev1">&gt;    [aprun6-darter:16915] mca: base: components_register: component tcp
</span><br>
<span class="quotelev1">&gt;    register function successful
</span><br>
<span class="quotelev1">&gt;    [aprun6-darter:16915] mca: base: components_open: opening oob components
</span><br>
<span class="quotelev1">&gt;    [aprun6-darter:16915] mca: base: components_open: found loaded component
</span><br>
<span class="quotelev1">&gt;    tcp
</span><br>
<span class="quotelev1">&gt;    [aprun6-darter:16915] mca: base: components_open: component tcp open
</span><br>
<span class="quotelev1">&gt;    function successful
</span><br>
<span class="quotelev1">&gt;    [aprun6-darter:16915] mca:oob:select: checking available component tcp
</span><br>
<span class="quotelev1">&gt;    [aprun6-darter:16915] mca:oob:select: Querying component [tcp]
</span><br>
<span class="quotelev1">&gt;    [aprun6-darter:16915] oob:tcp: component_available called
</span><br>
<span class="quotelev1">&gt;    [aprun6-darter:16915] WORKING INTERFACE 1 KERNEL INDEX 1 FAMILY: V4
</span><br>
<span class="quotelev1">&gt;    [aprun6-darter:16915] [[54804,0],0] oob:tcp:init rejecting interface lo
</span><br>
<span class="quotelev1">&gt;    (not in include list)
</span><br>
<span class="quotelev1">&gt;    [aprun6-darter:16915] WORKING INTERFACE 2 KERNEL INDEX 1 FAMILY: V4
</span><br>
<span class="quotelev1">&gt;    [aprun6-darter:16915] [[54804,0],0] oob:tcp:init rejecting interface lo
</span><br>
<span class="quotelev1">&gt;    (not in include list)
</span><br>
<span class="quotelev1">&gt;    [aprun6-darter:16915] WORKING INTERFACE 3 KERNEL INDEX 3 FAMILY: V4
</span><br>
<span class="quotelev1">&gt;    [aprun6-darter:16915] [[54804,0],0] oob:tcp:init adding 10.128.2.134 to
</span><br>
<span class="quotelev1">&gt;    our list of V4 connections
</span><br>
<span class="quotelev1">&gt;    [aprun6-darter:16915] WORKING INTERFACE 4 KERNEL INDEX 5 FAMILY: V4
</span><br>
<span class="quotelev1">&gt;    [aprun6-darter:16915] [[54804,0],0] oob:tcp:init rejecting interface eth1
</span><br>
<span class="quotelev1">&gt;    (not in include list)
</span><br>
<span class="quotelev1">&gt;    [aprun6-darter:16915] [[54804,0],0] TCP STARTUP
</span><br>
<span class="quotelev1">&gt;    [aprun6-darter:16915] [[54804,0],0] attempting to bind to IPv4 port 0
</span><br>
<span class="quotelev1">&gt;    [aprun6-darter:16915] [[54804,0],0] assigned IPv4 port 57286
</span><br>
<span class="quotelev1">&gt;    [aprun6-darter:16915] mca:oob:select: Adding component to end
</span><br>
<span class="quotelev1">&gt;    [aprun6-darter:16915] mca:oob:select: Found 1 active transports
</span><br>
<span class="quotelev1">&gt;    [nid00414:32573] mca: base: components_register: registering oob
</span><br>
<span class="quotelev1">&gt;    components
</span><br>
<span class="quotelev1">&gt;    [nid00414:32573] mca: base: components_register: found loaded component
</span><br>
<span class="quotelev1">&gt;    tcp
</span><br>
<span class="quotelev1">&gt;    [nid00414:32573] mca: base: components_register: component tcp register
</span><br>
<span class="quotelev1">&gt;    function successful
</span><br>
<span class="quotelev1">&gt;    [nid00414:32573] mca: base: components_open: opening oob components
</span><br>
<span class="quotelev1">&gt;    [nid00414:32573] mca: base: components_open: found loaded component tcp
</span><br>
<span class="quotelev1">&gt;    [nid00414:32573] mca: base: components_open: component tcp open function
</span><br>
<span class="quotelev1">&gt;    successful
</span><br>
<span class="quotelev1">&gt;    [nid00414:32573] mca:oob:select: checking available component tcp
</span><br>
<span class="quotelev1">&gt;    [nid00414:32573] mca:oob:select: Querying component [tcp]
</span><br>
<span class="quotelev1">&gt;    [nid00414:32573] oob:tcp: component_available called
</span><br>
<span class="quotelev1">&gt;    [nid00414:32573] WORKING INTERFACE 1 KERNEL INDEX 1 FAMILY: V4
</span><br>
<span class="quotelev1">&gt;    [nid00414:32573] [[54804,0],1] oob:tcp:init rejecting interface lo (not in
</span><br>
<span class="quotelev1">&gt;    include list)
</span><br>
<span class="quotelev1">&gt;    [nid00414:32573] WORKING INTERFACE 2 KERNEL INDEX 2 FAMILY: V4
</span><br>
<span class="quotelev1">&gt;    [nid00414:32573] [[54804,0],1] oob:tcp:init adding 10.128.1.161 to our
</span><br>
<span class="quotelev1">&gt;    list of V4 connections
</span><br>
<span class="quotelev1">&gt;    [nid00414:32573] [[54804,0],1] TCP STARTUP
</span><br>
<span class="quotelev1">&gt;    [nid00414:32573] [[54804,0],1] attempting to bind to IPv4 port 0
</span><br>
<span class="quotelev1">&gt;    [nid00414:32573] [[54804,0],1] assigned IPv4 port 57372
</span><br>
<span class="quotelev1">&gt;    [nid00414:32573] mca:oob:select: Adding component to end
</span><br>
<span class="quotelev1">&gt;    [nid00414:32573] mca:oob:select: Found 1 active transports
</span><br>
<span class="quotelev1">&gt;    Daemon [[54804,0],1] checking in as pid 32573 on host nid00414
</span><br>
<span class="quotelev1">&gt;    [nid00414:32573] [[54804,0],1] orted: up and running - waiting for
</span><br>
<span class="quotelev1">&gt;    commands!
</span><br>
<span class="quotelev1">&gt;    [nid00414:32573] [[54804,0],1] OOB_SEND: rml_oob_send.c:199
</span><br>
<span class="quotelev1">&gt;    [nid00414:32573] [[54804,0],1] OOB_SEND: rml_oob_send.c:199
</span><br>
<span class="quotelev1">&gt;    [nid00414:32573] [[54804,0],1]: set_addr to uri
</span><br>
<span class="quotelev1">&gt;    3591634944.0;tcp://10.128.2.134:57286
</span><br>
<span class="quotelev1">&gt;    [nid00414:32573] [[54804,0],1]:set_addr checking if peer [[54804,0],0] is
</span><br>
<span class="quotelev1">&gt;    reachable via component tcp
</span><br>
<span class="quotelev1">&gt;    [nid00414:32573] [[54804,0],1] oob:tcp: working peer [[54804,0],0] address
</span><br>
<span class="quotelev1">&gt;    tcp://10.128.2.134:57286
</span><br>
<span class="quotelev1">&gt;    [nid00414:32573] [[54804,0],1] PASSING ADDR 10.128.2.134 TO MODULE
</span><br>
<span class="quotelev1">&gt;    [nid00414:32573] [[54804,0],1]:tcp set addr for peer [[54804,0],0]
</span><br>
<span class="quotelev1">&gt;    [nid00414:32573] [[54804,0],1]: peer [[54804,0],0] is reachable via
</span><br>
<span class="quotelev1">&gt;    component tcp
</span><br>
<span class="quotelev1">&gt;    [nid00414:32573] [[54804,0],1] OOB_SEND: rml_oob_send.c:199
</span><br>
<span class="quotelev1">&gt;    [nid00414:32573] [[54804,0],1] oob:base:send to target [[INVALID],INVALID]
</span><br>
<span class="quotelev1">&gt;    [nid00414:32573] [[54804,0],1] oob:base:send unknown peer
</span><br>
<span class="quotelev1">&gt;    [[INVALID],INVALID]
</span><br>
<span class="quotelev1">&gt;    [nid00414:32573] [[54804,0],1] is NOT reachable by TCP
</span><br>
<span class="quotelev1">&gt;    Application 1329706 exit codes: 1
</span><br>
<span class="quotelev1">&gt;    Application 1329706 resources: utime ~0s, stime ~0s, Rss ~5304, inblocks
</span><br>
<span class="quotelev1">&gt;    ~6404, outblocks ~28
</span><br>
<span class="quotelev1">&gt;    --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;    An ORTE daemon has unexpectedly failed after launch and before
</span><br>
<span class="quotelev1">&gt;    communicating back to mpirun. This could be caused by a number
</span><br>
<span class="quotelev1">&gt;    of factors, including an inability to create a connection back
</span><br>
<span class="quotelev1">&gt;    to mpirun due to a lack of common network interfaces and/or no
</span><br>
<span class="quotelev1">&gt;    route found between them. Please check network connectivity
</span><br>
<span class="quotelev1">&gt;    (including firewalls and network routing requirements).
</span><br>
<span class="quotelev1">&gt;    --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;    [aprun6-darter:16915] [[54804,0],0] TCP SHUTDOWN
</span><br>
<span class="quotelev1">&gt;    [aprun6-darter:16915] mca: base: close: component tcp closed
</span><br>
<span class="quotelev1">&gt;    [aprun6-darter:16915] mca: base: close: unloading component tcp
</span><br>
<span class="quotelev1">&gt;    --  
</span><br>
<span class="quotelev1">&gt;    Aurelien Bouteiller ~ <a href="https://icl.cs.utk.edu/~bouteill/">https://icl.cs.utk.edu/~bouteill/</a>
</span><br>
<p><p><p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17234.php">http://www.open-mpi.org/community/lists/devel/2015/04/17234.php</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17235/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17236.php">David Singleton: "[OMPI devel] interaction with slurm 14.11"</a>
<li><strong>Previous message:</strong> <a href="17234.php">Aur&#195;&#169;lien Bouteiller: "[OMPI devel] 1.8.5rc1 and OOB on Cray XC30"</a>
<li><strong>In reply to:</strong> <a href="17234.php">Aur&#195;&#169;lien Bouteiller: "[OMPI devel] 1.8.5rc1 and OOB on Cray XC30"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17189.php">Paul Hargrove: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
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
