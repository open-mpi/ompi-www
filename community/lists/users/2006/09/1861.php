<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep 13 13:09:27 2006" -->
<!-- isoreceived="20060913170927" -->
<!-- sent="Wed, 13 Sep 2006 13:09:01 -0400" -->
<!-- isosent="20060913170901" -->
<!-- name="Prakash Velayutham" -->
<!-- email="prakash.velayutham_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Perl and MPI" -->
<!-- id="45083B2D.3050605_at_cchmc.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="d9b9d95f0609130752p2ce98144ka80ad464d0919aba_at_mail.gmail.com" -->
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
<strong>From:</strong> Prakash Velayutham (<em>prakash.velayutham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-13 13:09:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1862.php">Christian Kauhaus: "Re: [OMPI users] OpenMPI + NAT"</a>
<li><strong>Previous message:</strong> <a href="1860.php">Jeff Squyres: "Re: [OMPI users] Perl and MPI"</a>
<li><strong>In reply to:</strong> <a href="1858.php">Renato Golin: "Re: [OMPI users] Perl and MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1869.php">imran shaik: "Re: [OMPI users] Perl and MPI"</a>
<li><strong>Reply:</strong> <a href="1869.php">imran shaik: "Re: [OMPI users] Perl and MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Renato Golin wrote:
<br>
<span class="quotelev1">&gt; On 9/13/06, imran shaik &lt;sk.imran_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt;  I need to run parallel jobs on a cluster typically of size 600 nodes and
</span><br>
<span class="quotelev2">&gt;&gt; running SGE, but the programmers are good at perl but not C or C++. So i
</span><br>
<span class="quotelev2">&gt;&gt; thought of MPI, but i dont know whether it has perl support?
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Imran,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SGE will dispatch process among the nodes of your cluster but it does
</span><br>
<span class="quotelev1">&gt; not support interprocess communication, which MPI does. If your
</span><br>
<span class="quotelev1">&gt; problem is easily splittable (like parse a large apache log, read a
</span><br>
<span class="quotelev1">&gt; large xml list of things) you might be able to split the data and
</span><br>
<span class="quotelev1">&gt; spawn as many process as you can.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I do it using LSF (another dispatcher) and a Makefile that controls
</span><br>
<span class="quotelev1">&gt; the dependencies and spawn the processes (using make's -j flag) and it
</span><br>
<span class="quotelev1">&gt; works quite well. But if your job need the communication (like
</span><br>
<span class="quotelev1">&gt; processing big matrices, collecting and distributing data among
</span><br>
<span class="quotelev1">&gt; processes etc) you'll need an interprocess communication and that's
</span><br>
<span class="quotelev1">&gt; what MPI is best at.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In a nutshell, you'll need the runtime environment to run MPI programs
</span><br>
<span class="quotelev1">&gt; as well as you need SGE's runtime environments on every node to
</span><br>
<span class="quotelev1">&gt; dispatch jobs and collect information.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; About MPI bindings for Perl, there's this module:
</span><br>
<span class="quotelev1">&gt; <a href="http://search.cpan.org/~josh/Parallel-MPI-0.03/MPI.pm">http://search.cpan.org/~josh/Parallel-MPI-0.03/MPI.pm</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but it's far too young to be trustworthy, IMHO, and you'll probably
</span><br>
<span class="quotelev1">&gt; need the MPI runtime on all nodes as well...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cheers,
</span><br>
<span class="quotelev1">&gt; --renato
</span><br>
Hello,
<br>
<p>My users use Parallel::MPI and MPI::Simple perl modules consistently
<br>
without issues. But I am not sure of the support for MPI-2 standard with
<br>
either of these modules. Is there someone here that can answer that
<br>
question too? Also those modules seem to work only with MPICH now and
<br>
not the other MPI distributions.
<br>
<p>Prakash
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1862.php">Christian Kauhaus: "Re: [OMPI users] OpenMPI + NAT"</a>
<li><strong>Previous message:</strong> <a href="1860.php">Jeff Squyres: "Re: [OMPI users] Perl and MPI"</a>
<li><strong>In reply to:</strong> <a href="1858.php">Renato Golin: "Re: [OMPI users] Perl and MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1869.php">imran shaik: "Re: [OMPI users] Perl and MPI"</a>
<li><strong>Reply:</strong> <a href="1869.php">imran shaik: "Re: [OMPI users] Perl and MPI"</a>
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
