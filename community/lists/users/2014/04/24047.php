<?
$subject_val = "Re: [OMPI users] openmpi query";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  3 19:19:01 2014" -->
<!-- isoreceived="20140403231901" -->
<!-- sent="Thu, 3 Apr 2014 16:18:55 -0700" -->
<!-- isosent="20140403231855" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi query" -->
<!-- id="5C440227-1272-4741-AE13-82EA1257A5FB_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAL8-kUBE0=qiZvVC4f=Pw2AS+f_b_PzJy-5eZ8WXFjVME8YGsQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi query<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-03 19:18:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24048.php">Nisha Dhankher -M.Tech(CSE): "Re: [OMPI users] openmpi query"</a>
<li><strong>Previous message:</strong> <a href="24046.php">Saliya Ekanayake: "Re: [OMPI users] Contributing Examples for Java Binding"</a>
<li><strong>In reply to:</strong> <a href="24042.php">Nisha Dhankher -M.Tech(CSE): "Re: [OMPI users] openmpi query"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24048.php">Nisha Dhankher -M.Tech(CSE): "Re: [OMPI users] openmpi query"</a>
<li><strong>Reply:</strong> <a href="24048.php">Nisha Dhankher -M.Tech(CSE): "Re: [OMPI users] openmpi query"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What is &quot;mpiformatdb&quot;? We don't have an MPI database in our system, and I have no idea what that command means
<br>
<p>As for that error - it means that the identifier we exchange between processes is failing to be recognized. This could mean a couple of things:
<br>
<p>1. the OMPI version on the two ends is different - could be you aren't getting the right paths set on the various machines
<br>
<p>2. the cluster is heterogeneous
<br>
<p>You say you have &quot;virtual nodes&quot; running on various PC's? That would be an unusual setup - VM's can be problematic given the way they handle TCP connections, so that might be another source of the problem if my understanding of your setup is correct. Have you tried running this across the PCs directly - i.e., without any VMs?
<br>
<p><p>On Apr 3, 2014, at 10:13 AM, Nisha Dhankher -M.Tech(CSE) &lt;nishadhankher-coaeseeit_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; i first formatted my database with mpiformatdb command then i ran command :
</span><br>
<span class="quotelev1">&gt; mpirun -np 64 -machinefile mf mpiblast -d all.fas -p blastn -i query.fas -o output.txt
</span><br>
<span class="quotelev1">&gt; but then it gave this error 113 from some hosts and continue to run for other but with no  results even after 2 hours lapsed.....on rocks 6.0 cluster with 12 virtual nodes on pc's ...2 on each using virt-manger , 1 gb ram to each
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Apr 3, 2014 at 10:41 PM, Nisha Dhankher -M.Tech(CSE) &lt;nishadhankher-coaeseeit_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; i also made machine file which contain ip adresses of all compute nodes + .ncbirc file for path to mpiblast and shared ,local storage path....
</span><br>
<span class="quotelev1">&gt; Sir
</span><br>
<span class="quotelev1">&gt; I ran the same command of mpirun on my college supercomputer 8 nodes each having 24 processors but it just running....gave no result uptill 3 hours...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Apr 3, 2014 at 10:39 PM, Nisha Dhankher -M.Tech(CSE) &lt;nishadhankher-coaeseeit_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; i first formatted my database with mpiformatdb command then i ran command :
</span><br>
<span class="quotelev1">&gt; mpirun -np 64 -machinefile mf mpiblast -d all.fas -p blastn -i query.fas -o output.txt
</span><br>
<span class="quotelev1">&gt; but then it gave this error 113 from some hosts and continue to run for other but with results even after 2 hours lapsed.....on rocks 6.0 cluster with 12 virtual nodes on pc's ...2 on each using virt-manger , 1 gb ram to each
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Apr 3, 2014 at 8:37 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; I'm having trouble understanding your note, so perhaps I am getting this wrong. Let's see if I can figure out what you said:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * your perl command fails with &quot;no route to host&quot; - but I don't see any host in your cmd. Maybe I'm just missing something.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * you tried running a couple of &quot;mpirun&quot;, but the mpirun command wasn't recognized? Is that correct?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * you then ran mpiblast and it sounds like it successfully started the processes, but then one aborted? Was there an error message beyond just the -1 return status?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 2, 2014, at 11:17 PM, Nisha Dhankher -M.Tech(CSE) &lt;nishadhankher-coaeseeit_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; error btl_tcp_endpint.c: 638 connection failed due to error 113
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In openmpi: this error came when i run my mpiblast program on rocks cluster.Connect to hosts failed on ip 10.1.255.236,10.1.255.244 . And when i run following command linux_shell$ perl -e 'die$!=113' this msg comes: &quot;No route to host at -e line 1.&quot; shell$ mpirun --mca btl ^tcp shell$ mpirun --mca btl_tcp_if_include eth1,eth2  shell$ mpirun --mca btl_tcp_if_include 10.1.255.244 was also executed but it did nt recognized these commands....nd aborted.... what should i do...? When i run my mpiblast program for the frst time then it give mpi_abort error...bailing out of signal -1 on rank 2 processor...then i removed my public ethernet cable....and then give btl_tcp endpint error 113....
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24047/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24048.php">Nisha Dhankher -M.Tech(CSE): "Re: [OMPI users] openmpi query"</a>
<li><strong>Previous message:</strong> <a href="24046.php">Saliya Ekanayake: "Re: [OMPI users] Contributing Examples for Java Binding"</a>
<li><strong>In reply to:</strong> <a href="24042.php">Nisha Dhankher -M.Tech(CSE): "Re: [OMPI users] openmpi query"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24048.php">Nisha Dhankher -M.Tech(CSE): "Re: [OMPI users] openmpi query"</a>
<li><strong>Reply:</strong> <a href="24048.php">Nisha Dhankher -M.Tech(CSE): "Re: [OMPI users] openmpi query"</a>
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
