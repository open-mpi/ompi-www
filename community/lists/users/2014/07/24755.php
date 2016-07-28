<?
$subject_val = "Re: [OMPI users] All MPI processes have rank 0";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  7 09:29:28 2014" -->
<!-- isoreceived="20140707132928" -->
<!-- sent="Mon, 7 Jul 2014 17:29:26 +0400" -->
<!-- isosent="20140707132926" -->
<!-- name="Alexander Frolov" -->
<!-- email="alexndr.frolov_at_[hidden]" -->
<!-- subject="Re: [OMPI users] All MPI processes have rank 0" -->
<!-- id="CAAREzCkEU-68ApN+K1V4WY9yhocG3Rf9xyW72PyCa+wNjsyTXw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="AFACCD9D-6013-405A-82F2-F28CB508982E_at_open-mpi.org" -->
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
<strong>From:</strong> Alexander Frolov (<em>alexndr.frolov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-07 09:29:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24756.php">Ralph Castain: "Re: [OMPI users] All MPI processes have rank 0"</a>
<li><strong>Previous message:</strong> <a href="24754.php">Ralph Castain: "Re: [OMPI users] All MPI processes have rank 0"</a>
<li><strong>In reply to:</strong> <a href="24754.php">Ralph Castain: "Re: [OMPI users] All MPI processes have rank 0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24756.php">Ralph Castain: "Re: [OMPI users] All MPI processes have rank 0"</a>
<li><strong>Reply:</strong> <a href="24756.php">Ralph Castain: "Re: [OMPI users] All MPI processes have rank 0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok, sorry. Here is the details:
<br>
<p><pre>
---
hello.c
---
#include &lt;mpi.h&gt;
#include &lt;stdio.h&gt;
#include &lt;sys/utsname.h&gt;
int main(int argc, char **argv)
{
int myrank;
struct utsname unam;
MPI_Init(&amp;argc, &amp;argv);
uname(&amp;unam);
MPI_Comm_rank(MPI_COMM_WORLD, &amp;myrank);
printf(&quot;Hello from rank %d on host %s\n&quot;, myrank, unam.nodename);
MPI_Finalize();
}
---
srun -N 4 ./hello
Hello from rank 0 on host A14
Hello from rank 0 on host A12
Hello from rank 0 on host A13
Hello from rank 0 on host A11
---
OpenMPI configured as follows:
./configure --prefix=/home/frolo/local/openmpi-1.8.1-gcc-4.8.2
--with-openib --enable-mpi-thread-multiple CC=/local/usr/local/bin/gcc
CXX=/local/usr/local/bin/g++
---
slurm configured as follows:
./configure --prefix=/home/frolo/local/slurm
(I'm running it as a user)
---
On Mon, Jul 7, 2014 at 5:23 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
&gt; With that little info, no - you haven't told us anything. How are you
&gt; running this &quot;rank test&quot;, how was OMPI configured, etc?
&gt;
&gt;
&gt; On Jul 7, 2014, at 6:21 AM, Alexander Frolov &lt;alexndr.frolov_at_[hidden]&gt;
&gt; wrote:
&gt;
&gt; &gt; Hi!
&gt; &gt;
&gt; &gt; I am running MPI rank test using srun and all processes think that they
&gt; are rank 0.
&gt; &gt;
&gt; &gt; * slurm 14.11.0-pre1
&gt; &gt; * openmpi-1.8.1
&gt; &gt;
&gt; &gt; Any ideas what's wrong?
&gt; &gt;
&gt; &gt; Regards,
&gt; &gt;    Alex
&gt; &gt; _______________________________________________
&gt; &gt; users mailing list
&gt; &gt; users_at_[hidden]
&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &gt; Link to this post:
&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/07/24753.php">http://www.open-mpi.org/community/lists/users/2014/07/24753.php</a>
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; Link to this post:
&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/07/24754.php">http://www.open-mpi.org/community/lists/users/2014/07/24754.php</a>
&gt;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24755/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24756.php">Ralph Castain: "Re: [OMPI users] All MPI processes have rank 0"</a>
<li><strong>Previous message:</strong> <a href="24754.php">Ralph Castain: "Re: [OMPI users] All MPI processes have rank 0"</a>
<li><strong>In reply to:</strong> <a href="24754.php">Ralph Castain: "Re: [OMPI users] All MPI processes have rank 0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24756.php">Ralph Castain: "Re: [OMPI users] All MPI processes have rank 0"</a>
<li><strong>Reply:</strong> <a href="24756.php">Ralph Castain: "Re: [OMPI users] All MPI processes have rank 0"</a>
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
