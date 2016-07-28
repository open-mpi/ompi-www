<?
$subject_val = "Re: [OMPI users] Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 18 07:23:17 2012" -->
<!-- isoreceived="20120518112317" -->
<!-- sent="Fri, 18 May 2012 04:23:13 -0700" -->
<!-- isosent="20120518112313" -->
<!-- name="Jingcha Joba" -->
<!-- email="pukkimonkey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Returned &amp;quot;Unreachable&amp;quot; (-12) instead of &amp;quot;Success&amp;quot; (0)" -->
<!-- id="0148DF1C-C88D-4391-86BF-A864FDA1F54C_at_gmail.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="1337328168.62570.YahooMailNeo_at_web29603.mail.ird.yahoo.com" -->
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
<strong>From:</strong> Jingcha Joba (<em>pukkimonkey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-18 07:23:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19308.php">Jeff Squyres: "Re: [OMPI users] Problem-Bug with MPI_Intercomm_create()"</a>
<li><strong>Previous message:</strong> <a href="19306.php">Jeff Squyres: "Re: [OMPI users] Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)"</a>
<li><strong>In reply to:</strong> <a href="19305.php">devendra rai: "Re: [OMPI users] Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Not sure what the solution is, but ompi  does not bind to privilege ports.
<br>
In fact ,
<br>
ompi_info --param btl tcp | grep port_min should show that the minimum port where TCP BTL will try to bind (by default ) is 1024. 
<br>
<p><p><p><pre>
--
Sent from my iPhone
On May 18, 2012, at 1:02 AM, devendra rai &lt;rai.devendra_at_[hidden]&gt; wrote:
&gt; Hello Community/Ralph
&gt; 
&gt; I was told by the sysadmin that the firewall does not prevent communication between two machines (tik33x, tik34x) for instance. However, it will only block if OpenMPI is trying to open TCP/UDP ports lower than 1024, which require privileges.
&gt; 
&gt; Is it possible to know which port numbers does OpenMPI use? Specifically, is it possible to specify port numbers that OpenMPI must not use (OpenMPI-1.4.x)?
&gt; 
&gt; Here is the reply I got from my sysadmin:
&gt; 
&gt; &quot;There is a firewall, but it does not block internal
&gt; traffic within the whole TIK network (I verified it for myself).
&gt; Thus, the connection problem must be somewhere else
&gt; (a service not running or binding to the wrong interface
&gt; for instance). Maybe the service wants to bind to a
&gt; tcp or udp port lower than 1024, which can only be
&gt; allocated by the system's superuser. First, check on
&gt; which ports and on which network card interfaces
&gt; the software listens and if it is configured correctly
&gt; so that it will listen at all.&quot;
&gt; 
&gt; 
&gt; Is there a way out?
&gt; 
&gt; Thanks a lot
&gt; 
&gt; Devendra 
&gt; 
&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
&gt; To: devendra rai &lt;rai.devendra_at_[hidden]&gt;; Open MPI Users &lt;users_at_[hidden]&gt; 
&gt; Sent: Wednesday, 16 May 2012, 15:09
&gt; Subject: Re: [OMPI users] Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
&gt; 
&gt; Looks like you have a firewall between hosts  tik34x and tik33x - you might check to ensure all firewalls are disabled. The error is saying it can't open a TCP socket between the two nodes, so there is no communication path between those two processes.
&gt; 
&gt; 
&gt; On May 16, 2012, at 4:22 AM, devendra rai wrote:
&gt; 
&gt;&gt; Hello All,
&gt;&gt; 
&gt;&gt; I am trying to run an OpenMPI application across two physical machines. 
&gt;&gt; 
&gt;&gt; I get an error &quot;Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)&quot;, and looking through the logs (attached), I cannot seem to find out the cause, and how to fix it.
&gt;&gt; 
&gt;&gt; I see lot of (communication) components being loaded and then unloaded, and I do not see which nodes pick up what kind of comm-interface.
&gt;&gt; 
&gt;&gt; --------------------------------------------------------------------------
&gt;&gt; At least one pair of MPI processes are unable to reach each other for
&gt;&gt; MPI communications.  This means that no Open MPI device has indicated
&gt;&gt; that it can be used to communicate between these processes.  This is
&gt;&gt; an error; Open MPI requires that all MPI processes be able to reach
&gt;&gt; each other.  This error can sometimes be the result of forgetting to
&gt;&gt; specify the &quot;self&quot; BTL.
&gt;&gt; 
&gt;&gt;   Process 1 ([[10782,1],6]) is on host: tik34x
&gt;&gt;   Process 2 ([[10782,1],0]) is on host: tik33x
&gt;&gt;   BTLs attempted: self sm tcp
&gt;&gt; 
&gt;&gt; Your MPI job is now going to abort; sorry.
&gt;&gt; 
&gt;&gt; The &quot;mpirun&quot; line is:
&gt;&gt; 
&gt;&gt; mpirun --mca btl self,sm,tcp --mca btl_base_verbose 30 -report-pid -display-map -report-bindings -hostfile hostfile -np 7 -v --rankfile rankfile.txt -v --timestamp-output --tag-output ./xstartwrapper.sh ./run_gdb.sh  
&gt;&gt; 
&gt;&gt; where the .sh files are fixes for forwarding X-windows from multiple machines to the machines where I am logged in.
&gt;&gt; 
&gt;&gt; Can anyone help?
&gt;&gt; 
&gt;&gt; Thanks a lot.
&gt;&gt; 
&gt;&gt; Best,
&gt;&gt; 
&gt;&gt; Devendra
&gt;&gt; 
&gt;&gt; 
&gt;&gt; 
&gt;&gt; From: devendra rai &lt;dev641_at_[hidden]&gt;
&gt;&gt; Subject: Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
&gt;&gt; Date: May 16, 2012 4:18:28 AM MDT
&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
&gt;&gt; Reply-To: devendra rai &lt;rai.devendra_at_[hidden]&gt;
&gt;&gt; 
&gt;&gt; 
&gt;&gt; 
&gt;&gt; Hello All,
&gt;&gt; 
&gt;&gt; I am trying to run an OpenMPI application across two physical machines. 
&gt;&gt; 
&gt;&gt; I get an error &quot;Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)&quot;, and looking through the logs (attached), I cannot seem to find out the cause, and how to fix it.
&gt;&gt; 
&gt;&gt; I see lot of (communication) components being loaded and then unloaded, and I do not see which nodes pick up what kind of comm-interface.
&gt;&gt; 
&gt;&gt; --------------------------------------------------------------------------
&gt;&gt; At least one pair of MPI processes are unable to reach each other for
&gt;&gt; MPI communications.  This means that no Open MPI device has indicated
&gt;&gt; that it can be used to communicate between these processes.  This is
&gt;&gt; an error; Open MPI requires that all MPI processes be able to reach
&gt;&gt; each other.  This error can sometimes be the result of forgetting to
&gt;&gt; specify the &quot;self&quot; BTL.
&gt;&gt; 
&gt;&gt;   Process 1 ([[10782,1],6]) is on host: tik34x
&gt;&gt;   Process 2 ([[10782,1],0]) is on host: tik33x
&gt;&gt;   BTLs attempted: self sm tcp
&gt;&gt; 
&gt;&gt; Your MPI job is now going to abort; sorry.
&gt;&gt; 
&gt;&gt; The &quot;mpirun&quot; line is:
&gt;&gt; 
&gt;&gt; mpirun --mca btl self,sm,tcp --mca btl_base_verbose 30 -report-pid -display-map -report-bindings -hostfile hostfile -np 7 -v --rankfile rankfile.txt -v --timestamp-output --tag-output ./xstartwrapper.sh ./run_gdb.sh  
&gt;&gt; 
&gt;&gt; where the .sh files are fixes for forwarding X-windows from multiple machines to the machines where I am logged in.
&gt;&gt; 
&gt;&gt; Can anyone help?
&gt;&gt; 
&gt;&gt; Thanks a lot.
&gt;&gt; 
&gt;&gt; Best,
&gt;&gt; 
&gt;&gt; Devendra
&gt;&gt; &lt;MPILog.txt&gt;
&gt;&gt; 
&gt;&gt; &lt;MPILog.txt&gt;_______________________________________________
&gt;&gt; users mailing list
&gt;&gt; users_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; 
&gt; 
&gt; 
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19307/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19308.php">Jeff Squyres: "Re: [OMPI users] Problem-Bug with MPI_Intercomm_create()"</a>
<li><strong>Previous message:</strong> <a href="19306.php">Jeff Squyres: "Re: [OMPI users] Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)"</a>
<li><strong>In reply to:</strong> <a href="19305.php">devendra rai: "Re: [OMPI users] Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)"</a>
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
