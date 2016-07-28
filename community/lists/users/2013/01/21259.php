<?
$subject_val = "Re: [OMPI users] Basic question about MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 29 01:02:30 2013" -->
<!-- isoreceived="20130129060230" -->
<!-- sent="Tue, 29 Jan 2013 15:02:05 +0900" -->
<!-- isosent="20130129060205" -->
<!-- name="Pradeep Jha" -->
<!-- email="pradeep_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Basic question about MPI" -->
<!-- id="CAL_eiiRq7yCsq9G=NgOZSnX_bM=EAqq0AK+kCCmUUZTszG7K5A_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1B18498F-5B84-4BF7-A488-CD041699EDFF_at_umn.edu" -->
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
<strong>From:</strong> Pradeep Jha (<em>pradeep_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-29 01:02:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21260.php">Jens Glaser: "Re: [OMPI users] Basic question about MPI"</a>
<li><strong>Previous message:</strong> <a href="21258.php">Jens Glaser: "Re: [OMPI users] Basic question about MPI"</a>
<li><strong>In reply to:</strong> <a href="21258.php">Jens Glaser: "Re: [OMPI users] Basic question about MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21260.php">Jens Glaser: "Re: [OMPI users] Basic question about MPI"</a>
<li><strong>Reply:</strong> <a href="21260.php">Jens Glaser: "Re: [OMPI users] Basic question about MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you for your response. That makes it clear.
<br>
<p>A related question. When I run a general program on a machine, say a
<br>
Internet browser/Media player to watch a movie by clicking on the icon of
<br>
the avi file in the folder (nothing from the terminal), how many cores does
<br>
it use? In that case also does it just run on one core?
<br>
<p>Generally, how is the work load divided on the cores on a computer. Does
<br>
every process that I start uses a new core, or the work load is distributed
<br>
over all the available cores?
<br>
<p>Thank you
<br>
<p><p>2013/1/29 Jens Glaser &lt;jglaser_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; Hi Pradeep,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 28, 2013, at 11:16 PM, Pradeep Jha &lt;pradeep.kumar.jha_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a very basic question about MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a computer with 8 processors (each with 8 cores).  What is the
</span><br>
<span class="quotelev1">&gt; difference between if I run a program simply by &quot;./program&quot; and &quot;mpirun -np
</span><br>
<span class="quotelev1">&gt; 8 /path/to/program&quot; ? In the first case does the program just use one
</span><br>
<span class="quotelev1">&gt; processor out of the 8? If I want the program to use all the 8 processors
</span><br>
<span class="quotelev1">&gt; at the same time, then I have to do with mpirun?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you run the application as  &quot;./program&quot;, it will most likely use only
</span><br>
<span class="quotelev1">&gt; one core on one processor, i.e. 1/64 of your machine, if the latter really
</span><br>
<span class="quotelev1">&gt; has eight CPUs with 8 cores each, as you write.  I have not heard of such
</span><br>
<span class="quotelev1">&gt; machines, but you may be right.. There is an exception, namely if your
</span><br>
<span class="quotelev1">&gt; program uses multi-threading (OpenMP etc.), then it could use more than one
</span><br>
<span class="quotelev1">&gt; core even if you start it without mpirun.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, if you do start it with mpirun, a number &quot;np&quot; of processes is
</span><br>
<span class="quotelev1">&gt; launched on different cores. Provided your node really has 8 physical CPUs
</span><br>
<span class="quotelev1">&gt; with 8 cores each and you want your program to utilize all your 64 cores,
</span><br>
<span class="quotelev1">&gt; you should start it with -np 64.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jens
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21259/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21260.php">Jens Glaser: "Re: [OMPI users] Basic question about MPI"</a>
<li><strong>Previous message:</strong> <a href="21258.php">Jens Glaser: "Re: [OMPI users] Basic question about MPI"</a>
<li><strong>In reply to:</strong> <a href="21258.php">Jens Glaser: "Re: [OMPI users] Basic question about MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21260.php">Jens Glaser: "Re: [OMPI users] Basic question about MPI"</a>
<li><strong>Reply:</strong> <a href="21260.php">Jens Glaser: "Re: [OMPI users] Basic question about MPI"</a>
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
