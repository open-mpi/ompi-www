<?
$subject_val = "Re: [OMPI users] default current working directory of started application";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 16 11:17:26 2009" -->
<!-- isoreceived="20090416151726" -->
<!-- sent="Thu, 16 Apr 2009 23:17:16 +0800" -->
<!-- isosent="20090416151716" -->
<!-- name="Jerome BENOIT" -->
<!-- email="ml.jgmbenoit_at_[hidden]" -->
<!-- subject="Re: [OMPI users] default current working directory of started application" -->
<!-- id="49E74BFC.4090004_at_mailsnare.net" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="451E6320-D4E4-4BE2-81E1-74F6F6DB2AF6_at_lanl.gov" -->
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
<strong>From:</strong> Jerome BENOIT (<em>ml.jgmbenoit_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-16 11:17:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8954.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn and oreted"</a>
<li><strong>Previous message:</strong> <a href="8952.php">Jerome BENOIT: "Re: [OMPI users] MPI_Comm_spawn and oreted"</a>
<li><strong>In reply to:</strong> <a href="8950.php">Ralph Castain: "Re: [OMPI users] default current working directory of started application"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Again,
<br>
<p><p><p>Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Hmmmm....okay, I can see that. Are you looking for an mca param that 
</span><br>
<span class="quotelev1">&gt; specifies a file that might contain config info we should read when 
</span><br>
<span class="quotelev1">&gt; starting up the orted? 
</span><br>
<p>an mca param sound appropriate.
<br>
Here, so far I can understand, orted is not involved: on my SLURM cluster, I added as
<br>
regular user in my local `~/.openmpi/mca-params.conf' file the line
<br>
`plm_slurm_args = --chdir=/local/&lt;USERNAME&gt;', where the /local _s are
<br>
local directories. This is for orted part.
<br>
<p>For the wdir of the spawned programs, unless specified through MPI_Info,
<br>
the last assumed default is $HOME: this is the default that should be configurable.
<br>
<p>By the way, it would be nice to be able to use some tokens of the form %T (see sshd_config)
<br>
in the mca-params.conf . For my previous example, with sshd_config convention:
<br>
<p>plm_slurm_args = --chdir=/local/%u
<br>
<p>in the system wide configuration file `/etc/openmpi/openmpi-mca-params.conf' ,
<br>
or something as
<br>
<p>plm_slurm_args = --chdir=$LOCALDIR
<br>
<p>hth,
<br>
Jerome
<br>
<p><p><p><p>What would this local configuration file look 
<br>
<span class="quotelev1">&gt; like (e.g., what kind of config directives would you need/want), would 
</span><br>
<span class="quotelev1">&gt; you provide it on the node where mpirun is or would it be on every 
</span><br>
<span class="quotelev1">&gt; remote node, etc?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; All things are doable - the devil is in defining the details. :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 16, 2009, at 8:23 AM, Jerome BENOIT wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi !
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; thanks for the reply.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On a homeless workers cluster when the workers programs are spawned 
</span><br>
<span class="quotelev2">&gt;&gt; via MPI_Comm_spaw{,multiple},
</span><br>
<span class="quotelev2">&gt;&gt; it would be nice to set up a default alternative assumed current which 
</span><br>
<span class="quotelev2">&gt;&gt; is local (rather than global
</span><br>
<span class="quotelev2">&gt;&gt; as $HOME) via a local configuration file: you can play with the wdir 
</span><br>
<span class="quotelev2">&gt;&gt; in MPI_Info only
</span><br>
<span class="quotelev2">&gt;&gt; if the cluster is homogeneous enough.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; hth,
</span><br>
<span class="quotelev2">&gt;&gt; Jerome
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Not currently - could be done if there is a strong enough reason to 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; do so. Generally, though, the -wdir option seems to do the same 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; thing. Is there a problem with it, or some need it doesn't satisfy?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Apr 15, 2009, at 11:00 PM, Jerome BENOIT wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello List,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; in FAQ Running MPI jobs, point 12, we read:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -wdir &lt;directory&gt;: Set the working directory of the started 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; applications.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If not supplied, the current working directory is assumed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (or $HOME, if the current working directory does not exist on all 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; nodes).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Is there a way to configure the default alternative assumed current 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; directory (here $HOME) ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks in advance,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jerome
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8954.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn and oreted"</a>
<li><strong>Previous message:</strong> <a href="8952.php">Jerome BENOIT: "Re: [OMPI users] MPI_Comm_spawn and oreted"</a>
<li><strong>In reply to:</strong> <a href="8950.php">Ralph Castain: "Re: [OMPI users] default current working directory of started application"</a>
<!-- nextthread="start" -->
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
