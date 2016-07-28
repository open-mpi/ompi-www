<?
$subject_val = "[OMPI users] Progress in MPI_Win_unlock";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  3 19:24:18 2010" -->
<!-- isoreceived="20100204002418" -->
<!-- sent="Thu, 04 Feb 2010 01:24:01 +0100" -->
<!-- isosent="20100204002401" -->
<!-- name="Dorian Krause" -->
<!-- email="doriankrause_at_[hidden]" -->
<!-- subject="[OMPI users] Progress in MPI_Win_unlock" -->
<!-- id="4B6A13A1.8010808_at_web.de" -->
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
<strong>Subject:</strong> [OMPI users] Progress in MPI_Win_unlock<br>
<strong>From:</strong> Dorian Krause (<em>doriankrause_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-03 19:24:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11998.php">Prentice Bisbal: "Re: [OMPI users] MPI_Comm_dup hangs"</a>
<li><strong>Previous message:</strong> <a href="11996.php">Damien Hocking: "[OMPI users] INSTALL bug in 64-bit build of OpenMPI Release build on Windows - has workaround"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12006.php">Dave Goodell: "Re: [OMPI users] Progress in MPI_Win_unlock"</a>
<li><strong>Reply:</strong> <a href="12006.php">Dave Goodell: "Re: [OMPI users] Progress in MPI_Win_unlock"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear list,
<br>
<p>from some small tests I ran it appears to me that progress in passive 
<br>
target sided communication  is only guaranteed if the origin issues some 
<br>
&quot;deeper&quot; MPI function (i.e., a simple MPI_Comm_rank is not sufficient). 
<br>
Can someone confirm this experimental observation?
<br>
<p>I have two questions concerning this behavior:
<br>
<p>a) Is this really standard conform? The MPI standard guarantees progress 
<br>
of one-sided communication (if I understand the term &quot;progress&quot; 
<br>
correctly ; the relevant page of the MPI 2.2 standard is 369). Unless it 
<br>
is also specified that a process must eventually exit with a call to 
<br>
MPI_Finalize (I couldn't find such a requirement), progress for RMA 
<br>
access to a passive server which does not participate actively in any 
<br>
MPI communication is not guaranteed, right?
<br>
(Btw. mvapich2 has the same behavior in this regard)
<br>
<p>b) Is there any plan to change this behavior? I am working on an 
<br>
application featuring a badly balanced load between processes. The idea 
<br>
here was to use one-sided communication and hide the load-imbalance by 
<br>
letting idle threads &quot;work ahead&quot; other threads. However, this assumes 
<br>
that progress at these processes is independent of the target side.
<br>
<p>Thanks for your help,
<br>
Dorian
<br>
<p>PS: I just took a look at &quot;Analysis of Implementation Options for MPI-2 
<br>
One-Sided&quot; which answers some of my questions. Nevertheless I'm sending 
<br>
the mail in hopes of triggering discussion about this.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11998.php">Prentice Bisbal: "Re: [OMPI users] MPI_Comm_dup hangs"</a>
<li><strong>Previous message:</strong> <a href="11996.php">Damien Hocking: "[OMPI users] INSTALL bug in 64-bit build of OpenMPI Release build on Windows - has workaround"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12006.php">Dave Goodell: "Re: [OMPI users] Progress in MPI_Win_unlock"</a>
<li><strong>Reply:</strong> <a href="12006.php">Dave Goodell: "Re: [OMPI users] Progress in MPI_Win_unlock"</a>
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
