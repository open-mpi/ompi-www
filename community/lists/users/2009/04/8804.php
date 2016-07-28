<?
$subject_val = "[OMPI users] MPI can not open file?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  7 07:05:08 2009" -->
<!-- isoreceived="20090407110508" -->
<!-- sent="Tue, 07 Apr 2009 13:05:04 +0200" -->
<!-- isosent="20090407110504" -->
<!-- name="Bernhard Knapp" -->
<!-- email="bernhard.knapp_at_[hidden]" -->
<!-- subject="[OMPI users] MPI can not open file?" -->
<!-- id="49DB3360.8070107_at_meduniwien.ac.at" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] MPI can not open file?<br>
<strong>From:</strong> Bernhard Knapp (<em>bernhard.knapp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-07 07:05:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8805.php">Ralph Castain: "Re: [OMPI users] MPI can not open file?"</a>
<li><strong>Previous message:</strong> <a href="8803.php">jody: "Re: [OMPI users] ssh MPi and program tests"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8805.php">Ralph Castain: "Re: [OMPI users] MPI can not open file?"</a>
<li><strong>Reply:</strong> <a href="8805.php">Ralph Castain: "Re: [OMPI users] MPI can not open file?"</a>
<li><strong>Reply:</strong> <a href="8814.php">Peter Kjellstrom: "Re: [OMPI users] MPI can not open file?"</a>
<li><strong>Reply:</strong> <a href="8844.php">Jeff Squyres: "Re: [OMPI users] MPI can not open file?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>I am trying to get a parallel job of the gromacs software started. MPI 
<br>
seems to boot fine but unfortunately it seems not to be able to open a 
<br>
specified file although it is definitly in the directory where the job 
<br>
is started. I also changed the file permissions to 777 but it does not 
<br>
affect the result. Any suggestions?
<br>
<p>cheers
<br>
Bernhard
<br>
<p><p>[bknapp_at_quoVadis04 testSet]$ mpirun -np 8 -machinefile 
<br>
/home/bknapp/scripts/machinefile.txt mdrun -np 8 -nice 0 -s 
<br>
1fyt_PKYVKQNTLELAT_bindingRegionsOnly.md.tpr -o 
<br>
1fyt_PKYVKQNTLELAT_bindingRegionsOnly.md.trr -c 
<br>
1fyt_PKYVKQNTLELAT_bindingRegionsOnly.md.pdb -g 
<br>
1fyt_PKYVKQNTLELAT_bindingRegionsOnly.md.log -e 
<br>
1fyt_PKYVKQNTLELAT_bindingRegionsOnly.md.edr -v
<br>
bknapp_at_192.168.0.103's password:
<br>
NNODES=8, MYRANK=1, HOSTNAME=quoVadis04
<br>
NNODES=8, MYRANK=3, HOSTNAME=quoVadis04
<br>
NNODES=8, MYRANK=7, HOSTNAME=quoVadis04
<br>
NNODES=8, MYRANK=0, HOSTNAME=quoVadis03
<br>
NNODES=8, MYRANK=4, HOSTNAME=quoVadis03
<br>
NNODES=8, MYRANK=6, HOSTNAME=quoVadis03
<br>
NODEID=4 argc=16
<br>
NNODES=8, MYRANK=2, HOSTNAME=quoVadis03
<br>
NODEID=1 argc=16
<br>
NODEID=3 argc=16
<br>
NODEID=7 argc=16
<br>
NODEID=2 argc=16
<br>
NODEID=6 argc=16
<br>
NODEID=0 argc=16
<br>
<p><p>--------------------------------------------------------------------------
<br>
MPI_ABORT was invoked on rank 0 in communicator MPI_COMM_WORLD
<br>
with errorcode -1.
<br>
<p>NOTE: invoking MPI_ABORT causes Open MPI to kill all MPI processes.
<br>
You may or may not see output from other processes, depending on
<br>
exactly when Open MPI kills them.
<br>
--------------------------------------------------------------------------
<br>
<p>-------------------------------------------------------
<br>
Program mdrun, VERSION 4.0.3
<br>
Source code file: gmxfio.c, line: 736
<br>
<p>Can not open file:
<br>
1fyt_PKYVKQNTLELAT_bindingRegionsOnly.md.tpr
<br>
-------------------------------------------------------
<br>
<p>&quot;I Need a Little Poison&quot; (Throwing Muses)
<br>
<p>Error on node 0, will try to stop all the nodes
<br>
Halting parallel program mdrun on CPU 0 out of 8
<br>
<p>gcq#108: &quot;I Need a Little Poison&quot; (Throwing Muses)
<br>
<p>--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 0 with PID 3777 on
<br>
node 192.168.0.103 exiting without calling &quot;finalize&quot;. This may
<br>
have caused other processes in the application to be
<br>
terminated by signals sent by mpirun (as reported here).
<br>
--------------------------------------------------------------------------
<br>
<p><p><p><p><p>[bknapp_at_quoVadis04 testSet]$ ll 
<br>
1fyt_PKYVKQNTLELAT_bindingRegionsOnly.md.tpr
<br>
-rwxrwxrwx 1 bknapp bknapp 6118424 2009-03-13 09:44 
<br>
1fyt_PKYVKQNTLELAT_bindingRegionsOnly.md.tpr
<br>
<p><p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8804/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8805.php">Ralph Castain: "Re: [OMPI users] MPI can not open file?"</a>
<li><strong>Previous message:</strong> <a href="8803.php">jody: "Re: [OMPI users] ssh MPi and program tests"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8805.php">Ralph Castain: "Re: [OMPI users] MPI can not open file?"</a>
<li><strong>Reply:</strong> <a href="8805.php">Ralph Castain: "Re: [OMPI users] MPI can not open file?"</a>
<li><strong>Reply:</strong> <a href="8814.php">Peter Kjellstrom: "Re: [OMPI users] MPI can not open file?"</a>
<li><strong>Reply:</strong> <a href="8844.php">Jeff Squyres: "Re: [OMPI users] MPI can not open file?"</a>
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
