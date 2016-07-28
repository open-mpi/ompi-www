<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Sep 15 10:24:17 2006" -->
<!-- isoreceived="20060915142417" -->
<!-- sent="Fri, 15 Sep 2006 07:23:56 -0700 (PDT)" -->
<!-- isosent="20060915142356" -->
<!-- name="imran shaik" -->
<!-- email="sk.imran_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Perl and MPI" -->
<!-- id="20060915142356.54092.qmail_at_web37506.mail.mud.yahoo.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> imran shaik (<em>sk.imran_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-15 10:23:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1867.php">imran shaik: "Re: [OMPI users] Perl and MPI"</a>
<li><strong>Previous message:</strong> <a href="1865.php">Marcin Skoczylas: "Re: [OMPI users] MPI_Recv, is it possible to switch on/off aggresive mode during runtime?"</a>
<li><strong>In reply to:</strong> <a href="1858.php">Renato Golin: "Re: [OMPI users] Perl and MPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi renato,
<br>
&nbsp;&nbsp;thanks man!
<br>
&nbsp;&nbsp;That was the detailed explanation.
<br>
&nbsp;&nbsp;I got teh perl module too...
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;Imran
<br>
<p>Renato Golin &lt;rengolin_at_[hidden]&gt; wrote:  On 9/13/06, imran shaik  wrote:
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
Do you Yahoo!?
<br>
&nbsp;Get on board. You're invited to try the new Yahoo! Mail.
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1866/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1867.php">imran shaik: "Re: [OMPI users] Perl and MPI"</a>
<li><strong>Previous message:</strong> <a href="1865.php">Marcin Skoczylas: "Re: [OMPI users] MPI_Recv, is it possible to switch on/off aggresive mode during runtime?"</a>
<li><strong>In reply to:</strong> <a href="1858.php">Renato Golin: "Re: [OMPI users] Perl and MPI"</a>
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
