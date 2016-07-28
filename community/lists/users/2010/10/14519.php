<?
$subject_val = "Re: [OMPI users] Question about MPI_Barrier";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 21 02:37:45 2010" -->
<!-- isoreceived="20101021063745" -->
<!-- sent="Thu, 21 Oct 2010 08:37:41 +0200" -->
<!-- isosent="20101021063741" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question about MPI_Barrier" -->
<!-- id="AANLkTimuCf6ha18sHNR0-K4ePA++mzS1DuRFLEZmqPah_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTi=ng2qYwsVKub=XZG5QtLeia37NTOvz5jeCURf=_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Question about MPI_Barrier<br>
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-21 02:37:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14520.php">Siegmar Gross: "Re: [OMPI users] segmentation fault in mpiexec (Linux, Oracle/Sun C)"</a>
<li><strong>Previous message:</strong> <a href="14518.php">Raymond Muno: "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
<li><strong>In reply to:</strong> <a href="14512.php">Storm Zhang: "[OMPI users] Question about MPI_Barrier"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14526.php">Storm Zhang: "Re: [OMPI users] Question about MPI_Barrier"</a>
<li><strong>Reply:</strong> <a href="14526.php">Storm Zhang: "Re: [OMPI users] Question about MPI_Barrier"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>I don't know the reason for the strange behaviour, but anyway,
<br>
to measure time in an MPI application you should use MPI_Wtime(), not clock()
<br>
<p>regards
<br>
&nbsp;&nbsp;jody
<br>
<p>On Wed, Oct 20, 2010 at 11:51 PM, Storm Zhang &lt;stormzhg_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I got confused with my recent C++ MPI program's behavior.&#160;I have an MPI
</span><br>
<span class="quotelev1">&gt; program in which I use clock() to measure the time spent between to
</span><br>
<span class="quotelev1">&gt; MPI_Barrier, just like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI::COMM_WORLD.Barrier();
</span><br>
<span class="quotelev1">&gt; if if(rank == master) t1 = clock();
</span><br>
<span class="quotelev1">&gt; &quot;code A&quot;;
</span><br>
<span class="quotelev1">&gt; MPI::COMM_WORLD.Barrier();
</span><br>
<span class="quotelev1">&gt; if if(rank == master) t2 = clock();
</span><br>
<span class="quotelev1">&gt; &quot;code B&quot;;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I need to measure t2-t1 to see the time spent on the code A&#160;between these
</span><br>
<span class="quotelev1">&gt; two MPI_Barriers. I notice that if I comment code B,&#160;the time seems&#160;much
</span><br>
<span class="quotelev1">&gt; less&#160;the original time (almost half).&#160;How does it&#160;happen? What is a possible
</span><br>
<span class="quotelev1">&gt; reason for it? I have no idea.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for&#160;your help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Linbao
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
<li><strong>Next message:</strong> <a href="14520.php">Siegmar Gross: "Re: [OMPI users] segmentation fault in mpiexec (Linux, Oracle/Sun C)"</a>
<li><strong>Previous message:</strong> <a href="14518.php">Raymond Muno: "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
<li><strong>In reply to:</strong> <a href="14512.php">Storm Zhang: "[OMPI users] Question about MPI_Barrier"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14526.php">Storm Zhang: "Re: [OMPI users] Question about MPI_Barrier"</a>
<li><strong>Reply:</strong> <a href="14526.php">Storm Zhang: "Re: [OMPI users] Question about MPI_Barrier"</a>
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
