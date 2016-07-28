<?
$subject_val = "Re: [OMPI users] ssh MPi and program tests";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  6 10:59:29 2009" -->
<!-- isoreceived="20090406145929" -->
<!-- sent="Mon, 6 Apr 2009 08:59:20 -0600" -->
<!-- isosent="20090406145920" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ssh MPi and program tests" -->
<!-- id="C7B459D8-88C6-4FAF-AA23-183DE884A77C_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-06 10:59:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8781.php">John Hearns: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Previous message:</strong> <a href="8779.php">Francesco Pietra: "[OMPI users] ssh MPi and program tests"</a>
<li><strong>In reply to:</strong> <a href="8779.php">Francesco Pietra: "[OMPI users] ssh MPi and program tests"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8783.php">Gus Correa: "Re: [OMPI users] ssh MPi and program tests"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You might first try and see if you can run something other than amber  
<br>
with your new installation. Make sure you have the PATH and  
<br>
LD_LIBRARY_PATH set correctly on the remote node, or add --prefix to  
<br>
your mpirun cmd line.
<br>
<p>Also, did you remember to install the OMPI 1.3 libraries on the remote  
<br>
nodes?
<br>
<p>One thing I see below is that host deb64 was resolved to the loopback  
<br>
interface - was that correct? Seems unusual - even if you are on that  
<br>
host, it usually would resolve to some public IP address.
<br>
<p><p>On Apr 6, 2009, at 8:51 AM, Francesco Pietra wrote:
<br>
<p><span class="quotelev1">&gt; I have compiled openmpi 1.3.1 on debian amd64 lenny with icc/ifort
</span><br>
<span class="quotelev1">&gt; (10.1.015) and libnuma. Tests passed:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ompi_info | grep libnuma
</span><br>
<span class="quotelev1">&gt; MCA affinity: libnuma (MCA v 2.0, API 2.0)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ompi_info | grep maffinity
</span><br>
<span class="quotelev1">&gt; MCA affinity: first use (MCA as above)
</span><br>
<span class="quotelev1">&gt; MCA affinity: libnuma as above.
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
<li><strong>Next message:</strong> <a href="8781.php">John Hearns: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Previous message:</strong> <a href="8779.php">Francesco Pietra: "[OMPI users] ssh MPi and program tests"</a>
<li><strong>In reply to:</strong> <a href="8779.php">Francesco Pietra: "[OMPI users] ssh MPi and program tests"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8783.php">Gus Correa: "Re: [OMPI users] ssh MPi and program tests"</a>
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
