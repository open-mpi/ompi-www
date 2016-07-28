<?
$subject_val = "Re: [OMPI users] errors returned from openmpi-1.2.7 source code";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 17 15:05:00 2008" -->
<!-- isoreceived="20080917190500" -->
<!-- sent="Wed, 17 Sep 2008 12:04:55 -0700 (PDT)" -->
<!-- isosent="20080917190455" -->
<!-- name="Shafagh Jafer" -->
<!-- email="barfy27_at_[hidden]" -->
<!-- subject="Re: [OMPI users] errors returned from openmpi-1.2.7 source code" -->
<!-- id="859342.78689.qm_at_web34802.mail.mud.yahoo.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="0566D4D1-A9A2-4973-8FDF-627CB51C3F67_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] errors returned from openmpi-1.2.7 source code<br>
<strong>From:</strong> Shafagh Jafer (<em>barfy27_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-17 15:04:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6591.php">Shafagh Jafer: "Re: [OMPI users] errors returned from openmpi-1.2.7 source code"</a>
<li><strong>Previous message:</strong> <a href="6589.php">Jeff Squyres: "Re: [OMPI users] errors returned from openmpi-1.2.7 source code"</a>
<li><strong>In reply to:</strong> <a href="6589.php">Jeff Squyres: "Re: [OMPI users] errors returned from openmpi-1.2.7 source code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6591.php">Shafagh Jafer: "Re: [OMPI users] errors returned from openmpi-1.2.7 source code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
ok but the problme is that I have another type of mpi from Scali, and when I put in my make file &quot;mpicc&quot; and &quot;mpic++&quot; it goes and uses the Scali MPI's compilers which have exactly the same names &quot;mpicc and mpic++&quot;...So It did not give me any error, but i felt that it used the Scali stuff and not the openmpi's. So i modified my Makefile as follows:
<br>
==============================================================
<br>
export CPP=/opt/openmpi/1.2.7/bin/mpic++ #/usr/local/bin/g++
<br>
export CC=/opt/openmpi/1.2.7/bin/mpicc #/usr/local/bin/gcc
<br>
export AR=ar
<br>
export YACPP=yacc
<br>
<p>#export DEFINES_CPP += -DNEWCOORDIN
<br>
#===========================================================================
<br>
#PCD++ Directory Details
<br>
<p>#jacky: change the following line to reflect your pcd code directory //:~
<br>
<p>export MAINDIR=/nfs/sjafer/phd/openMPI/openmpi_cd++_timewarp
<br>
export INCLUDES_CPP +=-I$(MAINDIR)/include
<br>
<p>#If running parallel simulation, uncomment the following lines
<br>
export DEFINES_CPP += -DMPI
<br>
#export LIBMPI = -lmpi
<br>
<p>#===========================================================================
<br>
<p>#===========================================================================
<br>
#MPI Directory Details
<br>
##export MPIDIR=/opt/openmpi/1.2.7/
<br>
##export LDFLAGS +=-L$(MPIDIR)/lib
<br>
##export INCLUDES_CPP += -I$(MPIDIR)/include
<br>
<p>###export LDFLAGS+=-L. -L$/opt/openmpi/1.2.7/lib
<br>
<p>==============================================================
<br>
and i am still getting the follwoing errors :
<br>
opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/comm.h: At top level:
<br>
/opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/comm.h:84: parse error before `protected'
<br>
/opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/comm.h:96: base class `Comm_Null' has incomplete type
<br>
/opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/comm.h: In method `Comm::Comm(const Comm &amp;)':
<br>
/opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/comm.h:153: `class Comm' has no member named `mpi_comm'
<br>
/opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/comm.h:153: type `Comm_Null' is not an immediate basetype for `Comm'
<br>
/opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/comm.h: In method `Comm::Comm(ompi_communicator_t *)':
<br>
/opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/comm.h:155: type `Comm_Null' is not an immediate basetype for `Comm'
<br>
In file included from /opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/mpicxx.h:199,
<br>
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; from /opt/openmpi/1.2.7/include/mpi.h:1795,
<br>
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; from stdaload.cpp:33:
<br>
/opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/win.h: At top level:
<br>
/opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/win.h:27: parse error before `::'
<br>
/opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/win.h:28: parse error before `::'
<br>
/opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/win.h:93: `static' can only be specified for objects and functions
<br>
/opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/win.h:93: ANSI C++ forbids declaration `' with no type
<br>
/opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/win.h:93: confused by earlier errors, bailing outmake: *** [stdaload.o] Error 1
<br>
<p><p>--- On Wed, 9/17/08, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] errors returned from openmpi-1.2.7 source code
<br>
To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Date: Wednesday, September 17, 2008, 11:21 AM
<br>
<p>You shouldn't need to add any -I's or -L's or -l's for Open MPI.
<br>
&nbsp;Just  
<br>
use mpic++ and mpicc (per my first note, notice that &quot;mpicc&quot; (lower  
<br>
case) is the C compiler -- mpiCC is a synonym for the C++ compiler --  
<br>
this could be your problem).  Those wrappers add all the compiler /  
<br>
linker flags that you need.
<br>
<p><p>On Sep 17, 2008, at 2:16 PM, Shafagh Jafer wrote:
<br>
<p><span class="quotelev1">&gt; The openmpi is installed in the following path: /opt/openmpi/1.2.7  
</span><br>
<span class="quotelev1">&gt; so should i replce what you told me about /usr/lib with /opt/openmpi/ 
</span><br>
<span class="quotelev1">&gt; 1.2.7 ??
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- On Wed, 9/17/08, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] errors returned from openmpi-1.2.7 source  
</span><br>
<span class="quotelev1">&gt; code
</span><br>
<span class="quotelev1">&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: Wednesday, September 17, 2008, 9:22 AM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't quite understand the format of this file, but at first glance,
</span><br>
<span class="quotelev1">&gt; you shouldn't need the following lines:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; export LIBMPI = -lmpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; export MPIDIR=/nfs/sjafer/phd/openMPI/installed
</span><br>
<span class="quotelev1">&gt; export LDFLAGS +=-L$(MPIDIR)/lib
</span><br>
<span class="quotelev1">&gt; export INCLUDES_CPP += -I$(MPIDIR)/include
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It also doesn't seem like the last 2 arguments of this line are a good
</span><br>
<span class="quotelev1">&gt; idea (the linker should automatically put /usr/lib and /lib in your
</span><br>
<span class="quotelev1">&gt; search path, if appropriate):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; export LDFLAGS+=-L. -L$/usr/lib -L$/lib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I also notice:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; export CPP=mpic++
</span><br>
<span class="quotelev1">&gt; export CC=mpiCC
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think you want &quot;mpicc&quot; for CC (note the lower case) -- mpiCC
</span><br>
is the
<br>
<span class="quotelev1">&gt; C
</span><br>
<span class="quotelev1">&gt; ++ compiler (mpic++ and mpiCC are synonyms).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This might solve your problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 15, 2008, at 4:56 PM, Shafagh Jafer wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; i am sending you my simulator's Makefile.common which points to
</span><br>
<span class="quotelev2">&gt; &gt; openmpi, please take a look at it. Thanks a lot.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --- On Mon, 9/15/08, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] errors returned from openmpi-1.2.7 source
</span><br>
<span class="quotelev2">&gt; &gt; code
</span><br>
<span class="quotelev2">&gt; &gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Date: Monday, September 15, 2008, 11:21 AM
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Sep 14, 2008, at 1:24 PM, Shafagh Jafer wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I installed openmpi-1.2.7 and tested the hello_c and ring_c  
</span><br>
<span class="quotelev1">&gt; examples
</span><br>
<span class="quotelev3">&gt; &gt; &gt; on single and multiple node and worked fine. However, when I use
</span><br>
<span class="quotelev3">&gt; &gt; &gt; openmpi with my simulator (by replacing the old mpich path with 
</span><br>
<p><span class="quotelev1">&gt; the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; new openmpi ) I get many errors reported from &quot;/openMPI/
</span><br>
<span class="quotelev3">&gt; &gt; &gt; openmpi-1.2.7/include/openmpi/ompi/mpi/cxx/*.h&quot; . Please
</span><br>
see the
<br>
<span class="quotelev3">&gt; &gt; &gt; following snap shots:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; It's not clear exactly what you did here.  Did you just replace
</span><br>
<span class="quotelev2">&gt; &gt; MPICH's &quot;mpiCC&quot; with OMPI's &quot;mpiCC&quot;? 
</span><br>
FWIW,
<br>
<span class="quotelev1">&gt; this is
</span><br>
<span class="quotelev2">&gt; &gt; almost always the
</span><br>
<span class="quotelev2">&gt; &gt; easiest way to compile MPI applications: use that
</span><br>
implementation's
<br>
<span class="quotelev2">&gt; &gt; &quot;wrapper&quot; compiler (I'm assuming you have a C++ code in
</span><br>
this
<br>
<span class="quotelev2">&gt; &gt; case).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; These errors should not normally happen; they look kinda like
</span><br>
you're
<br>
<span class="quotelev2">&gt; &gt; somehow inadvertently mixing Open MPI and MPICH.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
&lt;Makefile.common&gt;_______________________________________________
<br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6590/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6591.php">Shafagh Jafer: "Re: [OMPI users] errors returned from openmpi-1.2.7 source code"</a>
<li><strong>Previous message:</strong> <a href="6589.php">Jeff Squyres: "Re: [OMPI users] errors returned from openmpi-1.2.7 source code"</a>
<li><strong>In reply to:</strong> <a href="6589.php">Jeff Squyres: "Re: [OMPI users] errors returned from openmpi-1.2.7 source code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6591.php">Shafagh Jafer: "Re: [OMPI users] errors returned from openmpi-1.2.7 source code"</a>
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
