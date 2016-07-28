<?
$subject_val = "Re: [OMPI devel] RFC: Checkpoint/Restart Advancements and Bug Fixes";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul 31 14:08:29 2010" -->
<!-- isoreceived="20100731180829" -->
<!-- sent="Sat, 31 Jul 2010 12:08:18 -0600" -->
<!-- isosent="20100731180818" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Checkpoint/Restart Advancements and Bug Fixes" -->
<!-- id="092049FA-A0A9-4261-A8F6-85EAF3C9DF2C_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="73294021-D731-43CF-B1B8-73D9D9803E4F_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Checkpoint/Restart Advancements and Bug Fixes<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-31 14:08:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/08/8242.php">Shiqing Fan: "Re: [OMPI devel] Can OpenMPI be compiled with Visual Studio 2010?"</a>
<li><strong>Previous message:</strong> <a href="8240.php">Joshua Hursey: "[OMPI devel] RFC: Checkpoint/Restart Advancements and Bug Fixes"</a>
<li><strong>In reply to:</strong> <a href="8240.php">Joshua Hursey: "[OMPI devel] RFC: Checkpoint/Restart Advancements and Bug Fixes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/08/8248.php">Joshua Hursey: "Re: [OMPI devel] RFC: Checkpoint/Restart Advancements and Bug Fixes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just reviewing your description (I'll look at your branch later), I don't anticipate any conflicts with my work. Looks pretty clean to me.
<br>
<p>I'll contact you offlist to discuss timing with the orte threading rfc so we avoid causing each other some integration pain.
<br>
<p>Thanks!
<br>
<p>On Jul 31, 2010, at 10:51 AM, Joshua Hursey wrote:
<br>
<p><span class="quotelev1">&gt; WHAT:
</span><br>
<span class="quotelev1">&gt; Checkpoint/Restart-based automatic recovery and process migration, advanced checkpoint storage, C/R-enabled debugging, MPI Extension API for C/R, and some bug fixes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHY:
</span><br>
<span class="quotelev1">&gt; This commit includes a variety of checkpoint/restart advancements that have been pending on a temporary branch for a long while. Users have been waiting on many of these bug fixes and advancements for a while now. More details below.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHERE:
</span><br>
<span class="quotelev1">&gt;  <a href="http://bitbucket.org/jjhursey/ompi-cr-recos">http://bitbucket.org/jjhursey/ompi-cr-recos</a>
</span><br>
<span class="quotelev1">&gt; Last sync'ed to trunk in r23536 (July 31, 2010)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHEN:
</span><br>
<span class="quotelev1">&gt; Move into the trunk in the next two weeks. Then into the 1.5 series with the ORTE refresh (Ticket #2471).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; TIMEOUT:
</span><br>
<span class="quotelev1">&gt; Aug 10, 2010 @ teleconf (commit at COB)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; DOCUMENTATION
</span><br>
<span class="quotelev1">&gt; Following public site will be fully updated upon commit:
</span><br>
<span class="quotelev1">&gt;  <a href="http://osl.iu.edu/research/ft">http://osl.iu.edu/research/ft</a>
</span><br>
<span class="quotelev1">&gt; Temporary documentation site (will be taken down upon commit):
</span><br>
<span class="quotelev1">&gt;  <a href="http://osl.iu.edu/~jjhursey/research/ft-www-preview">http://osl.iu.edu/~jjhursey/research/ft-www-preview</a>
</span><br>
<span class="quotelev1">&gt; Man page documentation will be updated soon.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; The changes may seem large but are isolated to a C/R components and frameworks except where they are wired into the infrastructure.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This commit brings in a variety of pending features and bug fixes that have been accumulating over the past 8-12 months. Highlights are below (full change log at bottom):
</span><br>
<span class="quotelev1">&gt; * Added C/R-enabled Debugging Support
</span><br>
<span class="quotelev1">&gt; * Added a Stable Storage framework for advanced checkpoint storage techniques
</span><br>
<span class="quotelev1">&gt; * Added checkpoint caching and compression support
</span><br>
<span class="quotelev1">&gt; * Added two C/R-based recovery policies
</span><br>
<span class="quotelev1">&gt;   * C/R-based Process Migration (API and ompi-migrate tool activated)
</span><br>
<span class="quotelev1">&gt;   * C/R-based Automatic Recovery
</span><br>
<span class="quotelev1">&gt; * Added a variety of C/R MPI Extensions functions (e.g., Checkpoint, Restart, Migrate)
</span><br>
<span class="quotelev1">&gt; * Added C/R progress meters to File Movement (FileM), Stable Storage (SStore), and Snapshot Coordination (SnapC) frameworks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; While this RFC is pending I plan to clean up the man page documentation for these features and update copyrights in the code base.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Change Log:
</span><br>
<span class="quotelev1">&gt; -----------
</span><br>
<span class="quotelev1">&gt; Major Changes:
</span><br>
<span class="quotelev1">&gt; --------------
</span><br>
<span class="quotelev1">&gt; * Added C/R-enabled Debugging support.
</span><br>
<span class="quotelev1">&gt;   Enabled with the --enable-crdebug flag. See the following website for more information:
</span><br>
<span class="quotelev1">&gt;   <a href="http://osl.iu.edu/research/ft/crdebug/">http://osl.iu.edu/research/ft/crdebug/</a>
</span><br>
<span class="quotelev1">&gt; * Added Stable Storage (SStore) framework for checkpoint storage
</span><br>
<span class="quotelev1">&gt;   * 'central' component does a direct to central storage save
</span><br>
<span class="quotelev1">&gt;   * 'stage' component stages checkpoints to central storage while the application continues execution.
</span><br>
<span class="quotelev1">&gt;     * 'stage' supports offline compression of checkpoints before moving (sstore_stage_compress)
</span><br>
<span class="quotelev1">&gt;     * 'stage' supports local caching of checkpoints to improve automatic recovery (sstore_stage_caching)
</span><br>
<span class="quotelev1">&gt; * Added Compression (compress) framework to support
</span><br>
<span class="quotelev1">&gt; * Add two new ErrMgr recovery policies
</span><br>
<span class="quotelev1">&gt;   * {{{crmig}}} C/R Process Migration
</span><br>
<span class="quotelev1">&gt;   * {{{autor}}} C/R Automatic Recovery
</span><br>
<span class="quotelev1">&gt; * Added the {{{ompi-migrate}}} command line tool to support the {{{crmig}}} ErrMgr component
</span><br>
<span class="quotelev1">&gt; * Added CR MPI Ext functions (enable them with {{{--enable-mpi-ext=cr}}} configure option)
</span><br>
<span class="quotelev1">&gt;   * {{{OMPI_CR_Checkpoint}}} (Fixes #2342)
</span><br>
<span class="quotelev1">&gt;   * {{{OMPI_CR_Restart}}}
</span><br>
<span class="quotelev1">&gt;   * {{{OMPI_CR_Migrate}}} (may need some more work for mapping rules)
</span><br>
<span class="quotelev1">&gt;   * {{{OMPI_CR_INC_register_callback}}} (Fixes #2192)
</span><br>
<span class="quotelev1">&gt;   * {{{OMPI_CR_Quiesce_start}}}
</span><br>
<span class="quotelev1">&gt;   * {{{OMPI_CR_Quiesce_checkpoint}}}
</span><br>
<span class="quotelev1">&gt;   * {{{OMPI_CR_Quiesce_end}}}
</span><br>
<span class="quotelev1">&gt;   * {{{OMPI_CR_self_register_checkpoint_callback}}}
</span><br>
<span class="quotelev1">&gt;   * {{{OMPI_CR_self_register_restart_callback}}}
</span><br>
<span class="quotelev1">&gt;   * {{{OMPI_CR_self_register_continue_callback}}}
</span><br>
<span class="quotelev1">&gt; * The ErrMgr predicted_fault() interface has been changed to take an opal_list_t of ErrMgr defined types. This will allow us to better support a wider range of fault prediction services in the future.
</span><br>
<span class="quotelev1">&gt; * Add a progress meter to:
</span><br>
<span class="quotelev1">&gt;   * FileM rsh (filem_rsh_process_meter)
</span><br>
<span class="quotelev1">&gt;   * SnapC full (snapc_full_progress_meter)
</span><br>
<span class="quotelev1">&gt;   * SStore stage (sstore_stage_progress_meter)
</span><br>
<span class="quotelev1">&gt; * Added 2 new command line options to ompi-restart
</span><br>
<span class="quotelev1">&gt;   * --showme : Display the full command line that would have been exec'ed.
</span><br>
<span class="quotelev1">&gt;   * --mpirun_opts : Command line options to pass directly to mpirun. (Fixes #2413)
</span><br>
<span class="quotelev1">&gt; * Deprecated some MCA params:
</span><br>
<span class="quotelev1">&gt;   * crs_base_snapshot_dir deprecated, use sstore_stage_local_snapshot_dir
</span><br>
<span class="quotelev1">&gt;   * snapc_base_global_snapshot_dir deprecated, use sstore_base_global_snapshot_dir
</span><br>
<span class="quotelev1">&gt;   * snapc_base_global_shared deprecated, use sstore_stage_global_is_shared
</span><br>
<span class="quotelev1">&gt;   * snapc_base_store_in_place deprecated, replaced with different components of SStore
</span><br>
<span class="quotelev1">&gt;   * snapc_base_global_snapshot_ref deprecated, use sstore_base_global_snapshot_ref
</span><br>
<span class="quotelev1">&gt;   * snapc_base_establish_global_snapshot_dir deprecated, never well supported
</span><br>
<span class="quotelev1">&gt;   * snapc_full_skip_filem deprecated, use sstore_stage_skip_filem
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Minor Changes:
</span><br>
<span class="quotelev1">&gt; --------------
</span><br>
<span class="quotelev1">&gt; * Fixes #1924 : {{{ompi-restart}}} now recognizes path prefixed checkpoint handles and does the right thing.
</span><br>
<span class="quotelev1">&gt; * Fixes #2097 : {{{ompi-info}}} should now report all available CRS components
</span><br>
<span class="quotelev1">&gt; * Fixes #2161 : Manual checkpoint movement. A user can 'mv' a checkpoint directory from the original location to another and still restart from it.
</span><br>
<span class="quotelev1">&gt; * Fixes #2208 : Honor various TMPDIR varaibles instead of forcing {{{/tmp}}}
</span><br>
<span class="quotelev1">&gt; * Move {{{ompi_cr_continue_like_restart}}} to {{{orte_cr_continue_like_restart}}} to be more flexible in where this should be set.
</span><br>
<span class="quotelev1">&gt; * opal_crs_base_metadata_write* functions have been moved to SStore to support a wider range of metadata handling functionality.
</span><br>
<span class="quotelev1">&gt; * Cleanup the CRS framework and components to work with the SStore framework.
</span><br>
<span class="quotelev1">&gt; * Cleanup the SnapC framework and components to work with the SStore framework (cleans up these code paths considerably).
</span><br>
<span class="quotelev1">&gt; * Add 'quiesce' hook to CRCP for a future enhancement.
</span><br>
<span class="quotelev1">&gt; * We now require a BLCR version that supports {{{cr_request_file()}}} or {{{cr_request_checkpoint()}}} in order to make the code more maintainable. Note that {{{cr_request_file}}} has been deprecated since 0.7.0, so we prefer to use {{{cr_request_checkpoint()}}}.
</span><br>
<span class="quotelev1">&gt; * Add optional application level INC callbacks (registered through the CR MPI Ext interface).
</span><br>
<span class="quotelev1">&gt; * Increase the {{{opal_cr_thread_sleep_wait}}} parameter to 1000 microseconds to make the C/R thread less aggressive.
</span><br>
<span class="quotelev1">&gt; * {{{opal-restart}}} now looks for cache directories before falling back on stable storage when asked.
</span><br>
<span class="quotelev1">&gt; * {{{opal-restart}}} also support local decompression before restarting
</span><br>
<span class="quotelev1">&gt; * {{{orte-checkpoint}}} now uses the SStore framework to work with the metadata
</span><br>
<span class="quotelev1">&gt; * {{{orte-restart}}} now uses the SStore framework to work with the metadata
</span><br>
<span class="quotelev1">&gt; * Remove the {{{orte-restart}}} preload option. This was removed since the user only needs to select the 'stage' component in order to support this functionality.
</span><br>
<span class="quotelev1">&gt; * Since the '-am' parameter is saved in the metadata, {{{ompi-restart}}} no longer hard codes {{{-am ft-enable-cr}}}.
</span><br>
<span class="quotelev1">&gt; * Fix {{{hnp}}} ErrMgr so that if a previous component in the stack has 'fixed' the problem, then it should be skipped.
</span><br>
<span class="quotelev1">&gt; * Make sure to decrement the number of 'num_local_procs' in the orted when one goes away.
</span><br>
<span class="quotelev1">&gt; * odls now checks the SStore framework to see if it needs to load any checkpoint files before launching (to support 'stage'). This separates the SStore logic from the --preload-[binary|files] options.
</span><br>
<span class="quotelev1">&gt; * Add unique IDs to the named pipes established between the orted and the app in SnapC. This is to better support migration and automatic recovery activities.
</span><br>
<span class="quotelev1">&gt; * Improve the checks for 'already checkpointing' error path.
</span><br>
<span class="quotelev1">&gt; * A a recovery output timer, to show how long it takes to restart a job
</span><br>
<span class="quotelev1">&gt; * Do a better job of cleaning up the old session directory on restart.
</span><br>
<span class="quotelev1">&gt; * Add a local module to the autor and crmig ErrMgr components. These small modules prevent the 'orted' component from attempting a local recovery (Which does not work for MPI apps at the moment)
</span><br>
<span class="quotelev1">&gt; * Add a fix for bounding the checkpointable region between MPI_Init and MPI_Finalize. 
</span><br>
<span class="quotelev1">&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/08/8242.php">Shiqing Fan: "Re: [OMPI devel] Can OpenMPI be compiled with Visual Studio 2010?"</a>
<li><strong>Previous message:</strong> <a href="8240.php">Joshua Hursey: "[OMPI devel] RFC: Checkpoint/Restart Advancements and Bug Fixes"</a>
<li><strong>In reply to:</strong> <a href="8240.php">Joshua Hursey: "[OMPI devel] RFC: Checkpoint/Restart Advancements and Bug Fixes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/08/8248.php">Joshua Hursey: "Re: [OMPI devel] RFC: Checkpoint/Restart Advancements and Bug Fixes"</a>
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
