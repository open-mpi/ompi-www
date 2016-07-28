<?
$subject_val = "Re: [OMPI users] What will happen if a non-MPI executible loaded a MPI enabled shared library?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep 11 15:24:39 2010" -->
<!-- isoreceived="20100911192439" -->
<!-- sent="Sat, 11 Sep 2010 16:24:34 -0300" -->
<!-- isosent="20100911192434" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] What will happen if a non-MPI executible loaded a MPI enabled shared library?" -->
<!-- id="AANLkTi=z8dMp8_BKbMsqc+3_cxoFrmpuRumjxYxgYBKH_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4C869BCA.9090905_at_gtisoft.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] What will happen if a non-MPI executible loaded a MPI enabled shared library?<br>
<strong>From:</strong> Lisandro Dalcin (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-11 15:24:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14218.php">Srikanth Raju: "Re: [OMPI users] Strange Segmentation Fault inside MPI_Init"</a>
<li><strong>Previous message:</strong> <a href="14216.php">Ralph Castain: "Re: [OMPI users] Strange Segmentation Fault inside MPI_Init"</a>
<li><strong>In reply to:</strong> <a href="14184.php">Allen Zhao: "[OMPI users] What will happen if a non-MPI executible loaded a MPI enabled shared library?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 7 September 2010 17:08, Allen Zhao &lt;a.zhao_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; &#194;&#160;Hi, All,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A newbie question:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Suppose that I have a main executable (a non-MPI code, which just
</span><br>
<span class="quotelev1">&gt; dynamically loaded a named share library), and I do compile the shared
</span><br>
<span class="quotelev1">&gt; library with mpi-gcc. This way, when the main executable loads the shared
</span><br>
<span class="quotelev1">&gt; library, what is going to happen?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Should work just fine. This is the way I use many MPI-based libs and
<br>
MPI itself from Python. However, make sure you dlopen() libmpi.so with
<br>
mode RTLD_GLOBAL, or things can co bad (this is the case with
<br>
OpenMPI).
<br>
<p><span class="quotelev1">&gt; Can I parallel this application without calling MPI_Init() inside the main
</span><br>
<span class="quotelev1">&gt; code, instead, I call MPI_Init() when the shared library is loaded by the
</span><br>
<span class="quotelev1">&gt; main executable?
</span><br>
<p>Of course.
<br>
<p><span class="quotelev1">&gt; Will it then be able to run in parallel?
</span><br>
<p>Unlikely. But you could use MPI_Comm_spawn() to spawn a new
<br>
application, then your main sequential code &quot;chats&quot; to the child
<br>
parallel app using MPI calls.
<br>
<p><span class="quotelev1">&gt; If this scenario
</span><br>
<span class="quotelev1">&gt; is possible, when should I call MPI_Finalize()?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>When you know you will not use MPI any more. Perhaps you could
<br>
register a finalizer using atexit()...
<br>
<p><p><pre>
-- 
Lisandro Dalcin
---------------
CIMEC (INTEC/CONICET-UNL)
Predio CONICET-Santa Fe
Colectora RN 168 Km 472, Paraje El Pozo
Tel: +54-342-4511594 (ext 1011)
Tel/Fax: +54-342-4511169
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14218.php">Srikanth Raju: "Re: [OMPI users] Strange Segmentation Fault inside MPI_Init"</a>
<li><strong>Previous message:</strong> <a href="14216.php">Ralph Castain: "Re: [OMPI users] Strange Segmentation Fault inside MPI_Init"</a>
<li><strong>In reply to:</strong> <a href="14184.php">Allen Zhao: "[OMPI users] What will happen if a non-MPI executible loaded a MPI enabled shared library?"</a>
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
