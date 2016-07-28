<?
$subject_val = "Re: [OMPI users] mpi problems,";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  4 10:45:48 2011" -->
<!-- isoreceived="20110404144548" -->
<!-- sent="Mon, 4 Apr 2011 10:45:41 -0400" -->
<!-- isosent="20110404144541" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi problems," -->
<!-- id="1B043981-BAFC-4367-8011-81A17F9468B2_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BANLkTim80tcfn4nq29hSEKpPvZc9fn+1kA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpi problems,<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-04 10:45:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16115.php">Ralph Castain: "Re: [OMPI users] mpi problems,"</a>
<li><strong>Previous message:</strong> <a href="16113.php">Nehemiah Dacres: "Re: [OMPI users] mpi problems,"</a>
<li><strong>In reply to:</strong> <a href="16107.php">Nehemiah Dacres: "Re: [OMPI users] mpi problems,"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16117.php">Nehemiah Dacres: "Re: [OMPI users] mpi problems,"</a>
<li><strong>Reply:</strong> <a href="16117.php">Nehemiah Dacres: "Re: [OMPI users] mpi problems,"</a>
<li><strong>Reply:</strong> <a href="16118.php">Nehemiah Dacres: "Re: [OMPI users] mpi problems,"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As Ralph indicated, he'll add the hostname to the error message (but that might be tricky; that error message is coming from rsh/ssh...).  
<br>
<p>In the meantime, you might try (csh style):
<br>
<p>foreach host (`cat list`)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;echo $host
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ls -l /opt/SUNWhpc/HPC8.2.1c/sun/bin/orted
<br>
end
<br>
<p><p><p>On Apr 4, 2011, at 10:24 AM, Nehemiah Dacres wrote:
<br>
<p><span class="quotelev1">&gt; I have installed it via a symlink on all of the nodes, I can go 'tentakel which mpirun ' and it finds it' I'll check the library paths but isn't there a way to find out which nodes are returning the error? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Mar 31, 2011 at 7:30 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; The error message seems to imply that you don't have OMPI installed on all your nodes (because it didn't find /opt/SUNWhpc/HPC8.2.1c/sun/bin/orted on a remote node).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 30, 2011, at 4:24 PM, Nehemiah Dacres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I am trying to figure out why my jobs aren't getting distributed and need some help. I have an install of sun cluster tools on Rockscluster 5.2 (essentially centos4u2). this user's account has its home dir shared via nfs. I am getting some strange errors. here's an example run
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [jian_at_therock ~]$ /opt/SUNWhpc/HPC8.2.1c/sun/bin/mpirun -np 3 -hostfile list ./job2.sh
</span><br>
<span class="quotelev2">&gt; &gt; bash: /opt/SUNWhpc/HPC8.2.1c/sun/bin/orted: No such file or directory
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; A daemon (pid 20362) died unexpectedly with status 127 while attempting
</span><br>
<span class="quotelev2">&gt; &gt; to launch so we are aborting.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev2">&gt; &gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
</span><br>
<span class="quotelev2">&gt; &gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev2">&gt; &gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev2">&gt; &gt; that caused that situation.
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [jian_at_therock ~]$ /opt/SUNWhpc/HPC8.2.1c/sun/
</span><br>
<span class="quotelev2">&gt; &gt; bin/        examples/   instrument/ man/
</span><br>
<span class="quotelev2">&gt; &gt; etc/        include/    lib/        share/
</span><br>
<span class="quotelev2">&gt; &gt; [jian_at_therock ~]$ /opt/SUNWhpc/HPC8.2.1c/sun/bin/orte
</span><br>
<span class="quotelev2">&gt; &gt; orte-clean  orted       orte-iof    orte-ps     orterun
</span><br>
<span class="quotelev2">&gt; &gt; [jian_at_therock ~]$ /opt/SUNWhpc/HPC8.2.1c/sun/bin/orted
</span><br>
<span class="quotelev2">&gt; &gt; [therock.slu.loc:20365] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file runtime/orte_init.c at line 125
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev2">&gt; &gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt; &gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev2">&gt; &gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev2">&gt; &gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev2">&gt; &gt; Open MPI developer):
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   orte_ess_base_select failed
</span><br>
<span class="quotelev2">&gt; &gt;   --&gt; Returned value Not found (-13) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; [therock.slu.loc:20365] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file orted/orted_main.c at line 325
</span><br>
<span class="quotelev2">&gt; &gt; [jian_at_therock ~]$
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Nehemiah I. Dacres
</span><br>
<span class="quotelev2">&gt; &gt; System Administrator
</span><br>
<span class="quotelev2">&gt; &gt; Advanced Technology Group Saint Louis University
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Nehemiah I. Dacres
</span><br>
<span class="quotelev1">&gt; System Administrator 
</span><br>
<span class="quotelev1">&gt; Advanced Technology Group Saint Louis University
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
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16115.php">Ralph Castain: "Re: [OMPI users] mpi problems,"</a>
<li><strong>Previous message:</strong> <a href="16113.php">Nehemiah Dacres: "Re: [OMPI users] mpi problems,"</a>
<li><strong>In reply to:</strong> <a href="16107.php">Nehemiah Dacres: "Re: [OMPI users] mpi problems,"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16117.php">Nehemiah Dacres: "Re: [OMPI users] mpi problems,"</a>
<li><strong>Reply:</strong> <a href="16117.php">Nehemiah Dacres: "Re: [OMPI users] mpi problems,"</a>
<li><strong>Reply:</strong> <a href="16118.php">Nehemiah Dacres: "Re: [OMPI users] mpi problems,"</a>
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
