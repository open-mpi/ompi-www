<?
$subject_val = "Re: [OMPI users] testing for openMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  7 05:29:16 2012" -->
<!-- isoreceived="20120607092916" -->
<!-- sent="Thu, 7 Jun 2012 02:28:51 -0700" -->
<!-- isosent="20120607092851" -->
<!-- name="Jingcha Joba" -->
<!-- email="pukkimonkey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] testing for openMPI" -->
<!-- id="CAOf_+-U8_Lg3jBd42TDuTzVD_N5eu2Bm-hixe7nVeFsa+oszJA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4FD0703A.5050609_at_gmx.com" -->
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
<strong>From:</strong> Jingcha Joba (<em>pukkimonkey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-07 05:28:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19469.php">Duke: "Re: [OMPI users] testing for openMPI"</a>
<li><strong>Previous message:</strong> <a href="19467.php">Duke: "[OMPI users] testing for openMPI"</a>
<li><strong>In reply to:</strong> <a href="19467.php">Duke: "[OMPI users] testing for openMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19469.php">Duke: "Re: [OMPI users] testing for openMPI"</a>
<li><strong>Reply:</strong> <a href="19469.php">Duke: "Re: [OMPI users] testing for openMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Duke,
<br>
Welcome to the forum.
<br>
<p>The way openmpi schedules by default is to fill all the slots in a host,
<br>
before moving on to next host.
<br>
<p>Check this link for some info:
<br>
<a href="http://www.open-mpi.org/faq/?category=running#mpirun-scheduling">http://www.open-mpi.org/faq/?category=running#mpirun-scheduling</a>
<br>
<p><p><pre>
--
Jingcha
On Thu, Jun 7, 2012 at 2:11 AM, Duke &lt;duke.lists_at_[hidden]&gt; wrote:
&gt; Hi folks,
&gt;
&gt; Please be gentle to the newest member of openMPI, I am totally new to this
&gt; field. I just built a test cluster with 3 boxes on Scientific Linux 6.2 and
&gt; openMPI (Open MPI 1.5.3), and I wanted to test how the cluster works but I
&gt; cant figure out what was/is happening. On my master node, I have the
&gt; hostfile:
&gt;
&gt; [mpiuser_at_fantomfs40a ~]$ cat .mpi_hostfile
&gt; # The Hostfile for Open MPI
&gt; fantomfs40a slots=2
&gt; hp430a slots=4 max-slots=4
&gt; hp430b slots=4 max-slots=4
&gt;
&gt; To test, I used the following c code:
&gt;
&gt; [mpiuser_at_fantomfs40a ~]$ cat test/mpihello.c
&gt; /* program hello */
&gt; /* Adapted from mpihello.f by drs */
&gt;
&gt; #include &lt;mpi.h&gt;
&gt; #include &lt;stdio.h&gt;
&gt;
&gt; int main(int argc, char **argv)
&gt; {
&gt;  int *buf, i, rank, nints, len;
&gt;  char hostname[256];
&gt;
&gt;  MPI_Init(&amp;argc,&amp;argv);
&gt;  MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
&gt;  gethostname(hostname,255);
&gt;  printf(&quot;Hello world!  I am process number: %d on host %s\n&quot;, rank,
&gt; hostname);
&gt;  MPI_Finalize();
&gt;  return 0;
&gt; }
&gt;
&gt; and then compiled and ran:
&gt;
&gt; [mpiuser_at_fantomfs40a ~]$ mpicc -o test/mpihello test/mpihello.c
&gt; [mpiuser_at_fantomfs40a ~]$ mpirun -np 2 --machinefile
&gt; /home/mpiuser/.mpi_hostfile ./test/mpihello
&gt; Hello world!  I am process number: 0 on host fantomfs40a
&gt; Hello world!  I am process number: 1 on host fantomfs40a
&gt;
&gt; Unfortunately the result did not show what I wanted. I expected to see
&gt; somethign like:
&gt;
&gt; Hello world!  I am process number: 0 on host hp430a
&gt; Hello world!  I am process number: 1 on host hp430b
&gt;
&gt; Anybody has any idea what I am doing wrong?
&gt;
&gt; Thank you in advance,
&gt;
&gt; D.
&gt;
&gt;
&gt;
&gt;
&gt;
&gt; ______________________________**_________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/**mailman/listinfo.cgi/users<http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/**mailman/listinfo.cgi/users<http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
&gt;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19468/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19469.php">Duke: "Re: [OMPI users] testing for openMPI"</a>
<li><strong>Previous message:</strong> <a href="19467.php">Duke: "[OMPI users] testing for openMPI"</a>
<li><strong>In reply to:</strong> <a href="19467.php">Duke: "[OMPI users] testing for openMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19469.php">Duke: "Re: [OMPI users] testing for openMPI"</a>
<li><strong>Reply:</strong> <a href="19469.php">Duke: "Re: [OMPI users] testing for openMPI"</a>
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
