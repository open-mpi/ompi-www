<?
$subject_val = "Re: [OMPI users] openmpi query";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  3 13:11:15 2014" -->
<!-- isoreceived="20140403171115" -->
<!-- sent="Thu, 3 Apr 2014 22:41:13 +0530" -->
<!-- isosent="20140403171113" -->
<!-- name="Nisha Dhankher -M.Tech(CSE)" -->
<!-- email="nishadhankher-coaeseeit_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi query" -->
<!-- id="CAL8-kUC_hcsgSODm10iO_BVqYWecuJ6g7m2OvFi-OR5O_NLaCw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAL8-kUAxicNcBLQnsiCZQXa6H3ZY3E6rAB7nch7v=2NDRA+-0w_at_mail.gmail.com" -->
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
<strong>From:</strong> Nisha Dhankher -M.Tech(CSE) (<em>nishadhankher-coaeseeit_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-03 13:11:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24042.php">Nisha Dhankher -M.Tech(CSE): "Re: [OMPI users] openmpi query"</a>
<li><strong>Previous message:</strong> <a href="24040.php">Nisha Dhankher -M.Tech(CSE): "Re: [OMPI users] openmpi query"</a>
<li><strong>In reply to:</strong> <a href="24040.php">Nisha Dhankher -M.Tech(CSE): "Re: [OMPI users] openmpi query"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24042.php">Nisha Dhankher -M.Tech(CSE): "Re: [OMPI users] openmpi query"</a>
<li><strong>Reply:</strong> <a href="24042.php">Nisha Dhankher -M.Tech(CSE): "Re: [OMPI users] openmpi query"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
i also made machine file which contain ip adresses of all compute nodes +
<br>
.ncbirc file for path to mpiblast and shared ,local storage path....
<br>
Sir
<br>
I ran the same command of mpirun on my college supercomputer 8 nodes each
<br>
having 24 processors but it just running....gave no result uptill 3 hours...
<br>
<p><p>On Thu, Apr 3, 2014 at 10:39 PM, Nisha Dhankher -M.Tech(CSE) &lt;
<br>
nishadhankher-coaeseeit_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; i first formatted my database with mpiformatdb command then i ran command :
</span><br>
<span class="quotelev1">&gt; mpirun -np 64 -machinefile mf mpiblast -d all.fas -p blastn -i query.fas
</span><br>
<span class="quotelev1">&gt; -o output.txt
</span><br>
<span class="quotelev1">&gt; but then it gave this error 113 from some hosts and continue to run for
</span><br>
<span class="quotelev1">&gt; other but with results even after 2 hours lapsed.....on rocks 6.0 cluster
</span><br>
<span class="quotelev1">&gt; with 12 virtual nodes on pc's ...2 on each using virt-manger , 1 gb ram to
</span><br>
<span class="quotelev1">&gt; each
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Apr 3, 2014 at 8:37 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm having trouble understanding your note, so perhaps I am getting this
</span><br>
<span class="quotelev2">&gt;&gt; wrong. Let's see if I can figure out what you said:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; * your perl command fails with &quot;no route to host&quot; - but I don't see any
</span><br>
<span class="quotelev2">&gt;&gt; host in your cmd. Maybe I'm just missing something.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; * you tried running a couple of &quot;mpirun&quot;, but the mpirun command wasn't
</span><br>
<span class="quotelev2">&gt;&gt; recognized? Is that correct?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; * you then ran mpiblast and it sounds like it successfully started the
</span><br>
<span class="quotelev2">&gt;&gt; processes, but then one aborted? Was there an error message beyond just the
</span><br>
<span class="quotelev2">&gt;&gt; -1 return status?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 2, 2014, at 11:17 PM, Nisha Dhankher -M.Tech(CSE) &lt;
</span><br>
<span class="quotelev2">&gt;&gt; nishadhankher-coaeseeit_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  error btl_tcp_endpint.c: 638 connection failed due to error 113&lt;<a href="http://biosupport.se/questions/696/error-btl_tcp_endpintc-638-connection-failed-due-to-error-113">http://biosupport.se/questions/696/error-btl_tcp_endpintc-638-connection-failed-due-to-error-113</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In openmpi: this error came when i run my mpiblast program on rocks
</span><br>
<span class="quotelev2">&gt;&gt; cluster.Connect to hosts failed on ip 10.1.255.236,10.1.255.244 . And when
</span><br>
<span class="quotelev2">&gt;&gt; i run following command linux_shell$ perl -e 'die$!=113' this msg comes:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;No route to host at -e line 1.&quot; shell$ mpirun --mca btl ^tcp shell$ mpirun
</span><br>
<span class="quotelev2">&gt;&gt; --mca btl_tcp_if_include eth1,eth2 shell$ mpirun --mca btl_tcp_if_include
</span><br>
<span class="quotelev2">&gt;&gt; 10.1.255.244 was also executed but it did nt recognized these
</span><br>
<span class="quotelev2">&gt;&gt; commands....nd aborted.... what should i do...? When i run my mpiblast
</span><br>
<span class="quotelev2">&gt;&gt; program for the frst time then it give mpi_abort error...bailing out of
</span><br>
<span class="quotelev2">&gt;&gt; signal -1 on rank 2 processor...then i removed my public ethernet
</span><br>
<span class="quotelev2">&gt;&gt; cable....and then give btl_tcp endpint error 113....
</span><br>
<span class="quotelev2">&gt;&gt;  _______________________________________________
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24041/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24042.php">Nisha Dhankher -M.Tech(CSE): "Re: [OMPI users] openmpi query"</a>
<li><strong>Previous message:</strong> <a href="24040.php">Nisha Dhankher -M.Tech(CSE): "Re: [OMPI users] openmpi query"</a>
<li><strong>In reply to:</strong> <a href="24040.php">Nisha Dhankher -M.Tech(CSE): "Re: [OMPI users] openmpi query"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24042.php">Nisha Dhankher -M.Tech(CSE): "Re: [OMPI users] openmpi query"</a>
<li><strong>Reply:</strong> <a href="24042.php">Nisha Dhankher -M.Tech(CSE): "Re: [OMPI users] openmpi query"</a>
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
