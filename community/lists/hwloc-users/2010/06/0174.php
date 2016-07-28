<?
$subject_val = "Re: [hwloc-users] hwloc and rpath";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 18 18:57:16 2010" -->
<!-- isoreceived="20100618225716" -->
<!-- sent="Sat, 19 Jun 2010 00:57:09 +0200" -->
<!-- isosent="20100618225709" -->
<!-- name="Jirka Hladky" -->
<!-- email="jhladky_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc and rpath" -->
<!-- id="201006190057.09630.jhladky_at_redhat.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20100618223153.GL4931_at_const.famille.thibault.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] hwloc and rpath<br>
<strong>From:</strong> Jirka Hladky (<em>jhladky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-18 18:57:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0175.php">Samuel Thibault: "Re: [hwloc-users] FW: Problem	with	hwloc_set_thread_cpubind()	and	pthread_barrier_wait() on	new debianj"</a>
<li><strong>Previous message:</strong> <a href="0173.php">Jirka Hladky: "Re: [hwloc-users] hwloc and rpath"</a>
<li><strong>In reply to:</strong> <a href="0172.php">Samuel Thibault: "Re: [hwloc-users] hwloc and rpath"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0173.php">Jirka Hladky: "Re: [hwloc-users] hwloc and rpath"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Saturday, June 19, 2010 12:31:53 am Samuel Thibault wrote:
<br>
<span class="quotelev1">&gt; Samuel Thibault, le Sat 19 Jun 2010 00:25:18 +0200, a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; Jirka Hladky, le Sat 19 Jun 2010 00:09:27 +0200, a &#233;crit :
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Based on the manual above I think you should have
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; lstopo_LDADD = libhwloc.la
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; We are using LIBS, which is less burden
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ah, no, I was just having other issues.  I have switched to LDADD, since
</span><br>
<span class="quotelev1">&gt; that's what the automake documentation recommends.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Samuel
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<p><p>Hi Samuel,
<br>
<p>just a notice.
<br>
<p>The workaround is to run after ./configure following replacements:
<br>
<p>+ sed -i 's|^hardcode_libdir_flag_spec=.*|hardcode_libdir_flag_spec=&quot;&quot;|g' 
<br>
libtool
<br>
+ sed -i 's|^runpath_var=LD_RUN_PATH|runpath_var=DIE_RPATH_DIE|g' libtool
<br>
<p>I would like to fix it in the source code, if we can find why rpath appears 
<br>
there.
<br>
<p>Thanks
<br>
Jirka
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0175.php">Samuel Thibault: "Re: [hwloc-users] FW: Problem	with	hwloc_set_thread_cpubind()	and	pthread_barrier_wait() on	new debianj"</a>
<li><strong>Previous message:</strong> <a href="0173.php">Jirka Hladky: "Re: [hwloc-users] hwloc and rpath"</a>
<li><strong>In reply to:</strong> <a href="0172.php">Samuel Thibault: "Re: [hwloc-users] hwloc and rpath"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0173.php">Jirka Hladky: "Re: [hwloc-users] hwloc and rpath"</a>
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
