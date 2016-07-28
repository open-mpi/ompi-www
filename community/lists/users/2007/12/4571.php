<?
$subject_val = "Re: [OMPI users] Shared memory communication limits parallelism?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Dec  1 02:35:40 2007" -->
<!-- isoreceived="20071201073540" -->
<!-- sent="Sat, 1 Dec 2007 02:35:13 -0500" -->
<!-- isosent="20071201073513" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Shared memory communication limits parallelism?" -->
<!-- id="DADB5A93-1CA8-4DC9-BA24-396A6FD721BE_at_eecs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="fipj8o$svc$1_at_ger.gmane.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Shared memory communication limits parallelism?<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-01 02:35:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4572.php">Jeff Squyres: "Re: [OMPI users] Newbie: Using hostfile"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/11/4570.php">Jim Kusznir: "Re: [OMPI users] Suggestions on multi-compiler/multi-mpi build?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/11/4569.php">Jo&#195;&#163;o Luis Silva: "[OMPI users] Shared memory communication limits parallelism?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Joao,
<br>
<p>You're taking in account the time required to setup the whole  
<br>
communication framework, which is slower in the case of shared memory  
<br>
than TCP (I can explain if you care). However, the idea of using  
<br>
shared memory is to accelerate communications, which are not tested by  
<br>
your application.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Nov 30, 2007, at 1:01 PM, Jo&#227;o Luis Silva wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm using the OpenMPI version that is distributed with Fedora 8
</span><br>
<span class="quotelev1">&gt; (openmpi-1.2.4-1.fc8) on a dual Xeon 5335 (which is a quad core  
</span><br>
<span class="quotelev1">&gt; CPU), and
</span><br>
<span class="quotelev1">&gt; therefore I have 8 cores in a shared memory environment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; AFAIK by default OpenMPI correctly uses shared memory communication  
</span><br>
<span class="quotelev1">&gt; (sm)
</span><br>
<span class="quotelev1">&gt; without any extra parameter to mpirun, however the programs take  
</span><br>
<span class="quotelev1">&gt; longer and
</span><br>
<span class="quotelev1">&gt; don't scale well for more than 4 processors. Here are some example  
</span><br>
<span class="quotelev1">&gt; timings
</span><br>
<span class="quotelev1">&gt; for a simple MPI program (appended to this email):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; time mpirun -np N ./mpitest
</span><br>
<span class="quotelev1">&gt; (the timings are the same for time mpirun --mca btl self,sm -np N)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; N     t(s)    t1/t
</span><br>
<span class="quotelev1">&gt; -------------------------------
</span><br>
<span class="quotelev1">&gt; 1      35.7    1.0
</span><br>
<span class="quotelev1">&gt; 2      18.8    1.9
</span><br>
<span class="quotelev1">&gt; 3      12.7    2.8
</span><br>
<span class="quotelev1">&gt; 4      10.2    3.5
</span><br>
<span class="quotelev1">&gt; 5       8.2    4.4
</span><br>
<span class="quotelev1">&gt; 6       8.0    4.4
</span><br>
<span class="quotelev1">&gt; 7       7.2    5.0
</span><br>
<span class="quotelev1">&gt; 8       6.4    5.6
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can see that processes 5 and up barely speeds up the process.  
</span><br>
<span class="quotelev1">&gt; However
</span><br>
<span class="quotelev1">&gt; with tcp it has a nearly perfect scalling:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; time mpirun --mca btl self,tcp -np N
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; N    t(s)    t1/t
</span><br>
<span class="quotelev1">&gt; -------------------------------
</span><br>
<span class="quotelev1">&gt; 1      34.8   1.0
</span><br>
<span class="quotelev1">&gt; 2      17.7   2.0
</span><br>
<span class="quotelev1">&gt; 3      11.7   3.0
</span><br>
<span class="quotelev1">&gt; 4      8.8    4.0
</span><br>
<span class="quotelev1">&gt; 5      7.0    5.0
</span><br>
<span class="quotelev1">&gt; 6      6.0    5.8
</span><br>
<span class="quotelev1">&gt; 7      5.2    6.8
</span><br>
<span class="quotelev1">&gt; 8      4.5    7.8
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Why is this happening? Is this a bug?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Jo&#227;o Silva
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; P.S. Test program appended:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; #include &quot;stdio.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &quot;math.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #define N 1000000000
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char* argv[]){
</span><br>
<span class="quotelev1">&gt;        int i;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        /* Init MPI */
</span><br>
<span class="quotelev1">&gt;        int np,p;
</span><br>
<span class="quotelev1">&gt;        MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev1">&gt;        MPI_Comm_size(MPI_COMM_WORLD,&amp;np);
</span><br>
<span class="quotelev1">&gt;        MPI_Comm_rank(MPI_COMM_WORLD,&amp;p);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        printf(&quot;Process #%d of %d\n&quot;, p+1, np);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        for (i = p*N/np; i &lt; (p+1)*N/np; i++) {
</span><br>
<span class="quotelev1">&gt;                exp(i);
</span><br>
<span class="quotelev1">&gt;        }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
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
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4571/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4572.php">Jeff Squyres: "Re: [OMPI users] Newbie: Using hostfile"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/11/4570.php">Jim Kusznir: "Re: [OMPI users] Suggestions on multi-compiler/multi-mpi build?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/11/4569.php">Jo&#195;&#163;o Luis Silva: "[OMPI users] Shared memory communication limits parallelism?"</a>
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
