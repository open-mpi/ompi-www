<?
$subject_val = "[OMPI users] disabling tcp altogether";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  4 10:37:38 2008" -->
<!-- isoreceived="20080604143738" -->
<!-- sent="Wed, 04 Jun 2008 17:39:32 +0300" -->
<!-- isosent="20080604143932" -->
<!-- name="tayfun sen" -->
<!-- email="tayfun.sen_at_[hidden]" -->
<!-- subject="[OMPI users] disabling tcp altogether" -->
<!-- id="4846A924.5080505_at_ceng.metu.edu.tr" -->
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
<strong>Subject:</strong> [OMPI users] disabling tcp altogether<br>
<strong>From:</strong> tayfun sen (<em>tayfun.sen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-04 10:39:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5799.php">Leonardo Fialho: "[OMPI users] tg3 module"</a>
<li><strong>Previous message:</strong> <a href="5797.php">Scott Atchley: "Re: [OMPI users] Open MPI instructional videos"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5806.php">Jeff Squyres: "Re: [OMPI users] disabling tcp altogether"</a>
<li><strong>Reply:</strong> <a href="5806.php">Jeff Squyres: "Re: [OMPI users] disabling tcp altogether"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I would like to run an OpenMPI application on one node and since I think 
<br>
it would be better performance wise I want it to use shared memory for 
<br>
communication and not tcp. Is it possible to use shared memory not only 
<br>
for MPI communication but also for control messages and other similar 
<br>
inner MPI related communication? (so no tcp communication whatsoever is 
<br>
used).
<br>
<p>I came up with following parameters but I am receiving an error when I 
<br>
use it:
<br>
mpirun --host localhost --mca btl sm,self --mca oob ^tcp -n 2 hello
<br>
<p>It's running a simple hello world application. I know I don't have to 
<br>
use the host parameter since by default it will run on localhost but 
<br>
just to be on the safe side I included that too. I ask btl to use sm and 
<br>
self (I guess &quot;self&quot; is compulsory) and instruct oob to not use tcp (per 
<br>
the last lines in 
<br>
<a href="http://www.open-mpi.org/faq/?category=tcp#tcp-selection">http://www.open-mpi.org/faq/?category=tcp#tcp-selection</a> ). Isn't this 
<br>
correct?
<br>
<p>Here's the exact error:
<br>
<p># mpirun --host localhost --mca btl sm,self --mca oob ^tcp -n 2 hello
<br>
[myhost:08491] [NO-NAME] ORTE_ERROR_LOG: Not found in file 
<br>
runtime/orte_init_stage1.c at line 182
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
<p>&nbsp;&nbsp;orte_rml_base_select failed
<br>
&nbsp;&nbsp;--&gt; Returned value -13 instead of ORTE_SUCCESS
<br>
<p>--------------------------------------------------------------------------
<br>
[peanutbutter:08491] [NO-NAME] ORTE_ERROR_LOG: Not found in file 
<br>
runtime/orte_system_init.c at line 42
<br>
[peanutbutter:08491] [NO-NAME] ORTE_ERROR_LOG: Not found in file 
<br>
runtime/orte_init.c at line 52
<br>
--------------------------------------------------------------------------
<br>
Open RTE was unable to initialize properly.  The error occured while
<br>
attempting to orte_init().  Returned value -13 instead of ORTE_SUCCESS.
<br>
--------------------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5799.php">Leonardo Fialho: "[OMPI users] tg3 module"</a>
<li><strong>Previous message:</strong> <a href="5797.php">Scott Atchley: "Re: [OMPI users] Open MPI instructional videos"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5806.php">Jeff Squyres: "Re: [OMPI users] disabling tcp altogether"</a>
<li><strong>Reply:</strong> <a href="5806.php">Jeff Squyres: "Re: [OMPI users] disabling tcp altogether"</a>
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
