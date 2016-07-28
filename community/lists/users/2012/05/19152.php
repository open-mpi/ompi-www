<?
$subject_val = "Re: [OMPI users] OpenMPI and CUDA on cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  1 20:31:52 2012" -->
<!-- isoreceived="20120502003152" -->
<!-- sent="Wed, 2 May 2012 08:31:47 +0800" -->
<!-- isosent="20120502003147" -->
<!-- name="Rohan Deshpande" -->
<!-- email="rohand87_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI and CUDA on cluster" -->
<!-- id="CAFAE9jgHpvSdnT622mKY1vFezBmne0TXRBqY5uuybCocZLzT4Q_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BLU157-ds7330C8D6D36B3F699C451F5290_at_phx.gbl" -->
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
<strong>From:</strong> Rohan Deshpande (<em>rohand87_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-01 20:31:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19153.php">Rohan Deshpande: "[OMPI users] Segmentation fault on master task"</a>
<li><strong>Previous message:</strong> <a href="19151.php">Trent: "Re: [OMPI users] OpenMPI and CUDA on cluster"</a>
<li><strong>In reply to:</strong> <a href="19151.php">Trent: "Re: [OMPI users] OpenMPI and CUDA on cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19163.php">Shamis, Pavel: "Re: [OMPI users] OpenMPI and CUDA on cluster"</a>
<li><strong>Reply:</strong> <a href="19163.php">Shamis, Pavel: "Re: [OMPI users] OpenMPI and CUDA on cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have solved this issue. All the paths were correct but I still had to use
<br>
<p>mpirun -x LD_LIBRARY_PATH.... while executing the job.
<br>
<p>Now works like a charm.
<br>
<p>Thanks for your responses.
<br>
<p>On Wed, May 2, 2012 at 4:04 AM, Trent &lt;tjones146_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; That is discussed on here:****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://forums.nvidia.com/index.php?showtopic=227854">http://forums.nvidia.com/index.php?showtopic=227854</a>****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Maybe that could be your issue too.****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *From:* users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] *On
</span><br>
<span class="quotelev1">&gt; Behalf Of *Rohan Deshpande
</span><br>
<span class="quotelev1">&gt; *Sent:* Tuesday, May 01, 2012 4:04 AM
</span><br>
<span class="quotelev1">&gt; *To:* Open MPI Users
</span><br>
<span class="quotelev1">&gt; *Subject:* [OMPI users] OpenMPI and CUDA on cluster****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to execute OpenMPI and CUDA code on a cluster. The code works
</span><br>
<span class="quotelev1">&gt; fine on single machine but when I try to execute it on cluster I get error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; error while loading shared libraries: libcudart.so.4: cannot open shared
</span><br>
<span class="quotelev1">&gt; object file: No such file or directory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I checked my PATH and LD_PATH and it looks ok. I have a .bashrc file which
</span><br>
<span class="quotelev1">&gt; contains following entries -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; export PATH=$PATH:/usr/local/lib/:/usr/local/lib/openmpi:/usr/local/
</span><br>
<span class="quotelev1">&gt; cuda/bin
</span><br>
<span class="quotelev1">&gt; export LD_LIBRARY_PATH=$LD_LIBRARY_PATH:/usr/local/lib:/usr/local/
</span><br>
<span class="quotelev1">&gt; lib/openmpi/:/usr/local/cuda/lib/:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; All the machines haves same installation of CUDA and OpenMPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can anyone help me with this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This problem is really annoying.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
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
<p><p><p><pre>
-- 
Best Regards,
ROHAN DESHPANDE
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="../../att-19152/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19153.php">Rohan Deshpande: "[OMPI users] Segmentation fault on master task"</a>
<li><strong>Previous message:</strong> <a href="19151.php">Trent: "Re: [OMPI users] OpenMPI and CUDA on cluster"</a>
<li><strong>In reply to:</strong> <a href="19151.php">Trent: "Re: [OMPI users] OpenMPI and CUDA on cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19163.php">Shamis, Pavel: "Re: [OMPI users] OpenMPI and CUDA on cluster"</a>
<li><strong>Reply:</strong> <a href="19163.php">Shamis, Pavel: "Re: [OMPI users] OpenMPI and CUDA on cluster"</a>
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
