<?
$subject_val = "Re: [OMPI users] torque pbs behaviour...";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 10 17:48:07 2009" -->
<!-- isoreceived="20090810214807" -->
<!-- sent="Mon, 10 Aug 2009 17:47:58 -0400" -->
<!-- isosent="20090810214758" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] torque pbs behaviour..." -->
<!-- id="4A80958E.1070900_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="398F4BF0-7654-4171-B949-2A655D6AA5B1_at_uvic.ca" -->
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
<strong>Date:</strong> 2009-08-10 17:47:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10276.php">Jody Klymak: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Previous message:</strong> <a href="10274.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>In reply to:</strong> <a href="10272.php">Jody Klymak: "Re: [OMPI users] torque pbs behaviour..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10278.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Reply:</strong> <a href="10278.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jody, list
<br>
<p>See comments inline.
<br>
<p>Jody Klymak wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 10, 2009, at  13:01 PM, Gus Correa wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Jody
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We don't have Mac OS-X, but Linux, not sure if this applies to you.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Did you configure your OpenMPI with Torque support,
</span><br>
<span class="quotelev2">&gt;&gt; and pointed to the same library that provides the
</span><br>
<span class="quotelev2">&gt;&gt; Torque you are using (--with-tm=/path/to/torque-library-directory)?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Not explicitly. I'll check into that....
</span><br>
<p><p>1) If you don't do it explicitly, configure will use the first libtorque
<br>
it finds (and that works I presume),
<br>
which may/may not be the one you want, if you have more than one.
<br>
If you only have one version of Torque installed,
<br>
this shouldn't be the problem.
<br>
<p>2) Have you tried something very simple, like the examples/hello_c.c
<br>
program, to test the Torque-OpenMPI integration?
<br>
<p>3) Also, just in case, put a &quot;cat $PBS_NODEFILE&quot; inside your script,
<br>
before mpirun, to see what it reports.
<br>
For  &quot;#PBS -l nodes=2:ppn=8&quot;
<br>
it should show 16 lines, 8 with the name of each node.
<br>
<p>4) Finally, just to make sure the syntax is right.
<br>
On your message you wrote:
<br>
<p><span class="quotelev3"> &gt;&gt;&gt; If I submit openMPI with:
</span><br>
<span class="quotelev3"> &gt;&gt;&gt; #PBS -l nodes=2:ppn=8
</span><br>
<span class="quotelev3"> &gt;&gt;&gt; mpirun MyProg
</span><br>
<p>Is this the real syntax you used?
<br>
<p>Or was it perhaps:
<br>
<p>#PBS -l nodes=2:ppn=8
<br>
mpirun -n 16 MyProg
<br>
<p>You need to tell mpirun how many processes to launch,
<br>
regardless of whether you are using Torque or not.
<br>
<p>My $0.02
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
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Are you using the right mpirun? (There are so many out there.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; yeah - I use the explicit path and moved the OS X one.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks!  Jody
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev2">&gt;&gt; Jody Klymak wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi All,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've been trying to get torque pbs to work on my OS X 10.5.7 cluster 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with openMPI (after finding that Xgrid was pretty flaky about 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; connections).  I *think* this is an MPI problem (perhaps via operator 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; error!)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If I submit openMPI with:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #PBS -l nodes=2:ppn=8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun MyProg
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pbs locks off two of the processors, checked via &quot;pbsnodes -a&quot;, and 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the job output.  But mpirun runs the whole job on the second of the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; two processors.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If I run the same job w/o qsub (i.e. using ssh)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -n 16 -host xserve01,xserve02 MyProg
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it runs fine on all the nodes....
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My /var/spool/toque/server_priv/nodes file looks like:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; xserve01.local np=8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; xserve02.local np=8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any idea what could be going wrong or how to debu this properly? 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There is nothing suspicious in the server or mom logs.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for any help,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jody
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
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jody Klymak
</span><br>
<span class="quotelev1">&gt; <a href="http://web.uvic.ca/~jklymak/">http://web.uvic.ca/~jklymak/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10276.php">Jody Klymak: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Previous message:</strong> <a href="10274.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>In reply to:</strong> <a href="10272.php">Jody Klymak: "Re: [OMPI users] torque pbs behaviour..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10278.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Reply:</strong> <a href="10278.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
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
