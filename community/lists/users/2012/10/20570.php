<?
$subject_val = "Re: [OMPI users] open mpi 1.6 with intel compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 29 09:49:26 2012" -->
<!-- isoreceived="20121029134926" -->
<!-- sent="Mon, 29 Oct 2012 15:49:22 +0200" -->
<!-- isosent="20121029134922" -->
<!-- name="Giuseppe P." -->
<!-- email="istruzione_at_[hidden]" -->
<!-- subject="Re: [OMPI users] open mpi 1.6 with intel compilers" -->
<!-- id="CABS1KLQxf_ruzpXC42SadcXxqRpqGXnkJBVvdDhEA6k8tsEWbw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="35E66F72-1E4D-4248-9157-5FFD58FFA94E_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] open mpi 1.6 with intel compilers<br>
<strong>From:</strong> Giuseppe P. (<em>istruzione_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-29 09:49:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20571.php">Mahmood Naderan: "Re: [OMPI users] openmpi shared memory feature"</a>
<li><strong>Previous message:</strong> <a href="20569.php">Jeff Squyres: "Re: [OMPI users] openmpi shared memory feature"</a>
<li><strong>In reply to:</strong> <a href="20556.php">Ralph Castain: "Re: [OMPI users] open mpi 1.6 with intel compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20572.php">Reuti: "Re: [OMPI users] open mpi 1.6 with intel compilers"</a>
<li><strong>Reply:</strong> <a href="20572.php">Reuti: "Re: [OMPI users] open mpi 1.6 with intel compilers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you very much guys. Now a more serious issue:
<br>
<p>I am using mpi with laamps (a molecular dynamics package) on a single Rack
<br>
Dell server Poweredge R810
<br>
(4 eight-core processors, 128 Gb RAM memory).
<br>
I am now potentially interested into buying the Intel MPI 4.1 libraries,
<br>
and I am trying them by exploiting the
<br>
30 days trial. However, I am not experiencing any significant improved
<br>
performance by using
<br>
the Intel MPI libraries with respect to the Open Mpi (compiled with the
<br>
Itel compilers).
<br>
<p>Here there is the (makefile) working configuration for the Intel MPI 4.1
<br>
compilers:
<br>
CC =            /opt/intel/impi/4.1.0.024/intel64/bin/mpiicpc
<br>
CCFLAGS =       -O -DMPICH_IGNORE_CXX_SEEK -DMPICH_SKIP_MPICXX
<br>
<p>And here there is the Open Mpi one:
<br>
CC =            /usr/local/bin/mpicc
<br>
CCFLAGS =       -O -mpicc
<br>
<p>I also tried the flag -O3 but I detected no significant differences in
<br>
performance.
<br>
Now, I would be considering the Intel Mpi libraries, provided this would
<br>
bring to a
<br>
significant increase in performance with respect to Open Mpi.
<br>
<p>I have evidence that there is room to improve because laamps under the same
<br>
conditions
<br>
and on an HP Z650 with two 6-core processors (the clock frequency is the
<br>
same though,
<br>
and tests for comparison were done on parallel runs using 8 cores),
<br>
improves of nearly the 70%
<br>
by using the proprietary HP MPI libraries.
<br>
<p>Kind regards
<br>
<p>Giuseppe
<br>
<p><p>2012/10/27 Ralph Castain &lt;rhc_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; The reason is that you aren't actually running Open MPI - those error
</span><br>
<span class="quotelev1">&gt; messages are coming from MPICH. Check your path and ensure you put the OMPI
</span><br>
<span class="quotelev1">&gt; install location first, or use the absolute path to the OMPI mpirun
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 27, 2012, at 8:46 AM, Giuseppe P. &lt;istruzione_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have built open mpi 1.6 with Intel compilers (2013 versions).
</span><br>
<span class="quotelev1">&gt; Compilation was smooth, however even when I try to execute
</span><br>
<span class="quotelev1">&gt; the simple program hello.c:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 4 ./hello_c.x
</span><br>
<span class="quotelev1">&gt; [mpiexec_at_claudio.ukzn] HYDU_create_process (./utils/launch/launch.c:102):
</span><br>
<span class="quotelev1">&gt; execvp error on file
</span><br>
<span class="quotelev1">&gt; /opt/intel/composer_xe_2013.0.079/mpirt/bin/intel64/pmi_proxy (No such file
</span><br>
<span class="quotelev1">&gt; or directory)
</span><br>
<span class="quotelev1">&gt; [mpiexec_at_claudio.ukzn] HYD_pmcd_pmiserv_proxy_init_cb
</span><br>
<span class="quotelev1">&gt; (./pm/pmiserv/pmiserv_cb.c:1177): assert (!closed) failed
</span><br>
<span class="quotelev1">&gt; [mpiexec_at_claudio.ukzn] HYDT_dmxu_poll_wait_for_event
</span><br>
<span class="quotelev1">&gt; (./tools/demux/demux_poll.c:77): callback returned error status
</span><br>
<span class="quotelev1">&gt; [mpiexec_at_claudio.ukzn] HYD_pmci_wait_for_completion
</span><br>
<span class="quotelev1">&gt; (./pm/pmiserv/pmiserv_pmci.c:358): error waiting for event
</span><br>
<span class="quotelev1">&gt; [mpiexec_at_claudio.ukzn] main (./ui/mpich/mpiexec.c:689): process manager
</span><br>
<span class="quotelev1">&gt; error waiting for completion
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Before that, there was an additional error, since also the file mpivars.sh
</span><br>
<span class="quotelev1">&gt; was not present in /opt/intel/composer_xe_2013.0.079/mpirt/bin/intel64/.
</span><br>
<span class="quotelev1">&gt; Even though I managed to create one and it worked:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #!/bin/bash
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if [ -z &quot;`echo $PATH | grep /usr/local/bin`&quot; ]; then
</span><br>
<span class="quotelev1">&gt; export PATH=/usr/local/bin:$PATH
</span><br>
<span class="quotelev1">&gt; fi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if [ -z &quot;`echo $LD_LIBRARY_PATH | grep /usr/local/lib`&quot; ]; then
</span><br>
<span class="quotelev1">&gt; if [ -n &quot;$LD_LIBRARY_PATH&quot; ]; then
</span><br>
<span class="quotelev1">&gt; export LD_LIBRARY_PATH=/usr/local/lib:$LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; else
</span><br>
<span class="quotelev1">&gt; export LD_LIBRARY_PATH=/usr/local/lib
</span><br>
<span class="quotelev1">&gt; fi
</span><br>
<span class="quotelev1">&gt; fi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I do not have any clue about how to generate the file pmi_proxy.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you in advance for your help!
</span><br>
<span class="quotelev1">&gt;  _______________________________________________
</span><br>
<span class="quotelev1">&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20570/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20571.php">Mahmood Naderan: "Re: [OMPI users] openmpi shared memory feature"</a>
<li><strong>Previous message:</strong> <a href="20569.php">Jeff Squyres: "Re: [OMPI users] openmpi shared memory feature"</a>
<li><strong>In reply to:</strong> <a href="20556.php">Ralph Castain: "Re: [OMPI users] open mpi 1.6 with intel compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20572.php">Reuti: "Re: [OMPI users] open mpi 1.6 with intel compilers"</a>
<li><strong>Reply:</strong> <a href="20572.php">Reuti: "Re: [OMPI users] open mpi 1.6 with intel compilers"</a>
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
