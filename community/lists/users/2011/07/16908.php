<?
$subject_val = "Re: [OMPI users] How to use a wrapper for ssh?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 12 23:40:42 2011" -->
<!-- isoreceived="20110713034042" -->
<!-- sent="Tue, 12 Jul 2011 21:40:35 -0600" -->
<!-- isosent="20110713034035" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to use a wrapper for ssh?" -->
<!-- id="0C1BAB2C-F727-4127-8A3C-090226C8466F_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4E1CAFD0.8070003_at_rz.rwth-aachen.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to use a wrapper for ssh?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-12 23:40:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16909.php">Paul Kapinos: "Re: [OMPI users] How to use a wrapper for ssh?"</a>
<li><strong>Previous message:</strong> <a href="16907.php">Tim Prince: "Re: [OMPI users] OpenMPI vs Intel Efficiency question"</a>
<li><strong>In reply to:</strong> <a href="16900.php">Paul Kapinos: "[OMPI users] How to use a wrapper for ssh?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16909.php">Paul Kapinos: "Re: [OMPI users] How to use a wrapper for ssh?"</a>
<li><strong>Reply:</strong> <a href="16909.php">Paul Kapinos: "Re: [OMPI users] How to use a wrapper for ssh?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 12, 2011, at 2:34 PM, Paul Kapinos wrote:
<br>
<p><span class="quotelev1">&gt; Hi OpenMPI folks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Using the version 1.4.3 of OpenMPI, I wanna to wrap the 'ssh' calls, which are made from the OpenMPIs 'mpiexec'. For this purpose, at least two ways seem to be possible for me:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. let the wrapper have the name 'ssh' and paste the path where it is into the PATH envvar *before* the path to real ssh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Q1: Would this work?
</span><br>
<p>Probably - but I wouldn't recommend it
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. use MCA parameters described in
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=rsh#rsh-not-ssh">http://www.open-mpi.org/faq/?category=rsh#rsh-not-ssh</a>
</span><br>
<span class="quotelev1">&gt; to bend the call to my wrapper, e.g.
</span><br>
<span class="quotelev1">&gt; export OMPI_MCA_plm_rsh_agent=WrapPer
</span><br>
<span class="quotelev1">&gt; export OMPI_MCA_orte_rsh_agent=WrapPer
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the oddly thing is, that the OMPI_MCA_orte_rsh_agent envvar seem not to have any effect, whereas OMPI_MCA_plm_rsh_agent works.
</span><br>
<span class="quotelev1">&gt; Why I believe so?
</span><br>
<p>orte_rsh_agent doesn't exist in the 1.4 series :-)
<br>
<p>Only plm_rsh_agent is available in 1.4. &quot;ompi_info --param orte all&quot; and &quot;ompi_info --param plm rsh&quot; will confirm that fact.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Because &quot;strace -f mpiexec ...&quot; says still trying for opening 'ssh' if OMPI_MCA_orte_rsh_agent is set, and correctly trying to open the 'WrapPer' iff OMPI_MCA_plm_rsh_agent is set.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Q2: Is the supposed non-functionality of OMPI_MCA_orte_rsh_agent a bug, or do I have just misunderstood something?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best wishes,
</span><br>
<span class="quotelev1">&gt; Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; P.S. reproducing: just set the envvars and do 'strace -f mpiexec ...'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; example:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; export OMPI_MCA_plm_rsh_agent=WrapPer
</span><br>
<span class="quotelev1">&gt; ---&gt; look'n for 'WrapPer';
</span><br>
<span class="quotelev1">&gt; stat64(&quot;/opt/lsf/8.0/linux2.6-glibc2.3-x86_64/bin/WrapPer&quot;, 0xffff8324) = -1 ENOENT (No such file or directory)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; export OMPI_MCA_orte_rsh_agent=WrapPer
</span><br>
<span class="quotelev1">&gt; (do not forget to unset OMPI_MCA_plm_rsh_agent :o)
</span><br>
<span class="quotelev1">&gt; ---&gt; still looking for 'ssh'
</span><br>
<span class="quotelev1">&gt; stat64(&quot;/opt/lsf/8.0/linux2.6-glibc2.3-x86_64/bin/ssh&quot;, 0xffff8324) = -1 ENOENT (No such file or directory)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ===&gt; OMPI_MCA_orte_rsh_agent does not work?!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
</span><br>
<span class="quotelev1">&gt; RWTH Aachen University, Center for Computing and Communication
</span><br>
<span class="quotelev1">&gt; Seffenter Weg 23,  D 52074  Aachen (Germany)
</span><br>
<span class="quotelev1">&gt; Tel: +49 241/80-24915
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
<li><strong>Next message:</strong> <a href="16909.php">Paul Kapinos: "Re: [OMPI users] How to use a wrapper for ssh?"</a>
<li><strong>Previous message:</strong> <a href="16907.php">Tim Prince: "Re: [OMPI users] OpenMPI vs Intel Efficiency question"</a>
<li><strong>In reply to:</strong> <a href="16900.php">Paul Kapinos: "[OMPI users] How to use a wrapper for ssh?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16909.php">Paul Kapinos: "Re: [OMPI users] How to use a wrapper for ssh?"</a>
<li><strong>Reply:</strong> <a href="16909.php">Paul Kapinos: "Re: [OMPI users] How to use a wrapper for ssh?"</a>
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
