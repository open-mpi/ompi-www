<?
$subject_val = "Re: [OMPI users] Problems with GATHERV on one process";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 12 14:44:06 2007" -->
<!-- isoreceived="20071212194406" -->
<!-- sent="Wed, 12 Dec 2007 12:43:53 -0700" -->
<!-- isosent="20071212194353" -->
<!-- name="Moreland, Kenneth" -->
<!-- email="kmorel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems with GATHERV on one process" -->
<!-- id="7137A9E1D1768C44BE7DF11D30FAB32304852DC6_at_ES21SNLNT.srn.sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="ea86ce220712111433u7a4dbe3fn681a19cea3314a35_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems with GATHERV on one process<br>
<strong>From:</strong> Moreland, Kenneth (<em>kmorel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-12 14:43:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4653.php">George Bosilca: "Re: [OMPI users] Dual ethernet &amp; OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="4651.php">Alex Pletzer: "[OMPI users] undefined reference to `pthread_atfork' (Lahey Fujitsu compiler AMD64)"</a>
<li><strong>In reply to:</strong> <a href="4643.php">Tim Mattox: "Re: [OMPI users] Problems with GATHERV on one process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4662.php">Jeff Squyres: "Re: [OMPI users] Problems with GATHERV on one process"</a>
<li><strong>Reply:</strong> <a href="4662.php">Jeff Squyres: "Re: [OMPI users] Problems with GATHERV on one process"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Tim.  I've since noticed similar problems with MPI_Allgatherv and
<br>
MPI_Scatterv.  I'm guessing they are all related.  Do you happen to know
<br>
if those are being fixed as well?
<br>
<p>-Ken
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
</span><br>
On
<br>
<span class="quotelev1">&gt; Behalf Of Tim Mattox
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, December 11, 2007 3:34 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Problems with GATHERV on one process
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello Ken,
</span><br>
<span class="quotelev1">&gt; This is a known bug, which is fixed in the upcoming 1.2.5 release.  We
</span><br>
<span class="quotelev1">&gt; expect 1.2.5
</span><br>
<span class="quotelev1">&gt; to come out very soon.  We should have a new release candidate for
</span><br>
1.2.5
<br>
<span class="quotelev1">&gt; posted
</span><br>
<span class="quotelev1">&gt; by tomorrow.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; See these tickets about the bug if you care to look:
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/1166">https://svn.open-mpi.org/trac/ompi/ticket/1166</a>
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/1157">https://svn.open-mpi.org/trac/ompi/ticket/1157</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 11, 2007 2:48 PM, Moreland, Kenneth &lt;kmorel_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I recently ran into a problem with GATHERV while running some
</span><br>
randomized
<br>
<span class="quotelev2">&gt; &gt; tests on my MPI code.  The problem seems to occur when running
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Gatherv with a displacement on a communicator with a single
</span><br>
process.
<br>
<span class="quotelev2">&gt; &gt; The code listed below exercises this errant behavior.  I have tried
</span><br>
it
<br>
<span class="quotelev2">&gt; &gt; on OpenMPI 1.1.2 and 1.2.4.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Granted, this is not a situation that one would normally run into in
</span><br>
a
<br>
<span class="quotelev2">&gt; &gt; real application, but I just wanted to check to make sure I was not
</span><br>
<span class="quotelev2">&gt; &gt; doing anything wrong.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -Ken
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
<span class="quotelev2">&gt; &gt;   int rank;
</span><br>
<span class="quotelev2">&gt; &gt;   MPI_Comm smallComm;
</span><br>
<span class="quotelev2">&gt; &gt;   int senddata[4], recvdata[4], length, offset;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   // Split up into communicators of size 1.
</span><br>
<span class="quotelev2">&gt; &gt;   MPI_Comm_split(MPI_COMM_WORLD, rank, 0, &amp;smallComm);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   // Now try to do a gatherv.
</span><br>
<span class="quotelev2">&gt; &gt;   senddata[0] = 5; senddata[1] = 6; senddata[2] = 7; senddata[3] =
</span><br>
8;
<br>
<span class="quotelev2">&gt; &gt;   recvdata[0] = 0; recvdata[1] = 0; recvdata[2] = 0; recvdata[3] =
</span><br>
0;
<br>
<span class="quotelev2">&gt; &gt;   length = 3;
</span><br>
<span class="quotelev2">&gt; &gt;   offset = 1;
</span><br>
<span class="quotelev2">&gt; &gt;   MPI_Gatherv(senddata, length, MPI_INT,
</span><br>
<span class="quotelev2">&gt; &gt;               recvdata, &amp;length, &amp;offset, MPI_INT, 0, smallComm);
</span><br>
<span class="quotelev2">&gt; &gt;   if (senddata[0] != recvdata[offset])
</span><br>
<span class="quotelev2">&gt; &gt;     {
</span><br>
<span class="quotelev2">&gt; &gt;     printf(&quot;%d: %d != %d?\n&quot;, rank, senddata[0], recvdata[offset]);
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt;   else
</span><br>
<span class="quotelev2">&gt; &gt;     {
</span><br>
<span class="quotelev2">&gt; &gt;     printf(&quot;%d: Everything OK.\n&quot;, rank);
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   return 0;
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    ****      Kenneth Moreland
</span><br>
<span class="quotelev2">&gt; &gt;     ***      Sandia National Laboratories
</span><br>
<span class="quotelev2">&gt; &gt; ***********
</span><br>
<span class="quotelev2">&gt; &gt; *** *** ***  email: kmorel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; **  ***  **  phone: (505) 844-8919
</span><br>
<span class="quotelev2">&gt; &gt;     ***      fax:   (505) 845-0833
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
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
</span><br>
<span class="quotelev1">&gt;  tmattox_at_[hidden] || timattox_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
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
<li><strong>Next message:</strong> <a href="4653.php">George Bosilca: "Re: [OMPI users] Dual ethernet &amp; OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="4651.php">Alex Pletzer: "[OMPI users] undefined reference to `pthread_atfork' (Lahey Fujitsu compiler AMD64)"</a>
<li><strong>In reply to:</strong> <a href="4643.php">Tim Mattox: "Re: [OMPI users] Problems with GATHERV on one process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4662.php">Jeff Squyres: "Re: [OMPI users] Problems with GATHERV on one process"</a>
<li><strong>Reply:</strong> <a href="4662.php">Jeff Squyres: "Re: [OMPI users] Problems with GATHERV on one process"</a>
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
