<?
$subject_val = "Re: [OMPI users] Basic question about MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 29 01:26:07 2013" -->
<!-- isoreceived="20130129062607" -->
<!-- sent="Tue, 29 Jan 2013 00:26:01 -0600" -->
<!-- isosent="20130129062601" -->
<!-- name="Jens Glaser" -->
<!-- email="jglaser_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Basic question about MPI" -->
<!-- id="A24E2169-70E3-45B3-8C60-416490D3D9E9_at_umn.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAL_eiiRq7yCsq9G=NgOZSnX_bM=EAqq0AK+kCCmUUZTszG7K5A_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2013-01-29 01:26:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21261.php">Siegmar Gross: "[OMPI users] problem with rankfile and openmpi-1.6.4rc3r27923"</a>
<li><strong>Previous message:</strong> <a href="21259.php">Pradeep Jha: "Re: [OMPI users] Basic question about MPI"</a>
<li><strong>In reply to:</strong> <a href="21259.php">Pradeep Jha: "Re: [OMPI users] Basic question about MPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 29, 2013, at 12:02 AM, Pradeep Jha &lt;pradeep_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Thank you for your response. That makes it clear.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A related question. When I run a general program on a machine, say a Internet browser/Media player to watch a movie by clicking on the icon of the avi file in the folder (nothing from the terminal), how many cores does it use? In that case also does it just run on one core?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
Well this isn't really a MPI question, but in short, the answer depends on the operating system and the application. If the latter is a serial application (no threads), it will generally only use one core, at most. If you are starting a more &quot;complex&quot; application on a graphical user interface, say, this often involves threads.  So your media player may actually use a thread for the GUI, and one thread for decoding the video. But I am just guessing here. The OS is free to distribute the threads over the cores as it sees fit.
<br>
<p><span class="quotelev1">&gt; Generally, how is the work load divided on the cores on a computer. Does every process that I start uses a new core, or the work load is distributed over all the available cores?
</span><br>
Again, this depends on the OS and on the hardware, so there is no general answer to your question. However, with OpenMPI (and other implementations) you can map processes to sockets and cores explicitly. This is called process affinity, which serves to improve locality for certain MPI ranks. This is described in the mpirun manpage and on the OpenMPI website, see
<br>
<p><a href="http://www.open-mpi.org/faq/?category=tuning#paffinity-defs">http://www.open-mpi.org/faq/?category=tuning#paffinity-defs</a>
<br>
<p>I hope this answers your original question.
<br>
<p>Jens
<br>
<p><span class="quotelev1">&gt; Thank you
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2013/1/29 Jens Glaser &lt;jglaser_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Hi Pradeep,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 28, 2013, at 11:16 PM, Pradeep Jha &lt;pradeep.kumar.jha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I have a very basic question about MPI. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have a computer with 8 processors (each with 8 cores).  What is the difference between if I run a program simply by &quot;./program&quot; and &quot;mpirun -np 8 /path/to/program&quot; ? In the first case does the program just use one processor out of the 8? If I want the program to use all the 8 processors at the same time, then I have to do with mpirun? 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; If you run the application as  &quot;./program&quot;, it will most likely use only one core on one processor, i.e. 1/64 of your machine, if the latter really has eight CPUs with 8 cores each, as you write.  I have not heard of such machines, but you may be right.. There is an exception, namely if your program uses multi-threading (OpenMP etc.), then it could use more than one core even if you start it without mpirun.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, if you do start it with mpirun, a number &quot;np&quot; of processes is launched on different cores. Provided your node really has 8 physical CPUs with 8 cores each and you want your program to utilize all your 64 cores, you should start it with -np 64.
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21260/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21261.php">Siegmar Gross: "[OMPI users] problem with rankfile and openmpi-1.6.4rc3r27923"</a>
<li><strong>Previous message:</strong> <a href="21259.php">Pradeep Jha: "Re: [OMPI users] Basic question about MPI"</a>
<li><strong>In reply to:</strong> <a href="21259.php">Pradeep Jha: "Re: [OMPI users] Basic question about MPI"</a>
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
