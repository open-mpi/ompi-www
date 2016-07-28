<?
$subject_val = "Re: [OMPI users] Open MPI task scheduler";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jun 20 17:19:04 2010" -->
<!-- isoreceived="20100620211904" -->
<!-- sent="Sun, 20 Jun 2010 15:18:58 -0600" -->
<!-- isosent="20100620211858" -->
<!-- name="Jack Bryan" -->
<!-- email="dtustudy68_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI task scheduler" -->
<!-- id="SNT134-w502BF37E886B7724A71794CBC20_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="2057490E-3F66-47F2-87EB-823332348A19_at_sas.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI task scheduler<br>
<strong>From:</strong> Jack Bryan (<em>dtustudy68_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-20 17:18:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13353.php">Jack Bryan: "Re: [OMPI users] Open MPI task scheduler"</a>
<li><strong>Previous message:</strong> <a href="13351.php">Bill Rankin: "Re: [OMPI users] Open MPI task scheduler"</a>
<li><strong>In reply to:</strong> <a href="13351.php">Bill Rankin: "Re: [OMPI users] Open MPI task scheduler"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for your reply. 
<br>
My task scheduler is application program level not OS level.
<br>
PBS is to ask OS to do the job scheduling. 
<br>
My scheduler needs to be called by any C++ program to out tasks in to the scheduler and then distribute tasks to worker nodes.
<br>
After the tasks are done, the manager node collects the results. 
<br>
&nbsp;It may work like in this way: 
<br>
while(still tasks available) {	myScheduler.push(tasks);	myScheduler.get(tasks results from client nodes);}	
<br>
<p>Any help is appreciated. 
<br>
Jack
<br>
June 20  2010
<br>
<span class="quotelev1">&gt; From: Bill.Rankin_at_[hidden]
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Date: Sun, 20 Jun 2010 20:04:26 +0000
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Open MPI task scheduler
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 20, 2010, at 1:49 PM, Jack Bryan wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi, all:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I need to design a task scheduler (not PBS job scheduler) on Open MPI cluster.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Quick question - why *not* PBS?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Using shell scripts with the Job Array and Dependent Jobs features of PBS Pro (not sure about Maui/Torque nor SGE) you can implement this in a fairly straight forward manner.  It worked for the Bioinformaticists using BLAST.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It just seems that the workflow you are describing is part and partial of what any good workload management system is supposed to do and do well.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just a thought.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Good luck,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -bill
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
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
_________________________________________________________________
<br>
The New Busy is not the too busy. Combine all your e-mail accounts with Hotmail.
<br>
<a href="http://www.windowslive.com/campaign/thenewbusy?tile=multiaccount&amp;ocid=PID28326::T:WLMTAGL:ON:WL:en-US:WM_HMP:042010_4">http://www.windowslive.com/campaign/thenewbusy?tile=multiaccount&amp;ocid=PID28326::T:WLMTAGL:ON:WL:en-US:WM_HMP:042010_4</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13352/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13353.php">Jack Bryan: "Re: [OMPI users] Open MPI task scheduler"</a>
<li><strong>Previous message:</strong> <a href="13351.php">Bill Rankin: "Re: [OMPI users] Open MPI task scheduler"</a>
<li><strong>In reply to:</strong> <a href="13351.php">Bill Rankin: "Re: [OMPI users] Open MPI task scheduler"</a>
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
