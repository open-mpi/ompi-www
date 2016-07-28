<?
$subject_val = "Re: [OMPI devel] The&quot; Missing Symbol&quot; issue and OpenMPI on NetBSD";
include("../../include/msg-header.inc");
?>
<!-- received="Sun May 16 17:56:59 2010" -->
<!-- isoreceived="20100516215659" -->
<!-- sent="Mon, 17 May 2010 09:56:51 +1200" -->
<!-- isosent="20100516215651" -->
<!-- name="Kevin.Buckley_at_[hidden]" -->
<!-- email="Kevin.Buckley_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] The&amp;quot; Missing Symbol&amp;quot; issue and OpenMPI on NetBSD" -->
<!-- id="0c65f3bed41f226054d1eb3654fe097a.squirrel_at_mail.ecs.vuw.ac.nz" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="21E7C156-8815-49AA-8729-7F81A8EC5ECD_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] The&quot; Missing Symbol&quot; issue and OpenMPI on NetBSD<br>
<strong>From:</strong> <a href="mailto:Kevin.Buckley_at_[hidden]?Subject=Re:%20[OMPI%20devel]%20The&amp;amp;quot;%20Missing%20Symbol&amp;amp;quot;%20issue%20and%20OpenMPI%20on%20NetBSD"><em>Kevin.Buckley_at_[hidden]</em></a><br>
<strong>Date:</strong> 2010-05-16 17:56:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7939.php">Christopher Samuel: "Re: [OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed"</a>
<li><strong>Previous message:</strong> <a href="7937.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove all other paffinity components"</a>
<li><strong>In reply to:</strong> <a href="7931.php">Jeff Squyres: "Re: [OMPI devel] The&quot; Missing Symbol&quot; issue and OpenMPI on NetBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7944.php">Jeff Squyres: "Re: [OMPI devel] The&quot; Missing Symbol&quot; issue and OpenMPI on NetBSD"</a>
<li><strong>Reply:</strong> <a href="7944.php">Jeff Squyres: "Re: [OMPI devel] The&quot; Missing Symbol&quot; issue and OpenMPI on NetBSD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p><span class="quotelev1">&gt; So the error message is at least *somewhat* better than a totally
</span><br>
<span class="quotelev1">&gt; misleading &quot;file not found&quot; message -- but it still only speculates
</span><br>
<span class="quotelev1">&gt; on the real reason that libltdl failed to load the DSO.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. <a href="https://svn.open-mpi.org/trac/ompi/changeset/22806">https://svn.open-mpi.org/trac/ompi/changeset/22806</a> put in an
</span><br>
<span class="quotelev1">&gt; OMPI-specific change to libltdl that avoids the incorrect error message
</span><br>
<span class="quotelev1">&gt; altogether.  So now OMPI should print out the *real* reason libltdl
</span><br>
<span class="quotelev1">&gt; failed to load the DSO.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It does not look like this patch made it over into the v1.4 series;
</span><br>
<span class="quotelev1">&gt; it is awaiting review before it moves to the v1.5 branch
</span><br>
<span class="quotelev1">&gt; (<a href="https://svn.open-mpi.org/trac/ompi/ticket/2337">https://svn.open-mpi.org/trac/ompi/ticket/2337</a>).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope that all made sense!
</span><br>
<p>Great insight. You'll appreciate I have some idea as to what's going on
<br>
but not the completed jigsaw view as to how all the pieces I find fit
<br>
into the whole, so thank you.
<br>
<p>Not sure it explains away the inabaility of my libtool test program to
<br>
open the shared-library in question but it certainly moves things
<br>
forwards.
<br>
<p><span class="quotelev1">&gt; Have you tried building Open MPI with the --disable-dlopen configure flag?
</span><br>
<span class="quotelev1">&gt;  This will slurp all of OMPI's DSOs up into libmpi.so -- so there's no
</span><br>
<span class="quotelev1">&gt; dlopening at run-time.  Hence, your app (R) can dlopen libmpi.so, but then
</span><br>
<span class="quotelev1">&gt; libmpi.so doesn't dlopen anything else -- all of OMPI's plugins are
</span><br>
<span class="quotelev1">&gt; physically located in libmpi.so.
</span><br>
<p>Given your reasoning, that's gotta be worth a shot: wilco.
<br>
<p>Thanks once again for your time on this,
<br>
Kevin
<br>
<p><pre>
-- 
Kevin M. Buckley                                  Room:  CO327
School of Engineering and                         Phone: +64 4 463 5971
 Computer Science
Victoria University of Wellington
New Zealand
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7939.php">Christopher Samuel: "Re: [OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed"</a>
<li><strong>Previous message:</strong> <a href="7937.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove all other paffinity components"</a>
<li><strong>In reply to:</strong> <a href="7931.php">Jeff Squyres: "Re: [OMPI devel] The&quot; Missing Symbol&quot; issue and OpenMPI on NetBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7944.php">Jeff Squyres: "Re: [OMPI devel] The&quot; Missing Symbol&quot; issue and OpenMPI on NetBSD"</a>
<li><strong>Reply:</strong> <a href="7944.php">Jeff Squyres: "Re: [OMPI devel] The&quot; Missing Symbol&quot; issue and OpenMPI on NetBSD"</a>
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
