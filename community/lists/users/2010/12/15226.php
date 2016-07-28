<?
$subject_val = "Re: [OMPI users] openmpi hangs when running on more than one node (unless i use --debug-daemons )";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 27 16:16:29 2010" -->
<!-- isoreceived="20101227211629" -->
<!-- sent="Mon, 27 Dec 2010 13:16:03 -0800" -->
<!-- isosent="20101227211603" -->
<!-- name="David Zhang" -->
<!-- email="solarbikedz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi hangs when running on more than one node (unless i use --debug-daemons )" -->
<!-- id="AANLkTimzkxsGGgDO9hHa7brv36ev62dDg3CZBVshWUvJ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTinOKY6jccFmijwzh2dNUftkiUbfm2V9dR54Xeye_at_mail.gmail.com" -->
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
<strong>From:</strong> David Zhang (<em>solarbikedz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-27 16:16:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15227.php">Grismer, Matthew J Civ USAF AFMC AFRL/RBAT: "Re: [OMPI users] Using MPI_Put/Get correctly?"</a>
<li><strong>Previous message:</strong> <a href="15225.php">Advanced Computing Group University of Padova: "Re: [OMPI users] openmpi hangs when running on more than one node (unless i use --debug-daemons )"</a>
<li><strong>In reply to:</strong> <a href="15225.php">Advanced Computing Group University of Padova: "Re: [OMPI users] openmpi hangs when running on more than one node (unless i use --debug-daemons )"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15228.php">Advanced Computing Group University of Padova: "Re: [OMPI users] openmpi hangs when running on more than one node (unless i use --debug-daemons )"</a>
<li><strong>Reply:</strong> <a href="15228.php">Advanced Computing Group University of Padova: "Re: [OMPI users] openmpi hangs when running on more than one node (unless i use --debug-daemons )"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
have you tested your ssh key setup, fire wall, and switch settings to ensure
<br>
all nodes are talking to each other?
<br>
<p>On Mon, Dec 27, 2010 at 1:07 AM, Advanced Computing Group University of
<br>
Padova &lt;acg.unipd_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; using openmpi 1.4.2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Dec 24, 2010 at 11:17 AM, Advanced Computing Group University of
</span><br>
<span class="quotelev1">&gt; Padova &lt;acg.unipd_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; i am building a small 16 nodes cluster gentoo based.
</span><br>
<span class="quotelev2">&gt;&gt; I succesfully installed openmpi and i succesfully tried some simple small
</span><br>
<span class="quotelev2">&gt;&gt; test parallel program on a single host but...
</span><br>
<span class="quotelev2">&gt;&gt; i can't run parallel program on more than one nodes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The nodes are cloned (so they are equals).
</span><br>
<span class="quotelev2">&gt;&gt; The mpiuser (and their ssh certificates) uses /home/mpiuser that is a nfs
</span><br>
<span class="quotelev2">&gt;&gt; share.
</span><br>
<span class="quotelev2">&gt;&gt; I modified .bashrc
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------
</span><br>
<span class="quotelev2">&gt;&gt; PATH=/usr/bin:$PATH ; export PATH ;
</span><br>
<span class="quotelev2">&gt;&gt; LD_LIBRARY_PATH=/usr/lib64:$LD_LIBRARY_PATH ; export LD_LIBRARY_PATH ;
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
<span class="quotelev2">&gt;&gt; The very very strange behaviour is that using the --debug-daemons let my
</span><br>
<span class="quotelev2">&gt;&gt; program run succesfully.....
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
<p><p><p><pre>
-- 
David Zhang
University of California, San Diego
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15226/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15227.php">Grismer, Matthew J Civ USAF AFMC AFRL/RBAT: "Re: [OMPI users] Using MPI_Put/Get correctly?"</a>
<li><strong>Previous message:</strong> <a href="15225.php">Advanced Computing Group University of Padova: "Re: [OMPI users] openmpi hangs when running on more than one node (unless i use --debug-daemons )"</a>
<li><strong>In reply to:</strong> <a href="15225.php">Advanced Computing Group University of Padova: "Re: [OMPI users] openmpi hangs when running on more than one node (unless i use --debug-daemons )"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15228.php">Advanced Computing Group University of Padova: "Re: [OMPI users] openmpi hangs when running on more than one node (unless i use --debug-daemons )"</a>
<li><strong>Reply:</strong> <a href="15228.php">Advanced Computing Group University of Padova: "Re: [OMPI users] openmpi hangs when running on more than one node (unless i use --debug-daemons )"</a>
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
