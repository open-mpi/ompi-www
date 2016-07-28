<?
$subject_val = "Re: [OMPI users] ssh MPi and program tests";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  6 12:26:33 2009" -->
<!-- isoreceived="20090406162633" -->
<!-- sent="Mon, 6 Apr 2009 18:26:28 +0200" -->
<!-- isosent="20090406162628" -->
<!-- name="Francesco Pietra" -->
<!-- email="chiendarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ssh MPi and program tests" -->
<!-- id="b87c422a0904060926m6df8a83fk11d38bfe17b94e77_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="49DA1DEE.1010903_at_ldeo.columbia.edu" -->
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
<strong>From:</strong> Francesco Pietra (<em>chiendarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-06 12:26:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8787.php">Steve Kargl: "[OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>Previous message:</strong> <a href="8785.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>In reply to:</strong> <a href="8783.php">Gus Correa: "Re: [OMPI users] ssh MPi and program tests"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8789.php">Gus Correa: "Re: [OMPI users] ssh MPi and program tests"</a>
<li><strong>Reply:</strong> <a href="8789.php">Gus Correa: "Re: [OMPI users] ssh MPi and program tests"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Apr 6, 2009 at 5:21 PM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi Francesco
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Did you try to run examples/connectivity_c.c,
</span><br>
<span class="quotelev1">&gt; or examples/hello_c.c before trying amber?
</span><br>
<span class="quotelev1">&gt; They are in the directory where you untarred the OpenMPI tarball.
</span><br>
<span class="quotelev1">&gt; It is easier to troubleshoot
</span><br>
<span class="quotelev1">&gt; possible network and host problems
</span><br>
<span class="quotelev1">&gt; with these simpler programs.
</span><br>
<p>I have found the &quot;examples&quot;. Should they be compiled? how? This is my
<br>
only question here. What's below is info. Although amber parallel
<br>
would have not compiled with faulty openmpi, I'll run openmpi tests as
<br>
soon as I understand how.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, to avoid confusion,
</span><br>
<span class="quotelev1">&gt; you may use a full path name to mpirun,
</span><br>
<span class="quotelev1">&gt; in case you have other MPI flavors in your system.
</span><br>
<span class="quotelev1">&gt; Often times the mpirun your path is pointing to is not what you
</span><br>
<span class="quotelev1">&gt; may think it is.
</span><br>
<p><p>which mpirun
<br>
/usr/local/bin/mpirun
<br>
<p>there is no other accessible MPI (one application, DOT2, has mpich but
<br>
it is a static compilation; DOT2 parallelizatuion requires thar the
<br>
computer knows itself, i.e.&quot; ssh hostname date&quot; should afford the date
<br>
passwordless. The reported issues in testing amber have destroyed this
<br>
situation: now deb64 has port22 closed, evem to itself.
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't know if you want to run on amd64 alone (master node?)
</span><br>
<span class="quotelev1">&gt; or on a cluster.
</span><br>
<span class="quotelev1">&gt; In any case, you may use a list of hosts
</span><br>
<span class="quotelev1">&gt; or a hostfile on the mpirun command line,
</span><br>
<span class="quotelev1">&gt; to specify where you want to run.
</span><br>
<p>With amber I use the parallel computer directly and the amber
<br>
installation is chown to me. The ssh connection, in this case, only
<br>
serves to get file from. or send files to, my desktop.
<br>
<p>In my .bashrc:
<br>
<p>(for amber)
<br>
MPI_HOME=/usr/local
<br>
export MPI_HOME
<br>
<p>(for openmpi)
<br>
if [ &quot;$LD_LIBRARY_PATH&quot; ] ; then
<br>
&nbsp;&nbsp;export LD_LIBRARY_PATH=&quot;$LD_LIBRARY_PATH'/usr/local/lib&quot;
<br>
else
<br>
&nbsp;&nbsp;export LD_LIBRARY_PATH=&quot;/usr/local/lib&quot;
<br>
fi
<br>
<p><p>There is also
<br>
<p>MPICH_HOME=/usr/local
<br>
export MPICH_HOME
<br>
<p>this is for DOCK, which, with this env variabl, accepts openmpi (at
<br>
lest it was so with v 1.2.6)
<br>
<p>the intel compilers (compiled ifort and icc, are sourced in both my
<br>
.bashrc and root home .bashrc.
<br>
<p>Thanks and apologies for my low level in these affairs. It is the
<br>
first time I am faced by such problems, with amd64, same intel
<br>
compilers, and openmpi 1.2.6 everything was in order.
<br>
<p>francesco
<br>
<p><p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do &quot;/full/path/to/openmpi/bin/mpirun --help&quot; for details.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am not familiar to amber, but how does it find your openmpi
</span><br>
<span class="quotelev1">&gt; libraries and compiler wrappers?
</span><br>
<span class="quotelev1">&gt; Don't you need to give it the paths during configuration,
</span><br>
<span class="quotelev1">&gt; say,
</span><br>
<span class="quotelev1">&gt; /configure_amber -openmpi=/full/path/to/openmpi
</span><br>
<span class="quotelev1">&gt; or similar?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hope this helps.
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Gustavo Correa
</span><br>
<span class="quotelev1">&gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev1">&gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Francesco Pietra wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have compiled openmpi 1.3.1 on debian amd64 lenny with icc/ifort
</span><br>
<span class="quotelev2">&gt;&gt; (10.1.015) and libnuma. Tests passed:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ompi_info | grep libnuma
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160;MCA affinity: libnuma (MCA v 2.0, API 2.0)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ompi_info | grep maffinity
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160;MCA affinity: first use (MCA as above)
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160;MCA affinity: libnuma as above.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Then, I have compiled parallel a molecular dynamics package, amber10,
</span><br>
<span class="quotelev2">&gt;&gt; without error signals but I am having problems in testing the amber
</span><br>
<span class="quotelev2">&gt;&gt; parallel installation.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; amber10 configure was set as:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./configure_amber -openmpi -nobintray ifort
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; just as I used before with openmpi 1.2.6. Could you say if the
</span><br>
<span class="quotelev2">&gt;&gt; -openmpi should be changed?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; cd tests
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; export DO_PARALLEL='mpirun -np 4'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; make test.parallel.MM &#194;&#160;&lt; /dev/null
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; cd cytosine &amp;&amp; ./Run.cytosine
</span><br>
<span class="quotelev2">&gt;&gt; The authenticity of host deb64 (which is the hostname) (127.0.1.1)
</span><br>
<span class="quotelev2">&gt;&gt; can't be established.
</span><br>
<span class="quotelev2">&gt;&gt; RSA fingerprint .....
</span><br>
<span class="quotelev2">&gt;&gt; connecting ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I stopped the ssh daemon, whereby tests were interrupted because deb64
</span><br>
<span class="quotelev2">&gt;&gt; (i.e., itself) could no more be accessed. Further attempts under these
</span><br>
<span class="quotelev2">&gt;&gt; conditions failed for the same reason. Now, sshing to deb64 is no more
</span><br>
<span class="quotelev2">&gt;&gt; possible: port 22 closed. In contrast, sshing from deb64 to other
</span><br>
<span class="quotelev2">&gt;&gt; computers occurs passwordless. No such problems arose at the time of
</span><br>
<span class="quotelev2">&gt;&gt; amd64 etch with the same
</span><br>
<span class="quotelev2">&gt;&gt; configuration of ssh, same compilers, and openmpi 1.2.6.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am here because the warning from the amber site is that I should to
</span><br>
<span class="quotelev2">&gt;&gt; learn how to use my installation of MPI. Therefore, if there is any
</span><br>
<span class="quotelev2">&gt;&gt; clue ..
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; thanks
</span><br>
<span class="quotelev2">&gt;&gt; francesco pietra
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8787.php">Steve Kargl: "[OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>Previous message:</strong> <a href="8785.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>In reply to:</strong> <a href="8783.php">Gus Correa: "Re: [OMPI users] ssh MPi and program tests"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8789.php">Gus Correa: "Re: [OMPI users] ssh MPi and program tests"</a>
<li><strong>Reply:</strong> <a href="8789.php">Gus Correa: "Re: [OMPI users] ssh MPi and program tests"</a>
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
