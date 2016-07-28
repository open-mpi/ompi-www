<?
$subject_val = "[OMPI devel] RFC: Checkpoint/Restart Advancements and Bug Fixes";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul 31 12:51:09 2010" -->
<!-- isoreceived="20100731165109" -->
<!-- sent="Sat, 31 Jul 2010 12:51:03 -0400" -->
<!-- isosent="20100731165103" -->
<!-- name="Joshua Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: Checkpoint/Restart Advancements and Bug Fixes" -->
<!-- id="73294021-D731-43CF-B1B8-73D9D9803E4F_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: Checkpoint/Restart Advancements and Bug Fixes<br>
<strong>From:</strong> Joshua Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-31 12:51:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8241.php">Ralph Castain: "Re: [OMPI devel] RFC: Checkpoint/Restart Advancements and Bug Fixes"</a>
<li><strong>Previous message:</strong> <a href="8239.php">Shiqing Fan: "Re: [OMPI devel] Can OpenMPI be compiled with Visual Studio 2010?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8241.php">Ralph Castain: "Re: [OMPI devel] RFC: Checkpoint/Restart Advancements and Bug Fixes"</a>
<li><strong>Reply:</strong> <a href="8241.php">Ralph Castain: "Re: [OMPI devel] RFC: Checkpoint/Restart Advancements and Bug Fixes"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/08/8248.php">Joshua Hursey: "Re: [OMPI devel] RFC: Checkpoint/Restart Advancements and Bug Fixes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT:
<br>
Checkpoint/Restart-based automatic recovery and process migration, advanced checkpoint storage, C/R-enabled debugging, MPI Extension API for C/R, and some bug fixes.
<br>
<p>WHY:
<br>
This commit includes a variety of checkpoint/restart advancements that have been pending on a temporary branch for a long while. Users have been waiting on many of these bug fixes and advancements for a while now. More details below.
<br>
<p>WHERE:
<br>
&nbsp;&nbsp;<a href="http://bitbucket.org/jjhursey/ompi-cr-recos">http://bitbucket.org/jjhursey/ompi-cr-recos</a>
<br>
Last sync'ed to trunk in r23536 (July 31, 2010)
<br>
<p>WHEN:
<br>
Move into the trunk in the next two weeks. Then into the 1.5 series with the ORTE refresh (Ticket #2471).
<br>
<p>TIMEOUT:
<br>
Aug 10, 2010 @ teleconf (commit at COB)
<br>
<p>DOCUMENTATION
<br>
Following public site will be fully updated upon commit:
<br>
&nbsp;&nbsp;<a href="http://osl.iu.edu/research/ft">http://osl.iu.edu/research/ft</a>
<br>
Temporary documentation site (will be taken down upon commit):
<br>
&nbsp;&nbsp;<a href="http://osl.iu.edu/~jjhursey/research/ft-www-preview">http://osl.iu.edu/~jjhursey/research/ft-www-preview</a>
<br>
Man page documentation will be updated soon.
<br>
<p>----------------------------------------------------------------------------
<br>
The changes may seem large but are isolated to a C/R components and frameworks except where they are wired into the infrastructure.
<br>
<p>This commit brings in a variety of pending features and bug fixes that have been accumulating over the past 8-12 months. Highlights are below (full change log at bottom):
<br>
&nbsp;* Added C/R-enabled Debugging Support
<br>
&nbsp;* Added a Stable Storage framework for advanced checkpoint storage techniques
<br>
&nbsp;* Added checkpoint caching and compression support
<br>
&nbsp;* Added two C/R-based recovery policies
<br>
&nbsp;&nbsp;&nbsp;* C/R-based Process Migration (API and ompi-migrate tool activated)
<br>
&nbsp;&nbsp;&nbsp;* C/R-based Automatic Recovery
<br>
&nbsp;* Added a variety of C/R MPI Extensions functions (e.g., Checkpoint, Restart, Migrate)
<br>
&nbsp;* Added C/R progress meters to File Movement (FileM), Stable Storage (SStore), and Snapshot Coordination (SnapC) frameworks
<br>
<p>While this RFC is pending I plan to clean up the man page documentation for these features and update copyrights in the code base.
<br>
<p><p><p>Change Log:
<br>
-----------
<br>
Major Changes:
<br>
--------------
<br>
&nbsp;* Added C/R-enabled Debugging support.
<br>
&nbsp;&nbsp;&nbsp;Enabled with the --enable-crdebug flag. See the following website for more information:
<br>
&nbsp;&nbsp;&nbsp;<a href="http://osl.iu.edu/research/ft/crdebug/">http://osl.iu.edu/research/ft/crdebug/</a>
<br>
&nbsp;* Added Stable Storage (SStore) framework for checkpoint storage
<br>
&nbsp;&nbsp;&nbsp;* 'central' component does a direct to central storage save
<br>
&nbsp;&nbsp;&nbsp;* 'stage' component stages checkpoints to central storage while the application continues execution.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* 'stage' supports offline compression of checkpoints before moving (sstore_stage_compress)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* 'stage' supports local caching of checkpoints to improve automatic recovery (sstore_stage_caching)
<br>
&nbsp;* Added Compression (compress) framework to support
<br>
&nbsp;* Add two new ErrMgr recovery policies
<br>
&nbsp;&nbsp;&nbsp;* {{{crmig}}} C/R Process Migration
<br>
&nbsp;&nbsp;&nbsp;* {{{autor}}} C/R Automatic Recovery
<br>
&nbsp;* Added the {{{ompi-migrate}}} command line tool to support the {{{crmig}}} ErrMgr component
<br>
&nbsp;* Added CR MPI Ext functions (enable them with {{{--enable-mpi-ext=cr}}} configure option)
<br>
&nbsp;&nbsp;&nbsp;* {{{OMPI_CR_Checkpoint}}} (Fixes #2342)
<br>
&nbsp;&nbsp;&nbsp;* {{{OMPI_CR_Restart}}}
<br>
&nbsp;&nbsp;&nbsp;* {{{OMPI_CR_Migrate}}} (may need some more work for mapping rules)
<br>
&nbsp;&nbsp;&nbsp;* {{{OMPI_CR_INC_register_callback}}} (Fixes #2192)
<br>
&nbsp;&nbsp;&nbsp;* {{{OMPI_CR_Quiesce_start}}}
<br>
&nbsp;&nbsp;&nbsp;* {{{OMPI_CR_Quiesce_checkpoint}}}
<br>
&nbsp;&nbsp;&nbsp;* {{{OMPI_CR_Quiesce_end}}}
<br>
&nbsp;&nbsp;&nbsp;* {{{OMPI_CR_self_register_checkpoint_callback}}}
<br>
&nbsp;&nbsp;&nbsp;* {{{OMPI_CR_self_register_restart_callback}}}
<br>
&nbsp;&nbsp;&nbsp;* {{{OMPI_CR_self_register_continue_callback}}}
<br>
&nbsp;* The ErrMgr predicted_fault() interface has been changed to take an opal_list_t of ErrMgr defined types. This will allow us to better support a wider range of fault prediction services in the future.
<br>
&nbsp;* Add a progress meter to:
<br>
&nbsp;&nbsp;&nbsp;* FileM rsh (filem_rsh_process_meter)
<br>
&nbsp;&nbsp;&nbsp;* SnapC full (snapc_full_progress_meter)
<br>
&nbsp;&nbsp;&nbsp;* SStore stage (sstore_stage_progress_meter)
<br>
&nbsp;* Added 2 new command line options to ompi-restart
<br>
&nbsp;&nbsp;&nbsp;* --showme : Display the full command line that would have been exec'ed.
<br>
&nbsp;&nbsp;&nbsp;* --mpirun_opts : Command line options to pass directly to mpirun. (Fixes #2413)
<br>
&nbsp;* Deprecated some MCA params:
<br>
&nbsp;&nbsp;&nbsp;* crs_base_snapshot_dir deprecated, use sstore_stage_local_snapshot_dir
<br>
&nbsp;&nbsp;&nbsp;* snapc_base_global_snapshot_dir deprecated, use sstore_base_global_snapshot_dir
<br>
&nbsp;&nbsp;&nbsp;* snapc_base_global_shared deprecated, use sstore_stage_global_is_shared
<br>
&nbsp;&nbsp;&nbsp;* snapc_base_store_in_place deprecated, replaced with different components of SStore
<br>
&nbsp;&nbsp;&nbsp;* snapc_base_global_snapshot_ref deprecated, use sstore_base_global_snapshot_ref
<br>
&nbsp;&nbsp;&nbsp;* snapc_base_establish_global_snapshot_dir deprecated, never well supported
<br>
&nbsp;&nbsp;&nbsp;* snapc_full_skip_filem deprecated, use sstore_stage_skip_filem
<br>
<p>Minor Changes:
<br>
--------------
<br>
&nbsp;* Fixes #1924 : {{{ompi-restart}}} now recognizes path prefixed checkpoint handles and does the right thing.
<br>
&nbsp;* Fixes #2097 : {{{ompi-info}}} should now report all available CRS components
<br>
&nbsp;* Fixes #2161 : Manual checkpoint movement. A user can 'mv' a checkpoint directory from the original location to another and still restart from it.
<br>
&nbsp;* Fixes #2208 : Honor various TMPDIR varaibles instead of forcing {{{/tmp}}}
<br>
&nbsp;* Move {{{ompi_cr_continue_like_restart}}} to {{{orte_cr_continue_like_restart}}} to be more flexible in where this should be set.
<br>
&nbsp;* opal_crs_base_metadata_write* functions have been moved to SStore to support a wider range of metadata handling functionality.
<br>
&nbsp;* Cleanup the CRS framework and components to work with the SStore framework.
<br>
&nbsp;* Cleanup the SnapC framework and components to work with the SStore framework (cleans up these code paths considerably).
<br>
&nbsp;* Add 'quiesce' hook to CRCP for a future enhancement.
<br>
&nbsp;* We now require a BLCR version that supports {{{cr_request_file()}}} or {{{cr_request_checkpoint()}}} in order to make the code more maintainable. Note that {{{cr_request_file}}} has been deprecated since 0.7.0, so we prefer to use {{{cr_request_checkpoint()}}}.
<br>
&nbsp;* Add optional application level INC callbacks (registered through the CR MPI Ext interface).
<br>
&nbsp;* Increase the {{{opal_cr_thread_sleep_wait}}} parameter to 1000 microseconds to make the C/R thread less aggressive.
<br>
&nbsp;* {{{opal-restart}}} now looks for cache directories before falling back on stable storage when asked.
<br>
&nbsp;* {{{opal-restart}}} also support local decompression before restarting
<br>
&nbsp;* {{{orte-checkpoint}}} now uses the SStore framework to work with the metadata
<br>
&nbsp;* {{{orte-restart}}} now uses the SStore framework to work with the metadata
<br>
&nbsp;* Remove the {{{orte-restart}}} preload option. This was removed since the user only needs to select the 'stage' component in order to support this functionality.
<br>
&nbsp;* Since the '-am' parameter is saved in the metadata, {{{ompi-restart}}} no longer hard codes {{{-am ft-enable-cr}}}.
<br>
&nbsp;* Fix {{{hnp}}} ErrMgr so that if a previous component in the stack has 'fixed' the problem, then it should be skipped.
<br>
&nbsp;* Make sure to decrement the number of 'num_local_procs' in the orted when one goes away.
<br>
&nbsp;* odls now checks the SStore framework to see if it needs to load any checkpoint files before launching (to support 'stage'). This separates the SStore logic from the --preload-[binary|files] options.
<br>
&nbsp;* Add unique IDs to the named pipes established between the orted and the app in SnapC. This is to better support migration and automatic recovery activities.
<br>
&nbsp;* Improve the checks for 'already checkpointing' error path.
<br>
&nbsp;* A a recovery output timer, to show how long it takes to restart a job
<br>
&nbsp;* Do a better job of cleaning up the old session directory on restart.
<br>
&nbsp;* Add a local module to the autor and crmig ErrMgr components. These small modules prevent the 'orted' component from attempting a local recovery (Which does not work for MPI apps at the moment)
<br>
&nbsp;* Add a fix for bounding the checkpointable region between MPI_Init and MPI_Finalize. 
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8241.php">Ralph Castain: "Re: [OMPI devel] RFC: Checkpoint/Restart Advancements and Bug Fixes"</a>
<li><strong>Previous message:</strong> <a href="8239.php">Shiqing Fan: "Re: [OMPI devel] Can OpenMPI be compiled with Visual Studio 2010?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8241.php">Ralph Castain: "Re: [OMPI devel] RFC: Checkpoint/Restart Advancements and Bug Fixes"</a>
<li><strong>Reply:</strong> <a href="8241.php">Ralph Castain: "Re: [OMPI devel] RFC: Checkpoint/Restart Advancements and Bug Fixes"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/08/8248.php">Joshua Hursey: "Re: [OMPI devel] RFC: Checkpoint/Restart Advancements and Bug Fixes"</a>
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
