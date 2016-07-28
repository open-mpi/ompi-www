<?
$subject_val = "Re: [OMPI users] orte_ess_base_select failed";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  6 18:18:30 2011" -->
<!-- isoreceived="20111206231830" -->
<!-- sent="Tue, 6 Dec 2011 18:18:25 -0500" -->
<!-- isosent="20111206231825" -->
<!-- name="Gustavo Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] orte_ess_base_select failed" -->
<!-- id="AD3B71A2-124E-4309-BE1A-3B5D09A350FD_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAJ32XebXvDKX6BxU-sDrXnxKV_9ygDeb5N3mfKY8_rG_L+GERg_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2011-12-06 18:18:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17901.php">Tim Blattner: "[OMPI users] Run Time problem: Program hangs when utilizing multiple nodes."</a>
<li><strong>Previous message:</strong> <a href="17899.php">John Doe: "[OMPI users] orte_ess_base_select failed"</a>
<li><strong>In reply to:</strong> <a href="17899.php">John Doe: "[OMPI users] orte_ess_base_select failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17902.php">John Doe: "Re: [OMPI users] orte_ess_base_select failed"</a>
<li><strong>Reply:</strong> <a href="17902.php">John Doe: "Re: [OMPI users] orte_ess_base_select failed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi John Doe
<br>
<p>What you need to add to LD_LIBRARY_PATH is /opt/ompi/gnu/1.4.4/lib
<br>
[note 'lib' at the end].
<br>
Your email seems to say that you added /opt/ompi/gnu/1.4.4/lib/openmpi
<br>
instead, if I understood it right. 
<br>
And to your PATH you need to add the corresponding 'bin' directory:
<br>
/opt/ompi/gnu/1.4.4/bin.
<br>
The rule here is your installation prefix /opt/ompi/gnu/1.4.4/
<br>
with 'lib' or 'bin' at the end.
<br>
<p>I hope this helps,
<br>
Frank Capra
<br>
<p>On Dec 6, 2011, at 5:54 PM, John Doe wrote:
<br>
<p><span class="quotelev1">&gt; I recently built and installed openmpi on my 64 bit linux machine running centOS 6. 
</span><br>
<span class="quotelev1">&gt; However whenever I try mpirun I get the error message:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file runtime/orte_init.c at line 125
</span><br>
<span class="quotelev1">&gt; orte_ess_base_select failed
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Actually here's the full error transcript:
</span><br>
<span class="quotelev1">&gt; ====================================================================================================
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mpiexec -n 4 object/a.out
</span><br>
<span class="quotelev1">&gt; [ellipse:01480] mca: base: component_find: unable to open /opt/ompi/gnu/1.4.4/lib/openmpi/mca_paffinity_linux: file not found (ignored)
</span><br>
<span class="quotelev1">&gt; [ellipse:01480] mca: base: component_find: unable to open /opt/ompi/gnu/1.4.4/lib/openmpi/mca_carto_auto_detect: file not found (ignored)
</span><br>
<span class="quotelev1">&gt; [ellipse:01480] mca: base: component_find: unable to open /opt/ompi/gnu/1.4.4/lib/openmpi/mca_carto_file: file not found (ignored)
</span><br>
<span class="quotelev1">&gt; [ellipse:01480] mca: base: component_find: unable to open /opt/ompi/gnu/1.4.4/lib/openmpi/mca_ess_env: file not found (ignored)
</span><br>
<span class="quotelev1">&gt; [ellipse:01480] mca: base: component_find: unable to open /opt/ompi/gnu/1.4.4/lib/openmpi/mca_ess_hnp: file not found (ignored)
</span><br>
<span class="quotelev1">&gt; [ellipse:01480] mca: base: component_find: unable to open /opt/ompi/gnu/1.4.4/lib/openmpi/mca_ess_singleton: file not found (ignored)
</span><br>
<span class="quotelev1">&gt; [ellipse:01480] mca: base: component_find: unable to open /opt/ompi/gnu/1.4.4/lib/openmpi/mca_ess_slurm: file not found (ignored)
</span><br>
<span class="quotelev1">&gt; [ellipse:01480] mca: base: component_find: unable to open /opt/ompi/gnu/1.4.4/lib/openmpi/mca_ess_tool: file not found (ignored)
</span><br>
<span class="quotelev1">&gt; [ellipse:01480] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file runtime/orte_init.c at line 125
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   orte_ess_base_select failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned value Not found (-13) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; =============================================================================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here are the configure options I used to build openmpi:
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/opt/ompi/gnu/1.4.4 CC=gcc -m64 CXX=g++ -m64 FC=gfortran -m64 F77=gfortran -m64 CFLAGS=-O2 -g CXXFLAGS=-O2 -g FCFLAGS=-O2 -g FFLAGS=-O2 -g --enable-debug --enable-shared=gcc --with-valgrind=/opt/valgrind --with-devel-headers --enable-mem-profile --enable-orterun-prefix-by-default --enable-memchecker
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does anyone have any idea what these errors are. I tried recompiling with the --enable-orterun-prefix-by-default  flag. Also while those files e.g mca_ess_tool are not found, the static versions e.g mca_ess_tool.a and mca_ess_tool.la exist in the /opt/ompi/gnu/1.4.4/lib/openmpi directory. I've also tried adding that directory to my LD_LIBRARY_PATH but still get the same error. Help would be much appreciated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Sam
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
<li><strong>Next message:</strong> <a href="17901.php">Tim Blattner: "[OMPI users] Run Time problem: Program hangs when utilizing multiple nodes."</a>
<li><strong>Previous message:</strong> <a href="17899.php">John Doe: "[OMPI users] orte_ess_base_select failed"</a>
<li><strong>In reply to:</strong> <a href="17899.php">John Doe: "[OMPI users] orte_ess_base_select failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17902.php">John Doe: "Re: [OMPI users] orte_ess_base_select failed"</a>
<li><strong>Reply:</strong> <a href="17902.php">John Doe: "Re: [OMPI users] orte_ess_base_select failed"</a>
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
