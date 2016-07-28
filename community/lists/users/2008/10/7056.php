<?
$subject_val = "Re: [OMPI users] Question about openmpi and msc nastran";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 21 04:27:01 2008" -->
<!-- isoreceived="20081021082701" -->
<!-- sent="Tue, 21 Oct 2008 10:26:56 +0200" -->
<!-- isosent="20081021082656" -->
<!-- name="Pedro G" -->
<!-- email="sanfermines_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question about openmpi and msc nastran" -->
<!-- id="6c11f45e0810210126r1dabb422x2d7b49689a6294f2_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="260B5BEEF399B143A0F6E5D1D73ED2311EFD40_at_NASCMEX01.na.mscsoftware.com" -->
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
<strong>Date:</strong> 2008-10-21 04:26:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7057.php">Joe Griffin: "Re: [OMPI users] Question about openmpi and msc nastran"</a>
<li><strong>Previous message:</strong> <a href="7055.php">Mattijs Janssens: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>In reply to:</strong> <a href="7047.php">Joe Griffin: "Re: [OMPI users] Question about openmpi and msc nastran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7057.php">Joe Griffin: "Re: [OMPI users] Question about openmpi and msc nastran"</a>
<li><strong>Reply:</strong> <a href="7057.php">Joe Griffin: "Re: [OMPI users] Question about openmpi and msc nastran"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I tried that configuration but I got a nastran error. It seems it hasn't got
<br>
an analyzer for open proc.
<br>
<p>&nbsp;&nbsp;a.solver=/msc/nastran/msc2007/linux8664/analysis.dmp.open
<br>
&nbsp;&nbsp;&nbsp;&nbsp;This file does not exist.
<br>
<p>How can I get it?
<br>
<p>On 10/20/08, Joe Griffin &lt;joe.griffin_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Pedro,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you used &quot;openmpi=yes&quot; then you will also need to specify &quot;proc=open&quot;.
</span><br>
<span class="quotelev1">&gt; I believe that was
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the specification in 2007.0.3.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Joe
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *From:* users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] *On
</span><br>
<span class="quotelev1">&gt; Behalf Of *Pedro G
</span><br>
<span class="quotelev1">&gt; *Sent:* Monday, October 20, 2008 5:18 AM
</span><br>
<span class="quotelev1">&gt; *To:* Open MPI Users
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [OMPI users] Question about openmpi and msc nastran
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 10/20/08, *Reuti* &lt;reuti_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am 20.10.2008 um 12:18 schrieb Pedro G:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would like to know if Msc Nastran supports openmpi.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have been searching in google about Nastran and Openmpi but I couldn't
</span><br>
<span class="quotelev1">&gt; find if it works or not.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now I'm using lam/mpi for nastran parallel jobs, but I have some problems
</span><br>
<span class="quotelev1">&gt; with lam, nastran and sge, so I'd like to upgrade to openmpi.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; do you have the source code of the application? If you have only the binary
</span><br>
<span class="quotelev1">&gt; compiled for LAM, then you can't do anything to change. You checked the
</span><br>
<span class="quotelev1">&gt; LAM/MPI Howto at the SGE website?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No, I don't have the source code, the application seems to be able to work
</span><br>
<span class="quotelev1">&gt; with openmpi since it has an option openmpi=yes in the command line, but I
</span><br>
<span class="quotelev1">&gt; couldn't make it to work. Anyway, I think it is not fully supported yet
</span><br>
<span class="quotelev1">&gt; since there is nothing about that option in the user manual
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; About LAM/MPI I have already read the howto and did a tight integration.
</span><br>
<span class="quotelev1">&gt; The problem is that Msc Nastran in parallel jobs start a new lam environment
</span><br>
<span class="quotelev1">&gt; getting out of control of sge.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I contacted with Nastran and they told that was a LAM/MPI or SGE problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Reuti
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7056/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7057.php">Joe Griffin: "Re: [OMPI users] Question about openmpi and msc nastran"</a>
<li><strong>Previous message:</strong> <a href="7055.php">Mattijs Janssens: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>In reply to:</strong> <a href="7047.php">Joe Griffin: "Re: [OMPI users] Question about openmpi and msc nastran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7057.php">Joe Griffin: "Re: [OMPI users] Question about openmpi and msc nastran"</a>
<li><strong>Reply:</strong> <a href="7057.php">Joe Griffin: "Re: [OMPI users] Question about openmpi and msc nastran"</a>
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
