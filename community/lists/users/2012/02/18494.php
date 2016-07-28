<?
$subject_val = "Re: [OMPI users] compilation error with pgcc Unknown switch";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 15 13:58:13 2012" -->
<!-- isoreceived="20120215185813" -->
<!-- sent="Wed, 15 Feb 2012 10:58:07 -0800" -->
<!-- isosent="20120215185807" -->
<!-- name="Abhinav Sarje" -->
<!-- email="asarje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] compilation error with pgcc Unknown switch" -->
<!-- id="CADbPk80ufRfghc=cm67Wwfg3BsvYY8HhsMx0eUBPxQAPM6L5uw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3C901D11-BEB2-4923-93B8-75A6DBF36D73_at_ldeo.columbia.edu" -->
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
<strong>Date:</strong> 2012-02-15 13:58:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18495.php">Gustavo Correa: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<li><strong>Previous message:</strong> <a href="18493.php">yanyg_at_[hidden]: "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
<li><strong>In reply to:</strong> <a href="18476.php">Gustavo Correa: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18495.php">Gustavo Correa: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<li><strong>Reply:</strong> <a href="18495.php">Gustavo Correa: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gus,
<br>
I have not added any flags that include static, but when I do a
<br>
verbose compilation output for the point where error occurs, I see
<br>
that there are some -Bstatic flags. I tried to manually remove the
<br>
-Bstatic included just before the libopen-pal.so library, and that
<br>
particular line then compiled without error. But then while doing
<br>
overall build, the same error occurs at multiple points.
<br>
<p>I will try to use the latest nightly tarball and see if it works.
<br>
<p>Thanks a lot.
<br>
<p>Abhinav
<br>
<p>On Wed, Feb 15, 2012 at 7:42 AM, Gustavo Correa &lt;gus_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi Abhinav
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Did you add to your compiler flags -Bstatic [or perhaps -static],
</span><br>
<span class="quotelev1">&gt; or any optimization flags that may include -Bstatic/-static?
</span><br>
<span class="quotelev1">&gt; Check also the compiler configuration, and any possible user customization
</span><br>
<span class="quotelev1">&gt; [~/.mypggcc and friends] to see if -Bstatic is there, maybe inadvertently, and is set by default.
</span><br>
<span class="quotelev1">&gt; That is all I can think of.
</span><br>
<span class="quotelev1">&gt; Maybe it will require &#160;Jeff and the Open MPI developers to sort
</span><br>
<span class="quotelev1">&gt; the problem out.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 15, 2012, at 12:19 AM, Abhinav Sarje wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Gus, I had tried with the -noswitcherror flags, which removed the
</span><br>
<span class="quotelev2">&gt;&gt; 'unknown-switch' error, but then I am still getting the &quot;attempted
</span><br>
<span class="quotelev2">&gt;&gt; static link of dynamic object&quot; error as I reported earlier.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Feb 10, 2012 at 5:57 AM, Gustavo Correa &lt;gus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Abhinav
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Setting CC='pgcc --noswitcherror', FC='pgfortran --noswitcherror', etc, may prevent the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; error message [but not sure it will prevent any actual and unreported error].
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Check details with 'man pgfortran'.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I hope this helps,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gus Corea
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; .
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Feb 10, 2012, at 2:03 AM, Abhinav Sarje wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I tried with 1.5.4 and same compilers, and got the exact same error.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I also tried PGI version 11.10.0, and got the same thing.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Wed, Feb 8, 2012 at 3:04 AM, Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Can you try building 1.5.4 with the same compilers?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Sent from my phone. No type good.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Feb 7, 2012, at 3:14 PM, &quot;Abhinav Sarje&quot; &lt;asarje_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I am trying to build open-mpi 1.4.4 (latest stable from open-mpi.org)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; using PGI compilers on a cray platform. PGI compilers' version is
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 11.9.0. I get the following error while building:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Making all in tools/wrappers
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; make[2]: Entering directory `{my_installation_directory}/opal/tools/wrappers'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; source='opal_wrapper.c' object='opal_wrapper.o' libtool=no \
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &#160; &#160;DEPDIR=.deps depmode=none /bin/sh ../../../config/depcomp \
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &#160; &#160;cc &quot;-DEXEEXT=\&quot;\&quot;&quot; -I. -I../../../opal/include
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -I../../../orte/include -I../../../ompi/include
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -I../../../opal/mca/paffinity/linux/plpa/src/libplpa &#160; -I../../..
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -D_REENTRANT &#160;-O -DNDEBUG -fPIC &#160;-c -o opal_wrapper.o opal_wrapper.c
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /bin/sh ../../../libtool --tag=CC &#160; --mode=link cc &#160;-O -DNDEBUG -fPIC
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -export-dynamic &#160; -o opal_wrapper opal_wrapper.o
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ../../../opal/libopen-pal.la -lnsl -lutil
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; libtool: link: cc -O -DNDEBUG -fPIC -o .libs/opal_wrapper
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; opal_wrapper.o --export-dynamic &#160;../../../opal/.libs/libopen-pal.so
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -ldl -lnsl -lutil -rpath {my_installation_directory}/lib
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; pgcc-Error-Unknown switch: --export-dynamic
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; make[2]: *** [opal_wrapper] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; make[2]: Leaving directory `{my_installation_directory}/opal/tools/wrappers'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; make[1]: Leaving directory `{my_installation_directory}/opal'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I see that the libtool packaged with open-mpi is 2.2.6b
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; When I try to compile this particular part with libtool versions 2.2.6
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; or 2.4, I get the following error:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; $ libtool --tag=CC &#160; --mode=link cc &#160;-O -DNDEBUG -fPIC
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -export-dynamic &#160; -o opal_wrapper opal_wrapper.o
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ../../../opal/libopen-pal.la -lnsl -lutil
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; libtool: link: cc -O -DNDEBUG -fPIC -o .libs/opal_wrapper
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; opal_wrapper.o -Wl,--export-dynamic
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ../../../opal/.libs/libopen-pal.so -ldl -lnsl -lutil -Wl,-rpath
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -Wl,{my_installation_directory}/lib
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /usr/bin/ld: attempted static link of dynamic object
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; `../../../opal/.libs/libopen-pal.so'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Looking at earlier posts, apparently there was a bug with libtool a
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; couple of years ago because of which the above error occurred. This
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; was fixed in newer releases, but I am getting similar errors.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Does anyone have any information on how to fix this, or if I am doing
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; something wrong here?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Thanks!
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev4">&gt;&gt;&gt;&gt;
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
<li><strong>Next message:</strong> <a href="18495.php">Gustavo Correa: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<li><strong>Previous message:</strong> <a href="18493.php">yanyg_at_[hidden]: "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
<li><strong>In reply to:</strong> <a href="18476.php">Gustavo Correa: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18495.php">Gustavo Correa: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<li><strong>Reply:</strong> <a href="18495.php">Gustavo Correa: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
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
