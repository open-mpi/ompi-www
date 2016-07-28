<?
$subject_val = "Re: [OMPI users] mpi.h macro naming";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb 24 10:12:07 2008" -->
<!-- isoreceived="20080224151207" -->
<!-- sent="Sun, 24 Feb 2008 10:11:25 -0500" -->
<!-- isosent="20080224151125" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi.h macro naming" -->
<!-- id="C1ADDF81-F1F0-4AF6-BBAF-A5B35294E568_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="DC33A27C-5E45-4CF2-9BE1-54438112B1E9_at_cisco.com" -->
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
<strong>Date:</strong> 2008-02-24 10:11:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5074.php">Gregory J. Orris: "[OMPI users] Problems with f90 implementation under Leopard"</a>
<li><strong>Previous message:</strong> <a href="5072.php">Jeff Squyres: "Re: [OMPI users] mpi.h macro naming"</a>
<li><strong>In reply to:</strong> <a href="5072.php">Jeff Squyres: "Re: [OMPI users] mpi.h macro naming"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5076.php">Jeff Squyres: "Re: [OMPI users] mpi.h macro naming"</a>
<li><strong>Reply:</strong> <a href="5076.php">Jeff Squyres: "Re: [OMPI users] mpi.h macro naming"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Actually, I take my comments back.  Brian's initial patches did not  
<br>
compiled for me; I had to make some more changes to make it work for  
<br>
me (see attached patch):
<br>
<p>1. fixed a HAVE_LONG_LONG to be OMPI_HAVE_LONG_LONG
<br>
<p>2. fixed a STDC_HEADERS to be OMPI_STDC_HEADERS
<br>
<p>3. the AC_DEFINE's for the new OMPI_* macros in mpi.h were at the very  
<br>
beginning of configure.ac, before the various $ac_cv_&lt;foo&gt; shell  
<br>
variables had any values (hence, the resulting #defines were empty).   
<br>
I moved them to the end of configure.ac.
<br>
<p>The only one that concerns me is #3 -- Brian: was there a reason you  
<br>
put those AC_DEFINE's at the top of configure.ac?
<br>
<p>Given that the previous patch must have somehow compiled for Brian,  
<br>
I'd like to get a review before this is committed to the trunk.  I  
<br>
tested on x86_64 RHEL4U4 and OS X Leopard and my amended patch seems  
<br>
to work.  Can someone else verify that the attached patch works for  
<br>
them before I commit?
<br>
<p><p><p>On Feb 23, 2008, at 1:20 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; I merged your two patches and will commit once I come within range of
</span><br>
<span class="quotelev1">&gt; being online.  I'll also file a CMR for 1.2.6 in case that ever
</span><br>
<span class="quotelev1">&gt; happens (had to resolve a trivial patch reject for the 1.2 branch).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 22, 2008, at 9:40 AM, Brian W. Barrett wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A second attempt, this time with less suck :).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, 22 Feb 2008, Brian W. Barrett wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Oops..  forgot to test the C++ bindings, which of course broke.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Let me
</span><br>
<span class="quotelev3">&gt;&gt;&gt; try again and I'll send a better patch.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; brian
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Fri, 22 Feb 2008, Brian W. Barrett wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Thu, 21 Feb 2008, Jeff Squyres wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; While I agree that having AC actually define them to a value is a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Good
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thing (better than just defining it to be empty), I do see the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; pickle
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; that it has put us in.  :-\  I don't see an obvious solution.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I do :).  Try the attached patch.  It sneaks in at the last minute
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; defines (for example) both SIZEOF_BOOL and OMPI_SIZEOF_BOOL.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpi.h only has
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the define for OMPI_SIZEOF_BOOL.  opal_config.h has both, but a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; note saying
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; not to use the OMPI_ version.  Seems to work.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Brian
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt; 
</span><br>
<span class="quotelev2">&gt;&gt; ompi_mpi_h_no_ac.diff&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<p>
<p><p><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5073/mpi.h.in.patch">mpi.h.in.patch</a>
</ul>
<!-- attachment="mpi.h.in.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5074.php">Gregory J. Orris: "[OMPI users] Problems with f90 implementation under Leopard"</a>
<li><strong>Previous message:</strong> <a href="5072.php">Jeff Squyres: "Re: [OMPI users] mpi.h macro naming"</a>
<li><strong>In reply to:</strong> <a href="5072.php">Jeff Squyres: "Re: [OMPI users] mpi.h macro naming"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5076.php">Jeff Squyres: "Re: [OMPI users] mpi.h macro naming"</a>
<li><strong>Reply:</strong> <a href="5076.php">Jeff Squyres: "Re: [OMPI users] mpi.h macro naming"</a>
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
