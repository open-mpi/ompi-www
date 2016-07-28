<?
$subject_val = "Re: [OMPI users] mpi.h macro naming";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb 23 13:31:15 2008" -->
<!-- isoreceived="20080223183115" -->
<!-- sent="Sat, 23 Feb 2008 10:20:33 -0800" -->
<!-- isosent="20080223182033" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi.h macro naming" -->
<!-- id="DC33A27C-5E45-4CF2-9BE1-54438112B1E9_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.LNX.4.64.0802221139250.31457_at_marvin.we-be-smart.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpi.h macro naming<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-23 13:20:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5073.php">Jeff Squyres: "Re: [OMPI users] mpi.h macro naming"</a>
<li><strong>Previous message:</strong> <a href="5071.php">Swamy Kandadai: "Re: [OMPI users] OpenMPI 1.2.5 configure bug for POWERPC64 target"</a>
<li><strong>In reply to:</strong> <a href="5069.php">Brian W. Barrett: "Re: [OMPI users] mpi.h macro naming"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5073.php">Jeff Squyres: "Re: [OMPI users] mpi.h macro naming"</a>
<li><strong>Reply:</strong> <a href="5073.php">Jeff Squyres: "Re: [OMPI users] mpi.h macro naming"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I merged your two patches and will commit once I come within range of  
<br>
being online.  I'll also file a CMR for 1.2.6 in case that ever  
<br>
happens (had to resolve a trivial patch reject for the 1.2 branch).
<br>
<p>Thanks!
<br>
<p><p>On Feb 22, 2008, at 9:40 AM, Brian W. Barrett wrote:
<br>
<p><span class="quotelev1">&gt; A second attempt, this time with less suck :).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, 22 Feb 2008, Brian W. Barrett wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Oops..  forgot to test the C++ bindings, which of course broke.   
</span><br>
<span class="quotelev2">&gt;&gt; Let me
</span><br>
<span class="quotelev2">&gt;&gt; try again and I'll send a better patch.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; brian
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, 22 Feb 2008, Brian W. Barrett wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Thu, 21 Feb 2008, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; While I agree that having AC actually define them to a value is a  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Good
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thing (better than just defining it to be empty), I do see the  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; pickle
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that it has put us in.  :-\  I don't see an obvious solution.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I do :).  Try the attached patch.  It sneaks in at the last minute  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; defines (for example) both SIZEOF_BOOL and OMPI_SIZEOF_BOOL.   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpi.h only has
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the define for OMPI_SIZEOF_BOOL.  opal_config.h has both, but a  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; note saying
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not to use the OMPI_ version.  Seems to work.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brian
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &lt;ompi_mpi_h_no_ac.diff&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="5073.php">Jeff Squyres: "Re: [OMPI users] mpi.h macro naming"</a>
<li><strong>Previous message:</strong> <a href="5071.php">Swamy Kandadai: "Re: [OMPI users] OpenMPI 1.2.5 configure bug for POWERPC64 target"</a>
<li><strong>In reply to:</strong> <a href="5069.php">Brian W. Barrett: "Re: [OMPI users] mpi.h macro naming"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5073.php">Jeff Squyres: "Re: [OMPI users] mpi.h macro naming"</a>
<li><strong>Reply:</strong> <a href="5073.php">Jeff Squyres: "Re: [OMPI users] mpi.h macro naming"</a>
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
