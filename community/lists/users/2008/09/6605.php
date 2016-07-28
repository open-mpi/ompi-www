<?
$subject_val = "Re: [OMPI users] Problem with MPI_Send and MPI_Recv";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 18 13:31:47 2008" -->
<!-- isoreceived="20080918173147" -->
<!-- sent="Thu, 18 Sep 2008 13:31:39 -0400" -->
<!-- isosent="20080918173139" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with MPI_Send and MPI_Recv" -->
<!-- id="48D2907B.3020606_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="mailman.1712.1221741097.16379.users_at_open-mpi.org" -->
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
<strong>Date:</strong> 2008-09-18 13:31:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6606.php">John Hearns: "Re: [OMPI users] Linpack Benchmark and File Descriptor Limits"</a>
<li><strong>Previous message:</strong> <a href="6604.php">Alex Wolfe: "[OMPI users] Linpack Benchmark and File Descriptor Limits"</a>
<li><strong>Maybe in reply to:</strong> <a href="6554.php">Sofia Aparicio Secanellas: "[OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6610.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Reply:</strong> <a href="6610.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Reply:</strong> <a href="6612.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Turns out you debugged the mpirun I was actually wanting you to attach to your program, PruebaSumaParalela.out, on both nodes and dump each of their stacks.  
<br>
<p>Is there a reason why you are using 1.2.2 instead of 1.2.7 or something from the 1.3 branch?  I am wondering if maybe there is some sort of bug in the tcp BTL that is preventing it from matching your two interfaces.
<br>
<p>Another thing to try is to specifically list out the interfaces you want to have used.  I do not think this is going to help but it can't hurt either.  I would do something like:
<br>
<p>mpirun -np 2 --host 10.4.5.123,edu_at_10.4.5.126 --mca mpi_preconnect_all  1 --prefix /usr/local -mca btl self,tcp -mca btl_tcp_if_include eth1 ./PruebaSumaParalela.out
<br>
<p><p>--td
<br>
<p>Date: Thu, 18 Sep 2008 13:12:46 +0200
<br>
From: &quot;Sofia Aparicio Secanellas&quot; &lt;saparicio_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] Problem with MPI_Send and MPI_Recv
<br>
To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Message-ID: &lt;35BA42AA514D45239323DB9B38B4C5CE_at_aparicio1&gt;
<br>
Content-Type: text/plain; charset=&quot;iso-8859-1&quot;; Format=&quot;flowed&quot;
<br>
<p>Hello Terry,
<br>
<p>Finally, I have installed dbx. I enclose a file with the result that I get 
<br>
when I type &quot;dbx - PID of mpirun...&quot; and then &quot;where&quot; on computer 10.4.5.123 
<br>
.
<br>
<p>Do you have any idea what could be the problem?
<br>
<p>Thanks a lot!!
<br>
<p>Sofia
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6606.php">John Hearns: "Re: [OMPI users] Linpack Benchmark and File Descriptor Limits"</a>
<li><strong>Previous message:</strong> <a href="6604.php">Alex Wolfe: "[OMPI users] Linpack Benchmark and File Descriptor Limits"</a>
<li><strong>Maybe in reply to:</strong> <a href="6554.php">Sofia Aparicio Secanellas: "[OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6610.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Reply:</strong> <a href="6610.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Reply:</strong> <a href="6612.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
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
