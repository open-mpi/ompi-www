<?
$subject_val = "Re: [OMPI users] [visit-developers] /usr/bin/ld: cannot find-lrdmacm on 9184";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 16 17:20:40 2009" -->
<!-- isoreceived="20091216222040" -->
<!-- sent="Wed, 16 Dec 2009 17:20:35 -0500" -->
<!-- isosent="20091216222035" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [visit-developers] /usr/bin/ld: cannot find-lrdmacm on 9184" -->
<!-- id="DA8459C3-2CEE-4229-AB77-A2BF58CBE809_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="auto-000021432141_at_sci.utah.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] [visit-developers] /usr/bin/ld: cannot find-lrdmacm on 9184<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-16 17:20:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11559.php">Ralph Castain: "Re: [OMPI users] error performing MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="11557.php">Ralph Castain: "Re: [OMPI users] Debugging spawned processes"</a>
<li><strong>In reply to:</strong> <a href="11551.php">tom fogal: "Re: [OMPI users] [visit-developers] /usr/bin/ld: cannot find -lrdmacm on 9184"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11588.php">tom fogal: "Re: [OMPI users] [visit-developers] /usr/bin/ld: cannot find -lrdmacm on 9184"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It depends on how Open MPI was built.
<br>
<p>If Open MPI was built without plugins (i.e., all the plugins are slurped up into libmpi and friends), then yes, applications need to link against librdmacm to use the RDMA CM mode of OpenFabrics transport.
<br>
<p>If Open MPI was built with plugins (which is the default), then apps don't need to link against librdmacm because the only use of rdmacm is in an Open MPI plugin, and that plugin was linked against librdmacm.  
<br>
<p>Make sense?
<br>
<p>That being said, the output from mpic++ --showme should give you something that is directly compile-/link-able.  So it is odd if mpic++ is showing you something that can't (or shouldn't?) be done.  Did a -L argument get lost somewhere, perchance?
<br>
<p>Does linking MPI applications with mpic++ work properly, or does it result in the same error?  If it results in the same error, then perhaps something has changed since Open MPI was installed...?
<br>
<p>All this being said, two other random points:
<br>
<p>1. Ensure that you're using the &quot;right&quot; mpic++.  I.e., make sure it matches the version/installation of Open MPI that you're trying to use.
<br>
<p>2. If you don't link with the librdmacm, you're probably not losing any important functionality unless you have an iWarp-based cluster (that's the only transport that *needs* librdmacm).  IB-based networks can use librdmacm, but don't *need* it (it's only used for making initial connections, so using librdmacm or not has no implications on overall MPI performance).  It's still odd that mpic++ wants it and it can't be found, though...
<br>
<p>Does that helps?
<br>
<p><p>On Dec 15, 2009, at 11:11 PM, tom fogal wrote:
<br>
<p><span class="quotelev1">&gt; Simon Su &lt;newsgroup4ssu_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev2">&gt; &gt; Hi Tom,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am using the standard openmpi package that run on all the cluster
</span><br>
<span class="quotelev2">&gt; &gt; machines here at Princeton. So, maybe I shouldn't touch openmpi. But,
</span><br>
<span class="quotelev2">&gt; &gt; removing -lrdmacm from the MPI_LIBS line in the machinename.conf file
</span><br>
<span class="quotelev2">&gt; &gt; worked.  Any implication from doing this?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The only thing it could possibly do is disable RDMA for you.  However,
</span><br>
<span class="quotelev1">&gt; since removing it did not produce any undefined symbol errors, my guess
</span><br>
<span class="quotelev1">&gt; is that your OpenMPI isn't using RDMA anyway.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There might be an OpenMPI bug here, though.  I've cc'd the OpenMPI
</span><br>
<span class="quotelev1">&gt; community to see if they have any input.  As a summary for them: Simon
</span><br>
<span class="quotelev1">&gt; is trying to build our MPI-enabled application.  A script which tries
</span><br>
<span class="quotelev1">&gt; to automate this adds the output of &quot;mpic++ -show&quot;.  His build then
</span><br>
<span class="quotelev1">&gt; failed because it attempted to link against librdmacm, which does not
</span><br>
<span class="quotelev1">&gt; exist in his normal search paths (or maybe at all).  Is it possible
</span><br>
<span class="quotelev1">&gt; that `mpic++ -show' includes/adds &quot;-lrdmacm&quot; even when OpenMPI is not
</span><br>
<span class="quotelev1">&gt; itself using the library?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -tom
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Tue, Dec 15, 2009 at 8:46 PM, tom fogal &lt;tfogal_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Simon Su &lt;newsgroup4ssu_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; I am getting this error message while building 9184.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [snip]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; -lz -lm -ldl  -lpthread -L/usr/local/openmpi/1.3.3/gcc/x86_64/lib64
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; -lmpi_cxx -lmpi -lopen-rte -lopen-pal -lrdmacm -libverbs -lnuma -ldl
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -lnsl
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; -lutil -lm  -lcognomen \
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;         -L/usr/local/openmpi/1.3.3/gcc/x86_64/lib64 -lmpi_cxx -lmpi
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; -lopen-rte -lopen-pal -lrdmacm -libverbs -lnuma -ldl -lnsl -lutil -lm
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; -lcognomen
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; /usr/bin/ld: cannot find -lrdmacm
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Your OpenMPI install (incorrectly?) thinks it has librdmacm available,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; but the library isn't in your search path.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; It apparently defaults to enabled in 1.3.3.  That seems rather
</span><br>
<span class="quotelev3">&gt; &gt; &gt; silly, since I imagine the library requires RDMA hardware, which
</span><br>
<span class="quotelev3">&gt; &gt; &gt; is of course not ubiquitous.  Anyway, try configuring OpenMPI with
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --disable-openib-rdmacm and then rerunning build_visit.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Of course, if you actually have an RDMA cluster, you'll want to delve
</span><br>
<span class="quotelev3">&gt; &gt; &gt; deeper.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Cheers,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -tom
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11559.php">Ralph Castain: "Re: [OMPI users] error performing MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="11557.php">Ralph Castain: "Re: [OMPI users] Debugging spawned processes"</a>
<li><strong>In reply to:</strong> <a href="11551.php">tom fogal: "Re: [OMPI users] [visit-developers] /usr/bin/ld: cannot find -lrdmacm on 9184"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11588.php">tom fogal: "Re: [OMPI users] [visit-developers] /usr/bin/ld: cannot find -lrdmacm on 9184"</a>
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
