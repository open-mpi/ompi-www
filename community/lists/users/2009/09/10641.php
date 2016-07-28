<?
$subject_val = "Re: [OMPI users] How to build OMPI with Checkpoint/restart.";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 14 09:18:47 2009" -->
<!-- isoreceived="20090914131847" -->
<!-- sent="Mon, 14 Sep 2009 09:18:54 -0400" -->
<!-- isosent="20090914131854" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to build OMPI with Checkpoint/restart." -->
<!-- id="B6472BC4-43DE-46D9-89C5-7D8AF674A9D1_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="fa184f540909130249k6b91a00cjf285d3abfad3b33e_at_mail.gmail.com" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-14 09:18:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10642.php">Josh Hursey: "Re: [OMPI users] Application hangs when checkpointing application (update)"</a>
<li><strong>Previous message:</strong> <a href="10640.php">Jayanta Roy: "Re: [OMPI users] explicit routing for multiple network interfaces"</a>
<li><strong>In reply to:</strong> <a href="10632.php">Marcin Stolarek: "Re: [OMPI users] How to build OMPI with Checkpoint/restart."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10651.php">Marcin Stolarek: "Re: [OMPI users] How to build OMPI with Checkpoint/restart."</a>
<li><strong>Reply:</strong> <a href="10651.php">Marcin Stolarek: "Re: [OMPI users] How to build OMPI with Checkpoint/restart."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The config.log looked fine, so I think you have fixed the configure  
<br>
problem that you previously posted about.
<br>
<p>Though the config.log indicates that the BLCR component is scheduled  
<br>
for compile, ompi_info does not indicate that it is available. I  
<br>
suspect that the error below is because the CRS could not find any CRS  
<br>
components to select (though there should have been an error displayed  
<br>
indicating as such).
<br>
<p>I would check your Open MPI installation to make sure that it is the  
<br>
one that you configured with. Specifically I would check to make sure  
<br>
that in the installation location there are the following files:
<br>
&nbsp;&nbsp;&nbsp;$install_dir/lib/openmpi/mca_crs_blcr.so
<br>
&nbsp;&nbsp;&nbsp;$install_dir/lib/openmpi/mca_crs_blcr.la
<br>
<p>If that checks out, then I would remove the old installation directory  
<br>
and try reinstalling fresh.
<br>
<p>Let me know how it goes.
<br>
<p>-- Josh
<br>
<p><p>On Sep 13, 2009, at 5:49 AM, Marcin Stolarek wrote:
<br>
<p><span class="quotelev1">&gt; I've tryed another time.  Here is what I get when trying to run  
</span><br>
<span class="quotelev1">&gt; using-1.4a1r21964 :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (terminus:~) mstol% mpirun --am ft-enable-cr ./a.out
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like opal_init failed for some reason; your parallel  
</span><br>
<span class="quotelev1">&gt; process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during opal_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   opal_cr_init() failed failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned value -1 instead of OPAL_SUCCESS
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [terminus:06120] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file  
</span><br>
<span class="quotelev1">&gt; runtime/orte_
</span><br>
<span class="quotelev1">&gt; init.c at line 79
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
<span class="quotelev1">&gt;   ompi_mpi_init: orte_init failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; [terminus:6120] Abort before MPI_INIT completed successfully; not  
</span><br>
<span class="quotelev1">&gt; able to guaran
</span><br>
<span class="quotelev1">&gt; tee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev1">&gt; that caused that situation.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've included config.log and ompi_info --all output in attacment
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH is set correctly.
</span><br>
<span class="quotelev1">&gt; Any idea?
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
<span class="quotelev1">&gt; 2009/9/12 Marcin Stolarek &lt;mstol_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I'm trying  to compile OpenMPI with  checkpoint restart via BLCR.  
</span><br>
<span class="quotelev1">&gt; I'm not sure which path shoul I set as a value of --with-blcr option.
</span><br>
<span class="quotelev1">&gt; I'm using 1.3.3 release, which version of BLCR should I use?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've compiled the newest version of BLCR with --prefix=$BLCR, and  
</span><br>
<span class="quotelev1">&gt; I've putten as a option to openmpi configure --with-blcr=$BLCR, but  
</span><br>
<span class="quotelev1">&gt; I recived:
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
<span class="quotelev1">&gt; &lt;info.tar.gz&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="10642.php">Josh Hursey: "Re: [OMPI users] Application hangs when checkpointing application (update)"</a>
<li><strong>Previous message:</strong> <a href="10640.php">Jayanta Roy: "Re: [OMPI users] explicit routing for multiple network interfaces"</a>
<li><strong>In reply to:</strong> <a href="10632.php">Marcin Stolarek: "Re: [OMPI users] How to build OMPI with Checkpoint/restart."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10651.php">Marcin Stolarek: "Re: [OMPI users] How to build OMPI with Checkpoint/restart."</a>
<li><strong>Reply:</strong> <a href="10651.php">Marcin Stolarek: "Re: [OMPI users] How to build OMPI with Checkpoint/restart."</a>
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
