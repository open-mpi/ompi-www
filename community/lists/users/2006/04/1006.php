<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Apr 10 15:22:26 2006" -->
<!-- isoreceived="20060410192226" -->
<!-- sent="Mon, 10 Apr 2006 15:21:56 -0400" -->
<!-- isosent="20060410192156" -->
<!-- name="Charles Williams" -->
<!-- email="willic3_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Building OpenMPI on OS X Tiger with gcc-3.3" -->
<!-- id="020ABA1C-5CD1-4624-A95B-DEBA528C4D3C_at_rpi.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="A45470BC-2B8B-40A0-AB53-F1345A31E0C0_at_apple.com" -->
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
<strong>From:</strong> Charles Williams (<em>willic3_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-10 15:21:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1007.php">David Daniel: "Re: [OMPI users] Building OMPI-1.0.2 on OS X v10.3.9 with IBM XLC +XLF"</a>
<li><strong>Previous message:</strong> <a href="1005.php">Warner Yuen: "[OMPI users] Building OMPI-1.0.2 on OS X v10.3.9 with IBM XLC +XLF"</a>
<li><strong>In reply to:</strong> <a href="1004.php">Warner Yuen: "[OMPI users] Building OpenMPI on OS X Tiger with gcc-3.3"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just tried this again (with the 1.0.2 version just released), but  
<br>
without explicitly setting any variables other than F77, and it  
<br>
worked.  The only problem with this approach is that I had previously  
<br>
set CC=gcc-3.3, etc., so that my mpicc would have gcc-3.3 even if  
<br>
that was not my default compiler.  If I build without setting these,  
<br>
I will now have to use gcc_select every time (and I will probably  
<br>
forget sometimes).
<br>
<p><p>Thanks,
<br>
Charles
<br>
<p><p>On Apr 10, 2006, at 2:12 PM, Warner Yuen wrote:
<br>
<p><span class="quotelev1">&gt; Hi Charles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've only ever seen that error when trying to build OpenMPI with  
</span><br>
<span class="quotelev1">&gt; the IBM XLC compilers on Tiger. I just now successfully configured  
</span><br>
<span class="quotelev1">&gt; and built OpenMPI-1.0.2 using gcc 3.3 build 1819 and IBM XLF.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --disable-mpi-f90 --prefix=/hpc/mpis/ompi102f77
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please note that I can also build this with F90 support. As long as  
</span><br>
<span class="quotelev1">&gt; GCC 3.3 is used as my compiler. One curious thing is that if I set  
</span><br>
<span class="quotelev1">&gt; my envirornment to specifically use XLF, i.e. 'export F77=/opt/ 
</span><br>
<span class="quotelev1">&gt; ibmcmp/xlf/8.1/bin/f77' it will fail in the configure step.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just to be sure, OpenMPI fails to compile with your exact error if  
</span><br>
<span class="quotelev1">&gt; I first set my C compiler to IBM XLC.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Warner Yuen
</span><br>
<span class="quotelev1">&gt; Research Computing Consultant
</span><br>
<span class="quotelev1">&gt; Apple Computer
</span><br>
<span class="quotelev1">&gt; email: wyuen_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Tel: 408.718.2859
</span><br>
<span class="quotelev1">&gt; Fax: 408.715.0133
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 10, 2006, at 9:00 AM, users-request_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message: 1
</span><br>
<span class="quotelev2">&gt;&gt; Date: Mon, 10 Apr 2006 11:25:48 -0400
</span><br>
<span class="quotelev2">&gt;&gt; From: Charles Williams &lt;willic3_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: [OMPI users] Building OpenMPI on OS X Tiger with gcc-3.3
</span><br>
<span class="quotelev2">&gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Message-ID: &lt;21A2544D-194E-4655-A0C5-658248DC7BF4_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have been attempting to build OpenMPI on my Mac, using the older
</span><br>
<span class="quotelev2">&gt;&gt; gcc-3.3 compiler using rc2r9567.  Things proceed for a while, and
</span><br>
<span class="quotelev2">&gt;&gt; then I get:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Making all in xgrid
</span><br>
<span class="quotelev2">&gt;&gt; /Users/willic3/build/openmpi-buildgcc3.3/orte/dynamic-mca/pls/xgrid
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo src/pls_xgrid_component.lo | sed 's|[^/]*$|.deps/&amp;|;s|
</span><br>
<span class="quotelev2">&gt;&gt; \.lo$||'`; \
</span><br>
<span class="quotelev2">&gt;&gt; if /bin/sh ../../../../libtool --mode=compile gcc -DHAVE_CONFIG_H -I.
</span><br>
<span class="quotelev2">&gt;&gt; -I/Users/willic3/build/openmpi-1.0.2rc2r9567/orte/mca/pls/xgrid -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../../include -I../../../../include  -I/Users/willic3/build/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-buildgcc3.3/include  -I/Users/willic3/build/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.0.2rc2r9567/include -I/Users/willic3/build/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.0.2rc2r9567 -I../../../.. -I../../../../include -I/Users/
</span><br>
<span class="quotelev2">&gt;&gt; willic3/build/openmpi-1.0.2rc2r9567/opal -I/Users/willic3/build/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.0.2rc2r9567/orte -I/Users/willic3/build/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.0.2rc2r9567/ompi  -D_REENTRANT -F XGridFoundation  -MT src/
</span><br>
<span class="quotelev2">&gt;&gt; pls_xgrid_component.lo -MD -MP -MF &quot;$depbase.Tpo&quot; -c -o src/
</span><br>
<span class="quotelev2">&gt;&gt; pls_xgrid_component.lo /Users/willic3/build/openmpi-1.0.2rc2r9567/
</span><br>
<span class="quotelev2">&gt;&gt; orte/mca/pls/xgrid/src/pls_xgrid_component.m; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f &quot;$depbase.Tpo&quot; &quot;$depbase.Plo&quot;; else rm -f &quot;$depbase.Tpo&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; exit 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile: unable to infer tagged configuration
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile: specify a tag with `--tag'
</span><br>
<span class="quotelev2">&gt;&gt; make[4]: *** [src/pls_xgrid_component.lo] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I may be able to avoid this problem by building without xgrid (I'm
</span><br>
<span class="quotelev2">&gt;&gt; going to try that now), but does anyone have any ideas on other
</span><br>
<span class="quotelev2">&gt;&gt; solutions?  I've built the code successfully using the default Tiger
</span><br>
<span class="quotelev2">&gt;&gt; compilers.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Charles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Machine info:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; uname -a
</span><br>
<span class="quotelev2">&gt;&gt; Darwin rachel.geo.rpi.edu 8.6.0 Darwin Kernel Version 8.6.0: Tue Mar
</span><br>
<span class="quotelev2">&gt;&gt; 7 16:58:48 PST 2006; root:xnu-792.6.70.obj~1/RELEASE_PPC Power
</span><br>
<span class="quotelev2">&gt;&gt; Macintosh powerpc
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; gcc-3.3 --version
</span><br>
<span class="quotelev2">&gt;&gt; gcc-3.3 (GCC) 3.3 20030304 (Apple Computer, Inc. build 1819)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I configured and built after using 'gcc_select 3.3'.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Configure command:
</span><br>
<span class="quotelev2">&gt;&gt; /Users/willic3/build/openmpi-1.0.2rc2r9567/configure --prefix=/Users/
</span><br>
<span class="quotelev2">&gt;&gt; willic3/geo
</span><br>
<span class="quotelev2">&gt;&gt; frame/tools/openmpi-gcc3.3 --disable-mpi-f90
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I can also provide the configure and build logs if that will help.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Charles A. Williams
</span><br>
<span class="quotelev2">&gt;&gt; Dept. of Earth &amp; Environmental Sciences
</span><br>
<span class="quotelev2">&gt;&gt; Science Center, 2C01B
</span><br>
<span class="quotelev2">&gt;&gt; Rensselaer Polytechnic Institute
</span><br>
<span class="quotelev2">&gt;&gt; Troy, NY  12180
</span><br>
<span class="quotelev2">&gt;&gt; Phone:    (518) 276-3369
</span><br>
<span class="quotelev2">&gt;&gt; FAX:        (518) 276-2012
</span><br>
<span class="quotelev2">&gt;&gt; e-mail:    willic3_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Charles A. Williams
<br>
Dept. of Earth &amp; Environmental Sciences
<br>
Science Center, 2C01B
<br>
Rensselaer Polytechnic Institute
<br>
Troy, NY  12180
<br>
Phone:    (518) 276-3369
<br>
FAX:        (518) 276-2012
<br>
e-mail:    willic3_at_[hidden]
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1006/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1007.php">David Daniel: "Re: [OMPI users] Building OMPI-1.0.2 on OS X v10.3.9 with IBM XLC +XLF"</a>
<li><strong>Previous message:</strong> <a href="1005.php">Warner Yuen: "[OMPI users] Building OMPI-1.0.2 on OS X v10.3.9 with IBM XLC +XLF"</a>
<li><strong>In reply to:</strong> <a href="1004.php">Warner Yuen: "[OMPI users] Building OpenMPI on OS X Tiger with gcc-3.3"</a>
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
