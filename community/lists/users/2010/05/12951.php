<?
$subject_val = "[OMPI users] openmpi 1.4.1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  6 22:54:24 2010" -->
<!-- isoreceived="20100507025424" -->
<!-- sent="Fri, 07 May 2010 12:24:13 +0930" -->
<!-- isosent="20100507025413" -->
<!-- name="David Logan" -->
<!-- email="david.logan_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi 1.4.1" -->
<!-- id="4BE380D5.8070500_at_adelaide.edu.au" -->
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
<strong>Subject:</strong> [OMPI users] openmpi 1.4.1<br>
<strong>From:</strong> David Logan (<em>david.logan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-06 22:54:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12952.php">Damien: "[OMPI users] Fortran support on Windows Open-MPI"</a>
<li><strong>Previous message:</strong> <a href="12950.php">David Logan: "[OMPI users] openmpi 1.4.1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ooops, found the problem, hadn't restarted pbs after changing the nodes 
<br>
lists and the job had been put onto a node with a faulty myrinet 
<br>
connection on the switch.
<br>
<p>Regards
<br>
<p>Hi All,
<br>
<p>I am receiving an error message
<br>
<p>[grid-admin_at_ng2 ~]$ cat dml_test.err
<br>
[hydra010:22914] [btl_gm_proc.c:191] error in converting global to local id
<br>
[hydra002:07435] [btl_gm_proc.c:191] error in converting global to local id
<br>
[hydra009:31492] [btl_gm_proc.c:191] error in converting global to local id
<br>
[hydra008:29253] [btl_gm_proc.c:191] error in converting global to local id
<br>
[hydra007:02552] [btl_gm_proc.c:191] error in converting global to local id
<br>
[hydra003:07068] [btl_gm_proc.c:191] error in converting global to local id
<br>
[hydra003:07068] [btl_gm_proc.c:191] error in converting global to local id
<br>
[hydra003:07068] [btl_gm_proc.c:191] error in converting global to local id
<br>
[hydra003:07068] [btl_gm_proc.c:191] error in converting global to local id
<br>
[hydra003:07068] [btl_gm_proc.c:191] error in converting global to local id
<br>
[hydra003:07068] [btl_gm_proc.c:191] error in converting global to local id
<br>
[hydra003:07068] [btl_gm_proc.c:191] error in converting global to local id
<br>
[hydra005:27967] [btl_gm_proc.c:191] error in converting global to local id
<br>
[hydra006:19420] [btl_gm_proc.c:191] error in converting global to local id
<br>
[hydra010:22914] [btl_gm.c:489] send completed with unhandled gm error 18
<br>
[hydra010:22914] pml_ob1_sendreq.c:211 FATAL
<br>
--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 0 with PID 22914 on
<br>
node hydra010 exiting without calling &quot;finalize&quot;. This may
<br>
have caused other processes in the application to be
<br>
terminated by signals sent by mpirun (as reported here).
<br>
--------------------------------------------------------------------------
<br>
[grid-admin_at_ng2 ~]$
<br>
<p>I've searched and googled only to find nothing that is able to point me 
<br>
where this problem may lie. I've looked at the source code and can't see 
<br>
anything glaringly obvious and am wondering whether this might be a gm 
<br>
issue? It does appear to start up ok
<br>
<p>GM: Version 2.1.30_Linux build 2.1.30_Linux 
<br>
root_at_hydra115:/usr/local/src/gm-2.1.30_Linux Tue Apr 27 12:29:17 CST 2010
<br>
GM: On i686, kernel version: 2.6.18-92.1.10.el5 #1 SMP Tue Aug 5 
<br>
07:41:53 EDT 2008
<br>
GM: Highmem memory configuration:
<br>
GM: PFN_ZERO=0x0, PFN_MAX=0x7fffc, KERNEL_PFN_MAX=0x38000
<br>
GM: Memory available for registration: 259456 pages (1013 MBytes)
<br>
GM: MCP for unit 0: L9 4K
<br>
GM: LANai rate set to 132 MHz (max = 134 MHz)
<br>
GM: Board 0 supports 2815 remote nodes.
<br>
GM: Board 0 page hash cache has 16384 bins.
<br>
GM: Board 0 has 1 packet interfaces.
<br>
GM: NOTICE: 
<br>
/usr/local/src/gm-2.1.30_Linux/drivers/linux/kbuild/gm_arch_k.c:4828:():kernel
<br>
GM: ServerWorks chipset detected: avoiding PIO read.
<br>
GM: Allocated IRQ10
<br>
GM: 1 Myrinet board(s) found and initialized
<br>
<p>Any ideas as to where to look would be most appreciated.
<br>
<p>Thanks
<br>
<p><pre>
-- 
David Logan
eResearch SA, ARCS Grid Administrator
Level 1, School of Physics and Chemistry
North Terrace, Adelaide, 5005
(W) 08 8303 7301
(M) 0458 631 117
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12952.php">Damien: "[OMPI users] Fortran support on Windows Open-MPI"</a>
<li><strong>Previous message:</strong> <a href="12950.php">David Logan: "[OMPI users] openmpi 1.4.1"</a>
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
