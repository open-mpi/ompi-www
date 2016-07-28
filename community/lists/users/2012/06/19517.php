<?
$subject_val = "[OMPI users] An idea about a semi-automatic optimized parallel I/O with Open MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 13 07:40:28 2012" -->
<!-- isoreceived="20120613114028" -->
<!-- sent="Wed, 13 Jun 2012 13:40:23 +0200 (CEST)" -->
<!-- isosent="20120613114023" -->
<!-- name="Xuan Wang" -->
<!-- email="xuan.wang_at_[hidden]" -->
<!-- subject="[OMPI users] An idea about a semi-automatic optimized parallel I/O with Open MPI" -->
<!-- id="4160553.40946.1339587623121.JavaMail.root_at_epsilon" -->
<!-- charset="utf-8" -->
<!-- inreplyto="29464028.40943.1339587617453.JavaMail.root_at_epsilon" -->
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
<strong>Subject:</strong> [OMPI users] An idea about a semi-automatic optimized parallel I/O with Open MPI<br>
<strong>From:</strong> Xuan Wang (<em>xuan.wang_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-13 07:40:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19518.php">Ralph Castain: "Re: [OMPI users] An idea about a semi-automatic optimized parallel I/O with Open MPI"</a>
<li><strong>Previous message:</strong> <a href="19516.php">Shiqing Fan: "Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19518.php">Ralph Castain: "Re: [OMPI users] An idea about a semi-automatic optimized parallel I/O with Open MPI"</a>
<li><strong>Reply:</strong> <a href="19518.php">Ralph Castain: "Re: [OMPI users] An idea about a semi-automatic optimized parallel I/O with Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have an idea about using database to support a kind of semi-automatic optimized parallel I/O operations and want to know if it is realizable or not. Hope you guys can give me more advices and point out the shortage of the idea. Thank you all.
<br>
<p>As the performance of the parallel I/O depends on the parallel I/O algorithm, the file storage in file system, the number of processes used for I/O and so on, we can use the MPI hints to control the parameters manually. But sometime, the client or the people who call the I/O operation don&#226;&#128;&#153;t know which parameters are the best.
<br>
<p>Therefore, we think about using the data warehouse and an I/O monitor to realize the optimization phase. Please take a look at the attached picture first.
<br>
<p>Process explanations:
<br>
1. The client sends the I/O commends with hints (optional) to deamon. The select model will decide if it is necessary to call the I/O database in order to get the optimized I/O operation strategy.
<br>
2. If yes, the select model sends the I/O commends with those parameters, which can be used to choose the optimized I/O algorithm, to the knowledge base or database.
<br>
3 &amp; 4. The select model gets the optimized algorithm and runs the I/O operation.
<br>
5 &amp; 6. During the I/O operation, the monitor will gather the performance related information and sends it to the data warehouse, which is used to analyze the performance of the optimized algorithm and support the semi-automatic optimization.
<br>
<p>These are the basic thought about the whole process. Please be free to ask any details about this system/concept. I will try my best to explain it.
<br>
<p>I am happy if someone can take part in the discussion.
<br>
<p>Thanks!
<br>
<p>Best Regards!
<br>
Xuan Wang
<br>

<br><hr>
<img src="http://www.open-mpi.org/community/lists/users/att-19517/1.PNG" alt="1.PNG">
<!-- attachment="1.PNG" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19518.php">Ralph Castain: "Re: [OMPI users] An idea about a semi-automatic optimized parallel I/O with Open MPI"</a>
<li><strong>Previous message:</strong> <a href="19516.php">Shiqing Fan: "Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19518.php">Ralph Castain: "Re: [OMPI users] An idea about a semi-automatic optimized parallel I/O with Open MPI"</a>
<li><strong>Reply:</strong> <a href="19518.php">Ralph Castain: "Re: [OMPI users] An idea about a semi-automatic optimized parallel I/O with Open MPI"</a>
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
