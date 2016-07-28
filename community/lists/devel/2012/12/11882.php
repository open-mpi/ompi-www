<?
$subject_val = "Re: [OMPI devel] Error compiling";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec 23 17:41:36 2012" -->
<!-- isoreceived="20121223224136" -->
<!-- sent="Sun, 23 Dec 2012 17:41:23 -0500" -->
<!-- isosent="20121223224123" -->
<!-- name="RC" -->
<!-- email="recifx_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Error compiling" -->
<!-- id="03D9B463-69B8-433C-A661-4F45CF665FEA_at_gmail.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="70448885-D9DF-4B4A-B513-53102768DD6D_at_open-mpi.org" -->
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
<strong>From:</strong> RC (<em>recifx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-23 17:41:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11883.php">Jeff Squyres: "Re: [OMPI devel] [OMPI users] [Open MPI] #3351: JAVA scatter error"</a>
<li><strong>Previous message:</strong> <a href="11881.php">Ralph Castain: "Re: [OMPI devel] Error compiling"</a>
<li><strong>In reply to:</strong> <a href="11881.php">Ralph Castain: "Re: [OMPI devel] Error compiling"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I had originally installed v1.6.3 in /usr/local but had problems with it hanging on some commands. The installation of the development version in the same directory probably is the reason for the errors I am getting. I will do a clean install in a different directory. Thanks for your help.
<br>
<p>On Dec 23, 2012, at 5:28 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Wow - strange. How was this configured?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Something clearly is messed up as there is no such thing as a &quot;basic&quot; grpcomm module, or an ess &quot;slurmd&quot; module, etc. any more. My best guess is that you wound up installing this on top of an existing OMPI install, and have now created a massive library confusion problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Try configuring it --with-prefix=&lt;foo&gt;, where foo is under your home directory. This will provide a clean place to install without confusion. Then put that location at the front of your path and ld_library_path - I suspect things will be okay from there.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 23, 2012, at 1:43 PM, R C &lt;recifx_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I put /usr/local/lib at the beginning of LD_LIBRARY_PATH and I get:
</span><br>
<span class="quotelev2">&gt;&gt; $ ompi_info
</span><br>
<span class="quotelev2">&gt;&gt; [RCAsus1:20105] mca: base: component_find: unable to open /usr/local/lib/openmpi/mca_errmgr_default: /usr/local/lib/openmpi/mca_errmgr_default.so: undefined symbol: orte_errmgr_base_output (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [RCAsus1:20105] mca: base: component_find: unable to open /usr/local/lib/openmpi/mca_ess_slurmd: /usr/local/lib/openmpi/mca_ess_slurmd.so: undefined symbol: orte_nid_t_class (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [RCAsus1:20105] mca: base: component_find: unable to open /usr/local/lib/openmpi/mca_grpcomm_basic: /usr/local/lib/openmpi/mca_grpcomm_basic.so: undefined symbol: opal_profile_file (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [RCAsus1:20105] mca: base: component_find: unable to open /usr/local/lib/openmpi/mca_routed_cm: /usr/local/lib/openmpi/mca_routed_cm.so: undefined symbol: orte_message_event_t_class (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [RCAsus1:20105] mca: base: component_find: unable to open /usr/local/lib/openmpi/mca_routed_linear: /usr/local/lib/openmpi/mca_routed_linear.so: undefined symbol: orte_message_event_t_class (ignored)
</span><br>
<span class="quotelev2">&gt;&gt;                  Package: Open MPI rc_at_RCAsus1 Distribution
</span><br>
<span class="quotelev2">&gt;&gt;                 Open MPI: 1.9a1r27719
</span><br>
<span class="quotelev2">&gt;&gt;   Open MPI repo revision: r27719
</span><br>
<span class="quotelev2">&gt;&gt;    Open MPI release date: Unreleased developer copy
</span><br>
<span class="quotelev2">&gt;&gt;                 Open RTE: 1.9a1r27719
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; and now when I try:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ mpicc -o hw hello.c
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; it seems to compile, but from:
</span><br>
<span class="quotelev2">&gt;&gt; $mpirun -np 4 hw
</span><br>
<span class="quotelev2">&gt;&gt; RCAsus1:26668] mca: base: component_find: unable to open /usr/local/lib/openmpi/mca_ess_slurmd: /usr/local/lib/openmpi/mca_ess_slurmd.so: undefined symbol: orte_nid_t_class (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [RCAsus1:26668] mca: base: component_find: unable to open /usr/local/lib/openmpi/mca_errmgr_default: /usr/local/lib/openmpi/mca_errmgr_default.so: undefined symbol: orte_errmgr_base_output (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [RCAsus1:26668] mca: base: component_find: unable to open /usr/local/lib/openmpi/mca_routed_cm: /usr/local/lib/openmpi/mca_routed_cm.so: undefined symbol: orte_message_event_t_class (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [RCAsus1:26668] mca: base: component_find: unable to open /usr/local/lib/openmpi/mca_routed_linear: /usr/local/lib/openmpi/mca_routed_linear.so: undefined symbol: orte_message_event_t_class (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [RCAsus1:26668] mca: base: component_find: unable to open /usr/local/lib/openmpi/mca_grpcomm_basic: /usr/local/lib/openmpi/mca_grpcomm_basic.so: undefined symbol: opal_profile_file (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [RCAsus1:26668] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [RCAsus1:26668] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;&gt; [RCAsus1:26668] Signal code:  (128)
</span><br>
<span class="quotelev2">&gt;&gt; [RCAsus1:26668] Failing at address: (nil)
</span><br>
<span class="quotelev2">&gt;&gt; [RCAsus1:26668] [ 0] /lib/x86_64-linux-gnu/libpthread.so.0(+0xfcb0) [0x7f0e31d54cb0]
</span><br>
<span class="quotelev2">&gt;&gt; [RCAsus1:26668] [ 1] /usr/local/lib/openmpi/mca_rmaps_load_balance.so(+0xca8) [0x7f0e2f720ca8]
</span><br>
<span class="quotelev2">&gt;&gt; [RCAsus1:26668] [ 2] /usr/local/lib/libopen-rte.so.0(orte_rmaps_base_map_job+0x1ba) [0x7f0e3226b09a]
</span><br>
<span class="quotelev2">&gt;&gt; [RCAsus1:26668] [ 3] /usr/local/lib/libopen-pal.so.0(opal_libevent2019_event_base_loop+0x626) [0x7f0e31fb97e6]
</span><br>
<span class="quotelev2">&gt;&gt; [RCAsus1:26668] [ 4] /usr/local/lib/libopen-pal.so.0(opal_progress+0xb3) [0x7f0e31f87483]
</span><br>
<span class="quotelev2">&gt;&gt; [RCAsus1:26668] [ 5] mpirun(orterun+0x10fb) [0x404b8d]
</span><br>
<span class="quotelev2">&gt;&gt; [RCAsus1:26668] [ 6] mpirun(main+0x20) [0x4036ec]
</span><br>
<span class="quotelev2">&gt;&gt; [RCAsus1:26668] [ 7] /lib/x86_64-linux-gnu/libc.so.6(__libc_start_main+0xed) [0x7f0e319a776d]
</span><br>
<span class="quotelev2">&gt;&gt; [RCAsus1:26668] [ 8] mpirun() [0x4035e9]
</span><br>
<span class="quotelev2">&gt;&gt; [RCAsus1:26668] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt; Segmentation fault (core dumped)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 504:5 $ mpicc -o hw hello.c
</span><br>
<span class="quotelev2">&gt;&gt; [04:37 PM][rc_at_RCAsus1] [~/Dropbox/tst]
</span><br>
<span class="quotelev2">&gt;&gt; 505:6 $ mpirun -np 4 hw
</span><br>
<span class="quotelev2">&gt;&gt; [RCAsus1:26668] mca: base: component_find: unable to open /usr/local/lib/openmpi/mca_ess_slurmd: /usr/local/lib/openmpi/mca_ess_slurmd.so: undefined symbol: orte_nid_t_class (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [RCAsus1:26668] mca: base: component_find: unable to open /usr/local/lib/openmpi/mca_errmgr_default: /usr/local/lib/openmpi/mca_errmgr_default.so: undefined symbol: orte_errmgr_base_output (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [RCAsus1:26668] mca: base: component_find: unable to open /usr/local/lib/openmpi/mca_routed_cm: /usr/local/lib/openmpi/mca_routed_cm.so: undefined symbol: orte_message_event_t_class (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [RCAsus1:26668] mca: base: component_find: unable to open /usr/local/lib/openmpi/mca_routed_linear: /usr/local/lib/openmpi/mca_routed_linear.so: undefined symbol: orte_message_event_t_class (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [RCAsus1:26668] mca: base: component_find: unable to open /usr/local/lib/openmpi/mca_grpcomm_basic: /usr/local/lib/openmpi/mca_grpcomm_basic.so: undefined symbol: opal_profile_file (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [RCAsus1:26668] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [RCAsus1:26668] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;&gt; [RCAsus1:26668] Signal code:  (128)
</span><br>
<span class="quotelev2">&gt;&gt; [RCAsus1:26668] Failing at address: (nil)
</span><br>
<span class="quotelev2">&gt;&gt; [RCAsus1:26668] [ 0] /lib/x86_64-linux-gnu/libpthread.so.0(+0xfcb0) [0x7f0e31d54cb0]
</span><br>
<span class="quotelev2">&gt;&gt; [RCAsus1:26668] [ 1] /usr/local/lib/openmpi/mca_rmaps_load_balance.so(+0xca8) [0x7f0e2f720ca8]
</span><br>
<span class="quotelev2">&gt;&gt; [RCAsus1:26668] [ 2] /usr/local/lib/libopen-rte.so.0(orte_rmaps_base_map_job+0x1ba) [0x7f0e3226b09a]
</span><br>
<span class="quotelev2">&gt;&gt; [RCAsus1:26668] [ 3] /usr/local/lib/libopen-pal.so.0(opal_libevent2019_event_base_loop+0x626) [0x7f0e31fb97e6]
</span><br>
<span class="quotelev2">&gt;&gt; [RCAsus1:26668] [ 4] /usr/local/lib/libopen-pal.so.0(opal_progress+0xb3) [0x7f0e31f87483]
</span><br>
<span class="quotelev2">&gt;&gt; [RCAsus1:26668] [ 5] mpirun(orterun+0x10fb) [0x404b8d]
</span><br>
<span class="quotelev2">&gt;&gt; [RCAsus1:26668] [ 6] mpirun(main+0x20) [0x4036ec]
</span><br>
<span class="quotelev2">&gt;&gt; [RCAsus1:26668] [ 7] /lib/x86_64-linux-gnu/libc.so.6(__libc_start_main+0xed) [0x7f0e319a776d]
</span><br>
<span class="quotelev2">&gt;&gt; [RCAsus1:26668] [ 8] mpirun() [0x4035e9]
</span><br>
<span class="quotelev2">&gt;&gt; [RCAsus1:26668] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt; Segmentation fault (core dumped)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for your assistance.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Sun, Dec 23, 2012 at 4:08 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Do you have your LD_LIBRARY_PATH set correctly? You want your prefix location to be at the front so you don't pickup something from the default system installation.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 23, 2012, at 12:39 PM, R C &lt;recifx_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks, r27719 compiles but I get an error when I try:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $/usr/local/bin/ompi_info 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/bin/ompi_info: symbol lookup error: /usr/local/bin/ompi_info: undefined symbol: mca_fbtl_base_components_opened
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and when I tried to compile a test program:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ mpicc -o hw hello.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpicc: Symbol `opal_show_help' has different size in shared object, consider re-linking
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sun, Dec 23, 2012 at 2:55 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sigh - sorry about that. Guess we'll have to feel our way down the various tools. I've committed a fix that -should- resolve this for the rest of the tools in the OMPI layer. Please let me know how it works for you.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Dec 23, 2012, at 10:56 AM, R C &lt;recifx_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks again for looking into this.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; With r27717, 'make all' gives me the error:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Making all in tools/ompi_info
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[2]: Entering directory `/home/rc/Downloads/ompi/objd/ompi/tools/ompi_info'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   CC     ompi_info.o
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   CC     param.o
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../../ompi/tools/ompi_info/param.c: In function &#226;&#128;&#152;ompi_info_do_config&#226;&#128;&#153;:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../../ompi/tools/ompi_info/param.c:238:17: warning: ignoring return value of &#226;&#128;&#152;asprintf&#226;&#128;&#153;, declared with attribute warn_unused_result [-Wunused-result]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../../ompi/tools/ompi_info/param.c:252:17: warning: ignoring return value of &#226;&#128;&#152;asprintf&#226;&#128;&#153;, declared with attribute warn_unused_result [-Wunused-result]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../../ompi/tools/ompi_info/param.c:259:17: warning: ignoring return value of &#226;&#128;&#152;asprintf&#226;&#128;&#153;, declared with attribute warn_unused_result [-Wunused-result]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../../ompi/tools/ompi_info/param.c:271:13: warning: ignoring return value of &#226;&#128;&#152;asprintf&#226;&#128;&#153;, declared with attribute warn_unused_result [-Wunused-result]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../../ompi/tools/ompi_info/param.c:274:13: warning: ignoring return value of &#226;&#128;&#152;asprintf&#226;&#128;&#153;, declared with attribute warn_unused_result [-Wunused-result]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   CC     components.o
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../../ompi/tools/ompi_info/components.c: In function &#226;&#128;&#152;ompi_info_register_components&#226;&#128;&#153;:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../../ompi/tools/ompi_info/components.c:106:17: warning: ignoring return value of &#226;&#128;&#152;asprintf&#226;&#128;&#153;, declared with attribute warn_unused_result [-Wunused-result]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../../ompi/tools/ompi_info/components.c:109:21: warning: ignoring return value of &#226;&#128;&#152;asprintf&#226;&#128;&#153;, declared with attribute warn_unused_result [-Wunused-result]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../../ompi/tools/ompi_info/components.c:113:21: warning: ignoring return value of &#226;&#128;&#152;asprintf&#226;&#128;&#153;, declared with attribute warn_unused_result [-Wunused-result]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   CC     version.o
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../../ompi/tools/ompi_info/version.c: In function &#226;&#128;&#152;ompi_info_show_ompi_version&#226;&#128;&#153;:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../../ompi/tools/ompi_info/version.c:125:13: warning: ignoring return value of &#226;&#128;&#152;asprintf&#226;&#128;&#153;, declared with attribute warn_unused_result [-Wunused-result]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../../ompi/tools/ompi_info/version.c:134:13: warning: ignoring return value of &#226;&#128;&#152;asprintf&#226;&#128;&#153;, declared with attribute warn_unused_result [-Wunused-result]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../../ompi/tools/ompi_info/version.c:137:13: warning: ignoring return value of &#226;&#128;&#152;asprintf&#226;&#128;&#153;, declared with attribute warn_unused_result [-Wunused-result]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   CCLD   ompi_info
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /usr/bin/ld: version.o: undefined reference to symbol 'orte_info_type_orte'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /usr/bin/ld: note: 'orte_info_type_orte' is defined in DSO /home/rc/Downloads/ompi/objd/orte/.libs/libopen-rte.so.0 so try adding it to the linker command line
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /home/rc/Downloads/ompi/objd/orte/.libs/libopen-rte.so.0: could not read symbols: Invalid operation
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; collect2: error: ld returned 1 exit status
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[2]: *** [ompi_info] Error 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[2]: Leaving directory `/home/rc/Downloads/ompi/objd/ompi/tools/ompi_info'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[1]: Leaving directory `/home/rc/Downloads/ompi/objd/ompi'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11882/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11883.php">Jeff Squyres: "Re: [OMPI devel] [OMPI users] [Open MPI] #3351: JAVA scatter error"</a>
<li><strong>Previous message:</strong> <a href="11881.php">Ralph Castain: "Re: [OMPI devel] Error compiling"</a>
<li><strong>In reply to:</strong> <a href="11881.php">Ralph Castain: "Re: [OMPI devel] Error compiling"</a>
<!-- nextthread="start" -->
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
