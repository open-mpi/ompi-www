<?
$subject_val = "Re: [OMPI users] ssh MPi and program tests";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  6 13:53:25 2009" -->
<!-- isoreceived="20090406175325" -->
<!-- sent="Mon, 06 Apr 2009 13:53:15 -0400" -->
<!-- isosent="20090406175315" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ssh MPi and program tests" -->
<!-- id="49DA418B.60003_at_ldeo.columbia.edu" -->
<!-- charset="utf-8" -->
<!-- inreplyto="b87c422a0904060926m6df8a83fk11d38bfe17b94e77_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2009-04-06 13:53:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8790.php">Scott Collis: "[OMPI users] Incorrect results with MPI-IO under OpenMPI v1.3.1"</a>
<li><strong>Previous message:</strong> <a href="8788.php">Gus Correa: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>In reply to:</strong> <a href="8786.php">Francesco Pietra: "Re: [OMPI users] ssh MPi and program tests"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8791.php">Francesco Pietra: "Re: [OMPI users] ssh MPi and program tests"</a>
<li><strong>Reply:</strong> <a href="8791.php">Francesco Pietra: "Re: [OMPI users] ssh MPi and program tests"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Francesco, list
<br>
<p>Francesco Pietra wrote:
<br>
<span class="quotelev1">&gt; On Mon, Apr 6, 2009 at 5:21 PM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Francesco
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Did you try to run examples/connectivity_c.c,
</span><br>
<span class="quotelev2">&gt;&gt; or examples/hello_c.c before trying amber?
</span><br>
<span class="quotelev2">&gt;&gt; They are in the directory where you untarred the OpenMPI tarball.
</span><br>
<span class="quotelev2">&gt;&gt; It is easier to troubleshoot
</span><br>
<span class="quotelev2">&gt;&gt; possible network and host problems
</span><br>
<span class="quotelev2">&gt;&gt; with these simpler programs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have found the &quot;examples&quot;. Should they be compiled? how? This is my
</span><br>
<span class="quotelev1">&gt; only question here. 
</span><br>
<p>cd examples/
<br>
/full/path/to/openmpi/bin/mpicc -o connectivity_c connectivity_c.c
<br>
<p>Then run it with, say:
<br>
<p>/full/path/to/openmpi/bin/mpirun -host {whatever_hosts_you_want}
<br>
-n {as_many_processes_you_want} connectivity_c
<br>
<p>Likewise for hello_c.c
<br>
<p><span class="quotelev1">&gt; What's below is info. Although amber parallel
</span><br>
<span class="quotelev1">&gt; would have not compiled with faulty openmpi, I'll run openmpi tests as
</span><br>
<span class="quotelev1">&gt; soon as I understand how.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Also, to avoid confusion,
</span><br>
<span class="quotelev2">&gt;&gt; you may use a full path name to mpirun,
</span><br>
<span class="quotelev2">&gt;&gt; in case you have other MPI flavors in your system.
</span><br>
<span class="quotelev2">&gt;&gt; Often times the mpirun your path is pointing to is not what you
</span><br>
<span class="quotelev2">&gt;&gt; may think it is.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; which mpirun
</span><br>
<span class="quotelev1">&gt; /usr/local/bin/mpirun
</span><br>
<p>Did you install OpenMPI on /usr/local ?
<br>
When you do &quot;mpirun -help&quot;, do you see &quot;mpirun (Open MPI) 1.3&quot;?
<br>
How about the output of &quot;orte_info&quot; ?
<br>
Does it show your Intel compilers, etc?
<br>
<p>I ask because many Linux distributions come with one or more flavors
<br>
of MPI (OpenMPI, MPICH, LAM, etc), some compilers also do (PGI for 
<br>
instance), some tools (Intel MKL?) may also have their MPI,
<br>
and you end up with a bunch of MPI commands
<br>
on your path that may produce a big mixup.
<br>
This is a pretty common problem that affect new users on this list,
<br>
on the MPICH list, on clustering lists, etc.
<br>
The errors messages often don't help find the source of the problem,
<br>
and people spend a lot of time trying to troubleshoot network,
<br>
etc, when is often just a path problem.
<br>
<p>So, this is why when you begin, you may want to use full path
<br>
names, to avoid confusion.
<br>
After the basic MPI functionality is working,
<br>
then you can go and fix your path chain,
<br>
and rely on your path chain.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; there is no other accessible MPI (one application, DOT2, has mpich but
</span><br>
<span class="quotelev1">&gt; it is a static compilation; DOT2 parallelizatuion requires thar the
</span><br>
<span class="quotelev1">&gt; computer knows itself, i.e.&quot; ssh hostname date&quot; should afford the date
</span><br>
<span class="quotelev1">&gt; passwordless. The reported issues in testing amber have destroyed this
</span><br>
<span class="quotelev1">&gt; situation: now deb64 has port22 closed, evem to itself.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Have you tried to reboot the master node, to see if it comes back
<br>
to the original ssh setup?
<br>
You need ssh to be functional to run OpenMPI code,
<br>
including the tests above.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I don't know if you want to run on amd64 alone (master node?)
</span><br>
<span class="quotelev2">&gt;&gt; or on a cluster.
</span><br>
<span class="quotelev2">&gt;&gt; In any case, you may use a list of hosts
</span><br>
<span class="quotelev2">&gt;&gt; or a hostfile on the mpirun command line,
</span><br>
<span class="quotelev2">&gt;&gt; to specify where you want to run.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With amber I use the parallel computer directly and the amber
</span><br>
<span class="quotelev1">&gt; installation is chown to me. The ssh connection, in this case, only
</span><br>
<span class="quotelev1">&gt; serves to get file from. or send files to, my desktop.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>It is unclear to me what you mean by &quot;the parallel computer directly&quot;.
<br>
Can you explain better which computers are in this game?
<br>
Your desktop and a cluster perhaps?
<br>
Are they both Debian 64 Linux?
<br>
Where do you compile the programs?
<br>
Where do you want to run the programs?
<br>
<p><span class="quotelev1">&gt; In my .bashrc:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (for amber)
</span><br>
<span class="quotelev1">&gt; MPI_HOME=/usr/local
</span><br>
<span class="quotelev1">&gt; export MPI_HOME
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (for openmpi)
</span><br>
<span class="quotelev1">&gt; if [ &quot;$LD_LIBRARY_PATH&quot; ] ; then
</span><br>
<span class="quotelev1">&gt;   export LD_LIBRARY_PATH=&quot;$LD_LIBRARY_PATH'/usr/local/lib&quot;
</span><br>
<span class="quotelev1">&gt; else
</span><br>
<span class="quotelev1">&gt;   export LD_LIBRARY_PATH=&quot;/usr/local/lib&quot;
</span><br>
<span class="quotelev1">&gt; fi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Is this on your desktop or on the &quot;parallel computer&quot;?
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There is also
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPICH_HOME=/usr/local
</span><br>
<span class="quotelev1">&gt; export MPICH_HOME
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; this is for DOCK, which, with this env variabl, accepts openmpi (at
</span><br>
<span class="quotelev1">&gt; lest it was so with v 1.2.6)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Oh, well, it looks like there is MPICH already installed on /usr/local.
<br>
So, this may be part of the confusion, the path confusion I referred to.
<br>
<p>I would suggest installing OpenMPI on a different directory,
<br>
using the --prefix option of the OpenMPI configure script.
<br>
Do configure --help for details about all configuration options.
<br>
<p><p><span class="quotelev1">&gt; the intel compilers (compiled ifort and icc, are sourced in both my
</span><br>
<span class="quotelev1">&gt; .bashrc and root home .bashrc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks and apologies for my low level in these affairs. It is the
</span><br>
<span class="quotelev1">&gt; first time I am faced by such problems, with amd64, same intel
</span><br>
<span class="quotelev1">&gt; compilers, and openmpi 1.2.6 everything was in order.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>To me it doesn't look like the problem is related to the new version
<br>
of OpenMPI.
<br>
<p>Try the test programs with full path names first.
<br>
It may not solve the problem, but it may clarify things a bit.
<br>
<p>Gus Correa
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
<p><span class="quotelev1">&gt; francesco
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Do &quot;/full/path/to/openmpi/bin/mpirun --help&quot; for details.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am not familiar to amber, but how does it find your openmpi
</span><br>
<span class="quotelev2">&gt;&gt; libraries and compiler wrappers?
</span><br>
<span class="quotelev2">&gt;&gt; Don't you need to give it the paths during configuration,
</span><br>
<span class="quotelev2">&gt;&gt; say,
</span><br>
<span class="quotelev2">&gt;&gt; /configure_amber -openmpi=/full/path/to/openmpi
</span><br>
<span class="quotelev2">&gt;&gt; or similar?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I hope this helps.
</span><br>
<span class="quotelev2">&gt;&gt; Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Gustavo Correa
</span><br>
<span class="quotelev2">&gt;&gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev2">&gt;&gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Francesco Pietra wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have compiled openmpi 1.3.1 on debian amd64 lenny with icc/ifort
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (10.1.015) and libnuma. Tests passed:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_info | grep libnuma
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  MCA affinity: libnuma (MCA v 2.0, API 2.0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_info | grep maffinity
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  MCA affinity: first use (MCA as above)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  MCA affinity: libnuma as above.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Then, I have compiled parallel a molecular dynamics package, amber10,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; without error signals but I am having problems in testing the amber
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parallel installation.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; amber10 configure was set as:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./configure_amber -openmpi -nobintray ifort
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; just as I used before with openmpi 1.2.6. Could you say if the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -openmpi should be changed?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cd tests
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; export DO_PARALLEL='mpirun -np 4'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make test.parallel.MM  &lt; /dev/null
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cd cytosine &amp;&amp; ./Run.cytosine
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The authenticity of host deb64 (which is the hostname) (127.0.1.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; can't be established.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; RSA fingerprint .....
</span><br>
<span class="quotelev3">&gt;&gt;&gt; connecting ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I stopped the ssh daemon, whereby tests were interrupted because deb64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (i.e., itself) could no more be accessed. Further attempts under these
</span><br>
<span class="quotelev3">&gt;&gt;&gt; conditions failed for the same reason. Now, sshing to deb64 is no more
</span><br>
<span class="quotelev3">&gt;&gt;&gt; possible: port 22 closed. In contrast, sshing from deb64 to other
</span><br>
<span class="quotelev3">&gt;&gt;&gt; computers occurs passwordless. No such problems arose at the time of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; amd64 etch with the same
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configuration of ssh, same compilers, and openmpi 1.2.6.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am here because the warning from the amber site is that I should to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; learn how to use my installation of MPI. Therefore, if there is any
</span><br>
<span class="quotelev3">&gt;&gt;&gt; clue ..
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; francesco pietra
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="8790.php">Scott Collis: "[OMPI users] Incorrect results with MPI-IO under OpenMPI v1.3.1"</a>
<li><strong>Previous message:</strong> <a href="8788.php">Gus Correa: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>In reply to:</strong> <a href="8786.php">Francesco Pietra: "Re: [OMPI users] ssh MPi and program tests"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8791.php">Francesco Pietra: "Re: [OMPI users] ssh MPi and program tests"</a>
<li><strong>Reply:</strong> <a href="8791.php">Francesco Pietra: "Re: [OMPI users] ssh MPi and program tests"</a>
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
