<?
$subject_val = "Re: [OMPI users] possible bug exercised by mpi4py";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 23 18:23:33 2012" -->
<!-- isoreceived="20120523222333" -->
<!-- sent="Wed, 23 May 2012 19:22:47 -0300" -->
<!-- isosent="20120523222247" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] possible bug exercised by mpi4py" -->
<!-- id="CAEcYPwBMyrtOWBAhrx+LGp_i7RvuyOXp187CGEmCZSS_jiVcnA_at_mail.gmail.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="7B3C592E-70DF-4713-9A69-23E88AC0E974_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] possible bug exercised by mpi4py<br>
<strong>From:</strong> Lisandro Dalcin (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-23 18:22:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19354.php">Jeff Squyres: "Re: [OMPI users] openmpi-1.6 undefined reference"</a>
<li><strong>Previous message:</strong> <a href="19352.php">marco atzeri: "Re: [OMPI users] openmpi-1.6 undefined reference"</a>
<li><strong>In reply to:</strong> <a href="19351.php">Jeff Squyres: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19355.php">Bennet Fauber: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>Reply:</strong> <a href="19355.php">Bennet Fauber: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>Reply:</strong> <a href="19357.php">Bennet Fauber: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 23 May 2012 19:04, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Thanks for all the info!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But still, can we get a copy of the test in C? &#194;&#160;That would make it significantly easier for us to tell if there is a problem with Open MPI -- mainly because we don't know anything about the internals of mpi4py.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>FYI, this test ran fine with previous (but recent, let say 1.5.4)
<br>
OpenMPI versions, but fails with 1.6. The test also runs fine with
<br>
MPICH2.
<br>
<p>Sorry for the delay, but writing the test in C takes some time
<br>
compared to Python. Also, it is a bit tiring for me to recode my tests
<br>
to C everytime a new issue shows up with code I'm confident about, but
<br>
I understand you really need something reproducible, so here you have.
<br>
<p>Find attached a C version of the test. See the output below, the test
<br>
runs fine and shows the expected output for np=2,3,4,6,7 but something
<br>
funny happens for np=5.
<br>
<p>[dalcinl_at_trantor tmp]$ mpicc allgather.c
<br>
[dalcinl_at_trantor tmp]$ mpiexec -n 2 ./a.out
<br>
[0] - [0] a
<br>
[1] - [0] a
<br>
[dalcinl_at_trantor tmp]$ mpiexec -n 3 ./a.out
<br>
[0] - [0] ab
<br>
[1] - [0] a
<br>
[2] - [1] a
<br>
[dalcinl_at_trantor tmp]$ mpiexec -n 4 ./a.out
<br>
[3] - [1] ab
<br>
[0] - [0] ab
<br>
[1] - [1] ab
<br>
[2] - [0] ab
<br>
[dalcinl_at_trantor tmp]$ mpiexec -n 6 ./a.out
<br>
[4] - [1] abc
<br>
[5] - [2] abc
<br>
[0] - [0] abc
<br>
[1] - [1] abc
<br>
[2] - [2] abc
<br>
[3] - [0] abc
<br>
[dalcinl_at_trantor tmp]$ mpiexec -n 7 ./a.out
<br>
[5] - [2] abc
<br>
[6] - [3] abc
<br>
[0] - [0] abcd
<br>
[1] - [1] abcd
<br>
[2] - [2] abcd
<br>
[3] - [0] abc
<br>
[4] - [1] abc
<br>
[dalcinl_at_trantor tmp]$ mpiexec -n 5 ./a.out
<br>
[trantor:13791] *** An error occurred in MPI_Allgatherv
<br>
[trantor:13791] *** on communicator
<br>
[trantor:13791] *** MPI_ERR_COUNT: invalid count argument
<br>
[trantor:13791] *** MPI_ERRORS_ARE_FATAL: your MPI job will now abort
<br>
--------------------------------------------------------------------------
<br>
mpiexec has exited due to process rank 2 with PID 13789 on
<br>
node trantor exiting improperly. There are two reasons this could occur:
<br>
<p>1. this process did not call &quot;init&quot; before exiting, but others in
<br>
the job did. This can cause a job to hang indefinitely while it waits
<br>
for all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
<br>
then ALL processes must call &quot;init&quot; prior to termination.
<br>
<p>2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
<br>
By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
<br>
exiting or it will be considered an &quot;abnormal termination&quot;
<br>
<p>This may have caused other processes in the application to be
<br>
terminated by signals sent by mpiexec (as reported here).
<br>
--------------------------------------------------------------------------
<br>
[trantor:13786] 2 more processes have sent help message
<br>
help-mpi-errors.txt / mpi_errors_are_fatal
<br>
[trantor:13786] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to
<br>
see all help / error messages
<br>
<p><p><p><pre>
-- 
Lisandro Dalcin
---------------
CIMEC (INTEC/CONICET-UNL)
Predio CONICET-Santa Fe
Colectora RN 168 Km 472, Paraje El Pozo
3000 Santa Fe, Argentina
Tel: +54-342-4511594 (ext 1011)
Tel/Fax: +54-342-4511169

</pre>
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19353/allgather.c">allgather.c</a>
</ul>
<!-- attachment="allgather.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19354.php">Jeff Squyres: "Re: [OMPI users] openmpi-1.6 undefined reference"</a>
<li><strong>Previous message:</strong> <a href="19352.php">marco atzeri: "Re: [OMPI users] openmpi-1.6 undefined reference"</a>
<li><strong>In reply to:</strong> <a href="19351.php">Jeff Squyres: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19355.php">Bennet Fauber: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>Reply:</strong> <a href="19355.php">Bennet Fauber: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>Reply:</strong> <a href="19357.php">Bennet Fauber: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
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
