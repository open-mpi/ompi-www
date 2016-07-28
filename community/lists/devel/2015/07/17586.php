<?
$subject_val = "Re: [OMPI devel] opal_fifo SEGV from master";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  1 12:19:37 2015" -->
<!-- isoreceived="20150701161937" -->
<!-- sent="Wed, 1 Jul 2015 09:19:23 -0700" -->
<!-- isosent="20150701161923" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] opal_fifo SEGV from master" -->
<!-- id="CAAvDA15j_0dqSRYmKyEKYe254pTHoH59YEXK5rQN2TpgQ7T3OQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAvDA17JuYM=z57s6txuKXNVgN63f=3e58pyfL85ThERnfr_LA_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-07-01 12:19:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17587.php">Paul Hargrove: "[OMPI devel] opal_lifo hangs on ppc in master"</a>
<li><strong>Previous message:</strong> <a href="17585.php">Paul Hargrove: "[OMPI devel] Master build failures w/ Studio 12.4 on Linux w/ -m32 [w/ patch]"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16981.php">Paul Hargrove: "Re: [OMPI devel] opal_fifo SEGV from master"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nathan,
<br>
<p>Last night's master tarball is still producing a SEGV in opal_fifo on the
<br>
same Scientific Linux 7.x x86-64 VM as I reported in Feb.
<br>
<p>Reproducing the SEGV under gdb yields:
<br>
<p>Program received signal SIGSEGV, Segmentation fault.
<br>
[Switching to Thread 0x7ffff5bb1700 (LWP 16242)]
<br>
0x0000000000401167 in opal_fifo_pop_atomic (fifo=0x7fffffffe130)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/home/phargrov/OMPI/openmpi-master-linux-x86_64-sl7x/openmpi-dev-2014-gc8730b5/opal/class/opal_fifo.h:127
<br>
127             next = (opal_list_item_t *) item-&gt;opal_list_next;
<br>
<p>(gdb) where
<br>
#0  0x0000000000401167 in opal_fifo_pop_atomic (fifo=0x7fffffffe130)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/home/phargrov/OMPI/openmpi-master-linux-x86_64-sl7x/openmpi-dev-2014-gc8730b5/opal/class/opal_fifo.h:127
<br>
#1  0x000000000040153e in thread_test_exhaust (arg=0x7fffffffe130)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/home/phargrov/OMPI/openmpi-master-linux-x86_64-sl7x/openmpi-dev-2014-gc8730b5/test/class/opal_fifo.c:79
<br>
#2  0x00007ffff6f7cdf3 in start_thread () from /lib64/libpthread.so.0
<br>
#3  0x00007ffff6caa1ed in clone () from /lib64/libc.so.6
<br>
<p><p>-Paul
<br>
<p>On Thu, Feb 12, 2015 at 2:17 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Nathan,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just FYI: Both systems where I've seen this failure are VMs on a
</span><br>
<span class="quotelev1">&gt; well-loaded server.
</span><br>
<span class="quotelev1">&gt; So, the instruction interleaving (for reproducing races) is likely a bit
</span><br>
<span class="quotelev1">&gt; different than what you would see on ones own laptop or workstation.  Also,
</span><br>
<span class="quotelev1">&gt; I don't see the SEGV in every run, but to reproduce it inside gdb took me
</span><br>
<span class="quotelev1">&gt; no more than 3 or 4 runs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Let me know if your added memory barrier will be in tonight's master
</span><br>
<span class="quotelev1">&gt; tarball.
</span><br>
<span class="quotelev1">&gt; If so, I'll try to test again tonight.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Feb 12, 2015 at 12:53 PM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes, seriously. This code is still undergoing testing which is part of
</span><br>
<span class="quotelev2">&gt;&gt; the reason it is on master. Once I am confident in the code I will be
</span><br>
<span class="quotelev2">&gt;&gt; updating some on my code to use a fifo instead of an opal_list_t and a
</span><br>
<span class="quotelev2">&gt;&gt; lock.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don't know if the barrier will make a difference but it is the only
</span><br>
<span class="quotelev2">&gt;&gt; place I could see for a possibly inconsistency. It might not make any
</span><br>
<span class="quotelev2">&gt;&gt; difference. If that is the case I will dig deeper.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Nathan
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Feb 12, 2015 at 03:48:25PM -0500, George Bosilca wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    Seriously?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      George.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    On Thu, Feb 12, 2015 at 1:00 PM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      I think I see the issue. Looks like there is a missing memory
</span><br>
<span class="quotelev2">&gt;&gt; barrier
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      after the head consistency code. I will add one and see if that
</span><br>
<span class="quotelev2">&gt;&gt; fixes
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      your problem.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      BTW, I can't reproduce the issue on any of my systems :-/.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      -Nathan
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      On Thu, Feb 12, 2015 at 02:07:08AM -0800, Paul Hargrove wrote:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;      &gt;    Just experienced the same failure as below with
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      openmpi-dev-904-g08dceda
</span><br>
<span class="quotelev4">&gt;&gt; &gt;      &gt;    build with &quot;gcc (GCC) 4.8.2 20140120 (Red Hat 4.8.2-16)&quot; on
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      Scientific
</span><br>
<span class="quotelev4">&gt;&gt; &gt;      &gt;    Linux 7.x (a RHEL 7 clone).
</span><br>
<span class="quotelev4">&gt;&gt; &gt;      &gt;    gdb says:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;      &gt;    Program received signal SIGSEGV, Segmentation fault.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;      &gt;    [Switching to Thread 0x7ffff53b0700 (LWP 19685)]
</span><br>
<span class="quotelev4">&gt;&gt; &gt;      &gt;    0x0000000000401417 in opal_fifo_pop_atomic
</span><br>
<span class="quotelev2">&gt;&gt; (fifo=0x7fffffffe130)
</span><br>
<span class="quotelev4">&gt;&gt; &gt;      &gt;        at
</span><br>
<span class="quotelev4">&gt;&gt; &gt;      &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/phargrov/OMPI/openmpi-master-linux-x86_64-sl7x/openmpi-dev-904-g08dceda/opal/class/opal_fifo.h:127
</span><br>
<span class="quotelev4">&gt;&gt; &gt;      &gt;    127             next = (opal_list_item_t *)
</span><br>
<span class="quotelev2">&gt;&gt; item-&gt;opal_list_next;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;      &gt;    -Paul
</span><br>
<span class="quotelev4">&gt;&gt; &gt;      &gt;    On Fri, Feb 6, 2015 at 4:22 PM, Paul Hargrove &lt;
</span><br>
<span class="quotelev2">&gt;&gt; phhargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      wrote:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;      &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;      &gt;      Yes, this time I really mean &quot;fifo&quot;, not &quot;lifo&quot;.  ;-)
</span><br>
<span class="quotelev4">&gt;&gt; &gt;      &gt;      With last night's master tarball (Open MPI dev-845-ga3275aa)
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      configured
</span><br>
<span class="quotelev4">&gt;&gt; &gt;      &gt;      with only --prefix and --enable-debug
</span><br>
<span class="quotelev4">&gt;&gt; &gt;      &gt;      A Linux-86-64 system running debian Wheezy and compiler =
</span><br>
<span class="quotelev2">&gt;&gt; &quot;gcc
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      (Debian
</span><br>
<span class="quotelev4">&gt;&gt; &gt;      &gt;      4.7.2-5) 4.7.2&quot;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;      &gt;      Failure from &quot;make check&quot;:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;      &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/phargrov/OMPI/openmpi-master-linux-x86_64-wheezy/openmpi-dev-845-ga3275aa/config/test-driver:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;      &gt;      line 95:  3697 Segmentation fault      &quot;$@&quot; &gt; $log_file 2&gt;&amp;1
</span><br>
<span class="quotelev4">&gt;&gt; &gt;      &gt;      FAIL: opal_fifo
</span><br>
<span class="quotelev4">&gt;&gt; &gt;      &gt;      Manual run shows:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;      &gt;      $ ./test/class/opal_fifo
</span><br>
<span class="quotelev4">&gt;&gt; &gt;      &gt;      Single thread test. Time: 0 s 33534 us 33 nsec/poppush
</span><br>
<span class="quotelev4">&gt;&gt; &gt;      &gt;      Atomics thread finished. Time: 0 s 82289 us 82 nsec/poppush
</span><br>
<span class="quotelev4">&gt;&gt; &gt;      &gt;      Atomics thread finished. Time: 4 s 844299 us 4844
</span><br>
<span class="quotelev2">&gt;&gt; nsec/poppush
</span><br>
<span class="quotelev4">&gt;&gt; &gt;      &gt;      Atomics thread finished. Time: 5 s 27642 us 5027
</span><br>
<span class="quotelev2">&gt;&gt; nsec/poppush
</span><br>
<span class="quotelev4">&gt;&gt; &gt;      &gt;      Atomics thread finished. Time: 5 s 65829 us 5065
</span><br>
<span class="quotelev2">&gt;&gt; nsec/poppush
</span><br>
<span class="quotelev4">&gt;&gt; &gt;      &gt;      Atomics thread finished. Time: 5 s 264239 us 5264
</span><br>
<span class="quotelev2">&gt;&gt; nsec/poppush
</span><br>
<span class="quotelev4">&gt;&gt; &gt;      &gt;      Atomics thread finished. Time: 5 s 432407 us 5432
</span><br>
<span class="quotelev2">&gt;&gt; nsec/poppush
</span><br>
<span class="quotelev4">&gt;&gt; &gt;      &gt;      Atomics thread finished. Time: 5 s 462913 us 5462
</span><br>
<span class="quotelev2">&gt;&gt; nsec/poppush
</span><br>
<span class="quotelev4">&gt;&gt; &gt;      &gt;      Atomics thread finished. Time: 5 s 466208 us 5466
</span><br>
<span class="quotelev2">&gt;&gt; nsec/poppush
</span><br>
<span class="quotelev4">&gt;&gt; &gt;      &gt;      Atomics thread finished. Time: 5 s 485575 us 5485
</span><br>
<span class="quotelev2">&gt;&gt; nsec/poppush
</span><br>
<span class="quotelev4">&gt;&gt; &gt;      &gt;      All threads finished. Thread count: 8 Time: 5 s 485844 us
</span><br>
<span class="quotelev2">&gt;&gt; 685
</span><br>
<span class="quotelev4">&gt;&gt; &gt;      &gt;      nsec/poppush
</span><br>
<span class="quotelev4">&gt;&gt; &gt;      &gt;      Segmentation fault (core dumped)
</span><br>
<span class="quotelev4">&gt;&gt; &gt;      &gt;      When run within GDB:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;      &gt;      Program received signal SIGSEGV, Segmentation fault.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;      &gt;      [Switching to Thread 0x7ffff5c64700 (LWP 3948)]
</span><br>
<span class="quotelev4">&gt;&gt; &gt;      &gt;      0x0000000000401568 in opal_fifo_pop_atomic
</span><br>
<span class="quotelev2">&gt;&gt; (fifo=0x7fffffffe830)
</span><br>
<span class="quotelev4">&gt;&gt; &gt;      &gt;          at
</span><br>
<span class="quotelev4">&gt;&gt; &gt;      &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/phargrov/OMPI/openmpi-master-linux-x86_64-wheezy/openmpi-dev-845-ga3275aa/opal/class/opal_fifo.h:127
</span><br>
<span class="quotelev4">&gt;&gt; &gt;      &gt;      127             next = (opal_list_item_t *)
</span><br>
<span class="quotelev2">&gt;&gt; item-&gt;opal_list_next;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;      &gt;      (gdb) print item
</span><br>
<span class="quotelev4">&gt;&gt; &gt;      &gt;      $1 = (opal_list_item_t *) 0x0
</span><br>
<span class="quotelev4">&gt;&gt; &gt;      &gt;      (gdb) where
</span><br>
<span class="quotelev4">&gt;&gt; &gt;      &gt;      #0  0x0000000000401568 in opal_fifo_pop_atomic
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      (fifo=0x7fffffffe830)
</span><br>
<span class="quotelev4">&gt;&gt; &gt;      &gt;          at
</span><br>
<span class="quotelev4">&gt;&gt; &gt;      &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/phargrov/OMPI/openmpi-master-linux-x86_64-wheezy/openmpi-dev-845-ga3275aa/opal/class/opal_fifo.h:127
</span><br>
<span class="quotelev4">&gt;&gt; &gt;      &gt;      #1  0x000000000040193d in thread_test_exhaust
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      (arg=0x7fffffffe830)
</span><br>
<span class="quotelev4">&gt;&gt; &gt;      &gt;          at
</span><br>
<span class="quotelev4">&gt;&gt; &gt;      &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/phargrov/OMPI/openmpi-master-linux-x86_64-wheezy/openmpi-dev-845-ga3275aa/test/class/opal_fifo.c:79
</span><br>
<span class="quotelev4">&gt;&gt; &gt;      &gt;      #2  0x00007ffff6ff9b50 in start_thread () from
</span><br>
<span class="quotelev4">&gt;&gt; &gt;      &gt;      /lib/x86_64-linux-gnu/libpthread.so.0
</span><br>
<span class="quotelev4">&gt;&gt; &gt;      &gt;      #3  0x00007ffff6d4370d in clone () from
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      /lib/x86_64-linux-gnu/libc.so.6
</span><br>
<span class="quotelev4">&gt;&gt; &gt;      &gt;      #4  0x0000000000000000 in ?? ()
</span><br>
<span class="quotelev4">&gt;&gt; &gt;      &gt;      -Paul
</span><br>
<span class="quotelev4">&gt;&gt; &gt;      &gt;      --
</span><br>
<span class="quotelev4">&gt;&gt; &gt;      &gt;      Paul H. Hargrove
</span><br>
<span class="quotelev2">&gt;&gt; PHHargrove_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt;      &gt;      Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev4">&gt;&gt; &gt;      &gt;      Computer Science Department               Tel:
</span><br>
<span class="quotelev2">&gt;&gt; +1-510-495-2352
</span><br>
<span class="quotelev4">&gt;&gt; &gt;      &gt;      Lawrence Berkeley National Laboratory     Fax:
</span><br>
<span class="quotelev2">&gt;&gt; +1-510-486-6900
</span><br>
<span class="quotelev4">&gt;&gt; &gt;      &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;      &gt;    --
</span><br>
<span class="quotelev4">&gt;&gt; &gt;      &gt;    Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt;      &gt;    Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev4">&gt;&gt; &gt;      &gt;    Computer Science Department               Tel:
</span><br>
<span class="quotelev2">&gt;&gt; +1-510-495-2352
</span><br>
<span class="quotelev4">&gt;&gt; &gt;      &gt;    Lawrence Berkeley National Laboratory     Fax:
</span><br>
<span class="quotelev2">&gt;&gt; +1-510-486-6900
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;      &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt; &gt;      &gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt; &gt;      &gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt;      &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt;      &gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16975.php">http://www.open-mpi.org/community/lists/devel/2015/02/16975.php</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16978.php">http://www.open-mpi.org/community/lists/devel/2015/02/16978.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16979.php">http://www.open-mpi.org/community/lists/devel/2015/02/16979.php</a>
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
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16980.php">http://www.open-mpi.org/community/lists/devel/2015/02/16980.php</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17586/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17587.php">Paul Hargrove: "[OMPI devel] opal_lifo hangs on ppc in master"</a>
<li><strong>Previous message:</strong> <a href="17585.php">Paul Hargrove: "[OMPI devel] Master build failures w/ Studio 12.4 on Linux w/ -m32 [w/ patch]"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16981.php">Paul Hargrove: "Re: [OMPI devel] opal_fifo SEGV from master"</a>
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
