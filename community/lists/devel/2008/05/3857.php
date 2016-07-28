<?
$subject_val = "Re: [OMPI devel] [RFC] mca_base_open() NULL";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  8 07:50:46 2008" -->
<!-- isoreceived="20080508115046" -->
<!-- sent="Thu, 8 May 2008 07:50:36 -0400" -->
<!-- isosent="20080508115036" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [RFC] mca_base_open() NULL" -->
<!-- id="AF8A43C7-B0CE-4981-B34E-56C5FA1155A5_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="7F46204F-EAD1-4F3F-B933-AA78028F865B_at_open-mpi.org" -->
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
<strong>Date:</strong> 2008-05-08 07:50:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3858.php">Josh Hursey: "Re: [OMPI devel] [RFC] mca_base_open() NULL"</a>
<li><strong>Previous message:</strong> <a href="3856.php">Jeff Squyres: "Re: [OMPI devel] [OMPI users] OpenMPI Internals &amp; Static-Analysis."</a>
<li><strong>In reply to:</strong> <a href="3845.php">Josh Hursey: "[OMPI devel] [RFC] mca_base_open() NULL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3858.php">Josh Hursey: "Re: [OMPI devel] [RFC] mca_base_open() NULL"</a>
<li><strong>Reply:</strong> <a href="3858.php">Josh Hursey: "Re: [OMPI devel] [RFC] mca_base_open() NULL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW:
<br>
<p>- I think &quot;none&quot; is a slightly better word than &quot;null&quot; for this value;  
<br>
&quot;none&quot; implies that you don't open anything, whereas &quot;null&quot; could be a  
<br>
specific component (as it is/was in some frameworks).
<br>
<p>- Whatever word we decide on will need to become a reserved component  
<br>
name (i.e., no components will be able to use that as their name).  We  
<br>
should adjust autogen.sh and friends to ensure that no component has  
<br>
this name (not difficult -- just make autogen.sh abort if it finds a  
<br>
component of this name).
<br>
<p>- Is this value supposed to be accessible/usable by users, or is it  
<br>
meant to only be used internally?
<br>
<p>--&gt; If intended to be used by users, I marginally prefer a single,  
<br>
lower case, simple word (e.g., &quot;none&quot;) vs. a caps word -- it's easier  
<br>
to type and is consistent with our other values.  I recognize that we  
<br>
don't want users to use the value by accident, and making it all caps  
<br>
makes it stand out, but I think the consistency issues are more  
<br>
important.
<br>
<p>--&gt; If not intended to be used by users (i.e., it's an internal  
<br>
mechanism only), is there a reason why we're not using a zero-length  
<br>
string (e.g., mpirun --mca foo &quot;&quot;)?
<br>
<p><p><p>On May 6, 2008, at 2:09 PM, Josh Hursey wrote:
<br>
<p><span class="quotelev1">&gt; What:  Add a MCA-NULL option to open no components in mca_base_open()
</span><br>
<span class="quotelev1">&gt; Why:   Sometimes we do not want to open or select any components of  
</span><br>
<span class="quotelev1">&gt; a framework.
</span><br>
<span class="quotelev1">&gt; Where: patch attached for current trunk.
</span><br>
<span class="quotelev1">&gt; When:  Needs further discussion.
</span><br>
<span class="quotelev1">&gt; Timeout: Unknown. [May 13, 2008 (After teleconf)?]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Short Version:
</span><br>
<span class="quotelev1">&gt; --------------
</span><br>
<span class="quotelev1">&gt; This RFC is intended to continue discussion on the thread started  
</span><br>
<span class="quotelev1">&gt; here:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2008/05/3793.php">http://www.open-mpi.org/community/lists/devel/2008/05/3793.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Discussion should occur on list, but maybe try to come to some  
</span><br>
<span class="quotelev1">&gt; settlement on this RFC in the next week or two.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Longer Version:
</span><br>
<span class="quotelev1">&gt; ---------------
</span><br>
<span class="quotelev1">&gt; Currently there is no way to express to the MCA system that  
</span><br>
<span class="quotelev1">&gt; absolutely no components of a framework are needed and therefore  
</span><br>
<span class="quotelev1">&gt; nothing should be opened. The addition of a sentinel value is needed  
</span><br>
<span class="quotelev1">&gt; to explicitly express this intention. It was suggested that if a  
</span><br>
<span class="quotelev1">&gt; 'MCA-NULL' value is passed as an argument for a framework then this  
</span><br>
<span class="quotelev1">&gt; should be taken to indicate such an intention.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;mca-null.diff&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="3858.php">Josh Hursey: "Re: [OMPI devel] [RFC] mca_base_open() NULL"</a>
<li><strong>Previous message:</strong> <a href="3856.php">Jeff Squyres: "Re: [OMPI devel] [OMPI users] OpenMPI Internals &amp; Static-Analysis."</a>
<li><strong>In reply to:</strong> <a href="3845.php">Josh Hursey: "[OMPI devel] [RFC] mca_base_open() NULL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3858.php">Josh Hursey: "Re: [OMPI devel] [RFC] mca_base_open() NULL"</a>
<li><strong>Reply:</strong> <a href="3858.php">Josh Hursey: "Re: [OMPI devel] [RFC] mca_base_open() NULL"</a>
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
