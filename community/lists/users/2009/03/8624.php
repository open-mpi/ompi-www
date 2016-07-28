<?
$subject_val = "Re: [OMPI users] 'orte_ess_base_select failed'";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 27 22:29:33 2009" -->
<!-- isoreceived="20090328022933" -->
<!-- sent="Fri, 27 Mar 2009 18:29:23 -0400" -->
<!-- isosent="20090327222923" -->
<!-- name="Russell McQueeney" -->
<!-- email="justru_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 'orte_ess_base_select failed'" -->
<!-- id="49CD5343.8070300_at_comcast.net" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B1900A86-6F35-4593-A321-D07E590DFBEC_at_cisco.com" -->
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
<strong>Date:</strong> 2009-03-27 18:29:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8625.php">François PELLEGRINI: "[OMPI users] Bogus memcpy or bogus  valgrind record"</a>
<li><strong>Previous message:</strong> <a href="8623.php">Jeff Squyres: "Re: [OMPI users] Does OpenMPI's MPI_Barrier automatically call thetuned version?"</a>
<li><strong>In reply to:</strong> <a href="8621.php">Jeff Squyres: "Re: [OMPI users] 'orte_ess_base_select failed'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8660.php">Jeff Squyres: "Re: [OMPI users] 'orte_ess_base_select failed'"</a>
<li><strong>Reply:</strong> <a href="8660.php">Jeff Squyres: "Re: [OMPI users] 'orte_ess_base_select failed'"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Hmm -- puzzling -- the error file you sent shows the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; bash: /opt/openmpi/orted: No such file or directory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But that shouldn't happen; according to your config.log, you installed 
</span><br>
<span class="quotelev1">&gt; with a prefix of /opt/openmpi, so Open MPI should be looking for orted 
</span><br>
<span class="quotelev1">&gt; in /opt/openmpi/bin/orted.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You said that the command was
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; command = mpirun --hostfile hostfile -np 2 echo `uname -a`
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there any chance that you ran with mpirun's absolute filename, such 
</span><br>
<span class="quotelev1">&gt; as:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/bin/mpirun --hostfile hostfile -np 2 echo `uname -a`
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Or do you have any aliases involved?  I can't imagine how you're 
</span><br>
<span class="quotelev1">&gt; getting that error message -- Open MPI should never use a full path 
</span><br>
<span class="quotelev1">&gt; name for orted unless you specified --prefix on the mpirun command 
</span><br>
<span class="quotelev1">&gt; line (which you didn't), or youused a full path name for mpirun (which 
</span><br>
<span class="quotelev1">&gt; it looks like you didn't, and even if you did use 
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/bin/mpirun, it should use that path to look for 
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/bin/orted on the other node).  Otherwise, Open MPI relies 
</span><br>
<span class="quotelev1">&gt; on the PATH set in your shell startup files on remote nodes to find 
</span><br>
<span class="quotelev1">&gt; the orted.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is very odd -- can you look at the exact command that is being 
</span><br>
<span class="quotelev1">&gt; executed on the remote node?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 27, 2009, at 12:24 PM, Russell McQueeney wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; command = mpirun --hostfile hostfile -np 2 echo `uname -a`
</span><br>
<span class="quotelev2">&gt;&gt; PATH = ...:/opt/openmpi/bin
</span><br>
<span class="quotelev2">&gt;&gt; LD_LIBRARY_PATH = /opt/openmpi/lib
</span><br>
<span class="quotelev2">&gt;&gt; no MCA parameters used
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I set up the default shell to bash, and put some echo's in .bash_profile
</span><br>
<span class="quotelev2">&gt;&gt; and .bashrc, and when i run the mpirun command, i see those echoes, but
</span><br>
<span class="quotelev2">&gt;&gt; then it stops, and the job is never completed
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Could you please send the info shown here:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; If the ess is failing, then we don't recognize the environment.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Probably an issue with how it is configured vs being run.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Mar 26, 2009, at 3:42 PM, Russell McQueeney wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; I installed OpenMPI 1.3.1, and whenever I or mpirun try to start
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; orted on any of the machines, it shows that message, and
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; --&gt; Returned value Not found (-13) instead of ORTE-SUCCESS
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Is there anything obvious that I missed?
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; My machines are Intel x86-32, running fedora (10 and 2)
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;config.log.bz2&gt;&lt;ompi_info.bz2&gt;&lt;orted_errors.bz2&gt;&lt;ifconfig.bz2&gt;&lt;ATT7963694.txt&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
Oops.  I just did `/opt/openmpi/orted 2&gt;orted_erros ; bzip2 
<br>
orted_errors` and didn't check it before I atached it.  What ends up 
<br>
happening is ^C kill mpirun on the head node, and all the other nodes 
<br>
have a zombie, nonresponsive 'orted' process, which I have to kill 
<br>
manually.  Interestingly enough, no matter what environment variables I 
<br>
set, and no matter which machine, when I try to run `orted` or 
<br>
`/opt/openmpi/bin/orted`, I get the exact same error.  I have attached 
<br>
the real orted errors file here.  The reason that bash was whining was 
<br>
an incorrect syntax on the stderr redierct, `orted 2&gt; orted_errors` 
<br>
instead of the correct version; `orted 2&gt;orted_errors`
<br>
<p>
<br><hr>
<ul>
<li>application/x-bzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8624/orted_errors.bz2">orted_errors.bz2</a>
</ul>
<!-- attachment="orted_errors.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8625.php">François PELLEGRINI: "[OMPI users] Bogus memcpy or bogus  valgrind record"</a>
<li><strong>Previous message:</strong> <a href="8623.php">Jeff Squyres: "Re: [OMPI users] Does OpenMPI's MPI_Barrier automatically call thetuned version?"</a>
<li><strong>In reply to:</strong> <a href="8621.php">Jeff Squyres: "Re: [OMPI users] 'orte_ess_base_select failed'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8660.php">Jeff Squyres: "Re: [OMPI users] 'orte_ess_base_select failed'"</a>
<li><strong>Reply:</strong> <a href="8660.php">Jeff Squyres: "Re: [OMPI users] 'orte_ess_base_select failed'"</a>
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
