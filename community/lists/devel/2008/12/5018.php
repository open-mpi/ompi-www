<?
$subject_val = "Re: [OMPI devel] Forwarding SIGTSTP and SIGCONT";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Dec  6 09:03:16 2008" -->
<!-- isoreceived="20081206140316" -->
<!-- sent="Sat, 6 Dec 2008 15:03:06 +0100" -->
<!-- isosent="20081206140306" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Forwarding SIGTSTP and SIGCONT" -->
<!-- id="20081206140305.GA25043_at_ins.uni-bonn.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="49397A5A.1030306_at_Sun.COM" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Forwarding SIGTSTP and SIGCONT<br>
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-06 09:03:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5019.php">Ralf Wildenhues: "Re: [OMPI devel] make dependency problem?"</a>
<li><strong>Previous message:</strong> <a href="5017.php">Tim Mattox: "[OMPI devel] Open MPI v1.3rc2 has been posted"</a>
<li><strong>In reply to:</strong> <a href="5016.php">Rolf Vandevaart: "[OMPI devel] Forwarding SIGTSTP and SIGCONT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5020.php">Ralph Castain: "Re: [OMPI devel] Forwarding SIGTSTP and SIGCONT"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Rolf,
<br>
<p>* Rolf Vandevaart wrote on Fri, Dec 05, 2008 at 08:00:42PM CET:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; One problem is that with SIGTSTP no longer delivering a stop signal to  
</span><br>
<span class="quotelev1">&gt; mpirun, one cannot CTRL-Z at their terminal to stop mpirun.  I am trying  
</span><br>
<span class="quotelev1">&gt; to figure out how big a problem that is.
</span><br>
<p>Why not first deal with sending STOP to the other processes, and when
<br>
done with that, sending a STOP to mpirun, so it stops as well?
<br>
<p>BTW, sending STOP to processes rather than TSTP will prevent them from
<br>
being able to do similar to user processes of their own.  Dunno how
<br>
useful or practical that is for OpenMPI users.
<br>
<p>Cheers,
<br>
Ralf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5019.php">Ralf Wildenhues: "Re: [OMPI devel] make dependency problem?"</a>
<li><strong>Previous message:</strong> <a href="5017.php">Tim Mattox: "[OMPI devel] Open MPI v1.3rc2 has been posted"</a>
<li><strong>In reply to:</strong> <a href="5016.php">Rolf Vandevaart: "[OMPI devel] Forwarding SIGTSTP and SIGCONT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5020.php">Ralph Castain: "Re: [OMPI devel] Forwarding SIGTSTP and SIGCONT"</a>
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
