<?
$subject_val = "[OMPI users] error compiling OpenMPI 1.3.3 with Intel compiler suite 11.1 on Linux";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  4 10:28:46 2009" -->
<!-- isoreceived="20090904142846" -->
<!-- sent="Fri, 4 Sep 2009 10:28:33 -0400" -->
<!-- isosent="20090904142833" -->
<!-- name="Greg Fischer" -->
<!-- email="greg.a.fischer_at_[hidden]" -->
<!-- subject="[OMPI users] error compiling OpenMPI 1.3.3 with Intel compiler suite 11.1 on Linux" -->
<!-- id="c615a6650909040728q7f9e2ce5hb8a42649ba8c8da3_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] error compiling OpenMPI 1.3.3 with Intel compiler suite 11.1 on Linux<br>
<strong>From:</strong> Greg Fischer (<em>greg.a.fischer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-04 10:28:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10572.php">Ben Mayer: "Re: [OMPI users] Problem specifying compiler (pgi)"</a>
<li><strong>Previous message:</strong> <a href="10570.php">Ben Mayer: "[OMPI users] Problem specifying compiler (pgi)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10576.php">Jeff Squyres: "Re: [OMPI users] error compiling OpenMPI 1.3.3 with Intel compilersuite 11.1 on Linux"</a>
<li><strong>Reply:</strong> <a href="10576.php">Jeff Squyres: "Re: [OMPI users] error compiling OpenMPI 1.3.3 with Intel compilersuite 11.1 on Linux"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm attempting to compile OpenMPI version 1.3.3 with Intel C/C++/Fortran
<br>
version 11.1.046.  Others have reported success using these compilers (
<br>
<a href="http://software.intel.com/en-us/forums/intel-c-compiler/topic/68111/">http://software.intel.com/en-us/forums/intel-c-compiler/topic/68111/</a>).  The
<br>
line where compilation fails is included at the end of this message.  I have
<br>
also attached complete &quot;./configure&quot; and &quot;make&quot; outputs.  Does anyone have
<br>
any insight as to what I'm doing wrong?
<br>
<p>Thanks,
<br>
Greg
<br>
<p>icpc11.1 -DHAVE_CONFIG_H -I. -I../../../opal/include -I../../../orte/include
<br>
-I../../../ompi/include
<br>
-I../../../opal/mca/paffinity/linux/plpa/src/libplpa
<br>
-DOMPI_CONFIGURE_USER=&quot;\&quot;fischega\&quot;&quot; -DOMPI_CONFIGURE_HOST=&quot;\&quot;susedev1\&quot;&quot;
<br>
-DOMPI_CONFIGURE_DATE=&quot;\&quot;Fri Sep  4 09:53:03 EDT 2009\&quot;&quot;
<br>
-DOMPI_BUILD_USER=&quot;\&quot;$USER\&quot;&quot; -DOMPI_BUILD_HOST=&quot;\&quot;`hostname`\&quot;&quot;
<br>
-DOMPI_BUILD_DATE=&quot;\&quot;`date`\&quot;&quot; -DOMPI_BUILD_CFLAGS=&quot;\&quot;-O3 -DNDEBUG
<br>
-finline-functions -fno-strict-aliasing -restrict -pthread
<br>
-fvisibility=hidden\&quot;&quot; -DOMPI_BUILD_CPPFLAGS=&quot;\&quot;-I../../..  \&quot;&quot;
<br>
-DOMPI_BUILD_CXXFLAGS=&quot;\&quot;-O3 -DNDEBUG -finline-functions -pthread\&quot;&quot;
<br>
-DOMPI_BUILD_CXXCPPFLAGS=&quot;\&quot;-I../../..  \&quot;&quot; -DOMPI_BUILD_FFLAGS=&quot;\&quot;\&quot;&quot;
<br>
-DOMPI_BUILD_FCFLAGS=&quot;\&quot;\&quot;&quot; -DOMPI_BUILD_LDFLAGS=&quot;\&quot;-export-dynamic  \&quot;&quot;
<br>
-DOMPI_BUILD_LIBS=&quot;\&quot;-lnsl -lutil  \&quot;&quot;
<br>
-DOMPI_CC_ABSOLUTE=&quot;\&quot;/usr/scripts/icc11.1\&quot;&quot;
<br>
-DOMPI_CXX_ABSOLUTE=&quot;\&quot;/usr/scripts/icpc11.1\&quot;&quot;
<br>
-DOMPI_F77_ABSOLUTE=&quot;\&quot;/usr/scripts/ifort11.1\&quot;&quot;
<br>
-DOMPI_F90_ABSOLUTE=&quot;\&quot;/usr/scripts/ifort11.1\&quot;&quot;
<br>
-DOMPI_F90_BUILD_SIZE=&quot;\&quot;small\&quot;&quot; -I../../..    -O3 -DNDEBUG
<br>
-finline-functions -pthread -MT components.o -MD -MP -MF $depbase.Tpo -c -o
<br>
components.o components.cc &amp;&amp;\
<br>
mv -f $depbase.Tpo $depbase.Po
<br>
icpc: error #10236: File not found:  'Sep'
<br>
icpc: error #10236: File not found:  '4'
<br>
icpc: error #10236: File not found:  '09:53:03'
<br>
icpc: error #10236: File not found:  'EDT'
<br>
icpc: error #10236: File not found:  '2009&quot;'
<br>
icpc: error #10236: File not found:  'Sep'
<br>
icpc: error #10236: File not found:  '4'
<br>
icpc: error #10236: File not found:  '10:11:04'
<br>
icpc: error #10236: File not found:  'EDT'
<br>
icpc: error #10236: File not found:  '2009&quot;'
<br>
icpc: command line warning #10159: invalid argument for option
<br>
'-fvisibility'
<br>
icpc: error #10236: File not found:  '&quot;'
<br>
icpc: command line warning #10156: ignoring option '-p'; no argument
<br>
required
<br>
icpc: error #10236: File not found:  '&quot;'
<br>
icpc: error #10236: File not found:  '&quot;'
<br>
icpc: error #10236: File not found:  '&quot;'
<br>
make[2]: *** [components.o] Error 1
<br>
make[2]: Leaving directory
<br>
`/home/fischega/src/openmpi-1.3.3/ompi/tools/ompi_info'
<br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10571/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10571/ompi-output.tar.bz2">ompi-output.tar.bz2</a>
</ul>
<!-- attachment="ompi-output.tar.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10572.php">Ben Mayer: "Re: [OMPI users] Problem specifying compiler (pgi)"</a>
<li><strong>Previous message:</strong> <a href="10570.php">Ben Mayer: "[OMPI users] Problem specifying compiler (pgi)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10576.php">Jeff Squyres: "Re: [OMPI users] error compiling OpenMPI 1.3.3 with Intel compilersuite 11.1 on Linux"</a>
<li><strong>Reply:</strong> <a href="10576.php">Jeff Squyres: "Re: [OMPI users] error compiling OpenMPI 1.3.3 with Intel compilersuite 11.1 on Linux"</a>
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
