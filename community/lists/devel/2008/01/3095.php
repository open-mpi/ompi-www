<?
$subject_val = "[OMPI devel] orte_ns_base_select failed: returned value -1 instead of ORTE_SUCCESS";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 30 16:55:04 2008" -->
<!-- isoreceived="20080130215504" -->
<!-- sent="Wed, 30 Jan 2008 16:54:55 -0500" -->
<!-- isosent="20080130215455" -->
<!-- name="Aur&#233;lien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="[OMPI devel] orte_ns_base_select failed: returned value -1 instead of ORTE_SUCCESS" -->
<!-- id="7A0C3261-657E-4F72-B375-736F82B2F02E_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> [OMPI devel] orte_ns_base_select failed: returned value -1 instead of ORTE_SUCCESS<br>
<strong>From:</strong> Aur&#233;lien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-30 16:54:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3096.php">Ralph Castain: "Re: [OMPI devel] orte_ns_base_select failed: returned value -1 instead of ORTE_SUCCESS"</a>
<li><strong>Previous message:</strong> <a href="3094.php">Adrian Knoth: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3096.php">Ralph Castain: "Re: [OMPI devel] orte_ns_base_select failed: returned value -1 instead of ORTE_SUCCESS"</a>
<li><strong>Reply:</strong> <a href="3096.php">Ralph Castain: "Re: [OMPI devel] orte_ns_base_select failed: returned value -1 instead of ORTE_SUCCESS"</a>
<li><strong>Maybe reply:</strong> <a href="3107.php">Ralph Castain: "Re: [OMPI devel] orte_ns_base_select failed: returned value -1 instead of ORTE_SUCCESS"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I get a runtime error in static build on Mac OS 10.5 (automake 1.10,  
<br>
autoconf 2.60, gcc-apple-darwin 4.01, libtool 1.5.22).
<br>
<p>The error does not occur in dso builds, and everything seems to work  
<br>
fine on Linux.
<br>
<p>Here is the error log.
<br>
<p>~/ompi$ mpirun -np 2 NetPIPE_3.6/NPmpi
<br>
[grosse-pomme.local:34247] [NO-NAME] ORTE_ERROR_LOG: Bad parameter in  
<br>
file /SourceCache/openmpi/openmpi-5/openmpi/orte/mca/oob/base/ 
<br>
oob_base_init.c at line 74
<br>
[grosse-pomme.local:34247] [NO-NAME] ORTE_ERROR_LOG: Bad parameter in  
<br>
file /SourceCache/openmpi/openmpi-5/openmpi/orte/mca/ns/proxy/ 
<br>
ns_proxy_component.c at line 222
<br>
[grosse-pomme.local:34247] [NO-NAME] ORTE_ERROR_LOG: Error in file / 
<br>
SourceCache/openmpi/openmpi-5/openmpi/orte/runtime/orte_init_stage1.c  
<br>
at line 230
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;&nbsp;orte_ns_base_select failed
<br>
&nbsp;&nbsp;&nbsp;--&gt; Returned value -1 instead of ORTE_SUCCESS
<br>
<p>--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
It looks like MPI_INIT failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during MPI_INIT; some of which are due to configuration or  
<br>
environment
<br>
problems.  This failure appears to be an internal failure; here's some
<br>
additional information (which may only be relevant to an Open MPI
<br>
developer):
<br>
<p>&nbsp;&nbsp;&nbsp;ompi_mpi_init: orte_init_stage1 failed
<br>
&nbsp;&nbsp;&nbsp;--&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
<p><p><p><pre>
--
Dr. Aur&#233;lien Bouteiller
Sr. Research Associate - Innovative Computing Laboratory
Suite 350, 1122 Volunteer Boulevard
Knoxville, TN 37996
865 974 6321
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3096.php">Ralph Castain: "Re: [OMPI devel] orte_ns_base_select failed: returned value -1 instead of ORTE_SUCCESS"</a>
<li><strong>Previous message:</strong> <a href="3094.php">Adrian Knoth: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3096.php">Ralph Castain: "Re: [OMPI devel] orte_ns_base_select failed: returned value -1 instead of ORTE_SUCCESS"</a>
<li><strong>Reply:</strong> <a href="3096.php">Ralph Castain: "Re: [OMPI devel] orte_ns_base_select failed: returned value -1 instead of ORTE_SUCCESS"</a>
<li><strong>Maybe reply:</strong> <a href="3107.php">Ralph Castain: "Re: [OMPI devel] orte_ns_base_select failed: returned value -1 instead of ORTE_SUCCESS"</a>
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
