<?
$subject_val = "Re: [OMPI devel] [1.8.4rc2] orterun SEGVs on Solaris-10/SPARC";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 11 23:56:46 2014" -->
<!-- isoreceived="20141212045646" -->
<!-- sent="Thu, 11 Dec 2014 20:56:42 -0800" -->
<!-- isosent="20141212045642" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [1.8.4rc2] orterun SEGVs on Solaris-10/SPARC" -->
<!-- id="29748A91-B612-4338-A701-8649F3591871_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAAvDA16+gUjbHcr1j2poc8NULAbxB02-kQVRN-r1CsYW65HR8w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [1.8.4rc2] orterun SEGVs on Solaris-10/SPARC<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-11 23:56:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16529.php">Gilles Gouaillardet: "Re: [OMPI devel] [1.8.4rc3] false report of no loopback interface + segv at exit"</a>
<li><strong>Previous message:</strong> <a href="16527.php">Ralph Castain: "Re: [OMPI devel] [1.8.4rc3] false report of no loopback interface + segv at exit"</a>
<li><strong>In reply to:</strong> <a href="16524.php">Paul Hargrove: "[OMPI devel] [1.8.4rc2] orterun SEGVs on Solaris-10/SPARC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16541.php">Ralph Castain: "Re: [OMPI devel] [1.8.4rc2] orterun SEGVs on Solaris-10/SPARC"</a>
<li><strong>Reply:</strong> <a href="16541.php">Ralph Castain: "Re: [OMPI devel] [1.8.4rc2] orterun SEGVs on Solaris-10/SPARC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Paul - I will post a fix for this tomorrow. Looks like Sparc isn&#146;t returning an architecture type for some reason, and I didn&#146;t protect against it.
<br>
<p><p><span class="quotelev1">&gt; On Dec 11, 2014, at 7:39 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Backtrace for the Solaris-10/SPARC SEGV appears below.
</span><br>
<span class="quotelev1">&gt; I've changed the subject line to distinguish this from the earlier report.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; program terminated by signal SEGV (no mapping at the fault address)
</span><br>
<span class="quotelev1">&gt; 0xffffffff7d93b634: strlen+0x0014:      lduh     [%o2], %o1
</span><br>
<span class="quotelev1">&gt; Current function is guess_strlen
</span><br>
<span class="quotelev1">&gt;    71                       len += (int)strlen(sarg);
</span><br>
<span class="quotelev1">&gt; (dbx) where
</span><br>
<span class="quotelev1">&gt;   [1] strlen(0x2, 0x73000000, 0x2, 0x80808080, 0x2, 0x80808080), at 0xffffffff7d93b634 
</span><br>
<span class="quotelev1">&gt; =&gt;[2] guess_strlen(fmt = 0xffffffff7eeada98 &quot;%uN:%uS:%uL3:%uL2:%uL1:%uC:%uH:%s&quot;, ap = 0xffffffff7ffff058), line 71 in &quot;printf.c&quot;
</span><br>
<span class="quotelev1">&gt;   [3] opal_vasprintf(ptr = 0xffffffff7ffff0b8, fmt = 0xffffffff7eeada98 &quot;%uN:%uS:%uL3:%uL2:%uL1:%uC:%uH:%s&quot;, ap = 0xffffffff7ffff050), line 218 in &quot;printf.c&quot;
</span><br>
<span class="quotelev1">&gt;   [4] opal_asprintf(ptr = 0xffffffff7ffff0b8, fmt = 0xffffffff7eeada98 &quot;%uN:%uS:%uL3:%uL2:%uL1:%uC:%uH:%s&quot;, ... = 0x807ede0103, ...), line 194 in &quot;printf.c&quot;
</span><br>
<span class="quotelev1">&gt;   [5] opal_hwloc_base_get_topo_signature(topo = 0x100128ea0), line 2134 in &quot;hwloc_base_util.c&quot;
</span><br>
<span class="quotelev1">&gt;   [6] rte_init(), line 205 in &quot;ess_hnp_module.c&quot;
</span><br>
<span class="quotelev1">&gt;   [7] orte_init(pargc = 0xffffffff7ffff61c, pargv = 0xffffffff7ffff610, flags = 4U), line 148 in &quot;orte_init.c&quot;
</span><br>
<span class="quotelev1">&gt;   [8] orterun(argc = 7, argv = 0xffffffff7ffff7a8), line 856 in &quot;orterun.c&quot;
</span><br>
<span class="quotelev1">&gt;   [9] main(argc = 7, argv = 0xffffffff7ffff7a8), line 13 in &quot;main.c&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Dec 11, 2014 at 7:17 PM, Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; No, that looks different - it&#146;s failing in mpirun itself. Can you get a line number on it?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry for delay - I&#146;m generating rc3 now
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 11, 2014, at 6:59 PM, Paul Hargrove &lt;phhargrove_at_[hidden] &lt;mailto:phhargrove_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Don't see an rc3 yet.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; My Solaris-10/SPARC runs fail slightly differently (see below).
</span><br>
<span class="quotelev2">&gt;&gt; It looks sufficiently similar that it MIGHT be the same root cause.
</span><br>
<span class="quotelev2">&gt;&gt; However, lacking an rc3 to test I figured it would be better to report this than to ignore it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The problem is present with both V8+ and V9 ABIs, and with both Gnu and Sun compilers.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [niagara1:29881] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [niagara1:29881] Signal: Segmentation Fault (11)
</span><br>
<span class="quotelev2">&gt;&gt; [niagara1:29881] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt;&gt; [niagara1:29881] Failing at address: 2
</span><br>
<span class="quotelev2">&gt;&gt; /sandbox/hargrove/OMPI/openmpi-1.8.4rc2-solaris10-sparcT2-gcc346-v8plus/INST/lib/libopen-pal.so.6.2.1:opal_backtrace_print+0x24
</span><br>
<span class="quotelev2">&gt;&gt; /sandbox/hargrove/OMPI/openmpi-1.8.4rc2-solaris10-sparcT2-gcc346-v8plus/INST/lib/libopen-pal.so.6.2.1:0xaa160
</span><br>
<span class="quotelev2">&gt;&gt; /lib/libc.so.1:0xc5364
</span><br>
<span class="quotelev2">&gt;&gt; /lib/libc.so.1:0xb9e64
</span><br>
<span class="quotelev2">&gt;&gt; /lib/libc.so.1:strlen+0x14 [ Signal 11 (SEGV)]
</span><br>
<span class="quotelev2">&gt;&gt; /sandbox/hargrove/OMPI/openmpi-1.8.4rc2-solaris10-sparcT2-gcc346-v8plus/INST/lib/libopen-pal.so.6.2.1:opal_vasprintf+0x20
</span><br>
<span class="quotelev2">&gt;&gt; /sandbox/hargrove/OMPI/openmpi-1.8.4rc2-solaris10-sparcT2-gcc346-v8plus/INST/lib/libopen-pal.so.6.2.1:opal_asprintf+0x30
</span><br>
<span class="quotelev2">&gt;&gt; /sandbox/hargrove/OMPI/openmpi-1.8.4rc2-solaris10-sparcT2-gcc346-v8plus/INST/lib/libopen-pal.so.6.2.1:opal_hwloc_base_get_topo_signature+0x24c
</span><br>
<span class="quotelev2">&gt;&gt; /sandbox/hargrove/OMPI/openmpi-1.8.4rc2-solaris10-sparcT2-gcc346-v8plus/INST/lib/openmpi/mca_ess_hnp.so:0x2d90
</span><br>
<span class="quotelev2">&gt;&gt; /sandbox/hargrove/OMPI/openmpi-1.8.4rc2-solaris10-sparcT2-gcc346-v8plus/INST/lib/libopen-rte.so.7.0.5:orte_init+0x2f8
</span><br>
<span class="quotelev2">&gt;&gt; /sandbox/hargrove/OMPI/openmpi-1.8.4rc2-solaris10-sparcT2-gcc346-v8plus/INST/bin/orterun:orterun+0xaa8
</span><br>
<span class="quotelev2">&gt;&gt; /sandbox/hargrove/OMPI/openmpi-1.8.4rc2-solaris10-sparcT2-gcc346-v8plus/INST/bin/orterun:main+0x14
</span><br>
<span class="quotelev2">&gt;&gt; /sandbox/hargrove/OMPI/openmpi-1.8.4rc2-solaris10-sparcT2-gcc346-v8plus/INST/bin/orterun:_start+0x5c
</span><br>
<span class="quotelev2">&gt;&gt; [niagara1:29881] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt; Segmentation Fault - core dumped
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Dec 11, 2014 at 3:29 PM, Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Ah crud - incomplete commit means we didn&#146;t send the topo string. Will roll rc3 in a few minutes.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks, Paul
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Dec 11, 2014, at 3:08 PM, Paul Hargrove &lt;phhargrove_at_[hidden] &lt;mailto:phhargrove_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Testing the 1.8.4rc2 tarball on my x86-64 Solaris-11 systems I am getting the following crash for both &quot;-m32&quot; and &quot;-m64&quot; builds:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ mpirun -mca btl sm,self,openib -np 2 -host pcp-j-19,pcp-j-20 examples/ring_c'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pcp-j-19:18762] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pcp-j-19:18762] Signal: Segmentation Fault (11)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pcp-j-19:18762] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pcp-j-19:18762] Failing at address: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /shared/OMPI/openmpi-1.8.4rc2-solaris11-x64-ib-gcc452/INST/lib/libopen-pal.so.6.2.1'opal_backtrace_print+0x26 [0xfffffd7ffaf237ba]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /shared/OMPI/openmpi-1.8.4rc2-solaris11-x64-ib-gcc452/INST/lib/libopen-pal.so.6.2.1'show_stackframe+0x833 [0xfffffd7ffaf20ba1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib/amd64/libc.so.1'__sighndlr+0x6 [0xfffffd7fff202cc6]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib/amd64/libc.so.1'call_user_handler+0x2aa [0xfffffd7fff1f648e]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib/amd64/libc.so.1'strcmp+0x1a [0xfffffd7fff170fda] [Signal 11 (SEGV)]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /shared/OMPI/openmpi-1.8.4rc2-solaris11-x64-ib-gcc452/INST/bin/orted'main+0x90 [0x4010b7]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /shared/OMPI/openmpi-1.8.4rc2-solaris11-x64-ib-gcc452/INST/bin/orted'_start+0x6c [0x400f2c]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pcp-j-19:18762] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bash: line 1: 18762 Segmentation Fault      (core dumped) /shared/OMPI/openmpi-1.8.4rc2-solaris11-x64-ib-gcc452/INST/bin/orted -mca ess &quot;env&quot; -mca orte_ess_jobid &quot;911343616&quot; -mca orte_ess_vpid 1 -mca orte_ess_num_procs &quot;2&quot; -mca orte_hnp_uri &quot;911343616.0;tcp://172.16.0.120 &lt;<a href="http://172.16.0.120/">http://172.16.0.120/</a>&gt;,172.18.0.120:50362 &lt;<a href="http://172.18.0.120:50362/">http://172.18.0.120:50362/</a>&gt;&quot; --tree-spawn -mca btl &quot;sm,self,openib&quot; -mca plm &quot;rsh&quot; -mca shmem_mmap_enable_nfs_warning &quot;0&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Running gdb against a core generated by the 32-bit build gives line numbers:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #0  0xfea1cb45 in strcmp () from /lib/libc.so.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #1  0xfeef4900 in orte_daemon (argc=26, argv=0x80479b0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     at /shared/OMPI/openmpi-1.8.4rc2-solaris11-x86-ib-gcc452/openmpi-1.8.4rc2/orte/orted/orted_main.c:789
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #2  0x08050fb1 in main (argc=26, argv=0x80479b0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     at /shared/OMPI/openmpi-1.8.4rc2-solaris11-x86-ib-gcc452/openmpi-1.8.4rc2/orte/tools/orted/orted.c:62
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden] &lt;mailto:PHHargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Computer Science Department               Tel: +1-510-495-2352 &lt;tel:%2B1-510-495-2352&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900 &lt;tel:%2B1-510-486-6900&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16514.php">http://www.open-mpi.org/community/lists/devel/2014/12/16514.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/12/16514.php">http://www.open-mpi.org/community/lists/devel/2014/12/16514.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16515.php">http://www.open-mpi.org/community/lists/devel/2014/12/16515.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/12/16515.php">http://www.open-mpi.org/community/lists/devel/2014/12/16515.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900 &lt;tel:%2B1-510-486-6900&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16521.php">http://www.open-mpi.org/community/lists/devel/2014/12/16521.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/12/16521.php">http://www.open-mpi.org/community/lists/devel/2014/12/16521.php</a>&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16522.php">http://www.open-mpi.org/community/lists/devel/2014/12/16522.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/12/16522.php">http://www.open-mpi.org/community/lists/devel/2014/12/16522.php</a>&gt;
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16524.php">http://www.open-mpi.org/community/lists/devel/2014/12/16524.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16528/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16529.php">Gilles Gouaillardet: "Re: [OMPI devel] [1.8.4rc3] false report of no loopback interface + segv at exit"</a>
<li><strong>Previous message:</strong> <a href="16527.php">Ralph Castain: "Re: [OMPI devel] [1.8.4rc3] false report of no loopback interface + segv at exit"</a>
<li><strong>In reply to:</strong> <a href="16524.php">Paul Hargrove: "[OMPI devel] [1.8.4rc2] orterun SEGVs on Solaris-10/SPARC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16541.php">Ralph Castain: "Re: [OMPI devel] [1.8.4rc2] orterun SEGVs on Solaris-10/SPARC"</a>
<li><strong>Reply:</strong> <a href="16541.php">Ralph Castain: "Re: [OMPI devel] [1.8.4rc2] orterun SEGVs on Solaris-10/SPARC"</a>
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
