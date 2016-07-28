<?
$subject_val = "[OMPI users] exporting PATH ineffective for finding MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 14 20:14:28 2014" -->
<!-- isoreceived="20140315001428" -->
<!-- sent="Fri, 14 Mar 2014 17:14:26 -0700" -->
<!-- isosent="20140315001426" -->
<!-- name="Ross Boylan" -->
<!-- email="ross_at_[hidden]" -->
<!-- subject="[OMPI users] exporting PATH ineffective for finding MPI" -->
<!-- id="53239B62.4030802_at_biostat.ucsf.edu" -->
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
<strong>Subject:</strong> [OMPI users] exporting PATH ineffective for finding MPI<br>
<strong>From:</strong> Ross Boylan (<em>ross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-14 20:14:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23849.php">Ralph Castain: "Re: [OMPI users] exporting PATH ineffective for finding MPI"</a>
<li><strong>Previous message:</strong> <a href="23847.php">Saliya Ekanayake: "Re: [OMPI users] SIGSEV when running OMPI Java binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23849.php">Ralph Castain: "Re: [OMPI users] exporting PATH ineffective for finding MPI"</a>
<li><strong>Reply:</strong> <a href="23849.php">Ralph Castain: "Re: [OMPI users] exporting PATH ineffective for finding MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I used this script to launch mpi:
<br>
<p>R_PROFILE_USER=~/KHC/sunbelt/Rmpiprofile LD_LIBRARY_PATH=/home/ross/install/lib:$LD_LIBRARY_PATH  PATH=/home/ross/install/bin:/home/ross/install/lib64/R/bin:$PATH orterun -x R_PROFILE_USER -x LD_LIBRARY_PATH \
<br>
-x PATH -hostfile ~/KHC/sunbelt/hosts -np 18 R --no-save -q
<br>
<p>For each remote node I get a message like
<br>
[n11:07642] Error: unknown option &quot;--tree-spawn&quot;
<br>
<p>According to previous exchanges on this list that is a sign that the 
<br>
remote nodes are picking up the old system version of MPI instead of my 
<br>
new local one.  Apparently the PATH values I exported are not used; 
<br>
presumably it's the same for LD_LIBRARY_PATH.
<br>
<p>I found this surprising.
<br>
<p>RTFM disclosed the --prefix argument to orterun, and that seems to do 
<br>
the trick.
<br>
<p>Am I missing anything?
<br>
<p>Ross Boylan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23849.php">Ralph Castain: "Re: [OMPI users] exporting PATH ineffective for finding MPI"</a>
<li><strong>Previous message:</strong> <a href="23847.php">Saliya Ekanayake: "Re: [OMPI users] SIGSEV when running OMPI Java binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23849.php">Ralph Castain: "Re: [OMPI users] exporting PATH ineffective for finding MPI"</a>
<li><strong>Reply:</strong> <a href="23849.php">Ralph Castain: "Re: [OMPI users] exporting PATH ineffective for finding MPI"</a>
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
