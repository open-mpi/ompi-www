<?
$subject_val = "Re: [OMPI users] Setting RPATH for Open MPI libraries";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 20 10:57:54 2012" -->
<!-- isoreceived="20121120155754" -->
<!-- sent="Tue, 20 Nov 2012 10:57:49 -0500" -->
<!-- isosent="20121120155749" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Setting RPATH for Open MPI libraries" -->
<!-- id="10E9FEFF-6962-44B6-9ABF-A4245990167A_at_cisco.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-20 10:57:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20749.php">Jakub Nowacki: "[OMPI users] Multiple RPM build fails"</a>
<li><strong>Previous message:</strong> <a href="20747.php">Jakub Nowacki: "[OMPI users] Building multiple RPM error"</a>
<li><strong>In reply to:</strong> <a href="20636.php">Jed Brown: "Re: [OMPI users] Setting RPATH for Open MPI libraries"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have just uploaded a patch to a long-existing ticket:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/376">https://svn.open-mpi.org/trac/ompi/ticket/376</a>
<br>
<p>The bitbucket with this work is here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://bitbucket.org/jsquyres/ompi-rpath/changesets">https://bitbucket.org/jsquyres/ompi-rpath/changesets</a>
<br>
<p>I've put the wrapper rpath flags issue on the agenda for the December dev meeting.
<br>
<p><p>On Nov 4, 2012, at 10:41 PM, Jed Brown wrote:
<br>
<p><span class="quotelev1">&gt; Jeff, we are averaging a half dozen support threads per week on PETSc lists/email caused by lack of RPATH in Open MPI for non-standard install locations. Can you either make the necessary environment modification more visible for novice users or implement the RPATH option?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20749.php">Jakub Nowacki: "[OMPI users] Multiple RPM build fails"</a>
<li><strong>Previous message:</strong> <a href="20747.php">Jakub Nowacki: "[OMPI users] Building multiple RPM error"</a>
<li><strong>In reply to:</strong> <a href="20636.php">Jed Brown: "Re: [OMPI users] Setting RPATH for Open MPI libraries"</a>
<!-- nextthread="start" -->
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
