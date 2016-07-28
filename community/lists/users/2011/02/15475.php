<?
$subject_val = "Re: [OMPI users] heterogenous cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  2 03:54:43 2011" -->
<!-- isoreceived="20110202085443" -->
<!-- sent="Wed, 2 Feb 2011 00:54:37 -0800" -->
<!-- isosent="20110202085437" -->
<!-- name="Doug Reeder" -->
<!-- email="dlr1_at_[hidden]" -->
<!-- subject="Re: [OMPI users] heterogenous cluster" -->
<!-- id="C715F506-8BED-45E4-9C27-821DC6C36293_at_cox.net" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTinznnUm8VfjEBJv1nGgjMEBcs9ZK2VH==y8sTN7_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] heterogenous cluster<br>
<strong>From:</strong> Doug Reeder (<em>dlr1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-02 03:54:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15476.php">Michael Curtis: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
<li><strong>Previous message:</strong> <a href="15474.php">jody: "Re: [OMPI users] heterogenous cluster"</a>
<li><strong>In reply to:</strong> <a href="15474.php">jody: "Re: [OMPI users] heterogenous cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15484.php">Eugene Loh: "Re: [OMPI users] heterogenous cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jody,
<br>
<p>With the gnu compilers the -m32  flag works. With other compilire's the same or other flag should work. 
<br>
<p>Doug Reeder
<br>
On Feb 1, 2011, at 11:46 PM, jody wrote:
<br>
<p><span class="quotelev1">&gt; Thanks for your reply.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If i try your suggestion, every process fails with the following message:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *** The MPI_Init() function was called before MPI_INIT was invoked.
</span><br>
<span class="quotelev1">&gt; *** This is disallowed by the MPI standard.
</span><br>
<span class="quotelev1">&gt; *** Your MPI job will now abort.
</span><br>
<span class="quotelev1">&gt; [aim-triops:15460] Abort before MPI_INIT completed successfully; not
</span><br>
<span class="quotelev1">&gt; able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think this is caused by the fact that on the 64Bit machine Open MPI
</span><br>
<span class="quotelev1">&gt; is also built as a 64 bit application.
</span><br>
<span class="quotelev1">&gt; How can i force OpenMPI to be built as a 32Bit application on a 64Bit machine?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank You
</span><br>
<span class="quotelev1">&gt; Jody
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Feb 1, 2011 at 9:00 PM, David Mathog &lt;mathog_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have sofar used a homogenous 32-bit cluster.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Now i have added a new machine which is 64 bit
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This means i have to reconfigure open MPI with
</span><br>
<span class="quotelev2">&gt;&gt; `--enable-heterogeneous`, right?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Not necessarily.  If you don't need the 64bit capabilities you could run
</span><br>
<span class="quotelev2">&gt;&gt; 32 bit binaries along with a 32 bit version of OpenMPI.  At least that
</span><br>
<span class="quotelev2">&gt;&gt; approach has worked so far for me.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; David Mathog
</span><br>
<span class="quotelev2">&gt;&gt; mathog_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Manager, Sequence Analysis Facility, Biology Division, Caltech
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15476.php">Michael Curtis: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
<li><strong>Previous message:</strong> <a href="15474.php">jody: "Re: [OMPI users] heterogenous cluster"</a>
<li><strong>In reply to:</strong> <a href="15474.php">jody: "Re: [OMPI users] heterogenous cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15484.php">Eugene Loh: "Re: [OMPI users] heterogenous cluster"</a>
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
