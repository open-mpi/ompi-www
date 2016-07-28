<?
$subject_val = "[OMPI devel] nearly-irrepoducable failure of master on Mac OS X 10.8";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 26 20:45:53 2015" -->
<!-- isoreceived="20150227014553" -->
<!-- sent="Thu, 26 Feb 2015 17:45:50 -0800" -->
<!-- isosent="20150227014550" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] nearly-irrepoducable failure of master on Mac OS X 10.8" -->
<!-- id="CAAvDA15UnMsogUk9TE9g=NMZJcW+vM=s5g1ZGwW+yubfERUn3w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] nearly-irrepoducable failure of master on Mac OS X 10.8<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-26 20:45:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17072.php">Ralph Castain: "Re: [OMPI devel] nearly-irrepoducable failure of master on Mac OS X 10.8"</a>
<li><strong>Previous message:</strong> <a href="17070.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mtl:psm configury build broken in master"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17072.php">Ralph Castain: "Re: [OMPI devel] nearly-irrepoducable failure of master on Mac OS X 10.8"</a>
<li><strong>Reply:</strong> <a href="17072.php">Ralph Castain: "Re: [OMPI devel] nearly-irrepoducable failure of master on Mac OS X 10.8"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Initially I was testing Jeff's tarball for PR 410, on Mac OS X 10.8 where
<br>
cc is clang, I have configured with
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--prefix=[...] --enable-debug --enable-osx-builtin-atomics CC=cc CXX=c++
<br>
<p>I passed &quot;make check&quot;, but when I try to run ring_c I get the first failure
<br>
shown (far) below.
<br>
HOWEVER, I tried 50 times to reproduce the failure and could not do so.
<br>
Since Jeff's tarball is not &quot;official&quot; I turned my attention to the current
<br>
master tarball instead.
<br>
<p>I next tried FIVE HUNDRED times with the current master tarball, and was
<br>
able to reproduce the failure ONCE.
<br>
The failed assertion and backtrace are different than what I saw before, so
<br>
they also appear below.
<br>
<p>Next, I tried with the master tarball without the builtin-atomics configure
<br>
option.
<br>
In that case my 95th trial failed and I didn't continue trying.
<br>
The failure output was (to me) indistinguishable from the one with
<br>
builtin-atomics, but it is also included below for completeness.
<br>
<p>Finally, I tried w/o clang leaving only &quot;--prefix=[...] --enable-debug&quot; on
<br>
the configure command line.
<br>
However, note that &quot;gcc&quot; is really &quot;i686-apple-darwin11-llvm-gcc-4.2&quot; and
<br>
thus shares MUCH in common with clang on the same system.
<br>
This configuration failed too, and the failure output is also provided
<br>
below.
<br>
<p>I hope somebody knows how to proceed from here.
<br>
I don't really have any reason to believe this is specific to Mac OS X, but
<br>
don't have the spare cycles to dedicate to additional testing.
<br>
<p>-Paul
<br>
<p>Seen w/ Jeff's tarball:
<br>
<p>$ mpirun -mca btl sm,self -np 2 examples/ring_c'
<br>
&nbsp;Warning :: opal_list_remove_item - the item 0x7fc092a0cb50 is not on the
<br>
list 0x7fc0928006a0
<br>
Assertion failed: (OPAL_OBJ_MAGIC_ID == ((opal_object_t *)
<br>
(kv))-&gt;obj_magic_id), function store, file
<br>
/Users/Paul/OMPI/openmpi-pr410-v4-macos10.8-x86-clang-atomics/openmpi-gitclone/opal/mca/dstore/hash/dstore_hash.c,
<br>
line 143.
<br>
[tesuji:26399] *** Process received signal ***
<br>
[tesuji:26399] Signal: Abort trap: 6 (6)
<br>
[tesuji:26399] Signal code:  (0)
<br>
[tesuji:26399] [ 0] 0   libsystem_c.dylib
<br>
0x00007fff91e2b90a _sigtramp + 26^@
<br>
[tesuji:26399] [ 1] 0   ???
<br>
0x00000000ffffffff 0x0 + 4294967295^@
<br>
[tesuji:26399] [ 2] 0   libsystem_c.dylib
<br>
0x00007fff91e82f61 abort + 143^@
<br>
[tesuji:26399] [ 3] 0   libsystem_c.dylib
<br>
0x00007fff91e83cb9 __assert_rtn + 146^@
<br>
[tesuji:26399] [ 4] 0   mca_dstore_hash.so
<br>
&nbsp;0x000000010180803c store + 972^@
<br>
[tesuji:26399] [ 5] 0   libopen-pal.0.dylib
<br>
0x00000001016860c6 opal_dstore_base_store + 278^@
<br>
[tesuji:26399] [ 6] 0   mca_pmix_native.so
<br>
&nbsp;0x0000000101825795 native_get + 4709^@
<br>
[tesuji:26399] [ 7] 0   libmpi.0.dylib
<br>
&nbsp;0x000000010111f6a4 ompi_proc_complete_init + 980^@
<br>
[tesuji:26399] [ 8] 0   libmpi.0.dylib
<br>
&nbsp;0x0000000101126f24 ompi_mpi_init + 2372^@
<br>
[tesuji:26399] [ 9] 0   libmpi.0.dylib
<br>
&nbsp;0x00000001011744c0 MPI_Init + 480^@
<br>
[tesuji:26399] [10] 0   ring_c
<br>
&nbsp;0x00000001010e9c25 main + 53^@
<br>
[tesuji:26399] [11] 0   libdyld.dylib
<br>
0x00007fff8e03a7e1 start + 0^@
<br>
[tesuji:26399] *** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 1 with PID 0 on node tesuji exited on
<br>
signal 6 (Abort trap: 6).
<br>
--------------------------------------------------------------------------
<br>
<p>Seen with master tarball and builtin-atomics:
<br>
<p>$ mpirun -mca btl sm,self -np 2 examples/ring_c'
<br>
&nbsp;Warning :: opal_list_remove_item - the item 0x7fc6d1900130 is not on the
<br>
list 0x7fc6d0c30df0
<br>
Assertion failed: (0 == item-&gt;opal_list_item_refcount), function
<br>
opal_list_item_destruct, file
<br>
/Users/Paul/OMPI/openmpi-master-macos10.8-x86-clang-atomics/openmpi-dev-1118-gdc80863/opal/class/opal_list.c,
<br>
line 69.
<br>
[tesuji:62565] *** Process received signal ***
<br>
[tesuji:62565] Signal: Abort trap: 6 (6)
<br>
[tesuji:62565] Signal code:  (0)
<br>
[tesuji:62565] [ 0] 0   libsystem_c.dylib
<br>
0x00007fff91e2b90a _sigtramp + 26^@
<br>
[tesuji:62565] [ 1] 0   ???
<br>
0x0000000000000000 0x0 + 0^@
<br>
[tesuji:62565] [ 2] 0   libsystem_c.dylib
<br>
0x00007fff91e82f61 abort + 143^@
<br>
[tesuji:62565] [ 3] 0   libsystem_c.dylib
<br>
0x00007fff91e83cb9 __assert_rtn + 146^@
<br>
[tesuji:62565] [ 4] 0   libopen-pal.0.dylib
<br>
0x0000000107d54dd5 opal_list_item_destruct + 85^@
<br>
[tesuji:62565] [ 5] 0   mca_dstore_hash.so
<br>
&nbsp;0x0000000107f67e21 opal_obj_run_destructors + 145^@
<br>
[tesuji:62565] [ 6] 0   mca_dstore_hash.so
<br>
&nbsp;0x0000000107f6707e store + 1054^@
<br>
[tesuji:62565] [ 7] 0   libopen-pal.0.dylib
<br>
0x0000000107de0336 opal_dstore_base_store + 278^@
<br>
[tesuji:62565] [ 8] 0   mca_pmix_native.so
<br>
&nbsp;0x0000000107f8aaa3 fencenb_cbfunc + 851^@
<br>
[tesuji:62565] [ 9] 0   mca_pmix_native.so
<br>
&nbsp;0x0000000107f8bf97 pmix_usock_process_msg + 695^@
<br>
[tesuji:62565] [10] 0   libopen-pal.0.dylib
<br>
0x0000000107dea38d event_process_active_single_queue + 493^@
<br>
[tesuji:62565] [11] 0   libopen-pal.0.dylib
<br>
0x0000000107de5f7c event_process_active + 140^@
<br>
[tesuji:62565] [12] 0   libopen-pal.0.dylib
<br>
0x0000000107de502e opal_libevent2022_event_base_loop + 830^@
<br>
[tesuji:62565] [13] 0   libopen-pal.0.dylib
<br>
0x0000000107d66532 progress_engine + 66^@
<br>
[tesuji:62565] [14] 0   libsystem_c.dylib
<br>
0x00007fff91e3d772 _pthread_start + 327^@
<br>
[tesuji:62565] [15] 0   libsystem_c.dylib
<br>
0x00007fff91e2a1a1 thread_start + 13^@
<br>
[tesuji:62565] *** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 1 with PID 0 on node tesuji exited on
<br>
signal 6 (Abort trap: 6).
<br>
--------------------------------------------------------------------------
<br>
<p>Seen with master tarball and without builtin-atomics:
<br>
<p>$ mpirun -mca btl sm,self -np 2 examples/ring_c'
<br>
&nbsp;Warning :: opal_list_remove_item - the item 0x7f8ae2464f00 is not on the
<br>
list 0x7f8ae2600690
<br>
Assertion failed: (0 == item-&gt;opal_list_item_refcount), function
<br>
opal_list_item_destruct, file
<br>
/Users/Paul/OMPI/openmpi-master-macos10.8-x86-clang/openmpi-dev-1118-gdc80863/opal/class/opal_list.c,
<br>
line 69.
<br>
[tesuji:86550] *** Process received signal ***
<br>
[tesuji:86550] Signal: Abort trap: 6 (6)
<br>
[tesuji:86550] Signal code:  (0)
<br>
[tesuji:86550] [ 0] 0   libsystem_c.dylib
<br>
0x00007fff91e2b90a _sigtramp + 26^@
<br>
[tesuji:86550] [ 1] 0   ???
<br>
0x0000000000000000 0x0 + 0^@
<br>
[tesuji:86550] [ 2] 0   libsystem_c.dylib
<br>
0x00007fff91e82f61 abort + 143^@
<br>
[tesuji:86550] [ 3] 0   libsystem_c.dylib
<br>
0x00007fff91e83cb9 __assert_rtn + 146^@
<br>
[tesuji:86550] [ 4] 0   libopen-pal.0.dylib
<br>
0x0000000104e41365 opal_list_item_destruct + 85^@
<br>
[tesuji:86550] [ 5] 0   mca_dstore_hash.so
<br>
&nbsp;0x0000000105039fc1 opal_obj_run_destructors + 145^@
<br>
[tesuji:86550] [ 6] 0   mca_dstore_hash.so
<br>
&nbsp;0x000000010503921e store + 1054^@
<br>
[tesuji:86550] [ 7] 0   libopen-pal.0.dylib
<br>
0x0000000104ec8306 opal_dstore_base_store + 278^@
<br>
[tesuji:86550] [ 8] 0   mca_pmix_native.so
<br>
&nbsp;0x000000010505bef3 fencenb_cbfunc + 851^@
<br>
[tesuji:86550] [ 9] 0   mca_pmix_native.so
<br>
&nbsp;0x000000010505d337 pmix_usock_process_msg + 695^@
<br>
[tesuji:86550] [10] 0   libopen-pal.0.dylib
<br>
0x0000000104ed214d event_process_active_single_queue + 493^@
<br>
[tesuji:86550] [11] 0   libopen-pal.0.dylib
<br>
0x0000000104ecdd3c event_process_active + 140^@
<br>
[tesuji:86550] [12] 0   libopen-pal.0.dylib
<br>
0x0000000104eccdee opal_libevent2022_event_base_loop + 830^@
<br>
[tesuji:86550] [13] 0   libopen-pal.0.dylib
<br>
0x0000000104e521d2 progress_engine + 66^@
<br>
[tesuji:86550] [14] 0   libsystem_c.dylib
<br>
0x00007fff91e3d772 _pthread_start + 327^@
<br>
[tesuji:86550] [15] 0   libsystem_c.dylib
<br>
0x00007fff91e2a1a1 thread_start + 13^@
<br>
[tesuji:86550] *** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 1 with PID 0 on node tesuji exited on
<br>
signal 6 (Abort trap: 6).
<br>
--------------------------------------------------------------------------
<br>
<p>Seen on master configured with only --prefix= and --enable-debug:
<br>
<p>$ mpirun -mca btl sm,self -np 2 examples/ring_c'
<br>
&nbsp;Warning :: opal_list_remove_item - the item 0x7fd104200130 is not on the
<br>
list 0x7fd10342b1e0
<br>
Assertion failed: (OPAL_OBJ_MAGIC_ID == ((opal_object_t *)
<br>
(kv))-&gt;obj_magic_id), function store, file
<br>
/Users/Paul/OMPI/openmpi-master-macos10.8-x86-gcc/openmpi-dev-1118-gdc80863/opal/mca/dstore/hash/dstore_hash.c,
<br>
line 143.
<br>
[tesuji:12056] *** Process received signal ***
<br>
[tesuji:12056] Signal: Abort trap: 6 (6)
<br>
[tesuji:12056] Signal code:  (0)
<br>
[tesuji:12056] [ 0] 0   libsystem_c.dylib
<br>
0x00007fff91e2b90a _sigtramp + 26^@
<br>
[tesuji:12056] [ 1] 0   ???
<br>
0x20656874202d206d 0x0 + 2334386829826793581^@
<br>
[tesuji:12056] [ 2] 0   libsystem_c.dylib
<br>
0x00007fff91e82f61 abort + 143^@
<br>
[tesuji:12056] [ 3] 0   libsystem_c.dylib
<br>
0x00007fff91e83cb9 __assert_rtn + 146^@
<br>
[tesuji:12056] [ 4] 0   mca_dstore_hash.so
<br>
&nbsp;0x000000010b22cf99 store + 873^@
<br>
[tesuji:12056] [ 5] 0   libopen-pal.0.dylib
<br>
0x000000010b0c1160 opal_dstore_base_store + 368^@
<br>
[tesuji:12056] [ 6] 0   mca_pmix_native.so
<br>
&nbsp;0x000000010b250b6f native_get + 6303^@
<br>
[tesuji:12056] [ 7] 0   libmpi.0.dylib
<br>
&nbsp;0x000000010ac32a9b ompi_proc_complete_init + 1659^@
<br>
[tesuji:12056] [ 8] 0   libmpi.0.dylib
<br>
&nbsp;0x000000010ac3be8d ompi_mpi_init + 3117^@
<br>
[tesuji:12056] [ 9] 0   libmpi.0.dylib
<br>
&nbsp;0x000000010ac881c1 MPI_Init + 609^@
<br>
[tesuji:12056] [10] 0   ring_c
<br>
&nbsp;0x000000010abe6bee main + 46^@
<br>
[tesuji:12056] [11] 0   libdyld.dylib
<br>
0x00007fff8e03a7e1 start + 0^@
<br>
[tesuji:12056] [12] 0   ???
<br>
0x0000000000000001 0x0 + 1^@
<br>
[tesuji:12056] *** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 1 with PID 0 on node tesuji exited on
<br>
signal 6 (Abort trap: 6).
<br>
--------------------------------------------------------------------------
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17071/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17072.php">Ralph Castain: "Re: [OMPI devel] nearly-irrepoducable failure of master on Mac OS X 10.8"</a>
<li><strong>Previous message:</strong> <a href="17070.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mtl:psm configury build broken in master"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17072.php">Ralph Castain: "Re: [OMPI devel] nearly-irrepoducable failure of master on Mac OS X 10.8"</a>
<li><strong>Reply:</strong> <a href="17072.php">Ralph Castain: "Re: [OMPI devel] nearly-irrepoducable failure of master on Mac OS X 10.8"</a>
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
