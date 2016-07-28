<?
$subject_val = "Re: [OMPI users] MPI Error";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec 21 04:08:31 2008" -->
<!-- isoreceived="20081221090831" -->
<!-- sent="Sun, 21 Dec 2008 22:08:25 +1300" -->
<!-- isosent="20081221090825" -->
<!-- name="Asad Ali" -->
<!-- email="asad06_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI Error" -->
<!-- id="28d120cc0812210108k43c42fe7pbac189222eba0dc4_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="28d120cc0812191534q542806c2ndc1b29cee7eb7b8c_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI Error<br>
<strong>From:</strong> Asad Ali (<em>asad06_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-21 04:08:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7568.php">Jeff Squyres: "Re: [OMPI users] MPI Error"</a>
<li><strong>Previous message:</strong> <a href="7566.php">Jeff Squyres: "Re: [OMPI users] MPI Error"</a>
<li><strong>In reply to:</strong> <a href="7565.php">Asad Ali: "[OMPI users] MPI Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7568.php">Jeff Squyres: "Re: [OMPI users] MPI Error"</a>
<li><strong>Reply:</strong> <a href="7568.php">Jeff Squyres: "Re: [OMPI users] MPI Error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>I have changed the position of malloc.h in header files  list. I moved it up
<br>
above mpi.h. Now I am getting a different error message see following,
<br>
[asad_at_stat74 T]$ mpirun  --np 4 nice -10 ./lisa09EMRIT-P
<br>
&nbsp;+---[ lisa14.c ]---------------------------------------------------
<br>
&nbsp;| This is process #0 of 4
<br>
&nbsp;| initialising  :  21.12.2008  21:59:28
<br>
Allocating 134217728 bytes for read buffer...
<br>
Allocating 134217728 bytes for read buffer...
<br>
Allocating 134217728 bytes for read buffer...
<br>
Allocating 134217728 bytes for read buffer...
<br>
Allocating 134217728 bytes for read buffer...
<br>
Allocating 134217728 bytes for read buffer...
<br>
Allocating 134217728 bytes for read buffer...
<br>
-+--&gt; INJECTING SIGNAL...
<br>
Allocating 134217728 bytes for read buffer...
<br>
-+--&gt; INJECTING SIGNAL...
<br>
-+--&gt; INJECTING SIGNAL...
<br>
-+--&gt; INJECTING SIGNAL...
<br>
524765
<br>
524765
<br>
524765
<br>
524765
<br>
&nbsp;| initialising `TDI framework' (might take several minutes)...
<br>
Signal:6 info.si_errno:0(Success) si_code:-6()
<br>
[0] func:/usr/lib/openmpi/libopal.so.0 [0x46efd6]
<br>
[1] func:[0x110440]
<br>
[2] func:[0x110402]
<br>
[3] func:/lib/libc.so.6(gsignal+0x50) [0x2c1fa0]
<br>
[4] func:/lib/libc.so.6(abort+0x101) [0x2c38b1]
<br>
[5] func:/usr/lib/openmpi/libopal.so.0 [0x473d34]
<br>
[6] func:/usr/lib/openmpi/libopal.so.0(free+0x36) [0x473786]
<br>
[7] func:./lisa09EMRIT-P(main+0x454) [0x80566f4]
<br>
[8] func:/lib/libc.so.6(__libc_start_main+0xe0) [0x2aef70]
<br>
[9] func:./lisa09EMRIT-P [0x804af21]
<br>
*** End of error message ***
<br>
<p>Its good that now no user defined functions in code are involved in error
<br>
(it was giving error messages for some of my defined functions too).
<br>
malloc.h has also been disappeared in this error message as was in previous
<br>
message.
<br>
<p>I have used valgrind to see where the error is but I am unable to interpret
<br>
the following valgrind output error message.
<br>
<p><p>--16515--    object doesn't have a symbol table
<br>
--16515-- Reading syms from /usr/lib/openmpi/openmpi/mca_osc_pt2pt.so
<br>
(0x4114000)
<br>
--16515--    object doesn't have a symbol table
<br>
==16513== Warning: set address range perms: large range 536870912 (defined)
<br>
==16512== Warning: set address range perms: large range 536870912 (defined)
<br>
==16514== Warning: set address range perms: large range 536870912 (defined)
<br>
==16515== Warning: set address range perms: large range 536870912 (defined)
<br>
&nbsp;+---[ lisa14.c ]---------------------------------------------------
<br>
&nbsp;| This is process #0 of 4
<br>
&nbsp;| initialising  :  21.12.2008  21:15:37
<br>
Allocating 134217728 bytes for read buffer...
<br>
==16515== Warning: set address range perms: large range 134221824 (defined)
<br>
Allocating 134217728 bytes for read buffer...
<br>
==16514== Warning: set address range perms: large range 134221824 (defined)
<br>
Allocating 134217728 bytes for read buffer...
<br>
==16513== Warning: set address range perms: large range 134221824 (defined)
<br>
Allocating 134217728 bytes for read buffer...
<br>
==16512== Warning: set address range perms: large range 134221824 (defined)
<br>
==16515== Warning: set address range perms: large range 134217728 (defined)
<br>
==16514== Warning: set address range perms: large range 134217728 (defined)
<br>
==16513== Warning: set address range perms: large range 134217728 (defined)
<br>
==16512== Warning: set address range perms: large range 134217728 (defined)
<br>
==16515== Warning: set address range perms: large range 134221824 (noaccess)
<br>
==16514== Warning: set address range perms: large range 134221824 (noaccess)
<br>
==16513== Warning: set address range perms: large range 134221824 (noaccess)
<br>
==16512== Warning: set address range perms: large range 134221824 (noaccess)
<br>
--16515-- memcheck GC: 1024 nodes, 1024 survivors (100.0%)
<br>
--16515-- memcheck GC: increase table size to 2048
<br>
--16513-- memcheck GC: 1024 nodes, 1024 survivors (100.0%)
<br>
--16513-- memcheck GC: increase table size to 2048
<br>
--16514-- memcheck GC: 1024 nodes, 1024 survivors (100.0%)
<br>
--16514-- memcheck GC: increase table size to 2048
<br>
--16512-- memcheck GC: 1024 nodes, 1024 survivors (100.0%)
<br>
--16512-- memcheck GC: increase table size to 2048
<br>
--16513-- memcheck GC: 2048 nodes, 2048 survivors (100.0%)
<br>
--16513-- memcheck GC: increase table size to 4096
<br>
--16514-- memcheck GC: 2048 nodes, 2048 survivors (100.0%)
<br>
--16514-- memcheck GC: increase table size to 4096
<br>
--16515-- memcheck GC: 2048 nodes, 2048 survivors (100.0%)
<br>
--16515-- memcheck GC: increase table size to 4096
<br>
--16512-- memcheck GC: 2048 nodes, 2048 survivors (100.0%)
<br>
--16512-- memcheck GC: increase table size to 4096
<br>
Allocating 134217728 bytes for read buffer...
<br>
==16515== Warning: set address range perms: large range 134221824 (defined)
<br>
Allocating 134217728 bytes for read buffer...
<br>
==16513== Warning: set address range perms: large range 134221824 (defined)
<br>
Allocating 134217728 bytes for read buffer...
<br>
==16514== Warning: set address range perms: large range 134221824 (defined)
<br>
==16515== Warning: set address range perms: large range 134217728 (defined)
<br>
==16513== Warning: set address range perms: large range 134217728 (defined)
<br>
==16514== Warning: set address range perms: large range 134217728 (defined)
<br>
==16515== Warning: set address range perms: large range 134221824 (noaccess)
<br>
Allocating 134217728 bytes for read buffer...
<br>
==16512== Warning: set address range perms: large range 134221824 (defined)
<br>
==16513== Warning: set address range perms: large range 134221824 (noaccess)
<br>
==16512== Warning: set address range perms: large range 134217728 (defined)
<br>
==16514== Warning: set address range perms: large range 134221824 (noaccess)
<br>
==16512== Warning: set address range perms: large range 134221824 (noaccess)
<br>
-+--&gt; INJECTING SIGNAL...
<br>
-+--&gt; INJECTING SIGNAL...
<br>
-+--&gt; INJECTING SIGNAL...
<br>
-+--&gt; INJECTING SIGNAL...
<br>
524765
<br>
524765
<br>
524765
<br>
524765
<br>
Signal:6 info.si_errno:0(Success) si_code:-6()
<br>
--16515-- Reading syms from /lib/libgcc_s-4.1.2-20070925.so.1 (0x794000)
<br>
--16515--    object doesn't have a symbol table
<br>
[0] func:/usr/lib/openmpi/libopal.so.0 [0x46efd6]
<br>
[1] func:/lib/libpthread.so.0 [0x443290]
<br>
[2] func:/lib/ld-linux.so.2 [0x2767f2]
<br>
[3] func:/lib/libc.so.6(gsignal+0x50) [0x2c1fa0]
<br>
[4] func:/lib/libc.so.6(abort+0x101) [0x2c38b1]
<br>
[5] func:/usr/lib/openmpi/libopal.so.0 [0x473d34]
<br>
[6] func:/usr/lib/openmpi/libopal.so.0(free+0x36) [0x473786]
<br>
[7] func:./lisa09EMRIT-P(main+0x44c) [0x80566ec]
<br>
[8] func:/lib/libc.so.6(__libc_start_main+0xe0) [0x2aef70]
<br>
[9] func:./lisa09EMRIT-P [0x804af21]
<br>
*** End of error message ***
<br>
==16515==
<br>
==16515== Process terminating with default action of signal 6 (SIGABRT)
<br>
==16515==    at 0x2C1FA0: raise (in /lib/libc-2.6.so)
<br>
==16515==    by 0x2C39FD: abort (in /lib/libc-2.6.so)
<br>
==16515==    by 0x473D33: (within /usr/lib/openmpi/libopal.so.0.0.0)
<br>
==16515==    by 0x473785: free (in /usr/lib/openmpi/libopal.so.0.0.0)
<br>
==16515==    by 0x80566EB: main (in /home/phd/asad/MLDCs/T/lisa09EMRIT-P)
<br>
==16515==
<br>
==16515== ERROR SUMMARY: 0 errors from 0 contexts (suppressed: 108 from 1)
<br>
--16515--
<br>
--16515-- supp:  108 dl-hack3
<br>
==16515== malloc/free: in use at exit: 0 bytes in 0 blocks.
<br>
==16515== malloc/free: 0 allocs, 0 frees, 0 bytes allocated.
<br>
==16515==
<br>
==16515== All heap blocks were freed -- no leaks are possible.
<br>
--16515--  memcheck: sanity checks: 22725 cheap, 910 expensive
<br>
--16515--  memcheck: auxmaps: 0 auxmap entries (0k, 0M) in use
<br>
--16515--  memcheck: auxmaps: 0 searches, 0 comparisons
<br>
--16515--  memcheck: SMs: n_issued      = 6014 (96224k, 93M)
<br>
--16515--  memcheck: SMs: n_deissued    = 4726 (75616k, 73M)
<br>
--16515--  memcheck: SMs: max_noaccess  = 65535 (1048560k, 1023M)
<br>
--16515--  memcheck: SMs: max_undefined = 38 (608k, 0M)
<br>
--16515--  memcheck: SMs: max_defined   = 10813 (173008k, 168M)
<br>
--16515--  memcheck: SMs: max_non_DSM   = 3109 (49744k, 48M)
<br>
--16515--  memcheck: max sec V bit nodes:    2094 (106k, 0M)
<br>
--16515--  memcheck: set_sec_vbits8 calls: 3371606 (new: 2094, updates:
<br>
3369512)
<br>
--16515--  memcheck: max shadow mem size:   50154k, 48M
<br>
--16515-- translate:            fast SP updates identified: 23,603 ( 89.1%)
<br>
--16515-- translate:   generic_known SP updates identified: 2,000 (  7.5%)
<br>
--16515-- translate: generic_unknown SP updates identified: 877 (  3.3%)
<br>
--16515--     tt/tc: 625,692 tt lookups requiring 672,349 probes
<br>
--16515--     tt/tc: 625,692 fast-cache updates, 9 flushes
<br>
--16515--  transtab: new        20,764 (798,227 -&gt; 14,916,839; ratio 186:10)
<br>
[0 scs]
<br>
--16515--  transtab: dumped     0 (0 -&gt; ??)
<br>
--16515--  transtab: discarded  193 (3,337 -&gt; ??)
<br>
--16515-- scheduler: 2,272,550,211 jumps (bb entries).
<br>
--16515-- scheduler: 22,725/32,791,636 major/minor sched events.
<br>
--16515--    sanity: 22726 cheap, 910 expensive checks.
<br>
--16515--    exectx: 30,011 lists, 11 contexts (avg 0 per list)
<br>
--16515--    exectx: 108 searches, 97 full compares (898 per 1000)
<br>
--16515--    exectx: 0 cmp2, 232 cmp4, 0 cmpAll
<br>
[8]+  Killed                  mpirun -np 4 valgrind -v ./lisa09EMRIT-P
<br>
<p>Could please tell me how ti interpret the results of valgrind?
<br>
<p>Thanking you in advance.
<br>
<p>Asad
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7567/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7568.php">Jeff Squyres: "Re: [OMPI users] MPI Error"</a>
<li><strong>Previous message:</strong> <a href="7566.php">Jeff Squyres: "Re: [OMPI users] MPI Error"</a>
<li><strong>In reply to:</strong> <a href="7565.php">Asad Ali: "[OMPI users] MPI Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7568.php">Jeff Squyres: "Re: [OMPI users] MPI Error"</a>
<li><strong>Reply:</strong> <a href="7568.php">Jeff Squyres: "Re: [OMPI users] MPI Error"</a>
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
