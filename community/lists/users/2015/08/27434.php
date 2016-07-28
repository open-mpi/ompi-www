<?
$subject_val = "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 12 02:26:33 2015" -->
<!-- isoreceived="20150812062633" -->
<!-- sent="Wed, 12 Aug 2015 15:26:16 +0900" -->
<!-- isosent="20150812062616" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space" -->
<!-- id="55CAE708.9030902_at_rist.or.jp" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="55CA4692.3030000_at_lanl.gov" -->
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
<strong>Date:</strong> 2015-08-12 02:26:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27435.php">Dave Love: "Re: [OMPI users] What Red Hat Enterprise/CentOS NUMA libraries are recommended/required for OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="27433.php">Lane, William: "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7"</a>
<li><strong>In reply to:</strong> <a href="27432.php">David Shrader: "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27438.php">David Shrader: "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
<li><strong>Reply:</strong> <a href="27438.php">David Shrader: "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks David,
<br>
<p>i made a PR for the v1.8 branch at 
<br>
<a href="https://github.com/open-mpi/ompi-release/pull/492">https://github.com/open-mpi/ompi-release/pull/492</a>
<br>
<p>the patch is attached (it required some back-porting)
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 8/12/2015 4:01 AM, David Shrader wrote:
<br>
<span class="quotelev1">&gt; I have cloned Gilles' topic/hcoll_config branch and, after running 
</span><br>
<span class="quotelev1">&gt; autogen.pl, have found that './configure --with-hcoll' does indeed 
</span><br>
<span class="quotelev1">&gt; work now. I used Gilles' branch as I wasn't sure how best to get the 
</span><br>
<span class="quotelev1">&gt; pull request changes in to my own clone of master. It looks like the 
</span><br>
<span class="quotelev1">&gt; proper checks are happening, too:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Konsole output
</span><br>
<span class="quotelev1">&gt; --- MCA component coll:hcoll(m4 configuration macro)
</span><br>
<span class="quotelev1">&gt; checking for MCA component coll:hcollcompile mode... dso
</span><br>
<span class="quotelev1">&gt; checking --with-hcollvalue... simple ok (unspecified)
</span><br>
<span class="quotelev1">&gt; checking hcoll/api/hcoll_api.h usability... yes
</span><br>
<span class="quotelev1">&gt; checking hcoll/api/hcoll_api.h presence... yes
</span><br>
<span class="quotelev1">&gt; checking for hcoll/api/hcoll_api.h... yes
</span><br>
<span class="quotelev1">&gt; looking for library without search path
</span><br>
<span class="quotelev1">&gt; checking for library containing hcoll_get_version... -lhcoll
</span><br>
<span class="quotelev1">&gt; checking if MCA component coll:hcollcan compile... yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I haven't checked whether or not Open MPI builds successfully as I 
</span><br>
<span class="quotelev1">&gt; don't have much experience running off of the latest source. For now, 
</span><br>
<span class="quotelev1">&gt; I think I will try to generate a patch to the 1.8.8 configure script 
</span><br>
<span class="quotelev1">&gt; and see if that works as expected.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; David
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 08/11/2015 06:34 AM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 11, 2015, at 1:39 AM, &#197;ke Sandgren&lt;ake.sandgren_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Please fix the hcoll test (and code) to be correct.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any configure test that adds /usr/lib and/or /usr/include to any compile flags is broken.
</span><br>
<span class="quotelev2">&gt;&gt; +1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles filed<a href="https://github.com/open-mpi/ompi/pull/796">https://github.com/open-mpi/ompi/pull/796</a>; I just added some comments to it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/08/27432.php">http://www.open-mpi.org/community/lists/users/2015/08/27432.php</a>
</span><br>
<p><p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27434/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27434/v1.8_hcoll_fca_configury.patch">v1.8_hcoll_fca_configury.patch</a>
</ul>
<!-- attachment="v1.8_hcoll_fca_configury.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27435.php">Dave Love: "Re: [OMPI users] What Red Hat Enterprise/CentOS NUMA libraries are recommended/required for OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="27433.php">Lane, William: "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7"</a>
<li><strong>In reply to:</strong> <a href="27432.php">David Shrader: "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27438.php">David Shrader: "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
<li><strong>Reply:</strong> <a href="27438.php">David Shrader: "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
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
