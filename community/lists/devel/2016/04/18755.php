<?
$subject_val = "Re: [OMPI devel] pal_installdirs_base_framework declaration";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr 10 06:44:56 2016" -->
<!-- isoreceived="20160410104456" -->
<!-- sent="Sun, 10 Apr 2016 12:46:19 +0200" -->
<!-- isosent="20160410104619" -->
<!-- name="David Froger" -->
<!-- email="david.froger_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] pal_installdirs_base_framework declaration" -->
<!-- id="146028517989.2085.18110874413513367583_at_mael" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAAkFZ5sihaE_cUWz=8zyP1xudJ4FTjhydB5J33Q=U=jz5Jei7g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] pal_installdirs_base_framework declaration<br>
<strong>From:</strong> David Froger (<em>david.froger_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-10 06:46:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18756.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] IP address to verb interface mapping"</a>
<li><strong>Previous message:</strong> <a href="18754.php">Marco Atzeri: "Re: [OMPI devel] query on atomic operations"</a>
<li><strong>In reply to:</strong> <a href="18753.php">Gilles Gouaillardet: "Re: [OMPI devel] pal_installdirs_base_framework declaration"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Gilles! I was searching with grep, while the variable name is a
<br>
concatenation in the macro...
<br>
<p>Cheers,
<br>
Davdi
<br>
<p>Quoting Gilles Gouaillardet (2016-04-10 02:13:25)
<br>
<span class="quotelev1">&gt; David,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is declared via the MCA_BASE_FRAMEWORK_DECLARE&#194;&#160;macro
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/source/xref/ompi_master/opal/mca/installdirs/base/">https://svn.open-mpi.org/source/xref/ompi_master/opal/mca/installdirs/base/</a>
</span><br>
<span class="quotelev1">&gt; installdirs_base_components.c#175
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sunday, April 10, 2016, David Froger &lt;david.froger_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Looking at Open MPI sources, I can't find where global variable
</span><br>
<span class="quotelev1">&gt;     pal_installdirs_base_framework is declared and initialized?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     (I can see where definitions are).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Especially, I'm look at how
</span><br>
<span class="quotelev1">&gt;     opal_installdirs_base_framework-&gt;framework_static_components[i])-&gt;
</span><br>
<span class="quotelev1">&gt;     install_dirs_data
</span><br>
<span class="quotelev1">&gt;     is initialized.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Thanks for your help,
</span><br>
<span class="quotelev1">&gt;     David
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     devel mailing list
</span><br>
<span class="quotelev1">&gt;     devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;     Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/04/">http://www.open-mpi.org/community/lists/devel/2016/04/</a>
</span><br>
<span class="quotelev1">&gt;     18752.php
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18756.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] IP address to verb interface mapping"</a>
<li><strong>Previous message:</strong> <a href="18754.php">Marco Atzeri: "Re: [OMPI devel] query on atomic operations"</a>
<li><strong>In reply to:</strong> <a href="18753.php">Gilles Gouaillardet: "Re: [OMPI devel] pal_installdirs_base_framework declaration"</a>
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
