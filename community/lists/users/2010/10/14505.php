<?
$subject_val = "Re: [OMPI users] busy wait in MPI_Recv";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 20 08:21:43 2010" -->
<!-- isoreceived="20101020122143" -->
<!-- sent="Wed, 20 Oct 2010 08:21:22 -0400" -->
<!-- isosent="20101020122122" -->
<!-- name="Richard Treumann" -->
<!-- email="treumann_at_[hidden]" -->
<!-- subject="Re: [OMPI users] busy wait in MPI_Recv" -->
<!-- id="OF841A7736.6EB9D459-ON852577C2.0041D640-852577C2.0043E01D_at_us.ibm.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="AANLkTimbLQ+ZCi17kzvnJQv3v1Bc8rMXFEDwPRoCXjy5_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] busy wait in MPI_Recv<br>
<strong>From:</strong> Richard Treumann (<em>treumann_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-20 08:21:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14506.php">Siegmar Gross: "[OMPI users] segmentation fault in mpiexec (Linux, Oracle/Sun C)"</a>
<li><strong>Previous message:</strong> <a href="14504.php">livelfs: "Re: [OMPI users] openmpi 1.5 build from rpm fails: --program-prefix now checked in configure"</a>
<li><strong>In reply to:</strong> <a href="14502.php">Brian Budge: "[OMPI users] busy wait in MPI_Recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14509.php">Brian Budge: "Re: [OMPI users] busy wait in MPI_Recv"</a>
<li><strong>Reply:</strong> <a href="14509.php">Brian Budge: "Re: [OMPI users] busy wait in MPI_Recv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian 
<br>
<p>Most HPC applications are run with one processor and one working thread 
<br>
per MPI process. In this case, the node is not being used for other work 
<br>
so if the MPI process does release a processor, there is nothing else 
<br>
important for it to do anyway.
<br>
<p>In these applications, the blocking MPI call (like MPI_Recv) is issued 
<br>
only when there is no more computation that can be done until the MPI_Recv 
<br>
returns with with the message. 
<br>
<p>Unless your application has other threads that can make valuable use of 
<br>
the processor freed up by making MPI_Recv do yields, the polling 
<br>
&quot;overhead&quot; is probably not something to worry about.
<br>
<p>If you do have other work available for the freed processor to turn to, 
<br>
the &quot;problem&quot; may be worth solving. MPI implementations, in general, 
<br>
default to a polling approach because it makes the MPI_Recv faster and if 
<br>
there is nothing else important for the processor to turn to, a fast 
<br>
MPI_Recv is what matters.
<br>
<p><p>Dick Treumann  -  MPI Team 
<br>
IBM Systems &amp; Technology Group
<br>
Dept X2ZA / MS P963 -- 2455 South Road -- Poughkeepsie, NY 12601
<br>
Tele (845) 433-7846         Fax (845) 433-8363
<br>
<p><p><p><p>From:
<br>
Brian Budge &lt;brian.budge_at_[hidden]&gt;
<br>
To:
<br>
Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Date:
<br>
10/19/2010 09:47 PM
<br>
Subject:
<br>
[OMPI users] busy wait in MPI_Recv
<br>
Sent by:
<br>
users-bounces_at_[hidden]
<br>
<p><p><p>Hi all -
<br>
<p>I just ran a small test to find out the overhead of an MPI_Recv call
<br>
when no communication is occurring.   It seems quite high.  I noticed
<br>
during my google excursions that openmpi does busy waiting.  I also
<br>
noticed that the option to -mca mpi_yield_when_idle seems not to help
<br>
much (in fact, turning on the yield seems only to slow down the
<br>
program).  What is the best way to reduce this polling cost during
<br>
low-communication invervals?  Should I write my own recv loop that
<br>
sleeps for short periods?  I don't want to go write someone that is
<br>
possibly already done much better in the library :)
<br>
<p>Thanks,
<br>
&nbsp;&nbsp;Brian
<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14505/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14506.php">Siegmar Gross: "[OMPI users] segmentation fault in mpiexec (Linux, Oracle/Sun C)"</a>
<li><strong>Previous message:</strong> <a href="14504.php">livelfs: "Re: [OMPI users] openmpi 1.5 build from rpm fails: --program-prefix now checked in configure"</a>
<li><strong>In reply to:</strong> <a href="14502.php">Brian Budge: "[OMPI users] busy wait in MPI_Recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14509.php">Brian Budge: "Re: [OMPI users] busy wait in MPI_Recv"</a>
<li><strong>Reply:</strong> <a href="14509.php">Brian Budge: "Re: [OMPI users] busy wait in MPI_Recv"</a>
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
