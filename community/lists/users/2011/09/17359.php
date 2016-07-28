<?
$subject_val = "Re: [OMPI users] MPI hangs on multiple nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 20 11:07:55 2011" -->
<!-- isoreceived="20110920150755" -->
<!-- sent="Tue, 20 Sep 2011 11:07:45 -0400" -->
<!-- isosent="20110920150745" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI hangs on multiple nodes" -->
<!-- id="4E78AC41.4090203_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CALcLSfqsYwZR_yGmTpuGwcX7AbJKntCxfQrP2quX--S5tdQtOA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI hangs on multiple nodes<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-20 11:07:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17360.php">Reuti: "Re: [OMPI users] EXTERNAL: Re: How could OpenMPI (or MVAPICH) affect	floating-point results?"</a>
<li><strong>Previous message:</strong> <a href="17358.php">Eugene Loh: "Re: [OMPI users] EXTERNAL: Re: How could OpenMPI (or MVAPICH) affect floating-point results?"</a>
<li><strong>In reply to:</strong> <a href="17346.php">Ole Nielsen: "[OMPI users] MPI hangs on multiple nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/12/18021.php">Rushton Martin: "[OMPI users] Clean install fails"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/12/18021.php">Rushton Martin: "[OMPI users] Clean install fails"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ole Nielsen wrote:
<br>
<span class="quotelev1">&gt; Thanks for your suggestion Gus, we need a way of debugging what is going 
</span><br>
<span class="quotelev1">&gt; on. I am pretty sure the problem lies with our cluster configuration. I 
</span><br>
<span class="quotelev1">&gt; know MPI simply relies on the underlying network. However, we can ping 
</span><br>
<span class="quotelev1">&gt; and ssh to all nodes (and in between and pair as well) so it is 
</span><br>
<span class="quotelev1">&gt; currently a mystery why MPI doesn't communicate across nodes on our cluster.
</span><br>
<span class="quotelev1">&gt; Two further questions for the group
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    1. I would love to run the test program connectivity.c, but cannot
</span><br>
<span class="quotelev1">&gt;       find it anywhere. Can anyone help please?
</span><br>
<p>If you downloaded the OpenMPI tarball, it is in examples/connectivity.c
<br>
wherever you untarred it [now where you installed].
<br>
<p><p><span class="quotelev1">&gt;    2. After having left the job hanging over night we got the message
</span><br>
<span class="quotelev1">&gt;       [node5][[9454,1],1][../../../../../../ompi/mca/btl/tcp/btl_tcp_frag.c:216:mca_btl_tcp_frag_recv]
</span><br>
<span class="quotelev1">&gt;       mca_btl_tcp_frag_recv: readv failed: Connection timed out (110).
</span><br>
<span class="quotelev1">&gt;       Does anyone know what this means?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers and thanks
</span><br>
<span class="quotelev1">&gt; Ole
</span><br>
<span class="quotelev1">&gt; PS - I don't see how separate buffers would help. Recall that the test 
</span><br>
<span class="quotelev1">&gt; program I use works fine on other installations and indeed when run on 
</span><br>
<span class="quotelev1">&gt; one the cores of one Node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>It probably won't help, as Eugene explained.
<br>
Your program works here, worked also for Davendra Rai.
<br>
If you were using MPI_ISend [non-blocking],
<br>
then you would need separate buffers.
<br>
<p>For large amounts of data and many processes,
<br>
I would rather use non-blocking communication [and separate
<br>
buffers], specially if you do work between send and recv.
<br>
But that's not what hangs your program.
<br>
<p>Gus Correa
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Message: 11
</span><br>
<span class="quotelev1">&gt; Date: Mon, 19 Sep 2011 10:37:02 -0400
</span><br>
<span class="quotelev1">&gt; From: Gus Correa &lt;gus_at_[hidden] &lt;mailto:gus_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] RE :  MPI hangs on multiple nodes
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;4E77538E.3070007_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:4E77538E.3070007_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=iso-8859-1; format=flowed
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Ole
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You could try the examples/connectivity.c program in the
</span><br>
<span class="quotelev1">&gt; OpenMPI source tree, to test if everything is alright.
</span><br>
<span class="quotelev1">&gt; It also hints how to solve the buffer re-use issue
</span><br>
<span class="quotelev1">&gt; that Sebastien [rightfully] pointed out [i.e., declare separate
</span><br>
<span class="quotelev1">&gt; buffers for MPI_Send and MPI_Recv].
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="17360.php">Reuti: "Re: [OMPI users] EXTERNAL: Re: How could OpenMPI (or MVAPICH) affect	floating-point results?"</a>
<li><strong>Previous message:</strong> <a href="17358.php">Eugene Loh: "Re: [OMPI users] EXTERNAL: Re: How could OpenMPI (or MVAPICH) affect floating-point results?"</a>
<li><strong>In reply to:</strong> <a href="17346.php">Ole Nielsen: "[OMPI users] MPI hangs on multiple nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/12/18021.php">Rushton Martin: "[OMPI users] Clean install fails"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/12/18021.php">Rushton Martin: "[OMPI users] Clean install fails"</a>
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
