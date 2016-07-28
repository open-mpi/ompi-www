<?
$subject_val = "Re: [OMPI users] FRQ: Warn if components specified but missing";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  4 10:05:41 2008" -->
<!-- isoreceived="20080804140541" -->
<!-- sent="Mon, 04 Aug 2008 16:05:36 +0200" -->
<!-- isosent="20080804140536" -->
<!-- name="Bernhard Hermann" -->
<!-- email="hermann_at_[hidden]" -->
<!-- subject="Re: [OMPI users] FRQ: Warn if components specified but missing" -->
<!-- id="48970CB0.4080703_at_init.at" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="94BDFBB4-C3BB-41B0-BC89-D8D559E08509_at_cisco.com" -->
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
<strong>From:</strong> Bernhard Hermann (<em>hermann_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-04 10:05:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6263.php">Jeff Squyres: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="6261.php">Jeff Squyres: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>In reply to:</strong> <a href="6260.php">Jeff Squyres: "Re: [OMPI users] FRQ: Warn if components specified but missing"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Thanks for the feedback!  Sorry the lack of a clear error message caused
</span><br>
<span class="quotelev1">&gt; you pain.  :-(
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FWIW, we do have this feature in the upcoming v1.3 release.  For example:
</span><br>
<p>That's very good to know. Thanks for the prompt and informative reply.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [6:46] svbu-mpi:~/mpi % mpirun -np 2 --mca btl openibbbb,self hello
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A requested component was not found, or was unable to be opened.  This
</span><br>
<span class="quotelev1">&gt; means that this component is either not installed or is unable to be
</span><br>
<span class="quotelev1">&gt; used on your system (e.g., sometimes this means that shared libraries
</span><br>
<span class="quotelev1">&gt; that the component requires are unable to be found/loaded).  Note that
</span><br>
<span class="quotelev1">&gt; Open MPI stopped checking at the first component that it did not find.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Host:      svbu-mpi.cisco.com
</span><br>
<span class="quotelev1">&gt; Framework: btl
</span><br>
<span class="quotelev1">&gt; Component: openibbbb
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hopefully, this will help such situations in the future.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 4, 2008, at 9:23 AM, Bernhard Hermann wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We would like to request a warning/error message to be printed whenever
</span><br>
<span class="quotelev2">&gt;&gt; a component (like &quot;openib&quot;) is specified, but not actually loaded.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Our case: Running a job via &quot;tcp&quot; over IB went OK, trying to use
</span><br>
<span class="quotelev2">&gt;&gt; &quot;openib&quot; failed. It turned out that while compiling the &quot;openib&quot; module
</span><br>
<span class="quotelev2">&gt;&gt; wasn't made (missing path), so OpenMPI croaked when trying to access it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This was the error that was of little help to us in tracing the problem:
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Process 0.1.7 is unable to reach 0.1.0 for MPI communication.
</span><br>
<span class="quotelev2">&gt;&gt; If you specified the use of a BTL component, you may have
</span><br>
<span class="quotelev2">&gt;&gt; forgotten a component (such as &quot;self&quot;) in the list of
</span><br>
<span class="quotelev2">&gt;&gt; usable components.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev2">&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt;&gt; fail during MPI_INIT; some of which are due to configuration or
</span><br>
<span class="quotelev2">&gt;&gt; environment
</span><br>
<span class="quotelev2">&gt;&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev2">&gt;&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev2">&gt;&gt; developer):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  PML add procs failed
</span><br>
<span class="quotelev2">&gt;&gt;  --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev2">&gt;&gt; *** before MPI was initialized
</span><br>
<span class="quotelev2">&gt;&gt; *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Unfortunately we can't provide a patch and would be glad if someone
</span><br>
<span class="quotelev2">&gt;&gt; could implement and include this.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for your attention,
</span><br>
<span class="quotelev2">&gt;&gt; best regards,
</span><br>
<span class="quotelev2">&gt;&gt; Bernhard HERMANN
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; init.at informationstechnologie GmbH.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Mariahilfer Str. 61/1/10
</span><br>
<span class="quotelev2">&gt;&gt; 1060 Wien/Vienna
</span><br>
<span class="quotelev2">&gt;&gt; Austria - EU
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Tel: +43 1 522 53 77 - 35
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.init.at">http://www.init.at</a>
</span><br>
<span class="quotelev2">&gt;&gt; hermann_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
-- 
Bernhard HERMANN
init.at informationstechnologie GmbH.
Mariahilfer Str. 61/1/10
1060 Wien/Vienna
Austria - EU
Tel: +43 1 522 53 77 - 35
<a href="http://www.init.at">http://www.init.at</a>
hermann_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6263.php">Jeff Squyres: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="6261.php">Jeff Squyres: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>In reply to:</strong> <a href="6260.php">Jeff Squyres: "Re: [OMPI users] FRQ: Warn if components specified but missing"</a>
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
