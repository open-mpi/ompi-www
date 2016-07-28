<?
$subject_val = "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 23 02:04:26 2011" -->
<!-- isoreceived="20110923060426" -->
<!-- sent="Fri, 23 Sep 2011 11:34:22 +0530" -->
<!-- isosent="20110923060422" -->
<!-- name="Uday Kumar Reddy B" -->
<!-- email="udayreddy_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi -cc=&amp;lt;compiler name&amp;gt; option" -->
<!-- id="CALA1MBKoNR-KrGhPNLBN0QnPjFzBpJX4uZx40tkxF71ZOYDOqw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="085D069D-E7DC-455C-B2A2-6BC80BA13133_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option<br>
<strong>From:</strong> Uday Kumar Reddy B (<em>udayreddy_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-23 02:04:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17404.php">Paul Kapinos: "[OMPI users] problems with Intel 12.x compilers and OpenMPI (1.4.3)"</a>
<li><strong>Previous message:</strong> <a href="17402.php">Martin Siegert: "[OMPI users] PATH settings"</a>
<li><strong>In reply to:</strong> <a href="17399.php">Jeff Squyres: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17405.php">Jeff Squyres: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<li><strong>Reply:</strong> <a href="17405.php">Jeff Squyres: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Sep 23, 2011 at 2:55 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Sep 22, 2011, at 4:39 PM, Uday Kumar Reddy B wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; More specifically: how is mpicc supposed to know that any given option was intended for mpicc and not the underlying compiler, particularly the ones that it doesn't support?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes, it won't in the general case, but since -cc is accepted by mpich, you can as well assume it is not intended for the underlying compiler. If a user is indeed trying to pass -cc to some unknown compiler, the code is anyway not going to work with MPICH and probably most other MPIs. &#160;In any case, for portability purposes, shouldn't you support -cc?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That would mean that we have to support all the CLI options for MPICH's mpicc. &#160;And they would likewise need to support ours. &#160;And we should also support Platform MPI's mpicc options. &#160;And ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It's a slippery slope, and we're not really willing to go down it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The real problem is that wrapper compilers are not standardized. &#160;Cray doesn't have one, for example (IIRC). &#160;And IBM AIX MPI doesn't either (also IIRC -- could be wrong on both of these). &#160;Users are unfortunately left in a lurch, and have to work around these issues in their application build systems. &#160;:-(
</span><br>
<p>Okay. BTW, mpicc only has 7 cmdline options, and you probably already
<br>
support some of them (-show), and they are all provided for good
<br>
reason.   And we all know that MPI is all about portability...
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Or one could end up with distributions that compile on some or don't on another. If you indeed would not like to support it, it's better to check for -cc and throw an error than compile with a compiler user didn't intend to - the latter may go unnoticed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What's the advantage to having mpicc throw the error vs. the underlying compiler?
</span><br>
<p>Sorry, I was confused; there isn't.
<br>
<p>-- Uday
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17404.php">Paul Kapinos: "[OMPI users] problems with Intel 12.x compilers and OpenMPI (1.4.3)"</a>
<li><strong>Previous message:</strong> <a href="17402.php">Martin Siegert: "[OMPI users] PATH settings"</a>
<li><strong>In reply to:</strong> <a href="17399.php">Jeff Squyres: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17405.php">Jeff Squyres: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<li><strong>Reply:</strong> <a href="17405.php">Jeff Squyres: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
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
