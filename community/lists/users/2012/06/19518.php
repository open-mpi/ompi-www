<?
$subject_val = "Re: [OMPI users] An idea about a semi-automatic optimized parallel I/O with Open MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 13 08:44:38 2012" -->
<!-- isoreceived="20120613124438" -->
<!-- sent="Wed, 13 Jun 2012 06:44:31 -0600" -->
<!-- isosent="20120613124431" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] An idea about a semi-automatic optimized parallel I/O with Open MPI" -->
<!-- id="99AD900A-043D-4ABC-B34B-5B375E0AE6D3_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="4160553.40946.1339587623121.JavaMail.root_at_epsilon" -->
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
<strong>Subject:</strong> Re: [OMPI users] An idea about a semi-automatic optimized parallel I/O with Open MPI<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-13 08:44:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19519.php">Xuan Wang: "Re: [OMPI users] An idea about a semi-automatic optimized parallel	I/O with Open MPI"</a>
<li><strong>Previous message:</strong> <a href="19517.php">Xuan Wang: "[OMPI users] An idea about a semi-automatic optimized parallel I/O with Open MPI"</a>
<li><strong>In reply to:</strong> <a href="19517.php">Xuan Wang: "[OMPI users] An idea about a semi-automatic optimized parallel I/O with Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19519.php">Xuan Wang: "Re: [OMPI users] An idea about a semi-automatic optimized parallel	I/O with Open MPI"</a>
<li><strong>Reply:</strong> <a href="19519.php">Xuan Wang: "Re: [OMPI users] An idea about a semi-automatic optimized parallel	I/O with Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
One flaw in the idea: the daemons are not MPI processes, and therefore have no way to run an MPI I/O operation.
<br>
<p><p>On Jun 13, 2012, at 5:40 AM, Xuan Wang wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have an idea about using database to support a kind of semi-automatic optimized parallel I/O operations and want to know if it is realizable or not. Hope you guys can give me more advices and point out the shortage of the idea. Thank you all.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As the performance of the parallel I/O depends on the parallel I/O algorithm, the file storage in file system, the number of processes used for I/O and so on, we can use the MPI hints to control the parameters manually. But sometime, the client or the people who call the I/O operation don&#146;t know which parameters are the best.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Therefore, we think about using the data warehouse and an I/O monitor to realize the optimization phase. Please take a look at the attached picture first.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Process explanations:
</span><br>
<span class="quotelev1">&gt; 1. The client sends the I/O commends with hints (optional) to deamon. The select model will decide if it is necessary to call the I/O database in order to get the optimized I/O operation strategy.
</span><br>
<span class="quotelev1">&gt; 2. If yes, the select model sends the I/O commends with those parameters, which can be used to choose the optimized I/O algorithm, to the knowledge base or database.
</span><br>
<span class="quotelev1">&gt; 3 &amp; 4. The select model gets the optimized algorithm and runs the I/O operation.
</span><br>
<span class="quotelev1">&gt; 5 &amp; 6. During the I/O operation, the monitor will gather the performance related information and sends it to the data warehouse, which is used to analyze the performance of the optimized algorithm and support the semi-automatic optimization.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; These are the basic thought about the whole process. Please be free to ask any details about this system/concept. I will try my best to explain it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am happy if someone can take part in the discussion.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best Regards!
</span><br>
<span class="quotelev1">&gt; Xuan Wang&lt;1.PNG&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="19519.php">Xuan Wang: "Re: [OMPI users] An idea about a semi-automatic optimized parallel	I/O with Open MPI"</a>
<li><strong>Previous message:</strong> <a href="19517.php">Xuan Wang: "[OMPI users] An idea about a semi-automatic optimized parallel I/O with Open MPI"</a>
<li><strong>In reply to:</strong> <a href="19517.php">Xuan Wang: "[OMPI users] An idea about a semi-automatic optimized parallel I/O with Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19519.php">Xuan Wang: "Re: [OMPI users] An idea about a semi-automatic optimized parallel	I/O with Open MPI"</a>
<li><strong>Reply:</strong> <a href="19519.php">Xuan Wang: "Re: [OMPI users] An idea about a semi-automatic optimized parallel	I/O with Open MPI"</a>
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
