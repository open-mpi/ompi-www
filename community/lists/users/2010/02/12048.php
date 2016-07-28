<?
$subject_val = "Re: [OMPI users] Executing of external programs";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  8 15:00:16 2010" -->
<!-- isoreceived="20100208200016" -->
<!-- sent="Mon, 8 Feb 2010 15:00:10 -0500" -->
<!-- isosent="20100208200010" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Executing of external programs" -->
<!-- id="C664D606-3354-4C0B-821C-58328B461587_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="7cd6d1391002081134qde61afar1503d0a4f9f4c654_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Executing of external programs<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-08 15:00:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12049.php">Laurence Marks: "Re: [OMPI users] openmpi fails to terminate for errors/signals on some but not all processes"</a>
<li><strong>Previous message:</strong> <a href="12047.php">Jed Brown: "Re: [OMPI users] Similar question about MPI_Create_type"</a>
<li><strong>In reply to:</strong> <a href="12044.php">Lubomir Klimes: "[OMPI users] Executing of external programs"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 8, 2010, at 2:34 PM, Lubomir Klimes wrote:
<br>
<p><span class="quotelev1">&gt; I am new in the world of MPI and I would like to ask you for the help. In my diploma thesis I need to write a program in C++ using MPI that will execute another external program - an optimization software GAMS. My question is wheter is sufficient to use simply the command system(); for executing GAMS. In other words, will the external program &quot;work&quot; in parallel?
</span><br>
<p>It depends on what you mean, and what your system setup is.
<br>
<p>Calling system() may (will) cause problems if you're using a Myrinet or OpenFabrics-based network in MPI (for deep, dark, voodoo reasons -- we can explain if you care).  If you're using TCP, you should likely be fine -- but be aware that your resulting program may not be portable.
<br>
<p>Calling system() in your MPI application will effectively fork/exec the specified command.  Hence, if you &quot;mpirun -np 8 a.out&quot;, and a.out calls system(&quot;foo&quot;), you'll get 8 copies of foo running independently of each other.  If your project is supposed to parallelize foo, then it depends on the input / computation / output of foo as to whether this is a good approach.
<br>
<p>That being said, if you're just using MPI effectively as a launcher to launch N copies of foo, note that you can use Open MPI's &quot;mpirun&quot; to launch non-MPI applications (e.g., &quot;mpirun -np 4 hostname&quot;).
<br>
<p><span class="quotelev1">&gt; If the question is 'Yes', does someone know whether it will work also with LAM/MPI instead of OpenMPI?
</span><br>
<p>As a former developer of LAM/MPI, I can pretty confidently say that, just like Mac replied to your initial question on the LAM/MPI list: LAM/MPI is pretty much dead.  If you're just starting with MPI, you're much better to start with Open MPI than LAM/MPI.  :-)
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12049.php">Laurence Marks: "Re: [OMPI users] openmpi fails to terminate for errors/signals on some but not all processes"</a>
<li><strong>Previous message:</strong> <a href="12047.php">Jed Brown: "Re: [OMPI users] Similar question about MPI_Create_type"</a>
<li><strong>In reply to:</strong> <a href="12044.php">Lubomir Klimes: "[OMPI users] Executing of external programs"</a>
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
