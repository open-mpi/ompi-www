<?
$subject_val = "Re: [OMPI users] Problem with gateway between 2 hosts";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  3 06:05:46 2008" -->
<!-- isoreceived="20080703100546" -->
<!-- sent="Thu, 3 Jul 2008 12:05:39 +0200" -->
<!-- isosent="20080703100539" -->
<!-- name="Geoffroy Pignot" -->
<!-- email="geopignot_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with gateway between 2 hosts" -->
<!-- id="b4f9bf870807030305r293d0136lf9dda91e683415cf_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="b4f9bf870807020650r154a22fbg8bc838e3639f65b3_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with gateway between 2 hosts<br>
<strong>From:</strong> Geoffroy Pignot (<em>geopignot_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-03 06:05:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6020.php">Jeff Squyres: "Re: [OMPI users] Problem with gateway between 2 hosts"</a>
<li><strong>Previous message:</strong> <a href="6018.php">Pavel Shamis (Pasha): "Re: [OMPI users] OpenMPI locking up only on IB"</a>
<li><strong>In reply to:</strong> <a href="6009.php">Geoffroy Pignot: "Re: [OMPI users] Problem with gateway between 2 hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6020.php">Jeff Squyres: "Re: [OMPI users] Problem with gateway between 2 hosts"</a>
<li><strong>Reply:</strong> <a href="6020.php">Jeff Squyres: "Re: [OMPI users] Problem with gateway between 2 hosts"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
To answer your question 172.x.y.z are not behind a NAT .
<br>
Moreover, I check the netstat command on the remote host and it seems like
<br>
the connection is ok
<br>
<p>tcp        0      0 10.160.x.x:39794            172.x.y.z:50858
<br>
ESTABLISHED 20956/orted
<br>
unix  3      [ ]         STREAM     CONNECTED     76348311 20956/orted
<br>
unix  3      [ ]         STREAM     CONNECTED     76348310 20956/orted
<br>
<p>I hope it'll help
<br>
Does anyone run openmpi program in such environment ???
<br>
Thanks again
<br>
<p>Geoffroy
<br>
<p><p><p><p>2008/7/2 Geoffroy Pignot &lt;geopignot_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; are the 172.x.y.z nodes behind a NAT (hence the communication back
</span><br>
<span class="quotelev2">&gt;&gt; isn't possible - only the stdout from the rsh/ssh is working in this
</span><br>
<span class="quotelev2">&gt;&gt; case)?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Actually I dont know  exactly , I am asking  extra informations to my
</span><br>
<span class="quotelev1">&gt; network architect
</span><br>
<span class="quotelev1">&gt; Interesting thing to notice is that LAM  worked in such kind of  network
</span><br>
<span class="quotelev1">&gt; configuration.
</span><br>
<span class="quotelev1">&gt; I keep you inform as soon as I have more infos.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; Geoffroy
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6019/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6020.php">Jeff Squyres: "Re: [OMPI users] Problem with gateway between 2 hosts"</a>
<li><strong>Previous message:</strong> <a href="6018.php">Pavel Shamis (Pasha): "Re: [OMPI users] OpenMPI locking up only on IB"</a>
<li><strong>In reply to:</strong> <a href="6009.php">Geoffroy Pignot: "Re: [OMPI users] Problem with gateway between 2 hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6020.php">Jeff Squyres: "Re: [OMPI users] Problem with gateway between 2 hosts"</a>
<li><strong>Reply:</strong> <a href="6020.php">Jeff Squyres: "Re: [OMPI users] Problem with gateway between 2 hosts"</a>
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
