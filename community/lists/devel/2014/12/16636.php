<?
$subject_val = "Re: [OMPI devel] OMPI devel] OMPI devel] 1.8.4rc Status";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 17 06:51:30 2014" -->
<!-- isoreceived="20141217115130" -->
<!-- sent="Wed, 17 Dec 2014 20:51:19 +0900" -->
<!-- isosent="20141217115119" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI devel] OMPI devel] 1.8.4rc Status" -->
<!-- id="3nrobtayvsl4ckj04ggx0jih.1418817043514_at_email.android.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="[OMPI devel] OMPI devel] OMPI devel] 1.8.4rc Status" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-17 06:51:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16637.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI devel] OMPI devel] 1.8.4rc Status"</a>
<li><strong>Previous message:</strong> <a href="16635.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] 1.8.4rc Status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16637.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI devel] OMPI devel] 1.8.4rc Status"</a>
<li><strong>Reply:</strong> <a href="16637.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI devel] OMPI devel] 1.8.4rc Status"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I was unable to reproduce this on rhel6 like with both stock gcc 4.8.x and gcc 4.9.1
<br>
<p>Was the libtool updated on the ompi server ?
<br>
2.4.2 works fine for me
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p><p>Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;It is breaking the automated nightly tarball build - see the error email that came out earlier:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160;PPFC&#194;&#160; &#194;&#160; &#194;&#160;libmpi_mpifh_sizeof_la-sizeof-mpif08-pre-1.8.4_f.lo
</span><br>
<span class="quotelev1">&gt;libtool: compile: unrecognized option `-I../../../../ompi/mpi/fortran/use-mpi-tkr'
</span><br>
<span class="quotelev1">&gt;libtool: compile: Try `libtool --help' for more information.
</span><br>
<span class="quotelev1">&gt;libtool: compile: unrecognized option `-DHAVE_CONFIG_H'
</span><br>
<span class="quotelev1">&gt;libtool: compile: Try `libtool --help' for more information.
</span><br>
<span class="quotelev1">&gt;make[4]: *** [libmpi_mpifh_sizeof_la-sizeof-mpi-pre-1.8.4_f.lo] Error 1
</span><br>
<span class="quotelev1">&gt;make[4]: *** Waiting for unfinished jobs....
</span><br>
<span class="quotelev1">&gt;make[4]: *** [libmpi_mpifh_sizeof_la-sizeof-mpif08-pre-1.8.4_f.lo] Error 1
</span><br>
<span class="quotelev1">&gt;make[4]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/v1.8/ompi-2014-12-16-211833/ompi/openmpi-v1.8.3-305-ge3ae27d/_build/ompi/mpi/fortran/mpif-h'
</span><br>
<span class="quotelev1">&gt;make[3]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;make[3]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/v1.8/ompi-2014-12-16-211833/ompi/openmpi-v1.8.3-305-ge3ae27d/_build/ompi/mpi/fortran/mpif-h'
</span><br>
<span class="quotelev1">&gt;make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/v1.8/ompi-2014-12-16-211833/ompi/openmpi-v1.8.3-305-ge3ae27d/_build/ompi'
</span><br>
<span class="quotelev1">&gt;make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;make[1]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/v1.8/ompi-2014-12-16-211833/ompi/openmpi-v1.8.3-305-ge3ae27d/_build'
</span><br>
<span class="quotelev1">&gt;make: *** [distcheck] Error 1
</span><br>
<span class="quotelev1">&gt;=======================================================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Wed, Dec 17, 2014 at 12:37 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;what goes wrong ?
</span><br>
<span class="quotelev1">&gt;(e.g. which command ?)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;and which compiler (e.g. gcc &lt; 4.9.1 ?) are you using ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On 2014/12/17 17:30, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I'm afraid I cannot generate a new rc, nor will there be a new 1.8 nightly tarball as (ahem) Jeff's fortran commit broke the build system. I tried to figure out a fix, but am too tired to get it right. So I'm afraid we are stuck for the moment until Jeff returns in the morning and fixes the problem. We'll have to pick this up afterwards. Sorry guys Ralph On Tue, Dec 16, 2014 at 10:59 PM, Gilles Gouaillardet &lt; gilles.gouaillardet_at_[hidden]&gt; wrote: 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Thanks Paul ! imho the first test is useless since it does not include the commit that sets the -D_REENTRANT CFLAGS on solaris/solarisstudio <a href="https://github.com/open-mpi/ompi-release/commit/ac8b84ce674b958dbf8c9481b300beeef0548b83">https://github.com/open-mpi/ompi-release/commit/ac8b84ce674b958dbf8c9481b300beeef0548b83</a> Cheers, Gilles On 2014/12/17 15:56, Paul Hargrove wrote: I've queued 3 tests: 1) openmpi-v1.8.3-272-g4e4f997 2) openmpi-v1.8.4rc4 + adding -D_REENTRANT to CFLAGS and wrapper-cflags 3) openmpi-v1.8.4rc4 + adding -mt to CFLAGS and wrapper-cflags I hope to be able to login and collect the results around noon pacific time on Wed. -Paul On Tue, Dec 16, 2014 at 10:48 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;wrote: Paul, i understand, i will now work on a better way to figure out the required flags the latest nightly snapshot does not include the commit i mentionned, and i think it is worth giving it a try (to be 100.0% sure ...) can you please do that tomorrow ? in the mean time, if we (well Ralph indeed) want to release 1.8.4, then simply restore the two config files i mentionned. Cheers, Gilles On 2014/12/17 15:39, Paul Hargrove wrote: Gilles, If I have done my testing correctly (not 100% sure) then adding &quot;-D_REENTRANT&quot; was NOT sufficient, where &quot;-mt&quot; was. I can at least test 1 tarball with one set of configure args each evening. Anything more than that I cannot commit to. My scripts are capable of grabbing the v1.8 nightly instead of the rc if that helps. -Paul On Tue, Dec 16, 2014 at 10:31 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; &lt;gilles.gouaillardet_at_[hidden]&gt; wrote: Ralph, i think that will not work. here is the full story : once upon a time, on solaris, we did not try to compile pthread'ed app without any special parameters. that was a minor annoyance on solaris 10 with old gcc : configure passed a flag (-pthread if i remember correctly) that was not supported by gcc (at that time) and generated tons of warnings. when i asked &quot;why don't we just try no special parameter on solaris ?&quot; i was replied this is because looong time ago openmpi used solaris lwp, so solaris was &quot;special&quot; anyway. since solaris is able to build (compile+link) a pthread'ed app without any flags, i removed the special case for solaris, and no flag was used. then i noticed that lead to bad code (errno is global instead of per thread specific), so you automatically added -D_REENTRANT on solaris (e.g. if the __sun__ macro is defined) then i found that solarisstudio compilers do not define the __sun__macro automatically (__sun and sun are defined) so i improved the test (e.g. we are on solaris if __sun__ or __sun is defined) this was merged (yesterday) and is not in rc4 what we should do know is unclear for me ... is -D_REENTRANT enough for gcc compilers on solaris ? is -D_REENTRANT *not* enough for solarisstudio compilers on solaris ? /* if -D_REENTRANT is *not* enough, then we all we have to do is use -mt since that implies -D_REENTRANT */ a working solution (minus the minor annoyance i described earlier) is to restore config/opal_check_os_flavors. m4 config/ompi_config_pthreads.m4 and then i ll find a better way to correctly set the flags that must be used on solaris that being said, and based on Paul's availability, i d rather have a new tarball (rc5?) tested. (do we *really* need -mt ? isn't -D_REENTRANT enough ?) this tarball must include<a href="https://github.com/open-mpi/ompi-release/commit/ac8b84ce674b958dbf8c9481b300beeef0548b83">https://github.com/open-mpi/ompi-release/commit/ac8b84ce674b958dbf8c9481b300beeef0548b83</a> configury: test the __sun macro to detect solaris OS. FWIW. i was unable to reproduce the problem on solaris 11 with sunstudio 12.4 even if i do not use -D_REENTRANT *nor* -mt (!) Cheers, Gilles On 2014/12/17 15:01, Ralph Castain wrote: Hi Paul Can you try the attached patch? It would require running autogen, I fear. Otherwise, I can add it to the tarball. Ralph On Tue, Dec 16, 2014 at 9:59 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; &lt;phhargrove_at_[hidden]&gt; &lt;phhargrove_at_[hidden]&gt; &lt;phhargrove_at_[hidden]&gt; &lt;phhargrove_at_[hidden]&gt; &lt;phhargrove_at_[hidden]&gt; &lt;phhargrove_at_[hidden]&gt; &lt;phhargrove_at_[hidden]&gt; wrote: Gilles, The 1.8.3 test works where the 1.8.4rc4 one fails with identical configure arguments. While it may be overkill, I configured 1.8.4rc4 with CFLAGS=&quot;-m64 -mt&quot; --with-wrapper-cflags=&quot;-m64 -mt&quot; \ LDFLAGS=&quot;-mt&quot; --with-wrapper-ldflags=&quot;-mt&quot; The resulting run worked! So, I very strongly suspect that the problem will be resolved if one restores the configure logic that my previous email shows has vanished (since that would restore &quot;-mt&quot; to CFLAGS and wrapper cflags). -Paul On Tue, Dec 16, 2014 at 8:10 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; &lt;phhargrove_at_[hidden]&gt; &lt;phhargrove_at_[hidden]&gt; &lt;phhargrove_at_[hidden]&gt; &lt;phhargrove_at_[hidden]&gt; &lt;phhargrove_at_[hidden]&gt; &lt;phhargrove_at_[hidden]&gt; &lt;phhargrove_at_[hidden]&gt; wrote: My 1.8.3 build has not completed. HOWEVER, I can already see a key difference in the configure step. In 1.8.3 &quot;-mt&quot; was added AUTOMATICALLY to CFLAGS by configure: checking if C compiler and POSIX threads work as is... no - Solaris, not checked checking if C++ compiler and POSIX threads work as is... no - Solaris, not checked checking if Fortran compiler and POSIX threads work as is... no - Solaris, not checked checking if C compiler and POSIX threads work with -pthread... no checking if C compiler and POSIX threads work with -pthreads... no checking if C compiler and POSIX threads work with -mt... yes checking if C++ compiler and POSIX threads work with -pthread... yes checking if Fortran compiler and POSIX threads work with -pthread... yes This is not the case in 1.8.4rc4: checking if C compiler and POSIX threads work as is... yes checking if C++ compiler and POSIX threads work as is... yes checking if Fortran compiler and POSIX threads work as is... yes So, it looks like a chunk of Solaris-specific configure logic was LOST. -Paul -- Paul H. Hargrove PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Computer Languages &amp; Systems Software (CLaSS) Group Computer Science Department Tel: +1-510-495-2352 Lawrence Berkeley National Laboratory Fax: +1-510-486-6900 _______________________________________________ devel mailing listdevel_at_[hidden] Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> Link to this post:<a href="http://www.open-mpi.org/community/lists/devel/2014/12/16625.php">http://www.open-mpi.org/community/lists/devel/2014/12/16625.php</a> _______________________________________________ devel mailing listdevel_at_[hidden] Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16626.php">http://www.open-mpi.org/community/lists/devel/2014/12/16626.php</a> _______________________________________________ devel mailing listdevel_at_[hidden] Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> Link to this post:<a href="http://www.open-mpi.org/community/lists/devel/2014/12/16628.php">http://www.open-mpi.org/community/lists/devel/2014/12/16628.php</a> _______________________________________________ devel mailing listdevel_at_[hidden] Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16629.php">http://www.open-mpi.org/community/lists/devel/2014/12/16629.php</a> _______________________________________________ devel mailing listdevel_at_[hidden] Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Link to this post:<a href="http://www.open-mpi.org/community/lists/devel/2014/12/16630.php">http://www.open-mpi.org/community/lists/devel/2014/12/16630.php</a> _______________________________________________ devel mailing listdevel_at_[hidden] Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16631.php">http://www.open-mpi.org/community/lists/devel/2014/12/16631.php</a> _______________________________________________ devel mailing list devel_at_[hidden] Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16632.php">http://www.open-mpi.org/community/lists/devel/2014/12/16632.php</a> 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________ devel mailing list devel_at_[hidden] Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16633.php">http://www.open-mpi.org/community/lists/devel/2014/12/16633.php</a> 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16634.php">http://www.open-mpi.org/community/lists/devel/2014/12/16634.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16636/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16637.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI devel] OMPI devel] 1.8.4rc Status"</a>
<li><strong>Previous message:</strong> <a href="16635.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] 1.8.4rc Status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16637.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI devel] OMPI devel] 1.8.4rc Status"</a>
<li><strong>Reply:</strong> <a href="16637.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI devel] OMPI devel] 1.8.4rc Status"</a>
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
