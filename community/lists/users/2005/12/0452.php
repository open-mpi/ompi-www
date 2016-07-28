<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Dec 25 08:00:01 2005" -->
<!-- isoreceived="20051225130001" -->
<!-- sent="Sun, 25 Dec 2005 23:59:36 +1100" -->
<!-- isosent="20051225125936" -->
<!-- name="psksvp" -->
<!-- email="psksvp_at_[hidden]" -->
<!-- subject="[O-MPI users] building  openmpi1.0.1 on cygwin" -->
<!-- id="01c001c60953$19868660$c200a8c0_at_Maple" -->
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
<strong>From:</strong> psksvp (<em>psksvp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-12-25 07:59:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0453.php">Michael L. Stokes: "[O-MPI users] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="0451.php">Brian Barrett: "Re: [O-MPI users] High Virtual Memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/01/0496.php">Jeff Squyres: "Re: [O-MPI users] building  openmpi1.0.1 on cygwin"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/01/0496.php">Jeff Squyres: "Re: [O-MPI users] building  openmpi1.0.1 on cygwin"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello
<br>
Does openmpi support cygwin? I am trying to build on cygwin, but got the 
<br>
following errors. I wonder if someone has tried to build on cygwin and know 
<br>
how to solve this problem.
<br>
<p>thanks
<br>
<p>psksvp
<br>
<p><p>gcc -DHAVE_CONFIG_H -I. -I../../../openmpi-1.0.1/./opal/util -I../../include 
<br>
&nbsp;-I../../include -DOMPI_PKGDATADIR=\&quot;/usr/local/share/openmpi\&quot; -I../../../openmpi-1.0.1/./include 
<br>
&nbsp;-I../../../openmpi-1.0.1/. -I../.. -I../../include -I../../../openmpi-1.0.1/./opal 
<br>
&nbsp;-I../../../openmpi-1.0.1/./orte -I../../../openmpi-1.0.1/./ompi -D_REENTRANT 
<br>
&nbsp;-O3 -DNDEBUG -fno-strict-aliasing -MT stacktrace.lo -MD -MP -MF 
<br>
.deps/stacktrace.Tpo -c 
<br>
./../../openmpi-1.0.1/./opal/util/stacktrace.c  -DPIC -o .libs/stacktrace.o
<br>
../../../openmpi-1.0.1/./opal/util/stacktrace.c: In function 
<br>
`opal_show_stackframe':
<br>
../../../openmpi-1.0.1/./opal/util/stacktrace.c:202: error: `POLL_IN' 
<br>
undeclared (first use in this function)
<br>
../../../openmpi-1.0.1/./opal/util/stacktrace.c:202: error: (Each undeclared 
<br>
identifier is reported only once
<br>
../../../openmpi-1.0.1/./opal/util/stacktrace.c:202: error: for each 
<br>
function it appears in.)
<br>
../../../openmpi-1.0.1/./opal/util/stacktrace.c:203: error: `POLL_OUT' 
<br>
undeclared (first use in this function)
<br>
../../../openmpi-1.0.1/./opal/util/stacktrace.c:204: error: `POLL_MSG' 
<br>
undeclared (first use in this function)
<br>
../../../openmpi-1.0.1/./opal/util/stacktrace.c:205: error: `POLL_ERR' 
<br>
undeclared (first use in this function)
<br>
../../../openmpi-1.0.1/./opal/util/stacktrace.c:206: error: `POLL_PRI' 
<br>
undeclared (first use in this function)
<br>
../../../openmpi-1.0.1/./opal/util/stacktrace.c:207: error: `POLL_HUP' 
<br>
undeclared (first use in this function)
<br>
../../../openmpi-1.0.1/./opal/util/stacktrace.c:267: error: structure has no 
<br>
member named `si_band'
<br>
make[2]: *** [stacktrace.lo] Error 1
<br>
make[2]: Leaving directory `/cygdrive/c/home/devbin/obj/opal/util'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/cygdrive/c/home/devbin/obj/opal'
<br>
make: *** [all-recursive] Error 1
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0453.php">Michael L. Stokes: "[O-MPI users] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="0451.php">Brian Barrett: "Re: [O-MPI users] High Virtual Memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/01/0496.php">Jeff Squyres: "Re: [O-MPI users] building  openmpi1.0.1 on cygwin"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/01/0496.php">Jeff Squyres: "Re: [O-MPI users] building  openmpi1.0.1 on cygwin"</a>
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
