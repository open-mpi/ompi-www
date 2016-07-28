<?
$subject_val = "Re: [OMPI devel] 1.10.0rc3 - second Solaris build failure";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 21 17:15:58 2015" -->
<!-- isoreceived="20150821211558" -->
<!-- sent="Fri, 21 Aug 2015 21:15:54 +0000" -->
<!-- isosent="20150821211554" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.10.0rc3 - second Solaris build failure" -->
<!-- id="222BDEA8-53A0-4410-8371-DC4C883172F6_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAvDA149bXY_9z1W73f42eCNw0KoDTfNRiON1foRfhOyHS__ng_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.10.0rc3 - second Solaris build failure<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-21 17:15:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17787.php">Mark Santcroos: "Re: [OMPI devel] orte-dvm startup fails on HEAD"</a>
<li><strong>Previous message:</strong> <a href="17785.php">Ralph Castain: "Re: [OMPI devel] orte-dvm startup fails on HEAD"</a>
<li><strong>In reply to:</strong> <a href="17780.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc3 - second Solaris build failure"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Followups are occurring on <a href="https://github.com/open-mpi/ompi-release/pull/529">https://github.com/open-mpi/ompi-release/pull/529</a>
<br>
<p><span class="quotelev1">&gt; On Aug 20, 2015, at 6:50 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Aug 20, 2015 at 1:14 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; And therefore it didn't generate libmpi_mpifh_sizeof.a (gfortran &lt;v4.9 will generate an effectively &quot;empty&quot; libmpi_mpifh_sizeof.a).  Hence, a subsequent link that depended on that library failed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Paul: can you verify my theory?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do this in your existing build:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; rm -f ompi/mpi/fortran/base/gen-mpi-sizeof.pl
</span><br>
<span class="quotelev1">&gt; wget \
</span><br>
<span class="quotelev1">&gt;   <a href="https://raw.githubusercontent.com/open-mpi/ompi/master/ompi/mpi/fortran/base/gen-mpi-sizeof.pl">https://raw.githubusercontent.com/open-mpi/ompi/master/ompi/mpi/fortran/base/gen-mpi-sizeof.pl</a> \
</span><br>
<span class="quotelev1">&gt;   -O ompi/mpi/fortran/base/gen-mpi-sizeof.pl
</span><br>
<span class="quotelev1">&gt; chmod +x ompi/mpi/fortran/base/gen-mpi-sizeof.pl
</span><br>
<span class="quotelev1">&gt; rm ompi/mpi/fortran/mpif-h/profile/psizeof_f.f90
</span><br>
<span class="quotelev1">&gt; make -j 32
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I made changes to your instruction appropriate to my VPATH build (cd $BLDDIR after the chmod).
</span><br>
<span class="quotelev1">&gt; Solaris make has no '-j' option, but since I am running in a VM on a dual-core laptop I chose to omit &quot;-j 32&quot; even after switching to gmake.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Good-natured-nit-picking aside, the solution does NOT work (it may be necessary, but is not sufficient).
</span><br>
<span class="quotelev1">&gt; There is a new generated psizeof_f.f90, containing a dummy subroutine, but my pandas are still sad.
</span><br>
<span class="quotelev1">&gt; In fact, these pandas are so despondent that they started chewing on your .gitconfig file (but I asked them to be --quiet about it).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A log from &quot;gmake clean all V=1&quot; in the mpif-h directory is (again) attached.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I direct your attention to the following line:
</span><br>
<span class="quotelev1">&gt;     /bin/sh ../../../../libtool  --tag=FC   --mode=link f90  -m32 -g   -o libmpi_mpifh_sizeof.la    -lm -lsocket -lnsl  
</span><br>
<span class="quotelev1">&gt; Somebody appears to have specified no linker inputs!
</span><br>
<span class="quotelev1">&gt; On other platforms I see a &quot;sizeof_f.lo&quot; immediately before the -l options.
</span><br>
<span class="quotelev1">&gt; I am pretty sure this is a contributing factor. ;-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; &lt;log.bz2&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17780.php">http://www.open-mpi.org/community/lists/devel/2015/08/17780.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17787.php">Mark Santcroos: "Re: [OMPI devel] orte-dvm startup fails on HEAD"</a>
<li><strong>Previous message:</strong> <a href="17785.php">Ralph Castain: "Re: [OMPI devel] orte-dvm startup fails on HEAD"</a>
<li><strong>In reply to:</strong> <a href="17780.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc3 - second Solaris build failure"</a>
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
