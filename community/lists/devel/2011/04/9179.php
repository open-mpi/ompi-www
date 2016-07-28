<?
$subject_val = "Re: [OMPI devel] Exit status";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 14 09:43:11 2011" -->
<!-- isoreceived="20110414134311" -->
<!-- sent="Thu, 14 Apr 2011 07:43:05 -0600" -->
<!-- isosent="20110414134305" -->
<!-- name="Ken Lloyd" -->
<!-- email="kenneth.lloyd_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Exit status" -->
<!-- id="1302788585.16629.20.camel_at_localhost.localdomain" -->
<!-- charset="utf-8" -->
<!-- inreplyto="Prayer.1.3.3.1104141431440.4613_at_hermes-2.csi.cam.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Exit status<br>
<strong>From:</strong> Ken Lloyd (<em>kenneth.lloyd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-14 09:43:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9180.php">Jeff Squyres: "Re: [OMPI devel] Exit status"</a>
<li><strong>Previous message:</strong> <a href="9178.php">N.M. Maclaren: "Re: [OMPI devel] Exit status"</a>
<li><strong>In reply to:</strong> <a href="9178.php">N.M. Maclaren: "Re: [OMPI devel] Exit status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9180.php">Jeff Squyres: "Re: [OMPI devel] Exit status"</a>
<li><strong>Reply:</strong> <a href="9180.php">Jeff Squyres: "Re: [OMPI devel] Exit status"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Point well made, Nick. In other words, irrespective of OS or language,
<br>
are we citing the need for &quot;application correcting code&quot; from OpenMPI,
<br>
(relocate a/o retry) similar to ECC in memory? 
<br>
<p>Ken
<br>
<p>On Thu, 2011-04-14 at 14:31 +0100, N.M. Maclaren wrote:
<br>
<p><span class="quotelev1">&gt; On Apr 14 2011, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ...  It's hopeless, and whatever you do will be wrong for many
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; people.  ...
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I think that sums it up pretty well.  :-)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; It does seem a little strange that the scenario you describe somewhat 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; implies that one process is calling MPI_Finalize loooong before the 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; others do. Specifically, the user is concerned with tying up resources 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; after one process has called Finalize -- which implies that the others 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; may continue on for a while. It's not invalid, of course, but it is a 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; little unusual.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm finding it more common than we thought. Note that I didn't say that 
</span><br>
<span class="quotelev2">&gt; &gt; one process called MPI_Finalize before the others. In this case, they 
</span><br>
<span class="quotelev2">&gt; &gt; call it fairly close together, but the individual processes continue 
</span><br>
<span class="quotelev2">&gt; &gt; running for quite some time, or until they determine that something is 
</span><br>
<span class="quotelev2">&gt; &gt; wrong and exit with non-zero status.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Nobody is denying that it is common.  Now, what happens when you encounter
</span><br>
<span class="quotelev1">&gt; a language or compiler that uses return codes for mere warnings (e.g.
</span><br>
<span class="quotelev1">&gt; ignored IEEE 754 flags, as stated to be desirable by LIA-1)?  Bang!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Remember that C is not the universe and many languages use MPI via the
</span><br>
<span class="quotelev1">&gt; C interface, but do not let C control their model.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Nick Maclaren.
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
<p><p>=====================
<br>
Kenneth A. Lloyd
<br>
CEO - Director of Systems Science
<br>
Watt Systems Technologies Inc.
<br>
www.wattsys.com
<br>
kenneth.lloyd_at_[hidden] 
<br>
<p>This e-mail is covered by the Electronic Communications Privacy Act, 18
<br>
U.S.C. 2510-2521 and is intended only for the addressee named above. It
<br>
may contain privileged or confidential information. If you are not the
<br>
addressee you must not copy, distribute, disclose or use any of the
<br>
information in it. If you have received it in error please delete it and
<br>
immediately notify the sender.
<br>
<p><p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9179/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9180.php">Jeff Squyres: "Re: [OMPI devel] Exit status"</a>
<li><strong>Previous message:</strong> <a href="9178.php">N.M. Maclaren: "Re: [OMPI devel] Exit status"</a>
<li><strong>In reply to:</strong> <a href="9178.php">N.M. Maclaren: "Re: [OMPI devel] Exit status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9180.php">Jeff Squyres: "Re: [OMPI devel] Exit status"</a>
<li><strong>Reply:</strong> <a href="9180.php">Jeff Squyres: "Re: [OMPI devel] Exit status"</a>
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
