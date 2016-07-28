<?
$subject_val = "Re: [OMPI users] openmpi hangs when running on more than one node (unless i use --debug-daemons )";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 29 04:10:14 2010" -->
<!-- isoreceived="20101229091014" -->
<!-- sent="Wed, 29 Dec 2010 10:10:07 +0100" -->
<!-- isosent="20101229091007" -->
<!-- name="Advanced Computing Group University of Padova" -->
<!-- email="acg.unipd_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi hangs when running on more than one node (unless i use --debug-daemons )" -->
<!-- id="AANLkTi=eFPy3ivhrvf_DTDuZiXf_CYwQ670V+c-0Z5j8_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C06064E3-52ED-4FB3-9B98-9D9D371011C0_at_open-mpi.org" -->
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
<strong>Date:</strong> 2010-12-29 04:10:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15232.php">Advanced Computing Group University of Padova: "Re: [OMPI users] openmpi hangs when running on more than one node (unless i use --debug-daemons )"</a>
<li><strong>Previous message:</strong> <a href="15230.php">Damien Hocking: "[OMPI users] Windows installers of 1.5.1 - No Fortan ?"</a>
<li><strong>In reply to:</strong> <a href="15229.php">Ralph Castain: "Re: [OMPI users] openmpi hangs when running on more than one node (unless i use --debug-daemons )"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15232.php">Advanced Computing Group University of Padova: "Re: [OMPI users] openmpi hangs when running on more than one node (unless i use --debug-daemons )"</a>
<li><strong>Reply:</strong> <a href="15232.php">Advanced Computing Group University of Padova: "Re: [OMPI users] openmpi hangs when running on more than one node (unless i use --debug-daemons )"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you Ralph,
<br>
Your suspects seems to be quite interesting :)
<br>
I try to run the same program from node 192.168.1/2.11 using also
<br>
192.168.2.12 &quot;tracing&quot; .12 activities.
<br>
I attach the two files (_succ: using --debug-daemons , _fail:without
<br>
--debug-daemons)
<br>
I notice that orted daemon on the second node is called in a different
<br>
way.....
<br>
Moreover when i launch without --debug-daemons a process called orted......
<br>
remain active on the second node after i kill (ctrl+c) the command on the
<br>
first node.
<br>
<p>Can you continue to help me ?
<br>
<p>On Tue, Dec 28, 2010 at 8:51 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; All --debug-daemons really does is keep the ssh session open after
</span><br>
<span class="quotelev1">&gt; launching the remote daemon and turn on some output. Otherwise, we close
</span><br>
<span class="quotelev1">&gt; that session as most systems only allow a limited number of concurrent ssh
</span><br>
<span class="quotelev1">&gt; sessions to be open.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I suspect you have a system setting that kills any running job upon ssh
</span><br>
<span class="quotelev1">&gt; close. It would be best if you removed that restriction. If you cannot, then
</span><br>
<span class="quotelev1">&gt; you can always run your MPI jobs with --no-daemonize. This will keep the ssh
</span><br>
<span class="quotelev1">&gt; session open, but without all the debug output.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That flag is just shorthand for an MCA param, so you can set it in your
</span><br>
<span class="quotelev1">&gt; environ or put it in your default MCA param file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 28, 2010, at 3:31 AM, Advanced Computing Group University of Padova
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; yes i've tested 'em
</span><br>
<span class="quotelev1">&gt; In fact using the --debug-daemons switch everything works fine! (and i see
</span><br>
<span class="quotelev1">&gt; that on the nodes a process calles orted... is started whenever i launch a
</span><br>
<span class="quotelev1">&gt; test application)
</span><br>
<span class="quotelev1">&gt; I believe this is a environment variables problem....
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Dec 27, 2010 at 10:16 PM, David Zhang &lt;solarbikedz_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; have you tested your ssh key setup, fire wall, and switch settings to
</span><br>
<span class="quotelev2">&gt;&gt; ensure all nodes are talking to each other?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, Dec 27, 2010 at 1:07 AM, Advanced Computing Group University of
</span><br>
<span class="quotelev2">&gt;&gt; Padova &lt;acg.unipd_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; using openmpi 1.4.2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Fri, Dec 24, 2010 at 11:17 AM, Advanced Computing Group University of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Padova &lt;acg.unipd_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; i am building a small 16 nodes cluster gentoo based.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I succesfully installed openmpi and i succesfully tried some simple
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; small test parallel program on a single host but...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; i can't run parallel program on more than one nodes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The nodes are cloned (so they are equals).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The mpiuser (and their ssh certificates) uses /home/mpiuser that is a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; nfs share.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I modified .bashrc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PATH=/usr/bin:$PATH ; export PATH ;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; LD_LIBRARY_PATH=/usr/lib64:$LD_LIBRARY_PATH ; export LD_LIBRARY_PATH ;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; # already present below
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; if [[ $- != *i* ]] ; then
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         # Shell is non-interactive.  Be done now!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         return
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; fi
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ---------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The very very strange behaviour is that using the --debug-daemons let my
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; program run succesfully.....
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thank you in advance and sorry for my bad english
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15231/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15232.php">Advanced Computing Group University of Padova: "Re: [OMPI users] openmpi hangs when running on more than one node (unless i use --debug-daemons )"</a>
<li><strong>Previous message:</strong> <a href="15230.php">Damien Hocking: "[OMPI users] Windows installers of 1.5.1 - No Fortan ?"</a>
<li><strong>In reply to:</strong> <a href="15229.php">Ralph Castain: "Re: [OMPI users] openmpi hangs when running on more than one node (unless i use --debug-daemons )"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15232.php">Advanced Computing Group University of Padova: "Re: [OMPI users] openmpi hangs when running on more than one node (unless i use --debug-daemons )"</a>
<li><strong>Reply:</strong> <a href="15232.php">Advanced Computing Group University of Padova: "Re: [OMPI users] openmpi hangs when running on more than one node (unless i use --debug-daemons )"</a>
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
