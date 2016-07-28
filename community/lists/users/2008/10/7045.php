<?
$subject_val = "Re: [OMPI users] Question about openmpi and msc nastran";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 20 09:21:19 2008" -->
<!-- isoreceived="20081020132119" -->
<!-- sent="Mon, 20 Oct 2008 15:21:15 +0200" -->
<!-- isosent="20081020132115" -->
<!-- name="Pedro G" -->
<!-- email="sanfermines_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question about openmpi and msc nastran" -->
<!-- id="6c11f45e0810200621v7f01f5bfqf85fa483134fd7b1_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="019A5A6B-539F-42F9-9118-5AEE7AC622FE_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Question about openmpi and msc nastran<br>
<strong>From:</strong> Pedro G (<em>sanfermines_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-20 09:21:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7046.php">Joe Griffin: "Re: [OMPI users] Question about openmpi and msc nastran"</a>
<li><strong>Previous message:</strong> <a href="7044.php">Reuti: "Re: [OMPI users] Question about openmpi and msc nastran"</a>
<li><strong>In reply to:</strong> <a href="7044.php">Reuti: "Re: [OMPI users] Question about openmpi and msc nastran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7048.php">Joe Griffin: "Re: [OMPI users] Question about openmpi and msc nastran"</a>
<li><strong>Reply:</strong> <a href="7048.php">Joe Griffin: "Re: [OMPI users] Question about openmpi and msc nastran"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok I will try it.
<br>
<p>Thank you very much.
<br>
<p><p><p>On 10/20/08, Reuti &lt;reuti_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am 20.10.2008 um 14:17 schrieb Pedro G:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 10/20/08, Reuti &lt;reuti_at_[hidden]&gt; wrote: Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Am 20.10.2008 um 12:18 schrieb Pedro G:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I would like to know if Msc Nastran supports openmpi.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have been searching in google about Nastran and Openmpi but I couldn't
</span><br>
<span class="quotelev2">&gt;&gt; find if it works or not.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Now I'm using lam/mpi for nastran parallel jobs, but I have some problems
</span><br>
<span class="quotelev2">&gt;&gt; with lam, nastran and sge, so I'd like to upgrade to openmpi.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; do you have the source code of the application? If you have only the
</span><br>
<span class="quotelev2">&gt;&gt; binary compiled for LAM, then you can't do anything to change. You checked
</span><br>
<span class="quotelev2">&gt;&gt; the LAM/MPI Howto at the SGE website?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; No, I don't have the source code, the application seems to be able to work
</span><br>
<span class="quotelev2">&gt;&gt; with openmpi since it has an option openmpi=yes in the command line, but I
</span><br>
<span class="quotelev2">&gt;&gt; couldn't make it to work. Anyway, I think it is not fully supported yet
</span><br>
<span class="quotelev2">&gt;&gt; since there is nothing about that option in the user manual
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; About LAM/MPI I have already read the howto and did a tight integration.
</span><br>
<span class="quotelev2">&gt;&gt; The problem is that Msc Nastran in parallel jobs start a new lam environment
</span><br>
<span class="quotelev2">&gt;&gt; getting out of control of sge.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I contacted with Nastran and they told that was a LAM/MPI or SGE problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No, IMO it's not. When they start a new LAM/MPI environment, they are
</span><br>
<span class="quotelev1">&gt; violating the granted slot allocation. What about the following (although it
</span><br>
<span class="quotelev1">&gt; would be more a discussion on the [GE suers] list:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Suppose you have a tight LAM/MPI integration for other MPI programs.
</span><br>
<span class="quotelev1">&gt; - In your jobscript, change the $PATH, so that the found &quot;lamboot&quot; points
</span><br>
<span class="quotelev1">&gt; to e.g. /bin/true - i.e. doing nothing.
</span><br>
<span class="quotelev1">&gt; - When they then call &quot;mpirun C&quot;, they should get the already started LAM
</span><br>
<span class="quotelev1">&gt; daemons.
</span><br>
<span class="quotelev1">&gt; - If mpiexec is not working, maybe the found mpiexec must also point to a
</span><br>
<span class="quotelev1">&gt; script to supply the proper &quot;-np ...&quot; values.
</span><br>
<span class="quotelev1">&gt; - When they call &quot;mpiexec&quot; in one-shot-mode, it must also be mapped to a
</span><br>
<span class="quotelev1">&gt; script to execute just the program, but not to do a &quot;lamboot&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- Reuti
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev2">&gt;&gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7045/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7046.php">Joe Griffin: "Re: [OMPI users] Question about openmpi and msc nastran"</a>
<li><strong>Previous message:</strong> <a href="7044.php">Reuti: "Re: [OMPI users] Question about openmpi and msc nastran"</a>
<li><strong>In reply to:</strong> <a href="7044.php">Reuti: "Re: [OMPI users] Question about openmpi and msc nastran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7048.php">Joe Griffin: "Re: [OMPI users] Question about openmpi and msc nastran"</a>
<li><strong>Reply:</strong> <a href="7048.php">Joe Griffin: "Re: [OMPI users] Question about openmpi and msc nastran"</a>
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
