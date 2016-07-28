<?
$subject_val = "Re: [OMPI users] FRQ: Warn if components specified but missing";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  4 09:49:10 2008" -->
<!-- isoreceived="20080804134910" -->
<!-- sent="Mon, 4 Aug 2008 09:48:22 -0400" -->
<!-- isosent="20080804134822" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] FRQ: Warn if components specified but missing" -->
<!-- id="94BDFBB4-C3BB-41B0-BC89-D8D559E08509_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="489702D8.7090701_at_init.at" -->
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
<strong>Subject:</strong> Re: [OMPI users] FRQ: Warn if components specified but missing<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-04 09:48:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6261.php">Jeff Squyres: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="6259.php">Bernhard Hermann: "[OMPI users] FRQ: Warn if components specified but missing"</a>
<li><strong>In reply to:</strong> <a href="6259.php">Bernhard Hermann: "[OMPI users] FRQ: Warn if components specified but missing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6262.php">Bernhard Hermann: "Re: [OMPI users] FRQ: Warn if components specified but missing"</a>
<li><strong>Reply:</strong> <a href="6262.php">Bernhard Hermann: "Re: [OMPI users] FRQ: Warn if components specified but missing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the feedback!  Sorry the lack of a clear error message  
<br>
caused you pain.  :-(
<br>
<p>FWIW, we do have this feature in the upcoming v1.3 release.  For  
<br>
example:
<br>
<p>[6:46] svbu-mpi:~/mpi % mpirun -np 2 --mca btl openibbbb,self hello
<br>
--------------------------------------------------------------------------
<br>
A requested component was not found, or was unable to be opened.  This
<br>
means that this component is either not installed or is unable to be
<br>
used on your system (e.g., sometimes this means that shared libraries
<br>
that the component requires are unable to be found/loaded).  Note that
<br>
Open MPI stopped checking at the first component that it did not find.
<br>
<p>Host:      svbu-mpi.cisco.com
<br>
Framework: btl
<br>
Component: openibbbb
<br>
--------------------------------------------------------------------------
<br>
<p>Hopefully, this will help such situations in the future.
<br>
<p><p><p>On Aug 4, 2008, at 9:23 AM, Bernhard Hermann wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We would like to request a warning/error message to be printed  
</span><br>
<span class="quotelev1">&gt; whenever
</span><br>
<span class="quotelev1">&gt; a component (like &quot;openib&quot;) is specified, but not actually loaded.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Our case: Running a job via &quot;tcp&quot; over IB went OK, trying to use
</span><br>
<span class="quotelev1">&gt; &quot;openib&quot; failed. It turned out that while compiling the &quot;openib&quot;  
</span><br>
<span class="quotelev1">&gt; module
</span><br>
<span class="quotelev1">&gt; wasn't made (missing path), so OpenMPI croaked when trying to access  
</span><br>
<span class="quotelev1">&gt; it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This was the error that was of little help to us in tracing the  
</span><br>
<span class="quotelev1">&gt; problem:
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Process 0.1.7 is unable to reach 0.1.0 for MPI communication.
</span><br>
<span class="quotelev1">&gt; If you specified the use of a BTL component, you may have
</span><br>
<span class="quotelev1">&gt; forgotten a component (such as &quot;self&quot;) in the list of
</span><br>
<span class="quotelev1">&gt; usable components.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; your parallel process  
</span><br>
<span class="quotelev1">&gt; is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during MPI_INIT; some of which are due to configuration or  
</span><br>
<span class="quotelev1">&gt; environment
</span><br>
<span class="quotelev1">&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt; developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  PML add procs failed
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Unfortunately we can't provide a patch and would be glad if someone
</span><br>
<span class="quotelev1">&gt; could implement and include this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for your attention,
</span><br>
<span class="quotelev1">&gt; best regards,
</span><br>
<span class="quotelev1">&gt; Bernhard HERMANN
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; init.at informationstechnologie GmbH.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mariahilfer Str. 61/1/10
</span><br>
<span class="quotelev1">&gt; 1060 Wien/Vienna
</span><br>
<span class="quotelev1">&gt; Austria - EU
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tel: +43 1 522 53 77 - 35
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.init.at">http://www.init.at</a>
</span><br>
<span class="quotelev1">&gt; hermann_at_[hidden]
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6261.php">Jeff Squyres: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="6259.php">Bernhard Hermann: "[OMPI users] FRQ: Warn if components specified but missing"</a>
<li><strong>In reply to:</strong> <a href="6259.php">Bernhard Hermann: "[OMPI users] FRQ: Warn if components specified but missing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6262.php">Bernhard Hermann: "Re: [OMPI users] FRQ: Warn if components specified but missing"</a>
<li><strong>Reply:</strong> <a href="6262.php">Bernhard Hermann: "Re: [OMPI users] FRQ: Warn if components specified but missing"</a>
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
