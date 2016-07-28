<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Oct 14 07:18:10 2006" -->
<!-- isoreceived="20061014111810" -->
<!-- sent="Fri, 13 Oct 2006 13:19:50 -0700" -->
<!-- isosent="20061013201950" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Segment Faults in MPI_INIT" -->
<!-- id="87A8C71C-45A1-45B5-A5FF-40A826B801B3_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="84D2C2D6-DB34-49D1-81ED-A69A2212C68D_at_ufl.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-13 16:19:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1117.php">Jeff Squyres: "Re: [OMPI devel] MPI_XXX_{get|set}_errhandler in general , and for files in particular"</a>
<li><strong>Previous message:</strong> <a href="1115.php">Brian Barrett: "[OMPI devel] configure changes (ooops!)"</a>
<li><strong>In reply to:</strong> <a href="1100.php">Karl Dockendorf: "[OMPI devel] Segment Faults in MPI_INIT"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Karl --
<br>
<p>Yikes.  This looks like an alignment or memory write ordering kind of  
<br>
error; I have a dim recollection about doing some fixes for this, but  
<br>
am on a plane at the moment and cannot check the SVN logs.
<br>
<p>Could you try the latest 1.1.2 RC and see if the problem still occurs  
<br>
for you?  It's available on the general download page on the web site.
<br>
<p>Thanks!
<br>
<p><p>On Oct 7, 2006, at 7:34 PM, Karl Dockendorf wrote:
<br>
<p><span class="quotelev1">&gt; I just (yesterday) made the move from LAM/MPI to OpenMPI.  The  
</span><br>
<span class="quotelev1">&gt; configure / compile / install went smoothly (version 1.1.1).   
</span><br>
<span class="quotelev1">&gt; However, after recompiling my source and executing it usually  
</span><br>
<span class="quotelev1">&gt; crashes in MPI_INIT.  Seems to be coming from the same place MOST  
</span><br>
<span class="quotelev1">&gt; of the time.  Usually spits out a message something like this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Signal:10 info.si_errno:0(Unknown error: 0) si_code:1(BUS_ADRALN)
</span><br>
<span class="quotelev1">&gt; Failing at addr:0xfdff8018
</span><br>
<span class="quotelev1">&gt; *** End of error message ***
</span><br>
<span class="quotelev1">&gt; Signal:10 info.si_errno:0(Unknown error: 0) si_code:1(BUS_ADRALN)
</span><br>
<span class="quotelev1">&gt; Failing at addr:0x2807000
</span><br>
<span class="quotelev1">&gt; *** End of error message ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The test system (before moving back to the cluster) is a G4  
</span><br>
<span class="quotelev1">&gt; PowerBook with OS 10.4.8 (not using Xgrid at the moment).  I'm  
</span><br>
<span class="quotelev1">&gt; oversubscribing it (2 processes, it knows there is only one).   
</span><br>
<span class="quotelev1">&gt; Attached are the config info from the install.  And listed below  
</span><br>
<span class="quotelev1">&gt; seems to be the crash point from the mca_bml_r2_progress function.   
</span><br>
<span class="quotelev1">&gt; Any help is much appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Karl
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CRASH 1:
</span><br>
<span class="quotelev1">&gt; Command: nm
</span><br>
<span class="quotelev1">&gt; Path:    /Users/karl/programs/nm/build/Release/nm
</span><br>
<span class="quotelev1">&gt; Parent:  orted [830]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Version: ??? (???)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PID:    834
</span><br>
<span class="quotelev1">&gt; Thread: 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Exception:  EXC_BAD_ACCESS (0x0001)
</span><br>
<span class="quotelev1">&gt; Codes:      KERN_INVALID_ADDRESS (0x0001) at 0xfdff8018
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thread 0 Crashed:
</span><br>
<span class="quotelev1">&gt; 0   mca_btl_sm.so       0x003abbec mca_btl_sm_component_progress +  
</span><br>
<span class="quotelev1">&gt; 3164
</span><br>
<span class="quotelev1">&gt; 1   mca_bml_r2.so       0x003a0d38 mca_bml_r2_progress + 88
</span><br>
<span class="quotelev1">&gt; 2   libopal.0.dylib     0x0032309c opal_progress + 236
</span><br>
<span class="quotelev1">&gt; 3   mca_oob_tcp.so      0x00024f14 mca_oob_tcp_msg_wait + 52
</span><br>
<span class="quotelev1">&gt; 4   mca_oob_tcp.so      0x0002a0a8 mca_oob_tcp_recv + 1128
</span><br>
<span class="quotelev1">&gt; 5   liborte.0.dylib     0x002f07b0 mca_oob_recv_packed + 80
</span><br>
<span class="quotelev1">&gt; 6   mca_gpr_proxy.so    0x00059bd4 orte_gpr_proxy_put + 804
</span><br>
<span class="quotelev1">&gt; 7   liborte.0.dylib     0x00304318 orte_soh_base_set_proc_soh + 968
</span><br>
<span class="quotelev1">&gt; 8   libmpi.0.dylib      0x00222d88 ompi_mpi_init + 1816
</span><br>
<span class="quotelev1">&gt; 9   libmpi.0.dylib      0x00248b50 MPI_Init + 240
</span><br>
<span class="quotelev1">&gt; 10  nm                  0x00002e60 init_model + 48
</span><br>
<span class="quotelev1">&gt; 11  nm                  0x00002c70 main + 48
</span><br>
<span class="quotelev1">&gt; 12  nm                  0x00002494 _start + 340 (crt.c:272)
</span><br>
<span class="quotelev1">&gt; 13  nm                  0x0000233c start + 60
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thread 0 crashed with PPC Thread State 64:
</span><br>
<span class="quotelev1">&gt;   srr0: 0x00000000003abbec srr1:  
</span><br>
<span class="quotelev1">&gt; 0x000000000200f930                        vrsave: 0x0000000000000000
</span><br>
<span class="quotelev1">&gt;     cr: 0x28004222          xer: 0x0000000000000004   lr:  
</span><br>
<span class="quotelev1">&gt; 0x00000000003aafa0  ctr: 0x00000000003aaf90
</span><br>
<span class="quotelev1">&gt;     r0: 0x0000000000000000   r1: 0x00000000bfffe8d0   r2:  
</span><br>
<span class="quotelev1">&gt; 0x00000000fdff8000   r3: 0x0000000000000001
</span><br>
<span class="quotelev1">&gt;     r4: 0x0000000000049814   r5: 0x00000000bfffe888   r6:  
</span><br>
<span class="quotelev1">&gt; 0x0000000000000000   r7: 0x00000000fdff8000
</span><br>
<span class="quotelev1">&gt;     r8: 0x0000000000000004   r9: 0x00000000004177e0  r10:  
</span><br>
<span class="quotelev1">&gt; 0x0000000000000004  r11: 0x0000000000000000
</span><br>
<span class="quotelev1">&gt;    r12: 0x00000000003aaf90  r13: 0x00000000fffffffe  r14:  
</span><br>
<span class="quotelev1">&gt; 0x00000000003ad004  r15: 0x00000000003441e8
</span><br>
<span class="quotelev1">&gt;    r16: 0x00000000003ad8c4  r17: 0x0000000000000004  r18:  
</span><br>
<span class="quotelev1">&gt; 0x0000000000000000  r19: 0x0000000000000000
</span><br>
<span class="quotelev1">&gt;    r20: 0x0000000000000014  r21: 0x0000000000000000  r22:  
</span><br>
<span class="quotelev1">&gt; 0x00000000003ae0c4  r23: 0x0000000000000001
</span><br>
<span class="quotelev1">&gt;    r24: 0x0000000000000000  r25: 0x0000000000000004  r26:  
</span><br>
<span class="quotelev1">&gt; 0x0000000000029c50  r27: 0x0000000000000000
</span><br>
<span class="quotelev1">&gt;    r28: 0x0000000000000000  r29: 0x0000000000000001  r30:  
</span><br>
<span class="quotelev1">&gt; 0x0000000000000000  r31: 0x00000000003aafa0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CRASH 2:
</span><br>
<span class="quotelev1">&gt; Command: nm
</span><br>
<span class="quotelev1">&gt; Path:    /Users/karl/programs/nm/build/Release/nm
</span><br>
<span class="quotelev1">&gt; Parent:  orted [830]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Version: ??? (???)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PID:    832
</span><br>
<span class="quotelev1">&gt; Thread: 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Exception:  EXC_BAD_ACCESS (0x0001)
</span><br>
<span class="quotelev1">&gt; Codes:      KERN_PROTECTION_FAILURE (0x0002) at 0x00000000
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thread 0 Crashed:
</span><br>
<span class="quotelev1">&gt; 0   &lt;&lt;00000000&gt;&gt;        0x00000000 0 + 0
</span><br>
<span class="quotelev1">&gt; 1   mca_bml_r2.so       0x003a0d38 mca_bml_r2_progress + 88
</span><br>
<span class="quotelev1">&gt; 2   libopal.0.dylib     0x0032309c opal_progress + 236
</span><br>
<span class="quotelev1">&gt; 3   mca_oob_tcp.so      0x00024f14 mca_oob_tcp_msg_wait + 52
</span><br>
<span class="quotelev1">&gt; 4   mca_oob_tcp.so      0x0002a0a8 mca_oob_tcp_recv + 1128
</span><br>
<span class="quotelev1">&gt; 5   liborte.0.dylib     0x002f07b0 mca_oob_recv_packed + 80
</span><br>
<span class="quotelev1">&gt; 6   mca_gpr_proxy.so    0x00059bd4 orte_gpr_proxy_put + 804
</span><br>
<span class="quotelev1">&gt; 7   liborte.0.dylib     0x00304318 orte_soh_base_set_proc_soh + 968
</span><br>
<span class="quotelev1">&gt; 8   libmpi.0.dylib      0x00222d88 ompi_mpi_init + 1816
</span><br>
<span class="quotelev1">&gt; 9   libmpi.0.dylib      0x00248b50 MPI_Init + 240
</span><br>
<span class="quotelev1">&gt; 10  nm                  0x00002e60 init_model + 48
</span><br>
<span class="quotelev1">&gt; 11  nm                  0x00002c70 main + 48
</span><br>
<span class="quotelev1">&gt; 12  nm                  0x00002494 _start + 340 (crt.c:272)
</span><br>
<span class="quotelev1">&gt; 13  nm                  0x0000233c start + 60
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thread 0 crashed with PPC Thread State 64:
</span><br>
<span class="quotelev1">&gt;   srr0: 0x0000000000000000 srr1:  
</span><br>
<span class="quotelev1">&gt; 0x000000004000d930                        vrsave: 0x0000000000000000
</span><br>
<span class="quotelev1">&gt;     cr: 0x28004222          xer: 0x0000000000000004   lr:  
</span><br>
<span class="quotelev1">&gt; 0x00000000003abe5c  ctr: 0x0000000000000000
</span><br>
<span class="quotelev1">&gt;     r0: 0x0000000000000000   r1: 0x00000000bfffe8d0   r2:  
</span><br>
<span class="quotelev1">&gt; 0x0000000002008000   r3: 0x00000000003ad864
</span><br>
<span class="quotelev1">&gt;     r4: 0x0000000000000000   r5: 0x0000000002008000   r6:  
</span><br>
<span class="quotelev1">&gt; 0x0000000000000000   r7: 0x0000000002008000
</span><br>
<span class="quotelev1">&gt;     r8: 0x00000000003ad8c4   r9: 0x00000000004177e0  r10:  
</span><br>
<span class="quotelev1">&gt; 0x0000000000000000  r11: 0x0000000000000000
</span><br>
<span class="quotelev1">&gt;    r12: 0x0000000000000000  r13: 0x00000000fffffffe  r14:  
</span><br>
<span class="quotelev1">&gt; 0x00000000003ad004  r15: 0x00000000003441e8
</span><br>
<span class="quotelev1">&gt;    r16: 0x00000000003ad8c4  r17: 0x0000000000000000  r18:  
</span><br>
<span class="quotelev1">&gt; 0x0000000000000000  r19: 0x0000000000000000
</span><br>
<span class="quotelev1">&gt;    r20: 0x0000000000000000  r21: 0x0000000000000000  r22:  
</span><br>
<span class="quotelev1">&gt; 0x00000000003ae0c4  r23: 0x00000000003441e8
</span><br>
<span class="quotelev1">&gt;    r24: 0x0000000000000000  r25: 0x0000000002008000  r26:  
</span><br>
<span class="quotelev1">&gt; 0x00000000003ae0c4  r27: 0x0000000000000001
</span><br>
<span class="quotelev1">&gt;    r28: 0x0000000000000004  r29: 0x0000000000000001  r30:  
</span><br>
<span class="quotelev1">&gt; 0x0000000000000000  r31: 0x00000000003aafa0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CRASH 3:
</span><br>
<span class="quotelev1">&gt; Command: nm
</span><br>
<span class="quotelev1">&gt; Path:    /Users/karl/programs/nm/build/Debug/nm
</span><br>
<span class="quotelev1">&gt; Parent:  orted [1790]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Version: ??? (???)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PID:    1794
</span><br>
<span class="quotelev1">&gt; Thread: 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Exception:  EXC_BAD_ACCESS (0x0001)
</span><br>
<span class="quotelev1">&gt; Codes:      KERN_INVALID_ADDRESS (0x0001) at 0xfdff8018
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thread 0 Crashed:
</span><br>
<span class="quotelev1">&gt; 0   mca_btl_sm.so       0x003bcbec mca_btl_sm_component_progress +  
</span><br>
<span class="quotelev1">&gt; 3164
</span><br>
<span class="quotelev1">&gt; 1   mca_bml_r2.so       0x003b1d38 mca_bml_r2_progress + 88
</span><br>
<span class="quotelev1">&gt; 2   libopal.0.dylib     0x0032309c opal_progress + 236
</span><br>
<span class="quotelev1">&gt; 3   mca_oob_tcp.so      0x00055f14 mca_oob_tcp_msg_wait + 52
</span><br>
<span class="quotelev1">&gt; 4   mca_oob_tcp.so      0x0005b0a8 mca_oob_tcp_recv + 1128
</span><br>
<span class="quotelev1">&gt; 5   liborte.0.dylib     0x002f07b0 mca_oob_recv_packed + 80
</span><br>
<span class="quotelev1">&gt; 6   mca_gpr_proxy.so    0x00068bd4 orte_gpr_proxy_put + 804
</span><br>
<span class="quotelev1">&gt; 7   liborte.0.dylib     0x00304318 orte_soh_base_set_proc_soh + 968
</span><br>
<span class="quotelev1">&gt; 8   libmpi.0.dylib      0x00222d88 ompi_mpi_init + 1816
</span><br>
<span class="quotelev1">&gt; 9   libmpi.0.dylib      0x00248b50 MPI_Init + 240
</span><br>
<span class="quotelev1">&gt; 10  nm                  0x000028fc init_model + 80 (model.c:16)
</span><br>
<span class="quotelev1">&gt; 11  nm                  0x00002644 main + 72 (main.c:16)
</span><br>
<span class="quotelev1">&gt; 12  nm                  0x00001e54 _start + 340 (crt.c:272)
</span><br>
<span class="quotelev1">&gt; 13  nm                  0x00001cfc start + 60
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thread 0 crashed with PPC Thread State 64:
</span><br>
<span class="quotelev1">&gt;   srr0: 0x00000000003bcbec srr1:  
</span><br>
<span class="quotelev1">&gt; 0x000000000200f930                        vrsave: 0x0000000000000000
</span><br>
<span class="quotelev1">&gt;     cr: 0x28004222          xer: 0x0000000000000004   lr:  
</span><br>
<span class="quotelev1">&gt; 0x00000000003bbfa0  ctr: 0x00000000003bbf90
</span><br>
<span class="quotelev1">&gt;     r0: 0x0000000000000000   r1: 0x00000000bfffe8f0   r2:  
</span><br>
<span class="quotelev1">&gt; 0x00000000fdff8000   r3: 0x0000000000000001
</span><br>
<span class="quotelev1">&gt;     r4: 0x0000000000049814   r5: 0x00000000bfffe8a8   r6:  
</span><br>
<span class="quotelev1">&gt; 0x0000000000000000   r7: 0x00000000fdff8000
</span><br>
<span class="quotelev1">&gt;     r8: 0x0000000000000004   r9: 0x00000000004177d0  r10:  
</span><br>
<span class="quotelev1">&gt; 0x0000000000000004  r11: 0x0000000000000000
</span><br>
<span class="quotelev1">&gt;    r12: 0x00000000003bbf90  r13: 0x00000000fffffffe  r14:  
</span><br>
<span class="quotelev1">&gt; 0x00000000003be004  r15: 0x00000000003441e8
</span><br>
<span class="quotelev1">&gt;    r16: 0x00000000003be8c4  r17: 0x0000000000000004  r18:  
</span><br>
<span class="quotelev1">&gt; 0x0000000000000000  r19: 0x0000000000000000
</span><br>
<span class="quotelev1">&gt;    r20: 0x0000000000000014  r21: 0x0000000000000000  r22:  
</span><br>
<span class="quotelev1">&gt; 0x00000000003bf0c4  r23: 0x0000000000000001
</span><br>
<span class="quotelev1">&gt;    r24: 0x0000000000000000  r25: 0x0000000000000004  r26:  
</span><br>
<span class="quotelev1">&gt; 0x000000000005ac50  r27: 0x0000000000000000
</span><br>
<span class="quotelev1">&gt;    r28: 0x0000000000000000  r29: 0x0000000000000001  r30:  
</span><br>
<span class="quotelev1">&gt; 0x0000000000000000  r31: 0x00000000003bbfa0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CRASH 4:
</span><br>
<span class="quotelev1">&gt; Command: nm
</span><br>
<span class="quotelev1">&gt; Path:    /Users/karl/programs/nm/build/Debug/nm
</span><br>
<span class="quotelev1">&gt; Parent:  orted [1790]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Version: ??? (???)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PID:    1792
</span><br>
<span class="quotelev1">&gt; Thread: 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Exception:  EXC_BAD_ACCESS (0x0001)
</span><br>
<span class="quotelev1">&gt; Codes:      KERN_PROTECTION_FAILURE (0x0002) at 0x00000000
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thread 0 Crashed:
</span><br>
<span class="quotelev1">&gt; 0   &lt;&lt;00000000&gt;&gt;        0x00000000 0 + 0
</span><br>
<span class="quotelev1">&gt; 1   mca_bml_r2.so       0x003b1d38 mca_bml_r2_progress + 88
</span><br>
<span class="quotelev1">&gt; 2   libopal.0.dylib     0x0032309c opal_progress + 236
</span><br>
<span class="quotelev1">&gt; 3   mca_oob_tcp.so      0x00055f14 mca_oob_tcp_msg_wait + 52
</span><br>
<span class="quotelev1">&gt; 4   mca_oob_tcp.so      0x0005b0a8 mca_oob_tcp_recv + 1128
</span><br>
<span class="quotelev1">&gt; 5   liborte.0.dylib     0x002f07b0 mca_oob_recv_packed + 80
</span><br>
<span class="quotelev1">&gt; 6   mca_gpr_proxy.so    0x00068bd4 orte_gpr_proxy_put + 804
</span><br>
<span class="quotelev1">&gt; 7   liborte.0.dylib     0x00304318 orte_soh_base_set_proc_soh + 968
</span><br>
<span class="quotelev1">&gt; 8   libmpi.0.dylib      0x00222d88 ompi_mpi_init + 1816
</span><br>
<span class="quotelev1">&gt; 9   libmpi.0.dylib      0x00248b50 MPI_Init + 240
</span><br>
<span class="quotelev1">&gt; 10  nm                  0x000028fc init_model + 80 (model.c:16)
</span><br>
<span class="quotelev1">&gt; 11  nm                  0x00002644 main + 72 (main.c:16)
</span><br>
<span class="quotelev1">&gt; 12  nm                  0x00001e54 _start + 340 (crt.c:272)
</span><br>
<span class="quotelev1">&gt; 13  nm                  0x00001cfc start + 60
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thread 0 crashed with PPC Thread State 64:
</span><br>
<span class="quotelev1">&gt;   srr0: 0x0000000000000000 srr1:  
</span><br>
<span class="quotelev1">&gt; 0x000000004000d930                        vrsave: 0x0000000000000000
</span><br>
<span class="quotelev1">&gt;     cr: 0x28004222          xer: 0x0000000000000004   lr:  
</span><br>
<span class="quotelev1">&gt; 0x00000000003bce5c  ctr: 0x0000000000000000
</span><br>
<span class="quotelev1">&gt;     r0: 0x0000000000000000   r1: 0x00000000bfffe8f0   r2:  
</span><br>
<span class="quotelev1">&gt; 0x0000000002008000   r3: 0x00000000003be864
</span><br>
<span class="quotelev1">&gt;     r4: 0x0000000000000000   r5: 0x0000000002008000   r6:  
</span><br>
<span class="quotelev1">&gt; 0x0000000000000000   r7: 0x0000000002008000
</span><br>
<span class="quotelev1">&gt;     r8: 0x00000000003be8c4   r9: 0x00000000004177d0  r10:  
</span><br>
<span class="quotelev1">&gt; 0x0000000000000000  r11: 0x0000000000000000
</span><br>
<span class="quotelev1">&gt;    r12: 0x0000000000000000  r13: 0x00000000fffffffe  r14:  
</span><br>
<span class="quotelev1">&gt; 0x00000000003be004  r15: 0x00000000003441e8
</span><br>
<span class="quotelev1">&gt;    r16: 0x00000000003be8c4  r17: 0x0000000000000000  r18:  
</span><br>
<span class="quotelev1">&gt; 0x0000000000000000  r19: 0x0000000000000000
</span><br>
<span class="quotelev1">&gt;    r20: 0x0000000000000000  r21: 0x0000000000000000  r22:  
</span><br>
<span class="quotelev1">&gt; 0x00000000003bf0c4  r23: 0x00000000003441e8
</span><br>
<span class="quotelev1">&gt;    r24: 0x0000000000000000  r25: 0x0000000002008000  r26:  
</span><br>
<span class="quotelev1">&gt; 0x00000000003bf0c4  r27: 0x0000000000000001
</span><br>
<span class="quotelev1">&gt;    r28: 0x0000000000000004  r29: 0x0000000000000001  r30:  
</span><br>
<span class="quotelev1">&gt; 0x0000000000000000  r31: 0x00000000003bbfa0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;info.tar.gz&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1117.php">Jeff Squyres: "Re: [OMPI devel] MPI_XXX_{get|set}_errhandler in general , and for files in particular"</a>
<li><strong>Previous message:</strong> <a href="1115.php">Brian Barrett: "[OMPI devel] configure changes (ooops!)"</a>
<li><strong>In reply to:</strong> <a href="1100.php">Karl Dockendorf: "[OMPI devel] Segment Faults in MPI_INIT"</a>
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
