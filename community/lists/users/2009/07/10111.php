<?
$subject_val = "Re: [OMPI users] Installation problems";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 28 00:42:14 2009" -->
<!-- isoreceived="20090728044214" -->
<!-- sent="Mon, 27 Jul 2009 22:41:56 -0600" -->
<!-- isosent="20090728044156" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Installation problems" -->
<!-- id="158E9A80-7E18-49A1-9801-FE1E4719E2C5_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="CA599679-3BC4-4702-9E0F-20080896DA22_at_gmail.com" -->
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
<strong>Date:</strong> 2009-07-28 00:41:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10112.php">Terry Frankcombe: "Re: [OMPI users] Installation problems"</a>
<li><strong>Previous message:</strong> <a href="10110.php">Prasadcse Perera: "Re: [OMPI users] Embedding MPI program into a webservice ?"</a>
<li><strong>In reply to:</strong> <a href="10109.php">Jacob Balthazor: "Re: [OMPI users] Installation problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10112.php">Terry Frankcombe: "Re: [OMPI users] Installation problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Have you tried just adding -x LD_LIBRARY_PATH to your mpirun cmd line?  
<br>
This will pickup your local LD_LIBRARY_PATH value and propagate it for  
<br>
you to the remote node.
<br>
<p><p>On Jul 27, 2009, at 9:58 PM, Jacob Balthazor wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hey,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       I suspect that my not changing my .bash_profile is indeed the  
</span><br>
<span class="quotelev1">&gt; problem unfortunately I do not know were yum placed open's lib and  
</span><br>
<span class="quotelev1">&gt; bin directories. I tried looking in /usr/local/ but did not find and  
</span><br>
<span class="quotelev1">&gt; openmpi directory, I suspect this has something to my Fedora  
</span><br>
<span class="quotelev1">&gt; distribution as apposed to the Debian bellow. Could anybody tell me  
</span><br>
<span class="quotelev1">&gt; where I could suspect to find the directory to place in my profile  
</span><br>
<span class="quotelev1">&gt; on a Fedora or Red hat system when installed through yum? Much  
</span><br>
<span class="quotelev1">&gt; appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Jacob B.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 27, 2009, at 8:24 PM, Ashika Umanga Umagiliya wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I had a same problem like this.
</span><br>
<span class="quotelev2">&gt;&gt; I am using Debian on my nodes, the problem was with non-interactive  
</span><br>
<span class="quotelev2">&gt;&gt; shell invocations,
</span><br>
<span class="quotelev2">&gt;&gt; I added &quot;export LD_LIBRARY_PATH=/usr/local/openMPI/lib&quot; at the top  
</span><br>
<span class="quotelev2">&gt;&gt; of the  ~/.bashrc files in all nodes then it worked.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards.
</span><br>
<span class="quotelev2">&gt;&gt; jacob Balthazor wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hey,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Please help me out as I cannot figure out from all the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; online documentation why my cluster wont work.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1) I started with two computers with a fresh install of Fedora 10.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2) Created two user accounts on the two computers with the same  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; user name.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3) Created an rsa keyed ssh between the two computers going both  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; directions, so that each computer can log into one another without  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; being prompted for a password.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4) Installed openmpi on both via yum with the command &quot;yum install  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openmpi openmpi-devel openmpi-libs&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 5) Compiled and ran hello.c with a host file containing the IP  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; addresses of both computers with slot numbers. But openmpi only  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hangs for minutes, until I kill it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       I am able to run hello.c locally and even with a hostfile  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; containing only the local machines address, but am not able to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; started a multi node program from either computer. Have I done all  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the correct steps, am I missing something?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - Jacob B.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10111/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10112.php">Terry Frankcombe: "Re: [OMPI users] Installation problems"</a>
<li><strong>Previous message:</strong> <a href="10110.php">Prasadcse Perera: "Re: [OMPI users] Embedding MPI program into a webservice ?"</a>
<li><strong>In reply to:</strong> <a href="10109.php">Jacob Balthazor: "Re: [OMPI users] Installation problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10112.php">Terry Frankcombe: "Re: [OMPI users] Installation problems"</a>
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
