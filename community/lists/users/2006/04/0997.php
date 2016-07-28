<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Apr 10 11:25:56 2006" -->
<!-- isoreceived="20060410152556" -->
<!-- sent="Mon, 10 Apr 2006 11:25:48 -0400" -->
<!-- isosent="20060410152548" -->
<!-- name="Charles Williams" -->
<!-- email="willic3_at_[hidden]" -->
<!-- subject="[OMPI users] Building OpenMPI on OS X Tiger with gcc-3.3" -->
<!-- id="21A2544D-194E-4655-A0C5-658248DC7BF4_at_rpi.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="mailman.1173.1144681003.3068.users_at_open-mpi.org" -->
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
<strong>Date:</strong> 2006-04-10 11:25:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0998.php">Troy Telford: "[OMPI users] Funny ./configure option"</a>
<li><strong>Previous message:</strong> <a href="0996.php">Brian Barrett: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have been attempting to build OpenMPI on my Mac, using the older  
<br>
gcc-3.3 compiler using rc2r9567.  Things proceed for a while, and  
<br>
then I get:
<br>
<p>Making all in xgrid
<br>
/Users/willic3/build/openmpi-buildgcc3.3/orte/dynamic-mca/pls/xgrid
<br>
depbase=`echo src/pls_xgrid_component.lo | sed 's|[^/]*$|.deps/&amp;|;s| 
<br>
\.lo$||'`; \
<br>
if /bin/sh ../../../../libtool --mode=compile gcc -DHAVE_CONFIG_H -I.  
<br>
-I/Users/willic3/build/openmpi-1.0.2rc2r9567/orte/mca/pls/xgrid - 
<br>
I../../../../include -I../../../../include  -I/Users/willic3/build/ 
<br>
openmpi-buildgcc3.3/include  -I/Users/willic3/build/ 
<br>
openmpi-1.0.2rc2r9567/include -I/Users/willic3/build/ 
<br>
openmpi-1.0.2rc2r9567 -I../../../.. -I../../../../include -I/Users/ 
<br>
willic3/build/openmpi-1.0.2rc2r9567/opal -I/Users/willic3/build/ 
<br>
openmpi-1.0.2rc2r9567/orte -I/Users/willic3/build/ 
<br>
openmpi-1.0.2rc2r9567/ompi  -D_REENTRANT -F XGridFoundation  -MT src/ 
<br>
pls_xgrid_component.lo -MD -MP -MF &quot;$depbase.Tpo&quot; -c -o src/ 
<br>
pls_xgrid_component.lo /Users/willic3/build/openmpi-1.0.2rc2r9567/ 
<br>
orte/mca/pls/xgrid/src/pls_xgrid_component.m; \
<br>
then mv -f &quot;$depbase.Tpo&quot; &quot;$depbase.Plo&quot;; else rm -f &quot;$depbase.Tpo&quot;;  
<br>
exit 1; fi
<br>
libtool: compile: unable to infer tagged configuration
<br>
libtool: compile: specify a tag with `--tag'
<br>
make[4]: *** [src/pls_xgrid_component.lo] Error 1
<br>
make[3]: *** [all-recursive] Error 1
<br>
make[2]: *** [all-recursive] Error 1
<br>
make[1]: *** [all-recursive] Error 1
<br>
make: *** [all-recursive] Error 1
<br>
<p>I may be able to avoid this problem by building without xgrid (I'm  
<br>
going to try that now), but does anyone have any ideas on other  
<br>
solutions?  I've built the code successfully using the default Tiger  
<br>
compilers.
<br>
<p>Thanks,
<br>
Charles
<br>
<p>Machine info:
<br>
<p>uname -a
<br>
Darwin rachel.geo.rpi.edu 8.6.0 Darwin Kernel Version 8.6.0: Tue Mar   
<br>
7 16:58:48 PST 2006; root:xnu-792.6.70.obj~1/RELEASE_PPC Power  
<br>
Macintosh powerpc
<br>
<p>gcc-3.3 --version
<br>
gcc-3.3 (GCC) 3.3 20030304 (Apple Computer, Inc. build 1819)
<br>
<p>I configured and built after using 'gcc_select 3.3'.
<br>
<p>Configure command:
<br>
/Users/willic3/build/openmpi-1.0.2rc2r9567/configure --prefix=/Users/ 
<br>
willic3/geo
<br>
frame/tools/openmpi-gcc3.3 --disable-mpi-f90
<br>
<p>I can also provide the configure and build logs if that will help.
<br>
<p><p>Charles A. Williams
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0997/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0998.php">Troy Telford: "[OMPI users] Funny ./configure option"</a>
<li><strong>Previous message:</strong> <a href="0996.php">Brian Barrett: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
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
