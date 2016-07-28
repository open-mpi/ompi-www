<?
$subject_val = "Re: [OMPI users] Heterogeneous cluster problem - mixing AMD and Intel nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar  2 17:39:31 2014" -->
<!-- isoreceived="20140302223931" -->
<!-- sent="Mon, 3 Mar 2014 06:39:30 +0800" -->
<!-- isosent="20140302223930" -->
<!-- name="Victor" -->
<!-- email="victor.major_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Heterogeneous cluster problem - mixing AMD and Intel nodes" -->
<!-- id="CAJTHAucT01zNaxJaw-GZBO1+-QiUQCyBcpK3i5T77GhDZ0qMVw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI users] Heterogeneous cluster problem - mixing AMD and Intel nodes" -->
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
<strong>Subject:</strong> Re: [OMPI users] Heterogeneous cluster problem - mixing AMD and Intel nodes<br>
<strong>From:</strong> Victor (<em>victor.major_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-02 17:39:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23743.php">Reuti: "Re: [OMPI users] Heterogeneous cluster problem - mixing AMD and Intel nodes"</a>
<li><strong>Previous message:</strong> <a href="23741.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI job initializing problem"</a>
<li><strong>Maybe in reply to:</strong> <a href="23733.php">Victor: "[OMPI users] Heterogeneous cluster problem - mixing AMD and Intel nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23743.php">Reuti: "Re: [OMPI users] Heterogeneous cluster problem - mixing AMD and Intel nodes"</a>
<li><strong>Reply:</strong> <a href="23743.php">Reuti: "Re: [OMPI users] Heterogeneous cluster problem - mixing AMD and Intel nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for your reply. There are some updates, but it was too late last
<br>
night to post it.
<br>
<p>I now have the AMD/Intel heterogeneous cluster up and running. The initial
<br>
problem was that when I installed OpenMPI on the AMD nodes, the library
<br>
paths were set to a different location than on the Intel nodes. I am not
<br>
sure why.
<br>
<p>In any case I then followed the suggestion from the FAQ and instead shared
<br>
the same OpenMPI install directory with all the nodes via NFS. Now the job
<br>
is running so I can confirm that it is indeed possible to run the same job
<br>
on a heterogeneous cluster comprised of AMD and Intel nodes.
<br>
<p>I am using OpenMPI 1.7.4 now.
<br>
<p>There is a related problem though. I am sharing /opt/openmpi-1.7.4 via NFS
<br>
but there does not seem to be a way to tell the nodes where OpenMPI is
<br>
located when using non-interactive SSH (using secure key login). SSH does
<br>
not seem to parse .bash_profile so I do not know how to tell the jobs on
<br>
the nodes where to find OpenMPI except by starting the job with
<br>
/opt/openmpi-1.7.4/bin/mpirun.
<br>
<p>Regarding open-mx, yes I will look into that next to see if the job is
<br>
indeed using it. My msa flag is --mca mx self
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23742/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23743.php">Reuti: "Re: [OMPI users] Heterogeneous cluster problem - mixing AMD and Intel nodes"</a>
<li><strong>Previous message:</strong> <a href="23741.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI job initializing problem"</a>
<li><strong>Maybe in reply to:</strong> <a href="23733.php">Victor: "[OMPI users] Heterogeneous cluster problem - mixing AMD and Intel nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23743.php">Reuti: "Re: [OMPI users] Heterogeneous cluster problem - mixing AMD and Intel nodes"</a>
<li><strong>Reply:</strong> <a href="23743.php">Reuti: "Re: [OMPI users] Heterogeneous cluster problem - mixing AMD and Intel nodes"</a>
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
