<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct 31 14:40:21 2006" -->
<!-- isoreceived="20061031194021" -->
<!-- sent="Tue, 31 Oct 2006 14:37:58 -0500" -->
<!-- isosent="20061031193758" -->
<!-- name="Nader Ahmadi" -->
<!-- email="a_nader_at_[hidden]" -->
<!-- subject="[OMPI users] Problem starting rank other than zero" -->
<!-- id="BAY102-DAV171012EAC9146801D8CF1B8DF90_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Nader Ahmadi (<em>a_nader_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-31 14:37:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2097.php">Ralph H Castain: "Re: [OMPI users] Problem starting rank other than zero"</a>
<li><strong>Previous message:</strong> <a href="2095.php">Rainer Keller: "Re: [OMPI users] ompi_info fails: ...invalid ELF header (ignored)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2097.php">Ralph H Castain: "Re: [OMPI users] Problem starting rank other than zero"</a>
<li><strong>Reply:</strong> <a href="2097.php">Ralph H Castain: "Re: [OMPI users] Problem starting rank other than zero"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I am a new OpenMPI user. We are planing to move from IBM AIX POE to OpenMPI.
<br>
I had noproblem to install, configure, and compile my application, using OpenMPI 1.1.2.
<br>
(thank you, for making it so easy).
<br>
<p>&quot;ompi_inf -all&quot; runs fine (see attached ompi_info.txt file), my application runs with no problem, 
<br>
except it only create rank 0. for example if I 
<br>
<p><span class="quotelev2">       &gt;&gt; mpirun  -np 4  my-prog arg1  arg2
</span><br>
<p>I expect mpirun start 4 processes on local host with ranks 0,1,2, and 3.
<br>
I see 4 processes started with rank 0 (see  attahed mpirun_log.txt file).
<br>
<p>The behavior is the same, regardless of using local host, or using -host file or -app file.
<br>
In all cases correct number of the processes starts on local or remote nodes as specified, with rank 0 for all process.
<br>
<p>Note: I have no problem running this application on IBM AIX using POE.
<br>
<p>I know this must be new user's problem. 
<br>
<p>Any comments
<br>
<p>Thanks
<br>
<p>Nader, 
<br>
<p><p><p><p><p><p><p><p><p>
<p>

<br><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2096/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2096/ompi_info.txt">ompi_info.txt</a>
</ul>
<!-- attachment="ompi_info.txt" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2096/mpirun_log.txt">mpirun_log.txt</a>
</ul>
<!-- attachment="mpirun_log.txt" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2097.php">Ralph H Castain: "Re: [OMPI users] Problem starting rank other than zero"</a>
<li><strong>Previous message:</strong> <a href="2095.php">Rainer Keller: "Re: [OMPI users] ompi_info fails: ...invalid ELF header (ignored)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2097.php">Ralph H Castain: "Re: [OMPI users] Problem starting rank other than zero"</a>
<li><strong>Reply:</strong> <a href="2097.php">Ralph H Castain: "Re: [OMPI users] Problem starting rank other than zero"</a>
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
