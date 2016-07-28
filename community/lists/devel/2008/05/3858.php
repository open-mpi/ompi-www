<?
$subject_val = "Re: [OMPI devel] [RFC] mca_base_open() NULL";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  8 08:06:21 2008" -->
<!-- isoreceived="20080508120621" -->
<!-- sent="Thu, 8 May 2008 08:06:17 -0400" -->
<!-- isosent="20080508120617" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [RFC] mca_base_open() NULL" -->
<!-- id="DC577975-34FF-4370-A2E2-272517E3A351_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="AF8A43C7-B0CE-4981-B34E-56C5FA1155A5_at_cisco.com" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-08 08:06:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3859.php">Jeff Squyres: "Re: [OMPI devel] [RFC] mca_base_open() NULL"</a>
<li><strong>Previous message:</strong> <a href="3857.php">Jeff Squyres: "Re: [OMPI devel] [RFC] mca_base_open() NULL"</a>
<li><strong>In reply to:</strong> <a href="3857.php">Jeff Squyres: "Re: [OMPI devel] [RFC] mca_base_open() NULL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3859.php">Jeff Squyres: "Re: [OMPI devel] [RFC] mca_base_open() NULL"</a>
<li><strong>Reply:</strong> <a href="3859.php">Jeff Squyres: "Re: [OMPI devel] [RFC] mca_base_open() NULL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 8, 2008, at 7:50 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; FWIW:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - I think &quot;none&quot; is a slightly better word than &quot;null&quot; for this value;
</span><br>
<span class="quotelev1">&gt; &quot;none&quot; implies that you don't open anything, whereas &quot;null&quot; could be a
</span><br>
<span class="quotelev1">&gt; specific component (as it is/was in some frameworks).
</span><br>
<p>Calling it 'none' sounds fine to me.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Whatever word we decide on will need to become a reserved component
</span><br>
<span class="quotelev1">&gt; name (i.e., no components will be able to use that as their name).  We
</span><br>
<span class="quotelev1">&gt; should adjust autogen.sh and friends to ensure that no component has
</span><br>
<span class="quotelev1">&gt; this name (not difficult -- just make autogen.sh abort if it finds a
</span><br>
<span class="quotelev1">&gt; component of this name).
</span><br>
<p>Good idea.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Is this value supposed to be accessible/usable by users, or is it
</span><br>
<span class="quotelev1">&gt; meant to only be used internally?
</span><br>
<p>I would say it should be used internally. But I don't know what use  
<br>
case Ralph was thinking of with this.
<br>
<p>There is something to be said for being able to add such an option to  
<br>
the .openmpi/mca-params.conf file while testing or to an AMCA file  
<br>
for a particular configuration. So maybe we should expose it. It may  
<br>
able be useful for debugging problems encountered in the wild.
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --&gt; If intended to be used by users, I marginally prefer a single,
</span><br>
<span class="quotelev1">&gt; lower case, simple word (e.g., &quot;none&quot;) vs. a caps word -- it's easier
</span><br>
<span class="quotelev1">&gt; to type and is consistent with our other values.  I recognize that we
</span><br>
<span class="quotelev1">&gt; don't want users to use the value by accident, and making it all caps
</span><br>
<span class="quotelev1">&gt; makes it stand out, but I think the consistency issues are more
</span><br>
<span class="quotelev1">&gt; important.
</span><br>
<p>Keeping it case-consistent with other components is probably a good  
<br>
thing.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --&gt; If not intended to be used by users (i.e., it's an internal
</span><br>
<span class="quotelev1">&gt; mechanism only), is there a reason why we're not using a zero-length
</span><br>
<span class="quotelev1">&gt; string (e.g., mpirun --mca foo &quot;&quot;)?
</span><br>
<p>I think a zero length string might get confusing with the empty  
<br>
string. The empty string is taken to mean auto-select from all  
<br>
available components, which currently cannot be specified on the  
<br>
command line as an -mca option. The 0 length string is close and  
<br>
nearly indistinguishable in an (A)MCA file from a NULL string.
<br>
<p>-- Josh
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 6, 2008, at 2:09 PM, Josh Hursey wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What:  Add a MCA-NULL option to open no components in mca_base_open()
</span><br>
<span class="quotelev2">&gt;&gt; Why:   Sometimes we do not want to open or select any components of
</span><br>
<span class="quotelev2">&gt;&gt; a framework.
</span><br>
<span class="quotelev2">&gt;&gt; Where: patch attached for current trunk.
</span><br>
<span class="quotelev2">&gt;&gt; When:  Needs further discussion.
</span><br>
<span class="quotelev2">&gt;&gt; Timeout: Unknown. [May 13, 2008 (After teleconf)?]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Short Version:
</span><br>
<span class="quotelev2">&gt;&gt; --------------
</span><br>
<span class="quotelev2">&gt;&gt; This RFC is intended to continue discussion on the thread started
</span><br>
<span class="quotelev2">&gt;&gt; here:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2008/05/3793.php">http://www.open-mpi.org/community/lists/devel/2008/05/3793.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Discussion should occur on list, but maybe try to come to some
</span><br>
<span class="quotelev2">&gt;&gt; settlement on this RFC in the next week or two.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Longer Version:
</span><br>
<span class="quotelev2">&gt;&gt; ---------------
</span><br>
<span class="quotelev2">&gt;&gt; Currently there is no way to express to the MCA system that
</span><br>
<span class="quotelev2">&gt;&gt; absolutely no components of a framework are needed and therefore
</span><br>
<span class="quotelev2">&gt;&gt; nothing should be opened. The addition of a sentinel value is needed
</span><br>
<span class="quotelev2">&gt;&gt; to explicitly express this intention. It was suggested that if a
</span><br>
<span class="quotelev2">&gt;&gt; 'MCA-NULL' value is passed as an argument for a framework then this
</span><br>
<span class="quotelev2">&gt;&gt; should be taken to indicate such an intention.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mca-null.diff&gt;
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
<li><strong>Next message:</strong> <a href="3859.php">Jeff Squyres: "Re: [OMPI devel] [RFC] mca_base_open() NULL"</a>
<li><strong>Previous message:</strong> <a href="3857.php">Jeff Squyres: "Re: [OMPI devel] [RFC] mca_base_open() NULL"</a>
<li><strong>In reply to:</strong> <a href="3857.php">Jeff Squyres: "Re: [OMPI devel] [RFC] mca_base_open() NULL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3859.php">Jeff Squyres: "Re: [OMPI devel] [RFC] mca_base_open() NULL"</a>
<li><strong>Reply:</strong> <a href="3859.php">Jeff Squyres: "Re: [OMPI devel] [RFC] mca_base_open() NULL"</a>
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
