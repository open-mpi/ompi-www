<?
$subject_val = "Re: [OMPI devel] ompi v1.3 compilation problem on ia64/gcc/rhel4.7";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  2 15:28:27 2009" -->
<!-- isoreceived="20090302202827" -->
<!-- sent="Mon, 2 Mar 2009 15:28:20 -0500" -->
<!-- isosent="20090302202820" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ompi v1.3 compilation problem on ia64/gcc/rhel4.7" -->
<!-- id="0AF40DE8-6710-4F16-92B4-110714FF722C_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="b20b52800902232302i163e0caanbe45ae07afc53581_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-02 15:28:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5543.php">George Bosilca: "Re: [OMPI devel] PML Start error?"</a>
<li><strong>Previous message:</strong> <a href="5541.php">Eugene Loh: "[OMPI devel] calling sendi earlier in the PML"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/02/5519.php">Mike Dubman: "Re: [OMPI devel] ompi v1.3 compilation problem on ia64/gcc/rhel4.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5544.php">Mike Dubman: "Re: [OMPI devel] ompi v1.3 compilation problem on ia64/gcc/rhel4.7"</a>
<li><strong>Reply:</strong> <a href="5544.php">Mike Dubman: "Re: [OMPI devel] ompi v1.3 compilation problem on ia64/gcc/rhel4.7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Disregard -- it looks like the VT guys have fixed this issue.
<br>
<p>Can you test 1.3.1rc2 or later?
<br>
<p><p>On Feb 24, 2009, at 2:02 AM, Mike Dubman wrote:
<br>
<p><span class="quotelev1">&gt; I searched for similar problems reported to the list and have not  
</span><br>
<span class="quotelev1">&gt; found any. (only related to icc compiler found, which is unrelevant)
</span><br>
<span class="quotelev1">&gt; What discussed problems you referencing to?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mike
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Feb 19, 2009 at 3:04 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Could this pertain to the other itanium compilation problems that  
</span><br>
<span class="quotelev1">&gt; were discussed (and not yet resolved) earlier?
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
<span class="quotelev1">&gt; Hello guys,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We have compilation problem of ompi v1.3 on Itanium ia64 + gcc +  
</span><br>
<span class="quotelev1">&gt; rhel 4.7.
</span><br>
<span class="quotelev1">&gt; It seems that vt_pform_linux.c:46 includes asm/intrinsics.h which is  
</span><br>
<span class="quotelev1">&gt; unavailable on rhel47/ia64 in /usr/include/asm but is a part of  
</span><br>
<span class="quotelev1">&gt; kernel-headers rpm
</span><br>
<span class="quotelev1">&gt; (in /usr/src/kernels/2.6.9-78.EL-ia64/include/asm-ia64/)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We compile ompi v1.3 from srpm with a command:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; configure_options=&quot;--define 'configure_options --enable-orterun- 
</span><br>
<span class="quotelev1">&gt; prefix-by-default --with-openib --enable-mpirun-prefix-by-default'&quot;
</span><br>
<span class="quotelev1">&gt; rpmbuild_options=&quot;--define 'install_in_opt 1' --define  
</span><br>
<span class="quotelev1">&gt; 'use_default_rpm_opt_flags 0' --define 'ofed 1' --define 'mflags - 
</span><br>
<span class="quotelev1">&gt; j4' --define '_vendor Voltaire' --define 'packager Voltaire'&quot;
</span><br>
<span class="quotelev1">&gt; rpmbuild --rebuild $configure_options $rpmbuild_options /path/to/ 
</span><br>
<span class="quotelev1">&gt; openmpi_v1.3_src.rpm
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and getting the following error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; tlib/otf/otflib     -D_GNU_SOURCE -DBINDIR=\&quot;/opt/openmpi/1.3/bin\&quot; - 
</span><br>
<span class="quotelev1">&gt; DDATADIR=\&quot;
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/1.3/share\&quot; -DRFG -DVT_BFD -DVT_MEMHOOK -DVT_IOWRAP   - 
</span><br>
<span class="quotelev1">&gt; MT vt_pform_
</span><br>
<span class="quotelev1">&gt; linux.o -MD -MP -MF .deps/vt_pform_linux.Tpo -c -o vt_pform_linux.o  
</span><br>
<span class="quotelev1">&gt; vt_pform_lin ux.c
</span><br>
<span class="quotelev1">&gt; vt_pform_linux.c:46:31: asm/intrinsics.h: No such file or directory
</span><br>
<span class="quotelev1">&gt; vt_pform_linux.c: In function `vt_pform_wtime':
</span><br>
<span class="quotelev1">&gt; vt_pform_linux.c:172: error: `_IA64_REG_AR_ITC' undeclared (first  
</span><br>
<span class="quotelev1">&gt; use in this fu
</span><br>
<span class="quotelev1">&gt; nction)
</span><br>
<span class="quotelev1">&gt; vt_pform_linux.c:172: error: (Each undeclared identifier is reported  
</span><br>
<span class="quotelev1">&gt; only once
</span><br>
<span class="quotelev1">&gt; vt_pform_linux.c:172: error: for each function it appears in.)
</span><br>
<span class="quotelev1">&gt; make[5]: *** [vt_pform_linux.o] Error 1
</span><br>
<span class="quotelev1">&gt; make[5]: *** Waiting for unfinished jobs....
</span><br>
<span class="quotelev1">&gt; mv -f .deps/vt_otf_trc.Tpo .deps/vt_otf_trc.Po
</span><br>
<span class="quotelev1">&gt; make[5]: *** Waiting for unfinished jobs....
</span><br>
<span class="quotelev1">&gt; mv -f .deps/vt_otf_gen.Tpo .deps/vt_otf_gen.Po mv -f .deps/ 
</span><br>
<span class="quotelev1">&gt; vt_iowrap.Tpo .deps/vt_iowrap.Po
</span><br>
<span class="quotelev1">&gt; make[5]: Leaving directory `/tmp/buildopenmpi-30371/BUILD/ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.3/ompi/contr
</span><br>
<span class="quotelev1">&gt; ib/vt/vt/vtlib'
</span><br>
<span class="quotelev1">&gt; make[4]: make[4]: Leaving directory `/tmp/buildopenmpi-30371/BUILD/ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.3/o
</span><br>
<span class="quotelev1">&gt; mpi/contrib/vt/vt'
</span><br>
<span class="quotelev1">&gt; *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please suggest.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
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
<li><strong>Next message:</strong> <a href="5543.php">George Bosilca: "Re: [OMPI devel] PML Start error?"</a>
<li><strong>Previous message:</strong> <a href="5541.php">Eugene Loh: "[OMPI devel] calling sendi earlier in the PML"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/02/5519.php">Mike Dubman: "Re: [OMPI devel] ompi v1.3 compilation problem on ia64/gcc/rhel4.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5544.php">Mike Dubman: "Re: [OMPI devel] ompi v1.3 compilation problem on ia64/gcc/rhel4.7"</a>
<li><strong>Reply:</strong> <a href="5544.php">Mike Dubman: "Re: [OMPI devel] ompi v1.3 compilation problem on ia64/gcc/rhel4.7"</a>
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
