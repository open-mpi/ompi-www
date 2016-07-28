<?
$subject_val = "Re: [OMPI devel] Fix for XLC + libtool issue";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 25 06:35:23 2008" -->
<!-- isoreceived="20080425103523" -->
<!-- sent="Fri, 25 Apr 2008 06:35:12 -0400" -->
<!-- isosent="20080425103512" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fix for XLC + libtool issue" -->
<!-- id="B1D00D66-8E05-46A6-9D43-2555D7BA7E78_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1208884168.7205.33.camel_at_miki" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Fix for XLC + libtool issue<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-25 06:35:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3754.php">Ralf Wildenhues: "Re: [OMPI devel] Fix for XLC + libtool issue"</a>
<li><strong>Previous message:</strong> <a href="3752.php">Jeff Squyres: "[OMPI devel] not merging in cpc3 branch tonight"</a>
<li><strong>In reply to:</strong> <a href="3738.php">S&#233;rgio Durigan J&#250;nior: "[OMPI devel] Fix for XLC + libtool issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3754.php">Ralf Wildenhues: "Re: [OMPI devel] Fix for XLC + libtool issue"</a>
<li><strong>Reply:</strong> <a href="3754.php">Ralf Wildenhues: "Re: [OMPI devel] Fix for XLC + libtool issue"</a>
<li><strong>Reply:</strong> <a href="3759.php">Sérgio Durigan Júnior: "Re: [OMPI devel] Fix for XLC + libtool issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Good to hear that upgrading fixes this problem.
<br>
<p>We actually already have an outstanding ticket to upgrade to 2.2.2 (<a href="https://svn.open-mpi.org/trac/ompi/ticket/1265">https://svn.open-mpi.org/trac/ompi/ticket/1265</a> 
<br>
).  We were following the Libtool development process closely and  
<br>
waiting for at least 2.2.2 (get past 2.2.0).
<br>
<p>This will definitely happen before OMPI v1.3 ships.
<br>
<p>Additionally, Ralf W. recomends to us that we should also upgrade  
<br>
Autoconf to 2.62 or later.  I've been loosely watching that process;  
<br>
2.62 requires a newer GNU m4 which we haven't yet decided if we want  
<br>
to require.
<br>
<p>I don't know if this will be addressed before v1.3 or not.
<br>
<p><p>On Apr 22, 2008, at 1:09 PM, S&#233;rgio Durigan J&#250;nior wrote:
<br>
<p><span class="quotelev1">&gt; Hi everybody,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Taking a look at your website, I could see an issue about compiling  
</span><br>
<span class="quotelev1">&gt; Open
</span><br>
<span class="quotelev1">&gt; MPI shared libs using IBM's XLC compiler + libtool:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=building#build-ibm-compilers">http://www.open-mpi.org/faq/?category=building#build-ibm-compilers</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Well, I think we have the solution for this: upgrading libtool to the
</span><br>
<span class="quotelev1">&gt; latest version seems to work well in this case. So, I'd like to ask  
</span><br>
<span class="quotelev1">&gt; you
</span><br>
<span class="quotelev1">&gt; to upgrade the libtool used by Open MPI to the latest version (2.2.2  
</span><br>
<span class="quotelev1">&gt; or
</span><br>
<span class="quotelev1">&gt; more), and change this FAQ to provide information about how the user  
</span><br>
<span class="quotelev1">&gt; can
</span><br>
<span class="quotelev1">&gt; manually update libtool in older versions of Open MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The instructions for upgrading libtool manually are:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) Get the latest libtool package from
</span><br>
<span class="quotelev1">&gt; <a href="http://www.gnu.org/software/libtool">http://www.gnu.org/software/libtool</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2) Untar, compile and install it
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3) Have a fresh and clean Open MPI source tree
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 4) Inside there, run 'libtoolize --force'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 5) Then run 'aclocal'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 6) At last, run 'autoreconf --force'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; After that, you'll be able to build Open MPI without problems :-).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; S&#233;rgio Durigan J&#250;nior
</span><br>
<span class="quotelev1">&gt; Linux on Power Toolchain - Software Engineer
</span><br>
<span class="quotelev1">&gt; Linux Technology Center - LTC
</span><br>
<span class="quotelev1">&gt; IBM Brazil
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3754.php">Ralf Wildenhues: "Re: [OMPI devel] Fix for XLC + libtool issue"</a>
<li><strong>Previous message:</strong> <a href="3752.php">Jeff Squyres: "[OMPI devel] not merging in cpc3 branch tonight"</a>
<li><strong>In reply to:</strong> <a href="3738.php">S&#233;rgio Durigan J&#250;nior: "[OMPI devel] Fix for XLC + libtool issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3754.php">Ralf Wildenhues: "Re: [OMPI devel] Fix for XLC + libtool issue"</a>
<li><strong>Reply:</strong> <a href="3754.php">Ralf Wildenhues: "Re: [OMPI devel] Fix for XLC + libtool issue"</a>
<li><strong>Reply:</strong> <a href="3759.php">Sérgio Durigan Júnior: "Re: [OMPI devel] Fix for XLC + libtool issue"</a>
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
