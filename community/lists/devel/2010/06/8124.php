<?
$subject_val = "Re: [OMPI devel] How to disable paffinity";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 30 00:03:34 2010" -->
<!-- isoreceived="20100630040334" -->
<!-- sent="Tue, 29 Jun 2010 22:03:24 -0600" -->
<!-- isosent="20100630040324" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] How to disable paffinity" -->
<!-- id="EA3D014B-689B-4DBC-9E0B-1A5906313C51_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="AANLkTimQOPG5iHQa6rkz50XKyTD0apuMqXFGYtj6lbdE_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] How to disable paffinity<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-30 00:03:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8125.php">Paul Hilscher: "Re: [OMPI devel] [OMPI users] dimension mapping of MPI_Cart_create"</a>
<li><strong>Previous message:</strong> <a href="8123.php">&#213;&#197;&#190;&#167;: "[OMPI devel] How to disable paffinity"</a>
<li><strong>In reply to:</strong> <a href="8123.php">&#213;&#197;&#190;&#167;: "[OMPI devel] How to disable paffinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8126.php">张晶: "Re: [OMPI devel] How to disable paffinity"</a>
<li><strong>Reply:</strong> <a href="8126.php">张晶: "Re: [OMPI devel] How to disable paffinity"</a>
<li><strong>Reply:</strong> <a href="8127.php">Jeff Squyres: "Re: [OMPI devel] How to disable paffinity"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/07/8134.php">张晶: "Re: [OMPI devel] How to disable paffinity"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You may be working off of an old version of OMPI - I updated opal_paffinity awhile ago to no longer require that a component be selected. Then you can no-build all paffinity components if you like and the system will still startup okay.
<br>
<p>I don't believe this was moved over to the 1.4 release branch - afraid you would have to use a developer's trunk tarball or svn checkout. It -might- be in the 1.5.0 release candidates, though (I haven't looked).
<br>
<p>On Jun 29, 2010, at 9:36 PM, &#229;&#188;&#160;&#230;&#153;&#182; wrote:
<br>
<p><span class="quotelev1">&gt; Hi all ,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried to run the openmpi on vxworks. Now I can run program ompi_info
</span><br>
<span class="quotelev1">&gt; etc. But it failed running &quot;mpirun ls&quot;,  the error is :
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like opal_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during opal_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  opal_paffinity_base_select failed
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned value -13 instead of OPAL_SUCCESS
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; After using the ompi_info , I cann't find any available component for
</span><br>
<span class="quotelev1">&gt; paffinity. It seems the linux component of paffinity  isn't  available
</span><br>
<span class="quotelev1">&gt; . As the paffinity is not a must in openmpi . I wonder whether I can
</span><br>
<span class="quotelev1">&gt; disable the paffinity during the running of mpirun?
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jing Zhang
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8125.php">Paul Hilscher: "Re: [OMPI devel] [OMPI users] dimension mapping of MPI_Cart_create"</a>
<li><strong>Previous message:</strong> <a href="8123.php">&#213;&#197;&#190;&#167;: "[OMPI devel] How to disable paffinity"</a>
<li><strong>In reply to:</strong> <a href="8123.php">&#213;&#197;&#190;&#167;: "[OMPI devel] How to disable paffinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8126.php">张晶: "Re: [OMPI devel] How to disable paffinity"</a>
<li><strong>Reply:</strong> <a href="8126.php">张晶: "Re: [OMPI devel] How to disable paffinity"</a>
<li><strong>Reply:</strong> <a href="8127.php">Jeff Squyres: "Re: [OMPI devel] How to disable paffinity"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/07/8134.php">张晶: "Re: [OMPI devel] How to disable paffinity"</a>
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
