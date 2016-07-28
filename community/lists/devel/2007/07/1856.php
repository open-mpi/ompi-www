<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul 12 10:37:51 2007" -->
<!-- isoreceived="20070712143751" -->
<!-- sent="Thu, 12 Jul 2007 08:37:26 -0600" -->
<!-- isosent="20070712143726" -->
<!-- name="Brian Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Notes on building and running Open MPI on Red Storm" -->
<!-- id="301BD0C1-CD77-49D0-B8AB-1C143AE34C01_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="72208BE3C2373746A87FCCEBA1BF1B73026D2B63_at_G3W0069.americas.hpqcorp.net" -->
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
<strong>From:</strong> Brian Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-12 10:37:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1857.php">Brian Barrett: "Re: [OMPI devel] Notes on building and running Open MPI on Red Storm"</a>
<li><strong>Previous message:</strong> <a href="1855.php">Ralph H Castain: "[OMPI devel] Orte update"</a>
<li><strong>In reply to:</strong> <a href="1851.php">Glendenning, Lisa: "[OMPI devel] Notes on building and running Open MPI on Red Storm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1857.php">Brian Barrett: "Re: [OMPI devel] Notes on building and running Open MPI on Red Storm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Do you have a Subversion account?  If so, feel free to update the  
<br>
wiki ;).  If not, we should probably get you an account.  Then feel  
<br>
free to update the wiki ;).  But thanks for the notes!
<br>
<p>Brian
<br>
<p>On Jul 11, 2007, at 4:47 PM, Glendenning, Lisa wrote:
<br>
<p><span class="quotelev1">&gt; Some supplementary information to the wiki at
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/wiki/CrayXT3">https://svn.open-mpi.org/trac/ompi/wiki/CrayXT3</a>.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I. Accessing the Open MPI source:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   * Subversion is installed on redstorm in /projects/unsupported/bin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   * Reddish has subversion in the default path (you don't have to  
</span><br>
<span class="quotelev1">&gt; load a
</span><br>
<span class="quotelev1">&gt; module)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   * The proxy information in the wiki is accurate, and works on both
</span><br>
<span class="quotelev1">&gt; redstorm and reddish
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; II. Building Open MPI on reddish:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   * 'module load PrgEnv-pgi-xc' to cross compile for redstorm
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   * Reddish and redstorm do not have recent enough version of  
</span><br>
<span class="quotelev1">&gt; autotools,
</span><br>
<span class="quotelev1">&gt; so you must build your own (currently available in
</span><br>
<span class="quotelev1">&gt; /project/openmpi/rbbrigh/tools)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   * Suggested configuration: 'configure CC=qk-gcc CXX=qk-pgCC
</span><br>
<span class="quotelev1">&gt; F77=qk-pgf77 FC=qk-pgf90 --disable-mpi-profile --with- 
</span><br>
<span class="quotelev1">&gt; platform=redstorm
</span><br>
<span class="quotelev1">&gt; --host=x86_64-cray-linux-gnu --build=x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev1">&gt; --disable-mpi-f90 --disable-mem-debug --disable-mem-profile
</span><br>
<span class="quotelev1">&gt; --disable-debug build_alias=x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev1">&gt; host_alias=x86_64-cray-linux-gnu'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; III. Building with Open MPI:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   * No executables will be installed in $PREFIX/bin, so must compile
</span><br>
<span class="quotelev1">&gt; without mpicc, e.g. 'qk-gcc -I$PREFIX/include *.c -L$PREFIX/lib -lmpi
</span><br>
<span class="quotelev1">&gt; -lopen-rte -lopen-pal'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   * When linking with libopen-pal, the following warning is normal:  
</span><br>
<span class="quotelev1">&gt; 'In
</span><br>
<span class="quotelev1">&gt; function `checkpoint_response': warning: mkfifo is not implemented and
</span><br>
<span class="quotelev1">&gt; will always fail'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; IV. Running on Redstorm:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   * scp your executable from reddish to redstorm
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   * Use 'qsub' to submit job and 'yod' to launch job (if you do an
</span><br>
<span class="quotelev1">&gt; interactive session, you can bypass PBS)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   * qsub expects project/task information - you can either provide  
</span><br>
<span class="quotelev1">&gt; this
</span><br>
<span class="quotelev1">&gt; with -A option or set it in $XT_ACCOUNT environmental variable
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   * Sample job script for qsub with 8 nodes/processes and 10 minute
</span><br>
<span class="quotelev1">&gt; runtime:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     #!/bin/sh
</span><br>
<span class="quotelev1">&gt;     #PBS -lsize=8
</span><br>
<span class="quotelev1">&gt;     #PBS -lwalltime=10:00
</span><br>
<span class="quotelev1">&gt;     cd $PBS_O_WORKDIR
</span><br>
<span class="quotelev1">&gt;     yod a.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   * Use 'xtshowmesh' and 'qstat' to query job status and cluster
</span><br>
<span class="quotelev1">&gt; configuration
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1857.php">Brian Barrett: "Re: [OMPI devel] Notes on building and running Open MPI on Red Storm"</a>
<li><strong>Previous message:</strong> <a href="1855.php">Ralph H Castain: "[OMPI devel] Orte update"</a>
<li><strong>In reply to:</strong> <a href="1851.php">Glendenning, Lisa: "[OMPI devel] Notes on building and running Open MPI on Red Storm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1857.php">Brian Barrett: "Re: [OMPI devel] Notes on building and running Open MPI on Red Storm"</a>
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
