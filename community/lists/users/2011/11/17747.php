<?
$subject_val = "Re: [OMPI users] Process Migration";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 10 09:10:07 2011" -->
<!-- isoreceived="20111110141007" -->
<!-- sent="Thu, 10 Nov 2011 09:10:02 -0500" -->
<!-- isosent="20111110141002" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Process Migration" -->
<!-- id="CAANzjEm2JGWZn1Kcy1LimPS=Mooe-CoR-PLfr+EscKfBuC6CYw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="89F44D9C-0814-428A-AD29-9E861DC13102_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Process Migration<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-10 09:10:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17748.php">Prentice Bisbal: "Re: [OMPI users] wiki and &quot;man mpirun&quot; odds, and a question"</a>
<li><strong>Previous message:</strong> <a href="17746.php">Jeff Squyres: "Re: [OMPI users] wiki and &quot;man mpirun&quot; odds, and a question"</a>
<li><strong>In reply to:</strong> <a href="17745.php">Jeff Squyres: "Re: [OMPI users] Process Migration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17749.php">Mudassar Majeed: "Re: [OMPI users] Process Migration"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The MPI standard does not provide explicit support for process
<br>
migration. However, some MPI implementations (including Open MPI) have
<br>
integrated such support based on checkpoint/restart functionality. For
<br>
more information about the checkpoint/restart process migration
<br>
functionality in Open MPI see the links below:
<br>
&nbsp;&nbsp;<a href="http://osl.iu.edu/research/ft/ompi-cr/">http://osl.iu.edu/research/ft/ompi-cr/</a>
<br>
&nbsp;&nbsp;<a href="http://osl.iu.edu/research/ft/ompi-cr/tools.php#ompi-migrate">http://osl.iu.edu/research/ft/ompi-cr/tools.php#ompi-migrate</a>
<br>
<p>I even implemented an MPI Extensions API to this functionality so you
<br>
can call it from within your application:
<br>
&nbsp;&nbsp;<a href="http://osl.iu.edu/research/ft/ompi-cr/api.php#api-cr_migrate">http://osl.iu.edu/research/ft/ompi-cr/api.php#api-cr_migrate</a>
<br>
<p>These pieces of functionality are currently only available in the Open
<br>
MPI development trunk.
<br>
<p>-- Josh
<br>
<p>On Thu, Nov 10, 2011 at 8:19 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Nov 10, 2011, at 8:11 AM, Mudassar Majeed wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you for your reply. I am implementing a load balancing function for MPI, that will balance the computation load and the communication both at a time. So my algorithm assumes that all the cores may at the end get different number of processes to run.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are you talking about over-subscribing cores? &#160;I.e., putting more than 1 MPI process on each core?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In general, that's not a good idea.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In the beginning (before that function will be called), each core will have equal number of processes. So I am thinking either to start more processes on each core (than needed) and run my function for load balancing and then block the remaining processes (on each core). In this way I will be able to achieve different number of processes per core.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI spins aggressively looking for network progress. &#160;For example, if you block in an MPI_RECV waiting for a message, Open MPI is actively banging on the CPU looking for network progress. &#160;Because of this (and other reasons), you probably do not want to over-subscribe your processors (meaning: you probably don't want to put more than 1 process per core).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Joshua Hursey
Postdoctoral Research Associate
Oak Ridge National Laboratory
<a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17748.php">Prentice Bisbal: "Re: [OMPI users] wiki and &quot;man mpirun&quot; odds, and a question"</a>
<li><strong>Previous message:</strong> <a href="17746.php">Jeff Squyres: "Re: [OMPI users] wiki and &quot;man mpirun&quot; odds, and a question"</a>
<li><strong>In reply to:</strong> <a href="17745.php">Jeff Squyres: "Re: [OMPI users] Process Migration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17749.php">Mudassar Majeed: "Re: [OMPI users] Process Migration"</a>
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
