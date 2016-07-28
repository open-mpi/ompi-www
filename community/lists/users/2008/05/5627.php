<?
$subject_val = "Re: [OMPI users] crash with mpiBLAST";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  7 16:27:37 2008" -->
<!-- isoreceived="20080507202737" -->
<!-- sent="Wed, 7 May 2008 16:27:26 -0400" -->
<!-- isosent="20080507202726" -->
<!-- name="Tim Mattox" -->
<!-- email="timattox_at_[hidden]" -->
<!-- subject="Re: [OMPI users] crash with mpiBLAST" -->
<!-- id="ea86ce220805071327i41cd7284g523443eb370668d7_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4821B7DB.8050805_at_scalableinformatics.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] crash with mpiBLAST<br>
<strong>From:</strong> Tim Mattox (<em>timattox_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-07 16:27:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5628.php">Aurélien Bouteiller: "Re: [OMPI users] A simple mpi code hangs at MPI_Init?"</a>
<li><strong>Previous message:</strong> <a href="5626.php">Sang Chul Choi: "[OMPI users] A simple mpi code hangs at MPI_Init?"</a>
<li><strong>In reply to:</strong> <a href="5618.php">Joe Landman: "[OMPI users] crash with mpiBLAST"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Joe,
<br>
Hopefully we can help you figure out what is going wrong with mpiBLAST
<br>
and Open MPI.  For starters, have a look here for what information would
<br>
help us get to the root of the problem:
<br>
<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p>Reconfiguring (and recompiling) Open MPI with --enable-debug would give
<br>
us more information, but you might as well send us the call stack first that you
<br>
already have.
<br>
<p>On Wed, May 7, 2008 at 10:08 AM, Joe Landman
<br>
&lt;landman_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi Open-MPI team:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    I am working on a build of mpiBLAST 1.5.0-pio, and found that the
</span><br>
<span class="quotelev1">&gt;  code crashes immediately after launch with a seg fault.  I used Open-MPI
</span><br>
<span class="quotelev1">&gt;  1.2.6 built from the tarball (with just a --prefix directive).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    I did just try the code with MPICH 1.2.7p1, and it runs fine.   What
</span><br>
<span class="quotelev1">&gt;  steps should I try to help isolate the issue in Open-MPI?  Would it help
</span><br>
<span class="quotelev1">&gt;  to provide the call stack reported by Open-MPI on crash?  Do you need
</span><br>
<span class="quotelev1">&gt;  rebuild of application and Open-MPI with the -g option (for debugging
</span><br>
<span class="quotelev1">&gt;  symbols)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Joe
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  --
</span><br>
<span class="quotelev1">&gt;  Joseph Landman, Ph.D
</span><br>
<span class="quotelev1">&gt;  Founder and CEO
</span><br>
<span class="quotelev1">&gt;  Scalable Informatics LLC,
</span><br>
<span class="quotelev1">&gt;  email: landman_at_[hidden]
</span><br>
<span class="quotelev1">&gt;  web  : <a href="http://www.scalableinformatics.com">http://www.scalableinformatics.com</a>
</span><br>
<span class="quotelev1">&gt;         <a href="http://jackrabbit.scalableinformatics.com">http://jackrabbit.scalableinformatics.com</a>
</span><br>
<span class="quotelev1">&gt;  phone: +1 734 786 8423
</span><br>
<span class="quotelev1">&gt;  fax  : +1 866 888 3112
</span><br>
<span class="quotelev1">&gt;  cell : +1 734 612 4615
</span><br>
<span class="quotelev1">&gt;  _______________________________________________
</span><br>
<span class="quotelev1">&gt;  users mailing list
</span><br>
<span class="quotelev1">&gt;  users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;  <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
 tmattox_at_[hidden] || timattox_at_[hidden]
 I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5628.php">Aurélien Bouteiller: "Re: [OMPI users] A simple mpi code hangs at MPI_Init?"</a>
<li><strong>Previous message:</strong> <a href="5626.php">Sang Chul Choi: "[OMPI users] A simple mpi code hangs at MPI_Init?"</a>
<li><strong>In reply to:</strong> <a href="5618.php">Joe Landman: "[OMPI users] crash with mpiBLAST"</a>
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
