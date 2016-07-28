<?
$subject_val = "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 20 04:56:35 2013" -->
<!-- isoreceived="20130620085635" -->
<!-- sent="Thu, 20 Jun 2013 10:56:06 +0200" -->
<!-- isosent="20130620085606" -->
<!-- name="Riccardo Murri" -->
<!-- email="riccardo.murri_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1" -->
<!-- id="CAJGE3zVpC+9yGVDCu8e0eZMavHmWLJU8TmTTS_qE0mnf+N77fw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAMD57oc_GL1YPstU_64mYCOH4r8vLYUAQN749qr2MGs9HpK-sA_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2013-06-20 04:56:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22159.php">Riccardo Murri: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<li><strong>Previous message:</strong> <a href="22157.php">Ralph Castain: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<li><strong>In reply to:</strong> <a href="22157.php">Ralph Castain: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22212.php">Ralph Castain: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<li><strong>Reply:</strong> <a href="22212.php">Ralph Castain: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 20 June 2013 06:33, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Been trying to decipher this problem, and think maybe I'm beginning to
</span><br>
<span class="quotelev1">&gt; understand it. Just to clarify:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * when you execute &quot;hostname&quot;, you get the &lt;name&gt;.local response?
</span><br>
<p>Yes:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;[rmurri_at_nh64-2-11 ~]$ hostname
<br>
&nbsp;&nbsp;&nbsp;&nbsp;nh64-2-11.local
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;[rmurri_at_nh64-2-11 ~]$ uname -n
<br>
&nbsp;&nbsp;&nbsp;&nbsp;nh64-2-11.local
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;[rmurri_at_nh64-2-11 ~]$ hostname -s
<br>
&nbsp;&nbsp;&nbsp;&nbsp;nh64-2-11
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;[rmurri_at_nh64-2-11 ~]$ hostname -f
<br>
&nbsp;&nbsp;&nbsp;&nbsp;nh64-2-11.local
<br>
<p><p><span class="quotelev1">&gt; * you somewhere have it setup so that 10.x.x.x resolves to &lt;name&gt;, with no
</span><br>
<span class="quotelev1">&gt; &quot;.local&quot; extension?
</span><br>
<p>No. Host name resolution is correct, but the hostname resolves to the
<br>
127.0.1.1 address:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;[rmurri_at_nh64-2-11 ~]$ getent hosts `hostname`
<br>
&nbsp;&nbsp;&nbsp;&nbsp;127.0.1.1    nh64-2-11.local nh64-2-11
<br>
<p>Note that `/etc/hosts` also lists a 10.x.x.x address, which is the one
<br>
actually assigned to the ethernet interface:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;[rmurri_at_nh64-2-11 ~]$ fgrep `hostname -s` /etc/hosts
<br>
&nbsp;&nbsp;&nbsp;&nbsp;127.0.1.1       nh64-2-11.local nh64-2-11
<br>
&nbsp;&nbsp;&nbsp;&nbsp;10.1.255.201    nh64-2-11.local nh64-2-11
<br>
&nbsp;&nbsp;&nbsp;&nbsp;192.168.255.206 nh64-2-11-myri0
<br>
<p>If we remove the `127.0.1.1` line from `/etc/hosts`, then everything
<br>
works again.  Also, everything works if we use only FQDNs in the
<br>
hostfile.
<br>
<p>So it seems that the 127.0.1.1 address is treated specially.
<br>
<p>Thanks,
<br>
Riccardo
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22159.php">Riccardo Murri: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<li><strong>Previous message:</strong> <a href="22157.php">Ralph Castain: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<li><strong>In reply to:</strong> <a href="22157.php">Ralph Castain: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22212.php">Ralph Castain: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<li><strong>Reply:</strong> <a href="22212.php">Ralph Castain: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
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
