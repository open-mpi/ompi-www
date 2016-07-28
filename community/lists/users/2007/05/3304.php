<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon May 21 02:55:07 2007" -->
<!-- isoreceived="20070521065507" -->
<!-- sent="Mon, 21 May 2007 08:55:03 +0200" -->
<!-- isosent="20070521065503" -->
<!-- name="G&#246;tz Waschk" -->
<!-- email="goetz.waschk_at_[hidden]" -->
<!-- subject="[OMPI users] Gridengine integration problems" -->
<!-- id="5711d990705202355k24884c33mac92a1a1632600bc_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> G&#246;tz Waschk (<em>goetz.waschk_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-21 02:55:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3305.php">Pak Lui: "Re: [OMPI users] Gridengine integration problems"</a>
<li><strong>Previous message:</strong> <a href="3303.php">Michael Alexander: "[OMPI users] Call for Book Chapters: Process Algebra/Algebraic Languages and Parallel Processing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3305.php">Pak Lui: "Re: [OMPI users] Gridengine integration problems"</a>
<li><strong>Reply:</strong> <a href="3305.php">Pak Lui: "Re: [OMPI users] Gridengine integration problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello everyone,
<br>
<p>I have trouble with the Gridengine integration of openmpi. When I run
<br>
a job with only 4 processes, it runs fine. With more processes, mpirun
<br>
sometimes fails to connect to the remote nodes, the qrsh calls fail.
<br>
<p>I'll attach a job script and the error output. As you can see from the
<br>
'for' loop, I can connect to all nodes just fine, it is the qrsh
<br>
executed by mpirun that fails. Qrsh was configured to run ssh with
<br>
kerberos authentification (ssh -tt -o GSSAPIDelegateCredentials=no).
<br>
<p>My versions are openmpi 1.2.2, SGE 6.0u9, RHEL5. Any idea where the
<br>
problem could be?
<br>
<p>Regards, G&#246;tz Waschk
<br>
<p><pre>
-- 
AL I:40: Do what thou wilt shall be the whole of the Law.



</pre>
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3304/openmpi.job">openmpi.job</a>
</ul>
<!-- attachment="openmpi.job" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3304/openmpi.job.e6205663">openmpi.job.e6205663</a>
</ul>
<!-- attachment="openmpi.job.e6205663" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3304/openmpi.job.o6205663">openmpi.job.o6205663</a>
</ul>
<!-- attachment="openmpi.job.o6205663" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3305.php">Pak Lui: "Re: [OMPI users] Gridengine integration problems"</a>
<li><strong>Previous message:</strong> <a href="3303.php">Michael Alexander: "[OMPI users] Call for Book Chapters: Process Algebra/Algebraic Languages and Parallel Processing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3305.php">Pak Lui: "Re: [OMPI users] Gridengine integration problems"</a>
<li><strong>Reply:</strong> <a href="3305.php">Pak Lui: "Re: [OMPI users] Gridengine integration problems"</a>
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
