<?
$subject_val = "[OMPI devel] &quot;The MPI_Init() function was called before MPI_INIT was invoked.&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 22 20:30:27 2011" -->
<!-- isoreceived="20110723003027" -->
<!-- sent="Fri, 22 Jul 2011 17:30:09 -0700" -->
<!-- isosent="20110723003009" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] &amp;quot;The MPI_Init() function was called before MPI_INIT was invoked.&amp;quot;" -->
<!-- id="4E2A1611.6080701_at_lbl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] &quot;The MPI_Init() function was called before MPI_INIT was invoked.&quot;<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-22 20:30:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9543.php">Ralph Castain: "Re: [OMPI devel] orte question"</a>
<li><strong>Previous message:</strong> <a href="9541.php">Greg Watson: "Re: [OMPI devel] orte question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/08/9579.php">Josh Hursey: "Re: [OMPI devel] &quot;The MPI_Init() function was called before MPI_INIT was invoked.&quot;"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/08/9579.php">Josh Hursey: "Re: [OMPI devel] &quot;The MPI_Init() function was called before MPI_INIT was invoked.&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The output below resulted from an attempt to start a job w/checkpoint 
<br>
support when the BLCR kernel modules were not loaded on then node 
<br>
(&quot;pilot error&quot;).  The mistake is mine, but I am reporting this because 
<br>
there appears to be more going on in the output than probable should be 
<br>
-  the following 2 lines in particular struck me as almost humorous, but 
<br>
clearly incorrect:
<br>
<p>*** The MPI_Init() function was called before MPI_INIT was invoked.
<br>
*** This is disallowed by the MPI standard.
<br>
<p>Below is the command and full output.  This is OMPI-1.5.3 on Linux/x86.
<br>
<p>-Paul
<br>
<p>$ mpirun --prefix $HOME/obj-pcp-j/cr_mpirun-j-5+6/INSTALL -host pcp-j-6 
<br>
--mca btl ^openib -am ft-enable-cr -np 1 ./ring
<br>
--------------------------------------------------------------------------
<br>
It looks like opal_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during opal_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;&nbsp;opal_cr_init() failed failed
<br>
&nbsp;&nbsp;&nbsp;--&gt; Returned value -1 instead of OPAL_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
[pcp-j-6:29247] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file 
<br>
../../../openmpi-1.5.3/orte/runtime/orte_init.c at line 79
<br>
*** The MPI_Init() function was called before MPI_INIT was invoked.
<br>
*** This is disallowed by the MPI standard.
<br>
*** Your MPI job will now abort.
<br>
[pcp-j-6:29247] Abort before MPI_INIT completed successfully; not able 
<br>
to guarantee that all other processes were killed!
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
<p>&nbsp;&nbsp;&nbsp;ompi_mpi_init: orte_init failed
<br>
&nbsp;&nbsp;&nbsp;--&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that the job aborted, but has no info as to the process
<br>
that caused that situation.
<br>
--------------------------------------------------------------------------
<br>
<p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9543.php">Ralph Castain: "Re: [OMPI devel] orte question"</a>
<li><strong>Previous message:</strong> <a href="9541.php">Greg Watson: "Re: [OMPI devel] orte question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/08/9579.php">Josh Hursey: "Re: [OMPI devel] &quot;The MPI_Init() function was called before MPI_INIT was invoked.&quot;"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/08/9579.php">Josh Hursey: "Re: [OMPI devel] &quot;The MPI_Init() function was called before MPI_INIT was invoked.&quot;"</a>
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
