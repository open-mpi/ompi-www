<?
$subject_val = "Re: [OMPI users] Problem with MPI_Send and MPI_Recv";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 23 12:25:00 2008" -->
<!-- isoreceived="20080923162500" -->
<!-- sent="Tue, 23 Sep 2008 12:24:46 -0400" -->
<!-- isosent="20080923162446" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with MPI_Send and MPI_Recv" -->
<!-- id="48D9184E.5020502_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="mailman.21.1222185635.3666.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with MPI_Send and MPI_Recv<br>
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-23 12:24:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6704.php">Gus Correa: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>Previous message:</strong> <a href="6702.php">Santolo Felaco: "Re: [OMPI users] Not Found libltdl"</a>
<li><strong>Maybe in reply to:</strong> <a href="6554.php">Sofia Aparicio Secanellas: "[OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6709.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Reply:</strong> <a href="6709.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Sofia,
<br>
<p>Very puzzling indeed.  Can your try to run hostname or uptime with 
<br>
mpirun?  That is something like:
<br>
<p>mpirun -np 2 --host 10.1.10.208,10.1.10.240 --mca mpi_preconnect_all 1 
<br>
--prefix /usr/local -mca btl self,tcp -mca btl_tcp_if_include eth1 hostname
<br>
<p><p>--td
<br>
<p>Date: Tue, 23 Sep 2008 17:05:22 +0200
<br>
From: &quot;Sofia Aparicio Secanellas&quot; &lt;saparicio_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] Problem with MPI_Send and MPI_Recv
<br>
To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Message-ID: &lt;34D2F769A7C946BF915A828A9CD7F3CC_at_aparicio1&gt;
<br>
Content-Type: text/plain; charset=&quot;iso-8859-1&quot;; Format=&quot;flowed&quot;
<br>
<p>Hello Terry,
<br>
<p>Here you can find the files.
<br>
<p>Thank you very much.
<br>
<p>Sofia
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6704.php">Gus Correa: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>Previous message:</strong> <a href="6702.php">Santolo Felaco: "Re: [OMPI users] Not Found libltdl"</a>
<li><strong>Maybe in reply to:</strong> <a href="6554.php">Sofia Aparicio Secanellas: "[OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6709.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Reply:</strong> <a href="6709.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
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
