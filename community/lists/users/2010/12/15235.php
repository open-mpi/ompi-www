<?
$subject_val = "Re: [OMPI users] openmpi hangs when running on more than one node (unless i use --debug-daemons )";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 30 04:13:44 2010" -->
<!-- isoreceived="20101230091344" -->
<!-- sent="Thu, 30 Dec 2010 10:13:38 +0100" -->
<!-- isosent="20101230091338" -->
<!-- name="Advanced Computing Group University of Padova" -->
<!-- email="acg.unipd_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi hangs when running on more than one node (unless i use --debug-daemons )" -->
<!-- id="AANLkTiniTGWFjicLZ69LFdALJxXKtshMv-S53ZCfHhd1_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5696DFE6-AEA7-4303-860D-8A0748E40DCD_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi hangs when running on more than one node (unless i use --debug-daemons )<br>
<strong>From:</strong> Advanced Computing Group University of Padova (<em>acg.unipd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-30 04:13:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15236.php">Michael Di Domenico: "Re: [OMPI users] srun and openmpi"</a>
<li><strong>Previous message:</strong> <a href="15234.php">Grismer, Matthew J Civ USAF AFMC AFRL/RBAT: "Re: [OMPI users] Using MPI_Put/Get correctly?"</a>
<li><strong>In reply to:</strong> <a href="15233.php">Ralph Castain: "Re: [OMPI users] openmpi hangs when running on more than one node (unless i use --debug-daemons )"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank You Raplh
<br>
It works!!!!
<br>
:)
<br>
<p>On Wed, Dec 29, 2010 at 4:23 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Both look perfectly right to me. The difference is only because your
</span><br>
<span class="quotelev1">&gt; &quot;success&quot; one still has the ssh session active.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It looks to me like something is preventing communication when the ssh
</span><br>
<span class="quotelev1">&gt; session is terminated, but I have no clue why.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Given the small cluster size, I would just add this to your default param
</span><br>
<span class="quotelev1">&gt; file and not worry about it:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; orte_leave_session_attached = 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 29, 2010, at 2:10 AM, Advanced Computing Group University of Padova
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Dec 29, 2010 at 10:10 AM, Advanced Computing Group University of
</span><br>
<span class="quotelev1">&gt; Padova &lt;acg.unipd_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you Ralph,
</span><br>
<span class="quotelev2">&gt;&gt; Your suspects seems to be quite interesting :)
</span><br>
<span class="quotelev2">&gt;&gt; I try to run the same program from node 192.168.1/2.11 using also
</span><br>
<span class="quotelev2">&gt;&gt; 192.168.2.12 &quot;tracing&quot; .12 activities.
</span><br>
<span class="quotelev2">&gt;&gt; I attach the two files (_succ: using --debug-daemons , _fail:without
</span><br>
<span class="quotelev2">&gt;&gt; --debug-daemons)
</span><br>
<span class="quotelev2">&gt;&gt; I notice that orted daemon on the second node is called in a different
</span><br>
<span class="quotelev2">&gt;&gt; way.....
</span><br>
<span class="quotelev2">&gt;&gt; Moreover when i launch without --debug-daemons a process called
</span><br>
<span class="quotelev2">&gt;&gt; orted...... remain active on the second node after i kill (ctrl+c) the
</span><br>
<span class="quotelev2">&gt;&gt; command on the first node.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can you continue to help me ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Dec 28, 2010 at 8:51 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; All --debug-daemons really does is keep the ssh session open after
</span><br>
<span class="quotelev3">&gt;&gt;&gt; launching the remote daemon and turn on some output. Otherwise, we close
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that session as most systems only allow a limited number of concurrent ssh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sessions to be open.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I suspect you have a system setting that kills any running job upon ssh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; close. It would be best if you removed that restriction. If you cannot, then
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you can always run your MPI jobs with --no-daemonize. This will keep the ssh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; session open, but without all the debug output.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; That flag is just shorthand for an MCA param, so you can set it in your
</span><br>
<span class="quotelev3">&gt;&gt;&gt; environ or put it in your default MCA param file.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Dec 28, 2010, at 3:31 AM, Advanced Computing Group University of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Padova wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; yes i've tested 'em
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In fact using the --debug-daemons switch everything works fine! (and i
</span><br>
<span class="quotelev3">&gt;&gt;&gt; see that on the nodes a process calles orted... is started whenever i launch
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a test application)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I believe this is a environment variables problem....
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mon, Dec 27, 2010 at 10:16 PM, David Zhang &lt;solarbikedz_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; have you tested your ssh key setup, fire wall, and switch settings to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ensure all nodes are talking to each other?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Mon, Dec 27, 2010 at 1:07 AM, Advanced Computing Group University of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Padova &lt;acg.unipd_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; using openmpi 1.4.2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Fri, Dec 24, 2010 at 11:17 AM, Advanced Computing Group University
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; of Padova &lt;acg.unipd_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; i am building a small 16 nodes cluster gentoo based.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I succesfully installed openmpi and i succesfully tried some simple
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; small test parallel program on a single host but...
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; i can't run parallel program on more than one nodes
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The nodes are cloned (so they are equals).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The mpiuser (and their ssh certificates) uses /home/mpiuser that is a
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; nfs share.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I modified .bashrc
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; PATH=/usr/bin:$PATH ; export PATH ;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; LD_LIBRARY_PATH=/usr/lib64:$LD_LIBRARY_PATH ; export LD_LIBRARY_PATH ;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; # already present below
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; if [[ $- != *i* ]] ; then
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         # Shell is non-interactive.  Be done now!
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         return
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; fi
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ---------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The very very strange behaviour is that using the --debug-daemons let
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; my program run succesfully.....
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Thank you in advance and sorry for my bad english
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; David Zhang
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; University of California, San Diego
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &lt;dump_succ.txt&gt;&lt;dump_fail.txt&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15235/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15236.php">Michael Di Domenico: "Re: [OMPI users] srun and openmpi"</a>
<li><strong>Previous message:</strong> <a href="15234.php">Grismer, Matthew J Civ USAF AFMC AFRL/RBAT: "Re: [OMPI users] Using MPI_Put/Get correctly?"</a>
<li><strong>In reply to:</strong> <a href="15233.php">Ralph Castain: "Re: [OMPI users] openmpi hangs when running on more than one node (unless i use --debug-daemons )"</a>
<!-- nextthread="start" -->
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
