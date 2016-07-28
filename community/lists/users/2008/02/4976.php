<?
$subject_val = "Re: [OMPI users] Bad behavior in Allgatherv when a count is 0";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  4 18:36:46 2008" -->
<!-- isoreceived="20080204233646" -->
<!-- sent="Mon, 4 Feb 2008 18:36:35 -0500" -->
<!-- isosent="20080204233635" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bad behavior in Allgatherv when a count is 0" -->
<!-- id="087EF7CD-D7BA-463D-9B82-F4BA75535570_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="7137A9E1D1768C44BE7DF11D30FAB323048C7DB3_at_ES21SNLNT.srn.sandia.gov" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-04 18:36:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4977.php">Gleb Natapov: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Previous message:</strong> <a href="4975.php">George Bosilca: "Re: [OMPI users] overlapping memcpy in	ompi_coll_tuned_allgather_intra_bruck"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/12/4671.php">Moreland, Kenneth: "[OMPI users] Bad behavior in Allgatherv when a count is 0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5007.php">Tim Mattox: "Re: [OMPI users] Bad behavior in Allgatherv when a count is 0"</a>
<li><strong>Reply:</strong> <a href="5007.php">Tim Mattox: "Re: [OMPI users] Bad behavior in Allgatherv when a count is 0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Kenneth,
<br>
<p>I cannot replicate this weird behavior with the current version in the  
<br>
trunk. I guess it has been fixed since 1.2.4.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Dec 13, 2007, at 6:58 PM, Moreland, Kenneth wrote:
<br>
<p><span class="quotelev1">&gt; I have found that on rare occasion Allgatherv fails to pass the data  
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev1">&gt; all processes.  Given some magical combination of receive counts and
</span><br>
<span class="quotelev1">&gt; displacements, one or more processes are missing some or all of some
</span><br>
<span class="quotelev1">&gt; arrays in their receive buffer.  A necessary, but not sufficient,
</span><br>
<span class="quotelev1">&gt; condition seems to be that one of the receive counts is 0.  Beyond  
</span><br>
<span class="quotelev1">&gt; that
</span><br>
<span class="quotelev1">&gt; I have not figured out any real pattern, but the example program  
</span><br>
<span class="quotelev1">&gt; listed
</span><br>
<span class="quotelev1">&gt; below demonstrates the failure.  I have tried it on OpenMPI version
</span><br>
<span class="quotelev1">&gt; 1.2.3 and 1.2.4; it fails on both.  However, it works fine with  
</span><br>
<span class="quotelev1">&gt; version
</span><br>
<span class="quotelev1">&gt; 1.1.2, so the problem must have been introduced since then.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Ken
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   ****      Kenneth Moreland
</span><br>
<span class="quotelev1">&gt;    ***      Sandia National Laboratories
</span><br>
<span class="quotelev1">&gt; ***********
</span><br>
<span class="quotelev1">&gt; *** *** ***  email: kmorel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; **  ***  **  phone: (505) 844-8919
</span><br>
<span class="quotelev1">&gt;    ***      fax:   (505) 845-0833
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char **argv)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;  int rank;
</span><br>
<span class="quotelev1">&gt;  int size;
</span><br>
<span class="quotelev1">&gt;  MPI_Comm smallComm;
</span><br>
<span class="quotelev1">&gt;  int senddata[5], recvdata[100];
</span><br>
<span class="quotelev1">&gt;  int lengths[3], offsets[3];
</span><br>
<span class="quotelev1">&gt;  int i, j;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev1">&gt;  if (size != 3)
</span><br>
<span class="quotelev1">&gt;    {
</span><br>
<span class="quotelev1">&gt;    printf(&quot;Need 3 processes.&quot;);
</span><br>
<span class="quotelev1">&gt;    MPI_Abort(MPI_COMM_WORLD, 1);
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  for (i = 0; i &lt; 100; i++) recvdata[i] = -1;
</span><br>
<span class="quotelev1">&gt;  for (i = 0; i &lt; 5; i++) senddata[i] = rank*10 + i;
</span><br>
<span class="quotelev1">&gt;  lengths[0] = 5;  lengths[1] = 0;  lengths[2] = 5;
</span><br>
<span class="quotelev1">&gt;  offsets[0] = 3;  offsets[1] = 9;  offsets[2] = 10;
</span><br>
<span class="quotelev1">&gt;  MPI_Allgatherv(senddata, lengths[rank], MPI_INT,
</span><br>
<span class="quotelev1">&gt;                 recvdata, lengths, offsets, MPI_INT, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  for (i = 0; i &lt; size; i++)
</span><br>
<span class="quotelev1">&gt;    {
</span><br>
<span class="quotelev1">&gt;    for (j = 0; j &lt; lengths[i]; j++)
</span><br>
<span class="quotelev1">&gt;      {
</span><br>
<span class="quotelev1">&gt;      if (recvdata[offsets[i]+j] != 10*i+j)
</span><br>
<span class="quotelev1">&gt;        {
</span><br>
<span class="quotelev1">&gt;        printf(&quot;%d: Got bad data from rank %d, index %d: %d\n&quot;, rank,  
</span><br>
<span class="quotelev1">&gt; i,
</span><br>
<span class="quotelev1">&gt; j,
</span><br>
<span class="quotelev1">&gt;               recvdata[offsets[i]+j]);
</span><br>
<span class="quotelev1">&gt;        break;
</span><br>
<span class="quotelev1">&gt;        }
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  return 0;
</span><br>
<span class="quotelev1">&gt; }
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
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4976/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4977.php">Gleb Natapov: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Previous message:</strong> <a href="4975.php">George Bosilca: "Re: [OMPI users] overlapping memcpy in	ompi_coll_tuned_allgather_intra_bruck"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/12/4671.php">Moreland, Kenneth: "[OMPI users] Bad behavior in Allgatherv when a count is 0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5007.php">Tim Mattox: "Re: [OMPI users] Bad behavior in Allgatherv when a count is 0"</a>
<li><strong>Reply:</strong> <a href="5007.php">Tim Mattox: "Re: [OMPI users] Bad behavior in Allgatherv when a count is 0"</a>
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
