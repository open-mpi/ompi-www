<?
$subject_val = "Re: [OMPI devel] Cross Memory Attach support in OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 27 13:07:38 2013" -->
<!-- isoreceived="20130627170738" -->
<!-- sent="Thu, 27 Jun 2013 17:07:33 +0000" -->
<!-- isosent="20130627170733" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Cross Memory Attach support in OpenMPI" -->
<!-- id="EEAA8DFE-345F-4D19-B762-BB9D5F7D67EE_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="51CC58A6.4070507_at_cyf-kr.edu.pl" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Cross Memory Attach support in OpenMPI<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-27 13:07:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12497.php">Ronny Brendel: "[OMPI devel] Barrier Implementation Oddity"</a>
<li><strong>Previous message:</strong> <a href="12495.php">Lukasz Flis: "Re: [OMPI devel] Cross Memory Attach support in OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="12495.php">Lukasz Flis: "Re: [OMPI devel] Cross Memory Attach support in OpenMPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nope. V1.6 is the stable series; no new features in that series- bug fixes only. 
<br>
<p>Sent from my phone. No type good. 
<br>
<p>On Jun 27, 2013, at 11:22 AM, &quot;Lukasz Flis&quot; &lt;l.flis_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Thanks George,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My mistake, I checked 1.6.x only. The support indeed is present for
</span><br>
<span class="quotelev1">&gt; 1.7.x
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm sorry for the confusion. Are there any plans to backport this
</span><br>
<span class="quotelev1">&gt; functionality to 1.6.x?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Lukasz FLis
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 27.06.2013 16:48, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/changeset/26134">https://svn.open-mpi.org/trac/ompi/changeset/26134</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  George.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 27, 2013, at 16:43 , Lukasz Flis &lt;l.flis_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dear All,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Some time ago there was a discussion on this list regarding enabling CMA
</span><br>
<span class="quotelev3">&gt;&gt;&gt; support in OpenMPI. There were 2 positive votes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2012/01/10208.php">http://www.open-mpi.org/community/lists/devel/2012/01/10208.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have checked the latest releases today and haven't seen any trace of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CMA support.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Since CMA is available from kernel 3.2 and in RHEL 6.3 and above maybe
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it would be worth to consider adding this feature?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is there any reason for not including the patch yet?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best Regards
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lukasz Flis
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12497.php">Ronny Brendel: "[OMPI devel] Barrier Implementation Oddity"</a>
<li><strong>Previous message:</strong> <a href="12495.php">Lukasz Flis: "Re: [OMPI devel] Cross Memory Attach support in OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="12495.php">Lukasz Flis: "Re: [OMPI devel] Cross Memory Attach support in OpenMPI"</a>
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
