<?
$subject_val = "Re: [OMPI users] Handling output of processes";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 23 14:20:03 2009" -->
<!-- isoreceived="20090123192003" -->
<!-- sent="Fri, 23 Jan 2009 20:19:49 +0100" -->
<!-- isosent="20090123191949" -->
<!-- name="Gijsbert Wiesenekker" -->
<!-- email="gijsbert.wiesenekker_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Handling output of processes" -->
<!-- id="497A1855.5000909_at_gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9b0da5ce0901220058n6e534224i78a6daf6b0afc209_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Handling output of processes<br>
<strong>From:</strong> Gijsbert Wiesenekker (<em>gijsbert.wiesenekker_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-23 14:19:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7807.php">Hartzman, Leslie D (MS): "[OMPI users] Newbie needs help! MPI_Wait/MPI_Start/MPI_Issend"</a>
<li><strong>Previous message:</strong> <a href="7805.php">George Bosilca: "Re: [OMPI users] dead lock in MPI_Finalize"</a>
<li><strong>In reply to:</strong> <a href="7757.php">jody: "[OMPI users] Handling output of processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7819.php">Ralph Castain: "Re: [OMPI users] Handling output of processes"</a>
<li><strong>Reply:</strong> <a href="7819.php">Ralph Castain: "Re: [OMPI users] Handling output of processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
jody wrote:
<br>
<span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; I have a small cluster consisting of 9 computers (8x2 CPUs, 1x4 CPUs).
</span><br>
<span class="quotelev1">&gt; I would like to be able to observe the output of the processes
</span><br>
<span class="quotelev1">&gt; separately during an mpirun.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What i currently do is to apply the mpirun to a shell script which
</span><br>
<span class="quotelev1">&gt; opens a xterm for each process,
</span><br>
<span class="quotelev1">&gt; which then starts the actual application.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This works, but is a bit complicated, e.g. finding the window you're
</span><br>
<span class="quotelev1">&gt; interested in among 19 others.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So i was wondering is there a possibility to capture the processes'
</span><br>
<span class="quotelev1">&gt; outputs separately, so
</span><br>
<span class="quotelev1">&gt; i can make an application in which i can switch between the different
</span><br>
<span class="quotelev1">&gt; processor outputs?
</span><br>
<span class="quotelev1">&gt; I could imagine that could be done by wrapper applications which
</span><br>
<span class="quotelev1">&gt; redirect the output over a TCP
</span><br>
<span class="quotelev1">&gt; socket to a server application.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But perhaps there is an easier way, or something like this alread does exist?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank You
</span><br>
<span class="quotelev1">&gt;   Jody
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
For C I use a printf wrapper function that writes the output to a 
<br>
logfile. I derive the name of the logfile from the mpi_id. It prefixes 
<br>
the lines with a time-stamp, so you also get some basic profile 
<br>
information. I can send you the source code if you like.
<br>
<p>Regards,
<br>
Gijsbert
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7807.php">Hartzman, Leslie D (MS): "[OMPI users] Newbie needs help! MPI_Wait/MPI_Start/MPI_Issend"</a>
<li><strong>Previous message:</strong> <a href="7805.php">George Bosilca: "Re: [OMPI users] dead lock in MPI_Finalize"</a>
<li><strong>In reply to:</strong> <a href="7757.php">jody: "[OMPI users] Handling output of processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7819.php">Ralph Castain: "Re: [OMPI users] Handling output of processes"</a>
<li><strong>Reply:</strong> <a href="7819.php">Ralph Castain: "Re: [OMPI users] Handling output of processes"</a>
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
