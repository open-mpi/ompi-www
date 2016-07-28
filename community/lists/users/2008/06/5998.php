<?
$subject_val = "[OMPI users] cat: /tmp/174.1.all.q/machines: No such file or directory";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 27 14:01:22 2008" -->
<!-- isoreceived="20080627180122" -->
<!-- sent="Fri, 27 Jun 2008 11:00:55 -0700 (PDT)" -->
<!-- isosent="20080627180055" -->
<!-- name="Azhar Ali Shah" -->
<!-- email="aas_lakyari_at_[hidden]" -->
<!-- subject="[OMPI users] cat: /tmp/174.1.all.q/machines: No such file or directory" -->
<!-- id="93414.4699.qm_at_web56302.mail.re3.yahoo.com" -->
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
<strong>Subject:</strong> [OMPI users] cat: /tmp/174.1.all.q/machines: No such file or directory<br>
<strong>From:</strong> Azhar Ali Shah (<em>aas_lakyari_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-27 14:00:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5999.php">George Bosilca: "Re: [OMPI users] cat: /tmp/174.1.all.q/machines: No such file or directory"</a>
<li><strong>Previous message:</strong> <a href="5997.php">Joao Marcelo: "Re: [OMPI users] Beginner Problem with OpenMPI (MPI_Waitall)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5999.php">George Bosilca: "Re: [OMPI users] cat: /tmp/174.1.all.q/machines: No such file or directory"</a>
<li><strong>Reply:</strong> <a href="5999.php">George Bosilca: "Re: [OMPI users] cat: /tmp/174.1.all.q/machines: No such file or directory"</a>
<li><strong>Reply:</strong> <a href="6000.php">Reuti: "Re: [OMPI users] cat: /tmp/174.1.all.q/machines: No such file or directory"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Using openmpi-1.2.6 with SGE 6.1u3 when I submit a job script containing: 
<br>
mpirun -n $NSLOTS -machinefile $TMPDIR/machines ~/openmpi_test
<br>
<p>it produces following error in the output file: 
<br>
<p>cat: /tmp/174.1.all.q/machines: No such file or directory
<br>
--------------------------------------------------------------------------
<br>
Open RTE was unable to open the hostfile:
<br>
&#160;&#160;&#160; /tmp/174.1.all.q/machines
<br>
Check to make sure the path and filename are correct.
<br>
--------------------------------------------------------------------------
<br>
[comp5...] [0,0,0] ORTE_ERROR_LOG: Not found in file rmgr_urm.c at line 358
<br>
[comp5....] mpirun: spawn failed with errno=-13
<br>
<p>Earlier I had been running jobs with MPICH2 without any problem. 
<br>
Any ideas on how to get arround it please?
<br>
<p>thanks
<br>
Azhar
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5998/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5999.php">George Bosilca: "Re: [OMPI users] cat: /tmp/174.1.all.q/machines: No such file or directory"</a>
<li><strong>Previous message:</strong> <a href="5997.php">Joao Marcelo: "Re: [OMPI users] Beginner Problem with OpenMPI (MPI_Waitall)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5999.php">George Bosilca: "Re: [OMPI users] cat: /tmp/174.1.all.q/machines: No such file or directory"</a>
<li><strong>Reply:</strong> <a href="5999.php">George Bosilca: "Re: [OMPI users] cat: /tmp/174.1.all.q/machines: No such file or directory"</a>
<li><strong>Reply:</strong> <a href="6000.php">Reuti: "Re: [OMPI users] cat: /tmp/174.1.all.q/machines: No such file or directory"</a>
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
