<?
$subject_val = "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  3 15:09:51 2013" -->
<!-- isoreceived="20130703190951" -->
<!-- sent="Wed, 3 Jul 2013 19:09:46 +0000" -->
<!-- isosent="20130703190946" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F6E94C8_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAJGE3zVZX_NPOa8D7wSb5B31etzKO2TyBnaPi5+yW7ow5TE9AQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-03 15:09:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22230.php">Jeff Squyres (jsquyres): "Re: [OMPI users] jemalloc and crash in opal_memory_linux_ptmalloc2_open"</a>
<li><strong>Previous message:</strong> <a href="22228.php">Brian Budge: "[OMPI users] jemalloc and crash in opal_memory_linux_ptmalloc2_open"</a>
<li><strong>In reply to:</strong> <a href="22227.php">Riccardo Murri: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22231.php">Riccardo Murri: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<li><strong>Reply:</strong> <a href="22231.php">Riccardo Murri: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph and I talked some more about this.
<br>
<p>Here's what we think:
<br>
<p>1. The root cause of the issue is that you are assigning a non-existent IP address to a name.  I.e., &lt;foo&gt; maps to 127.0.1.1, but that IP address does not exist anywhere.  Hence, OMPI will never conclude that that &lt;foo&gt; is &quot;local&quot;.  If you had assigned &lt;foo&gt; to the 127.0.0.1 address, things should have worked fine.
<br>
<p>Just curious: why are you doing this?
<br>
<p>2. That being said, OMPI is not currently looking at all the responses from gethostbyname() -- we're only looking at the first one.  In the spirit of how clients are supposed to behave when multiple IP addresses are returned from a single name lookup, OMPI should examine all of those addresses and see if it finds one that it &quot;likes&quot;, and then use that.  So we should extend OMPI to examine all the IP addresses from gethostbyname().  This should also fix your issue.
<br>
<p>Ralph is going to work on this, but it'll likely take him a little time to get it done.  We'll get it into the trunk and probably ask you to verify that it works for you.  And if so, we'll back-port to the v1.6 and v1.7 series.  
<br>
<p>One final caveat, however: at this point, it does not look likely that 1.6.6 will ever happen.  If this all works out, the fix will be committed to the v1.6 tree, and you can grab a nightly tarball snapshot (which are identical to our release tarballs except for their version numbers), or you can patch your 1.6.5 installation.  But if 1.6.6 is ever released, the fix will be included.
<br>
<p><p>On Jul 2, 2013, at 9:53 AM, Riccardo Murri &lt;riccardo.murri_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sorry for the delay in replying -- pretty busy week :-(
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 28 June 2013 21:54, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Here's what we think we know (I'm using the name &quot;foo&quot; instead of
</span><br>
<span class="quotelev2">&gt;&gt; your actual hostname because it's easier to type):
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1. When you run &quot;hostname&quot;, you get foo.local back
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2. In your /etc/hosts file, foo.local is listed on two lines:
</span><br>
<span class="quotelev2">&gt;&gt;   127.0.1.1
</span><br>
<span class="quotelev2">&gt;&gt;   10.1.255.201
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    [rmurri_at_nh64-5-9 ~]$ fgrep nh64-5-9 /etc/hosts
</span><br>
<span class="quotelev1">&gt;    127.0.1.1   nh64-5-9.local nh64-5-9
</span><br>
<span class="quotelev1">&gt;    10.1.255.194    nh64-5-9.local nh64-5-9
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 3. When you login to the &quot;foo&quot; server and execute mpirun with a hostfile
</span><br>
<span class="quotelev2">&gt;&gt; that contains &quot;foo&quot;, Open MPI incorrectly thinks that the local machine is
</span><br>
<span class="quotelev2">&gt;&gt; not foo, and therefore tries to ssh to it (and things go downhill from
</span><br>
<span class="quotelev2">&gt;&gt; there).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 4. When you login to the &quot;foo&quot; server and execute mpirun with a hostfile
</span><br>
<span class="quotelev2">&gt;&gt; that contains &quot;foo.local&quot; (you said &quot;FQDN&quot;, but never said exactly what you
</span><br>
<span class="quotelev2">&gt;&gt; meant by that -- I'm assuming &quot;foo.local&quot;, not &quot;foo.yourdomain.com&quot;), then
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI behaves properly.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FQDN = foo.local.  (This is a compute node in a cluster that does not
</span><br>
<span class="quotelev1">&gt; have any public IP address not DNS entry -- it only has an interface
</span><br>
<span class="quotelev1">&gt; to the cluster-private network.  I presume this is not relevant to
</span><br>
<span class="quotelev1">&gt; OpenMPI as long as all names are correctly resolved via `/etc/hosts`.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is that all correct?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, all correct.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We have some followup questions for you:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1. What happens when you try to resolve &quot;foo&quot;? (e.g., via the &quot;dig&quot; program
</span><br>
<span class="quotelev2">&gt;&gt; -- &quot;dig foo&quot;)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here's what happens with `dig`:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    [rmurri_at_nh64-5-9 ~]$ dig nh64-5-9
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    ; &lt;&lt;&gt;&gt; DiG 9.3.6-P1-RedHat-9.3.6-4.P1.el5 &lt;&lt;&gt;&gt; nh64-5-9
</span><br>
<span class="quotelev1">&gt;    ;; global options:  printcmd
</span><br>
<span class="quotelev1">&gt;    ;; Got answer:
</span><br>
<span class="quotelev1">&gt;    ;; -&gt;&gt;HEADER&lt;&lt;- opcode: QUERY, status: NXDOMAIN, id: 4373
</span><br>
<span class="quotelev1">&gt;    ;; flags: qr rd ra; QUERY: 1, ANSWER: 0, AUTHORITY: 1, ADDITIONAL: 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    ;; QUESTION SECTION:
</span><br>
<span class="quotelev1">&gt;    ;nh64-5-9.			IN	A
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    ;; AUTHORITY SECTION:
</span><br>
<span class="quotelev1">&gt;    .			3600	IN	SOA	a.root-servers.net. nstld.verisign-grs.com.
</span><br>
<span class="quotelev1">&gt; 2013070200 1800 900 604800 86400
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    ;; Query time: 17 msec
</span><br>
<span class="quotelev1">&gt;    ;; SERVER: 10.1.1.1#53(10.1.1.1)
</span><br>
<span class="quotelev1">&gt;    ;; WHEN: Tue Jul  2 15:47:57 2013
</span><br>
<span class="quotelev1">&gt;    ;; MSG SIZE  rcvd: 101
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, `getent hosts` has a different reply:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    [rmurri_at_nh64-5-9 ~]$ getent hosts nh64-5-9
</span><br>
<span class="quotelev1">&gt;    127.0.1.1       nh64-5-9.local nh64-5-9
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2. What happens when you try to resolve &quot;foo.local&quot;? (e.g., &quot;dig foo.local&quot;)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here's what happens with `dig`:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    [rmurri_at_nh64-5-9 ~]$ dig nh64-5-9.local
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    ; &lt;&lt;&gt;&gt; DiG 9.3.6-P1-RedHat-9.3.6-4.P1.el5 &lt;&lt;&gt;&gt; nh64-5-9.local
</span><br>
<span class="quotelev1">&gt;    ;; global options:  printcmd
</span><br>
<span class="quotelev1">&gt;    ;; Got answer:
</span><br>
<span class="quotelev1">&gt;    ;; -&gt;&gt;HEADER&lt;&lt;- opcode: QUERY, status: NOERROR, id: 62092
</span><br>
<span class="quotelev1">&gt;    ;; flags: qr aa rd ra; QUERY: 1, ANSWER: 1, AUTHORITY: 1, ADDITIONAL: 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    ;; QUESTION SECTION:
</span><br>
<span class="quotelev1">&gt;    ;nh64-5-9.local.			IN	A
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    ;; ANSWER SECTION:
</span><br>
<span class="quotelev1">&gt;    nh64-5-9.local.		259200	IN	A	10.1.255.194
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    ;; AUTHORITY SECTION:
</span><br>
<span class="quotelev1">&gt;    local.			259200	IN	NS	ns.local.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    ;; ADDITIONAL SECTION:
</span><br>
<span class="quotelev1">&gt;    ns.local.		259200	IN	A	127.0.0.1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    ;; Query time: 0 msec
</span><br>
<span class="quotelev1">&gt;    ;; SERVER: 10.1.1.1#53(10.1.1.1)
</span><br>
<span class="quotelev1">&gt;    ;; WHEN: Tue Jul  2 15:48:50 2013
</span><br>
<span class="quotelev1">&gt;    ;; MSG SIZE  rcvd: 81
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Same query resolved via `getent hosts`:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    [rmurri_at_nh64-5-9 ~]$ getent hosts nh64-5-9
</span><br>
<span class="quotelev1">&gt;    127.0.1.1       nh64-5-9.local nh64-5-9
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 3. What happens when you try to resolve &quot;foo.yourdomain.com&quot;? (e.g., &quot;dig
</span><br>
<span class="quotelev2">&gt;&gt; foo.yourdomain.com&quot;)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This yields an empty response from both `dig` and `getent hosts` as the node
</span><br>
<span class="quotelev1">&gt; is only attached to a private network and not registered in DNS:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    [rmurri_at_nh64-5-9 ~]$ getent hosts nh64-5-9.uzh.ch
</span><br>
<span class="quotelev1">&gt;    [rmurri_at_nh64-5-9 ~]$ dig nh64-5-9.uzh.ch
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    ; &lt;&lt;&gt;&gt; DiG 9.3.6-P1-RedHat-9.3.6-4.P1.el5 &lt;&lt;&gt;&gt; nh64-5-9.uzh.ch
</span><br>
<span class="quotelev1">&gt;    ;; global options:  printcmd
</span><br>
<span class="quotelev1">&gt;    ;; Got answer:
</span><br>
<span class="quotelev1">&gt;    ;; -&gt;&gt;HEADER&lt;&lt;- opcode: QUERY, status: NXDOMAIN, id: 61801
</span><br>
<span class="quotelev1">&gt;    ;; flags: qr rd ra; QUERY: 1, ANSWER: 0, AUTHORITY: 1, ADDITIONAL: 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    ;; QUESTION SECTION:
</span><br>
<span class="quotelev1">&gt;    ;nh64-5-9.uzh.ch.		IN	A
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    ;; AUTHORITY SECTION:
</span><br>
<span class="quotelev1">&gt;    uzh.ch.			8921	IN	SOA	ns1.uzh.ch. hostmaster.uzh.ch. 384627811
</span><br>
<span class="quotelev1">&gt; 3600 1800 3600000 10800
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    ;; Query time: 0 msec
</span><br>
<span class="quotelev1">&gt;    ;; SERVER: 10.1.1.1#53(10.1.1.1)
</span><br>
<span class="quotelev1">&gt;    ;; WHEN: Tue Jul  2 15:50:54 2013
</span><br>
<span class="quotelev1">&gt;    ;; MSG SIZE  rcvd: 84
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 4. Please apply the attached patch to your Open MPI 1.6.5 build (please note
</span><br>
<span class="quotelev2">&gt;&gt; that it adds diagnostic output; do *not* put this patch into production)
</span><br>
<span class="quotelev2">&gt;&gt; and:
</span><br>
<span class="quotelev2">&gt;&gt;   4a. Run with one of your &quot;bad&quot; cases and send us the output
</span><br>
<span class="quotelev2">&gt;&gt;   4b. Run with one of your &quot;good&quot; cases and send us the output
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please find the outputs attached.  The exact `mpiexec` invocation and
</span><br>
<span class="quotelev1">&gt; the machines file are at the beginning of each file.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note that I allocated 8 slots (on 4 nodes), but only use 2 slots (on 1 node).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Riccardo
</span><br>
<span class="quotelev1">&gt; &lt;exam01.out.BAD&gt;&lt;exam01.out.GOOD&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22230.php">Jeff Squyres (jsquyres): "Re: [OMPI users] jemalloc and crash in opal_memory_linux_ptmalloc2_open"</a>
<li><strong>Previous message:</strong> <a href="22228.php">Brian Budge: "[OMPI users] jemalloc and crash in opal_memory_linux_ptmalloc2_open"</a>
<li><strong>In reply to:</strong> <a href="22227.php">Riccardo Murri: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22231.php">Riccardo Murri: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<li><strong>Reply:</strong> <a href="22231.php">Riccardo Murri: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
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
