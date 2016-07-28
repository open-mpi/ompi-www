<?
$subject_val = "Re: [OMPI devel] segv in coll tuned";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 12 09:34:12 2009" -->
<!-- isoreceived="20091012133412" -->
<!-- sent="Mon, 12 Oct 2009 09:33:02 -0400" -->
<!-- isosent="20091012133302" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] segv in coll tuned" -->
<!-- id="4AD3300E.1020501_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="453d39990910120630u467bee09ua7045b1be4069b62_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] segv in coll tuned<br>
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-12 09:33:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6957.php">Lenny Verkhovsky: "Re: [OMPI devel] segv in coll tuned"</a>
<li><strong>Previous message:</strong> <a href="6955.php">Lenny Verkhovsky: "[OMPI devel] segv in coll tuned"</a>
<li><strong>In reply to:</strong> <a href="6955.php">Lenny Verkhovsky: "[OMPI devel] segv in coll tuned"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6957.php">Lenny Verkhovsky: "Re: [OMPI devel] segv in coll tuned"</a>
<li><strong>Reply:</strong> <a href="6957.php">Lenny Verkhovsky: "Re: [OMPI devel] segv in coll tuned"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Does that test also pass sometimes?  I am seeing some random set of 
<br>
tests segv'ing in the SM btl, using a v1.3 derivative.
<br>
<p>--td
<br>
Lenny Verkhovsky wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I experience the following error with current trunk r22090. It also 
</span><br>
<span class="quotelev1">&gt; occures in 1.3 branch.
</span><br>
<span class="quotelev1">&gt; #~/work/svn/ompi/branches/1.3//build_x86-64/install/bin/mpirun -H 
</span><br>
<span class="quotelev1">&gt; witch21 -np 4 -mca coll_tuned_use_dynamic_rules 1 ./IMB-MPI1 
</span><br>
<span class="quotelev1">&gt; Sometimes it's error, and sometimes it's segv. It recreates with np&gt;4.
</span><br>
<span class="quotelev1">&gt; [witch21:26540] *** An error occurred in MPI_Barrier
</span><br>
<span class="quotelev1">&gt; [witch21:26540] *** on communicator MPI COMMUNICATOR 3 SPLIT FROM 0
</span><br>
<span class="quotelev1">&gt; [witch21:26540] *** MPI_ERR_ARG: invalid argument of some other kind
</span><br>
<span class="quotelev1">&gt; [witch21:26540] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun has exited due to process rank 0 with PID 26540 on
</span><br>
<span class="quotelev1">&gt; node witch21 exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev1">&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 3 total processes killed (some possibly by mpirun during cleanup)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks
</span><br>
<span class="quotelev1">&gt; Lenny.
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6957.php">Lenny Verkhovsky: "Re: [OMPI devel] segv in coll tuned"</a>
<li><strong>Previous message:</strong> <a href="6955.php">Lenny Verkhovsky: "[OMPI devel] segv in coll tuned"</a>
<li><strong>In reply to:</strong> <a href="6955.php">Lenny Verkhovsky: "[OMPI devel] segv in coll tuned"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6957.php">Lenny Verkhovsky: "Re: [OMPI devel] segv in coll tuned"</a>
<li><strong>Reply:</strong> <a href="6957.php">Lenny Verkhovsky: "Re: [OMPI devel] segv in coll tuned"</a>
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
