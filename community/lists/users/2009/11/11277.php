<?
$subject_val = "Re: [OMPI users] PGI 10.0 configure fails (OMPI 1.3.3)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 24 20:59:37 2009" -->
<!-- isoreceived="20091125015937" -->
<!-- sent="Tue, 24 Nov 2009 20:59:33 -0500" -->
<!-- isosent="20091125015933" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] PGI 10.0 configure fails (OMPI 1.3.3)" -->
<!-- id="334C5045-C5C0-4CA5-9589-B1B190BC707C_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4B0C844B.4060705_at_cse.ucdavis.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] PGI 10.0 configure fails (OMPI 1.3.3)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-24 20:59:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11278.php">Vivek Satpute: "Re: [OMPI users] How to install openmpi to suport thread_level_multiple?"</a>
<li><strong>Previous message:</strong> <a href="11276.php">Scott Beardsley: "Re: [OMPI users] PGI 10.0 configure fails (OMPI 1.3.3)"</a>
<li><strong>In reply to:</strong> <a href="11276.php">Scott Beardsley: "Re: [OMPI users] PGI 10.0 configure fails (OMPI 1.3.3)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There were 2 issues in Libtool itself (one of the tools that is used  
<br>
to automatically create OMPI's configure script).  PGI supplied one  
<br>
patch to the GNU Libtool maintainers; they slightly modified that  
<br>
patch and fixed the 2nd issue as well:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://lists.gnu.org/archive/html/bug-libtool/2009-11/msg00045.html">http://lists.gnu.org/archive/html/bug-libtool/2009-11/msg00045.html</a>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://lists.gnu.org/archive/html/bug-libtool/2009-11/msg00067.html">http://lists.gnu.org/archive/html/bug-libtool/2009-11/msg00067.html</a>
<br>
<p>These fixes will be included in the next Libtool release.  However, I  
<br>
don't know when that will be, so I guess we'll need to put patches in  
<br>
OMPI as well.  I'll open a bug to ensure that we do this.
<br>
<p>But I'm literally about to head out for the US Thanksgiving holiday.   
<br>
So I won't be able to get to this until next week - sorry...  If  
<br>
you're desperate for a fix, the two URLs above might give you enough  
<br>
information to get you going until we can fix it properly in OMPI.
<br>
<p><p>On Nov 24, 2009, at 8:11 PM, Scott Beardsley wrote:
<br>
<p><span class="quotelev1">&gt; There appears to be a workaround posted on the forum[1].
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I applied that &quot;fix&quot; but noticed no differences. Perhaps Jeff Squyres
</span><br>
<span class="quotelev1">&gt; can add some insight?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Scott
</span><br>
<span class="quotelev1">&gt; ------------
</span><br>
<span class="quotelev1">&gt; [1] <a href="http://www.pgroup.com/userforum/viewtopic.php?p=6114">http://www.pgroup.com/userforum/viewtopic.php?p=6114</a>
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
<li><strong>Next message:</strong> <a href="11278.php">Vivek Satpute: "Re: [OMPI users] How to install openmpi to suport thread_level_multiple?"</a>
<li><strong>Previous message:</strong> <a href="11276.php">Scott Beardsley: "Re: [OMPI users] PGI 10.0 configure fails (OMPI 1.3.3)"</a>
<li><strong>In reply to:</strong> <a href="11276.php">Scott Beardsley: "Re: [OMPI users] PGI 10.0 configure fails (OMPI 1.3.3)"</a>
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
