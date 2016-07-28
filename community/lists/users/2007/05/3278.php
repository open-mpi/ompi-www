<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue May 15 12:50:16 2007" -->
<!-- isoreceived="20070515165016" -->
<!-- sent="Tue, 15 May 2007 09:49:57 -0700" -->
<!-- isosent="20070515164957" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] where did liborte/libopal go?" -->
<!-- id="CD830602-299E-4A1B-876A-CD61D5B36DDF_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="2453e2900705150932v7e0f1204k2343ac330c80ffc_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-15 12:49:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3279.php">George Bosilca: "Re: [OMPI users] where did liborte/libopal go?"</a>
<li><strong>Previous message:</strong> <a href="3277.php">Alex Tumanov: "[OMPI users] where did liborte/libopal go?"</a>
<li><strong>In reply to:</strong> <a href="3277.php">Alex Tumanov: "[OMPI users] where did liborte/libopal go?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3279.php">George Bosilca: "Re: [OMPI users] where did liborte/libopal go?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 15, 2007, at 9:32 AM, Alex Tumanov wrote:
<br>
<p><span class="quotelev1">&gt; Very quick question: I noticed that liborte and libopal shared
</span><br>
<span class="quotelev1">&gt; libraries are no longer present in the 1.2 version of Open MPI. Can I
</span><br>
<span class="quotelev1">&gt; establish backward compatibility symlinks for applications that were
</span><br>
<span class="quotelev1">&gt; compiled with Open MPI 1.1.4 and were linked with liborte and libopal?
</span><br>
<span class="quotelev1">&gt; If so , which libraries should I link to? Have they been replaced by
</span><br>
<span class="quotelev1">&gt; libopen-rte and libopen-pal respectively? Is it safe to do so?
</span><br>
<p>Yes, you correctly identified the new names.  We had to change the  
<br>
name of libopal because there is already some other Linux project  
<br>
that had a &quot;libopal&quot;.  At the same time, we renamed liborte to be  
<br>
libopen-rte, just to be symmetric with libopen-pal.
<br>
<p>We have not done binary compatibility testing between the 1.1.x and  
<br>
1.2.x series; I don't know if it would work.  I suspect that it will  
<br>
not; I believe that there have been reports on this mailing list  
<br>
about people trying that and getting warnings from the gnu linker  
<br>
about how objects in libmpi (etc.) changed sized.  mpi.h did not  
<br>
change, so user applications *should* be safe, but I don't remember  
<br>
what the 2nd-order effects were.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3279.php">George Bosilca: "Re: [OMPI users] where did liborte/libopal go?"</a>
<li><strong>Previous message:</strong> <a href="3277.php">Alex Tumanov: "[OMPI users] where did liborte/libopal go?"</a>
<li><strong>In reply to:</strong> <a href="3277.php">Alex Tumanov: "[OMPI users] where did liborte/libopal go?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3279.php">George Bosilca: "Re: [OMPI users] where did liborte/libopal go?"</a>
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
