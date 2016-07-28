<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep 11 13:17:23 2007" -->
<!-- isoreceived="20070911171723" -->
<!-- sent="Tue, 11 Sep 2007 13:17:14 -0400" -->
<!-- isosent="20070911171714" -->
<!-- name="Aurelien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [devel-core] [RFC] Exit without finalize" -->
<!-- id="9028E8C7-E7D7-4FEF-B316-CA2EA099B6C2_at_cs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E16E073E-A517-4BFD-A483-7CF24D6A5AFF_at_cisco.com" -->
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
<strong>From:</strong> Aurelien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-11 13:17:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2309.php">Rolf.Vandevaart_at_[hidden]: "[OMPI devel] Which tests for larger cluster testing"</a>
<li><strong>Previous message:</strong> <a href="2307.php">Jeff Squyres: "Re: [OMPI devel] [devel-core] [RFC] Exit without finalize"</a>
<li><strong>In reply to:</strong> <a href="2307.php">Jeff Squyres: "Re: [OMPI devel] [devel-core] [RFC] Exit without finalize"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sounds great to me.
<br>
<p>Aurelien
<br>
<p>Le 11 sept. 07 &#224; 13:03, Jeff Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; If you genericize the concept, I think it's compatible with FT:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. during MPI_INIT, one of the MPI processes can request a &quot;notify&quot;
</span><br>
<span class="quotelev1">&gt; exit pattern for the job: a process must notify the RTE before it
</span><br>
<span class="quotelev1">&gt; actually exits (i.e., some ORTE notification during MPI_FINALIZE).
</span><br>
<span class="quotelev1">&gt; If a process exits before notifying the RTE, it's an error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1a. The default action upon error can be to kill the entire job.
</span><br>
<span class="quotelev1">&gt; 1b. If you desire plug-in-able error actions (e.g., not kill the
</span><br>
<span class="quotelev1">&gt; entire job), I'm *assuming* that our plugin frameworks can handle
</span><br>
<span class="quotelev1">&gt; that...?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. for an FT MPI job, I assume that the MPI processes would either
</span><br>
<span class="quotelev1">&gt; not perform step 1 (i.e., the default action upon process exit is
</span><br>
<span class="quotelev1">&gt; nothing -- just like if you had run &quot;mpirun -np 4 hostname&quot;), or you
</span><br>
<span class="quotelev1">&gt; would select a specific action upon error/plugin for what to do when
</span><br>
<span class="quotelev1">&gt; a process exits without first notifying the RTE.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Howzat?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2309.php">Rolf.Vandevaart_at_[hidden]: "[OMPI devel] Which tests for larger cluster testing"</a>
<li><strong>Previous message:</strong> <a href="2307.php">Jeff Squyres: "Re: [OMPI devel] [devel-core] [RFC] Exit without finalize"</a>
<li><strong>In reply to:</strong> <a href="2307.php">Jeff Squyres: "Re: [OMPI devel] [devel-core] [RFC] Exit without finalize"</a>
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
