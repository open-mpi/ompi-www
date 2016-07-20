<?
$subject_val = "Re: [hwloc-users] hwloc sockets support on solaris";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 23 16:15:21 2010" -->
<!-- isoreceived="20100623201521" -->
<!-- sent="Wed, 23 Jun 2010 22:14:33 +0200" -->
<!-- isosent="20100623201433" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc sockets support on solaris" -->
<!-- id="4C226B29.6070503_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4C2266F3.9090608_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] hwloc sockets support on solaris<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-23 16:14:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0213.php">Jeff Squyres: "Re: [hwloc-users] hwloc sockets support on solaris"</a>
<li><strong>Previous message:</strong> <a href="0211.php">Terry Dontje: "[hwloc-users] hwloc sockets support on solaris"</a>
<li><strong>In reply to:</strong> <a href="0211.php">Terry Dontje: "[hwloc-users] hwloc sockets support on solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0213.php">Jeff Squyres: "Re: [hwloc-users] hwloc sockets support on solaris"</a>
<li><strong>Reply:</strong> <a href="0213.php">Jeff Squyres: "Re: [hwloc-users] hwloc sockets support on solaris"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I see this in the solaris binding core:
<br>
<p>&nbsp;&nbsp;if (hwloc_cpuset_weight(hwloc_set) != 1) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;errno = EXDEV;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return -1;
<br>
&nbsp;&nbsp;}
<br>
<p>OMPI doesn't get this error ?
<br>
<p>Brice
<br>
<p><p><p><p>Le 23/06/2010 21:56, Terry Dontje a &#233;crit :
<br>
<span class="quotelev1">&gt; Does hwloc think it supports binding processes to sockets or multiple
</span><br>
<span class="quotelev1">&gt; cpus?  I am asking because I believe there are no current Solaris
</span><br>
<span class="quotelev1">&gt; accessors that support this (processor_bind only binds a pid or a set
</span><br>
<span class="quotelev1">&gt; of pids to a *single* processor). 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I bring this up because in testing OMPI with hwloc support it looks
</span><br>
<span class="quotelev1">&gt; like -bind-to-socket is acting like -bind-to-core on Solaris.  I
</span><br>
<span class="quotelev1">&gt; believe the issue is hwloc should be returning an error to tell OMPI
</span><br>
<span class="quotelev1">&gt; it cannot bind-to-socket or multiple cpus at that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Oracle
</span><br>
<span class="quotelev1">&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev1">&gt; Developer Tools Engineering | +1.650.633.7054
</span><br>
<span class="quotelev1">&gt; Oracle * - Performance Technologies*
</span><br>
<span class="quotelev1">&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev1">&gt; Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Oracle
</span><br>
<span class="quotelev1">&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev1">&gt; Developer Tools Engineering | +1.650.633.7054
</span><br>
<span class="quotelev1">&gt; Oracle * - Performance Technologies*
</span><br>
<span class="quotelev1">&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev1">&gt; Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0212/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/hwloc-users/att-0212/02-part" alt="picture">
<!-- attachment="02-part" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/hwloc-users/att-0212/03-part" alt="picture">
<!-- attachment="03-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0213.php">Jeff Squyres: "Re: [hwloc-users] hwloc sockets support on solaris"</a>
<li><strong>Previous message:</strong> <a href="0211.php">Terry Dontje: "[hwloc-users] hwloc sockets support on solaris"</a>
<li><strong>In reply to:</strong> <a href="0211.php">Terry Dontje: "[hwloc-users] hwloc sockets support on solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0213.php">Jeff Squyres: "Re: [hwloc-users] hwloc sockets support on solaris"</a>
<li><strong>Reply:</strong> <a href="0213.php">Jeff Squyres: "Re: [hwloc-users] hwloc sockets support on solaris"</a>
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
