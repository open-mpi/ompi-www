<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 24 13:11:20 2007" -->
<!-- isoreceived="20071024171120" -->
<!-- sent="Wed, 24 Oct 2007 13:11:13 -0400" -->
<!-- isosent="20071024171113" -->
<!-- name="Gurhan" -->
<!-- email="gurhan.ozen_at_[hidden]" -->
<!-- subject="Re: [OMPI users] orterun &amp;quot;by hand&amp;quot;" -->
<!-- id="5849f1820710241011w5db4949fu2a9185fd1f14cf3a_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CB30A0AC-2E03-415A-81BF-481F68ABBC84_at_daugerresearch.com" -->
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
<strong>From:</strong> Gurhan (<em>gurhan.ozen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-24 13:11:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4299.php">George Bosilca: "Re: [OMPI users] orterun &quot;by hand&quot;"</a>
<li><strong>Previous message:</strong> <a href="4297.php">Dean Dauger, Ph. D.: "[OMPI users] orterun &quot;by hand&quot;"</a>
<li><strong>In reply to:</strong> <a href="4297.php">Dean Dauger, Ph. D.: "[OMPI users] orterun &quot;by hand&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4299.php">George Bosilca: "Re: [OMPI users] orterun &quot;by hand&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 10/24/07, Dean Dauger, Ph. D. &lt;d_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'd like to run Open MPI &quot;by hand&quot;.  I have a few ordinary
</span><br>
<span class="quotelev1">&gt; workstations I'd like to run a code using Open MPI on.  They're in
</span><br>
<span class="quotelev1">&gt; the same LAN, have unique IP addresses and hostnames, and I've
</span><br>
<span class="quotelev1">&gt; installed the default Open MPI package, and I've compiled an MPI app
</span><br>
<span class="quotelev1">&gt; against the Open MPI libraries and copied the executable to each
</span><br>
<span class="quotelev1">&gt; machine, but let's assume these machines do not have BProc, Torque,
</span><br>
<span class="quotelev1">&gt; PBS, SLURM, rsh or ssh access to each other, or NFS.  I'm looking at
</span><br>
<span class="quotelev1">&gt; the shell of each node: what do I type in to make Open MPI go?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>&nbsp;&nbsp;&nbsp;If I understand your question correctly, you need:
<br>
<p>&nbsp;&nbsp;&nbsp;mpirun  /path/to/executable  (depending on the program you may have
<br>
to give -np N argument where N is the number of instances you'd like
<br>
to run)
<br>
<p>&nbsp;and also read:
<br>
&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=running">http://www.open-mpi.org/faq/?category=running</a>
<br>
<p>&nbsp;&nbsp;Hope this helps.
<br>
&nbsp;&nbsp;Thanks.
<br>
&nbsp;&nbsp;Gurhan
<br>
<p><span class="quotelev1">&gt; If it matters, they're OS X Macs. I am welcome to be enlightened if
</span><br>
<span class="quotelev1">&gt; I've missed the documentation for this scenario.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;      Dean
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4299.php">George Bosilca: "Re: [OMPI users] orterun &quot;by hand&quot;"</a>
<li><strong>Previous message:</strong> <a href="4297.php">Dean Dauger, Ph. D.: "[OMPI users] orterun &quot;by hand&quot;"</a>
<li><strong>In reply to:</strong> <a href="4297.php">Dean Dauger, Ph. D.: "[OMPI users] orterun &quot;by hand&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4299.php">George Bosilca: "Re: [OMPI users] orterun &quot;by hand&quot;"</a>
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
