<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Sep 15 10:36:05 2006" -->
<!-- isoreceived="20060915143605" -->
<!-- sent="Fri, 15 Sep 2006 07:36:04 -0700 (PDT)" -->
<!-- isosent="20060915143604" -->
<!-- name="imran shaik" -->
<!-- email="sk.imran_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Perl and MPI" -->
<!-- id="20060915143604.61991.qmail_at_web37505.mail.mud.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="C12D79DB.467A%rhc_at_lanl.gov" -->
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
<strong>Date:</strong> 2006-09-15 10:36:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1868.php">Jeff Squyres: "Re: [OMPI users] Perl and MPI"</a>
<li><strong>Previous message:</strong> <a href="1866.php">imran shaik: "Re: [OMPI users] Perl and MPI"</a>
<li><strong>In reply to:</strong> <a href="1859.php">Ralph H Castain: "Re: [OMPI users] Perl and MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1868.php">Jeff Squyres: "Re: [OMPI users] Perl and MPI"</a>
<li><strong>Reply:</strong> <a href="1868.php">Jeff Squyres: "Re: [OMPI users] Perl and MPI"</a>
<li><strong>Reply:</strong> <a href="1875.php">George Bosilca: "Re: [OMPI users] Perl and MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi  Renato,
<br>
&nbsp;&nbsp;thanks for your response.
<br>
&nbsp;&nbsp;Can you elaborate on this.? 
<br>
&nbsp;&nbsp;I have few doubts as well:
<br>
&nbsp;&nbsp;1) OpenMPI runtime supports SGE?? Does it uses SGE instead of MPI runtime when it finds SGE running??
<br>
&nbsp;&nbsp;2) Is it possible to check point and run MPI jobs?
<br>
&nbsp;&nbsp;3) Is it possible to add and remove processes dynamically from the MPI communicator?
<br>
&nbsp;&nbsp;5) When do we actually need many different communicators?
<br>
&nbsp;&nbsp;4) Is MPI only suitable for low latency communication in  a cluster environment?
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;
<br>
<p>Ralph H Castain &lt;rhc_at_[hidden]&gt; wrote:  I can't speak to the Perl bindings, but Open MPI's runtime already supports
<br>
SGE, so all you have to do is &quot;mpirun&quot; like usual and we take care of the
<br>
rest. You may have to check your version of Open MPI as this capability was
<br>
added in the more recent releases.
<br>
<p>Ralph
<br>
<p><p>On 9/13/06 8:52 AM, &quot;Renato Golin&quot;  wrote:
<br>
<p><span class="quotelev1">&gt; On 9/13/06, imran shaik  wrote:
</span><br>
<span class="quotelev2">&gt;&gt;  I need to run parallel jobs on a cluster typically of size 600 nodes and
</span><br>
<span class="quotelev2">&gt;&gt; running SGE, but the programmers are good at perl but not C or C++. So i
</span><br>
<span class="quotelev2">&gt;&gt; thought of MPI, but i dont know whether it has perl support?
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p>_______________________________________________
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
Talk is cheap. Use Yahoo! Messenger to make PC-to-Phone calls.  Great rates starting at 1&#162;/min.
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1867/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1868.php">Jeff Squyres: "Re: [OMPI users] Perl and MPI"</a>
<li><strong>Previous message:</strong> <a href="1866.php">imran shaik: "Re: [OMPI users] Perl and MPI"</a>
<li><strong>In reply to:</strong> <a href="1859.php">Ralph H Castain: "Re: [OMPI users] Perl and MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1868.php">Jeff Squyres: "Re: [OMPI users] Perl and MPI"</a>
<li><strong>Reply:</strong> <a href="1868.php">Jeff Squyres: "Re: [OMPI users] Perl and MPI"</a>
<li><strong>Reply:</strong> <a href="1875.php">George Bosilca: "Re: [OMPI users] Perl and MPI"</a>
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
