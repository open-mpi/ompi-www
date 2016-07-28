<?
$subject_val = "Re: [OMPI users] 'orte_ess_base_select failed'";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 27 16:24:51 2009" -->
<!-- isoreceived="20090327202451" -->
<!-- sent="Fri, 27 Mar 2009 12:24:37 -0400" -->
<!-- isosent="20090327162437" -->
<!-- name="Russell McQueeney" -->
<!-- email="justru_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 'orte_ess_base_select failed'" -->
<!-- id="49CCFDC5.7090104_at_comcast.net" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4CE1407B-05A5-4C30-9383-C47591EC440D_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] 'orte_ess_base_select failed'<br>
<strong>From:</strong> Russell McQueeney (<em>justru_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-27 12:24:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8620.php">Jeff Squyres: "Re: [OMPI users] Cannot build OpenMPI 1.3 with PGI pgf90 and Gnu gcc/g++."</a>
<li><strong>Previous message:</strong> <a href="8618.php">&#197;ke Sandgren: "Re: [OMPI users] [Open MPI Announce] Critical bug notice"</a>
<li><strong>In reply to:</strong> <a href="8607.php">Ralph Castain: "Re: [OMPI users] 'orte_ess_base_select failed'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8621.php">Jeff Squyres: "Re: [OMPI users] 'orte_ess_base_select failed'"</a>
<li><strong>Reply:</strong> <a href="8621.php">Jeff Squyres: "Re: [OMPI users] 'orte_ess_base_select failed'"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
command = mpirun --hostfile hostfile -np 2 echo `uname -a`
<br>
PATH = ...:/opt/openmpi/bin
<br>
LD_LIBRARY_PATH = /opt/openmpi/lib
<br>
no MCA parameters used
<br>
<p>I set up the default shell to bash, and put some echo's in .bash_profile 
<br>
and .bashrc, and when i run the mpirun command, i see those echoes, but 
<br>
then it stops, and the job is never completed
<br>
<p>Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Could you please send the info shown here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If the ess is failing, then we don't recognize the environment. 
</span><br>
<span class="quotelev1">&gt; Probably an issue with how it is configured vs being run.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 26, 2009, at 3:42 PM, Russell McQueeney wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I installed OpenMPI 1.3.1, and whenever I or mpirun try to start 
</span><br>
<span class="quotelev2">&gt;&gt; orted on any of the machines, it shows that message, and
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Returned value Not found (-13) instead of ORTE-SUCCESS
</span><br>
<span class="quotelev2">&gt;&gt; Is there anything obvious that I missed?
</span><br>
<span class="quotelev2">&gt;&gt; My machines are Intel x86-32, running fedora (10 and 2)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<p><p>



<br><hr>
<ul>
<li>application/x-bzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8619/config.log.bz2">config.log.bz2</a>
</ul>
<!-- attachment="config.log.bz2" -->
<hr>
<ul>
<li>application/x-bzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8619/ompi_info.bz2">ompi_info.bz2</a>
</ul>
<!-- attachment="ompi_info.bz2" -->
<hr>
<ul>
<li>application/x-bzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8619/orted_errors.bz2">orted_errors.bz2</a>
</ul>
<!-- attachment="orted_errors.bz2" -->
<hr>
<ul>
<li>application/x-bzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8619/ifconfig.bz2">ifconfig.bz2</a>
</ul>
<!-- attachment="ifconfig.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8620.php">Jeff Squyres: "Re: [OMPI users] Cannot build OpenMPI 1.3 with PGI pgf90 and Gnu gcc/g++."</a>
<li><strong>Previous message:</strong> <a href="8618.php">&#197;ke Sandgren: "Re: [OMPI users] [Open MPI Announce] Critical bug notice"</a>
<li><strong>In reply to:</strong> <a href="8607.php">Ralph Castain: "Re: [OMPI users] 'orte_ess_base_select failed'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8621.php">Jeff Squyres: "Re: [OMPI users] 'orte_ess_base_select failed'"</a>
<li><strong>Reply:</strong> <a href="8621.php">Jeff Squyres: "Re: [OMPI users] 'orte_ess_base_select failed'"</a>
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
