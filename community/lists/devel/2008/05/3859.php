<?
$subject_val = "Re: [OMPI devel] [RFC] mca_base_open() NULL";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  8 08:16:07 2008" -->
<!-- isoreceived="20080508121607" -->
<!-- sent="Thu, 8 May 2008 08:15:56 -0400" -->
<!-- isosent="20080508121556" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [RFC] mca_base_open() NULL" -->
<!-- id="80685D91-AC0E-4862-BC19-1E0414C141D4_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="DC577975-34FF-4370-A2E2-272517E3A351_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [RFC] mca_base_open() NULL<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-08 08:15:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3860.php">Josh Hursey: "Re: [OMPI devel] [RFC] mca_base_open() NULL"</a>
<li><strong>Previous message:</strong> <a href="3858.php">Josh Hursey: "Re: [OMPI devel] [RFC] mca_base_open() NULL"</a>
<li><strong>In reply to:</strong> <a href="3858.php">Josh Hursey: "Re: [OMPI devel] [RFC] mca_base_open() NULL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3860.php">Josh Hursey: "Re: [OMPI devel] [RFC] mca_base_open() NULL"</a>
<li><strong>Reply:</strong> <a href="3860.php">Josh Hursey: "Re: [OMPI devel] [RFC] mca_base_open() NULL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 8, 2008, at 8:06 AM, Josh Hursey wrote:
<br>
<p><span class="quotelev2">&gt;&gt; --&gt; If not intended to be used by users (i.e., it's an internal
</span><br>
<span class="quotelev2">&gt;&gt; mechanism only), is there a reason why we're not using a zero-length
</span><br>
<span class="quotelev2">&gt;&gt; string (e.g., mpirun --mca foo &quot;&quot;)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think a zero length string might get confusing with the empty
</span><br>
<span class="quotelev1">&gt; string. The empty string is taken to mean auto-select from all
</span><br>
<span class="quotelev1">&gt; available components, which currently cannot be specified on the
</span><br>
<span class="quotelev1">&gt; command line as an -mca option. The 0 length string is close and
</span><br>
<span class="quotelev1">&gt; nearly indistinguishable in an (A)MCA file from a NULL string.
</span><br>
<p><p>Ah, right.  Should we introduce another keyword, &quot;all&quot;?  This would  
<br>
then be symmetric to &quot;none&quot; and could be the default value.  An empty  
<br>
string would then be an error.
<br>
<p>Per the larger issue, I wonder if we should simply disallow NULL  
<br>
default string parameter values.  This might simplify a lot of things...
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
<li><strong>Next message:</strong> <a href="3860.php">Josh Hursey: "Re: [OMPI devel] [RFC] mca_base_open() NULL"</a>
<li><strong>Previous message:</strong> <a href="3858.php">Josh Hursey: "Re: [OMPI devel] [RFC] mca_base_open() NULL"</a>
<li><strong>In reply to:</strong> <a href="3858.php">Josh Hursey: "Re: [OMPI devel] [RFC] mca_base_open() NULL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3860.php">Josh Hursey: "Re: [OMPI devel] [RFC] mca_base_open() NULL"</a>
<li><strong>Reply:</strong> <a href="3860.php">Josh Hursey: "Re: [OMPI devel] [RFC] mca_base_open() NULL"</a>
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
