<?
$subject_val = "Re: [OMPI users] Installation problems";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 27 23:58:18 2009" -->
<!-- isoreceived="20090728035818" -->
<!-- sent="Mon, 27 Jul 2009 20:58:10 -0700" -->
<!-- isosent="20090728035810" -->
<!-- name="Jacob Balthazor" -->
<!-- email="jcb344_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Installation problems" -->
<!-- id="CA599679-3BC4-4702-9E0F-20080896DA22_at_gmail.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A6E6F79.1090409_at_biggjapan.com" -->
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
<strong>From:</strong> Jacob Balthazor (<em>jcb344_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-27 23:58:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10110.php">Prasadcse Perera: "Re: [OMPI users] Embedding MPI program into a webservice ?"</a>
<li><strong>Previous message:</strong> <a href="10108.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Installation problems"</a>
<li><strong>In reply to:</strong> <a href="10108.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Installation problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10111.php">Ralph Castain: "Re: [OMPI users] Installation problems"</a>
<li><strong>Reply:</strong> <a href="10111.php">Ralph Castain: "Re: [OMPI users] Installation problems"</a>
<li><strong>Reply:</strong> <a href="10112.php">Terry Frankcombe: "Re: [OMPI users] Installation problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hey,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I suspect that my not changing my .bash_profile is indeed the  
<br>
problem unfortunately I do not know were yum placed open's lib and bin  
<br>
directories. I tried looking in /usr/local/ but did not find and  
<br>
openmpi directory, I suspect this has something to my Fedora  
<br>
distribution as apposed to the Debian bellow. Could anybody tell me  
<br>
where I could suspect to find the directory to place in my profile on  
<br>
a Fedora or Red hat system when installed through yum? Much appreciated.
<br>
<p>-Jacob B.
<br>
<p><p>On Jul 27, 2009, at 8:24 PM, Ashika Umanga Umagiliya wrote:
<br>
<p><span class="quotelev1">&gt; I had a same problem like this.
</span><br>
<span class="quotelev1">&gt; I am using Debian on my nodes, the problem was with non-interactive  
</span><br>
<span class="quotelev1">&gt; shell invocations,
</span><br>
<span class="quotelev1">&gt; I added &quot;export LD_LIBRARY_PATH=/usr/local/openMPI/lib&quot; at the top  
</span><br>
<span class="quotelev1">&gt; of the  ~/.bashrc files in all nodes then it worked.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards.
</span><br>
<span class="quotelev1">&gt; jacob Balthazor wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hey,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       Please help me out as I cannot figure out from all the online  
</span><br>
<span class="quotelev2">&gt;&gt; documentation why my cluster wont work.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1) I started with two computers with a fresh install of Fedora 10.
</span><br>
<span class="quotelev2">&gt;&gt; 2) Created two user accounts on the two computers with the same  
</span><br>
<span class="quotelev2">&gt;&gt; user name.
</span><br>
<span class="quotelev2">&gt;&gt; 3) Created an rsa keyed ssh between the two computers going both  
</span><br>
<span class="quotelev2">&gt;&gt; directions, so that each computer can log into one another without  
</span><br>
<span class="quotelev2">&gt;&gt; being prompted for a password.
</span><br>
<span class="quotelev2">&gt;&gt; 4) Installed openmpi on both via yum with the command &quot;yum install  
</span><br>
<span class="quotelev2">&gt;&gt; openmpi openmpi-devel openmpi-libs&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; 5) Compiled and ran hello.c with a host file containing the IP  
</span><br>
<span class="quotelev2">&gt;&gt; addresses of both computers with slot numbers. But openmpi only  
</span><br>
<span class="quotelev2">&gt;&gt; hangs for minutes, until I kill it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       I am able to run hello.c locally and even with a hostfile  
</span><br>
<span class="quotelev2">&gt;&gt; containing only the local machines address, but am not able to  
</span><br>
<span class="quotelev2">&gt;&gt; started a multi node program from either computer. Have I done all  
</span><br>
<span class="quotelev2">&gt;&gt; the correct steps, am I missing something?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - Jacob B.
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10109/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10110.php">Prasadcse Perera: "Re: [OMPI users] Embedding MPI program into a webservice ?"</a>
<li><strong>Previous message:</strong> <a href="10108.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Installation problems"</a>
<li><strong>In reply to:</strong> <a href="10108.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Installation problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10111.php">Ralph Castain: "Re: [OMPI users] Installation problems"</a>
<li><strong>Reply:</strong> <a href="10111.php">Ralph Castain: "Re: [OMPI users] Installation problems"</a>
<li><strong>Reply:</strong> <a href="10112.php">Terry Frankcombe: "Re: [OMPI users] Installation problems"</a>
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
