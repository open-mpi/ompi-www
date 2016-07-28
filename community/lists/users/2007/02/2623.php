<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Feb  6 11:40:38 2007" -->
<!-- isoreceived="20070206164038" -->
<!-- sent="Tue, 6 Feb 2007 11:40:31 -0500" -->
<!-- isosent="20070206164031" -->
<!-- name="Alex Tumanov" -->
<!-- email="atumanov_at_[hidden]" -->
<!-- subject="Re: [OMPI users] running OpenMPI jobs over Myrinet gm interconnect" -->
<!-- id="2453e2900702060840i4867bb11u890756ea11b19c4b_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="086301c74983$c9be64f0$58c31fac_at_bart" -->
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
<strong>From:</strong> Alex Tumanov (<em>atumanov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-06 11:40:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2624.php">Pablo Hernán Rodríguez Zivic: "[OMPI users] Problems with MPI_Init"</a>
<li><strong>Previous message:</strong> <a href="2622.php">George Bosilca: "Re: [OMPI users] MPI_Type_create_subarray fails!"</a>
<li><strong>In reply to:</strong> <a href="2616.php">Reese Faucette: "Re: [OMPI users] running OpenMPI jobs over Myrinet gm interconnect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2626.php">Reese Faucette: "Re: [OMPI users] running OpenMPI jobs over Myrinet gm interconnect"</a>
<li><strong>Reply:</strong> <a href="2626.php">Reese Faucette: "Re: [OMPI users] running OpenMPI jobs over Myrinet gm interconnect"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you for your reply, Reese!
<br>
<p><span class="quotelev1">&gt; What version of GM are you running?
</span><br>
# rpm -qa |egrep &quot;^gm-[0-9]+|^gm-devel&quot;
<br>
gm-2.0.24-1
<br>
gm-devel-2.0.24-1
<br>
Is this too old?
<br>
<p><span class="quotelev1">&gt; And are you sure that gm_board_info
</span><br>
<span class="quotelev1">&gt; shows all the nodes that are listed in your machine file?
</span><br>
Yes, that was the issue - bad cable connection to my compute node
<br>
prevented it from being seen on the fabric :( Thanks for pointing this
<br>
out for me.
<br>
<p><span class="quotelev1">&gt;  Could you send
</span><br>
<span class="quotelev1">&gt; a copy of your gm_board_info output , please?
</span><br>
Sure:
<br>
# ./gm_board_info
<br>
GM build ID is &quot;2.0.24_Linux_rc20051223164441PST
<br>
@dr11.myco.com:/usr/src/redhat/BUILD/gm-2.0.24_Linux Tue Jan 30
<br>
23:07:45 EST 2007.&quot;
<br>
<p><p>Board number 0:
<br>
&nbsp;&nbsp;lanai_cpu_version = 0x0a00 (LANai10.0)
<br>
&nbsp;&nbsp;lanai_sram_size   = 0x001fe000 (2040K bytes)
<br>
ROM settings:
<br>
&nbsp;&nbsp;MAC=00:60:dd:49:1e:bf
<br>
&nbsp;&nbsp;SN=187449
<br>
&nbsp;&nbsp;PC=M3F-PCIXD-2
<br>
&nbsp;&nbsp;PN=09-02666
<br>
LANai time is 0x209b211b12 ticks, or about 1043 minutes since reset.
<br>
Mapper is 00:60:dd:49:99:96.
<br>
Map version is 1965903.
<br>
2 hosts.
<br>
Network is fully configured.
<br>
This node is &quot;dr11.myco.com&quot;
<br>
Board has room for 16 ports,  1559 nodes/routes,  16384 cache entries
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Port token cnt: send=61, recv=253
<br>
Port: Status  PID
<br>
&nbsp;&nbsp;&nbsp;0:   BUSY  7489  (this process [gm_board_info])
<br>
&nbsp;&nbsp;&nbsp;1:   BUSY 25113
<br>
Route table for this node follows:
<br>
gmID MAC Address                                 gmName Route
<br>
---- ----------------- -------------------------------- ---------------------
<br>
&nbsp;&nbsp;&nbsp;1 00:60:dd:49:1e:bf            dr11.myco.com (this node)
<br>
&nbsp;&nbsp;&nbsp;2 00:60:dd:49:99:96            dr05.myco.com 81 (mapper)
<br>
<p><span class="quotelev1">&gt;  A mismatch between the list
</span><br>
<span class="quotelev1">&gt; of nodes actually configured onto the Myrinet fabric and the machine file is
</span><br>
<span class="quotelev1">&gt; a common source of errors like this.  The mismatch could be caused by cable
</span><br>
<span class="quotelev1">&gt; failure or other mapping issues.
</span><br>
Could you elaborate on the mapping issues you mentioned? What are they?
<br>
<p><span class="quotelev1">&gt; Why GM instead of MX, by the way?
</span><br>
We have a few MX cards in-house, but no MX switch due to its current
<br>
market price. So we're only able to perform MX testing using
<br>
direct-connection cables, which is not very exciting :) On the
<br>
contrary, we've already had GM boards and a switch and found it
<br>
sufficient for OpenMPI testing purposes. Would be great to upgrade to
<br>
MX in the near future.
<br>
<p>Thank you very much for your help.
<br>
<p>Sincerely,
<br>
Alex.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2624.php">Pablo Hernán Rodríguez Zivic: "[OMPI users] Problems with MPI_Init"</a>
<li><strong>Previous message:</strong> <a href="2622.php">George Bosilca: "Re: [OMPI users] MPI_Type_create_subarray fails!"</a>
<li><strong>In reply to:</strong> <a href="2616.php">Reese Faucette: "Re: [OMPI users] running OpenMPI jobs over Myrinet gm interconnect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2626.php">Reese Faucette: "Re: [OMPI users] running OpenMPI jobs over Myrinet gm interconnect"</a>
<li><strong>Reply:</strong> <a href="2626.php">Reese Faucette: "Re: [OMPI users] running OpenMPI jobs over Myrinet gm interconnect"</a>
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
