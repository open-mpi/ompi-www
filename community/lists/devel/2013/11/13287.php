<?
$subject_val = "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 15 10:24:33 2013" -->
<!-- isoreceived="20131115152433" -->
<!-- sent="Fri, 15 Nov 2013 16:24:29 +0100" -->
<!-- isosent="20131115152429" -->
<!-- name="Sylvestre Ledru" -->
<!-- email="sylvestre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64" -->
<!-- id="52863CAD.8060900_at_debian.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F9170BD_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Date:</strong> 2013-11-15 10:24:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13288.php">Ralph Castain: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<li><strong>Previous message:</strong> <a href="13286.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/10/13040.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13288.php">Ralph Castain: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<li><strong>Reply:</strong> <a href="13288.php">Ralph Castain: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>On 02/10/2013 19:34, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; On Sep 30, 2013, at 11:05 AM, Sylvestre Ledru &lt;sylvestre_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here are the options list:
</span><br>
<span class="quotelev2">&gt;&gt; configure: running /bin/bash './configure'  CFLAGS=&quot;-DNDEBUG -g -O2
</span><br>
<span class="quotelev2">&gt;&gt; -Wformat -Werror=format-security -finline-functions -fno-strict-aliasing
</span><br>
<span class="quotelev2">&gt;&gt; -pthread&quot; CPPFLAGS=&quot; -I/usr//include   -I/usr/include/infiniband
</span><br>
<span class="quotelev2">&gt;&gt; -I/usr/include/infiniband&quot; FFLAGS=&quot;-g -O2&quot; LDFLAGS=&quot;  -L/usr//lib&quot;
</span><br>
<span class="quotelev2">&gt;&gt; --enable-shared --disable-static  --prefix=/usr --with-mpi=open_mpi
</span><br>
<span class="quotelev2">&gt;&gt; --disable-aio --cache-file=/dev/null --srcdir=. --disable-option-checking
</span><br>
<span class="quotelev1">&gt; Hmm -- I'm confused here; it's not possible that you're getting an assertion failure with this configure line, for two reasons:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. The assert() in question will only be compiled in if you --enable-debug on the configure command line.
</span><br>
<span class="quotelev1">&gt; 2. You supplied -DNDEBUG in CFLAGS, which means you've disabled all assert()s
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you verify that this is the correct configure line that you used to generate that error?  Or is something else going on?
</span><br>
<span class="quotelev1">&gt;
</span><br>
So, I tried with the arguments you sent me in private.
<br>
&nbsp;$ ./configure --prefix=/home/sylvestre/bogus2 --disable-maintainer-mode
<br>
--disable-dependency-tracking --with-threads=posix
<br>
--enable-opal-multi-threads --disable-silent-rules --enable-debug
<br>
--with-devel-headers --with-slurm --with-sge --enable-heterogeneous
<br>
--disable-vt --enable-mpirun-prefix-by-default --enable-mpi-f77
<br>
--enable-mpi-f90 --enable-ltdl-convenience
<br>
<p>I am getting something more interesting than a freeze (even if it does
<br>
not mean much to me):
<br>
./mpirun -mca plm_base_verbose 5 -mca ras_base_verbose 5 -mca
<br>
rmaps_base_verbose 5 -mca ess_base_verbose  5 -c 4 foo
<br>
[merulo:32531] mca:base:select:(  ess) Querying component [env]
<br>
[merulo:32531] mca:base:select:(  ess) Skipping component [env]. Query
<br>
failed to return a module
<br>
[merulo:32531] mca:base:select:(  ess) Querying component [hnp]
<br>
[merulo:32531] mca:base:select:(  ess) Query of component [hnp] set
<br>
priority to 100
<br>
[merulo:32531] mca:base:select:(  ess) Querying component [singleton]
<br>
[merulo:32531] mca:base:select:(  ess) Skipping component [singleton].
<br>
Query failed to return a module
<br>
[merulo:32531] mca:base:select:(  ess) Querying component [slave]
<br>
[merulo:32531] mca:base:select:(  ess) Query of component [slave] set
<br>
priority to 0
<br>
[merulo:32531] mca:base:select:(  ess) Querying component [slurm]
<br>
[merulo:32531] mca:base:select:(  ess) Skipping component [slurm]. Query
<br>
failed to return a module
<br>
[merulo:32531] mca:base:select:(  ess) Querying component [slurmd]
<br>
[merulo:32531] mca:base:select:(  ess) Skipping component [slurmd].
<br>
Query failed to return a module
<br>
[merulo:32531] mca:base:select:(  ess) Querying component [tm]
<br>
[merulo:32531] mca:base:select:(  ess) Skipping component [tm]. Query
<br>
failed to return a module
<br>
[merulo:32531] mca:base:select:(  ess) Querying component [tool]
<br>
[merulo:32531] mca:base:select:(  ess) Skipping component [tool]. Query
<br>
failed to return a module
<br>
[merulo:32531] mca:base:select:(  ess) Selected component [hnp]
<br>
[merulo:32531] mca:base:select:(  plm) Querying component [rsh]
<br>
[merulo:32531] [[INVALID],INVALID] plm:base:rsh_lookup on agent ssh :
<br>
rsh path NULL
<br>
[merulo:32531] *** Process received signal ***
<br>
[merulo:32531] Signal: Segmentation fault (11)
<br>
[merulo:32531] Signal code: Invalid permissions (2)
<br>
[merulo:32531] Failing at address: (nil)
<br>
[merulo:32531] [ 0]
<br>
linux-gate.so.1(__kernel_sigtramp+0x7fffffffff886860) [0xa000000000040800]
<br>
[merulo:32531] [ 1]
<br>
/home/sylvestre/bogus2/lib/openmpi/mca_plm_rsh.so(orte_plm_rsh_component_query+0xae3c0)
<br>
[0x2000000000867f40]
<br>
[merulo:32531] [ 2]
<br>
/home/sylvestre/bogus2/lib/libopen-rte.so.4(mca_base_select-0x5dc110)
<br>
[0x20000000001ddea0]
<br>
[merulo:32531] [ 3]
<br>
/home/sylvestre/bogus2/lib/libopen-rte.so.4(orte_plm_base_select-0x680cd0)
<br>
[0x20000000001392f0]
<br>
[merulo:32531] [ 4]
<br>
/home/sylvestre/bogus2/lib/openmpi/mca_ess_hnp.so(+0x56f0)
<br>
[0x20000000008316f0]
<br>
[merulo:32531] [ 5]
<br>
/home/sylvestre/bogus2/lib/libopen-rte.so.4(orte_init-0x72bf10)
<br>
[0x200000000008e0c0]
<br>
[merulo:32531] [ 6] ./mpirun(orterun+0x1fffffffff84cc80)
<br>
[0x4000000000006c60]
<br>
[merulo:32531] [ 7] ./mpirun(main+0x1fffffffff84b880) [0x40000000000045e0]
<br>
[merulo:32531] [ 8]
<br>
/lib/ia64-linux-gnu/libc.so.6.1(__libc_start_main-0x2fcd50)
<br>
[0x20000000004bd2a0]
<br>
[merulo:32531] [ 9] ./mpirun(_start+0x1fffffffff84a3c0) [0x40000000000043c0]
<br>
[merulo:32531] *** End of error message ***
<br>
Segmentation fault
<br>
<p>And the backtrace:
<br>
Program received signal SIGSEGV, Segmentation fault.
<br>
0x2000000000867f40 in orte_plm_rsh_component_query
<br>
(module=0x60000fffffffb0d8,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;priority=0x60000fffffffb0d0) at plm_rsh_component.c:205
<br>
205            OPAL_OUTPUT_VERBOSE((1, orte_plm_globals.output,
<br>
(gdb) bt
<br>
#0  0x2000000000867f40 in orte_plm_rsh_component_query
<br>
(module=0x60000fffffffb0d8,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;priority=0x60000fffffffb0d0) at plm_rsh_component.c:205
<br>
#1  0x20000000001ddea0 in mca_base_select (type_name=0x200000000026e708
<br>
&quot;plm&quot;, output_id=8,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;components_available=0x20000000002c5f08 &lt;orte_plm_base&gt;,
<br>
best_module=0x60000fffffffb0e0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;best_component=0x60000fffffffb0e8) at mca_base_components_select.c:76
<br>
#2  0x20000000001392f0 in orte_plm_base_select () at
<br>
base/plm_base_select.c:46
<br>
#3  0x20000000008316f0 in rte_init () at ess_hnp_module.c:169
<br>
#4  0x200000000008e0c0 in orte_init (pargc=0x60000fffffffb360,
<br>
pargv=0x60000fffffffb368, flags=4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at runtime/orte_init.c:127
<br>
#5  0x4000000000006c60 in orterun (argc=16, argv=0x60000fffffffb618) at
<br>
orterun.c:693
<br>
#6  0x40000000000045e0 in main (argc=16, argv=0x60000fffffffb618) at
<br>
main.c:13
<br>
<p><p>Sylvestre
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13288.php">Ralph Castain: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<li><strong>Previous message:</strong> <a href="13286.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/10/13040.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13288.php">Ralph Castain: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<li><strong>Reply:</strong> <a href="13288.php">Ralph Castain: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
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
