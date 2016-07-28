<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 12 16:15:18 2005" -->
<!-- isoreceived="20051012211518" -->
<!-- sent="Wed, 12 Oct 2005 14:15:05 -0700" -->
<!-- isosent="20051012211505" -->
<!-- name="Ken Mighell" -->
<!-- email="mighell_at_[hidden]" -->
<!-- subject="[O-MPI users] Building 1.0rc3 on Mac OSX Tiger with macosx-pkg/buildpackage.sh fails on Apple dual G5 tower" -->
<!-- id="E3FD0319-4C04-4856-8EC0-11D7C4BF3F5C_at_noao.edu" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Ken Mighell (<em>mighell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-10-12 16:15:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0191.php">Brian Barrett: "Re: [O-MPI users] Building 1.0rc3 on Mac OSX Tiger with macosx-pkg/buildpackage.sh fails on Apple dual G5 tower"</a>
<li><strong>Previous message:</strong> <a href="0189.php">Greg Lindahl: "Re: [O-MPI users] [Beowulf] MorphMPI based on fortran itf (was: MPI ABI)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0191.php">Brian Barrett: "Re: [O-MPI users] Building 1.0rc3 on Mac OSX Tiger with macosx-pkg/buildpackage.sh fails on Apple dual G5 tower"</a>
<li><strong>Reply:</strong> <a href="0191.php">Brian Barrett: "Re: [O-MPI users] Building 1.0rc3 on Mac OSX Tiger with macosx-pkg/buildpackage.sh fails on Apple dual G5 tower"</a>
<li><strong>Maybe reply:</strong> <a href="0192.php">Ken Mighell: "Re: [O-MPI users] Building 1.0rc3 on Mac OSX Tiger with macosx-pkg/buildpackage.sh fails on Apple dual G5 tower"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear OpenMPI,
<br>
<p>I tried to build 1.0rc3 on my Apple dual G5 tower running OSX Tiger:
<br>
<p>&nbsp;&nbsp;mighell% ./buildpackage.sh ~/pkg/openmpi/src/openmpi-1.0rc3.tar.gz  
<br>
~/pkg/openmpi/
<br>
--&gt; Configuration options:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Package Name:   openmpi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Prefix:         /Users/mighell/pkg/openmpi/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Boot:           ssh
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Config Options: --disable-f77 --without-cs-fs
<br>
--&gt; Found tarball: /Users/mighell/pkg/openmpi/src/openmpi-1.0rc3.tar.gz
<br>
--&gt; Found OMPI version: 1.0rc3
<br>
--&gt; Cleaning environment
<br>
--&gt; Making play space: /tmp/buildpackage-6060
<br>
--&gt; Copying tarball
<br>
--&gt; Untarring source: tar xzf openmpi-1.0rc3.tar.gz
<br>
--&gt; Running configure: ./configure --prefix=/Users/mighell/pkg/ 
<br>
openmpi/ --with-rsh=ssh --disable-f77 --without-cs-fs
<br>
--&gt; Building: make all
<br>
*** Problem building - aborting!
<br>
*** See /tmp/buildpackage-6060/make.out for help.
<br>
<p>The last 20 lines of make.out are:
<br>
<p>cc -DHAVE_CONFIG_H -I. -I. -I../../../../include -I../../../../ 
<br>
include -I../../../../include -I../../../.. -I../../../.. - 
<br>
I../../../../include -I../../../../opal -I../../../../orte - 
<br>
I../../../../ompi -D_REENTRANT -O3 -DNDEBUG -fno-strict-aliasing -MT  
<br>
pls_slurm_component.lo -MD -MP -MF .deps/pls_slurm_component.Tpo -c  
<br>
pls_slurm_component.c  -fno-common -DPIC -o .libs/pls_slurm_component.o
<br>
depbase=`echo pls_slurm_module.lo | sed 's|[^/]*$|.deps/&amp;|;s|\.lo 
<br>
$||'`; \
<br>
if /bin/sh ../../../../libtool --tag=CC --mode=compile cc - 
<br>
DHAVE_CONFIG_H -I. -I. -I../../../../include -I../../../../include   - 
<br>
I../../../../include -I../../../.. -I../../../.. -I../../../../ 
<br>
include -I../../../../opal -I../../../../orte -I../../../../ompi  - 
<br>
D_REENTRANT  -O3 -DNDEBUG -fno-strict-aliasing  -MT  
<br>
pls_slurm_module.lo -MD -MP -MF &quot;$depbase.Tpo&quot; -c -o  
<br>
pls_slurm_module.lo pls_slurm_module.c; \
<br>
then mv -f &quot;$depbase.Tpo&quot; &quot;$depbase.Plo&quot;; else rm -f &quot;$depbase.Tpo&quot;;  
<br>
exit 1; fi
<br>
cc -DHAVE_CONFIG_H -I. -I. -I../../../../include -I../../../../ 
<br>
include -I../../../../include -I../../../.. -I../../../.. - 
<br>
I../../../../include -I../../../../opal -I../../../../orte - 
<br>
I../../../../ompi -D_REENTRANT -O3 -DNDEBUG -fno-strict-aliasing -MT  
<br>
pls_slurm_module.lo -MD -MP -MF .deps/pls_slurm_module.Tpo -c  
<br>
pls_slurm_module.c  -fno-common -DPIC -o .libs/pls_slurm_module.o
<br>
/bin/sh ../../../../libtool --tag=CC --mode=link cc  -O3 -DNDEBUG - 
<br>
fno-strict-aliasing   -export-dynamic   -o mca_pls_slurm.la -rpath / 
<br>
Users/mighell/pkg/openmpi//lib/openmpi -module -avoid-version  
<br>
pls_slurm_component.lo pls_slurm_module.lo /tmp/buildpackage-6060/ 
<br>
openmpi-1.0rc3/orte/liborte.la /tmp/buildpackage-6060/openmpi-1.0rc3/ 
<br>
opal/libopal.la -lm
<br>
cc ${wl}-flat_namespace ${wl}-undefined ${wl}suppress -o .libs/ 
<br>
mca_pls_slurm.so -bundle  .libs/pls_slurm_component.o .libs/ 
<br>
pls_slurm_module.o  /tmp/buildpackage-6060/openmpi-1.0rc3/orte/.libs/ 
<br>
liborte.dylib /tmp/buildpackage-6060/openmpi-1.0rc3/opal/.libs/ 
<br>
libopal.dylib -lm
<br>
creating mca_pls_slurm.la
<br>
(cd .libs &amp;&amp; rm -f mca_pls_slurm.la &amp;&amp; ln -s ../mca_pls_slurm.la  
<br>
mca_pls_slurm.la)
<br>
Making all in xgrid
<br>
depbase=`echo src/pls_xgrid_component.lo | sed 's|[^/]*$|.deps/&amp;|;s| 
<br>
\.lo$||'`; \
<br>
if /bin/sh ../../../../libtool --mode=compile gcc -DHAVE_CONFIG_H -I.  
<br>
-I. -I../../../../include -I../../../../include  -I/tmp/ 
<br>
buildpackage-6060/openmpi-1.0rc3/include  -I../../../../include - 
<br>
I../../../.. -I../../../.. -I../../../../include -I../../../../opal - 
<br>
I../../../../orte -I../../../../ompi  -D_REENTRANT -F  
<br>
XGridFoundation  -MT src/pls_xgrid_component.lo -MD -MP -MF  
<br>
&quot;$depbase.Tpo&quot; -c -o src/pls_xgrid_component.lo src/ 
<br>
pls_xgrid_component.m; \
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
<p>The configure.out, config.log, and the make.out files are given in
<br>
<p>

<br><p>
<p>This looks like it may be similar to the problem reported yesterday  
<br>
by Charles Williams.
<br>
<p>Thanks,
<br>
<p>-Ken Mighell
<br>
<p>------------------------------------------------------------------------ 
<br>
-------
<br>
Kenneth Mighell, Associate Scientist     E-mail: .............  
<br>
mighell_at_[hidden]
<br>
Kitt Peak National Observatory           Phone: ..................  
<br>
520-318-8391
<br>
National Optical Astronomy Observatory   Fax: ....................  
<br>
520-318-8360
<br>
P.O. Box 26732, Tucson, AZ  85726-6732   URL: <a href="http://www.noao.edu/">http://www.noao.edu/</a> 
<br>
staff/mighell
<br>
<p><p><hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0190/msg.out.gz">msg.out.gz</a>
</ul>
<!-- attachment="msg.out.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0191.php">Brian Barrett: "Re: [O-MPI users] Building 1.0rc3 on Mac OSX Tiger with macosx-pkg/buildpackage.sh fails on Apple dual G5 tower"</a>
<li><strong>Previous message:</strong> <a href="0189.php">Greg Lindahl: "Re: [O-MPI users] [Beowulf] MorphMPI based on fortran itf (was: MPI ABI)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0191.php">Brian Barrett: "Re: [O-MPI users] Building 1.0rc3 on Mac OSX Tiger with macosx-pkg/buildpackage.sh fails on Apple dual G5 tower"</a>
<li><strong>Reply:</strong> <a href="0191.php">Brian Barrett: "Re: [O-MPI users] Building 1.0rc3 on Mac OSX Tiger with macosx-pkg/buildpackage.sh fails on Apple dual G5 tower"</a>
<li><strong>Maybe reply:</strong> <a href="0192.php">Ken Mighell: "Re: [O-MPI users] Building 1.0rc3 on Mac OSX Tiger with macosx-pkg/buildpackage.sh fails on Apple dual G5 tower"</a>
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
