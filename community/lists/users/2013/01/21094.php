<?
$subject_val = "[OMPI users] Open MPI error in Windows";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  9 16:47:25 2013" -->
<!-- isoreceived="20130109214725" -->
<!-- sent="Wed, 9 Jan 2013 21:47:18 +0000" -->
<!-- isosent="20130109214718" -->
<!-- name="Kumar, Sudhir" -->
<!-- email="kums_at_[hidden]" -->
<!-- subject="[OMPI users] Open MPI error in Windows" -->
<!-- id="8A9547392E2EB443894AF275470DF5E32F761B03_at_hou150w8xmbx02.hou150.chevrontexaco.net" -->
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
<strong>Subject:</strong> [OMPI users] Open MPI error in Windows<br>
<strong>From:</strong> Kumar, Sudhir (<em>kums_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-09 16:47:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21095.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi"</a>
<li><strong>Previous message:</strong> <a href="21093.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Backward Compatibility of MPI Java Binding"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
I get the following error when trying to use OpenMPI on Windows. I was wondering if anyone has run into similar errors while using OpenMPI 1.6 on Windows.
<br>
<p><p>C:\Test\pred2\tmp_pred2&gt;&quot;C:\\Program Files (x86)\\OpenMPI_v1.6-x64\\bin\\mpiexec&quot;    -x CXTC_LICENSE_FIL
<br>
E     --bind-to-core    --bysocket    -np 3    &quot;C:\\chap\\chears\\devel\\bin\\ParaMain.exe&quot;     -q &quot;C:\\
<br>
Test\\pred2&quot;\tmp_pred2\pred2.deck      -w &quot;C:\\Test\\pred2\\temp&quot;      -o &quot;C:\\Test\\pred2&quot;\tmp_pred2
<br>
&nbsp;&nbsp;&nbsp;-f &quot;C:\\Test\\pred2&quot;\tmp_pred2\fort.21      -h &quot;C:\\Test\\pred2&quot;\tmp_pred2\fort.88       1&gt;&quot;C:\\Test\
<br>
\pred2&quot;\tmp_pred2\pred2.stdo
<br>
[2ua73917cx:03812] opal_os_dirpath_create: Error: Unable to create the sub-directory (&quot;C:) of (&quot;C:\\Test
<br>
\\pred2\\temp&quot;\openmpi-sessions-kums_at_2ua73917cx_0\14199\0\0), mkdir failed [1]
<br>
[2ua73917cx:03812] [[14199,0],0] ORTE_ERROR_LOG: Error in file ..\..\..\openmpi-1.6\orte\util\session_di
<br>
r.c at line 106
<br>
[2ua73917cx:03812] [[14199,0],0] ORTE_ERROR_LOG: Error in file ..\..\..\openmpi-1.6\orte\util\session_di
<br>
r.c at line 399
<br>
[2ua73917cx:03812] [[14199,0],0] ORTE_ERROR_LOG: Error in file ..\..\..\openmpi-1.6\orte\mca\ess\hnp\ess
<br>
_hnp_module.c at line 337
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
<p>&nbsp;&nbsp;orte_session_dir failed
<br>
&nbsp;&nbsp;--&gt; Returned value Error (-1) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
[2ua73917cx:03812] [[14199,0],0] ORTE_ERROR_LOG: Error in file ..\..\..\openmpi-1.6\orte\runtime\orte_in
<br>
it.c at line 128
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
<p>&nbsp;&nbsp;orte_ess_set_name failed
<br>
&nbsp;&nbsp;--&gt; Returned value Error (-1) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
[2ua73917cx:03812] [[14199,0],0] ORTE_ERROR_LOG: Error in file ..\..\..\..\..\openmpi-1.6\orte\tools\ort
<br>
erun\orterun.c at line 697
<br>
<p><p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21094/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21095.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi"</a>
<li><strong>Previous message:</strong> <a href="21093.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Backward Compatibility of MPI Java Binding"</a>
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
