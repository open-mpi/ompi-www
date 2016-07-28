<?
$subject_val = "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 25 13:08:41 2013" -->
<!-- isoreceived="20130925170841" -->
<!-- sent="Wed, 25 Sep 2013 10:08:38 -0700" -->
<!-- isosent="20130925170838" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64" -->
<!-- id="D07E7849-F8EA-48BD-9A5D-9F731E7F7A1B_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="524301B1.8040509_at_debian.org" -->
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
<strong>Date:</strong> 2013-09-25 13:08:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12991.php">Barrett, Brian W: "[OMPI devel] OpenSHMEM failures"</a>
<li><strong>Previous message:</strong> <a href="12989.php">Ralph Castain: "Re: [OMPI devel] Intercomm Merge"</a>
<li><strong>In reply to:</strong> <a href="12988.php">Sylvestre Ledru: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13014.php">Sylvestre Ledru: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<li><strong>Reply:</strong> <a href="13014.php">Sylvestre Ledru: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Wow - that is hard to understand as that code path hasn't changed in quite some time. Could you please do two things for us?
<br>
<p>1. tell us how you are configuring OMPI
<br>
<p>2. try the 1.7 branch using that same configuration
<br>
<p>The 1.6 series is reaching its planned end-of-life, so we are trying to decide how important it is to chase this down - i.e., if you see the same problem on Debian with 1.7, then this becomes far more important.
<br>
<p>Thanks
<br>
Ralph
<br>
<p>On Sep 25, 2013, at 8:30 AM, Sylvestre Ledru &lt;sylvestre_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; With the --enable-debug, I am getting:
</span><br>
<span class="quotelev1">&gt; openmpi-1.6.5/debian/tmp/usr/bin/mpirun.openmpi -mca plm_base_verbose 5
</span><br>
<span class="quotelev1">&gt; -mca ras_base_verbose 5 -mca rmaps_base_verbose 5 -mca ess_base_verbose
</span><br>
<span class="quotelev1">&gt; 5 -c 4 foo
</span><br>
<span class="quotelev1">&gt; mpirun.openmpi: orterun.c:636: orterun: Assertion `((0xdeafbeedULL &lt;&lt;
</span><br>
<span class="quotelev1">&gt; 32) + 0xdeafbeedULL) == ((opal_object_t *) (&amp;cmd_line))-&gt;obj_magic_id'
</span><br>
<span class="quotelev1">&gt; failed.
</span><br>
<span class="quotelev1">&gt; [merulo:16918] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [merulo:16918] Signal: Aborted (6)
</span><br>
<span class="quotelev1">&gt; [merulo:16918] Signal code:  (-6)
</span><br>
<span class="quotelev1">&gt; [merulo:16918] [ 0]
</span><br>
<span class="quotelev1">&gt; linux-gate.so.1(__kernel_sigtramp+0x7fffffffff88f740) [0xa000000000040800]
</span><br>
<span class="quotelev1">&gt; [merulo:16918] [ 1]
</span><br>
<span class="quotelev1">&gt; linux-gate.so.1(__kernel_syscall_via_break+0x7fffffffff88f651)
</span><br>
<span class="quotelev1">&gt; [0xa000000000040721]
</span><br>
<span class="quotelev1">&gt; [merulo:16918] [ 2] /lib/ia64-linux-gnu/libc.so.6.1(gsignal-0x3112f0)
</span><br>
<span class="quotelev1">&gt; [0x200000000049fdf0]
</span><br>
<span class="quotelev1">&gt; [merulo:16918] [ 3] /lib/ia64-linux-gnu/libc.so.6.1(abort-0x309710)
</span><br>
<span class="quotelev1">&gt; [0x20000000004a79e0]
</span><br>
<span class="quotelev1">&gt; [merulo:16918] [ 4] /lib/ia64-linux-gnu/libc.so.6.1(+0x464b0)
</span><br>
<span class="quotelev1">&gt; [0x200000000048e4b0]
</span><br>
<span class="quotelev1">&gt; [merulo:16918] [ 5]
</span><br>
<span class="quotelev1">&gt; /lib/ia64-linux-gnu/libc.so.6.1(__assert_fail-0x322a50) [0x200000000048e6b0]
</span><br>
<span class="quotelev1">&gt; [merulo:16918] [ 6] openmpi-1.6.5/debian/tmp/usr/bin/mpirun.openmpi()
</span><br>
<span class="quotelev1">&gt; [0x40000000000063d0]
</span><br>
<span class="quotelev1">&gt; [merulo:16918] [ 7] openmpi-1.6.5/debian/tmp/usr/bin/mpirun.openmpi()
</span><br>
<span class="quotelev1">&gt; [0x4000000000004120]
</span><br>
<span class="quotelev1">&gt; [merulo:16918] [ 8]
</span><br>
<span class="quotelev1">&gt; /lib/ia64-linux-gnu/libc.so.6.1(__libc_start_main-0x33fe70)
</span><br>
<span class="quotelev1">&gt; [0x20000000004712a0]
</span><br>
<span class="quotelev1">&gt; [merulo:16918] [ 9] openmpi-1.6.5/debian/tmp/usr/bin/mpirun.openmpi()
</span><br>
<span class="quotelev1">&gt; [0x4000000000003f00]
</span><br>
<span class="quotelev1">&gt; [merulo:16918] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; Aborted
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 20/09/2013 23:58, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Occurs to me - I bet you didn't configure this with --enable-debug, did you? If not, please reconfigure it and rerun so we can see the debug output
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 20, 2013, at 2:54 PM, Sylvestre Ledru &lt;sylvestre_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 20/09/2013 23:46, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; That's it?? Wow, that was useless.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Isn't it ? ;) It is why I asked for your help...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Can you attach to mpirun with gdb and tell me where it is sitting?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It is about as useful at the previous command:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://paste.debian.net/43882/">http://paste.debian.net/43882/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Built with:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ mpicc foo.c -g -o foo -O0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sylvestre
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev2">&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="12991.php">Barrett, Brian W: "[OMPI devel] OpenSHMEM failures"</a>
<li><strong>Previous message:</strong> <a href="12989.php">Ralph Castain: "Re: [OMPI devel] Intercomm Merge"</a>
<li><strong>In reply to:</strong> <a href="12988.php">Sylvestre Ledru: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13014.php">Sylvestre Ledru: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<li><strong>Reply:</strong> <a href="13014.php">Sylvestre Ledru: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
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
