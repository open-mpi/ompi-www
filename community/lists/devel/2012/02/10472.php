<?
$subject_val = "Re: [OMPI devel] Building otfcompress with binutils-gold fails";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 17 06:14:55 2012" -->
<!-- isoreceived="20120217111455" -->
<!-- sent="Fri, 17 Feb 2012 06:14:50 -0500" -->
<!-- isosent="20120217111450" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Building otfcompress with binutils-gold fails" -->
<!-- id="1BD9C2F7-0F48-46DA-9855-3CE63A9CD953_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CA+Y5xYcoEd0DUiN4+DZ=mXG3R=WLnDEDQjFefichT_wPBO6n8Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Building otfcompress with binutils-gold fails<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-17 06:14:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10473.php">nadia.derbey_at_[hidden]: "Re: [OMPI devel] btl/openib: get_ib_dev_distance	doesn't	see	processes as bound if the job has been launched by srun"</a>
<li><strong>Previous message:</strong> <a href="10471.php">Paul Hargrove: "Re: [OMPI devel] trunk build failure on NetBSD-5.0"</a>
<li><strong>In reply to:</strong> <a href="10433.php">Dmitri Gribenko: "Re: [OMPI devel] Building otfcompress with binutils-gold fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10479.php">Dmitri Gribenko: "Re: [OMPI devel] Building otfcompress with binutils-gold fails"</a>
<li><strong>Reply:</strong> <a href="10479.php">Dmitri Gribenko: "Re: [OMPI devel] Building otfcompress with binutils-gold fails"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Are you compiling a nightly 1.7/trunk tarball, or an SVN checkout where you ran autogen.pl?
<br>
<p>It strikes me that if binutils-gold is different enough, then Libtool must have been updated to match it.
<br>
<p>The 1.7 nightly tarballs are built with the latest Libtool (2.4.2).  If that isn't doing the Right Things, that would be a bit surprising.
<br>
<p><p><p>On Feb 15, 2012, at 1:54 PM, Dmitri Gribenko wrote:
<br>
<p><span class="quotelev1">&gt; On Wed, Feb 15, 2012 at 8:08 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; What is &quot;gold&quot;?  Can you send all the information listed here (e.g., I don't know what version of Open MPI you're reporting about):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; gold is the new binutils linker.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OS: Debian sid amd64 with g++-4.6, binutils-gold packages installed
</span><br>
<span class="quotelev1">&gt; OpenMPI: latest svn trunk
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dmitri
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; main(i,j){for(i=2;;i++){for(j=2;j&lt;i;j++){if(!(i%j)){j=0;break;}}if
</span><br>
<span class="quotelev1">&gt; (j){printf(&quot;%d\n&quot;,i);}}} /*Dmitri Gribenko &lt;gribozavr_at_[hidden]&gt;*/
</span><br>
<span class="quotelev1">&gt; &lt;ompi-output.tar.bz2&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="10473.php">nadia.derbey_at_[hidden]: "Re: [OMPI devel] btl/openib: get_ib_dev_distance	doesn't	see	processes as bound if the job has been launched by srun"</a>
<li><strong>Previous message:</strong> <a href="10471.php">Paul Hargrove: "Re: [OMPI devel] trunk build failure on NetBSD-5.0"</a>
<li><strong>In reply to:</strong> <a href="10433.php">Dmitri Gribenko: "Re: [OMPI devel] Building otfcompress with binutils-gold fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10479.php">Dmitri Gribenko: "Re: [OMPI devel] Building otfcompress with binutils-gold fails"</a>
<li><strong>Reply:</strong> <a href="10479.php">Dmitri Gribenko: "Re: [OMPI devel] Building otfcompress with binutils-gold fails"</a>
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
