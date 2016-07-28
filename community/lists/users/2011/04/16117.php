<?
$subject_val = "Re: [OMPI users] mpi problems,";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  4 10:56:25 2011" -->
<!-- isoreceived="20110404145625" -->
<!-- sent="Mon, 4 Apr 2011 09:56:09 -0500" -->
<!-- isosent="20110404145609" -->
<!-- name="Nehemiah Dacres" -->
<!-- email="dacresni_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi problems," -->
<!-- id="BANLkTi=d8azag4ovNHJC9zS=H6sbi_qVEw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1B043981-BAFC-4367-8011-81A17F9468B2_at_cisco.com" -->
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
<strong>From:</strong> Nehemiah Dacres (<em>dacresni_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-04 10:56:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16118.php">Nehemiah Dacres: "Re: [OMPI users] mpi problems,"</a>
<li><strong>Previous message:</strong> <a href="16116.php">Ralph Castain: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<li><strong>In reply to:</strong> <a href="16114.php">Jeff Squyres: "Re: [OMPI users] mpi problems,"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16118.php">Nehemiah Dacres: "Re: [OMPI users] mpi problems,"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
that's an excellent suggestion
<br>
<p>On Mon, Apr 4, 2011 at 9:45 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; As Ralph indicated, he'll add the hostname to the error message (but that
</span><br>
<span class="quotelev1">&gt; might be tricky; that error message is coming from rsh/ssh...).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the meantime, you might try (csh style):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; foreach host (`cat list`)
</span><br>
<span class="quotelev1">&gt;    echo $host
</span><br>
<span class="quotelev1">&gt;    ls -l /opt/SUNWhpc/HPC8.2.1c/sun/bin/orted
</span><br>
<span class="quotelev1">&gt; end
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 4, 2011, at 10:24 AM, Nehemiah Dacres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have installed it via a symlink on all of the nodes, I can go 'tentakel
</span><br>
<span class="quotelev1">&gt; which mpirun ' and it finds it' I'll check the library paths but isn't there
</span><br>
<span class="quotelev1">&gt; a way to find out which nodes are returning the error?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Thu, Mar 31, 2011 at 7:30 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; The error message seems to imply that you don't have OMPI installed on
</span><br>
<span class="quotelev1">&gt; all your nodes (because it didn't find /opt/SUNWhpc/HPC8.2.1c/sun/bin/orted
</span><br>
<span class="quotelev1">&gt; on a remote node).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mar 30, 2011, at 4:24 PM, Nehemiah Dacres wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I am trying to figure out why my jobs aren't getting distributed and
</span><br>
<span class="quotelev1">&gt; need some help. I have an install of sun cluster tools on Rockscluster 5.2
</span><br>
<span class="quotelev1">&gt; (essentially centos4u2). this user's account has its home dir shared via
</span><br>
<span class="quotelev1">&gt; nfs. I am getting some strange errors. here's an example run
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [jian_at_therock ~]$ /opt/SUNWhpc/HPC8.2.1c/sun/bin/mpirun -np 3
</span><br>
<span class="quotelev1">&gt; -hostfile list ./job2.sh
</span><br>
<span class="quotelev3">&gt; &gt; &gt; bash: /opt/SUNWhpc/HPC8.2.1c/sun/bin/orted: No such file or directory
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt; A daemon (pid 20362) died unexpectedly with status 127 while attempting
</span><br>
<span class="quotelev3">&gt; &gt; &gt; to launch so we are aborting.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev3">&gt; &gt; &gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev3">&gt; &gt; &gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev3">&gt; &gt; &gt; that caused that situation.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [jian_at_therock ~]$ /opt/SUNWhpc/HPC8.2.1c/sun/
</span><br>
<span class="quotelev3">&gt; &gt; &gt; bin/        examples/   instrument/ man/
</span><br>
<span class="quotelev3">&gt; &gt; &gt; etc/        include/    lib/        share/
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [jian_at_therock ~]$ /opt/SUNWhpc/HPC8.2.1c/sun/bin/orte
</span><br>
<span class="quotelev3">&gt; &gt; &gt; orte-clean  orted       orte-iof    orte-ps     orterun
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [jian_at_therock ~]$ /opt/SUNWhpc/HPC8.2.1c/sun/bin/orted
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [therock.slu.loc:20365] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found
</span><br>
<span class="quotelev1">&gt; in file runtime/orte_init.c at line 125
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt; It looks like orte_init failed for some reason; your parallel process
</span><br>
<span class="quotelev1">&gt; is
</span><br>
<span class="quotelev3">&gt; &gt; &gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev3">&gt; &gt; &gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev3">&gt; &gt; &gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Open MPI developer):
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   orte_ess_base_select failed
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   --&gt; Returned value Not found (-13) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [therock.slu.loc:20365] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found
</span><br>
<span class="quotelev1">&gt; in file orted/orted_main.c at line 325
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [jian_at_therock ~]$
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Nehemiah I. Dacres
</span><br>
<span class="quotelev3">&gt; &gt; &gt; System Administrator
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Advanced Technology Group Saint Louis University
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
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
<span class="quotelev2">&gt; &gt;
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
<p><p><p><pre>
-- 
Nehemiah I. Dacres
System Administrator
Advanced Technology Group Saint Louis University
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16117/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16118.php">Nehemiah Dacres: "Re: [OMPI users] mpi problems,"</a>
<li><strong>Previous message:</strong> <a href="16116.php">Ralph Castain: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<li><strong>In reply to:</strong> <a href="16114.php">Jeff Squyres: "Re: [OMPI users] mpi problems,"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16118.php">Nehemiah Dacres: "Re: [OMPI users] mpi problems,"</a>
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
