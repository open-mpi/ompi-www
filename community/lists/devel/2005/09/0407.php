<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Sep 25 11:58:31 2005" -->
<!-- isoreceived="20050925165831" -->
<!-- sent="Sun, 25 Sep 2005 10:58:21 -0600" -->
<!-- isosent="20050925165821" -->
<!-- name="Galen M. Shipman" -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="p2p linpack ---" -->
<!-- id="B80FA9BF-E5A4-476F-BD1B-DD759492FCDA_at_cs.unm.edu" -->
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
<strong>From:</strong> Galen M. Shipman (<em>gshipman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-09-25 11:58:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0408.php">David R. (Chip) Kent IV: "Re:  mpif.h problems"</a>
<li><strong>Previous message:</strong> <a href="0406.php">Jeff Squyres: "Re:  why do we need the backward dependencies ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0413.php">Galen M. Shipman: "Re:  p2p linpack ---"</a>
<li><strong>Reply:</strong> <a href="0413.php">Galen M. Shipman: "Re:  p2p linpack ---"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well, after adding a bunch of debugging  output, I have found the  
<br>
following.
<br>
<p>With both leave_pinned and use_mem_hook enabled on a linpack run we  
<br>
get the assertion error on the memory callback in linpack. That is to  
<br>
say, there is a free occurring in the middle of a registration.
<br>
<p>At the point of assert we have NOT resized any registrations.
<br>
The existing registrations in the tree are:
<br>
<p>Existing registrations:	
<br>
Base	Bound	Length
<br>
241615360	244841607	3226248
<br>
244841608	246428807	1587200
<br>
246428808	248016007	1587200
<br>
248019648	251245895	3226248
<br>
Tyring to free		
<br>
247917216		
<br>
From		
<br>
Base	Bound	
<br>
246428808	248016007	
<br>
<p><p><p>When we get the assert, we are trying to free: 247917216, which is in  
<br>
the middle of the registration. Note we have NOT resized any  
<br>
registrations so I am confident there is not an issue with either the  
<br>
tree or the resize at least as far as linpack is concerned.
<br>
Here is the callstack:
<br>
<p>#0  0x0000002a95f079c9 in raise () from /lib/libc.so.6
<br>
#1  0x0000002a95f08e6e in abort () from /lib/libc.so.6
<br>
#2  0x0000002a95f01690 in __assert_fail () from /lib/libc.so.6
<br>
#3  0x0000002a9571b200 in mca_mpool_base_mem_cb (base=0xec6eaa0,  
<br>
size=31624,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cbdata=0x0) at mpool_base_mem_cb.c:53
<br>
#4  0x0000002a9587fe0d in opal_mem_free_release_hook (buf=0xec6eaa0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;length=31624) at memory.c:121
<br>
#5  0x0000002a9588bd12 in opal_mem_free_free_hook (ptr=0xec6eaa0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;caller=0x42b052) at memory_malloc_hooks.c:66
<br>
#6  0x000000000042b052 in ATL_dmmIJK ()
<br>
#7  0x000000000064f9b1 in ATL_dgemmNN ()
<br>
#8  0x000000000057722b in ATL_dgemmNN_RB ()
<br>
#9  0x0000000000577fc3 in ATL_rtrsmRUN ()
<br>
#10 0x000000000042c63c in ATL_dtrsm ()
<br>
#11 0x0000000000423c1e in atl_f77wrap_dtrsm__ ()
<br>
#12 0x0000000000423a94 in dtrsm_ ()
<br>
#13 0x0000000000411192 in HPL_dtrsm (ORDER=17933, SIDE=17933, UPLO=8,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TRANS=4294967295, DIAG=0, M=23458672, N=0, ALPHA=1,  
<br>
A=0x7fbfffefa0, LDA=0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;B=0x202, LDB=0) at HPL_dtrsm.c:949
<br>
#14 0x000000000040cfb6 in HPL_pdupdateTT (PBCST=0x0, IFLAG=0x0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PANEL=0x165f040, NN=-1) at HPL_pdupdateTT.c:362
<br>
#15 0x000000000041936f in HPL_pdgesvK2 (GRID=0x7fbffff4a0,  
<br>
ALGO=0x7fbffff460,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A=0x7fbffff260) at HPL_pdgesvK2.c:178
<br>
#16 0x000000000040d6f7 in HPL_pdgesv (GRID=0x7fbffff4a0, ALGO=0x460d,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A=0x7fbffff260) at HPL_pdgesv.c:107
<br>
#17 0x0000000000405b10 in HPL_pdtest (TEST=0x7fbffff430,  
<br>
GRID=0x7fbffff4a0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ALGO=0x7fbffff460, N=10000, NB=80) at HPL_pdtest.c:193
<br>
#18 0x0000000000401840 in main (ARGC=1, ARGV=0x7fbffff928)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at HPL_pddriver.c:223
<br>
<p>Note that the free occurs in the ATLAS libraries, I will look into re- 
<br>
building linpack with another BLAS library to see what happens. Any  
<br>
other suggestions?
<br>
<p>Thanks,
<br>
<p>Galen
<br>
<p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="../../att-0407/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0408.php">David R. (Chip) Kent IV: "Re:  mpif.h problems"</a>
<li><strong>Previous message:</strong> <a href="0406.php">Jeff Squyres: "Re:  why do we need the backward dependencies ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0413.php">Galen M. Shipman: "Re:  p2p linpack ---"</a>
<li><strong>Reply:</strong> <a href="0413.php">Galen M. Shipman: "Re:  p2p linpack ---"</a>
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
