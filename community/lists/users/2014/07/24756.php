<?
$subject_val = "Re: [OMPI users] All MPI processes have rank 0";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  7 09:39:32 2014" -->
<!-- isoreceived="20140707133932" -->
<!-- sent="Mon, 7 Jul 2014 06:39:08 -0700" -->
<!-- isosent="20140707133908" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] All MPI processes have rank 0" -->
<!-- id="E8CAA3B3-1CDD-4A82-81FD-38D1571A9E70_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAREzCkEU-68ApN+K1V4WY9yhocG3Rf9xyW72PyCa+wNjsyTXw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] All MPI processes have rank 0<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-07 09:39:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24757.php">Alexander Frolov: "Re: [OMPI users] All MPI processes have rank 0"</a>
<li><strong>Previous message:</strong> <a href="24755.php">Alexander Frolov: "Re: [OMPI users] All MPI processes have rank 0"</a>
<li><strong>In reply to:</strong> <a href="24755.php">Alexander Frolov: "Re: [OMPI users] All MPI processes have rank 0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24757.php">Alexander Frolov: "Re: [OMPI users] All MPI processes have rank 0"</a>
<li><strong>Reply:</strong> <a href="24757.php">Alexander Frolov: "Re: [OMPI users] All MPI processes have rank 0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Okay, the problem is that you didn't configure OMPI to use PMI, and then ran your application using &quot;direct launch&quot; - i.e., starting it with srun instead of mpirun. So there is no way for the procs to obtain any information like their rank.
<br>
<p>You need to add this to your OMPI configure line:
<br>
<p>--with-slurm=/home/frolo/local/slurm --with-pmi=/home/frolo/local/slurm
<br>
<p><p>On Jul 7, 2014, at 6:29 AM, Alexander Frolov &lt;alexndr.frolov_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ok, sorry. Here is the details:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; hello.c
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;sys/utsname.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main(int argc, char **argv) 
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; 	int myrank; 
</span><br>
<span class="quotelev1">&gt; 	struct utsname unam; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	MPI_Init(&amp;argc, &amp;argv); 
</span><br>
<span class="quotelev1">&gt; 	uname(&amp;unam); 
</span><br>
<span class="quotelev1">&gt; 	MPI_Comm_rank(MPI_COMM_WORLD, &amp;myrank); 
</span><br>
<span class="quotelev1">&gt; 	printf(&quot;Hello from rank %d on host %s\n&quot;, myrank, unam.nodename); 
</span><br>
<span class="quotelev1">&gt; 	MPI_Finalize(); 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; srun -N 4 ./hello
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello from rank 0 on host A14
</span><br>
<span class="quotelev1">&gt; Hello from rank 0 on host A12
</span><br>
<span class="quotelev1">&gt; Hello from rank 0 on host A13
</span><br>
<span class="quotelev1">&gt; Hello from rank 0 on host A11
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; OpenMPI configured as follows:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/home/frolo/local/openmpi-1.8.1-gcc-4.8.2 --with-openib --enable-mpi-thread-multiple CC=/local/usr/local/bin/gcc CXX=/local/usr/local/bin/g++
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; slurm configured as follows:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/home/frolo/local/slurm
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (I'm running it as a user)
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Jul 7, 2014 at 5:23 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; With that little info, no - you haven't told us anything. How are you running this &quot;rank test&quot;, how was OMPI configured, etc?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 7, 2014, at 6:21 AM, Alexander Frolov &lt;alexndr.frolov_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am running MPI rank test using srun and all processes think that they are rank 0.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; * slurm 14.11.0-pre1
</span><br>
<span class="quotelev2">&gt; &gt; * openmpi-1.8.1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Any ideas what's wrong?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt;    Alex
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/07/24753.php">http://www.open-mpi.org/community/lists/users/2014/07/24753.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/07/24754.php">http://www.open-mpi.org/community/lists/users/2014/07/24754.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/07/24755.php">http://www.open-mpi.org/community/lists/users/2014/07/24755.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24756/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24757.php">Alexander Frolov: "Re: [OMPI users] All MPI processes have rank 0"</a>
<li><strong>Previous message:</strong> <a href="24755.php">Alexander Frolov: "Re: [OMPI users] All MPI processes have rank 0"</a>
<li><strong>In reply to:</strong> <a href="24755.php">Alexander Frolov: "Re: [OMPI users] All MPI processes have rank 0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24757.php">Alexander Frolov: "Re: [OMPI users] All MPI processes have rank 0"</a>
<li><strong>Reply:</strong> <a href="24757.php">Alexander Frolov: "Re: [OMPI users] All MPI processes have rank 0"</a>
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
