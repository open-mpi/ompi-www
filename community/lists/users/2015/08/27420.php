<?
$subject_val = "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 11 01:39:58 2015" -->
<!-- isoreceived="20150811053958" -->
<!-- sent="Tue, 11 Aug 2015 07:39:46 +0200" -->
<!-- isosent="20150811053946" -->
<!-- name="&#197;ke Sandgren" -->
<!-- email="ake.sandgren_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space" -->
<!-- id="55C98AA2.5010802_at_hpc2n.umu.se" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="55C93A79.9050403_at_rist.or.jp" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space<br>
<strong>From:</strong> &#197;ke Sandgren (<em>ake.sandgren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-11 01:39:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27421.php">Gilles Gouaillardet: "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
<li><strong>Previous message:</strong> <a href="27419.php">Gilles Gouaillardet: "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
<li><strong>In reply to:</strong> <a href="27419.php">Gilles Gouaillardet: "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27421.php">Gilles Gouaillardet: "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
<li><strong>Reply:</strong> <a href="27421.php">Gilles Gouaillardet: "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
<li><strong>Reply:</strong> <a href="27423.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Please fix the hcoll test (and code) to be correct.
<br>
<p>Any configure test that adds /usr/lib and/or /usr/include to any compile 
<br>
flags is broken.
<br>
<p>And if hcoll include files are under $HCOLL_HOME/include/hcoll (and 
<br>
hcoll/api) then the include directives in the source should be
<br>
#include &lt;hcoll/xxx.h&gt;
<br>
and
<br>
#include &lt;hcoll/api/yy.h&gt;
<br>
respectively.
<br>
<p>I.e. one should never add -I$HCOLL_HOME/include/hcoll to CPPFLAGS, only 
<br>
-I$HCOLL_HOME/include.
<br>
<p>Doing otherwise is bad design and a big cause for problems with include 
<br>
files from different packages having the same name...
<br>
<p>My opinion at least...
<br>
<p>On 08/11/2015 01:57 AM, Gilles Gouaillardet wrote:
<br>
<span class="quotelev1">&gt; David,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the configure help is misleading about hcoll ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   --with-hcoll(=DIR)      Build hcoll (Mellanox Hierarchical Collectives)
</span><br>
<span class="quotelev1">&gt;                            support, searching for libraries in DIR
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the =DIR is not really optional ...
</span><br>
<span class="quotelev1">&gt; configure will not complain if you configure with --with-hcoll or
</span><br>
<span class="quotelev1">&gt; --with-hcoll=yes
</span><br>
<span class="quotelev1">&gt; but hcoll will be disabled in this case
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW, here is a snippet of my config.status generate with
</span><br>
<span class="quotelev1">&gt; --with-hcoll=$HCOLL_HOME
</span><br>
<span class="quotelev1">&gt; /* i manually 'unexpaned' $HCOLL_HOME */
</span><br>
<span class="quotelev1">&gt; S[&quot;coll_hcoll_LIBS&quot;]=&quot;-lhcoll &quot;
</span><br>
<span class="quotelev1">&gt; S[&quot;coll_hcoll_LDFLAGS&quot;]=&quot; -L$HCOLL_HOME/lib&quot;
</span><br>
<span class="quotelev1">&gt; S[&quot;coll_hcoll_CPPFLAGS&quot;]=&quot; -I$HCOLL_HOME/include&quot;
</span><br>
<span class="quotelev1">&gt; S[&quot;coll_hcoll_CFLAGS&quot;]=&quot;&quot;
</span><br>
<span class="quotelev1">&gt; S[&quot;coll_hcoll_HOME&quot;]=&quot;$HCOLL_HOME&quot;
</span><br>
<span class="quotelev1">&gt; S[&quot;coll_hcoll_extra_CPPFLAGS&quot;]=&quot;-I$HCOLL_HOME/include/hcoll
</span><br>
<span class="quotelev1">&gt; -I$HCOLL_HOME/include/hcoll/api&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; bottom line, if you configure with --with-hcoll=/usr it will add some
</span><br>
<span class="quotelev1">&gt; useless flags such as -L/usr/lib (or -L/usr/lib64, i am not sure about
</span><br>
<span class="quotelev1">&gt; that) and -I/usr/include
</span><br>
<span class="quotelev1">&gt; but it will also add the required -I/usr/include/hcoll
</span><br>
<span class="quotelev1">&gt; -I/usr/include/hcoll/api flags
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if you believe this is an issue, i can revamp the hcoll detection (e.g.
</span><br>
<span class="quotelev1">&gt; configure --with-hcoll) but you might
</span><br>
<span class="quotelev1">&gt; need to manually set CPPFLAGS='-I/usr/include/hcoll
</span><br>
<span class="quotelev1">&gt; -I/usr/include/hcoll/api'
</span><br>
<span class="quotelev1">&gt; if not, i guess i will simply update the configure help message ...
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
<span class="quotelev1">&gt; On 8/11/2015 7:39 AM, David Shrader wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hello All,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm having some trouble getting Open MPI 1.8.8 to configure correctly
</span><br>
<span class="quotelev2">&gt;&gt; when hcoll is installed in system space. That is, hcoll is installed
</span><br>
<span class="quotelev2">&gt;&gt; to /usr/lib64 and /usr/include/hcoll. I get an error during configure:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $&gt; Konsole output ./configure --with-hcoll
</span><br>
<span class="quotelev2">&gt;&gt; ...output snipped...
</span><br>
<span class="quotelev2">&gt;&gt; Konsole output configure:219976: checking for MCA component coll:hcoll
</span><br>
<span class="quotelev2">&gt;&gt; compile mode
</span><br>
<span class="quotelev2">&gt;&gt; configure:219982: result: static
</span><br>
<span class="quotelev2">&gt;&gt; configure:220039: checking --with-hcoll value
</span><br>
<span class="quotelev2">&gt;&gt; configure:220042: result: simple ok (unspecified)
</span><br>
<span class="quotelev2">&gt;&gt; configure:220840: error: HCOLL support requested but not found. Aborting
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have also tried using &quot;--with-hcoll=yes&quot; and gotten the same
</span><br>
<span class="quotelev2">&gt;&gt; behavior. Has anyone else gotten the hcoll component to build when
</span><br>
<span class="quotelev2">&gt;&gt; hcoll itself is in system space? I am using hcoll-3.2.748.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I did take a look at configure, and it looks like there is a test on
</span><br>
<span class="quotelev2">&gt;&gt; &quot;with_hcoll&quot; to see if it is not empty and not yes on line 220072. In
</span><br>
<span class="quotelev2">&gt;&gt; my case, this test fails, so the else clause gets invoked. The else
</span><br>
<span class="quotelev2">&gt;&gt; clause is several hundred lines below on line 220822 and simply sets
</span><br>
<span class="quotelev2">&gt;&gt; Konsole output ompi_check_hcoll_happy=&quot;no&quot;. Configure doesn't try to
</span><br>
<span class="quotelev2">&gt;&gt; do anything to figure out if hcoll is usable, but it does quit soon
</span><br>
<span class="quotelev2">&gt;&gt; after with the above error because ompi_check_hcoll_happy isn't &quot;yes.&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In case it helps, here is the output from config.log for that area:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ...output snipped...
</span><br>
<span class="quotelev2">&gt;&gt; configure:219976: checking for MCA component coll:hcoll compile mode
</span><br>
<span class="quotelev2">&gt;&gt; configure:219982: result: dso
</span><br>
<span class="quotelev2">&gt;&gt; configure:220039: checking --with-hcoll value
</span><br>
<span class="quotelev2">&gt;&gt; configure:220042: result: simple ok (unspecified)
</span><br>
<span class="quotelev2">&gt;&gt; configure:220840: error: HCOLL support requested but not found. Aborting
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ## ---------------- ##
</span><br>
<span class="quotelev2">&gt;&gt; ## Cache variables. ##
</span><br>
<span class="quotelev2">&gt;&gt; ## ---------------- ##
</span><br>
<span class="quotelev2">&gt;&gt; ...output snipped...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Have I missed something in specifying --with-hcoll? I would prefer not
</span><br>
<span class="quotelev2">&gt;&gt; to use &quot;--with-hcoll=/usr&quot; as I am pretty sure that spurious linker
</span><br>
<span class="quotelev2">&gt;&gt; flags to that area will work their way in when they shouldn't.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; David
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; David Shrader
</span><br>
<span class="quotelev2">&gt;&gt; HPC-3 High Performance Computer Systems
</span><br>
<span class="quotelev2">&gt;&gt; Los Alamos National Lab
</span><br>
<span class="quotelev2">&gt;&gt; Email: dshrader &lt;at&gt; lanl.gov
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
<span class="quotelev2">&gt;&gt; Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2015/08/27418.php">http://www.open-mpi.org/community/lists/users/2015/08/27418.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/08/27419.php">http://www.open-mpi.org/community/lists/users/2015/08/27419.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
Ake Sandgren, HPC2N, Umea University, S-90187 Umea, Sweden
Internet: ake_at_[hidden]   Phone: +46 90 7866134 Fax: +46 90-580 14
Mobile: +46 70 7716134 WWW: <a href="http://www.hpc2n.umu.se">http://www.hpc2n.umu.se</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27421.php">Gilles Gouaillardet: "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
<li><strong>Previous message:</strong> <a href="27419.php">Gilles Gouaillardet: "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
<li><strong>In reply to:</strong> <a href="27419.php">Gilles Gouaillardet: "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27421.php">Gilles Gouaillardet: "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
<li><strong>Reply:</strong> <a href="27421.php">Gilles Gouaillardet: "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
<li><strong>Reply:</strong> <a href="27423.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
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
