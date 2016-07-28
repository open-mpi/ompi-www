<?
$subject_val = "Re: [OMPI users] Setting RPATH for Open MPI libraries";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Nov 11 16:18:40 2012" -->
<!-- isoreceived="20121111211840" -->
<!-- sent="Sun, 11 Nov 2012 22:18:29 +0100" -->
<!-- isosent="20121111211829" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Setting RPATH for Open MPI libraries" -->
<!-- id="FA55EAA3-E5AC-4736-849D-807284345156_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAM9tzSkiZA+jsiv37cT==dp-LXKf+JF0ow3BKeZTUA6+kBW8VQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-11 16:18:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20702.php">Reuti: "Re: [OMPI users] Setting RPATH for Open MPI libraries"</a>
<li><strong>Previous message:</strong> <a href="20700.php">Reuti: "Re: [OMPI users] Where to start with MPI on OSX?"</a>
<li><strong>In reply to:</strong> <a href="20636.php">Jed Brown: "Re: [OMPI users] Setting RPATH for Open MPI libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20703.php">Iliev, Hristo: "Re: [OMPI users] Setting RPATH for Open MPI libraries"</a>
<li><strong>Reply:</strong> <a href="20703.php">Iliev, Hristo: "Re: [OMPI users] Setting RPATH for Open MPI libraries"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 05.11.2012 um 04:41 schrieb Jed Brown:
<br>
<p><span class="quotelev1">&gt; Jeff, we are averaging a half dozen support threads per week on PETSc lists/email caused by lack of RPATH in Open MPI for non-standard install locations. Can you either make the necessary environment modification more visible for novice users or implement the RPATH option?
</span><br>
<p>For curiosity: on Mac OS X it finds the necessary library automatically, by which setting is this achieved? `otool -L &lt;file&gt;` lists the correct one, which was used during compilation.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Sep 12, 2012 at 1:52 PM, Jed Brown &lt;jed_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; On Wed, Sep 12, 2012 at 10:20 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; We have a long-standing philosophy that OMPI should add the bare minimum number of preprocessor/compiler/linker flags to its wrapper compilers, and let the user/administrator customize from there.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In general, I agree with that philosophy.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That being said, a looong time ago, I started a patch to add a --with-rpath option to configure, but never finished it.  :-\  I can try to get it back on my to-do list.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That would be perfect.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For the moment, you might want to try the configure --enable-mpirun-prefix-by-default option, too.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The downside is that we tend not to bother with the mpirun for configure and it's a little annoying to &quot;mpirun ldd&quot; when hunting for other problems (e.g. a missing shared lib unrelated to Open MPI).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20702.php">Reuti: "Re: [OMPI users] Setting RPATH for Open MPI libraries"</a>
<li><strong>Previous message:</strong> <a href="20700.php">Reuti: "Re: [OMPI users] Where to start with MPI on OSX?"</a>
<li><strong>In reply to:</strong> <a href="20636.php">Jed Brown: "Re: [OMPI users] Setting RPATH for Open MPI libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20703.php">Iliev, Hristo: "Re: [OMPI users] Setting RPATH for Open MPI libraries"</a>
<li><strong>Reply:</strong> <a href="20703.php">Iliev, Hristo: "Re: [OMPI users] Setting RPATH for Open MPI libraries"</a>
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
