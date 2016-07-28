<?
$subject_val = "[OMPI users] Issue with Open -MPI while running intel IMB benchmarks";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  5 01:26:58 2012" -->
<!-- isoreceived="20120105062658" -->
<!-- sent="Thu, 5 Jan 2012 11:56:53 +0530" -->
<!-- isosent="20120105062653" -->
<!-- name="Venkateswara Rao Dokku" -->
<!-- email="dvrao.584_at_[hidden]" -->
<!-- subject="[OMPI users] Issue with Open -MPI while running intel IMB benchmarks" -->
<!-- id="CACiOAOA0spAAnGEkMGi_D6ecau1f=nU6-+Smk94dFso5dm5MUg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Issue with Open -MPI while running intel IMB benchmarks<br>
<strong>From:</strong> Venkateswara Rao Dokku (<em>dvrao.584_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-05 01:26:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18096.php">devendra rai: "[OMPI users] Can we avoid derived datatypes?: Update!"</a>
<li><strong>Previous message:</strong> <a href="18094.php">V. Ram: "Re: [OMPI users] Error launching w/ 1.5.3 on IB mthca nodes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;We tried to run the Reduce_scatter test(given in IMB_3.2.1) on our
<br>
customized OFED, the command used and the error thrown is given below...
<br>
<p>*command:*
<br>
mpirun --prefix /usr/local/ -np 3 --mca btl openib,self,sm -H
<br>
192.168.0.157,192.168.0.167,192.168.0.177 --mca orte_base_help_aggregate 0
<br>
/root/subash/imb/src/IMB-MPI1 reduce_scatter
<br>
<p>*error:*
<br>
[localhost.localdomain:06040] *** An error occurred in MPI_Reduce_scatter
<br>
[localhost.localdomain:06040] *** on communicator MPI COMMUNICATOR 3 SPLIT
<br>
FROM 0
<br>
[localhost.localdomain:06040] *** MPI_ERR_TRUNCATE: message truncated
<br>
[localhost.localdomain:06040] *** MPI_ERRORS_ARE_FATAL (your MPI job will
<br>
now abort)
<br>
--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 1 with PID 6040 on
<br>
node 192.168.0.167 exiting without calling &quot;finalize&quot;. This may
<br>
have caused other processes in the application to be
<br>
terminated by signals sent by mpirun (as reported here).
<br>
--------------------------------------------------------------------------
<br>
<p>We didn't get much of the information regarding this error... can you
<br>
please clarify the reason for that error..??
<br>
We were able to run all the remaining tests that were there in the intel
<br>
IMB bench mark tool, and the basic ping-pong tests and q-perf  cases also...
<br>
<p>Thanks for your reply..
<br>
<p><pre>
-- 
Thanks &amp; Regards,
D.Venkateswara Rao,
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18095/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18096.php">devendra rai: "[OMPI users] Can we avoid derived datatypes?: Update!"</a>
<li><strong>Previous message:</strong> <a href="18094.php">V. Ram: "Re: [OMPI users] Error launching w/ 1.5.3 on IB mthca nodes"</a>
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
