<?
$subject_val = "Re: [OMPI users] `return EXIT_FAILURE;` triggers error message";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  3 17:11:09 2014" -->
<!-- isoreceived="20140903211109" -->
<!-- sent="Wed, 3 Sep 2014 14:10:51 -0700" -->
<!-- isosent="20140903211051" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] `return EXIT_FAILURE;` triggers error message" -->
<!-- id="E8369CD6-3330-4D49-86D0-97EA3363BA4B_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAK6Z60cAJ-2iKrrn_MHP3cggsix57JdxU_f0MTWshPNs6OwwkQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] `return EXIT_FAILURE;` triggers error message<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-03 17:10:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25253.php">Elio Physics: "[OMPI users] compilation problem with ifort"</a>
<li><strong>Previous message:</strong> <a href="25251.php">Nico Schl&#195;&#182;mer: "[OMPI users] `return EXIT_FAILURE;` triggers error message"</a>
<li><strong>In reply to:</strong> <a href="25251.php">Nico Schl&#195;&#182;mer: "[OMPI users] `return EXIT_FAILURE;` triggers error message"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Exiting with a non-zero status is considered as indicating a failure that needs reporting.
<br>
<p>On Sep 3, 2014, at 1:48 PM, Nico Schl&#246;mer &lt;nico.schloemer_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; with OpenMPI 1.6.5 (default Debian/Ubuntu), I'm running the program
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ```
</span><br>
<span class="quotelev1">&gt; #include &lt;cstdlib&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main( int argc, char* argv[] )
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;  MPI_Init (&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;  MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;  return EXIT_FAILURE;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; ```
</span><br>
<span class="quotelev1">&gt; that unconditionally returns an error flag. When executing this, I'm
</span><br>
<span class="quotelev1">&gt; somewhat surprised to get
</span><br>
<span class="quotelev1">&gt; ```
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpiexec noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev1">&gt; that caused that situation.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ```
</span><br>
<span class="quotelev1">&gt; no matter with how many processes I run this. Returning EXIT_FAILURE
</span><br>
<span class="quotelev1">&gt; seems harmless enough.
</span><br>
<span class="quotelev1">&gt; Needless to say, this does not happen for EXIT_SUCCESS, or in serial
</span><br>
<span class="quotelev1">&gt; execution (without mpiexec).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is this expected behavior? Has this changed in later versions of OpenMPI?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Nico
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/25251.php">http://www.open-mpi.org/community/lists/users/2014/09/25251.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25253.php">Elio Physics: "[OMPI users] compilation problem with ifort"</a>
<li><strong>Previous message:</strong> <a href="25251.php">Nico Schl&#195;&#182;mer: "[OMPI users] `return EXIT_FAILURE;` triggers error message"</a>
<li><strong>In reply to:</strong> <a href="25251.php">Nico Schl&#195;&#182;mer: "[OMPI users] `return EXIT_FAILURE;` triggers error message"</a>
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
