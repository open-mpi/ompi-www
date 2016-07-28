<?
$subject_val = "Re: [OMPI users] How to build OMPI with Checkpoint/restart.";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 13 05:49:42 2009" -->
<!-- isoreceived="20090913094942" -->
<!-- sent="Sun, 13 Sep 2009 11:49:35 +0200" -->
<!-- isosent="20090913094935" -->
<!-- name="Marcin Stolarek" -->
<!-- email="mstol_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to build OMPI with Checkpoint/restart." -->
<!-- id="fa184f540909130249k6b91a00cjf285d3abfad3b33e_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="fa184f540909120437n167ff575ub54910d201529289_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to build OMPI with Checkpoint/restart.<br>
<strong>From:</strong> Marcin Stolarek (<em>mstol_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-13 05:49:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10633.php">Jaison Paul: "[OMPI users] Fails to run &quot;MPI_Comm_spawn&quot; on remote host"</a>
<li><strong>Previous message:</strong> <a href="10631.php">Luis Vitorio Cargnini: "[OMPI users] error durgin execution"</a>
<li><strong>In reply to:</strong> <a href="10628.php">Marcin Stolarek: "[OMPI users] How to build OMPI with Checkpoint/restart."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10641.php">Josh Hursey: "Re: [OMPI users] How to build OMPI with Checkpoint/restart."</a>
<li><strong>Reply:</strong> <a href="10641.php">Josh Hursey: "Re: [OMPI users] How to build OMPI with Checkpoint/restart."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've tryed another time.  Here is what I get when trying to run
<br>
using-1.4a1r21964 :
<br>
<p>(terminus:~) mstol% mpirun --am ft-enable-cr ./a.out
<br>
--------------------------------------------------------------------------
<br>
It looks like opal_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during opal_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;opal_cr_init() failed failed
<br>
&nbsp;&nbsp;--&gt; Returned value -1 instead of OPAL_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
[terminus:06120] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file
<br>
runtime/orte_
<br>
init.c at line 79
<br>
--------------------------------------------------------------------------
<br>
It looks like MPI_INIT failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during MPI_INIT; some of which are due to configuration or environment
<br>
problems.  This failure appears to be an internal failure; here's some
<br>
additional information (which may only be relevant to an Open MPI
<br>
developer):
<br>
<p>&nbsp;&nbsp;ompi_mpi_init: orte_init failed
<br>
&nbsp;&nbsp;--&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
[terminus:6120] Abort before MPI_INIT completed successfully; not able to
<br>
guaran
<br>
tee that all other processes were killed!
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that the job aborted, but has no info as to the process
<br>
that caused that situation.
<br>
--------------------------------------------------------------------------
<br>
<p>I've included config.log and ompi_info --all output in attacment
<br>
LD_LIBRARY_PATH is set correctly.
<br>
Any idea?
<br>
<p>marcin
<br>
<p><p><p><p><p>2009/9/12 Marcin Stolarek &lt;mstol_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I'm trying  to compile OpenMPI with  checkpoint restart via BLCR. I'm not
</span><br>
<span class="quotelev1">&gt; sure which path shoul I set as a value of --with-blcr option.
</span><br>
<span class="quotelev1">&gt; I'm using 1.3.3 release, which version of BLCR should I use?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've compiled the newest version of BLCR with --prefix=$BLCR, and I've
</span><br>
<span class="quotelev1">&gt; putten as a option to openmpi configure --with-blcr=$BLCR, but I recived:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; configure:76646: checking if MCA component crs:blcr can compile
</span><br>
<span class="quotelev1">&gt; configure:76648: result: no
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; marcin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10632/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10632/info.tar.gz">info.tar.gz</a>
</ul>
<!-- attachment="info.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10633.php">Jaison Paul: "[OMPI users] Fails to run &quot;MPI_Comm_spawn&quot; on remote host"</a>
<li><strong>Previous message:</strong> <a href="10631.php">Luis Vitorio Cargnini: "[OMPI users] error durgin execution"</a>
<li><strong>In reply to:</strong> <a href="10628.php">Marcin Stolarek: "[OMPI users] How to build OMPI with Checkpoint/restart."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10641.php">Josh Hursey: "Re: [OMPI users] How to build OMPI with Checkpoint/restart."</a>
<li><strong>Reply:</strong> <a href="10641.php">Josh Hursey: "Re: [OMPI users] How to build OMPI with Checkpoint/restart."</a>
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
