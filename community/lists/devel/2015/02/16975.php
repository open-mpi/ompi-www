<?
$subject_val = "Re: [OMPI devel] opal_fifo SEGV from master";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 12 05:07:12 2015" -->
<!-- isoreceived="20150212100712" -->
<!-- sent="Thu, 12 Feb 2015 02:07:08 -0800" -->
<!-- isosent="20150212100708" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] opal_fifo SEGV from master" -->
<!-- id="CAAvDA14BpzUUnweva9XTRKWkrmRM5s5-RC2E1CJUgqxbqQQijQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAvDA15WJZV5iYqmBikyVkSGvVKfDc3y74ny5fVT22=nGenepw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] opal_fifo SEGV from master<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-12 05:07:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16976.php">Gilles Gouaillardet: "Re: [OMPI devel] OBJ_RELEASE() question"</a>
<li><strong>Previous message:</strong> <a href="16974.php">Adrian Reber: "Re: [OMPI devel] OBJ_RELEASE() question"</a>
<li><strong>In reply to:</strong> <a href="16955.php">Paul Hargrove: "[OMPI devel] opal_fifo SEGV from master"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16978.php">Nathan Hjelm: "Re: [OMPI devel] opal_fifo SEGV from master"</a>
<li><strong>Reply:</strong> <a href="16978.php">Nathan Hjelm: "Re: [OMPI devel] opal_fifo SEGV from master"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just experienced the same failure as below with openmpi-dev-904-g08dceda
<br>
build with &quot;gcc (GCC) 4.8.2 20140120 (Red Hat 4.8.2-16)&quot; on Scientific
<br>
Linux 7.x (a RHEL 7 clone).
<br>
<p>gdb says:
<br>
<p>Program received signal SIGSEGV, Segmentation fault.
<br>
[Switching to Thread 0x7ffff53b0700 (LWP 19685)]
<br>
0x0000000000401417 in opal_fifo_pop_atomic (fifo=0x7fffffffe130)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/home/phargrov/OMPI/openmpi-master-linux-x86_64-sl7x/openmpi-dev-904-g08dceda/opal/class/opal_fifo.h:127
<br>
127             next = (opal_list_item_t *) item-&gt;opal_list_next;
<br>
<p>-Paul
<br>
<p>On Fri, Feb 6, 2015 at 4:22 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Yes, this time I really mean &quot;fifo&quot;, not &quot;lifo&quot;.  ;-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With last night's master tarball (Open MPI dev-845-ga3275aa) configured
</span><br>
<span class="quotelev1">&gt; with only --prefix and --enable-debug
</span><br>
<span class="quotelev1">&gt; A Linux-86-64 system running debian Wheezy and compiler = &quot;gcc (Debian
</span><br>
<span class="quotelev1">&gt; 4.7.2-5) 4.7.2&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Failure from &quot;make check&quot;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-master-linux-x86_64-wheezy/openmpi-dev-845-ga3275aa/config/test-driver:
</span><br>
<span class="quotelev1">&gt; line 95:  3697 Segmentation fault      &quot;$@&quot; &gt; $log_file 2&gt;&amp;1
</span><br>
<span class="quotelev1">&gt; FAIL: opal_fifo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Manual run shows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ ./test/class/opal_fifo
</span><br>
<span class="quotelev1">&gt; Single thread test. Time: 0 s 33534 us 33 nsec/poppush
</span><br>
<span class="quotelev1">&gt; Atomics thread finished. Time: 0 s 82289 us 82 nsec/poppush
</span><br>
<span class="quotelev1">&gt; Atomics thread finished. Time: 4 s 844299 us 4844 nsec/poppush
</span><br>
<span class="quotelev1">&gt; Atomics thread finished. Time: 5 s 27642 us 5027 nsec/poppush
</span><br>
<span class="quotelev1">&gt; Atomics thread finished. Time: 5 s 65829 us 5065 nsec/poppush
</span><br>
<span class="quotelev1">&gt; Atomics thread finished. Time: 5 s 264239 us 5264 nsec/poppush
</span><br>
<span class="quotelev1">&gt; Atomics thread finished. Time: 5 s 432407 us 5432 nsec/poppush
</span><br>
<span class="quotelev1">&gt; Atomics thread finished. Time: 5 s 462913 us 5462 nsec/poppush
</span><br>
<span class="quotelev1">&gt; Atomics thread finished. Time: 5 s 466208 us 5466 nsec/poppush
</span><br>
<span class="quotelev1">&gt; Atomics thread finished. Time: 5 s 485575 us 5485 nsec/poppush
</span><br>
<span class="quotelev1">&gt; All threads finished. Thread count: 8 Time: 5 s 485844 us 685 nsec/poppush
</span><br>
<span class="quotelev1">&gt; Segmentation fault (core dumped)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When run within GDB:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Program received signal SIGSEGV, Segmentation fault.
</span><br>
<span class="quotelev1">&gt; [Switching to Thread 0x7ffff5c64700 (LWP 3948)]
</span><br>
<span class="quotelev1">&gt; 0x0000000000401568 in opal_fifo_pop_atomic (fifo=0x7fffffffe830)
</span><br>
<span class="quotelev1">&gt;     at
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-master-linux-x86_64-wheezy/openmpi-dev-845-ga3275aa/opal/class/opal_fifo.h:127
</span><br>
<span class="quotelev1">&gt; 127             next = (opal_list_item_t *) item-&gt;opal_list_next;
</span><br>
<span class="quotelev1">&gt; (gdb) print item
</span><br>
<span class="quotelev1">&gt; $1 = (opal_list_item_t *) 0x0
</span><br>
<span class="quotelev1">&gt; (gdb) where
</span><br>
<span class="quotelev1">&gt; #0  0x0000000000401568 in opal_fifo_pop_atomic (fifo=0x7fffffffe830)
</span><br>
<span class="quotelev1">&gt;     at
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-master-linux-x86_64-wheezy/openmpi-dev-845-ga3275aa/opal/class/opal_fifo.h:127
</span><br>
<span class="quotelev1">&gt; #1  0x000000000040193d in thread_test_exhaust (arg=0x7fffffffe830)
</span><br>
<span class="quotelev1">&gt;     at
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-master-linux-x86_64-wheezy/openmpi-dev-845-ga3275aa/test/class/opal_fifo.c:79
</span><br>
<span class="quotelev1">&gt; #2  0x00007ffff6ff9b50 in start_thread () from
</span><br>
<span class="quotelev1">&gt; /lib/x86_64-linux-gnu/libpthread.so.0
</span><br>
<span class="quotelev1">&gt; #3  0x00007ffff6d4370d in clone () from /lib/x86_64-linux-gnu/libc.so.6
</span><br>
<span class="quotelev1">&gt; #4  0x0000000000000000 in ?? ()
</span><br>
<span class="quotelev1">&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16975/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16976.php">Gilles Gouaillardet: "Re: [OMPI devel] OBJ_RELEASE() question"</a>
<li><strong>Previous message:</strong> <a href="16974.php">Adrian Reber: "Re: [OMPI devel] OBJ_RELEASE() question"</a>
<li><strong>In reply to:</strong> <a href="16955.php">Paul Hargrove: "[OMPI devel] opal_fifo SEGV from master"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16978.php">Nathan Hjelm: "Re: [OMPI devel] opal_fifo SEGV from master"</a>
<li><strong>Reply:</strong> <a href="16978.php">Nathan Hjelm: "Re: [OMPI devel] opal_fifo SEGV from master"</a>
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
