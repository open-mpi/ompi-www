<?
$subject_val = "Re: [OMPI users] OpenMPI and CUDA on cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  3 11:53:23 2012" -->
<!-- isoreceived="20120503155323" -->
<!-- sent="Thu, 3 May 2012 11:53:06 -0400" -->
<!-- isosent="20120503155306" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI and CUDA on cluster" -->
<!-- id="B42199F0-8351-4234-96DE-C2CA1C4752B5_at_ornl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAFAE9jgHpvSdnT622mKY1vFezBmne0TXRBqY5uuybCocZLzT4Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI and CUDA on cluster<br>
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-03 11:53:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19175.php">Acero Fernandez Alicia: "[OMPI users] Openmpi problem"</a>
<li><strong>Previous message:</strong> <a href="19173.php">Eduardo Morras: "Re: [OMPI users] Segmentation fault on master task"</a>
<li><strong>In reply to:</strong> <a href="19163.php">Rohan Deshpande: "Re: [OMPI users] OpenMPI and CUDA on cluster"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have solved this issue. All the paths were correct but I still had to use
<br>
<p>mpirun -x LD_LIBRARY_PATH.... while executing the job.
<br>
<p><p>Other option is to update your .bashrc/.cshrc.
<br>
Just add the LD_LIBRARY_PATH to the file and the update variable will be available on remote machines as well.
<br>
(I made an assumption here that you have the same home directory available on all nodes )
<br>
<p>-Pasha
<br>
<p><p>Now works like a charm.
<br>
<p>Thanks for your responses.
<br>
<p>On Wed, May 2, 2012 at 4:04 AM, Trent &lt;tjones146_at_[hidden]&lt;mailto:tjones146_at_[hidden]&gt;&gt; wrote:
<br>
That is discussed on here:
<br>
<p><a href="http://forums.nvidia.com/index.php?showtopic=227854">http://forums.nvidia.com/index.php?showtopic=227854</a>
<br>
<p>Maybe that could be your issue too.
<br>
<p><p><p>From: users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt; [mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;] On Behalf Of Rohan Deshpande
<br>
Sent: Tuesday, May 01, 2012 4:04 AM
<br>
To: Open MPI Users
<br>
Subject: [OMPI users] OpenMPI and CUDA on cluster
<br>
<p>Hi,
<br>
<p>I am trying to execute OpenMPI and CUDA code on a cluster. The code works fine on single machine but when I try to execute it on cluster I get error:
<br>
<p>error while loading shared libraries: libcudart.so.4: cannot open shared object file: No such file or directory
<br>
<p>I checked my PATH and LD_PATH and it looks ok. I have a .bashrc file which contains following entries -
<br>
<p>export PATH=$PATH:/usr/local/lib/:/usr/local/lib/openmpi:/usr/local/ cuda/bin
<br>
export LD_LIBRARY_PATH=$LD_LIBRARY_PATH:/usr/local/lib:/usr/local/ lib/openmpi/:/usr/local/cuda/lib/:
<br>
<p>All the machines haves same installation of CUDA and OpenMPI.
<br>
<p>Can anyone help me with this.
<br>
<p>This problem is really annoying.
<br>
<p>Thanks.
<br>
<p><p><p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><p><pre>
--
Best Regards,
ROHAN DESHPANDE
_______________________________________________
users mailing list
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19175.php">Acero Fernandez Alicia: "[OMPI users] Openmpi problem"</a>
<li><strong>Previous message:</strong> <a href="19173.php">Eduardo Morras: "Re: [OMPI users] Segmentation fault on master task"</a>
<li><strong>In reply to:</strong> <a href="19163.php">Rohan Deshpande: "Re: [OMPI users] OpenMPI and CUDA on cluster"</a>
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
