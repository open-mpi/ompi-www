<?
$subject_val = "Re: [OMPI users] Error when attempting to run LAMMPS on Centos 6.2 with OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 26 22:32:57 2013" -->
<!-- isoreceived="20130127033257" -->
<!-- sent="Sun, 27 Jan 2013 03:32:45 +0000" -->
<!-- isosent="20130127033245" -->
<!-- name="#YEO JINGJIE#" -->
<!-- email="JYEO1_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error when attempting to run LAMMPS on Centos 6.2 with OpenMPI" -->
<!-- id="009017CD69F590478F7063E1C082325823BB6F89_at_HKNPRD0111MB375.apcprd01.prod.exchangelabs.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC42CB7909_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error when attempting to run LAMMPS on Centos 6.2 with OpenMPI<br>
<strong>From:</strong> #YEO JINGJIE# (<em>JYEO1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-26 22:32:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21237.php">Ralph Castain: "Re: [OMPI users] Error when attempting to run LAMMPS on Centos 6.2 with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="21235.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Error when attempting to run LAMMPS on Centos 6.2 with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="21235.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Error when attempting to run LAMMPS on Centos 6.2 with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21237.php">Ralph Castain: "Re: [OMPI users] Error when attempting to run LAMMPS on Centos 6.2 with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="21237.php">Ralph Castain: "Re: [OMPI users] Error when attempting to run LAMMPS on Centos 6.2 with OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>Sorry the original error info was lost along the way, I'm terribly new to linux and I am trying to compile OMPI and to run a program, LAMMPS using the command:
<br>
<p>/usr/lib64/openmpi/bin/mpirun -n 16 /opt/lammps-21Jan13/lmp_linux &lt; zigzag.in
<br>
<p>And I received the errors:
<br>
<p>&nbsp;[[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file ess_hnp_module.c at line 194
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
&nbsp;&nbsp;orte_plm_base_select failed
<br>
&nbsp;&nbsp;--&gt; Returned value Not found (-13) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
[NTU-2:24127] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file runtime/orte_init.c at line 128
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
&nbsp;&nbsp;orte_ess_set_name failed
<br>
&nbsp;&nbsp;--&gt; Returned value Not found (-13) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
[NTU-2:24127] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file orterun.c at line 616
<br>
<p><p>I have attached the output for &quot;ompi_info --all&quot; in this email. Any advise and guidance is greatly appreciated, thank you!
<br>
<p><p>Regards,
<br>
Jingjie Yeo
<br>
Ph.D. Student
<br>
School of Mechanical and Aerospace Engineering
<br>
Nanyang Technological University, Singapore
<br>
<p>________________________________________
<br>
From: users-bounces_at_[hidden] [users-bounces_at_[hidden]] on behalf of Jeff Squyres (jsquyres) [jsquyres_at_[hidden]]
<br>
Sent: Saturday, 26 January, 2013 9:51:43 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Error when attempting to run LAMMPS on Centos 6.2 with OpenMPI
<br>
<p>Can you provide more information?  You really haven't said *what* the problem is that is occurring (even in your followup emails to Ralph).  Without such information, it is very hard for us to guess what is wrong.
<br>
<p>Please send all the information listed here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p><p><p>On Jan 25, 2013, at 8:51 PM, #YEO JINGJIE# &lt;JYEO1_at_[hidden]&gt;
<br>
&nbsp;wrote:
<br>
<p><span class="quotelev1">&gt; I tried to follow the installation instructions over here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://amusecode.org/doc/install/install-prerequisites-redhat.html">http://amusecode.org/doc/install/install-prerequisites-redhat.html</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And I am using bash and yum.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Jingjie Yeo
</span><br>
<span class="quotelev1">&gt; Ph.D. Student
</span><br>
<span class="quotelev1">&gt; School of Mechanical and Aerospace Engineering
</span><br>
<span class="quotelev1">&gt; Nanyang Technological University, Singapore
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
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>

</pre>
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21236/output.log">output.log</a>
</ul>
<!-- attachment="output.log" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21237.php">Ralph Castain: "Re: [OMPI users] Error when attempting to run LAMMPS on Centos 6.2 with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="21235.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Error when attempting to run LAMMPS on Centos 6.2 with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="21235.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Error when attempting to run LAMMPS on Centos 6.2 with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21237.php">Ralph Castain: "Re: [OMPI users] Error when attempting to run LAMMPS on Centos 6.2 with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="21237.php">Ralph Castain: "Re: [OMPI users] Error when attempting to run LAMMPS on Centos 6.2 with OpenMPI"</a>
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
