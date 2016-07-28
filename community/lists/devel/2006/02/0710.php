<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Feb  1 17:05:13 2006" -->
<!-- isoreceived="20060201220513" -->
<!-- sent="Wed, 01 Feb 2006 15:05:08 -0700" -->
<!-- isosent="20060201220508" -->
<!-- name="Nathan DeBardeleben" -->
<!-- email="ndebard_at_[hidden]" -->
<!-- subject="Alpha 4 and job state transitions" -->
<!-- id="43E13094.10509_at_lanl.gov" -->
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
<strong>From:</strong> Nathan DeBardeleben (<em>ndebard_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-01 17:05:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0711.php">David Daniel: "LLNL OpenMP + MPI benchmarks"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/01/0709.php">Leslie Watter: "Re:  debugging methods"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0713.php">Ralph H. Castain: "Re:  Alpha 4 and job state transitions"</a>
<li><strong>Reply:</strong> <a href="0713.php">Ralph H. Castain: "Re:  Alpha 4 and job state transitions"</a>
<li><strong>Reply:</strong> <a href="0718.php">Ralph H. Castain: "Re:  Alpha 4 and job state transitions"</a>
<li><strong>Reply:</strong> <a href="0721.php">Ralph H. Castain: "Re:  Alpha 4 and job state transitions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This was happening on Alpha 1 as well but I upgraded today to Alpha 4 to 
<br>
see if it's gone away - it has not.
<br>
<p>I register a callback on a spawn() inside ORTE.  That callback includes 
<br>
the current state and should be called as the job goes through those states.
<br>
<p>I am now noticing that jobs never go through the INIT state.  They may 
<br>
also not go through others but definitely not ORTE_PROC_STATE_INIT.
<br>
<p>I was registering the IOForwarding callback during the INIT phase so, 
<br>
consequentially, I now do not have IOF.  There are other side effects 
<br>
such as jobs that I start I think are perpetually in the 'starting' 
<br>
state and then, suddenly, they're done.
<br>
<p>Can someone look into / comment on this please?
<br>
<p>Thanks.
<br>
<p><pre>
-- 
-- Nathan
Correspondence
---------------------------------------------------------------------
Nathan DeBardeleben, Ph.D.
Los Alamos National Laboratory
Parallel Tools Team
High Performance Computing Environments
phone: 505-667-3428
email: ndebard_at_[hidden]
---------------------------------------------------------------------
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0711.php">David Daniel: "LLNL OpenMP + MPI benchmarks"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/01/0709.php">Leslie Watter: "Re:  debugging methods"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0713.php">Ralph H. Castain: "Re:  Alpha 4 and job state transitions"</a>
<li><strong>Reply:</strong> <a href="0713.php">Ralph H. Castain: "Re:  Alpha 4 and job state transitions"</a>
<li><strong>Reply:</strong> <a href="0718.php">Ralph H. Castain: "Re:  Alpha 4 and job state transitions"</a>
<li><strong>Reply:</strong> <a href="0721.php">Ralph H. Castain: "Re:  Alpha 4 and job state transitions"</a>
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
