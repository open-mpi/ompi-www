<?
$subject_val = "Re: [OMPI users] 'orte_ess_base_select failed'";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 27 21:40:27 2009" -->
<!-- isoreceived="20090328014027" -->
<!-- sent="Fri, 27 Mar 2009 21:40:14 -0400" -->
<!-- isosent="20090328014014" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 'orte_ess_base_select failed'" -->
<!-- id="B1900A86-6F35-4593-A321-D07E590DFBEC_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49CCFDC5.7090104_at_comcast.net" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-27 21:40:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8622.php">Jeff Squyres: "Re: [OMPI users] Bug report [?] on spawn processes - blocking when morethan one Send/Recv"</a>
<li><strong>Previous message:</strong> <a href="8620.php">Jeff Squyres: "Re: [OMPI users] Cannot build OpenMPI 1.3 with PGI pgf90 and Gnu gcc/g++."</a>
<li><strong>In reply to:</strong> <a href="8619.php">Russell McQueeney: "Re: [OMPI users] 'orte_ess_base_select failed'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8624.php">Russell McQueeney: "Re: [OMPI users] 'orte_ess_base_select failed'"</a>
<li><strong>Reply:</strong> <a href="8624.php">Russell McQueeney: "Re: [OMPI users] 'orte_ess_base_select failed'"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmm -- puzzling -- the error file you sent shows the following:
<br>
<p>bash: /opt/openmpi/orted: No such file or directory
<br>
<p>But that shouldn't happen; according to your config.log, you installed  
<br>
with a prefix of /opt/openmpi, so Open MPI should be looking for orted  
<br>
in /opt/openmpi/bin/orted.
<br>
<p>You said that the command was
<br>
<p><span class="quotelev1">&gt; command = mpirun --hostfile hostfile -np 2 echo `uname -a`
</span><br>
<p>Is there any chance that you ran with mpirun's absolute filename, such  
<br>
as:
<br>
<p>/opt/openmpi/bin/mpirun --hostfile hostfile -np 2 echo `uname -a`
<br>
<p>Or do you have any aliases involved?  I can't imagine how you're  
<br>
getting that error message -- Open MPI should never use a full path  
<br>
name for orted unless you specified --prefix on the mpirun command  
<br>
line (which you didn't), or youused a full path name for mpirun (which  
<br>
it looks like you didn't, and even if you did use /opt/openmpi/bin/ 
<br>
mpirun, it should use that path to look for /opt/openmpi/bin/orted on  
<br>
the other node).  Otherwise, Open MPI relies on the PATH set in your  
<br>
shell startup files on remote nodes to find the orted.
<br>
<p>This is very odd -- can you look at the exact command that is being  
<br>
executed on the remote node?
<br>
<p><p>On Mar 27, 2009, at 12:24 PM, Russell McQueeney wrote:
<br>
<p><span class="quotelev1">&gt; command = mpirun --hostfile hostfile -np 2 echo `uname -a`
</span><br>
<span class="quotelev1">&gt; PATH = ...:/opt/openmpi/bin
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH = /opt/openmpi/lib
</span><br>
<span class="quotelev1">&gt; no MCA parameters used
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I set up the default shell to bash, and put some echo's  
</span><br>
<span class="quotelev1">&gt; in .bash_profile
</span><br>
<span class="quotelev1">&gt; and .bashrc, and when i run the mpirun command, i see those echoes,  
</span><br>
<span class="quotelev1">&gt; but
</span><br>
<span class="quotelev1">&gt; then it stops, and the job is never completed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Could you please send the info shown here:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If the ess is failing, then we don't recognize the environment.
</span><br>
<span class="quotelev2">&gt; &gt; Probably an issue with how it is configured vs being run.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks
</span><br>
<span class="quotelev2">&gt; &gt; Ralph
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mar 26, 2009, at 3:42 PM, Russell McQueeney wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I installed OpenMPI 1.3.1, and whenever I or mpirun try to start
</span><br>
<span class="quotelev3">&gt; &gt;&gt; orted on any of the machines, it shows that message, and
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --&gt; Returned value Not found (-13) instead of ORTE-SUCCESS
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Is there anything obvious that I missed?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; My machines are Intel x86-32, running fedora (10 and 2)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<span class="quotelev1">&gt; &lt; 
</span><br>
<span class="quotelev1">&gt; config 
</span><br>
<span class="quotelev1">&gt; .log 
</span><br>
<span class="quotelev1">&gt; .bz2&gt;&lt;ompi_info.bz2&gt;&lt;orted_errors.bz2&gt;&lt;ifconfig.bz2&gt;&lt;ATT7963694.txt&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8622.php">Jeff Squyres: "Re: [OMPI users] Bug report [?] on spawn processes - blocking when morethan one Send/Recv"</a>
<li><strong>Previous message:</strong> <a href="8620.php">Jeff Squyres: "Re: [OMPI users] Cannot build OpenMPI 1.3 with PGI pgf90 and Gnu gcc/g++."</a>
<li><strong>In reply to:</strong> <a href="8619.php">Russell McQueeney: "Re: [OMPI users] 'orte_ess_base_select failed'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8624.php">Russell McQueeney: "Re: [OMPI users] 'orte_ess_base_select failed'"</a>
<li><strong>Reply:</strong> <a href="8624.php">Russell McQueeney: "Re: [OMPI users] 'orte_ess_base_select failed'"</a>
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
