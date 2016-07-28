<?
$subject_val = "Re: [OMPI devel] configure broken";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 22 21:17:04 2009" -->
<!-- isoreceived="20091023011704" -->
<!-- sent="Thu, 22 Oct 2009 19:16:41 -0600" -->
<!-- isosent="20091023011641" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] configure broken" -->
<!-- id="1C1007F2-38E3-43C1-AB97-129E364C9731_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="02419272-EFB2-4D41-A889-C3B8DC877EED_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] configure broken<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-22 21:16:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7015.php">Tim Mattox: "Re: [OMPI devel] configure broken"</a>
<li><strong>Previous message:</strong> <a href="7013.php">George Bosilca: "[OMPI devel] configure broken"</a>
<li><strong>In reply to:</strong> <a href="7013.php">George Bosilca: "[OMPI devel] configure broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7015.php">Tim Mattox: "Re: [OMPI devel] configure broken"</a>
<li><strong>Reply:</strong> <a href="7015.php">Tim Mattox: "Re: [OMPI devel] configure broken"</a>
<li><strong>Reply:</strong> <a href="7016.php">George Bosilca: "Re: [OMPI devel] configure broken"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Most interesting - I have been building on Mac OSX both yesterday and  
<br>
today with those changes without problem. I am on Snow Leopard, but I  
<br>
checked and &quot;true&quot; is indeed in /usr/bin.
<br>
<p>I'm not seeing any warnings or problems. Perhaps a difference in  
<br>
configuration? Though I did also test it with a completely empty ./ 
<br>
configure --prefix=foo run, again with no problems.
<br>
<p><p>On Oct 22, 2009, at 7:09 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; There seems to be an issue with the latest changes on the configure  
</span><br>
<span class="quotelev1">&gt; scripts. A careful reading of the output of configure on MAC OS X  
</span><br>
<span class="quotelev1">&gt; shows a lot of errors/warnings, which leads to undefined  
</span><br>
<span class="quotelev1">&gt; AM_CONDITIONALS (PROJECT_OMPI_*). This apparently comes from  
</span><br>
<span class="quotelev1">&gt; configure.ac line 62 where the path to /bin/true is hardcoded! Of  
</span><br>
<span class="quotelev1">&gt; course /bin/true doesn't exist on MAC OS X, instead it is locate in / 
</span><br>
<span class="quotelev1">&gt; usr/bin/.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; checking how to create a ustar tar archive... gnutar
</span><br>
<span class="quotelev1">&gt; ../ompi/configure: line 5480: /bin/true: No such file or directory
</span><br>
<span class="quotelev1">&gt; ../ompi/configure: line 5488: /bin/true: No such file or directory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="7015.php">Tim Mattox: "Re: [OMPI devel] configure broken"</a>
<li><strong>Previous message:</strong> <a href="7013.php">George Bosilca: "[OMPI devel] configure broken"</a>
<li><strong>In reply to:</strong> <a href="7013.php">George Bosilca: "[OMPI devel] configure broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7015.php">Tim Mattox: "Re: [OMPI devel] configure broken"</a>
<li><strong>Reply:</strong> <a href="7015.php">Tim Mattox: "Re: [OMPI devel] configure broken"</a>
<li><strong>Reply:</strong> <a href="7016.php">George Bosilca: "Re: [OMPI devel] configure broken"</a>
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
