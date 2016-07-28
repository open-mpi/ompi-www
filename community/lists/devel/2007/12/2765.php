<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16893";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  7 23:13:23 2007" -->
<!-- isoreceived="20071208041323" -->
<!-- sent="Fri, 7 Dec 2007 23:13:18 -0500" -->
<!-- isosent="20071208041318" -->
<!-- name="Tim Mattox" -->
<!-- email="timattox_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16893" -->
<!-- id="ea86ce220712072013x33a395f5nb4d56cbeaf791e93_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="200712071702.lB7H2XXZ006515_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16893<br>
<strong>From:</strong> Tim Mattox (<em>timattox_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-07 23:13:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2766.php">Gleb Natapov: "Re: [OMPI devel] 32-bit openib is broken on the trunk as of Nov	27th, r16799"</a>
<li><strong>Previous message:</strong> <a href="2764.php">Jeff Squyres: "Re: [OMPI devel] === CREATE FAILURE ==="</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This broke the nightly tarball creation for the trunk, AFAICT.
<br>
See an excerpt from the &quot;make distcheck&quot; log at the end of this e-mail.
<br>
Apparently, the configure stuff was not adjusted to only build
<br>
the sctp btl upon request... and then a header file was missing...
<br>
see this one line from the log:
<br>
<p>../../../../../ompi/mca/btl/sctp/btl_sctp_recv_handler.c:65:32:
<br>
btl_sctp_component.h: No such file or directory
<br>
<p>Hopefully the missing header file is fixed by r16895.
<br>
I initiated a new nightly tarball creation cycle, so we should know
<br>
in about 25 minutes.
<br>
<p>On Dec 7, 2007 12:02 PM,  &lt;kmroz_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Author: kmroz
</span><br>
<span class="quotelev1">&gt; Date: 2007-12-07 12:02:32 EST (Fri, 07 Dec 2007)
</span><br>
<span class="quotelev1">&gt; New Revision: 16893
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/16893">https://svn.open-mpi.org/trac/ompi/changeset/16893</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Removed .ompi_ignore and .ompi_unignore from SCTP BTL.
</span><br>
<span class="quotelev1">&gt; Removed:
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/sctp/.ompi_ignore
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/sctp/.ompi_unignore
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Deleted: trunk/ompi/mca/btl/sctp/.ompi_ignore
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Deleted: trunk/ompi/mca/btl/sctp/.ompi_unignore
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/sctp/.ompi_unignore      2007-12-07 12:02:32 EST (Fri, 07 Dec 2007)
</span><br>
<span class="quotelev1">&gt; +++ (empty file)
</span><br>
<span class="quotelev1">&gt; @@ -1,4 +0,0 @@
</span><br>
<span class="quotelev1">&gt; -penoff
</span><br>
<span class="quotelev1">&gt; -kmroz
</span><br>
<span class="quotelev1">&gt; -wagner
</span><br>
<span class="quotelev1">&gt; -humaira
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn-full mailing list
</span><br>
<span class="quotelev1">&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>ERROR: Command returned a non-zero exist status
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;make -j 4 distcheck
<br>
<p>Start time: Fri Dec  7 21:00:18 EST 2007
<br>
End time:   Fri Dec  7 21:16:42 EST 2007
<br>
<p>=======================================================================
<br>
[... previous lines snipped ...]
<br>
mv -f $depbase.Tpo $depbase.Plo
<br>
depbase=`echo btl_sm_frag.lo | sed 's|[^/]*$|.deps/&amp;|;s|\.lo$||'`;\
<br>
/bin/sh ../../../../libtool --tag=CC   --mode=compile gcc
<br>
-DHAVE_CONFIG_H -I. -I../../../../opal/include
<br>
-I../../../../orte/include -I../../../../ompi/include
<br>
-I../../../../opal/mca/paffinity/linux/plpa/src/libplpa
<br>
-I../../../../../ompi/mca/btl/sm   -I../../../../.. -I../../../..
<br>
-I../../../../../opal/include -I../../../../../orte/include
<br>
-I../../../../../ompi/include    -O3 -DNDEBUG -finline-functions
<br>
-fno-strict-aliasing -pthread -MT btl_sm_frag.lo -MD -MP -MF
<br>
$depbase.Tpo -c -o btl_sm_frag.lo
<br>
../../../../../ompi/mca/btl/sm/btl_sm_frag.c &amp;&amp;\
<br>
mv -f $depbase.Tpo $depbase.Plo
<br>
libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../../../../opal/include
<br>
-I../../../../orte/include -I../../../../ompi/include
<br>
-I../../../../opal/mca/paffinity/linux/plpa/src/libplpa
<br>
-I../../../../../ompi/mca/btl/sm -I../../../../.. -I../../../..
<br>
-I../../../../../opal/include -I../../../../../orte/include
<br>
-I../../../../../ompi/include -O3 -DNDEBUG -finline-functions
<br>
-fno-strict-aliasing -pthread -MT btl_sm_frag.lo -MD -MP -MF
<br>
.deps/btl_sm_frag.Tpo -c ../../../../../ompi/mca/btl/sm/btl_sm_frag.c
<br>
-fPIC -DPIC -o .libs/btl_sm_frag.o
<br>
libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../../../../opal/include
<br>
-I../../../../orte/include -I../../../../ompi/include
<br>
-I../../../../opal/mca/paffinity/linux/plpa/src/libplpa
<br>
-I../../../../../ompi/mca/btl/sm -I../../../../.. -I../../../..
<br>
-I../../../../../opal/include -I../../../../../orte/include
<br>
-I../../../../../ompi/include -O3 -DNDEBUG -finline-functions
<br>
-fno-strict-aliasing -pthread -MT btl_sm_component.lo -MD -MP -MF
<br>
.deps/btl_sm_component.Tpo -c
<br>
../../../../../ompi/mca/btl/sm/btl_sm_component.c  -fPIC -DPIC -o
<br>
.libs/btl_sm_component.o
<br>
libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../../../../opal/include
<br>
-I../../../../orte/include -I../../../../ompi/include
<br>
-I../../../../opal/mca/paffinity/linux/plpa/src/libplpa
<br>
-I../../../../../ompi/mca/btl/sm -I../../../../.. -I../../../..
<br>
-I../../../../../opal/include -I../../../../../orte/include
<br>
-I../../../../../ompi/include -O3 -DNDEBUG -finline-functions
<br>
-fno-strict-aliasing -pthread -MT btl_sm.lo -MD -MP -MF
<br>
.deps/btl_sm.Tpo -c ../../../../../ompi/mca/btl/sm/btl_sm.c  -fPIC
<br>
-DPIC -o .libs/btl_sm.o
<br>
/bin/sh ../../../../libtool --tag=CC   --mode=link gcc  -O3 -DNDEBUG
<br>
-finline-functions -fno-strict-aliasing -pthread -module
<br>
-avoid-version -export-dynamic   -o mca_btl_sm.la -rpath
<br>
/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r16894/ompi/openmpi-1.3a1r16894/_inst/lib/openmpi
<br>
btl_sm.lo btl_sm_component.lo btl_sm_frag.lo
<br>
/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r16894/ompi/openmpi-1.3a1r16894/_build/ompi/mca/common/sm/libmca_common_sm.la
<br>
/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r16894/ompi/openmpi-1.3a1r16894/_build/ompi/libmpi.la
<br>
/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r16894/ompi/openmpi-1.3a1r16894/_build/orte/libopen-rte.la
<br>
/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r16894/ompi/openmpi-1.3a1r16894/_build/opal/libopen-pal.la
<br>
-lnsl -lutil  -lm
<br>
libtool: link: gcc -shared  .libs/btl_sm.o .libs/btl_sm_component.o
<br>
.libs/btl_sm_frag.o   -Wl,-rpath
<br>
-Wl,/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r16894/ompi/openmpi-1.3a1r16894/_build/ompi/mca/common/sm/.libs
<br>
-Wl,-rpath -Wl,/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r16894/ompi/openmpi-1.3a1r16894/_build/ompi/.libs
<br>
-Wl,-rpath -Wl,/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r16894/ompi/openmpi-1.3a1r16894/_build/orte/.libs
<br>
-Wl,-rpath -Wl,/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r16894/ompi/openmpi-1.3a1r16894/_build/opal/.libs
<br>
-Wl,-rpath -Wl,/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r16894/ompi/openmpi-1.3a1r16894/_inst/lib
<br>
-L/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r16894/ompi/openmpi-1.3a1r16894/_build/orte/.libs
<br>
-L/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r16894/ompi/openmpi-1.3a1r16894/_build/opal/.libs
<br>
/home/mpiteam/openmpi/nightly-!
<br>
&nbsp;tarball-build-root/trunk/create-r16894/ompi/openmpi-1.3a1r16894/_build/ompi/mca/common/sm/.libs/libmca_common_sm.so
<br>
/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r16894/ompi/openmpi-1.3a1r16894/_build/ompi/.libs/libmpi.so
<br>
/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r16894/ompi/openmpi-1.3a1r16894/_build/orte/.libs/libopen-rte.so
<br>
/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r16894/ompi/openmpi-1.3a1r16894/_build/opal/.libs/libopen-pal.so
<br>
-ldl -lnsl -lutil -lm  -pthread   -pthread -Wl,-soname
<br>
-Wl,mca_btl_sm.so -o .libs/mca_btl_sm.so
<br>
libtool: link: creating mca_btl_sm.la
<br>
libtool: link: ( cd &quot;.libs&quot; &amp;&amp; rm -f &quot;mca_btl_sm.la&quot; &amp;&amp; ln -s
<br>
&quot;../mca_btl_sm.la&quot; &quot;mca_btl_sm.la&quot; )
<br>
make[3]: Leaving directory
<br>
`/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r16894/ompi/openmpi-1.3a1r16894/_build/ompi/mca/btl/sm'
<br>
Making all in mca/btl/sctp
<br>
make[3]: Entering directory
<br>
`/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r16894/ompi/openmpi-1.3a1r16894/_build/ompi/mca/btl/sctp'
<br>
depbase=`echo btl_sctp.lo | sed 's|[^/]*$|.deps/&amp;|;s|\.lo$||'`;\
<br>
/bin/sh ../../../../libtool --tag=CC   --mode=compile gcc
<br>
-DHAVE_CONFIG_H -I. -I../../../../opal/include
<br>
-I../../../../orte/include -I../../../../ompi/include
<br>
-I../../../../opal/mca/paffinity/linux/plpa/src/libplpa
<br>
-I../../../../../ompi/mca/btl/sctp   -I../../../../.. -I../../../..
<br>
-I../../../../../opal/include -I../../../../../orte/include
<br>
-I../../../../../ompi/include    -O3 -DNDEBUG -finline-functions
<br>
-fno-strict-aliasing -pthread -MT btl_sctp.lo -MD -MP -MF $depbase.Tpo
<br>
-c -o btl_sctp.lo ../../../../../ompi/mca/btl/sctp/btl_sctp.c &amp;&amp;\
<br>
mv -f $depbase.Tpo $depbase.Plo
<br>
depbase=`echo btl_sctp_component.lo | sed 's|[^/]*$|.deps/&amp;|;s|\.lo$||'`;\
<br>
/bin/sh ../../../../libtool --tag=CC   --mode=compile gcc
<br>
-DHAVE_CONFIG_H -I. -I../../../../opal/include
<br>
-I../../../../orte/include -I../../../../ompi/include
<br>
-I../../../../opal/mca/paffinity/linux/plpa/src/libplpa
<br>
-I../../../../../ompi/mca/btl/sctp   -I../../../../.. -I../../../..
<br>
-I../../../../../opal/include -I../../../../../orte/include
<br>
-I../../../../../ompi/include    -O3 -DNDEBUG -finline-functions
<br>
-fno-strict-aliasing -pthread -MT btl_sctp_component.lo -MD -MP -MF
<br>
$depbase.Tpo -c -o btl_sctp_component.lo
<br>
../../../../../ompi/mca/btl/sctp/btl_sctp_component.c &amp;&amp;\
<br>
mv -f $depbase.Tpo $depbase.Plo
<br>
depbase=`echo btl_sctp_endpoint.lo | sed 's|[^/]*$|.deps/&amp;|;s|\.lo$||'`;\
<br>
/bin/sh ../../../../libtool --tag=CC   --mode=compile gcc
<br>
-DHAVE_CONFIG_H -I. -I../../../../opal/include
<br>
-I../../../../orte/include -I../../../../ompi/include
<br>
-I../../../../opal/mca/paffinity/linux/plpa/src/libplpa
<br>
-I../../../../../ompi/mca/btl/sctp   -I../../../../.. -I../../../..
<br>
-I../../../../../opal/include -I../../../../../orte/include
<br>
-I../../../../../ompi/include    -O3 -DNDEBUG -finline-functions
<br>
-fno-strict-aliasing -pthread -MT btl_sctp_endpoint.lo -MD -MP -MF
<br>
$depbase.Tpo -c -o btl_sctp_endpoint.lo
<br>
../../../../../ompi/mca/btl/sctp/btl_sctp_endpoint.c &amp;&amp;\
<br>
mv -f $depbase.Tpo $depbase.Plo
<br>
depbase=`echo btl_sctp_frag.lo | sed 's|[^/]*$|.deps/&amp;|;s|\.lo$||'`;\
<br>
/bin/sh ../../../../libtool --tag=CC   --mode=compile gcc
<br>
-DHAVE_CONFIG_H -I. -I../../../../opal/include
<br>
-I../../../../orte/include -I../../../../ompi/include
<br>
-I../../../../opal/mca/paffinity/linux/plpa/src/libplpa
<br>
-I../../../../../ompi/mca/btl/sctp   -I../../../../.. -I../../../..
<br>
-I../../../../../opal/include -I../../../../../orte/include
<br>
-I../../../../../ompi/include    -O3 -DNDEBUG -finline-functions
<br>
-fno-strict-aliasing -pthread -MT btl_sctp_frag.lo -MD -MP -MF
<br>
$depbase.Tpo -c -o btl_sctp_frag.lo
<br>
../../../../../ompi/mca/btl/sctp/btl_sctp_frag.c &amp;&amp;\
<br>
mv -f $depbase.Tpo $depbase.Plo
<br>
libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../../../../opal/include
<br>
-I../../../../orte/include -I../../../../ompi/include
<br>
-I../../../../opal/mca/paffinity/linux/plpa/src/libplpa
<br>
-I../../../../../ompi/mca/btl/sctp -I../../../../.. -I../../../..
<br>
-I../../../../../opal/include -I../../../../../orte/include
<br>
-I../../../../../ompi/include -O3 -DNDEBUG -finline-functions
<br>
-fno-strict-aliasing -pthread -MT btl_sctp.lo -MD -MP -MF
<br>
.deps/btl_sctp.Tpo -c ../../../../../ompi/mca/btl/sctp/btl_sctp.c
<br>
-fPIC -DPIC -o .libs/btl_sctp.o
<br>
libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../../../../opal/include
<br>
-I../../../../orte/include -I../../../../ompi/include
<br>
-I../../../../opal/mca/paffinity/linux/plpa/src/libplpa
<br>
-I../../../../../ompi/mca/btl/sctp -I../../../../.. -I../../../..
<br>
-I../../../../../opal/include -I../../../../../orte/include
<br>
-I../../../../../ompi/include -O3 -DNDEBUG -finline-functions
<br>
-fno-strict-aliasing -pthread -MT btl_sctp_frag.lo -MD -MP -MF
<br>
.deps/btl_sctp_frag.Tpo -c
<br>
../../../../../ompi/mca/btl/sctp/btl_sctp_frag.c  -fPIC -DPIC -o
<br>
.libs/btl_sctp_frag.o
<br>
libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../../../../opal/include
<br>
-I../../../../orte/include -I../../../../ompi/include
<br>
-I../../../../opal/mca/paffinity/linux/plpa/src/libplpa
<br>
-I../../../../../ompi/mca/btl/sctp -I../../../../.. -I../../../..
<br>
-I../../../../../opal/include -I../../../../../orte/include
<br>
-I../../../../../ompi/include -O3 -DNDEBUG -finline-functions
<br>
-fno-strict-aliasing -pthread -MT btl_sctp_endpoint.lo -MD -MP -MF
<br>
.deps/btl_sctp_endpoint.Tpo -c
<br>
../../../../../ompi/mca/btl/sctp/btl_sctp_endpoint.c  -fPIC -DPIC -o
<br>
.libs/btl_sctp_endpoint.o
<br>
libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../../../../opal/include
<br>
-I../../../../orte/include -I../../../../ompi/include
<br>
-I../../../../opal/mca/paffinity/linux/plpa/src/libplpa
<br>
-I../../../../../ompi/mca/btl/sctp -I../../../../.. -I../../../..
<br>
-I../../../../../opal/include -I../../../../../orte/include
<br>
-I../../../../../ompi/include -O3 -DNDEBUG -finline-functions
<br>
-fno-strict-aliasing -pthread -MT btl_sctp_component.lo -MD -MP -MF
<br>
.deps/btl_sctp_component.Tpo -c
<br>
../../../../../ompi/mca/btl/sctp/btl_sctp_component.c  -fPIC -DPIC -o
<br>
.libs/btl_sctp_component.o
<br>
../../../../../ompi/mca/btl/sctp/btl_sctp_component.c:70:32:
<br>
btl_sctp_component.h: No such file or directory
<br>
depbase=`echo btl_sctp_proc.lo | sed 's|[^/]*$|.deps/&amp;|;s|\.lo$||'`;\
<br>
/bin/sh ../../../../libtool --tag=CC   --mode=compile gcc
<br>
-DHAVE_CONFIG_H -I. -I../../../../opal/include
<br>
-I../../../../orte/include -I../../../../ompi/include
<br>
-I../../../../opal/mca/paffinity/linux/plpa/src/libplpa
<br>
-I../../../../../ompi/mca/btl/sctp   -I../../../../.. -I../../../..
<br>
-I../../../../../opal/include -I../../../../../orte/include
<br>
-I../../../../../ompi/include    -O3 -DNDEBUG -finline-functions
<br>
-fno-strict-aliasing -pthread -MT btl_sctp_proc.lo -MD -MP -MF
<br>
$depbase.Tpo -c -o btl_sctp_proc.lo
<br>
../../../../../ompi/mca/btl/sctp/btl_sctp_proc.c &amp;&amp;\
<br>
mv -f $depbase.Tpo $depbase.Plo
<br>
libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../../../../opal/include
<br>
-I../../../../orte/include -I../../../../ompi/include
<br>
-I../../../../opal/mca/paffinity/linux/plpa/src/libplpa
<br>
-I../../../../../ompi/mca/btl/sctp -I../../../../.. -I../../../..
<br>
-I../../../../../opal/include -I../../../../../orte/include
<br>
-I../../../../../ompi/include -O3 -DNDEBUG -finline-functions
<br>
-fno-strict-aliasing -pthread -MT btl_sctp_proc.lo -MD -MP -MF
<br>
.deps/btl_sctp_proc.Tpo -c
<br>
../../../../../ompi/mca/btl/sctp/btl_sctp_proc.c  -fPIC -DPIC -o
<br>
.libs/btl_sctp_proc.o
<br>
depbase=`echo btl_sctp_recv_handler.lo | sed 's|[^/]*$|.deps/&amp;|;s|\.lo$||'`;\
<br>
/bin/sh ../../../../libtool --tag=CC   --mode=compile gcc
<br>
-DHAVE_CONFIG_H -I. -I../../../../opal/include
<br>
-I../../../../orte/include -I../../../../ompi/include
<br>
-I../../../../opal/mca/paffinity/linux/plpa/src/libplpa
<br>
-I../../../../../ompi/mca/btl/sctp   -I../../../../.. -I../../../..
<br>
-I../../../../../opal/include -I../../../../../orte/include
<br>
-I../../../../../ompi/include    -O3 -DNDEBUG -finline-functions
<br>
-fno-strict-aliasing -pthread -MT btl_sctp_recv_handler.lo -MD -MP -MF
<br>
$depbase.Tpo -c -o btl_sctp_recv_handler.lo
<br>
../../../../../ompi/mca/btl/sctp/btl_sctp_recv_handler.c &amp;&amp;\
<br>
mv -f $depbase.Tpo $depbase.Plo
<br>
make[3]: *** [btl_sctp_component.lo] Error 1
<br>
make[3]: *** Waiting for unfinished jobs....
<br>
libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../../../../opal/include
<br>
-I../../../../orte/include -I../../../../ompi/include
<br>
-I../../../../opal/mca/paffinity/linux/plpa/src/libplpa
<br>
-I../../../../../ompi/mca/btl/sctp -I../../../../.. -I../../../..
<br>
-I../../../../../opal/include -I../../../../../orte/include
<br>
-I../../../../../ompi/include -O3 -DNDEBUG -finline-functions
<br>
-fno-strict-aliasing -pthread -MT btl_sctp_recv_handler.lo -MD -MP -MF
<br>
.deps/btl_sctp_recv_handler.Tpo -c
<br>
../../../../../ompi/mca/btl/sctp/btl_sctp_recv_handler.c  -fPIC -DPIC
<br>
-o .libs/btl_sctp_recv_handler.o
<br>
../../../../../ompi/mca/btl/sctp/btl_sctp_recv_handler.c:65:32:
<br>
btl_sctp_component.h: No such file or directory
<br>
../../../../../ompi/mca/btl/sctp/btl_sctp_recv_handler.c: In function
<br>
`mca_btl_sctp_recv_handler':
<br>
../../../../../ompi/mca/btl/sctp/btl_sctp_recv_handler.c:149: warning:
<br>
passing arg 1 of `mca_btl_sctp_proc_get' makes integer from pointer
<br>
without a cast
<br>
make[3]: *** [btl_sctp_recv_handler.lo] Error 1
<br>
make[2]: *** [all-recursive] Error 1
<br>
make[2]: Leaving directory
<br>
`/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r16894/ompi/openmpi-1.3a1r16894/_build/ompi'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory
<br>
`/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r16894/ompi/openmpi-1.3a1r16894/_build'
<br>
make: *** [distcheck] Error 2
<br>
=======================================================================
<br>
<p>Your friendly daemon,
<br>
Cyrador
<br>
_______________________________________________
<br>
testing mailing list
<br>
testing_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/testing">http://www.open-mpi.org/mailman/listinfo.cgi/testing</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2766.php">Gleb Natapov: "Re: [OMPI devel] 32-bit openib is broken on the trunk as of Nov	27th, r16799"</a>
<li><strong>Previous message:</strong> <a href="2764.php">Jeff Squyres: "Re: [OMPI devel] === CREATE FAILURE ==="</a>
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
