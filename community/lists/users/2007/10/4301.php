<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 24 13:44:55 2007" -->
<!-- isoreceived="20071024174455" -->
<!-- sent="Wed, 24 Oct 2007 13:43:49 -0400" -->
<!-- isosent="20071024174349" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] orterun &amp;quot;by hand&amp;quot;" -->
<!-- id="8EC4786B-D26D-4B6E-8C8E-7AFAAC9A49E4_at_umich.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="708455C2-C1CB-4492-BDF2-D1E5710C389E_at_staff.uni-marburg.de" -->
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
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-24 13:43:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4302.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.2.4 vs 1.2"</a>
<li><strong>Previous message:</strong> <a href="4300.php">Reuti: "Re: [OMPI users] orterun &quot;by hand&quot;"</a>
<li><strong>In reply to:</strong> <a href="4300.php">Reuti: "Re: [OMPI users] orterun &quot;by hand&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4306.php">Jeff Squyres: "Re: [OMPI users] orterun &quot;by hand&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If they are OSX machines adding password-less ssh is easy,
<br>
<p>then you can make a nodefile with all the unique ip's,   if you can  
<br>
do that you can avoid putting a full resource manager on them.
<br>
<p>Brock Palen
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p>On Oct 24, 2007, at 1:39 PM, Reuti wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am 24.10.2007 um 19:21 schrieb George Bosilca:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There is no way to run Open MPI by hand, or at least not simple
</span><br>
<span class="quotelev2">&gt;&gt; way. How about xgrid on your OS X cluster ? Anyway, without a way
</span><br>
<span class="quotelev2">&gt;&gt; to start processes remotely it is really difficult to start up any
</span><br>
<span class="quotelev2">&gt;&gt; kind of parallel job.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; just to note: with PVM it's possible, but rarely used I think.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 24, 2007, at 12:06 PM, Dean Dauger, Ph. D. wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'd like to run Open MPI &quot;by hand&quot;.  I have a few ordinary
</span><br>
<span class="quotelev3">&gt;&gt;&gt; workstations I'd like to run a code using Open MPI on.  They're in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the same LAN, have unique IP addresses and hostnames, and I've
</span><br>
<span class="quotelev3">&gt;&gt;&gt; installed the default Open MPI package, and I've compiled an MPI app
</span><br>
<span class="quotelev3">&gt;&gt;&gt; against the Open MPI libraries and copied the executable to each
</span><br>
<span class="quotelev3">&gt;&gt;&gt; machine, but let's assume these machines do not have BProc, Torque,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PBS, SLURM, rsh or ssh access to each other, or NFS.  I'm looking at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the shell of each node: what do I type in to make Open MPI go?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If it matters, they're OS X Macs. I am welcome to be enlightened if
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've missed the documentation for this scenario.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Dean
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4302.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.2.4 vs 1.2"</a>
<li><strong>Previous message:</strong> <a href="4300.php">Reuti: "Re: [OMPI users] orterun &quot;by hand&quot;"</a>
<li><strong>In reply to:</strong> <a href="4300.php">Reuti: "Re: [OMPI users] orterun &quot;by hand&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4306.php">Jeff Squyres: "Re: [OMPI users] orterun &quot;by hand&quot;"</a>
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
