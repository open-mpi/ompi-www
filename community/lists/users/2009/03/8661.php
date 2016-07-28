<?
$subject_val = "Re: [OMPI users] Bogus memcpy or bogus  valgrind record";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 30 21:24:28 2009" -->
<!-- isoreceived="20090331012428" -->
<!-- sent="Mon, 30 Mar 2009 21:24:23 -0400" -->
<!-- isosent="20090331012423" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bogus memcpy or bogus  valgrind record" -->
<!-- id="42A0D52E-9F12-496E-9FC6-FA153DAB6211_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="49CDEE85.6020702_at_labri.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] Bogus memcpy or bogus  valgrind record<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-30 21:24:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8662.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.3.1 svn Debian trouble"</a>
<li><strong>Previous message:</strong> <a href="8660.php">Jeff Squyres: "Re: [OMPI users] 'orte_ess_base_select failed'"</a>
<li><strong>In reply to:</strong> <a href="8625.php">Fran&#231;ois PELLEGRINI: "[OMPI users] Bogus memcpy or bogus  valgrind record"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8665.php">Eugene Loh: "Re: [OMPI users] Bogus memcpy or bogus  valgrind record"</a>
<li><strong>Reply:</strong> <a href="8665.php">Eugene Loh: "Re: [OMPI users] Bogus memcpy or bogus  valgrind record"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 28, 2009, at 5:31 AM, Fran&#231;ois PELLEGRINI wrote:
<br>
<p><span class="quotelev1">&gt;   MPI_Comm_size (MPI_COMM_WORLD, &amp;procglbnbr);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_rank (MPI_COMM_WORLD, &amp;proclocnum);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   dataloctab = malloc (2 * (procglbnbr + 1) * sizeof (int));
</span><br>
<span class="quotelev1">&gt;   dataglbtab = dataloctab + 2;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Why +2?  Shouldn't it be +procglbnbr?
<br>
<p><span class="quotelev1">&gt; 3) Messages
</span><br>
<span class="quotelev1">&gt; ===========
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In addition to the &quot;memcpy&quot; message, I also get a bunch
</span><br>
<span class="quotelev1">&gt; of strange messages. Some excerpts :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ==30478== Syscall param sched_setaffinity(mask) points to  
</span><br>
<span class="quotelev1">&gt; unaddressable byte(s)
</span><br>
<span class="quotelev1">&gt; ==30478==    at 0x434F1D7: syscall (in /lib/i686/libc-2.8.so)
</span><br>
<span class="quotelev1">&gt; ==30478==    by 0x420B1A4: opal_paffinity_linux_plpa_api_probe_init
</span><br>
<span class="quotelev1">&gt; (plpa_api_probe.c:43)
</span><br>
<span class="quotelev1">&gt; ==30478==    by 0x420B6E3: opal_paffinity_linux_plpa_init  
</span><br>
<span class="quotelev1">&gt; (plpa_runtime.c:36)
</span><br>
<span class="quotelev1">&gt; ==30478==    by 0x420C43C:  
</span><br>
<span class="quotelev1">&gt; opal_paffinity_linux_plpa_have_topology_information
</span><br>
<span class="quotelev1">&gt; (plpa_map.c:501)
</span><br>
<span class="quotelev1">&gt; ==30478==    by 0x420ABB2: linux_module_init  
</span><br>
<span class="quotelev1">&gt; (paffinity_linux_module.c:119)
</span><br>
<span class="quotelev1">&gt; ==30478==    by 0x41D6039: opal_paffinity_base_select  
</span><br>
<span class="quotelev1">&gt; (paffinity_base_select.c:64)
</span><br>
<span class="quotelev1">&gt; ==30478==    by 0x41A187E: opal_init (opal_init.c:292)
</span><br>
<span class="quotelev1">&gt; ==30478==    by 0x412D010: orte_init (orte_init.c:76)
</span><br>
<span class="quotelev1">&gt; ==30478==    by 0x406784F: ompi_mpi_init (ompi_mpi_init.c:342)
</span><br>
<span class="quotelev1">&gt; ==30478==    by 0x40A4282: PMPI_Init (pinit.c:80)
</span><br>
<span class="quotelev1">&gt; ==30478==    by 0x8048733: main (in /tmp/brol)
</span><br>
<span class="quotelev1">&gt; ==30478==  Address 0x0 is not stack'd, malloc'd or (recently) free'd
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Don't worry about this one.  It's an internal test in Open MPI's  
<br>
processor affinity where it is probing the kernel to see what kind of  
<br>
affinity support is available (the test is designed to pass a NULL  
<br>
down -- it's safe).  If you configure Open MPI 1.3.2 and later --with- 
<br>
valgrind, this warning will go away.
<br>
<p><span class="quotelev1">&gt; ==30477== Conditional jump or move depends on uninitialised value(s)
</span><br>
<span class="quotelev1">&gt; ==30477==    at 0x480AA03: mca_mpool_sm_alloc (mpool_sm_module.c:79)
</span><br>
<span class="quotelev1">&gt; ==30477==    by 0x48491B3: mpool_calloc (btl_sm.c:108)
</span><br>
<span class="quotelev1">&gt; ==30477==    by 0x4849BDC: sm_btl_first_time_init (btl_sm.c:307)
</span><br>
<span class="quotelev1">&gt; ==30477==    by 0x484A1E2: mca_btl_sm_add_procs (btl_sm.c:484)
</span><br>
<span class="quotelev1">&gt; ==30477==    by 0x483F433: mca_bml_r2_add_procs (bml_r2.c:206)
</span><br>
<span class="quotelev1">&gt; ==30477==    by 0x481E7AE: mca_pml_ob1_add_procs (pml_ob1.c:308)
</span><br>
<span class="quotelev1">&gt; ==30477==    by 0x4067F4E: ompi_mpi_init (ompi_mpi_init.c:667)
</span><br>
<span class="quotelev1">&gt; ==30477==    by 0x40A4282: PMPI_Init (pinit.c:80)
</span><br>
<span class="quotelev1">&gt; ==30477==    by 0x8048733: main (in /tmp/brol)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>I *believe* that this bug has been fixed since 1.3.1.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8662.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.3.1 svn Debian trouble"</a>
<li><strong>Previous message:</strong> <a href="8660.php">Jeff Squyres: "Re: [OMPI users] 'orte_ess_base_select failed'"</a>
<li><strong>In reply to:</strong> <a href="8625.php">Fran&#231;ois PELLEGRINI: "[OMPI users] Bogus memcpy or bogus  valgrind record"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8665.php">Eugene Loh: "Re: [OMPI users] Bogus memcpy or bogus  valgrind record"</a>
<li><strong>Reply:</strong> <a href="8665.php">Eugene Loh: "Re: [OMPI users] Bogus memcpy or bogus  valgrind record"</a>
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
