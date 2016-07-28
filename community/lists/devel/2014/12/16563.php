<?
$subject_val = "Re: [OMPI devel] OMPI devel] [1.8.4rc2] orterun SEGVs on Solaris-10/SPARC";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 12 18:14:25 2014" -->
<!-- isoreceived="20141212231425" -->
<!-- sent="Fri, 12 Dec 2014 15:14:09 -0800" -->
<!-- isosent="20141212231409" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI devel] [1.8.4rc2] orterun SEGVs on Solaris-10/SPARC" -->
<!-- id="CAAvDA17B3TD643TbATfwQbWKu8y_QR_xmtTV8nTT_cS+LYzZag_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="0lrge8y4682pil26xu2dd8dy.1418425656968_at_email.android.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OMPI devel] [1.8.4rc2] orterun SEGVs on Solaris-10/SPARC<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-12 18:14:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16564.php">Paul Hargrove: "Re: [OMPI devel] OMPI devel] [1.8.4rc2] orterun SEGVs on Solaris-10/SPARC"</a>
<li><strong>Previous message:</strong> <a href="16562.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] [1.8.4rc2] orterun SEGVs on Solaris-10/SPARC"</a>
<li><strong>In reply to:</strong> <a href="16562.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] [1.8.4rc2] orterun SEGVs on Solaris-10/SPARC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16564.php">Paul Hargrove: "Re: [OMPI devel] OMPI devel] [1.8.4rc2] orterun SEGVs on Solaris-10/SPARC"</a>
<li><strong>Reply:</strong> <a href="16564.php">Paul Hargrove: "Re: [OMPI devel] OMPI devel] [1.8.4rc2] orterun SEGVs on Solaris-10/SPARC"</a>
<li><strong>Reply:</strong> <a href="16573.php">Paul Hargrove: "Re: [OMPI devel] OMPI devel] [1.8.4rc2] orterun SEGVs on Solaris-10/SPARC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks, Gilles!
<br>
<p>I was looking at that same code just now and completely missed the lack of
<br>
a case for '%u' (and '%lu').  I will add one now and see if that resolves
<br>
the problem....
<br>
<p><p>-Paul
<br>
<p>On Fri, Dec 12, 2014 at 3:10 PM, Gilles Gouaillardet &lt;
<br>
gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I cannot find a case for the %u format is guess_strlen
</span><br>
<span class="quotelev1">&gt; And since the default does not invoke va_arg()
</span><br>
<span class="quotelev1">&gt; I
</span><br>
<span class="quotelev1">&gt; it seems strlen is invoked on nnuma instead of arch
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Makes sense ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Afraid I'm drawing a blank, Paul - I can't see how we got to a bad address
</span><br>
<span class="quotelev1">&gt; down there. This is at the beginning of orte_init, so there are no threads
</span><br>
<span class="quotelev1">&gt; running nor has anything much happened.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you have any suggestions?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 12, 2014, at 9:02 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The &quot;arch&quot; variable looks fine:
</span><br>
<span class="quotelev1">&gt; Current function is opal_hwloc_base_get_topo_signature
</span><br>
<span class="quotelev1">&gt;  2134                    nnuma, nsocket, nl3, nl2, nl1, ncore, nhwt, arch);
</span><br>
<span class="quotelev1">&gt; (dbx) print arch
</span><br>
<span class="quotelev1">&gt; arch = 0x1001700a0 &quot;sun4v&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And so is &quot;fmt&quot;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Current function is opal_asprintf
</span><br>
<span class="quotelev1">&gt;   194       length = opal_vasprintf(ptr, fmt, ap);
</span><br>
<span class="quotelev1">&gt; (dbx) print fmt
</span><br>
<span class="quotelev1">&gt; fmt = 0xffffffff7eeada98 &quot;%uN:%uS:%uL3:%uL2:%uL1:%uC:%uH:%s&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, things have gone bad in guess_strlen():
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Current function is guess_strlen
</span><br>
<span class="quotelev1">&gt;    71                       len += (int)strlen(sarg);
</span><br>
<span class="quotelev1">&gt; (dbx) print sarg
</span><br>
<span class="quotelev1">&gt; sarg = 0x2 &quot;&lt;bad address 0x2&gt;&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Dec 12, 2014 at 2:24 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hmmm....this is really odd. I actually do have a protection for that arch
</span><br>
<span class="quotelev2">&gt;&gt; value being NULL, and you are in the code section when it isn't.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Do you still have the core file around? If so, can you print out the
</span><br>
<span class="quotelev2">&gt;&gt; value of the &quot;arch&quot; variable? It would be in the
</span><br>
<span class="quotelev2">&gt;&gt; opal_hwloc_base_get_topo_signature level.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm wondering if that value has been hosed, and the problem is memory
</span><br>
<span class="quotelev2">&gt;&gt; corruption somewhere.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 11, 2014, at 8:56 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks Paul - I will post a fix for this tomorrow. Looks like Sparc isn't
</span><br>
<span class="quotelev2">&gt;&gt; returning an architecture type for some reason, and I didn't protect
</span><br>
<span class="quotelev2">&gt;&gt; against it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 11, 2014, at 7:39 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Backtrace for the Solaris-10/SPARC SEGV appears below.
</span><br>
<span class="quotelev2">&gt;&gt; I've changed the subject line to distinguish this from the earlier report.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; program terminated by signal SEGV (no mapping at the fault address)
</span><br>
<span class="quotelev2">&gt;&gt; 0xffffffff7d93b634: strlen+0x0014:      lduh     [%o2], %o1
</span><br>
<span class="quotelev2">&gt;&gt; Current function is guess_strlen
</span><br>
<span class="quotelev2">&gt;&gt;    71                       len += (int)strlen(sarg);
</span><br>
<span class="quotelev2">&gt;&gt; (dbx) where
</span><br>
<span class="quotelev2">&gt;&gt;   [1] strlen(0x2, 0x73000000, 0x2, 0x80808080, 0x2, 0x80808080), at
</span><br>
<span class="quotelev2">&gt;&gt; 0xffffffff7d93b634
</span><br>
<span class="quotelev2">&gt;&gt; =&gt;[2] guess_strlen(fmt = 0xffffffff7eeada98
</span><br>
<span class="quotelev2">&gt;&gt; &quot;%uN:%uS:%uL3:%uL2:%uL1:%uC:%uH:%s&quot;, ap = 0xffffffff7ffff058), line 71 in
</span><br>
<span class="quotelev2">&gt;&gt; &quot;printf.c&quot;
</span><br>
<span class="quotelev2">&gt;&gt;   [3] opal_vasprintf(ptr = 0xffffffff7ffff0b8, fmt = 0xffffffff7eeada98
</span><br>
<span class="quotelev2">&gt;&gt; &quot;%uN:%uS:%uL3:%uL2:%uL1:%uC:%uH:%s&quot;, ap = 0xffffffff7ffff050), line 218 in
</span><br>
<span class="quotelev2">&gt;&gt; &quot;printf.c&quot;
</span><br>
<span class="quotelev2">&gt;&gt;   [4] opal_asprintf(ptr = 0xffffffff7ffff0b8, fmt = 0xffffffff7eeada98
</span><br>
<span class="quotelev2">&gt;&gt; &quot;%uN:%uS:%uL3:%uL2:%uL1:%uC:%uH:%s&quot;, ... = 0x807ede0103, ...), line 194 in
</span><br>
<span class="quotelev2">&gt;&gt; &quot;printf.c&quot;
</span><br>
<span class="quotelev2">&gt;&gt;   [5] opal_hwloc_base_get_topo_signature(topo = 0x100128ea0), line 2134
</span><br>
<span class="quotelev2">&gt;&gt; in &quot;hwloc_base_util.c&quot;
</span><br>
<span class="quotelev2">&gt;&gt;   [6] rte_init(), line 205 in &quot;ess_hnp_module.c&quot;
</span><br>
<span class="quotelev2">&gt;&gt;   [7] orte_init(pargc = 0xffffffff7ffff61c, pargv = 0xffffffff7ffff610,
</span><br>
<span class="quotelev2">&gt;&gt; flags = 4U), line 148 in &quot;orte_init.c&quot;
</span><br>
<span class="quotelev2">&gt;&gt;   [8] orterun(argc = 7, argv = 0xffffffff7ffff7a8), line 856 in
</span><br>
<span class="quotelev2">&gt;&gt; &quot;orterun.c&quot;
</span><br>
<span class="quotelev2">&gt;&gt;   [9] main(argc = 7, argv = 0xffffffff7ffff7a8), line 13 in &quot;main.c&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Dec 11, 2014 at 7:17 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; No, that looks different - it's failing in mpirun itself. Can you get a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; line number on it?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sorry for delay - I'm generating rc3 now
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Dec 11, 2014, at 6:59 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Don't see an rc3 yet.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My Solaris-10/SPARC runs fail slightly differently (see below).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It looks sufficiently similar that it MIGHT be the same root cause.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, lacking an rc3 to test I figured it would be better to report
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this than to ignore it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The problem is present with both V8+ and V9 ABIs, and with both Gnu and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sun compilers.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [niagara1:29881] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [niagara1:29881] Signal: Segmentation Fault (11)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [niagara1:29881] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [niagara1:29881] Failing at address: 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /sandbox/hargrove/OMPI/openmpi-1.8.4rc2-solaris10-sparcT2-gcc346-v8plus/INST/lib/libopen-pal.so.6.2.1:opal_bac
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ktrace_print+0x24
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /sandbox/hargrove/OMPI/openmpi-1.8.4rc2-solaris10-sparcT2-gcc346-v8plus/INST/lib/libopen-pal.so.6.2.1:0xaa160
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib/libc.so.1:0xc5364
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib/libc.so.1:0xb9e64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib/libc.so.1:strlen+0x14 [ Signal 11 (SEGV)]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /sandbox/hargrove/OMPI/openmpi-1.8.4rc2-solaris10-sparcT2-gcc346-v8plus/INST/lib/libopen-pal.so.6.2.1:opal_vas
</span><br>
<span class="quotelev3">&gt;&gt;&gt; printf+0x20
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /sandbox/hargrove/OMPI/openmpi-1.8.4rc2-solaris10-sparcT2-gcc346-v8plus/INST/lib/libopen-pal.so.6.2.1:opal_asp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rintf+0x30
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /sandbox/hargrove/OMPI/openmpi-1.8.4rc2-solaris10-sparcT2-gcc346-v8plus/INST/lib/libopen-pal.so.6.2.1:opal_hwl
</span><br>
<span class="quotelev3">&gt;&gt;&gt; oc_base_get_topo_signature+0x24c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /sandbox/hargrove/OMPI/openmpi-1.8.4rc2-solaris10-sparcT2-gcc346-v8plus/INST/lib/openmpi/mca_ess_hnp.so:0x2d90
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /sandbox/hargrove/OMPI/openmpi-1.8.4rc2-solaris10-sparcT2-gcc346-v8plus/INST/lib/libopen-rte.so.7.0.5:orte_ini
</span><br>
<span class="quotelev3">&gt;&gt;&gt; t+0x2f8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /sandbox/hargrove/OMPI/openmpi-1.8.4rc2-solaris10-sparcT2-gcc346-v8plus/INST/bin/orterun:orterun+0xaa8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /sandbox/hargrove/OMPI/openmpi-1.8.4rc2-solaris10-sparcT2-gcc346-v8plus/INST/bin/orterun:main+0x14
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /sandbox/hargrove/OMPI/openmpi-1.8.4rc2-solaris10-sparcT2-gcc346-v8plus/INST/bin/orterun:_start+0x5c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [niagara1:29881] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Segmentation Fault - core dumped
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Thu, Dec 11, 2014 at 3:29 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ah crud - incomplete commit means we didn't send the topo string. Will
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; roll rc3 in a few minutes.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks, Paul
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Dec 11, 2014, at 3:08 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Testing the 1.8.4rc2 tarball on my x86-64 Solaris-11 systems I am
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; getting the following crash for both &quot;-m32&quot; and &quot;-m64&quot; builds:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ mpirun -mca btl sm,self,openib -np 2 -host pcp-j-19,pcp-j-20
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; examples/ring_c'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [pcp-j-19:18762] *** Process received signal ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [pcp-j-19:18762] Signal: Segmentation Fault (11)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [pcp-j-19:18762] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [pcp-j-19:18762] Failing at address: 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /shared/OMPI/openmpi-1.8.4rc2-solaris11-x64-ib-gcc452/INST/lib/libopen-pal.so.6.2.1'opal_backtrace_print+0x26
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [0xfffffd7ffaf237ba]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /shared/OMPI/openmpi-1.8.4rc2-solaris11-x64-ib-gcc452/INST/lib/libopen-pal.so.6.2.1'show_stackframe+0x833
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [0xfffffd7ffaf20ba1]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /lib/amd64/libc.so.1'__sighndlr+0x6 [0xfffffd7fff202cc6]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /lib/amd64/libc.so.1'call_user_handler+0x2aa [0xfffffd7fff1f648e]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /lib/amd64/libc.so.1'strcmp+0x1a [0xfffffd7fff170fda] [Signal 11 (SEGV)]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /shared/OMPI/openmpi-1.8.4rc2-solaris11-x64-ib-gcc452/INST/bin/orted'main+0x90
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [0x4010b7]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /shared/OMPI/openmpi-1.8.4rc2-solaris11-x64-ib-gcc452/INST/bin/orted'_start+0x6c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [0x400f2c]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [pcp-j-19:18762] *** End of error message ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; bash: line 1: 18762 Segmentation Fault      (core dumped)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /shared/OMPI/openmpi-1.8.4rc2-solaris11-x64-ib-gcc452/INST/bin/orted -mca
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ess &quot;env&quot; -mca orte_ess_jobid &quot;911343616&quot; -mca orte_ess_vpid 1 -mca
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; orte_ess_num_procs &quot;2&quot; -mca orte_hnp_uri &quot;911343616.0;tcp://
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 172.16.0.120,172.18.0.120:50362&quot; --tree-spawn -mca btl
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;sm,self,openib&quot; -mca plm &quot;rsh&quot; -mca shmem_mmap_enable_nfs_warning &quot;0&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Running gdb against a core generated by the 32-bit build gives line
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; numbers:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #0  0xfea1cb45 in strcmp () from /lib/libc.so.1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #1  0xfeef4900 in orte_daemon (argc=26, argv=0x80479b0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     at
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /shared/OMPI/openmpi-1.8.4rc2-solaris11-x86-ib-gcc452/openmpi-1.8.4rc2/orte/orted/orted_main.c:789
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #2  0x08050fb1 in main (argc=26, argv=0x80479b0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     at
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /shared/OMPI/openmpi-1.8.4rc2-solaris11-x86-ib-gcc452/openmpi-1.8.4rc2/orte/tools/orted/orted.c:62
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16514.php">http://www.open-mpi.org/community/lists/devel/2014/12/16514.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16515.php">http://www.open-mpi.org/community/lists/devel/2014/12/16515.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16521.php">http://www.open-mpi.org/community/lists/devel/2014/12/16521.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16522.php">http://www.open-mpi.org/community/lists/devel/2014/12/16522.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt;  _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16524.php">http://www.open-mpi.org/community/lists/devel/2014/12/16524.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16541.php">http://www.open-mpi.org/community/lists/devel/2014/12/16541.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;  _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16552.php">http://www.open-mpi.org/community/lists/devel/2014/12/16552.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16562.php">http://www.open-mpi.org/community/lists/devel/2014/12/16562.php</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16563/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16564.php">Paul Hargrove: "Re: [OMPI devel] OMPI devel] [1.8.4rc2] orterun SEGVs on Solaris-10/SPARC"</a>
<li><strong>Previous message:</strong> <a href="16562.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] [1.8.4rc2] orterun SEGVs on Solaris-10/SPARC"</a>
<li><strong>In reply to:</strong> <a href="16562.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] [1.8.4rc2] orterun SEGVs on Solaris-10/SPARC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16564.php">Paul Hargrove: "Re: [OMPI devel] OMPI devel] [1.8.4rc2] orterun SEGVs on Solaris-10/SPARC"</a>
<li><strong>Reply:</strong> <a href="16564.php">Paul Hargrove: "Re: [OMPI devel] OMPI devel] [1.8.4rc2] orterun SEGVs on Solaris-10/SPARC"</a>
<li><strong>Reply:</strong> <a href="16573.php">Paul Hargrove: "Re: [OMPI devel] OMPI devel] [1.8.4rc2] orterun SEGVs on Solaris-10/SPARC"</a>
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
