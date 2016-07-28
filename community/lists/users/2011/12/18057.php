<?
$subject_val = "Re: [OMPI users] Openmpi performance issue";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 27 08:35:13 2011" -->
<!-- isoreceived="20111227133513" -->
<!-- sent="Tue, 27 Dec 2011 05:35:08 -0800 (PST)" -->
<!-- isosent="20111227133508" -->
<!-- name="Eric Feng" -->
<!-- email="hpc_benchmark_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Openmpi performance issue" -->
<!-- id="1324992908.963.YahooMailNeo_at_web124707.mail.ne1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1324645929.52107.YahooMailNeo_at_web124706.mail.ne1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Openmpi performance issue<br>
<strong>From:</strong> Eric Feng (<em>hpc_benchmark_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-27 08:35:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18058.php">Eric Feng: "Re: [OMPI users] Openmpi performance issue"</a>
<li><strong>Previous message:</strong> <a href="18056.php">&#208;&#174;&#208;&#187;&#208;&#190;&#208;&#178;, &#208;&#148;&#208;&#188;&#208;&#184;&#209;&#130;&#209;&#128;&#208;&#184;&#208;&#185;: "[OMPI users] Request access to ompi-tests directory into svn"</a>
<li><strong>In reply to:</strong> <a href="18047.php">Eric Feng: "[OMPI users] Openmpi performance issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18059.php">Ralph Castain: "Re: [OMPI users] Openmpi performance issue"</a>
<li><strong>Reply:</strong> <a href="18059.php">Ralph Castain: "Re: [OMPI users] Openmpi performance issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can anyone help me?
I got similar performance issue when comparing to mvapich2 which is much faster in each MPI function in real application but similar in IMB benchmark.


________________________________
 From: Eric Feng &lt;hpc_benchmark_at_[hidden]&gt;
To: &quot;users_at_[hidden]&quot; &lt;users_at_[hidden]&gt; 
Sent: Friday, December 23, 2011 9:12 PM
Subject: [OMPI users] Openmpi performance issue
 

Hello,&#160;

I am running into performance issue with Open MPI, I wish experts here can provide me some help,

I have one application calls a lot of sendrecv, and isend/irecv, so waitall. When I run Intel MPI, it is around 30% faster than OpenMPI.
However if i test sendrecv using IMB, OpenMPI is even faster than Intel MPI, but when run with real application, Open MPI is much slower than Intel MPI in all MPI functions by looking at profiling results. So this is not some function issue, it has a overall drawback somewhere. Can anyone give me some suggestions of where to tune to make it run faster with real application?



Thanks
Eric

_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18057/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18058.php">Eric Feng: "Re: [OMPI users] Openmpi performance issue"</a>
<li><strong>Previous message:</strong> <a href="18056.php">&#208;&#174;&#208;&#187;&#208;&#190;&#208;&#178;, &#208;&#148;&#208;&#188;&#208;&#184;&#209;&#130;&#209;&#128;&#208;&#184;&#208;&#185;: "[OMPI users] Request access to ompi-tests directory into svn"</a>
<li><strong>In reply to:</strong> <a href="18047.php">Eric Feng: "[OMPI users] Openmpi performance issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18059.php">Ralph Castain: "Re: [OMPI users] Openmpi performance issue"</a>
<li><strong>Reply:</strong> <a href="18059.php">Ralph Castain: "Re: [OMPI users] Openmpi performance issue"</a>
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
