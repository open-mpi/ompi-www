<?
$subject_val = "Re: [OMPI users] compilation error with pgcc Unknown switch";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  8 06:04:42 2012" -->
<!-- isoreceived="20120208110442" -->
<!-- sent="Wed, 8 Feb 2012 06:04:36 -0500" -->
<!-- isosent="20120208110436" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] compilation error with pgcc Unknown switch" -->
<!-- id="16B02187-92E2-4BBD-86F1-4540620D1A36_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CADbPk81Lt6oKyjzAQeYh9y_pDFHpPDFYu2x9ZmV8R5yp3ux60Q_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-08 06:04:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18422.php">Hossein Talebi: "[OMPI users] Cross-compiling openmpi"</a>
<li><strong>Previous message:</strong> <a href="18420.php">Ralph Castain: "Re: [OMPI users] O-MPI Support for Windows 7"</a>
<li><strong>In reply to:</strong> <a href="18419.php">Abhinav Sarje: "[OMPI users] compilation error with pgcc Unknown switch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18429.php">Abhinav Sarje: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<li><strong>Reply:</strong> <a href="18429.php">Abhinav Sarje: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you try building 1.5.4 with the same compilers?
<br>
<p>Sent from my phone. No type good. 
<br>
<p>On Feb 7, 2012, at 3:14 PM, &quot;Abhinav Sarje&quot; &lt;asarje_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I am trying to build open-mpi 1.4.4 (latest stable from open-mpi.org)
</span><br>
<span class="quotelev1">&gt; using PGI compilers on a cray platform. PGI compilers' version is
</span><br>
<span class="quotelev1">&gt; 11.9.0. I get the following error while building:
</span><br>
<span class="quotelev1">&gt; -------------------------------------
</span><br>
<span class="quotelev1">&gt; Making all in tools/wrappers
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `{my_installation_directory}/opal/tools/wrappers'
</span><br>
<span class="quotelev1">&gt; source='opal_wrapper.c' object='opal_wrapper.o' libtool=no \
</span><br>
<span class="quotelev1">&gt;    DEPDIR=.deps depmode=none /bin/sh ../../../config/depcomp \
</span><br>
<span class="quotelev1">&gt;    cc &quot;-DEXEEXT=\&quot;\&quot;&quot; -I. -I../../../opal/include
</span><br>
<span class="quotelev1">&gt; -I../../../orte/include -I../../../ompi/include
</span><br>
<span class="quotelev1">&gt; -I../../../opal/mca/paffinity/linux/plpa/src/libplpa   -I../../..
</span><br>
<span class="quotelev1">&gt; -D_REENTRANT  -O -DNDEBUG -fPIC  -c -o opal_wrapper.o opal_wrapper.c
</span><br>
<span class="quotelev1">&gt; /bin/sh ../../../libtool --tag=CC   --mode=link cc  -O -DNDEBUG -fPIC
</span><br>
<span class="quotelev1">&gt; -export-dynamic   -o opal_wrapper opal_wrapper.o
</span><br>
<span class="quotelev1">&gt; ../../../opal/libopen-pal.la -lnsl -lutil
</span><br>
<span class="quotelev1">&gt; libtool: link: cc -O -DNDEBUG -fPIC -o .libs/opal_wrapper
</span><br>
<span class="quotelev1">&gt; opal_wrapper.o --export-dynamic  ../../../opal/.libs/libopen-pal.so
</span><br>
<span class="quotelev1">&gt; -ldl -lnsl -lutil -rpath {my_installation_directory}/lib
</span><br>
<span class="quotelev1">&gt; pgcc-Error-Unknown switch: --export-dynamic
</span><br>
<span class="quotelev1">&gt; make[2]: *** [opal_wrapper] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `{my_installation_directory}/opal/tools/wrappers'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `{my_installation_directory}/opal'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; -------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I see that the libtool packaged with open-mpi is 2.2.6b
</span><br>
<span class="quotelev1">&gt; When I try to compile this particular part with libtool versions 2.2.6
</span><br>
<span class="quotelev1">&gt; or 2.4, I get the following error:
</span><br>
<span class="quotelev1">&gt; -------------------------------------
</span><br>
<span class="quotelev1">&gt; $ libtool --tag=CC   --mode=link cc  -O -DNDEBUG -fPIC
</span><br>
<span class="quotelev1">&gt; -export-dynamic   -o opal_wrapper opal_wrapper.o
</span><br>
<span class="quotelev1">&gt; ../../../opal/libopen-pal.la -lnsl -lutil
</span><br>
<span class="quotelev1">&gt; libtool: link: cc -O -DNDEBUG -fPIC -o .libs/opal_wrapper
</span><br>
<span class="quotelev1">&gt; opal_wrapper.o -Wl,--export-dynamic
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.so -ldl -lnsl -lutil -Wl,-rpath
</span><br>
<span class="quotelev1">&gt; -Wl,{my_installation_directory}/lib
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: attempted static link of dynamic object
</span><br>
<span class="quotelev1">&gt; `../../../opal/.libs/libopen-pal.so'
</span><br>
<span class="quotelev1">&gt; -------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Looking at earlier posts, apparently there was a bug with libtool a
</span><br>
<span class="quotelev1">&gt; couple of years ago because of which the above error occurred. This
</span><br>
<span class="quotelev1">&gt; was fixed in newer releases, but I am getting similar errors.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does anyone have any information on how to fix this, or if I am doing
</span><br>
<span class="quotelev1">&gt; something wrong here?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks!
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
<li><strong>Next message:</strong> <a href="18422.php">Hossein Talebi: "[OMPI users] Cross-compiling openmpi"</a>
<li><strong>Previous message:</strong> <a href="18420.php">Ralph Castain: "Re: [OMPI users] O-MPI Support for Windows 7"</a>
<li><strong>In reply to:</strong> <a href="18419.php">Abhinav Sarje: "[OMPI users] compilation error with pgcc Unknown switch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18429.php">Abhinav Sarje: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<li><strong>Reply:</strong> <a href="18429.php">Abhinav Sarje: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
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
