<?
$subject_val = "[OMPI users] Observation for OPAL_PREFIX usage in product deployment.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  1 07:49:09 2010" -->
<!-- isoreceived="20100901114909" -->
<!-- sent="Wed, 01 Sep 2010 07:49:04 -0400" -->
<!-- isosent="20100901114904" -->
<!-- name="Roger Martin" -->
<!-- email="roger_at_[hidden]" -->
<!-- subject="[OMPI users] Observation for OPAL_PREFIX usage in product deployment." -->
<!-- id="4C7E3DB0.7020306_at_quantumbioinc.com" -->
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
<strong>From:</strong> Roger Martin (<em>roger_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-01 07:49:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14140.php">ananda.mudar_at_[hidden]: "[OMPI users] MPI_Bcast() Vs paired MPI_Send() &amp; MPI_Recv()"</a>
<li><strong>Previous message:</strong> <a href="14138.php">Reuti: "Re: [OMPI users] compilation error using pgf90 ver 9.0"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;Hi all,
<br>
<p>In looking through documentation and searching I didn't come across this 
<br>
anywhere.  If it is common knowledge then skip this email:-)
<br>
<p>If you set OPAL_PREFIX to something other than your build install, then 
<br>
it also needs to be passed through the mpirun's -x flag:
<br>
<p>mpirun -x OPAL_PREFIX -x QBHOME -x PATH -x LD_LIBRARY_PATH -x 
<br>
MKL_NUM_THREADS -x MKL_DYNAMIC -machinefile $PBS_NODEFILE 
<br>
$EXAMPLE_PATH/bin/connectivity_c.bin $@ -
<br>
<p><p>The higher ranked processes and especially one's on other machines will 
<br>
get their OPAL paths correctly to the help files and will run without 
<br>
hanging  if the build install isn't available.  When you send your 
<br>
compiled application installation to a user on another network, it 
<br>
should also work correctly for them too.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14140.php">ananda.mudar_at_[hidden]: "[OMPI users] MPI_Bcast() Vs paired MPI_Send() &amp; MPI_Recv()"</a>
<li><strong>Previous message:</strong> <a href="14138.php">Reuti: "Re: [OMPI users] compilation error using pgf90 ver 9.0"</a>
<!-- nextthread="start" -->
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
