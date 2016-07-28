<?
$subject_val = "[OMPI users] OpenMPI: How many connections?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 24 17:34:51 2012" -->
<!-- isoreceived="20120124223451" -->
<!-- sent="Tue, 24 Jan 2012 22:34:46 +0000 (GMT)" -->
<!-- isosent="20120124223446" -->
<!-- name="devendra rai" -->
<!-- email="dev641_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI: How many connections?" -->
<!-- id="1327444486.27788.YahooMailNeo_at_web29601.mail.ird.yahoo.com" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI: How many connections?<br>
<strong>From:</strong> devendra rai (<em>dev641_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-24 17:34:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18262.php">Mateus Augusto: "[OMPI users] Are the Messages delivered in order in the MPI?"</a>
<li><strong>Previous message:</strong> <a href="18260.php">Temesghen Kahsai: "[OMPI users] Openmpi in Mingw"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18285.php">Jeff Squyres: "Re: [OMPI users] OpenMPI: How many connections?"</a>
<li><strong>Reply:</strong> <a href="18285.php">Jeff Squyres: "Re: [OMPI users] OpenMPI: How many connections?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello All,

I am trying to find out how many separate connections are opened by MPI as messages are sent. Basically, I have threaded-MPI calls to a bunch of different MPI processes (who, in turn have threaded MPI calls). 


The point is, with every thread added, are new ports opened (even if the sender-receiver pairs already have a connection between them)?

Is there any way to find out? I went through MPI APIs, and the closest thing I found was related to cartographic information. This is not sufficient, since this only tells me the logical connections (or does it)?

Reading Open MPI FAQ, I thought adding &quot;--mca btl self,sm,tcp --mca btl_base_verbose 30 -display-map&quot; to mpirun would help. But I am not getting what I need. Basically, I want to know how many ports each process is accessing (reading as well as writing). 


Basically, at the heart of it, is the scalability of our application. 


Well, I think there must be plenty of people who would have dealt with the same question.

Opening up sniffers may not be possible for me, since I am expected to run MPI applications on a cluster, where I do not have privileges.


Does anyone know where to look?

Best

Devendra Rai

<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18261/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18262.php">Mateus Augusto: "[OMPI users] Are the Messages delivered in order in the MPI?"</a>
<li><strong>Previous message:</strong> <a href="18260.php">Temesghen Kahsai: "[OMPI users] Openmpi in Mingw"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18285.php">Jeff Squyres: "Re: [OMPI users] OpenMPI: How many connections?"</a>
<li><strong>Reply:</strong> <a href="18285.php">Jeff Squyres: "Re: [OMPI users] OpenMPI: How many connections?"</a>
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
