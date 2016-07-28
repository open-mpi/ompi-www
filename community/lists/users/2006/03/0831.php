<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Mar 12 10:36:52 2006" -->
<!-- isoreceived="20060312153652" -->
<!-- sent="Sun, 12 Mar 2006 10:36:46 -0500" -->
<!-- isosent="20060312153646" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] New user question on nohup submission" -->
<!-- id="DE119740-8516-490F-A5F2-2A1C74102C58_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1ffc3b770603120717p1e53b2f1l3161f0beb4d4e13f_at_mail.gmail.com" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-12 10:36:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0832.php">Brian Barrett: "Re: [OMPI users] svn r9191 build failure on ppc32-linux"</a>
<li><strong>Previous message:</strong> <a href="0830.php">Yusuf Sun: "[OMPI users] New user question on nohup submission"</a>
<li><strong>In reply to:</strong> <a href="0830.php">Yusuf Sun: "[OMPI users] New user question on nohup submission"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 12, 2006, at 10:17 AM, Yusuf Sun wrote:
<br>
<p><span class="quotelev1">&gt; I recently installed Open MPI. And I can get my program compiled  
</span><br>
<span class="quotelev1">&gt; and run.
</span><br>
<span class="quotelev1">&gt; There is a small problem:
</span><br>
<span class="quotelev1">&gt; Previously, when using LAM, I use the following command line to  
</span><br>
<span class="quotelev1">&gt; submit my jobs:
</span><br>
<span class="quotelev1">&gt; nohup mpirun n1-4 ~/bin/mympi.LAM &gt; output.txt &amp;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But, with Open MPI, I can only run the program at foreground by
</span><br>
<span class="quotelev1">&gt; mpirun -np 4 --hostfile myhosts ~/bin/mympi.OMPI
</span><br>
<span class="quotelev1">&gt; If adding &quot;nohup&quot; and &quot;&gt; output.txt &amp;&quot;, the submitted job will stop  
</span><br>
<span class="quotelev1">&gt; immediately.
</span><br>
<span class="quotelev1">&gt; However, when I check on the slave nodes, I can still see the job  
</span><br>
<span class="quotelev1">&gt; and the orted
</span><br>
<span class="quotelev1">&gt; by &quot;ps -u&quot;. I have to manually kill them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any suggestion?
</span><br>
<p>This is a known issue, which we have fixed in the upcoming 1.0.2  
<br>
release.  If this is a feature you need immediately, you might want  
<br>
to try one of the pre-releases of 1.0.2 available from our download  
<br>
page:
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/software/ompi/v1.0/">http://www.open-mpi.org/software/ompi/v1.0/</a>
<br>
<p>Hope this helps,
<br>
<p>Brian
<br>
<p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0832.php">Brian Barrett: "Re: [OMPI users] svn r9191 build failure on ppc32-linux"</a>
<li><strong>Previous message:</strong> <a href="0830.php">Yusuf Sun: "[OMPI users] New user question on nohup submission"</a>
<li><strong>In reply to:</strong> <a href="0830.php">Yusuf Sun: "[OMPI users] New user question on nohup submission"</a>
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
