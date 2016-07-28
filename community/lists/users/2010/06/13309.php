<?
$subject_val = "[OMPI users] A problem with 'mpiexec -launch-agent'";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jun 13 03:02:31 2010" -->
<!-- isoreceived="20100613070231" -->
<!-- sent="Sun, 13 Jun 2010 15:02:18 +0800" -->
<!-- isosent="20100613070218" -->
<!-- name="Zhang Linbo" -->
<!-- email="zlb_at_[hidden]" -->
<!-- subject="[OMPI users] A problem with 'mpiexec -launch-agent'" -->
<!-- id="4C14827A.6070206_at_lsec.cc.ac.cn" -->
<!-- charset="GB18030" -->
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
<strong>From:</strong> Zhang Linbo (<em>zlb_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-13 03:02:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13310.php">HeeJin Kim: "[OMPI users] Problem with compilation : statically linked applications"</a>
<li><strong>Previous message:</strong> <a href="13308.php">David Zhang: "Re: [OMPI users] Master / Slave with Fortran / C languages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13314.php">Reuti: "Re: [OMPI users] A problem with 'mpiexec -launch-agent'"</a>
<li><strong>Reply:</strong> <a href="13314.php">Reuti: "Re: [OMPI users] A problem with 'mpiexec -launch-agent'"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm new to OpenMPI and have encountered a problem with mpiexec.
<br>
<p>Since I need to set up the execution environment for OpenMPI programs
<br>
on the execution nodes, I use the following command line to launch an
<br>
OMPI program:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mpiexec -launch-agent /some_path/myscript ....
<br>
<p>The problem is: the above command works fine if I invoke 'mpiexec'
<br>
without an absolute path just like above (assuming the PATH variable
<br>
is properly set), but if I prepend an absolute path to 'mpiexec', e.g.:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;/OMPI_dir/bin/mpiexec -launch-agent /some_path/myscript ....
<br>
<p>then I get the following error message:
<br>
<p>bash: -c: line 0: syntax error near unexpected token `('
<br>
bash: -c: line 0: ` PATH=/OMPI_dir/bin:$PATH ; export PATH ; 
<br>
LD_LIBRARY_PATH=/OMPI_dir/lib:$LD_LIBRARY_PATH ; export LD_LIBRARY_PATH 
<br>
; /some_path/myscript /OMPI_dir/bin/(null) --daemonize -mca ess env -mca 
<br>
orte_ess_jobid 1978662912 -mca orte_ess_vpid 1 -mca orte_ess_num_procs 2 
<br>
--hnp-uri &quot;1978662912.0;tcp://180.0.14.12:54844;tcp://190.0.14.12:54844&quot;'
<br>
<p>I'd like to know what causes the above problem and how should I deal 
<br>
with it.
<br>
I want to use absolute pathname of mpiexec to avoid possible inteferences
<br>
with other MPI installations. Thanks in advance.
<br>
<p>LB
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13310.php">HeeJin Kim: "[OMPI users] Problem with compilation : statically linked applications"</a>
<li><strong>Previous message:</strong> <a href="13308.php">David Zhang: "Re: [OMPI users] Master / Slave with Fortran / C languages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13314.php">Reuti: "Re: [OMPI users] A problem with 'mpiexec -launch-agent'"</a>
<li><strong>Reply:</strong> <a href="13314.php">Reuti: "Re: [OMPI users] A problem with 'mpiexec -launch-agent'"</a>
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
