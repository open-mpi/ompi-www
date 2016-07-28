<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep 13 10:52:48 2006" -->
<!-- isoreceived="20060913145248" -->
<!-- sent="Wed, 13 Sep 2006 15:52:45 +0100" -->
<!-- isosent="20060913145245" -->
<!-- name="Renato Golin" -->
<!-- email="rengolin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Perl and MPI" -->
<!-- id="d9b9d95f0609130752p2ce98144ka80ad464d0919aba_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20060913063733.18019.qmail_at_web37505.mail.mud.yahoo.com" -->
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
<strong>From:</strong> Renato Golin (<em>rengolin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-13 10:52:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1859.php">Ralph H Castain: "Re: [OMPI users] Perl and MPI"</a>
<li><strong>Previous message:</strong> <a href="1857.php">Jayanta Roy: "[OMPI users] problem with running mpi"</a>
<li><strong>In reply to:</strong> <a href="1855.php">imran shaik: "[OMPI users] Perl and  MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1859.php">Ralph H Castain: "Re: [OMPI users] Perl and MPI"</a>
<li><strong>Reply:</strong> <a href="1859.php">Ralph H Castain: "Re: [OMPI users] Perl and MPI"</a>
<li><strong>Reply:</strong> <a href="1861.php">Prakash Velayutham: "Re: [OMPI users] Perl and MPI"</a>
<li><strong>Reply:</strong> <a href="1866.php">imran shaik: "Re: [OMPI users] Perl and MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 9/13/06, imran shaik &lt;sk.imran_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;  I need to run parallel jobs on a cluster typically of size 600 nodes and
</span><br>
<span class="quotelev1">&gt; running SGE, but the programmers are good at perl but not C or C++. So i
</span><br>
<span class="quotelev1">&gt; thought of MPI, but i dont know whether it has perl support?
</span><br>
<p>Hi Imran,
<br>
<p>SGE will dispatch process among the nodes of your cluster but it does
<br>
not support interprocess communication, which MPI does. If your
<br>
problem is easily splittable (like parse a large apache log, read a
<br>
large xml list of things) you might be able to split the data and
<br>
spawn as many process as you can.
<br>
<p>I do it using LSF (another dispatcher) and a Makefile that controls
<br>
the dependencies and spawn the processes (using make's -j flag) and it
<br>
works quite well. But if your job need the communication (like
<br>
processing big matrices, collecting and distributing data among
<br>
processes etc) you'll need an interprocess communication and that's
<br>
what MPI is best at.
<br>
<p>In a nutshell, you'll need the runtime environment to run MPI programs
<br>
as well as you need SGE's runtime environments on every node to
<br>
dispatch jobs and collect information.
<br>
<p>About MPI bindings for Perl, there's this module:
<br>
<a href="http://search.cpan.org/~josh/Parallel-MPI-0.03/MPI.pm">http://search.cpan.org/~josh/Parallel-MPI-0.03/MPI.pm</a>
<br>
<p>but it's far too young to be trustworthy, IMHO, and you'll probably
<br>
need the MPI runtime on all nodes as well...
<br>
<p>cheers,
<br>
--renato
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1859.php">Ralph H Castain: "Re: [OMPI users] Perl and MPI"</a>
<li><strong>Previous message:</strong> <a href="1857.php">Jayanta Roy: "[OMPI users] problem with running mpi"</a>
<li><strong>In reply to:</strong> <a href="1855.php">imran shaik: "[OMPI users] Perl and  MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1859.php">Ralph H Castain: "Re: [OMPI users] Perl and MPI"</a>
<li><strong>Reply:</strong> <a href="1859.php">Ralph H Castain: "Re: [OMPI users] Perl and MPI"</a>
<li><strong>Reply:</strong> <a href="1861.php">Prakash Velayutham: "Re: [OMPI users] Perl and MPI"</a>
<li><strong>Reply:</strong> <a href="1866.php">imran shaik: "Re: [OMPI users] Perl and MPI"</a>
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
