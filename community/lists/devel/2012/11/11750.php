<?
$subject_val = "Re: [OMPI devel] About Marshalling and Umarshalling";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  5 10:27:22 2012" -->
<!-- isoreceived="20121105152722" -->
<!-- sent="Mon, 5 Nov 2012 10:27:17 -0500" -->
<!-- isosent="20121105152717" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] About Marshalling and Umarshalling" -->
<!-- id="161A71F9-D698-493A-8C5B-2E10A407CBF5_at_cisco.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="0BD4FE2F-A533-4ADE-9506-CBF5A9322345_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] About Marshalling and Umarshalling<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-05 10:27:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11751.php">N.M. Maclaren: "Re: [OMPI devel] About Marshalling and Umarshalling"</a>
<li><strong>Previous message:</strong> <a href="11749.php">Ralph Castain: "Re: [OMPI devel] About Marshalling and Umarshalling"</a>
<li><strong>In reply to:</strong> <a href="11749.php">Ralph Castain: "Re: [OMPI devel] About Marshalling and Umarshalling"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11751.php">N.M. Maclaren: "Re: [OMPI devel] About Marshalling and Umarshalling"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 5, 2012, at 10:13 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; We adhere to the MPI standard, so we expect the user in such an instance to define a datatype that reflects the structure they are trying to send. We will then do the voodoo to correctly send that data in a heterogeneous environment, and pass the data back (in the defined datatype) to the user on the remote end. They can then put the various items back into their structure.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not sure what you mean by an &quot;ideal style language&quot;. See the MPI standard or our doc page, for example
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/doc/v1.6/man3/MPI_Type_create_struct.3.php">http://www.open-mpi.org/doc/v1.6/man3/MPI_Type_create_struct.3.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; for an explanation of how one defines a datatype.
</span><br>
<p>To expand on that, you might want to see some trivial MPI programs that sent native types around (i.e., no datatype construction required).  For example:
<br>
<p>&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/browser/trunk/examples/ring_c.c">https://svn.open-mpi.org/trac/ompi/browser/trunk/examples/ring_c.c</a>
<br>
<p>Note, too, that MPI implementations (Open MPI included) typically don't &quot;marshall&quot; when they don't have to, meaning that we'll send directly from the user's buffer when possible (e.g., sending contiguous buffers in homogeneous situations).
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11751.php">N.M. Maclaren: "Re: [OMPI devel] About Marshalling and Umarshalling"</a>
<li><strong>Previous message:</strong> <a href="11749.php">Ralph Castain: "Re: [OMPI devel] About Marshalling and Umarshalling"</a>
<li><strong>In reply to:</strong> <a href="11749.php">Ralph Castain: "Re: [OMPI devel] About Marshalling and Umarshalling"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11751.php">N.M. Maclaren: "Re: [OMPI devel] About Marshalling and Umarshalling"</a>
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
