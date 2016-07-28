<?
$subject_val = "Re: [OMPI users] openmpi 32-bit g++ compilation issue";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 19 18:15:33 2008" -->
<!-- isoreceived="20080519221533" -->
<!-- sent="Mon, 19 May 2008 15:09:20 -0700" -->
<!-- isosent="20080519220920" -->
<!-- name="Doug Reeder" -->
<!-- email="dlr_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi 32-bit g++ compilation issue" -->
<!-- id="92FE3A13-24A9-47D3-B92F-B285997A3B15_at_rain.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="191EB8BA1D4E4F4F932AFC4DDE49A05A6B1E8F_at_mailserver.ocf.co.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi 32-bit g++ compilation issue<br>
<strong>From:</strong> Doug Reeder (<em>dlr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-19 18:09:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5706.php">Terry Frankcombe: "Re: [OMPI users] Memory manager"</a>
<li><strong>Previous message:</strong> <a href="5704.php">Arif Ali: "[OMPI users] openmpi 32-bit g++ compilation issue"</a>
<li><strong>In reply to:</strong> <a href="5704.php">Arif Ali: "[OMPI users] openmpi 32-bit g++ compilation issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/06/5800.php">Jeff Squyres: "Re: [OMPI users] openmpi 32-bit g++ compilation issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Arif,
<br>
<p>It looks like your system is 64 bit by default and it therefore  
<br>
doesn't pick up the 32 bit libraries automatically at the link step  
<br>
(note the -L/......./x86_64-suse-linux/lib entries prior to the  
<br>
correspond entries pointing to the 32 bit library versions). I don't  
<br>
use suse linux so I don't know if this is something you can control  
<br>
in the configure step for open-mpi.
<br>
<p>Doug Reeder
<br>
On May 19, 2008, at 2:48 PM, Arif Ali wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OS: SLES10 SP1
</span><br>
<span class="quotelev1">&gt; OFED: 1.3
</span><br>
<span class="quotelev1">&gt; openmpi: 1.2 1.2.5 1.2.6
</span><br>
<span class="quotelev1">&gt; compilers: gcc g++ gfortran
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am creating a 32-bit build of openmpi on an Infiniband cluster,  
</span><br>
<span class="quotelev1">&gt; and the compilation gets stuck, If I use the /usr/lib64/gcc/x86_64- 
</span><br>
<span class="quotelev1">&gt; suse-linux/4.1.2/32/libstdc++.so library manually it compiles that  
</span><br>
<span class="quotelev1">&gt; piece of code. I was wandering if anyone else has had this problem.  
</span><br>
<span class="quotelev1">&gt; Or is there any other way of getting this to work. I feel that  
</span><br>
<span class="quotelev1">&gt; there may be something very silly here that I have missed out. but  
</span><br>
<span class="quotelev1">&gt; I can't seem to gather it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have also tried this on a fresh install of OFED 1.3 with openmpi  
</span><br>
<span class="quotelev1">&gt; 1.2.6
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; libtool: compile:  g++ -DHAVE_CONFIG_H -I. -I../../../opal/include - 
</span><br>
<span class="quotelev1">&gt; I../../../orte/include -I../../../ompi/include - 
</span><br>
<span class="quotelev1">&gt; DOMPI_BUILDING_CXX_BINDINGS_LIBRARY=1 -DOMPI_SKIP_MPICXX=1 - 
</span><br>
<span class="quotelev1">&gt; I../../.. -O3 -DNDEBUG -m32 -finline-functions -pthread -MT file.lo  
</span><br>
<span class="quotelev1">&gt; -MD -MP -MF .deps/file.Tpo -c file.cc  -fPIC -DPIC -o .libs/file.o
</span><br>
<span class="quotelev1">&gt; depbase=`echo win.lo | sed 's|[^/]*$|.deps/&amp;|;s|\.lo$||'`;\
</span><br>
<span class="quotelev1">&gt; /bin/sh ../../../libtool --tag=CXX   --mode=compile g++ - 
</span><br>
<span class="quotelev1">&gt; DHAVE_CONFIG_H -I. -I../../../opal/include -I../../../orte/include - 
</span><br>
<span class="quotelev1">&gt; I../../../ompi/include  -DOMPI_BUILDING_CXX_BINDINGS_LIBRARY=1 - 
</span><br>
<span class="quotelev1">&gt; DOMPI_SKIP_MPICXX=1 -I../../..    -O3 -DNDEBUG -m32 -finline- 
</span><br>
<span class="quotelev1">&gt; functions -pthread -MT win.lo -MD -MP -MF $depbase.Tpo -c -o win.lo  
</span><br>
<span class="quotelev1">&gt; win.cc &amp;&amp;\
</span><br>
<span class="quotelev1">&gt; mv -f $depbase.Tpo $depbase.Plo
</span><br>
<span class="quotelev1">&gt; libtool: compile:  g++ -DHAVE_CONFIG_H -I. -I../../../opal/include - 
</span><br>
<span class="quotelev1">&gt; I../../../orte/include -I../../../ompi/include - 
</span><br>
<span class="quotelev1">&gt; DOMPI_BUILDING_CXX_BINDINGS_LIBRARY=1 -DOMPI_SKIP_MPICXX=1 - 
</span><br>
<span class="quotelev1">&gt; I../../.. -O3 -DNDEBUG -m32 -finline-functions -pthread -MT win.lo - 
</span><br>
<span class="quotelev1">&gt; MD -MP -MF .deps/win.Tpo -c win.cc  -fPIC -DPIC -o .libs/win.o
</span><br>
<span class="quotelev1">&gt; /bin/sh ../../../libtool --tag=CXX   --mode=link g++  -O3 -DNDEBUG - 
</span><br>
<span class="quotelev1">&gt; m32 -finline-functions -pthread  -export-dynamic -m32  -o  
</span><br>
<span class="quotelev1">&gt; libmpi_cxx.la -rpath /opt/openmpi/1.2.6/gnu_4.1.2/32/lib mpicxx.lo  
</span><br>
<span class="quotelev1">&gt; intercepts.lo comm.lo datatype.lo file.lo win.lo  -lnsl -lutil  -lm
</span><br>
<span class="quotelev1">&gt; libtool: link: g++ -shared -nostdlib /usr/lib64/gcc/x86_64-suse- 
</span><br>
<span class="quotelev1">&gt; linux/4.1.2/../../../../lib/crti.o /usr/lib64/gcc/x86_64-suse-linux/ 
</span><br>
<span class="quotelev1">&gt; 4.1.2/32/crtbeginS.o  .libs/mpicxx.o .libs/intercepts.o .libs/ 
</span><br>
<span class="quotelev1">&gt; comm.o .libs/datatype.o .libs/file.o .libs/win.o   -Wl,-rpath -Wl,/ 
</span><br>
<span class="quotelev1">&gt; usr/lib64/gcc/x86_64-suse-linux/4.1.2 -Wl,-rpath -Wl,/usr/lib64/gcc/ 
</span><br>
<span class="quotelev1">&gt; x86_64-suse-linux/4.1.2 -lnsl -lutil -L/usr/lib64/gcc/x86_64-suse- 
</span><br>
<span class="quotelev1">&gt; linux/4.1.2/32 -L/usr/lib64/gcc/x86_64-suse-linux/4.1.2/../../../../ 
</span><br>
<span class="quotelev1">&gt; x86_64-suse-linux/lib/../lib -L/usr/lib64/gcc/x86_64-suse-linux/ 
</span><br>
<span class="quotelev1">&gt; 4.1.2/../../../../lib -L/lib/../lib -L/usr/lib/../lib -L/usr/lib64/ 
</span><br>
<span class="quotelev1">&gt; gcc/x86_64-suse-linux/4.1.2 -L/usr/lib64/gcc/x86_64-suse-linux/ 
</span><br>
<span class="quotelev1">&gt; 4.1.2/../../../../x86_64-suse-linux/lib -L/usr/lib64/gcc/x86_64- 
</span><br>
<span class="quotelev1">&gt; suse-linux/4.1.2/../../.. /usr/lib64/gcc/x86_64-suse-linux/4.1.2/ 
</span><br>
<span class="quotelev1">&gt; libstdc++.so -lm -lpthread -lc -lgcc_s /usr/lib64/gcc/x86_64-suse- 
</span><br>
<span class="quotelev1">&gt; linux/4.1.2/32/crtendS.o /usr/lib64/gcc/x86_64-suse-linux/ 
</span><br>
<span class="quotelev1">&gt; 4.1.2/../../../../lib/crtn.o  -m32 -pthread -m32   -pthread -Wl,- 
</span><br>
<span class="quotelev1">&gt; soname -Wl,libmpi_cxx.so.0 -o .libs/libmpi_cxx.so.0.0.0
</span><br>
<span class="quotelev1">&gt; /usr/lib64/gcc/x86_64-suse-linux/4.1.2/libstdc++.so: could not read  
</span><br>
<span class="quotelev1">&gt; symbols: File in wrong format
</span><br>
<span class="quotelev1">&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Arif Ali
</span><br>
<span class="quotelev1">&gt; Software Engineer
</span><br>
<span class="quotelev1">&gt; OCF plc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mobile: +44 (0)7970 148 122
</span><br>
<span class="quotelev1">&gt; DDI:    +44 (0)114 257 2240
</span><br>
<span class="quotelev1">&gt; Office: +44 (0)114 257 2200
</span><br>
<span class="quotelev1">&gt; Fax:    +44 (0)114 257 0022
</span><br>
<span class="quotelev1">&gt; Email:  aali_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Web:    <a href="http://www.ocf.co.uk">http://www.ocf.co.uk</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Support Phone:   +44 (0)845 702 3829
</span><br>
<span class="quotelev1">&gt; Support E-mail:  support_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Skype:  arif_ali80
</span><br>
<span class="quotelev1">&gt; MSN:    aali_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This email is confidential in that it is intended for the exclusive
</span><br>
<span class="quotelev1">&gt; attention of the addressee(s) indicated. If you are not the intended
</span><br>
<span class="quotelev1">&gt; recipient, this email should not be read or disclosed to any other
</span><br>
<span class="quotelev1">&gt; person. Please notify the sender immediately and delete this email  
</span><br>
<span class="quotelev1">&gt; from
</span><br>
<span class="quotelev1">&gt; your computer system. Any opinions expressed are not necessarily those
</span><br>
<span class="quotelev1">&gt; of the company from which this email was sent and, whilst to the  
</span><br>
<span class="quotelev1">&gt; best of
</span><br>
<span class="quotelev1">&gt; our knowledge no viruses or defects exist, no responsibility can be
</span><br>
<span class="quotelev1">&gt; accepted for any loss or damage arising from its receipt or subsequent
</span><br>
<span class="quotelev1">&gt; use of this email.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5705/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5706.php">Terry Frankcombe: "Re: [OMPI users] Memory manager"</a>
<li><strong>Previous message:</strong> <a href="5704.php">Arif Ali: "[OMPI users] openmpi 32-bit g++ compilation issue"</a>
<li><strong>In reply to:</strong> <a href="5704.php">Arif Ali: "[OMPI users] openmpi 32-bit g++ compilation issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/06/5800.php">Jeff Squyres: "Re: [OMPI users] openmpi 32-bit g++ compilation issue"</a>
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
