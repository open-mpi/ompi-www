<?
$subject_val = "Re: [OMPI users] Error when attempting to run LAMMPS on Centos 6.2	with OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jan 27 11:24:30 2013" -->
<!-- isoreceived="20130127162430" -->
<!-- sent="Sun, 27 Jan 2013 08:24:23 -0800" -->
<!-- isosent="20130127162423" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error when attempting to run LAMMPS on Centos 6.2	with OpenMPI" -->
<!-- id="5755982B-5E14-4840-95FE-2D2708DFAE0E_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="009017CD69F590478F7063E1C082325823BB6FB5_at_HKNPRD0111MB375.apcprd01.prod.exchangelabs.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error when attempting to run LAMMPS on Centos 6.2	with OpenMPI<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-27 11:24:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21242.php">#YEO JINGJIE#: "Re: [OMPI users] Error when attempting to run LAMMPS on Centos 6.2	with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="21240.php">John Hearns: "Re: [OMPI users] very low performance over infiniband"</a>
<li><strong>In reply to:</strong> <a href="21238.php">#YEO JINGJIE#: "Re: [OMPI users] Error when attempting to run LAMMPS on Centos 6.2	with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21242.php">#YEO JINGJIE#: "Re: [OMPI users] Error when attempting to run LAMMPS on Centos 6.2	with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="21242.php">#YEO JINGJIE#: "Re: [OMPI users] Error when attempting to run LAMMPS on Centos 6.2	with OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 26, 2013, at 11:18 PM, #YEO JINGJIE# &lt;JYEO1_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; So I should run the job as:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/lib64/openmpi/bin/mpirun -mca mca_component_show_load_errors 1 -n 16 /opt/lammps-21Jan13/lmp_linux &lt; zigzag.in
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is that correct?
</span><br>
<p>Yes, thanks - though for our purposes, why don't you simplify it to:
<br>
<p><p>/usr/lib64/openmpi/bin/mpirun -mca mca_component_show_load_errors 1 -n 1 hostname
<br>
<p><p><span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ________________________________________
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [users-bounces_at_[hidden]] on behalf of Ralph Castain [rhc_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Sunday, 27 January, 2013 11:58:51 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Error when attempting to run LAMMPS on Centos 6.2     with OpenMPI
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; One thing you might try: add &quot;-mca mca_component_show_load_errors 1&quot; to your mpirun cmd line. This will tell us if the libraries have some missing dependencies.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It's the main reason I dislike installing from a package - the package assumes that your system is configured identically to that of the one used to generate the package. This is rarely the case - much easier to just download an OMPI tarball, configure and compile it yourself.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 26, 2013, at 7:32 PM, #YEO JINGJIE# &lt;JYEO1_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Jeff,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Sorry the original error info was lost along the way, I'm terribly new to linux and I am trying to compile OMPI and to run a program, LAMMPS using the command:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/openmpi/bin/mpirun -n 16 /opt/lammps-21Jan13/lmp_linux &lt; zigzag.in
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; And I received the errors:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file ess_hnp_module.c at line 194
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev2">&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt;&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev2">&gt;&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev2">&gt;&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev2">&gt;&gt; orte_plm_base_select failed
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Returned value Not found (-13) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [NTU-2:24127] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file runtime/orte_init.c at line 128
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev2">&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt;&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev2">&gt;&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev2">&gt;&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev2">&gt;&gt; orte_ess_set_name failed
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Returned value Not found (-13) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [NTU-2:24127] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file orterun.c at line 616
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have attached the output for &quot;ompi_info --all&quot; in this email. Any advise and guidance is greatly appreciated, thank you!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Jingjie Yeo
</span><br>
<span class="quotelev2">&gt;&gt; Ph.D. Student
</span><br>
<span class="quotelev2">&gt;&gt; School of Mechanical and Aerospace Engineering
</span><br>
<span class="quotelev2">&gt;&gt; Nanyang Technological University, Singapore
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden] [users-bounces_at_[hidden]] on behalf of Jeff Squyres (jsquyres) [jsquyres_at_[hidden]]
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Saturday, 26 January, 2013 9:51:43 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Error when attempting to run LAMMPS on Centos 6.2 with OpenMPI
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Can you provide more information?  You really haven't said *what* the problem is that is occurring (even in your followup emails to Ralph).  Without such information, it is very hard for us to guess what is wrong.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Please send all the information listed here:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 25, 2013, at 8:51 PM, #YEO JINGJIE# &lt;JYEO1_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I tried to follow the installation instructions over here:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://amusecode.org/doc/install/install-prerequisites-redhat.html">http://amusecode.org/doc/install/install-prerequisites-redhat.html</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; And I am using bash and yum.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jingjie Yeo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ph.D. Student
</span><br>
<span class="quotelev3">&gt;&gt;&gt; School of Mechanical and Aerospace Engineering
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Nanyang Technological University, Singapore
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users<output.log">http://www.open-mpi.org/mailman/listinfo.cgi/users<output.log</a>&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21242.php">#YEO JINGJIE#: "Re: [OMPI users] Error when attempting to run LAMMPS on Centos 6.2	with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="21240.php">John Hearns: "Re: [OMPI users] very low performance over infiniband"</a>
<li><strong>In reply to:</strong> <a href="21238.php">#YEO JINGJIE#: "Re: [OMPI users] Error when attempting to run LAMMPS on Centos 6.2	with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21242.php">#YEO JINGJIE#: "Re: [OMPI users] Error when attempting to run LAMMPS on Centos 6.2	with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="21242.php">#YEO JINGJIE#: "Re: [OMPI users] Error when attempting to run LAMMPS on Centos 6.2	with OpenMPI"</a>
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
