<?
$subject_val = "Re: [OMPI users] mpirun is using one PBS node only";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  1 17:08:07 2009" -->
<!-- isoreceived="20091201220807" -->
<!-- sent="Tue, 01 Dec 2009 17:07:58 -0500" -->
<!-- isosent="20091201220758" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun is using one PBS node only" -->
<!-- id="4B1593BE.9050900_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="COL113-W19B1DBA7819D04581D2ED1F4960_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun is using one PBS node only<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-01 17:07:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11327.php">Belaid MOA: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<li><strong>Previous message:</strong> <a href="11325.php">Belaid MOA: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<li><strong>In reply to:</strong> <a href="11325.php">Belaid MOA: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11327.php">Belaid MOA: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<li><strong>Reply:</strong> <a href="11327.php">Belaid MOA: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Belaid Moa
<br>
<p>Belaid MOA wrote:
<br>
<span class="quotelev1">&gt; Thanks a lot Gus for you help again. I only have one CPU per node.
</span><br>
<span class="quotelev1">&gt; The -n X option (no matter what the value of X is) shows X processes 
</span><br>
<span class="quotelev1">&gt; running on one node only (the other one is free).
</span><br>
<p>So, somehow it is oversubscribing your single processor
<br>
on the first node.
<br>
<p>A simple diagnostic:
<br>
<p>Have you tried to run &quot;hostname&quot; on the two nodes through Torque/PBS
<br>
and mpiexec?
<br>
<p>[PBS directives, cd $PBS_O_WORKDIR, etc]
<br>
...
<br>
/full/path/to/openmpi/bin/mpiexec -n 2 hostname
<br>
<p>Try also with the -byslot and -bynode options.
<br>
<p><p><span class="quotelev1">&gt; If I add the machinefile option with WN1 and WN2 in it, the right 
</span><br>
<span class="quotelev1">&gt; behavior is manifested. According to the documentation,
</span><br>
<span class="quotelev1">&gt; mpirun should get the PBS_NODEFILE automatically from the PBS. 
</span><br>
<p>Yes, if you compiled OpenMPI you are using with Torque (&quot;tm) support.
<br>
Did you?
<br>
Make sure the it has tm support.
<br>
Run &quot;ompi_info&quot; with full path if needed, to check that.
<br>
Are you sure the correct path to what you want is
<br>
/usr/local/bin/mpirun ?
<br>
Linux distributions, compilers, and other tools come with their
<br>
mpiexec and put them in places that you may not suspect, to better
<br>
double check you get what you want.
<br>
That has been a source of repeated confusion on this and other
<br>
mailing lists.
<br>
<p>Also, make sure that passwordless ssh across the nodes is working.
<br>
<p>Yet another thing to check, for easy name resolution,
<br>
your /etc/hosts file on *all*
<br>
nodes including the headnode should
<br>
have a list of all nodes and their IP addresses.
<br>
Something like this:
<br>
<p>127.0.0.1	localhost.localdomain	localhost
<br>
192.168.0.1     WN1
<br>
192.168.0.2     WN2
<br>
<p>(The IPs above are guesswork of mine, you know better which to use.)
<br>
<p><span class="quotelev1">&gt; So, I do 
</span><br>
<span class="quotelev1">&gt; not need to use machinefile.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>True assuming the first condition above (OpenMPI *with* &quot;tm&quot; suport).
<br>
<p><span class="quotelev1">&gt; Any ideas?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Yes, and I sent it to you on my last email!
<br>
Try the &quot;-bynode&quot; option of mpiexec.
<br>
(&quot;man mpiexec&quot; is your friend!)
<br>
<p><span class="quotelev1">&gt; Thanks a lot in advance.
</span><br>
<span class="quotelev1">&gt; ~Belaid.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Best of luck!
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
<p>PS - Your web site link to Paul Krugman is out of date.
<br>
Here are one to his (active) blog,
<br>
and another to his (no longer updated) web page:    :)
<br>
<p><a href="http://krugman.blogs.nytimes.com/">http://krugman.blogs.nytimes.com/</a>
<br>
<a href="http://www.princeton.edu/~pkrugman/">http://www.princeton.edu/~pkrugman/</a>
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;  &gt; Date: Tue, 1 Dec 2009 15:42:30 -0500
</span><br>
<span class="quotelev2">&gt;  &gt; From: gus_at_[hidden]
</span><br>
<span class="quotelev2">&gt;  &gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;  &gt; Subject: Re: [OMPI users] mpirun is using one PBS node only
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; Hi Belaid Moa
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; Belaid MOA wrote:
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; Hi everyone,
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; Here is another elementary question. I tried the following steps found
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; in the FAQ section of www.open-mpi.org with a simple hello world 
</span><br>
<span class="quotelev1">&gt; example
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; (with PBS/torque):
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; $ qsub -l nodes=2 my_script.sh
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; my_script.sh is pasted below:
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; ========================
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; #!/bin/sh -l
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; #PBS -N helloTest
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; #PBS -j eo
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; echo `cat $PBS_NODEFILE` # shows two nodes: WN1 WN2
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; cd $PBS_O_WORKDIR
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; /usr/local/bin/mpirun hello
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; ========================
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; When the job is submitted, only one process is ran. When I add the 
</span><br>
<span class="quotelev1">&gt; -n 2
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; option to the mpirun command,
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; two processes are ran but on one node only.
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; Do you have a single CPU/core per node?
</span><br>
<span class="quotelev2">&gt;  &gt; Or are they multi-socket/multi-core?
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; Check &quot;man mpiexec&quot; for the options that control on which nodes and
</span><br>
<span class="quotelev2">&gt;  &gt; slots, etc your program will run.
</span><br>
<span class="quotelev2">&gt;  &gt; (&quot;Man mpiexec&quot; will tell you more than I possibly can.)
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; The default option is &quot;-byslot&quot;,
</span><br>
<span class="quotelev2">&gt;  &gt; which will use all &quot;slots&quot; (actually cores
</span><br>
<span class="quotelev2">&gt;  &gt; or CPUs) available on a node before it moves to the next node.
</span><br>
<span class="quotelev2">&gt;  &gt; Reading your question and your surprise with the result,
</span><br>
<span class="quotelev2">&gt;  &gt; I would guess what you want is &quot;-bynode&quot; (not the default).
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; Also, if you have more than one CPU/core per node,
</span><br>
<span class="quotelev2">&gt;  &gt; you need to put this information in your Torque/PBS &quot;nodes&quot; file
</span><br>
<span class="quotelev2">&gt;  &gt; (and restart your pbs_server daemon).
</span><br>
<span class="quotelev2">&gt;  &gt; Something like this (for 2 CPUs/cores per node):
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; WN1 np=2
</span><br>
<span class="quotelev2">&gt;  &gt; WN2 np=2
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; I hope this helps,
</span><br>
<span class="quotelev2">&gt;  &gt; Gus Correa
</span><br>
<span class="quotelev2">&gt;  &gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;  &gt; Gustavo Correa
</span><br>
<span class="quotelev2">&gt;  &gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev2">&gt;  &gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev2">&gt;  &gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; Note that echo `cat
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; $PBS_NODEFILE` outputs
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; the two nodes I am using: WN1 and WN2.
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; The output from ompi_info is shown below:
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; $ ompi_info | grep tm
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; MCA memory: ptmalloc2 (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; MCA ras: tm (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; MCA plm: tm (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; Any help on why openMPI/mpirun is using only one PBS node is very
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; appreciated.
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; Thanks a lot in advance and sorry for bothering you guys with my
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; elementary questions!
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; ~Belaid.
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; Windows Live: Keep your friends up to date with what you do online.
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; &lt;<a href="http://go.microsoft.com/?linkid=9691810">http://go.microsoft.com/?linkid=9691810</a>&gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;  &gt; users mailing list
</span><br>
<span class="quotelev2">&gt;  &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;  &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Windows Live: Keep your friends up to date with what you do online. 
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://go.microsoft.com/?linkid=9691810">http://go.microsoft.com/?linkid=9691810</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="11327.php">Belaid MOA: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<li><strong>Previous message:</strong> <a href="11325.php">Belaid MOA: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<li><strong>In reply to:</strong> <a href="11325.php">Belaid MOA: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11327.php">Belaid MOA: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<li><strong>Reply:</strong> <a href="11327.php">Belaid MOA: "Re: [OMPI users] mpirun is using one PBS node only"</a>
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
