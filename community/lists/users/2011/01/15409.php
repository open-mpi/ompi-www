<?
$subject_val = "Re: [OMPI users] Problem with running MPI programs on machines with	multiple interfaces";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 24 11:27:31 2011" -->
<!-- isoreceived="20110124162731" -->
<!-- sent="Mon, 24 Jan 2011 16:27:30 +0000" -->
<!-- isosent="20110124162730" -->
<!-- name="Avinash Malik" -->
<!-- email="amalik_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with running MPI programs on machines with	multiple interfaces" -->
<!-- id="19773.43122.809412.734415_at_malik.cs.tcd.ie" -->
<!-- inreplyto="m2oc7672dc.fsf_at_malik.cs.tcd.ie" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with running MPI programs on machines with	multiple interfaces<br>
<strong>From:</strong> Avinash Malik (<em>amalik_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-24 11:27:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15410.php">Nathan Hjelm: "Re: [OMPI users] srun and openmpi"</a>
<li><strong>Previous message:</strong> <a href="15408.php">amalik_at_[hidden]: "Re: [OMPI users] Problem with running MPI programs on machines withmultiple interfaces"</a>
<li><strong>In reply to:</strong> <a href="15407.php">Avinash Malik: "[OMPI users] Problem with running MPI programs on machines with multiple interfaces"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please don't worry about this for now, the problem stems from
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;iptable rules. But, I still think putting usb0 into the reject
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;list should disable the ip-address associated with it.
<br>
<p>Regards,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &quot;Avinash&quot; == Avinash Malik &lt;amalik_at_[hidden]&gt; writes:
</span><br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Avinash&gt; Hello,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Avinash&gt;         I have two mahcines each having 3 live interfaces:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Avinash&gt; lo, eth0 (interanet) and usb0 (internet). eth0 cannot
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Avinash&gt; access usb0 on the other machine (and vice-veras). Now,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Avinash&gt; when I try to run the MPI program with these two hosts I
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Avinash&gt; cannot get any output, even --mca btl_base_verbose 30 does
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Avinash&gt; not give any output. If I set hostfile to have only
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Avinash&gt; localhost, then everything runs fine.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Avinash&gt;         I tried out the same code and hostfile with two
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Avinash&gt; other machines with two interfaces: lo and eth1, which can
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Avinash&gt; access each other. The program runs fine on these machines.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Avinash&gt;         Next, I setup btl_tcp_if_exclude to lo,usb0 (on the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Avinash&gt; first arch) and also the ip-address/mask, but this does not
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Avinash&gt; work either. When I run the program on one machine and do
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Avinash&gt; &quot;ps aux | grep mpi&quot; on the other I can see --hnp-uri being
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Avinash&gt; set to the usb0's ip-address, which it should not, because
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Avinash&gt; I have set usb0 to be exluded in the btl_tcp_if_exclude
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Avinash&gt; list. So, what exactly am I doing wrong here?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Avinash&gt;         I read the otimization FAQ and saw how openmpi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Avinash&gt; builds the bipartite graphs for connection. But, as I said
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Avinash&gt; before, eth0 cannot access usb0's ip and vice-versa, how
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Avinash&gt; can I get rid of the usb0 ip-address showing up in
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Avinash&gt; --hnp-uri, because this is the only difference between the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Avinash&gt; working and the non-working archs.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Avinash&gt; Regards, -- Avinash Malik
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Avinash&gt; _______________________________________________ users
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Avinash&gt; mailing list users_at_[hidden]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Avinash&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><pre>
-- 
Avinash Malik
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15410.php">Nathan Hjelm: "Re: [OMPI users] srun and openmpi"</a>
<li><strong>Previous message:</strong> <a href="15408.php">amalik_at_[hidden]: "Re: [OMPI users] Problem with running MPI programs on machines withmultiple interfaces"</a>
<li><strong>In reply to:</strong> <a href="15407.php">Avinash Malik: "[OMPI users] Problem with running MPI programs on machines with multiple interfaces"</a>
<!-- nextthread="start" -->
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
