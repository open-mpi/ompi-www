<?
$subject_val = "Re: [OMPI users] Setting RPATH for Open MPI libraries";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Nov  4 22:41:26 2012" -->
<!-- isoreceived="20121105034126" -->
<!-- sent="Sun, 4 Nov 2012 21:41:21 -0600" -->
<!-- isosent="20121105034121" -->
<!-- name="Jed Brown" -->
<!-- email="jed_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Setting RPATH for Open MPI libraries" -->
<!-- id="CAM9tzSkiZA+jsiv37cT==dp-LXKf+JF0ow3BKeZTUA6+kBW8VQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAM9tzSk=M48momg8X3FT8QkTEk_hHQL7a8VXgBo6Zpq1__=g+g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Setting RPATH for Open MPI libraries<br>
<strong>From:</strong> Jed Brown (<em>jed_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-04 22:41:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20637.php">huydanlin: "[OMPI users] MPI_Recv operation time"</a>
<li><strong>Previous message:</strong> <a href="20635.php">George Markomanolis: "Re: [OMPI users] Question about oversubscribing"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/09/20206.php">Jed Brown: "Re: [OMPI users] Setting RPATH for Open MPI libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20701.php">Reuti: "Re: [OMPI users] Setting RPATH for Open MPI libraries"</a>
<li><strong>Reply:</strong> <a href="20701.php">Reuti: "Re: [OMPI users] Setting RPATH for Open MPI libraries"</a>
<li><strong>Reply:</strong> <a href="20702.php">Reuti: "Re: [OMPI users] Setting RPATH for Open MPI libraries"</a>
<li><strong>Reply:</strong> <a href="20748.php">Jeff Squyres: "Re: [OMPI users] Setting RPATH for Open MPI libraries"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff, we are averaging a half dozen support threads per week on PETSc
<br>
lists/email caused by lack of RPATH in Open MPI for non-standard install
<br>
locations. Can you either make the necessary environment modification more
<br>
visible for novice users or implement the RPATH option?
<br>
<p><p>On Wed, Sep 12, 2012 at 1:52 PM, Jed Brown &lt;jed_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Wed, Sep 12, 2012 at 10:20 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We have a long-standing philosophy that OMPI should add the bare minimum
</span><br>
<span class="quotelev2">&gt;&gt; number of preprocessor/compiler/linker flags to its wrapper compilers, and
</span><br>
<span class="quotelev2">&gt;&gt; let the user/administrator customize from there.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In general, I agree with that philosophy.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That being said, a looong time ago, I started a patch to add a
</span><br>
<span class="quotelev2">&gt;&gt; --with-rpath option to configure, but never finished it.  :-\  I can try to
</span><br>
<span class="quotelev2">&gt;&gt; get it back on my to-do list.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That would be perfect.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For the moment, you might want to try the configure
</span><br>
<span class="quotelev2">&gt;&gt; --enable-mpirun-prefix-by-default option, too.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The downside is that we tend not to bother with the mpirun for configure
</span><br>
<span class="quotelev1">&gt; and it's a little annoying to &quot;mpirun ldd&quot; when hunting for other problems
</span><br>
<span class="quotelev1">&gt; (e.g. a missing shared lib unrelated to Open MPI).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20636/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20637.php">huydanlin: "[OMPI users] MPI_Recv operation time"</a>
<li><strong>Previous message:</strong> <a href="20635.php">George Markomanolis: "Re: [OMPI users] Question about oversubscribing"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/09/20206.php">Jed Brown: "Re: [OMPI users] Setting RPATH for Open MPI libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20701.php">Reuti: "Re: [OMPI users] Setting RPATH for Open MPI libraries"</a>
<li><strong>Reply:</strong> <a href="20701.php">Reuti: "Re: [OMPI users] Setting RPATH for Open MPI libraries"</a>
<li><strong>Reply:</strong> <a href="20702.php">Reuti: "Re: [OMPI users] Setting RPATH for Open MPI libraries"</a>
<li><strong>Reply:</strong> <a href="20748.php">Jeff Squyres: "Re: [OMPI users] Setting RPATH for Open MPI libraries"</a>
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
