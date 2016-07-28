<?
$subject_val = "Re: [OMPI users] MPI Error";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec 21 08:18:57 2008" -->
<!-- isoreceived="20081221131857" -->
<!-- sent="Sun, 21 Dec 2008 08:18:23 -0500" -->
<!-- isosent="20081221131823" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI Error" -->
<!-- id="E5002F1F-0D47-4E33-AF86-9C16940AAE8C_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="28d120cc0812210108k43c42fe7pbac189222eba0dc4_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-21 08:18:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7569.php">Jeff Squyres: "Re: [OMPI users] Bug in 1.3 nightly"</a>
<li><strong>Previous message:</strong> <a href="7567.php">Asad Ali: "Re: [OMPI users] MPI Error"</a>
<li><strong>In reply to:</strong> <a href="7567.php">Asad Ali: "Re: [OMPI users] MPI Error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It's not the valgrind that are telling here -- it's the fact that  
<br>
something is saying &quot;INJECTING SIGNAL...&quot;
<br>
<p>It looks like something in your program is calling abort() (signal 6  
<br>
is the abort signal).
<br>
<p><p>On Dec 21, 2008, at 4:08 AM, Asad Ali wrote:
<br>
<p><span class="quotelev1">&gt; --===============1267833741==
</span><br>
<span class="quotelev1">&gt; Content-Type: multipart/alternative;
</span><br>
<span class="quotelev1">&gt; 	boundary=&quot;----=_Part_48219_1955003.1229850505418&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------=_Part_48219_1955003.1229850505418
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=ISO-8859-1
</span><br>
<span class="quotelev1">&gt; Content-Transfer-Encoding: 7bit
</span><br>
<span class="quotelev1">&gt; Content-Disposition: inline
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have changed the position of malloc.h in header files  list. I  
</span><br>
<span class="quotelev1">&gt; moved it up
</span><br>
<span class="quotelev1">&gt; above mpi.h. Now I am getting a different error message see following,
</span><br>
<span class="quotelev1">&gt; [asad_at_stat74 T]$ mpirun  --np 4 nice -10 ./lisa09EMRIT-P
</span><br>
<span class="quotelev1">&gt; +---[ lisa14.c ]---------------------------------------------------
</span><br>
<span class="quotelev1">&gt; | This is process #0 of 4
</span><br>
<span class="quotelev1">&gt; | initialising  :  21.12.2008  21:59:28
</span><br>
<span class="quotelev1">&gt; Allocating 134217728 bytes for read buffer...
</span><br>
<span class="quotelev1">&gt; Allocating 134217728 bytes for read buffer...
</span><br>
<span class="quotelev1">&gt; Allocating 134217728 bytes for read buffer...
</span><br>
<span class="quotelev1">&gt; Allocating 134217728 bytes for read buffer...
</span><br>
<span class="quotelev1">&gt; Allocating 134217728 bytes for read buffer...
</span><br>
<span class="quotelev1">&gt; Allocating 134217728 bytes for read buffer...
</span><br>
<span class="quotelev1">&gt; Allocating 134217728 bytes for read buffer...
</span><br>
<span class="quotelev1">&gt; -+--&gt; INJECTING SIGNAL...
</span><br>
<span class="quotelev1">&gt; Allocating 134217728 bytes for read buffer...
</span><br>
<span class="quotelev1">&gt; -+--&gt; INJECTING SIGNAL...
</span><br>
<span class="quotelev1">&gt; -+--&gt; INJECTING SIGNAL...
</span><br>
<span class="quotelev1">&gt; -+--&gt; INJECTING SIGNAL...
</span><br>
<span class="quotelev1">&gt; 524765
</span><br>
<span class="quotelev1">&gt; 524765
</span><br>
<span class="quotelev1">&gt; 524765
</span><br>
<span class="quotelev1">&gt; 524765
</span><br>
<span class="quotelev1">&gt; | initialising `TDI framework' (might take several minutes)...
</span><br>
<span class="quotelev1">&gt; Signal:6 info.si_errno:0(Success) si_code:-6()
</span><br>
<span class="quotelev1">&gt; [0] func:/usr/lib/openmpi/libopal.so.0 [0x46efd6]
</span><br>
<span class="quotelev1">&gt; [1] func:[0x110440]
</span><br>
<span class="quotelev1">&gt; [2] func:[0x110402]
</span><br>
<span class="quotelev1">&gt; [3] func:/lib/libc.so.6(gsignal+0x50) [0x2c1fa0]
</span><br>
<span class="quotelev1">&gt; [4] func:/lib/libc.so.6(abort+0x101) [0x2c38b1]
</span><br>
<span class="quotelev1">&gt; [5] func:/usr/lib/openmpi/libopal.so.0 [0x473d34]
</span><br>
<span class="quotelev1">&gt; [6] func:/usr/lib/openmpi/libopal.so.0(free+0x36) [0x473786]
</span><br>
<span class="quotelev1">&gt; [7] func:./lisa09EMRIT-P(main+0x454) [0x80566f4]
</span><br>
<span class="quotelev1">&gt; [8] func:/lib/libc.so.6(__libc_start_main+0xe0) [0x2aef70]
</span><br>
<span class="quotelev1">&gt; [9] func:./lisa09EMRIT-P [0x804af21]
</span><br>
<span class="quotelev1">&gt; *** End of error message ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Its good that now no user defined functions in code are involved in  
</span><br>
<span class="quotelev1">&gt; error
</span><br>
<span class="quotelev1">&gt; (it was giving error messages for some of my defined functions too).
</span><br>
<span class="quotelev1">&gt; malloc.h has also been disappeared in this error message as was in  
</span><br>
<span class="quotelev1">&gt; previous
</span><br>
<span class="quotelev1">&gt; message.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have used valgrind to see where the error is but I am unable to  
</span><br>
<span class="quotelev1">&gt; interpret
</span><br>
<span class="quotelev1">&gt; the following valgrind output error message.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --16515--    object doesn't have a symbol table
</span><br>
<span class="quotelev1">&gt; --16515-- Reading syms from /usr/lib/openmpi/openmpi/mca_osc_pt2pt.so
</span><br>
<span class="quotelev1">&gt; (0x4114000)
</span><br>
<span class="quotelev1">&gt; --16515--    object doesn't have a symbol table
</span><br>
<span class="quotelev1">&gt; ==16513== Warning: set address range perms: large range 536870912  
</span><br>
<span class="quotelev1">&gt; (defined)
</span><br>
<span class="quotelev1">&gt; ==16512== Warning: set address range perms: large range 536870912  
</span><br>
<span class="quotelev1">&gt; (defined)
</span><br>
<span class="quotelev1">&gt; ==16514== Warning: set address range perms: large range 536870912  
</span><br>
<span class="quotelev1">&gt; (defined)
</span><br>
<span class="quotelev1">&gt; ==16515== Warning: set address range perms: large range 536870912  
</span><br>
<span class="quotelev1">&gt; (defined)
</span><br>
<span class="quotelev1">&gt; +---[ lisa14.c ]---------------------------------------------------
</span><br>
<span class="quotelev1">&gt; | This is process #0 of 4
</span><br>
<span class="quotelev1">&gt; | initialising  :  21.12.2008  21:15:37
</span><br>
<span class="quotelev1">&gt; Allocating 134217728 bytes for read buffer...
</span><br>
<span class="quotelev1">&gt; ==16515== Warning: set address range perms: large range 134221824  
</span><br>
<span class="quotelev1">&gt; (defined)
</span><br>
<span class="quotelev1">&gt; Allocating 134217728 bytes for read buffer...
</span><br>
<span class="quotelev1">&gt; ==16514== Warning: set address range perms: large range 134221824  
</span><br>
<span class="quotelev1">&gt; (defined)
</span><br>
<span class="quotelev1">&gt; Allocating 134217728 bytes for read buffer...
</span><br>
<span class="quotelev1">&gt; ==16513== Warning: set address range perms: large range 134221824  
</span><br>
<span class="quotelev1">&gt; (defined)
</span><br>
<span class="quotelev1">&gt; Allocating 134217728 bytes for read buffer...
</span><br>
<span class="quotelev1">&gt; ==16512== Warning: set address range perms: large range 134221824  
</span><br>
<span class="quotelev1">&gt; (defined)
</span><br>
<span class="quotelev1">&gt; ==16515== Warning: set address range perms: large range 134217728  
</span><br>
<span class="quotelev1">&gt; (defined)
</span><br>
<span class="quotelev1">&gt; ==16514== Warning: set address range perms: large range 134217728  
</span><br>
<span class="quotelev1">&gt; (defined)
</span><br>
<span class="quotelev1">&gt; ==16513== Warning: set address range perms: large range 134217728  
</span><br>
<span class="quotelev1">&gt; (defined)
</span><br>
<span class="quotelev1">&gt; ==16512== Warning: set address range perms: large range 134217728  
</span><br>
<span class="quotelev1">&gt; (defined)
</span><br>
<span class="quotelev1">&gt; ==16515== Warning: set address range perms: large range 134221824  
</span><br>
<span class="quotelev1">&gt; (noaccess)
</span><br>
<span class="quotelev1">&gt; ==16514== Warning: set address range perms: large range 134221824  
</span><br>
<span class="quotelev1">&gt; (noaccess)
</span><br>
<span class="quotelev1">&gt; ==16513== Warning: set address range perms: large range 134221824  
</span><br>
<span class="quotelev1">&gt; (noaccess)
</span><br>
<span class="quotelev1">&gt; ==16512== Warning: set address range perms: large range 134221824  
</span><br>
<span class="quotelev1">&gt; (noaccess)
</span><br>
<span class="quotelev1">&gt; --16515-- memcheck GC: 1024 nodes, 1024 survivors (100.0%)
</span><br>
<span class="quotelev1">&gt; --16515-- memcheck GC: increase table size to 2048
</span><br>
<span class="quotelev1">&gt; --16513-- memcheck GC: 1024 nodes, 1024 survivors (100.0%)
</span><br>
<span class="quotelev1">&gt; --16513-- memcheck GC: increase table size to 2048
</span><br>
<span class="quotelev1">&gt; --16514-- memcheck GC: 1024 nodes, 1024 survivors (100.0%)
</span><br>
<span class="quotelev1">&gt; --16514-- memcheck GC: increase table size to 2048
</span><br>
<span class="quotelev1">&gt; --16512-- memcheck GC: 1024 nodes, 1024 survivors (100.0%)
</span><br>
<span class="quotelev1">&gt; --16512-- memcheck GC: increase table size to 2048
</span><br>
<span class="quotelev1">&gt; --16513-- memcheck GC: 2048 nodes, 2048 survivors (100.0%)
</span><br>
<span class="quotelev1">&gt; --16513-- memcheck GC: increase table size to 4096
</span><br>
<span class="quotelev1">&gt; --16514-- memcheck GC: 2048 nodes, 2048 survivors (100.0%)
</span><br>
<span class="quotelev1">&gt; --16514-- memcheck GC: increase table size to 4096
</span><br>
<span class="quotelev1">&gt; --16515-- memcheck GC: 2048 nodes, 2048 survivors (100.0%)
</span><br>
<span class="quotelev1">&gt; --16515-- memcheck GC: increase table size to 4096
</span><br>
<span class="quotelev1">&gt; --16512-- memcheck GC: 2048 nodes, 2048 survivors (100.0%)
</span><br>
<span class="quotelev1">&gt; --16512-- memcheck GC: increase table size to 4096
</span><br>
<span class="quotelev1">&gt; Allocating 134217728 bytes for read buffer...
</span><br>
<span class="quotelev1">&gt; ==16515== Warning: set address range perms: large range 134221824  
</span><br>
<span class="quotelev1">&gt; (defined)
</span><br>
<span class="quotelev1">&gt; Allocating 134217728 bytes for read buffer...
</span><br>
<span class="quotelev1">&gt; ==16513== Warning: set address range perms: large range 134221824  
</span><br>
<span class="quotelev1">&gt; (defined)
</span><br>
<span class="quotelev1">&gt; Allocating 134217728 bytes for read buffer...
</span><br>
<span class="quotelev1">&gt; ==16514== Warning: set address range perms: large range 134221824  
</span><br>
<span class="quotelev1">&gt; (defined)
</span><br>
<span class="quotelev1">&gt; ==16515== Warning: set address range perms: large range 134217728  
</span><br>
<span class="quotelev1">&gt; (defined)
</span><br>
<span class="quotelev1">&gt; ==16513== Warning: set address range perms: large range 134217728  
</span><br>
<span class="quotelev1">&gt; (defined)
</span><br>
<span class="quotelev1">&gt; ==16514== Warning: set address range perms: large range 134217728  
</span><br>
<span class="quotelev1">&gt; (defined)
</span><br>
<span class="quotelev1">&gt; ==16515== Warning: set address range perms: large range 134221824  
</span><br>
<span class="quotelev1">&gt; (noaccess)
</span><br>
<span class="quotelev1">&gt; Allocating 134217728 bytes for read buffer...
</span><br>
<span class="quotelev1">&gt; ==16512== Warning: set address range perms: large range 134221824  
</span><br>
<span class="quotelev1">&gt; (defined)
</span><br>
<span class="quotelev1">&gt; ==16513== Warning: set address range perms: large range 134221824  
</span><br>
<span class="quotelev1">&gt; (noaccess)
</span><br>
<span class="quotelev1">&gt; ==16512== Warning: set address range perms: large range 134217728  
</span><br>
<span class="quotelev1">&gt; (defined)
</span><br>
<span class="quotelev1">&gt; ==16514== Warning: set address range perms: large range 134221824  
</span><br>
<span class="quotelev1">&gt; (noaccess)
</span><br>
<span class="quotelev1">&gt; ==16512== Warning: set address range perms: large range 134221824  
</span><br>
<span class="quotelev1">&gt; (noaccess)
</span><br>
<span class="quotelev1">&gt; -+--&gt; INJECTING SIGNAL...
</span><br>
<span class="quotelev1">&gt; -+--&gt; INJECTING SIGNAL...
</span><br>
<span class="quotelev1">&gt; -+--&gt; INJECTING SIGNAL...
</span><br>
<span class="quotelev1">&gt; -+--&gt; INJECTING SIGNAL...
</span><br>
<span class="quotelev1">&gt; 524765
</span><br>
<span class="quotelev1">&gt; 524765
</span><br>
<span class="quotelev1">&gt; 524765
</span><br>
<span class="quotelev1">&gt; 524765
</span><br>
<span class="quotelev1">&gt; Signal:6 info.si_errno:0(Success) si_code:-6()
</span><br>
<span class="quotelev1">&gt; --16515-- Reading syms from /lib/libgcc_s-4.1.2-20070925.so.1  
</span><br>
<span class="quotelev1">&gt; (0x794000)
</span><br>
<span class="quotelev1">&gt; --16515--    object doesn't have a symbol table
</span><br>
<span class="quotelev1">&gt; [0] func:/usr/lib/openmpi/libopal.so.0 [0x46efd6]
</span><br>
<span class="quotelev1">&gt; [1] func:/lib/libpthread.so.0 [0x443290]
</span><br>
<span class="quotelev1">&gt; [2] func:/lib/ld-linux.so.2 [0x2767f2]
</span><br>
<span class="quotelev1">&gt; [3] func:/lib/libc.so.6(gsignal+0x50) [0x2c1fa0]
</span><br>
<span class="quotelev1">&gt; [4] func:/lib/libc.so.6(abort+0x101) [0x2c38b1]
</span><br>
<span class="quotelev1">&gt; [5] func:/usr/lib/openmpi/libopal.so.0 [0x473d34]
</span><br>
<span class="quotelev1">&gt; [6] func:/usr/lib/openmpi/libopal.so.0(free+0x36) [0x473786]
</span><br>
<span class="quotelev1">&gt; [7] func:./lisa09EMRIT-P(main+0x44c) [0x80566ec]
</span><br>
<span class="quotelev1">&gt; [8] func:/lib/libc.so.6(__libc_start_main+0xe0) [0x2aef70]
</span><br>
<span class="quotelev1">&gt; [9] func:./lisa09EMRIT-P [0x804af21]
</span><br>
<span class="quotelev1">&gt; *** End of error message ***
</span><br>
<span class="quotelev1">&gt; ==16515==
</span><br>
<span class="quotelev1">&gt; ==16515== Process terminating with default action of signal 6  
</span><br>
<span class="quotelev1">&gt; (SIGABRT)
</span><br>
<span class="quotelev1">&gt; ==16515==    at 0x2C1FA0: raise (in /lib/libc-2.6.so)
</span><br>
<span class="quotelev1">&gt; ==16515==    by 0x2C39FD: abort (in /lib/libc-2.6.so)
</span><br>
<span class="quotelev1">&gt; ==16515==    by 0x473D33: (within /usr/lib/openmpi/libopal.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==16515==    by 0x473785: free (in /usr/lib/openmpi/libopal.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==16515==    by 0x80566EB: main (in /home/phd/asad/MLDCs/T/ 
</span><br>
<span class="quotelev1">&gt; lisa09EMRIT-P)
</span><br>
<span class="quotelev1">&gt; ==16515==
</span><br>
<span class="quotelev1">&gt; ==16515== ERROR SUMMARY: 0 errors from 0 contexts (suppressed: 108  
</span><br>
<span class="quotelev1">&gt; from 1)
</span><br>
<span class="quotelev1">&gt; --16515--
</span><br>
<span class="quotelev1">&gt; --16515-- supp:  108 dl-hack3
</span><br>
<span class="quotelev1">&gt; ==16515== malloc/free: in use at exit: 0 bytes in 0 blocks.
</span><br>
<span class="quotelev1">&gt; ==16515== malloc/free: 0 allocs, 0 frees, 0 bytes allocated.
</span><br>
<span class="quotelev1">&gt; ==16515==
</span><br>
<span class="quotelev1">&gt; ==16515== All heap blocks were freed -- no leaks are possible.
</span><br>
<span class="quotelev1">&gt; --16515--  memcheck: sanity checks: 22725 cheap, 910 expensive
</span><br>
<span class="quotelev1">&gt; --16515--  memcheck: auxmaps: 0 auxmap entries (0k, 0M) in use
</span><br>
<span class="quotelev1">&gt; --16515--  memcheck: auxmaps: 0 searches, 0 comparisons
</span><br>
<span class="quotelev1">&gt; --16515--  memcheck: SMs: n_issued      = 6014 (96224k, 93M)
</span><br>
<span class="quotelev1">&gt; --16515--  memcheck: SMs: n_deissued    = 4726 (75616k, 73M)
</span><br>
<span class="quotelev1">&gt; --16515--  memcheck: SMs: max_noaccess  = 65535 (1048560k, 1023M)
</span><br>
<span class="quotelev1">&gt; --16515--  memcheck: SMs: max_undefined = 38 (608k, 0M)
</span><br>
<span class="quotelev1">&gt; --16515--  memcheck: SMs: max_defined   = 10813 (173008k, 168M)
</span><br>
<span class="quotelev1">&gt; --16515--  memcheck: SMs: max_non_DSM   = 3109 (49744k, 48M)
</span><br>
<span class="quotelev1">&gt; --16515--  memcheck: max sec V bit nodes:    2094 (106k, 0M)
</span><br>
<span class="quotelev1">&gt; --16515--  memcheck: set_sec_vbits8 calls: 3371606 (new: 2094,  
</span><br>
<span class="quotelev1">&gt; updates:
</span><br>
<span class="quotelev1">&gt; 3369512)
</span><br>
<span class="quotelev1">&gt; --16515--  memcheck: max shadow mem size:   50154k, 48M
</span><br>
<span class="quotelev1">&gt; --16515-- translate:            fast SP updates identified: 23,603  
</span><br>
<span class="quotelev1">&gt; ( 89.1%)
</span><br>
<span class="quotelev1">&gt; --16515-- translate:   generic_known SP updates identified: 2,000  
</span><br>
<span class="quotelev1">&gt; (  7.5%)
</span><br>
<span class="quotelev1">&gt; --16515-- translate: generic_unknown SP updates identified: 877  
</span><br>
<span class="quotelev1">&gt; (  3.3%)
</span><br>
<span class="quotelev1">&gt; --16515--     tt/tc: 625,692 tt lookups requiring 672,349 probes
</span><br>
<span class="quotelev1">&gt; --16515--     tt/tc: 625,692 fast-cache updates, 9 flushes
</span><br>
<span class="quotelev1">&gt; --16515--  transtab: new        20,764 (798,227 -&gt; 14,916,839; ratio  
</span><br>
<span class="quotelev1">&gt; 186:10)
</span><br>
<span class="quotelev1">&gt; [0 scs]
</span><br>
<span class="quotelev1">&gt; --16515--  transtab: dumped     0 (0 -&gt; ??)
</span><br>
<span class="quotelev1">&gt; --16515--  transtab: discarded  193 (3,337 -&gt; ??)
</span><br>
<span class="quotelev1">&gt; --16515-- scheduler: 2,272,550,211 jumps (bb entries).
</span><br>
<span class="quotelev1">&gt; --16515-- scheduler: 22,725/32,791,636 major/minor sched events.
</span><br>
<span class="quotelev1">&gt; --16515--    sanity: 22726 cheap, 910 expensive checks.
</span><br>
<span class="quotelev1">&gt; --16515--    exectx: 30,011 lists, 11 contexts (avg 0 per list)
</span><br>
<span class="quotelev1">&gt; --16515--    exectx: 108 searches, 97 full compares (898 per 1000)
</span><br>
<span class="quotelev1">&gt; --16515--    exectx: 0 cmp2, 232 cmp4, 0 cmpAll
</span><br>
<span class="quotelev1">&gt; [8]+  Killed                  mpirun -np 4 valgrind -v ./lisa09EMRIT-P
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could please tell me how ti interpret the results of valgrind?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanking you in advance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Asad
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------=_Part_48219_1955003.1229850505418
</span><br>
<span class="quotelev1">&gt; Content-Type: text/html; charset=ISO-8859-1
</span><br>
<span class="quotelev1">&gt; Content-Transfer-Encoding: 7bit
</span><br>
<span class="quotelev1">&gt; Content-Disposition: inline
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;span style=&quot;font-family: verdana; font-size: 12px;&quot;&gt;&lt;p&gt;Hi Jeff,&lt;/ 
</span><br>
<span class="quotelev1">&gt; p&gt;&lt;p&gt;I have changed the position of malloc.h in header files&amp;nbsp;  
</span><br>
<span class="quotelev1">&gt; list. I moved it up above mpi.h. Now I am getting a different error  
</span><br>
<span class="quotelev1">&gt; message see following,&lt;/p&gt;
</span><br>
<span class="quotelev1">&gt; [asad_at_stat74 T]$ mpirun&amp;nbsp; --np 4 nice -10 ./lisa09EMRIT- 
</span><br>
<span class="quotelev1">&gt; P&lt;br&gt;&amp;nbsp;+--- 
</span><br>
<span class="quotelev1">&gt; [ lisa14.c ]--------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; &lt;br&gt;&amp;nbsp;| This is process #0 of 4&lt;br&gt;&amp;nbsp;|  
</span><br>
<span class="quotelev1">&gt; initialising&amp;nbsp; :&amp;nbsp; 21.12.2008&amp;nbsp; 21:59:28&lt;br&gt;Allocating  
</span><br>
<span class="quotelev1">&gt; 134217728 bytes for read buffer...&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; Allocating 134217728 bytes for read buffer...&lt;br&gt;Allocating  
</span><br>
<span class="quotelev1">&gt; 134217728 bytes for read buffer...&lt;br&gt;Allocating 134217728 bytes for  
</span><br>
<span class="quotelev1">&gt; read buffer...&lt;br&gt;Allocating 134217728 bytes for read  
</span><br>
<span class="quotelev1">&gt; buffer...&lt;br&gt;Allocating 134217728 bytes for read buffer...&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; Allocating 134217728 bytes for read buffer...&lt;br&gt;-+--&amp;gt; INJECTING  
</span><br>
<span class="quotelev1">&gt; SIGNAL...&lt;br&gt;Allocating 134217728 bytes for read buffer...&lt;br&gt;-+-- 
</span><br>
<span class="quotelev1">&gt; &amp;gt; INJECTING SIGNAL...&lt;br&gt;-+--&amp;gt; INJECTING SIGNAL...&lt;br&gt;-+--&amp;gt;  
</span><br>
<span class="quotelev1">&gt; INJECTING SIGNAL...&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; 524765&lt;br&gt;524765&lt;br&gt;524765&lt;br&gt;524765&lt;br&gt;&amp;nbsp;| initialising `TDI  
</span><br>
<span class="quotelev1">&gt; framework&amp;#39; (might take several minutes)...&lt;br&gt;Signal:6  
</span><br>
<span class="quotelev1">&gt; info.si_errno:0(Success) si_code:-6()&lt;br&gt;[0] func:/usr/lib/openmpi/ 
</span><br>
<span class="quotelev1">&gt; libopal.so.0 [0x46efd6]&lt;br&gt;[1] func:[0x110440]&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; [2] func:[0x110402]&lt;br&gt;[3] func:/lib/libc.so.6(gsignal+0x50)  
</span><br>
<span class="quotelev1">&gt; [0x2c1fa0]&lt;br&gt;[4] func:/lib/libc.so.6(abort+0x101) [0x2c38b1]&lt;br&gt;[5]  
</span><br>
<span class="quotelev1">&gt; func:/usr/lib/openmpi/libopal.so.0 [0x473d34]&lt;br&gt;[6] func:/usr/lib/ 
</span><br>
<span class="quotelev1">&gt; openmpi/libopal.so.0(free+0x36) [0x473786]&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; [7] func:./lisa09EMRIT-P(main+0x454) [0x80566f4]&lt;br&gt;[8] func:/lib/ 
</span><br>
<span class="quotelev1">&gt; libc.so.6(__libc_start_main+0xe0) [0x2aef70]&lt;br&gt;[9] func:./ 
</span><br>
<span class="quotelev1">&gt; lisa09EMRIT-P [0x804af21]&lt;br&gt;*** End of error message ***&lt;br&gt;&lt;br&gt;Its  
</span><br>
<span class="quotelev1">&gt; good that now no user defined functions in code are involved in  
</span><br>
<span class="quotelev1">&gt; error (it was giving error messages for some of my defined functions  
</span><br>
<span class="quotelev1">&gt; too). malloc.h has also been disappeared in this error message as  
</span><br>
<span class="quotelev1">&gt; was in previous message.&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; &lt;br&gt;I have used valgrind to see where the error is but I am unable  
</span><br>
<span class="quotelev1">&gt; to interpret the following valgrind output error  
</span><br>
<span class="quotelev1">&gt; message.&lt;br&gt;&lt;br&gt;&lt;br&gt;--16515--&amp;nbsp;&amp;nbsp;&amp;nbsp; object doesn&amp;#39;t  
</span><br>
<span class="quotelev1">&gt; have a symbol table&lt;br&gt;--16515-- Reading syms from /usr/lib/openmpi/ 
</span><br>
<span class="quotelev1">&gt; openmpi/mca_osc_pt2pt.so (0x4114000)&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; --16515--&amp;nbsp;&amp;nbsp;&amp;nbsp; object doesn&amp;#39;t have a symbol  
</span><br>
<span class="quotelev1">&gt; table&lt;br&gt;==16513== Warning: set address range perms: large range  
</span><br>
<span class="quotelev1">&gt; 536870912 (defined)&lt;br&gt;==16512== Warning: set address range perms:  
</span><br>
<span class="quotelev1">&gt; large range 536870912 (defined)&lt;br&gt;==16514== Warning: set address  
</span><br>
<span class="quotelev1">&gt; range perms: large range 536870912 (defined)&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; ==16515== Warning: set address range perms: large range 536870912  
</span><br>
<span class="quotelev1">&gt; (defined)&lt;br&gt;&amp;nbsp;+--- 
</span><br>
<span class="quotelev1">&gt; [ lisa14.c ]--------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; &lt;br&gt;&amp;nbsp;| This is process #0 of 4&lt;br&gt;&amp;nbsp;|  
</span><br>
<span class="quotelev1">&gt; initialising&amp;nbsp; :&amp;nbsp; 21.12.2008&amp;nbsp; 21:15:37&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; Allocating 134217728 bytes for read buffer...&lt;br&gt;==16515== Warning:  
</span><br>
<span class="quotelev1">&gt; set address range perms: large range 134221824  
</span><br>
<span class="quotelev1">&gt; (defined)&lt;br&gt;Allocating 134217728 bytes for read  
</span><br>
<span class="quotelev1">&gt; buffer...&lt;br&gt;==16514== Warning: set address range perms: large range  
</span><br>
<span class="quotelev1">&gt; 134221824 (defined)&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; Allocating 134217728 bytes for read buffer...&lt;br&gt;==16513== Warning:  
</span><br>
<span class="quotelev1">&gt; set address range perms: large range 134221824  
</span><br>
<span class="quotelev1">&gt; (defined)&lt;br&gt;Allocating 134217728 bytes for read  
</span><br>
<span class="quotelev1">&gt; buffer...&lt;br&gt;==16512== Warning: set address range perms: large range  
</span><br>
<span class="quotelev1">&gt; 134221824 (defined)&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; ==16515== Warning: set address range perms: large range 134217728  
</span><br>
<span class="quotelev1">&gt; (defined)&lt;br&gt;==16514== Warning: set address range perms: large range  
</span><br>
<span class="quotelev1">&gt; 134217728 (defined)&lt;br&gt;==16513== Warning: set address range perms:  
</span><br>
<span class="quotelev1">&gt; large range 134217728 (defined)&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; ==16512== Warning: set address range perms: large range 134217728  
</span><br>
<span class="quotelev1">&gt; (defined)&lt;br&gt;==16515== Warning: set address range perms: large range  
</span><br>
<span class="quotelev1">&gt; 134221824 (noaccess)&lt;br&gt;==16514== Warning: set address range perms:  
</span><br>
<span class="quotelev1">&gt; large range 134221824 (noaccess)&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; ==16513== Warning: set address range perms: large range 134221824  
</span><br>
<span class="quotelev1">&gt; (noaccess)&lt;br&gt;==16512== Warning: set address range perms: large  
</span><br>
<span class="quotelev1">&gt; range 134221824 (noaccess)&lt;br&gt;--16515-- memcheck GC: 1024 nodes,  
</span><br>
<span class="quotelev1">&gt; 1024 survivors (100.0%)&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; --16515-- memcheck GC: increase table size to 2048&lt;br&gt;--16513--  
</span><br>
<span class="quotelev1">&gt; memcheck GC: 1024 nodes, 1024 survivors (100.0%)&lt;br&gt;--16513--  
</span><br>
<span class="quotelev1">&gt; memcheck GC: increase table size to 2048&lt;br&gt;--16514-- memcheck GC:  
</span><br>
<span class="quotelev1">&gt; 1024 nodes, 1024 survivors (100.0%)&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; --16514-- memcheck GC: increase table size to 2048&lt;br&gt;--16512--  
</span><br>
<span class="quotelev1">&gt; memcheck GC: 1024 nodes, 1024 survivors (100.0%)&lt;br&gt;--16512--  
</span><br>
<span class="quotelev1">&gt; memcheck GC: increase table size to 2048&lt;br&gt;--16513-- memcheck GC:  
</span><br>
<span class="quotelev1">&gt; 2048 nodes, 2048 survivors (100.0%)&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; --16513-- memcheck GC: increase table size to 4096&lt;br&gt;--16514--  
</span><br>
<span class="quotelev1">&gt; memcheck GC: 2048 nodes, 2048 survivors (100.0%)&lt;br&gt;--16514--  
</span><br>
<span class="quotelev1">&gt; memcheck GC: increase table size to 4096&lt;br&gt;--16515-- memcheck GC:  
</span><br>
<span class="quotelev1">&gt; 2048 nodes, 2048 survivors (100.0%)&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; --16515-- memcheck GC: increase table size to 4096&lt;br&gt;--16512--  
</span><br>
<span class="quotelev1">&gt; memcheck GC: 2048 nodes, 2048 survivors (100.0%)&lt;br&gt;--16512--  
</span><br>
<span class="quotelev1">&gt; memcheck GC: increase table size to 4096&lt;br&gt;Allocating 134217728  
</span><br>
<span class="quotelev1">&gt; bytes for read buffer...&lt;br&gt;==16515== Warning: set address range  
</span><br>
<span class="quotelev1">&gt; perms: large range 134221824 (defined)&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; Allocating 134217728 bytes for read buffer...&lt;br&gt;==16513== Warning:  
</span><br>
<span class="quotelev1">&gt; set address range perms: large range 134221824  
</span><br>
<span class="quotelev1">&gt; (defined)&lt;br&gt;Allocating 134217728 bytes for read  
</span><br>
<span class="quotelev1">&gt; buffer...&lt;br&gt;==16514== Warning: set address range perms: large range  
</span><br>
<span class="quotelev1">&gt; 134221824 (defined)&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; ==16515== Warning: set address range perms: large range 134217728  
</span><br>
<span class="quotelev1">&gt; (defined)&lt;br&gt;==16513== Warning: set address range perms: large range  
</span><br>
<span class="quotelev1">&gt; 134217728 (defined)&lt;br&gt;==16514== Warning: set address range perms:  
</span><br>
<span class="quotelev1">&gt; large range 134217728 (defined)&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; ==16515== Warning: set address range perms: large range 134221824  
</span><br>
<span class="quotelev1">&gt; (noaccess)&lt;br&gt;Allocating 134217728 bytes for read  
</span><br>
<span class="quotelev1">&gt; buffer...&lt;br&gt;==16512== Warning: set address range perms: large range  
</span><br>
<span class="quotelev1">&gt; 134221824 (defined)&lt;br&gt;==16513== Warning: set address range perms:  
</span><br>
<span class="quotelev1">&gt; large range 134221824 (noaccess)&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; ==16512== Warning: set address range perms: large range 134217728  
</span><br>
<span class="quotelev1">&gt; (defined)&lt;br&gt;==16514== Warning: set address range perms: large range  
</span><br>
<span class="quotelev1">&gt; 134221824 (noaccess)&lt;br&gt;==16512== Warning: set address range perms:  
</span><br>
<span class="quotelev1">&gt; large range 134221824 (noaccess)&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; -+--&amp;gt; INJECTING SIGNAL...&lt;br&gt;-+--&amp;gt; INJECTING SIGNAL...&lt;br&gt;-+-- 
</span><br>
<span class="quotelev1">&gt; &amp;gt; INJECTING SIGNAL...&lt;br&gt;-+--&amp;gt; INJECTING  
</span><br>
<span class="quotelev1">&gt; SIGNAL...&lt;br&gt;524765&lt;br&gt;524765&lt;br&gt;524765&lt;br&gt;524765&lt;br&gt;Signal:6  
</span><br>
<span class="quotelev1">&gt; info.si_errno:0(Success) si_code:-6()&lt;br&gt;--16515-- Reading syms  
</span><br>
<span class="quotelev1">&gt; from /lib/libgcc_s-4.1.2-20070925.so.1 (0x794000)&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; --16515--&amp;nbsp;&amp;nbsp;&amp;nbsp; object doesn&amp;#39;t have a symbol  
</span><br>
<span class="quotelev1">&gt; table&lt;br&gt;[0] func:/usr/lib/openmpi/libopal.so.0 [0x46efd6]&lt;br&gt;[1]  
</span><br>
<span class="quotelev1">&gt; func:/lib/libpthread.so.0 [0x443290]&lt;br&gt;[2] func:/lib/ld-linux.so.2  
</span><br>
<span class="quotelev1">&gt; [0x2767f2]&lt;br&gt;[3] func:/lib/libc.so.6(gsignal+0x50) [0x2c1fa0]&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; [4] func:/lib/libc.so.6(abort+0x101) [0x2c38b1]&lt;br&gt;[5] func:/usr/lib/ 
</span><br>
<span class="quotelev1">&gt; openmpi/libopal.so.0 [0x473d34]&lt;br&gt;[6] func:/usr/lib/openmpi/ 
</span><br>
<span class="quotelev1">&gt; libopal.so.0(free+0x36) [0x473786]&lt;br&gt;[7] func:./lisa09EMRIT-P(main 
</span><br>
<span class="quotelev1">&gt; +0x44c) [0x80566ec]&lt;br&gt;[8] func:/lib/libc.so.6(__libc_start_main 
</span><br>
<span class="quotelev1">&gt; +0xe0) [0x2aef70]&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; [9] func:./lisa09EMRIT-P [0x804af21]&lt;br&gt;*** End of error message  
</span><br>
<span class="quotelev1">&gt; ***&lt;br&gt;==16515== &lt;br&gt;==16515== Process terminating with default  
</span><br>
<span class="quotelev1">&gt; action of signal 6 (SIGABRT)&lt;br&gt;==16515==&amp;nbsp;&amp;nbsp;&amp;nbsp; at  
</span><br>
<span class="quotelev1">&gt; 0x2C1FA0: raise (in /lib/&lt;a href=&quot;<a href="http://libc-2.6.so">http://libc-2.6.so</a>&quot;&gt;libc-2.6.so&lt;/ 
</span><br>
<span class="quotelev1">&gt; a&gt;)&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; ==16515==&amp;nbsp;&amp;nbsp;&amp;nbsp; by 0x2C39FD: abort (in /lib/&lt;a href=&quot;<a href="http://libc-2.6.so">http://libc-2.6.so</a> 
</span><br>
<span class="quotelev1">&gt; &quot;&gt;libc-2.6.so&lt;/a&gt;)&lt;br&gt;==16515==&amp;nbsp;&amp;nbsp;&amp;nbsp; by 0x473D33:  
</span><br>
<span class="quotelev1">&gt; (within /usr/lib/openmpi/libopal.so. 
</span><br>
<span class="quotelev1">&gt; 0.0.0)&lt;br&gt;==16515==&amp;nbsp;&amp;nbsp;&amp;nbsp; by 0x473785: free (in /usr/lib/ 
</span><br>
<span class="quotelev1">&gt; openmpi/libopal.so.0.0.0)&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; ==16515==&amp;nbsp;&amp;nbsp;&amp;nbsp; by 0x80566EB: main (in /home/phd/asad/ 
</span><br>
<span class="quotelev1">&gt; MLDCs/T/lisa09EMRIT-P)&lt;br&gt;==16515== &lt;br&gt;==16515== ERROR SUMMARY: 0  
</span><br>
<span class="quotelev1">&gt; errors from 0 contexts (suppressed: 108 from 1)&lt;br&gt;--16515--  
</span><br>
<span class="quotelev1">&gt; &lt;br&gt;--16515-- supp:&amp;nbsp; 108 dl-hack3&lt;br&gt;==16515== malloc/free: in  
</span><br>
<span class="quotelev1">&gt; use at exit: 0 bytes in 0 blocks.&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; ==16515== malloc/free: 0 allocs, 0 frees, 0 bytes  
</span><br>
<span class="quotelev1">&gt; allocated.&lt;br&gt;==16515== &lt;br&gt;==16515== All heap blocks were freed --  
</span><br>
<span class="quotelev1">&gt; no leaks are possible.&lt;br&gt;--16515--&amp;nbsp; memcheck: sanity checks:  
</span><br>
<span class="quotelev1">&gt; 22725 cheap, 910 expensive&lt;br&gt;--16515--&amp;nbsp; memcheck: auxmaps: 0  
</span><br>
<span class="quotelev1">&gt; auxmap entries (0k, 0M) in use&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; --16515--&amp;nbsp; memcheck: auxmaps: 0 searches, 0  
</span><br>
<span class="quotelev1">&gt; comparisons&lt;br&gt;--16515--&amp;nbsp; memcheck: SMs:  
</span><br>
<span class="quotelev1">&gt; n_issued&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; = 6014 (96224k,  
</span><br>
<span class="quotelev1">&gt; 93M)&lt;br&gt;--16515--&amp;nbsp; memcheck: SMs: n_deissued&amp;nbsp;&amp;nbsp;&amp;nbsp;  
</span><br>
<span class="quotelev1">&gt; = 4726 (75616k, 73M)&lt;br&gt;--16515--&amp;nbsp; memcheck: SMs:  
</span><br>
<span class="quotelev1">&gt; max_noaccess&amp;nbsp; = 65535 (1048560k, 1023M)&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; --16515--&amp;nbsp; memcheck: SMs: max_undefined = 38 (608k,  
</span><br>
<span class="quotelev1">&gt; 0M)&lt;br&gt;--16515--&amp;nbsp; memcheck: SMs: max_defined&amp;nbsp;&amp;nbsp; =  
</span><br>
<span class="quotelev1">&gt; 10813 (173008k, 168M)&lt;br&gt;--16515--&amp;nbsp; memcheck: SMs:  
</span><br>
<span class="quotelev1">&gt; max_non_DSM&amp;nbsp;&amp;nbsp; = 3109 (49744k, 48M)&lt;br&gt;--16515--&amp;nbsp;  
</span><br>
<span class="quotelev1">&gt; memcheck: max sec V bit nodes:&amp;nbsp;&amp;nbsp;&amp;nbsp; 2094 (106k, 0M)&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; --16515--&amp;nbsp; memcheck: set_sec_vbits8 calls: 3371606 (new: 2094,  
</span><br>
<span class="quotelev1">&gt; updates: 3369512)&lt;br&gt;--16515--&amp;nbsp; memcheck: max shadow mem  
</span><br>
<span class="quotelev1">&gt; size:&amp;nbsp;&amp;nbsp; 50154k, 48M&lt;br&gt;--16515--  
</span><br>
<span class="quotelev1">&gt; translate 
</span><br>
<span class="quotelev1">&gt; :&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;  
</span><br>
<span class="quotelev1">&gt; fast SP updates identified: 23,603 ( 89.1%)&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; --16515-- translate:&amp;nbsp;&amp;nbsp; generic_known SP updates  
</span><br>
<span class="quotelev1">&gt; identified: 2,000 (&amp;nbsp; 7.5%)&lt;br&gt;--16515-- translate:  
</span><br>
<span class="quotelev1">&gt; generic_unknown SP updates identified: 877 (&amp;nbsp; 3.3%)&lt;br&gt;--16515-- 
</span><br>
<span class="quotelev1">&gt; &amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; tt/tc: 625,692 tt lookups requiring 672,349  
</span><br>
<span class="quotelev1">&gt; probes&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; --16515--&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; tt/tc: 625,692 fast-cache updates,  
</span><br>
<span class="quotelev1">&gt; 9 flushes&lt;br&gt;--16515--&amp;nbsp; transtab:  
</span><br>
<span class="quotelev1">&gt; new&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; 20,764 (798,227 -&amp;gt;  
</span><br>
<span class="quotelev1">&gt; 14,916,839; ratio 186:10) [0 scs]&lt;br&gt;--16515--&amp;nbsp; transtab:  
</span><br>
<span class="quotelev1">&gt; dumped&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; 0 (0 -&amp;gt; ??)&lt;br&gt;--16515--&amp;nbsp;  
</span><br>
<span class="quotelev1">&gt; transtab: discarded&amp;nbsp; 193 (3,337 -&amp;gt; ??)&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; --16515-- scheduler: 2,272,550,211 jumps (bb entries).&lt;br&gt;--16515--  
</span><br>
<span class="quotelev1">&gt; scheduler: 22,725/32,791,636 major/minor sched events.&lt;br&gt;--16515-- 
</span><br>
<span class="quotelev1">&gt; &amp;nbsp;&amp;nbsp;&amp;nbsp; sanity: 22726 cheap, 910 expensive  
</span><br>
<span class="quotelev1">&gt; checks.&lt;br&gt;--16515--&amp;nbsp;&amp;nbsp;&amp;nbsp; exectx: 30,011 lists, 11  
</span><br>
<span class="quotelev1">&gt; contexts (avg 0 per list)&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; --16515--&amp;nbsp;&amp;nbsp;&amp;nbsp; exectx: 108 searches, 97 full compares  
</span><br>
<span class="quotelev1">&gt; (898 per 1000)&lt;br&gt;--16515--&amp;nbsp;&amp;nbsp;&amp;nbsp; exectx: 0 cmp2, 232  
</span><br>
<span class="quotelev1">&gt; cmp4, 0 cmpAll&lt;br&gt;[8]+&amp;nbsp;  
</span><br>
<span class="quotelev1">&gt; Killed 
</span><br>
<span class="quotelev1">&gt; &amp;nbsp 
</span><br>
<span class="quotelev1">&gt; ;&amp;nbsp 
</span><br>
<span class="quotelev1">&gt; ;&amp;nbsp 
</span><br>
<span class="quotelev1">&gt; ;&amp;nbsp 
</span><br>
<span class="quotelev1">&gt; ;&amp;nbsp 
</span><br>
<span class="quotelev1">&gt; ;&amp;nbsp 
</span><br>
<span class="quotelev1">&gt; ;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;  
</span><br>
<span class="quotelev1">&gt; mpirun -np 4 valgrind -v ./lisa09EMRIT-P&lt;br&gt;&lt;br&gt;Could please tell me  
</span><br>
<span class="quotelev1">&gt; how ti interpret the results of valgrind?&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; &lt;br&gt;Thanking you in advance.&lt;br&gt;&lt;br&gt;Asad&lt;br&gt;&lt;/span&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------=_Part_48219_1955003.1229850505418--
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --===============1267833741==
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;
</span><br>
<span class="quotelev1">&gt; MIME-Version: 1.0
</span><br>
<span class="quotelev1">&gt; Content-Transfer-Encoding: 7bit
</span><br>
<span class="quotelev1">&gt; Content-Disposition: inline
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; --===============1267833741==--
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7569.php">Jeff Squyres: "Re: [OMPI users] Bug in 1.3 nightly"</a>
<li><strong>Previous message:</strong> <a href="7567.php">Asad Ali: "Re: [OMPI users] MPI Error"</a>
<li><strong>In reply to:</strong> <a href="7567.php">Asad Ali: "Re: [OMPI users] MPI Error"</a>
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
