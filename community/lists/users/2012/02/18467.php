<?
$subject_val = "Re: [OMPI users] compilation error with pgcc Unknown switch";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 15 00:18:08 2012" -->
<!-- isoreceived="20120215051808" -->
<!-- sent="Tue, 14 Feb 2012 21:18:01 -0800" -->
<!-- isosent="20120215051801" -->
<!-- name="Abhinav Sarje" -->
<!-- email="asarje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] compilation error with pgcc Unknown switch" -->
<!-- id="CADbPk82FpbXoJhU=XstdFYiEu7s8fA9gT7PYmggxNhveJUV25A_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="02AE7327-DAF2-4729-9E62-A20300D57B36_at_cisco.com" -->
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
<strong>Date:</strong> 2012-02-15 00:18:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18468.php">Abhinav Sarje: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<li><strong>Previous message:</strong> <a href="18466.php">alexalex43210: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.4.5 released"</a>
<li><strong>In reply to:</strong> <a href="18431.php">Jeff Squyres: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18477.php">Jeff Squyres: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<li><strong>Reply:</strong> <a href="18477.php">Jeff Squyres: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>With the latest 1.5.5rc also I am getting the same error:
<br>
---------
<br>
make[2]: Entering directory
<br>
`/global/u1/a/asarje/hopper/openmpi-1.5.5rc2r25924-pgi/opal/tools/wrappers'
<br>
&nbsp;&nbsp;CC     opal_wrapper.o
<br>
&nbsp;&nbsp;CCLD   opal_wrapper
<br>
/usr/bin/ld: attempted static link of dynamic object
<br>
`../../../opal/.libs/libopen-pal.so'
<br>
make[2]: *** [opal_wrapper] Error 2
<br>
make[2]: Leaving directory
<br>
---------
<br>
<p>Abhinav.
<br>
<p>On Fri, Feb 10, 2012 at 8:20 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; We literally just upgraded the version of autotools on the 1.5 nightly tarballs (i.e., what will become 1.5.5).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could you try the most recent 1.5.5 nightly snapshot?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160; &#160;<a href="http://www.open-mpi.org/nightly/v1.5/">http://www.open-mpi.org/nightly/v1.5/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 10, 2012, at 8:57 AM, Gustavo Correa wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Abhinav
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Setting CC='pgcc --noswitcherror', FC='pgfortran --noswitcherror', etc, may prevent the
</span><br>
<span class="quotelev2">&gt;&gt; error message [but not sure it will prevent any actual and unreported error].
</span><br>
<span class="quotelev2">&gt;&gt; Check details with 'man pgfortran'.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I hope this helps,
</span><br>
<span class="quotelev2">&gt;&gt; Gus Corea
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; .
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 10, 2012, at 2:03 AM, Abhinav Sarje wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I tried with 1.5.4 and same compilers, and got the exact same error.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I also tried PGI version 11.10.0, and got the same thing.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Wed, Feb 8, 2012 at 3:04 AM, Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Can you try building 1.5.4 with the same compilers?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sent from my phone. No type good.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Feb 7, 2012, at 3:14 PM, &quot;Abhinav Sarje&quot; &lt;asarje_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I am trying to build open-mpi 1.4.4 (latest stable from open-mpi.org)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; using PGI compilers on a cray platform. PGI compilers' version is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 11.9.0. I get the following error while building:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Making all in tools/wrappers
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make[2]: Entering directory `{my_installation_directory}/opal/tools/wrappers'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; source='opal_wrapper.c' object='opal_wrapper.o' libtool=no \
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#160; DEPDIR=.deps depmode=none /bin/sh ../../../config/depcomp \
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#160; cc &quot;-DEXEEXT=\&quot;\&quot;&quot; -I. -I../../../opal/include
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -I../../../orte/include -I../../../ompi/include
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -I../../../opal/mca/paffinity/linux/plpa/src/libplpa &#160; -I../../..
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -D_REENTRANT &#160;-O -DNDEBUG -fPIC &#160;-c -o opal_wrapper.o opal_wrapper.c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /bin/sh ../../../libtool --tag=CC &#160; --mode=link cc &#160;-O -DNDEBUG -fPIC
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -export-dynamic &#160; -o opal_wrapper opal_wrapper.o
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ../../../opal/libopen-pal.la -lnsl -lutil
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; libtool: link: cc -O -DNDEBUG -fPIC -o .libs/opal_wrapper
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; opal_wrapper.o --export-dynamic &#160;../../../opal/.libs/libopen-pal.so
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -ldl -lnsl -lutil -rpath {my_installation_directory}/lib
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; pgcc-Error-Unknown switch: --export-dynamic
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make[2]: *** [opal_wrapper] Error 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make[2]: Leaving directory `{my_installation_directory}/opal/tools/wrappers'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make[1]: Leaving directory `{my_installation_directory}/opal'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I see that the libtool packaged with open-mpi is 2.2.6b
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; When I try to compile this particular part with libtool versions 2.2.6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; or 2.4, I get the following error:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; $ libtool --tag=CC &#160; --mode=link cc &#160;-O -DNDEBUG -fPIC
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -export-dynamic &#160; -o opal_wrapper opal_wrapper.o
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ../../../opal/libopen-pal.la -lnsl -lutil
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; libtool: link: cc -O -DNDEBUG -fPIC -o .libs/opal_wrapper
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; opal_wrapper.o -Wl,--export-dynamic
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ../../../opal/.libs/libopen-pal.so -ldl -lnsl -lutil -Wl,-rpath
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -Wl,{my_installation_directory}/lib
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /usr/bin/ld: attempted static link of dynamic object
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; `../../../opal/.libs/libopen-pal.so'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Looking at earlier posts, apparently there was a bug with libtool a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; couple of years ago because of which the above error occurred. This
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; was fixed in newer releases, but I am getting similar errors.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Does anyone have any information on how to fix this, or if I am doing
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; something wrong here?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks!
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
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<li><strong>Next message:</strong> <a href="18468.php">Abhinav Sarje: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<li><strong>Previous message:</strong> <a href="18466.php">alexalex43210: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.4.5 released"</a>
<li><strong>In reply to:</strong> <a href="18431.php">Jeff Squyres: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18477.php">Jeff Squyres: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<li><strong>Reply:</strong> <a href="18477.php">Jeff Squyres: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
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
