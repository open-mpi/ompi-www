<?
$subject_val = "Re: [OMPI users] Application in a cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 19 17:37:50 2011" -->
<!-- isoreceived="20111019213750" -->
<!-- sent="Wed, 19 Oct 2011 17:37:41 -0400" -->
<!-- isosent="20111019213741" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Application in a cluster" -->
<!-- id="4E9F4325.2060906_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="7B52DD90-4752-40CB-AC44-39DE12819665_at_staff.uni-marburg.de" -->
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
<strong>Date:</strong> 2011-10-19 17:37:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17580.php">Ralph Castain: "Re: [OMPI users] Application in a cluster"</a>
<li><strong>Previous message:</strong> <a href="17578.php">Ralph Castain: "Re: [OMPI users] running osu mpi benchmark tests on Infiniband setup"</a>
<li><strong>In reply to:</strong> <a href="17576.php">Reuti: "Re: [OMPI users] Application in a cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17580.php">Ralph Castain: "Re: [OMPI users] Application in a cluster"</a>
<li><strong>Reply:</strong> <a href="17580.php">Ralph Castain: "Re: [OMPI users] Application in a cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jorge
<br>
<p>Besides what Reuti and Eugene said, in case what you're looking for
<br>
is a mechanism to launch several copies of a
<br>
serial [non-parallel] program in a cluster,
<br>
you could try these alternatives:
<br>
<p>1) Launch several jobs to run the same program,
<br>
using a job scheduler like Torque or Grid Engine.
<br>
<p><a href="http://www.adaptivecomputing.com/resources/docs/torque/">http://www.adaptivecomputing.com/resources/docs/torque/</a>
<br>
<a href="http://www.adaptivecomputing.com/resources/downloads.php">http://www.adaptivecomputing.com/resources/downloads.php</a>
<br>
[Torque may be available through your Linux package manager: yum,
<br>
apt-get, etc.]
<br>
<p><a href="http://gridscheduler.sourceforge.net/">http://gridscheduler.sourceforge.net/</a>
<br>
<p><p>2) Use a distributed/parallel shell like pdsh, tentakel, etc,
<br>
to launch many copies of the serial program:
<br>
<p><a href="http://sourceforge.net/projects/pdsh/">http://sourceforge.net/projects/pdsh/</a>
<br>
<a href="https://computing.llnl.gov/linux/pdsh.html">https://computing.llnl.gov/linux/pdsh.html</a>
<br>
<a href="http://freshmeat.net/projects/tentakel/">http://freshmeat.net/projects/tentakel/</a>
<br>
<p>Some of these items may be already installed in your cluster.
<br>
<p>My two cents.
<br>
Gus Correa
<br>
<p>Reuti wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Am 19.10.2011 um 17:57 schrieb Jorge Jaramillo:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hello everyone, I have a doubt about how to execute a parallel application on a cluster. I used the 'mpirun' to execute some applications and they worked, but I guess this command only is useful with MPI applications.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; correct.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; My question is, How do I execute a program that has no MPI statements on the cluster?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;In the cluster&quot; could also mean &quot;How to submit a job to a cluster, which would then in turn runs local on a granted machine&quot;. But I think you mean this in the context, that you have just a bunch of machines with just MPI installed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If it is not possible, how do I change the structure of the program so it can be executed as a parallel application?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This depends on the application: sometimes you could just parallelize some loops, in some cases you have to change the used algorithm to replace it with one which can easily be parallelized, maybe the data structure needs to be changed and you have to think about how to distribute data to the nodes,...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It might also be, that using Open MP (which works only on one and the same machine) will give you a parallel version faster. <a href="http://openmp.org/wp/">http://openmp.org/wp/</a> Nowadays many compilers support it. Nevertheless you have to touch your application by hand and modify the source.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Reuti
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
<li><strong>Next message:</strong> <a href="17580.php">Ralph Castain: "Re: [OMPI users] Application in a cluster"</a>
<li><strong>Previous message:</strong> <a href="17578.php">Ralph Castain: "Re: [OMPI users] running osu mpi benchmark tests on Infiniband setup"</a>
<li><strong>In reply to:</strong> <a href="17576.php">Reuti: "Re: [OMPI users] Application in a cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17580.php">Ralph Castain: "Re: [OMPI users] Application in a cluster"</a>
<li><strong>Reply:</strong> <a href="17580.php">Ralph Castain: "Re: [OMPI users] Application in a cluster"</a>
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
