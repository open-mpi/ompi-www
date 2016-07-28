<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Apr 10 14:12:55 2006" -->
<!-- isoreceived="20060410181255" -->
<!-- sent="Mon, 10 Apr 2006 11:12:47 -0700" -->
<!-- isosent="20060410181247" -->
<!-- name="Warner Yuen" -->
<!-- email="wyuen_at_[hidden]" -->
<!-- subject="[OMPI users] Building OpenMPI on OS X Tiger with gcc-3.3" -->
<!-- id="A45470BC-2B8B-40A0-AB53-F1345A31E0C0_at_apple.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="mailman.17.1144684804.7386.users_at_open-mpi.org" -->
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
<strong>From:</strong> Warner Yuen (<em>wyuen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-10 14:12:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1005.php">Warner Yuen: "[OMPI users] Building OMPI-1.0.2 on OS X v10.3.9 with IBM XLC +XLF"</a>
<li><strong>Previous message:</strong> <a href="1003.php">Michael Kluskens: "Re: [OMPI users] job running question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1006.php">Charles Williams: "Re: [OMPI users] Building OpenMPI on OS X Tiger with gcc-3.3"</a>
<li><strong>Reply:</strong> <a href="1006.php">Charles Williams: "Re: [OMPI users] Building OpenMPI on OS X Tiger with gcc-3.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Charles,
<br>
<p>I've only ever seen that error when trying to build OpenMPI with the  
<br>
IBM XLC compilers on Tiger. I just now successfully configured and  
<br>
built OpenMPI-1.0.2 using gcc 3.3 build 1819 and IBM XLF.
<br>
<p>./configure --disable-mpi-f90 --prefix=/hpc/mpis/ompi102f77
<br>
<p>Please note that I can also build this with F90 support. As long as  
<br>
GCC 3.3 is used as my compiler. One curious thing is that if I set my  
<br>
envirornment to specifically use XLF, i.e. 'export F77=/opt/ibmcmp/ 
<br>
xlf/8.1/bin/f77' it will fail in the configure step.
<br>
<p>Just to be sure, OpenMPI fails to compile with your exact error if I  
<br>
first set my C compiler to IBM XLC.
<br>
<p>Warner Yuen
<br>
Research Computing Consultant
<br>
Apple Computer
<br>
email: wyuen_at_[hidden]
<br>
Tel: 408.718.2859
<br>
Fax: 408.715.0133
<br>
<p><p>On Apr 10, 2006, at 9:00 AM, users-request_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 1
</span><br>
<span class="quotelev1">&gt; Date: Mon, 10 Apr 2006 11:25:48 -0400
</span><br>
<span class="quotelev1">&gt; From: Charles Williams &lt;willic3_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] Building OpenMPI on OS X Tiger with gcc-3.3
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;21A2544D-194E-4655-A0C5-658248DC7BF4_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have been attempting to build OpenMPI on my Mac, using the older
</span><br>
<span class="quotelev1">&gt; gcc-3.3 compiler using rc2r9567.  Things proceed for a while, and
</span><br>
<span class="quotelev1">&gt; then I get:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Making all in xgrid
</span><br>
<span class="quotelev1">&gt; /Users/willic3/build/openmpi-buildgcc3.3/orte/dynamic-mca/pls/xgrid
</span><br>
<span class="quotelev1">&gt; depbase=`echo src/pls_xgrid_component.lo | sed 's|[^/]*$|.deps/&amp;|;s|
</span><br>
<span class="quotelev1">&gt; \.lo$||'`; \
</span><br>
<span class="quotelev1">&gt; if /bin/sh ../../../../libtool --mode=compile gcc -DHAVE_CONFIG_H -I.
</span><br>
<span class="quotelev1">&gt; -I/Users/willic3/build/openmpi-1.0.2rc2r9567/orte/mca/pls/xgrid -
</span><br>
<span class="quotelev1">&gt; I../../../../include -I../../../../include  -I/Users/willic3/build/
</span><br>
<span class="quotelev1">&gt; openmpi-buildgcc3.3/include  -I/Users/willic3/build/
</span><br>
<span class="quotelev1">&gt; openmpi-1.0.2rc2r9567/include -I/Users/willic3/build/
</span><br>
<span class="quotelev1">&gt; openmpi-1.0.2rc2r9567 -I../../../.. -I../../../../include -I/Users/
</span><br>
<span class="quotelev1">&gt; willic3/build/openmpi-1.0.2rc2r9567/opal -I/Users/willic3/build/
</span><br>
<span class="quotelev1">&gt; openmpi-1.0.2rc2r9567/orte -I/Users/willic3/build/
</span><br>
<span class="quotelev1">&gt; openmpi-1.0.2rc2r9567/ompi  -D_REENTRANT -F XGridFoundation  -MT src/
</span><br>
<span class="quotelev1">&gt; pls_xgrid_component.lo -MD -MP -MF &quot;$depbase.Tpo&quot; -c -o src/
</span><br>
<span class="quotelev1">&gt; pls_xgrid_component.lo /Users/willic3/build/openmpi-1.0.2rc2r9567/
</span><br>
<span class="quotelev1">&gt; orte/mca/pls/xgrid/src/pls_xgrid_component.m; \
</span><br>
<span class="quotelev1">&gt; then mv -f &quot;$depbase.Tpo&quot; &quot;$depbase.Plo&quot;; else rm -f &quot;$depbase.Tpo&quot;;
</span><br>
<span class="quotelev1">&gt; exit 1; fi
</span><br>
<span class="quotelev1">&gt; libtool: compile: unable to infer tagged configuration
</span><br>
<span class="quotelev1">&gt; libtool: compile: specify a tag with `--tag'
</span><br>
<span class="quotelev1">&gt; make[4]: *** [src/pls_xgrid_component.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[3]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I may be able to avoid this problem by building without xgrid (I'm
</span><br>
<span class="quotelev1">&gt; going to try that now), but does anyone have any ideas on other
</span><br>
<span class="quotelev1">&gt; solutions?  I've built the code successfully using the default Tiger
</span><br>
<span class="quotelev1">&gt; compilers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Charles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Machine info:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; uname -a
</span><br>
<span class="quotelev1">&gt; Darwin rachel.geo.rpi.edu 8.6.0 Darwin Kernel Version 8.6.0: Tue Mar
</span><br>
<span class="quotelev1">&gt; 7 16:58:48 PST 2006; root:xnu-792.6.70.obj~1/RELEASE_PPC Power
</span><br>
<span class="quotelev1">&gt; Macintosh powerpc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; gcc-3.3 --version
</span><br>
<span class="quotelev1">&gt; gcc-3.3 (GCC) 3.3 20030304 (Apple Computer, Inc. build 1819)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I configured and built after using 'gcc_select 3.3'.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Configure command:
</span><br>
<span class="quotelev1">&gt; /Users/willic3/build/openmpi-1.0.2rc2r9567/configure --prefix=/Users/
</span><br>
<span class="quotelev1">&gt; willic3/geo
</span><br>
<span class="quotelev1">&gt; frame/tools/openmpi-gcc3.3 --disable-mpi-f90
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can also provide the configure and build logs if that will help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Charles A. Williams
</span><br>
<span class="quotelev1">&gt; Dept. of Earth &amp; Environmental Sciences
</span><br>
<span class="quotelev1">&gt; Science Center, 2C01B
</span><br>
<span class="quotelev1">&gt; Rensselaer Polytechnic Institute
</span><br>
<span class="quotelev1">&gt; Troy, NY  12180
</span><br>
<span class="quotelev1">&gt; Phone:    (518) 276-3369
</span><br>
<span class="quotelev1">&gt; FAX:        (518) 276-2012
</span><br>
<span class="quotelev1">&gt; e-mail:    willic3_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1004/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1005.php">Warner Yuen: "[OMPI users] Building OMPI-1.0.2 on OS X v10.3.9 with IBM XLC +XLF"</a>
<li><strong>Previous message:</strong> <a href="1003.php">Michael Kluskens: "Re: [OMPI users] job running question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1006.php">Charles Williams: "Re: [OMPI users] Building OpenMPI on OS X Tiger with gcc-3.3"</a>
<li><strong>Reply:</strong> <a href="1006.php">Charles Williams: "Re: [OMPI users] Building OpenMPI on OS X Tiger with gcc-3.3"</a>
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
