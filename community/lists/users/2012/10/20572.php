<?
$subject_val = "Re: [OMPI users] open mpi 1.6 with intel compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 29 10:54:31 2012" -->
<!-- isoreceived="20121029145431" -->
<!-- sent="Mon, 29 Oct 2012 15:54:21 +0100" -->
<!-- isosent="20121029145421" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] open mpi 1.6 with intel compilers" -->
<!-- id="4C32E33C-2CAD-41CD-8360-29BC83E3F765_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CABS1KLQxf_ruzpXC42SadcXxqRpqGXnkJBVvdDhEA6k8tsEWbw_at_mail.gmail.com" -->
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
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-29 10:54:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20573.php">Ralph Castain: "Re: [OMPI users] openmpi shared memory feature"</a>
<li><strong>Previous message:</strong> <a href="20571.php">Mahmood Naderan: "Re: [OMPI users] openmpi shared memory feature"</a>
<li><strong>In reply to:</strong> <a href="20570.php">Giuseppe P.: "Re: [OMPI users] open mpi 1.6 with intel compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20574.php">Ralph Castain: "Re: [OMPI users] open mpi 1.6 with intel compilers"</a>
<li><strong>Reply:</strong> <a href="20574.php">Ralph Castain: "Re: [OMPI users] open mpi 1.6 with intel compilers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 29.10.2012 um 14:49 schrieb Giuseppe P.:
<br>
<p><span class="quotelev1">&gt; Thank you very much guys. Now a more serious issue:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am using mpi with laamps (a molecular dynamics package) on a single Rack Dell server Poweredge R810
</span><br>
<span class="quotelev1">&gt; (4 eight-core processors, 128 Gb RAM memory).
</span><br>
<span class="quotelev1">&gt; I am now potentially interested into buying the Intel MPI 4.1 libraries, and I am trying them by exploiting the
</span><br>
<span class="quotelev1">&gt; 30 days trial. However, I am not experiencing any significant improved performance by using
</span><br>
<span class="quotelev1">&gt; the Intel MPI libraries with respect to the Open Mpi (compiled with the Itel compilers).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here there is the (makefile) working configuration for the Intel MPI 4.1 compilers:
</span><br>
<span class="quotelev1">&gt; CC =            /opt/intel/impi/4.1.0.024/intel64/bin/mpiicpc
</span><br>
<span class="quotelev1">&gt; CCFLAGS =       -O -DMPICH_IGNORE_CXX_SEEK -DMPICH_SKIP_MPICXX
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And here there is the Open Mpi one:
</span><br>
<span class="quotelev1">&gt; CC =            /usr/local/bin/mpicc
</span><br>
<span class="quotelev1">&gt; CCFLAGS =       -O -mpicc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I also tried the flag -O3 but I detected no significant differences in performance.
</span><br>
<span class="quotelev1">&gt; Now, I would be considering the Intel Mpi libraries, provided this would bring to a
</span><br>
<span class="quotelev1">&gt; significant increase in performance with respect to Open Mpi.
</span><br>
<p>Why - because of -O3 (which I would consider dangerous) or because it's from Intel? Intel MPI is based on MPICH2, not Open MPI.
<br>
<p><p><span class="quotelev1">&gt; I have evidence that there is room to improve because laamps under the same conditions
</span><br>
<span class="quotelev1">&gt; and on an HP Z650 with two 6-core processors (the clock frequency is the same though,
</span><br>
<span class="quotelev1">&gt; and tests for comparison were done on parallel runs using 8 cores), improves of nearly the 70%
</span><br>
<span class="quotelev1">&gt; by using the proprietary HP MPI libraries.
</span><br>
<p>NB: They made their way to Platform Computing and then to IBM.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; Kind regards
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Giuseppe
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2012/10/27 Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; The reason is that you aren't actually running Open MPI - those error messages are coming from MPICH. Check your path and ensure you put the OMPI install location first, or use the absolute path to the OMPI mpirun
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 27, 2012, at 8:46 AM, Giuseppe P. &lt;istruzione_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hello!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have built open mpi 1.6 with Intel compilers (2013 versions). Compilation was smooth, however even when I try to execute
</span><br>
<span class="quotelev2">&gt;&gt; the simple program hello.c:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 4 ./hello_c.x
</span><br>
<span class="quotelev2">&gt;&gt; [mpiexec_at_claudio.ukzn] HYDU_create_process (./utils/launch/launch.c:102): execvp error on file /opt/intel/composer_xe_2013.0.079/mpirt/bin/intel64/pmi_proxy (No such file or directory)
</span><br>
<span class="quotelev2">&gt;&gt; [mpiexec_at_claudio.ukzn] HYD_pmcd_pmiserv_proxy_init_cb (./pm/pmiserv/pmiserv_cb.c:1177): assert (!closed) failed
</span><br>
<span class="quotelev2">&gt;&gt; [mpiexec_at_claudio.ukzn] HYDT_dmxu_poll_wait_for_event (./tools/demux/demux_poll.c:77): callback returned error status
</span><br>
<span class="quotelev2">&gt;&gt; [mpiexec_at_claudio.ukzn] HYD_pmci_wait_for_completion (./pm/pmiserv/pmiserv_pmci.c:358): error waiting for event
</span><br>
<span class="quotelev2">&gt;&gt; [mpiexec_at_claudio.ukzn] main (./ui/mpich/mpiexec.c:689): process manager error waiting for completion
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Before that, there was an additional error, since also the file mpivars.sh was not present in /opt/intel/composer_xe_2013.0.079/mpirt/bin/intel64/.
</span><br>
<span class="quotelev2">&gt;&gt; Even though I managed to create one and it worked:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #!/bin/bash
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; if [ -z &quot;`echo $PATH | grep /usr/local/bin`&quot; ]; then
</span><br>
<span class="quotelev2">&gt;&gt; export PATH=/usr/local/bin:$PATH
</span><br>
<span class="quotelev2">&gt;&gt; fi
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; if [ -z &quot;`echo $LD_LIBRARY_PATH | grep /usr/local/lib`&quot; ]; then
</span><br>
<span class="quotelev2">&gt;&gt; if [ -n &quot;$LD_LIBRARY_PATH&quot; ]; then
</span><br>
<span class="quotelev2">&gt;&gt; export LD_LIBRARY_PATH=/usr/local/lib:$LD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt;&gt; else
</span><br>
<span class="quotelev2">&gt;&gt; export LD_LIBRARY_PATH=/usr/local/lib
</span><br>
<span class="quotelev2">&gt;&gt; fi
</span><br>
<span class="quotelev2">&gt;&gt; fi
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I do not have any clue about how to generate the file pmi_proxy.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thank you in advance for your help!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="20573.php">Ralph Castain: "Re: [OMPI users] openmpi shared memory feature"</a>
<li><strong>Previous message:</strong> <a href="20571.php">Mahmood Naderan: "Re: [OMPI users] openmpi shared memory feature"</a>
<li><strong>In reply to:</strong> <a href="20570.php">Giuseppe P.: "Re: [OMPI users] open mpi 1.6 with intel compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20574.php">Ralph Castain: "Re: [OMPI users] open mpi 1.6 with intel compilers"</a>
<li><strong>Reply:</strong> <a href="20574.php">Ralph Castain: "Re: [OMPI users] open mpi 1.6 with intel compilers"</a>
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
