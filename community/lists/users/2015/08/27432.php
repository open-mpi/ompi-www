<?
$subject_val = "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 11 15:01:49 2015" -->
<!-- isoreceived="20150811190149" -->
<!-- sent="Tue, 11 Aug 2015 13:01:38 -0600" -->
<!-- isosent="20150811190138" -->
<!-- name="David Shrader" -->
<!-- email="dshrader_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space" -->
<!-- id="55CA4692.3030000_at_lanl.gov" -->
<!-- charset="utf-8" -->
<!-- inreplyto="54237D73-451C-4368-9538-5474FA47DE40_at_cisco.com" -->
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
<strong>From:</strong> David Shrader (<em>dshrader_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-11 15:01:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27433.php">Lane, William: "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7"</a>
<li><strong>Previous message:</strong> <a href="27431.php">Rolf vandeVaart: "Re: [OMPI users] CUDA Buffers: Enforce asynchronous memcpy's"</a>
<li><strong>In reply to:</strong> <a href="27423.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27434.php">Gilles Gouaillardet: "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
<li><strong>Reply:</strong> <a href="27434.php">Gilles Gouaillardet: "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have cloned Gilles' topic/hcoll_config branch and, after running 
<br>
autogen.pl, have found that './configure --with-hcoll' does indeed work 
<br>
now. I used Gilles' branch as I wasn't sure how best to get the pull 
<br>
request changes in to my own clone of master. It looks like the proper 
<br>
checks are happening, too:
<br>
<p>Konsole output
<br>
--- MCA component coll:hcoll(m4 configuration macro)
<br>
checking for MCA component coll:hcollcompile mode... dso
<br>
checking --with-hcollvalue... simple ok (unspecified)
<br>
checking hcoll/api/hcoll_api.h usability... yes
<br>
checking hcoll/api/hcoll_api.h presence... yes
<br>
checking for hcoll/api/hcoll_api.h... yes
<br>
looking for library without search path
<br>
checking for library containing hcoll_get_version... -lhcoll
<br>
checking if MCA component coll:hcollcan compile... yes
<br>
<p>I haven't checked whether or not Open MPI builds successfully as I don't 
<br>
have much experience running off of the latest source. For now, I think 
<br>
I will try to generate a patch to the 1.8.8 configure script and see if 
<br>
that works as expected.
<br>
<p>Thanks,
<br>
David
<br>
<p>On 08/11/2015 06:34 AM, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; On Aug 11, 2015, at 1:39 AM, &#195;&#133;ke Sandgren &lt;ake.sandgren_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Please fix the hcoll test (and code) to be correct.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any configure test that adds /usr/lib and/or /usr/include to any compile flags is broken.
</span><br>
<span class="quotelev1">&gt; +1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles filed <a href="https://github.com/open-mpi/ompi/pull/796">https://github.com/open-mpi/ompi/pull/796</a>; I just added some comments to it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
David Shrader
HPC-3 High Performance Computer Systems
Los Alamos National Lab
Email: dshrader &lt;at&gt; lanl.gov
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27432/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27433.php">Lane, William: "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7"</a>
<li><strong>Previous message:</strong> <a href="27431.php">Rolf vandeVaart: "Re: [OMPI users] CUDA Buffers: Enforce asynchronous memcpy's"</a>
<li><strong>In reply to:</strong> <a href="27423.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27434.php">Gilles Gouaillardet: "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
<li><strong>Reply:</strong> <a href="27434.php">Gilles Gouaillardet: "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
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
