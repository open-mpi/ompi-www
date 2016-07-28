<?
$subject_val = "[OMPI devel] trunk problem for large-SMP startup?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  4 15:50:22 2009" -->
<!-- isoreceived="20090304205022" -->
<!-- sent="Wed, 04 Mar 2009 12:49:43 -0800" -->
<!-- isosent="20090304204943" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="[OMPI devel] trunk problem for large-SMP startup?" -->
<!-- id="49AEE967.1070305_at_sun.com" -->
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
<strong>Subject:</strong> [OMPI devel] trunk problem for large-SMP startup?<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-04 15:49:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5575.php">Ralph Castain: "Re: [OMPI devel] trunk problem for large-SMP startup?"</a>
<li><strong>Previous message:</strong> <a href="5573.php">Eugene Loh: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5575.php">Ralph Castain: "Re: [OMPI devel] trunk problem for large-SMP startup?"</a>
<li><strong>Reply:</strong> <a href="5575.php">Ralph Castain: "Re: [OMPI devel] trunk problem for large-SMP startup?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have a problem starting large SMP jobs (e.g., 64 processes on a single 
<br>
SMP) that might be related to a recent trunk change.  (Guessing.)  Does 
<br>
the following ring any bells?
<br>
<p>...
<br>
...
<br>
...
<br>
[burl-t5440-0:06798] [[57827,1],42] ORTE_ERROR_LOG: Not found in file 
<br>
ess_env_module.c at line 299
<br>
[burl-t5440-0:06798] [[57827,1],42] ORTE_ERROR_LOG: Not found in file 
<br>
base/grpcomm_base_modex.c at line 416
<br>
[burl-t5440-0:06798] [[57827,1],42] ORTE_ERROR_LOG: Not found in file 
<br>
grpcomm_bad_module.c at line 378
<br>
[burl-t5440-0:06800] [[57827,1],44] ORTE_ERROR_LOG: Not found in file 
<br>
ess_env_module.c at line 299
<br>
[burl-t5440-0:06800] [[57827,1],44] ORTE_ERROR_LOG: Not found in file 
<br>
base/grpcomm_base_modex.c at line 416
<br>
[burl-t5440-0:06800] [[57827,1],44] ORTE_ERROR_LOG: Not found in file 
<br>
grpcomm_bad_module.c at line 378
<br>
[burl-t5440-0:06797] [[57827,1],41] ORTE_ERROR_LOG: Not found in file 
<br>
ess_env_module.c at line 299
<br>
[burl-t5440-0:06797] [[57827,1],41] ORTE_ERROR_LOG: Not found in file 
<br>
base/grpcomm_base_modex.c at line 416
<br>
[burl-t5440-0:06797] [[57827,1],41] ORTE_ERROR_LOG: Not found in file 
<br>
grpcomm_bad_module.c at line 378
<br>
--------------------------------------------------------------------------
<br>
It looks like MPI_INIT failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during MPI_INIT; some of which are due to configuration or environment
<br>
problems.  This failure appears to be an internal failure; here's some
<br>
additional information (which may only be relevant to an Open MPI
<br>
developer):
<br>
<p>&nbsp;&nbsp;orte_grpcomm_modex failed
<br>
&nbsp;&nbsp;--&gt; Returned &quot;Not found&quot; (-13) instead of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
[burl-t5440-0:6756] Abort before MPI_INIT completed successfully; not 
<br>
able to guarantee that all other processes were killed!
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
[burl-t5440-0:6757] Abort before MPI_INIT completed successfully; not 
<br>
able to guarantee that all other processes were killed!
<br>
...
<br>
...
<br>
...
<br>
<p>
<br><hr>
<ul>
<li>application/x-cpio attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-5574/trunk-problem.tar.gz">trunk-problem.tar.gz</a>
</ul>
<!-- attachment="trunk-problem.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5575.php">Ralph Castain: "Re: [OMPI devel] trunk problem for large-SMP startup?"</a>
<li><strong>Previous message:</strong> <a href="5573.php">Eugene Loh: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5575.php">Ralph Castain: "Re: [OMPI devel] trunk problem for large-SMP startup?"</a>
<li><strong>Reply:</strong> <a href="5575.php">Ralph Castain: "Re: [OMPI devel] trunk problem for large-SMP startup?"</a>
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
