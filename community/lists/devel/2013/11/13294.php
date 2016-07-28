<?
$subject_val = "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Nov 16 05:33:37 2013" -->
<!-- isoreceived="20131116103337" -->
<!-- sent="Sat, 16 Nov 2013 11:33:34 +0100" -->
<!-- isosent="20131116103334" -->
<!-- name="Sylvestre Ledru" -->
<!-- email="sylvestre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64" -->
<!-- id="528749FE.8090701_at_debian.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9868F1A0-136A-4BFA-A4E2-9F64E0AD61F7_at_open-mpi.org" -->
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
<strong>From:</strong> Sylvestre Ledru (<em>sylvestre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-16 05:33:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13295.php">Ralph Castain: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<li><strong>Previous message:</strong> <a href="13293.php">Steve Wise: "Re: [OMPI devel] What to do about openib/ofacm/cpc"</a>
<li><strong>In reply to:</strong> <a href="13290.php">Ralph Castain: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13295.php">Ralph Castain: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<li><strong>Reply:</strong> <a href="13295.php">Ralph Castain: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 15/11/2013 17:50, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Hmm...well, that will make debug a tad more difficult. I've attached a
</span><br>
<span class="quotelev1">&gt; patch that *should* stop the segfault. Given that behavior, though, it
</span><br>
<span class="quotelev1">&gt; looks like the system isn't finding either rsh or ssh on your machine.
</span><br>
<span class="quotelev1">&gt; Might be the root cause of the problem.
</span><br>
With your patch:
<br>
$ ./mpirun -mca plm_base_verbose 5 -mca ras_base_verbose 5
<br>
-mcarmaps_base_verbose 5 -mca ess_base_verbose  5 -c 4 foo
<br>
[merulo:08821] mca:base:select:(  plm) Querying component [rsh]
<br>
[merulo:08821] [[INVALID],INVALID] plm:base:rsh_lookup on agent ssh :
<br>
rsh path NULL
<br>
[merulo:08821] *** Process received signal ***
<br>
[merulo:08821] Signal: Segmentation fault (11)
<br>
[merulo:08821] Signal code: Invalid permissions (2)
<br>
[merulo:08821] Failing at address: (nil)
<br>
[merulo:08821] [ 0]
<br>
linux-gate.so.1(__kernel_sigtramp+0x7fffffffff886860) [0xa000000000040800]
<br>
[merulo:08821] [ 1]
<br>
/home/sylvestre/bogus2/lib/openmpi/mca_plm_rsh.so(orte_plm_rsh_component_query+0xae3b0)
<br>
[0x2000000000867f30]
<br>
[merulo:08821] [ 2]
<br>
/home/sylvestre/bogus2/lib/libopen-rte.so.4(mca_base_select-0x5dc110)
<br>
[0x20000000001ddea0]
<br>
[merulo:08821] [ 3]
<br>
/home/sylvestre/bogus2/lib/libopen-rte.so.4(orte_plm_base_select-0x680cd0)
<br>
[0x20000000001392f0]
<br>
[merulo:08821] [ 4]
<br>
/home/sylvestre/bogus2/lib/openmpi/mca_ess_hnp.so(+0x56f0)
<br>
[0x20000000008316f0]
<br>
[merulo:08821] [ 5]
<br>
/home/sylvestre/bogus2/lib/libopen-rte.so.4(orte_init-0x72bf10)
<br>
[0x200000000008e0c0]
<br>
[merulo:08821] [ 6] ./mpirun(orterun+0x1fffffffff84cc80)
<br>
[0x4000000000006c60]
<br>
[merulo:08821] [ 7] ./mpirun(main+0x1fffffffff84b880) [0x40000000000045e0]
<br>
[merulo:08821] [ 8]
<br>
/lib/ia64-linux-gnu/libc.so.6.1(__libc_start_main-0x2fcd50)
<br>
[0x20000000004bd2a0]
<br>
[merulo:08821] [ 9] ./mpirun(_start+0x1fffffffff84a3c0) [0x40000000000043c0]
<br>
[merulo:08821] *** End of error message ***
<br>
Segmentation fault
<br>
<p>bt:
<br>
Program received signal SIGSEGV, Segmentation fault.
<br>
0x2000000000867f30 in orte_plm_rsh_component_query (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;module=0x60000fffffffb0e8, priority=0x60000fffffffb0e0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at plm_rsh_component.c:205
<br>
205            OPAL_OUTPUT_VERBOSE((1, orte_plm_globals.output,
<br>
(gdb) bt
<br>
#0  0x2000000000867f30 in orte_plm_rsh_component_query (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;module=0x60000fffffffb0e8, priority=0x60000fffffffb0e0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at plm_rsh_component.c:205
<br>
#1  0x20000000001ddea0 in mca_base_select (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;type_name=0x200000000026e708 &quot;plm&quot;, output_id=8,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;components_available=0x20000000002c5f08 &lt;orte_plm_base&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;best_module=0x60000fffffffb0f0, best_component=0x60000fffffffb0f8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at mca_base_components_select.c:76
<br>
#2  0x20000000001392f0 in orte_plm_base_select () at
<br>
base/plm_base_select.c:46
<br>
#3  0x20000000008316f0 in rte_init () at ess_hnp_module.c:169
<br>
#4  0x200000000008e0c0 in orte_init (pargc=0x60000fffffffb370,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;pargv=0x60000fffffffb378, flags=4) at runtime/orte_init.c:127
<br>
#5  0x4000000000006c60 in orterun (argc=15, argv=0x60000fffffffb628)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at orterun.c:693
<br>
#6  0x40000000000045e0 in main (argc=15, argv=0x60000fffffffb628) at
<br>
main.c:13
<br>
<p>S
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13294/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13295.php">Ralph Castain: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<li><strong>Previous message:</strong> <a href="13293.php">Steve Wise: "Re: [OMPI devel] What to do about openib/ofacm/cpc"</a>
<li><strong>In reply to:</strong> <a href="13290.php">Ralph Castain: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13295.php">Ralph Castain: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<li><strong>Reply:</strong> <a href="13295.php">Ralph Castain: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
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
