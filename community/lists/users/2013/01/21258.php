<?
$subject_val = "Re: [OMPI users] Basic question about MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 29 00:34:25 2013" -->
<!-- isoreceived="20130129053425" -->
<!-- sent="Mon, 28 Jan 2013 23:34:18 -0600" -->
<!-- isosent="20130129053418" -->
<!-- name="Jens Glaser" -->
<!-- email="jglaser_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Basic question about MPI" -->
<!-- id="1B18498F-5B84-4BF7-A488-CD041699EDFF_at_umn.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="98D63379-BABC-4D7F-AF09-3022D2824324_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Basic question about MPI<br>
<strong>From:</strong> Jens Glaser (<em>jglaser_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-29 00:34:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21259.php">Pradeep Jha: "Re: [OMPI users] Basic question about MPI"</a>
<li><strong>Previous message:</strong> <a href="21257.php">Pradeep Jha: "[OMPI users] Basic question about MPI"</a>
<li><strong>In reply to:</strong> <a href="21257.php">Pradeep Jha: "[OMPI users] Basic question about MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21259.php">Pradeep Jha: "Re: [OMPI users] Basic question about MPI"</a>
<li><strong>Reply:</strong> <a href="21259.php">Pradeep Jha: "Re: [OMPI users] Basic question about MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Pradeep,
<br>
<p>On Jan 28, 2013, at 11:16 PM, Pradeep Jha &lt;pradeep.kumar.jha_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; I have a very basic question about MPI. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a computer with 8 processors (each with 8 cores).  What is the difference between if I run a program simply by &quot;./program&quot; and &quot;mpirun -np 8 /path/to/program&quot; ? In the first case does the program just use one processor out of the 8? If I want the program to use all the 8 processors at the same time, then I have to do with mpirun? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
If you run the application as  &quot;./program&quot;, it will most likely use only one core on one processor, i.e. 1/64 of your machine, if the latter really has eight CPUs with 8 cores each, as you write.  I have not heard of such machines, but you may be right.. There is an exception, namely if your program uses multi-threading (OpenMP etc.), then it could use more than one core even if you start it without mpirun.
<br>
<p>However, if you do start it with mpirun, a number &quot;np&quot; of processes is launched on different cores. Provided your node really has 8 physical CPUs with 8 cores each and you want your program to utilize all your 64 cores, you should start it with -np 64.
<br>
<p>Jens
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21258/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21259.php">Pradeep Jha: "Re: [OMPI users] Basic question about MPI"</a>
<li><strong>Previous message:</strong> <a href="21257.php">Pradeep Jha: "[OMPI users] Basic question about MPI"</a>
<li><strong>In reply to:</strong> <a href="21257.php">Pradeep Jha: "[OMPI users] Basic question about MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21259.php">Pradeep Jha: "Re: [OMPI users] Basic question about MPI"</a>
<li><strong>Reply:</strong> <a href="21259.php">Pradeep Jha: "Re: [OMPI users] Basic question about MPI"</a>
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
