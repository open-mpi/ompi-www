<?
$subject_val = "Re: [OMPI users] problems with one sided MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  1 14:47:04 2009" -->
<!-- isoreceived="20090901184704" -->
<!-- sent="Tue, 01 Sep 2009 20:46:57 +0200" -->
<!-- isosent="20090901184657" -->
<!-- name="Dorian Krause" -->
<!-- email="doriankrause_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problems with one sided MPI" -->
<!-- id="4A9D6C21.7090803_at_web.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4A9BE4C9.9010101_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] problems with one sided MPI<br>
<strong>From:</strong> Dorian Krause (<em>doriankrause_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-01 14:46:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10537.php">Eugene Loh: "Re: [OMPI users] Job distribution on many-core NUMA system"</a>
<li><strong>Previous message:</strong> <a href="10535.php">Greg Fischer: "[OMPI users] OMPI error in MPI_Cart_create (in code that works with MPICH2)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/08/10521.php">Marcus Daniels: "[OMPI users] problems with one sided MPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Marcus,
<br>
<p>Marcus Daniels wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm trying to do passive one-sided communication, unlocking a receive 
</span><br>
<span class="quotelev1">&gt; buffer when it is safe and then re-locking it when data has arrived.  
</span><br>
<span class="quotelev1">&gt; Locking also occurs for the duration of a send.
</span><br>
<span class="quotelev1">&gt; I also tried using post/wait and start/put/complete, but with that I 
</span><br>
<span class="quotelev1">&gt; see hangs on the complete.
</span><br>
<span class="quotelev1">&gt; What would cause an error like this?
</span><br>
<span class="quotelev1">&gt; [snout.lanl.gov:713] *** An error occurred in MPI_Win_lock
</span><br>
<span class="quotelev1">&gt; [snout.lanl.gov:713] *** on win 5
</span><br>
<span class="quotelev1">&gt; [snout.lanl.gov:713] *** MPI_ERR_RMA_SYNC: error executing rma sync
</span><br>
<span class="quotelev1">&gt; [snout.lanl.gov:713] *** MPI_ERRORS_ARE_FATAL (your MPI job will now 
</span><br>
<span class="quotelev1">&gt; abort)
</span><br>
<span class="quotelev1">&gt; [snout.lanl.gov:713] Delaying for 30 seconds before aborting
</span><br>
<span class="quotelev1">&gt; [snout.lanl.gov:712] Delaying for 30 seconds before aborting
</span><br>
<span class="quotelev1">&gt; [snout.lanl.gov:00711] 1 more process has sent help message 
</span><br>
<span class="quotelev1">&gt; help-mpi-errors.txt / mpi_errors_are_fatal
</span><br>
<span class="quotelev1">&gt; [snout.lanl.gov:00711] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 
</span><br>
<span class="quotelev1">&gt; 0 to see all help / error messages
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is one sided communication well-tested?   I'm doing these experiments 
</span><br>
<span class="quotelev1">&gt; on one machine (a Mac).
</span><br>
<p>In my experience it is rather untested, especially because the user base 
<br>
is small. I have now a programm with one-sided communication (MPI_Put) 
<br>
with fence synchronization and predefined datatypes, running stable with 
<br>
open mpi (works well as far as I can tell). I didn't tested pscw 
<br>
synchronization or locking so far (because they don't work with my 
<br>
algorithms) ...
<br>
<p>Does your code run with other mpi implementations (e.g. mpich2). Could 
<br>
you post a code snippet?
<br>
<p>Dorian
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Marcus
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10537.php">Eugene Loh: "Re: [OMPI users] Job distribution on many-core NUMA system"</a>
<li><strong>Previous message:</strong> <a href="10535.php">Greg Fischer: "[OMPI users] OMPI error in MPI_Cart_create (in code that works with MPICH2)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/08/10521.php">Marcus Daniels: "[OMPI users] problems with one sided MPI"</a>
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
