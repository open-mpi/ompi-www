<?
$subject_val = "Re: [OMPI users] Determining what parameters a scheduler passes to	OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  6 13:05:04 2014" -->
<!-- isoreceived="20140606170504" -->
<!-- sent="Fri, 6 Jun 2014 10:05:00 -0700" -->
<!-- isosent="20140606170500" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Determining what parameters a scheduler passes to	OpenMPI" -->
<!-- id="995C2BEF-2963-4539-90E9-7063E219E703_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="76EDF6FB-16CB-49E5-BF7D-D14633ED236A_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Determining what parameters a scheduler passes to	OpenMPI<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-06 13:05:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24573.php">Gus Correa: "Re: [OMPI users] Determining what parameters a scheduler passes to OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="24571.php">Reuti: "Re: [OMPI users] Determining what parameters a scheduler passes to	OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="24571.php">Reuti: "Re: [OMPI users] Determining what parameters a scheduler passes to	OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24573.php">Gus Correa: "Re: [OMPI users] Determining what parameters a scheduler passes to OpenMPI"</a>
<li><strong>Reply:</strong> <a href="24573.php">Gus Correa: "Re: [OMPI users] Determining what parameters a scheduler passes to OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You can always add --display-allocation to the cmd line to see what we thought we received.
<br>
<p>If you configure OMPI with --enable-debug, you can set --mca ras_base_verbose 10 to see the details
<br>
<p><p>On Jun 6, 2014, at 10:01 AM, Reuti &lt;reuti_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Am 06.06.2014 um 18:58 schrieb Sasso, John (GE Power &amp; Water, Non-GE):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; OK, so at the least, how can I get the node and slots/node info that is passed from PBS?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I ask because I&#146;m trying to troubleshoot a problem w/ PBS and the build of OpenMPI 1.6 I noted.  If I submit a 24-process simple job through PBS using a script which has:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi/bin/orterun -n 24 --hostfile /home/sasso/TEST/hosts.file --mca orte_rsh_agent rsh --mca btl openib,tcp,self --mca orte_base_help_aggregate 0 -x PATH -x LD_LIBRARY_PATH /home/sasso/TEST/simplempihello.exe
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Using the --hostfile on your own would mean to violate the granted slot allocation by PBS. Just leave this option out. How do you submit your job?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; And the hostfile /home/sasso/TEST/hosts.file contains 24 entries (the first 16 being host node0001 and the last 8 being node0002), it appears that 24 MPI tasks try to start on node0001 instead of getting distributed as 16 on node0001 and 8 on node0002.   Hence, I am curious what is being passed by PBS.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --john
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Friday, June 06, 2014 12:31 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Determining what parameters a scheduler passes to OpenMPI
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We currently only get the node and slots/node info from PBS - we don't get any task placement info at all. We then use the mpirun cmd options and built-in mappers to map the tasks to the nodes.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I suppose we could do more integration in that regard, but haven't really seen a reason to do so - the OMPI mappers are generally more flexible than anything in the schedulers.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 6, 2014, at 9:08 AM, Sasso, John (GE Power &amp; Water, Non-GE) &lt;John1.Sasso_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; For the PBS scheduler and using a build of OpenMPI 1.6 built against PBS include files + libs, is there a way to determine (perhaps via some debugging flags passed to mpirun) what job placement parameters are passed from the PBS scheduler to OpenMPI?  In particular, I am talking about task placement info such as nodes to place on, etc.   Thanks!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;              --john
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24572/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24573.php">Gus Correa: "Re: [OMPI users] Determining what parameters a scheduler passes to OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="24571.php">Reuti: "Re: [OMPI users] Determining what parameters a scheduler passes to	OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="24571.php">Reuti: "Re: [OMPI users] Determining what parameters a scheduler passes to	OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24573.php">Gus Correa: "Re: [OMPI users] Determining what parameters a scheduler passes to OpenMPI"</a>
<li><strong>Reply:</strong> <a href="24573.php">Gus Correa: "Re: [OMPI users] Determining what parameters a scheduler passes to OpenMPI"</a>
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
