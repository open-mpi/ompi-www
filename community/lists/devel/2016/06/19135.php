<?
$subject_val = "Re: [OMPI devel] Posting To Group";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 22 08:06:56 2016" -->
<!-- isoreceived="20160622120656" -->
<!-- sent="Wed, 22 Jun 2016 12:06:54 +0000" -->
<!-- isosent="20160622120654" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Posting To Group" -->
<!-- id="44A7FC0A-D92E-4F22-A5A1-A0A4BFB289E2_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CADfeNhkK=gJeV2N2Ly2_r_xPkyS1HVjojdxKa9BNqpU261mqYg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Posting To Group<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-22 08:06:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19136.php">Jeff Squyres (jsquyres): "[OMPI devel] OMPI summer dev meeting: last chance to fill out the doodle"</a>
<li><strong>Previous message:</strong> <a href="19134.php">Gilles Gouaillardet: "Re: [OMPI devel] Posting To Group"</a>
<li><strong>In reply to:</strong> <a href="19133.php">mayank bhuwal: "Re: [OMPI devel] Posting To Group"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
A few points:
<br>
<p>1. The URL cites Open MPI v1.8.1, which is pretty old at this point.  We just had a release last week of v1.10.3.  You'd be much better off using that version -- see <a href="https://www.open-mpi.org/software/ompi/v1.10/">https://www.open-mpi.org/software/ompi/v1.10/</a>.
<br>
<p>2. You likely do not have a fortran compiler installed (e.g., gfortran).  As such, Open MPI probably did not build Fortran support.  You should probably try to install a Fortran compiler and then re-configure/build/install Open MPI (V1.10.3), and see if that solves your problem.  If you want to force Open MPI to build with Fortran support -- i.e., complain/error/abort if it can't find Fortran support -- add the CLI option &quot;--enable-mpi-fortran&quot; on the Open MPI configure command line.
<br>
<p><p><span class="quotelev1">&gt; On Jun 22, 2016, at 7:33 AM, mayank bhuwal &lt;mayankwondorous2789_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have installed OpenMPI following the instruction given in the below link :
</span><br>
<span class="quotelev1">&gt; <a href="http://sysads.co.uk/2014/05/install-open-mpi-1-8-ubuntu-14-04-13-10/">http://sysads.co.uk/2014/05/install-open-mpi-1-8-ubuntu-14-04-13-10/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also i have checked that mpif90 is present inside the bin folder of openmpi.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Jun 22, 2016 at 5:01 PM, mayank bhuwal &lt;mayankwondorous2789_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Dear Team ,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please help in resolving an issue which is :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Unfortunately, this installation of Open MPI was not compiled with
</span><br>
<span class="quotelev1">&gt; Fortran 90 support.  As such, the mpif90 compiler is non-functional
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks !!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/06/19133.php">http://www.open-mpi.org/community/lists/devel/2016/06/19133.php</a>
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
<li><strong>Next message:</strong> <a href="19136.php">Jeff Squyres (jsquyres): "[OMPI devel] OMPI summer dev meeting: last chance to fill out the doodle"</a>
<li><strong>Previous message:</strong> <a href="19134.php">Gilles Gouaillardet: "Re: [OMPI devel] Posting To Group"</a>
<li><strong>In reply to:</strong> <a href="19133.php">mayank bhuwal: "Re: [OMPI devel] Posting To Group"</a>
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
