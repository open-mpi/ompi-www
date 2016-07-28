<?
$subject_val = "Re: [OMPI users] can't run the code on Jaguar";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  6 22:24:12 2012" -->
<!-- isoreceived="20120307032412" -->
<!-- sent="Tue, 6 Mar 2012 19:24:07 -0800" -->
<!-- isosent="20120307032407" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] can't run the code on Jaguar" -->
<!-- id="CAMD57ocavu=YDbs=qDzHf-M14_nCTRquTGswYbBgVdV7HPCX+g_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CANyjTBMecsQt6iuMS=9yzJfG9PHB7_J06F1xpDL6ALcvmUqdeg_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-06 22:24:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18712.php">Kharche, Sanjay: "Re: [OMPI users] parallelising ADI"</a>
<li><strong>Previous message:</strong> <a href="18710.php">bin wang: "Re: [OMPI users] can't run the code on Jaguar"</a>
<li><strong>In reply to:</strong> <a href="18710.php">bin wang: "Re: [OMPI users] can't run the code on Jaguar"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Wow - that's the ugliest configure line I think I've ever seen :-/
<br>
<p>I note you have a --with-platform in the middle of it, which is really
<br>
unusual. Normally, you would put all that stuff in a platform file if
<br>
that's what you were going to do. Note that anything in the platform file
<br>
will override any duplicates on the cmd line, not the other way around. So
<br>
you may not be building what you thought.
<br>
<p>I also noticed that you had two conflicting --with-memory-manager options
<br>
specified, which isn't good.
<br>
<p>There usually isn't any reason for that complex a configure - we do a
<br>
pretty good job of sensing the right thing to do. In this case, I believe
<br>
the problem is that you forgot to configure for alps support and configured
<br>
out cnos support, so there is nothing left that you can use on your system.
<br>
<p>Take a look at contrib/platform/lanl/cray_xe6/debug-nopanasas for an
<br>
example platform file that, I believe, builds what you are seeking. I would
<br>
suggest copying and editing that one, and then configuring with just
<br>
--with-platform=&lt;my-edited-version&gt;
<br>
<p><p>On Tue, Mar 6, 2012 at 3:28 PM, bin wang &lt;bighead521_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for your reply.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In order to start my job, I tried the following two ways
</span><br>
<span class="quotelev1">&gt; (1) configured/compiled open-mpi and compiled benchmark on head node.
</span><br>
<span class="quotelev1">&gt;       submitted a pbs job.
</span><br>
<span class="quotelev1">&gt; (2) submitted an interactive job to redo config/compile on compute node.
</span><br>
<span class="quotelev1">&gt;       And then used &quot;/path/to/mpicc -o hello hello_world.c&quot; to compile the
</span><br>
<span class="quotelev1">&gt; benchmark.
</span><br>
<span class="quotelev1">&gt;       used &quot;/path/tp/mpirun -np 2 /path/to/hello&quot; to run the job.
</span><br>
<span class="quotelev1">&gt; Actually I also tried to run &quot;/path/tp/mpirun -np 2 hostname&quot; but got the
</span><br>
<span class="quotelev1">&gt; same error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The configure line is pretty long.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  67 $SRCDIR/configure \
</span><br>
<span class="quotelev1">&gt;  68    --prefix=$PREFIX \
</span><br>
<span class="quotelev1">&gt;  69    --enable-static --disable-shared --disable-dlopen
</span><br>
<span class="quotelev1">&gt; --disable-pretty-print-stacktrace --disable-pty-support --disable-io-romio
</span><br>
<span class="quotelev1">&gt; --enable-contrib-no-build=libnbc,vt --enable-debug \
</span><br>
<span class="quotelev1">&gt;  70    --with-memory-manager=none --with-threads \
</span><br>
<span class="quotelev1">&gt;  71    --without-tm \
</span><br>
<span class="quotelev1">&gt;  72    --with-wrapper-ldflags=&quot;${ADD_WRAPPER_LDFLAGS}&quot; \
</span><br>
<span class="quotelev1">&gt;  73    --with-wrapper-libs=&quot;-lnsl -lpthread -lm&quot; \
</span><br>
<span class="quotelev1">&gt;  74    --with-platform=optimized \
</span><br>
<span class="quotelev1">&gt;  75    --with-ugni=/opt/cray/ugni/2.3-1.0400.3912.4.29.gem \
</span><br>
<span class="quotelev1">&gt;  76    --with-ugni-libdir=/opt/cray/ugni/2.3-1.0400.3912.4.29.gem/lib64  \
</span><br>
<span class="quotelev1">&gt;  77
</span><br>
<span class="quotelev1">&gt; --with-ugni-includedir=/opt/cray/gni-headers/2.1-1.0400.3906.5.1.gem/include
</span><br>
<span class="quotelev1">&gt; \
</span><br>
<span class="quotelev1">&gt;  78    --with-xpmem=/opt/cray/xpmem/0.1-2.0400.29883.4.6.gem \
</span><br>
<span class="quotelev1">&gt;  79    --with-xpmem-libdir=/opt/cray/xpmem/0.1-2.0400.29883.4.6.gem/lib64 \
</span><br>
<span class="quotelev1">&gt;  80    --enable-mem-debug --enable-mem-profile --enable-debug-symbols
</span><br>
<span class="quotelev1">&gt; --enable-binaries \
</span><br>
<span class="quotelev1">&gt;  81    --enable-picky --enable-mpi-f77 --enable-mpi-f90 --enable-mpi-cxx
</span><br>
<span class="quotelev1">&gt; --enable-mpi-cxx-seek \
</span><br>
<span class="quotelev1">&gt;  82    --without-slurm --with-memory-manager=ptmalloc2 \
</span><br>
<span class="quotelev1">&gt;  83    --with-pmi=/opt/cray/pmi/2.1.4-1.0000.8596.8.9.gem
</span><br>
<span class="quotelev1">&gt; --with-cray-pmi-ext \
</span><br>
<span class="quotelev1">&gt;  84
</span><br>
<span class="quotelev1">&gt; --enable-mca-no-build=maffinity-first_use,maffinity-libnuma,ess-cnos,filem-rsh,grpcomm-cnos,pml-dr
</span><br>
<span class="quotelev1">&gt; \
</span><br>
<span class="quotelev1">&gt;  85    ${ADD_COMPILER} \
</span><br>
<span class="quotelev1">&gt;  86    CPPFLAGS=&quot;${ADD_CPPFLAGS} -I${gniheaders}&quot; \
</span><br>
<span class="quotelev1">&gt;  87    FFLAGS=&quot;${ADD_FFLAGS} -I${gniheaders}&quot; \
</span><br>
<span class="quotelev1">&gt;  88    FCFLAGS=&quot;${ADD_FCFLAGS} -I/usr/include -I${gniheaders}&quot; \
</span><br>
<span class="quotelev1">&gt;  89    CFLAGS=&quot;-I/usr/include -I${gniheaders}&quot; \
</span><br>
<span class="quotelev1">&gt;  90    LDFLAGS=&quot;--static ${ADD_LDFLAGS} ${UGNILIBS} ${XPMEMLIBS}&quot; \
</span><br>
<span class="quotelev1">&gt;  91    LIBS=&quot;${ADD_LIBS} -lpthread -lrt -lpthread -lm&quot; | tee build.log
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any idea?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Bin WANG
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Mar 5, 2012 at 7:13 PM, Ralph Castain &lt;rhc.openmpi_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; How did you attempt to start your job, and what does your configure line
</span><br>
<span class="quotelev2">&gt;&gt; look like?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sent from my iPad
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 5, 2012, at 2:11 PM, bin Wang &lt;bighead521_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hello All,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I'm trying to run the latest OpenMPI code on Jaguar.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; (Cloned from the Open MPI Mercurial mirror of the Subversion repository)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; The configuration and compilation of OpenMPI were fine, and benchmark
</span><br>
<span class="quotelev3">&gt;&gt; &gt; was also successfully compiled. I tried to launch my program using
</span><br>
<span class="quotelev2">&gt;&gt; mpirun
</span><br>
<span class="quotelev3">&gt;&gt; &gt; within an interactive job, but it failed immediately.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Core dump file gave me the following information.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ====================Error Msg=========================
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [jaguarpf-login2:15370] [[INVALID],INVALID] ORTE_ERROR_LOG: Unable to
</span><br>
<span class="quotelev2">&gt;&gt; start a daemon on the local
</span><br>
<span class="quotelev3">&gt;&gt; &gt; node in file ess_singleton_module.c at line 220
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
<span class="quotelev3">&gt;&gt; &gt; ompi_mpi_init: orte_init failed
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --&gt; Returned value Unable to start a daemon on the local node (-127)
</span><br>
<span class="quotelev2">&gt;&gt; instead of ORTE_SUCCESS
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt; &gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev3">&gt;&gt; &gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev3">&gt;&gt; &gt; fail during MPI_INIT; some of which are due to configuration33r
</span><br>
<span class="quotelev2">&gt;&gt; environment
</span><br>
<span class="quotelev3">&gt;&gt; &gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev3">&gt;&gt; &gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev3">&gt;&gt; &gt; developer):
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ompi_mpi_init: orte_init failed
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --&gt; Returned &quot;Unable to start a daemon on40he local node&quot; (-127)
</span><br>
<span class="quotelev2">&gt;&gt; instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [jaguarpf-login2:15370] *** An error occurred in MPI_Init
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [jaguarpf-login2:15370] *** reported by process [4294967295,42949No
</span><br>
<span class="quotelev2">&gt;&gt; process In: Line: ??   PC: ??
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [jaguarpf-login2:15370] *** on a NULL communicator
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [jaguarpf-login2:15370] *** Unknown error
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [jaguarpf-login2:15370] *** MPI_ERRORS_ARE_FATAL (processes in this
</span><br>
<span class="quotelev2">&gt;&gt; communicator will now abort,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [jaguarpf-login2:15370] *** and potentially your MPI job)
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt; &gt; An MPI process is aborting at a time when it cannot guarantee that all
</span><br>
<span class="quotelev3">&gt;&gt; &gt; of its peer processes in the job will be killed properly.  You should
</span><br>
<span class="quotelev3">&gt;&gt; &gt; double check that everything has shut down cleanly.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Reason:     Before MPI_INIT completed
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Local host: jaguarpf-login2
</span><br>
<span class="quotelev3">&gt;&gt; &gt; PID:        15370
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Program exited with code 01.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ====================Error Msg Over=====================
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; There are several components under ess, but I don't know why and how the
</span><br>
<span class="quotelev3">&gt;&gt; &gt; singleton component was chosen.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I hope someone could help me to compile and run openmpi successfully on
</span><br>
<span class="quotelev2">&gt;&gt; Jaguar.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Any comment and suggestion will be appreciated.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --Bin
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18711/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18712.php">Kharche, Sanjay: "Re: [OMPI users] parallelising ADI"</a>
<li><strong>Previous message:</strong> <a href="18710.php">bin wang: "Re: [OMPI users] can't run the code on Jaguar"</a>
<li><strong>In reply to:</strong> <a href="18710.php">bin wang: "Re: [OMPI users] can't run the code on Jaguar"</a>
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
