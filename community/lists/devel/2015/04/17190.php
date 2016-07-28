<?
$subject_val = "Re: [OMPI devel] 1.8.5rc1 VT-related build failure";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  7 03:10:37 2015" -->
<!-- isoreceived="20150407071037" -->
<!-- sent="Tue, 07 Apr 2015 09:10:32 +0200" -->
<!-- isosent="20150407071032" -->
<!-- name="Bert Wesarg" -->
<!-- email="bert.wesarg_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.8.5rc1 VT-related build failure" -->
<!-- id="552382E8.4030300_at_tu-dresden.de" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAAvDA17ad_YH612gzwtrTpkeQGXXgs+eOcx_Cwm-3eJgG1U+PA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.8.5rc1 VT-related build failure<br>
<strong>From:</strong> Bert Wesarg (<em>bert.wesarg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-07 03:10:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17191.php">Nathan Hjelm: "[OMPI devel] .ompi_info dependency files"</a>
<li><strong>Previous message:</strong> <a href="17189.php">Paul Hargrove: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<li><strong>In reply to:</strong> <a href="17183.php">Paul Hargrove: "[OMPI devel] 1.8.5rc1 VT-related build failure"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 04/06/2015 10:10 PM, Paul Hargrove wrote:
<br>
<span class="quotelev1">&gt; I am trying to build Open MPI 1.8.5rc1 wit AMDs Open64 4.5.2.1.
</span><br>
<span class="quotelev1">&gt; I see the following failure (from &quot;make V=1&quot;) while building VT:
</span><br>
<p>thanks, I'll take a look.
<br>
<p>Bert
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; openCC -DHAVE_CONFIG_H -I.
</span><br>
<span class="quotelev1">&gt; -I/scratch/phargrov/OMPI/openmpi-1.8.5rc1-linux-x86_64-open64/openmpi-1.8.5rc1/ompi/contrib/vt/vt/tools/vtfilter
</span><br>
<span class="quotelev1">&gt; -I../..
</span><br>
<span class="quotelev1">&gt;   -I/scratch/phargrov/OMPI/openmpi-1.8.5rc1-linux-x86_64-open64/openmpi-1.8.5rc1/ompi/contrib/vt/vt/extlib/otf/otflib
</span><br>
<span class="quotelev1">&gt; -I../../extlib/otf/otflib
</span><br>
<span class="quotelev1">&gt; -I/scratch/phargrov/OMPI/openmpi-1.8.5rc1-linux-x86_64-open64/openmpi-1.8.5rc1/ompi/contrib/vt/vt/tools/vtfilter
</span><br>
<span class="quotelev1">&gt; -I/scratch/phargrov/OMPI/openmpi-1.8.5rc1-linux-x86_64-open64/openmpi-1.8.5rc1/ompi/contrib/vt/vt/tools/vtfilter/old
</span><br>
<span class="quotelev1">&gt; -I/scratch/phargrov/OMPI/openmpi-1.8.5rc1-linux-x86_64-open64/openmpi-1.8.5rc1/ompi/contrib/vt/vt/include
</span><br>
<span class="quotelev1">&gt; -I../../include
</span><br>
<span class="quotelev1">&gt; -I/scratch/phargrov/OMPI/openmpi-1.8.5rc1-linux-x86_64-open64/openmpi-1.8.5rc1/ompi/contrib/vt/vt/rfg
</span><br>
<span class="quotelev1">&gt; -I/scratch/phargrov/OMPI/openmpi-1.8.5rc1-linux-x86_64-open64/openmpi-1.8.5rc1/ompi/contrib/vt/vt/vtlib
</span><br>
<span class="quotelev1">&gt; -I/scratch/phargrov/OMPI/openmpi-1.8.5rc1-linux-x86_64-open64/openmpi-1.8.5rc1/ompi/contrib/vt/vt
</span><br>
<span class="quotelev1">&gt; -DINSIDE_OPENMPI
</span><br>
<span class="quotelev1">&gt; -I/scratch/phargrov/OMPI/openmpi-1.8.5rc1-linux-x86_64-open64/openmpi-1.8.5rc1/opal/mca/hwloc/hwloc191/hwloc/include
</span><br>
<span class="quotelev1">&gt; -I/scratch/phargrov/OMPI/openmpi-1.8.5rc1-linux-x86_64-open64/BLD/opal/mca/hwloc/hwloc191/hwloc/include
</span><br>
<span class="quotelev1">&gt; -I/scratch/phargrov/OMPI/openmpi-1.8.5rc1-linux-x86_64-open64/openmpi-1.8.5rc1/opal/mca/event/libevent2021/libevent
</span><br>
<span class="quotelev1">&gt; -I/scratch/phargrov/OMPI/openmpi-1.8.5rc1-linux-x86_64-open64/openmpi-1.8.5rc1/opal/mca/event/libevent2021/libevent/include
</span><br>
<span class="quotelev1">&gt; -I/scratch/phargrov/OMPI/openmpi-1.8.5rc1-linux-x86_64-open64/BLD/opal/mca/event/libevent2021/libevent/include
</span><br>
<span class="quotelev1">&gt; -I/scratch/phargrov/OMPI/openmpi-1.8.5rc1-linux-x86_64-open64/openmpi-1.8.5rc1/ompi/contrib/vt/vt/../../../include
</span><br>
<span class="quotelev1">&gt; -I/scratch/phargrov/OMPI/openmpi-1.8.5rc1-linux-x86_64-open64/BLD/ompi/contrib/vt/vt/../../../include
</span><br>
<span class="quotelev1">&gt; -fopenmp -DVT_FILTER_OLD -O3 -DNDEBUG -finline-functions -pthread -MT
</span><br>
<span class="quotelev1">&gt; vtfilter-vt_filter.o -MD -MP -MF .deps/vtfilter-vt_filter.Tpo -c -o
</span><br>
<span class="quotelev1">&gt; vtfilter-vt_filter.o `test -f 'vt_filter.cc' || echo
</span><br>
<span class="quotelev1">&gt; '/scratch/phargrov/OMPI/openmpi-1.8.5rc1-linux-x86_64-open64/openmpi-1.8.5rc1/ompi/contrib/vt/vt/tools/vtfilter/'`vt_filter.cc
</span><br>
<span class="quotelev1">&gt; In file included from
</span><br>
<span class="quotelev1">&gt; /scratch/phargrov/OMPI/openmpi-1.8.5rc1-linux-x86_64-open64/openmpi-1.8.5rc1/ompi/contrib/vt/vt/tools/vtfilter/vt_filter.h:16,
</span><br>
<span class="quotelev1">&gt;                   from
</span><br>
<span class="quotelev1">&gt; /scratch/phargrov/OMPI/openmpi-1.8.5rc1-linux-x86_64-open64/openmpi-1.8.5rc1/ompi/contrib/vt/vt/tools/vtfilter/vt_filter.cc:13:
</span><br>
<span class="quotelev1">&gt; /scratch/phargrov/OMPI/openmpi-1.8.5rc1-linux-x86_64-open64/openmpi-1.8.5rc1/ompi/contrib/vt/vt/tools/vtfilter/vt_filter_config.h:39:12:
</span><br>
<span class="quotelev1">&gt; error: floating constant in preprocessor expression
</span><br>
<span class="quotelev1">&gt; In file included from
</span><br>
<span class="quotelev1">&gt; /scratch/phargrov/OMPI/openmpi-1.8.5rc1-linux-x86_64-open64/openmpi-1.8.5rc1/ompi/contrib/vt/vt/tools/vtfilter/vt_filter.h:16,
</span><br>
<span class="quotelev1">&gt;                   from
</span><br>
<span class="quotelev1">&gt; /scratch/phargrov/OMPI/openmpi-1.8.5rc1-linux-x86_64-open64/openmpi-1.8.5rc1/ompi/contrib/vt/vt/tools/vtfilter/vt_filter.cc:13:
</span><br>
<span class="quotelev1">&gt; /scratch/phargrov/OMPI/openmpi-1.8.5rc1-linux-x86_64-open64/openmpi-1.8.5rc1/ompi/contrib/vt/vt/tools/vtfilter/vt_filter_config.h:39:12:
</span><br>
<span class="quotelev1">&gt; error: floating constant in preprocessor expression
</span><br>
<span class="quotelev1">&gt; make[7]: *** [vtfilter-vt_filter.o] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The offending line is
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #     if !(__OPENCC_PATCHLEVEL__ + 0)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And the reason for the error is that __OPENCC_PATCHLEVEL__ is defined, but
</span><br>
<span class="quotelev1">&gt; is not an INTEGER:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ /opt/amd/x86_open64-4.5.2.1/bin/openCC -dM -E ~/empty.c | grep OPENCC
</span><br>
<span class="quotelev1">&gt; #define __OPENCC_MINOR__ 5
</span><br>
<span class="quotelev1">&gt; #define __OPENCC__ 4
</span><br>
<span class="quotelev1">&gt; #define __OPENCC_PATCHLEVEL__ 2.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The same usage of __OPENCC_PATCHLEVEL__ as an integer appears in
</span><br>
<span class="quotelev1">&gt; vt_unify_config.h.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17183.php">http://www.open-mpi.org/community/lists/devel/2015/04/17183.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
Dipl.-Inf. Bert Wesarg
wiss. Mitarbeiter
Technische Universit&#228;t Dresden
Zentrum f&#252;r Informationsdienste und Hochleistungsrechnen (ZIH)
01062 Dresden
Tel.: +49 (351) 463-42451
Fax: +49 (351) 463-37773
E-Mail: bert.wesarg_at_[hidden]

</pre>
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17190/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17191.php">Nathan Hjelm: "[OMPI devel] .ompi_info dependency files"</a>
<li><strong>Previous message:</strong> <a href="17189.php">Paul Hargrove: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<li><strong>In reply to:</strong> <a href="17183.php">Paul Hargrove: "[OMPI devel] 1.8.5rc1 VT-related build failure"</a>
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
