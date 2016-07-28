<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Feb  8 14:50:53 2007" -->
<!-- isoreceived="20070208195053" -->
<!-- sent="Thu, 8 Feb 2007 14:50:51 -0500" -->
<!-- isosent="20070208195051" -->
<!-- name="Doug Gregor" -->
<!-- email="dgregor_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI C++ serialisation" -->
<!-- id="50DF8336-4E19-4D9C-AE60-29EBBFDFE970_at_cs.indiana.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="x7abzpdnv0.fsf_at_mobius.cdacb.ernet.in" -->
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
<strong>From:</strong> Doug Gregor (<em>dgregor_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-08 14:50:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2649.php">Mark Kosmowski: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<li><strong>Previous message:</strong> <a href="2647.php">George Bosilca: "Re: [OMPI users] NetPipe benchmark &amp; spanning multiple interconnects"</a>
<li><strong>In reply to:</strong> <a href="2640.php">Alok G Singh: "[OMPI users] OpenMPI C++ serialisation"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 8, 2007, at 4:01 AM, Alok G Singh wrote:
<br>
<span class="quotelev1">&gt; I also came across a presentation [2] from PVM/MPI 06, but I could
</span><br>
<span class="quotelev1">&gt; find any code to go with it. The author seems to suggest the Boost
</span><br>
<span class="quotelev1">&gt; serialisation library (which does support stdlib containers). Is this
</span><br>
<span class="quotelev1">&gt; the way to go ? I have never used to Boost before.
</span><br>
<p>This work eventually turned into Boost.MPI. It's able to serialize  
<br>
and transmit standard library containers, user-defined types, etc,  
<br>
and is also based on the Boost serialization library. The design and  
<br>
implementation are similar to what was described in that talk and  
<br>
paper, although Boost.MPI covers a bit more of MPI (e.g.,  
<br>
collectives, datatypes).
<br>
<p>Boost.MPI was recently accepted into the Boost library collection  
<br>
(<a href="http://www.boost.org">http://www.boost.org</a>), so there is no release of Boost containing  
<br>
the MPI library, yet. The latest version of Boost.MPI is available in  
<br>
Boost.CVS (see <a href="http://boost.org/more/getting_started.html#CVS">http://boost.org/more/getting_started.html#CVS</a> for  
<br>
instructions).
<br>
<p>Documentation for Boost.MPI is available here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.generic-programming.org/~dgregor/boost.mpi/doc/">http://www.generic-programming.org/~dgregor/boost.mpi/doc/</a>
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cheers,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Doug
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2649.php">Mark Kosmowski: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<li><strong>Previous message:</strong> <a href="2647.php">George Bosilca: "Re: [OMPI users] NetPipe benchmark &amp; spanning multiple interconnects"</a>
<li><strong>In reply to:</strong> <a href="2640.php">Alok G Singh: "[OMPI users] OpenMPI C++ serialisation"</a>
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
