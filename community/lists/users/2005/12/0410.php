<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Dec  1 07:31:54 2005" -->
<!-- isoreceived="20051201123154" -->
<!-- sent="Thu, 01 Dec 2005 13:31:47 +0100" -->
<!-- isosent="20051201123147" -->
<!-- name="Eugen Wintersberger" -->
<!-- email="eugen.wintersberger_at_[hidden]" -->
<!-- subject="[O-MPI users] Compiler problems on SGI Origin" -->
<!-- id="1133440307.18297.7.camel_at_hubbard.hlphys.uni-linz.ac.at" -->
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
<strong>From:</strong> Eugen Wintersberger (<em>eugen.wintersberger_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-12-01 07:31:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0411.php">Brian Barrett: "Re: [O-MPI users] Compiler problems on SGI Origin"</a>
<li><strong>Previous message:</strong> <a href="0409.php">Eugen Wintersberger: "Re: [O-MPI users] Compiling RC4 on Alpha56 and SGI Origin"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0411.php">Brian Barrett: "Re: [O-MPI users] Compiler problems on SGI Origin"</a>
<li><strong>Reply:</strong> <a href="0411.php">Brian Barrett: "Re: [O-MPI users] Compiler problems on SGI Origin"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi there
<br>
&nbsp;I have a problem on compiling openmpi (1.0.1rc4) on an SGI origin.
<br>
My configure command looks like this
<br>
<p>./configure --prefix=/scratch/hlphysik/k353443 --disable-mpi-f77 --disable-mpi-f90 --enable-io-romio --enable-cxx-exceptions
<br>
<p>a subsequent make funs for a while and breaks with 
<br>
<p>Making all in gpr
<br>
Making all in base
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;depbase=`echo gpr_base_open.lo | sed 's|[^/]*$|.deps/&amp;|;s|\.lo$||'`; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if /bin/sh ../../../../libtool --tag=CC --mode=compile gcc -DHAVE_CONFIG_H  -I. -I. -I../../../../include -I../../../../include   -I../../../../include -I../../../.. -I../../../.. -I../../../../include -I../../../../opal -I../../../../orte -I../../../../ompi  -D_REENTRANT   -O3 -DNDEBUG -fno-strict-aliasing   -MT gpr_base_open.lo -MD -MP -MF &quot;$depbase.Tpo&quot; -c -o gpr_base_open.lo gpr_base_open.c; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;then mv -f &quot;$depbase.Tpo&quot; &quot;$depbase.Plo&quot;; else rm -f &quot;$depbase.Tpo&quot;; exit 1; fi
<br>
mkdir .libs
<br>
&nbsp;gcc -DHAVE_CONFIG_H -I. -I. -I../../../../include -I../../../../include -I../../../../include -I../../../.. -I../../../.. -I../../../../include -I../../../../opal -I../../../../orte -I../../../../ompi -D_REENTRANT -O3 -DNDEBUG -fno-strict-aliasing -MT gpr_base_open.lo -MD -MP -MF .deps/gpr_base_open.Tpo -c gpr_base_open.c  -DPIC -o .libs/gpr_base_open.o
<br>
gpr_base_open.c: In function `orte_gpr_notify_data_construct':
<br>
gpr_base_open.c:143: `SIZE_MAX' undeclared (first use in this function)
<br>
gpr_base_open.c:143: (Each undeclared identifier is reported only once
<br>
gpr_base_open.c:143: for each function it appears in.)
<br>
gpr_base_open.c: In function `orte_gpr_subscription_construct':
<br>
gpr_base_open.c:186: `SIZE_MAX' undeclared (first use in this function)
<br>
gpr_base_open.c: In function `orte_gpr_trigger_construct':
<br>
gpr_base_open.c:222: `SIZE_MAX' undeclared (first use in this function)
<br>
gpr_base_open.c: In function `orte_gpr_notify_message_construct':
<br>
gpr_base_open.c:258: `SIZE_MAX' undeclared (first use in this function)
<br>
*** Error code 1 (bu21)
<br>
*** Error code 1 (bu21)
<br>
*** Error code 1 (bu21)
<br>
*** Error code 1 (bu21)
<br>
*** Error code 1 (bu21)
<br>
<p>Has anyone an idea whats going on here?
<br>
<p>thanks 
<br>
&nbsp;Eugen
<br>
<p><pre>
-- 
--------------------------------------------
|                                          | 
| Dipl.- Ing. Eugen Wintersberger          |
|                                          |
| Department of semiconductor physics      |
| Johannes Kepler University               |
| Altenbergerstr. 69                       |
| A-4040 Linz, Austria                     |
|                                          |
| Tel.: +43 732 2468 9605                  |
| Mobil: +43 664 311 286 1                 |
|                                          |
| mail: eugen.wintersberger_at_[hidden]         |
|       eugen.wintersberger_at_[hidden]        |
|                                          |
--------------------------------------------
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0411.php">Brian Barrett: "Re: [O-MPI users] Compiler problems on SGI Origin"</a>
<li><strong>Previous message:</strong> <a href="0409.php">Eugen Wintersberger: "Re: [O-MPI users] Compiling RC4 on Alpha56 and SGI Origin"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0411.php">Brian Barrett: "Re: [O-MPI users] Compiler problems on SGI Origin"</a>
<li><strong>Reply:</strong> <a href="0411.php">Brian Barrett: "Re: [O-MPI users] Compiler problems on SGI Origin"</a>
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
