<?
$subject_val = "Re: [OMPI users] open mpi 1.6 with intel compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct 27 12:35:29 2012" -->
<!-- isoreceived="20121027163529" -->
<!-- sent="Sat, 27 Oct 2012 09:35:24 -0700 (PDT)" -->
<!-- isosent="20121027163524" -->
<!-- name="Mahmood Naderan" -->
<!-- email="nt_mahmood_at_[hidden]" -->
<!-- subject="Re: [OMPI users] open mpi 1.6 with intel compilers" -->
<!-- id="1351355724.51617.YahooMailNeo_at_web111704.mail.gq1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="61D41532-FCFC-488C-8C7C-8A0F0B95B5EB_at_cisco.com" -->
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
<strong>From:</strong> Mahmood Naderan (<em>nt_mahmood_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-27 12:35:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20560.php">Mahmood Naderan: "Re: [OMPI users] openmpi shared memory feature"</a>
<li><strong>Previous message:</strong> <a href="20558.php">Jeff Squyres: "Re: [OMPI users] open mpi 1.6 with intel compilers"</a>
<li><strong>In reply to:</strong> <a href="20558.php">Jeff Squyres: "Re: [OMPI users] open mpi 1.6 with intel compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20556.php">Ralph Castain: "Re: [OMPI users] open mpi 1.6 with intel compilers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
oops...
Sorry about that.

&#160;
Regards,
Mahmood



________________________________
 From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
To: Mahmood Naderan &lt;nt_mahmood_at_[hidden]&gt;; Open MPI Users &lt;users_at_[hidden]&gt; 
Sent: Saturday, October 27, 2012 6:34 PM
Subject: Re: [OMPI users] open mpi 1.6 with intel compilers
 
I believe you're referring to a different thread on this mailing list:

&#160; &#160; <a href="http://www.open-mpi.org/community/lists/users/2012/10/20552.php">http://www.open-mpi.org/community/lists/users/2012/10/20552.php</a>

I answered the question about shared memory in that thread, not this one (which is about a run-time error).


On Oct 27, 2012, at 12:24 PM, Mahmood Naderan wrote:

&gt; 
&gt; &gt;This looks like you're trying to execute an MPICH2-build MPI executable, not Open MPI.
&gt; No that was a general question. I mean message passing is a model of communication
&gt; versus shared memory programming. So what is the point when openmpi uses shared
&gt; memory model?
&gt;&#160; 
&gt; Regards,
&gt; Mahmood
&gt; 
&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
&gt; To: Open MPI Users &lt;users_at_[hidden]&gt; 
&gt; Sent: Saturday, October 27, 2012 6:18 PM
&gt; Subject: Re: [OMPI users] open mpi 1.6 with intel compilers
&gt; 
&gt; This looks like you're trying to execute an MPICH2-build MPI executable, not Open MPI.
&gt; 
&gt; On Oct 27, 2012, at 11:46 AM, Giuseppe P. wrote:
&gt; 
&gt; &gt; Hello!
&gt; &gt; 
&gt; &gt; I have built open mpi 1.6 with Intel compilers (2013 versions). Compilation was smooth, however even when I try to execute
&gt; &gt; the simple program hello.c:
&gt; &gt; 
&gt; &gt; mpirun -np 4 ./hello_c.x
&gt; &gt; [mpiexec_at_claudio.ukzn] HYDU_create_process (./utils/launch/launch.c:102): execvp error on file /opt/intel/composer_xe_2013.0.079/mpirt/bin/intel64/pmi_proxy (No such&#160; file or directory)
&gt; &gt; [mpiexec_at_claudio.ukzn] HYD_pmcd_pmiserv_proxy_init_cb (./pm/pmiserv/pmiserv_cb.c:1177): assert (!closed) failed
&gt; &gt; [mpiexec_at_claudio.ukzn] HYDT_dmxu_poll_wait_for_event (./tools/demux/demux_poll.c:77): callback returned error status
&gt; &gt; [mpiexec_at_claudio.ukzn] HYD_pmci_wait_for_completion (./pm/pmiserv/pmiserv_pmci.c:358): error waiting for event
&gt; &gt; [mpiexec_at_claudio.ukzn] main (./ui/mpich/mpiexec.c:689): process manager error waiting for completion
&gt; &gt; 
&gt; &gt; Before that, there was an additional error, since also the file mpivars.sh was not present in /opt/intel/composer_xe_2013.0.079/mpirt/bin/intel64/.
&gt; &gt; Even though I managed to create one and it worked:
&gt; &gt; 
&gt; &gt; #!/bin/bash
&gt; &gt; 
&gt; &gt; if [ -z &quot;`echo $PATH | grep /usr/local/bin`&quot; ]; then
&gt; &gt; export PATH=/usr/local/bin:$PATH
&gt; &gt; fi
&gt; &gt; 
&gt; &gt; if [ -z &quot;`echo $LD_LIBRARY_PATH | grep /usr/local/lib`&quot; ]; then
&gt; &gt; if [ -n &quot;$LD_LIBRARY_PATH&quot; ]; then
&gt; &gt; export LD_LIBRARY_PATH=/usr/local/lib:$LD_LIBRARY_PATH
&gt; &gt; else
&gt; &gt; export LD_LIBRARY_PATH=/usr/local/lib
&gt; &gt; fi
&gt; &gt; fi
&gt; &gt; 
&gt; &gt; I do not have any clue about how to generate the file pmi_proxy.
&gt; &gt; 
&gt; &gt; Thank you in advance for your help!
&gt; &gt; 
&gt; &gt; _______________________________________________
&gt; &gt; users mailing list
&gt; &gt; users_at_[hidden]
&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; 
&gt; 
&gt; -- 
&gt; Jeff Squyres
&gt; jsquyres_at_[hidden]
&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt; 
&gt; 
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; 
&gt; 
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>


-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20559/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20560.php">Mahmood Naderan: "Re: [OMPI users] openmpi shared memory feature"</a>
<li><strong>Previous message:</strong> <a href="20558.php">Jeff Squyres: "Re: [OMPI users] open mpi 1.6 with intel compilers"</a>
<li><strong>In reply to:</strong> <a href="20558.php">Jeff Squyres: "Re: [OMPI users] open mpi 1.6 with intel compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20556.php">Ralph Castain: "Re: [OMPI users] open mpi 1.6 with intel compilers"</a>
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
