<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Sep 15 11:40:06 2006" -->
<!-- isoreceived="20060915154006" -->
<!-- sent="Fri, 15 Sep 2006 08:40:04 -0700 (PDT)" -->
<!-- isosent="20060915154004" -->
<!-- name="imran shaik" -->
<!-- email="sk.imran_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Perl and MPI" -->
<!-- id="20060915154004.24536.qmail_at_web37509.mail.mud.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="450AC692.6030804_at_cchmc.org" -->
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
<strong>Date:</strong> 2006-09-15 11:40:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1874.php">imran shaik: "Re: [OMPI users] Perl and MPI"</a>
<li><strong>Previous message:</strong> <a href="1872.php">Renato Golin: "Re: [OMPI users] Perl and MPI"</a>
<li><strong>In reply to:</strong> <a href="1871.php">Prakash Velayutham: "Re: [OMPI users] Perl and MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1872.php">Renato Golin: "Re: [OMPI users] Perl and MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks prakash.
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;Cheers,
<br>
&nbsp;&nbsp;Imran
<br>
&nbsp;&nbsp;
<br>
<p>Prakash Velayutham &lt;prakash.velayutham_at_[hidden]&gt; wrote:  AFAIK, both those modules work with MPI standard API and not others. The
<br>
MPI::Simple I mentioned is actually Parallel::MPI::Simple. Both
<br>
Parallel::MPI and Parallel::MPI::Simple are available from CPAN.
<br>
<p>Prakash
<br>
<p>imran shaik wrote:
<br>
<span class="quotelev1">&gt; Hi Prakash,
</span><br>
<span class="quotelev1">&gt;   Do i need MPI runtime environment for sure to ue those perl modules??
</span><br>
<span class="quotelev1">&gt;   Cant i use some other clustring software.?
</span><br>
<span class="quotelev1">&gt;   Where can i get MPI::Simple??
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt;   Imran
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;   &gt;Hello,
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;   &gt;My users use Parallel::MPI and MPI::Simple perl modules consistently
</span><br>
<span class="quotelev2">&gt;   &gt;without issues. But I am not sure of the support for MPI-2 standard with
</span><br>
<span class="quotelev2">&gt;   &gt;either of these modules. Is there someone here that can answer that
</span><br>
<span class="quotelev2">&gt;   &gt;question too? Also those modules seem to work only with MPICH now and
</span><br>
<span class="quotelev2">&gt;   &gt;not the other MPI distributions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Prakash Velayutham 
</span><br>
&nbsp;wrote:  Renato Golin wrote:
<br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; On 9/13/06, imran shaik  wrote:
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  I need to run parallel jobs on a cluster typically of size 600 nodes and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; running SGE, but the programmers are good at perl but not C or C++. So i
</span><br>
<span class="quotelev3">&gt;&gt;&gt; thought of MPI, but i dont know whether it has perl support?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; Hi Imran,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; SGE will dispatch process among the nodes of your cluster but it does
</span><br>
<span class="quotelev2">&gt;&gt; not support interprocess communication, which MPI does. If your
</span><br>
<span class="quotelev2">&gt;&gt; problem is easily splittable (like parse a large apache log, read a
</span><br>
<span class="quotelev2">&gt;&gt; large xml list of things) you might be able to split the data and
</span><br>
<span class="quotelev2">&gt;&gt; spawn as many process as you can.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I do it using LSF (another dispatcher) and a Makefile that controls
</span><br>
<span class="quotelev2">&gt;&gt; the dependencies and spawn the processes (using make's -j flag) and it
</span><br>
<span class="quotelev2">&gt;&gt; works quite well. But if your job need the communication (like
</span><br>
<span class="quotelev2">&gt;&gt; processing big matrices, collecting and distributing data among
</span><br>
<span class="quotelev2">&gt;&gt; processes etc) you'll need an interprocess communication and that's
</span><br>
<span class="quotelev2">&gt;&gt; what MPI is best at.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In a nutshell, you'll need the runtime environment to run MPI programs
</span><br>
<span class="quotelev2">&gt;&gt; as well as you need SGE's runtime environments on every node to
</span><br>
<span class="quotelev2">&gt;&gt; dispatch jobs and collect information.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; About MPI bindings for Perl, there's this module:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://search.cpan.org/~josh/Parallel-MPI-0.03/MPI.pm">http://search.cpan.org/~josh/Parallel-MPI-0.03/MPI.pm</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; but it's far too young to be trustworthy, IMHO, and you'll probably
</span><br>
<span class="quotelev2">&gt;&gt; need the MPI runtime on all nodes as well...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; cheers,
</span><br>
<span class="quotelev2">&gt;&gt; --renato
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My users use Parallel::MPI and MPI::Simple perl modules consistently
</span><br>
<span class="quotelev1">&gt; without issues. But I am not sure of the support for MPI-2 standard with
</span><br>
<span class="quotelev1">&gt; either of these modules. Is there someone here that can answer that
</span><br>
<span class="quotelev1">&gt; question too? Also those modules seem to work only with MPICH now and
</span><br>
<span class="quotelev1">&gt; not the other MPI distributions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Prakash
</span><br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
---------------------------------
<br>
Do you Yahoo!?
<br>
&nbsp;Get on board. You're invited to try the new Yahoo! Mail.
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1873/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1874.php">imran shaik: "Re: [OMPI users] Perl and MPI"</a>
<li><strong>Previous message:</strong> <a href="1872.php">Renato Golin: "Re: [OMPI users] Perl and MPI"</a>
<li><strong>In reply to:</strong> <a href="1871.php">Prakash Velayutham: "Re: [OMPI users] Perl and MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1872.php">Renato Golin: "Re: [OMPI users] Perl and MPI"</a>
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
