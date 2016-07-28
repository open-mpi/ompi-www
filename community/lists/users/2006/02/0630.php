<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Feb 10 08:44:20 2006" -->
<!-- isoreceived="20060210134420" -->
<!-- sent="Fri, 10 Feb 2006 08:44:17 -0500" -->
<!-- isosent="20060210134417" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Anyone has build (used) OpenMPI with BLCR??" -->
<!-- id="15CFF28A-BB81-4E33-B915-A6FC1B06ED9A_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="43EC5C15.5050206_at_inf.ufrgs.br" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-10 08:44:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0631.php">Alexandre Carissimi: "Re: [O-MPI users] Anyone has build (used) OpenMPI with BLCR??"</a>
<li><strong>Previous message:</strong> <a href="0629.php">Jeff Squyres: "Re: [O-MPI users] MacResearch.org announces iPod giveaway contest"</a>
<li><strong>In reply to:</strong> <a href="0627.php">Alexandre Carissimi: "[O-MPI users] Anyone has build (used) OpenMPI with BLCR??"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0631.php">Alexandre Carissimi: "Re: [O-MPI users] Anyone has build (used) OpenMPI with BLCR??"</a>
<li><strong>Reply:</strong> <a href="0631.php">Alexandre Carissimi: "Re: [O-MPI users] Anyone has build (used) OpenMPI with BLCR??"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Alex,
<br>
<p>Checkpoint/Restart is not supported in Open MPI, at the moment. The  
<br>
integration of LAM/MPI style of process fault tolerance using a  
<br>
single process checkpointer (e.g. BLCR) is currently under active  
<br>
development. Unfortunately, I cannot say exactly when you will see it  
<br>
released, but keep watching the users list for updates.
<br>
<p>Cheers,
<br>
Josh
<br>
<p>On Feb 10, 2006, at 4:25 AM, Alexandre Carissimi wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm trying to use BLCR to checkpoint OpenMPI applications
</span><br>
<span class="quotelev1">&gt; but I'm having lots of problems. To begin, I'm note sure that
</span><br>
<span class="quotelev1">&gt; openmpi recognizes blcr. I compiled open mpi with the
</span><br>
<span class="quotelev1">&gt; --with options like I used to do with lam versions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The ompi_info doesn't seems to show blcr support.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any hints? Someone tryed to do that?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Alex
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; ___________________________________________________________________
</span><br>
<span class="quotelev1">&gt; CARISSIMI, Alexandre      Universidade Federal do Rio Grande do Sul
</span><br>
<span class="quotelev1">&gt; asc_at_[hidden]          Instituto de Inform&#225;tica
</span><br>
<span class="quotelev1">&gt; Tel: +55.51.33.16.61.69   Caixa Postal 15064
</span><br>
<span class="quotelev1">&gt; Fax: +55.51.33.16.73.08   CEP:91501-970 Porto Alegre - RS - Brasil
</span><br>
<span class="quotelev1">&gt; ___________________________________________________________________
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
<p><pre>
----
Josh Hursey
jjhursey_at_[hidden]
<a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0631.php">Alexandre Carissimi: "Re: [O-MPI users] Anyone has build (used) OpenMPI with BLCR??"</a>
<li><strong>Previous message:</strong> <a href="0629.php">Jeff Squyres: "Re: [O-MPI users] MacResearch.org announces iPod giveaway contest"</a>
<li><strong>In reply to:</strong> <a href="0627.php">Alexandre Carissimi: "[O-MPI users] Anyone has build (used) OpenMPI with BLCR??"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0631.php">Alexandre Carissimi: "Re: [O-MPI users] Anyone has build (used) OpenMPI with BLCR??"</a>
<li><strong>Reply:</strong> <a href="0631.php">Alexandre Carissimi: "Re: [O-MPI users] Anyone has build (used) OpenMPI with BLCR??"</a>
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
