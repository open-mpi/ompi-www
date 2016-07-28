<?
$subject_val = "[OMPI users] Checkpoint/Restart Process Migration and Automatic Recovery Support";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 19 10:04:18 2010" -->
<!-- isoreceived="20100819140418" -->
<!-- sent="Thu, 19 Aug 2010 10:04:08 -0400" -->
<!-- isosent="20100819140408" -->
<!-- name="Joshua Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="[OMPI users] Checkpoint/Restart Process Migration and Automatic Recovery Support" -->
<!-- id="F80D6030-94D4-446D-8B2A-A627ADA52524_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI users] Checkpoint/Restart Process Migration and Automatic Recovery Support<br>
<strong>From:</strong> Joshua Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-19 10:04:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14078.php">Philippe: "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
<li><strong>Previous message:</strong> <a href="14076.php">ananda.mudar_at_[hidden]: "Re: [OMPI users] Checkpointing mpi4py program (Probably bcast issue)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am pleased to announce that Open MPI now supports checkpoint/restart process migration and automatic recovery. This is in addition to our current support for more traditional checkpoint/restart fault tolerance. These new features were introduced in the Open MPI development trunk in commit r23587. These new features are currently being scheduled for release in the v1.5.1 release of Open MPI.
<br>
<p>In addition to the two features mentioned above, this commit also includes support for C/R-enabled parallel debugging (Documentation for this feature to become available in September). This commit also introduces an API for the C/R functionality allowing applications to request a checkpoint/restart/migration from within their application. We also abstracted the stable storage technique and added support for checkpoint caching and compression. So lots of good stuff to play with.
<br>
<p>At the bottom of this email is a list of the new features, major/minor changes and bug fixes that are included in this release. The current implementation deprecates some MCA parameters to make way for a more extensible C/R infrastructure. So please check the online documentation for information on how to use this new functionality. Documentation is available at the link below:
<br>
&nbsp;<a href="http://osl.iu.edu/research/ft/">http://osl.iu.edu/research/ft/</a>
<br>
<p>If you have any questions or problems using these new features please send them to the users list.
<br>
<p>Enjoy :)
<br>
Josh
<br>
<p>----------------------------------------------------------
<br>
Major Changes: 
<br>
-------------- 
<br>
* Add two new ErrMgr recovery policies to the 'hnp' ErrMgr component
<br>
&nbsp;&nbsp;* {{{crmig}}} C/R Process Migration 
<br>
&nbsp;&nbsp;* {{{autor}}} C/R Automatic Recovery 
<br>
* Added C/R-enabled Debugging support. 
<br>
&nbsp;&nbsp;Enabled with the --enable-crdebug flag. See the following website for more information: 
<br>
&nbsp;&nbsp;<a href="http://osl.iu.edu/research/ft/crdebug/">http://osl.iu.edu/research/ft/crdebug/</a> 
<br>
* Added Stable Storage (SStore) framework for checkpoint storage 
<br>
&nbsp;&nbsp;* 'central' component does a direct to central storage save 
<br>
&nbsp;&nbsp;* 'stage' component stages checkpoints to central storage while the application continues execution. 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;* 'stage' supports offline compression of checkpoints before moving (sstore_stage_compress) 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;* 'stage' supports local caching of checkpoints to improve automatic recovery (sstore_stage_caching) 
<br>
* Added Compression (compress) framework to support 
<br>
* Added the {{{ompi-migrate}}} command line tool to support the {{{crmig}}} ErrMgr recovery policy 
<br>
* Added CR MPI Ext functions (enable them with {{{--enable-mpi-ext=cr}}} configure option) 
<br>
&nbsp;&nbsp;* {{{OMPI_CR_Checkpoint}}} (Fixes #2342) 
<br>
&nbsp;&nbsp;* {{{OMPI_CR_Restart}}} 
<br>
&nbsp;&nbsp;* {{{OMPI_CR_Migrate}}} (may need some more work for mapping rules) 
<br>
&nbsp;&nbsp;* {{{OMPI_CR_INC_register_callback}}} (Fixes #2192) 
<br>
&nbsp;&nbsp;* {{{OMPI_CR_Quiesce_start}}} 
<br>
&nbsp;&nbsp;* {{{OMPI_CR_Quiesce_checkpoint}}} 
<br>
&nbsp;&nbsp;* {{{OMPI_CR_Quiesce_end}}} 
<br>
&nbsp;&nbsp;* {{{OMPI_CR_self_register_checkpoint_callback}}} 
<br>
&nbsp;&nbsp;* {{{OMPI_CR_self_register_restart_callback}}} 
<br>
&nbsp;&nbsp;* {{{OMPI_CR_self_register_continue_callback}}} 
<br>
* The ErrMgr predicted_fault() interface has been changed to take an opal_list_t of ErrMgr defined types. This will allow us to better support a wider range of fault prediction services in the future. 
<br>
* Add a progress meter to: 
<br>
&nbsp;&nbsp;* FileM rsh (filem_rsh_process_meter) 
<br>
&nbsp;&nbsp;* SnapC full (snapc_full_progress_meter) 
<br>
&nbsp;&nbsp;* SStore stage (sstore_stage_progress_meter) 
<br>
* Added 2 new command line options to ompi-restart 
<br>
&nbsp;&nbsp;* --showme : Display the full command line that would have been exec'ed. 
<br>
&nbsp;&nbsp;* --mpirun_opts : Command line options to pass directly to mpirun. (Fixes #2413) 
<br>
* Deprecated some MCA params: 
<br>
&nbsp;&nbsp;* crs_base_snapshot_dir deprecated, use sstore_stage_local_snapshot_dir 
<br>
&nbsp;&nbsp;* snapc_base_global_snapshot_dir deprecated, use sstore_base_global_snapshot_dir 
<br>
&nbsp;&nbsp;* snapc_base_global_shared deprecated, use sstore_stage_global_is_shared 
<br>
&nbsp;&nbsp;* snapc_base_store_in_place deprecated, replaced with different components of SStore 
<br>
&nbsp;&nbsp;* snapc_base_global_snapshot_ref deprecated, use sstore_base_global_snapshot_ref 
<br>
&nbsp;&nbsp;* snapc_base_establish_global_snapshot_dir deprecated, never well supported 
<br>
&nbsp;&nbsp;* snapc_full_skip_filem deprecated, use sstore_stage_skip_filem 
<br>
<p>Minor Changes: 
<br>
-------------- 
<br>
* Fixes #1924 : {{{ompi-restart}}} now recognizes path prefixed checkpoint handles and does the right thing. 
<br>
* Fixes #2097 : {{{ompi-info}}} should now report all available CRS components 
<br>
* Fixes #2161 : Manual checkpoint movement. A user can 'mv' a checkpoint directory from the original location to another and still restart from it. 
<br>
* Fixes #2208 : Honor various TMPDIR varaibles instead of forcing {{{/tmp}}} 
<br>
* Move {{{ompi_cr_continue_like_restart}}} to {{{orte_cr_continue_like_restart}}} to be more flexible in where this should be set. 
<br>
* opal_crs_base_metadata_write* functions have been moved to SStore to support a wider range of metadata handling functionality. 
<br>
* Cleanup the CRS framework and components to work with the SStore framework. 
<br>
* Cleanup the SnapC framework and components to work with the SStore framework (cleans up these code paths considerably). 
<br>
* Add 'quiesce' hook to CRCP for a future enhancement. 
<br>
* We now require a BLCR version that supports {{{cr_request_file()}}} or {{{cr_request_checkpoint()}}} in order to make the code more maintainable. Note that {{{cr_request_file}}} has been deprecated since 0.7.0, so we prefer to use {{{cr_request_checkpoint()}}}. 
<br>
* Add optional application level INC callbacks (registered through the CR MPI Ext interface). 
<br>
* Increase the {{{opal_cr_thread_sleep_wait}}} parameter to 1000 microseconds to make the C/R thread less aggressive. 
<br>
* {{{opal-restart}}} now looks for cache directories before falling back on stable storage when asked. 
<br>
* {{{opal-restart}}} also support local decompression before restarting 
<br>
* {{{orte-checkpoint}}} now uses the SStore framework to work with the metadata 
<br>
* {{{orte-restart}}} now uses the SStore framework to work with the metadata 
<br>
* Remove the {{{orte-restart}}} preload option. This was removed since the user only needs to select the 'stage' component in order to support this functionality. 
<br>
* Since the '-am' parameter is saved in the metadata, {{{ompi-restart}}} no longer hard codes {{{-am ft-enable-cr}}}. 
<br>
* Make sure to decrement the number of 'num_local_procs' in the orted when one goes away. 
<br>
* odls now checks the SStore framework to see if it needs to load any checkpoint files before launching (to support 'stage'). This separates the SStore logic from the --preload-[binary|files] options. 
<br>
* Add unique IDs to the named pipes established between the orted and the app in SnapC. This is to better support migration and automatic recovery activities. 
<br>
* Improve the checks for 'already checkpointing' error path. 
<br>
* A a recovery output timer, to show how long it takes to restart a job 
<br>
* Do a better job of cleaning up the old session directory on restart. 
<br>
* Add a fix for bounding the checkpointable region between MPI_Init and MPI_Finalize. 
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14078.php">Philippe: "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
<li><strong>Previous message:</strong> <a href="14076.php">ananda.mudar_at_[hidden]: "Re: [OMPI users] Checkpointing mpi4py program (Probably bcast issue)"</a>
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
