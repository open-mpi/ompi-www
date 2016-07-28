<?
$subject_val = "Re: [OMPI users] Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 16 09:09:28 2012" -->
<!-- isoreceived="20120516130928" -->
<!-- sent="Wed, 16 May 2012 07:09:19 -0600" -->
<!-- isosent="20120516130919" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Returned &amp;quot;Unreachable&amp;quot; (-12) instead of &amp;quot;Success&amp;quot; (0)" -->
<!-- id="00617394-C59F-419B-B069-2EE3A4C623D8_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1337163771.77013.YahooMailNeo_at_web29603.mail.ird.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-16 09:09:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19295.php">Ralph Castain: "Re: [OMPI users] fork() warning message"</a>
<li><strong>Previous message:</strong> <a href="19293.php">Jim Maas: "[OMPI users] fork() warning message"</a>
<li><strong>In reply to:</strong> <a href="19291.php">devendra rai: "[OMPI users] Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19305.php">devendra rai: "Re: [OMPI users] Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)"</a>
<li><strong>Reply:</strong> <a href="19305.php">devendra rai: "Re: [OMPI users] Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Looks like you have a firewall between hosts tik34x and tik33x - you might check to ensure all firewalls are disabled. The error is saying it can't open a TCP socket between the two nodes, so there is no communication path between those two processes.
<br>
<p><p>On May 16, 2012, at 4:22 AM, devendra rai wrote:
<br>
<p><span class="quotelev1">&gt; Hello All,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am trying to run an OpenMPI application across two physical machines. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I get an error &quot;Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)&quot;, and looking through the logs (attached), I cannot seem to find out the cause, and how to fix it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I see lot of (communication) components being loaded and then unloaded, and I do not see which nodes pick up what kind of comm-interface.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; At least one pair of MPI processes are unable to reach each other for
</span><br>
<span class="quotelev1">&gt; MPI communications.  This means that no Open MPI device has indicated
</span><br>
<span class="quotelev1">&gt; that it can be used to communicate between these processes.  This is
</span><br>
<span class="quotelev1">&gt; an error; Open MPI requires that all MPI processes be able to reach
</span><br>
<span class="quotelev1">&gt; each other.  This error can sometimes be the result of forgetting to
</span><br>
<span class="quotelev1">&gt; specify the &quot;self&quot; BTL.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Process 1 ([[10782,1],6]) is on host: tik34x
</span><br>
<span class="quotelev1">&gt;   Process 2 ([[10782,1],0]) is on host: tik33x
</span><br>
<span class="quotelev1">&gt;   BTLs attempted: self sm tcp
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Your MPI job is now going to abort; sorry.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The &quot;mpirun&quot; line is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun --mca btl self,sm,tcp --mca btl_base_verbose 30 -report-pid -display-map -report-bindings -hostfile hostfile -np 7 -v --rankfile rankfile.txt -v --timestamp-output --tag-output ./xstartwrapper.sh ./run_gdb.sh  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; where the .sh files are fixes for forwarding X-windows from multiple machines to the machines where I am logged in.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can anyone help?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks a lot.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Devendra
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From: devendra rai &lt;dev641_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; Date: May 16, 2012 4:18:28 AM MDT
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Reply-To: devendra rai &lt;rai.devendra_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello All,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am trying to run an OpenMPI application across two physical machines. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I get an error &quot;Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)&quot;, and looking through the logs (attached), I cannot seem to find out the cause, and how to fix it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I see lot of (communication) components being loaded and then unloaded, and I do not see which nodes pick up what kind of comm-interface.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; At least one pair of MPI processes are unable to reach each other for
</span><br>
<span class="quotelev1">&gt; MPI communications.  This means that no Open MPI device has indicated
</span><br>
<span class="quotelev1">&gt; that it can be used to communicate between these processes.  This is
</span><br>
<span class="quotelev1">&gt; an error; Open MPI requires that all MPI processes be able to reach
</span><br>
<span class="quotelev1">&gt; each other.  This error can sometimes be the result of forgetting to
</span><br>
<span class="quotelev1">&gt; specify the &quot;self&quot; BTL.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Process 1 ([[10782,1],6]) is on host: tik34x
</span><br>
<span class="quotelev1">&gt;   Process 2 ([[10782,1],0]) is on host: tik33x
</span><br>
<span class="quotelev1">&gt;   BTLs attempted: self sm tcp
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Your MPI job is now going to abort; sorry.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The &quot;mpirun&quot; line is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun --mca btl self,sm,tcp --mca btl_base_verbose 30 -report-pid -display-map -report-bindings -hostfile hostfile -np 7 -v --rankfile rankfile.txt -v --timestamp-output --tag-output ./xstartwrapper.sh ./run_gdb.sh  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; where the .sh files are fixes for forwarding X-windows from multiple machines to the machines where I am logged in.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can anyone help?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks a lot.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Devendra
</span><br>
<span class="quotelev1">&gt; &lt;MPILog.txt&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;MPILog.txt&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19294/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19295.php">Ralph Castain: "Re: [OMPI users] fork() warning message"</a>
<li><strong>Previous message:</strong> <a href="19293.php">Jim Maas: "[OMPI users] fork() warning message"</a>
<li><strong>In reply to:</strong> <a href="19291.php">devendra rai: "[OMPI users] Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19305.php">devendra rai: "Re: [OMPI users] Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)"</a>
<li><strong>Reply:</strong> <a href="19305.php">devendra rai: "Re: [OMPI users] Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)"</a>
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
