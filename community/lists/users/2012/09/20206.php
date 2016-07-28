<?
$subject_val = "Re: [OMPI users] Setting RPATH for Open MPI libraries";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 12 14:52:39 2012" -->
<!-- isoreceived="20120912185239" -->
<!-- sent="Wed, 12 Sep 2012 14:52:34 -0400" -->
<!-- isosent="20120912185234" -->
<!-- name="Jed Brown" -->
<!-- email="jed_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Setting RPATH for Open MPI libraries" -->
<!-- id="CAM9tzSk=M48momg8X3FT8QkTEk_hHQL7a8VXgBo6Zpq1__=g+g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="F1C78253-2FA7-4779-AA75-EF7FE05B3023_at_cisco.com" -->
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
<strong>Date:</strong> 2012-09-12 14:52:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20207.php">Jeff Squyres: "Re: [OMPI users] [omx-devel] Open-mx issue with ompi 1.6.1"</a>
<li><strong>Previous message:</strong> <a href="20205.php">Ralph Castain: "Re: [OMPI users] MPI_Spawn and process allocation policy"</a>
<li><strong>In reply to:</strong> <a href="20198.php">Jeff Squyres: "Re: [OMPI users] Setting RPATH for Open MPI libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/11/20636.php">Jed Brown: "Re: [OMPI users] Setting RPATH for Open MPI libraries"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/11/20636.php">Jed Brown: "Re: [OMPI users] Setting RPATH for Open MPI libraries"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Sep 12, 2012 at 10:20 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; We have a long-standing philosophy that OMPI should add the bare minimum
</span><br>
<span class="quotelev1">&gt; number of preprocessor/compiler/linker flags to its wrapper compilers, and
</span><br>
<span class="quotelev1">&gt; let the user/administrator customize from there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>In general, I agree with that philosophy.
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That being said, a looong time ago, I started a patch to add a
</span><br>
<span class="quotelev1">&gt; --with-rpath option to configure, but never finished it.  :-\  I can try to
</span><br>
<span class="quotelev1">&gt; get it back on my to-do list.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>That would be perfect.
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For the moment, you might want to try the configure
</span><br>
<span class="quotelev1">&gt; --enable-mpirun-prefix-by-default option, too.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>The downside is that we tend not to bother with the mpirun for configure
<br>
and it's a little annoying to &quot;mpirun ldd&quot; when hunting for other problems
<br>
(e.g. a missing shared lib unrelated to Open MPI).
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20206/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20207.php">Jeff Squyres: "Re: [OMPI users] [omx-devel] Open-mx issue with ompi 1.6.1"</a>
<li><strong>Previous message:</strong> <a href="20205.php">Ralph Castain: "Re: [OMPI users] MPI_Spawn and process allocation policy"</a>
<li><strong>In reply to:</strong> <a href="20198.php">Jeff Squyres: "Re: [OMPI users] Setting RPATH for Open MPI libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/11/20636.php">Jed Brown: "Re: [OMPI users] Setting RPATH for Open MPI libraries"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/11/20636.php">Jed Brown: "Re: [OMPI users] Setting RPATH for Open MPI libraries"</a>
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
