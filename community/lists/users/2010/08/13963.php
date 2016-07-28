<?
$subject_val = "Re: [OMPI users] Hybrid OpenMPI / OpenMP run pins OpenMP threads to a single core";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 10 16:49:45 2010" -->
<!-- isoreceived="20100810204945" -->
<!-- sent="Tue, 10 Aug 2010 15:49:19 -0500" -->
<!-- isosent="20100810204919" -->
<!-- name="David Akin" -->
<!-- email="nospamou_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Hybrid OpenMPI / OpenMP run pins OpenMP threads to a single core" -->
<!-- id="AANLkTik3TVSF4KpY4U6jGYR8mpJteY3YR44JbNKDaWnX_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4C599FB8.2060606_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Hybrid OpenMPI / OpenMP run pins OpenMP threads to a single core<br>
<strong>From:</strong> David Akin (<em>nospamou_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-10 16:49:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13964.php">Gus Correa: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<li><strong>Previous message:</strong> <a href="13962.php">Jeff Squyres: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>In reply to:</strong> <a href="13913.php">Eugene Loh: "Re: [OMPI users] Hybrid OpenMPI / OpenMP run pins OpenMP threads to a single core"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Solved: The process to core locking was due to affinity being set at
<br>
the PSM layer. So I added  -x IPATH_NO_CPUAFFINITY=1 to the mpirun
<br>
command.
<br>
<p>Dave
<br>
<p>On Wed, Aug 4, 2010 at 12:13 PM, Eugene Loh &lt;eugene.loh_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; David Akin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; All,
</span><br>
<span class="quotelev2">&gt;&gt; I'm trying to get the OpenMP portion of the code below to run
</span><br>
<span class="quotelev2">&gt;&gt; multicore on a couple of 8 core nodes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I was gone last week and am trying to catch up on e-mail. &#160;This thread was a little intriguing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I agree with Ralph and Terry:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *) OMPI should not be binding by default.
</span><br>
<span class="quotelev1">&gt; *) There is nothing in your program that would induce binding nor anything in your reported output that indicates binding is occurring.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, any possibility that your use of taskset or top is misleading? &#160;Did you ever try running with --report-bindings as Terry suggested?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The thread also discussed OMPI's inability to control the binding behavior of individual threads. &#160;You can't manage individual threads with OMPI; &#160;you'd have to use a thread-specific mechanism, and many OMP implementations support such mechanisms. &#160;The best you could do with OMPI would be to unbind or bind broadly (e.g., to an entire socket), and that policy would be applied to all the threads within the process.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But, all that should be unnecessary... there shouldn't be any binding by default in the first place. &#160;I'd check into whether these threads really are being bound and, if so, why.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13964.php">Gus Correa: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<li><strong>Previous message:</strong> <a href="13962.php">Jeff Squyres: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>In reply to:</strong> <a href="13913.php">Eugene Loh: "Re: [OMPI users] Hybrid OpenMPI / OpenMP run pins OpenMP threads to a single core"</a>
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
