<?
$subject_val = "Re: [OMPI users] default current working directory of started application";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 16 10:41:24 2009" -->
<!-- isoreceived="20090416144124" -->
<!-- sent="Thu, 16 Apr 2009 08:41:14 -0600" -->
<!-- isosent="20090416144114" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] default current working directory of started application" -->
<!-- id="451E6320-D4E4-4BE2-81E1-74F6F6DB2AF6_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49E73F7D.7050901_at_mailsnare.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] default current working directory of started application<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-16 10:41:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8951.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn and oreted"</a>
<li><strong>Previous message:</strong> <a href="8949.php">Jerome BENOIT: "Re: [OMPI users] default current working directory of started application"</a>
<li><strong>In reply to:</strong> <a href="8949.php">Jerome BENOIT: "Re: [OMPI users] default current working directory of started application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8953.php">Jerome BENOIT: "Re: [OMPI users] default current working directory of started application"</a>
<li><strong>Reply:</strong> <a href="8953.php">Jerome BENOIT: "Re: [OMPI users] default current working directory of started application"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmmm....okay, I can see that. Are you looking for an mca param that  
<br>
specifies a file that might contain config info we should read when  
<br>
starting up the orted? What would this local configuration file look  
<br>
like (e.g., what kind of config directives would you need/want), would  
<br>
you provide it on the node where mpirun is or would it be on every  
<br>
remote node, etc?
<br>
<p>All things are doable - the devil is in defining the details. :-)
<br>
<p>On Apr 16, 2009, at 8:23 AM, Jerome BENOIT wrote:
<br>
<p><span class="quotelev1">&gt; Hi !
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks for the reply.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On a homeless workers cluster when the workers programs are spawned  
</span><br>
<span class="quotelev1">&gt; via MPI_Comm_spaw{,multiple},
</span><br>
<span class="quotelev1">&gt; it would be nice to set up a default alternative assumed current  
</span><br>
<span class="quotelev1">&gt; which is local (rather than global
</span><br>
<span class="quotelev1">&gt; as $HOME) via a local configuration file: you can play with the wdir  
</span><br>
<span class="quotelev1">&gt; in MPI_Info only
</span><br>
<span class="quotelev1">&gt; if the cluster is homogeneous enough.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hth,
</span><br>
<span class="quotelev1">&gt; Jerome
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Not currently - could be done if there is a strong enough reason to  
</span><br>
<span class="quotelev2">&gt;&gt; do so. Generally, though, the -wdir option seems to do the same  
</span><br>
<span class="quotelev2">&gt;&gt; thing. Is there a problem with it, or some need it doesn't satisfy?
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 15, 2009, at 11:00 PM, Jerome BENOIT wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello List,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in FAQ Running MPI jobs, point 12, we read:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -wdir &lt;directory&gt;: Set the working directory of the started  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; applications.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If not supplied, the current working directory is assumed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (or $HOME, if the current working directory does not exist on all  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nodes).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is there a way to configure the default alternative assumed  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; current directory (here $HOME) ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks in advance,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jerome
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="8951.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn and oreted"</a>
<li><strong>Previous message:</strong> <a href="8949.php">Jerome BENOIT: "Re: [OMPI users] default current working directory of started application"</a>
<li><strong>In reply to:</strong> <a href="8949.php">Jerome BENOIT: "Re: [OMPI users] default current working directory of started application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8953.php">Jerome BENOIT: "Re: [OMPI users] default current working directory of started application"</a>
<li><strong>Reply:</strong> <a href="8953.php">Jerome BENOIT: "Re: [OMPI users] default current working directory of started application"</a>
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
