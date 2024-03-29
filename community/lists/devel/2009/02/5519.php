<?
$subject_val = "Re: [OMPI devel] ompi v1.3 compilation problem on ia64/gcc/rhel4.7";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 24 02:02:42 2009" -->
<!-- isoreceived="20090224070242" -->
<!-- sent="Tue, 24 Feb 2009 09:02:37 +0200" -->
<!-- isosent="20090224070237" -->
<!-- name="Mike Dubman" -->
<!-- email="mike.ompi_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ompi v1.3 compilation problem on ia64/gcc/rhel4.7" -->
<!-- id="b20b52800902232302i163e0caanbe45ae07afc53581_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7A6A437F-2114-46E2-93AA-D13A406760FB_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] ompi v1.3 compilation problem on ia64/gcc/rhel4.7<br>
<strong>From:</strong> Mike Dubman (<em>mike.ompi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-24 02:02:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5520.php">George Bosilca: "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
<li><strong>Previous message:</strong> <a href="5518.php">Eugene Loh: "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
<li><strong>In reply to:</strong> <a href="5473.php">Jeff Squyres: "Re: [OMPI devel] ompi v1.3 compilation problem on ia64/gcc/rhel4.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/03/5542.php">Jeff Squyres: "Re: [OMPI devel] ompi v1.3 compilation problem on ia64/gcc/rhel4.7"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/03/5542.php">Jeff Squyres: "Re: [OMPI devel] ompi v1.3 compilation problem on ia64/gcc/rhel4.7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I searched for similar problems reported to the list and have not found any.
<br>
(only related to icc compiler found, which is unrelevant)
<br>
What discussed problems you referencing to?
<br>
<p>regards
<br>
<p>Mike
<br>
<p><p>On Thu, Feb 19, 2009 at 3:04 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Could this pertain to the other itanium compilation problems that were
</span><br>
<span class="quotelev1">&gt; discussed (and not yet resolved) earlier?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 19, 2009, at 3:52 AM, Mike Dubman wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello guys,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We have compilation problem of ompi v1.3 on Itanium ia64 + gcc + rhel 4.7.
</span><br>
<span class="quotelev2">&gt;&gt; It seems that vt_pform_linux.c:46 includes asm/intrinsics.h which is
</span><br>
<span class="quotelev2">&gt;&gt; unavailable on rhel47/ia64 in /usr/include/asm but is a part of
</span><br>
<span class="quotelev2">&gt;&gt; kernel-headers rpm
</span><br>
<span class="quotelev2">&gt;&gt; (in /usr/src/kernels/2.6.9-78.EL-ia64/include/asm-ia64/)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We compile ompi v1.3 from srpm with a command:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; configure_options=&quot;--define 'configure_options
</span><br>
<span class="quotelev2">&gt;&gt; --enable-orterun-prefix-by-default --with-openib
</span><br>
<span class="quotelev2">&gt;&gt; --enable-mpirun-prefix-by-default'&quot;
</span><br>
<span class="quotelev2">&gt;&gt; rpmbuild_options=&quot;--define 'install_in_opt 1' --define
</span><br>
<span class="quotelev2">&gt;&gt; 'use_default_rpm_opt_flags 0' --define 'ofed 1' --define 'mflags -j4'
</span><br>
<span class="quotelev2">&gt;&gt; --define '_vendor Voltaire' --define 'packager Voltaire'&quot;
</span><br>
<span class="quotelev2">&gt;&gt; rpmbuild --rebuild $configure_options $rpmbuild_options
</span><br>
<span class="quotelev2">&gt;&gt; /path/to/openmpi_v1.3_src.rpm
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and getting the following error:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; tlib/otf/otflib     -D_GNU_SOURCE -DBINDIR=\&quot;/opt/openmpi/1.3/bin\&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -DDATADIR=\&quot;
</span><br>
<span class="quotelev2">&gt;&gt; /opt/openmpi/1.3/share\&quot; -DRFG -DVT_BFD -DVT_MEMHOOK -DVT_IOWRAP   -MT
</span><br>
<span class="quotelev2">&gt;&gt; vt_pform_
</span><br>
<span class="quotelev2">&gt;&gt; linux.o -MD -MP -MF .deps/vt_pform_linux.Tpo -c -o vt_pform_linux.o
</span><br>
<span class="quotelev2">&gt;&gt; vt_pform_lin ux.c
</span><br>
<span class="quotelev2">&gt;&gt; vt_pform_linux.c:46:31: asm/intrinsics.h: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt; vt_pform_linux.c: In function `vt_pform_wtime':
</span><br>
<span class="quotelev2">&gt;&gt; vt_pform_linux.c:172: error: `_IA64_REG_AR_ITC' undeclared (first use in
</span><br>
<span class="quotelev2">&gt;&gt; this fu
</span><br>
<span class="quotelev2">&gt;&gt; nction)
</span><br>
<span class="quotelev2">&gt;&gt; vt_pform_linux.c:172: error: (Each undeclared identifier is reported only
</span><br>
<span class="quotelev2">&gt;&gt; once
</span><br>
<span class="quotelev2">&gt;&gt; vt_pform_linux.c:172: error: for each function it appears in.)
</span><br>
<span class="quotelev2">&gt;&gt; make[5]: *** [vt_pform_linux.o] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[5]: *** Waiting for unfinished jobs....
</span><br>
<span class="quotelev2">&gt;&gt; mv -f .deps/vt_otf_trc.Tpo .deps/vt_otf_trc.Po
</span><br>
<span class="quotelev2">&gt;&gt; make[5]: *** Waiting for unfinished jobs....
</span><br>
<span class="quotelev2">&gt;&gt; mv -f .deps/vt_otf_gen.Tpo .deps/vt_otf_gen.Po mv -f .deps/vt_iowrap.Tpo
</span><br>
<span class="quotelev2">&gt;&gt; .deps/vt_iowrap.Po
</span><br>
<span class="quotelev2">&gt;&gt; make[5]: Leaving directory
</span><br>
<span class="quotelev2">&gt;&gt; `/tmp/buildopenmpi-30371/BUILD/openmpi-1.3/ompi/contr
</span><br>
<span class="quotelev2">&gt;&gt; ib/vt/vt/vtlib'
</span><br>
<span class="quotelev2">&gt;&gt; make[4]: make[4]: Leaving directory
</span><br>
<span class="quotelev2">&gt;&gt; `/tmp/buildopenmpi-30371/BUILD/openmpi-1.3/o
</span><br>
<span class="quotelev2">&gt;&gt; mpi/contrib/vt/vt'
</span><br>
<span class="quotelev2">&gt;&gt; *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Please suggest.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
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
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-5519/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5520.php">George Bosilca: "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
<li><strong>Previous message:</strong> <a href="5518.php">Eugene Loh: "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
<li><strong>In reply to:</strong> <a href="5473.php">Jeff Squyres: "Re: [OMPI devel] ompi v1.3 compilation problem on ia64/gcc/rhel4.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/03/5542.php">Jeff Squyres: "Re: [OMPI devel] ompi v1.3 compilation problem on ia64/gcc/rhel4.7"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/03/5542.php">Jeff Squyres: "Re: [OMPI devel] ompi v1.3 compilation problem on ia64/gcc/rhel4.7"</a>
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
