<?
$subject_val = "Re: [OMPI users] open mpi 1.6 with intel compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct 27 12:34:30 2012" -->
<!-- isoreceived="20121027163430" -->
<!-- sent="Sat, 27 Oct 2012 12:34:16 -0400" -->
<!-- isosent="20121027163416" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] open mpi 1.6 with intel compilers" -->
<!-- id="61D41532-FCFC-488C-8C7C-8A0F0B95B5EB_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1351355059.89704.YahooMailNeo_at_web111717.mail.gq1.yahoo.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-27 12:34:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20559.php">Mahmood Naderan: "Re: [OMPI users] open mpi 1.6 with intel compilers"</a>
<li><strong>Previous message:</strong> <a href="20557.php">Mahmood Naderan: "Re: [OMPI users] open mpi 1.6 with intel compilers"</a>
<li><strong>In reply to:</strong> <a href="20557.php">Mahmood Naderan: "Re: [OMPI users] open mpi 1.6 with intel compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20559.php">Mahmood Naderan: "Re: [OMPI users] open mpi 1.6 with intel compilers"</a>
<li><strong>Reply:</strong> <a href="20559.php">Mahmood Naderan: "Re: [OMPI users] open mpi 1.6 with intel compilers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I believe you're referring to a different thread on this mailing list:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/users/2012/10/20552.php">http://www.open-mpi.org/community/lists/users/2012/10/20552.php</a>
<br>
<p>I answered the question about shared memory in that thread, not this one (which is about a run-time error).
<br>
<p><p>On Oct 27, 2012, at 12:24 PM, Mahmood Naderan wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;This looks like you're trying to execute an MPICH2-build MPI executable, not Open MPI.
</span><br>
<span class="quotelev1">&gt; No that was a general question. I mean message passing is a model of communication
</span><br>
<span class="quotelev1">&gt; versus shared memory programming. So what is the point when openmpi uses shared
</span><br>
<span class="quotelev1">&gt; memory model?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Mahmood
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt; 
</span><br>
<span class="quotelev1">&gt; Sent: Saturday, October 27, 2012 6:18 PM
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] open mpi 1.6 with intel compilers
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This looks like you're trying to execute an MPICH2-build MPI executable, not Open MPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 27, 2012, at 11:46 AM, Giuseppe P. wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hello!
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I have built open mpi 1.6 with Intel compilers (2013 versions). Compilation was smooth, however even when I try to execute
</span><br>
<span class="quotelev2">&gt; &gt; the simple program hello.c:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -np 4 ./hello_c.x
</span><br>
<span class="quotelev2">&gt; &gt; [mpiexec_at_claudio.ukzn] HYDU_create_process (./utils/launch/launch.c:102): execvp error on file /opt/intel/composer_xe_2013.0.079/mpirt/bin/intel64/pmi_proxy (No such  file or directory)
</span><br>
<span class="quotelev2">&gt; &gt; [mpiexec_at_claudio.ukzn] HYD_pmcd_pmiserv_proxy_init_cb (./pm/pmiserv/pmiserv_cb.c:1177): assert (!closed) failed
</span><br>
<span class="quotelev2">&gt; &gt; [mpiexec_at_claudio.ukzn] HYDT_dmxu_poll_wait_for_event (./tools/demux/demux_poll.c:77): callback returned error status
</span><br>
<span class="quotelev2">&gt; &gt; [mpiexec_at_claudio.ukzn] HYD_pmci_wait_for_completion (./pm/pmiserv/pmiserv_pmci.c:358): error waiting for event
</span><br>
<span class="quotelev2">&gt; &gt; [mpiexec_at_claudio.ukzn] main (./ui/mpich/mpiexec.c:689): process manager error waiting for completion
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Before that, there was an additional error, since also the file mpivars.sh was not present in /opt/intel/composer_xe_2013.0.079/mpirt/bin/intel64/.
</span><br>
<span class="quotelev2">&gt; &gt; Even though I managed to create one and it worked:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; #!/bin/bash
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; if [ -z &quot;`echo $PATH | grep /usr/local/bin`&quot; ]; then
</span><br>
<span class="quotelev2">&gt; &gt; export PATH=/usr/local/bin:$PATH
</span><br>
<span class="quotelev2">&gt; &gt; fi
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; if [ -z &quot;`echo $LD_LIBRARY_PATH | grep /usr/local/lib`&quot; ]; then
</span><br>
<span class="quotelev2">&gt; &gt; if [ -n &quot;$LD_LIBRARY_PATH&quot; ]; then
</span><br>
<span class="quotelev2">&gt; &gt; export LD_LIBRARY_PATH=/usr/local/lib:$LD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt; &gt; else
</span><br>
<span class="quotelev2">&gt; &gt; export LD_LIBRARY_PATH=/usr/local/lib
</span><br>
<span class="quotelev2">&gt; &gt; fi
</span><br>
<span class="quotelev2">&gt; &gt; fi
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I do not have any clue about how to generate the file pmi_proxy.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thank you in advance for your help!
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20559.php">Mahmood Naderan: "Re: [OMPI users] open mpi 1.6 with intel compilers"</a>
<li><strong>Previous message:</strong> <a href="20557.php">Mahmood Naderan: "Re: [OMPI users] open mpi 1.6 with intel compilers"</a>
<li><strong>In reply to:</strong> <a href="20557.php">Mahmood Naderan: "Re: [OMPI users] open mpi 1.6 with intel compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20559.php">Mahmood Naderan: "Re: [OMPI users] open mpi 1.6 with intel compilers"</a>
<li><strong>Reply:</strong> <a href="20559.php">Mahmood Naderan: "Re: [OMPI users] open mpi 1.6 with intel compilers"</a>
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
