<?
$subject_val = "[OMPI devel] 1.6.2rc2 VT/OMP build failure with PGI 8.0-6";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 11 15:08:11 2012" -->
<!-- isoreceived="20120911190811" -->
<!-- sent="Tue, 11 Sep 2012 12:08:05 -0700" -->
<!-- isosent="20120911190805" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.6.2rc2 VT/OMP build failure with PGI 8.0-6" -->
<!-- id="CAAvDA17woLO1EXdXVLuOtK=Z7=57fmvOXAAmEkh+xT1uM+o2Tw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] 1.6.2rc2 VT/OMP build failure with PGI 8.0-6<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-11 15:08:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11492.php">Bert Wesarg: "Re: [OMPI devel] 1.6.2rc2 VT/OMP build failure with PGI 8.0-6"</a>
<li><strong>Previous message:</strong> <a href="11490.php">Bert Wesarg: "Re: [OMPI devel] 1.6.2rc2 VT build failure [with patch]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11492.php">Bert Wesarg: "Re: [OMPI devel] 1.6.2rc2 VT/OMP build failure with PGI 8.0-6"</a>
<li><strong>Reply:</strong> <a href="11492.php">Bert Wesarg: "Re: [OMPI devel] 1.6.2rc2 VT/OMP build failure with PGI 8.0-6"</a>
<li><strong>Reply:</strong> <a href="11494.php">Paul Hargrove: "Re: [OMPI devel] 1.6.2rc2 VT/OMP build failure with PGI 8.0-6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
While newer PGI compilers don't complain, I find that PGI-8.0-6 fails as
<br>
shown below.
<br>
In addition to 1 error, there are 3 warnings that might be worth
<br>
examination.
<br>
<p>My guess is that the code is trying to use OMP features more recent than
<br>
the support provided by this older compiler.
<br>
However, OMPI's README gives the impression that PGI compilers 6.0-5 should
<br>
work.
<br>
<p>I also have a PGI-7.2-5 build queued and will follow up with those results
<br>
when available.
<br>
<p>-Paul
<br>
<p><p>&nbsp;&nbsp;CXX    vtunify-vt_unify_hooks_aevents.o
<br>
<span class="quotelev1">&gt; &quot;/users/phargrov/SCRATCH/OMPI/openmpi-1.6.2rc2-linux-x86_64-pgi-8.0/openmpi-1.6.2rc2/ompi/contrib/vt/vt/tools/vtunify/hooks/vt_unify_hooks_aevents.cc&quot;,
</span><br>
<span class="quotelev1">&gt; line 69: warning:
</span><br>
<span class="quotelev1">&gt;           variable &quot;otf_rc&quot; was set but never used
</span><br>
<span class="quotelev1">&gt;         uint8_t otf_rc;
</span><br>
<span class="quotelev1">&gt;                 ^
</span><br>
<span class="quotelev1">&gt; &quot;/users/phargrov/SCRATCH/OMPI/openmpi-1.6.2rc2-linux-x86_64-pgi-8.0/openmpi-1.6.2rc2/ompi/contrib/vt/vt/tools/vtunify/hooks/vt_unify_hooks_aevents.cc&quot;,
</span><br>
<span class="quotelev1">&gt; line 310: error:
</span><br>
<span class="quotelev1">&gt;           unrecognized text in pragma
</span><br>
<span class="quotelev1">&gt;   #  pragma omp threadprivate(manager)
</span><br>
<span class="quotelev1">&gt;                                       ^
</span><br>
<span class="quotelev1">&gt; &quot;/users/phargrov/SCRATCH/OMPI/openmpi-1.6.2rc2-linux-x86_64-pgi-8.0/openmpi-1.6.2rc2/ompi/contrib/vt/vt/tools/vtunify/hooks/vt_unify_hooks_aevents.cc&quot;,
</span><br>
<span class="quotelev1">&gt; line 304: warning:
</span><br>
<span class="quotelev1">&gt;           variable &quot;error&quot; was set but never used
</span><br>
<span class="quotelev1">&gt;      bool error = false;
</span><br>
<span class="quotelev1">&gt;           ^
</span><br>
<span class="quotelev1">&gt; &quot;/users/phargrov/SCRATCH/OMPI/openmpi-1.6.2rc2-linux-x86_64-pgi-8.0/openmpi-1.6.2rc2/ompi/contrib/vt/vt/tools/vtunify/hooks/vt_unify_hooks_aevents.cc&quot;,
</span><br>
<span class="quotelev1">&gt; line 336: warning:
</span><br>
<span class="quotelev1">&gt;           variable &quot;error&quot; was set but never used
</span><br>
<span class="quotelev1">&gt;      bool error = false;
</span><br>
<span class="quotelev1">&gt;           ^
</span><br>
<span class="quotelev1">&gt; 1 error detected in the compilation of
</span><br>
<span class="quotelev1">&gt; &quot;/users/phargrov/SCRATCH/OMPI/openmpi-1.6.2rc2-linux-x86_64-pgi-8.0/openmpi-1.6.2rc2/ompi/contrib/vt/vt/tools/vtunify/hooks/vt_unify_hooks_aevents.cc&quot;.
</span><br>
<span class="quotelev1">&gt; make[7]: *** [vtunify-vt_unify_hooks_aevents.o] Error 2
</span><br>
<p><p><p>On Tue, Sep 11, 2012 at 7:10 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 1.6.2rc2 is out -- please test:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/software/ompi/v1.6/">http://www.open-mpi.org/software/ompi/v1.6/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Changes since rc1:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - VT compile fix on Solaris
</span><br>
<span class="quotelev1">&gt; - rmaps segv fix
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11491/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11492.php">Bert Wesarg: "Re: [OMPI devel] 1.6.2rc2 VT/OMP build failure with PGI 8.0-6"</a>
<li><strong>Previous message:</strong> <a href="11490.php">Bert Wesarg: "Re: [OMPI devel] 1.6.2rc2 VT build failure [with patch]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11492.php">Bert Wesarg: "Re: [OMPI devel] 1.6.2rc2 VT/OMP build failure with PGI 8.0-6"</a>
<li><strong>Reply:</strong> <a href="11492.php">Bert Wesarg: "Re: [OMPI devel] 1.6.2rc2 VT/OMP build failure with PGI 8.0-6"</a>
<li><strong>Reply:</strong> <a href="11494.php">Paul Hargrove: "Re: [OMPI devel] 1.6.2rc2 VT/OMP build failure with PGI 8.0-6"</a>
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
