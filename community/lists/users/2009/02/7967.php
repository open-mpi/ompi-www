<?
$subject_val = "[OMPI users] Problems in 1.3 loading shared libs when using VampirServer";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  4 12:03:34 2009" -->
<!-- isoreceived="20090204170334" -->
<!-- sent="Wed, 04 Feb 2009 18:03:18 +0100" -->
<!-- isosent="20090204170318" -->
<!-- name="Kiril Dichev" -->
<!-- email="dichev_at_[hidden]" -->
<!-- subject="[OMPI users] Problems in 1.3 loading shared libs when using VampirServer" -->
<!-- id="1233766998.11498.71.camel_at_hp-laptop" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="68C50629-4247-40DE-B5B4-A6DE3AFFC852_at_Chemie.Uni-KL.de" -->
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
<strong>Subject:</strong> [OMPI users] Problems in 1.3 loading shared libs when using VampirServer<br>
<strong>From:</strong> Kiril Dichev (<em>dichev_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-04 12:03:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7968.php">Iannetti, Anthony C. (GRC-RTB0): "Re: [OMPI users] Joe Griffin: &quot;Re:	Cannotcompile	onLinuxItanium	system&quot;"</a>
<li><strong>Previous message:</strong> <a href="7966.php">Hana Milani: "[OMPI users] signal 15 (terminated)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8171.php">Jeff Squyres: "Re: [OMPI users] Problems in 1.3 loading shared libs when using VampirServer"</a>
<li><strong>Reply:</strong> <a href="8171.php">Jeff Squyres: "Re: [OMPI users] Problems in 1.3 loading shared libs when using VampirServer"</a>
<li><strong>Maybe reply:</strong> <a href="8178.php">michael.meinel_at_[hidden]: "Re: [OMPI users] Problems in 1.3 loading shared libs when using VampirServer"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi guys,
<br>
<p>sorry for the long e-mail.
<br>
<p>I have been trying for some time now to run VampirServer with shared
<br>
libs for Open MPI 1.3.
<br>
<p>First of all: The &quot;--enable-static --disable-shared&quot; version works.
<br>
Also, the 1.2 series worked fine with the shared libs.
<br>
<p>But here is the story for the shared libraries with OMPI 1.3:
<br>
Compilation of OMPI went fine and also the VampirServer guys compiled
<br>
the MPI driver they need against OMPI. The driver just refers to the
<br>
shared libraries of Open MPI.
<br>
<p>However, on launching the server I got errors of the type &quot;undefined
<br>
symbol&quot;:
<br>
<p>error: /home_nfs/parma/x86_64/UNITE/packages/openmpi/1.3-intel10.1-64bit-MT-shared/lib/openmpi/mca_paffinity_linux.so: 
<br>
undefined symbol: mca_base_param_reg_int
<br>
<p>It seemed to me that probably my LD_LIBRARY_PATH is not including
<br>
&lt;MPI_INSTALL&gt;/lib/openmpi , but I exported it and did &quot;mpirun -x
<br>
LD_LIBRARY_PATH ...&quot; and nothing changed.
<br>
<p>Then, I started building any component complaining with &quot;undefined
<br>
symbol&quot; with &quot;--enable-mca-static&quot; - for example the above message
<br>
disappeared after I did --enable-mca-static paffinity. I don't know why
<br>
this worked, but it seemed to help. However, it was always replaced by
<br>
another error message of another component. 
<br>
<p>After a few components another error came
<br>
<p>mca: base: component_find: unable to
<br>
open /home_nfs/parma/x86_64/UNITE/packages/openmpi/1.3-intel10.1-64bit-MT-shared/lib/openmpi/mca_rml_oob: file not found (ignored) 
<br>
<p>(full output attached)
<br>
<p>Now, I was unsure what to do, but again, when compiling the complaining
<br>
component statically, things went a step further. One thing that struck
<br>
me is that there is such a file with an extra &quot;.so&quot; at the end in the
<br>
directory -but maybe dlopen also accepts files without the &quot;.so&quot;, I
<br>
don't know.
<br>
<p><p>Anywas, now I have included like 20 components statically and still
<br>
build shared objects for the OMPI libs and things seem to work.
<br>
<p>Does anyone have any idea why these dozens of errors happen when loading
<br>
shared libs? Like I said, I never had this in 1.2 series.
<br>
<p><p>Thanks,
<br>
Kiril
<br>
<p><p><p>
<br><p>
[nv8:21349] mca: base: component_find: unable to open /home_nfs/parma/x86_64/UNITE/packages/openmpi/1.3-intel10.1-64bit-MT-shared/lib/openmpi/mca_rml_oob: file not found (ignored)
<br>
[nv8:21349] [[8664,1],1] ORTE_ERROR_LOG: Error in file ../../../../orte/mca/ess/base/ess_base_std_app.c at line 72
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
<p>&nbsp;&nbsp;orte_rml_base_select failed
<br>
&nbsp;&nbsp;--&gt; Returned value Error (-1) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
[nv8:21349] [[8664,1],1] ORTE_ERROR_LOG: Error in file ../../../../../orte/mca/ess/env/ess_env_module.c at line 154
<br>
[nv8:21349] [[8664,1],1] ORTE_ERROR_LOG: Error in file ../../orte/runtime/orte_init.c at line 132
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
[nv8:21348] mca: base: component_find: unable to open /home_nfs/parma/x86_64/UNITE/packages/openmpi/1.3-intel10.1-64bit-MT-shared/lib/openmpi/mca_rml_oob: file not found (ignored)
<br>
[nv8:21348] [[8664,1],0] ORTE_ERROR_LOG: Error in file ../../../../orte/mca/ess/base/ess_base_std_app.c at line 72
<br>
--------------------------------------------------------------------------
<br>
It looks like MPI_INIT failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during MPI_INIT; some of which are due to configuration or environment
<br>
problems.  This failure appears to be an internal failure; here's some
<br>
additional information (which may only be relevant to an Open MPI
<br>
developer):
<br>
<p>&nbsp;&nbsp;ompi_mpi_init: orte_init failed
<br>
&nbsp;&nbsp;--&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
[nv8:21349] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
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
<p>&nbsp;&nbsp;orte_rml_base_select failed
<br>
&nbsp;&nbsp;--&gt; Returned value Error (-1) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
[nv8:21348] [[8664,1],0] ORTE_ERROR_LOG: Error in file ../../../../../orte/mca/ess/env/ess_env_module.c at line 154
<br>
[nv8:21348] [[8664,1],0] ORTE_ERROR_LOG: Error in file ../../orte/runtime/orte_init.c at line 132
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
[nv6:25435] mca: base: component_find: unable to open /home_nfs/parma/x86_64/UNITE/packages/openmpi/1.3-intel10.1-64bit-MT-shared/lib/openmpi/mca_rml_oob: file not found (ignored)
<br>
[nv6:25435] [[8664,1],4] ORTE_ERROR_LOG: Error in file ../../../../orte/mca/ess/base/ess_base_std_app.c at line 72
<br>
--------------------------------------------------------------------------
<br>
It looks like MPI_INIT failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during MPI_INIT; some of which are due to configuration or environment
<br>
problems.  This failure appears to be an internal failure; here's some
<br>
additional information (which may only be relevant to an Open MPI
<br>
developer):
<br>
<p>&nbsp;&nbsp;ompi_mpi_init: orte_init failed
<br>
&nbsp;&nbsp;--&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
[nv8:21348] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
<br>
[nv8:21351] mca: base: component_find: unable to open /home_nfs/parma/x86_64/UNITE/packages/openmpi/1.3-intel10.1-64bit-MT-shared/lib/openmpi/mca_rml_oob: file not found (ignored)
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
<p>&nbsp;&nbsp;orte_rml_base_select failed
<br>
&nbsp;&nbsp;--&gt; Returned value Error (-1) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
[nv6:25435] [[8664,1],4] ORTE_ERROR_LOG: Error in file ../../../../../orte/mca/ess/env/ess_env_module.c at line 154
<br>
[nv8:21351] [[8664,1],3] ORTE_ERROR_LOG: Error in file ../../../../orte/mca/ess/base/ess_base_std_app.c at line 72
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
<p>&nbsp;&nbsp;orte_rml_base_select failed
<br>
&nbsp;&nbsp;--&gt; Returned value Error (-1) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
[nv6:25435] [[8664,1],4] ORTE_ERROR_LOG: Error in file ../../orte/runtime/orte_init.c at line 132
<br>
[nv8:21351] [[8664,1],3] ORTE_ERROR_LOG: Error in file ../../../../../orte/mca/ess/env/ess_env_module.c at line 154
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
[nv8:21351] [[8664,1],3] ORTE_ERROR_LOG: Error in file ../../orte/runtime/orte_init.c at line 132
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
--------------------------------------------------------------------------
<br>
It looks like MPI_INIT failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during MPI_INIT; some of which are due to configuration or environment
<br>
problems.  This failure appears to be an internal failure; here's some
<br>
additional information (which may only be relevant to an Open MPI
<br>
developer):
<br>
<p>&nbsp;&nbsp;ompi_mpi_init: orte_init failed
<br>
&nbsp;&nbsp;--&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
[nv6:25435] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
<br>
--------------------------------------------------------------------------
<br>
It looks like MPI_INIT failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during MPI_INIT; some of which are due to configuration or environment
<br>
problems.  This failure appears to be an internal failure; here's some
<br>
additional information (which may only be relevant to an Open MPI
<br>
developer):
<br>
<p>&nbsp;&nbsp;ompi_mpi_init: orte_init failed
<br>
&nbsp;&nbsp;--&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
[nv8:21351] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
<br>
[nv8:21350] mca: base: component_find: unable to open /home_nfs/parma/x86_64/UNITE/packages/openmpi/1.3-intel10.1-64bit-MT-shared/lib/openmpi/mca_rml_oob: file not found (ignored)
<br>
[nv8:21350] [[8664,1],2] ORTE_ERROR_LOG: Error in file ../../../../orte/mca/ess/base/ess_base_std_app.c at line 72
<br>
[nv6:25437] mca: base: component_find: unable to open /home_nfs/parma/x86_64/UNITE/packages/openmpi/1.3-intel10.1-64bit-MT-shared/lib/openmpi/mca_rml_oob: file not found (ignored)
<br>
[nv6:25437] [[8664,1],6] ORTE_ERROR_LOG: Error in file ../../../../orte/mca/ess/base/ess_base_std_app.c at line 72
<br>
[nv6:25436] mca: base: component_find: unable to open /home_nfs/parma/x86_64/UNITE/packages/openmpi/1.3-intel10.1-64bit-MT-shared/lib/openmpi/mca_rml_oob: file not found (ignored)
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
<p>&nbsp;&nbsp;orte_rml_base_select failed
<br>
&nbsp;&nbsp;--&gt; Returned value Error (-1) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
[nv8:21350] [[8664,1],2] ORTE_ERROR_LOG: Error in file ../../../../../orte/mca/ess/env/ess_env_module.c at line 154
<br>
[nv6:25436] [[8664,1],5] ORTE_ERROR_LOG: Error in file ../../../../orte/mca/ess/base/ess_base_std_app.c at line 72
<br>
[nv8:21350] [[8664,1],2] ORTE_ERROR_LOG: Error in file ../../orte/runtime/orte_init.c at line 132
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
<p>&nbsp;&nbsp;orte_rml_base_select failed
<br>
&nbsp;&nbsp;--&gt; Returned value Error (-1) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
[nv6:25437] [[8664,1],6] ORTE_ERROR_LOG: Error in file ../../../../../orte/mca/ess/env/ess_env_module.c at line 154
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
<p>&nbsp;&nbsp;orte_rml_base_select failed
<br>
&nbsp;&nbsp;--&gt; Returned value Error (-1) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
[nv6:25436] [[8664,1],5] ORTE_ERROR_LOG: Error in file ../../../../../orte/mca/ess/env/ess_env_module.c at line 154
<br>
--------------------------------------------------------------------------
<br>
It looks like MPI_INIT failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during MPI_INIT; some of which are due to configuration or environment
<br>
problems.  This failure appears to be an internal failure; here's some
<br>
additional information (which may only be relevant to an Open MPI
<br>
developer):
<br>
<p>&nbsp;&nbsp;ompi_mpi_init: orte_init failed
<br>
&nbsp;&nbsp;--&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
[nv6:25437] [[8664,1],6] ORTE_ERROR_LOG: Error in file ../../orte/runtime/orte_init.c at line 132
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
[nv8:21350] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
<br>
[nv6:25436] [[8664,1],5] ORTE_ERROR_LOG: Error in file ../../orte/runtime/orte_init.c at line 132
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
--------------------------------------------------------------------------
<br>
It looks like MPI_INIT failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during MPI_INIT; some of which are due to configuration or environment
<br>
problems.  This failure appears to be an internal failure; here's some
<br>
additional information (which may only be relevant to an Open MPI
<br>
developer):
<br>
<p>&nbsp;&nbsp;ompi_mpi_init: orte_init failed
<br>
&nbsp;&nbsp;--&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
[nv6:25437] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
<br>
--------------------------------------------------------------------------
<br>
It looks like MPI_INIT failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during MPI_INIT; some of which are due to configuration or environment
<br>
problems.  This failure appears to be an internal failure; here's some
<br>
additional information (which may only be relevant to an Open MPI
<br>
developer):
<br>
<p>&nbsp;&nbsp;ompi_mpi_init: orte_init failed
<br>
&nbsp;&nbsp;--&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
[nv6:25436] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
<br>
[nv6:25438] mca: base: component_find: unable to open /home_nfs/parma/x86_64/UNITE/packages/openmpi/1.3-intel10.1-64bit-MT-shared/lib/openmpi/mca_rml_oob: file not found (ignored)
<br>
[nv6:25438] [[8664,1],7] ORTE_ERROR_LOG: Error in file ../../../../orte/mca/ess/base/ess_base_std_app.c at line 72
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
<p>&nbsp;&nbsp;orte_rml_base_select failed
<br>
&nbsp;&nbsp;--&gt; Returned value Error (-1) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
[nv6:25438] [[8664,1],7] ORTE_ERROR_LOG: Error in file ../../../../../orte/mca/ess/env/ess_env_module.c at line 154
<br>
[nv6:25438] [[8664,1],7] ORTE_ERROR_LOG: Error in file ../../orte/runtime/orte_init.c at line 132
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
--------------------------------------------------------------------------
<br>
It looks like MPI_INIT failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during MPI_INIT; some of which are due to configuration or environment
<br>
problems.  This failure appears to be an internal failure; here's some
<br>
additional information (which may only be relevant to an Open MPI
<br>
developer):
<br>
<p>&nbsp;&nbsp;ompi_mpi_init: orte_init failed
<br>
&nbsp;&nbsp;--&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
[nv6:25438] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7968.php">Iannetti, Anthony C. (GRC-RTB0): "Re: [OMPI users] Joe Griffin: &quot;Re:	Cannotcompile	onLinuxItanium	system&quot;"</a>
<li><strong>Previous message:</strong> <a href="7966.php">Hana Milani: "[OMPI users] signal 15 (terminated)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8171.php">Jeff Squyres: "Re: [OMPI users] Problems in 1.3 loading shared libs when using VampirServer"</a>
<li><strong>Reply:</strong> <a href="8171.php">Jeff Squyres: "Re: [OMPI users] Problems in 1.3 loading shared libs when using VampirServer"</a>
<li><strong>Maybe reply:</strong> <a href="8178.php">michael.meinel_at_[hidden]: "Re: [OMPI users] Problems in 1.3 loading shared libs when using VampirServer"</a>
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
