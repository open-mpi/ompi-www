<?
$subject_val = "Re: [OMPI users] openmpi hangs when running on more than one node (unless i use --debug-daemons )";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 27 04:07:14 2010" -->
<!-- isoreceived="20101227090714" -->
<!-- sent="Mon, 27 Dec 2010 10:07:06 +0100" -->
<!-- isosent="20101227090706" -->
<!-- name="Advanced Computing Group University of Padova" -->
<!-- email="acg.unipd_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi hangs when running on more than one node (unless i use --debug-daemons )" -->
<!-- id="AANLkTinOKY6jccFmijwzh2dNUftkiUbfm2V9dR54Xeye_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTimJF0kDwxgQMF7TvUh5W8CetyF3+nhFHU5Vuk0m_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2010-12-27 04:07:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15226.php">David Zhang: "Re: [OMPI users] openmpi hangs when running on more than one node (unless i use --debug-daemons )"</a>
<li><strong>Previous message:</strong> <a href="15224.php">Benjamin Toueg: "Re: [OMPI users] Scalability issue"</a>
<li><strong>In reply to:</strong> <a href="15223.php">Advanced Computing Group University of Padova: "[OMPI users] openmpi hangs when running on more than one node (unless i use --debug-daemons )"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15226.php">David Zhang: "Re: [OMPI users] openmpi hangs when running on more than one node (unless i use --debug-daemons )"</a>
<li><strong>Reply:</strong> <a href="15226.php">David Zhang: "Re: [OMPI users] openmpi hangs when running on more than one node (unless i use --debug-daemons )"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
using openmpi 1.4.2
<br>
<p>On Fri, Dec 24, 2010 at 11:17 AM, Advanced Computing Group University of
<br>
Padova &lt;acg.unipd_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; i am building a small 16 nodes cluster gentoo based.
</span><br>
<span class="quotelev1">&gt; I succesfully installed openmpi and i succesfully tried some simple small
</span><br>
<span class="quotelev1">&gt; test parallel program on a single host but...
</span><br>
<span class="quotelev1">&gt; i can't run parallel program on more than one nodes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The nodes are cloned (so they are equals).
</span><br>
<span class="quotelev1">&gt; The mpiuser (and their ssh certificates) uses /home/mpiuser that is a nfs
</span><br>
<span class="quotelev1">&gt; share.
</span><br>
<span class="quotelev1">&gt; I modified .bashrc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -------------------------
</span><br>
<span class="quotelev1">&gt; PATH=/usr/bin:$PATH ; export PATH ;
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH=/usr/lib64:$LD_LIBRARY_PATH ; export LD_LIBRARY_PATH ;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # already present below
</span><br>
<span class="quotelev1">&gt; if [[ $- != *i* ]] ; then
</span><br>
<span class="quotelev1">&gt;         # Shell is non-interactive.  Be done now!
</span><br>
<span class="quotelev1">&gt;         return
</span><br>
<span class="quotelev1">&gt; fi
</span><br>
<span class="quotelev1">&gt; ---------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The very very strange behaviour is that using the --debug-daemons let my
</span><br>
<span class="quotelev1">&gt; program run succesfully.....
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you in advance and sorry for my bad english
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15225/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15226.php">David Zhang: "Re: [OMPI users] openmpi hangs when running on more than one node (unless i use --debug-daemons )"</a>
<li><strong>Previous message:</strong> <a href="15224.php">Benjamin Toueg: "Re: [OMPI users] Scalability issue"</a>
<li><strong>In reply to:</strong> <a href="15223.php">Advanced Computing Group University of Padova: "[OMPI users] openmpi hangs when running on more than one node (unless i use --debug-daemons )"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15226.php">David Zhang: "Re: [OMPI users] openmpi hangs when running on more than one node (unless i use --debug-daemons )"</a>
<li><strong>Reply:</strong> <a href="15226.php">David Zhang: "Re: [OMPI users] openmpi hangs when running on more than one node (unless i use --debug-daemons )"</a>
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
