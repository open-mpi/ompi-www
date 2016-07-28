<?
$subject_val = "[OMPI users] openmpi 32-bit g++ compilation issue";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 19 17:49:11 2008" -->
<!-- isoreceived="20080519214911" -->
<!-- sent="Mon, 19 May 2008 22:48:23 +0100" -->
<!-- isosent="20080519214823" -->
<!-- name="Arif Ali" -->
<!-- email="aali_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi 32-bit g++ compilation issue" -->
<!-- id="191EB8BA1D4E4F4F932AFC4DDE49A05A6B1E8F_at_mailserver.ocf.co.uk" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] openmpi 32-bit g++ compilation issue<br>
<strong>From:</strong> Arif Ali (<em>aali_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-19 17:48:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5705.php">Doug Reeder: "Re: [OMPI users] openmpi 32-bit g++ compilation issue"</a>
<li><strong>Previous message:</strong> <a href="5703.php">Jeff Squyres: "Re: [OMPI users] &quot;Sorry!  You were supposed to get help about...&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5705.php">Doug Reeder: "Re: [OMPI users] openmpi 32-bit g++ compilation issue"</a>
<li><strong>Reply:</strong> <a href="5705.php">Doug Reeder: "Re: [OMPI users] openmpi 32-bit g++ compilation issue"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/06/5800.php">Jeff Squyres: "Re: [OMPI users] openmpi 32-bit g++ compilation issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>OS: SLES10 SP1
<br>
OFED: 1.3
<br>
openmpi: 1.2 1.2.5 1.2.6
<br>
compilers: gcc g++ gfortran
<br>
<p>I am creating a 32-bit build of openmpi on an Infiniband cluster, and the compilation gets stuck, If I use the /usr/lib64/gcc/x86_64-suse-linux/4.1.2/32/libstdc++.so library manually it compiles that piece of code. I was wandering if anyone else has had this problem. Or is there any other way of getting this to work. I feel that there may be something very silly here that I have missed out. but I can't seem to gather it.
<br>
<p>I have also tried this on a fresh install of OFED 1.3 with openmpi 1.2.6
<br>
<p><p>libtool: compile:  g++ -DHAVE_CONFIG_H -I. -I../../../opal/include -I../../../orte/include -I../../../ompi/include -DOMPI_BUILDING_CXX_BINDINGS_LIBRARY=1 -DOMPI_SKIP_MPICXX=1 -I../../.. -O3 -DNDEBUG -m32 -finline-functions -pthread -MT file.lo -MD -MP -MF .deps/file.Tpo -c file.cc  -fPIC -DPIC -o .libs/file.o
<br>
depbase=`echo win.lo | sed 's|[^/]*$|.deps/&amp;|;s|\.lo$||'`;\
<br>
/bin/sh ../../../libtool --tag=CXX   --mode=compile g++ -DHAVE_CONFIG_H -I. -I../../../opal/include -I../../../orte/include -I../../../ompi/include  -DOMPI_BUILDING_CXX_BINDINGS_LIBRARY=1 -DOMPI_SKIP_MPICXX=1 -I../../..    -O3 -DNDEBUG -m32 -finline-functions -pthread -MT win.lo -MD -MP -MF $depbase.Tpo -c -o win.lo win.cc &amp;&amp;\
<br>
mv -f $depbase.Tpo $depbase.Plo
<br>
libtool: compile:  g++ -DHAVE_CONFIG_H -I. -I../../../opal/include -I../../../orte/include -I../../../ompi/include -DOMPI_BUILDING_CXX_BINDINGS_LIBRARY=1 -DOMPI_SKIP_MPICXX=1 -I../../.. -O3 -DNDEBUG -m32 -finline-functions -pthread -MT win.lo -MD -MP -MF .deps/win.Tpo -c win.cc  -fPIC -DPIC -o .libs/win.o
<br>
/bin/sh ../../../libtool --tag=CXX   --mode=link g++  -O3 -DNDEBUG -m32 -finline-functions -pthread  -export-dynamic -m32  -o libmpi_cxx.la -rpath /opt/openmpi/1.2.6/gnu_4.1.2/32/lib mpicxx.lo intercepts.lo comm.lo datatype.lo file.lo win.lo  -lnsl -lutil  -lm 
<br>
libtool: link: g++ -shared -nostdlib /usr/lib64/gcc/x86_64-suse-linux/4.1.2/../../../../lib/crti.o /usr/lib64/gcc/x86_64-suse-linux/4.1.2/32/crtbeginS.o  .libs/mpicxx.o .libs/intercepts.o .libs/comm.o .libs/datatype.o .libs/file.o .libs/win.o   -Wl,-rpath -Wl,/usr/lib64/gcc/x86_64-suse-linux/4.1.2 -Wl,-rpath -Wl,/usr/lib64/gcc/x86_64-suse-linux/4.1.2 -lnsl -lutil -L/usr/lib64/gcc/x86_64-suse-linux/4.1.2/32 -L/usr/lib64/gcc/x86_64-suse-linux/4.1.2/../../../../x86_64-suse-linux/lib/../lib -L/usr/lib64/gcc/x86_64-suse-linux/4.1.2/../../../../lib -L/lib/../lib -L/usr/lib/../lib -L/usr/lib64/gcc/x86_64-suse-linux/4.1.2 -L/usr/lib64/gcc/x86_64-suse-linux/4.1.2/../../../../x86_64-suse-linux/lib -L/usr/lib64/gcc/x86_64-suse-linux/4.1.2/../../.. /usr/lib64/gcc/x86_64-suse-linux/4.1.2/libstdc++.so -lm -lpthread -lc -lgcc_s /usr/lib64/gcc/x86_64-suse-linux/4.1.2/32/crtendS.o /usr/lib64/gcc/x86_64-suse-linux/4.1.2/../../../../lib/crtn.o  -m32 -pthread -m32   -pthread -Wl,-soname -Wl,libmpi_cxx.so.0 -o .libs/libmpi_cxx.so.0.0.0
<br>
/usr/lib64/gcc/x86_64-suse-linux/4.1.2/libstdc++.so: could not read symbols: File in wrong format
<br>
collect2: ld returned 1 exit status
<br>
<p><pre>
-- 
Arif Ali
Software Engineer
OCF plc
Mobile: +44 (0)7970 148 122
DDI:    +44 (0)114 257 2240
Office: +44 (0)114 257 2200
Fax:    +44 (0)114 257 0022
Email:  aali_at_[hidden]
Web:    <a href="http://www.ocf.co.uk">http://www.ocf.co.uk</a>
Support Phone:   +44 (0)845 702 3829
Support E-mail:  support_at_[hidden]
Skype:  arif_ali80
MSN:    aali_at_[hidden]
This email is confidential in that it is intended for the exclusive 
attention of the addressee(s) indicated. If you are not the intended 
recipient, this email should not be read or disclosed to any other 
person. Please notify the sender immediately and delete this email from 
your computer system. Any opinions expressed are not necessarily those 
of the company from which this email was sent and, whilst to the best of
our knowledge no viruses or defects exist, no responsibility can be 
accepted for any loss or damage arising from its receipt or subsequent 
use of this email. 
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5704/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5705.php">Doug Reeder: "Re: [OMPI users] openmpi 32-bit g++ compilation issue"</a>
<li><strong>Previous message:</strong> <a href="5703.php">Jeff Squyres: "Re: [OMPI users] &quot;Sorry!  You were supposed to get help about...&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5705.php">Doug Reeder: "Re: [OMPI users] openmpi 32-bit g++ compilation issue"</a>
<li><strong>Reply:</strong> <a href="5705.php">Doug Reeder: "Re: [OMPI users] openmpi 32-bit g++ compilation issue"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/06/5800.php">Jeff Squyres: "Re: [OMPI users] openmpi 32-bit g++ compilation issue"</a>
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
