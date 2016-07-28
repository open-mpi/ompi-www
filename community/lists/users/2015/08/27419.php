<?
$subject_val = "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 10 19:57:51 2015" -->
<!-- isoreceived="20150810235751" -->
<!-- sent="Tue, 11 Aug 2015 08:57:45 +0900" -->
<!-- isosent="20150810235745" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space" -->
<!-- id="55C93A79.9050403_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="55C92823.5030300_at_lanl.gov" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-10 19:57:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27420.php">흆e Sandgren: "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
<li><strong>Previous message:</strong> <a href="27418.php">David Shrader: "[OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
<li><strong>In reply to:</strong> <a href="27418.php">David Shrader: "[OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27420.php">흆e Sandgren: "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
<li><strong>Reply:</strong> <a href="27420.php">흆e Sandgren: "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
David,
<br>
<p>the configure help is misleading about hcoll ...
<br>
<p>&nbsp;&nbsp;--with-hcoll(=DIR)      Build hcoll (Mellanox Hierarchical Collectives)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;support, searching for libraries in DIR
<br>
<p>the =DIR is not really optional ...
<br>
configure will not complain if you configure with --with-hcoll or 
<br>
--with-hcoll=yes
<br>
but hcoll will be disabled in this case
<br>
<p>FWIW, here is a snippet of my config.status generate with 
<br>
--with-hcoll=$HCOLL_HOME
<br>
/* i manually 'unexpaned' $HCOLL_HOME */
<br>
S[&quot;coll_hcoll_LIBS&quot;]=&quot;-lhcoll &quot;
<br>
S[&quot;coll_hcoll_LDFLAGS&quot;]=&quot; -L$HCOLL_HOME/lib&quot;
<br>
S[&quot;coll_hcoll_CPPFLAGS&quot;]=&quot; -I$HCOLL_HOME/include&quot;
<br>
S[&quot;coll_hcoll_CFLAGS&quot;]=&quot;&quot;
<br>
S[&quot;coll_hcoll_HOME&quot;]=&quot;$HCOLL_HOME&quot;
<br>
S[&quot;coll_hcoll_extra_CPPFLAGS&quot;]=&quot;-I$HCOLL_HOME/include/hcoll 
<br>
-I$HCOLL_HOME/include/hcoll/api&quot;
<br>
<p>bottom line, if you configure with --with-hcoll=/usr it will add some 
<br>
useless flags such as -L/usr/lib (or -L/usr/lib64, i am not sure about 
<br>
that) and -I/usr/include
<br>
but it will also add the required -I/usr/include/hcoll 
<br>
-I/usr/include/hcoll/api flags
<br>
<p>if you believe this is an issue, i can revamp the hcoll detection (e.g. 
<br>
configure --with-hcoll) but you might
<br>
need to manually set CPPFLAGS='-I/usr/include/hcoll 
<br>
-I/usr/include/hcoll/api'
<br>
if not, i guess i will simply update the configure help message ...
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 8/11/2015 7:39 AM, David Shrader wrote:
<br>
<span class="quotelev1">&gt; Hello All,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm having some trouble getting Open MPI 1.8.8 to configure correctly 
</span><br>
<span class="quotelev1">&gt; when hcoll is installed in system space. That is, hcoll is installed 
</span><br>
<span class="quotelev1">&gt; to /usr/lib64 and /usr/include/hcoll. I get an error during configure:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $&gt; Konsole output ./configure --with-hcoll
</span><br>
<span class="quotelev1">&gt; ...output snipped...
</span><br>
<span class="quotelev1">&gt; Konsole output configure:219976: checking for MCA component coll:hcoll 
</span><br>
<span class="quotelev1">&gt; compile mode
</span><br>
<span class="quotelev1">&gt; configure:219982: result: static
</span><br>
<span class="quotelev1">&gt; configure:220039: checking --with-hcoll value
</span><br>
<span class="quotelev1">&gt; configure:220042: result: simple ok (unspecified)
</span><br>
<span class="quotelev1">&gt; configure:220840: error: HCOLL support requested but not found. Aborting
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have also tried using &quot;--with-hcoll=yes&quot; and gotten the same 
</span><br>
<span class="quotelev1">&gt; behavior. Has anyone else gotten the hcoll component to build when 
</span><br>
<span class="quotelev1">&gt; hcoll itself is in system space? I am using hcoll-3.2.748.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I did take a look at configure, and it looks like there is a test on 
</span><br>
<span class="quotelev1">&gt; &quot;with_hcoll&quot; to see if it is not empty and not yes on line 220072. In 
</span><br>
<span class="quotelev1">&gt; my case, this test fails, so the else clause gets invoked. The else 
</span><br>
<span class="quotelev1">&gt; clause is several hundred lines below on line 220822 and simply sets 
</span><br>
<span class="quotelev1">&gt; Konsole output ompi_check_hcoll_happy=&quot;no&quot;. Configure doesn't try to 
</span><br>
<span class="quotelev1">&gt; do anything to figure out if hcoll is usable, but it does quit soon 
</span><br>
<span class="quotelev1">&gt; after with the above error because ompi_check_hcoll_happy isn't &quot;yes.&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In case it helps, here is the output from config.log for that area:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ...output snipped...
</span><br>
<span class="quotelev1">&gt; configure:219976: checking for MCA component coll:hcoll compile mode
</span><br>
<span class="quotelev1">&gt; configure:219982: result: dso
</span><br>
<span class="quotelev1">&gt; configure:220039: checking --with-hcoll value
</span><br>
<span class="quotelev1">&gt; configure:220042: result: simple ok (unspecified)
</span><br>
<span class="quotelev1">&gt; configure:220840: error: HCOLL support requested but not found. Aborting
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ## ---------------- ##
</span><br>
<span class="quotelev1">&gt; ## Cache variables. ##
</span><br>
<span class="quotelev1">&gt; ## ---------------- ##
</span><br>
<span class="quotelev1">&gt; ...output snipped...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Have I missed something in specifying --with-hcoll? I would prefer not 
</span><br>
<span class="quotelev1">&gt; to use &quot;--with-hcoll=/usr&quot; as I am pretty sure that spurious linker 
</span><br>
<span class="quotelev1">&gt; flags to that area will work their way in when they shouldn't.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; David
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; David Shrader
</span><br>
<span class="quotelev1">&gt; HPC-3 High Performance Computer Systems
</span><br>
<span class="quotelev1">&gt; Los Alamos National Lab
</span><br>
<span class="quotelev1">&gt; Email: dshrader &lt;at&gt; lanl.gov
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/08/27418.php">http://www.open-mpi.org/community/lists/users/2015/08/27418.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27419/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27420.php">흆e Sandgren: "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
<li><strong>Previous message:</strong> <a href="27418.php">David Shrader: "[OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
<li><strong>In reply to:</strong> <a href="27418.php">David Shrader: "[OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27420.php">흆e Sandgren: "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
<li><strong>Reply:</strong> <a href="27420.php">흆e Sandgren: "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
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
