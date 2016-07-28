<?
$subject_val = "Re: [OMPI users] orte_ess_base_select failed";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  7 18:50:55 2011" -->
<!-- isoreceived="20111207235055" -->
<!-- sent="Wed, 7 Dec 2011 17:50:51 -0600" -->
<!-- isosent="20111207235051" -->
<!-- name="John Doe" -->
<!-- email="javadevelopercl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] orte_ess_base_select failed" -->
<!-- id="CAJ32Xea=ZT==W1u5Pnm82+Uq3oaWZVyj2iciCudZBSUG7ASjRQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="93025559-C984-40A7-A1FD-FEC5086DE4E2_at_open-mpi.org" -->
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
<strong>Date:</strong> 2011-12-07 18:50:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17914.php">Jeff Squyres: "Re: [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind'	and	'get_mempolicy'"</a>
<li><strong>Previous message:</strong> <a href="17912.php">Brice Goglin: "Re: [OMPI users] [hwloc-devel] EXTERNAL: Re: Unresolved reference 'mbind' and 'get_mempolicy'"</a>
<li><strong>In reply to:</strong> <a href="17909.php">Ralph Castain: "Re: [OMPI users] orte_ess_base_select failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17906.php">Gustavo Correa: "Re: [OMPI users] orte_ess_base_select failed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for all the suggestions. I'm able to get it to work now using the
<br>
simpler config line suggested. I did not fully explain my setup but it
<br>
turns out due to a mount error my machine was not seeing the new files in
<br>
the rebuilt openmpi directory which was remotely mounted, so I kept getting
<br>
the same errors :).
<br>
<p>On Wed, Dec 7, 2011 at 1:30 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 7, 2011, at 10:45 AM, John Doe wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ok. That did help a bit. I now see that the
</span><br>
<span class="quotelev1">&gt; /opt/ompi/gnu/1.4.4/lib/openmpi/ directory has .so files as well as the .la
</span><br>
<span class="quotelev1">&gt; files. Unfortunately I still get the same error when I run i.e it complains
</span><br>
<span class="quotelev1">&gt; about missing  files in that directory even though those files are present
</span><br>
<span class="quotelev1">&gt; with an .so or .la extension (but not without):
</span><br>
<span class="quotelev1">&gt; mca_parfinity_linux, mca_carto_auto_detect, mca_carto_file, mca_ess_env,
</span><br>
<span class="quotelev1">&gt; mca_ess_hnp, mca_ess_singleton, mca_ess_slurm, mca_ess_tool
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can anyone help with what these files are and how I can get my compile to
</span><br>
<span class="quotelev1">&gt; generate them (without extensions)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not sure why you would ever want to generate those files without their
</span><br>
<span class="quotelev1">&gt; appropriate extensions - that's what the system is looking for. It sounds
</span><br>
<span class="quotelev1">&gt; like everything is being built correctly, so the problem is just that you
</span><br>
<span class="quotelev1">&gt; aren't finding them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would check a couple of things. First, make sure that the &quot;mpirun&quot; you
</span><br>
<span class="quotelev1">&gt; are executing is the one you think you are executing - i.e., do &quot;which
</span><br>
<span class="quotelev1">&gt; mpirun&quot; to see that there isn't another one in the way.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Second, check that you really do have the correct path in LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; and it isn't misspelled. I know you say you have it, but you'd be amazed
</span><br>
<span class="quotelev1">&gt; how many times someone asks only to eventually find a typo.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sam
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Dec 7, 2011 at 11:19 AM, John Doe &lt;javadevelopercl_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  I may have been a little promiscous in my use of build flags. My initial
</span><br>
<span class="quotelev2">&gt;&gt; configure line was much simpler then I kept throwing in flags when it
</span><br>
<span class="quotelev2">&gt;&gt; wouldn't run. I'll try to build it again with the your config line and see
</span><br>
<span class="quotelev2">&gt;&gt; if that resolves the issue.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sam
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Dec 7, 2011 at 11:11 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I don't understand your configure line - why did you give an argument to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; enable-shared?? That option doesn't take an argument, and may be causing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the confusion. Also, enable-debug by default turns off optimization as
</span><br>
<span class="quotelev3">&gt;&gt;&gt; otherwise the optimizer removes all debug symbols.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If you want a debug version, try just this:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./configure --prefix=/opt/ompi/gnu/1.4.4 --enable-debug
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --with-valgrind=/opt/valgrind --enable-orterun-prefix-by-default
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --enable-memchecker --enable-mem-profile
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You don't need --with-devel-headers unless you intend to write code that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; directly drives the OMPI internals.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Dec 7, 2011, at 10:00 AM, John Doe wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Gustavo,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  I do have /opt/ompi/gnu/1.4.4/lib in my LD_LIBRARY_PATH and the bin
</span><br>
<span class="quotelev3">&gt;&gt;&gt; directory in my path as well but that didn't seem to help.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sam
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Tue, Dec 6, 2011 at 5:18 PM, Gustavo Correa &lt;gus_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi John Doe
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; What you need to add to LD_LIBRARY_PATH is /opt/ompi/gnu/1.4.4/lib
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [note 'lib' at the end].
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Your email seems to say that you added /opt/ompi/gnu/1.4.4/lib/openmpi
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; instead, if I understood it right.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; And to your PATH you need to add the corresponding 'bin' directory:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /opt/ompi/gnu/1.4.4/bin.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The rule here is your installation prefix /opt/ompi/gnu/1.4.4/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with 'lib' or 'bin' at the end.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I hope this helps,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Frank Capra
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Dec 6, 2011, at 5:54 PM, John Doe wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; I recently built and installed openmpi on my 64 bit linux machine
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; running centOS 6.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; However whenever I try mpirun I get the error message:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; runtime/orte_init.c at line 125
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; orte_ess_base_select failed
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Actually here's the full error transcript:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ====================================================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt; &gt;&gt; mpiexec -n 4 object/a.out
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; [ellipse:01480] mca: base: component_find: unable to open
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /opt/ompi/gnu/1.4.4/lib/openmpi/mca_paffinity_linux: file not found
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (ignored)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; [ellipse:01480] mca: base: component_find: unable to open
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /opt/ompi/gnu/1.4.4/lib/openmpi/mca_carto_auto_detect: file not found
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (ignored)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; [ellipse:01480] mca: base: component_find: unable to open
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /opt/ompi/gnu/1.4.4/lib/openmpi/mca_carto_file: file not found (ignored)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; [ellipse:01480] mca: base: component_find: unable to open
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /opt/ompi/gnu/1.4.4/lib/openmpi/mca_ess_env: file not found (ignored)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; [ellipse:01480] mca: base: component_find: unable to open
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /opt/ompi/gnu/1.4.4/lib/openmpi/mca_ess_hnp: file not found (ignored)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; [ellipse:01480] mca: base: component_find: unable to open
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /opt/ompi/gnu/1.4.4/lib/openmpi/mca_ess_singleton: file not found (ignored)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; [ellipse:01480] mca: base: component_find: unable to open
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /opt/ompi/gnu/1.4.4/lib/openmpi/mca_ess_slurm: file not found (ignored)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; [ellipse:01480] mca: base: component_find: unable to open
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /opt/ompi/gnu/1.4.4/lib/openmpi/mca_ess_tool: file not found (ignored)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; [ellipse:01480] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; runtime/orte_init.c at line 125
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; It looks like orte_init failed for some reason; your parallel process
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;   orte_ess_base_select failed
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;   --&gt; Returned value Not found (-13) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; =============================================================================================================
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Here are the configure options I used to build openmpi:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; ./configure --prefix=/opt/ompi/gnu/1.4.4 CC=gcc -m64 CXX=g++ -m64
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; FC=gfortran -m64 F77=gfortran -m64 CFLAGS=-O2 -g CXXFLAGS=-O2 -g
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; FCFLAGS=-O2 -g FFLAGS=-O2 -g --enable-debug --enable-shared=gcc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --with-valgrind=/opt/valgrind --with-devel-headers --enable-mem-profile
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --enable-orterun-prefix-by-default --enable-memchecker
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Does anyone have any idea what these errors are. I tried recompiling
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with the --enable-orterun-prefix-by-default  flag. Also while those files
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; e.g mca_ess_tool are not found, the static versions e.g mca_ess_tool.a and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mca_ess_tool.la exist in the /opt/ompi/gnu/1.4.4/lib/openmpi
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; directory. I've also tried adding that directory to my LD_LIBRARY_PATH but
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; still get the same error. Help would be much appreciated.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Thanks,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Sam
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17913/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17914.php">Jeff Squyres: "Re: [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind'	and	'get_mempolicy'"</a>
<li><strong>Previous message:</strong> <a href="17912.php">Brice Goglin: "Re: [OMPI users] [hwloc-devel] EXTERNAL: Re: Unresolved reference 'mbind' and 'get_mempolicy'"</a>
<li><strong>In reply to:</strong> <a href="17909.php">Ralph Castain: "Re: [OMPI users] orte_ess_base_select failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17906.php">Gustavo Correa: "Re: [OMPI users] orte_ess_base_select failed"</a>
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
