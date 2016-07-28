<?
$subject_val = "Re: [OMPI users] Application in a cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 19 18:22:39 2011" -->
<!-- isoreceived="20111019222239" -->
<!-- sent="Wed, 19 Oct 2011 18:22:29 -0400" -->
<!-- isosent="20111019222229" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Application in a cluster" -->
<!-- id="4E9F4DA5.8090106_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="994C4584-0A34-4C8B-BD55-A710E45F6E0C_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Application in a cluster<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-19 18:22:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17582.php">Pedro Gonnet: "[OMPI users] Troubles using MPI_Isend/MPI_Irecv/MPI_Waitany and MPI_Allreduce"</a>
<li><strong>Previous message:</strong> <a href="17580.php">Ralph Castain: "Re: [OMPI users] Application in a cluster"</a>
<li><strong>In reply to:</strong> <a href="17580.php">Ralph Castain: "Re: [OMPI users] Application in a cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17585.php">Jorge Jaramillo: "Re: [OMPI users] Application in a cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Agreed.
<br>
<p>How could I forget to mention mpirun?! :(
<br>
<p>I don't know what Jorge is trying to achieve,
<br>
but with mpirun it is easy to launch multiple copies of
<br>
serial programs, or different serial programs,
<br>
with command line options such as this:
<br>
<p>&nbsp;&nbsp;mpirun -np 1 --host a hostname : -np 2 --host b,c uptime
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Runs one copy of the executable hostname on host a. And 
<br>
runs one copy of the executable uptime on hosts b and c.
<br>
<p>Another alternative is to use the '--app &lt;appfile&gt;' option.
<br>
<p>Jorge may want to check 'man mpiexec'.
<br>
<p>Gus Correa
<br>
<p>Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; If that is what you are trying to do, 
</span><br>
<span class="quotelev1">&gt; mpirun will do it just fine too - 
</span><br>
<span class="quotelev1">&gt; it doesn't have to be an MPI program.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 19, 2011, at 3:37 PM, Gus Correa wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Jorge
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Besides what Reuti and Eugene said, in case what you're looking for
</span><br>
<span class="quotelev2">&gt;&gt; is a mechanism to launch several copies of a
</span><br>
<span class="quotelev2">&gt;&gt; serial [non-parallel] program in a cluster,
</span><br>
<span class="quotelev2">&gt;&gt; you could try these alternatives:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1) Launch several jobs to run the same program,
</span><br>
<span class="quotelev2">&gt;&gt; using a job scheduler like Torque or Grid Engine.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.adaptivecomputing.com/resources/docs/torque/">http://www.adaptivecomputing.com/resources/docs/torque/</a>
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.adaptivecomputing.com/resources/downloads.php">http://www.adaptivecomputing.com/resources/downloads.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; [Torque may be available through your Linux package manager: yum,
</span><br>
<span class="quotelev2">&gt;&gt; apt-get, etc.]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://gridscheduler.sourceforge.net/">http://gridscheduler.sourceforge.net/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2) Use a distributed/parallel shell like pdsh, tentakel, etc,
</span><br>
<span class="quotelev2">&gt;&gt; to launch many copies of the serial program:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://sourceforge.net/projects/pdsh/">http://sourceforge.net/projects/pdsh/</a>
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://computing.llnl.gov/linux/pdsh.html">https://computing.llnl.gov/linux/pdsh.html</a>
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://freshmeat.net/projects/tentakel/">http://freshmeat.net/projects/tentakel/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Some of these items may be already installed in your cluster.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My two cents.
</span><br>
<span class="quotelev2">&gt;&gt; Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Reuti wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Am 19.10.2011 um 17:57 schrieb Jorge Jaramillo:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello everyone, I have a doubt about how to execute a parallel application on a cluster. I used the 'mpirun' to execute some applications and they worked, but I guess this command only is useful with MPI applications.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; correct.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; My question is, How do I execute a program that has no MPI statements on the cluster?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;In the cluster&quot; could also mean &quot;How to submit a job to a cluster, which would then in turn runs local on a granted machine&quot;. But I think you mean this in the context, that you have just a bunch of machines with just MPI installed.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If it is not possible, how do I change the structure of the program so it can be executed as a parallel application?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This depends on the application: sometimes you could just parallelize some loops, in some cases you have to change the used algorithm to replace it with one which can easily be parallelized, maybe the data structure needs to be changed and you have to think about how to distribute data to the nodes,...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It might also be, that using Open MP (which works only on one and the same machine) will give you a parallel version faster. <a href="http://openmp.org/wp/">http://openmp.org/wp/</a> Nowadays many compilers support it. Nevertheless you have to touch your application by hand and modify the source.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- Reuti
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
<li><strong>Next message:</strong> <a href="17582.php">Pedro Gonnet: "[OMPI users] Troubles using MPI_Isend/MPI_Irecv/MPI_Waitany and MPI_Allreduce"</a>
<li><strong>Previous message:</strong> <a href="17580.php">Ralph Castain: "Re: [OMPI users] Application in a cluster"</a>
<li><strong>In reply to:</strong> <a href="17580.php">Ralph Castain: "Re: [OMPI users] Application in a cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17585.php">Jorge Jaramillo: "Re: [OMPI users] Application in a cluster"</a>
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
