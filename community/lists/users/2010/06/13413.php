<?
$subject_val = "Re: [OMPI users] Debugging OpenMPI with GDB";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 25 14:56:18 2010" -->
<!-- isoreceived="20100625185618" -->
<!-- sent="Fri, 25 Jun 2010 14:56:12 -0400" -->
<!-- isosent="20100625185612" -->
<!-- name="Prentice Bisbal" -->
<!-- email="prentice_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Debugging OpenMPI with GDB" -->
<!-- id="4C24FBCC.6050800_at_ias.edu" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="201006252018.21804.nemanja.ilic.81_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Debugging OpenMPI with GDB<br>
<strong>From:</strong> Prentice Bisbal (<em>prentice_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-25 14:56:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13414.php">Miguel Vargas Felix: "Re: [OMPI users] Debugging OpenMPI with GDB"</a>
<li><strong>Previous message:</strong> <a href="13412.php">Ashley Pittman: "Re: [OMPI users] Debugging OpenMPI with GDB"</a>
<li><strong>In reply to:</strong> <a href="13411.php">&#208;&#157;&#208;&#181;&#208;&#188;&#208;&#176;&#209;&#154;&#208;&#176; &#208;&#152;&#208;&#187;&#208;&#184;&#209;&#155; (Nemanja Ilic): "[OMPI users] Debugging OpenMPI with GDB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13414.php">Miguel Vargas Felix: "Re: [OMPI users] Debugging OpenMPI with GDB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&#208;&#157;&#208;&#181;&#208;&#188;&#208;&#176;&#209;&#154;&#208;&#176; &#208;&#152;&#208;&#187;&#208;&#184;&#209;&#155; (Nemanja Ilic) wrote:
<br>
<span class="quotelev1">&gt; Dear Sir or Madam,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am about to start a project that includes MPI communication. My question is: &quot;Is there a way to debug parallel OpenMPI applications on linux in console mode on one computer using gdb?&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Yes, you can run MPI programs with numproc &gt; 1 on a single node. After
<br>
the job starts, you can then use gdb to attach one of the running
<br>
processes by specifying the processID of the process you want to attach to:
<br>
<p>gdb &lt;PID&gt;
<br>
<p>If you want to know which PID corresponds to which rank, it can be
<br>
helpful to have each rank print their rank and PID to STDOUT as soon as
<br>
they startup, then have them sleep for a little while so have time to
<br>
attach the debugger to the process before the fun starts.
<br>
<p>You can do this for every MPI process you want to watch how they
<br>
interact. However, if you are working on the console, you'll be limited
<br>
to the number of virtual consoles.
<br>
<p>And while we're talkingdebugging, never underestimate the power of the
<br>
printf command. printf works great for MPI programs, too. You just need
<br>
to specify the rank of the process in the printf string so you can keep
<br>
track of who's doing what when the error occurs.
<br>
<p>I use something like this:
<br>
<p>#ifdef DEBUG
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Rank %i: sending to rank %i\n&quot;, my_rank, other_rank);
<br>
#endif
<br>
<p>MPI_Send(arg1 arg2,,,,);
<br>
<p><p>It's not fancy, it's not high-tech, but it works.
<br>
<p><pre>
-- 
Prentice
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13414.php">Miguel Vargas Felix: "Re: [OMPI users] Debugging OpenMPI with GDB"</a>
<li><strong>Previous message:</strong> <a href="13412.php">Ashley Pittman: "Re: [OMPI users] Debugging OpenMPI with GDB"</a>
<li><strong>In reply to:</strong> <a href="13411.php">&#208;&#157;&#208;&#181;&#208;&#188;&#208;&#176;&#209;&#154;&#208;&#176; &#208;&#152;&#208;&#187;&#208;&#184;&#209;&#155; (Nemanja Ilic): "[OMPI users] Debugging OpenMPI with GDB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13414.php">Miguel Vargas Felix: "Re: [OMPI users] Debugging OpenMPI with GDB"</a>
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
