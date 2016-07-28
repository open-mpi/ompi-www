<?
$subject_val = "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Nov 16 12:09:03 2013" -->
<!-- isoreceived="20131116170903" -->
<!-- sent="Sat, 16 Nov 2013 09:07:50 -0800" -->
<!-- isosent="20131116170750" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64" -->
<!-- id="7DCAE979-26D1-45C8-AB94-43CD78B52D1D_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="528749FE.8090701_at_debian.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-16 12:07:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13296.php">Adrian Reber: "[OMPI devel] [PATCH] Trying to get the C/R code to compile again"</a>
<li><strong>Previous message:</strong> <a href="13294.php">Sylvestre Ledru: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<li><strong>In reply to:</strong> <a href="13294.php">Sylvestre Ledru: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/09/12962.php">Christopher Samuel: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sigh - if you just go to line 205 in the indicated file and blow away that print statement, the segfault should end.
<br>
<p>However, that won't solve the root problem - you'll just cleanly exit with an error statement. The issue is that we aren't finding ssh or rsh in your PATH. Do you have one or both of those installed?
<br>
<p><p>On Nov 16, 2013, at 2:33 AM, Sylvestre Ledru &lt;sylvestre_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On 15/11/2013 17:50, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hmm...well, that will make debug a tad more difficult. I've attached a patch that *should* stop the segfault. Given that behavior, though, it looks like the system isn't finding either rsh or ssh on your machine. Might be the root cause of the problem.
</span><br>
<span class="quotelev1">&gt; With your patch:
</span><br>
<span class="quotelev1">&gt; $ ./mpirun -mca plm_base_verbose 5 -mca ras_base_verbose 5 -mcarmaps_base_verbose 5 -mca ess_base_verbose  5 -c 4 foo
</span><br>
<span class="quotelev1">&gt; [merulo:08821] mca:base:select:(  plm) Querying component [rsh]
</span><br>
<span class="quotelev1">&gt; [merulo:08821] [[INVALID],INVALID] plm:base:rsh_lookup on agent ssh : rsh path NULL
</span><br>
<span class="quotelev1">&gt; [merulo:08821] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [merulo:08821] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [merulo:08821] Signal code: Invalid permissions (2)
</span><br>
<span class="quotelev1">&gt; [merulo:08821] Failing at address: (nil)
</span><br>
<span class="quotelev1">&gt; [merulo:08821] [ 0] linux-gate.so.1(__kernel_sigtramp+0x7fffffffff886860) [0xa000000000040800]
</span><br>
<span class="quotelev1">&gt; [merulo:08821] [ 1] /home/sylvestre/bogus2/lib/openmpi/mca_plm_rsh.so(orte_plm_rsh_component_query+0xae3b0) [0x2000000000867f30]
</span><br>
<span class="quotelev1">&gt; [merulo:08821] [ 2] /home/sylvestre/bogus2/lib/libopen-rte.so.4(mca_base_select-0x5dc110) [0x20000000001ddea0]
</span><br>
<span class="quotelev1">&gt; [merulo:08821] [ 3] /home/sylvestre/bogus2/lib/libopen-rte.so.4(orte_plm_base_select-0x680cd0) [0x20000000001392f0]
</span><br>
<span class="quotelev1">&gt; [merulo:08821] [ 4] /home/sylvestre/bogus2/lib/openmpi/mca_ess_hnp.so(+0x56f0) [0x20000000008316f0]
</span><br>
<span class="quotelev1">&gt; [merulo:08821] [ 5] /home/sylvestre/bogus2/lib/libopen-rte.so.4(orte_init-0x72bf10) [0x200000000008e0c0]
</span><br>
<span class="quotelev1">&gt; [merulo:08821] [ 6] ./mpirun(orterun+0x1fffffffff84cc80) [0x4000000000006c60]
</span><br>
<span class="quotelev1">&gt; [merulo:08821] [ 7] ./mpirun(main+0x1fffffffff84b880) [0x40000000000045e0]
</span><br>
<span class="quotelev1">&gt; [merulo:08821] [ 8] /lib/ia64-linux-gnu/libc.so.6.1(__libc_start_main-0x2fcd50) [0x20000000004bd2a0]
</span><br>
<span class="quotelev1">&gt; [merulo:08821] [ 9] ./mpirun(_start+0x1fffffffff84a3c0) [0x40000000000043c0]
</span><br>
<span class="quotelev1">&gt; [merulo:08821] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; Segmentation fault
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; bt:
</span><br>
<span class="quotelev1">&gt; Program received signal SIGSEGV, Segmentation fault.
</span><br>
<span class="quotelev1">&gt; 0x2000000000867f30 in orte_plm_rsh_component_query (
</span><br>
<span class="quotelev1">&gt;     module=0x60000fffffffb0e8, priority=0x60000fffffffb0e0)
</span><br>
<span class="quotelev1">&gt;     at plm_rsh_component.c:205
</span><br>
<span class="quotelev1">&gt; 205            OPAL_OUTPUT_VERBOSE((1, orte_plm_globals.output,
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0x2000000000867f30 in orte_plm_rsh_component_query (
</span><br>
<span class="quotelev1">&gt;     module=0x60000fffffffb0e8, priority=0x60000fffffffb0e0)
</span><br>
<span class="quotelev1">&gt;     at plm_rsh_component.c:205
</span><br>
<span class="quotelev1">&gt; #1  0x20000000001ddea0 in mca_base_select (
</span><br>
<span class="quotelev1">&gt;     type_name=0x200000000026e708 &quot;plm&quot;, output_id=8, 
</span><br>
<span class="quotelev1">&gt;     components_available=0x20000000002c5f08 &lt;orte_plm_base&gt;, 
</span><br>
<span class="quotelev1">&gt;     best_module=0x60000fffffffb0f0, best_component=0x60000fffffffb0f8)
</span><br>
<span class="quotelev1">&gt;     at mca_base_components_select.c:76
</span><br>
<span class="quotelev1">&gt; #2  0x20000000001392f0 in orte_plm_base_select () at base/plm_base_select.c:46
</span><br>
<span class="quotelev1">&gt; #3  0x20000000008316f0 in rte_init () at ess_hnp_module.c:169
</span><br>
<span class="quotelev1">&gt; #4  0x200000000008e0c0 in orte_init (pargc=0x60000fffffffb370, 
</span><br>
<span class="quotelev1">&gt;     pargv=0x60000fffffffb378, flags=4) at runtime/orte_init.c:127
</span><br>
<span class="quotelev1">&gt; #5  0x4000000000006c60 in orterun (argc=15, argv=0x60000fffffffb628)
</span><br>
<span class="quotelev1">&gt;     at orterun.c:693
</span><br>
<span class="quotelev1">&gt; #6  0x40000000000045e0 in main (argc=15, argv=0x60000fffffffb628) at main.c:13
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; S
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13296.php">Adrian Reber: "[OMPI devel] [PATCH] Trying to get the C/R code to compile again"</a>
<li><strong>Previous message:</strong> <a href="13294.php">Sylvestre Ledru: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<li><strong>In reply to:</strong> <a href="13294.php">Sylvestre Ledru: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/09/12962.php">Christopher Samuel: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
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
