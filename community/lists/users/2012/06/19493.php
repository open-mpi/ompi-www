<?
$subject_val = "[OMPI users] RE : RE : RE : Bug when mixing sent types in version 1.6";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 11 11:15:17 2012" -->
<!-- isoreceived="20120611151517" -->
<!-- sent="Mon, 11 Jun 2012 17:15:06 +0200" -->
<!-- isosent="20120611151506" -->
<!-- name="BOUVIER Benjamin" -->
<!-- email="benjamin.bouvier_at_[hidden]" -->
<!-- subject="[OMPI users] RE : RE : RE : Bug when mixing sent types in version 1.6" -->
<!-- id="26002_1339427707_4FD60B7B_26002_1949_1_49CF97100DDD4B4A9C4DC89905CA59A310187E5E23_at_THSONEA01CMS07P.one.grp" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="DF8A8A14-7AC7-46F2-8238-4081BDF3C1FD_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI users] RE : RE : RE : Bug when mixing sent types in version 1.6<br>
<strong>From:</strong> BOUVIER Benjamin (<em>benjamin.bouvier_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-11 11:15:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19494.php">Jeff Squyres: "Re: [OMPI users] RE : RE : RE : Bug when mixing sent types in version 1.6"</a>
<li><strong>Previous message:</strong> <a href="19492.php">Jeff Squyres: "Re: [OMPI users] RE : RE : Bug when mixing sent types in version 1.6"</a>
<li><strong>In reply to:</strong> <a href="19492.php">Jeff Squyres: "Re: [OMPI users] RE : RE : Bug when mixing sent types in version 1.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19494.php">Jeff Squyres: "Re: [OMPI users] RE : RE : RE : Bug when mixing sent types in version 1.6"</a>
<li><strong>Reply:</strong> <a href="19494.php">Jeff Squyres: "Re: [OMPI users] RE : RE : RE : Bug when mixing sent types in version 1.6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Thanks for your hints Jeff.
<br>
I've just tried without any firewalls on involved machines, but the issue remains.
<br>
<p># /etc/init.d/ip6tables status
<br>
ip6tables: Firewall is not running.
<br>
# /etc/init.d/iptables status
<br>
iptables: Firewall is not running.
<br>
<p>The machines have the host names &quot;node1&quot;, &quot;node2&quot; and &quot;node3&quot;.
<br>
I launch the basic program on one machine, asking node1 and node2 to be hosts. Typing `netstat -a | grep node1` from node2 shows me that node1 and node2 are connected by tcp, as the connection is marked as ESTABLISHED. I have the same thing when I do `netstat -a | grep node2` from node1. However, the program keeps blocking.
<br>
<p>What else could provoke that failure ?
<br>
<pre>
--
Benjamin BOUVIER 
________________________________________
To start, I would ensure that all firewalling  (e.g., iptables) is disabled on all machines involved.
On Jun 11, 2012, at 10:16 AM, BOUVIER Benjamin wrote:
&gt; Hi,
&gt;
&gt;&gt; I'd guess that running net pipe with 3 procs may be undefined.
&gt;
&gt; It is indeed undefined. Running the net pipe program locally with 3 processors blocks, on my computer.
&gt;
&gt; This issue is especially weird as there is no problem for running the example program on network with MPICH2 implementation, for 2 processes.
&gt;
&gt; However, with MPICH2, it fails with 3 processes and blocks also on connect (&quot;Connection refused&quot;), which could indicate that it's actually a network issue, with both MPICH2 and OMPI. I don't know how many connections OMPI use to send the data in the example program, but with the assumption that it tries to open 2 connections (while for the same program, MPICH2 only uses one connection, which is another hypothesis), maybe the number of connections is the right way to look for. I'll ask MPICH2 users on their mailing list, so as to get their opinion about it.
&gt;
&gt; Now that I know the program doesn't work both with OMPI and MPICH2 implementations, I guess it's not dependant of MPI implementation.
&gt;
&gt; If you have any ideas or comments, I would be pleased to hear them.
&gt;
&gt; --
&gt; Benjamin Bouvier
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
--
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19494.php">Jeff Squyres: "Re: [OMPI users] RE : RE : RE : Bug when mixing sent types in version 1.6"</a>
<li><strong>Previous message:</strong> <a href="19492.php">Jeff Squyres: "Re: [OMPI users] RE : RE : Bug when mixing sent types in version 1.6"</a>
<li><strong>In reply to:</strong> <a href="19492.php">Jeff Squyres: "Re: [OMPI users] RE : RE : Bug when mixing sent types in version 1.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19494.php">Jeff Squyres: "Re: [OMPI users] RE : RE : RE : Bug when mixing sent types in version 1.6"</a>
<li><strong>Reply:</strong> <a href="19494.php">Jeff Squyres: "Re: [OMPI users] RE : RE : RE : Bug when mixing sent types in version 1.6"</a>
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
