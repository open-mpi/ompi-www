<?
$subject_val = "Re: [OMPI users] OpenMPI deadlocks and race conditions ?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 15 03:20:14 2009" -->
<!-- isoreceived="20090515072014" -->
<!-- sent="Fri, 15 May 2009 09:19:49 +0200" -->
<!-- isosent="20090515071949" -->
<!-- name="Fran&#231;ois PELLEGRINI" -->
<!-- email="francois.pellegrini_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI deadlocks and race conditions ?" -->
<!-- id="4A0D1795.2030404_at_labri.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="mailman.6285.1242365014.6040.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI deadlocks and race conditions ?<br>
<strong>From:</strong> Fran&#231;ois PELLEGRINI (<em>francois.pellegrini_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-15 03:19:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9353.php">David O. Gunter: "Re: [OMPI users] OpenMPI 1.3.2 with PathScale 3.2"</a>
<li><strong>Previous message:</strong> <a href="9351.php">Silviu Groza: "Re: [OMPI users] Problem installing Dalton with OpenMPI over PelicanHPC"</a>
<li><strong>Maybe in reply to:</strong> <a href="9321.php">Fran&#231;ois PELLEGRINI: "[OMPI users] OpenMPI deadlocks and race conditions ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9373.php">Eugene Loh: "Re: [OMPI users] OpenMPI deadlocks and race conditions ?"</a>
<li><strong>Reply:</strong> <a href="9373.php">Eugene Loh: "Re: [OMPI users] OpenMPI deadlocks and race conditions ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Bonjour Eugene,
<br>
<p>users-request_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; Date: Thu, 14 May 2009 17:06:07 -0700
</span><br>
<span class="quotelev1">&gt; From: Eugene Loh &lt;Eugene.Loh_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] OpenMPI deadlocks and race conditions ?
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;4A0CB1EF.5050403_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; format=flowed; charset=ISO-8859-1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Fran?ois PELLEGRINI wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I sometimes run into deadlocks in OpenMPI (1.3.3a1r21206), when
</span><br>
<span class="quotelev2">&gt;&gt; running my MPI+threaded PT-Scotch software.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; So, are there multiple threads per process that perform message-passing 
</span><br>
<span class="quotelev1">&gt; operations?
</span><br>
<p>Yes. I use the MPI_THREAD_MULTIPLE level of MPI.
<br>
<p>In some parts of the code, two threads can perform
<br>
simultaneous point-to-point and collective communication.
<br>
When they do so, it is on duplicated or split communicators,
<br>
not on the same one.
<br>
<p><span class="quotelev1">&gt; Other comments below.
</span><br>
<p>Thanks for the analysis. So, to synthesize, you think that,
<br>
for the part you reported on, valgrind (helgrind) is wrong,
<br>
because these concurrent accesses on shared data are performed
<br>
after some software lock has been set, such that no two
<br>
communication routines can write data at the same place at
<br>
the same time.
<br>
<p>However, I still wonder about the deadlocks I have. Maybe
<br>
there is still a bug in my code and I update data structures
<br>
that are used by another communicating thread, but helgrind
<br>
would have noticed them, I guess. As I reported, what is most
<br>
puzzling to me is that barrier communication on one thread is
<br>
completed by a waitall on another thread, on another (duplicated)
<br>
communicator.
<br>
<p>When communicators are duplicated or split, do they still share
<br>
some low-level data ? If so, maybe this is where the problem lies,
<br>
if this data is not fully protected ?
<br>
<p>Thanks for the help,
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;f.p.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9353.php">David O. Gunter: "Re: [OMPI users] OpenMPI 1.3.2 with PathScale 3.2"</a>
<li><strong>Previous message:</strong> <a href="9351.php">Silviu Groza: "Re: [OMPI users] Problem installing Dalton with OpenMPI over PelicanHPC"</a>
<li><strong>Maybe in reply to:</strong> <a href="9321.php">Fran&#231;ois PELLEGRINI: "[OMPI users] OpenMPI deadlocks and race conditions ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9373.php">Eugene Loh: "Re: [OMPI users] OpenMPI deadlocks and race conditions ?"</a>
<li><strong>Reply:</strong> <a href="9373.php">Eugene Loh: "Re: [OMPI users] OpenMPI deadlocks and race conditions ?"</a>
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
