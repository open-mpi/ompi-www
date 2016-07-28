<?
$subject_val = "Re: [OMPI users] Pb in configure script when using ifort with &quot;-fast&quot; + link of opal_wrapper";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  3 09:42:13 2009" -->
<!-- isoreceived="20090603134213" -->
<!-- sent="Wed, 3 Jun 2009 07:42:07 -0600" -->
<!-- isosent="20090603134207" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Pb in configure script when using ifort with &amp;quot;-fast&amp;quot; + link of opal_wrapper" -->
<!-- id="71d2d8cc0906030642m3f6c88fewfd126f9862118a3f_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4A267AA5.5060809_at_ens2m.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] Pb in configure script when using ifort with &quot;-fast&quot; + link of opal_wrapper<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-03 09:42:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9512.php">DEVEL Michel: "Re: [OMPI users] Pb in configure script when using ifort with	&quot;-fast&quot; + link of opal_wrapper"</a>
<li><strong>Previous message:</strong> <a href="9510.php">Jeff Squyres: "Re: [OMPI users] top question"</a>
<li><strong>In reply to:</strong> <a href="9509.php">DEVEL Michel: "Re: [OMPI users] Pb in configure script when using ifort with &quot;-fast&quot; +	link of opal_wrapper"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9512.php">DEVEL Michel: "Re: [OMPI users] Pb in configure script when using ifort with	&quot;-fast&quot; + link of opal_wrapper"</a>
<li><strong>Reply:</strong> <a href="9512.php">DEVEL Michel: "Re: [OMPI users] Pb in configure script when using ifort with	&quot;-fast&quot; + link of opal_wrapper"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I assume you re-did the ./configure command? Did you also remember to &quot;make
<br>
clean&quot; before doing your &quot;make all install&quot;?
<br>
<p>Also, I note that your prefix looks really strange - it looks like you are
<br>
trying to install OMPI where the Intel compiler is located? Are you sure you
<br>
want to do that?
<br>
<p><p>On Wed, Jun 3, 2009 at 7:29 AM, DEVEL Michel &lt;Michel.Devel_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  Hi again,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In fact I forgot to put back to '-fast -C' the FCFLAGS variable (from '-O3
</span><br>
<span class="quotelev1">&gt; -C'). There is still an error (many opal_*_* subroutines not found during
</span><br>
<span class="quotelev1">&gt; the ipo step) at the same place, coming from the fact that
</span><br>
<span class="quotelev1">&gt; &quot;ld: attempted static link of dynamic object
</span><br>
<span class="quotelev1">&gt; `../../../opal/.libs/libopen-pal.so'
</span><br>
<span class="quotelev1">&gt; although I put --enable-static in the configure step...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any idea of how to make the static libraries ?
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sincerely yours,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Michel DEVEL
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9511/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9512.php">DEVEL Michel: "Re: [OMPI users] Pb in configure script when using ifort with	&quot;-fast&quot; + link of opal_wrapper"</a>
<li><strong>Previous message:</strong> <a href="9510.php">Jeff Squyres: "Re: [OMPI users] top question"</a>
<li><strong>In reply to:</strong> <a href="9509.php">DEVEL Michel: "Re: [OMPI users] Pb in configure script when using ifort with &quot;-fast&quot; +	link of opal_wrapper"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9512.php">DEVEL Michel: "Re: [OMPI users] Pb in configure script when using ifort with	&quot;-fast&quot; + link of opal_wrapper"</a>
<li><strong>Reply:</strong> <a href="9512.php">DEVEL Michel: "Re: [OMPI users] Pb in configure script when using ifort with	&quot;-fast&quot; + link of opal_wrapper"</a>
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
