<?
$subject_val = "Re: [OMPI users] compilation error with pgcc Unknown switch";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 16 14:52:29 2012" -->
<!-- isoreceived="20120216195229" -->
<!-- sent="Thu, 16 Feb 2012 11:52:23 -0800" -->
<!-- isosent="20120216195223" -->
<!-- name="Abhinav Sarje" -->
<!-- email="asarje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] compilation error with pgcc Unknown switch" -->
<!-- id="CADbPk80+1uap3PUU7T7rDim9RudmRbRKLMdEVbY3k5XezSD6cA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="alpine.OSX.2.00.1202160926050.11396_at_panthera.lanl.gov" -->
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
<strong>Date:</strong> 2012-02-16 14:52:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18510.php">Abhinav Sarje: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<li><strong>Previous message:</strong> <a href="18508.php">Nathan Hjelm: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<li><strong>In reply to:</strong> <a href="18508.php">Nathan Hjelm: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18510.php">Abhinav Sarje: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<li><strong>Reply:</strong> <a href="18510.php">Abhinav Sarje: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Nathan,
<br>
<p>I had earlier tried to compile OpenMPI with just PGI compilers
<br>
(without cray wrapper), but with that my code was not able to run on
<br>
the compute nodes of the cray cluster (it just ran on the MOM node).
<br>
Therefore I have been trying to compiler OpenMPI with the cray
<br>
wrappers.
<br>
<p>I will checkout the cray-xe6 version, and try to follow the instructions.
<br>
<p>Thanks!
<br>
Abhinav.
<br>
<p>On Thu, Feb 16, 2012 at 8:31 AM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Abhinav, you shouldn't be using the cray wrappers to build Open MPI or
</span><br>
<span class="quotelev1">&gt; anything linked against Open MPI. The Cray wrappers will automatically
</span><br>
<span class="quotelev1">&gt; include lots of stuff you don't want. Use pgcc, pgcc, or icc directly. You
</span><br>
<span class="quotelev1">&gt; shouldn't have any trouble running in parallel with either aprun or mpirun
</span><br>
<span class="quotelev1">&gt; (orterun).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you haven't already please check out contrib/platform/lanl/cray-xe6 to
</span><br>
<span class="quotelev1">&gt; see how to build Open MPI with support for the xe6.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, 15 Feb 2012, Abhinav Sarje wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Gus,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am building using the cray wrappers over the PGI compilers, which
</span><br>
<span class="quotelev2">&gt;&gt; gives the errors. I tried building without the cray wrappers, but then
</span><br>
<span class="quotelev2">&gt;&gt; it does not run in parallel on the XE6 system I am using. I am going
</span><br>
<span class="quotelev2">&gt;&gt; to try the latest nightly build.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Abhinav.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Feb 15, 2012 at 12:22 PM, Gustavo Correa &lt;gus_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Feb 15, 2012, at 1:58 PM, Abhinav Sarje wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Gus,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have not added any flags that include static, but when I do a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; verbose compilation output for the point where error occurs, I see
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that there are some -Bstatic flags. I tried to manually remove the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -Bstatic included just before the libopen-pal.so library, and that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; particular line then compiled without error. But then while doing
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; overall build, the same error occurs at multiple points.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I will try to use the latest nightly tarball and see if it works.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks a lot.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Abhinav
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For what it is worth, I built here OpenMPI 1.4.4 on Linux x86-64 CentOS
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 5.2 [a bit old]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with the PGI 11.7 compilers.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I didn't even use the -noswitcherror switch [which I had to use in some
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; previous versions of OpenMPI and PGI].
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; How about forcing the use of shared libraries with -Bdynamic along with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that -noswitcherror,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in the CC, FC, etc declarations?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Still, this looks strange, and my guess is that this may be some twist in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; your compiler
</span><br>
<span class="quotelev3">&gt;&gt;&gt; installation/configuration.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But it may come also from the OpenMPI configure script.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Could the OpenMPI configure pick and use the PGI -Bstatic flag, perhaps?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This type of thing only the developers can tell.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Better hear from them.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I hope this helps,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gus Correa
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Abhinav
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Wed, Feb 15, 2012 at 7:42 AM, Gustavo Correa &lt;gus_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi Abhinav
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Did you add to your compiler flags -Bstatic [or perhaps -static],
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; or any optimization flags that may include -Bstatic/-static?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Check also the compiler configuration, and any possible user
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; customization
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [~/.mypggcc and friends] to see if -Bstatic is there, maybe
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; inadvertently, and is set by default.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; That is all I can think of.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Maybe it will require &#160;Jeff and the Open MPI developers to sort
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the problem out.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Feb 15, 2012, at 12:19 AM, Abhinav Sarje wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hi Gus, I had tried with the -noswitcherror flags, which removed the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 'unknown-switch' error, but then I am still getting the &quot;attempted
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; static link of dynamic object&quot; error as I reported earlier.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Thanks.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Fri, Feb 10, 2012 at 5:57 AM, Gustavo Correa
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &lt;gus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi Abhinav
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Setting CC='pgcc --noswitcherror', FC='pgfortran --noswitcherror',
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; etc, may prevent the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; error message [but not sure it will prevent any actual and unreported
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; error].
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Check details with 'man pgfortran'.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I hope this helps,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Gus Corea
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; .
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Feb 10, 2012, at 2:03 AM, Abhinav Sarje wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I tried with 1.5.4 and same compilers, and got the exact same error.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I also tried PGI version 11.10.0, and got the same thing.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Wed, Feb 8, 2012 at 3:04 AM, Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Can you try building 1.5.4 with the same compilers?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Sent from my phone. No type good.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Feb 7, 2012, at 3:14 PM, &quot;Abhinav Sarje&quot; &lt;asarje_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I am trying to build open-mpi 1.4.4 (latest stable from
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; open-mpi.org)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; using PGI compilers on a cray platform. PGI compilers' version is
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 11.9.0. I get the following error while building:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Making all in tools/wrappers
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; make[2]: Entering directory
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; `{my_installation_directory}/opal/tools/wrappers'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; source='opal_wrapper.c' object='opal_wrapper.o' libtool=no \
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#160; &#160;DEPDIR=.deps depmode=none /bin/sh ../../../config/depcomp \
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#160; &#160;cc &quot;-DEXEEXT=\&quot;\&quot;&quot; -I. -I../../../opal/include
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -I../../../orte/include -I../../../ompi/include
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -I../../../opal/mca/paffinity/linux/plpa/src/libplpa &#160; -I../../..
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -D_REENTRANT &#160;-O -DNDEBUG -fPIC &#160;-c -o opal_wrapper.o
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; opal_wrapper.c
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /bin/sh ../../../libtool --tag=CC &#160; --mode=link cc &#160;-O -DNDEBUG
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -fPIC
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -export-dynamic &#160; -o opal_wrapper opal_wrapper.o
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ../../../opal/libopen-pal.la -lnsl -lutil
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; libtool: link: cc -O -DNDEBUG -fPIC -o .libs/opal_wrapper
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; opal_wrapper.o --export-dynamic
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#160;../../../opal/.libs/libopen-pal.so
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -ldl -lnsl -lutil -rpath {my_installation_directory}/lib
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; pgcc-Error-Unknown switch: --export-dynamic
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; make[2]: *** [opal_wrapper] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; `{my_installation_directory}/opal/tools/wrappers'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; make[1]: Leaving directory `{my_installation_directory}/opal'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I see that the libtool packaged with open-mpi is 2.2.6b
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; When I try to compile this particular part with libtool versions
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 2.2.6
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; or 2.4, I get the following error:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; $ libtool --tag=CC &#160; --mode=link cc &#160;-O -DNDEBUG -fPIC
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -export-dynamic &#160; -o opal_wrapper opal_wrapper.o
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ../../../opal/libopen-pal.la -lnsl -lutil
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; libtool: link: cc -O -DNDEBUG -fPIC -o .libs/opal_wrapper
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; opal_wrapper.o -Wl,--export-dynamic
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ../../../opal/.libs/libopen-pal.so -ldl -lnsl -lutil -Wl,-rpath
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -Wl,{my_installation_directory}/lib
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/bin/ld: attempted static link of dynamic object
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; `../../../opal/.libs/libopen-pal.so'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Looking at earlier posts, apparently there was a bug with libtool
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; a
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; couple of years ago because of which the above error occurred.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; This
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; was fixed in newer releases, but I am getting similar errors.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Does anyone have any information on how to fix this, or if I am
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; doing
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; something wrong here?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks!
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
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
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
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
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
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
<li><strong>Next message:</strong> <a href="18510.php">Abhinav Sarje: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<li><strong>Previous message:</strong> <a href="18508.php">Nathan Hjelm: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<li><strong>In reply to:</strong> <a href="18508.php">Nathan Hjelm: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18510.php">Abhinav Sarje: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<li><strong>Reply:</strong> <a href="18510.php">Abhinav Sarje: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
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
