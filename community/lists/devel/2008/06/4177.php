<?
$subject_val = "[OMPI devel] Is trunk broken ?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 19 14:01:59 2008" -->
<!-- isoreceived="20080619180159" -->
<!-- sent="Thu, 19 Jun 2008 21:01:53 +0300" -->
<!-- isosent="20080619180153" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pasha_at_[hidden]" -->
<!-- subject="[OMPI devel] Is trunk broken ?" -->
<!-- id="485A9F11.90506_at_dev.mellanox.co.il" -->
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
<strong>Subject:</strong> [OMPI devel] Is trunk broken ?<br>
<strong>From:</strong> Pavel Shamis (Pasha) (<em>pasha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-19 14:01:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4178.php">Ralph H Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18677"</a>
<li><strong>Previous message:</strong> <a href="4176.php">Jeff Squyres: "Re: [OMPI devel] autogen error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4179.php">Ralph H Castain: "Re: [OMPI devel] Is trunk broken ?"</a>
<li><strong>Reply:</strong> <a href="4179.php">Ralph H Castain: "Re: [OMPI devel] Is trunk broken ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I tried to run trunk on my machines and I got follow error:
<br>
<p>[sw214:04367] [[16563,1],1] ORTE_ERROR_LOG: Data unpack would read past 
<br>
end of buffer in file base/grpcomm_base_modex.c at line 451
<br>
[sw214:04367] [[16563,1],1] ORTE_ERROR_LOG: Data unpack would read past 
<br>
end of buffer in file grpcomm_basic_module.c at line 560
<br>
[sw214:04365] 
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
&nbsp;&nbsp;--&gt; Returned &quot;Data unpack would read past end of buffer&quot; (-26) instead 
<br>
of &quot;Success&quot; (0)
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4178.php">Ralph H Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18677"</a>
<li><strong>Previous message:</strong> <a href="4176.php">Jeff Squyres: "Re: [OMPI devel] autogen error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4179.php">Ralph H Castain: "Re: [OMPI devel] Is trunk broken ?"</a>
<li><strong>Reply:</strong> <a href="4179.php">Ralph H Castain: "Re: [OMPI devel] Is trunk broken ?"</a>
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
