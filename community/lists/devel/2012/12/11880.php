<?
$subject_val = "Re: [OMPI devel] Error compiling";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec 23 16:43:11 2012" -->
<!-- isoreceived="20121223214311" -->
<!-- sent="Sun, 23 Dec 2012 16:43:05 -0500" -->
<!-- isosent="20121223214305" -->
<!-- name="R C" -->
<!-- email="recifx_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Error compiling" -->
<!-- id="CAD_Xbc4Fx=bckZ5Lk72VFrcwS5ZuRQzAKFuCvFw90mVEwiBDJg_at_mail.gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="D22F2630-880C-412F-8D0D-118416987575_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Error compiling<br>
<strong>From:</strong> R C (<em>recifx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-23 16:43:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11881.php">Ralph Castain: "Re: [OMPI devel] Error compiling"</a>
<li><strong>Previous message:</strong> <a href="11879.php">Ralph Castain: "Re: [OMPI devel] Error compiling"</a>
<li><strong>In reply to:</strong> <a href="11879.php">Ralph Castain: "Re: [OMPI devel] Error compiling"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11881.php">Ralph Castain: "Re: [OMPI devel] Error compiling"</a>
<li><strong>Reply:</strong> <a href="11881.php">Ralph Castain: "Re: [OMPI devel] Error compiling"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I put /usr/local/lib at the beginning of LD_LIBRARY_PATH and I get:
<br>
$ ompi_info
<br>
[RCAsus1:20105] mca: base: component_find: unable to open
<br>
/usr/local/lib/openmpi/mca_errmgr_default:
<br>
/usr/local/lib/openmpi/mca_errmgr_default.so: undefined symbol:
<br>
orte_errmgr_base_output (ignored)
<br>
[RCAsus1:20105] mca: base: component_find: unable to open
<br>
/usr/local/lib/openmpi/mca_ess_slurmd:
<br>
/usr/local/lib/openmpi/mca_ess_slurmd.so: undefined symbol:
<br>
orte_nid_t_class (ignored)
<br>
[RCAsus1:20105] mca: base: component_find: unable to open
<br>
/usr/local/lib/openmpi/mca_grpcomm_basic:
<br>
/usr/local/lib/openmpi/mca_grpcomm_basic.so: undefined symbol:
<br>
opal_profile_file (ignored)
<br>
[RCAsus1:20105] mca: base: component_find: unable to open
<br>
/usr/local/lib/openmpi/mca_routed_cm:
<br>
/usr/local/lib/openmpi/mca_routed_cm.so: undefined symbol:
<br>
orte_message_event_t_class (ignored)
<br>
[RCAsus1:20105] mca: base: component_find: unable to open
<br>
/usr/local/lib/openmpi/mca_routed_linear:
<br>
/usr/local/lib/openmpi/mca_routed_linear.so: undefined symbol:
<br>
orte_message_event_t_class (ignored)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Package: Open MPI rc_at_RCAsus1 Distribution
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.9a1r27719
<br>
&nbsp;&nbsp;Open MPI repo revision: r27719
<br>
&nbsp;&nbsp;&nbsp;Open MPI release date: Unreleased developer copy
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open RTE: 1.9a1r27719
<br>
<p><p>and now when I try:
<br>
<p>$ mpicc -o hw hello.c
<br>
<p>it seems to compile, but from:
<br>
$mpirun -np 4 hw
<br>
RCAsus1:26668] mca: base: component_find: unable to open
<br>
/usr/local/lib/openmpi/mca_ess_slurmd:
<br>
/usr/local/lib/openmpi/mca_ess_slurmd.so: undefined symbol:
<br>
orte_nid_t_class (ignored)
<br>
[RCAsus1:26668] mca: base: component_find: unable to open
<br>
/usr/local/lib/openmpi/mca_errmgr_default:
<br>
/usr/local/lib/openmpi/mca_errmgr_default.so: undefined symbol:
<br>
orte_errmgr_base_output (ignored)
<br>
[RCAsus1:26668] mca: base: component_find: unable to open
<br>
/usr/local/lib/openmpi/mca_routed_cm:
<br>
/usr/local/lib/openmpi/mca_routed_cm.so: undefined symbol:
<br>
orte_message_event_t_class (ignored)
<br>
[RCAsus1:26668] mca: base: component_find: unable to open
<br>
/usr/local/lib/openmpi/mca_routed_linear:
<br>
/usr/local/lib/openmpi/mca_routed_linear.so: undefined symbol:
<br>
orte_message_event_t_class (ignored)
<br>
[RCAsus1:26668] mca: base: component_find: unable to open
<br>
/usr/local/lib/openmpi/mca_grpcomm_basic:
<br>
/usr/local/lib/openmpi/mca_grpcomm_basic.so: undefined symbol:
<br>
opal_profile_file (ignored)
<br>
[RCAsus1:26668] *** Process received signal ***
<br>
[RCAsus1:26668] Signal: Segmentation fault (11)
<br>
[RCAsus1:26668] Signal code:  (128)
<br>
[RCAsus1:26668] Failing at address: (nil)
<br>
[RCAsus1:26668] [ 0] /lib/x86_64-linux-gnu/libpthread.so.0(+0xfcb0)
<br>
[0x7f0e31d54cb0]
<br>
[RCAsus1:26668] [ 1]
<br>
/usr/local/lib/openmpi/mca_rmaps_load_balance.so(+0xca8) [0x7f0e2f720ca8]
<br>
[RCAsus1:26668] [ 2]
<br>
/usr/local/lib/libopen-rte.so.0(orte_rmaps_base_map_job+0x1ba)
<br>
[0x7f0e3226b09a]
<br>
[RCAsus1:26668] [ 3]
<br>
/usr/local/lib/libopen-pal.so.0(opal_libevent2019_event_base_loop+0x626)
<br>
[0x7f0e31fb97e6]
<br>
[RCAsus1:26668] [ 4] /usr/local/lib/libopen-pal.so.0(opal_progress+0xb3)
<br>
[0x7f0e31f87483]
<br>
[RCAsus1:26668] [ 5] mpirun(orterun+0x10fb) [0x404b8d]
<br>
[RCAsus1:26668] [ 6] mpirun(main+0x20) [0x4036ec]
<br>
[RCAsus1:26668] [ 7]
<br>
/lib/x86_64-linux-gnu/libc.so.6(__libc_start_main+0xed) [0x7f0e319a776d]
<br>
[RCAsus1:26668] [ 8] mpirun() [0x4035e9]
<br>
[RCAsus1:26668] *** End of error message ***
<br>
Segmentation fault (core dumped)
<br>
<p><p><p>504:5 $ mpicc -o hw hello.c
<br>
[04:37 PM][rc_at_RCAsus1] [~/Dropbox/tst]
<br>
505:6 $ mpirun -np 4 hw
<br>
[RCAsus1:26668] mca: base: component_find: unable to open
<br>
/usr/local/lib/openmpi/mca_ess_slurmd:
<br>
/usr/local/lib/openmpi/mca_ess_slurmd.so: undefined symbol:
<br>
orte_nid_t_class (ignored)
<br>
[RCAsus1:26668] mca: base: component_find: unable to open
<br>
/usr/local/lib/openmpi/mca_errmgr_default:
<br>
/usr/local/lib/openmpi/mca_errmgr_default.so: undefined symbol:
<br>
orte_errmgr_base_output (ignored)
<br>
[RCAsus1:26668] mca: base: component_find: unable to open
<br>
/usr/local/lib/openmpi/mca_routed_cm:
<br>
/usr/local/lib/openmpi/mca_routed_cm.so: undefined symbol:
<br>
orte_message_event_t_class (ignored)
<br>
[RCAsus1:26668] mca: base: component_find: unable to open
<br>
/usr/local/lib/openmpi/mca_routed_linear:
<br>
/usr/local/lib/openmpi/mca_routed_linear.so: undefined symbol:
<br>
orte_message_event_t_class (ignored)
<br>
[RCAsus1:26668] mca: base: component_find: unable to open
<br>
/usr/local/lib/openmpi/mca_grpcomm_basic:
<br>
/usr/local/lib/openmpi/mca_grpcomm_basic.so: undefined symbol:
<br>
opal_profile_file (ignored)
<br>
[RCAsus1:26668] *** Process received signal ***
<br>
[RCAsus1:26668] Signal: Segmentation fault (11)
<br>
[RCAsus1:26668] Signal code:  (128)
<br>
[RCAsus1:26668] Failing at address: (nil)
<br>
[RCAsus1:26668] [ 0] /lib/x86_64-linux-gnu/libpthread.so.0(+0xfcb0)
<br>
[0x7f0e31d54cb0]
<br>
[RCAsus1:26668] [ 1]
<br>
/usr/local/lib/openmpi/mca_rmaps_load_balance.so(+0xca8) [0x7f0e2f720ca8]
<br>
[RCAsus1:26668] [ 2]
<br>
/usr/local/lib/libopen-rte.so.0(orte_rmaps_base_map_job+0x1ba)
<br>
[0x7f0e3226b09a]
<br>
[RCAsus1:26668] [ 3]
<br>
/usr/local/lib/libopen-pal.so.0(opal_libevent2019_event_base_loop+0x626)
<br>
[0x7f0e31fb97e6]
<br>
[RCAsus1:26668] [ 4] /usr/local/lib/libopen-pal.so.0(opal_progress+0xb3)
<br>
[0x7f0e31f87483]
<br>
[RCAsus1:26668] [ 5] mpirun(orterun+0x10fb) [0x404b8d]
<br>
[RCAsus1:26668] [ 6] mpirun(main+0x20) [0x4036ec]
<br>
[RCAsus1:26668] [ 7]
<br>
/lib/x86_64-linux-gnu/libc.so.6(__libc_start_main+0xed) [0x7f0e319a776d]
<br>
[RCAsus1:26668] [ 8] mpirun() [0x4035e9]
<br>
[RCAsus1:26668] *** End of error message ***
<br>
Segmentation fault (core dumped)
<br>
<p><p>Thanks for your assistance.
<br>
<p><p><p>On Sun, Dec 23, 2012 at 4:08 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Do you have your LD_LIBRARY_PATH set correctly? You want your prefix
</span><br>
<span class="quotelev1">&gt; location to be at the front so you don't pickup something from the default
</span><br>
<span class="quotelev1">&gt; system installation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 23, 2012, at 12:39 PM, R C &lt;recifx_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks, r27719 compiles but I get an error when I try:
</span><br>
<span class="quotelev1">&gt; $/usr/local/bin/ompi_info
</span><br>
<span class="quotelev1">&gt; /usr/local/bin/ompi_info: symbol lookup error: /usr/local/bin/ompi_info:
</span><br>
<span class="quotelev1">&gt; undefined symbol: mca_fbtl_base_components_opened
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and when I tried to compile a test program:
</span><br>
<span class="quotelev1">&gt; $ mpicc -o hw hello.c
</span><br>
<span class="quotelev1">&gt; mpicc: Symbol `opal_show_help' has different size in shared object,
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sun, Dec 23, 2012 at 2:55 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sigh - sorry about that. Guess we'll have to feel our way down the
</span><br>
<span class="quotelev2">&gt;&gt; various tools. I've committed a fix that -should- resolve this for the rest
</span><br>
<span class="quotelev2">&gt;&gt; of the tools in the OMPI layer. Please let me know how it works for you.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 23, 2012, at 10:56 AM, R C &lt;recifx_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks again for looking into this.
</span><br>
<span class="quotelev2">&gt;&gt; With r27717, 'make all' gives me the error:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Making all in tools/ompi_info
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory
</span><br>
<span class="quotelev2">&gt;&gt; `/home/rc/Downloads/ompi/objd/ompi/tools/ompi_info'
</span><br>
<span class="quotelev2">&gt;&gt;   CC     ompi_info.o
</span><br>
<span class="quotelev2">&gt;&gt;   CC     param.o
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../ompi/tools/ompi_info/param.c: In function
</span><br>
<span class="quotelev2">&gt;&gt; &#145;ompi_info_do_config&#146;:
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../ompi/tools/ompi_info/param.c:238:17: warning: ignoring return
</span><br>
<span class="quotelev2">&gt;&gt; value of &#145;asprintf&#146;, declared with attribute warn_unused_result
</span><br>
<span class="quotelev2">&gt;&gt; [-Wunused-result]
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../ompi/tools/ompi_info/param.c:252:17: warning: ignoring return
</span><br>
<span class="quotelev2">&gt;&gt; value of &#145;asprintf&#146;, declared with attribute warn_unused_result
</span><br>
<span class="quotelev2">&gt;&gt; [-Wunused-result]
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../ompi/tools/ompi_info/param.c:259:17: warning: ignoring return
</span><br>
<span class="quotelev2">&gt;&gt; value of &#145;asprintf&#146;, declared with attribute warn_unused_result
</span><br>
<span class="quotelev2">&gt;&gt; [-Wunused-result]
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../ompi/tools/ompi_info/param.c:271:13: warning: ignoring return
</span><br>
<span class="quotelev2">&gt;&gt; value of &#145;asprintf&#146;, declared with attribute warn_unused_result
</span><br>
<span class="quotelev2">&gt;&gt; [-Wunused-result]
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../ompi/tools/ompi_info/param.c:274:13: warning: ignoring return
</span><br>
<span class="quotelev2">&gt;&gt; value of &#145;asprintf&#146;, declared with attribute warn_unused_result
</span><br>
<span class="quotelev2">&gt;&gt; [-Wunused-result]
</span><br>
<span class="quotelev2">&gt;&gt;   CC     components.o
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../ompi/tools/ompi_info/components.c: In function
</span><br>
<span class="quotelev2">&gt;&gt; &#145;ompi_info_register_components&#146;:
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../ompi/tools/ompi_info/components.c:106:17: warning: ignoring
</span><br>
<span class="quotelev2">&gt;&gt; return value of &#145;asprintf&#146;, declared with attribute warn_unused_result
</span><br>
<span class="quotelev2">&gt;&gt; [-Wunused-result]
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../ompi/tools/ompi_info/components.c:109:21: warning: ignoring
</span><br>
<span class="quotelev2">&gt;&gt; return value of &#145;asprintf&#146;, declared with attribute warn_unused_result
</span><br>
<span class="quotelev2">&gt;&gt; [-Wunused-result]
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../ompi/tools/ompi_info/components.c:113:21: warning: ignoring
</span><br>
<span class="quotelev2">&gt;&gt; return value of &#145;asprintf&#146;, declared with attribute warn_unused_result
</span><br>
<span class="quotelev2">&gt;&gt; [-Wunused-result]
</span><br>
<span class="quotelev2">&gt;&gt;   CC     version.o
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../ompi/tools/ompi_info/version.c: In function
</span><br>
<span class="quotelev2">&gt;&gt; &#145;ompi_info_show_ompi_version&#146;:
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../ompi/tools/ompi_info/version.c:125:13: warning: ignoring
</span><br>
<span class="quotelev2">&gt;&gt; return value of &#145;asprintf&#146;, declared with attribute warn_unused_result
</span><br>
<span class="quotelev2">&gt;&gt; [-Wunused-result]
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../ompi/tools/ompi_info/version.c:134:13: warning: ignoring
</span><br>
<span class="quotelev2">&gt;&gt; return value of &#145;asprintf&#146;, declared with attribute warn_unused_result
</span><br>
<span class="quotelev2">&gt;&gt; [-Wunused-result]
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../ompi/tools/ompi_info/version.c:137:13: warning: ignoring
</span><br>
<span class="quotelev2">&gt;&gt; return value of &#145;asprintf&#146;, declared with attribute warn_unused_result
</span><br>
<span class="quotelev2">&gt;&gt; [-Wunused-result]
</span><br>
<span class="quotelev2">&gt;&gt;   CCLD   ompi_info
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/ld: version.o: undefined reference to symbol
</span><br>
<span class="quotelev2">&gt;&gt; 'orte_info_type_orte'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/ld: note: 'orte_info_type_orte' is defined in DSO
</span><br>
<span class="quotelev2">&gt;&gt; /home/rc/Downloads/ompi/objd/orte/.libs/libopen-rte.so.0 so try adding it
</span><br>
<span class="quotelev2">&gt;&gt; to the linker command line
</span><br>
<span class="quotelev2">&gt;&gt; /home/rc/Downloads/ompi/objd/orte/.libs/libopen-rte.so.0: could not read
</span><br>
<span class="quotelev2">&gt;&gt; symbols: Invalid operation
</span><br>
<span class="quotelev2">&gt;&gt; collect2: error: ld returned 1 exit status
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [ompi_info] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev2">&gt;&gt; `/home/rc/Downloads/ompi/objd/ompi/tools/ompi_info'
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Leaving directory `/home/rc/Downloads/ompi/objd/ompi'
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11880/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11881.php">Ralph Castain: "Re: [OMPI devel] Error compiling"</a>
<li><strong>Previous message:</strong> <a href="11879.php">Ralph Castain: "Re: [OMPI devel] Error compiling"</a>
<li><strong>In reply to:</strong> <a href="11879.php">Ralph Castain: "Re: [OMPI devel] Error compiling"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11881.php">Ralph Castain: "Re: [OMPI devel] Error compiling"</a>
<li><strong>Reply:</strong> <a href="11881.php">Ralph Castain: "Re: [OMPI devel] Error compiling"</a>
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
