<?
$subject_val = "[OMPI users] Question on ssh search path";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 16 17:24:00 2012" -->
<!-- isoreceived="20121016212400" -->
<!-- sent="Tue, 16 Oct 2012 23:23:53 +0200" -->
<!-- isosent="20121016212353" -->
<!-- name="marco atzeri" -->
<!-- email="marco.atzeri_at_[hidden]" -->
<!-- subject="[OMPI users] Question on ssh search path" -->
<!-- id="507DD069.1040102_at_gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Question on ssh search path<br>
<strong>From:</strong> marco atzeri (<em>marco.atzeri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-16 17:23:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20496.php">huydanlin: "[OMPI users] MPI Tests"</a>
<li><strong>Previous message:</strong> <a href="20494.php">Brian Budge: "[OMPI users] singleton spawn regression"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20503.php">Ralph Castain: "Re: [OMPI users] Question on ssh search path"</a>
<li><strong>Reply:</strong> <a href="20503.php">Ralph Castain: "Re: [OMPI users] Question on ssh search path"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I am playing on OpenMpi(1.6.2) on cygwin platform, and
<br>
while compile and check were fine
<br>
<p>the simple &quot;mpirun hello_c.exe&quot; is failing with the criptic
<br>
<p>##################################################################
<br>
[MARCOATZERI:07440] [[15164,0],0] ORTE_ERROR_LOG: Not found in file 
<br>
/pub/devel/openmpi/openmpi-1.6.2-1/src/openmpi-1.6.2/orte/mca/plm/rsh/plm_rsh_module.c 
<br>
at line 197
<br>
[MARCOATZERI:07440] [[15164,0],0] ORTE_ERROR_LOG: Not found in file 
<br>
/pub/devel/openmpi/openmpi-1.6.2-1/src/openmpi-1.6.2/orte/mca/ess/hnp/ess_hnp_module.c 
<br>
at line 228
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;&nbsp;orte_plm_init failed
<br>
&nbsp;&nbsp;&nbsp;--&gt; Returned value Not found (-13) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
[MARCOATZERI:07440] [[15164,0],0] ORTE_ERROR_LOG: Not found in file 
<br>
/pub/devel/openmpi/openmpi-1.6.2-1/src/openmpi-1.6.2/orte/runtime/orte_init.c 
<br>
at line 128
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;&nbsp;orte_ess_set_name failed
<br>
&nbsp;&nbsp;&nbsp;--&gt; Returned value Not found (-13) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
[MARCOATZERI:07440] [[15164,0],0] ORTE_ERROR_LOG: Not found in file 
<br>
/pub/devel/openmpi/openmpi-1.6.2-1/src/openmpi-1.6.2/orte/tools/orterun/orterun.c 
<br>
at line 694
<br>
#####################################################################
<br>
<p>trying to debug I notice a strange pattern on ssh search:
<br>
1)  ssh is only searched on the PATH directories that end with &quot;bin&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;other directories are skipped.
<br>
2) //usr/bin/ssh is not on the PATH but is searched.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Why and where is defined in the code ?
<br>
<p>&nbsp;&nbsp;&nbsp;103  321183 [main] orterun 6304 normalize_posix_path: src 
<br>
/home/marco/bin/ssh
<br>
&nbsp;&nbsp;&nbsp;100  324353 [main] orterun 6304 normalize_posix_path: src 
<br>
/usr/local/bin/ssh
<br>
&nbsp;&nbsp;&nbsp;&nbsp;99  327381 [main] orterun 6304 normalize_posix_path: src /usr/bin/ssh
<br>
&nbsp;&nbsp;&nbsp;&nbsp;36 1805679 [main] orterun 6304 normalize_posix_path: src 
<br>
/home/marco/bin/ssh
<br>
&nbsp;&nbsp;&nbsp;&nbsp;34 1807010 [main] orterun 6304 normalize_posix_path: src 
<br>
/usr/local/bin/ssh
<br>
&nbsp;&nbsp;&nbsp;&nbsp;34 1808236 [main] orterun 6304 normalize_posix_path: src /usr/bin/ssh
<br>
&nbsp;&nbsp;&nbsp;&nbsp;37 1810858 [main] orterun 6304 normalize_posix_path: src //usr/bin/ssh
<br>
<p>as immediately after the &quot;//&quot; search mpirun crashes
<br>
<p>&nbsp;&nbsp;703 9508968 [WNetOpenEnum] orterun 8020 cygthread::stub: thread 
<br>
'WNetOpenEnum', id 0x15A0, stack_ptr 0x28BAD40
<br>
--- Process 8020, exception 000006AB at 776BB9BC
<br>
41286 9550254 [main] orterun 8020 fs_info::update: Cannot get volume 
<br>
attributes (\??\UNC), C0000010
<br>
<p>I suspect this search is the culprit.
<br>
<p>If someone is interested I put here
<br>
<a href="http://matzeri.altervista.org/works/ompi/">http://matzeri.altervista.org/works/ompi/</a>
<br>
<p>all the config, check and make logs plus the ompi_info output.
<br>
<p>Regards
<br>
Marco
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20496.php">huydanlin: "[OMPI users] MPI Tests"</a>
<li><strong>Previous message:</strong> <a href="20494.php">Brian Budge: "[OMPI users] singleton spawn regression"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20503.php">Ralph Castain: "Re: [OMPI users] Question on ssh search path"</a>
<li><strong>Reply:</strong> <a href="20503.php">Ralph Castain: "Re: [OMPI users] Question on ssh search path"</a>
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
