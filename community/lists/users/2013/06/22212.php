<?
$subject_val = "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 25 21:11:06 2013" -->
<!-- isoreceived="20130626011106" -->
<!-- sent="Tue, 25 Jun 2013 19:11:00 -0600" -->
<!-- isosent="20130626011100" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1" -->
<!-- id="CAMD57ocRBm3_KmNvz_FFnt8p1ve9_fX6SxhBoFZDPzr0CyWtMw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAJGE3zVpC+9yGVDCu8e0eZMavHmWLJU8TmTTS_qE0mnf+N77fw_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-25 21:11:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22213.php">eblosch_at_[hidden]: "Re: [OMPI users] Application hangs on mpi_waitall"</a>
<li><strong>Previous message:</strong> <a href="22211.php">Stefano Zaghi: "Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so"</a>
<li><strong>In reply to:</strong> <a href="22158.php">Riccardo Murri: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22216.php">Riccardo Murri: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<li><strong>Reply:</strong> <a href="22216.php">Riccardo Murri: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'll ignore the rest of this thread as it kinda diverged from your original
<br>
question. I've been reviewing the code, and I think I'm getting a handle on
<br>
the issue.
<br>
<p>Just to be clear - your hostname resolves to the 127 address? And you are
<br>
on a Linux (not one of the BSD flavors out there)?
<br>
<p>If the answer to both is &quot;yes&quot;, then the problem is that we ignore loopback
<br>
devices if anything else is present. When we check to see if the hostname
<br>
we were given is the local node, we resolve the name to the address and
<br>
then check our list of interfaces. The loopback device is ignored and
<br>
therefore not on the list. So if you resolve to the 127 address, we will
<br>
decide this is a different node than the one we are on.
<br>
<p>I can modify that logic, but want to ensure this accurately captures the
<br>
problem. I'll also have to discuss the change with the other developers to
<br>
ensure we don't shoot ourselves in the foot if we make it.
<br>
<p><p><p>On Thu, Jun 20, 2013 at 2:56 AM, Riccardo Murri &lt;riccardo.murri_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; On 20 June 2013 06:33, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Been trying to decipher this problem, and think maybe I'm beginning to
</span><br>
<span class="quotelev2">&gt; &gt; understand it. Just to clarify:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; * when you execute &quot;hostname&quot;, you get the &lt;name&gt;.local response?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     [rmurri_at_nh64-2-11 ~]$ hostname
</span><br>
<span class="quotelev1">&gt;     nh64-2-11.local
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     [rmurri_at_nh64-2-11 ~]$ uname -n
</span><br>
<span class="quotelev1">&gt;     nh64-2-11.local
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     [rmurri_at_nh64-2-11 ~]$ hostname -s
</span><br>
<span class="quotelev1">&gt;     nh64-2-11
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     [rmurri_at_nh64-2-11 ~]$ hostname -f
</span><br>
<span class="quotelev1">&gt;     nh64-2-11.local
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; * you somewhere have it setup so that 10.x.x.x resolves to &lt;name&gt;, with
</span><br>
<span class="quotelev1">&gt; no
</span><br>
<span class="quotelev2">&gt; &gt; &quot;.local&quot; extension?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No. Host name resolution is correct, but the hostname resolves to the
</span><br>
<span class="quotelev1">&gt; 127.0.1.1 address:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     [rmurri_at_nh64-2-11 ~]$ getent hosts `hostname`
</span><br>
<span class="quotelev1">&gt;     127.0.1.1    nh64-2-11.local nh64-2-11
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that `/etc/hosts` also lists a 10.x.x.x address, which is the one
</span><br>
<span class="quotelev1">&gt; actually assigned to the ethernet interface:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     [rmurri_at_nh64-2-11 ~]$ fgrep `hostname -s` /etc/hosts
</span><br>
<span class="quotelev1">&gt;     127.0.1.1       nh64-2-11.local nh64-2-11
</span><br>
<span class="quotelev1">&gt;     10.1.255.201    nh64-2-11.local nh64-2-11
</span><br>
<span class="quotelev1">&gt;     192.168.255.206 nh64-2-11-myri0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If we remove the `127.0.1.1` line from `/etc/hosts`, then everything
</span><br>
<span class="quotelev1">&gt; works again.  Also, everything works if we use only FQDNs in the
</span><br>
<span class="quotelev1">&gt; hostfile.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So it seems that the 127.0.1.1 address is treated specially.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Riccardo
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22212/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22213.php">eblosch_at_[hidden]: "Re: [OMPI users] Application hangs on mpi_waitall"</a>
<li><strong>Previous message:</strong> <a href="22211.php">Stefano Zaghi: "Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so"</a>
<li><strong>In reply to:</strong> <a href="22158.php">Riccardo Murri: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22216.php">Riccardo Murri: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<li><strong>Reply:</strong> <a href="22216.php">Riccardo Murri: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
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
