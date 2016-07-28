<?
$subject_val = "Re: [OMPI users] openmpi hangs when running on more than one node (unless i use --debug-daemons )";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 28 05:31:44 2010" -->
<!-- isoreceived="20101228103144" -->
<!-- sent="Tue, 28 Dec 2010 11:31:38 +0100" -->
<!-- isosent="20101228103138" -->
<!-- name="Advanced Computing Group University of Padova" -->
<!-- email="acg.unipd_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi hangs when running on more than one node (unless i use --debug-daemons )" -->
<!-- id="AANLkTi=0Pgiq-BH+9_7h6i3RedHfgMxRpJE6=G-7ovKU_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTimzkxsGGgDO9hHa7brv36ev62dDg3CZBVshWUvJ_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2010-12-28 05:31:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15229.php">Ralph Castain: "Re: [OMPI users] openmpi hangs when running on more than one node (unless i use --debug-daemons )"</a>
<li><strong>Previous message:</strong> <a href="15227.php">Grismer, Matthew J Civ USAF AFMC AFRL/RBAT: "Re: [OMPI users] Using MPI_Put/Get correctly?"</a>
<li><strong>In reply to:</strong> <a href="15226.php">David Zhang: "Re: [OMPI users] openmpi hangs when running on more than one node (unless i use --debug-daemons )"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15229.php">Ralph Castain: "Re: [OMPI users] openmpi hangs when running on more than one node (unless i use --debug-daemons )"</a>
<li><strong>Reply:</strong> <a href="15229.php">Ralph Castain: "Re: [OMPI users] openmpi hangs when running on more than one node (unless i use --debug-daemons )"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
yes i've tested 'em
<br>
In fact using the --debug-daemons switch everything works fine! (and i see
<br>
that on the nodes a process calles orted... is started whenever i launch a
<br>
test application)
<br>
I believe this is a environment variables problem....
<br>
<p>On Mon, Dec 27, 2010 at 10:16 PM, David Zhang &lt;solarbikedz_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; have you tested your ssh key setup, fire wall, and switch settings to
</span><br>
<span class="quotelev1">&gt; ensure all nodes are talking to each other?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Dec 27, 2010 at 1:07 AM, Advanced Computing Group University of
</span><br>
<span class="quotelev1">&gt; Padova &lt;acg.unipd_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; using openmpi 1.4.2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Dec 24, 2010 at 11:17 AM, Advanced Computing Group University of
</span><br>
<span class="quotelev2">&gt;&gt; Padova &lt;acg.unipd_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i am building a small 16 nodes cluster gentoo based.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I succesfully installed openmpi and i succesfully tried some simple small
</span><br>
<span class="quotelev3">&gt;&gt;&gt; test parallel program on a single host but...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i can't run parallel program on more than one nodes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The nodes are cloned (so they are equals).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The mpiuser (and their ssh certificates) uses /home/mpiuser that is a nfs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; share.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I modified .bashrc
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PATH=/usr/bin:$PATH ; export PATH ;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LD_LIBRARY_PATH=/usr/lib64:$LD_LIBRARY_PATH ; export LD_LIBRARY_PATH ;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # already present below
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if [[ $- != *i* ]] ; then
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         # Shell is non-interactive.  Be done now!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         return
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The very very strange behaviour is that using the --debug-daemons let my
</span><br>
<span class="quotelev3">&gt;&gt;&gt; program run succesfully.....
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you in advance and sorry for my bad english
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; David Zhang
</span><br>
<span class="quotelev1">&gt; University of California, San Diego
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15228/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15229.php">Ralph Castain: "Re: [OMPI users] openmpi hangs when running on more than one node (unless i use --debug-daemons )"</a>
<li><strong>Previous message:</strong> <a href="15227.php">Grismer, Matthew J Civ USAF AFMC AFRL/RBAT: "Re: [OMPI users] Using MPI_Put/Get correctly?"</a>
<li><strong>In reply to:</strong> <a href="15226.php">David Zhang: "Re: [OMPI users] openmpi hangs when running on more than one node (unless i use --debug-daemons )"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15229.php">Ralph Castain: "Re: [OMPI users] openmpi hangs when running on more than one node (unless i use --debug-daemons )"</a>
<li><strong>Reply:</strong> <a href="15229.php">Ralph Castain: "Re: [OMPI users] openmpi hangs when running on more than one node (unless i use --debug-daemons )"</a>
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
