<?
$subject_val = "Re: [OMPI users] possible bug exercised by mpi4py";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 23 21:12:24 2012" -->
<!-- isoreceived="20120524011224" -->
<!-- sent="Wed, 23 May 2012 21:12:16 -0400 (EDT)" -->
<!-- isosent="20120524011216" -->
<!-- name="Bennet Fauber" -->
<!-- email="bennet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] possible bug exercised by mpi4py" -->
<!-- id="Pine.LNX.4.64.1205232057120.20598_at_joust.gpcc.itd.umich.edu" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAEcYPwBMyrtOWBAhrx+LGp_i7RvuyOXp187CGEmCZSS_jiVcnA_at_mail.gmail.com" -->
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
<strong>From:</strong> Bennet Fauber (<em>bennet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-23 21:12:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19356.php">Jonathan Dursi: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>Previous message:</strong> <a href="19354.php">Jeff Squyres: "Re: [OMPI users] openmpi-1.6 undefined reference"</a>
<li><strong>In reply to:</strong> <a href="19353.php">Lisandro Dalcin: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19356.php">Jonathan Dursi: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>Reply:</strong> <a href="19356.php">Jonathan Dursi: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 23 May 2012, Lisandro Dalcin wrote:
<br>
<p><span class="quotelev1">&gt; On 23 May 2012 19:04, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for all the info!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But still, can we get a copy of the test in C? &#194;&#160;That would make it significantly easier for us to tell if there is a problem with Open MPI -- mainly because we don't know anything about the internals of mpi4py.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FYI, this test ran fine with previous (but recent, let say 1.5.4)
</span><br>
<span class="quotelev1">&gt; OpenMPI versions, but fails with 1.6. The test also runs fine with
</span><br>
<span class="quotelev1">&gt; MPICH2.
</span><br>
<p>I compiled the C example Lisandro provided using openmpi/1.4.3 compiled 
<br>
against the Intel 11.0 compilers, and it ran the first time.  I then 
<br>
recompiled using gcc 4.6.2 and openmpi 1.4.4, and it provided the 
<br>
following errors:
<br>
<p>$ mpirun -np 5 a.out
<br>
[hostname:6601] *** An error occurred in MPI_Allgatherv
<br>
[hostname:6601] *** on communicator
<br>
[hostname:6601] *** MPI_ERR_COUNT: invalid count argument
<br>
[hostname:6601] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 4 with PID 6601 on
<br>
node hostname exiting without calling &quot;finalize&quot;. This may
<br>
have caused other processes in the application to be
<br>
terminated by signals sent by mpirun (as reported here).
<br>
--------------------------------------------------------------------------
<br>
<p>I then recompiled using the Intel compilers, and it runs without error 10 
<br>
out of 10 times.
<br>
<p>I then recompiled using the gcc 4.6.2/openmpi 1.4.4 combination, and it 
<br>
fails consistently.
<br>
<p>On the second and subsequent tries, it provides the following additional 
<br>
errors:
<br>
<p>$ mpirun -np 5 a.out
<br>
[hostname:7168] *** An error occurred in MPI_Allgatherv
<br>
[hostname:7168] *** on communicator
<br>
[hostname:7168] *** MPI_ERR_COUNT: invalid count argument
<br>
[hostname:7168] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 2 with PID 7168 on
<br>
node hostname exiting without calling &quot;finalize&quot;. This may
<br>
have caused other processes in the application to be
<br>
terminated by signals sent by mpirun (as reported here).
<br>
--------------------------------------------------------------------------
<br>
[hostname:07163] 1 more process has sent help message help-mpi-errors.txt / mpi_errors_are_fatal
<br>
[hostname:07163] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
<br>
<p>Not sure if that information is helpful or not.
<br>
<p>I am still completely puzzled why the number 5 is magic....
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- bennet
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19356.php">Jonathan Dursi: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>Previous message:</strong> <a href="19354.php">Jeff Squyres: "Re: [OMPI users] openmpi-1.6 undefined reference"</a>
<li><strong>In reply to:</strong> <a href="19353.php">Lisandro Dalcin: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19356.php">Jonathan Dursi: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>Reply:</strong> <a href="19356.php">Jonathan Dursi: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
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
