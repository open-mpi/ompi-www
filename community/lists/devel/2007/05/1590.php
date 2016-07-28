<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon May 28 12:59:38 2007" -->
<!-- isoreceived="20070528165938" -->
<!-- sent="Mon, 28 May 2007 12:59:35 -0400" -->
<!-- isosent="20070528165935" -->
<!-- name="Jack Howarth" -->
<!-- email="howarth_at_[hidden]" -->
<!-- subject="[OMPI devel] undefined environ symbol on Darwin" -->
<!-- id="20070528165935.GA1107_at_bromo.msbb.uc.edu" -->
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
<strong>From:</strong> Jack Howarth (<em>howarth_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-28 12:59:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1591.php">Brian Barrett: "Re: [OMPI devel] undefined environ symbol on Darwin"</a>
<li><strong>Previous message:</strong> <a href="1589.php">Brian W. Barrett: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14782"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1591.php">Brian Barrett: "Re: [OMPI devel] undefined environ symbol on Darwin"</a>
<li><strong>Reply:</strong> <a href="1591.php">Brian Barrett: "Re: [OMPI devel] undefined environ symbol on Darwin"</a>
<li><strong>Reply:</strong> <a href="1592.php">Jack Howarth: "Re: [OMPI devel] undefined environ symbol on Darwin"</a>
<li><strong>Reply:</strong> <a href="1597.php">Jack Howarth: "Re: [OMPI devel] undefined environ symbol on Darwin"</a>
<li><strong>Reply:</strong> <a href="1598.php">Jack Howarth: "Re: [OMPI devel] undefined environ symbol on Darwin"</a>
<li><strong>Reply:</strong> <a href="1601.php">Jack Howarth: "Re: [OMPI devel] undefined environ symbol on Darwin"</a>
<li><strong>Reply:</strong> <a href="1602.php">Jack Howarth: "Re: [OMPI devel] undefined environ symbol on Darwin"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;&nbsp;On MacOS X, the current v1.1.5 and v1.2.2 sources for openmpi
<br>
create shared libraries with undefined environ symbols. This
<br>
problem on MacOS X and the available workarounds are discussed
<br>
on the fink wiki section on Porting Notes...
<br>
<p><a href="http://wiki.finkproject.org/index.php/Fink:Porting_Notes">http://wiki.finkproject.org/index.php/Fink:Porting_Notes</a>
<br>
<p>There are quite a number of source files which will need to
<br>
be patched to fix this. For example, openmpi 1.2.2 shows...
<br>
<p>openmpi-1.2.2/ompi/communicator/comm_dyn.c:extern char **environ;
<br>
openmpi-1.2.2/opal/tools/wrappers/opal_wrapper.c:extern char **environ;
<br>
openmpi-1.2.2/orte/mca/odls/base/odls_private.h:ORTE_DECLSPEC int orte_odls_base_purge_environment(char ***environ);
<br>
openmpi-1.2.2/orte/mca/pls/bproc/pls_bproc.c:extern char **environ;
<br>
openmpi-1.2.2/orte/mca/pls/gridengine/pls_gridengine_module.c:extern char **environ;
<br>
openmpi-1.2.2/orte/mca/pls/poe/pls_poe_component.c:extern char **environ;
<br>
openmpi-1.2.2/orte/mca/pls/poe/pls_poe_module.c:extern char **environ;
<br>
openmpi-1.2.2/orte/mca/pls/rsh/pls_rsh_component.c:extern char **environ;
<br>
openmpi-1.2.2/orte/mca/pls/rsh/pls_rsh_component.c:extern char **environ;
<br>
openmpi-1.2.2/orte/mca/pls/rsh/pls_rsh_module.c:extern char **environ;
<br>
openmpi-1.2.2/orte/mca/pls/slurm/pls_slurm_module.c:extern char **environ;
<br>
openmpi-1.2.2/orte/mca/pls/tm/pls_tm_module.c:extern char **environ;
<br>
openmpi-1.2.2/orte/mca/pls/xgrid/src/pls_xgrid_client.m:char **environ;
<br>
openmpi-1.2.2/orte/mca/rmgr/base/rmgr_base_check_context.c:extern char **environ;
<br>
openmpi-1.2.2/orte/mca/sds/base/base.h:                                          char ***environ);
<br>
openmpi-1.2.2/orte/runtime/orte_setup_hnp.c:extern char **environ;
<br>
openmpi-1.2.2/orte/tools/orterun/totalview.c:extern char **environ;
<br>
<p>I would suggest you look at the second approach proposed in the fink wiki
<br>
of modifying configure to check for the presence of the crt_externs.h
<br>
header and the _NSGetEnviron symbol directly.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jack
<br>
ps This issue arises when trying to build packages like paraview
<br>
which won't link its shared libraries due to the undefined environ symbol.
<br>
I would also note this issue is discussed at...
<br>
<p><a href="http://lists.apple.com/archives/Darwin-dev/2005/Mar/msg00132.html">http://lists.apple.com/archives/Darwin-dev/2005/Mar/msg00132.html</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1591.php">Brian Barrett: "Re: [OMPI devel] undefined environ symbol on Darwin"</a>
<li><strong>Previous message:</strong> <a href="1589.php">Brian W. Barrett: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14782"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1591.php">Brian Barrett: "Re: [OMPI devel] undefined environ symbol on Darwin"</a>
<li><strong>Reply:</strong> <a href="1591.php">Brian Barrett: "Re: [OMPI devel] undefined environ symbol on Darwin"</a>
<li><strong>Reply:</strong> <a href="1592.php">Jack Howarth: "Re: [OMPI devel] undefined environ symbol on Darwin"</a>
<li><strong>Reply:</strong> <a href="1597.php">Jack Howarth: "Re: [OMPI devel] undefined environ symbol on Darwin"</a>
<li><strong>Reply:</strong> <a href="1598.php">Jack Howarth: "Re: [OMPI devel] undefined environ symbol on Darwin"</a>
<li><strong>Reply:</strong> <a href="1601.php">Jack Howarth: "Re: [OMPI devel] undefined environ symbol on Darwin"</a>
<li><strong>Reply:</strong> <a href="1602.php">Jack Howarth: "Re: [OMPI devel] undefined environ symbol on Darwin"</a>
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
