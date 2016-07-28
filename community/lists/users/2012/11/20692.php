<?
$subject_val = "Re: [OMPI users] mpif90 wrapper is using -pthread as option to ifort, but option is depreciated";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  9 13:42:49 2012" -->
<!-- isoreceived="20121109184249" -->
<!-- sent="Fri, 9 Nov 2012 13:42:44 -0500" -->
<!-- isosent="20121109184244" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpif90 wrapper is using -pthread as option to ifort, but option is depreciated" -->
<!-- id="226CA33A-D316-44EA-94FC-058FED81CF48_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="0918A9A5-4338-4BB0-B72C-FD5A4D1C4EA1_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpif90 wrapper is using -pthread as option to ifort, but option is depreciated<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-09 13:42:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20693.php">Martin Siegert: "Re: [OMPI users] mpif90 wrapper is using -pthread as option to ifort, but option is depreciated"</a>
<li><strong>Previous message:</strong> <a href="20691.php">Reuti: "Re: [OMPI users] mpif90 wrapper is using -pthread as option to ifort, but option is depreciated"</a>
<li><strong>In reply to:</strong> <a href="20691.php">Reuti: "Re: [OMPI users] mpif90 wrapper is using -pthread as option to ifort, but option is depreciated"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20693.php">Martin Siegert: "Re: [OMPI users] mpif90 wrapper is using -pthread as option to ifort, but option is depreciated"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We're actually getting this flag from Libtool during configure. :-\
<br>
<p>Hopefully they're updating Libtool upstream to account for this.
<br>
<p>If Ralph's suggestion doesn't work, you can always edit the wrapper compiler data files to remove -pthread after you &quot;make install&quot;.
<br>
<p><p><p>On Nov 9, 2012, at 1:21 PM, Reuti wrote:
<br>
<p><span class="quotelev1">&gt; Am 09.11.2012 um 19:15 schrieb Ralph Castain:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Try configuring --without-threads
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 9, 2012, at 10:05 AM, Craig Tierney &lt;craig.tierney_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I just built OpenMPI 1.6.3 with ifort 12.1.4.  When running ifort I am
</span><br>
<span class="quotelev3">&gt;&gt;&gt; getting the warning:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ifort: command line remark #10010: open '-pthread' is depreciated and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; will be removed in a future release.  See '-help deprecated'.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And here they list:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -pthread                 use -reentrancy threaded
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is -pthread really needed?  Is there a configure option to change this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; or should have intel not changed from how other compilers work?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Craig
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20693.php">Martin Siegert: "Re: [OMPI users] mpif90 wrapper is using -pthread as option to ifort, but option is depreciated"</a>
<li><strong>Previous message:</strong> <a href="20691.php">Reuti: "Re: [OMPI users] mpif90 wrapper is using -pthread as option to ifort, but option is depreciated"</a>
<li><strong>In reply to:</strong> <a href="20691.php">Reuti: "Re: [OMPI users] mpif90 wrapper is using -pthread as option to ifort, but option is depreciated"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20693.php">Martin Siegert: "Re: [OMPI users] mpif90 wrapper is using -pthread as option to ifort, but option is depreciated"</a>
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
