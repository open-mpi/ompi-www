<?
$subject_val = "Re: [OMPI users] using MPI through Qt";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  1 11:40:16 2011" -->
<!-- isoreceived="20110301164016" -->
<!-- sent="Tue, 01 Mar 2011 08:39:41 -0800" -->
<!-- isosent="20110301163941" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] using MPI through Qt" -->
<!-- id="4D6D214D.3050607_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTimp9XLthm8CRrKLNiZjkOB-ZJQ6mH80rn_G6FYA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] using MPI through Qt<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-01 11:39:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15772.php">Jeff Squyres: "Re: [OMPI users] Basic question on portability"</a>
<li><strong>Previous message:</strong> <a href="15770.php">Blosch, Edwin L: "[OMPI users] Basic question on portability"</a>
<li><strong>In reply to:</strong> <a href="15766.php">Eye RCS 51: "[OMPI users] using MPI through Qt"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Eye RCS 51 wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In an effort to make a Qt gui using MPI, I have the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. Gui started in master node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. In Gui, through a pushbutton, a global variable x is assigned some 
</span><br>
<span class="quotelev1">&gt; value; let say, x=1000;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. I want this value to be know to all nodes. So I used broadcast in 
</span><br>
<span class="quotelev1">&gt; the function assigning it on the master node and all other nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 4. I printed values of x, which prints all 1000 in all nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 5. Now control has reached to MPI_Finalize in all nodes except master.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now If I want to reassign value of x using pushbutton in master node 
</span><br>
<span class="quotelev1">&gt; and again broadcast to and print in all nodes, can it be done??
</span><br>
<p>Not with MPI if MPI_Finalize has been called.
<br>
<p><span class="quotelev1">&gt; I mean, can I have an MPI function which through GUI is called many 
</span><br>
<span class="quotelev1">&gt; times and assigns and prints WHILE program is running.
</span><br>
<p>You can call an MPI function like MPI_Bcast many times.  E.g.,
<br>
<p>MPI_Init();
<br>
MPI_Comm_rank(...,&amp;myrank);
<br>
while (...) {
<br>
&nbsp;&nbsp;&nbsp;if ( myrank == MASTER ) x = ...;
<br>
&nbsp;&nbsp;&nbsp;MPI_Bcast(&amp;x,...);
<br>
}
<br>
MPI_Finalize();
<br>
<p>There are many helpful MPI tutorials that can be found on the internet.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OR simply can I have a print function which is printing noderank value 
</span><br>
<span class="quotelev1">&gt; in all nodes whenever pushbutton is pressed while program is running.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; command i used is &quot;mpirun -np 3 ./a.out&quot;.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15772.php">Jeff Squyres: "Re: [OMPI users] Basic question on portability"</a>
<li><strong>Previous message:</strong> <a href="15770.php">Blosch, Edwin L: "[OMPI users] Basic question on portability"</a>
<li><strong>In reply to:</strong> <a href="15766.php">Eye RCS 51: "[OMPI users] using MPI through Qt"</a>
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
