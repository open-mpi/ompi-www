<?
$subject_val = "Re: [OMPI users] Non-root install; hang there running on multiple nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 25 11:12:28 2010" -->
<!-- isoreceived="20100325151228" -->
<!-- sent="Thu, 25 Mar 2010 11:12:22 -0400" -->
<!-- isosent="20100325151222" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Non-root install; hang there running on multiple nodes" -->
<!-- id="575B84FD-2265-4552-98A0-10663C83772A_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="f6659.2f4.12791eca30c.Coremail.haoanyi_at_163.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Non-root install; hang there running on multiple nodes<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-25 11:12:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12435.php">Jeff Squyres: "Re: [OMPI users] process migration on openmpi"</a>
<li><strong>Previous message:</strong> <a href="12433.php">Rolf Vandevaart: "Re: [OMPI users] Multi-rail support"</a>
<li><strong>In reply to:</strong> <a href="12422.php">haoanyi: "Re: [OMPI users] Non-root install; hang there running on multiple nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12423.php">Trent Creekmore: "Re: [OMPI users] Non-root install; hang there running on multiple nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You probably do want to check with your admin and ensure that either firewalling software is disabled or that a trust relationship is setup between the machines that you want to use.  Effectively, Open MPI needs to be open random TCP ports between all the hosts that you will be using.
<br>
<p>There are controls to restrict Open MPI's TCP port selection, but it's generally easier if you can just disable firewalling or setup trust between machines.
<br>
<p><p>On Mar 24, 2010, at 4:45 PM, haoanyi wrote:
<br>
<p><span class="quotelev1">&gt; I run a program with the following command line, and obtain the error message
</span><br>
<span class="quotelev1">&gt; mpirun -x LD_LIBRARY_PATH=/home/haoanyi1/socIntel/goto --prefix /home/haoanyi1/openmpi1.4.1 -np 2 -host intel01,intel02  -rf hosts ./main 62 62 tests/ &gt; newtest_64x64_np2_omp
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.122.1 failed: Connection refused (111)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In the hostsfile, I use following to do cpu mapping 
</span><br>
<span class="quotelev1">&gt; rank 0=intel01 slot=0
</span><br>
<span class="quotelev1">&gt; rank 1=intel02 slot=1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This file is different from the hosts file that I do with mpurun --hostfile hosts hostname, which reads like
</span><br>
<span class="quotelev1">&gt; intel01
</span><br>
<span class="quotelev1">&gt; intel02
</span><br>
<span class="quotelev1">&gt; ......
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2010-03-25 04:33:24, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;Can you mpirun non-MPI applications, like &quot;hostname&quot;?  I frequently run this as a first step to debugging a wonky install.&amp;! nbsp; For example: &gt; &gt;shell$ hostname &gt;barney &gt;shell$ mpirun hostname &gt;barney &gt;shell$ cat hosts &gt;barney &gt;rubble &gt;shell$ mpirun --hostfile hosts hostname &gt;barney &gt;rubble &gt;shell$ &gt; &gt; &gt;On Mar 24, 2010, at 4:28 PM, haoanyi wrote: &gt; &gt;&gt; Hi,  &gt;&gt;  &gt;&gt; I installed OpenMPI1.4.1 as a non-root user on a cluster. It is totally OK when I run with mpirun or mpiexec on one single node for many processes. However, when I lauch many processes on multiple nodes, I can observe jobs are distributed to those nodes (by using &quot;top&quot;), but all the jobs just hang there and cannot finish. &gt;&gt;  &gt;&gt; I think the nodes use TCP to communicate with each other. This cluster also provides MPICH2, which was configured by the sys admin., and has no problem to do node communication in MPICH2. Besides, I read from some posts, which says this may be caused by TCP firewall. Since I have no root's right, and I don't know what s</span><br>
hall request the admin. to do to fix this problem. So, can you tell me how to do that either by the admin root or by the non-root user (if possible)? &gt;&gt;  &gt;&gt; Thank you very much. &gt;&gt; Hao &gt;&gt;  &gt;&gt;  &gt;&gt; _______________________________________________ &gt;&gt; users mailing list &gt;&gt; users_at_[hidden] &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &gt; &gt; &gt;--  &gt;Jeff Squyres &gt;jsquyres_at_[hidden] &gt;For corporate legal information go to: &gt;<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a> &gt; &gt; &gt;_______________________________________________ &gt;users mailing list &gt;users_at_[hidden] &gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> 
<br>
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12435.php">Jeff Squyres: "Re: [OMPI users] process migration on openmpi"</a>
<li><strong>Previous message:</strong> <a href="12433.php">Rolf Vandevaart: "Re: [OMPI users] Multi-rail support"</a>
<li><strong>In reply to:</strong> <a href="12422.php">haoanyi: "Re: [OMPI users] Non-root install; hang there running on multiple nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12423.php">Trent Creekmore: "Re: [OMPI users] Non-root install; hang there running on multiple nodes"</a>
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
