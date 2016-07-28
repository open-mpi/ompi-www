<?
$subject_val = "Re: [OMPI devel] Exit status";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 14 09:47:02 2011" -->
<!-- isoreceived="20110414134702" -->
<!-- sent="Thu, 14 Apr 2011 09:46:56 -0400" -->
<!-- isosent="20110414134656" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Exit status" -->
<!-- id="E73678D6-9C89-4342-8BE0-338CA73ECD26_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1302788585.16629.20.camel_at_localhost.localdomain" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-14 09:46:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9181.php">Shamis, Pavel: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory	directly"</a>
<li><strong>Previous message:</strong> <a href="9179.php">Ken Lloyd: "Re: [OMPI devel] Exit status"</a>
<li><strong>In reply to:</strong> <a href="9179.php">Ken Lloyd: "Re: [OMPI devel] Exit status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9182.php">N.M. Maclaren: "Re: [OMPI devel] Exit status"</a>
<li><strong>Reply:</strong> <a href="9182.php">N.M. Maclaren: "Re: [OMPI devel] Exit status"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think Ralph's point is that OMPI is providing the run-time environment for the application, and it would probably behoove us to support both kinds of behaviors since there are obviously people in both camps out there.  
<br>
<p>It's pretty easy to add a non-default MCA param / orterun CLI option to say &quot;abort the job if any of them exit with a non-zero status.&quot;
<br>
<p><p>On Apr 14, 2011, at 9:43 AM, Ken Lloyd wrote:
<br>
<p><span class="quotelev1">&gt; Point well made, Nick. In other words, irrespective of OS or language, are we citing the need for &quot;application correcting code&quot; from OpenMPI, (relocate a/o retry) similar to ECC in memory? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ken
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, 2011-04-14 at 14:31 +0100, N.M. Maclaren wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 14 2011, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; ...  It's hopeless, and whatever you do will be wrong for many
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; people.  ...
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; I think that sums it up pretty well.  :-)
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; It does seem a little strange that the scenario you describe somewhat 
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; implies that one process is calling MPI_Finalize loooong before the 
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; others do. Specifically, the user is concerned with tying up resources 
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; after one process has called Finalize -- which implies that the others 
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; may continue on for a while. It's not invalid, of course, but it is a 
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; little unusual.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I'm finding it more common than we thought. Note that I didn't say that 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; one process called MPI_Finalize before the others. In this case, they 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; call it fairly close together, but the individual processes continue 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; running for quite some time, or until they determine that something is 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; wrong and exit with non-zero status.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Nobody is denying that it is common.  Now, what happens when you encounter
</span><br>
<span class="quotelev2">&gt;&gt; a language or compiler that uses return codes for mere warnings (e.g.
</span><br>
<span class="quotelev2">&gt;&gt; ignored IEEE 754 flags, as stated to be desirable by LIA-1)?  Bang!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Remember that C is not the universe and many languages use MPI via the
</span><br>
<span class="quotelev2">&gt;&gt; C interface, but do not let C control their model.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Nick Maclaren.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; =====================
</span><br>
<span class="quotelev1">&gt; Kenneth A. Lloyd
</span><br>
<span class="quotelev1">&gt; CEO - Director of Systems Science
</span><br>
<span class="quotelev1">&gt; Watt Systems Technologies Inc.
</span><br>
<span class="quotelev1">&gt; www.wattsys.com
</span><br>
<span class="quotelev1">&gt; kenneth.lloyd_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This e-mail is covered by the Electronic Communications Privacy Act, 18 U.S.C. 2510-2521 and is intended only for the addressee named above. It may contain privileged or confidential information. If you are not the addressee you must not copy, distribute, disclose or use any of the information in it. If you have received it in error please delete it and immediately notify the sender.
</span><br>
<span class="quotelev1">&gt; 
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9181.php">Shamis, Pavel: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory	directly"</a>
<li><strong>Previous message:</strong> <a href="9179.php">Ken Lloyd: "Re: [OMPI devel] Exit status"</a>
<li><strong>In reply to:</strong> <a href="9179.php">Ken Lloyd: "Re: [OMPI devel] Exit status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9182.php">N.M. Maclaren: "Re: [OMPI devel] Exit status"</a>
<li><strong>Reply:</strong> <a href="9182.php">N.M. Maclaren: "Re: [OMPI devel] Exit status"</a>
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
