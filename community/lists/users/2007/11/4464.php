<?
$subject_val = "Re: [OMPI users] OpenMPI - compilation";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 14 13:19:13 2007" -->
<!-- isoreceived="20071114181913" -->
<!-- sent="Wed, 14 Nov 2007 10:18:06 -0800" -->
<!-- isosent="20071114181806" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI - compilation" -->
<!-- id="D46A1540-FFF1-4279-AE12-1BE742F94456_at_umich.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="941193370711141007v346929ebx38253e49ecc4c83b_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI - compilation<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-14 13:18:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4465.php">Murat Knecht: "Re: [OMPI users] MPI Spawn terminates application"</a>
<li><strong>Previous message:</strong> <a href="4463.php">Sajjad: "[OMPI users] OpenMPI - compilation"</a>
<li><strong>In reply to:</strong> <a href="4463.php">Sajjad: "[OMPI users] OpenMPI - compilation"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dont use the name 'test'  test is a unix command and it causes  
<br>
problems when you name things 'test'
<br>
<p>If you try
<br>
mpirun -np 4 ./test
<br>
<p>it will work because that will use the test you just created not the  
<br>
regular 'test'
<br>
But really dont use the name test and it will work as expected.
<br>
<p>Brock Palen
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p>On Nov 14, 2007, at 10:07 AM, Sajjad wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have installed openmpi from the ubuntu repository for the 64-bit
</span><br>
<span class="quotelev1">&gt; dual core AMD processor.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and i tried to compile the simple test program with the help of the
</span><br>
<span class="quotelev1">&gt; tutorial page but nothing seems to happen.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc,char *argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; 	int rank;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev1">&gt; 	MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt; 	printf(&quot;my rank=%d\n&quot;,rank);
</span><br>
<span class="quotelev1">&gt; 	MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; then from the console i issued the following command
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpicc test.c -o test
</span><br>
<span class="quotelev1">&gt; mpirun -np 4 test
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; nothing happens. actually after the command &quot;mpicc test.c -o test&quot;
</span><br>
<span class="quotelev1">&gt; shouldnt i be having a .o file?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I do not understand how do i get to know if my current installation is
</span><br>
<span class="quotelev1">&gt; fine or not.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any suggestion?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; Sajjad
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4465.php">Murat Knecht: "Re: [OMPI users] MPI Spawn terminates application"</a>
<li><strong>Previous message:</strong> <a href="4463.php">Sajjad: "[OMPI users] OpenMPI - compilation"</a>
<li><strong>In reply to:</strong> <a href="4463.php">Sajjad: "[OMPI users] OpenMPI - compilation"</a>
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
