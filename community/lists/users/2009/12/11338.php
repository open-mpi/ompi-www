<?
$subject_val = "Re: [OMPI users] mpirun is using one PBS node only";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  1 18:59:57 2009" -->
<!-- isoreceived="20091201235957" -->
<!-- sent="Tue, 1 Dec 2009 18:59:52 -0500" -->
<!-- isosent="20091201235952" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun is using one PBS node only" -->
<!-- id="6E0D34A4-C3A2-43BA-9F4B-597B9D6B31F7_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="COL113-W227909532F202B83A3021AF4960_at_phx.gbl" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-01 18:59:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11339.php">Belaid MOA: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<li><strong>Previous message:</strong> <a href="11337.php">Belaid MOA: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<li><strong>In reply to:</strong> <a href="11327.php">Belaid MOA: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11340.php">Belaid MOA: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<li><strong>Reply:</strong> <a href="11340.php">Belaid MOA: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You need to install with TM support on all nodes.
<br>
<p>On Dec 1, 2009, at 6:08 PM, Belaid MOA wrote:
<br>
<p><span class="quotelev1">&gt; I tried -bynode option but it did not change anything. I also tried  
</span><br>
<span class="quotelev1">&gt; the &quot;hostname&quot; name command and
</span><br>
<span class="quotelev1">&gt; I keep getting only the name of one node repeated according to the - 
</span><br>
<span class="quotelev1">&gt; n value.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just to make sure I did the right installation, here is what I did:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- On the head node (HN), I installed openMPI using the --with-tm  
</span><br>
<span class="quotelev1">&gt; option as follows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --with-tm=/var/spool/torque --enable-static
</span><br>
<span class="quotelev1">&gt; make install all
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- On the worker nodes (WN1 and WN2), I installed openMPI without tm  
</span><br>
<span class="quotelev1">&gt; option as follows (it is a local installation on each worker node):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --enable-static
</span><br>
<span class="quotelev1">&gt; make install all
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is this correct?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks a lot in advance.
</span><br>
<span class="quotelev1">&gt; ~Belaid.
</span><br>
<span class="quotelev2">&gt; &gt; Date: Tue, 1 Dec 2009 17:07:58 -0500
</span><br>
<span class="quotelev2">&gt; &gt; From: gus_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] mpirun is using one PBS node only
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi Belaid Moa
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Belaid MOA wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thanks a lot Gus for you help again. I only have one CPU per node.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The -n X option (no matter what the value of X is) shows X  
</span><br>
<span class="quotelev1">&gt; processes
</span><br>
<span class="quotelev3">&gt; &gt; &gt; running on one node only (the other one is free).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; So, somehow it is oversubscribing your single processor
</span><br>
<span class="quotelev2">&gt; &gt; on the first node.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; A simple diagnostic:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Have you tried to run &quot;hostname&quot; on the two nodes through Torque/PBS
</span><br>
<span class="quotelev2">&gt; &gt; and mpiexec?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [PBS directives, cd $PBS_O_WORKDIR, etc]
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt; /full/path/to/openmpi/bin/mpiexec -n 2 hostname
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Try also with the -byslot and -bynode options.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; If I add the machinefile option with WN1 and WN2 in it, the right
</span><br>
<span class="quotelev3">&gt; &gt; &gt; behavior is manifested. According to the documentation,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mpirun should get the PBS_NODEFILE automatically from the PBS.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Yes, if you compiled OpenMPI you are using with Torque (&quot;tm)  
</span><br>
<span class="quotelev1">&gt; support.
</span><br>
<span class="quotelev2">&gt; &gt; Did you?
</span><br>
<span class="quotelev2">&gt; &gt; Make sure the it has tm support.
</span><br>
<span class="quotelev2">&gt; &gt; Run &quot;ompi_info&quot; with full path if needed, to check that.
</span><br>
<span class="quotelev2">&gt; &gt; Are you sure the correct path to what you want is
</span><br>
<span class="quotelev2">&gt; &gt; /usr/local/bin/mpirun ?
</span><br>
<span class="quotelev2">&gt; &gt; Linux distributions, compilers, and other tools come with their
</span><br>
<span class="quotelev2">&gt; &gt; mpiexec and put them in places that you may not suspect, to better
</span><br>
<span class="quotelev2">&gt; &gt; double check you get what you want.
</span><br>
<span class="quotelev2">&gt; &gt; That has been a source of repeated confusion on this and other
</span><br>
<span class="quotelev2">&gt; &gt; mailing lists.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Also, make sure that passwordless ssh across the nodes is working.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Yet another thing to check, for easy name resolution,
</span><br>
<span class="quotelev2">&gt; &gt; your /etc/hosts file on *all*
</span><br>
<span class="quotelev2">&gt; &gt; nodes including the headnode should
</span><br>
<span class="quotelev2">&gt; &gt; have a list of all nodes and their IP addresses.
</span><br>
<span class="quotelev2">&gt; &gt; Something like this:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 127.0.0.1	localhost.localdomain	localhost
</span><br>
<span class="quotelev2">&gt; &gt; 192.168.0.1 WN1
</span><br>
<span class="quotelev2">&gt; &gt; 192.168.0.2 WN2
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; (The IPs above are guesswork of mine, you know better which to use.)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; So, I do
</span><br>
<span class="quotelev3">&gt; &gt; &gt; not need to use machinefile.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; True assuming the first condition above (OpenMPI *with* &quot;tm&quot;  
</span><br>
<span class="quotelev1">&gt; suport).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Any ideas?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Yes, and I sent it to you on my last email!
</span><br>
<span class="quotelev2">&gt; &gt; Try the &quot;-bynode&quot; option of mpiexec.
</span><br>
<span class="quotelev2">&gt; &gt; (&quot;man mpiexec&quot; is your friend!)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thanks a lot in advance.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ~Belaid.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Best of luck!
</span><br>
<span class="quotelev2">&gt; &gt; Gus Correa
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; Gustavo Correa
</span><br>
<span class="quotelev2">&gt; &gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev2">&gt; &gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; PS - Your web site link to Paul Krugman is out of date.
</span><br>
<span class="quotelev2">&gt; &gt; Here are one to his (active) blog,
</span><br>
<span class="quotelev2">&gt; &gt; and another to his (no longer updated) web page: :)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://krugman.blogs.nytimes.com/">http://krugman.blogs.nytimes.com/</a>
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.princeton.edu/~pkrugman/">http://www.princeton.edu/~pkrugman/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Date: Tue, 1 Dec 2009 15:42:30 -0500
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; From: gus_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; To: users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Subject: Re: [OMPI users] mpirun is using one PBS node only
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Hi Belaid Moa
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Belaid MOA wrote:
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Hi everyone,
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Here is another elementary question. I tried the following  
</span><br>
<span class="quotelev1">&gt; steps found
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; in the FAQ section of www.open-mpi.org with a simple hello  
</span><br>
<span class="quotelev1">&gt; world
</span><br>
<span class="quotelev3">&gt; &gt; &gt; example
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (with PBS/torque):
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; $ qsub -l nodes=2 my_script.sh
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; my_script.sh is pasted below:
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; ========================
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; #!/bin/sh -l
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; #PBS -N helloTest
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; #PBS -j eo
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; echo `cat $PBS_NODEFILE` # shows two nodes: WN1 WN2
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; cd $PBS_O_WORKDIR
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; /usr/local/bin/mpirun hello
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; ========================
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; When the job is submitted, only one process is ran. When I  
</span><br>
<span class="quotelev1">&gt; add the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -n 2
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; option to the mpirun command,
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; two processes are ran but on one node only.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Do you have a single CPU/core per node?
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Or are they multi-socket/multi-core?
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Check &quot;man mpiexec&quot; for the options that control on which  
</span><br>
<span class="quotelev1">&gt; nodes and
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; slots, etc your program will run.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (&quot;Man mpiexec&quot; will tell you more than I possibly can.)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; The default option is &quot;-byslot&quot;,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; which will use all &quot;slots&quot; (actually cores
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; or CPUs) available on a node before it moves to the next node.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Reading your question and your surprise with the result,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; I would guess what you want is &quot;-bynode&quot; (not the default).
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Also, if you have more than one CPU/core per node,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; you need to put this information in your Torque/PBS &quot;nodes&quot; file
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (and restart your pbs_server daemon).
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Something like this (for 2 CPUs/cores per node):
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; WN1 np=2
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; WN2 np=2
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; I hope this helps,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Gus Correa
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Gustavo Correa
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Note that echo `cat
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; $PBS_NODEFILE` outputs
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; the two nodes I am using: WN1 and WN2.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; The output from ompi_info is shown below:
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; $ ompi_info | grep tm
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; MCA memory: ptmalloc2 (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; MCA ras: tm (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; MCA plm: tm (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Any help on why openMPI/mpirun is using only one PBS node is  
</span><br>
<span class="quotelev1">&gt; very
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; appreciated.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Thanks a lot in advance and sorry for bothering you guys  
</span><br>
<span class="quotelev1">&gt; with my
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; elementary questions!
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; ~Belaid.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Windows Live: Keep your friends up to date with what you do  
</span><br>
<span class="quotelev1">&gt; online.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &lt;<a href="http://go.microsoft.com/?linkid=9691810">http://go.microsoft.com/?linkid=9691810</a>&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Windows Live: Keep your friends up to date with what you do  
</span><br>
<span class="quotelev1">&gt; online.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &lt;<a href="http://go.microsoft.com/?linkid=9691810">http://go.microsoft.com/?linkid=9691810</a>&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; Get a great deal on Windows 7 and see how it works the way you want.  
</span><br>
<span class="quotelev1">&gt; See the Windows 7 offers now.  
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
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11339.php">Belaid MOA: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<li><strong>Previous message:</strong> <a href="11337.php">Belaid MOA: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<li><strong>In reply to:</strong> <a href="11327.php">Belaid MOA: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11340.php">Belaid MOA: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<li><strong>Reply:</strong> <a href="11340.php">Belaid MOA: "Re: [OMPI users] mpirun is using one PBS node only"</a>
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
