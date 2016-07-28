<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul 10 11:41:30 2006" -->
<!-- isoreceived="20060710154130" -->
<!-- sent="Mon, 10 Jul 2006 17:44:31 +0200" -->
<!-- isosent="20060710154431" -->
<!-- name="Pierre" -->
<!-- email="pierre42d_at_[hidden]" -->
<!-- subject="[OMPI devel] Problem compiling openmpi 1.1" -->
<!-- id="44B275DF.2080909_at_9online.fr" -->
<!-- charset="ISO-8859-15" -->
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
<strong>From:</strong> Pierre (<em>pierre42d_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-10 11:44:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0968.php">Brian Barrett: "Re: [OMPI devel] Problem compiling openmpi 1.1"</a>
<li><strong>Previous message:</strong> <a href="0966.php">Josh Hursey: "Re: [OMPI devel] Getting the number of nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0968.php">Brian Barrett: "Re: [OMPI devel] Problem compiling openmpi 1.1"</a>
<li><strong>Reply:</strong> <a href="0968.php">Brian Barrett: "Re: [OMPI devel] Problem compiling openmpi 1.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
# make
<br>
Making all in config
<br>
make[1]: Entering directory `/tmp/openmpi-1.1/config'
<br>
make[1]: Nothing to be done for `all'.
<br>
make[1]: Leaving directory `/tmp/openmpi-1.1/config'
<br>
Making all in contrib
<br>
make[1]: Entering directory `/tmp/openmpi-1.1/contrib'
<br>
make[1]: Nothing to be done for `all'.
<br>
make[1]: Leaving directory `/tmp/openmpi-1.1/contrib'
<br>
Making all in opal
<br>
make[1]: Entering directory `/tmp/openmpi-1.1/opal'
<br>
Making all in include
<br>
make[2]: Entering directory `/tmp/openmpi-1.1/opal/include'
<br>
make  all-am
<br>
make[3]: Entering directory `/tmp/openmpi-1.1/opal/include'
<br>
make[3]: Nothing to be done for `all-am'.
<br>
make[3]: Leaving directory `/tmp/openmpi-1.1/opal/include'
<br>
make[2]: Leaving directory `/tmp/openmpi-1.1/opal/include'
<br>
Making all in libltdl
<br>
make[2]: Entering directory `/tmp/openmpi-1.1/opal/libltdl'
<br>
make  all-am
<br>
make[3]: Entering directory `/tmp/openmpi-1.1/opal/libltdl'
<br>
make[3]: Nothing to be done for `all-am'.
<br>
make[3]: Leaving directory `/tmp/openmpi-1.1/opal/libltdl'
<br>
make[2]: Leaving directory `/tmp/openmpi-1.1/opal/libltdl'
<br>
Making all in asm
<br>
make[2]: Entering directory `/tmp/openmpi-1.1/opal/asm'
<br>
make[2]: Nothing to be done for `all'.
<br>
make[2]: Leaving directory `/tmp/openmpi-1.1/opal/asm'
<br>
Making all in etc
<br>
make[2]: Entering directory `/tmp/openmpi-1.1/opal/etc'
<br>
make[2]: Nothing to be done for `all'.
<br>
make[2]: Leaving directory `/tmp/openmpi-1.1/opal/etc'
<br>
Making all in event
<br>
make[2]: Entering directory `/tmp/openmpi-1.1/opal/event'
<br>
Making all in compat
<br>
make[3]: Entering directory `/tmp/openmpi-1.1/opal/event/compat'
<br>
Making all in sys
<br>
make[4]: Entering directory `/tmp/openmpi-1.1/opal/event/compat/sys'
<br>
make[4]: Nothing to be done for `all'.
<br>
make[4]: Leaving directory `/tmp/openmpi-1.1/opal/event/compat/sys'
<br>
make[4]: Entering directory `/tmp/openmpi-1.1/opal/event/compat'
<br>
make[4]: Nothing to be done for `all-am'.
<br>
make[4]: Leaving directory `/tmp/openmpi-1.1/opal/event/compat'
<br>
make[3]: Leaving directory `/tmp/openmpi-1.1/opal/event/compat'
<br>
make[3]: Entering directory `/tmp/openmpi-1.1/opal/event'
<br>
depbase=`echo rtsig.lo | sed 's|[^/]*$|.deps/&amp;|;s|\.lo$||'`; \
<br>
if /bin/sh ../../libtool --tag=CC --mode=compile gcc -DHAVE_CONFIG_H -I. 
<br>
-I. -I../../opal/include -I../../orte/include -I../../ompi/include 
<br>
-I../../ompi/include  -I../../opal/event/compat -I../..    -DNDEBUG -s 
<br>
-O3 -march=i686 -fno-strict-aliasing  -pthread -MT rtsig.lo -MD -MP -MF 
<br>
&quot;$depbase.Tpo&quot; -c -o rtsig.lo rtsig.c; \
<br>
then mv -f &quot;$depbase.Tpo&quot; &quot;$depbase.Plo&quot;; else rm -f &quot;$depbase.Tpo&quot;; 
<br>
exit 1; fi
<br>
&nbsp;&nbsp;gcc -DHAVE_CONFIG_H -I. -I. -I../../opal/include -I../../orte/include 
<br>
-I../../ompi/include -I../../ompi/include -I../../opal/event/compat 
<br>
-I../.. -DNDEBUG -s -O3 -march=i686 -fno-strict-aliasing -pthread -MT 
<br>
rtsig.lo -MD -MP -MF .deps/rtsig.Tpo -c rtsig.c  -fPIC -DPIC -o 
<br>
.libs/rtsig.o
<br>
rtsig.c:4:1: warning: &quot;_GNU_SOURCE&quot; redefined
<br>
In file included from rtsig.c:1:
<br>
../../opal/include/opal_config.h:1067:1: warning: this is the location 
<br>
of the previous definition
<br>
rtsig.c: In function `poll_add':
<br>
rtsig.c:75: error: dereferencing pointer to incomplete type
<br>
rtsig.c:77: error: dereferencing pointer to incomplete type
<br>
rtsig.c:77: error: `EV_READ' undeclared (first use in this function)
<br>
rtsig.c:77: error: (Each undeclared identifier is reported only once
<br>
rtsig.c:77: error: for each function it appears in.)
<br>
rtsig.c:78: error: dereferencing pointer to incomplete type
<br>
rtsig.c:78: error: `EV_WRITE' undeclared (first use in this function)
<br>
rtsig.c: In function `activate':
<br>
rtsig.c:120: error: dereferencing pointer to incomplete type
<br>
rtsig.c:120: error: `EV_PERSIST' undeclared (first use in this function)
<br>
rtsig.c: At top level:
<br>
rtsig.c:133: warning: initialization from incompatible pointer type
<br>
rtsig.c:134: warning: initialization from incompatible pointer type
<br>
rtsig.c: In function `rtsig_add':
<br>
rtsig.c:182: error: dereferencing pointer to incomplete type
<br>
rtsig.c:182: error: `EV_SIGNAL' undeclared (first use in this function)
<br>
rtsig.c:187: error: dereferencing pointer to incomplete type
<br>
rtsig.c:187: error: `EV_READ' undeclared (first use in this function)
<br>
rtsig.c:187: error: `EV_WRITE' undeclared (first use in this function)
<br>
rtsig.c:197: error: dereferencing pointer to incomplete type
<br>
rtsig.c:202: error: dereferencing pointer to incomplete type
<br>
rtsig.c:203: error: dereferencing pointer to incomplete type
<br>
rtsig.c:206: error: dereferencing pointer to incomplete type
<br>
rtsig.c:222: error: dereferencing pointer to incomplete type
<br>
rtsig.c: In function `rtsig_del':
<br>
rtsig.c:232: error: dereferencing pointer to incomplete type
<br>
rtsig.c:232: error: `EV_SIGNAL' undeclared (first use in this function)
<br>
rtsig.c:242: error: dereferencing pointer to incomplete type
<br>
rtsig.c:242: error: `EV_READ' undeclared (first use in this function)
<br>
rtsig.c:242: error: `EV_WRITE' undeclared (first use in this function)
<br>
rtsig.c: In function `rtsig_dispatch':
<br>
rtsig.c:316: error: invalid use of undefined type `struct event_list'
<br>
rtsig.c:316: error: dereferencing pointer to incomplete type
<br>
rtsig.c:317: error: dereferencing pointer to incomplete type
<br>
rtsig.c:327: error: `EV_READ' undeclared (first use in this function)
<br>
rtsig.c:327: error: `EV_WRITE' undeclared (first use in this function)
<br>
rtsig.c:338: error: dereferencing pointer to incomplete type
<br>
rtsig.c:339: error: dereferencing pointer to incomplete type
<br>
rtsig.c:344: error: invalid use of undefined type `struct event_list'
<br>
rtsig.c:346: error: dereferencing pointer to incomplete type
<br>
rtsig.c:347: error: dereferencing pointer to incomplete type
<br>
rtsig.c:348: error: dereferencing pointer to incomplete type
<br>
rtsig.c:351: error: dereferencing pointer to incomplete type
<br>
rtsig.c:363: error: invalid use of undefined type `struct event_list'
<br>
rtsig.c:363: error: dereferencing pointer to incomplete type
<br>
rtsig.c:365: error: `EV_SIGNAL' undeclared (first use in this function)
<br>
rtsig.c:392: error: dereferencing pointer to incomplete type
<br>
rtsig.c:392: error: `EV_PERSIST' undeclared (first use in this function)
<br>
make[3]: *** [rtsig.lo] Error 1
<br>
make[3]: Leaving directory `/tmp/openmpi-1.1/opal/event'
<br>
make[2]: *** [all-recursive] Error 1
<br>
make[2]: Leaving directory `/tmp/openmpi-1.1/opal/event'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/tmp/openmpi-1.1/opal'
<br>
make: *** [all-recursive] Error 1
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0968.php">Brian Barrett: "Re: [OMPI devel] Problem compiling openmpi 1.1"</a>
<li><strong>Previous message:</strong> <a href="0966.php">Josh Hursey: "Re: [OMPI devel] Getting the number of nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0968.php">Brian Barrett: "Re: [OMPI devel] Problem compiling openmpi 1.1"</a>
<li><strong>Reply:</strong> <a href="0968.php">Brian Barrett: "Re: [OMPI devel] Problem compiling openmpi 1.1"</a>
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
