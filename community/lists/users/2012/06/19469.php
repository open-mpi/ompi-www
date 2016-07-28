<?
$subject_val = "Re: [OMPI users] testing for openMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  7 05:38:11 2012" -->
<!-- isoreceived="20120607093811" -->
<!-- sent="Thu, 07 Jun 2012 16:38:01 +0700" -->
<!-- isosent="20120607093801" -->
<!-- name="Duke" -->
<!-- email="duke.lists_at_[hidden]" -->
<!-- subject="Re: [OMPI users] testing for openMPI" -->
<!-- id="4FD07679.7050107_at_gmx.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAOf_+-U8_Lg3jBd42TDuTzVD_N5eu2Bm-hixe7nVeFsa+oszJA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] testing for openMPI<br>
<strong>From:</strong> Duke (<em>duke.lists_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-07 05:38:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19470.php">Duke: "Re: [OMPI users] testing for openMPI"</a>
<li><strong>Previous message:</strong> <a href="19468.php">Jingcha Joba: "Re: [OMPI users] testing for openMPI"</a>
<li><strong>In reply to:</strong> <a href="19468.php">Jingcha Joba: "Re: [OMPI users] testing for openMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19470.php">Duke: "Re: [OMPI users] testing for openMPI"</a>
<li><strong>Reply:</strong> <a href="19470.php">Duke: "Re: [OMPI users] testing for openMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jingha,
<br>
<p>On 6/7/12 4:28 PM, Jingcha Joba wrote:
<br>
<span class="quotelev1">&gt; Hello Duke,
</span><br>
<span class="quotelev1">&gt; Welcome to the forum.
</span><br>
<span class="quotelev1">&gt; The way openmpi schedules by default is to fill all the slots in a 
</span><br>
<span class="quotelev1">&gt; host, before moving on to next host.
</span><br>
<span class="quotelev1">&gt; Check this link for some info:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=running#mpirun-scheduling">http://www.open-mpi.org/faq/?category=running#mpirun-scheduling</a>
</span><br>
<p>Thanks for quick answer. I checked the FAQ, and tried with processes 
<br>
more than 2, but somehow it got stalled:
<br>
<p>[mpiuser_at_fantomfs40a ~]$ mpirun -v -np 4 --machinefile 
<br>
/home/mpiuser/.mpi_hostfile ./test/mpihello
<br>
^Cmpirun: killing job...
<br>
<p>I tried --host flag and it got stalled as well:
<br>
<p>[mpiuser_at_fantomfs40a ~]$ mpirun -v -np 4 --host hp430a,hp430b 
<br>
./test/mpihello
<br>
<p><p>My configuration must be wrong somewhere. Anyidea how I can check the 
<br>
system?
<br>
<p>Thanks,
<br>
<p>D.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jingcha
</span><br>
<span class="quotelev1">&gt; On Thu, Jun 7, 2012 at 2:11 AM, Duke &lt;duke.lists_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:duke.lists_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Hi folks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Please be gentle to the newest member of openMPI, I am totally new
</span><br>
<span class="quotelev1">&gt;     to this field. I just built a test cluster with 3 boxes on
</span><br>
<span class="quotelev1">&gt;     Scientific Linux 6.2 and openMPI (Open MPI 1.5.3), and I wanted to
</span><br>
<span class="quotelev1">&gt;     test how the cluster works but I cant figure out what was/is
</span><br>
<span class="quotelev1">&gt;     happening. On my master node, I have the hostfile:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     [mpiuser_at_fantomfs40a ~]$ cat .mpi_hostfile
</span><br>
<span class="quotelev1">&gt;     # The Hostfile for Open MPI
</span><br>
<span class="quotelev1">&gt;     fantomfs40a slots=2
</span><br>
<span class="quotelev1">&gt;     hp430a slots=4 max-slots=4
</span><br>
<span class="quotelev1">&gt;     hp430b slots=4 max-slots=4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     To test, I used the following c code:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     [mpiuser_at_fantomfs40a ~]$ cat test/mpihello.c
</span><br>
<span class="quotelev1">&gt;     /* program hello */
</span><br>
<span class="quotelev1">&gt;     /* Adapted from mpihello.f by drs */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;     #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     int main(int argc, char **argv)
</span><br>
<span class="quotelev1">&gt;     {
</span><br>
<span class="quotelev1">&gt;      int *buf, i, rank, nints, len;
</span><br>
<span class="quotelev1">&gt;      char hostname[256];
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev1">&gt;      MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt;      gethostname(hostname,255);
</span><br>
<span class="quotelev1">&gt;      printf(&quot;Hello world!  I am process number: %d on host %s\n&quot;,
</span><br>
<span class="quotelev1">&gt;     rank, hostname);
</span><br>
<span class="quotelev1">&gt;      MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;      return 0;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     and then compiled and ran:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     [mpiuser_at_fantomfs40a ~]$ mpicc -o test/mpihello test/mpihello.c
</span><br>
<span class="quotelev1">&gt;     [mpiuser_at_fantomfs40a ~]$ mpirun -np 2 --machinefile
</span><br>
<span class="quotelev1">&gt;     /home/mpiuser/.mpi_hostfile ./test/mpihello
</span><br>
<span class="quotelev1">&gt;     Hello world!  I am process number: 0 on host fantomfs40a
</span><br>
<span class="quotelev1">&gt;     Hello world!  I am process number: 1 on host fantomfs40a
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Unfortunately the result did not show what I wanted. I expected to
</span><br>
<span class="quotelev1">&gt;     see somethign like:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Hello world!  I am process number: 0 on host hp430a
</span><br>
<span class="quotelev1">&gt;     Hello world!  I am process number: 1 on host hp430b
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Anybody has any idea what I am doing wrong?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Thank you in advance,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     D.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19469/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19470.php">Duke: "Re: [OMPI users] testing for openMPI"</a>
<li><strong>Previous message:</strong> <a href="19468.php">Jingcha Joba: "Re: [OMPI users] testing for openMPI"</a>
<li><strong>In reply to:</strong> <a href="19468.php">Jingcha Joba: "Re: [OMPI users] testing for openMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19470.php">Duke: "Re: [OMPI users] testing for openMPI"</a>
<li><strong>Reply:</strong> <a href="19470.php">Duke: "Re: [OMPI users] testing for openMPI"</a>
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
