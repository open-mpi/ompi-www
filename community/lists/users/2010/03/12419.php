<?
$subject_val = "[OMPI users] Non-root install; hang there running on multiple nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 24 16:28:53 2010" -->
<!-- isoreceived="20100324202853" -->
<!-- sent="Thu, 25 Mar 2010 04:28:42 +0800 (CST)" -->
<!-- isosent="20100324202842" -->
<!-- name="haoanyi" -->
<!-- email="haoanyi_at_[hidden]" -->
<!-- subject="[OMPI users] Non-root install; hang there running on multiple nodes" -->
<!-- id="1bf2c0d.2c4.12791dcdb38.Coremail.haoanyi_at_163.com" -->
<!-- charset="gbk" -->
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
<strong>Subject:</strong> [OMPI users] Non-root install; hang there running on multiple nodes<br>
<strong>From:</strong> haoanyi (<em>haoanyi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-24 16:28:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12420.php">Jeff Squyres: "Re: [OMPI users] Non-root install; hang there running on multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="12418.php">Jeff Squyres: "Re: [OMPI users] error depends on the number of processors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12420.php">Jeff Squyres: "Re: [OMPI users] Non-root install; hang there running on multiple nodes"</a>
<li><strong>Reply:</strong> <a href="12420.php">Jeff Squyres: "Re: [OMPI users] Non-root install; hang there running on multiple nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, 
<br>
<p>I installed OpenMPI1.4.1 as a non-root user on a cluster. It is totally OK when I run with mpirun or mpiexec on one single node for many processes. However, when I lauch many processes on multiple nodes, I can observe jobs are distributed to those nodes (by using &quot;top&quot;), but all the jobs just hang there and cannot finish.
<br>
<p>I think the nodes use TCP to communicate with each other. This cluster also provides MPICH2, which was configured by the sys admin., and has no problem to do node communication in MPICH2. Besides, I read from some posts, which says this may be caused by TCP firewall. Since I have no root's right, and I don't know what shall request the admin. to do to fix this problem. So, can you tell me how to do that either by the admin root or by the non-root user (if possible)?
<br>
<p>Thank you very much.
<br>
Hao
<br>
<p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12419/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12420.php">Jeff Squyres: "Re: [OMPI users] Non-root install; hang there running on multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="12418.php">Jeff Squyres: "Re: [OMPI users] error depends on the number of processors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12420.php">Jeff Squyres: "Re: [OMPI users] Non-root install; hang there running on multiple nodes"</a>
<li><strong>Reply:</strong> <a href="12420.php">Jeff Squyres: "Re: [OMPI users] Non-root install; hang there running on multiple nodes"</a>
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
