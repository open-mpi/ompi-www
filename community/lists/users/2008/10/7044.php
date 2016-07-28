<?
$subject_val = "Re: [OMPI users] Question about openmpi and msc nastran";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 20 09:07:19 2008" -->
<!-- isoreceived="20081020130719" -->
<!-- sent="Mon, 20 Oct 2008 15:07:07 +0200" -->
<!-- isosent="20081020130707" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question about openmpi and msc nastran" -->
<!-- id="019A5A6B-539F-42F9-9118-5AEE7AC622FE_at_staff.uni-marburg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="6c11f45e0810200517k1607df25u9a7843409f8f573e_at_mail.gmail.com" -->
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
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-20 09:07:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7045.php">Pedro G: "Re: [OMPI users] Question about openmpi and msc nastran"</a>
<li><strong>Previous message:</strong> <a href="7043.php">Pedro G: "Re: [OMPI users] Question about openmpi and msc nastran"</a>
<li><strong>In reply to:</strong> <a href="7043.php">Pedro G: "Re: [OMPI users] Question about openmpi and msc nastran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7045.php">Pedro G: "Re: [OMPI users] Question about openmpi and msc nastran"</a>
<li><strong>Reply:</strong> <a href="7045.php">Pedro G: "Re: [OMPI users] Question about openmpi and msc nastran"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 20.10.2008 um 14:17 schrieb Pedro G:
<br>
<p><span class="quotelev1">&gt; On 10/20/08, Reuti &lt;reuti_at_[hidden]&gt; wrote: Hi,
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
<span class="quotelev1">&gt; I have been searching in google about Nastran and Openmpi but I  
</span><br>
<span class="quotelev1">&gt; couldn't find if it works or not.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now I'm using lam/mpi for nastran parallel jobs, but I have some  
</span><br>
<span class="quotelev1">&gt; problems with lam, nastran and sge, so I'd like to upgrade to openmpi.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; do you have the source code of the application? If you have only  
</span><br>
<span class="quotelev1">&gt; the binary compiled for LAM, then you can't do anything to change.  
</span><br>
<span class="quotelev1">&gt; You checked the LAM/MPI Howto at the SGE website?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No, I don't have the source code, the application seems to be able  
</span><br>
<span class="quotelev1">&gt; to work with openmpi since it has an option openmpi=yes in the  
</span><br>
<span class="quotelev1">&gt; command line, but I couldn't make it to work. Anyway, I think it is  
</span><br>
<span class="quotelev1">&gt; not fully supported yet since there is nothing about that option in  
</span><br>
<span class="quotelev1">&gt; the user manual
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; About LAM/MPI I have already read the howto and did a tight  
</span><br>
<span class="quotelev1">&gt; integration. The problem is that Msc Nastran in parallel jobs start  
</span><br>
<span class="quotelev1">&gt; a new lam environment getting out of control of sge.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I contacted with Nastran and they told that was a LAM/MPI or SGE  
</span><br>
<span class="quotelev1">&gt; problem.
</span><br>
<p>No, IMO it's not. When they start a new LAM/MPI environment, they are  
<br>
violating the granted slot allocation. What about the following  
<br>
(although it would be more a discussion on the [GE suers] list:
<br>
<p>- Suppose you have a tight LAM/MPI integration for other MPI programs.
<br>
- In your jobscript, change the $PATH, so that the found &quot;lamboot&quot;  
<br>
points to e.g. /bin/true - i.e. doing nothing.
<br>
- When they then call &quot;mpirun C&quot;, they should get the already started  
<br>
LAM daemons.
<br>
- If mpiexec is not working, maybe the found mpiexec must also point  
<br>
to a script to supply the proper &quot;-np ...&quot; values.
<br>
- When they call &quot;mpiexec&quot; in one-shot-mode, it must also be mapped  
<br>
to a script to execute just the program, but not to do a &quot;lamboot&quot;.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7045.php">Pedro G: "Re: [OMPI users] Question about openmpi and msc nastran"</a>
<li><strong>Previous message:</strong> <a href="7043.php">Pedro G: "Re: [OMPI users] Question about openmpi and msc nastran"</a>
<li><strong>In reply to:</strong> <a href="7043.php">Pedro G: "Re: [OMPI users] Question about openmpi and msc nastran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7045.php">Pedro G: "Re: [OMPI users] Question about openmpi and msc nastran"</a>
<li><strong>Reply:</strong> <a href="7045.php">Pedro G: "Re: [OMPI users] Question about openmpi and msc nastran"</a>
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
