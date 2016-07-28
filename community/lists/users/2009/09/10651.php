<?
$subject_val = "Re: [OMPI users] How to build OMPI with Checkpoint/restart.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 15 06:14:50 2009" -->
<!-- isoreceived="20090915101450" -->
<!-- sent="Tue, 15 Sep 2009 12:14:44 +0200" -->
<!-- isosent="20090915101444" -->
<!-- name="Marcin Stolarek" -->
<!-- email="mstol_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to build OMPI with Checkpoint/restart." -->
<!-- id="fa184f540909150314t37be369iffb040d6d12f7e9f_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B6472BC4-43DE-46D9-89C5-7D8AF674A9D1_at_open-mpi.org" -->
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
<strong>Date:</strong> 2009-09-15 06:14:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10652.php">Lenny Verkhovsky: "Re: [OMPI users] unable to access or execute"</a>
<li><strong>Previous message:</strong> <a href="10650.php">Dominik T&#225;borsk&#253;: "Re: [OMPI users] unable to access or execute"</a>
<li><strong>In reply to:</strong> <a href="10641.php">Josh Hursey: "Re: [OMPI users] How to build OMPI with Checkpoint/restart."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10662.php">Marcin Stolarek: "Re: [OMPI users] How to build OMPI with Checkpoint/restart."</a>
<li><strong>Reply:</strong> <a href="10662.php">Marcin Stolarek: "Re: [OMPI users] How to build OMPI with Checkpoint/restart."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I've done everythink from the beginig.:
<br>
<p>rm  -r $ompi_install
<br>
make clean
<br>
make
<br>
make install
<br>
<p>In $ompi_install, I've got files you mentioned:
<br>
mstol_at_halo2:/home/guests/mstol/openmpi/lib/openmp# ls mca_crs_bl*
<br>
mca_crs_blcr.la  mca_crs_blcr.so
<br>
<p>but, when I try:
<br>
# ompi_info -all | grep &quot;crs:&quot;
<br>
mstol_at_halo2:/home/guests/mstol/openmpi/openmpi-1.3.3# ompi_info --all | grep
<br>
&quot;crs:&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA crs: none (MCA v2.0, API v2.0, Component v1.3.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA crs: parameter &quot;crs_base_verbose&quot; (current value: &quot;0&quot;,
<br>
data source: default value)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA crs: parameter &quot;crs&quot; (current value: &quot;none&quot;, data
<br>
source: default value)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA crs: parameter &quot;crs_none_select_warning&quot; (current
<br>
value: &quot;0&quot;, data source: default value)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA crs: parameter &quot;crs_none_priority&quot; (current value: &quot;0&quot;,
<br>
data source: default value)
<br>
<p>I don't have crs: blcr component.
<br>
<p>marcin
<br>
<p>2009/9/14 Josh Hursey &lt;jjhursey_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; The config.log looked fine, so I think you have fixed the configure problem
</span><br>
<span class="quotelev1">&gt; that you previously posted about.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Though the config.log indicates that the BLCR component is scheduled for
</span><br>
<span class="quotelev1">&gt; compile, ompi_info does not indicate that it is available. I suspect that
</span><br>
<span class="quotelev1">&gt; the error below is because the CRS could not find any CRS components to
</span><br>
<span class="quotelev1">&gt; select (though there should have been an error displayed indicating as
</span><br>
<span class="quotelev1">&gt; such).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would check your Open MPI installation to make sure that it is the one
</span><br>
<span class="quotelev1">&gt; that you configured with. Specifically I would check to make sure that in
</span><br>
<span class="quotelev1">&gt; the installation location there are the following files:
</span><br>
<span class="quotelev1">&gt;  $install_dir/lib/openmpi/mca_crs_blcr.so
</span><br>
<span class="quotelev1">&gt;  $install_dir/lib/openmpi/mca_crs_blcr.la
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If that checks out, then I would remove the old installation directory and
</span><br>
<span class="quotelev1">&gt; try reinstalling fresh.
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
<span class="quotelev1">&gt;  I've tryed another time.  Here is what I get when trying to run
</span><br>
<span class="quotelev2">&gt;&gt; using-1.4a1r21964 :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (terminus:~) mstol% mpirun --am ft-enable-cr ./a.out
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; It looks like opal_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev2">&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt;&gt; fail during opal_init; some of which are due to configuration or
</span><br>
<span class="quotelev2">&gt;&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev2">&gt;&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  opal_cr_init() failed failed
</span><br>
<span class="quotelev2">&gt;&gt;  --&gt; Returned value -1 instead of OPAL_SUCCESS
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [terminus:06120] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev2">&gt;&gt; runtime/orte_
</span><br>
<span class="quotelev2">&gt;&gt; init.c at line 79
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
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
<span class="quotelev2">&gt;&gt;  ompi_mpi_init: orte_init failed
</span><br>
<span class="quotelev2">&gt;&gt;  --&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev2">&gt;&gt; *** before MPI was initialized
</span><br>
<span class="quotelev2">&gt;&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev2">&gt;&gt; [terminus:6120] Abort before MPI_INIT completed successfully; not able to
</span><br>
<span class="quotelev2">&gt;&gt; guaran
</span><br>
<span class="quotelev2">&gt;&gt; tee that all other processes were killed!
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev2">&gt;&gt; that caused that situation.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've included config.log and ompi_info --all output in attacment
</span><br>
<span class="quotelev2">&gt;&gt; LD_LIBRARY_PATH is set correctly.
</span><br>
<span class="quotelev2">&gt;&gt; Any idea?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; marcin
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2009/9/12 Marcin Stolarek &lt;mstol_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; I'm trying  to compile OpenMPI with  checkpoint restart via BLCR. I'm not
</span><br>
<span class="quotelev2">&gt;&gt; sure which path shoul I set as a value of --with-blcr option.
</span><br>
<span class="quotelev2">&gt;&gt; I'm using 1.3.3 release, which version of BLCR should I use?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've compiled the newest version of BLCR with --prefix=$BLCR, and I've
</span><br>
<span class="quotelev2">&gt;&gt; putten as a option to openmpi configure --with-blcr=$BLCR, but I recived:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; configure:76646: checking if MCA component crs:blcr can compile
</span><br>
<span class="quotelev2">&gt;&gt; configure:76648: result: no
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; marcin
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;info.tar.gz&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10651/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10652.php">Lenny Verkhovsky: "Re: [OMPI users] unable to access or execute"</a>
<li><strong>Previous message:</strong> <a href="10650.php">Dominik T&#225;borsk&#253;: "Re: [OMPI users] unable to access or execute"</a>
<li><strong>In reply to:</strong> <a href="10641.php">Josh Hursey: "Re: [OMPI users] How to build OMPI with Checkpoint/restart."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10662.php">Marcin Stolarek: "Re: [OMPI users] How to build OMPI with Checkpoint/restart."</a>
<li><strong>Reply:</strong> <a href="10662.php">Marcin Stolarek: "Re: [OMPI users] How to build OMPI with Checkpoint/restart."</a>
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
