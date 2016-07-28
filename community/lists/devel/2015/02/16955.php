<?
$subject_val = "[OMPI devel] opal_fifo SEGV from master";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  6 19:22:14 2015" -->
<!-- isoreceived="20150207002214" -->
<!-- sent="Fri, 6 Feb 2015 16:22:12 -0800" -->
<!-- isosent="20150207002212" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] opal_fifo SEGV from master" -->
<!-- id="CAAvDA15WJZV5iYqmBikyVkSGvVKfDc3y74ny5fVT22=nGenepw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] opal_fifo SEGV from master<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-06 19:22:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16956.php">Paul Hargrove: "[OMPI devel] ess:alps build failure with PGI"</a>
<li><strong>Previous message:</strong> <a href="16954.php">Paul Hargrove: "Re: [OMPI devel] Master build broken libfabrics + PGI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16975.php">Paul Hargrove: "Re: [OMPI devel] opal_fifo SEGV from master"</a>
<li><strong>Reply:</strong> <a href="16975.php">Paul Hargrove: "Re: [OMPI devel] opal_fifo SEGV from master"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, this time I really mean &quot;fifo&quot;, not &quot;lifo&quot;.  ;-)
<br>
<p>With last night's master tarball (Open MPI dev-845-ga3275aa) configured
<br>
with only --prefix and --enable-debug
<br>
A Linux-86-64 system running debian Wheezy and compiler = &quot;gcc (Debian
<br>
4.7.2-5) 4.7.2&quot;
<br>
<p>Failure from &quot;make check&quot;:
<br>
<p>/home/phargrov/OMPI/openmpi-master-linux-x86_64-wheezy/openmpi-dev-845-ga3275aa/config/test-driver:
<br>
line 95:  3697 Segmentation fault      &quot;$@&quot; &gt; $log_file 2&gt;&amp;1
<br>
FAIL: opal_fifo
<br>
<p>Manual run shows:
<br>
<p>$ ./test/class/opal_fifo
<br>
Single thread test. Time: 0 s 33534 us 33 nsec/poppush
<br>
Atomics thread finished. Time: 0 s 82289 us 82 nsec/poppush
<br>
Atomics thread finished. Time: 4 s 844299 us 4844 nsec/poppush
<br>
Atomics thread finished. Time: 5 s 27642 us 5027 nsec/poppush
<br>
Atomics thread finished. Time: 5 s 65829 us 5065 nsec/poppush
<br>
Atomics thread finished. Time: 5 s 264239 us 5264 nsec/poppush
<br>
Atomics thread finished. Time: 5 s 432407 us 5432 nsec/poppush
<br>
Atomics thread finished. Time: 5 s 462913 us 5462 nsec/poppush
<br>
Atomics thread finished. Time: 5 s 466208 us 5466 nsec/poppush
<br>
Atomics thread finished. Time: 5 s 485575 us 5485 nsec/poppush
<br>
All threads finished. Thread count: 8 Time: 5 s 485844 us 685 nsec/poppush
<br>
Segmentation fault (core dumped)
<br>
<p>When run within GDB:
<br>
<p>Program received signal SIGSEGV, Segmentation fault.
<br>
[Switching to Thread 0x7ffff5c64700 (LWP 3948)]
<br>
0x0000000000401568 in opal_fifo_pop_atomic (fifo=0x7fffffffe830)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/home/phargrov/OMPI/openmpi-master-linux-x86_64-wheezy/openmpi-dev-845-ga3275aa/opal/class/opal_fifo.h:127
<br>
127             next = (opal_list_item_t *) item-&gt;opal_list_next;
<br>
(gdb) print item
<br>
$1 = (opal_list_item_t *) 0x0
<br>
(gdb) where
<br>
#0  0x0000000000401568 in opal_fifo_pop_atomic (fifo=0x7fffffffe830)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/home/phargrov/OMPI/openmpi-master-linux-x86_64-wheezy/openmpi-dev-845-ga3275aa/opal/class/opal_fifo.h:127
<br>
#1  0x000000000040193d in thread_test_exhaust (arg=0x7fffffffe830)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/home/phargrov/OMPI/openmpi-master-linux-x86_64-wheezy/openmpi-dev-845-ga3275aa/test/class/opal_fifo.c:79
<br>
#2  0x00007ffff6ff9b50 in start_thread () from
<br>
/lib/x86_64-linux-gnu/libpthread.so.0
<br>
#3  0x00007ffff6d4370d in clone () from /lib/x86_64-linux-gnu/libc.so.6
<br>
#4  0x0000000000000000 in ?? ()
<br>
<p><p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16955/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16956.php">Paul Hargrove: "[OMPI devel] ess:alps build failure with PGI"</a>
<li><strong>Previous message:</strong> <a href="16954.php">Paul Hargrove: "Re: [OMPI devel] Master build broken libfabrics + PGI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16975.php">Paul Hargrove: "Re: [OMPI devel] opal_fifo SEGV from master"</a>
<li><strong>Reply:</strong> <a href="16975.php">Paul Hargrove: "Re: [OMPI devel] opal_fifo SEGV from master"</a>
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
