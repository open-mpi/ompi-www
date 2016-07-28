<?
$subject_val = "Re: [OMPI devel] 1.6.2rc2 VT/OMP build failure with PGI 8.0-6";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 11 15:38:47 2012" -->
<!-- isoreceived="20120911193847" -->
<!-- sent="Tue, 11 Sep 2012 12:38:41 -0700" -->
<!-- isosent="20120911193841" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.6.2rc2 VT/OMP build failure with PGI 8.0-6" -->
<!-- id="CAAvDA150f+gtX+8tOTeFrfjJbw7qPzdG0bjkkPcqi4LOQjYvNA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAvDA17woLO1EXdXVLuOtK=Z7=57fmvOXAAmEkh+xT1uM+o2Tw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.6.2rc2 VT/OMP build failure with PGI 8.0-6<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-11 15:38:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11495.php">Ralph Castain: "Re: [OMPI devel] 1.6.2rc2: opal_path_nfs failure for &quot;bind&quot; mount"</a>
<li><strong>Previous message:</strong> <a href="11493.php">Paul Hargrove: "[OMPI devel] 1.6.2rc2: opal_path_nfs failure for &quot;bind&quot; mount"</a>
<li><strong>In reply to:</strong> <a href="11491.php">Paul Hargrove: "[OMPI devel] 1.6.2rc2 VT/OMP build failure with PGI 8.0-6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11496.php">Bert Wesarg: "Re: [OMPI devel] 1.6.2rc2 VT/OMP build failure with PGI 8.0-6"</a>
<li><strong>Reply:</strong> <a href="11496.php">Bert Wesarg: "Re: [OMPI devel] 1.6.2rc2 VT/OMP build failure with PGI 8.0-6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Following-up as promised:
<br>
My build w/ PGI-7.2-5 has completed and produces the same error (and
<br>
warnings) as seen w/ 8.0-6 and reported in the message quoted below.
<br>
<p>-Paul
<br>
<p>On Tue, Sep 11, 2012 at 12:08 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; While newer PGI compilers don't complain, I find that PGI-8.0-6 fails as
</span><br>
<span class="quotelev1">&gt; shown below.
</span><br>
<span class="quotelev1">&gt; In addition to 1 error, there are 3 warnings that might be worth
</span><br>
<span class="quotelev1">&gt; examination.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My guess is that the code is trying to use OMP features more recent than
</span><br>
<span class="quotelev1">&gt; the support provided by this older compiler.
</span><br>
<span class="quotelev1">&gt; However, OMPI's README gives the impression that PGI compilers 6.0-5
</span><br>
<span class="quotelev1">&gt; should work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I also have a PGI-7.2-5 build queued and will follow up with those results
</span><br>
<span class="quotelev1">&gt; when available.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   CXX    vtunify-vt_unify_hooks_aevents.o
</span><br>
<span class="quotelev2">&gt;&gt; &quot;/users/phargrov/SCRATCH/OMPI/openmpi-1.6.2rc2-linux-x86_64-pgi-8.0/openmpi-1.6.2rc2/ompi/contrib/vt/vt/tools/vtunify/hooks/vt_unify_hooks_aevents.cc&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; line 69: warning:
</span><br>
<span class="quotelev2">&gt;&gt;           variable &quot;otf_rc&quot; was set but never used
</span><br>
<span class="quotelev2">&gt;&gt;         uint8_t otf_rc;
</span><br>
<span class="quotelev2">&gt;&gt;                 ^
</span><br>
<span class="quotelev2">&gt;&gt; &quot;/users/phargrov/SCRATCH/OMPI/openmpi-1.6.2rc2-linux-x86_64-pgi-8.0/openmpi-1.6.2rc2/ompi/contrib/vt/vt/tools/vtunify/hooks/vt_unify_hooks_aevents.cc&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; line 310: error:
</span><br>
<span class="quotelev2">&gt;&gt;           unrecognized text in pragma
</span><br>
<span class="quotelev2">&gt;&gt;   #  pragma omp threadprivate(manager)
</span><br>
<span class="quotelev2">&gt;&gt;                                       ^
</span><br>
<span class="quotelev2">&gt;&gt; &quot;/users/phargrov/SCRATCH/OMPI/openmpi-1.6.2rc2-linux-x86_64-pgi-8.0/openmpi-1.6.2rc2/ompi/contrib/vt/vt/tools/vtunify/hooks/vt_unify_hooks_aevents.cc&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; line 304: warning:
</span><br>
<span class="quotelev2">&gt;&gt;           variable &quot;error&quot; was set but never used
</span><br>
<span class="quotelev2">&gt;&gt;      bool error = false;
</span><br>
<span class="quotelev2">&gt;&gt;           ^
</span><br>
<span class="quotelev2">&gt;&gt; &quot;/users/phargrov/SCRATCH/OMPI/openmpi-1.6.2rc2-linux-x86_64-pgi-8.0/openmpi-1.6.2rc2/ompi/contrib/vt/vt/tools/vtunify/hooks/vt_unify_hooks_aevents.cc&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; line 336: warning:
</span><br>
<span class="quotelev2">&gt;&gt;           variable &quot;error&quot; was set but never used
</span><br>
<span class="quotelev2">&gt;&gt;      bool error = false;
</span><br>
<span class="quotelev2">&gt;&gt;           ^
</span><br>
<span class="quotelev2">&gt;&gt; 1 error detected in the compilation of
</span><br>
<span class="quotelev2">&gt;&gt; &quot;/users/phargrov/SCRATCH/OMPI/openmpi-1.6.2rc2-linux-x86_64-pgi-8.0/openmpi-1.6.2rc2/ompi/contrib/vt/vt/tools/vtunify/hooks/vt_unify_hooks_aevents.cc&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; make[7]: *** [vtunify-vt_unify_hooks_aevents.o] Error 2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Sep 11, 2012 at 7:10 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1.6.2rc2 is out -- please test:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/software/ompi/v1.6/">http://www.open-mpi.org/software/ompi/v1.6/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Changes since rc1:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - VT compile fix on Solaris
</span><br>
<span class="quotelev2">&gt;&gt; - rmaps segv fix
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11494/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11495.php">Ralph Castain: "Re: [OMPI devel] 1.6.2rc2: opal_path_nfs failure for &quot;bind&quot; mount"</a>
<li><strong>Previous message:</strong> <a href="11493.php">Paul Hargrove: "[OMPI devel] 1.6.2rc2: opal_path_nfs failure for &quot;bind&quot; mount"</a>
<li><strong>In reply to:</strong> <a href="11491.php">Paul Hargrove: "[OMPI devel] 1.6.2rc2 VT/OMP build failure with PGI 8.0-6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11496.php">Bert Wesarg: "Re: [OMPI devel] 1.6.2rc2 VT/OMP build failure with PGI 8.0-6"</a>
<li><strong>Reply:</strong> <a href="11496.php">Bert Wesarg: "Re: [OMPI devel] 1.6.2rc2 VT/OMP build failure with PGI 8.0-6"</a>
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
