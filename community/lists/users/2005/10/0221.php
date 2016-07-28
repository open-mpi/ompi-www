<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct 21 14:38:58 2005" -->
<!-- isoreceived="20051021193858" -->
<!-- sent="Fri, 21 Oct 2005 12:37:51 -0700" -->
<!-- isosent="20051021193751" -->
<!-- name="Ken Mighell" -->
<!-- email="mighell_at_[hidden]" -->
<!-- subject="[O-MPI users] Building 1.0rc4 failed on a 5-node Beowulf cluster running RedHat Linux 7.3" -->
<!-- id="20C3DC72-FFAB-4475-825D-4F25ED946BC8_at_noao.edu" -->
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
<strong>From:</strong> Ken Mighell (<em>mighell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-10-21 14:37:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0222.php">George Bosilca: "Re: [O-MPI users] Building 1.0rc4 failed on a 5-node Beowulf cluster running RedHat Linux 7.3"</a>
<li><strong>Previous message:</strong> <a href="0220.php">Charles Williams: "[O-MPI users] Correction to 'Questions about mpif90/g95'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0222.php">George Bosilca: "Re: [O-MPI users] Building 1.0rc4 failed on a 5-node Beowulf cluster running RedHat Linux 7.3"</a>
<li><strong>Reply:</strong> <a href="0222.php">George Bosilca: "Re: [O-MPI users] Building 1.0rc4 failed on a 5-node Beowulf cluster running RedHat Linux 7.3"</a>
<li><strong>Reply:</strong> <a href="0224.php">Ken Mighell: "Re: [O-MPI users] Building 1.0rc4 failed on a 5-node Beowulf cluster running RedHat Linux 7.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear OpenMPI,
<br>
<p>I tried to build 1.0rc4 on a 3 year old 5-node Beowulf cluster  
<br>
running RedHat Linux 7.3. The build failed during
<br>
make all; the last few lines of the log file are:
<br>
<p>mkdir .libs
<br>
gcc -DHAVE_CONFIG_H -I. -I. -I../../include -I../../include -I../../ 
<br>
src/event -I../../include -I../.. -I../.. -I../../include -I../../ 
<br>
opal -I../../orte -I../../ompi -O3 -DNDEBUG -fno-strict-aliasing - 
<br>
pthread -MT opal_progress.lo -MD -MP -MF .deps/opal_progress.Tpo -c  
<br>
opal_progress.c  -fPIC -DPIC -o .libs/opal_progress.o
<br>
depbase=`echo opal_finalize.lo | sed 's|[^/]*$|.deps/&amp;|;s|\.lo$||'`; \
<br>
if /bin/sh ../../libtool --tag=CC --mode=compile gcc -DHAVE_CONFIG_H - 
<br>
I. -I. -I../../include -I../../include  -I../../src/event -I../../ 
<br>
include -I../.. -I../.. -I../../include -I../../opal -I../../orte - 
<br>
I../../ompi    -O3 -DNDEBUG -fno-strict-aliasing -pthread -MT  
<br>
opal_finalize.lo -MD -MP -MF &quot;$depbase.Tpo&quot; -c -o opal_finalize.lo  
<br>
opal_finalize.c; \
<br>
then mv -f &quot;$depbase.Tpo&quot; &quot;$depbase.Plo&quot;; else rm -f &quot;$depbase.Tpo&quot;;  
<br>
exit 1; fi
<br>
gcc -DHAVE_CONFIG_H -I. -I. -I../../include -I../../include -I../../ 
<br>
src/event -I../../include -I../.. -I../.. -I../../include -I../../ 
<br>
opal -I../../orte -I../../ompi -O3 -DNDEBUG -fno-strict-aliasing - 
<br>
pthread -MT opal_finalize.lo -MD -MP -MF .deps/opal_finalize.Tpo -c  
<br>
opal_finalize.c  -fPIC -DPIC -o .libs/opal_finalize.o
<br>
depbase=`echo opal_init.lo | sed 's|[^/]*$|.deps/&amp;|;s|\.lo$||'`; \
<br>
if /bin/sh ../../libtool --tag=CC --mode=compile gcc -DHAVE_CONFIG_H - 
<br>
I. -I. -I../../include -I../../include  -I../../src/event -I../../ 
<br>
include -I../.. -I../.. -I../../include -I../../opal -I../../orte - 
<br>
I../../ompi    -O3 -DNDEBUG -fno-strict-aliasing -pthread -MT  
<br>
opal_init.lo -MD -MP -MF &quot;$depbase.Tpo&quot; -c -o opal_init.lo  
<br>
opal_init.c; \
<br>
then mv -f &quot;$depbase.Tpo&quot; &quot;$depbase.Plo&quot;; else rm -f &quot;$depbase.Tpo&quot;;  
<br>
exit 1; fi
<br>
gcc -DHAVE_CONFIG_H -I. -I. -I../../include -I../../include -I../../ 
<br>
src/event -I../../include -I../.. -I../.. -I../../include -I../../ 
<br>
opal -I../../orte -I../../ompi -O3 -DNDEBUG -fno-strict-aliasing - 
<br>
pthread -MT opal_init.lo -MD -MP -MF .deps/opal_init.Tpo -c  
<br>
opal_init.c  -fPIC -DPIC -o .libs/opal_init.o
<br>
opal_init.c: In function `opal_init':
<br>
opal_init.c:127: incompatible type for argument 3 of `opal_show_help'
<br>
make[2]: *** [opal_init.lo] Error 1
<br>
make[1]: *** [all-recursive] Error 1
<br>
make: *** [all-recursive] Error 1
<br>
make[2]: Leaving directory `/home/mighell/pkg/ompi/openmpi-1.0rc4/ 
<br>
opal/runtime'
<br>
make[1]: Leaving directory `/home/mighell/pkg/ompi/openmpi-1.0rc4/opal'
<br>
<p>I have included gzipped versions of config.log and the result of make  
<br>
all:
<br>
<p>&#239;&#191;&#188;&#239;&#191;&#188;
<br>
I was able to build this same package on my Apple dual G5 tower today  
<br>
without any problems.
<br>
<p>Keep up the good work!
<br>
<p>Best regards,
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
<p><p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0221/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0221/config.log.gz">config.log.gz</a>
</ul>
<!-- attachment="config.log.gz" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0221/make_all.log.gz">make_all.log.gz</a>
</ul>
<!-- attachment="make_all.log.gz" -->
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0221/04-attachment">attachment</a>
</ul>
<!-- attachment="04-attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0222.php">George Bosilca: "Re: [O-MPI users] Building 1.0rc4 failed on a 5-node Beowulf cluster running RedHat Linux 7.3"</a>
<li><strong>Previous message:</strong> <a href="0220.php">Charles Williams: "[O-MPI users] Correction to 'Questions about mpif90/g95'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0222.php">George Bosilca: "Re: [O-MPI users] Building 1.0rc4 failed on a 5-node Beowulf cluster running RedHat Linux 7.3"</a>
<li><strong>Reply:</strong> <a href="0222.php">George Bosilca: "Re: [O-MPI users] Building 1.0rc4 failed on a 5-node Beowulf cluster running RedHat Linux 7.3"</a>
<li><strong>Reply:</strong> <a href="0224.php">Ken Mighell: "Re: [O-MPI users] Building 1.0rc4 failed on a 5-node Beowulf cluster running RedHat Linux 7.3"</a>
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
