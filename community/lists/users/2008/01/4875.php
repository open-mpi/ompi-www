<?
$subject_val = "[OMPI users] (no subject)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 24 12:39:09 2008" -->
<!-- isoreceived="20080124173909" -->
<!-- sent="Thu, 24 Jan 2008 12:38:59 -0500" -->
<!-- isosent="20080124173859" -->
<!-- name="Wong, Wayne" -->
<!-- email="Wayne.Wong_at_[hidden]" -->
<!-- subject="[OMPI users] (no subject)" -->
<!-- id="755A7FC671B5C84B9467E77829ACFCCD32FE28_at_ava-es5.solers.local" -->
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
<strong>Subject:</strong> [OMPI users] (no subject)<br>
<strong>From:</strong> Wong, Wayne (<em>Wayne.Wong_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-24 12:38:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4876.php">Mostyn Lewis: "[OMPI users] openmpi-1.2.4-1/OFED 1.2.5.4 ConnectX MPI_Reduce hang"</a>
<li><strong>Previous message:</strong> <a href="4874.php">Barry Rountree: "Re: [OMPI users] Occasional mpirun hang on completion"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/04/1109.php">semper: "Re: [OMPI users] (no subject)"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/04/1109.php">semper: "Re: [OMPI users] (no subject)"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/07/1562.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] (no subject)"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/04/3031.php">JiaXing Cai: "Re: [OMPI users] (no subject)"</a>
<li><strong>Reply:</strong> <a href="4899.php">Josh Hursey: "Re: [OMPI users] (no subject)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm having some difficulty geting the Open MPI checkpoint/restart fault
<br>
tolerance working.  I have compiled Open MPI with the &quot;--with-ft=cr&quot;
<br>
flag, but when I attempt to run my test program (ring), the
<br>
ompi-checkpoint command fails.  I have verified that the test program
<br>
works fine without the fault tolerance enabled.  Here are the details:
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[me_at_dev1 ~]$ mpirun -np 4 -am ft-enable-cr ring
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[me_at_dev1 ~]$ ps -efa | grep mpirun
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;me     3052  2820  1 08:25 pts/2    00:00:00 mpirun -np 4 -am
<br>
ft-enable-cr ring
<br>
&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[me_at_dev1 ~]$ ompi-checkpoint 3052
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[dev1.acme.local:03060] [NO-NAME] ORTE_ERROR_LOG: Unknown error:
<br>
5854512 in file sds_singleton_module.c at line 50
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[dev1.acme.local:03060] [NO-NAME] ORTE_ERROR_LOG: Unknown error:
<br>
5854512 in file runtime/orte_init.c at line 311
<br>
&nbsp;
<br>
------------------------------------------------------------------------
<br>
<pre>
--
     It looks like orte_init failed for some reason; your parallel
process is
     likely to abort.  There are many reasons that a parallel process
can
     fail during orte_init; some of which are due to configuration or
     environment problems.  This failure appears to be an internal
failure;
     here's some additional information (which may only be relevant to
an
     Open MPI developer):
 
       orte_sds_base_set_name failed
       --&gt; Returned value Unknown error: 5854512 (5854512) instead of
ORTE_SUCCESS
 
 
------------------------------------------------------------------------
--
Any help would be appreciated.  Thanks.
</pre>
<p>
<p>

<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4875/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4875/ompi_info.txt.gz">ompi_info.txt.gz</a>
</ul>
<!-- attachment="ompi_info.txt.gz" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4875/config.log.gz">config.log.gz</a>
</ul>
<!-- attachment="config.log.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4876.php">Mostyn Lewis: "[OMPI users] openmpi-1.2.4-1/OFED 1.2.5.4 ConnectX MPI_Reduce hang"</a>
<li><strong>Previous message:</strong> <a href="4874.php">Barry Rountree: "Re: [OMPI users] Occasional mpirun hang on completion"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/04/1109.php">semper: "Re: [OMPI users] (no subject)"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/04/1109.php">semper: "Re: [OMPI users] (no subject)"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/07/1562.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] (no subject)"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/04/3031.php">JiaXing Cai: "Re: [OMPI users] (no subject)"</a>
<li><strong>Reply:</strong> <a href="4899.php">Josh Hursey: "Re: [OMPI users] (no subject)"</a>
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
