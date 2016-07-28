<?
$subject_val = "Re: [OMPI users] default current working directory of started application";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 16 10:24:05 2009" -->
<!-- isoreceived="20090416142405" -->
<!-- sent="Thu, 16 Apr 2009 22:23:57 +0800" -->
<!-- isosent="20090416142357" -->
<!-- name="Jerome BENOIT" -->
<!-- email="ml.jgmbenoit_at_[hidden]" -->
<!-- subject="Re: [OMPI users] default current working directory of started application" -->
<!-- id="49E73F7D.7050901_at_mailsnare.net" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C4D850F1-3252-4E61-A008-690A5963B7FE_at_lanl.gov" -->
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
<strong>Date:</strong> 2009-04-16 10:23:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8950.php">Ralph Castain: "Re: [OMPI users] default current working directory of started application"</a>
<li><strong>Previous message:</strong> <a href="8948.php">Ralph Castain: "Re: [OMPI users] default current working directory of started application"</a>
<li><strong>In reply to:</strong> <a href="8948.php">Ralph Castain: "Re: [OMPI users] default current working directory of started application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8950.php">Ralph Castain: "Re: [OMPI users] default current working directory of started application"</a>
<li><strong>Reply:</strong> <a href="8950.php">Ralph Castain: "Re: [OMPI users] default current working directory of started application"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi !
<br>
<p>thanks for the reply.
<br>
<p>On a homeless workers cluster when the workers programs are spawned via MPI_Comm_spaw{,multiple},
<br>
it would be nice to set up a default alternative assumed current which is local (rather than global
<br>
as $HOME) via a local configuration file: you can play with the wdir in MPI_Info only
<br>
if the cluster is homogeneous enough.
<br>
<p>hth,
<br>
Jerome
<br>
<p>Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Not currently - could be done if there is a strong enough reason to do 
</span><br>
<span class="quotelev1">&gt; so. Generally, though, the -wdir option seems to do the same thing. Is 
</span><br>
<span class="quotelev1">&gt; there a problem with it, or some need it doesn't satisfy?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 15, 2009, at 11:00 PM, Jerome BENOIT wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hello List,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; in FAQ Running MPI jobs, point 12, we read:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -wdir &lt;directory&gt;: Set the working directory of the started applications.
</span><br>
<span class="quotelev2">&gt;&gt; If not supplied, the current working directory is assumed
</span><br>
<span class="quotelev2">&gt;&gt; (or $HOME, if the current working directory does not exist on all nodes).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there a way to configure the default alternative assumed current 
</span><br>
<span class="quotelev2">&gt;&gt; directory (here $HOME) ?
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance,
</span><br>
<span class="quotelev2">&gt;&gt; Jerome
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
<li><strong>Next message:</strong> <a href="8950.php">Ralph Castain: "Re: [OMPI users] default current working directory of started application"</a>
<li><strong>Previous message:</strong> <a href="8948.php">Ralph Castain: "Re: [OMPI users] default current working directory of started application"</a>
<li><strong>In reply to:</strong> <a href="8948.php">Ralph Castain: "Re: [OMPI users] default current working directory of started application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8950.php">Ralph Castain: "Re: [OMPI users] default current working directory of started application"</a>
<li><strong>Reply:</strong> <a href="8950.php">Ralph Castain: "Re: [OMPI users] default current working directory of started application"</a>
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
