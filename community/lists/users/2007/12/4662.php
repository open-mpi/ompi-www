<?
$subject_val = "Re: [OMPI users] Problems with GATHERV on one process";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 13 08:02:16 2007" -->
<!-- isoreceived="20071213130216" -->
<!-- sent="Thu, 13 Dec 2007 08:01:48 -0500" -->
<!-- isosent="20071213130148" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems with GATHERV on one process" -->
<!-- id="2408340C-1702-45C0-9C1B-4E4216BD6AD9_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="7137A9E1D1768C44BE7DF11D30FAB32304852DC6_at_ES21SNLNT.srn.sandia.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-13 08:01:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4663.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Previous message:</strong> <a href="4661.php">Thomas Ropars: "Re: [OMPI users] error with Vprotocol pessimist"</a>
<li><strong>In reply to:</strong> <a href="4652.php">Moreland, Kenneth: "Re: [OMPI users] Problems with GATHERV on one process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4665.php">Moreland, Kenneth: "Re: [OMPI users] Problems with GATHERV on one process"</a>
<li><strong>Reply:</strong> <a href="4665.php">Moreland, Kenneth: "Re: [OMPI users] Problems with GATHERV on one process"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Correct.  Here's the original commit that fixed the problem:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/changeset/16360">https://svn.open-mpi.org/trac/ompi/changeset/16360</a>
<br>
<p>And the commit to the v1.2 branch:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/changeset/16519">https://svn.open-mpi.org/trac/ompi/changeset/16519</a>
<br>
<p><p>On Dec 12, 2007, at 2:43 PM, Moreland, Kenneth wrote:
<br>
<p><span class="quotelev1">&gt; Thanks Tim.  I've since noticed similar problems with MPI_Allgatherv  
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt; MPI_Scatterv.  I'm guessing they are all related.  Do you happen to  
</span><br>
<span class="quotelev1">&gt; know
</span><br>
<span class="quotelev1">&gt; if those are being fixed as well?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Ken
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; On
</span><br>
<span class="quotelev2">&gt;&gt; Behalf Of Tim Mattox
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Tuesday, December 11, 2007 3:34 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Problems with GATHERV on one process
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello Ken,
</span><br>
<span class="quotelev2">&gt;&gt; This is a known bug, which is fixed in the upcoming 1.2.5 release.   
</span><br>
<span class="quotelev2">&gt;&gt; We
</span><br>
<span class="quotelev2">&gt;&gt; expect 1.2.5
</span><br>
<span class="quotelev2">&gt;&gt; to come out very soon.  We should have a new release candidate for
</span><br>
<span class="quotelev1">&gt; 1.2.5
</span><br>
<span class="quotelev2">&gt;&gt; posted
</span><br>
<span class="quotelev2">&gt;&gt; by tomorrow.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; See these tickets about the bug if you care to look:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/1166">https://svn.open-mpi.org/trac/ompi/ticket/1166</a>
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/1157">https://svn.open-mpi.org/trac/ompi/ticket/1157</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 11, 2007 2:48 PM, Moreland, Kenneth &lt;kmorel_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I recently ran into a problem with GATHERV while running some
</span><br>
<span class="quotelev1">&gt; randomized
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tests on my MPI code.  The problem seems to occur when running
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Gatherv with a displacement on a communicator with a single
</span><br>
<span class="quotelev1">&gt; process.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The code listed below exercises this errant behavior.  I have tried
</span><br>
<span class="quotelev1">&gt; it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on OpenMPI 1.1.2 and 1.2.4.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Granted, this is not a situation that one would normally run into in
</span><br>
<span class="quotelev1">&gt; a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; real application, but I just wanted to check to make sure I was not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; doing anything wrong.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Ken
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int main(int argc, char **argv)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  int rank;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  MPI_Comm smallComm;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  int senddata[4], recvdata[4], length, offset;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  // Split up into communicators of size 1.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  MPI_Comm_split(MPI_COMM_WORLD, rank, 0, &amp;smallComm);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  // Now try to do a gatherv.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  senddata[0] = 5; senddata[1] = 6; senddata[2] = 7; senddata[3] =
</span><br>
<span class="quotelev1">&gt; 8;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  recvdata[0] = 0; recvdata[1] = 0; recvdata[2] = 0; recvdata[3] =
</span><br>
<span class="quotelev1">&gt; 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  length = 3;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  offset = 1;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  MPI_Gatherv(senddata, length, MPI_INT,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              recvdata, &amp;length, &amp;offset, MPI_INT, 0, smallComm);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  if (senddata[0] != recvdata[offset])
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    printf(&quot;%d: %d != %d?\n&quot;, rank, senddata[0], recvdata[offset]);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    printf(&quot;%d: Everything OK.\n&quot;, rank);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  return 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   ****      Kenneth Moreland
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    ***      Sandia National Laboratories
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ***********
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** *** ***  email: kmorel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; **  ***  **  phone: (505) 844-8919
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    ***      fax:   (505) 845-0833
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
</span><br>
<span class="quotelev2">&gt;&gt; tmattox_at_[hidden] || timattox_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;    I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4663.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Previous message:</strong> <a href="4661.php">Thomas Ropars: "Re: [OMPI users] error with Vprotocol pessimist"</a>
<li><strong>In reply to:</strong> <a href="4652.php">Moreland, Kenneth: "Re: [OMPI users] Problems with GATHERV on one process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4665.php">Moreland, Kenneth: "Re: [OMPI users] Problems with GATHERV on one process"</a>
<li><strong>Reply:</strong> <a href="4665.php">Moreland, Kenneth: "Re: [OMPI users] Problems with GATHERV on one process"</a>
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
