<?
$subject_val = "Re: [OMPI users] Abort";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 12 22:35:38 2010" -->
<!-- isoreceived="20100813023538" -->
<!-- sent="Thu, 12 Aug 2010 19:35:13 -0700" -->
<!-- isosent="20100813023513" -->
<!-- name="David Zhang" -->
<!-- email="solarbikedz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Abort" -->
<!-- id="AANLkTi=RFTUyN3RhzQAFWmAE1_P=Sao0HTJHgA=70LgG_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1281664141.14228.16.camel_at_montroll.chem.mcgill.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] Abort<br>
<strong>From:</strong> David Zhang (<em>solarbikedz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-12 22:35:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14005.php">Ralph Castain: "Re: [OMPI users] Abort"</a>
<li><strong>Previous message:</strong> <a href="14003.php">Randolph Pullen: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>In reply to:</strong> <a href="14002.php">David Ronis: "[OMPI users] Abort"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14006.php">Gus Correa: "Re: [OMPI users] Abort"</a>
<li><strong>Reply:</strong> <a href="14006.php">Gus Correa: "Re: [OMPI users] Abort"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
When my MPI code fails (seg fault), it usually cause the rest of the mpi
<br>
process to abort as well.  Perhaps rather than calling abort(), perhaps you
<br>
could do a divide-by-zero operation to halt the program?
<br>
<p>On Thu, Aug 12, 2010 at 6:49 PM, David Ronis &lt;David.Ronis_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I've got a mpi program that is supposed to to generate a core file if
</span><br>
<span class="quotelev1">&gt; problems arise on any of the nodes.   I tried to do this by adding a
</span><br>
<span class="quotelev1">&gt; call to abort() to my exit routines but this doesn't work; I get no core
</span><br>
<span class="quotelev1">&gt; file, and worse, mpirun doesn't detect that one of my nodes has
</span><br>
<span class="quotelev1">&gt; aborted(?) and doesn't kill off the entire job, except in the trivial
</span><br>
<span class="quotelev1">&gt; case where the number of processors I'm running on is 1.   I've replaced
</span><br>
<span class="quotelev1">&gt; abort with MPI_Abort, which kills everything off, but leaves no core
</span><br>
<span class="quotelev1">&gt; file.  Any suggestions how I can get one and still have mpi exit?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; David
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<p><p><p><pre>
-- 
David Zhang
University of California, San Diego
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14004/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14005.php">Ralph Castain: "Re: [OMPI users] Abort"</a>
<li><strong>Previous message:</strong> <a href="14003.php">Randolph Pullen: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>In reply to:</strong> <a href="14002.php">David Ronis: "[OMPI users] Abort"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14006.php">Gus Correa: "Re: [OMPI users] Abort"</a>
<li><strong>Reply:</strong> <a href="14006.php">Gus Correa: "Re: [OMPI users] Abort"</a>
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
