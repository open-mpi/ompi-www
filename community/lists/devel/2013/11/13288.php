<?
$subject_val = "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 15 11:38:46 2013" -->
<!-- isoreceived="20131115163846" -->
<!-- sent="Fri, 15 Nov 2013 08:37:40 -0800" -->
<!-- isosent="20131115163740" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64" -->
<!-- id="759417E5-3FE5-4C36-8694-BC227AEBE34A_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="52863CAD.8060900_at_debian.org" -->
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
<strong>Date:</strong> 2013-11-15 11:37:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13289.php">Sylvestre Ledru: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<li><strong>Previous message:</strong> <a href="13287.php">Sylvestre Ledru: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<li><strong>In reply to:</strong> <a href="13287.php">Sylvestre Ledru: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13289.php">Sylvestre Ledru: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<li><strong>Reply:</strong> <a href="13289.php">Sylvestre Ledru: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Trying to replicate this, but I can't. I'm using the latest 1.6 tarball, not 1.6.5, so it is possible something was fixed - though I believe we have committed very few changes as that series is about to drop to &quot;deprecated&quot;.
<br>
<p>First thing I encountered:
<br>
<p>configure: WARNING: unrecognized options: --disable-maintainer-mode, --enable-ltdl-convenience
<br>
<p>So I removed those - no idea what they even do - but retained the rest of your configure options. I then used your cmd line, substituting &quot;hostname&quot; for &quot;foo&quot;, and everything ran just fine on an ssh-based system. Here's my system info:
<br>
<p>Linux bend001 2.6.32-358.18.1.el6.x86_64 #1 SMP Wed Aug 28 17:19:38 UTC 2013 x86_64 x86_64 x86_64 GNU/Linux
<br>
<p>gcc (GCC) 4.4.7 20120313 (Red Hat 4.4.7-3)
<br>
<p><p><p>On Nov 15, 2013, at 7:24 AM, Sylvestre Ledru &lt;sylvestre_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 02/10/2013 19:34, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 30, 2013, at 11:05 AM, Sylvestre Ledru &lt;sylvestre_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here are the options list:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure: running /bin/bash './configure'  CFLAGS=&quot;-DNDEBUG -g -O2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Wformat -Werror=format-security -finline-functions -fno-strict-aliasing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -pthread&quot; CPPFLAGS=&quot; -I/usr//include   -I/usr/include/infiniband
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -I/usr/include/infiniband&quot; FFLAGS=&quot;-g -O2&quot; LDFLAGS=&quot;  -L/usr//lib&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --enable-shared --disable-static  --prefix=/usr --with-mpi=open_mpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --disable-aio --cache-file=/dev/null --srcdir=. --disable-option-checking
</span><br>
<span class="quotelev2">&gt;&gt; Hmm -- I'm confused here; it's not possible that you're getting an assertion failure with this configure line, for two reasons:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1. The assert() in question will only be compiled in if you --enable-debug on the configure command line.
</span><br>
<span class="quotelev2">&gt;&gt; 2. You supplied -DNDEBUG in CFLAGS, which means you've disabled all assert()s
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Can you verify that this is the correct configure line that you used to generate that error?  Or is something else going on?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; So, I tried with the arguments you sent me in private.
</span><br>
<span class="quotelev1">&gt; $ ./configure --prefix=/home/sylvestre/bogus2 --disable-maintainer-mode
</span><br>
<span class="quotelev1">&gt; --disable-dependency-tracking --with-threads=posix
</span><br>
<span class="quotelev1">&gt; --enable-opal-multi-threads --disable-silent-rules --enable-debug
</span><br>
<span class="quotelev1">&gt; --with-devel-headers --with-slurm --with-sge --enable-heterogeneous
</span><br>
<span class="quotelev1">&gt; --disable-vt --enable-mpirun-prefix-by-default --enable-mpi-f77
</span><br>
<span class="quotelev1">&gt; --enable-mpi-f90 --enable-ltdl-convenience
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am getting something more interesting than a freeze (even if it does
</span><br>
<span class="quotelev1">&gt; not mean much to me):
</span><br>
<span class="quotelev1">&gt; ./mpirun -mca plm_base_verbose 5 -mca ras_base_verbose 5 -mca
</span><br>
<span class="quotelev1">&gt; rmaps_base_verbose 5 -mca ess_base_verbose  5 -c 4 foo
</span><br>
<span class="quotelev1">&gt; [merulo:32531] mca:base:select:(  ess) Querying component [env]
</span><br>
<span class="quotelev1">&gt; [merulo:32531] mca:base:select:(  ess) Skipping component [env]. Query
</span><br>
<span class="quotelev1">&gt; failed to return a module
</span><br>
<span class="quotelev1">&gt; [merulo:32531] mca:base:select:(  ess) Querying component [hnp]
</span><br>
<span class="quotelev1">&gt; [merulo:32531] mca:base:select:(  ess) Query of component [hnp] set
</span><br>
<span class="quotelev1">&gt; priority to 100
</span><br>
<span class="quotelev1">&gt; [merulo:32531] mca:base:select:(  ess) Querying component [singleton]
</span><br>
<span class="quotelev1">&gt; [merulo:32531] mca:base:select:(  ess) Skipping component [singleton].
</span><br>
<span class="quotelev1">&gt; Query failed to return a module
</span><br>
<span class="quotelev1">&gt; [merulo:32531] mca:base:select:(  ess) Querying component [slave]
</span><br>
<span class="quotelev1">&gt; [merulo:32531] mca:base:select:(  ess) Query of component [slave] set
</span><br>
<span class="quotelev1">&gt; priority to 0
</span><br>
<span class="quotelev1">&gt; [merulo:32531] mca:base:select:(  ess) Querying component [slurm]
</span><br>
<span class="quotelev1">&gt; [merulo:32531] mca:base:select:(  ess) Skipping component [slurm]. Query
</span><br>
<span class="quotelev1">&gt; failed to return a module
</span><br>
<span class="quotelev1">&gt; [merulo:32531] mca:base:select:(  ess) Querying component [slurmd]
</span><br>
<span class="quotelev1">&gt; [merulo:32531] mca:base:select:(  ess) Skipping component [slurmd].
</span><br>
<span class="quotelev1">&gt; Query failed to return a module
</span><br>
<span class="quotelev1">&gt; [merulo:32531] mca:base:select:(  ess) Querying component [tm]
</span><br>
<span class="quotelev1">&gt; [merulo:32531] mca:base:select:(  ess) Skipping component [tm]. Query
</span><br>
<span class="quotelev1">&gt; failed to return a module
</span><br>
<span class="quotelev1">&gt; [merulo:32531] mca:base:select:(  ess) Querying component [tool]
</span><br>
<span class="quotelev1">&gt; [merulo:32531] mca:base:select:(  ess) Skipping component [tool]. Query
</span><br>
<span class="quotelev1">&gt; failed to return a module
</span><br>
<span class="quotelev1">&gt; [merulo:32531] mca:base:select:(  ess) Selected component [hnp]
</span><br>
<span class="quotelev1">&gt; [merulo:32531] mca:base:select:(  plm) Querying component [rsh]
</span><br>
<span class="quotelev1">&gt; [merulo:32531] [[INVALID],INVALID] plm:base:rsh_lookup on agent ssh :
</span><br>
<span class="quotelev1">&gt; rsh path NULL
</span><br>
<span class="quotelev1">&gt; [merulo:32531] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [merulo:32531] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [merulo:32531] Signal code: Invalid permissions (2)
</span><br>
<span class="quotelev1">&gt; [merulo:32531] Failing at address: (nil)
</span><br>
<span class="quotelev1">&gt; [merulo:32531] [ 0]
</span><br>
<span class="quotelev1">&gt; linux-gate.so.1(__kernel_sigtramp+0x7fffffffff886860) [0xa000000000040800]
</span><br>
<span class="quotelev1">&gt; [merulo:32531] [ 1]
</span><br>
<span class="quotelev1">&gt; /home/sylvestre/bogus2/lib/openmpi/mca_plm_rsh.so(orte_plm_rsh_component_query+0xae3c0)
</span><br>
<span class="quotelev1">&gt; [0x2000000000867f40]
</span><br>
<span class="quotelev1">&gt; [merulo:32531] [ 2]
</span><br>
<span class="quotelev1">&gt; /home/sylvestre/bogus2/lib/libopen-rte.so.4(mca_base_select-0x5dc110)
</span><br>
<span class="quotelev1">&gt; [0x20000000001ddea0]
</span><br>
<span class="quotelev1">&gt; [merulo:32531] [ 3]
</span><br>
<span class="quotelev1">&gt; /home/sylvestre/bogus2/lib/libopen-rte.so.4(orte_plm_base_select-0x680cd0)
</span><br>
<span class="quotelev1">&gt; [0x20000000001392f0]
</span><br>
<span class="quotelev1">&gt; [merulo:32531] [ 4]
</span><br>
<span class="quotelev1">&gt; /home/sylvestre/bogus2/lib/openmpi/mca_ess_hnp.so(+0x56f0)
</span><br>
<span class="quotelev1">&gt; [0x20000000008316f0]
</span><br>
<span class="quotelev1">&gt; [merulo:32531] [ 5]
</span><br>
<span class="quotelev1">&gt; /home/sylvestre/bogus2/lib/libopen-rte.so.4(orte_init-0x72bf10)
</span><br>
<span class="quotelev1">&gt; [0x200000000008e0c0]
</span><br>
<span class="quotelev1">&gt; [merulo:32531] [ 6] ./mpirun(orterun+0x1fffffffff84cc80)
</span><br>
<span class="quotelev1">&gt; [0x4000000000006c60]
</span><br>
<span class="quotelev1">&gt; [merulo:32531] [ 7] ./mpirun(main+0x1fffffffff84b880) [0x40000000000045e0]
</span><br>
<span class="quotelev1">&gt; [merulo:32531] [ 8]
</span><br>
<span class="quotelev1">&gt; /lib/ia64-linux-gnu/libc.so.6.1(__libc_start_main-0x2fcd50)
</span><br>
<span class="quotelev1">&gt; [0x20000000004bd2a0]
</span><br>
<span class="quotelev1">&gt; [merulo:32531] [ 9] ./mpirun(_start+0x1fffffffff84a3c0) [0x40000000000043c0]
</span><br>
<span class="quotelev1">&gt; [merulo:32531] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; Segmentation fault
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And the backtrace:
</span><br>
<span class="quotelev1">&gt; Program received signal SIGSEGV, Segmentation fault.
</span><br>
<span class="quotelev1">&gt; 0x2000000000867f40 in orte_plm_rsh_component_query
</span><br>
<span class="quotelev1">&gt; (module=0x60000fffffffb0d8,
</span><br>
<span class="quotelev1">&gt;    priority=0x60000fffffffb0d0) at plm_rsh_component.c:205
</span><br>
<span class="quotelev1">&gt; 205            OPAL_OUTPUT_VERBOSE((1, orte_plm_globals.output,
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0x2000000000867f40 in orte_plm_rsh_component_query
</span><br>
<span class="quotelev1">&gt; (module=0x60000fffffffb0d8,
</span><br>
<span class="quotelev1">&gt;    priority=0x60000fffffffb0d0) at plm_rsh_component.c:205
</span><br>
<span class="quotelev1">&gt; #1  0x20000000001ddea0 in mca_base_select (type_name=0x200000000026e708
</span><br>
<span class="quotelev1">&gt; &quot;plm&quot;, output_id=8,
</span><br>
<span class="quotelev1">&gt;    components_available=0x20000000002c5f08 &lt;orte_plm_base&gt;,
</span><br>
<span class="quotelev1">&gt; best_module=0x60000fffffffb0e0,
</span><br>
<span class="quotelev1">&gt;    best_component=0x60000fffffffb0e8) at mca_base_components_select.c:76
</span><br>
<span class="quotelev1">&gt; #2  0x20000000001392f0 in orte_plm_base_select () at
</span><br>
<span class="quotelev1">&gt; base/plm_base_select.c:46
</span><br>
<span class="quotelev1">&gt; #3  0x20000000008316f0 in rte_init () at ess_hnp_module.c:169
</span><br>
<span class="quotelev1">&gt; #4  0x200000000008e0c0 in orte_init (pargc=0x60000fffffffb360,
</span><br>
<span class="quotelev1">&gt; pargv=0x60000fffffffb368, flags=4)
</span><br>
<span class="quotelev1">&gt;    at runtime/orte_init.c:127
</span><br>
<span class="quotelev1">&gt; #5  0x4000000000006c60 in orterun (argc=16, argv=0x60000fffffffb618) at
</span><br>
<span class="quotelev1">&gt; orterun.c:693
</span><br>
<span class="quotelev1">&gt; #6  0x40000000000045e0 in main (argc=16, argv=0x60000fffffffb618) at
</span><br>
<span class="quotelev1">&gt; main.c:13
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sylvestre
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13288/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13289.php">Sylvestre Ledru: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<li><strong>Previous message:</strong> <a href="13287.php">Sylvestre Ledru: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<li><strong>In reply to:</strong> <a href="13287.php">Sylvestre Ledru: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13289.php">Sylvestre Ledru: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<li><strong>Reply:</strong> <a href="13289.php">Sylvestre Ledru: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
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
