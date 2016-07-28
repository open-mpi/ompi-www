<?
$subject_val = "Re: [OMPI users] compilation error with pgcc Unknown switch";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  8 20:42:45 2012" -->
<!-- isoreceived="20120309014245" -->
<!-- sent="Fri, 9 Mar 2012 09:42:22 +0800" -->
<!-- isosent="20120309014222" -->
<!-- name="Abhinav Sarje" -->
<!-- email="asarje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] compilation error with pgcc Unknown switch" -->
<!-- id="CADbPk83R9Nf26fDvnbdhoTT1FCfD8Bax7hRTBOugcEa4fOuczQ_at_mail.gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="043AAE97-A4EB-4666-B3FF-54606928D08D_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] compilation error with pgcc Unknown switch<br>
<strong>From:</strong> Abhinav Sarje (<em>asarje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-08 20:42:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18719.php">Robert Collyer: "[OMPI users] Compilation errors: Unexpected EOF while looking for matching `'' on 1.4.5"</a>
<li><strong>Previous message:</strong> <a href="18717.php">George Bosilca: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<li><strong>In reply to:</strong> <a href="18716.php">Jeffrey Squyres: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Jeff, and all; I will stick to the GNU compilers for now.
<br>
<p>On Fri, Mar 9, 2012 at 7:05 AM, Jeffrey Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; I talked to Brian about this, and he agrees with Nathan: don't use PGI on the Cray (I'm acting as an intermediary here -- I don't care about the Cray platform at all :-) ).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; They have always used GNU and it works fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That being said, there may well be something broken with our non-inlined assembly, and this is the only platform it's showing up on. &#160;So I'll file a ticket and CC you, but I don't know if it'll get fixed soon if the only platform it shows up on is one where we don't recommend that compiler.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (that being said, we'll happily accept patches :-) )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Make sense?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 6, 2012, at 3:55 AM, Abhinav Sarje wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I pulled fresh copy of the dev trunk, and tried building. It did not
</span><br>
<span class="quotelev2">&gt;&gt; change anything - I am still getting the same error:
</span><br>
<span class="quotelev2">&gt;&gt; ../../../ompi/.libs/libmpi.so: undefined reference to
</span><br>
<span class="quotelev2">&gt;&gt; `opal_atomic_swap_64'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; GNU version still builds fine.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Mar 6, 2012 at 5:38 AM, Jeffrey Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I disabled C++ inline assembly for PGI (we already had C inline assembly for PGI).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So I don't think this should have caused a new error... should it?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mar 5, 2012, at 10:21 AM, Nathan Hjelm wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Try pulling a fresh trunk. Jeff made a recent commit that may be relevant. Something about inline assembly being broken on PGI (I personally wouldn't recommend using that compiler unless you are using fortran).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -Nathan
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Sun, 4 Mar 2012, Abhinav Sarje wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The same options/configuration in the GNU environment (compiler
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; version 4.6.1) builds smoothly. PGI env still gives the aforementioned
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; error. Has anyone experienced similar problem? May be some more flags
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; need to be set for PGI?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Sat, Mar 3, 2012 at 10:58 PM, Abhinav Sarje &lt;asarje_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hi, I am trying to compile 64 bits.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Fri, Mar 2, 2012 at 11:48 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Something is definitively weird in your compilation environment.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; The &quot;undefined&quot; function is defined in atomic_impl.h as a static inline (static inline int64_t opal_atomic_swap_64(volatile int64_t *addr,&#133;). So either the compiler should have complained during compilation, or it should be inlined when you reach the linking step. Or, and this is the unusual part, you're compiling 32 bits only (thus no atomic 64 bits are available), and we are forcing atomic operations on a 64 bits value. That would be quite strange &#133;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Are you trying to compile 32 or 64 bits?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#160;george.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Mar 2, 2012, at 06:12 , Jeffrey Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I'm going to have to defer this to those who regularly build on Crays...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Sandia / LANL?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Mar 2, 2012, at 12:12 AM, Abhinav Sarje wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi again,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I just tried building afresh -&gt; svn co, autogen, configure, make. And
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; it failed at the same point as before:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; CCLD &#160; ompi_info
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ../../../ompi/.libs/libmpi.so: undefined reference to `opal_atomic_swap_64'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Any more ideas/fixes?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks all.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Abhinav.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Fri, Mar 2, 2012 at 8:14 AM, Abhinav Sarje &lt;asarje_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; yes, I did a full autogen, configure, make clean and make all
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Thu, Mar 1, 2012 at 10:03 PM, Jeffrey Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Did you do a full autogen / configure / make clean / make all ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Mar 1, 2012, at 8:53 AM, Abhinav Sarje wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks Ralph. That did help, but only till the next hurdle. Now the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; build fails at the following point with an 'undefined reference':
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -----------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Making all in tools/ompi_info
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; make[2]: Entering directory
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; `/global/u1/a/asarje/hopper/openmpi-dev-trunk/build/ompi/tools/ompi_info'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; CC &#160; &#160; ompi_info.o
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; CC &#160; &#160; output.o
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; CC &#160; &#160; param.o
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; CC &#160; &#160; components.o
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; CC &#160; &#160; version.o
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; CCLD &#160; ompi_info
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ../../../ompi/.libs/libmpi.so: undefined reference to `opal_atomic_swap_64'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; make[2]: *** [ompi_info] Error 2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; `/global/u1/a/asarje/hopper/openmpi-dev-trunk/build/ompi/tools/ompi_info'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; make[1]: Leaving directory
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; `/global/u1/a/asarje/hopper/openmpi-dev-trunk/build/ompi'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -----------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Thu, Mar 1, 2012 at 5:25 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; You need to update your source code - this was identified and fixed on Wed. Unfortunately, our trunk is a developer's environment. While we try hard to keep it fully functional, bugs do occasionally work their way into the code.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Mar 1, 2012, at 1:37 AM, Abhinav Sarje wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi Nathan,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I tried building on an internal login node, and it did not fail at the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; previous point. But, after compiling for a very long time, it failed
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; while building libmpi.la, with a multiple definition error:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ----------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; CC &#160; &#160; mpiext/mpiext.lo
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; CC &#160; &#160; mpi/f77/base/mpi_f77_base_libmpi_f77_base_la-attr_fn_f.lo
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; CC &#160; &#160; mpi/f77/base/mpi_f77_base_libmpi_f77_base_la-conversion_fn_null_f.lo
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; CC &#160; &#160; mpi/f77/base/mpi_f77_base_libmpi_f77_base_la-f90_accessors.lo
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; CC &#160; &#160; mpi/f77/base/mpi_f77_base_libmpi_f77_base_la-strings.lo
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; CC &#160; &#160; mpi/f77/base/mpi_f77_base_libmpi_f77_base_la-test_constants_f.lo
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; CCLD &#160; mpi/f77/base/libmpi_f77_base.la
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; CCLD &#160; libmpi.la
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mca/fcoll/dynamic/.libs/libmca_fcoll_dynamic.a(fcoll_dynamic_file_write_all.o):
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; In function `local_heap_sort':
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /global/u1/a/asarje/hopper/openmpi-dev-trunk/build/ompi/mca/fcoll/dynamic/../../../../../ompi/mca/fcoll/dynamic/fcoll_dynamic_file_write_all.c:1111:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; multiple definition of `local_heap_sort'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mca/fcoll/static/.libs/libmca_fcoll_static.a(fcoll_static_file_write_all.o):/global/u1/a/asarje/hopper/openmpi-dev-trunk/build/ompi/mca/fcoll/static/../../../../../ompi/mca/fcoll/static/fcoll_static_file_write_all.c:929:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; first defined here
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; make[2]: *** [libmpi.la] Error 2
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; `/global/u1/a/asarje/hopper/openmpi-dev-trunk/build/ompi'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; make[1]: Leaving directory
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; `/global/u1/a/asarje/hopper/openmpi-dev-trunk/build/ompi'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ----------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Any idea why this is happening, and how to fix it? Again, I am using
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the XE6 platform configuration file.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Abhinav.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Wed, Feb 29, 2012 at 12:13 AM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Mon, 27 Feb 2012, Abhinav Sarje wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi Nathan, Gus, Manju,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I got a chance to try out the XE6 support build, but with no success.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; First I was getting this error: &quot;PGC-F-0010-File write error occurred
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (temporary pragma .s file)&quot;. After searching online about this error,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I saw that there is a patch at
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &quot;<a href="https://svn.open-mpi.org/trac/ompi/attachment/ticket/2913/openmpi-trunk-ident_string.patch">https://svn.open-mpi.org/trac/ompi/attachment/ticket/2913/openmpi-trunk-ident_string.patch</a>&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; for this particular error.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; With the patched version, I did not get this error anymore, but got
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the unknown switch flag error for the flag &quot;-march=amdfam10&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (specified in the XE6 configuration in the dev trunk) at a particular
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; point even if I use the '-noswitcherror' flag with the pgcc compiler.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; If I remove this flag (-march=amdfam10), the build fails later at the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; following point:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Making all in mca/ras/alps
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; make[2]: Entering directory
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; `/{mydir}/openmpi-dev-trunk/build/orte/mca/ras/alps'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; CC &#160; &#160; ras_alps_component.lo
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; CC &#160; &#160; ras_alps_module.lo
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; PGC-F-0206-Can't find include file alps/apInfo.h
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (../../../../../orte/mca/ras/alps/ras_alps_module.c: 37)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; PGC/x86-64 Linux 11.10-0: compilation aborted
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; make[2]: *** [ras_alps_module.lo] Error 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; `/{mydir}/openmpi-dev-trunk/build/orte/mca/ras/alps'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; make[1]: Leaving directory `/{mydir}/openmpi-dev-trunk/build/orte'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; This is a known issue with Cray's frontend environment. Build on one of the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; internal login nodes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -Nathan
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18719.php">Robert Collyer: "[OMPI users] Compilation errors: Unexpected EOF while looking for matching `'' on 1.4.5"</a>
<li><strong>Previous message:</strong> <a href="18717.php">George Bosilca: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<li><strong>In reply to:</strong> <a href="18716.php">Jeffrey Squyres: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
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
