<?
$subject_val = "Re: [OMPI users] Problem with gateway between 2 hosts";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  3 08:36:12 2008" -->
<!-- isoreceived="20080703123612" -->
<!-- sent="Thu, 3 Jul 2008 05:36:06 -0700" -->
<!-- isosent="20080703123606" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with gateway between 2 hosts" -->
<!-- id="A7F75451-D9E5-4FE9-85FC-D72AB9B29498_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="b4f9bf870807030305r293d0136lf9dda91e683415cf_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-03 08:36:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6021.php">Jeff Squyres: "Re: [OMPI users] OpenMPI locking up only on IB"</a>
<li><strong>Previous message:</strong> <a href="6019.php">Geoffroy Pignot: "Re: [OMPI users] Problem with gateway between 2 hosts"</a>
<li><strong>In reply to:</strong> <a href="6019.php">Geoffroy Pignot: "Re: [OMPI users] Problem with gateway between 2 hosts"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Check out this FAQ entry:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=tcp#tcp-routability">http://www.open-mpi.org/faq/?category=tcp#tcp-routability</a>
<br>
<p>We've long-since talked about adding an MCA param to tell Open MPI  
<br>
&quot;just assume all TCP addresses are reachable from each other&quot; for  
<br>
cases similar to yours, but it unfortunately hasn't happened yet.  :-(
<br>
<p><p>On Jul 3, 2008, at 3:05 AM, Geoffroy Pignot wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; To answer your question 172.x.y.z are not behind a NAT .
</span><br>
<span class="quotelev1">&gt; Moreover, I check the netstat command on the remote host and it  
</span><br>
<span class="quotelev1">&gt; seems like the connection is ok
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; tcp        0      0 10.160.x.x:39794            172.x.y.z: 
</span><br>
<span class="quotelev1">&gt; 50858         ESTABLISHED 20956/orted
</span><br>
<span class="quotelev1">&gt; unix  3      [ ]         STREAM     CONNECTED     76348311 20956/orted
</span><br>
<span class="quotelev1">&gt; unix  3      [ ]         STREAM     CONNECTED     76348310 20956/orted
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hope it'll help
</span><br>
<span class="quotelev1">&gt; Does anyone run openmpi program in such environment ???
</span><br>
<span class="quotelev1">&gt; Thanks again
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Geoffroy
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2008/7/2 Geoffroy Pignot &lt;geopignot_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt; are the 172.x.y.z nodes behind a NAT (hence the communication back
</span><br>
<span class="quotelev1">&gt; isn't possible - only the stdout from the rsh/ssh is working in this
</span><br>
<span class="quotelev1">&gt; case)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Actually I dont know  exactly , I am asking  extra informations to  
</span><br>
<span class="quotelev1">&gt; my network architect
</span><br>
<span class="quotelev1">&gt; Interesting thing to notice is that LAM  worked in such kind of   
</span><br>
<span class="quotelev1">&gt; network configuration.
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
<span class="quotelev1">&gt; _______________________________________________
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6021.php">Jeff Squyres: "Re: [OMPI users] OpenMPI locking up only on IB"</a>
<li><strong>Previous message:</strong> <a href="6019.php">Geoffroy Pignot: "Re: [OMPI users] Problem with gateway between 2 hosts"</a>
<li><strong>In reply to:</strong> <a href="6019.php">Geoffroy Pignot: "Re: [OMPI users] Problem with gateway between 2 hosts"</a>
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
