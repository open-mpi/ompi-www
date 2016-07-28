<?
$subject_val = "Re: [OMPI users] Installation problems";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 27 11:47:47 2009" -->
<!-- isoreceived="20090727154747" -->
<!-- sent="Mon, 27 Jul 2009 09:47:42 -0600" -->
<!-- isosent="20090727154742" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Installation problems" -->
<!-- id="71d2d8cc0907270847o28432904y5dba55249c5d7388_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="a902047b0907270835xabb9e23ne4e90308c3065156_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Installation problems<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-27 11:47:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10102.php">jody: "Re: [OMPI users] Installation problems"</a>
<li><strong>Previous message:</strong> <a href="10100.php">jacob Balthazor: "[OMPI users] Installation problems"</a>
<li><strong>In reply to:</strong> <a href="10100.php">jacob Balthazor: "[OMPI users] Installation problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10102.php">jody: "Re: [OMPI users] Installation problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Most likely problem is version confusion as Fedora comes with a version of
<br>
OMPI pre-installed. Check you LD_LIBRARY_PATH and PATH on both ends to
<br>
ensure they are pointing at the same OMPI installation. Remember,
<br>
interactive login typically uses a different shell startup then
<br>
non-interactive job launch, so be sure that the latter is getting the right
<br>
path.
<br>
<p>Also, be sure you don't have a firewall running between the two computers.
<br>
<p>What version of OMPI are you trying to install?
<br>
<p>On Mon, Jul 27, 2009 at 9:35 AM, jacob Balthazor &lt;jcb344_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hey,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       Please help me out as I cannot figure out from all the online
</span><br>
<span class="quotelev1">&gt; documentation why my cluster wont work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) I started with two computers with a fresh install of Fedora 10.
</span><br>
<span class="quotelev1">&gt; 2) Created two user accounts on the two computers with the same user name.
</span><br>
<span class="quotelev1">&gt; 3) Created an rsa keyed ssh between the two computers going both
</span><br>
<span class="quotelev1">&gt; directions, so that each computer can log into one another without being
</span><br>
<span class="quotelev1">&gt; prompted for a password.
</span><br>
<span class="quotelev1">&gt; 4) Installed openmpi on both via yum with the command &quot;yum install openmpi
</span><br>
<span class="quotelev1">&gt; openmpi-devel openmpi-libs&quot;.
</span><br>
<span class="quotelev1">&gt; 5) Compiled and ran hello.c with a host file containing the IP addresses of
</span><br>
<span class="quotelev1">&gt; both computers with slot numbers. But openmpi only hangs for minutes, until
</span><br>
<span class="quotelev1">&gt; I kill it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       I am able to run hello.c locally and even with a hostfile containing
</span><br>
<span class="quotelev1">&gt; only the local machines address, but am not able to started a multi node
</span><br>
<span class="quotelev1">&gt; program from either computer. Have I done all the correct steps, am I
</span><br>
<span class="quotelev1">&gt; missing something?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Jacob B.
</span><br>
<span class="quotelev1">&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10101/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10102.php">jody: "Re: [OMPI users] Installation problems"</a>
<li><strong>Previous message:</strong> <a href="10100.php">jacob Balthazor: "[OMPI users] Installation problems"</a>
<li><strong>In reply to:</strong> <a href="10100.php">jacob Balthazor: "[OMPI users] Installation problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10102.php">jody: "Re: [OMPI users] Installation problems"</a>
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
