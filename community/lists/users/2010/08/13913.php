<?
$subject_val = "Re: [OMPI users] Hybrid OpenMPI / OpenMP run pins OpenMP threads to a single core";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug  4 13:13:41 2010" -->
<!-- isoreceived="20100804171341" -->
<!-- sent="Wed, 04 Aug 2010 10:13:28 -0700" -->
<!-- isosent="20100804171328" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Hybrid OpenMPI / OpenMP run pins OpenMP threads to a single core" -->
<!-- id="4C599FB8.2060606_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTim2O9rsSnVLZ+Pj07hkynCgy65cPgAwByYb0A9g_at_mail.gmail.com" -->
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
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-04 13:13:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13914.php">Eugene Loh: "Re: [OMPI users] OpenMPI providing rank?"</a>
<li><strong>Previous message:</strong> <a href="13912.php">Terry Dontje: "Re: [OMPI users] OpenIB Error in ibv_create_srq"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/07/13860.php">David Akin: "[OMPI users] Hybrid OpenMPI / OpenMP run pins OpenMP threads to a single core"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13963.php">David Akin: "Re: [OMPI users] Hybrid OpenMPI / OpenMP run pins OpenMP threads to a single core"</a>
<li><strong>Reply:</strong> <a href="13963.php">David Akin: "Re: [OMPI users] Hybrid OpenMPI / OpenMP run pins OpenMP threads to a single core"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
David Akin wrote:
<br>
<p><span class="quotelev1">&gt;All,
</span><br>
<span class="quotelev1">&gt;I'm trying to get the OpenMP portion of the code below to run
</span><br>
<span class="quotelev1">&gt;multicore on a couple of 8 core nodes.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
I was gone last week and am trying to catch up on e-mail.  This thread 
<br>
was a little intriguing.
<br>
<p>I agree with Ralph and Terry:
<br>
<p>*) OMPI should not be binding by default.
<br>
*) There is nothing in your program that would induce binding nor 
<br>
anything in your reported output that indicates binding is occurring.
<br>
<p>So, any possibility that your use of taskset or top is misleading?  Did 
<br>
you ever try running with --report-bindings as Terry suggested?
<br>
<p>The thread also discussed OMPI's inability to control the binding 
<br>
behavior of individual threads.  You can't manage individual threads 
<br>
with OMPI;  you'd have to use a thread-specific mechanism, and many OMP 
<br>
implementations support such mechanisms.  The best you could do with 
<br>
OMPI would be to unbind or bind broadly (e.g., to an entire socket), and 
<br>
that policy would be applied to all the threads within the process.
<br>
<p>But, all that should be unnecessary... there shouldn't be any binding by 
<br>
default in the first place.  I'd check into whether these threads really 
<br>
are being bound and, if so, why.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13914.php">Eugene Loh: "Re: [OMPI users] OpenMPI providing rank?"</a>
<li><strong>Previous message:</strong> <a href="13912.php">Terry Dontje: "Re: [OMPI users] OpenIB Error in ibv_create_srq"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/07/13860.php">David Akin: "[OMPI users] Hybrid OpenMPI / OpenMP run pins OpenMP threads to a single core"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13963.php">David Akin: "Re: [OMPI users] Hybrid OpenMPI / OpenMP run pins OpenMP threads to a single core"</a>
<li><strong>Reply:</strong> <a href="13963.php">David Akin: "Re: [OMPI users] Hybrid OpenMPI / OpenMP run pins OpenMP threads to a single core"</a>
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
