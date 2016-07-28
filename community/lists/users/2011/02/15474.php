<?
$subject_val = "Re: [OMPI users] heterogenous cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  2 02:47:02 2011" -->
<!-- isoreceived="20110202074702" -->
<!-- sent="Wed, 2 Feb 2011 08:46:58 +0100" -->
<!-- isosent="20110202074658" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] heterogenous cluster" -->
<!-- id="AANLkTinznnUm8VfjEBJv1nGgjMEBcs9ZK2VH==y8sTN7_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E1PkMP8-0007ff-UE_at_mendel.bio.caltech.edu" -->
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
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-02 02:46:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15475.php">Doug Reeder: "Re: [OMPI users] heterogenous cluster"</a>
<li><strong>Previous message:</strong> <a href="15473.php">Jeff Squyres: "Re: [OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?"</a>
<li><strong>In reply to:</strong> <a href="15467.php">David Mathog: "Re: [OMPI users] heterogenous cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15475.php">Doug Reeder: "Re: [OMPI users] heterogenous cluster"</a>
<li><strong>Reply:</strong> <a href="15475.php">Doug Reeder: "Re: [OMPI users] heterogenous cluster"</a>
<li><strong>Reply:</strong> <a href="15484.php">Eugene Loh: "Re: [OMPI users] heterogenous cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for your reply.
<br>
<p>If i try your suggestion, every process fails with the following message:
<br>
<p>*** The MPI_Init() function was called before MPI_INIT was invoked.
<br>
*** This is disallowed by the MPI standard.
<br>
*** Your MPI job will now abort.
<br>
[aim-triops:15460] Abort before MPI_INIT completed successfully; not
<br>
able to guarantee that all other processes were killed!
<br>
<p>I think this is caused by the fact that on the 64Bit machine Open MPI
<br>
is also built as a 64 bit application.
<br>
How can i force OpenMPI to be built as a 32Bit application on a 64Bit machine?
<br>
<p>Thank You
<br>
Jody
<br>
<p>On Tue, Feb 1, 2011 at 9:00 PM, David Mathog &lt;mathog_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have sofar used a homogenous 32-bit cluster.
</span><br>
<span class="quotelev2">&gt;&gt; Now i have added a new machine which is 64 bit
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This means i have to reconfigure open MPI with
</span><br>
<span class="quotelev1">&gt; `--enable-heterogeneous`, right?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not necessarily. &#160;If you don't need the 64bit capabilities you could run
</span><br>
<span class="quotelev1">&gt; 32 bit binaries along with a 32 bit version of OpenMPI. &#160;At least that
</span><br>
<span class="quotelev1">&gt; approach has worked so far for me.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; David Mathog
</span><br>
<span class="quotelev1">&gt; mathog_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Manager, Sequence Analysis Facility, Biology Division, Caltech
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15475.php">Doug Reeder: "Re: [OMPI users] heterogenous cluster"</a>
<li><strong>Previous message:</strong> <a href="15473.php">Jeff Squyres: "Re: [OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?"</a>
<li><strong>In reply to:</strong> <a href="15467.php">David Mathog: "Re: [OMPI users] heterogenous cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15475.php">Doug Reeder: "Re: [OMPI users] heterogenous cluster"</a>
<li><strong>Reply:</strong> <a href="15475.php">Doug Reeder: "Re: [OMPI users] heterogenous cluster"</a>
<li><strong>Reply:</strong> <a href="15484.php">Eugene Loh: "Re: [OMPI users] heterogenous cluster"</a>
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
