<?
$subject_val = "Re: [OMPI users] OpenMPI fails to run with -np larger than 10";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr 14 12:58:55 2012" -->
<!-- isoreceived="20120414165855" -->
<!-- sent="Sat, 14 Apr 2012 12:58:49 -0400" -->
<!-- isosent="20120414165849" -->
<!-- name="Tim Miller" -->
<!-- email="btamiller_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI fails to run with -np larger than 10" -->
<!-- id="CAMsSzSBxTv4u1MLE=ZGMc73N2+k6fkj3-KP_PQB2H=P+YvzTkg_at_mail.gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="13469_1334235892_q3CD4mc9022257_CAKJMjaJE65+mm-NK82dfs1G1Y5gFbYrqxqPtYashrc_RSbeH_A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI fails to run with -np larger than 10<br>
<strong>From:</strong> Tim Miller (<em>btamiller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-14 12:58:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19008.php">Bradi Rares: "[OMPI users] OpenMpi on a windows Xp tcp network"</a>
<li><strong>Previous message:</strong> <a href="19006.php">Seyyed Mohtadin Hashemi: "Re: [OMPI users] OpenMPI fails to run with -np larger than 10"</a>
<li><strong>In reply to:</strong> <a href="19002.php">Seyyed Mohtadin Hashemi: "[OMPI users] OpenMPI fails to run with -np larger than 10"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19009.php">Seyyed Mohtadin Hashemi: "Re: [OMPI users] OpenMPI fails to run with -np larger than 10"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This may or may not be related, but I've had similar issues on RHEL
<br>
6.x and clones when using the SSH job launcher and running more than
<br>
10 processes per node. It sounds like you're only distributing 6
<br>
processes per node, so it doesn't sound like your problem, but you
<br>
might want to check your hostfile and make sure you're not
<br>
oversubscribing one of the nodes. The trick I've found to launch &gt; 10
<br>
processes per node via SSH is to set MaxSessions to some number higher
<br>
than 10 in /etc/ssh/sshd_config (I choose 100, somewhat arbitrarily).
<br>
<p>Assuming you're using the SSH launcher on an RHEL 6 derivative, you
<br>
might give this a try. It's an SSH issue, not an OpenMPI one.
<br>
<p>Regards,
<br>
Tim
<br>
<p>On Thu, Apr 12, 2012 at 9:04 AM, Seyyed Mohtadin Hashemi
<br>
&lt;haadah_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a very peculiar problem: I have a micro cluster with three nodes (18
</span><br>
<span class="quotelev1">&gt; cores total); the nodes are clones of each other and connected to a frontend
</span><br>
<span class="quotelev1">&gt; via Ethernet and Debian squeeze as the OS for all nodes. When I run parallel
</span><br>
<span class="quotelev1">&gt; jobs I can used up &#147;-np 10&#148; if I go further the job crashes, I have
</span><br>
<span class="quotelev1">&gt; primarily done tests with GROMACS (because that is what I will be running)
</span><br>
<span class="quotelev1">&gt; but have also used OSU Micro-Benchmarks 3.5.2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For a simple parallel job I use: &#147;path/mpirun &#150;hostfile path/hostfile &#150;np XX
</span><br>
<span class="quotelev1">&gt; &#150;d &#150;display-map path/mdrun_mpi &#150;s path/topol.tpr &#150;o path/output.trr&#148;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (path is global) For &#150;np XX being smaller than or 10 it works, however as
</span><br>
<span class="quotelev1">&gt; soon as I make use of 11 or larger the whole thing crashes. The terminal
</span><br>
<span class="quotelev1">&gt; dump is attached to this mail: when_working.txt is for &#147;&#150;np 10&#148;,
</span><br>
<span class="quotelev1">&gt; when_crash.txt is for &#147;&#150;np 12&#148;, and OpenMPI_info.txt is output from
</span><br>
<span class="quotelev1">&gt; &#147;path/mpirun --bynode --hostfile path/hostfile --tag-output ompi_info -v
</span><br>
<span class="quotelev1">&gt; ompi full &#150;parsable&#148;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have tried OpenMPI v.1.4.2 all the way up to beta v1.5.5, and all yield
</span><br>
<span class="quotelev1">&gt; the same result.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The output files are from a new install I did today: I formatted all nodes
</span><br>
<span class="quotelev1">&gt; and started from a fresh minimal install of Squeeze and used &quot;apt-get
</span><br>
<span class="quotelev1">&gt; install gromacs gromacs-openmpi&quot; and installed all dependencies. Then I ran
</span><br>
<span class="quotelev1">&gt; two jobs using the parameters described above, I also did one with OSU bench
</span><br>
<span class="quotelev1">&gt; (data is not included) it also crashed with &#147;-np&#148; larger than 10.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hope somebody can help figure out what is wrong and how I can fix it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Mohtadin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *****************************************************************************
</span><br>
<span class="quotelev1">&gt; **
</span><br>
<span class="quotelev1">&gt; **
</span><br>
<span class="quotelev1">&gt; ** WARNING:  This email contains an attachment of a very suspicious type.
</span><br>
<span class="quotelev1">&gt; **
</span><br>
<span class="quotelev1">&gt; ** You are urged NOT to open this attachment unless you are absolutely
</span><br>
<span class="quotelev1">&gt; **
</span><br>
<span class="quotelev1">&gt; ** sure it is legitimate.  Opening this attachment may cause irreparable
</span><br>
<span class="quotelev1">&gt; **
</span><br>
<span class="quotelev1">&gt; ** damage to your computer and your files.  If you have any questions
</span><br>
<span class="quotelev1">&gt; **
</span><br>
<span class="quotelev1">&gt; ** about the validity of this message, PLEASE SEEK HELP BEFORE OPENING IT.
</span><br>
<span class="quotelev1">&gt; **
</span><br>
<span class="quotelev1">&gt; **
</span><br>
<span class="quotelev1">&gt; **
</span><br>
<span class="quotelev1">&gt; ** This warning was added by the IU Computer Science Dept. mail scanner.
</span><br>
<span class="quotelev1">&gt; **
</span><br>
<span class="quotelev1">&gt; *****************************************************************************
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19008.php">Bradi Rares: "[OMPI users] OpenMpi on a windows Xp tcp network"</a>
<li><strong>Previous message:</strong> <a href="19006.php">Seyyed Mohtadin Hashemi: "Re: [OMPI users] OpenMPI fails to run with -np larger than 10"</a>
<li><strong>In reply to:</strong> <a href="19002.php">Seyyed Mohtadin Hashemi: "[OMPI users] OpenMPI fails to run with -np larger than 10"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19009.php">Seyyed Mohtadin Hashemi: "Re: [OMPI users] OpenMPI fails to run with -np larger than 10"</a>
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
