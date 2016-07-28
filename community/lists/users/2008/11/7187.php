<?
$subject_val = "[OMPI users] Scyld Beowulf and openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  3 12:30:06 2008" -->
<!-- isoreceived="20081103173006" -->
<!-- sent="Mon, 3 Nov 2008 11:30:01 -0600" -->
<!-- isosent="20081103173001" -->
<!-- name="Rima Chaudhuri" -->
<!-- email="rima.chaudhuri_at_[hidden]" -->
<!-- subject="[OMPI users] Scyld Beowulf and openmpi" -->
<!-- id="7503b17d0811030930i13acb974kc627983a1d481192_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Scyld Beowulf and openmpi<br>
<strong>From:</strong> Rima Chaudhuri (<em>rima.chaudhuri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-03 12:30:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7188.php">Ralph Castain: "Re: [OMPI users] Scyld Beowulf and openmpi"</a>
<li><strong>Previous message:</strong> <a href="7186.php">Rajesh Ramaya: "Re: [OMPI users] MPI + Mixed language coding(Fortran90 + C++)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7188.php">Ralph Castain: "Re: [OMPI users] Scyld Beowulf and openmpi"</a>
<li><strong>Reply:</strong> <a href="7188.php">Ralph Castain: "Re: [OMPI users] Scyld Beowulf and openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello!
<br>
I am a new user of openmpi -- I've installed openmpi 1.2.6 for our
<br>
x86_64 linux scyld beowulf cluster inorder to make it run with amber10
<br>
MD simulation package.
<br>
<p>The nodes can see the home directory i.e. a bpsh to the nodes works
<br>
fine and lists all the files in the home directory where I have both
<br>
openmpi and amber10 installed.
<br>
However if I try to run:
<br>
<p>$MPI_HOME/bin/mpirun -no_local=1 -np 4 $AMBERHOME/exe/sander.MPI ........
<br>
<p>I get the following error:
<br>
&nbsp;[0,0,0] ORTE_ERROR_LOG: Not available in file ras_bjs.c at line 247
<br>
--------------------------------------------------------------------------
<br>
Failed to find the following executable:
<br>
<p>Host:       helios.structure.uic.edu
<br>
Executable: -o
<br>
<p>Cannot continue.
<br>
--------------------------------------------------------------------------
<br>
[helios.structure.uic.edu:23611] [0,0,0] ORTE_ERROR_LOG: Not found in
<br>
file rmgr_urm.c at line 462
<br>
[helios.structure.uic.edu:23611] mpirun: spawn failed with errno=-13
<br>
<p>any cues?
<br>
<p><p><pre>
-- 
-Rima
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7188.php">Ralph Castain: "Re: [OMPI users] Scyld Beowulf and openmpi"</a>
<li><strong>Previous message:</strong> <a href="7186.php">Rajesh Ramaya: "Re: [OMPI users] MPI + Mixed language coding(Fortran90 + C++)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7188.php">Ralph Castain: "Re: [OMPI users] Scyld Beowulf and openmpi"</a>
<li><strong>Reply:</strong> <a href="7188.php">Ralph Castain: "Re: [OMPI users] Scyld Beowulf and openmpi"</a>
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
