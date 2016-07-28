<?
$subject_val = "Re: [OMPI devel] opal_fifo SEGV from master";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 12 15:53:25 2015" -->
<!-- isoreceived="20150212205325" -->
<!-- sent="Thu, 12 Feb 2015 13:53:24 -0700" -->
<!-- isosent="20150212205324" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] opal_fifo SEGV from master" -->
<!-- id="20150212205324.GA91702_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAMJJpkVaU4GnKJ0VawbGHXuxxxBRy-Vfk=WBMX8BBK9EAax0kA_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-02-12 15:53:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16981.php">Paul Hargrove: "Re: [OMPI devel] opal_fifo SEGV from master"</a>
<li><strong>Previous message:</strong> <a href="16979.php">George Bosilca: "Re: [OMPI devel] opal_fifo SEGV from master"</a>
<li><strong>In reply to:</strong> <a href="16979.php">George Bosilca: "Re: [OMPI devel] opal_fifo SEGV from master"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16981.php">Paul Hargrove: "Re: [OMPI devel] opal_fifo SEGV from master"</a>
<li><strong>Reply:</strong> <a href="16981.php">Paul Hargrove: "Re: [OMPI devel] opal_fifo SEGV from master"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, seriously. This code is still undergoing testing which is part of
<br>
the reason it is on master. Once I am confident in the code I will be
<br>
updating some on my code to use a fifo instead of an opal_list_t and a
<br>
lock.
<br>
<p>I don't know if the barrier will make a difference but it is the only
<br>
place I could see for a possibly inconsistency. It might not make any
<br>
difference. If that is the case I will dig deeper.
<br>
<p>-Nathan
<br>
<p>On Thu, Feb 12, 2015 at 03:48:25PM -0500, George Bosilca wrote:
<br>
<span class="quotelev1">&gt;    Seriously?
</span><br>
<span class="quotelev1">&gt;      George.
</span><br>
<span class="quotelev1">&gt;    On Thu, Feb 12, 2015 at 1:00 PM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      I think I see the issue. Looks like there is a missing memory barrier
</span><br>
<span class="quotelev1">&gt;      after the head consistency code. I will add one and see if that fixes
</span><br>
<span class="quotelev1">&gt;      your problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      BTW, I can't reproduce the issue on any of my systems :-/.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      -Nathan
</span><br>
<span class="quotelev1">&gt;      On Thu, Feb 12, 2015 at 02:07:08AM -0800, Paul Hargrove wrote:
</span><br>
<span class="quotelev2">&gt;      &gt;    Just experienced the same failure as below with
</span><br>
<span class="quotelev1">&gt;      openmpi-dev-904-g08dceda
</span><br>
<span class="quotelev2">&gt;      &gt;    build with &quot;gcc (GCC) 4.8.2 20140120 (Red Hat 4.8.2-16)&quot; on
</span><br>
<span class="quotelev1">&gt;      Scientific
</span><br>
<span class="quotelev2">&gt;      &gt;    Linux 7.x (a RHEL 7 clone).
</span><br>
<span class="quotelev2">&gt;      &gt;    gdb says:
</span><br>
<span class="quotelev2">&gt;      &gt;    Program received signal SIGSEGV, Segmentation fault.
</span><br>
<span class="quotelev2">&gt;      &gt;    [Switching to Thread 0x7ffff53b0700 (LWP 19685)]
</span><br>
<span class="quotelev2">&gt;      &gt;    0x0000000000401417 in opal_fifo_pop_atomic (fifo=0x7fffffffe130)
</span><br>
<span class="quotelev2">&gt;      &gt;        at
</span><br>
<span class="quotelev2">&gt;      &gt;   
</span><br>
<span class="quotelev1">&gt;      /home/phargrov/OMPI/openmpi-master-linux-x86_64-sl7x/openmpi-dev-904-g08dceda/opal/class/opal_fifo.h:127
</span><br>
<span class="quotelev2">&gt;      &gt;    127             next = (opal_list_item_t *) item-&gt;opal_list_next;
</span><br>
<span class="quotelev2">&gt;      &gt;    -Paul
</span><br>
<span class="quotelev2">&gt;      &gt;    On Fri, Feb 6, 2015 at 4:22 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;      wrote:
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev2">&gt;      &gt;      Yes, this time I really mean &quot;fifo&quot;, not &quot;lifo&quot;.  ;-)
</span><br>
<span class="quotelev2">&gt;      &gt;      With last night's master tarball (Open MPI dev-845-ga3275aa)
</span><br>
<span class="quotelev1">&gt;      configured
</span><br>
<span class="quotelev2">&gt;      &gt;      with only --prefix and --enable-debug
</span><br>
<span class="quotelev2">&gt;      &gt;      A Linux-86-64 system running debian Wheezy and compiler = &quot;gcc
</span><br>
<span class="quotelev1">&gt;      (Debian
</span><br>
<span class="quotelev2">&gt;      &gt;      4.7.2-5) 4.7.2&quot;
</span><br>
<span class="quotelev2">&gt;      &gt;      Failure from &quot;make check&quot;:
</span><br>
<span class="quotelev2">&gt;      &gt;     
</span><br>
<span class="quotelev1">&gt;      /home/phargrov/OMPI/openmpi-master-linux-x86_64-wheezy/openmpi-dev-845-ga3275aa/config/test-driver:
</span><br>
<span class="quotelev2">&gt;      &gt;      line 95:  3697 Segmentation fault      &quot;$@&quot; &gt; $log_file 2&gt;&amp;1
</span><br>
<span class="quotelev2">&gt;      &gt;      FAIL: opal_fifo
</span><br>
<span class="quotelev2">&gt;      &gt;      Manual run shows:
</span><br>
<span class="quotelev2">&gt;      &gt;      $ ./test/class/opal_fifo
</span><br>
<span class="quotelev2">&gt;      &gt;      Single thread test. Time: 0 s 33534 us 33 nsec/poppush
</span><br>
<span class="quotelev2">&gt;      &gt;      Atomics thread finished. Time: 0 s 82289 us 82 nsec/poppush
</span><br>
<span class="quotelev2">&gt;      &gt;      Atomics thread finished. Time: 4 s 844299 us 4844 nsec/poppush
</span><br>
<span class="quotelev2">&gt;      &gt;      Atomics thread finished. Time: 5 s 27642 us 5027 nsec/poppush
</span><br>
<span class="quotelev2">&gt;      &gt;      Atomics thread finished. Time: 5 s 65829 us 5065 nsec/poppush
</span><br>
<span class="quotelev2">&gt;      &gt;      Atomics thread finished. Time: 5 s 264239 us 5264 nsec/poppush
</span><br>
<span class="quotelev2">&gt;      &gt;      Atomics thread finished. Time: 5 s 432407 us 5432 nsec/poppush
</span><br>
<span class="quotelev2">&gt;      &gt;      Atomics thread finished. Time: 5 s 462913 us 5462 nsec/poppush
</span><br>
<span class="quotelev2">&gt;      &gt;      Atomics thread finished. Time: 5 s 466208 us 5466 nsec/poppush
</span><br>
<span class="quotelev2">&gt;      &gt;      Atomics thread finished. Time: 5 s 485575 us 5485 nsec/poppush
</span><br>
<span class="quotelev2">&gt;      &gt;      All threads finished. Thread count: 8 Time: 5 s 485844 us 685
</span><br>
<span class="quotelev2">&gt;      &gt;      nsec/poppush
</span><br>
<span class="quotelev2">&gt;      &gt;      Segmentation fault (core dumped)
</span><br>
<span class="quotelev2">&gt;      &gt;      When run within GDB:
</span><br>
<span class="quotelev2">&gt;      &gt;      Program received signal SIGSEGV, Segmentation fault.
</span><br>
<span class="quotelev2">&gt;      &gt;      [Switching to Thread 0x7ffff5c64700 (LWP 3948)]
</span><br>
<span class="quotelev2">&gt;      &gt;      0x0000000000401568 in opal_fifo_pop_atomic (fifo=0x7fffffffe830)
</span><br>
<span class="quotelev2">&gt;      &gt;          at
</span><br>
<span class="quotelev2">&gt;      &gt;     
</span><br>
<span class="quotelev1">&gt;      /home/phargrov/OMPI/openmpi-master-linux-x86_64-wheezy/openmpi-dev-845-ga3275aa/opal/class/opal_fifo.h:127
</span><br>
<span class="quotelev2">&gt;      &gt;      127             next = (opal_list_item_t *) item-&gt;opal_list_next;
</span><br>
<span class="quotelev2">&gt;      &gt;      (gdb) print item
</span><br>
<span class="quotelev2">&gt;      &gt;      $1 = (opal_list_item_t *) 0x0
</span><br>
<span class="quotelev2">&gt;      &gt;      (gdb) where
</span><br>
<span class="quotelev2">&gt;      &gt;      #0  0x0000000000401568 in opal_fifo_pop_atomic
</span><br>
<span class="quotelev1">&gt;      (fifo=0x7fffffffe830)
</span><br>
<span class="quotelev2">&gt;      &gt;          at
</span><br>
<span class="quotelev2">&gt;      &gt;     
</span><br>
<span class="quotelev1">&gt;      /home/phargrov/OMPI/openmpi-master-linux-x86_64-wheezy/openmpi-dev-845-ga3275aa/opal/class/opal_fifo.h:127
</span><br>
<span class="quotelev2">&gt;      &gt;      #1  0x000000000040193d in thread_test_exhaust
</span><br>
<span class="quotelev1">&gt;      (arg=0x7fffffffe830)
</span><br>
<span class="quotelev2">&gt;      &gt;          at
</span><br>
<span class="quotelev2">&gt;      &gt;     
</span><br>
<span class="quotelev1">&gt;      /home/phargrov/OMPI/openmpi-master-linux-x86_64-wheezy/openmpi-dev-845-ga3275aa/test/class/opal_fifo.c:79
</span><br>
<span class="quotelev2">&gt;      &gt;      #2  0x00007ffff6ff9b50 in start_thread () from
</span><br>
<span class="quotelev2">&gt;      &gt;      /lib/x86_64-linux-gnu/libpthread.so.0
</span><br>
<span class="quotelev2">&gt;      &gt;      #3  0x00007ffff6d4370d in clone () from
</span><br>
<span class="quotelev1">&gt;      /lib/x86_64-linux-gnu/libc.so.6
</span><br>
<span class="quotelev2">&gt;      &gt;      #4  0x0000000000000000 in ?? ()
</span><br>
<span class="quotelev2">&gt;      &gt;      -Paul
</span><br>
<span class="quotelev2">&gt;      &gt;      --
</span><br>
<span class="quotelev2">&gt;      &gt;      Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;      &gt;      Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev2">&gt;      &gt;      Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;      &gt;      Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev2">&gt;      &gt;    --
</span><br>
<span class="quotelev2">&gt;      &gt;    Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;      &gt;    Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev2">&gt;      &gt;    Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;      &gt;    Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;      &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;      &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;      &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;      &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;      &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16975.php">http://www.open-mpi.org/community/lists/devel/2015/02/16975.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      _______________________________________________
</span><br>
<span class="quotelev1">&gt;      devel mailing list
</span><br>
<span class="quotelev1">&gt;      devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;      Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;      Link to this post:
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16978.php">http://www.open-mpi.org/community/lists/devel/2015/02/16978.php</a>
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16979.php">http://www.open-mpi.org/community/lists/devel/2015/02/16979.php</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16980/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16981.php">Paul Hargrove: "Re: [OMPI devel] opal_fifo SEGV from master"</a>
<li><strong>Previous message:</strong> <a href="16979.php">George Bosilca: "Re: [OMPI devel] opal_fifo SEGV from master"</a>
<li><strong>In reply to:</strong> <a href="16979.php">George Bosilca: "Re: [OMPI devel] opal_fifo SEGV from master"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16981.php">Paul Hargrove: "Re: [OMPI devel] opal_fifo SEGV from master"</a>
<li><strong>Reply:</strong> <a href="16981.php">Paul Hargrove: "Re: [OMPI devel] opal_fifo SEGV from master"</a>
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
