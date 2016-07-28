<?
$subject_val = "Re: [OMPI users] torque pbs behaviour...";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 10 18:37:25 2009" -->
<!-- isoreceived="20090810223725" -->
<!-- sent="Mon, 10 Aug 2009 18:37:16 -0400" -->
<!-- isosent="20090810223716" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] torque pbs behaviour..." -->
<!-- id="4A80A11C.6090600_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="464F1A95-C3E0-4FF0-8531-F8F35DD702B8_at_open-mpi.org" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-10 18:37:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10280.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Previous message:</strong> <a href="10278.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>In reply to:</strong> <a href="10278.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10280.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Reply:</strong> <a href="10280.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you for the correction, Ralph.
<br>
I didn't know there was a (wise) default for the
<br>
number of processes when using Torque-enabled OpenMPI.
<br>
<p>Gus Correa
<br>
<p>Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Just to correct something said here.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You need to tell mpirun how many processes to launch,
</span><br>
<span class="quotelev2">&gt;&gt; regardless of whether you are using Torque or not.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is not correct. If you don't tell mpirun how many processes to 
</span><br>
<span class="quotelev1">&gt; launch, we will automatically launch one process for every slot in your 
</span><br>
<span class="quotelev1">&gt; allocation. In the case described here, there were 16 slots allocated, 
</span><br>
<span class="quotelev1">&gt; so we would automatically launch 16 processes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 10, 2009, at 3:47 PM, Gus Correa wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Jody, list
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; See comments inline.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jody Klymak wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Aug 10, 2009, at  13:01 PM, Gus Correa wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Jody
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; We don't have Mac OS-X, but Linux, not sure if this applies to you.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Did you configure your OpenMPI with Torque support,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and pointed to the same library that provides the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Torque you are using (--with-tm=/path/to/torque-library-directory)?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Not explicitly. I'll check into that....
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1) If you don't do it explicitly, configure will use the first libtorque
</span><br>
<span class="quotelev2">&gt;&gt; it finds (and that works I presume),
</span><br>
<span class="quotelev2">&gt;&gt; which may/may not be the one you want, if you have more than one.
</span><br>
<span class="quotelev2">&gt;&gt; If you only have one version of Torque installed,
</span><br>
<span class="quotelev2">&gt;&gt; this shouldn't be the problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2) Have you tried something very simple, like the examples/hello_c.c
</span><br>
<span class="quotelev2">&gt;&gt; program, to test the Torque-OpenMPI integration?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 3) Also, just in case, put a &quot;cat $PBS_NODEFILE&quot; inside your script,
</span><br>
<span class="quotelev2">&gt;&gt; before mpirun, to see what it reports.
</span><br>
<span class="quotelev2">&gt;&gt; For  &quot;#PBS -l nodes=2:ppn=8&quot;
</span><br>
<span class="quotelev2">&gt;&gt; it should show 16 lines, 8 with the name of each node.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 4) Finally, just to make sure the syntax is right.
</span><br>
<span class="quotelev2">&gt;&gt; On your message you wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; If I submit openMPI with:
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; #PBS -l nodes=2:ppn=8
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; mpirun MyProg
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is this the real syntax you used?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Or was it perhaps:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #PBS -l nodes=2:ppn=8
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -n 16 MyProg
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You need to tell mpirun how many processes to launch,
</span><br>
<span class="quotelev2">&gt;&gt; regardless of whether you are using Torque or not.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My $0.02
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev4">&gt;&gt;&gt;&gt; Are you using the right mpirun? (There are so many out there.)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; yeah - I use the explicit path and moved the OS X one.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks!  Jody
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Gus Correa
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Gustavo Correa
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jody Klymak wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi All,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I've been trying to get torque pbs to work on my OS X 10.5.7 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cluster with openMPI (after finding that Xgrid was pretty flaky 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; about connections).  I *think* this is an MPI problem (perhaps via 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; operator error!)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; If I submit openMPI with:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #PBS -l nodes=2:ppn=8
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpirun MyProg
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; pbs locks off two of the processors, checked via &quot;pbsnodes -a&quot;, and 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the job output.  But mpirun runs the whole job on the second of the 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; two processors.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; If I run the same job w/o qsub (i.e. using ssh)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpirun -n 16 -host xserve01,xserve02 MyProg
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; it runs fine on all the nodes....
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; My /var/spool/toque/server_priv/nodes file looks like:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; xserve01.local np=8
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; xserve02.local np=8
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Any idea what could be going wrong or how to debu this properly? 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; There is nothing suspicious in the server or mom logs.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks for any help,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Jody
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Jody Klymak
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://web.uvic.ca/~jklymak/">http://web.uvic.ca/~jklymak/</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jody Klymak
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://web.uvic.ca/~jklymak/">http://web.uvic.ca/~jklymak/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="10280.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Previous message:</strong> <a href="10278.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>In reply to:</strong> <a href="10278.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10280.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Reply:</strong> <a href="10280.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
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
