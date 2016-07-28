<?
$subject_val = "Re: [OMPI users] errors returned from openmpi-1.2.7 source code";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 18 08:31:37 2008" -->
<!-- isoreceived="20080918123137" -->
<!-- sent="Thu, 18 Sep 2008 08:31:09 -0400" -->
<!-- isosent="20080918123109" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] errors returned from openmpi-1.2.7 source code" -->
<!-- id="86C95680-B057-4732-8CA9-46E0E14AF451_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="300002.34402.qm_at_web34807.mail.mud.yahoo.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-18 08:31:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6603.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Previous message:</strong> <a href="6601.php">Jeff Squyres: "Re: [OMPI users] what is inside mpicc/mpic++"</a>
<li><strong>In reply to:</strong> <a href="6591.php">Shafagh Jafer: "Re: [OMPI users] errors returned from openmpi-1.2.7 source code"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just replied on the other thread.
<br>
<p>On Sep 17, 2008, at 5:49 PM, Shafagh Jafer wrote:
<br>
<p><span class="quotelev1">&gt; ok i looked at the errors closely, it looks like that the problem is  
</span><br>
<span class="quotelev1">&gt; from the &quot;namespace MPI{..&quot; in line 136 of &quot;mpicxx.h&quot; and every  
</span><br>
<span class="quotelev1">&gt; where that this namespace (MPI) is used. here are the errors:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; In file included from /opt/openmpi/1.2.7/include/mpi.h:1795,
</span><br>
<span class="quotelev1">&gt;                  from stdaload.cpp:33:
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/mpicxx.h:136: parse  
</span><br>
<span class="quotelev1">&gt; error before `1'
</span><br>
<span class="quotelev1">&gt; In file included from /opt/openmpi/1.2.7/include/openmpi/ompi/mpi/ 
</span><br>
<span class="quotelev1">&gt; cxx/mpicxx.h:168,
</span><br>
<span class="quotelev1">&gt;                  from /opt/openmpi/1.2.7/include/mpi.h:1795,
</span><br>
<span class="quotelev1">&gt;                  from stdaload.cpp:33:
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/functions.h:143:  
</span><br>
<span class="quotelev1">&gt; parse error before `1'
</span><br>
<span class="quotelev1">&gt; In file included from /opt/openmpi/1.2.7/include/openmpi/ompi/mpi/ 
</span><br>
<span class="quotelev1">&gt; cxx/mpicxx.h:195,
</span><br>
<span class="quotelev1">&gt;                  from /opt/openmpi/1.2.7/include/mpi.h:1795,
</span><br>
<span class="quotelev1">&gt;                  from stdaload.cpp:33:
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/status.h:26: parse  
</span><br>
<span class="quotelev1">&gt; error before `::'
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/status.h:27: parse  
</span><br>
<span class="quotelev1">&gt; error before `::'
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/status.h:28: parse  
</span><br>
<span class="quotelev1">&gt; error before `::'
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/status.h:102: parse  
</span><br>
<span class="quotelev1">&gt; error before `1'
</span><br>
<span class="quotelev1">&gt; In file included from /opt/openmpi/1.2.7/include/openmpi/ompi/mpi/ 
</span><br>
<span class="quotelev1">&gt; cxx/mpicxx.h:196,
</span><br>
<span class="quotelev1">&gt;                  from /opt/openmpi/1.2.7/include/mpi.h:1795,
</span><br>
<span class="quotelev1">&gt;                  from stdaload.cpp:33:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------------------------
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
<span class="quotelev1">&gt; Date: Wednesday, September 17, 2008, 11:21 AM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You shouldn't need to add any -I's or -L's or -l's for Open MPI.
</span><br>
<span class="quotelev1">&gt;  Just
</span><br>
<span class="quotelev1">&gt; use mpic++ and mpicc (per
</span><br>
<span class="quotelev1">&gt;  my first note, notice that &quot;mpicc&quot; (lower
</span><br>
<span class="quotelev1">&gt; case) is the C compiler -- mpiCC is a synonym for the C++ compiler --
</span><br>
<span class="quotelev1">&gt; this could be your problem).  Those wrappers add all the compiler /
</span><br>
<span class="quotelev1">&gt; linker flags that you need.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 17, 2008, at 2:16 PM, Shafagh Jafer wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; The openmpi is installed in the following path: /opt/openmpi/1.2.7
</span><br>
<span class="quotelev2">&gt; &gt; so should i replce what you told me about /usr/lib with /opt/ 
</span><br>
<span class="quotelev1">&gt; openmpi/
</span><br>
<span class="quotelev2">&gt; &gt; 1.2.7 ??
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --- On Wed, 9/17/08, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] errors returned from openmpi-1.2.7 source
</span><br>
<span class="quotelev2">&gt; &gt; code
</span><br>
<span class="quotelev2">&gt; &gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Date: Wednesday, September 17, 2008, 9:22 AM
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I don't quite understand the format of this file, but at first  
</span><br>
<span class="quotelev1">&gt; glance,
</span><br>
<span class="quotelev2">&gt; &gt; you shouldn't need the following lines:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; export LIBMPI =
</span><br>
<span class="quotelev1">&gt;  -lmpi
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; export MPIDIR=/nfs/sjafer/phd/openMPI/installed
</span><br>
<span class="quotelev2">&gt; &gt; export LDFLAGS +=-L$(MPIDIR)/lib
</span><br>
<span class="quotelev2">&gt; &gt; export INCLUDES_CPP += -I$(MPIDIR)/include
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; It also doesn't seem like the last 2 arguments of this line are a  
</span><br>
<span class="quotelev1">&gt; good
</span><br>
<span class="quotelev2">&gt; &gt; idea (the linker should automatically put /usr/lib and /lib in your
</span><br>
<span class="quotelev2">&gt; &gt; search path, if appropriate):
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; export LDFLAGS+=-L. -L$/usr/lib -L$/lib
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I also notice:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; export CPP=mpic++
</span><br>
<span class="quotelev2">&gt; &gt; export CC=mpiCC
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I think you want &quot;mpicc&quot; for CC (note the lower case) -- mpiCC
</span><br>
<span class="quotelev1">&gt; is the
</span><br>
<span class="quotelev2">&gt; &gt; C
</span><br>
<span class="quotelev2">&gt; &gt; ++ compiler (mpic++ and mpiCC are synonyms).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This might solve your problem.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Sep 15, 2008, at 4:56 PM, Shafagh Jafer wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; i am sending you my simulator's Makefile.common which points to
</span><br>
<span class="quotelev3">&gt; &gt; &gt; openmpi, please take a look at it. Thanks a lot.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ---
</span><br>
<span class="quotelev1">&gt;  On Mon, 9/15/08, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Subject: Re: [OMPI users] errors returned from openmpi-1.2.7  
</span><br>
<span class="quotelev1">&gt; source
</span><br>
<span class="quotelev3">&gt; &gt; &gt; code
</span><br>
<span class="quotelev3">&gt; &gt; &gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Date: Monday, September 15, 2008, 11:21 AM
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Sep 14, 2008, at 1:24 PM, Shafagh Jafer wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; I installed openmpi-1.2.7 and tested the hello_c and ring_c
</span><br>
<span class="quotelev2">&gt; &gt; examples
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; on single and multiple node and worked fine. However, when I use
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; openmpi with my simulator (by replacing the old mpich path with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; the
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; new openmpi ) I get many errors reported from &quot;/openMPI/
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; openmpi-1.2.7/include/openmpi/ompi/mpi/cxx/*.h&quot; . Please
</span><br>
<span class="quotelev1">&gt; see the
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; following snap shots:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; It's not clear
</span><br>
<span class="quotelev1">&gt;  exactly what you did here.  Did you just replace
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MPICH's &quot;mpiCC&quot; with OMPI's &quot;mpiCC&quot;?
</span><br>
<span class="quotelev1">&gt; FWIW,
</span><br>
<span class="quotelev2">&gt; &gt; this is
</span><br>
<span class="quotelev3">&gt; &gt; &gt; almost always the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; easiest way to compile MPI applications: use that
</span><br>
<span class="quotelev1">&gt; implementation's
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &quot;wrapper&quot; compiler (I'm assuming you have a C++ code in
</span><br>
<span class="quotelev1">&gt; this
</span><br>
<span class="quotelev3">&gt; &gt; &gt; case).
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; These errors should not normally happen; they look kinda like
</span><br>
<span class="quotelev1">&gt; you're
</span><br>
<span class="quotelev3">&gt; &gt; &gt; somehow inadvertently mixing Open MPI and MPICH.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Cisco Systems
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &lt;Makefile.common&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;  <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
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
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
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
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6603.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Previous message:</strong> <a href="6601.php">Jeff Squyres: "Re: [OMPI users] what is inside mpicc/mpic++"</a>
<li><strong>In reply to:</strong> <a href="6591.php">Shafagh Jafer: "Re: [OMPI users] errors returned from openmpi-1.2.7 source code"</a>
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
