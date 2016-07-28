<?
$subject_val = "Re: [OMPI users] openmpi query";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  3 13:03:55 2014" -->
<!-- isoreceived="20140403170355" -->
<!-- sent="Thu, 3 Apr 2014 22:33:55 +0530" -->
<!-- isosent="20140403170355" -->
<!-- name="Nisha Dhankher -M.Tech(CSE)" -->
<!-- email="nishadhankher-coaeseeit_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi query" -->
<!-- id="CAL8-kUBsCjSK4Nq+XQeLJ45rHS=qp3JTSTeu8y-OZ3HXYf1NVg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7CB5A719-E4CB-4FAA-BBC8-B66CCF28E2D6_at_open-mpi.org" -->
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
<strong>Date:</strong> 2014-04-03 13:03:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24040.php">Nisha Dhankher -M.Tech(CSE): "Re: [OMPI users] openmpi query"</a>
<li><strong>Previous message:</strong> <a href="24038.php">Ralph Castain: "Re: [OMPI users] question"</a>
<li><strong>In reply to:</strong> <a href="24035.php">Ralph Castain: "Re: [OMPI users] openmpi query"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24040.php">Nisha Dhankher -M.Tech(CSE): "Re: [OMPI users] openmpi query"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
my hostnodes to which this error came are are
<br>
10.1.255.254,10.1.255.236,10.1.255,241
<br>
<p><p>On Thu, Apr 3, 2014 at 8:37 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I'm having trouble understanding your note, so perhaps I am getting this
</span><br>
<span class="quotelev1">&gt; wrong. Let's see if I can figure out what you said:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * your perl command fails with &quot;no route to host&quot; - but I don't see any
</span><br>
<span class="quotelev1">&gt; host in your cmd. Maybe I'm just missing something.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * you tried running a couple of &quot;mpirun&quot;, but the mpirun command wasn't
</span><br>
<span class="quotelev1">&gt; recognized? Is that correct?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * you then ran mpiblast and it sounds like it successfully started the
</span><br>
<span class="quotelev1">&gt; processes, but then one aborted? Was there an error message beyond just the
</span><br>
<span class="quotelev1">&gt; -1 return status?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 2, 2014, at 11:17 PM, Nisha Dhankher -M.Tech(CSE) &lt;
</span><br>
<span class="quotelev1">&gt; nishadhankher-coaeseeit_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  error btl_tcp_endpint.c: 638 connection failed due to error 113&lt;<a href="http://biosupport.se/questions/696/error-btl_tcp_endpintc-638-connection-failed-due-to-error-113">http://biosupport.se/questions/696/error-btl_tcp_endpintc-638-connection-failed-due-to-error-113</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In openmpi: this error came when i run my mpiblast program on rocks
</span><br>
<span class="quotelev1">&gt; cluster.Connect to hosts failed on ip 10.1.255.236,10.1.255.244 . And when
</span><br>
<span class="quotelev1">&gt; i run following command linux_shell$ perl -e 'die$!=113' this msg comes:
</span><br>
<span class="quotelev1">&gt; &quot;No route to host at -e line 1.&quot; shell$ mpirun --mca btl ^tcp shell$ mpirun
</span><br>
<span class="quotelev1">&gt; --mca btl_tcp_if_include eth1,eth2 shell$ mpirun --mca btl_tcp_if_include
</span><br>
<span class="quotelev1">&gt; 10.1.255.244 was also executed but it did nt recognized these
</span><br>
<span class="quotelev1">&gt; commands....nd aborted.... what should i do...? When i run my mpiblast
</span><br>
<span class="quotelev1">&gt; program for the frst time then it give mpi_abort error...bailing out of
</span><br>
<span class="quotelev1">&gt; signal -1 on rank 2 processor...then i removed my public ethernet
</span><br>
<span class="quotelev1">&gt; cable....and then give btl_tcp endpint error 113....
</span><br>
<span class="quotelev1">&gt;  _______________________________________________
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24039/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24040.php">Nisha Dhankher -M.Tech(CSE): "Re: [OMPI users] openmpi query"</a>
<li><strong>Previous message:</strong> <a href="24038.php">Ralph Castain: "Re: [OMPI users] question"</a>
<li><strong>In reply to:</strong> <a href="24035.php">Ralph Castain: "Re: [OMPI users] openmpi query"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24040.php">Nisha Dhankher -M.Tech(CSE): "Re: [OMPI users] openmpi query"</a>
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
