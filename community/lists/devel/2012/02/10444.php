<?
$subject_val = "Re: [OMPI devel] 1.5.5rc1 tested: MacOS/ppc (w/ 1 failure and a &quot;CMR&quot;)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 15 23:58:59 2012" -->
<!-- isoreceived="20120216045859" -->
<!-- sent="Wed, 15 Feb 2012 20:58:35 -0800" -->
<!-- isosent="20120216045835" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.5.5rc1 tested: MacOS/ppc (w/ 1 failure and a &amp;quot;CMR&amp;quot;)" -->
<!-- id="4F3C8CFB.90208_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F3C7702.5060507_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.5.5rc1 tested: MacOS/ppc (w/ 1 failure and a &quot;CMR&quot;)<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-15 23:58:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10445.php">Paul H. Hargrove: "[OMPI devel] More on OMPI on MacOS 10.4/ppc [WORK AROUND]"</a>
<li><strong>Previous message:</strong> <a href="10443.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5.5rc1 tested: MacOS/ppc (w/ 1 failure and a &quot;CMR&quot;)"</a>
<li><strong>In reply to:</strong> <a href="10443.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5.5rc1 tested: MacOS/ppc (w/ 1 failure and a &quot;CMR&quot;)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/12/10091.php">Paul H. Hargrove: "[OMPI devel] 1.5.5rc1 tested: REGRESSION on FreeBSD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ah, I see that my problems on MacOS 10.4 are already a moot point, as my 
<br>
&quot;option (c)&quot; has already been implemented.
<br>
<p>&nbsp;From README in 1.5 branch:
<br>
<span class="quotelev1">&gt;   - OS X (10.5, 10.6), 32 and 64 bit (x86_64), with gcc and Absoft
</span><br>
<span class="quotelev1">&gt;     compilers (*)
</span><br>
and from trunk:
<br>
<span class="quotelev1">&gt;   - OS X (10.5, 10.6, 10.7), 32 and 64 bit (x86_64), with gcc
</span><br>
<span class="quotelev1">&gt;     and Absoft compilers (*).
</span><br>
<p>-Paul
<br>
<p>On 2/15/2012 7:24 PM, Paul H. Hargrove wrote:
<br>
<span class="quotelev1">&gt; As a point for discussion, I am going to offer a simple solution:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; c) Ignore this for 1.5.5 and raise the minimum MacOS version from 10.4 
</span><br>
<span class="quotelev1">&gt; to 10.5 for ompi 1.6.x and 1.7.x
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any strong opinions?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2/15/2012 10:29 AM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I wanted to note that MacOS 10.4 on *X86* has the same &quot;WEAK&quot; 
</span><br>
<span class="quotelev2">&gt;&gt; definitions in opal_config.h.
</span><br>
<span class="quotelev2">&gt;&gt; Yet it can build ompi-1.5.x with only WARNING about duplicate symbols.
</span><br>
<span class="quotelev2">&gt;&gt; I just tried, and the test code Matthias sent worked too:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ ./bin/mpicc pmpi_test.c
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/ld: warning multiple definitions of symbol _MPI_Finalize
</span><br>
<span class="quotelev2">&gt;&gt; /var/tmp//cc7tP6zp.o definition of _MPI_Finalize in section 
</span><br>
<span class="quotelev2">&gt;&gt; (__TEXT,__text)
</span><br>
<span class="quotelev2">&gt;&gt; /Users/phhargrove/OMPI/openmpi-1.5.5rc1/INST/lib/libmpi.dylib(single 
</span><br>
<span class="quotelev2">&gt;&gt; module) definition of _MPI_Finalize
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ ./a.out
</span><br>
<span class="quotelev2">&gt;&gt; inside MPI_Finalize() wrapper
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So, I don't think (A) is an appropriate solution.
</span><br>
<span class="quotelev2">&gt;&gt; I am also wondering if there is some compiler/linker flag we 
</span><br>
<span class="quotelev2">&gt;&gt; could/should pass to &quot;fix&quot; the PPC.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Going back to the 10.4/PPC I see now that despite the warnings, a 
</span><br>
<span class="quotelev2">&gt;&gt; working executable WAS generated:
</span><br>
<span class="quotelev2">&gt;&gt; $ ./a.out
</span><br>
<span class="quotelev2">&gt;&gt; inside MPI_Finalize() wrapper
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So, I don't think we have managed to reproduce the source of the 
</span><br>
<span class="quotelev2">&gt;&gt; build problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 2/15/2012 9:25 AM, Matthias Jurenz wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for testing, Paul.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I think we need an additional configure test which disables VT if
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a) weak symbol support is disabled/not available
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - or more precise -
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; b) configuring on PPC/Mac10.4 and the used GNU compiler version is 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; older or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; equal to 4.0.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I prefer to option b) because VT (i.e. PMPI) should also work 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; without weak
</span><br>
<span class="quotelev3">&gt;&gt;&gt; symbol support (at least it does on my laptop with gcc 4.4.3 and 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; '--disable-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; weak-symbols'). On the other hand, in the most cases the compiler 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; supports
</span><br>
<span class="quotelev3">&gt;&gt;&gt; weak symbols, so option a) would also work, unless weak symbol 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; support is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; disabled by the configure option '--disable-weak-symbols'.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff, what's your opinion?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Matthias
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Wednesday 15 February 2012 10:33:30 Paul Hargrove wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; See responses mixed in below.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Wed, Feb 15, 2012 at 1:02 AM, Matthias Jurenz&lt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; matthias.jurenz_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Unfortunately, we don't have access to a PPC system with MacOS 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 10.4 to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; try to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; reproduce the error.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Not too surprising.  I'll see what I can do to help resolve the 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; problem.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Paul, could you please check for the definition of the macro
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; OPAL_HAVE_WEAK_SYMBOLS in ompi_config.h?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ompi_config.h doesn't contain that macro.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; However, opal_config.h shows no weak symbol support:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #define HWLOC_HAVE_ATTRIBUTE_WEAK_ALIAS 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #define OPAL_HAVE_ATTRIBUTE_WEAK_ALIAS 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #define OPAL_HAVE_WEAK_SYMBOLS 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I assume that the ancient GNU compiler
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; on PPC/MacOS10.4 does not support weak-symbols which cause the 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; multiply
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; definitions.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Does that mean I should simply not expect to get VT built there?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Furthermore, could you please try to build the following code to test
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; whether
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the PMPI interface of Open MPI works in general?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #include&lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #include&lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; int MPI_Finalize() {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   printf( &quot;inside MPI_Finalize() wrapper\n&quot; );
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   return PMPI_Finalize();
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; int main(int argc, char** argv) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am assuming I am supposed to build that with VT disabled in my OMPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; build.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Doing so, I see that PMPI is apparently not working:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ ./bin/mpicc pmpi_test.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /usr/bin/ld: warning multiple definitions of symbol _MPI_Finalize
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /var/tmp//ccHZvZ3B.o definition of _MPI_Finalize in section 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (__TEXT,__text)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /Users/phargrov/OMPI/openmpi-1.5.5rc1/INST/lib/libmpi.dylib(single 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; module)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; definition of _MPI_Finalize
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Maybe the error occurs only if this code is in a shared library which
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; depends
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; on the MPI library (as does the libvt-mpi). Therefor, run the 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; following:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; $ gcc -fPIC -shared pmpi_test.c -I&lt;mpi-inc-dir&gt;  -o 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; libpmpi_test.dylib
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -L&lt;mpi-
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; lib-dir&gt;  -lmpi
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I assume this check might be redundant given that the previous one 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; failed.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; However, here it is anyway:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ gcc -fPIC -shared pmpi_test.c -Iinclude -o libpmpi_test.dylib -Llib
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; powerpc-apple-darwin8-gcc-4.0.1: unrecognized option '-shared'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /usr/bin/ld: Undefined symbols:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _MPI_Init
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _PMPI_Finalize
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Matthias
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On 12/14/2011 2:51 PM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I've attempted to reproduce the failure reported below for MacOS 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 10.4
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; for PPC on an X86-64 system.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; First, I've realized that while I reported &quot;make check&quot; as the 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; source
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; of the problem, it occurs at &quot;make&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Regardless of that mistake in my reporting, I was unable to 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; reproduce
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the problem, making this a PPC-specific problem as far as I can 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; tell.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Instead of 255 instances of &quot;ld: multiple definitions of symbol 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _MPI_*&quot;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I get instances of &quot;ld: warning multiple definitions of symbol 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _MPI*&quot;,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; where the only difference is the addition of the word &quot;warning&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; However, this is apparently non-fatal on the x86-64 but fatal by
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; default on PPC.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On 12/13/2011 9:30 PM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Using the 1.5.5rc1 tarball, I've repeated tests on the following
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; platforms for which I recently reported 1.4.5rc1 results:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; MacOS 10.5 (Leopard) on PPC:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; powerpc-apple-darwin9-gcc-4.0.1 (GCC) 4.0.1 (Apple Inc. build 5488)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; MacOS 10.4 (Tiger) on PPC:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; powerpc-apple-darwin8-gcc-4.0.1 (GCC) 4.0.1 (Apple Computer, Inc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; build 5341)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; MacOS 10.3 (Panther) on PPC:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; gcc (GCC) 3.3 20030304 (Apple Computer, Inc. build 1666)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On MacOS 10.5 &quot;make all install check&quot; completed w/o incident.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Unfortunately, on MacOS 10.4 (Tiger) I get multiply defined symbols
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; from VT in &quot;make check&quot;:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Making check in vtlib
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; CCLD libvt-mpi.la
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ld: multiple definitions of symbol _MPI_Abort
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; .libs/libvt_mpi_la-vt_mpiwrap.o definition of _MPI_Abort in 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; section
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (__TEXT,__text)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /Users/phargrov/openmpi-1.5.5rc1/BUILD-
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; dflt/ompi/contrib/vt/vt/../../../.libs/libmpi.dylib(single
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; module) definition of _MPI_Abort
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [...253 more &quot;ld: multiple definitions of symbol&quot; errors...]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ld: multiple definitions of symbol _MPI_Win_wait
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; .libs/libvt_mpi_la-vt_mpiwrap.o definition of _MPI_Win_wait in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; section (__TEXT,__text)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /Users/phargrov/openmpi-1.5.5rc1/BUILD-
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; dflt/ompi/contrib/vt/vt/../../../.libs/libmpi.dylib(single
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; module) definition of _MPI_Win_wait
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/bin/libtool: internal link edit command failed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; make[4]: *** [libvt-mpi.la] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Unlike the compilation failure for 1.4.5rc1 on MacOS 10.3 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; (Panther),
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; got the following at configure time:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; configure: WARNING: Open MPI does not support OS X prior to 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; version
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 10.4 (Tiger)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; configure: error: Cannot continue
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; So I would like to &quot;CMR&quot; this logic to the 1.4 branch.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On 12/13/2011 8:36 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; In the usual place:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/software/ompi/v1.5/">http://www.open-mpi.org/software/ompi/v1.5/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Please test! I would really like to get this out by the end of the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; week.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Two issues *might* still be considered for this release:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Putting back the openib minor fixes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/2930">https://svn.open-mpi.org/trac/ompi/ticket/2930</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Making the &quot;your SM file is on an NFS!&quot; warning disable-able
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (this is the v1.4 ticket)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/2937">https://svn.open-mpi.org/trac/ompi/ticket/2937</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; They would both need to be fixed in the *immediate future* to be
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; considered.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; HPC Research Department                   Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10445.php">Paul H. Hargrove: "[OMPI devel] More on OMPI on MacOS 10.4/ppc [WORK AROUND]"</a>
<li><strong>Previous message:</strong> <a href="10443.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5.5rc1 tested: MacOS/ppc (w/ 1 failure and a &quot;CMR&quot;)"</a>
<li><strong>In reply to:</strong> <a href="10443.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5.5rc1 tested: MacOS/ppc (w/ 1 failure and a &quot;CMR&quot;)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/12/10091.php">Paul H. Hargrove: "[OMPI devel] 1.5.5rc1 tested: REGRESSION on FreeBSD"</a>
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
