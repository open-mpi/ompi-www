<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Feb  2 10:44:23 2007" -->
<!-- isoreceived="20070202154423" -->
<!-- sent="Fri, 2 Feb 2007 08:44:15 -0700" -->
<!-- isosent="20070202154415" -->
<!-- name="Greg Watson" -->
<!-- email="gwatson_at_[hidden]" -->
<!-- subject="[OMPI devel] orted --seed and orte_init()" -->
<!-- id="D0AD43FE-2EBE-462A-B691-95EE6F610364_at_lanl.gov" -->
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
<strong>From:</strong> Greg Watson (<em>gwatson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-02 10:44:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1283.php">Galen Shipman: "Re: [OMPI devel] Create success (r1.3a1r13481)"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/01/1281.php">Greg Watson: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1285.php">Ralph Castain: "Re: [OMPI devel] orted --seed and orte_init()"</a>
<li><strong>Reply:</strong> <a href="1285.php">Ralph Castain: "Re: [OMPI devel] orted --seed and orte_init()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We're launching a seed daemon so that we can get registry persistence  
<br>
across multiple job launches. However, there is a race condition  
<br>
between launching the daemon and the first call to orte_init() that  
<br>
can result in a bus error. We set the OMPI_MCA_universe and  
<br>
OMPI_MCA_orte_univ_exist environment variables prior to calling  
<br>
orte_init() so that orte knows how to connect to the daemon, but if  
<br>
the daemon hasn't started this causes a bus error in  
<br>
orte_rds_base_close(). Stack trace below.
<br>
<p>Exception:  EXC_BAD_ACCESS (0x0001)
<br>
Codes:      KERN_PROTECTION_FAILURE (0x0002) at 0x0000001c
<br>
<p>Thread 0 Crashed:
<br>
0   libopen-rte.0.dylib 	0x000c6d59 orte_rds_base_close + 66
<br>
1   libopen-rte.0.dylib 	0x000a3ba7 orte_system_finalize + 121
<br>
2   libopen-rte.0.dylib 	0x000d41f9  
<br>
orte_sds_base_basic_contact_universe + 648
<br>
3   libopen-rte.0.dylib 	0x000a06ce orte_init_stage1 + 898
<br>
4   libopen-rte.0.dylib 	0x000a3c0b orte_system_init + 25
<br>
5   libopen-rte.0.dylib 	0x000a0190 orte_init + 81
<br>
<p>A related question, is there any way to check for the daemon other  
<br>
than calling orte_init()? At the moment we just sleep for a few  
<br>
seconds after launching the daemon, but this is obviously not a very  
<br>
satisfactory solution. I can't see any places where this is done in  
<br>
the source.
<br>
<p>Thanks,
<br>
<p>Greg
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1283.php">Galen Shipman: "Re: [OMPI devel] Create success (r1.3a1r13481)"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/01/1281.php">Greg Watson: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1285.php">Ralph Castain: "Re: [OMPI devel] orted --seed and orte_init()"</a>
<li><strong>Reply:</strong> <a href="1285.php">Ralph Castain: "Re: [OMPI devel] orted --seed and orte_init()"</a>
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
