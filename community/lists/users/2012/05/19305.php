<?
$subject_val = "Re: [OMPI users] Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 18 04:02:54 2012" -->
<!-- isoreceived="20120518080254" -->
<!-- sent="Fri, 18 May 2012 09:02:48 +0100 (BST)" -->
<!-- isosent="20120518080248" -->
<!-- name="devendra rai" -->
<!-- email="rai.devendra_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Returned &amp;quot;Unreachable&amp;quot; (-12) instead of &amp;quot;Success&amp;quot; (0)" -->
<!-- id="1337328168.62570.YahooMailNeo_at_web29603.mail.ird.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="00617394-C59F-419B-B069-2EE3A4C623D8_at_open-mpi.org" -->
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
<strong>From:</strong> devendra rai (<em>rai.devendra_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-18 04:02:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19306.php">Jeff Squyres: "Re: [OMPI users] Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)"</a>
<li><strong>Previous message:</strong> <a href="19304.php">Matthieu Brucher: "Re: [OMPI users] starting open-mpi"</a>
<li><strong>In reply to:</strong> <a href="19294.php">Ralph Castain: "Re: [OMPI users] Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19306.php">Jeff Squyres: "Re: [OMPI users] Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)"</a>
<li><strong>Reply:</strong> <a href="19306.php">Jeff Squyres: "Re: [OMPI users] Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)"</a>
<li><strong>Reply:</strong> <a href="19307.php">Jingcha Joba: "Re: [OMPI users] Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Community/Ralph

I was told by the sysadmin that the firewall does not prevent communication between two machines (tik33x, tik34x) for instance. However, it will only block if OpenMPI is trying to open TCP/UDP ports lower than 1024, which require privileges.

Is it possible to know which port numbers does OpenMPI use? Specifically, is it possible to specify port numbers that OpenMPI must not use (OpenMPI-1.4.x)?

Here is the reply I got from my sysadmin:

&quot;There is a firewall, but it does not block internal
traffic within the whole TIK network (I verified it for myself).
Thus, the connection problem must be somewhere else
(a service not running or binding to the wrong interface
for instance). Maybe the service wants to bind to a
tcp or udp port lower than 1024, which can only be
allocated by the system's superuser. First, check on
which ports and on which network card interfaces
the software listens and if it is configured correctly
so that it will listen at all.&quot;


Is there a way out?

Thanks a lot

Devendra 



________________________________
 From: Ralph Castain &lt;rhc_at_[hidden]&gt;
To: devendra rai &lt;rai.devendra_at_[hidden]&gt;; Open MPI Users &lt;users_at_[hidden]&gt; 
Sent: Wednesday, 16 May 2012, 15:09
Subject: Re: [OMPI users] Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
 

Looks like you have a firewall between hosts tik34x and tik33x - you might check to ensure all firewalls are disabled. The error is saying it can't open a TCP socket between the two nodes, so there is no communication path between those two processes.



On May 16, 2012, at 4:22 AM, devendra rai wrote:

Hello All,
&gt;
&gt;
&gt;I am trying to run an OpenMPI application across two physical machines. 
&gt;
&gt;I get an error &quot;Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)&quot;, and looking through the logs (attached), I cannot seem to find out the cause, and how to fix it.
&gt;
&gt;I see lot of (communication) components being loaded and then unloaded, and I do not see which nodes pick up what kind of comm-interface.
&gt;
&gt;--------------------------------------------------------------------------
&gt;At least one pair of MPI processes are unable to reach each other for
&gt;MPI communications.&#160; This means that no Open MPI device has indicated
&gt;that it can be used to communicate between these processes.&#160; This is
&gt;an error; Open MPI requires that all MPI processes be able to reach
&gt;each other.&#160; This error can sometimes be the result of forgetting to
&gt;specify the &quot;self&quot; BTL.
&gt;
&gt;&#160; Process 1 ([[10782,1],6]) is on host: tik34x
&gt;&#160; Process 2 ([[10782,1],0]) is on host: tik33x
&gt;&#160; BTLs attempted: self sm tcp
&gt;
&gt;Your MPI job is now going to abort; sorry.
&gt;
&gt;The &quot;mpirun&quot; line is:
&gt;
&gt;mpirun --mca btl self,sm,tcp --mca btl_base_verbose 30 -report-pid -display-map -report-bindings -hostfile hostfile -np 7 -v --rankfile rankfile.txt -v --timestamp-output --tag-output ./xstartwrapper.sh ./run_gdb.sh&#160; 
&gt;
&gt;where the .sh files are fixes for forwarding X-windows from multiple machines to the machines where I am logged in.
&gt;
&gt;Can anyone help?
&gt;
&gt;Thanks a lot.
&gt;
&gt;Best,
&gt;
&gt;Devendra
&gt; 
&gt;
&gt;
&gt;
&gt;From: devendra rai &lt;dev641_at_[hidden]&gt;
&gt;
&gt;Subject: Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
&gt;
&gt;Date: May 16, 2012 4:18:28 AM MDT
&gt;
&gt;To: Open MPI Users &lt;users_at_[hidden]&gt;
&gt;
&gt;Reply-To: devendra rai &lt;rai.devendra_at_[hidden]&gt;
&gt;
&gt;
&gt;
&gt;
&gt;Hello All,
&gt;
&gt;I am trying to run an OpenMPI application across two physical machines. 
&gt;
&gt;I get an error &quot;Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)&quot;, and looking through the logs (attached), I cannot seem to find out the cause, and how to fix it.
&gt;
&gt;I see lot of (communication) components being loaded and then unloaded, and I do not see which nodes pick up what kind of comm-interface.
&gt;
&gt;--------------------------------------------------------------------------
&gt;At least one pair of MPI processes are unable to reach each other for
&gt;MPI communications.&#160; This means that no Open MPI device has indicated
&gt;that it can be used to communicate between these processes.&#160; This is
&gt;an error; Open MPI requires that all MPI processes be able to reach
&gt;each other.&#160; This error can sometimes be the result of forgetting to
&gt;specify the &quot;self&quot; BTL.
&gt;
&gt;&#160; Process 1 ([[10782,1],6]) is on host: tik34x
&gt;&#160; Process 2 ([[10782,1],0]) is on host: tik33x
&gt;&#160; BTLs attempted: self sm tcp
&gt;
&gt;Your MPI job is now going to abort; sorry.
&gt;
&gt;The &quot;mpirun&quot; line is:
&gt;
&gt;mpirun --mca btl self,sm,tcp --mca btl_base_verbose 30 -report-pid -display-map -report-bindings -hostfile hostfile -np 7 -v --rankfile rankfile.txt -v --timestamp-output --tag-output ./xstartwrapper.sh ./run_gdb.sh&#160; 
&gt;
&gt;where the .sh files are fixes for forwarding X-windows from multiple machines to the machines where I am logged in.
&gt;
&gt;Can anyone help?
&gt;
&gt;Thanks a lot.
&gt;
&gt;Best,
&gt;
&gt;Devendra
&gt; &lt;MPILog.txt&gt;
&gt;
&gt;&lt;MPILog.txt&gt;_______________________________________________
&gt;users mailing list
&gt;users_at_[hidden]
&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19305/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19306.php">Jeff Squyres: "Re: [OMPI users] Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)"</a>
<li><strong>Previous message:</strong> <a href="19304.php">Matthieu Brucher: "Re: [OMPI users] starting open-mpi"</a>
<li><strong>In reply to:</strong> <a href="19294.php">Ralph Castain: "Re: [OMPI users] Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19306.php">Jeff Squyres: "Re: [OMPI users] Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)"</a>
<li><strong>Reply:</strong> <a href="19306.php">Jeff Squyres: "Re: [OMPI users] Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)"</a>
<li><strong>Reply:</strong> <a href="19307.php">Jingcha Joba: "Re: [OMPI users] Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)"</a>
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
