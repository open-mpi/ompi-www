<?
$subject_val = "Re: [OMPI users] Installation problems";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 27 23:24:57 2009" -->
<!-- isoreceived="20090728032457" -->
<!-- sent="Tue, 28 Jul 2009 12:24:41 +0900" -->
<!-- isosent="20090728032441" -->
<!-- name="Ashika Umanga Umagiliya" -->
<!-- email="aumanga_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Installation problems" -->
<!-- id="4A6E6F79.1090409_at_biggjapan.com" -->
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
<strong>From:</strong> Ashika Umanga Umagiliya (<em>aumanga_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-27 23:24:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10109.php">Jacob Balthazor: "Re: [OMPI users] Installation problems"</a>
<li><strong>Previous message:</strong> <a href="10107.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Embedding MPI program into a webservice ?"</a>
<li><strong>In reply to:</strong> <a href="10100.php">jacob Balthazor: "[OMPI users] Installation problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10109.php">Jacob Balthazor: "Re: [OMPI users] Installation problems"</a>
<li><strong>Reply:</strong> <a href="10109.php">Jacob Balthazor: "Re: [OMPI users] Installation problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I had a same problem like this.
<br>
I am using Debian on my nodes, the problem was with non-interactive 
<br>
shell invocations,
<br>
I added &quot;export LD_LIBRARY_PATH=/usr/local/openMPI/lib&quot; at the top of 
<br>
the  ~/.bashrc files in all nodes then it worked.
<br>
<p>Regards.
<br>
jacob Balthazor wrote:
<br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; directions, so that each computer can log into one another without 
</span><br>
<span class="quotelev1">&gt; being prompted for a password.
</span><br>
<span class="quotelev1">&gt; 4) Installed openmpi on both via yum with the command &quot;yum install 
</span><br>
<span class="quotelev1">&gt; openmpi openmpi-devel openmpi-libs&quot;.
</span><br>
<span class="quotelev1">&gt; 5) Compiled and ran hello.c with a host file containing the IP 
</span><br>
<span class="quotelev1">&gt; addresses of both computers with slot numbers. But openmpi only hangs 
</span><br>
<span class="quotelev1">&gt; for minutes, until I kill it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       I am able to run hello.c locally and even with a hostfile 
</span><br>
<span class="quotelev1">&gt; containing only the local machines address, but am not able to started 
</span><br>
<span class="quotelev1">&gt; a multi node program from either computer. Have I done all the correct 
</span><br>
<span class="quotelev1">&gt; steps, am I missing something?
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
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10108/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10109.php">Jacob Balthazor: "Re: [OMPI users] Installation problems"</a>
<li><strong>Previous message:</strong> <a href="10107.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Embedding MPI program into a webservice ?"</a>
<li><strong>In reply to:</strong> <a href="10100.php">jacob Balthazor: "[OMPI users] Installation problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10109.php">Jacob Balthazor: "Re: [OMPI users] Installation problems"</a>
<li><strong>Reply:</strong> <a href="10109.php">Jacob Balthazor: "Re: [OMPI users] Installation problems"</a>
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
