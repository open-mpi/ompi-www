<?
$subject_val = "Re: [OMPI devel] example/Hello_c.c : mpirun run failed on two physical	nodes.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 25 10:09:36 2014" -->
<!-- isoreceived="20140325140936" -->
<!-- sent="Tue, 25 Mar 2014 14:09:17 +0000" -->
<!-- isosent="20140325140917" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] example/Hello_c.c : mpirun run failed on two physical	nodes." -->
<!-- id="61CD4777-57C9-4D4F-ABC3-6C9F450DE4C5_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="90EBD3F3C2BD0E44804EEB54DD5003A455231E09_at_TC-MAIL-MB02.internal.baidu.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] example/Hello_c.c : mpirun run failed on two physical	nodes.<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-25 10:09:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14387.php">Jeff Squyres (jsquyres): "[OMPI devel] common_verbs fix"</a>
<li><strong>Previous message:</strong> <a href="14385.php">Wang,Yanfei(SYS): "[OMPI devel] example/Hello_c.c : mpirun run failed on two physical nodes."</a>
<li><strong>In reply to:</strong> <a href="14385.php">Wang,Yanfei(SYS): "[OMPI devel] example/Hello_c.c : mpirun run failed on two physical nodes."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14396.php">Wang,Yanfei(SYS): "[OMPI devel] &#180;&#240;&#184;&#180;:  example/Hello_c.c : mpirun run failed on two physical	nodes."</a>
<li><strong>Reply:</strong> <a href="14396.php">Wang,Yanfei(SYS): "[OMPI devel] &#180;&#240;&#184;&#180;:  example/Hello_c.c : mpirun run failed on two physical	nodes."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Try this FAQ entry:
<br>
<p><a href="http://www.open-mpi.org/faq/?category=running#diagnose-multi-host-problems">http://www.open-mpi.org/faq/?category=running#diagnose-multi-host-problems</a>
<br>
<p>On Mar 25, 2014, at 6:54 AM, &quot;Wang,Yanfei(SYS)&quot; &lt;wangyanfei01_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi, 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I am a fresh learner of OpenMPI programmer, and have some troubles on building mpi programming, hope some helps..
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; The example/helloc_c can works successfully with 2 process on local machine, however, do not work on two separate physical node.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Physical two nodes:
</span><br>
<span class="quotelev1">&gt; Eg:
</span><br>
<span class="quotelev1">&gt; [root_at_bb-nsi-ib04 examples]# mpirun -hostfile hosts -np 2 hello_c
</span><br>
<span class="quotelev1">&gt; The command just return instantly without nothing printed.
</span><br>
<span class="quotelev1">&gt; Local machine:
</span><br>
<span class="quotelev1">&gt; [root_at_bb-nsi-ib04 examples]# mpirun -np 2 hello_c
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 0 of 2, (Open MPI v1.7.5, package: Open MPI root_at_bb-nsi-ib04.bb01.*.com Distribution, ident: 1.7.5, Mar 20, 2014, 108)
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 1 of 2, (Open MPI v1.7.5, package: Open MPI root_at_bb-nsi-ib04.bb01.*.com Distribution, ident: 1.7.5, Mar 20, 2014, 108)
</span><br>
<span class="quotelev1">&gt; [root_at_bb-nsi-ib04 examples]#
</span><br>
<span class="quotelev1">&gt; -----peer machine is ok--------
</span><br>
<span class="quotelev1">&gt; [root_at_bb-nsi-ib03 examples]# mpirun -np 2 hello_c
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 0 of 2, (Open MPI v1.7.5, package: Open MPI root_at_bb-nsi-ib03.bb01.*.com Distribution, ident: 1.7.5, Mar 20, 2014, 108)
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 1 of 2, (Open MPI v1.7.5, package: Open MPI root_at_bb-nsi-ib03.bb01.*.com Distribution, ident: 1.7.5, Mar 20, 2014, 108)
</span><br>
<span class="quotelev1">&gt; [root_at_bb-nsi-ib03 examples]#
</span><br>
<span class="quotelev1">&gt; the command run successfully, and print two message!!
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Configuration details:
</span><br>
<span class="quotelev1">&gt; OpenMPI version: 1.7.5
</span><br>
<span class="quotelev1">&gt; Hostfile:
</span><br>
<span class="quotelev1">&gt; [root_at_bb-nsi-ib04 examples]# cat hosts
</span><br>
<span class="quotelev1">&gt; ib03 slots=1
</span><br>
<span class="quotelev1">&gt; ib04 slots=1
</span><br>
<span class="quotelev1">&gt; [root_at_bb-nsi-ib04 examples]#
</span><br>
<span class="quotelev1">&gt; /etc/hosts:
</span><br>
<span class="quotelev1">&gt; [root_at_bb-nsi-ib04 examples]# cat /etc/hosts
</span><br>
<span class="quotelev1">&gt; 192.168.71.3 ib03
</span><br>
<span class="quotelev1">&gt; 192.168.71.4 ib04
</span><br>
<span class="quotelev1">&gt; SSH:
</span><br>
<span class="quotelev1">&gt; Public rsa key is redistributed two machine, ib03 and ib04, and to do ssh login in without password is ok, I am sure.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I am confused about this trouble, and anyone can help us?  It have nothing log and error tip, could anyone tell me how to do diagnose it.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; BR
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Yanfei Wang
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/03/14385.php">http://www.open-mpi.org/community/lists/devel/2014/03/14385.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14387.php">Jeff Squyres (jsquyres): "[OMPI devel] common_verbs fix"</a>
<li><strong>Previous message:</strong> <a href="14385.php">Wang,Yanfei(SYS): "[OMPI devel] example/Hello_c.c : mpirun run failed on two physical nodes."</a>
<li><strong>In reply to:</strong> <a href="14385.php">Wang,Yanfei(SYS): "[OMPI devel] example/Hello_c.c : mpirun run failed on two physical nodes."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14396.php">Wang,Yanfei(SYS): "[OMPI devel] &#180;&#240;&#184;&#180;:  example/Hello_c.c : mpirun run failed on two physical	nodes."</a>
<li><strong>Reply:</strong> <a href="14396.php">Wang,Yanfei(SYS): "[OMPI devel] &#180;&#240;&#184;&#180;:  example/Hello_c.c : mpirun run failed on two physical	nodes."</a>
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
