<?
$subject_val = "Re: [OMPI devel] v1.10.1rc1 released";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct  3 19:47:14 2015" -->
<!-- isoreceived="20151003234714" -->
<!-- sent="Sat, 3 Oct 2015 16:47:05 -0700" -->
<!-- isosent="20151003234705" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.10.1rc1 released" -->
<!-- id="CAAvDA169uvZKAUiWCDQTWj13pejNE3W=Gm6Yf7gD-UN7r6r6qw_at_mail.gmail.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="50572236-386E-4D8D-82AD-3A1A54713260_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] v1.10.1rc1 released<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-03 19:47:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18136.php">Paul Hargrove: "Re: [OMPI devel] v1.10.1rc1 released"</a>
<li><strong>Previous message:</strong> <a href="18134.php">Ralph Castain: "Re: [OMPI devel] v1.10.1rc1 released"</a>
<li><strong>In reply to:</strong> <a href="18134.php">Ralph Castain: "Re: [OMPI devel] v1.10.1rc1 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18136.php">Paul Hargrove: "Re: [OMPI devel] v1.10.1rc1 released"</a>
<li><strong>Reply:</strong> <a href="18136.php">Paul Hargrove: "Re: [OMPI devel] v1.10.1rc1 released"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>It doesn't look to me like there is a lack of a dl component.
<br>
It looks to me like libinfinipath is doing something bad when dl_open()ed
<br>
by mtl_ofi.
<br>
Regardless, the requested verbose output is attached.
<br>
<p>As for cores, I cannot get any because somebody is catching SIGABRT.
<br>
What I do see is files like
<br>
&nbsp;&nbsp;&nbsp;ring_c.80s-19092,sl7x.localdomain.btr
<br>
which contain the same backtrace as in the attachment.
<br>
<p>So, I tried &quot;mpirun -mca btl sm,self -np 1 gdb examples/ring_c&quot; and was
<br>
able to get the backtrace given below.
<br>
<p>It is worth noting that this is apparently *not* a regression.
<br>
I find that I get the same error with the released 1.10.0 built just now.
<br>
I know that I did *NOT* see this problem with my original testing of
<br>
1.10.0rc7 (still have the build and its logs)
<br>
However, trying today to run ring_c from my 1.10.0rc7 build fails in the
<br>
same manner.
<br>
So, something has changed on this system since my last testing there.
<br>
<p>Thanks to /var/log/yum.log I can tell you exactly the 143 changes since I
<br>
tested 1.10.0rc7 if you care.
<br>
The main change appears to be a switch from a MOFED-based install to the
<br>
OFED packaged with RHEL7.
<br>
So, I am currently willing to bet that I've got a broken MOFED/OFED hybrid
<br>
installation.
<br>
If that is the case (and I am looking into it now) then this is NOT an Open
<br>
MPI problem.
<br>
I will try to let you know what I discover.
<br>
<p>-Paul
<br>
<p><p>ring_c: route/tc.c:973: rtnl_tc_register: Assertion `0' failed.
<br>
<p>Program received signal SIGABRT, Aborted.
<br>
0x00007ffff74905e9 in __GI_raise (sig=sig_at_entry=6)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../nptl/sysdeps/unix/sysv/linux/raise.c:56
<br>
56        return INLINE_SYSCALL (tgkill, 3, pid, selftid, sig);
<br>
(gdb) where
<br>
#0  0x00007ffff74905e9 in __GI_raise (sig=sig_at_entry=6)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../nptl/sysdeps/unix/sysv/linux/raise.c:56
<br>
#1  0x00007ffff7491cf8 in __GI_abort () at abort.c:90
<br>
#2  0x00007ffff7489556 in __assert_fail_base (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;fmt=0x7ffff75d9168 &quot;%s%s%s:%u: %s%sAssertion `%s' failed.\n%n&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;assertion=assertion_at_entry=0x7ffff16d3230 &quot;0&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;file=file_at_entry=0x7ffff16d2a50 &quot;route/tc.c&quot;, line=line_at_entry=973,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;function=function_at_entry=0x7ffff16d2b90 &lt;__PRETTY_FUNCTION__.13204&gt;
<br>
&quot;rtnl_tc_register&quot;) at assert.c:92
<br>
#3  0x00007ffff7489602 in __GI___assert_fail (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;assertion=assertion_at_entry=0x7ffff16d3230 &quot;0&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;file=file_at_entry=0x7ffff16d2a50 &quot;route/tc.c&quot;, line=line_at_entry=973,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;function=function_at_entry=0x7ffff16d2b90 &lt;__PRETTY_FUNCTION__.13204&gt;
<br>
&quot;rtnl_tc_register&quot;) at assert.c:101
<br>
#4  0x00007ffff16be3d9 in rtnl_tc_register (ops=0x7ffff18e86c0
<br>
&lt;blackhole_ops&gt;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at route/tc.c:973
<br>
#5  0x00007ffff7dea503 in call_init (env=0x7fffffffdc58,
<br>
argv=0x7fffffffdc48,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;argc=1, l=&lt;optimized out&gt;) at dl-init.c:82
<br>
#6  _dl_init (main_map=main_map_at_entry=0x6ae5f0, argc=1,
<br>
argv=0x7fffffffdc48,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;env=0x7fffffffdc58) at dl-init.c:131
<br>
#7  0x00007ffff7deeb44 in dl_open_worker (a=a_at_entry=0x7fffffffd168)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at dl-open.c:566
<br>
#8  0x00007ffff7dea314 in _dl_catch_error (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;objname=objname_at_entry=0x7fffffffd158,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;errstring=errstring_at_entry=0x7fffffffd160,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mallocedp=mallocedp_at_entry=0x7fffffffd150,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;operate=operate_at_entry=0x7ffff7dee7b0 &lt;dl_open_worker&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;args=args_at_entry=0x7fffffffd168) at dl-error.c:177
<br>
#9  0x00007ffff7dee25b in _dl_open (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;file=0x6ae520
<br>
&quot;/home/phargrov/OMPI/openmpi-1.10.1rc1-linux-x86_64-sl7x/INST/lib/openmpi/mca_mtl_ofi.so&quot;,
<br>
mode=-2147483391, caller_dlopen=&lt;optimized out&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;nsid=-2, argc=1, argv=0x7fffffffdc48, env=0x7fffffffdc58) at
<br>
dl-open.c:656
<br>
#10 0x00007ffff6c7402b in dlopen_doit (a=a_at_entry=0x7fffffffd370) at
<br>
dlopen.c:66
<br>
#11 0x00007ffff7dea314 in _dl_catch_error (objname=0x641600,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;errstring=0x641608, mallocedp=0x6415f8,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;operate=0x7ffff6c73fd0 &lt;dlopen_doit&gt;, args=0x7fffffffd370)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at dl-error.c:177
<br>
#12 0x00007ffff6c7462d in _dlerror_run (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;operate=operate_at_entry=0x7ffff6c73fd0 &lt;dlopen_doit&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;args=args_at_entry=0x7fffffffd370) at dlerror.c:163
<br>
#13 0x00007ffff6c740c1 in __dlopen (file=&lt;optimized out&gt;, mode=&lt;optimized
<br>
out&gt;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at dlopen.c:87
<br>
#14 0x00007ffff6ef8ec4 in do_dlopen (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;fname=0x6ae520
<br>
&quot;/home/phargrov/OMPI/openmpi-1.10.1rc1-linux-x86_64-sl7x/INST/lib/openmpi/mca_mtl_ofi.so&quot;,
<br>
flags=257, handle=0x7fffffffd488,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;err_msg=0x7fffffffd538)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/home/phargrov/OMPI/openmpi-1.10.1rc1-linux-x86_64-sl7x/openmpi-1.10.1rc1/opal/mca/dl/dlopen/dl_dlopen_module.c:38
<br>
#15 0x00007ffff6ef909c in dlopen_open (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;fname=0x6ac0ba
<br>
&quot;/home/phargrov/OMPI/openmpi-1.10.1rc1-linux-x86_64-sl7x/INST/lib/openmpi/mca_mtl_ofi&quot;,
<br>
use_ext=true, private_namespace=false,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;handle=0x7fffffffd5c8, err_msg=0x7fffffffd538)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/home/phargrov/OMPI/openmpi-1.10.1rc1-linux-x86_64-sl7x/openmpi-1.10.1rc1/opal/mca/dl/dlopen/dl_dlopen_module.c:95
<br>
#16 0x00007ffff6ef8bfa in opal_dl_open (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;fname=0x6ac0ba
<br>
&quot;/home/phargrov/OMPI/openmpi-1.10.1rc1-linux-x86_64-sl7x/INST/lib/openmpi/mca_mtl_ofi&quot;,
<br>
use_ext=true, private_namespace=false,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;handle=0x7fffffffd5c8, err_msg=0x7fffffffd538)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/home/phargrov/OMPI/openmpi-1.10.1rc1-linux-x86_64-sl7x/openmpi-1.10.1rc1/opal/mca/dl/base/dl_base_fns.c:32
<br>
#17 0x00007ffff6ed0265 in open_component (target_file=0x6ab010,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;found_components=0x7fffffffd7a0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/home/phargrov/OMPI/openmpi-1.10.1rc1-linux-x86_64-sl7x/openmpi-1.10.1rc1/opal/mca/base/mca_base_component_find.c:558
<br>
#18 0x00007ffff6ecfd45 in find_dyn_components (path=0x0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;type_name=0x7ffff7b891e0 &quot;mtl&quot;, names=0x0, include_mode=true,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;found_components=0x7fffffffd7a0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/home/phargrov/OMPI/openmpi-1.10.1rc1-linux-x86_64-sl7x/openmpi-1.10.1rc1/opal/mca/base/mca_base_component_find.c:446
<br>
#19 0x00007ffff6ecf444 in mca_base_component_find (directory=0x0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;type=0x7ffff7b891e0 &quot;mtl&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;static_components=0x7ffff7dc73a8 &lt;mca_mtl_base_static_components&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;requested_components=0x0, found_components=0x7fffffffd7a0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;open_dso_components=true)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/home/phargrov/OMPI/openmpi-1.10.1rc1-linux-x86_64-sl7x/openmpi-1.10.1rc1/opal/mca/base/mca_base_component_find.c:190
<br>
#20 0x00007ffff6ee157a in mca_base_framework_components_register (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;framework=0x7ffff7dc2560 &lt;ompi_mtl_base_framework&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;flags=MCA_BASE_REGISTER_DEFAULT)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/home/phargrov/OMPI/openmpi-1.10.1rc1-linux-x86_64-sl7x/openmpi-1.10.1rc1/opal/mca/base/mca_base_components_register.c:57
<br>
#21 0x00007ffff6ee1edd in mca_base_framework_register (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;framework=0x7ffff7dc2560 &lt;ompi_mtl_base_framework&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;flags=MCA_BASE_REGISTER_DEFAULT)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/home/phargrov/OMPI/openmpi-1.10.1rc1-linux-x86_64-sl7x/openmpi-1.10.1rc1/opal/mca/base/mca_base_framework.c:115
<br>
#22 0x00007ffff6ee1f4b in mca_base_framework_open (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;framework=0x7ffff7dc2560 &lt;ompi_mtl_base_framework&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;flags=MCA_BASE_OPEN_DEFAULT)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/home/phargrov/OMPI/openmpi-1.10.1rc1-linux-x86_64-sl7x/openmpi-1.10.1rc1/opal/mca/base/mca_base_framework.c:134
<br>
#23 0x00007ffff30cabf5 in mca_pml_cm_component_open ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/home/phargrov/OMPI/openmpi-1.10.1rc1-linux-x86_64-sl7x/openmpi-1.10.1rc1/ompi/mca/pml/cm/pml_cm_component.c:120
<br>
#24 0x00007ffff6ed2e58 in open_components (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;framework=0x7ffff7dc4e60 &lt;ompi_pml_base_framework&gt;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/home/phargrov/OMPI/openmpi-1.10.1rc1-linux-x86_64-sl7x/openmpi-1.10.1rc1/opal/mca/base/mca_base_components_open.c:173
<br>
#25 0x00007ffff6ed2b4b in mca_base_framework_components_open (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;framework=0x7ffff7dc4e60 &lt;ompi_pml_base_framework&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;flags=MCA_BASE_OPEN_DEFAULT)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/home/phargrov/OMPI/openmpi-1.10.1rc1-linux-x86_64-sl7x/openmpi-1.10.1rc1/opal/mca/base/mca_base_components_open.c:66
<br>
#26 0x00007ffff7b3efa7 in mca_pml_base_open (flags=MCA_BASE_OPEN_DEFAULT)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/home/phargrov/OMPI/openmpi-1.10.1rc1-linux-x86_64-sl7x/openmpi-1.10.1rc1/ompi/mca/pml/base/pml_base_frame.c:187
<br>
#27 0x00007ffff6ee1fe6 in mca_base_framework_open (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;framework=0x7ffff7dc4e60 &lt;ompi_pml_base_framework&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;flags=MCA_BASE_OPEN_DEFAULT)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/home/phargrov/OMPI/openmpi-1.10.1rc1-linux-x86_64-sl7x/openmpi-1.10.1rc1/opal/mca/base/mca_base_framework.c:158
<br>
#28 0x00007ffff7a90755 in ompi_mpi_init (argc=1, argv=0x7fffffffdc48,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;requested=0, provided=0x7fffffffdafc)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/home/phargrov/OMPI/openmpi-1.10.1rc1-linux-x86_64-sl7x/openmpi-1.10.1rc1/ompi/runtime/ompi_mpi_init.c:578
<br>
#29 0x00007ffff7ad00b6 in PMPI_Init (argc=0x7fffffffdb3c,
<br>
argv=0x7fffffffdb30)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at pinit.c:84
<br>
#30 0x0000000000400969 in main (argc=1, argv=0x7fffffffdc48) at ring_c.c:19
<br>
<p><p><p>I
<br>
<p>On Sat, Oct 3, 2015 at 4:07 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At a glance, it looks to me like no opal_dl component was selected. Any
</span><br>
<span class="quotelev1">&gt; chance you could add -mca dl_base_verbose 100 and get a line number for us
</span><br>
<span class="quotelev1">&gt; from one of those core files?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 3, 2015, at 10:41 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sat, Oct 3, 2015 at 3:13 AM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; v1.10.1 is primarily a bug-fix release.  rc1 has been released; it's in
</span><br>
<span class="quotelev2">&gt;&gt; the usual place:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/software/ompi/v1.10/">http://www.open-mpi.org/software/ompi/v1.10/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Please test!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My tests experienced a failure (SEGV) on a fairly vanilla Linux VM running
</span><br>
<span class="quotelev1">&gt; Scientific Linux 7 (RHEL7 clone).
</span><br>
<span class="quotelev1">&gt; See attached output.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
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
<span class="quotelev1">&gt; &lt;ring_c.txt&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18131.php">http://www.open-mpi.org/community/lists/devel/2015/10/18131.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18134.php">http://www.open-mpi.org/community/lists/devel/2015/10/18134.php</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18135/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18135/log.txt">log.txt</a>
</ul>
<!-- attachment="log.txt" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18136.php">Paul Hargrove: "Re: [OMPI devel] v1.10.1rc1 released"</a>
<li><strong>Previous message:</strong> <a href="18134.php">Ralph Castain: "Re: [OMPI devel] v1.10.1rc1 released"</a>
<li><strong>In reply to:</strong> <a href="18134.php">Ralph Castain: "Re: [OMPI devel] v1.10.1rc1 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18136.php">Paul Hargrove: "Re: [OMPI devel] v1.10.1rc1 released"</a>
<li><strong>Reply:</strong> <a href="18136.php">Paul Hargrove: "Re: [OMPI devel] v1.10.1rc1 released"</a>
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
