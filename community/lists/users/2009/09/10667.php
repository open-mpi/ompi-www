<?
$subject_val = "Re: [OMPI users] How to build OMPI with Checkpoint/restart.";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 17 08:33:05 2009" -->
<!-- isoreceived="20090917123305" -->
<!-- sent="Thu, 17 Sep 2009 08:32:33 -0400" -->
<!-- isosent="20090917123233" -->
<!-- name="Joshua Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to build OMPI with Checkpoint/restart." -->
<!-- id="AE35DE79-4D21-45E2-9CC1-A3981BC7455C_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="fa184f540909160530i5847c2eeu32c49676804bf961_at_mail.gmail.com" -->
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
<strong>From:</strong> Joshua Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-17 08:32:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10668.php">Yann JOBIC: "[OMPI users] infiniband question"</a>
<li><strong>Previous message:</strong> <a href="10666.php">Ralph Castain: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<li><strong>In reply to:</strong> <a href="10662.php">Marcin Stolarek: "Re: [OMPI users] How to build OMPI with Checkpoint/restart."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 16, 2009, at 8:30 AM, Marcin Stolarek wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It seems I solved my problem. Root of the error was, that I haven't  
</span><br>
<span class="quotelev1">&gt; loaded blcr module. So I couldn't checkpoint even one therad  
</span><br>
<span class="quotelev1">&gt; application.
</span><br>
<p>I am glad to hear that you have things working now.
<br>
<p><span class="quotelev1">&gt; However I stil can't find MCA:blcr in ompi_all -info, It's working.
</span><br>
<p>This may have been a red-herring, sorry. I think ompi_info will only  
<br>
show the 'none' component due to the way it searches for components in  
<br>
the system. This is a bug how in the CRS selection logic plays with  
<br>
ompi_info. I will take a note/file a bug to look into fixing it.  
<br>
Unfortunately I do not have a work around other than looking in the  
<br>
install directory for the mca_crs_blcr.so file.
<br>
<p>-- Josh
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; marcin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2009/9/15 Marcin Stolarek &lt;mstol_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've done everythink from the beginig.:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; rm  -r $ompi_install
</span><br>
<span class="quotelev1">&gt; make clean
</span><br>
<span class="quotelev1">&gt; make
</span><br>
<span class="quotelev1">&gt; make install
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In $ompi_install, I've got files you mentioned:
</span><br>
<span class="quotelev1">&gt; mstol_at_halo2:/home/guests/mstol/openmpi/lib/openmp# ls mca_crs_bl*
</span><br>
<span class="quotelev1">&gt; mca_crs_blcr.la  mca_crs_blcr.so
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but, when I try:
</span><br>
<span class="quotelev1">&gt; # ompi_info -all | grep &quot;crs:&quot;
</span><br>
<span class="quotelev1">&gt; mstol_at_halo2:/home/guests/mstol/openmpi/openmpi-1.3.3# ompi_info -- 
</span><br>
<span class="quotelev1">&gt; all | grep &quot;crs:&quot;
</span><br>
<span class="quotelev1">&gt;                 MCA crs: none (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt;                 MCA crs: parameter &quot;crs_base_verbose&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                 MCA crs: parameter &quot;crs&quot; (current value: &quot;none&quot;,  
</span><br>
<span class="quotelev1">&gt; data source: default value)
</span><br>
<span class="quotelev1">&gt;                 MCA crs: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;crs_none_select_warning&quot; (current value: &quot;0&quot;, data source: default  
</span><br>
<span class="quotelev1">&gt; value)
</span><br>
<span class="quotelev1">&gt;                 MCA crs: parameter &quot;crs_none_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't have crs: blcr component.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; marcin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2009/9/14 Josh Hursey &lt;jjhursey_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The config.log looked fine, so I think you have fixed the configure  
</span><br>
<span class="quotelev1">&gt; problem that you previously posted about.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Though the config.log indicates that the BLCR component is scheduled  
</span><br>
<span class="quotelev1">&gt; for compile, ompi_info does not indicate that it is available. I  
</span><br>
<span class="quotelev1">&gt; suspect that the error below is because the CRS could not find any  
</span><br>
<span class="quotelev1">&gt; CRS components to select (though there should have been an error  
</span><br>
<span class="quotelev1">&gt; displayed indicating as such).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would check your Open MPI installation to make sure that it is the  
</span><br>
<span class="quotelev1">&gt; one that you configured with. Specifically I would check to make  
</span><br>
<span class="quotelev1">&gt; sure that in the installation location there are the following files:
</span><br>
<span class="quotelev1">&gt; $install_dir/lib/openmpi/mca_crs_blcr.so
</span><br>
<span class="quotelev1">&gt; $install_dir/lib/openmpi/mca_crs_blcr.la
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If that checks out, then I would remove the old installation  
</span><br>
<span class="quotelev1">&gt; directory and try reinstalling fresh.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Let me know how it goes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 13, 2009, at 5:49 AM, Marcin Stolarek wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've tryed another time.  Here is what I get when trying to run  
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
<span class="quotelev1">&gt; opal_cr_init() failed failed
</span><br>
<span class="quotelev1">&gt; --&gt; Returned value -1 instead of OPAL_SUCCESS
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
<span class="quotelev1">&gt; ompi_mpi_init: orte_init failed
</span><br>
<span class="quotelev1">&gt; --&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
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
<span class="quotelev1">&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10668.php">Yann JOBIC: "[OMPI users] infiniband question"</a>
<li><strong>Previous message:</strong> <a href="10666.php">Ralph Castain: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<li><strong>In reply to:</strong> <a href="10662.php">Marcin Stolarek: "Re: [OMPI users] How to build OMPI with Checkpoint/restart."</a>
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
