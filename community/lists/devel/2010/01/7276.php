<?
$subject_val = "Re: [OMPI devel] [Open MPI] #2043: sm BTL hang with GCC 4.4.x";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  5 08:28:53 2010" -->
<!-- isoreceived="20100105132853" -->
<!-- sent="Tue, 5 Jan 2010 08:28:50 -0500" -->
<!-- isosent="20100105132850" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [Open MPI] #2043: sm BTL hang with GCC 4.4.x" -->
<!-- id="CAEE0EBE-8E92-4EE7-B4C5-84C899BE4D9A_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4B420685.7020204_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [Open MPI] #2043: sm BTL hang with GCC 4.4.x<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-05 08:28:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7277.php">Christoph Konersmann: "[OMPI devel] Howto pause BTL's sending at runtime"</a>
<li><strong>Previous message:</strong> <a href="7275.php">Sylvain Jeaugey: "[OMPI devel] Thread safety levels"</a>
<li><strong>In reply to:</strong> <a href="7271.php">Eugene Loh: "Re: [OMPI devel] [Open MPI] #2043: sm BTL hang with GCC 4.4.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7278.php">Eugene Loh: "Re: [OMPI devel] [Open MPI] #2043: sm BTL hang with GCC 4.4.x"</a>
<li><strong>Reply:</strong> <a href="7278.php">Eugene Loh: "Re: [OMPI devel] [Open MPI] #2043: sm BTL hang with GCC 4.4.x"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
...just catching up after the holidays...
<br>
<p>Just to ensure I understand: does this mean that the sm issue is *not* yet resolved?  Or does it mean that it *is* resolved on the 1.4 branch and we need to get 1.4.1 out ASAP?
<br>
<p><p><p>On Jan 4, 2010, at 10:17 AM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; Open MPI wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;#2043: sm BTL hang with GCC 4.4.x
</span><br>
<span class="quotelev2">&gt; &gt;-----------------------+----------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;Reporter:  eugene      |       Owner:             
</span><br>
<span class="quotelev2">&gt; &gt;    Type:  defect      |      Status:  new        
</span><br>
<span class="quotelev2">&gt; &gt;Priority:  major       |   Milestone:  Open MPI 1.4
</span><br>
<span class="quotelev2">&gt; &gt; Version:  1.3 branch  |    Keywords:             
</span><br>
<span class="quotelev2">&gt; &gt;-----------------------+----------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Comment(by eugene):
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Another thread has been attributed to this problem:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/community/lists/users/2010/01/11674.php">http://www.open-mpi.org/community/lists/users/2010/01/11674.php</a> [[BR]]
</span><br>
<span class="quotelev2">&gt; &gt; ''Dual quad core Opteron hangs on Bcast.''
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; In this case, repeated broadcasts are hanging with Fedora FC11.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; Looks like we're getting the trac 2043 hang with FC11.  The problem
</span><br>
<span class="quotelev1">&gt; appears to be widespread.  Is there anything we should do to fix this
</span><br>
<span class="quotelev1">&gt; particular distribution?  Talk to the Fedora people?
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="7277.php">Christoph Konersmann: "[OMPI devel] Howto pause BTL's sending at runtime"</a>
<li><strong>Previous message:</strong> <a href="7275.php">Sylvain Jeaugey: "[OMPI devel] Thread safety levels"</a>
<li><strong>In reply to:</strong> <a href="7271.php">Eugene Loh: "Re: [OMPI devel] [Open MPI] #2043: sm BTL hang with GCC 4.4.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7278.php">Eugene Loh: "Re: [OMPI devel] [Open MPI] #2043: sm BTL hang with GCC 4.4.x"</a>
<li><strong>Reply:</strong> <a href="7278.php">Eugene Loh: "Re: [OMPI devel] [Open MPI] #2043: sm BTL hang with GCC 4.4.x"</a>
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
