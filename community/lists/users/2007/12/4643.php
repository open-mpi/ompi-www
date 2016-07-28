<?
$subject_val = "Re: [OMPI users] Problems with GATHERV on one process";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 11 17:33:42 2007" -->
<!-- isoreceived="20071211223342" -->
<!-- sent="Tue, 11 Dec 2007 17:33:38 -0500" -->
<!-- isosent="20071211223338" -->
<!-- name="Tim Mattox" -->
<!-- email="timattox_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems with GATHERV on one process" -->
<!-- id="ea86ce220712111433u7a4dbe3fn681a19cea3314a35_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7137A9E1D1768C44BE7DF11D30FAB32304852AC3_at_ES21SNLNT.srn.sandia.gov" -->
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
<strong>From:</strong> Tim Mattox (<em>timattox_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-11 17:33:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4644.php">Warner Yuen: "Re: [OMPI users] Problems compiling 1.2.4 using Intel Compiler	10.1.006 on Leopard"</a>
<li><strong>Previous message:</strong> <a href="4642.php">Aurelien Bouteiller: "Re: [OMPI users] error with Vprotocol pessimist"</a>
<li><strong>In reply to:</strong> <a href="4641.php">Moreland, Kenneth: "[OMPI users] Problems with GATHERV on one process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4652.php">Moreland, Kenneth: "Re: [OMPI users] Problems with GATHERV on one process"</a>
<li><strong>Reply:</strong> <a href="4652.php">Moreland, Kenneth: "Re: [OMPI users] Problems with GATHERV on one process"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Ken,
<br>
This is a known bug, which is fixed in the upcoming 1.2.5 release.  We
<br>
expect 1.2.5
<br>
to come out very soon.  We should have a new release candidate for 1.2.5 posted
<br>
by tomorrow.
<br>
<p>See these tickets about the bug if you care to look:
<br>
<a href="https://svn.open-mpi.org/trac/ompi/ticket/1166">https://svn.open-mpi.org/trac/ompi/ticket/1166</a>
<br>
<a href="https://svn.open-mpi.org/trac/ompi/ticket/1157">https://svn.open-mpi.org/trac/ompi/ticket/1157</a>
<br>
<p>On Dec 11, 2007 2:48 PM, Moreland, Kenneth &lt;kmorel_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; I recently ran into a problem with GATHERV while running some randomized
</span><br>
<span class="quotelev1">&gt; tests on my MPI code.  The problem seems to occur when running
</span><br>
<span class="quotelev1">&gt; MPI_Gatherv with a displacement on a communicator with a single process.
</span><br>
<span class="quotelev1">&gt; The code listed below exercises this errant behavior.  I have tried it
</span><br>
<span class="quotelev1">&gt; on OpenMPI 1.1.2 and 1.2.4.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Granted, this is not a situation that one would normally run into in a
</span><br>
<span class="quotelev1">&gt; real application, but I just wanted to check to make sure I was not
</span><br>
<span class="quotelev1">&gt; doing anything wrong.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Ken
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
<span class="quotelev1">&gt;   int rank;
</span><br>
<span class="quotelev1">&gt;   MPI_Comm smallComm;
</span><br>
<span class="quotelev1">&gt;   int senddata[4], recvdata[4], length, offset;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   // Split up into communicators of size 1.
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_split(MPI_COMM_WORLD, rank, 0, &amp;smallComm);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   // Now try to do a gatherv.
</span><br>
<span class="quotelev1">&gt;   senddata[0] = 5; senddata[1] = 6; senddata[2] = 7; senddata[3] = 8;
</span><br>
<span class="quotelev1">&gt;   recvdata[0] = 0; recvdata[1] = 0; recvdata[2] = 0; recvdata[3] = 0;
</span><br>
<span class="quotelev1">&gt;   length = 3;
</span><br>
<span class="quotelev1">&gt;   offset = 1;
</span><br>
<span class="quotelev1">&gt;   MPI_Gatherv(senddata, length, MPI_INT,
</span><br>
<span class="quotelev1">&gt;               recvdata, &amp;length, &amp;offset, MPI_INT, 0, smallComm);
</span><br>
<span class="quotelev1">&gt;   if (senddata[0] != recvdata[offset])
</span><br>
<span class="quotelev1">&gt;     {
</span><br>
<span class="quotelev1">&gt;     printf(&quot;%d: %d != %d?\n&quot;, rank, senddata[0], recvdata[offset]);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;   else
</span><br>
<span class="quotelev1">&gt;     {
</span><br>
<span class="quotelev1">&gt;     printf(&quot;%d: Everything OK.\n&quot;, rank);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    ****      Kenneth Moreland
</span><br>
<span class="quotelev1">&gt;     ***      Sandia National Laboratories
</span><br>
<span class="quotelev1">&gt; ***********
</span><br>
<span class="quotelev1">&gt; *** *** ***  email: kmorel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; **  ***  **  phone: (505) 844-8919
</span><br>
<span class="quotelev1">&gt;     ***      fax:   (505) 845-0833
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
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
 tmattox_at_[hidden] || timattox_at_[hidden]
    I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4644.php">Warner Yuen: "Re: [OMPI users] Problems compiling 1.2.4 using Intel Compiler	10.1.006 on Leopard"</a>
<li><strong>Previous message:</strong> <a href="4642.php">Aurelien Bouteiller: "Re: [OMPI users] error with Vprotocol pessimist"</a>
<li><strong>In reply to:</strong> <a href="4641.php">Moreland, Kenneth: "[OMPI users] Problems with GATHERV on one process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4652.php">Moreland, Kenneth: "Re: [OMPI users] Problems with GATHERV on one process"</a>
<li><strong>Reply:</strong> <a href="4652.php">Moreland, Kenneth: "Re: [OMPI users] Problems with GATHERV on one process"</a>
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
