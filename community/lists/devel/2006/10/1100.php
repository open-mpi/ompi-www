<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Oct  8 10:52:27 2006" -->
<!-- isoreceived="20061008145227" -->
<!-- sent="Sat, 7 Oct 2006 22:34:43 -0400" -->
<!-- isosent="20061008023443" -->
<!-- name="Karl Dockendorf" -->
<!-- email="karld_at_[hidden]" -->
<!-- subject="[OMPI devel] Segment Faults in MPI_INIT" -->
<!-- id="84D2C2D6-DB34-49D1-81ED-A69A2212C68D_at_ufl.edu" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Karl Dockendorf (<em>karld_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-07 22:34:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1101.php">Lisandro Dalcin: "[OMPI devel] MPI_XXX_{get|set}_errhandler in general , and for files in particular"</a>
<li><strong>Previous message:</strong> <a href="1099.php">Jeff Squyres: "Re: [OMPI devel] problem with MPI_[Pack|Unpack]_external"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1116.php">Jeff Squyres: "Re: [OMPI devel] Segment Faults in MPI_INIT"</a>
<li><strong>Reply:</strong> <a href="1116.php">Jeff Squyres: "Re: [OMPI devel] Segment Faults in MPI_INIT"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just (yesterday) made the move from LAM/MPI to OpenMPI.  The  
<br>
configure / compile / install went smoothly (version 1.1.1).   
<br>
However, after recompiling my source and executing it usually crashes  
<br>
in MPI_INIT.  Seems to be coming from the same place MOST of the  
<br>
time.  Usually spits out a message something like this.
<br>
<p>Signal:10 info.si_errno:0(Unknown error: 0) si_code:1(BUS_ADRALN)
<br>
Failing at addr:0xfdff8018
<br>
*** End of error message ***
<br>
Signal:10 info.si_errno:0(Unknown error: 0) si_code:1(BUS_ADRALN)
<br>
Failing at addr:0x2807000
<br>
*** End of error message ***
<br>
<p>The test system (before moving back to the cluster) is a G4 PowerBook  
<br>
with OS 10.4.8 (not using Xgrid at the moment).  I'm oversubscribing  
<br>
it (2 processes, it knows there is only one).  Attached are the  
<br>
config info from the install.  And listed below seems to be the crash  
<br>
point from the mca_bml_r2_progress function.  Any help is much  
<br>
appreciated.
<br>
<p>Karl
<br>
<p>CRASH 1:
<br>
Command: nm
<br>
Path:    /Users/karl/programs/nm/build/Release/nm
<br>
Parent:  orted [830]
<br>
<p>Version: ??? (???)
<br>
<p>PID:    834
<br>
Thread: 0
<br>
<p>Exception:  EXC_BAD_ACCESS (0x0001)
<br>
Codes:      KERN_INVALID_ADDRESS (0x0001) at 0xfdff8018
<br>
<p>Thread 0 Crashed:
<br>
0   mca_btl_sm.so       0x003abbec mca_btl_sm_component_progress + 3164
<br>
1   mca_bml_r2.so       0x003a0d38 mca_bml_r2_progress + 88
<br>
2   libopal.0.dylib     0x0032309c opal_progress + 236
<br>
3   mca_oob_tcp.so      0x00024f14 mca_oob_tcp_msg_wait + 52
<br>
4   mca_oob_tcp.so      0x0002a0a8 mca_oob_tcp_recv + 1128
<br>
5   liborte.0.dylib     0x002f07b0 mca_oob_recv_packed + 80
<br>
6   mca_gpr_proxy.so    0x00059bd4 orte_gpr_proxy_put + 804
<br>
7   liborte.0.dylib     0x00304318 orte_soh_base_set_proc_soh + 968
<br>
8   libmpi.0.dylib      0x00222d88 ompi_mpi_init + 1816
<br>
9   libmpi.0.dylib      0x00248b50 MPI_Init + 240
<br>
10  nm                  0x00002e60 init_model + 48
<br>
11  nm                  0x00002c70 main + 48
<br>
12  nm                  0x00002494 _start + 340 (crt.c:272)
<br>
13  nm                  0x0000233c start + 60
<br>
<p>Thread 0 crashed with PPC Thread State 64:
<br>
&nbsp;&nbsp;&nbsp;srr0: 0x00000000003abbec srr1:  
<br>
0x000000000200f930                        vrsave: 0x0000000000000000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cr: 0x28004222          xer: 0x0000000000000004   lr:  
<br>
0x00000000003aafa0  ctr: 0x00000000003aaf90
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;r0: 0x0000000000000000   r1: 0x00000000bfffe8d0   r2:  
<br>
0x00000000fdff8000   r3: 0x0000000000000001
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;r4: 0x0000000000049814   r5: 0x00000000bfffe888   r6:  
<br>
0x0000000000000000   r7: 0x00000000fdff8000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;r8: 0x0000000000000004   r9: 0x00000000004177e0  r10:  
<br>
0x0000000000000004  r11: 0x0000000000000000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;r12: 0x00000000003aaf90  r13: 0x00000000fffffffe  r14:  
<br>
0x00000000003ad004  r15: 0x00000000003441e8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;r16: 0x00000000003ad8c4  r17: 0x0000000000000004  r18:  
<br>
0x0000000000000000  r19: 0x0000000000000000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;r20: 0x0000000000000014  r21: 0x0000000000000000  r22:  
<br>
0x00000000003ae0c4  r23: 0x0000000000000001
<br>
&nbsp;&nbsp;&nbsp;&nbsp;r24: 0x0000000000000000  r25: 0x0000000000000004  r26:  
<br>
0x0000000000029c50  r27: 0x0000000000000000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;r28: 0x0000000000000000  r29: 0x0000000000000001  r30:  
<br>
0x0000000000000000  r31: 0x00000000003aafa0
<br>
<p><p><p>CRASH 2:
<br>
Command: nm
<br>
Path:    /Users/karl/programs/nm/build/Release/nm
<br>
Parent:  orted [830]
<br>
<p>Version: ??? (???)
<br>
<p>PID:    832
<br>
Thread: 0
<br>
<p>Exception:  EXC_BAD_ACCESS (0x0001)
<br>
Codes:      KERN_PROTECTION_FAILURE (0x0002) at 0x00000000
<br>
<p>Thread 0 Crashed:
<br>
0   &lt;&lt;00000000&gt;&gt;        0x00000000 0 + 0
<br>
1   mca_bml_r2.so       0x003a0d38 mca_bml_r2_progress + 88
<br>
2   libopal.0.dylib     0x0032309c opal_progress + 236
<br>
3   mca_oob_tcp.so      0x00024f14 mca_oob_tcp_msg_wait + 52
<br>
4   mca_oob_tcp.so      0x0002a0a8 mca_oob_tcp_recv + 1128
<br>
5   liborte.0.dylib     0x002f07b0 mca_oob_recv_packed + 80
<br>
6   mca_gpr_proxy.so    0x00059bd4 orte_gpr_proxy_put + 804
<br>
7   liborte.0.dylib     0x00304318 orte_soh_base_set_proc_soh + 968
<br>
8   libmpi.0.dylib      0x00222d88 ompi_mpi_init + 1816
<br>
9   libmpi.0.dylib      0x00248b50 MPI_Init + 240
<br>
10  nm                  0x00002e60 init_model + 48
<br>
11  nm                  0x00002c70 main + 48
<br>
12  nm                  0x00002494 _start + 340 (crt.c:272)
<br>
13  nm                  0x0000233c start + 60
<br>
<p>Thread 0 crashed with PPC Thread State 64:
<br>
&nbsp;&nbsp;&nbsp;srr0: 0x0000000000000000 srr1:  
<br>
0x000000004000d930                        vrsave: 0x0000000000000000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cr: 0x28004222          xer: 0x0000000000000004   lr:  
<br>
0x00000000003abe5c  ctr: 0x0000000000000000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;r0: 0x0000000000000000   r1: 0x00000000bfffe8d0   r2:  
<br>
0x0000000002008000   r3: 0x00000000003ad864
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;r4: 0x0000000000000000   r5: 0x0000000002008000   r6:  
<br>
0x0000000000000000   r7: 0x0000000002008000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;r8: 0x00000000003ad8c4   r9: 0x00000000004177e0  r10:  
<br>
0x0000000000000000  r11: 0x0000000000000000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;r12: 0x0000000000000000  r13: 0x00000000fffffffe  r14:  
<br>
0x00000000003ad004  r15: 0x00000000003441e8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;r16: 0x00000000003ad8c4  r17: 0x0000000000000000  r18:  
<br>
0x0000000000000000  r19: 0x0000000000000000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;r20: 0x0000000000000000  r21: 0x0000000000000000  r22:  
<br>
0x00000000003ae0c4  r23: 0x00000000003441e8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;r24: 0x0000000000000000  r25: 0x0000000002008000  r26:  
<br>
0x00000000003ae0c4  r27: 0x0000000000000001
<br>
&nbsp;&nbsp;&nbsp;&nbsp;r28: 0x0000000000000004  r29: 0x0000000000000001  r30:  
<br>
0x0000000000000000  r31: 0x00000000003aafa0
<br>
<p><p><p><p>CRASH 3:
<br>
Command: nm
<br>
Path:    /Users/karl/programs/nm/build/Debug/nm
<br>
Parent:  orted [1790]
<br>
<p>Version: ??? (???)
<br>
<p>PID:    1794
<br>
Thread: 0
<br>
<p>Exception:  EXC_BAD_ACCESS (0x0001)
<br>
Codes:      KERN_INVALID_ADDRESS (0x0001) at 0xfdff8018
<br>
<p>Thread 0 Crashed:
<br>
0   mca_btl_sm.so       0x003bcbec mca_btl_sm_component_progress + 3164
<br>
1   mca_bml_r2.so       0x003b1d38 mca_bml_r2_progress + 88
<br>
2   libopal.0.dylib     0x0032309c opal_progress + 236
<br>
3   mca_oob_tcp.so      0x00055f14 mca_oob_tcp_msg_wait + 52
<br>
4   mca_oob_tcp.so      0x0005b0a8 mca_oob_tcp_recv + 1128
<br>
5   liborte.0.dylib     0x002f07b0 mca_oob_recv_packed + 80
<br>
6   mca_gpr_proxy.so    0x00068bd4 orte_gpr_proxy_put + 804
<br>
7   liborte.0.dylib     0x00304318 orte_soh_base_set_proc_soh + 968
<br>
8   libmpi.0.dylib      0x00222d88 ompi_mpi_init + 1816
<br>
9   libmpi.0.dylib      0x00248b50 MPI_Init + 240
<br>
10  nm                  0x000028fc init_model + 80 (model.c:16)
<br>
11  nm                  0x00002644 main + 72 (main.c:16)
<br>
12  nm                  0x00001e54 _start + 340 (crt.c:272)
<br>
13  nm                  0x00001cfc start + 60
<br>
<p>Thread 0 crashed with PPC Thread State 64:
<br>
&nbsp;&nbsp;&nbsp;srr0: 0x00000000003bcbec srr1:  
<br>
0x000000000200f930                        vrsave: 0x0000000000000000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cr: 0x28004222          xer: 0x0000000000000004   lr:  
<br>
0x00000000003bbfa0  ctr: 0x00000000003bbf90
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;r0: 0x0000000000000000   r1: 0x00000000bfffe8f0   r2:  
<br>
0x00000000fdff8000   r3: 0x0000000000000001
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;r4: 0x0000000000049814   r5: 0x00000000bfffe8a8   r6:  
<br>
0x0000000000000000   r7: 0x00000000fdff8000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;r8: 0x0000000000000004   r9: 0x00000000004177d0  r10:  
<br>
0x0000000000000004  r11: 0x0000000000000000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;r12: 0x00000000003bbf90  r13: 0x00000000fffffffe  r14:  
<br>
0x00000000003be004  r15: 0x00000000003441e8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;r16: 0x00000000003be8c4  r17: 0x0000000000000004  r18:  
<br>
0x0000000000000000  r19: 0x0000000000000000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;r20: 0x0000000000000014  r21: 0x0000000000000000  r22:  
<br>
0x00000000003bf0c4  r23: 0x0000000000000001
<br>
&nbsp;&nbsp;&nbsp;&nbsp;r24: 0x0000000000000000  r25: 0x0000000000000004  r26:  
<br>
0x000000000005ac50  r27: 0x0000000000000000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;r28: 0x0000000000000000  r29: 0x0000000000000001  r30:  
<br>
0x0000000000000000  r31: 0x00000000003bbfa0
<br>
<p><p><p>CRASH 4:
<br>
Command: nm
<br>
Path:    /Users/karl/programs/nm/build/Debug/nm
<br>
Parent:  orted [1790]
<br>
<p>Version: ??? (???)
<br>
<p>PID:    1792
<br>
Thread: 0
<br>
<p>Exception:  EXC_BAD_ACCESS (0x0001)
<br>
Codes:      KERN_PROTECTION_FAILURE (0x0002) at 0x00000000
<br>
<p>Thread 0 Crashed:
<br>
0   &lt;&lt;00000000&gt;&gt;        0x00000000 0 + 0
<br>
1   mca_bml_r2.so       0x003b1d38 mca_bml_r2_progress + 88
<br>
2   libopal.0.dylib     0x0032309c opal_progress + 236
<br>
3   mca_oob_tcp.so      0x00055f14 mca_oob_tcp_msg_wait + 52
<br>
4   mca_oob_tcp.so      0x0005b0a8 mca_oob_tcp_recv + 1128
<br>
5   liborte.0.dylib     0x002f07b0 mca_oob_recv_packed + 80
<br>
6   mca_gpr_proxy.so    0x00068bd4 orte_gpr_proxy_put + 804
<br>
7   liborte.0.dylib     0x00304318 orte_soh_base_set_proc_soh + 968
<br>
8   libmpi.0.dylib      0x00222d88 ompi_mpi_init + 1816
<br>
9   libmpi.0.dylib      0x00248b50 MPI_Init + 240
<br>
10  nm                  0x000028fc init_model + 80 (model.c:16)
<br>
11  nm                  0x00002644 main + 72 (main.c:16)
<br>
12  nm                  0x00001e54 _start + 340 (crt.c:272)
<br>
13  nm                  0x00001cfc start + 60
<br>
<p>Thread 0 crashed with PPC Thread State 64:
<br>
&nbsp;&nbsp;&nbsp;srr0: 0x0000000000000000 srr1:  
<br>
0x000000004000d930                        vrsave: 0x0000000000000000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cr: 0x28004222          xer: 0x0000000000000004   lr:  
<br>
0x00000000003bce5c  ctr: 0x0000000000000000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;r0: 0x0000000000000000   r1: 0x00000000bfffe8f0   r2:  
<br>
0x0000000002008000   r3: 0x00000000003be864
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;r4: 0x0000000000000000   r5: 0x0000000002008000   r6:  
<br>
0x0000000000000000   r7: 0x0000000002008000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;r8: 0x00000000003be8c4   r9: 0x00000000004177d0  r10:  
<br>
0x0000000000000000  r11: 0x0000000000000000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;r12: 0x0000000000000000  r13: 0x00000000fffffffe  r14:  
<br>
0x00000000003be004  r15: 0x00000000003441e8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;r16: 0x00000000003be8c4  r17: 0x0000000000000000  r18:  
<br>
0x0000000000000000  r19: 0x0000000000000000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;r20: 0x0000000000000000  r21: 0x0000000000000000  r22:  
<br>
0x00000000003bf0c4  r23: 0x00000000003441e8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;r24: 0x0000000000000000  r25: 0x0000000002008000  r26:  
<br>
0x00000000003bf0c4  r27: 0x0000000000000001
<br>
&nbsp;&nbsp;&nbsp;&nbsp;r28: 0x0000000000000004  r29: 0x0000000000000001  r30:  
<br>
0x0000000000000000  r31: 0x00000000003bbfa0
<br>
<p><p><p><p><p><p>&#239;&#191;&#188;
<br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-1100/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-1100/info.tar.gz">info.tar.gz</a>
</ul>
<!-- attachment="info.tar.gz" -->
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-1100/03-attachment">attachment</a>
</ul>
<!-- attachment="03-attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1101.php">Lisandro Dalcin: "[OMPI devel] MPI_XXX_{get|set}_errhandler in general , and for files in particular"</a>
<li><strong>Previous message:</strong> <a href="1099.php">Jeff Squyres: "Re: [OMPI devel] problem with MPI_[Pack|Unpack]_external"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1116.php">Jeff Squyres: "Re: [OMPI devel] Segment Faults in MPI_INIT"</a>
<li><strong>Reply:</strong> <a href="1116.php">Jeff Squyres: "Re: [OMPI devel] Segment Faults in MPI_INIT"</a>
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
