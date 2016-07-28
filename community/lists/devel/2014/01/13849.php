<?
$subject_val = "Re: [OMPI devel] 1.7.4rc: mpirun hangs on ia64";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 22 17:22:46 2014" -->
<!-- isoreceived="20140122222246" -->
<!-- sent="Wed, 22 Jan 2014 14:22:44 -0800" -->
<!-- isosent="20140122222244" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.4rc: mpirun hangs on ia64" -->
<!-- id="CAAvDA15Z231e1_P8wOXWuoSEVPOkHpJxVfZh6jJjGihUO3QOAw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D60D0126-0EE0-4B43-9B4F-A9AD41D41D6B_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.7.4rc: mpirun hangs on ia64<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-22 17:22:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13850.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4 status update"</a>
<li><strong>Previous message:</strong> <a href="13848.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc: mpirun hangs on ia64"</a>
<li><strong>In reply to:</strong> <a href="13848.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc: mpirun hangs on ia64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13853.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: mpirun hangs on ia64"</a>
<li><strong>Reply:</strong> <a href="13853.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: mpirun hangs on ia64"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Jan 22, 2014 at 1:59 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Huh - afraid I can't see anything wrong so far. All looks normal and then
</span><br>
<span class="quotelev1">&gt; it just hangs. Any chance you can &quot;gdb&quot; to the proc and see where it is
</span><br>
<span class="quotelev1">&gt; stuck?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Ralph,
<br>
<p>The gstack output below looks like one thread is spinning on an atomic of
<br>
some sort.
<br>
Running gstack repeatedly 100 times yields the following &quot;histogram&quot; of the
<br>
top frame of Thread 1:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;47 opal_atomic_lifo_push &gt; opal_atomic_cmpset_ptr &gt;
<br>
opal_atomic_cmpset_acq_64
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;19 opal_atomic_lifo_push &gt; opal_atomic_cmpset_ptr
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6 opal_atomic_lifo_push &gt; opal_atomic_wmb
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;28 opal_atomic_lifo_push
<br>
<p>A spin in a lifo push is not consistent (in my experience) with the
<br>
possibility that the other thread and failed to post some event. So, the
<br>
problem is probably in the atomics or lifo code, though &quot;make check&quot; passes
<br>
just fine.
<br>
<p><p>My ia64 asm is a bit rusty, but I'll give a quick look if/when I can.
<br>
I've implemented a lock-free LIFO for ia64 in the past and so have some
<br>
idea what I am looking at/for.
<br>
However, with my access window closing under 10 minutes from now, anything
<br>
more than source inspection will need to wait until tomorrow.
<br>
<p>-Paul
<br>
<p>$ gstack 21094
<br>
Thread 2 (Thread 0x20000000016bf200 (LWP 21095)):
<br>
#0  0xa000000000010721 in __kernel_syscall_via_break ()
<br>
#1  0x20000000005a00d0 in poll () from /lib/libc.so.6.1
<br>
#2  0x2000000000a0c3e0 in poll_dispatch () from
<br>
/eng/home/PHHargrove/OMPI/openmpi-1.7-latest-linux-ia64/INST/lib/libopen-pal.so.6
<br>
#3  0x20000000009e5e90 in opal_libevent2021_event_base_loop () from
<br>
/eng/home/PHHargrove/OMPI/openmpi-1.7-latest-linux-ia64/INST/lib/libopen-pal.so.6
<br>
#4  0x20000000006bd8a0 in orte_progress_thread_engine () from
<br>
/eng/home/PHHargrove/OMPI/openmpi-1.7-latest-linux-ia64/INST/lib/libopen-rte.so.7
<br>
#5  0x20000000003dc310 in start_thread () from /lib/libpthread.so.0
<br>
#6  0x20000000005b49a0 in __clone2 () from /lib/libc.so.6.1
<br>
#7  0x0000000000000000 in ?? ()
<br>
Thread 1 (Thread 0x20000000000566a0 (LWP 21094)):
<br>
#0  0x20000000000973f2 in opal_atomic_cmpset_acq_64 () from
<br>
/eng/home/PHHargrove/OMPI/openmpi-1.7-latest-linux-ia64/INST/lib/libmpi.so.1
<br>
#1  0x2000000000097350 in opal_atomic_cmpset_ptr () from
<br>
/eng/home/PHHargrove/OMPI/openmpi-1.7-latest-linux-ia64/INST/lib/libmpi.so.1
<br>
#2  0x20000000000995d0 in opal_atomic_lifo_push () from
<br>
/eng/home/PHHargrove/OMPI/openmpi-1.7-latest-linux-ia64/INST/lib/libmpi.so.1
<br>
#3  0x2000000000099030 in ompi_free_list_grow () from
<br>
/eng/home/PHHargrove/OMPI/openmpi-1.7-latest-linux-ia64/INST/lib/libmpi.so.1
<br>
#4  0x200000000009a2a0 in ompi_rb_tree_init () from
<br>
/eng/home/PHHargrove/OMPI/openmpi-1.7-latest-linux-ia64/INST/lib/libmpi.so.1
<br>
#5  0x200000000029ec10 in mca_mpool_base_tree_init () from
<br>
/eng/home/PHHargrove/OMPI/openmpi-1.7-latest-linux-ia64/INST/lib/libmpi.so.1
<br>
#6  0x2000000000299380 in mca_mpool_base_open () from
<br>
/eng/home/PHHargrove/OMPI/openmpi-1.7-latest-linux-ia64/INST/lib/libmpi.so.1
<br>
#7  0x200000000098fd80 in mca_base_framework_open () from
<br>
/eng/home/PHHargrove/OMPI/openmpi-1.7-latest-linux-ia64/INST/lib/libopen-pal.so.6
<br>
#8  0x200000000010d6b0 in ompi_mpi_init () from
<br>
/eng/home/PHHargrove/OMPI/openmpi-1.7-latest-linux-ia64/INST/lib/libmpi.so.1
<br>
#9  0x20000000001b3460 in PMPI_Init () from
<br>
/eng/home/PHHargrove/OMPI/openmpi-1.7-latest-linux-ia64/INST/lib/libmpi.so.1
<br>
#10 0x4000000000000c00 in main ()
<br>
<p><p><p><p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 22, 2014, at 11:39 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Attached is the requested output with the addition of &quot;-mca
</span><br>
<span class="quotelev1">&gt; grpcomm_base_verbose 5&quot;.
</span><br>
<span class="quotelev1">&gt; I have also attached a 2nd output with the further addition of &quot;-mca
</span><br>
<span class="quotelev1">&gt; oob_tcp_if_include lo&quot; to ensure that this is not related to the firewall
</span><br>
<span class="quotelev1">&gt; issues I've seen on other hosts.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have use of this host until 14:30 PST today, and then lose it for 12
</span><br>
<span class="quotelev1">&gt; hours.
</span><br>
<span class="quotelev1">&gt; So, tests of the next tarball won't start until after 2:30am - which
</span><br>
<span class="quotelev1">&gt; probably means 10am.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Jan 22, 2014 at 7:34 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Weird - everything looks completely normal. Can you add -mca
</span><br>
<span class="quotelev2">&gt;&gt; grpcomm_base_verbose 5 to your cmd line?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 22, 2014, at 1:38 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Following-up as promised:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Output from an --enable-debug build is attached.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Jan 21, 2014 at 11:25 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes, this is familiar. See:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2013/11/13182.php">http://www.open-mpi.org/community/lists/devel/2013/11/13182.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If I understand correctly, the thread ended with:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 03 December 2013, Sylvestre Ledru wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; FYI, Debian has stopped supporting ia64 for its next release....
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So, I stopped working on that issue.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Well, I have access to a Linux/IA64 system and my trials with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openmpi-1.7.4rc2r30361 appear to hang, much as Sylvestre had reported w/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1.6.5.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am atatching output from a build W/O --enable debug for the command:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ mpirun -mca plm_base_verbose 5 -mca ras_base_verbose 5 -mca
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rmaps_base_verbose 5 -mca ess_base_verbose 5 -np 1 ./ring_c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I will follow-up with an --enable-debug build when possible.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
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
<span class="quotelev2">&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev2">&gt;&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt;&gt;  &lt;log.txt.bz2&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt;  &lt;log.txt.bz2&gt;&lt;log-incl-lo.txt.bz2&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13849/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13850.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4 status update"</a>
<li><strong>Previous message:</strong> <a href="13848.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc: mpirun hangs on ia64"</a>
<li><strong>In reply to:</strong> <a href="13848.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc: mpirun hangs on ia64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13853.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: mpirun hangs on ia64"</a>
<li><strong>Reply:</strong> <a href="13853.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: mpirun hangs on ia64"</a>
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
