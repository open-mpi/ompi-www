<?
$subject_val = "Re: [OMPI devel] OMPI devel] OMPI devel] 1.8.4rc Status";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 17 09:55:42 2014" -->
<!-- isoreceived="20141217145542" -->
<!-- sent="Wed, 17 Dec 2014 14:55:40 +0000" -->
<!-- isosent="20141217145540" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI devel] OMPI devel] 1.8.4rc Status" -->
<!-- id="0A981189-1502-40DB-9A0D-9E7AC879BC44_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3nrobtayvsl4ckj04ggx0jih.1418817043514_at_email.android.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OMPI devel] OMPI devel] 1.8.4rc Status<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-17 09:55:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16638.php">Howard Pritchard: "[OMPI devel] ofi/mtl causing problems"</a>
<li><strong>Previous message:</strong> <a href="16636.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] OMPI devel] 1.8.4rc Status"</a>
<li><strong>In reply to:</strong> <a href="16636.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] OMPI devel] 1.8.4rc Status"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Turns out that this problem was caused by not having a Fortran compiler.  I fixed that in <a href="https://github.com/open-mpi/ompi-release/commit/b90c8142d343b12cbcc1023cb767801ea2d567a4">https://github.com/open-mpi/ompi-release/commit/b90c8142d343b12cbcc1023cb767801ea2d567a4</a>.
<br>
<p>There's still 2 other minor problems (a cleanfile and a condition source include); working on those...
<br>
<p><p>On Dec 17, 2014, at 6:51 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I was unable to reproduce this on rhel6 like with both stock gcc 4.8.x and gcc 4.9.1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Was the libtool updated on the ompi server ?
</span><br>
<span class="quotelev1">&gt; 2.4.2 works fine for me
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; It is breaking the automated nightly tarball build - see the error email that came out earlier:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  PPFC     libmpi_mpifh_sizeof_la-sizeof-mpif08-pre-1.8.4_f.lo
</span><br>
<span class="quotelev1">&gt; libtool: compile: unrecognized option `-I../../../../ompi/mpi/fortran/use-mpi-tkr'
</span><br>
<span class="quotelev1">&gt; libtool: compile: Try `libtool --help' for more information.
</span><br>
<span class="quotelev1">&gt; libtool: compile: unrecognized option `-DHAVE_CONFIG_H'
</span><br>
<span class="quotelev1">&gt; libtool: compile: Try `libtool --help' for more information.
</span><br>
<span class="quotelev1">&gt; make[4]: *** [libmpi_mpifh_sizeof_la-sizeof-mpi-pre-1.8.4_f.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[4]: *** Waiting for unfinished jobs....
</span><br>
<span class="quotelev1">&gt; make[4]: *** [libmpi_mpifh_sizeof_la-sizeof-mpif08-pre-1.8.4_f.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[4]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/v1.8/ompi-2014-12-16-211833/ompi/openmpi-v1.8.3-305-ge3ae27d/_build/ompi/mpi/fortran/mpif-h'
</span><br>
<span class="quotelev1">&gt; make[3]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/v1.8/ompi-2014-12-16-211833/ompi/openmpi-v1.8.3-305-ge3ae27d/_build/ompi/mpi/fortran/mpif-h'
</span><br>
<span class="quotelev1">&gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/v1.8/ompi-2014-12-16-211833/ompi/openmpi-v1.8.3-305-ge3ae27d/_build/ompi'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/v1.8/ompi-2014-12-16-211833/ompi/openmpi-v1.8.3-305-ge3ae27d/_build'
</span><br>
<span class="quotelev1">&gt; make: *** [distcheck] Error 1
</span><br>
<span class="quotelev1">&gt; =======================================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Dec 17, 2014 at 12:37 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; what goes wrong ?
</span><br>
<span class="quotelev1">&gt; (e.g. which command ?)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and which compiler (e.g. gcc &lt; 4.9.1 ?) are you using ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 2014/12/17 17:30, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I'm afraid I cannot generate a new rc, nor will there be a new 1.8 nightly
</span><br>
<span class="quotelev2">&gt;&gt; tarball as (ahem) Jeff's fortran commit broke the build system. I tried to
</span><br>
<span class="quotelev2">&gt;&gt; figure out a fix, but am too tired to get it right.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So I'm afraid we are stuck for the moment until Jeff returns in the morning
</span><br>
<span class="quotelev2">&gt;&gt; and fixes the problem. We'll have to pick this up afterwards.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Sorry guys
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Dec 16, 2014 at 10:59 PM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; gilles.gouaillardet_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Thanks Paul !
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; imho the first test is useless since it does not include the commit that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sets the -D_REENTRANT CFLAGS on solaris/solarisstudio
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="https://github.com/open-mpi/ompi-release/commit/ac8b84ce674b958dbf8c9481b300beeef0548b83">https://github.com/open-mpi/ompi-release/commit/ac8b84ce674b958dbf8c9481b300beeef0548b83</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 2014/12/17 15:56, Paul Hargrove wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've queued 3 tests:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1) openmpi-v1.8.3-272-g4e4f997
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2) openmpi-v1.8.4rc4 + adding -D_REENTRANT to CFLAGS and wrapper-cflags
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3) openmpi-v1.8.4rc4 + adding -mt to CFLAGS and wrapper-cflags
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I hope to be able to login and collect the results around noon pacific time
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on Wed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Tue, Dec 16, 2014 at 10:48 PM, Gilles Gouaillardet 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;gilles.gouaillardet_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Paul,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i understand, i will now work on a better way to figure out the required
</span><br>
<span class="quotelev3">&gt;&gt;&gt; flags
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the latest nightly snapshot does not include the commit i mentionned, and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i think
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it is worth giving it a try (to be 100.0% sure ...)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; can you please do that tomorrow ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in the mean time, if we (well Ralph indeed) want to release 1.8.4, then
</span><br>
<span class="quotelev3">&gt;&gt;&gt; simply restore
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the two config files i mentionned.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 2014/12/17 15:39, Paul Hargrove wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gilles,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If I have done my testing correctly (not 100% sure) then adding
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;-D_REENTRANT&quot; was NOT sufficient, where &quot;-mt&quot; was.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I can at least test 1 tarball with one set of configure args each evening.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Anything more than that I cannot commit to.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My scripts are capable of grabbing the v1.8 nightly instead of the rc if
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that helps.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Tue, Dec 16, 2014 at 10:31 PM, Gilles Gouaillardet 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;gilles.gouaillardet_at_[hidden]&gt; &lt;gilles.gouaillardet_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Ralph,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i think that will not work.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; here is the full story :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; once upon a time, on solaris, we did not try to compile pthread'ed app
</span><br>
<span class="quotelev3">&gt;&gt;&gt; without any special parameters.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that was a minor annoyance on solaris 10 with old gcc : configure passed a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; flag (-pthread if i remember correctly)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that was not supported by gcc (at that time) and generated tons of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; warnings.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; when i asked &quot;why don't we just try no special parameter on solaris ?&quot; i
</span><br>
<span class="quotelev3">&gt;&gt;&gt; was replied this is because looong time ago
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openmpi used solaris lwp, so solaris was &quot;special&quot; anyway.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; since solaris is able to build (compile+link) a pthread'ed app without any
</span><br>
<span class="quotelev3">&gt;&gt;&gt; flags, i removed the special case for solaris,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and no flag was used.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; then i noticed that lead to bad code (errno is global instead of per
</span><br>
<span class="quotelev3">&gt;&gt;&gt; thread specific), so you automatically added -D_REENTRANT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on solaris (e.g. if the __sun__ macro is defined)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; then i found that solarisstudio compilers do not define the __sun__macro
</span><br>
<span class="quotelev3">&gt;&gt;&gt; automatically (__sun and sun are defined) so i improved
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the test (e.g. we are on solaris if __sun__ or __sun is defined)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this was merged (yesterday) and is not in rc4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; what we should do know is unclear for me ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is -D_REENTRANT enough for gcc compilers on solaris ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is -D_REENTRANT *not* enough for solarisstudio compilers on solaris ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /* if -D_REENTRANT is *not* enough, then we all we have to do is use -mt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; since that implies -D_REENTRANT */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a working solution (minus the minor annoyance i described earlier) is to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; restore
</span><br>
<span class="quotelev3">&gt;&gt;&gt; config/opal_check_os_flavors.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; m4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; config/ompi_config_pthreads.m4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and then i ll find a better way to correctly set the flags that must be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; used on solaris
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that being said, and based on Paul's availability, i d rather have a new
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tarball (rc5?) tested.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (do we *really* need -mt ? isn't -D_REENTRANT enough ?)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this tarball must includehttps://
</span><br>
<span class="quotelev3">&gt;&gt;&gt; github.com/open-mpi/ompi-release/commit/ac8b84ce674b958dbf8c9481b300beeef0548b83
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configury: test the __sun macro to detect solaris OS.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FWIW. i was unable to reproduce the problem on solaris 11 with sunstudio
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 12.4 even if i do not use -D_REENTRANT *nor* -mt (!)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 2014/12/17 15:01, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Paul
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can you try the attached patch? It would require running autogen, I fear.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Otherwise, I can add it to the tarball.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Tue, Dec 16, 2014 at 9:59 PM, Paul Hargrove 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;phhargrove_at_[hidden]&gt; &lt;phhargrove_at_[hidden]&gt; &lt;phhargrove_at_[hidden]&gt; &lt;phhargrove_at_[hidden]&gt; &lt;phhargrove_at_[hidden]&gt; &lt;phhargrove_at_[hidden]&gt; &lt;phhargrove_at_[hidden]&gt; &lt;phhargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Gilles,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The 1.8.3 test works where the 1.8.4rc4 one fails with identical configure
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arguments.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; While it may be overkill, I configured 1.8.4rc4 with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    CFLAGS=&quot;-m64 -mt&quot; --with-wrapper-cflags=&quot;-m64 -mt&quot; \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    LDFLAGS=&quot;-mt&quot; --with-wrapper-ldflags=&quot;-mt&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The resulting run worked!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So, I very strongly suspect that the problem will be resolved if one
</span><br>
<span class="quotelev3">&gt;&gt;&gt; restores the configure logic that my previous email shows has vanished
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (since that would restore &quot;-mt&quot; to CFLAGS and wrapper cflags).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Tue, Dec 16, 2014 at 8:10 PM, Paul Hargrove 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;phhargrove_at_[hidden]&gt; &lt;phhargrove_at_[hidden]&gt; &lt;phhargrove_at_[hidden]&gt; &lt;phhargrove_at_[hidden]&gt; &lt;phhargrove_at_[hidden]&gt; &lt;phhargrove_at_[hidden]&gt; &lt;phhargrove_at_[hidden]&gt; &lt;phhargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  My 1.8.3 build has not completed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HOWEVER, I can already see a key difference in the configure step.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In 1.8.3 &quot;-mt&quot; was added AUTOMATICALLY to CFLAGS by configure:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking if C compiler and POSIX threads work as is... no - Solaris, not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checked
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking if C++ compiler and POSIX threads work as is... no - Solaris,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not checked
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking if Fortran compiler and POSIX threads work as is... no -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Solaris, not checked
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking if C compiler and POSIX threads work with -pthread... no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking if C compiler and POSIX threads work with -pthreads... no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking if C compiler and POSIX threads work with -mt... yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking if C++ compiler and POSIX threads work with -pthread... yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking if Fortran compiler and POSIX threads work with -pthread... yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is not the case in 1.8.4rc4:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking if C compiler and POSIX threads work as is... yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking if C++ compiler and POSIX threads work as is... yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking if Fortran compiler and POSIX threads work as is... yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So, it looks like a chunk of Solaris-specific configure logic was LOST.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Paul H. Hargrove                          
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PHHargrove_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Computer Science Department               Tel: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +1-510-495-2352
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lawrence Berkeley National Laboratory     Fax: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +1-510-486-6900
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; listdevel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16625.php">http://www.open-mpi.org/community/lists/devel/2014/12/16625.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; listdevel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16626.php">http://www.open-mpi.org/community/lists/devel/2014/12/16626.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; listdevel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16628.php">http://www.open-mpi.org/community/lists/devel/2014/12/16628.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; listdevel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16629.php">http://www.open-mpi.org/community/lists/devel/2014/12/16629.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; listdevel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16630.php">http://www.open-mpi.org/community/lists/devel/2014/12/16630.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; listdevel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16631.php">http://www.open-mpi.org/community/lists/devel/2014/12/16631.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16632.php">http://www.open-mpi.org/community/lists/devel/2014/12/16632.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16633.php">http://www.open-mpi.org/community/lists/devel/2014/12/16633.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16634.php">http://www.open-mpi.org/community/lists/devel/2014/12/16634.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16636.php">http://www.open-mpi.org/community/lists/devel/2014/12/16636.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16638.php">Howard Pritchard: "[OMPI devel] ofi/mtl causing problems"</a>
<li><strong>Previous message:</strong> <a href="16636.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] OMPI devel] 1.8.4rc Status"</a>
<li><strong>In reply to:</strong> <a href="16636.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] OMPI devel] 1.8.4rc Status"</a>
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
