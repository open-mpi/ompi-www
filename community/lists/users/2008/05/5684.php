<?
$subject_val = "Re: [OMPI users] compiling from source from svn";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 16 12:02:42 2008" -->
<!-- isoreceived="20080516160242" -->
<!-- sent="Fri, 16 May 2008 12:02:34 -0400" -->
<!-- isosent="20080516160234" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] compiling from source from svn" -->
<!-- id="20C4492C-6765-4531-B4D8-10E67F1F987B_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080516141737.GA29230_at_dbmail.dk" -->
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
<strong>Subject:</strong> Re: [OMPI users] compiling from source from svn<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-16 12:02:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5685.php">Wen Hao Wang: "Re: [OMPI users] Compiler Choice in openmpi"</a>
<li><strong>Previous message:</strong> <a href="5683.php">Jeff Squyres: "Re: [OMPI users] Replace 1.2.3 with 1.2.6"</a>
<li><strong>In reply to:</strong> <a href="5678.php">Karsten Bolding: "[OMPI users] compiling from source from svn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5687.php">Karsten Bolding: "Re: [OMPI users] compiling from source from svn"</a>
<li><strong>Reply:</strong> <a href="5687.php">Karsten Bolding: "Re: [OMPI users] compiling from source from svn"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmm.  I just committed this feature to the trunk the other day.  Could  
<br>
you perchance have gotten an intermediate r number that didn't want to  
<br>
compile?  :-(
<br>
<p>What r number did you get?
<br>
<p>FWIW, my SVN HEAD compiles fine today: r18448.
<br>
<p><p>On May 16, 2008, at 10:17 AM, Karsten Bolding wrote:
<br>
<p><span class="quotelev1">&gt; Hello
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Due to a new feature - direct mapping between machinefile and rank - I
</span><br>
<span class="quotelev1">&gt; want to try out the svn version. However, I run into compilation
</span><br>
<span class="quotelev1">&gt; probloms. Here is what I do after I've updated svn.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; kb_at_gate:/data/kb/compile/openmpi-svn$ ./autogen.sh
</span><br>
<span class="quotelev1">&gt; kb_at_gate:/data/kb/compile/openmpi-svn$ mkdir build
</span><br>
<span class="quotelev1">&gt; kb_at_gate:/data/kb/compile/openmpi-svn$ cd build
</span><br>
<span class="quotelev1">&gt; kb_at_gate:/data/kb/compile/openmpi-svn/build$ ../configure
</span><br>
<span class="quotelev1">&gt; --prefix=/opt/openmpi-svn/  F77=ifort F90=ifort
</span><br>
<span class="quotelev1">&gt; kb_at_gate:/data/kb/compile/openmpi-svn/build$ make
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; lots of compilation is going on - and then
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory
</span><br>
<span class="quotelev1">&gt; `/data/kb/compile/openmpi-svn/build/orte/tools/orted'
</span><br>
<span class="quotelev1">&gt; depbase=`echo orted.o | sed 's|[^/]*$|.deps/&amp;|;s|\.o$||'`;\
</span><br>
<span class="quotelev1">&gt;        gcc -DHAVE_CONFIG_H -I. -I../../../../orte/tools/orted
</span><br>
<span class="quotelev1">&gt; -I../../../opal/include -I../../../orte/include -I../../../ompi/ 
</span><br>
<span class="quotelev1">&gt; include
</span><br>
<span class="quotelev1">&gt; -I../../../opal/mca/paffinity/linux/plpa/src/libplpa   -I../../../..
</span><br>
<span class="quotelev1">&gt; -I../../.. -I../../../../opal/include -I../../../../orte/include
</span><br>
<span class="quotelev1">&gt; -I../../../../ompi/include    -O3 -DNDEBUG -finline-functions
</span><br>
<span class="quotelev1">&gt; -fno-strict-aliasing -pthread -fvisibility=hidden -MT orted.o -MD -MP
</span><br>
<span class="quotelev1">&gt; -MF $depbase.Tpo -c -o orted.o ../../../../orte/tools/orted/orted.c  
</span><br>
<span class="quotelev1">&gt; &amp;&amp;\
</span><br>
<span class="quotelev1">&gt;        mv -f $depbase.Tpo $depbase.Po
</span><br>
<span class="quotelev1">&gt; /bin/sh ../../../libtool --tag=CC   --mode=link gcc  -O3 -DNDEBUG
</span><br>
<span class="quotelev1">&gt; -finline-functions -fno-strict-aliasing -pthread -fvisibility=hidden
</span><br>
<span class="quotelev1">&gt; -export-dynamic   -o orted orted.o ../../../orte/libopen-rte.la -lnsl
</span><br>
<span class="quotelev1">&gt; -lutil  -lm
</span><br>
<span class="quotelev1">&gt; mkdir .libs
</span><br>
<span class="quotelev1">&gt; gcc -O3 -DNDEBUG -finline-functions -fno-strict-aliasing -pthread
</span><br>
<span class="quotelev1">&gt; -fvisibility=hidden -o .libs/orted orted.o -Wl,--export-dynamic
</span><br>
<span class="quotelev1">&gt; ../../../orte/.libs/libopen-rte.so -lnsl -lutil -lm  -Wl,--rpath
</span><br>
<span class="quotelev1">&gt; -Wl,/opt/openmpi-svn//lib
</span><br>
<span class="quotelev1">&gt; ../../../orte/.libs/libopen-rte.so: undefined reference to
</span><br>
<span class="quotelev1">&gt; `mca_base_select'
</span><br>
<span class="quotelev1">&gt; ../../../orte/.libs/libopen-rte.so: undefined reference to
</span><br>
<span class="quotelev1">&gt; `opal_output_vverbose'
</span><br>
<span class="quotelev1">&gt; ../../../orte/.libs/libopen-rte.so: undefined reference to
</span><br>
<span class="quotelev1">&gt; `opal_output_vstring'
</span><br>
<span class="quotelev1">&gt; ../../../orte/.libs/libopen-rte.so: undefined reference to
</span><br>
<span class="quotelev1">&gt; `opal_tmp_directory'
</span><br>
<span class="quotelev1">&gt; ../../../orte/.libs/libopen-rte.so: undefined reference to
</span><br>
<span class="quotelev1">&gt; `opal_show_help_vstring'
</span><br>
<span class="quotelev1">&gt; ../../../orte/.libs/libopen-rte.so: undefined reference to  
</span><br>
<span class="quotelev1">&gt; `opal_filter'
</span><br>
<span class="quotelev1">&gt; ../../../orte/.libs/libopen-rte.so: undefined reference to
</span><br>
<span class="quotelev1">&gt; `opal_home_directory'
</span><br>
<span class="quotelev1">&gt; ../../../orte/.libs/libopen-rte.so: undefined reference to
</span><br>
<span class="quotelev1">&gt; `opal_arch_compute_local_id'
</span><br>
<span class="quotelev1">&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; make[2]: *** [orted] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/data/kb/compile/openmpi-svn/build/orte/tools/orted'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/data/kb/compile/openmpi-svn/build/orte'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The shared library libopen-rte.so does not seem to exist at all.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Karsten
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Karsten Bolding                    Bolding &amp; Burchard ApS
</span><br>
<span class="quotelev1">&gt; Strandgyden 25                     Phone: +45 64422058
</span><br>
<span class="quotelev1">&gt; DK-5466 Asperup                    Fax:   +45 64422068
</span><br>
<span class="quotelev1">&gt; Denmark                            Email: karsten_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.findvej.dk/Strandgyden25,5466,11,3">http://www.findvej.dk/Strandgyden25,5466,11,3</a>
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="5685.php">Wen Hao Wang: "Re: [OMPI users] Compiler Choice in openmpi"</a>
<li><strong>Previous message:</strong> <a href="5683.php">Jeff Squyres: "Re: [OMPI users] Replace 1.2.3 with 1.2.6"</a>
<li><strong>In reply to:</strong> <a href="5678.php">Karsten Bolding: "[OMPI users] compiling from source from svn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5687.php">Karsten Bolding: "Re: [OMPI users] compiling from source from svn"</a>
<li><strong>Reply:</strong> <a href="5687.php">Karsten Bolding: "Re: [OMPI users] compiling from source from svn"</a>
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
