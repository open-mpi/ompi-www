<?
$subject_val = "Re: [OMPI users] ompi-restart using different nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  9 11:28:57 2009" -->
<!-- isoreceived="20091209162857" -->
<!-- sent="Wed, 9 Dec 2009 11:28:54 -0500" -->
<!-- isosent="20091209162854" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ompi-restart using different nodes" -->
<!-- id="7646A944-E45B-4713-ACF9-B4128B80CE01_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4B1E9D6F.2010707_at_rqchp.qc.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] ompi-restart using different nodes<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-09 11:28:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11477.php">Jonathan Ferland: "Re: [OMPI users] ompi-restart using different nodes"</a>
<li><strong>Previous message:</strong> <a href="11475.php">Jeff Squyres: "Re: [OMPI users] orte error"</a>
<li><strong>In reply to:</strong> <a href="11455.php">Jonathan Ferland: "Re: [OMPI users] ompi-restart using different nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11477.php">Jonathan Ferland: "Re: [OMPI users] ompi-restart using different nodes"</a>
<li><strong>Reply:</strong> <a href="11477.php">Jonathan Ferland: "Re: [OMPI users] ompi-restart using different nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
So I tried to reproduce this problem today, and everything worked fine  
<br>
for me using the trunk. I haven't tested v1.3/v1.4 yet.
<br>
<p>I tried checkpointing with one hostfile then restarting with each of  
<br>
the following:
<br>
&nbsp;&nbsp;- No hostfile
<br>
&nbsp;&nbsp;- a hostfile with completely different machines
<br>
&nbsp;&nbsp;- a hostfile with the same machines in the opposite order
<br>
<p><p>I suspect that the problem is not with Open MPI, but your system  
<br>
interacting with BLCR. Usually when people cannot restart on a  
<br>
different node they have problems with the 'prelink' feature on Linux.  
<br>
BLCR has a FAQ item on this:
<br>
&nbsp;&nbsp;&nbsp;<a href="https://upc-bugs.lbl.gov//blcr/doc/html/FAQ.html#prelink">https://upc-bugs.lbl.gov//blcr/doc/html/FAQ.html#prelink</a>
<br>
<p>So if this is your problem then you will probably not be able to  
<br>
checkpoint a single process (non-MPI) application on one node and  
<br>
restart on another. Sorry I didn't mention it before, must have  
<br>
slipped my mind.
<br>
<p>If this turns out to not be the problem, let me know and I'll take  
<br>
another look. Also send me any error messages that are displayed.
<br>
<p>-- Josh
<br>
<p><p>On Dec 8, 2009, at 1:39 PM, Jonathan Ferland wrote:
<br>
<p><span class="quotelev1">&gt; I did the same test using 1.3.4 and still the same issue....  I also  
</span><br>
<span class="quotelev1">&gt; tried to use the tm interface instead of specifying the hostfile,  
</span><br>
<span class="quotelev1">&gt; same result.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jonathan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Josh Hursey wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Though I do not test this scenario (using hostfiles) very often, it  
</span><br>
<span class="quotelev2">&gt;&gt; used to work. The ompi-restart command takes a --hostfile (or -- 
</span><br>
<span class="quotelev2">&gt;&gt; machinefile) argument that is passed directly to the mpirun  
</span><br>
<span class="quotelev2">&gt;&gt; command. I wonder if something broke recently with this handoff. I  
</span><br>
<span class="quotelev2">&gt;&gt; can certainly checkpoint with one set of nodes/allocation and  
</span><br>
<span class="quotelev2">&gt;&gt; restart with another, but most/all of my testing occurs in a SLURM  
</span><br>
<span class="quotelev2">&gt;&gt; environment, so no need for an explicit hostfile.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'll take a look to see if I can reproduce, but probably will not  
</span><br>
<span class="quotelev2">&gt;&gt; be until next week.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- Josh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 2, 2009, at 9:54 AM, Jonathan Ferland wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am trying to use BLCR checkpointing in mpi. I am currently able  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to run my application using some hostfile, checkpoint the run, and  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; then restart the application using the same hostfile. The thing I  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; would like to do is to restart the application with a different  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hostfile. But this leads to a segfault using 1.3.3.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is it possible to restart the application using a different  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hostfile (we are using pbs to create the hostfile, so each new  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; restart might be on different nodes), how can we do that? If no,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; do you plan to include this in a future release?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; thanks
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Jonathan Ferland, analyste en calcul scientifique
</span><br>
<span class="quotelev1">&gt; RQCHP (R&#233;seau qu&#233;b&#233;cois de calcul de haute performance)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; bureau S-252, pavillon Roger-Gaudry, Universit&#233; de Montr&#233;al
</span><br>
<span class="quotelev1">&gt; t&#233;l&#233;phone   : 514 343-6111 poste 8852
</span><br>
<span class="quotelev1">&gt; t&#233;l&#233;copieur : 514 343-2155
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="11477.php">Jonathan Ferland: "Re: [OMPI users] ompi-restart using different nodes"</a>
<li><strong>Previous message:</strong> <a href="11475.php">Jeff Squyres: "Re: [OMPI users] orte error"</a>
<li><strong>In reply to:</strong> <a href="11455.php">Jonathan Ferland: "Re: [OMPI users] ompi-restart using different nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11477.php">Jonathan Ferland: "Re: [OMPI users] ompi-restart using different nodes"</a>
<li><strong>Reply:</strong> <a href="11477.php">Jonathan Ferland: "Re: [OMPI users] ompi-restart using different nodes"</a>
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
