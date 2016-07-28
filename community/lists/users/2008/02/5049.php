<?
$subject_val = "Re: [OMPI users] openmpi/openib problems";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 20 08:24:24 2008" -->
<!-- isoreceived="20080220132424" -->
<!-- sent="Wed, 20 Feb 2008 06:23:52 -0700" -->
<!-- isosent="20080220132352" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi/openib problems" -->
<!-- id="F340DE81-0FF3-45EB-A667-693B6538EA83_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="47BB2F6A.5040501_at_uni.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi/openib problems<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-20 08:23:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5050.php">Adams, Samuel D AFRL/RHDR: "Re: [OMPI users] processes aborting on MPI_Finalize"</a>
<li><strong>Previous message:</strong> <a href="5048.php">Jeff Squyres: "Re: [OMPI users] mpi.h macro naming"</a>
<li><strong>In reply to:</strong> <a href="5040.php">jessie puls: "Re: [OMPI users] openmpi/openib problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5052.php">jessie puls: "Re: [OMPI users] openmpi/openib problems"</a>
<li><strong>Reply:</strong> <a href="5052.php">jessie puls: "Re: [OMPI users] openmpi/openib problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you be more specific about what problems you're seeing?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p>Note that the rdma mpool is the plugin that is used by the openib btl;  
<br>
there is no openib mpool (there used to be, but its functionality got  
<br>
generalized and put into the &quot;rdma&quot; plugin).
<br>
<p><p><p>On Feb 19, 2008, at 12:35 PM, jessie puls wrote:
<br>
<p><span class="quotelev1">&gt; jessie puls wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm having problems getting openmpi to work correctly using verbs on
</span><br>
<span class="quotelev2">&gt;&gt; some systems.  It's been working using openib for quite some time,  
</span><br>
<span class="quotelev2">&gt;&gt; but I
</span><br>
<span class="quotelev2">&gt;&gt; need to get it working using verbs for some research I'm doing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This would make a whole lot more sense if I'd typed it correctly.   
</span><br>
<span class="quotelev1">&gt; It's
</span><br>
<span class="quotelev1">&gt; been working using ipoib.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyway
</span><br>
<span class="quotelev2">&gt;&gt; all seems to be good on the openib side of things.  ibv_devinfo and
</span><br>
<span class="quotelev2">&gt;&gt; ibv_devices returns device information, and they are listed as  
</span><br>
<span class="quotelev2">&gt;&gt; active on
</span><br>
<span class="quotelev2">&gt;&gt; each node.  Also all hosts are visible to each other (ibhosts shows a
</span><br>
<span class="quotelev2">&gt;&gt; full list).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The problem I see with openmpi is I have the openib btl, but not the
</span><br>
<span class="quotelev2">&gt;&gt; openib mpool, and when looking at the contents of ompi/mca/mpool/ I
</span><br>
<span class="quotelev2">&gt;&gt; don't see openib there (sm and rdma are both listed and ompi_info  
</span><br>
<span class="quotelev2">&gt;&gt; shows
</span><br>
<span class="quotelev2">&gt;&gt; they've been included in the build).  Any help would be appreciated.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jessie
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5050.php">Adams, Samuel D AFRL/RHDR: "Re: [OMPI users] processes aborting on MPI_Finalize"</a>
<li><strong>Previous message:</strong> <a href="5048.php">Jeff Squyres: "Re: [OMPI users] mpi.h macro naming"</a>
<li><strong>In reply to:</strong> <a href="5040.php">jessie puls: "Re: [OMPI users] openmpi/openib problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5052.php">jessie puls: "Re: [OMPI users] openmpi/openib problems"</a>
<li><strong>Reply:</strong> <a href="5052.php">jessie puls: "Re: [OMPI users] openmpi/openib problems"</a>
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
