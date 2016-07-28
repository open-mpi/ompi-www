<?
$subject_val = "Re: [OMPI users] OpenMPI LS-DYNA Connection refused";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  2 14:04:51 2011" -->
<!-- isoreceived="20110502180451" -->
<!-- sent="Mon, 2 May 2011 14:04:44 -0400" -->
<!-- isosent="20110502180444" -->
<!-- name="Robert Walters" -->
<!-- email="raw19896_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI LS-DYNA Connection refused" -->
<!-- id="9F43771548964FD5A062680A0CD97EEA_at_ce.ufl.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4DBEEDB7.4030807_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI LS-DYNA Connection refused<br>
<strong>From:</strong> Robert Walters (<em>raw19896_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-02 14:04:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16413.php">Terry Dontje: "Re: [OMPI users] OpenMPI LS-DYNA Connection refused"</a>
<li><strong>Previous message:</strong> <a href="16411.php">Terry Dontje: "Re: [OMPI users] OpenMPI LS-DYNA Connection refused"</a>
<li><strong>In reply to:</strong> <a href="16411.php">Terry Dontje: "Re: [OMPI users] OpenMPI LS-DYNA Connection refused"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16413.php">Terry Dontje: "Re: [OMPI users] OpenMPI LS-DYNA Connection refused"</a>
<li><strong>Reply:</strong> <a href="16413.php">Terry Dontje: "Re: [OMPI users] OpenMPI LS-DYNA Connection refused"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Terry,
<br>
<p>&nbsp;
<br>
<p>I was under the impression that all connections are made because of the
<br>
nature of the program that OpenMPI is invoking. LS-DYNA is a finite element
<br>
solver and for any given simulation I run, the cores on each node must
<br>
constantly communicate with one another to check for various occurrences
<br>
(contact with various pieces/parts, updating nodal coordinates, etc.).
<br>
<p>&nbsp;
<br>
<p>I've run the program using --mca mpi_preconnect_mpi 1 and the simulation has
<br>
started itself up successfully which I think means that the mpi_preconnect
<br>
passed since all of the child processes have started up on each individual
<br>
node. Thanks for the suggestion though, it's a good place to start.
<br>
<p>&nbsp;
<br>
<p>I've been worried (though I have no basis for it) that messages may be
<br>
getting queued up and hitting some kind of ceiling or timeout. As a finite
<br>
element code, I think the communication occurs on a large scale. Lots of
<br>
very small packets going back and forth quickly. A few studies have been
<br>
done by the High Performance Computing Advisory Council
<br>
(<a href="http://www.hpcadvisorycouncil.com/pdf/LS-DYNA%20_analysis.pdf">http://www.hpcadvisorycouncil.com/pdf/LS-DYNA%20_analysis.pdf</a>) and they've
<br>
suggested that LS-DYNA communicates at very, very high rates (Not sure but
<br>
from pg.15 of that document they're suggesting hundreds of millions of
<br>
messages in only a few hours). Is there any kind of buffer or queue that
<br>
OpenMPI develops if messages are created too quickly? Does it dispatch them
<br>
immediately or does it attempt to apply some kind of traffic flow control?
<br>
<p>&nbsp;
<br>
<p>Regards,
<br>
<p>Robert Walters
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;_____  
<br>
<p>From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Terry Dontje
<br>
Sent: Monday, May 02, 2011 1:45 PM
<br>
To: users_at_[hidden]
<br>
Subject: Re: [OMPI users] OpenMPI LS-DYNA Connection refused
<br>
<p>&nbsp;
<br>
<p>On 05/02/2011 01:27 PM, Robert Walters wrote: 
<br>
<p>Open-MPI Users,
<br>
<p>&nbsp;
<br>
<p>I've been using OpenMPI for a while now and am very pleased with it. I use
<br>
the OpenMPI system across eight Red Hat Linux nodes (8 cores each) on 1 Gbps
<br>
Ethernet behind a dedicated switch. After working out kinks in the
<br>
beginning, we've been using it periodically anywhere from 8 cores to 64
<br>
cores. We use a finite element software named LS-DYNA. We do not have source
<br>
code for this program, it is compiled to work with OpenMPI 1.4.1 (I use
<br>
1.4.2) and we cannot make changes or request code to see how it performs
<br>
certain functions.
<br>
<p>&nbsp;
<br>
<p><span class="quotelev1">&gt;From time to time, I will be simulating a particular &quot;job&quot; in LS-DYNA and
</span><br>
for some reason, it will quit OpenMPI issuing a MPI_ABORT command stating
<br>
that &quot;connect to address xx.xxx.xxx.xxx port xxx: Connection refused; trying
<br>
normal rsh (/usr/bin/rsh).&quot; This error comes after running for hours, which
<br>
means that connections to the node it's citing have already been made
<br>
previously. The particular node it names is random and changes from
<br>
simulation to simulation. We use SSH to communicate and we have the ports
<br>
open for node-to-node communications on any port. 
<br>
<p>I am curious what makes you think the connections to the node its citing
<br>
have been made?  Are you sure the connection between two processes have been
<br>
made?
<br>
<p><p><p>&nbsp;
<br>
<p>Does any user have experience with this error where a connection is
<br>
established, and used for several hours, but after a seemingly random period
<br>
of time the program dies stating it can't make a connection?
<br>
<p>Have you tried running the code giving mpirun the &quot;-mca mpi_preconnect_mpi
<br>
1&quot; option?  This will try (it isn't complete but close) to establish all
<br>
connections at the start of the job.
<br>
<p><pre>
-- 
Oracle
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle - Performance Technologies
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden]
 
 
</pre>
<p>
<p>
<br><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16412/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-16412/image001.gif" alt="image001.gif">
<!-- attachment="image001.gif" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16413.php">Terry Dontje: "Re: [OMPI users] OpenMPI LS-DYNA Connection refused"</a>
<li><strong>Previous message:</strong> <a href="16411.php">Terry Dontje: "Re: [OMPI users] OpenMPI LS-DYNA Connection refused"</a>
<li><strong>In reply to:</strong> <a href="16411.php">Terry Dontje: "Re: [OMPI users] OpenMPI LS-DYNA Connection refused"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16413.php">Terry Dontje: "Re: [OMPI users] OpenMPI LS-DYNA Connection refused"</a>
<li><strong>Reply:</strong> <a href="16413.php">Terry Dontje: "Re: [OMPI users] OpenMPI LS-DYNA Connection refused"</a>
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
