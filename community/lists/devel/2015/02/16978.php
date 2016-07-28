<?
$subject_val = "Re: [OMPI devel] opal_fifo SEGV from master";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 12 13:00:41 2015" -->
<!-- isoreceived="20150212180041" -->
<!-- sent="Thu, 12 Feb 2015 11:00:42 -0700" -->
<!-- isosent="20150212180042" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] opal_fifo SEGV from master" -->
<!-- id="20150212180042.GA89166_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAvDA14BpzUUnweva9XTRKWkrmRM5s5-RC2E1CJUgqxbqQQijQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-12 13:00:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16979.php">George Bosilca: "Re: [OMPI devel] opal_fifo SEGV from master"</a>
<li><strong>Previous message:</strong> <a href="16977.php">Ralph Castain: "Re: [OMPI devel] OBJ_RELEASE() question"</a>
<li><strong>In reply to:</strong> <a href="16975.php">Paul Hargrove: "Re: [OMPI devel] opal_fifo SEGV from master"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16979.php">George Bosilca: "Re: [OMPI devel] opal_fifo SEGV from master"</a>
<li><strong>Reply:</strong> <a href="16979.php">George Bosilca: "Re: [OMPI devel] opal_fifo SEGV from master"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think I see the issue. Looks like there is a missing memory barrier
<br>
after the head consistency code. I will add one and see if that fixes
<br>
your problem.
<br>
<p>BTW, I can't reproduce the issue on any of my systems :-/.
<br>
<p>-Nathan
<br>
<p>On Thu, Feb 12, 2015 at 02:07:08AM -0800, Paul Hargrove wrote:
<br>
<span class="quotelev1">&gt;    Just experienced the same failure as below with openmpi-dev-904-g08dceda
</span><br>
<span class="quotelev1">&gt;    build with &quot;gcc (GCC) 4.8.2 20140120 (Red Hat 4.8.2-16)&quot; on Scientific
</span><br>
<span class="quotelev1">&gt;    Linux 7.x (a RHEL 7 clone).
</span><br>
<span class="quotelev1">&gt;    gdb says:
</span><br>
<span class="quotelev1">&gt;    Program received signal SIGSEGV, Segmentation fault.
</span><br>
<span class="quotelev1">&gt;    [Switching to Thread 0x7ffff53b0700 (LWP 19685)]
</span><br>
<span class="quotelev1">&gt;    0x0000000000401417 in opal_fifo_pop_atomic (fifo=0x7fffffffe130)
</span><br>
<span class="quotelev1">&gt;        at
</span><br>
<span class="quotelev1">&gt;    /home/phargrov/OMPI/openmpi-master-linux-x86_64-sl7x/openmpi-dev-904-g08dceda/opal/class/opal_fifo.h:127
</span><br>
<span class="quotelev1">&gt;    127             next = (opal_list_item_t *) item-&gt;opal_list_next;
</span><br>
<span class="quotelev1">&gt;    -Paul
</span><br>
<span class="quotelev1">&gt;    On Fri, Feb 6, 2015 at 4:22 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      Yes, this time I really mean &quot;fifo&quot;, not &quot;lifo&quot;.  ;-)
</span><br>
<span class="quotelev1">&gt;      With last night's master tarball (Open MPI dev-845-ga3275aa) configured
</span><br>
<span class="quotelev1">&gt;      with only --prefix and --enable-debug
</span><br>
<span class="quotelev1">&gt;      A Linux-86-64 system running debian Wheezy and compiler = &quot;gcc (Debian
</span><br>
<span class="quotelev1">&gt;      4.7.2-5) 4.7.2&quot;
</span><br>
<span class="quotelev1">&gt;      Failure from &quot;make check&quot;:
</span><br>
<span class="quotelev1">&gt;      /home/phargrov/OMPI/openmpi-master-linux-x86_64-wheezy/openmpi-dev-845-ga3275aa/config/test-driver:
</span><br>
<span class="quotelev1">&gt;      line 95:  3697 Segmentation fault      &quot;$@&quot; &gt; $log_file 2&gt;&amp;1
</span><br>
<span class="quotelev1">&gt;      FAIL: opal_fifo
</span><br>
<span class="quotelev1">&gt;      Manual run shows:
</span><br>
<span class="quotelev1">&gt;      $ ./test/class/opal_fifo
</span><br>
<span class="quotelev1">&gt;      Single thread test. Time: 0 s 33534 us 33 nsec/poppush
</span><br>
<span class="quotelev1">&gt;      Atomics thread finished. Time: 0 s 82289 us 82 nsec/poppush
</span><br>
<span class="quotelev1">&gt;      Atomics thread finished. Time: 4 s 844299 us 4844 nsec/poppush
</span><br>
<span class="quotelev1">&gt;      Atomics thread finished. Time: 5 s 27642 us 5027 nsec/poppush
</span><br>
<span class="quotelev1">&gt;      Atomics thread finished. Time: 5 s 65829 us 5065 nsec/poppush
</span><br>
<span class="quotelev1">&gt;      Atomics thread finished. Time: 5 s 264239 us 5264 nsec/poppush
</span><br>
<span class="quotelev1">&gt;      Atomics thread finished. Time: 5 s 432407 us 5432 nsec/poppush
</span><br>
<span class="quotelev1">&gt;      Atomics thread finished. Time: 5 s 462913 us 5462 nsec/poppush
</span><br>
<span class="quotelev1">&gt;      Atomics thread finished. Time: 5 s 466208 us 5466 nsec/poppush
</span><br>
<span class="quotelev1">&gt;      Atomics thread finished. Time: 5 s 485575 us 5485 nsec/poppush
</span><br>
<span class="quotelev1">&gt;      All threads finished. Thread count: 8 Time: 5 s 485844 us 685
</span><br>
<span class="quotelev1">&gt;      nsec/poppush
</span><br>
<span class="quotelev1">&gt;      Segmentation fault (core dumped)
</span><br>
<span class="quotelev1">&gt;      When run within GDB:
</span><br>
<span class="quotelev1">&gt;      Program received signal SIGSEGV, Segmentation fault.
</span><br>
<span class="quotelev1">&gt;      [Switching to Thread 0x7ffff5c64700 (LWP 3948)]
</span><br>
<span class="quotelev1">&gt;      0x0000000000401568 in opal_fifo_pop_atomic (fifo=0x7fffffffe830)
</span><br>
<span class="quotelev1">&gt;          at
</span><br>
<span class="quotelev1">&gt;      /home/phargrov/OMPI/openmpi-master-linux-x86_64-wheezy/openmpi-dev-845-ga3275aa/opal/class/opal_fifo.h:127
</span><br>
<span class="quotelev1">&gt;      127             next = (opal_list_item_t *) item-&gt;opal_list_next;
</span><br>
<span class="quotelev1">&gt;      (gdb) print item
</span><br>
<span class="quotelev1">&gt;      $1 = (opal_list_item_t *) 0x0
</span><br>
<span class="quotelev1">&gt;      (gdb) where
</span><br>
<span class="quotelev1">&gt;      #0  0x0000000000401568 in opal_fifo_pop_atomic (fifo=0x7fffffffe830)
</span><br>
<span class="quotelev1">&gt;          at
</span><br>
<span class="quotelev1">&gt;      /home/phargrov/OMPI/openmpi-master-linux-x86_64-wheezy/openmpi-dev-845-ga3275aa/opal/class/opal_fifo.h:127
</span><br>
<span class="quotelev1">&gt;      #1  0x000000000040193d in thread_test_exhaust (arg=0x7fffffffe830)
</span><br>
<span class="quotelev1">&gt;          at
</span><br>
<span class="quotelev1">&gt;      /home/phargrov/OMPI/openmpi-master-linux-x86_64-wheezy/openmpi-dev-845-ga3275aa/test/class/opal_fifo.c:79
</span><br>
<span class="quotelev1">&gt;      #2  0x00007ffff6ff9b50 in start_thread () from
</span><br>
<span class="quotelev1">&gt;      /lib/x86_64-linux-gnu/libpthread.so.0
</span><br>
<span class="quotelev1">&gt;      #3  0x00007ffff6d4370d in clone () from /lib/x86_64-linux-gnu/libc.so.6
</span><br>
<span class="quotelev1">&gt;      #4  0x0000000000000000 in ?? ()
</span><br>
<span class="quotelev1">&gt;      -Paul
</span><br>
<span class="quotelev1">&gt;      --
</span><br>
<span class="quotelev1">&gt;      Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt;      Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt;      Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt;      Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    --
</span><br>
<span class="quotelev1">&gt;    Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt;    Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt;    Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt;    Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16975.php">http://www.open-mpi.org/community/lists/devel/2015/02/16975.php</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16978/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16979.php">George Bosilca: "Re: [OMPI devel] opal_fifo SEGV from master"</a>
<li><strong>Previous message:</strong> <a href="16977.php">Ralph Castain: "Re: [OMPI devel] OBJ_RELEASE() question"</a>
<li><strong>In reply to:</strong> <a href="16975.php">Paul Hargrove: "Re: [OMPI devel] opal_fifo SEGV from master"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16979.php">George Bosilca: "Re: [OMPI devel] opal_fifo SEGV from master"</a>
<li><strong>Reply:</strong> <a href="16979.php">George Bosilca: "Re: [OMPI devel] opal_fifo SEGV from master"</a>
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
