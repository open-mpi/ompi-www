<?
$subject_val = "Re: [OMPI users] orte_ess_base_select failed";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  7 13:18:37 2011" -->
<!-- isoreceived="20111207181837" -->
<!-- sent="Wed, 7 Dec 2011 13:18:33 -0500" -->
<!-- isosent="20111207181833" -->
<!-- name="Gustavo Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] orte_ess_base_select failed" -->
<!-- id="421E2291-615B-463C-A99E-F13EBF66B231_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAJ32XeZiEOtsqyWdbNBSHbAcZ_VjcBhjV5M-xzWAU7O78TQ67Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] orte_ess_base_select failed<br>
<strong>From:</strong> Gustavo Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-07 13:18:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17908.php">Gustavo Correa: "Re: [OMPI users] orte_ess_base_select failed"</a>
<li><strong>Previous message:</strong> <a href="17906.php">Gustavo Correa: "Re: [OMPI users] orte_ess_base_select failed"</a>
<li><strong>In reply to:</strong> <a href="17902.php">John Doe: "Re: [OMPI users] orte_ess_base_select failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17910.php">tim: "Re: [OMPI users] orte_ess_base_select failed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi John Doe
<br>
<p>Set these environment variables in your .profile/.bashrc or .[t]cshrc file.
<br>
If you set them in the shell prompt, before you run the job, I am not sure they will
<br>
propagate to the MPI processes, even if you are running in a standalone machine 
<br>
[which apparently you are].
<br>
Ralph may clarify this point about the environment variables' inheritance.
<br>
<p>Alternatively, you could also pass the environment variables to the processes in the mpiexec command line, e.g. [in bash]:
<br>
<p>export LD_LIBRARY_PATH=whatever
<br>
export PATH=whaever_else
<br>
mpiexec -x LD_LIBRARY_PATH -x PATH -np=4 ./my_program.
<br>
<p>I hope this helps,
<br>
Edward Arnold
<br>
<p>On Dec 7, 2011, at 12:00 PM, John Doe wrote:
<br>
<p><span class="quotelev1">&gt; Hi Gustavo,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  I do have /opt/ompi/gnu/1.4.4/lib in my LD_LIBRARY_PATH and the bin directory in my path as well but that didn't seem to help.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sam
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Dec 6, 2011 at 5:18 PM, Gustavo Correa &lt;gus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hi John Doe
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What you need to add to LD_LIBRARY_PATH is /opt/ompi/gnu/1.4.4/lib
</span><br>
<span class="quotelev1">&gt; [note 'lib' at the end].
</span><br>
<span class="quotelev1">&gt; Your email seems to say that you added /opt/ompi/gnu/1.4.4/lib/openmpi
</span><br>
<span class="quotelev1">&gt; instead, if I understood it right.
</span><br>
<span class="quotelev1">&gt; And to your PATH you need to add the corresponding 'bin' directory:
</span><br>
<span class="quotelev1">&gt; /opt/ompi/gnu/1.4.4/bin.
</span><br>
<span class="quotelev1">&gt; The rule here is your installation prefix /opt/ompi/gnu/1.4.4/
</span><br>
<span class="quotelev1">&gt; with 'lib' or 'bin' at the end.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I hope this helps,
</span><br>
<span class="quotelev1">&gt; Frank Capra
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 6, 2011, at 5:54 PM, John Doe wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I recently built and installed openmpi on my 64 bit linux machine running centOS 6.
</span><br>
<span class="quotelev2">&gt; &gt; However whenever I try mpirun I get the error message:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file runtime/orte_init.c at line 125
</span><br>
<span class="quotelev2">&gt; &gt; orte_ess_base_select failed
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Actually here's the full error transcript:
</span><br>
<span class="quotelev2">&gt; &gt; ====================================================================================================
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; mpiexec -n 4 object/a.out
</span><br>
<span class="quotelev2">&gt; &gt; [ellipse:01480] mca: base: component_find: unable to open /opt/ompi/gnu/1.4.4/lib/openmpi/mca_paffinity_linux: file not found (ignored)
</span><br>
<span class="quotelev2">&gt; &gt; [ellipse:01480] mca: base: component_find: unable to open /opt/ompi/gnu/1.4.4/lib/openmpi/mca_carto_auto_detect: file not found (ignored)
</span><br>
<span class="quotelev2">&gt; &gt; [ellipse:01480] mca: base: component_find: unable to open /opt/ompi/gnu/1.4.4/lib/openmpi/mca_carto_file: file not found (ignored)
</span><br>
<span class="quotelev2">&gt; &gt; [ellipse:01480] mca: base: component_find: unable to open /opt/ompi/gnu/1.4.4/lib/openmpi/mca_ess_env: file not found (ignored)
</span><br>
<span class="quotelev2">&gt; &gt; [ellipse:01480] mca: base: component_find: unable to open /opt/ompi/gnu/1.4.4/lib/openmpi/mca_ess_hnp: file not found (ignored)
</span><br>
<span class="quotelev2">&gt; &gt; [ellipse:01480] mca: base: component_find: unable to open /opt/ompi/gnu/1.4.4/lib/openmpi/mca_ess_singleton: file not found (ignored)
</span><br>
<span class="quotelev2">&gt; &gt; [ellipse:01480] mca: base: component_find: unable to open /opt/ompi/gnu/1.4.4/lib/openmpi/mca_ess_slurm: file not found (ignored)
</span><br>
<span class="quotelev2">&gt; &gt; [ellipse:01480] mca: base: component_find: unable to open /opt/ompi/gnu/1.4.4/lib/openmpi/mca_ess_tool: file not found (ignored)
</span><br>
<span class="quotelev2">&gt; &gt; [ellipse:01480] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file runtime/orte_init.c at line 125
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev2">&gt; &gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt; &gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev2">&gt; &gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev2">&gt; &gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev2">&gt; &gt; Open MPI developer):
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   orte_ess_base_select failed
</span><br>
<span class="quotelev2">&gt; &gt;   --&gt; Returned value Not found (-13) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; =============================================================================================================
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Here are the configure options I used to build openmpi:
</span><br>
<span class="quotelev2">&gt; &gt; ./configure --prefix=/opt/ompi/gnu/1.4.4 CC=gcc -m64 CXX=g++ -m64 FC=gfortran -m64 F77=gfortran -m64 CFLAGS=-O2 -g CXXFLAGS=-O2 -g FCFLAGS=-O2 -g FFLAGS=-O2 -g --enable-debug --enable-shared=gcc --with-valgrind=/opt/valgrind --with-devel-headers --enable-mem-profile --enable-orterun-prefix-by-default --enable-memchecker
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Does anyone have any idea what these errors are. I tried recompiling with the --enable-orterun-prefix-by-default  flag. Also while those files e.g mca_ess_tool are not found, the static versions e.g mca_ess_tool.a and mca_ess_tool.la exist in the /opt/ompi/gnu/1.4.4/lib/openmpi directory. I've also tried adding that directory to my LD_LIBRARY_PATH but still get the same error. Help would be much appreciated.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt; Sam
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="17908.php">Gustavo Correa: "Re: [OMPI users] orte_ess_base_select failed"</a>
<li><strong>Previous message:</strong> <a href="17906.php">Gustavo Correa: "Re: [OMPI users] orte_ess_base_select failed"</a>
<li><strong>In reply to:</strong> <a href="17902.php">John Doe: "Re: [OMPI users] orte_ess_base_select failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17910.php">tim: "Re: [OMPI users] orte_ess_base_select failed"</a>
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
