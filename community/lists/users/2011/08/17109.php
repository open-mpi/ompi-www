<?
$subject_val = "Re: [OMPI users] poll taking too long in open-mpi";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 26 16:46:38 2011" -->
<!-- isoreceived="20110826204638" -->
<!-- sent="Fri, 26 Aug 2011 13:46:55 -0700" -->
<!-- isosent="20110826204655" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] poll taking too long in open-mpi" -->
<!-- id="4E58063F.7040209_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAL0zDUMLYL83Buq-Pa4eGWQ2-R3rjZojFa6HXREXtNoweor11Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] poll taking too long in open-mpi<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-26 16:46:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17110.php">Josh Hursey: "Re: [OMPI users] Related to project ideas in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="17108.php">Shamis, Pavel: "Re: [OMPI users] ConnectX with InfiniHost IB HCAs"</a>
<li><strong>In reply to:</strong> <a href="17090.php">Dick Kachuma: "[OMPI users] poll taking too long in open-mpi"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 8/23/2011 1:24 PM, Dick Kachuma wrote:
<br>
<span class="quotelev1">&gt; I have used gprof to profile a program that uses openmpi. The result
</span><br>
<span class="quotelev1">&gt; shows that the code spends a long time in poll (37% on 8 cores, 50% on
</span><br>
<span class="quotelev1">&gt; 16 and 85% on 32). I was wondering if there is anything I can do to
</span><br>
<span class="quotelev1">&gt; reduce the time spent in poll.
</span><br>
In serial performance optimization, if you spend a lot of time in a 
<br>
function, you try to speed that function up.  In parallel programming, 
<br>
if you spend a lot of time in a function that waits, speeding the 
<br>
function up probably will not help.  You need to speed up the thing 
<br>
you're waiting on.  In the case of poll, it is quite likely that the 
<br>
issue is not that poll is slow, but you're waiting on someone else.
<br>
<p>Other performance tools might help here.  Check 
<br>
<a href="http://www.open-mpi.org/faq/?category=perftools">http://www.open-mpi.org/faq/?category=perftools</a>  E.g., a timeline view 
<br>
of your run might be able to show you what other processes are doing 
<br>
while the long-poll process is idling.
<br>
<span class="quotelev1">&gt; I cannot determine the number of calls
</span><br>
<span class="quotelev1">&gt; made to poll and exactly where they are. The bulk of my code uses
</span><br>
<span class="quotelev1">&gt; exclusively MPI_Ssend for the send and MPI_Irecv and MPI_Wait for the
</span><br>
<span class="quotelev1">&gt; receive. For instance, would there be any gain expected if I switch
</span><br>
<span class="quotelev1">&gt; from MPI_Ssend to MPI_Send?
</span><br>
It depends.  Try to find out which MPI calls are taking a lot of time.  
<br>
How long are the messages you're sending?  If they're short and you're 
<br>
spending a lot of time in MPI_Ssend, then switching to MPI_Send could help.
<br>
<span class="quotelev1">&gt; Alternatively would there be any gain in
</span><br>
<span class="quotelev1">&gt; switching to MPI_Isend/MPI_Recv instead of MPI_Ssend/MPI_Irecv?
</span><br>
Using Isend and Irecv can help if you can do useful work during the time 
<br>
you're waiting for a non-blocking operation to complete.
<br>
<p>Before considering too many strategies, however, it may make most sense 
<br>
to get more performance information on your application.  Which MPI 
<br>
calls are taking the most time?  What message patterns characterize your 
<br>
slowdown?  Are all processes spending lots of time in MPI, or is there 
<br>
one process that is busy in computation and upon whom everyone else is 
<br>
waiting?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17110.php">Josh Hursey: "Re: [OMPI users] Related to project ideas in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="17108.php">Shamis, Pavel: "Re: [OMPI users] ConnectX with InfiniHost IB HCAs"</a>
<li><strong>In reply to:</strong> <a href="17090.php">Dick Kachuma: "[OMPI users] poll taking too long in open-mpi"</a>
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
