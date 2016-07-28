<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Sep 15 10:59:56 2006" -->
<!-- isoreceived="20060915145956" -->
<!-- sent="Fri, 15 Sep 2006 07:59:55 -0700 (PDT)" -->
<!-- isosent="20060915145955" -->
<!-- name="imran shaik" -->
<!-- email="sk.imran_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Perl and MPI" -->
<!-- id="20060915145955.87365.qmail_at_web37501.mail.mud.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="45083B2D.3050605_at_cchmc.org" -->
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
<strong>From:</strong> imran shaik (<em>sk.imran_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-15 10:59:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1870.php">imran shaik: "[OMPI users] MPI on large clusters"</a>
<li><strong>Previous message:</strong> <a href="1868.php">Jeff Squyres: "Re: [OMPI users] Perl and MPI"</a>
<li><strong>In reply to:</strong> <a href="1861.php">Prakash Velayutham: "Re: [OMPI users] Perl and MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1871.php">Prakash Velayutham: "Re: [OMPI users] Perl and MPI"</a>
<li><strong>Reply:</strong> <a href="1871.php">Prakash Velayutham: "Re: [OMPI users] Perl and MPI"</a>
<li><strong>Reply:</strong> <a href="1872.php">Renato Golin: "Re: [OMPI users] Perl and MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Prakash,
<br>
&nbsp;&nbsp;Do i need MPI runtime environment for sure to ue those perl modules??
<br>
&nbsp;&nbsp;Cant i use some other clustring software.?
<br>
&nbsp;&nbsp;Where can i get MPI::Simple??
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;Imran
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;
<br>
<span class="quotelev1">  &gt;Hello,
</span><br>
&nbsp;&nbsp;
<br>
<span class="quotelev1">  &gt;My users use Parallel::MPI and MPI::Simple perl modules consistently
</span><br>
<span class="quotelev1">  &gt;without issues. But I am not sure of the support for MPI-2 standard with
</span><br>
<span class="quotelev1">  &gt;either of these modules. Is there someone here that can answer that
</span><br>
<span class="quotelev1">  &gt;question too? Also those modules seem to work only with MPICH now and
</span><br>
<span class="quotelev1">  &gt;not the other MPI distributions.
</span><br>
<p>Prakash Velayutham &lt;prakash.velayutham_at_[hidden]&gt; wrote:  Renato Golin wrote:
<br>
<span class="quotelev1">&gt; On 9/13/06, imran shaik  wrote:
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
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
---------------------------------
<br>
&nbsp;All-new Yahoo! Mail - Fire up a more powerful email and get things done faster.
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1869/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1870.php">imran shaik: "[OMPI users] MPI on large clusters"</a>
<li><strong>Previous message:</strong> <a href="1868.php">Jeff Squyres: "Re: [OMPI users] Perl and MPI"</a>
<li><strong>In reply to:</strong> <a href="1861.php">Prakash Velayutham: "Re: [OMPI users] Perl and MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1871.php">Prakash Velayutham: "Re: [OMPI users] Perl and MPI"</a>
<li><strong>Reply:</strong> <a href="1871.php">Prakash Velayutham: "Re: [OMPI users] Perl and MPI"</a>
<li><strong>Reply:</strong> <a href="1872.php">Renato Golin: "Re: [OMPI users] Perl and MPI"</a>
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
