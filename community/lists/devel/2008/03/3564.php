<?
$subject_val = "Re: [OMPI devel] running Open-MPI on two PCs";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar 30 21:55:57 2008" -->
<!-- isoreceived="20080331015557" -->
<!-- sent="Sun, 30 Mar 2008 18:55:44 -0700 (PDT)" -->
<!-- isosent="20080331015544" -->
<!-- name="Muhammad Atif" -->
<!-- email="m_atif_s_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] running Open-MPI on two PCs" -->
<!-- id="510226.19632.qm_at_web52112.mail.re2.yahoo.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI devel] running Open-MPI on two PCs" -->
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
<strong>Subject:</strong> Re: [OMPI devel] running Open-MPI on two PCs<br>
<strong>From:</strong> Muhammad Atif (<em>m_atif_s_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-30 21:55:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3565.php">Muhammad Atif: "[OMPI devel] limit tcp fragment size?"</a>
<li><strong>Previous message:</strong> <a href="3563.php">Danesh Daroui: "[OMPI devel] running Open-MPI on two PCs"</a>
<li><strong>Maybe in reply to:</strong> <a href="3563.php">Danesh Daroui: "[OMPI devel] running Open-MPI on two PCs"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
Welcome to OpenMPI. Although I am yet to become an authority in the world of openMPI, I will give you pointers to start.
<br>
I assume that you plan to submit the jobs without any scheduler (e.g Maui/torque combination and stuff) and running the jobs simply by such a command &quot;mpirun -np 2 -host node-00,node-01 uptime&quot;. So to get started in the easiest way is to have openmpi installed on third machine as well. The third machine (lets call it headnode) needs to have mpirun and other related stuff. Please note this is just the basic stuff and for a production cluster you may need other configurations. 
<br>
<p>A very nice and detailed faq section exists at     <a href="http://www.open-mpi.org/faq/?category=running">http://www.open-mpi.org/faq/?category=running</a>. For controlling the CPU's a startup FAQ is &quot;12. How do I control how my processes are scheduled across nodes?&quot;.
<br>
<p>&nbsp;
<br>
Best Regards,
<br>
Muhammad AtifPS: you may want to post user related questions to user list. This way you will get quicker replies as this is developer list.
<br>
<p>----- Original Message ----
<br>
From: Danesh Daroui &lt;Danesh.D_at_[hidden]&gt;
<br>
To: devel_at_[hidden]
<br>
Sent: Monday, March 31, 2008 3:06:06 AM
<br>
Subject: [OMPI devel] running Open-MPI on two PCs
<br>
<p>Hi all,
<br>
<p>I have three linux machines which are connected to each other via a 
<br>
router. I have installed Open-MPI on two of them and they seems to work 
<br>
fine. Now I want to submit a job from my third machine to be
<br>
run on those two machines which have Open-MPI and use two CPUs for this 
<br>
job. Is there any special settings that I should do or any link which 
<br>
can help?
<br>
<p>Regards,
<br>
<p>Danesh
<br>
<p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
<p><p><p><p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;____________________________________________________________________________________
<br>
Never miss a thing.  Make Yahoo your home page. 
<br>
<a href="http://www.yahoo.com/r/hs">http://www.yahoo.com/r/hs</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3564/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3565.php">Muhammad Atif: "[OMPI devel] limit tcp fragment size?"</a>
<li><strong>Previous message:</strong> <a href="3563.php">Danesh Daroui: "[OMPI devel] running Open-MPI on two PCs"</a>
<li><strong>Maybe in reply to:</strong> <a href="3563.php">Danesh Daroui: "[OMPI devel] running Open-MPI on two PCs"</a>
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
