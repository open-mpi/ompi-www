<?
$subject_val = "[MTT devel] two recent commits";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 13 10:36:00 2008" -->
<!-- isoreceived="20080213153600" -->
<!-- sent="Wed, 13 Feb 2008 10:35:51 -0500" -->
<!-- isosent="20080213153551" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="[MTT devel] two recent commits" -->
<!-- id="C0B582EA-807C-4FB5-A031-5681EFED3B37_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [MTT devel] two recent commits<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-13 10:35:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0242.php">Ethan Mallove: "Re: [MTT devel] two recent commits"</a>
<li><strong>Previous message:</strong> <a href="0240.php">Jeff Squyres: "Re: [MTT devel] Extracting transparent data from OMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0242.php">Ethan Mallove: "Re: [MTT devel] two recent commits"</a>
<li><strong>Reply:</strong> <a href="0242.php">Ethan Mallove: "Re: [MTT devel] two recent commits"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just committed to the trunk two revisions that I want to push to the  
<br>
Open MPI version of MTT:
<br>
&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/mtt/changeset/1154">https://svn.open-mpi.org/trac/mtt/changeset/1154</a>
<br>
&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/mtt/changeset/1155">https://svn.open-mpi.org/trac/mtt/changeset/1155</a>
<br>
<p>r1154 is a performance fix which prevents us from executing the same  
<br>
SQL query twice for every MTT Reporter request.
<br>
<p>r1155 displays the total SQL execution time just after the Total  
<br>
execution time at the bottom of the Reporter. I was noticing that over  
<br>
a slow connection the difference between these two times was  
<br>
significant.
<br>
<p>I tested both of these and didn't see any problems, but wanted to ask  
<br>
before I moved them to the Open MPI site version of MTT. A version of  
<br>
the Reporter with these patches applied is available at the link below:
<br>
<a href="http://osl.iu.edu/~jjhursey/research/mtt/server/php/index.php">http://osl.iu.edu/~jjhursey/research/mtt/server/php/index.php</a>
<br>
<p><p>If I don't hear anything by the end of the day I'll push them in.
<br>
<p>cheers,
<br>
Josh
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0242.php">Ethan Mallove: "Re: [MTT devel] two recent commits"</a>
<li><strong>Previous message:</strong> <a href="0240.php">Jeff Squyres: "Re: [MTT devel] Extracting transparent data from OMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0242.php">Ethan Mallove: "Re: [MTT devel] two recent commits"</a>
<li><strong>Reply:</strong> <a href="0242.php">Ethan Mallove: "Re: [MTT devel] two recent commits"</a>
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
