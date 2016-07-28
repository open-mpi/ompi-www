<?
$subject_val = "Re: [OMPI users] openmpi hangs when running on more than one node (unless i use --debug-daemons )";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 29 10:23:23 2010" -->
<!-- isoreceived="20101229152323" -->
<!-- sent="Wed, 29 Dec 2010 08:23:13 -0700" -->
<!-- isosent="20101229152313" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi hangs when running on more than one node (unless i use --debug-daemons )" -->
<!-- id="5696DFE6-AEA7-4303-860D-8A0748E40DCD_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTimfR9qGjEJrZ6eiiDyr+PxJewm+JvxFq+0kuOF6_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-29 10:23:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15234.php">Grismer, Matthew J Civ USAF AFMC AFRL/RBAT: "Re: [OMPI users] Using MPI_Put/Get correctly?"</a>
<li><strong>Previous message:</strong> <a href="15232.php">Advanced Computing Group University of Padova: "Re: [OMPI users] openmpi hangs when running on more than one node (unless i use --debug-daemons )"</a>
<li><strong>In reply to:</strong> <a href="15232.php">Advanced Computing Group University of Padova: "Re: [OMPI users] openmpi hangs when running on more than one node (unless i use --debug-daemons )"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15235.php">Advanced Computing Group University of Padova: "Re: [OMPI users] openmpi hangs when running on more than one node (unless i use --debug-daemons )"</a>
<li><strong>Reply:</strong> <a href="15235.php">Advanced Computing Group University of Padova: "Re: [OMPI users] openmpi hangs when running on more than one node (unless i use --debug-daemons )"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Both look perfectly right to me. The difference is only because your &quot;success&quot; one still has the ssh session active.
<br>
<p>It looks to me like something is preventing communication when the ssh session is terminated, but I have no clue why.
<br>
<p>Given the small cluster size, I would just add this to your default param file and not worry about it:
<br>
<p>orte_leave_session_attached = 1
<br>
<p><p>On Dec 29, 2010, at 2:10 AM, Advanced Computing Group University of Padova wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Dec 29, 2010 at 10:10 AM, Advanced Computing Group University of Padova &lt;acg.unipd_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Thank you Ralph,
</span><br>
<span class="quotelev1">&gt; Your suspects seems to be quite interesting :)
</span><br>
<span class="quotelev1">&gt; I try to run the same program from node 192.168.1/2.11 using also 192.168.2.12 &quot;tracing&quot; .12 activities.
</span><br>
<span class="quotelev1">&gt; I attach the two files (_succ: using --debug-daemons , _fail:without --debug-daemons)
</span><br>
<span class="quotelev1">&gt; I notice that orted daemon on the second node is called in a different way.....
</span><br>
<span class="quotelev1">&gt; Moreover when i launch without --debug-daemons a process called orted...... remain active on the second node after i kill (ctrl+c) the command on the first node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you continue to help me ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Dec 28, 2010 at 8:51 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; All --debug-daemons really does is keep the ssh session open after launching the remote daemon and turn on some output. Otherwise, we close that session as most systems only allow a limited number of concurrent ssh sessions to be open.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I suspect you have a system setting that kills any running job upon ssh close. It would be best if you removed that restriction. If you cannot, then you can always run your MPI jobs with --no-daemonize. This will keep the ssh session open, but without all the debug output.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That flag is just shorthand for an MCA param, so you can set it in your environ or put it in your default MCA param file.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 28, 2010, at 3:31 AM, Advanced Computing Group University of Padova wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; yes i've tested 'em
</span><br>
<span class="quotelev2">&gt;&gt; In fact using the --debug-daemons switch everything works fine! (and i see that on the nodes a process calles orted... is started whenever i launch a test application)
</span><br>
<span class="quotelev2">&gt;&gt; I believe this is a environment variables problem....
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, Dec 27, 2010 at 10:16 PM, David Zhang &lt;solarbikedz_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; have you tested your ssh key setup, fire wall, and switch settings to ensure all nodes are talking to each other?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, Dec 27, 2010 at 1:07 AM, Advanced Computing Group University of Padova &lt;acg.unipd_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; using openmpi 1.4.2
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Dec 24, 2010 at 11:17 AM, Advanced Computing Group University of Padova &lt;acg.unipd_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; i am building a small 16 nodes cluster gentoo based.
</span><br>
<span class="quotelev2">&gt;&gt; I succesfully installed openmpi and i succesfully tried some simple small test parallel program on a single host but...
</span><br>
<span class="quotelev2">&gt;&gt; i can't run parallel program on more than one nodes
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The nodes are cloned (so they are equals).
</span><br>
<span class="quotelev2">&gt;&gt; The mpiuser (and their ssh certificates) uses /home/mpiuser that is a nfs share.
</span><br>
<span class="quotelev2">&gt;&gt; I modified .bashrc
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------
</span><br>
<span class="quotelev2">&gt;&gt; PATH=/usr/bin:$PATH ; export PATH ; LD_LIBRARY_PATH=/usr/lib64:$LD_LIBRARY_PATH ; export LD_LIBRARY_PATH ;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; # already present below
</span><br>
<span class="quotelev2">&gt;&gt; if [[ $- != *i* ]] ; then
</span><br>
<span class="quotelev2">&gt;&gt;         # Shell is non-interactive.  Be done now!
</span><br>
<span class="quotelev2">&gt;&gt;         return
</span><br>
<span class="quotelev2">&gt;&gt; fi
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The very very strange behaviour is that using the --debug-daemons let my program run succesfully.....
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thank you in advance and sorry for my bad english
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; David Zhang
</span><br>
<span class="quotelev2">&gt;&gt; University of California, San Diego
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;dump_succ.txt&gt;&lt;dump_fail.txt&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15233/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15234.php">Grismer, Matthew J Civ USAF AFMC AFRL/RBAT: "Re: [OMPI users] Using MPI_Put/Get correctly?"</a>
<li><strong>Previous message:</strong> <a href="15232.php">Advanced Computing Group University of Padova: "Re: [OMPI users] openmpi hangs when running on more than one node (unless i use --debug-daemons )"</a>
<li><strong>In reply to:</strong> <a href="15232.php">Advanced Computing Group University of Padova: "Re: [OMPI users] openmpi hangs when running on more than one node (unless i use --debug-daemons )"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15235.php">Advanced Computing Group University of Padova: "Re: [OMPI users] openmpi hangs when running on more than one node (unless i use --debug-daemons )"</a>
<li><strong>Reply:</strong> <a href="15235.php">Advanced Computing Group University of Padova: "Re: [OMPI users] openmpi hangs when running on more than one node (unless i use --debug-daemons )"</a>
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
