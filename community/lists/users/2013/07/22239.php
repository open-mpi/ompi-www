<?
$subject_val = "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  2 09:53:32 2013" -->
<!-- isoreceived="20130702135332" -->
<!-- sent="Tue, 2 Jul 2013 15:53:05 +0200" -->
<!-- isosent="20130702135305" -->
<!-- name="Riccardo Murri" -->
<!-- email="riccardo.murri_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1" -->
<!-- id="CAJGE3zVZX_NPOa8D7wSb5B31etzKO2TyBnaPi5+yW7ow5TE9AQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F6C5273_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1<br>
<strong>From:</strong> Riccardo Murri (<em>riccardo.murri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-02 09:53:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22240.php">Brian Budge: "[OMPI users] jemalloc and crash in opal_memory_linux_ptmalloc2_open"</a>
<li><strong>Previous message:</strong> <a href="22238.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [PATCH] hooks: disable malloc override inside of	Gentoo sandbox"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/06/22234.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22241.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<li><strong>Reply:</strong> <a href="22241.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>sorry for the delay in replying -- pretty busy week :-(
<br>
<p><p>On 28 June 2013 21:54, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Here's what we think we know (I'm using the name &quot;foo&quot; instead of
</span><br>
<span class="quotelev1">&gt; your actual hostname because it's easier to type):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. When you run &quot;hostname&quot;, you get foo.local back
</span><br>
<p>Yes.
<br>
<p><p><span class="quotelev1">&gt; 2. In your /etc/hosts file, foo.local is listed on two lines:
</span><br>
<span class="quotelev1">&gt;    127.0.1.1
</span><br>
<span class="quotelev1">&gt;    10.1.255.201
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Yes:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;[rmurri_at_nh64-5-9 ~]$ fgrep nh64-5-9 /etc/hosts
<br>
&nbsp;&nbsp;&nbsp;&nbsp;127.0.1.1   nh64-5-9.local nh64-5-9
<br>
&nbsp;&nbsp;&nbsp;&nbsp;10.1.255.194    nh64-5-9.local nh64-5-9
<br>
<p><p><span class="quotelev1">&gt; 3. When you login to the &quot;foo&quot; server and execute mpirun with a hostfile
</span><br>
<span class="quotelev1">&gt; that contains &quot;foo&quot;, Open MPI incorrectly thinks that the local machine is
</span><br>
<span class="quotelev1">&gt; not foo, and therefore tries to ssh to it (and things go downhill from
</span><br>
<span class="quotelev1">&gt; there).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Yes.
<br>
<p><p><span class="quotelev1">&gt; 4. When you login to the &quot;foo&quot; server and execute mpirun with a hostfile
</span><br>
<span class="quotelev1">&gt; that contains &quot;foo.local&quot; (you said &quot;FQDN&quot;, but never said exactly what you
</span><br>
<span class="quotelev1">&gt; meant by that -- I'm assuming &quot;foo.local&quot;, not &quot;foo.yourdomain.com&quot;), then
</span><br>
<span class="quotelev1">&gt; Open MPI behaves properly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Yes.
<br>
<p>FQDN = foo.local.  (This is a compute node in a cluster that does not
<br>
have any public IP address not DNS entry -- it only has an interface
<br>
to the cluster-private network.  I presume this is not relevant to
<br>
OpenMPI as long as all names are correctly resolved via `/etc/hosts`.)
<br>
<p><p><span class="quotelev1">&gt; Is that all correct?
</span><br>
<p>Yes, all correct.
<br>
<p><p><span class="quotelev1">&gt; We have some followup questions for you:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. What happens when you try to resolve &quot;foo&quot;? (e.g., via the &quot;dig&quot; program
</span><br>
<span class="quotelev1">&gt; -- &quot;dig foo&quot;)
</span><br>
<p>Here's what happens with `dig`:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;[rmurri_at_nh64-5-9 ~]$ dig nh64-5-9
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;; &lt;&lt;&gt;&gt; DiG 9.3.6-P1-RedHat-9.3.6-4.P1.el5 &lt;&lt;&gt;&gt; nh64-5-9
<br>
&nbsp;&nbsp;&nbsp;&nbsp;;; global options:  printcmd
<br>
&nbsp;&nbsp;&nbsp;&nbsp;;; Got answer:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;;; -&gt;&gt;HEADER&lt;&lt;- opcode: QUERY, status: NXDOMAIN, id: 4373
<br>
&nbsp;&nbsp;&nbsp;&nbsp;;; flags: qr rd ra; QUERY: 1, ANSWER: 0, AUTHORITY: 1, ADDITIONAL: 0
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;;; QUESTION SECTION:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;;nh64-5-9.			IN	A
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;;; AUTHORITY SECTION:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;.			3600	IN	SOA	a.root-servers.net. nstld.verisign-grs.com.
<br>
2013070200 1800 900 604800 86400
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;;; Query time: 17 msec
<br>
&nbsp;&nbsp;&nbsp;&nbsp;;; SERVER: 10.1.1.1#53(10.1.1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;;; WHEN: Tue Jul  2 15:47:57 2013
<br>
&nbsp;&nbsp;&nbsp;&nbsp;;; MSG SIZE  rcvd: 101
<br>
<p>However, `getent hosts` has a different reply:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;[rmurri_at_nh64-5-9 ~]$ getent hosts nh64-5-9
<br>
&nbsp;&nbsp;&nbsp;&nbsp;127.0.1.1       nh64-5-9.local nh64-5-9
<br>
<p><p><span class="quotelev1">&gt; 2. What happens when you try to resolve &quot;foo.local&quot;? (e.g., &quot;dig foo.local&quot;)
</span><br>
<p>Here's what happens with `dig`:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;[rmurri_at_nh64-5-9 ~]$ dig nh64-5-9.local
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;; &lt;&lt;&gt;&gt; DiG 9.3.6-P1-RedHat-9.3.6-4.P1.el5 &lt;&lt;&gt;&gt; nh64-5-9.local
<br>
&nbsp;&nbsp;&nbsp;&nbsp;;; global options:  printcmd
<br>
&nbsp;&nbsp;&nbsp;&nbsp;;; Got answer:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;;; -&gt;&gt;HEADER&lt;&lt;- opcode: QUERY, status: NOERROR, id: 62092
<br>
&nbsp;&nbsp;&nbsp;&nbsp;;; flags: qr aa rd ra; QUERY: 1, ANSWER: 1, AUTHORITY: 1, ADDITIONAL: 1
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;;; QUESTION SECTION:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;;nh64-5-9.local.			IN	A
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;;; ANSWER SECTION:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;nh64-5-9.local.		259200	IN	A	10.1.255.194
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;;; AUTHORITY SECTION:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;local.			259200	IN	NS	ns.local.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;;; ADDITIONAL SECTION:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ns.local.		259200	IN	A	127.0.0.1
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;;; Query time: 0 msec
<br>
&nbsp;&nbsp;&nbsp;&nbsp;;; SERVER: 10.1.1.1#53(10.1.1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;;; WHEN: Tue Jul  2 15:48:50 2013
<br>
&nbsp;&nbsp;&nbsp;&nbsp;;; MSG SIZE  rcvd: 81
<br>
<p>Same query resolved via `getent hosts`:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;[rmurri_at_nh64-5-9 ~]$ getent hosts nh64-5-9
<br>
&nbsp;&nbsp;&nbsp;&nbsp;127.0.1.1       nh64-5-9.local nh64-5-9
<br>
<p><p><span class="quotelev1">&gt; 3. What happens when you try to resolve &quot;foo.yourdomain.com&quot;? (e.g., &quot;dig
</span><br>
<span class="quotelev1">&gt; foo.yourdomain.com&quot;)
</span><br>
<p>This yields an empty response from both `dig` and `getent hosts` as the node
<br>
is only attached to a private network and not registered in DNS:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;[rmurri_at_nh64-5-9 ~]$ getent hosts nh64-5-9.uzh.ch
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[rmurri_at_nh64-5-9 ~]$ dig nh64-5-9.uzh.ch
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;; &lt;&lt;&gt;&gt; DiG 9.3.6-P1-RedHat-9.3.6-4.P1.el5 &lt;&lt;&gt;&gt; nh64-5-9.uzh.ch
<br>
&nbsp;&nbsp;&nbsp;&nbsp;;; global options:  printcmd
<br>
&nbsp;&nbsp;&nbsp;&nbsp;;; Got answer:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;;; -&gt;&gt;HEADER&lt;&lt;- opcode: QUERY, status: NXDOMAIN, id: 61801
<br>
&nbsp;&nbsp;&nbsp;&nbsp;;; flags: qr rd ra; QUERY: 1, ANSWER: 0, AUTHORITY: 1, ADDITIONAL: 0
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;;; QUESTION SECTION:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;;nh64-5-9.uzh.ch.		IN	A
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;;; AUTHORITY SECTION:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;uzh.ch.			8921	IN	SOA	ns1.uzh.ch. hostmaster.uzh.ch. 384627811
<br>
3600 1800 3600000 10800
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;;; Query time: 0 msec
<br>
&nbsp;&nbsp;&nbsp;&nbsp;;; SERVER: 10.1.1.1#53(10.1.1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;;; WHEN: Tue Jul  2 15:50:54 2013
<br>
&nbsp;&nbsp;&nbsp;&nbsp;;; MSG SIZE  rcvd: 84
<br>
<p><p><span class="quotelev1">&gt; 4. Please apply the attached patch to your Open MPI 1.6.5 build (please note
</span><br>
<span class="quotelev1">&gt; that it adds diagnostic output; do *not* put this patch into production)
</span><br>
<span class="quotelev1">&gt; and:
</span><br>
<span class="quotelev1">&gt;    4a. Run with one of your &quot;bad&quot; cases and send us the output
</span><br>
<span class="quotelev1">&gt;    4b. Run with one of your &quot;good&quot; cases and send us the output
</span><br>
<p>Please find the outputs attached.  The exact `mpiexec` invocation and
<br>
the machines file are at the beginning of each file.
<br>
<p>Note that I allocated 8 slots (on 4 nodes), but only use 2 slots (on 1 node).
<br>
<p>Thanks,
<br>
Riccardo
<br>
<p>

<br><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22239/exam01.out.BAD">exam01.out.BAD</a>
</ul>
<!-- attachment="exam01.out.BAD" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22239/exam01.out.GOOD">exam01.out.GOOD</a>
</ul>
<!-- attachment="exam01.out.GOOD" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22240.php">Brian Budge: "[OMPI users] jemalloc and crash in opal_memory_linux_ptmalloc2_open"</a>
<li><strong>Previous message:</strong> <a href="22238.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [PATCH] hooks: disable malloc override inside of	Gentoo sandbox"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/06/22234.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22241.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<li><strong>Reply:</strong> <a href="22241.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
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
