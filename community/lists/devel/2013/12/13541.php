<?
$subject_val = "Re: [OMPI devel] 1.7.4rc2r30031 - FreeBSD-9 mpirun hangs";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 20 18:31:33 2013" -->
<!-- isoreceived="20131220233133" -->
<!-- sent="Fri, 20 Dec 2013 15:30:59 -0800" -->
<!-- isosent="20131220233059" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.4rc2r30031 - FreeBSD-9 mpirun hangs" -->
<!-- id="CAAvDA17vwH0Dy6RnP3LZY534Obu9QC24KF=YtHKCU4QvpbqPKw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI devel] 1.7.4rc2r30031 - FreeBSD-9 mpirun hangs" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.7.4rc2r30031 - FreeBSD-9 mpirun hangs<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-20 18:30:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13542.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30031 - FreeBSD-9 mpirun hangs"</a>
<li><strong>Previous message:</strong> <a href="13540.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30031 - FreeBSD mpirun warning"</a>
<li><strong>Maybe in reply to:</strong> <a href="13537.php">Paul Hargrove: "[OMPI devel] 1.7.4rc2r30031 - FreeBSD-9 mpirun hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13542.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30031 - FreeBSD-9 mpirun hangs"</a>
<li><strong>Reply:</strong> <a href="13542.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30031 - FreeBSD-9 mpirun hangs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
And the FreeBSD backtraces again, this time configured with --enable-debug
<br>
and for all threads:
<br>
<p>The 100%-cpu ring_c process:
<br>
<p>(gdb) thread apply all where
<br>
<p>Thread 2 (Thread 802007400 (LWP 182916/ring_c)):
<br>
#0  0x0000000800de7aac in sched_yield () from /lib/libc.so.7
<br>
#1  0x00000008013c7a5a in opal_progress ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/home/phargrov/OMPI/openmpi-1.7-latest-freebsd9-amd64/openmpi-1.7-latest/opal/runtime/opal_progress.c:199
<br>
#2  0x00000008008670ec in ompi_mpi_init (argc=1, argv=0x7fffffffd3e0,
<br>
requested=0, provided=0x7fffffffd328)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/home/phargrov/OMPI/openmpi-1.7-latest-freebsd9-amd64/openmpi-1.7-latest/ompi/runtime/ompi_mpi_init.c:618
<br>
#3  0x000000080089aefe in PMPI_Init (argc=0x7fffffffd36c,
<br>
argv=0x7fffffffd360) at pinit.c:84
<br>
#4  0x0000000000400963 in main (argc=1, argv=0x7fffffffd3e0) at ring_c.c:19
<br>
<p>Thread 1 (Thread 802007800 (LWP 186415/ring_c)):
<br>
#0  0x0000000800e2711c in poll () from /lib/libc.so.7
<br>
#1  0x0000000800b727fe in poll () from /lib/libthr.so.3
<br>
#2  0x000000080142edc1 in poll_dispatch (base=0x8020cd900, tv=0x0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/home/phargrov/OMPI/openmpi-1.7-latest-freebsd9-amd64/openmpi-1.7-latest/opal/mca/event/libevent2021/libevent/poll.c:165
<br>
#3  0x0000000801422ca1 in opal_libevent2021_event_base_loop
<br>
(base=0x8020cd900, flags=1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/home/phargrov/OMPI/openmpi-1.7-latest-freebsd9-amd64/openmpi-1.7-latest/opal/mca/event/libevent2021/libevent/event.c:1631
<br>
#4  0x00000008010f2c22 in orte_progress_thread_engine (obj=0x80139b160)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/home/phargrov/OMPI/openmpi-1.7-latest-freebsd9-amd64/openmpi-1.7-latest/orte/runtime/orte_init.c:180
<br>
#5  0x0000000800b700a4 in pthread_getprio () from /lib/libthr.so.3
<br>
#6  0x0000000000000000 in ?? ()
<br>
Error accessing memory address 0x7fffffbfe000: Bad address.
<br>
<p><p>The idle ring_c process:
<br>
<p>(gdb) thread apply all where
<br>
<p>Thread 2 (Thread 802007400 (LWP 183983/ring_c)):
<br>
#0  0x0000000800e6c44c in nanosleep () from /lib/libc.so.7
<br>
#1  0x0000000800b729d5 in nanosleep () from /lib/libthr.so.3
<br>
#2  0x0000000801161618 in orte_routed_base_register_sync (setup=true)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/home/phargrov/OMPI/openmpi-1.7-latest-freebsd9-amd64/openmpi-1.7-latest/orte/mca/routed/base/routed_base_fns.c:344
<br>
#3  0x0000000802a0a0a2 in init_routes (job=2628321281, ndat=0x0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/home/phargrov/OMPI/openmpi-1.7-latest-freebsd9-amd64/openmpi-1.7-latest/orte/mca/routed/binomial/routed_binomial.c:705
<br>
#4  0x00000008011272ce in orte_ess_base_app_setup (db_restrict_local=true)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/home/phargrov/OMPI/openmpi-1.7-latest-freebsd9-amd64/openmpi-1.7-latest/orte/mca/ess/base/ess_base_std_app.c:233
<br>
#5  0x0000000802401408 in rte_init ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/home/phargrov/OMPI/openmpi-1.7-latest-freebsd9-amd64/openmpi-1.7-latest/orte/mca/ess/env/ess_env_module.c:146
<br>
#6  0x00000008010f2b28 in orte_init (pargc=0x0, pargv=0x0, flags=32)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/home/phargrov/OMPI/openmpi-1.7-latest-freebsd9-amd64/openmpi-1.7-latest/orte/runtime/orte_init.c:158
<br>
#7  0x0000000800866bde in ompi_mpi_init (argc=1, argv=0x7fffffffd3e0,
<br>
requested=0, provided=0x7fffffffd328)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/home/phargrov/OMPI/openmpi-1.7-latest-freebsd9-amd64/openmpi-1.7-latest/ompi/runtime/ompi_mpi_init.c:451
<br>
#8  0x000000080089aefe in PMPI_Init (argc=0x7fffffffd36c,
<br>
argv=0x7fffffffd360) at pinit.c:84
<br>
#9  0x0000000000400963 in main (argc=1, argv=0x7fffffffd3e0) at ring_c.c:19
<br>
<p>Thread 1 (Thread 802007800 (LWP 186412/ring_c)):
<br>
#0  0x0000000800e2711c in poll () from /lib/libc.so.7
<br>
#1  0x0000000800b727fe in poll () from /lib/libthr.so.3
<br>
#2  0x000000080142edc1 in poll_dispatch (base=0x8020cd900, tv=0x0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/home/phargrov/OMPI/openmpi-1.7-latest-freebsd9-amd64/openmpi-1.7-latest/opal/mca/event/libevent2021/libevent/poll.c:165
<br>
#3  0x0000000801422ca1 in opal_libevent2021_event_base_loop
<br>
(base=0x8020cd900, flags=1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/home/phargrov/OMPI/openmpi-1.7-latest-freebsd9-amd64/openmpi-1.7-latest/opal/mca/event/libevent2021/libevent/event.c:1631
<br>
#4  0x00000008010f2c22 in orte_progress_thread_engine (obj=0x80139b160)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/home/phargrov/OMPI/openmpi-1.7-latest-freebsd9-amd64/openmpi-1.7-latest/orte/runtime/orte_init.c:180
<br>
#5  0x0000000800b700a4 in pthread_getprio () from /lib/libthr.so.3
<br>
#6  0x0000000000000000 in ?? ()
<br>
Error accessing memory address 0x7fffffbfe000: Bad address.
<br>
<p><p>-Paul
<br>
<p><p>On Fri, Dec 20, 2013 at 2:59 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; This case is not quite like my OpenBSD-5 report.
</span><br>
<span class="quotelev1">&gt; On FreeBSD-9 I *can* run singletons, but &quot;-np 2&quot; hangs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The following hangs:
</span><br>
<span class="quotelev1">&gt; $ mpirun -np 2 examples/ring_c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The following complains about the &quot;bogus&quot; btl selection.
</span><br>
<span class="quotelev1">&gt; So this is not the same as my problem with OpenBSD-5:
</span><br>
<span class="quotelev1">&gt; $ mpirun -mca btl bogus -np 2 examples/ring_c
</span><br>
<span class="quotelev1">&gt; [freebsd9-amd64.qemu:05926] mca: base: components_open: component pml /
</span><br>
<span class="quotelev1">&gt; bfo open function failed
</span><br>
<span class="quotelev1">&gt; [freebsd9-amd64.qemu:05926] mca: base: components_open: component pml /
</span><br>
<span class="quotelev1">&gt; ob1 open function failed
</span><br>
<span class="quotelev1">&gt; [freebsd9-amd64.qemu:05926] PML ob1 cannot be selected
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A requested component was not found, or was unable to be opened.  This
</span><br>
<span class="quotelev1">&gt; means that this component is either not installed or is unable to be
</span><br>
<span class="quotelev1">&gt; used on your system (e.g., sometimes this means that shared libraries
</span><br>
<span class="quotelev1">&gt; that the component requires are unable to be found/loaded).  Note that
</span><br>
<span class="quotelev1">&gt; Open MPI stopped checking at the first component that it did not find.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Host:      freebsd9-amd64.qemu
</span><br>
<span class="quotelev1">&gt; Framework: btl
</span><br>
<span class="quotelev1">&gt; Component: bogus
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; No available pml components were found!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This means that there are no components of this type installed on your
</span><br>
<span class="quotelev1">&gt; system or all the components reported that they could not be used.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is a fatal error; your MPI process is likely to abort.  Check the
</span><br>
<span class="quotelev1">&gt; output of the &quot;ompi_info&quot; command and ensure that components of this
</span><br>
<span class="quotelev1">&gt; type are available on your system.  You may also wish to check the
</span><br>
<span class="quotelev1">&gt; value of the &quot;component_path&quot; MCA parameter and ensure that it has at
</span><br>
<span class="quotelev1">&gt; least one directory that contains valid MCA components.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For the non-bogus case, &quot;top&quot; show one idle and one active ring_c process:
</span><br>
<span class="quotelev1">&gt;   PID USERNAME  THR PRI NICE   SIZE    RES STATE   C   TIME   WCPU COMMAND
</span><br>
<span class="quotelev1">&gt;  5933 phargrov    2  29    0    98M  6384K select  1   0:32 100.00% ring_c
</span><br>
<span class="quotelev1">&gt;  5931 phargrov    2  20    0 77844K  4856K select  0   0:00  0.00% orterun
</span><br>
<span class="quotelev1">&gt;  5932 phargrov    2  24    0 51652K  4960K select  0   0:00  0.00% ring_c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A backtrace for the 100%-cpu ring_c process:
</span><br>
<span class="quotelev1">&gt; (gdb) where
</span><br>
<span class="quotelev1">&gt; #0  0x0000000800d9811c in poll () from /lib/libc.so.7
</span><br>
<span class="quotelev1">&gt; #1  0x0000000800ae37fe in poll () from /lib/libthr.so.3
</span><br>
<span class="quotelev1">&gt; #2  0x00000008013259aa in poll_dispatch ()
</span><br>
<span class="quotelev1">&gt;    from
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-1.7-latest-freebsd9-amd64/INST/lib/libopen-pal.so.7
</span><br>
<span class="quotelev1">&gt; #3  0x000000080131eb50 in opal_libevent2021_event_base_loop ()
</span><br>
<span class="quotelev1">&gt;    from
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-1.7-latest-freebsd9-amd64/INST/lib/libopen-pal.so.7
</span><br>
<span class="quotelev1">&gt; #4  0x000000080106395d in orte_progress_thread_engine ()
</span><br>
<span class="quotelev1">&gt;    from
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-1.7-latest-freebsd9-amd64/INST/lib/libopen-rte.so.7
</span><br>
<span class="quotelev1">&gt; #5  0x0000000800ae10a4 in pthread_getprio () from /lib/libthr.so.3
</span><br>
<span class="quotelev1">&gt; #6  0x0000000000000000 in ?? ()
</span><br>
<span class="quotelev1">&gt; Error accessing memory address 0x7fffffbfe000: Bad address.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And for the idle ring_c process:
</span><br>
<span class="quotelev1">&gt; (gdb) where
</span><br>
<span class="quotelev1">&gt; #0  0x0000000800d9811c in poll () from /lib/libc.so.7
</span><br>
<span class="quotelev1">&gt; #1  0x0000000800ae37fe in poll () from /lib/libthr.so.3
</span><br>
<span class="quotelev1">&gt; #2  0x00000008013259aa in poll_dispatch ()
</span><br>
<span class="quotelev1">&gt;    from
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-1.7-latest-freebsd9-amd64/INST/lib/libopen-pal.so.7
</span><br>
<span class="quotelev1">&gt; #3  0x000000080131eb50 in opal_libevent2021_event_base_loop ()
</span><br>
<span class="quotelev1">&gt;    from
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-1.7-latest-freebsd9-amd64/INST/lib/libopen-pal.so.7
</span><br>
<span class="quotelev1">&gt; #4  0x000000080106395d in orte_progress_thread_engine ()
</span><br>
<span class="quotelev1">&gt;    from
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-1.7-latest-freebsd9-amd64/INST/lib/libopen-rte.so.7
</span><br>
<span class="quotelev1">&gt; #5  0x0000000800ae10a4 in pthread_getprio () from /lib/libthr.so.3
</span><br>
<span class="quotelev1">&gt; #6  0x0000000000000000 in ?? ()
</span><br>
<span class="quotelev1">&gt; Error accessing memory address 0x7fffffbfe000: Bad address.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; They look to be the same, but I double checked that these are correct.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13541/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13542.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30031 - FreeBSD-9 mpirun hangs"</a>
<li><strong>Previous message:</strong> <a href="13540.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30031 - FreeBSD mpirun warning"</a>
<li><strong>Maybe in reply to:</strong> <a href="13537.php">Paul Hargrove: "[OMPI devel] 1.7.4rc2r30031 - FreeBSD-9 mpirun hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13542.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30031 - FreeBSD-9 mpirun hangs"</a>
<li><strong>Reply:</strong> <a href="13542.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30031 - FreeBSD-9 mpirun hangs"</a>
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
