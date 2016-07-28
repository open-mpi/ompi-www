<?
$subject_val = "Re: [OMPI users] torque pbs behaviour...";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 10 18:30:43 2009" -->
<!-- isoreceived="20090810223043" -->
<!-- sent="Mon, 10 Aug 2009 16:30:30 -0600" -->
<!-- isosent="20090810223030" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] torque pbs behaviour..." -->
<!-- id="464F1A95-C3E0-4FF0-8531-F8F35DD702B8_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A80958E.1070900_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] torque pbs behaviour...<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-10 18:30:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10279.php">Gus Correa: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Previous message:</strong> <a href="10277.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>In reply to:</strong> <a href="10275.php">Gus Correa: "Re: [OMPI users] torque pbs behaviour..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10279.php">Gus Correa: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Reply:</strong> <a href="10279.php">Gus Correa: "Re: [OMPI users] torque pbs behaviour..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just to correct something said here.
<br>
<p><span class="quotelev1">&gt; You need to tell mpirun how many processes to launch,
</span><br>
<span class="quotelev1">&gt; regardless of whether you are using Torque or not.
</span><br>
<p>This is not correct. If you don't tell mpirun how many processes to  
<br>
launch, we will automatically launch one process for every slot in  
<br>
your allocation. In the case described here, there were 16 slots  
<br>
allocated, so we would automatically launch 16 processes.
<br>
<p>Ralph
<br>
<p><p><p>On Aug 10, 2009, at 3:47 PM, Gus Correa wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jody, list
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; See comments inline.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jody Klymak wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 10, 2009, at  13:01 PM, Gus Correa wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Jody
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We don't have Mac OS-X, but Linux, not sure if this applies to you.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Did you configure your OpenMPI with Torque support,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and pointed to the same library that provides the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Torque you are using (--with-tm=/path/to/torque-library-directory)?
</span><br>
<span class="quotelev2">&gt;&gt; Not explicitly. I'll check into that....
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) If you don't do it explicitly, configure will use the first  
</span><br>
<span class="quotelev1">&gt; libtorque
</span><br>
<span class="quotelev1">&gt; it finds (and that works I presume),
</span><br>
<span class="quotelev1">&gt; which may/may not be the one you want, if you have more than one.
</span><br>
<span class="quotelev1">&gt; If you only have one version of Torque installed,
</span><br>
<span class="quotelev1">&gt; this shouldn't be the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2) Have you tried something very simple, like the examples/hello_c.c
</span><br>
<span class="quotelev1">&gt; program, to test the Torque-OpenMPI integration?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3) Also, just in case, put a &quot;cat $PBS_NODEFILE&quot; inside your script,
</span><br>
<span class="quotelev1">&gt; before mpirun, to see what it reports.
</span><br>
<span class="quotelev1">&gt; For  &quot;#PBS -l nodes=2:ppn=8&quot;
</span><br>
<span class="quotelev1">&gt; it should show 16 lines, 8 with the name of each node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 4) Finally, just to make sure the syntax is right.
</span><br>
<span class="quotelev1">&gt; On your message you wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; If I submit openMPI with:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; #PBS -l nodes=2:ppn=8
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; mpirun MyProg
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is this the real syntax you used?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Or was it perhaps:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #PBS -l nodes=2:ppn=8
</span><br>
<span class="quotelev1">&gt; mpirun -n 16 MyProg
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You need to tell mpirun how many processes to launch,
</span><br>
<span class="quotelev1">&gt; regardless of whether you are using Torque or not.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My $0.02
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev3">&gt;&gt;&gt; Are you using the right mpirun? (There are so many out there.)
</span><br>
<span class="quotelev2">&gt;&gt; yeah - I use the explicit path and moved the OS X one.
</span><br>
<span class="quotelev2">&gt;&gt; Thanks!  Jody
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gus Correa
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gustavo Correa
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jody Klymak wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi All,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I've been trying to get torque pbs to work on my OS X 10.5.7  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; cluster with openMPI (after finding that Xgrid was pretty flaky  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; about connections).  I *think* this is an MPI problem (perhaps  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; via operator error!)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If I submit openMPI with:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #PBS -l nodes=2:ppn=8
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun MyProg
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; pbs locks off two of the processors, checked via &quot;pbsnodes -a&quot;,  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and the job output.  But mpirun runs the whole job on the second  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; of the two processors.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If I run the same job w/o qsub (i.e. using ssh)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun -n 16 -host xserve01,xserve02 MyProg
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; it runs fine on all the nodes....
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; My /var/spool/toque/server_priv/nodes file looks like:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; xserve01.local np=8
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; xserve02.local np=8
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Any idea what could be going wrong or how to debu this properly?  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; There is nothing suspicious in the server or mom logs.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks for any help,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jody
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jody Klymak
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://web.uvic.ca/~jklymak/">http://web.uvic.ca/~jklymak/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jody Klymak
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://web.uvic.ca/~jklymak/">http://web.uvic.ca/~jklymak/</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10279.php">Gus Correa: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Previous message:</strong> <a href="10277.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>In reply to:</strong> <a href="10275.php">Gus Correa: "Re: [OMPI users] torque pbs behaviour..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10279.php">Gus Correa: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Reply:</strong> <a href="10279.php">Gus Correa: "Re: [OMPI users] torque pbs behaviour..."</a>
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
