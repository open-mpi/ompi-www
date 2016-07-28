<?
$subject_val = "Re: [OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 13 19:53:43 2010" -->
<!-- isoreceived="20100513235343" -->
<!-- sent="Fri, 14 May 2010 09:34:49 +1000" -->
<!-- isosent="20100513233449" -->
<!-- name="Christopher Samuel" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed" -->
<!-- id="D45958078CD65C429557B4C5F492B6A60770E51F_at_IS-EX-BEV3.unimelb.edu.au" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4BEBDAE1.7000301_at_lysator.liu.se" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed<br>
<strong>From:</strong> Christopher Samuel (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-13 19:34:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7924.php">Jeff Squyres: "[OMPI devel] RFC: Remove all other paffinity components"</a>
<li><strong>Previous message:</strong> <a href="7922.php">Oskar Enoksson: "[OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed"</a>
<li><strong>In reply to:</strong> <a href="7922.php">Oskar Enoksson: "[OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7928.php">Oskar Enoksson: "Re: [OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 13/05/10 20:56, Oskar Enoksson wrote:
<br>
<p><span class="quotelev1">&gt; The problem is that I get very bad performance unless I
</span><br>
<span class="quotelev1">&gt; explicitly exclude the &quot;sm&quot; btl and I can't figure out why.
</span><br>
<p>Recently someone reported issues which were traced back to
<br>
the fact that the files that sm uses for mmap() were in a
<br>
/tmp which was NFS mounted; changing the location where their
<br>
files were kept to another directory with the orte_tmpdir_base
<br>
MCA parameter fixed that issue for them.
<br>
<p>Could it be similar for yourself ?
<br>
<p>cheers,
<br>
Chris
<br>
<pre>
-- 
  Christopher Samuel - Senior Systems Administrator
  VLSCI - Victorian Life Sciences Computational Initiative
  Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
          <a href="http://www.vlsci.unimelb.edu.au/">http://www.vlsci.unimelb.edu.au/</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-7923/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7924.php">Jeff Squyres: "[OMPI devel] RFC: Remove all other paffinity components"</a>
<li><strong>Previous message:</strong> <a href="7922.php">Oskar Enoksson: "[OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed"</a>
<li><strong>In reply to:</strong> <a href="7922.php">Oskar Enoksson: "[OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7928.php">Oskar Enoksson: "Re: [OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed"</a>
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
