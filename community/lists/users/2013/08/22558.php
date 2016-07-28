<?
$subject_val = "Re: [OMPI users] Unable to schedule an MPI tasks";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 26 23:33:43 2013" -->
<!-- isoreceived="20130827033343" -->
<!-- sent="Mon, 26 Aug 2013 20:33:40 -0700" -->
<!-- isosent="20130827033340" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Unable to schedule an MPI tasks" -->
<!-- id="B6BABF6A-5090-4066-BCF5-61C6C4C68430_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="COL126-W44C463F16425049627108AFE4A0_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] Unable to schedule an MPI tasks<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-26 23:33:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22559.php">Ng Shi Wei: "Re: [OMPI users] Unable to schedule an MPI tasks"</a>
<li><strong>Previous message:</strong> <a href="22557.php">Ng Shi Wei: "[OMPI users] Unable to schedule an MPI tasks"</a>
<li><strong>In reply to:</strong> <a href="22557.php">Ng Shi Wei: "[OMPI users] Unable to schedule an MPI tasks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22559.php">Ng Shi Wei: "Re: [OMPI users] Unable to schedule an MPI tasks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Perhaps I don't understand, but mpirun has no problem being executed using the &quot;at&quot; command. Perhaps the problem is that you don't have permission for &quot;at&quot;? Per the man page:
<br>
<p>&nbsp;&nbsp;The superuser may use these commands in any case.  For  other  users,  permission  to  use  at  is  determined  by  the  files  /etc/at.allow  and
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/etc/at.deny.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If the file /etc/at.allow exists, only usernames mentioned in it are allowed to use at.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If /etc/at.allow does not exist, /etc/at.deny is checked, every username not mentioned in it is then allowed to use at.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If neither exists, only the superuser is allowed use of at.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;An empty /etc/at.deny means that every user is allowed use these commands, this is the default configuration.
<br>
<p>You also might check to see what directory mpirun is executed from when &quot;at&quot; actually runs, and that the path to both mpirun and your executable are correct for that location.
<br>
<p><p>On Aug 26, 2013, at 6:45 PM, Ng Shi Wei &lt;nsw_1216_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Due to the time constraints, I would like to run the mpi program by scheduling the program to run on desired time using the &quot;at&quot; command. However, it seems that the mpirun doesn't execute the mpi program at the desired time using the &quot;at&quot; command.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would like to ask is there any other method to schedule a program to run ?
</span><br>
<span class="quotelev1">&gt; For best, it can straight away starts the second mpi program once the previous program is finished.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hope to get some reply from you all.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best Regards,
</span><br>
<span class="quotelev1">&gt; Shi Wei
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22558/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22559.php">Ng Shi Wei: "Re: [OMPI users] Unable to schedule an MPI tasks"</a>
<li><strong>Previous message:</strong> <a href="22557.php">Ng Shi Wei: "[OMPI users] Unable to schedule an MPI tasks"</a>
<li><strong>In reply to:</strong> <a href="22557.php">Ng Shi Wei: "[OMPI users] Unable to schedule an MPI tasks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22559.php">Ng Shi Wei: "Re: [OMPI users] Unable to schedule an MPI tasks"</a>
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
