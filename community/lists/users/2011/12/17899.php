<?
$subject_val = "[OMPI users] orte_ess_base_select failed";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  6 17:54:42 2011" -->
<!-- isoreceived="20111206225442" -->
<!-- sent="Tue, 6 Dec 2011 16:54:33 -0600" -->
<!-- isosent="20111206225433" -->
<!-- name="John Doe" -->
<!-- email="javadevelopercl_at_[hidden]" -->
<!-- subject="[OMPI users] orte_ess_base_select failed" -->
<!-- id="CAJ32XebXvDKX6BxU-sDrXnxKV_9ygDeb5N3mfKY8_rG_L+GERg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] orte_ess_base_select failed<br>
<strong>From:</strong> John Doe (<em>javadevelopercl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-06 17:54:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17900.php">Gustavo Correa: "Re: [OMPI users] orte_ess_base_select failed"</a>
<li><strong>Previous message:</strong> <a href="17898.php">Ralph Castain: "Re: [OMPI users] How are the Open MPI processes spawned?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17900.php">Gustavo Correa: "Re: [OMPI users] orte_ess_base_select failed"</a>
<li><strong>Reply:</strong> <a href="17900.php">Gustavo Correa: "Re: [OMPI users] orte_ess_base_select failed"</a>
<li><strong>Maybe reply:</strong> <a href="17910.php">tim: "Re: [OMPI users] orte_ess_base_select failed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I recently built and installed openmpi on my 64 bit linux machine running
<br>
centOS 6.
<br>
However whenever I try mpirun I get the error message:
<br>
<p>[[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file runtime/orte_init.c
<br>
at line 125
<br>
orte_ess_base_select failed
<br>
<p>Actually here's the full error transcript:
<br>
====================================================================================================
<br>
<span class="quotelev2">&gt;&gt; mpiexec -n 4 object/a.out
</span><br>
[ellipse:01480] mca: base: component_find: unable to open
<br>
/opt/ompi/gnu/1.4.4/lib/openmpi/mca_paffinity_linux: file not found
<br>
(ignored)
<br>
[ellipse:01480] mca: base: component_find: unable to open
<br>
/opt/ompi/gnu/1.4.4/lib/openmpi/mca_carto_auto_detect: file not found
<br>
(ignored)
<br>
[ellipse:01480] mca: base: component_find: unable to open
<br>
/opt/ompi/gnu/1.4.4/lib/openmpi/mca_carto_file: file not found (ignored)
<br>
[ellipse:01480] mca: base: component_find: unable to open
<br>
/opt/ompi/gnu/1.4.4/lib/openmpi/mca_ess_env: file not found (ignored)
<br>
[ellipse:01480] mca: base: component_find: unable to open
<br>
/opt/ompi/gnu/1.4.4/lib/openmpi/mca_ess_hnp: file not found (ignored)
<br>
[ellipse:01480] mca: base: component_find: unable to open
<br>
/opt/ompi/gnu/1.4.4/lib/openmpi/mca_ess_singleton: file not found (ignored)
<br>
[ellipse:01480] mca: base: component_find: unable to open
<br>
/opt/ompi/gnu/1.4.4/lib/openmpi/mca_ess_slurm: file not found (ignored)
<br>
[ellipse:01480] mca: base: component_find: unable to open
<br>
/opt/ompi/gnu/1.4.4/lib/openmpi/mca_ess_tool: file not found (ignored)
<br>
[ellipse:01480] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file
<br>
runtime/orte_init.c at line 125
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
<p>&nbsp;&nbsp;orte_ess_base_select failed
<br>
&nbsp;&nbsp;--&gt; Returned value Not found (-13) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
<p>=============================================================================================================
<br>
<p><p>Here are the configure options I used to build openmpi:
<br>
./configure --prefix=/opt/ompi/gnu/1.4.4 CC=gcc -m64 CXX=g++ -m64
<br>
FC=gfortran -m64 F77=gfortran -m64 CFLAGS=-O2 -g CXXFLAGS=-O2 -g
<br>
FCFLAGS=-O2 -g FFLAGS=-O2 -g --enable-debug --enable-shared=gcc
<br>
--with-valgrind=/opt/valgrind --with-devel-headers --enable-mem-profile
<br>
--enable-orterun-prefix-by-default --enable-memchecker
<br>
<p>Does anyone have any idea what these errors are. I tried recompiling with
<br>
the --enable-orterun-prefix-by-default  flag. Also while those files e.g
<br>
mca_ess_tool are not found, the static versions e.g mca_ess_tool.a and
<br>
mca_ess_tool.la exist in the /opt/ompi/gnu/1.4.4/lib/openmpi directory.
<br>
I've also tried adding that directory to my LD_LIBRARY_PATH but still get
<br>
the same error. Help would be much appreciated.
<br>
<p>Thanks,
<br>
Sam
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17899/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17900.php">Gustavo Correa: "Re: [OMPI users] orte_ess_base_select failed"</a>
<li><strong>Previous message:</strong> <a href="17898.php">Ralph Castain: "Re: [OMPI users] How are the Open MPI processes spawned?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17900.php">Gustavo Correa: "Re: [OMPI users] orte_ess_base_select failed"</a>
<li><strong>Reply:</strong> <a href="17900.php">Gustavo Correa: "Re: [OMPI users] orte_ess_base_select failed"</a>
<li><strong>Maybe reply:</strong> <a href="17910.php">tim: "Re: [OMPI users] orte_ess_base_select failed"</a>
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
