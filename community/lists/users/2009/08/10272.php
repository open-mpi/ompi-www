<?
$subject_val = "Re: [OMPI users] torque pbs behaviour...";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 10 17:14:16 2009" -->
<!-- isoreceived="20090810211416" -->
<!-- sent="Mon, 10 Aug 2009 14:14:11 -0700" -->
<!-- isosent="20090810211411" -->
<!-- name="Jody Klymak" -->
<!-- email="jklymak_at_[hidden]" -->
<!-- subject="Re: [OMPI users] torque pbs behaviour..." -->
<!-- id="398F4BF0-7654-4171-B949-2A655D6AA5B1_at_uvic.ca" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A807CAC.5070801_at_ldeo.columbia.edu" -->
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
<strong>From:</strong> Jody Klymak (<em>jklymak_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-10 17:14:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10273.php">Jody Klymak: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Previous message:</strong> <a href="10271.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>In reply to:</strong> <a href="10270.php">Gus Correa: "Re: [OMPI users] torque pbs behaviour..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10275.php">Gus Correa: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Reply:</strong> <a href="10275.php">Gus Correa: "Re: [OMPI users] torque pbs behaviour..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 10, 2009, at  13:01 PM, Gus Correa wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jody
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We don't have Mac OS-X, but Linux, not sure if this applies to you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Did you configure your OpenMPI with Torque support,
</span><br>
<span class="quotelev1">&gt; and pointed to the same library that provides the
</span><br>
<span class="quotelev1">&gt; Torque you are using (--with-tm=/path/to/torque-library-directory)?
</span><br>
<p>Not explicitly. I'll check into that....
<br>
<p><p><span class="quotelev1">&gt; Are you using the right mpirun? (There are so many out there.)
</span><br>
<p>yeah - I use the explicit path and moved the OS X one.
<br>
<p>Thanks!  Jody
<br>
<p><span class="quotelev1">&gt; Gus Correa
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
<span class="quotelev1">&gt; Jody Klymak wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi All,
</span><br>
<span class="quotelev2">&gt;&gt; I've been trying to get torque pbs to work on my OS X 10.5.7  
</span><br>
<span class="quotelev2">&gt;&gt; cluster with openMPI (after finding that Xgrid was pretty flaky  
</span><br>
<span class="quotelev2">&gt;&gt; about connections).  I *think* this is an MPI problem (perhaps via  
</span><br>
<span class="quotelev2">&gt;&gt; operator error!)
</span><br>
<span class="quotelev2">&gt;&gt; If I submit openMPI with:
</span><br>
<span class="quotelev2">&gt;&gt; #PBS -l nodes=2:ppn=8
</span><br>
<span class="quotelev2">&gt;&gt; mpirun MyProg
</span><br>
<span class="quotelev2">&gt;&gt; pbs locks off two of the processors, checked via &quot;pbsnodes -a&quot;, and  
</span><br>
<span class="quotelev2">&gt;&gt; the job output.  But mpirun runs the whole job on the second of the  
</span><br>
<span class="quotelev2">&gt;&gt; two processors.
</span><br>
<span class="quotelev2">&gt;&gt; If I run the same job w/o qsub (i.e. using ssh)
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -n 16 -host xserve01,xserve02 MyProg
</span><br>
<span class="quotelev2">&gt;&gt; it runs fine on all the nodes....
</span><br>
<span class="quotelev2">&gt;&gt; My /var/spool/toque/server_priv/nodes file looks like:
</span><br>
<span class="quotelev2">&gt;&gt; xserve01.local np=8
</span><br>
<span class="quotelev2">&gt;&gt; xserve02.local np=8
</span><br>
<span class="quotelev2">&gt;&gt; Any idea what could be going wrong or how to debu this properly?  
</span><br>
<span class="quotelev2">&gt;&gt; There is nothing suspicious in the server or mom logs.
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for any help,
</span><br>
<span class="quotelev2">&gt;&gt; Jody
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
<p><pre>
--
Jody Klymak
<a href="http://web.uvic.ca/~jklymak/">http://web.uvic.ca/~jklymak/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10273.php">Jody Klymak: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Previous message:</strong> <a href="10271.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>In reply to:</strong> <a href="10270.php">Gus Correa: "Re: [OMPI users] torque pbs behaviour..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10275.php">Gus Correa: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Reply:</strong> <a href="10275.php">Gus Correa: "Re: [OMPI users] torque pbs behaviour..."</a>
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
