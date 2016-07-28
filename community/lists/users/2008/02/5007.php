<?
$subject_val = "Re: [OMPI users] Bad behavior in Allgatherv when a count is 0";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  7 13:30:44 2008" -->
<!-- isoreceived="20080207183044" -->
<!-- sent="Thu, 7 Feb 2008 12:30:36 -0600" -->
<!-- isosent="20080207183036" -->
<!-- name="Tim Mattox" -->
<!-- email="timattox_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bad behavior in Allgatherv when a count is 0" -->
<!-- id="ea86ce220802071030l36e5071cq538a48812519e190_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="087EF7CD-D7BA-463D-9B82-F4BA75535570_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Bad behavior in Allgatherv when a count is 0<br>
<strong>From:</strong> Tim Mattox (<em>timattox_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-07 13:30:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5008.php">Tim Prins: "Re: [OMPI users] bug in MPI_ACCUMULATE for window offsets &gt; 2**31 - 1 bytes? openmpi v1.2.5"</a>
<li><strong>Previous message:</strong> <a href="5006.php">Tim Prins: "Re: [OMPI users] process placement with toruqe and OpenMP"</a>
<li><strong>In reply to:</strong> <a href="4976.php">George Bosilca: "Re: [OMPI users] Bad behavior in Allgatherv when a count is 0"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Kenneth,
<br>
Have you tried the 1.2.5 version?  There were some fixes to the
<br>
vector collectives that could have resolved your problem.
<br>
<p>On Feb 4, 2008 5:36 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Kenneth,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I cannot replicate this weird behavior with the current version in the
</span><br>
<span class="quotelev1">&gt; trunk. I guess it has been fixed since 1.2.4.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Thanks,
</span><br>
<span class="quotelev1">&gt;      george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 13, 2007, at 6:58 PM, Moreland, Kenneth wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have found that on rare occasion Allgatherv fails to pass the data
</span><br>
<span class="quotelev2">&gt; &gt; to
</span><br>
<span class="quotelev2">&gt; &gt; all processes.  Given some magical combination of receive counts and
</span><br>
<span class="quotelev2">&gt; &gt; displacements, one or more processes are missing some or all of some
</span><br>
<span class="quotelev2">&gt; &gt; arrays in their receive buffer.  A necessary, but not sufficient,
</span><br>
<span class="quotelev2">&gt; &gt; condition seems to be that one of the receive counts is 0.  Beyond
</span><br>
<span class="quotelev2">&gt; &gt; that
</span><br>
<span class="quotelev2">&gt; &gt; I have not figured out any real pattern, but the example program
</span><br>
<span class="quotelev2">&gt; &gt; listed
</span><br>
<span class="quotelev2">&gt; &gt; below demonstrates the failure.  I have tried it on OpenMPI version
</span><br>
<span class="quotelev2">&gt; &gt; 1.2.3 and 1.2.4; it fails on both.  However, it works fine with
</span><br>
<span class="quotelev2">&gt; &gt; version
</span><br>
<span class="quotelev2">&gt; &gt; 1.1.2, so the problem must have been introduced since then.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -Ken
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   ****      Kenneth Moreland
</span><br>
<span class="quotelev2">&gt; &gt;    ***      Sandia National Laboratories
</span><br>
<span class="quotelev2">&gt; &gt; ***********
</span><br>
<span class="quotelev2">&gt; &gt; *** *** ***  email: kmorel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; **  ***  **  phone: (505) 844-8919
</span><br>
<span class="quotelev2">&gt; &gt;    ***      fax:   (505) 845-0833
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; int main(int argc, char **argv)
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt;  int rank;
</span><br>
<span class="quotelev2">&gt; &gt;  int size;
</span><br>
<span class="quotelev2">&gt; &gt;  MPI_Comm smallComm;
</span><br>
<span class="quotelev2">&gt; &gt;  int senddata[5], recvdata[100];
</span><br>
<span class="quotelev2">&gt; &gt;  int lengths[3], offsets[3];
</span><br>
<span class="quotelev2">&gt; &gt;  int i, j;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev2">&gt; &gt;  MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev2">&gt; &gt;  if (size != 3)
</span><br>
<span class="quotelev2">&gt; &gt;    {
</span><br>
<span class="quotelev2">&gt; &gt;    printf(&quot;Need 3 processes.&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;    MPI_Abort(MPI_COMM_WORLD, 1);
</span><br>
<span class="quotelev2">&gt; &gt;    }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  for (i = 0; i &lt; 100; i++) recvdata[i] = -1;
</span><br>
<span class="quotelev2">&gt; &gt;  for (i = 0; i &lt; 5; i++) senddata[i] = rank*10 + i;
</span><br>
<span class="quotelev2">&gt; &gt;  lengths[0] = 5;  lengths[1] = 0;  lengths[2] = 5;
</span><br>
<span class="quotelev2">&gt; &gt;  offsets[0] = 3;  offsets[1] = 9;  offsets[2] = 10;
</span><br>
<span class="quotelev2">&gt; &gt;  MPI_Allgatherv(senddata, lengths[rank], MPI_INT,
</span><br>
<span class="quotelev2">&gt; &gt;                 recvdata, lengths, offsets, MPI_INT, MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  for (i = 0; i &lt; size; i++)
</span><br>
<span class="quotelev2">&gt; &gt;    {
</span><br>
<span class="quotelev2">&gt; &gt;    for (j = 0; j &lt; lengths[i]; j++)
</span><br>
<span class="quotelev2">&gt; &gt;      {
</span><br>
<span class="quotelev2">&gt; &gt;      if (recvdata[offsets[i]+j] != 10*i+j)
</span><br>
<span class="quotelev2">&gt; &gt;        {
</span><br>
<span class="quotelev2">&gt; &gt;        printf(&quot;%d: Got bad data from rank %d, index %d: %d\n&quot;, rank,
</span><br>
<span class="quotelev2">&gt; &gt; i,
</span><br>
<span class="quotelev2">&gt; &gt; j,
</span><br>
<span class="quotelev2">&gt; &gt;               recvdata[offsets[i]+j]);
</span><br>
<span class="quotelev2">&gt; &gt;        break;
</span><br>
<span class="quotelev2">&gt; &gt;        }
</span><br>
<span class="quotelev2">&gt; &gt;      }
</span><br>
<span class="quotelev2">&gt; &gt;    }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  MPI_Finalize();
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  return 0;
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
 tmattox_at_[hidden] || timattox_at_[hidden]
    I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5008.php">Tim Prins: "Re: [OMPI users] bug in MPI_ACCUMULATE for window offsets &gt; 2**31 - 1 bytes? openmpi v1.2.5"</a>
<li><strong>Previous message:</strong> <a href="5006.php">Tim Prins: "Re: [OMPI users] process placement with toruqe and OpenMP"</a>
<li><strong>In reply to:</strong> <a href="4976.php">George Bosilca: "Re: [OMPI users] Bad behavior in Allgatherv when a count is 0"</a>
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
