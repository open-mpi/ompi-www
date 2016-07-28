<?
$subject_val = "Re: [OMPI users] ssh MPi and program tests";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  6 11:21:27 2009" -->
<!-- isoreceived="20090406152127" -->
<!-- sent="Mon, 06 Apr 2009 11:21:18 -0400" -->
<!-- isosent="20090406152118" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ssh MPi and program tests" -->
<!-- id="49DA1DEE.1010903_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="b87c422a0904060751v68c512fdob5db75beb5d48e4e_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] ssh MPi and program tests<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-06 11:21:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8784.php">Gus Correa: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Previous message:</strong> <a href="8782.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>In reply to:</strong> <a href="8779.php">Francesco Pietra: "[OMPI users] ssh MPi and program tests"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8786.php">Francesco Pietra: "Re: [OMPI users] ssh MPi and program tests"</a>
<li><strong>Reply:</strong> <a href="8786.php">Francesco Pietra: "Re: [OMPI users] ssh MPi and program tests"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Francesco
<br>
<p>Did you try to run examples/connectivity_c.c,
<br>
or examples/hello_c.c before trying amber?
<br>
They are in the directory where you untarred the OpenMPI tarball.
<br>
It is easier to troubleshoot
<br>
possible network and host problems
<br>
with these simpler programs.
<br>
<p>Also, to avoid confusion,
<br>
you may use a full path name to mpirun,
<br>
in case you have other MPI flavors in your system.
<br>
Often times the mpirun your path is pointing to is not what you
<br>
may think it is.
<br>
<p>I don't know if you want to run on amd64 alone (master node?)
<br>
or on a cluster.
<br>
In any case, you may use a list of hosts
<br>
or a hostfile on the mpirun command line,
<br>
to specify where you want to run.
<br>
<p>Do &quot;/full/path/to/openmpi/bin/mpirun --help&quot; for details.
<br>
<p>I am not familiar to amber, but how does it find your openmpi
<br>
libraries and compiler wrappers?
<br>
Don't you need to give it the paths during configuration,
<br>
say,
<br>
/configure_amber -openmpi=/full/path/to/openmpi
<br>
or similar?
<br>
<p>I hope this helps.
<br>
Gus Correa
<br>
---------------------------------------------------------------------
<br>
Gustavo Correa
<br>
Lamont-Doherty Earth Observatory - Columbia University
<br>
Palisades, NY, 10964-8000 - USA
<br>
---------------------------------------------------------------------
<br>
<p><p>Francesco Pietra wrote:
<br>
<span class="quotelev1">&gt; I have compiled openmpi 1.3.1 on debian amd64 lenny with icc/ifort
</span><br>
<span class="quotelev1">&gt; (10.1.015) and libnuma. Tests passed:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ompi_info | grep libnuma
</span><br>
<span class="quotelev1">&gt;  MCA affinity: libnuma (MCA v 2.0, API 2.0)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ompi_info | grep maffinity
</span><br>
<span class="quotelev1">&gt;  MCA affinity: first use (MCA as above)
</span><br>
<span class="quotelev1">&gt;  MCA affinity: libnuma as above.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Then, I have compiled parallel a molecular dynamics package, amber10,
</span><br>
<span class="quotelev1">&gt; without error signals but I am having problems in testing the amber
</span><br>
<span class="quotelev1">&gt; parallel installation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; amber10 configure was set as:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure_amber -openmpi -nobintray ifort
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; just as I used before with openmpi 1.2.6. Could you say if the
</span><br>
<span class="quotelev1">&gt; -openmpi should be changed?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; cd tests
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; export DO_PARALLEL='mpirun -np 4'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; make test.parallel.MM  &lt; /dev/null
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; cd cytosine &amp;&amp; ./Run.cytosine
</span><br>
<span class="quotelev1">&gt; The authenticity of host deb64 (which is the hostname) (127.0.1.1)
</span><br>
<span class="quotelev1">&gt; can't be established.
</span><br>
<span class="quotelev1">&gt; RSA fingerprint .....
</span><br>
<span class="quotelev1">&gt; connecting ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I stopped the ssh daemon, whereby tests were interrupted because deb64
</span><br>
<span class="quotelev1">&gt; (i.e., itself) could no more be accessed. Further attempts under these
</span><br>
<span class="quotelev1">&gt; conditions failed for the same reason. Now, sshing to deb64 is no more
</span><br>
<span class="quotelev1">&gt; possible: port 22 closed. In contrast, sshing from deb64 to other
</span><br>
<span class="quotelev1">&gt; computers occurs passwordless. No such problems arose at the time of
</span><br>
<span class="quotelev1">&gt; amd64 etch with the same
</span><br>
<span class="quotelev1">&gt; configuration of ssh, same compilers, and openmpi 1.2.6.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am here because the warning from the amber site is that I should to
</span><br>
<span class="quotelev1">&gt; learn how to use my installation of MPI. Therefore, if there is any
</span><br>
<span class="quotelev1">&gt; clue ..
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thanks
</span><br>
<span class="quotelev1">&gt; francesco pietra
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
<li><strong>Next message:</strong> <a href="8784.php">Gus Correa: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Previous message:</strong> <a href="8782.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>In reply to:</strong> <a href="8779.php">Francesco Pietra: "[OMPI users] ssh MPi and program tests"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8786.php">Francesco Pietra: "Re: [OMPI users] ssh MPi and program tests"</a>
<li><strong>Reply:</strong> <a href="8786.php">Francesco Pietra: "Re: [OMPI users] ssh MPi and program tests"</a>
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
