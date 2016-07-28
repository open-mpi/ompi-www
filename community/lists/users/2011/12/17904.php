<?
$subject_val = "Re: [OMPI users] orte_ess_base_select failed";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  7 12:19:55 2011" -->
<!-- isoreceived="20111207171955" -->
<!-- sent="Wed, 7 Dec 2011 11:19:46 -0600" -->
<!-- isosent="20111207171946" -->
<!-- name="John Doe" -->
<!-- email="javadevelopercl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] orte_ess_base_select failed" -->
<!-- id="CAJ32XeakcU8Pe8RbDHEE3OgUQvy7_ZAb5+-pVVhJCSUK8oHa7w_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="785AE169-732E-4A26-931C-C4E6E31070FB_at_open-mpi.org" -->
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
<strong>From:</strong> John Doe (<em>javadevelopercl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-07 12:19:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17905.php">John Doe: "Re: [OMPI users] orte_ess_base_select failed"</a>
<li><strong>Previous message:</strong> <a href="17903.php">Ralph Castain: "Re: [OMPI users] orte_ess_base_select failed"</a>
<li><strong>In reply to:</strong> <a href="17903.php">Ralph Castain: "Re: [OMPI users] orte_ess_base_select failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17905.php">John Doe: "Re: [OMPI users] orte_ess_base_select failed"</a>
<li><strong>Reply:</strong> <a href="17905.php">John Doe: "Re: [OMPI users] orte_ess_base_select failed"</a>
<li><strong>Reply:</strong> <a href="17906.php">Gustavo Correa: "Re: [OMPI users] orte_ess_base_select failed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>&nbsp;I may have been a little promiscous in my use of build flags. My initial
<br>
configure line was much simpler then I kept throwing in flags when it
<br>
wouldn't run. I'll try to build it again with the your config line and see
<br>
if that resolves the issue.
<br>
<p>Sam
<br>
<p>On Wed, Dec 7, 2011 at 11:11 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I don't understand your configure line - why did you give an argument to
</span><br>
<span class="quotelev1">&gt; enable-shared?? That option doesn't take an argument, and may be causing
</span><br>
<span class="quotelev1">&gt; the confusion. Also, enable-debug by default turns off optimization as
</span><br>
<span class="quotelev1">&gt; otherwise the optimizer removes all debug symbols.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you want a debug version, try just this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/opt/ompi/gnu/1.4.4 --enable-debug
</span><br>
<span class="quotelev1">&gt; --with-valgrind=/opt/valgrind --enable-orterun-prefix-by-default
</span><br>
<span class="quotelev1">&gt; --enable-memchecker --enable-mem-profile
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You don't need --with-devel-headers unless you intend to write code that
</span><br>
<span class="quotelev1">&gt; directly drives the OMPI internals.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 7, 2011, at 10:00 AM, John Doe wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Gustavo,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I do have /opt/ompi/gnu/1.4.4/lib in my LD_LIBRARY_PATH and the bin
</span><br>
<span class="quotelev1">&gt; directory in my path as well but that didn't seem to help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sam
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Dec 6, 2011 at 5:18 PM, Gustavo Correa &lt;gus_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi John Doe
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What you need to add to LD_LIBRARY_PATH is /opt/ompi/gnu/1.4.4/lib
</span><br>
<span class="quotelev2">&gt;&gt; [note 'lib' at the end].
</span><br>
<span class="quotelev2">&gt;&gt; Your email seems to say that you added /opt/ompi/gnu/1.4.4/lib/openmpi
</span><br>
<span class="quotelev2">&gt;&gt; instead, if I understood it right.
</span><br>
<span class="quotelev2">&gt;&gt; And to your PATH you need to add the corresponding 'bin' directory:
</span><br>
<span class="quotelev2">&gt;&gt; /opt/ompi/gnu/1.4.4/bin.
</span><br>
<span class="quotelev2">&gt;&gt; The rule here is your installation prefix /opt/ompi/gnu/1.4.4/
</span><br>
<span class="quotelev2">&gt;&gt; with 'lib' or 'bin' at the end.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I hope this helps,
</span><br>
<span class="quotelev2">&gt;&gt; Frank Capra
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 6, 2011, at 5:54 PM, John Doe wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I recently built and installed openmpi on my 64 bit linux machine
</span><br>
<span class="quotelev2">&gt;&gt; running centOS 6.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; However whenever I try mpirun I get the error message:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev2">&gt;&gt; runtime/orte_init.c at line 125
</span><br>
<span class="quotelev3">&gt;&gt; &gt; orte_ess_base_select failed
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Actually here's the full error transcript:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; ====================================================================================================
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; mpiexec -n 4 object/a.out
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [ellipse:01480] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /opt/ompi/gnu/1.4.4/lib/openmpi/mca_paffinity_linux: file not found
</span><br>
<span class="quotelev2">&gt;&gt; (ignored)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [ellipse:01480] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /opt/ompi/gnu/1.4.4/lib/openmpi/mca_carto_auto_detect: file not found
</span><br>
<span class="quotelev2">&gt;&gt; (ignored)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [ellipse:01480] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /opt/ompi/gnu/1.4.4/lib/openmpi/mca_carto_file: file not found (ignored)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [ellipse:01480] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /opt/ompi/gnu/1.4.4/lib/openmpi/mca_ess_env: file not found (ignored)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [ellipse:01480] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /opt/ompi/gnu/1.4.4/lib/openmpi/mca_ess_hnp: file not found (ignored)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [ellipse:01480] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /opt/ompi/gnu/1.4.4/lib/openmpi/mca_ess_singleton: file not found (ignored)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [ellipse:01480] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /opt/ompi/gnu/1.4.4/lib/openmpi/mca_ess_slurm: file not found (ignored)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [ellipse:01480] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /opt/ompi/gnu/1.4.4/lib/openmpi/mca_ess_tool: file not found (ignored)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [ellipse:01480] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev2">&gt;&gt; runtime/orte_init.c at line 125
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt; &gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev3">&gt;&gt; &gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev3">&gt;&gt; &gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev3">&gt;&gt; &gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Open MPI developer):
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;   orte_ess_base_select failed
</span><br>
<span class="quotelev3">&gt;&gt; &gt;   --&gt; Returned value Not found (-13) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; =============================================================================================================
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Here are the configure options I used to build openmpi:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ./configure --prefix=/opt/ompi/gnu/1.4.4 CC=gcc -m64 CXX=g++ -m64
</span><br>
<span class="quotelev2">&gt;&gt; FC=gfortran -m64 F77=gfortran -m64 CFLAGS=-O2 -g CXXFLAGS=-O2 -g
</span><br>
<span class="quotelev2">&gt;&gt; FCFLAGS=-O2 -g FFLAGS=-O2 -g --enable-debug --enable-shared=gcc
</span><br>
<span class="quotelev2">&gt;&gt; --with-valgrind=/opt/valgrind --with-devel-headers --enable-mem-profile
</span><br>
<span class="quotelev2">&gt;&gt; --enable-orterun-prefix-by-default --enable-memchecker
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Does anyone have any idea what these errors are. I tried recompiling
</span><br>
<span class="quotelev2">&gt;&gt; with the --enable-orterun-prefix-by-default  flag. Also while those files
</span><br>
<span class="quotelev2">&gt;&gt; e.g mca_ess_tool are not found, the static versions e.g mca_ess_tool.a and
</span><br>
<span class="quotelev2">&gt;&gt; mca_ess_tool.la exist in the /opt/ompi/gnu/1.4.4/lib/openmpi directory.
</span><br>
<span class="quotelev2">&gt;&gt; I've also tried adding that directory to my LD_LIBRARY_PATH but still get
</span><br>
<span class="quotelev2">&gt;&gt; the same error. Help would be much appreciated.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Sam
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17904/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17905.php">John Doe: "Re: [OMPI users] orte_ess_base_select failed"</a>
<li><strong>Previous message:</strong> <a href="17903.php">Ralph Castain: "Re: [OMPI users] orte_ess_base_select failed"</a>
<li><strong>In reply to:</strong> <a href="17903.php">Ralph Castain: "Re: [OMPI users] orte_ess_base_select failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17905.php">John Doe: "Re: [OMPI users] orte_ess_base_select failed"</a>
<li><strong>Reply:</strong> <a href="17905.php">John Doe: "Re: [OMPI users] orte_ess_base_select failed"</a>
<li><strong>Reply:</strong> <a href="17906.php">Gustavo Correa: "Re: [OMPI users] orte_ess_base_select failed"</a>
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
