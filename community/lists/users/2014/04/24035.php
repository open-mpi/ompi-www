<?
$subject_val = "Re: [OMPI users] openmpi query";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  3 11:07:41 2014" -->
<!-- isoreceived="20140403150741" -->
<!-- sent="Thu, 3 Apr 2014 08:07:37 -0700" -->
<!-- isosent="20140403150737" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi query" -->
<!-- id="7CB5A719-E4CB-4FAA-BBC8-B66CCF28E2D6_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAL8-kUAkHa4ui-BbqhW7EddtvSccp9d02X6tc5zLpnAH+FMsGg_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-04-03 11:07:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24036.php">Nisha Dhankher -M.Tech(CSE): "Re: [OMPI users] simple way to build OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="24034.php">James Horey: "[OMPI users] simple way to build OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="24033.php">Nisha Dhankher -M.Tech(CSE): "[OMPI users] openmpi query"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24039.php">Nisha Dhankher -M.Tech(CSE): "Re: [OMPI users] openmpi query"</a>
<li><strong>Reply:</strong> <a href="24039.php">Nisha Dhankher -M.Tech(CSE): "Re: [OMPI users] openmpi query"</a>
<li><strong>Reply:</strong> <a href="24040.php">Nisha Dhankher -M.Tech(CSE): "Re: [OMPI users] openmpi query"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm having trouble understanding your note, so perhaps I am getting this wrong. Let's see if I can figure out what you said:
<br>
<p>* your perl command fails with &quot;no route to host&quot; - but I don't see any host in your cmd. Maybe I'm just missing something.
<br>
<p>* you tried running a couple of &quot;mpirun&quot;, but the mpirun command wasn't recognized? Is that correct?
<br>
<p>* you then ran mpiblast and it sounds like it successfully started the processes, but then one aborted? Was there an error message beyond just the -1 return status?
<br>
<p><p>On Apr 2, 2014, at 11:17 PM, Nisha Dhankher -M.Tech(CSE) &lt;nishadhankher-coaeseeit_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; error btl_tcp_endpint.c: 638 connection failed due to error 113
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In openmpi: this error came when i run my mpiblast program on rocks cluster.Connect to hosts failed on ip 10.1.255.236,10.1.255.244 . And when i run following command linux_shell$ perl -e 'die$!=113' this msg comes: &quot;No route to host at -e line 1.&quot; shell$ mpirun --mca btl ^tcp shell$ mpirun --mca btl_tcp_if_include eth1,eth2 shell$ mpirun --mca btl_tcp_if_include 10.1.255.244 was also executed but it did nt recognized these commands....nd aborted.... what should i do...? When i run my mpiblast program for the frst time then it give mpi_abort error...bailing out of signal -1 on rank 2 processor...then i removed my public ethernet cable....and then give btl_tcp endpint error 113....
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24035/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24036.php">Nisha Dhankher -M.Tech(CSE): "Re: [OMPI users] simple way to build OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="24034.php">James Horey: "[OMPI users] simple way to build OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="24033.php">Nisha Dhankher -M.Tech(CSE): "[OMPI users] openmpi query"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24039.php">Nisha Dhankher -M.Tech(CSE): "Re: [OMPI users] openmpi query"</a>
<li><strong>Reply:</strong> <a href="24039.php">Nisha Dhankher -M.Tech(CSE): "Re: [OMPI users] openmpi query"</a>
<li><strong>Reply:</strong> <a href="24040.php">Nisha Dhankher -M.Tech(CSE): "Re: [OMPI users] openmpi query"</a>
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
