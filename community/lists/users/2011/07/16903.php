<?
$subject_val = "Re: [OMPI users] OpenMPI vs Intel Efficiency question";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 12 21:50:16 2011" -->
<!-- isoreceived="20110713015016" -->
<!-- sent="Tue, 12 Jul 2011 18:50:06 -0700" -->
<!-- isosent="20110713015006" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI vs Intel Efficiency question" -->
<!-- id="4E1CF9CE.3000007_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C47F8344CE6D9B459A06E351D9CF25C904227C72_at_POSTOFFICE.seas.wustl.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI vs Intel Efficiency question<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-12 21:50:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16904.php">Ralph Castain: "Re: [OMPI users] a question about network connection of open-mpi"</a>
<li><strong>Previous message:</strong> <a href="16902.php">zhuangchao: "[OMPI users] a question about  network  connection  of  open-mpi"</a>
<li><strong>In reply to:</strong> <a href="16901.php">Mohan, Ashwin: "[OMPI users] OpenMPI vs Intel Efficiency question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16905.php">Tim Prince: "Re: [OMPI users] OpenMPI vs Intel Efficiency question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 7/12/2011 4:45 PM, Mohan, Ashwin wrote:
<br>
<span class="quotelev1">&gt; I noticed that the exact same code took 50% more time to run on OpenMPI
</span><br>
<span class="quotelev1">&gt; than Intel.
</span><br>
It would be good to know if that extra time is spent inside MPI calls or 
<br>
not.  There is a discussion of how you might do this here:  
<br>
<a href="http://www.open-mpi.org/faq/?category=perftools">http://www.open-mpi.org/faq/?category=perftools</a>  You should probably 
<br>
start here and narrow down your investigation.
<br>
<p>If the difference is the time spent inside MPI calls... um, that would 
<br>
be interesting.
<br>
<p>If the difference is time spent outside MPI calls, how you are compiling 
<br>
(which serial compiler is being used, which optimization flags, etc.) 
<br>
could be the issue.  Or possibly how processes are placed on a node 
<br>
(&quot;paffinity&quot; or &quot;binding&quot; issues).
<br>
<span class="quotelev1">&gt; Does the compiler flags have an effect on the efficiency of the
</span><br>
<span class="quotelev1">&gt; simulation.
</span><br>
Sure.  Ideally, most of the time is spent in parallel computation and 
<br>
very little in MPI.  For performance in such an &quot;ideal&quot; case, any 
<br>
&quot;decent&quot; MPI implementation (OMPI and Intel hopefully among them) should 
<br>
do just fine.
<br>
<span class="quotelev1">&gt; Will including MPICH2 increase efficiency in running simulations using
</span><br>
<span class="quotelev1">&gt; OpenMPI?
</span><br>
MPICH2 and OMPI are MPI implementations.  You choose one or the other 
<br>
(or other options... e.g., Intel).
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16904.php">Ralph Castain: "Re: [OMPI users] a question about network connection of open-mpi"</a>
<li><strong>Previous message:</strong> <a href="16902.php">zhuangchao: "[OMPI users] a question about  network  connection  of  open-mpi"</a>
<li><strong>In reply to:</strong> <a href="16901.php">Mohan, Ashwin: "[OMPI users] OpenMPI vs Intel Efficiency question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16905.php">Tim Prince: "Re: [OMPI users] OpenMPI vs Intel Efficiency question"</a>
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
