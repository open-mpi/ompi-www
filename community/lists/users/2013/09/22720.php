<?
$subject_val = "Re: [OMPI users] users Digest, Vol 2689, Issue 1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 25 14:02:38 2013" -->
<!-- isoreceived="20130925180238" -->
<!-- sent="Wed, 25 Sep 2013 18:02:36 +0000" -->
<!-- isosent="20130925180236" -->
<!-- name="Bryan, Clifton W ERDC-RDE-MSRC-MS Contractor" -->
<!-- email="clifton.W.bryan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] users Digest, Vol 2689, Issue 1" -->
<!-- id="8CCCC747FD74954AB8E26B1F2EFBA6E2078E7ACA_at_MS-EX2VKS.erdc.dren.mil" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="mailman.24.1380124805.12236.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] users Digest, Vol 2689, Issue 1<br>
<strong>From:</strong> Bryan, Clifton W ERDC-RDE-MSRC-MS Contractor (<em>clifton.W.bryan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-25 14:02:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22721.php">Bryan, Clifton W ERDC-RDE-MSRC-MS Contractor: "Re: [OMPI users] users Digest, Vol 2689, Issue 1"</a>
<li><strong>Previous message:</strong> <a href="22719.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI 1.6.3 problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22721.php">Bryan, Clifton W ERDC-RDE-MSRC-MS Contractor: "Re: [OMPI users] users Digest, Vol 2689, Issue 1"</a>
<li><strong>Reply:</strong> <a href="22721.php">Bryan, Clifton W ERDC-RDE-MSRC-MS Contractor: "Re: [OMPI users] users Digest, Vol 2689, Issue 1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----Original Message-----
<br>
From: users [mailto:users-bounces_at_[hidden]] On Behalf Of users-request_at_[hidden]
<br>
Sent: Wednesday, September 25, 2013 11:00 AM
<br>
To: users_at_[hidden]
<br>
Subject: users Digest, Vol 2689, Issue 1
<br>
<p>Send users mailing list submissions to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;users_at_[hidden]
<br>
<p>To subscribe or unsubscribe via the World Wide Web, visit
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
or, via email, send a message with subject or body 'help' to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;users-request_at_[hidden]
<br>
<p>You can reach the person managing the list at
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;users-owner_at_[hidden]
<br>
<p>When replying, please edit your Subject line so it is more specific than &quot;Re: Contents of users digest...&quot;
<br>
<p><p>Today's Topics:
<br>
<p>&nbsp;&nbsp;&nbsp;1. OpenMPI 1.6.3 problem
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Bryan, Clifton W ERDC-RDE-MSRC-MS Contractor)
<br>
&nbsp;&nbsp;&nbsp;2. Re: OpenMPI 1.6.3 problem (Ralph Castain)
<br>
&nbsp;&nbsp;&nbsp;3. Re: OpenMPI 1.6.3 problem (Jeff Squyres (jsquyres))
<br>
<p><p>----------------------------------------------------------------------
<br>
<p>Message: 1
<br>
Date: Tue, 24 Sep 2013 19:20:36 +0000
<br>
From: &quot;Bryan, Clifton W ERDC-RDE-MSRC-MS Contractor&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;clifton.W.bryan_at_[hidden]&gt;
<br>
To: &quot;'users_at_[hidden]'&quot; &lt;users_at_[hidden]&gt;
<br>
Subject: [OMPI users] OpenMPI 1.6.3 problem
<br>
Message-ID:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;8CCCC747FD74954AB8E26B1F2EFBA6E2078E72C4_at_[hidden]&gt;
<br>
Content-Type: text/plain; charset=&quot;us-ascii&quot;
<br>
<p>Hi,
<br>
<p><p><p>We are having problems with OpenMPI 1.6.3 - it gives the below error message when trying to run:
<br>
<p><p><p><p><p>$ mpirun -np 32 ./mpi_test.x
<br>
<p><p><p>--------------------------------------------------------------------------
<br>
<p><p><p>WARNING: It appears that your OpenFabrics subsystem is configured to only allow registering part of your physical memory.  This can cause MPI jobs to run with erratic performance, hang, and/or crash.
<br>
<p><p><p><p><p>This may be caused by your OpenFabrics vendor limiting the amount of physical memory that can be registered.  You should investigate the relevant Linux kernel module parameters that control how much physical memory can be registered, and increase them to allow registering all physical memory on your machine.
<br>
<p><p><p><p><p>See this Open MPI FAQ item for more information on these Linux kernel module
<br>
<p><p><p>parameters:
<br>
<p><p><p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages</a> &lt;<a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages</a>&gt;
<br>
<p><p><p><p><p>&nbsp;&nbsp;Local host:              akutilm-0006.ors.hpc.mil
<br>
<p><p><p>&nbsp;&nbsp;Registerable memory:     131072 MiB
<br>
<p><p><p>&nbsp;&nbsp;Total memory:            258542 MiB
<br>
<p><p><p><p><p>Your MPI job will continue, but may be behave poorly and/or hang.
<br>
<p><p><p>--------------------------------------------------------------------------
<br>
<p><p><p>akutilm-0006.ors.hpc.mil
<br>
<p><p><p>akutilm-0006.ors.hpc.mil
<br>
<p><p><p>[akutilm-0006.ors.hpc.mil:10970] 31 more processes have sent help message help-mpi-btl-openib.txt / reg mem limit low [akutilm-0006.ors.hpc.mil:10970] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
<br>
<p><p><p><p><p>Openmpi 1.4.3 works fine.
<br>
<p><p><p><p><p>Any help would be greatly appreciated.
<br>
<p><p><p><p><p>Thanks,
<br>
<p><p><p>Clif
<br>
<p><p><p>-------------- next part --------------
<br>
HTML attachment scrubbed and removed
<br>
<p>------------------------------
<br>
<p>Message: 2
<br>
Date: Tue, 24 Sep 2013 12:36:46 -0700
<br>
From: Ralph Castain &lt;rhc_at_[hidden]&gt;
<br>
To: Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] OpenMPI 1.6.3 problem
<br>
Message-ID: &lt;B4DD6235-B7FD-42DE-9D9D-D15D82460524_at_[hidden]&gt;
<br>
Content-Type: text/plain; charset=&quot;windows-1252&quot;
<br>
<p>Just to be clear - are you saying the job fails to run? Or just that it emits this warning (not error) and then runs to completion?
<br>
<p>This is a warning we added at some point because jobs were hanging due to exhausting registered memory, and people didn't know why. If you check out the link, I believe we tell you how to turn off the warning if you are sure your system is correctly configured.
<br>
<p><p>On Sep 24, 2013, at 12:20 PM, &quot;Bryan, Clifton W ERDC-RDE-MSRC-MS Contractor&quot; &lt;clifton.W.bryan_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; We are having problems with OpenMPI 1.6.3 ? it gives the below error message when trying to run:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; $ mpirun -np 32 ./mpi_test.x
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; WARNING: It appears that your OpenFabrics subsystem is configured to only allow registering part of your physical memory.  This can cause MPI jobs to run with erratic performance, hang, and/or crash.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; This may be caused by your OpenFabrics vendor limiting the amount of physical memory that can be registered.  You should investigate the relevant Linux kernel module parameters that control how much physical memory can be registered, and increase them to allow registering all physical memory on your machine.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; See this Open MPI FAQ item for more information on these Linux kernel 
</span><br>
<span class="quotelev1">&gt; module
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; parameters:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages</a> 
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages</a>&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;   Local host:              akutilm-0006.ors.hpc.mil
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;   Registerable memory:     131072 MiB
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;   Total memory:            258542 MiB
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Your MPI job will continue, but may be behave poorly and/or hang.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; akutilm-0006.ors.hpc.mil
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; akutilm-0006.ors.hpc.mil
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; [akutilm-0006.ors.hpc.mil:10970] 31 more processes have sent help 
</span><br>
<span class="quotelev1">&gt; message help-mpi-btl-openib.txt / reg mem limit low 
</span><br>
<span class="quotelev1">&gt; [akutilm-0006.ors.hpc.mil:10970] Set MCA parameter 
</span><br>
<span class="quotelev1">&gt; &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Openmpi 1.4.3 works fine.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Any help would be greatly appreciated.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Clif
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
<p>-------------- next part --------------
<br>
HTML attachment scrubbed and removed
<br>
<p>------------------------------
<br>
<p>Message: 3
<br>
Date: Tue, 24 Sep 2013 19:38:50 +0000
<br>
From: &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt;
<br>
To: Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] OpenMPI 1.6.3 problem
<br>
Message-ID:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;EF66BBEB19BADC41AC8CCF5F684F07FC4F8C5C60_at_[hidden]&gt;
<br>
Content-Type: text/plain; charset=&quot;Windows-1252&quot;
<br>
<p>Have you visited the URL that is cited?  :-)
<br>
<p>It talks all about the issue, and describes how to fix it.  Let us know if there's something unclear in that FAQ text.
<br>
<p><p>On Sep 24, 2013, at 3:20 PM, &quot;Bryan, Clifton W ERDC-RDE-MSRC-MS Contractor&quot; &lt;clifton.W.bryan_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; We are having problems with OpenMPI 1.6.3 ? it gives the below error message when trying to run:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; $ mpirun -np 32 ./mpi_test.x
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; WARNING: It appears that your OpenFabrics subsystem is configured to only allow registering part of your physical memory.  This can cause MPI jobs to run with erratic performance, hang, and/or crash.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; This may be caused by your OpenFabrics vendor limiting the amount of physical memory that can be registered.  You should investigate the relevant Linux kernel module parameters that control how much physical memory can be registered, and increase them to allow registering all physical memory on your machine.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; See this Open MPI FAQ item for more information on these Linux kernel 
</span><br>
<span class="quotelev1">&gt; module
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; parameters:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages</a> 
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages</a>&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;   Local host:              akutilm-0006.ors.hpc.mil
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;   Registerable memory:     131072 MiB
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;   Total memory:            258542 MiB
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Your MPI job will continue, but may be behave poorly and/or hang.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; akutilm-0006.ors.hpc.mil
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; akutilm-0006.ors.hpc.mil
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; [akutilm-0006.ors.hpc.mil:10970] 31 more processes have sent help 
</span><br>
<span class="quotelev1">&gt; message help-mpi-btl-openib.txt / reg mem limit low 
</span><br>
<span class="quotelev1">&gt; [akutilm-0006.ors.hpc.mil:10970] Set MCA parameter 
</span><br>
<span class="quotelev1">&gt; &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Openmpi 1.4.3 works fine.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Any help would be greatly appreciated.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Clif
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
<p><p><pre>
--
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
------------------------------
Subject: Digest Footer
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
------------------------------
End of users Digest, Vol 2689, Issue 1
**************************************
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22721.php">Bryan, Clifton W ERDC-RDE-MSRC-MS Contractor: "Re: [OMPI users] users Digest, Vol 2689, Issue 1"</a>
<li><strong>Previous message:</strong> <a href="22719.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI 1.6.3 problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22721.php">Bryan, Clifton W ERDC-RDE-MSRC-MS Contractor: "Re: [OMPI users] users Digest, Vol 2689, Issue 1"</a>
<li><strong>Reply:</strong> <a href="22721.php">Bryan, Clifton W ERDC-RDE-MSRC-MS Contractor: "Re: [OMPI users] users Digest, Vol 2689, Issue 1"</a>
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
