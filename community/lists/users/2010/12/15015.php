<?
$subject_val = "Re: [OMPI users] glut display 'occasionally' opens";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  6 20:31:25 2010" -->
<!-- isoreceived="20101207013125" -->
<!-- sent="Mon, 6 Dec 2010 18:31:15 -0700" -->
<!-- isosent="20101207013115" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] glut display 'occasionally' opens" -->
<!-- id="B5C5CD65-5901-46DB-A052-9404147E8644_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTikUhkrR5OAoWBHnNy8hDNTy3anxNNQ7tV4rf5KB_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] glut display 'occasionally' opens<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-06 20:31:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15016.php">цооэ╬Э: "Re: [OMPI users] MPI_Send doesn't work if the data &gt;= 2GB"</a>
<li><strong>Previous message:</strong> <a href="15014.php">brad baker: "[OMPI users] glut display 'occasionally' opens"</a>
<li><strong>In reply to:</strong> <a href="15014.php">brad baker: "[OMPI users] glut display 'occasionally' opens"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15017.php">brad baker: "Re: [OMPI users] glut display 'occasionally' opens"</a>
<li><strong>Reply:</strong> <a href="15017.php">brad baker: "Re: [OMPI users] glut display 'occasionally' opens"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Guess I'm not entirely sure I understand how this is supposed to work. All the -x does is tell us to pickup an envar of the given name and forward its value to the remote apps. You can't set the envar's value on the cmd line. So you told mpirun to pickup the value of an envar called &quot;DISPLAY=:0.0&quot;.
<br>
<p>So yes - I would expect this would be behaving strangely.
<br>
<p>If you tell us -x DISPLAY, we'll pickup the local value of DISPLAY and forward it. What that will cause your app to do is, I suppose, up to it.
<br>
<p><p>On Dec 6, 2010, at 12:42 PM, brad baker wrote:
<br>
<p><span class="quotelev1">&gt; Hello, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm working on an mpi application that opens a glut display on each node of a small cluster for opengl rendering (each node has its own display). My current implementation scales great with mpich2, but I'd like to use openmpi infiniband, which is giving me trouble.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've had some success with the -x DISPLAY=:0.0 parameter to mpirun, which will open the display on up to 2 of my nodes... any 2.  But when I attempt to run the application on 4 nodes, the display is non-deterministic. If any open at all process 0 definately will, and sometimes process 3 along with that.  I haven't observed much behavior from process 1 or 2.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My command:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -x DISPLAY=:0.0 -np 4 -hostfile ~/openmpi.hosts ./myapp
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've tried adding the -d option with no success.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does anyone have any suggestions or comments?  I'll certainly provide more information if required.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Brad
</span><br>
<span class="quotelev1">&gt; _______________________________________________
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
<li><strong>Next message:</strong> <a href="15016.php">цооэ╬Э: "Re: [OMPI users] MPI_Send doesn't work if the data &gt;= 2GB"</a>
<li><strong>Previous message:</strong> <a href="15014.php">brad baker: "[OMPI users] glut display 'occasionally' opens"</a>
<li><strong>In reply to:</strong> <a href="15014.php">brad baker: "[OMPI users] glut display 'occasionally' opens"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15017.php">brad baker: "Re: [OMPI users] glut display 'occasionally' opens"</a>
<li><strong>Reply:</strong> <a href="15017.php">brad baker: "Re: [OMPI users] glut display 'occasionally' opens"</a>
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
