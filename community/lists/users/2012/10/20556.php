<?
$subject_val = "Re: [OMPI users] open mpi 1.6 with intel compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct 27 12:20:18 2012" -->
<!-- isoreceived="20121027162018" -->
<!-- sent="Sat, 27 Oct 2012 09:20:10 -0700" -->
<!-- isosent="20121027162010" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] open mpi 1.6 with intel compilers" -->
<!-- id="35E66F72-1E4D-4248-9157-5FFD58FFA94E_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CABS1KLSyaunxGqZi=_VsT-k0fbB5FaGFmmv0b-h0eCK_FCxJyg_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-27 12:20:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20557.php">Mahmood Naderan: "Re: [OMPI users] open mpi 1.6 with intel compilers"</a>
<li><strong>Previous message:</strong> <a href="20555.php">Jeff Squyres: "Re: [OMPI users] openmpi shared memory feature"</a>
<li><strong>In reply to:</strong> <a href="20553.php">Giuseppe P.: "[OMPI users] open mpi 1.6 with intel compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20570.php">Giuseppe P.: "Re: [OMPI users] open mpi 1.6 with intel compilers"</a>
<li><strong>Reply:</strong> <a href="20570.php">Giuseppe P.: "Re: [OMPI users] open mpi 1.6 with intel compilers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The reason is that you aren't actually running Open MPI - those error messages are coming from MPICH. Check your path and ensure you put the OMPI install location first, or use the absolute path to the OMPI mpirun
<br>
<p>On Oct 27, 2012, at 8:46 AM, Giuseppe P. &lt;istruzione_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have built open mpi 1.6 with Intel compilers (2013 versions). Compilation was smooth, however even when I try to execute
</span><br>
<span class="quotelev1">&gt; the simple program hello.c:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -np 4 ./hello_c.x
</span><br>
<span class="quotelev1">&gt; [mpiexec_at_claudio.ukzn] HYDU_create_process (./utils/launch/launch.c:102): execvp error on file /opt/intel/composer_xe_2013.0.079/mpirt/bin/intel64/pmi_proxy (No such file or directory)
</span><br>
<span class="quotelev1">&gt; [mpiexec_at_claudio.ukzn] HYD_pmcd_pmiserv_proxy_init_cb (./pm/pmiserv/pmiserv_cb.c:1177): assert (!closed) failed
</span><br>
<span class="quotelev1">&gt; [mpiexec_at_claudio.ukzn] HYDT_dmxu_poll_wait_for_event (./tools/demux/demux_poll.c:77): callback returned error status
</span><br>
<span class="quotelev1">&gt; [mpiexec_at_claudio.ukzn] HYD_pmci_wait_for_completion (./pm/pmiserv/pmiserv_pmci.c:358): error waiting for event
</span><br>
<span class="quotelev1">&gt; [mpiexec_at_claudio.ukzn] main (./ui/mpich/mpiexec.c:689): process manager error waiting for completion
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Before that, there was an additional error, since also the file mpivars.sh was not present in /opt/intel/composer_xe_2013.0.079/mpirt/bin/intel64/.
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20556/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20557.php">Mahmood Naderan: "Re: [OMPI users] open mpi 1.6 with intel compilers"</a>
<li><strong>Previous message:</strong> <a href="20555.php">Jeff Squyres: "Re: [OMPI users] openmpi shared memory feature"</a>
<li><strong>In reply to:</strong> <a href="20553.php">Giuseppe P.: "[OMPI users] open mpi 1.6 with intel compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20570.php">Giuseppe P.: "Re: [OMPI users] open mpi 1.6 with intel compilers"</a>
<li><strong>Reply:</strong> <a href="20570.php">Giuseppe P.: "Re: [OMPI users] open mpi 1.6 with intel compilers"</a>
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
