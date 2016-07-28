<?
$subject_val = "Re: [OMPI users] can't run the code on Jaguar";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  6 18:28:30 2012" -->
<!-- isoreceived="20120306232830" -->
<!-- sent="Tue, 6 Mar 2012 17:28:05 -0600" -->
<!-- isosent="20120306232805" -->
<!-- name="bin wang" -->
<!-- email="bighead521_at_[hidden]" -->
<!-- subject="Re: [OMPI users] can't run the code on Jaguar" -->
<!-- id="CANyjTBMecsQt6iuMS=9yzJfG9PHB7_J06F1xpDL6ALcvmUqdeg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="244909C0-8E81-4197-8C2A-C7584352F11A_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] can't run the code on Jaguar<br>
<strong>From:</strong> bin wang (<em>bighead521_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-06 18:28:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18711.php">Ralph Castain: "Re: [OMPI users] can't run the code on Jaguar"</a>
<li><strong>Previous message:</strong> <a href="18709.php">Timothy Stitt: "Re: [OMPI users] AlltoallV (with some zero send count values)"</a>
<li><strong>In reply to:</strong> <a href="18687.php">Ralph Castain: "Re: [OMPI users] can't run the code on Jaguar"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18711.php">Ralph Castain: "Re: [OMPI users] can't run the code on Jaguar"</a>
<li><strong>Reply:</strong> <a href="18711.php">Ralph Castain: "Re: [OMPI users] can't run the code on Jaguar"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Ralph,
<br>
<p>Thanks for your reply.
<br>
<p>In order to start my job, I tried the following two ways
<br>
(1) configured/compiled open-mpi and compiled benchmark on head node.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;submitted a pbs job.
<br>
(2) submitted an interactive job to redo config/compile on compute node.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;And then used &quot;/path/to/mpicc -o hello hello_world.c&quot; to compile the
<br>
benchmark.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;used &quot;/path/tp/mpirun -np 2 /path/to/hello&quot; to run the job.
<br>
Actually I also tried to run &quot;/path/tp/mpirun -np 2 hostname&quot; but got the
<br>
same error.
<br>
<p>The configure line is pretty long.
<br>
<p>&nbsp;67 $SRCDIR/configure \
<br>
&nbsp;68    --prefix=$PREFIX \
<br>
&nbsp;69    --enable-static --disable-shared --disable-dlopen
<br>
--disable-pretty-print-stacktrace --disable-pty-support --disable-io-romio
<br>
--enable-contrib-no-build=libnbc,vt --enable-debug \
<br>
&nbsp;70    --with-memory-manager=none --with-threads \
<br>
&nbsp;71    --without-tm \
<br>
&nbsp;72    --with-wrapper-ldflags=&quot;${ADD_WRAPPER_LDFLAGS}&quot; \
<br>
&nbsp;73    --with-wrapper-libs=&quot;-lnsl -lpthread -lm&quot; \
<br>
&nbsp;74    --with-platform=optimized \
<br>
&nbsp;75    --with-ugni=/opt/cray/ugni/2.3-1.0400.3912.4.29.gem \
<br>
&nbsp;76    --with-ugni-libdir=/opt/cray/ugni/2.3-1.0400.3912.4.29.gem/lib64  \
<br>
&nbsp;77
<br>
--with-ugni-includedir=/opt/cray/gni-headers/2.1-1.0400.3906.5.1.gem/include
<br>
\
<br>
&nbsp;78    --with-xpmem=/opt/cray/xpmem/0.1-2.0400.29883.4.6.gem \
<br>
&nbsp;79    --with-xpmem-libdir=/opt/cray/xpmem/0.1-2.0400.29883.4.6.gem/lib64 \
<br>
&nbsp;80    --enable-mem-debug --enable-mem-profile --enable-debug-symbols
<br>
--enable-binaries \
<br>
&nbsp;81    --enable-picky --enable-mpi-f77 --enable-mpi-f90 --enable-mpi-cxx
<br>
--enable-mpi-cxx-seek \
<br>
&nbsp;82    --without-slurm --with-memory-manager=ptmalloc2 \
<br>
&nbsp;83    --with-pmi=/opt/cray/pmi/2.1.4-1.0000.8596.8.9.gem
<br>
--with-cray-pmi-ext \
<br>
&nbsp;84
<br>
--enable-mca-no-build=maffinity-first_use,maffinity-libnuma,ess-cnos,filem-rsh,grpcomm-cnos,pml-dr
<br>
\
<br>
&nbsp;85    ${ADD_COMPILER} \
<br>
&nbsp;86    CPPFLAGS=&quot;${ADD_CPPFLAGS} -I${gniheaders}&quot; \
<br>
&nbsp;87    FFLAGS=&quot;${ADD_FFLAGS} -I${gniheaders}&quot; \
<br>
&nbsp;88    FCFLAGS=&quot;${ADD_FCFLAGS} -I/usr/include -I${gniheaders}&quot; \
<br>
&nbsp;89    CFLAGS=&quot;-I/usr/include -I${gniheaders}&quot; \
<br>
&nbsp;90    LDFLAGS=&quot;--static ${ADD_LDFLAGS} ${UGNILIBS} ${XPMEMLIBS}&quot; \
<br>
&nbsp;91    LIBS=&quot;${ADD_LIBS} -lpthread -lrt -lpthread -lm&quot; | tee build.log
<br>
<p>Any idea?
<br>
<p><p>Bin WANG
<br>
<p><p><p>On Mon, Mar 5, 2012 at 7:13 PM, Ralph Castain &lt;rhc.openmpi_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; How did you attempt to start your job, and what does your configure line
</span><br>
<span class="quotelev1">&gt; look like?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sent from my iPad
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 5, 2012, at 2:11 PM, bin Wang &lt;bighead521_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hello All,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm trying to run the latest OpenMPI code on Jaguar.
</span><br>
<span class="quotelev2">&gt; &gt; (Cloned from the Open MPI Mercurial mirror of the Subversion repository)
</span><br>
<span class="quotelev2">&gt; &gt; The configuration and compilation of OpenMPI were fine, and benchmark
</span><br>
<span class="quotelev2">&gt; &gt; was also successfully compiled. I tried to launch my program using mpirun
</span><br>
<span class="quotelev2">&gt; &gt; within an interactive job, but it failed immediately.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Core dump file gave me the following information.
</span><br>
<span class="quotelev2">&gt; &gt; ====================Error Msg=========================
</span><br>
<span class="quotelev2">&gt; &gt; [jaguarpf-login2:15370] [[INVALID],INVALID] ORTE_ERROR_LOG: Unable to
</span><br>
<span class="quotelev1">&gt; start a daemon on the local
</span><br>
<span class="quotelev2">&gt; &gt; node in file ess_singleton_module.c at line 220
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
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
<span class="quotelev2">&gt; &gt; ompi_mpi_init: orte_init failed
</span><br>
<span class="quotelev2">&gt; &gt; --&gt; Returned value Unable to start a daemon on the local node (-127)
</span><br>
<span class="quotelev1">&gt; instead of ORTE_SUCCESS
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev2">&gt; &gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt; &gt; fail during MPI_INIT; some of which are due to configuration33r
</span><br>
<span class="quotelev1">&gt; environment
</span><br>
<span class="quotelev2">&gt; &gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev2">&gt; &gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev2">&gt; &gt; developer):
</span><br>
<span class="quotelev2">&gt; &gt; ompi_mpi_init: orte_init failed
</span><br>
<span class="quotelev2">&gt; &gt; --&gt; Returned &quot;Unable to start a daemon on40he local node&quot; (-127) instead
</span><br>
<span class="quotelev1">&gt; of &quot;Success&quot; (0)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; [jaguarpf-login2:15370] *** An error occurred in MPI_Init
</span><br>
<span class="quotelev2">&gt; &gt; [jaguarpf-login2:15370] *** reported by process [4294967295,42949No
</span><br>
<span class="quotelev1">&gt; process In: Line: ??   PC: ??
</span><br>
<span class="quotelev2">&gt; &gt; [jaguarpf-login2:15370] *** on a NULL communicator
</span><br>
<span class="quotelev2">&gt; &gt; [jaguarpf-login2:15370] *** Unknown error
</span><br>
<span class="quotelev2">&gt; &gt; [jaguarpf-login2:15370] *** MPI_ERRORS_ARE_FATAL (processes in this
</span><br>
<span class="quotelev1">&gt; communicator will now abort,
</span><br>
<span class="quotelev2">&gt; &gt; [jaguarpf-login2:15370] *** and potentially your MPI job)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; An MPI process is aborting at a time when it cannot guarantee that all
</span><br>
<span class="quotelev2">&gt; &gt; of its peer processes in the job will be killed properly.  You should
</span><br>
<span class="quotelev2">&gt; &gt; double check that everything has shut down cleanly.
</span><br>
<span class="quotelev2">&gt; &gt; Reason:     Before MPI_INIT completed
</span><br>
<span class="quotelev2">&gt; &gt; Local host: jaguarpf-login2
</span><br>
<span class="quotelev2">&gt; &gt; PID:        15370
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; Program exited with code 01.
</span><br>
<span class="quotelev2">&gt; &gt; ====================Error Msg Over=====================
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; There are several components under ess, but I don't know why and how the
</span><br>
<span class="quotelev2">&gt; &gt; singleton component was chosen.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I hope someone could help me to compile and run openmpi successfully on
</span><br>
<span class="quotelev1">&gt; Jaguar.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Any comment and suggestion will be appreciated.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --Bin
</span><br>
<span class="quotelev2">&gt; &gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18710/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18711.php">Ralph Castain: "Re: [OMPI users] can't run the code on Jaguar"</a>
<li><strong>Previous message:</strong> <a href="18709.php">Timothy Stitt: "Re: [OMPI users] AlltoallV (with some zero send count values)"</a>
<li><strong>In reply to:</strong> <a href="18687.php">Ralph Castain: "Re: [OMPI users] can't run the code on Jaguar"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18711.php">Ralph Castain: "Re: [OMPI users] can't run the code on Jaguar"</a>
<li><strong>Reply:</strong> <a href="18711.php">Ralph Castain: "Re: [OMPI users] can't run the code on Jaguar"</a>
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
