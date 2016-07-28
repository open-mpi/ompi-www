<?
$subject_val = "[MTT devel] Extracting transparent data from OMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 31 17:07:43 2008" -->
<!-- isoreceived="20080131220743" -->
<!-- sent="Thu, 31 Jan 2008 17:07:39 -0500" -->
<!-- isosent="20080131220739" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="[MTT devel] Extracting transparent data from OMPI" -->
<!-- id="5FCBC0B5-8A6B-4027-BFDB-5A4E71184218_at_open-mpi.org" -->
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
<strong>Subject:</strong> [MTT devel] Extracting transparent data from OMPI<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-31 17:07:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2008/02/0233.php">Jeff Squyres: "Re: [MTT devel] Extracting transparent data from OMPI"</a>
<li><strong>Previous message:</strong> <a href="0231.php">Josh Hursey: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1147"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2008/02/0233.php">Jeff Squyres: "Re: [MTT devel] Extracting transparent data from OMPI"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2008/02/0233.php">Jeff Squyres: "Re: [MTT devel] Extracting transparent data from OMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
For the visualization it would be really nice to see how well tested a  
<br>
particular interconnect, resource manager, and/or 'feature' is when  
<br>
ramping up to a release. However these peices of information are hard  
<br>
to obtain, and in some cases quantify (e.g., what do we mean by  
<br>
testing a 'feature'?).
<br>
<p>Thinking about this it occurred to me that what we really need is for  
<br>
OMPI to tell MTT what it is doing for some of these cases.
<br>
Two examples, MTT cannot tell:
<br>
&nbsp;&nbsp;- which set of compile time options are enabled/disabled automatically
<br>
&nbsp;&nbsp;&nbsp;&nbsp;e.g. [ &quot;./configure --with-foo&quot; vs &quot;./configure&quot;]
<br>
&nbsp;&nbsp;- which BTL(s) or MTL are used to run a test
<br>
&nbsp;&nbsp;&nbsp;&nbsp;e.g. [ &quot;mpirun -mca btl tcp,self foo&quot; vs. &quot;mpirun foo&quot;]
<br>
<p>For the configure options we *could* parse the config.log to extract  
<br>
this data. The question is, if we did this, what do we want to look?  
<br>
And is this something we want to do? Is there another way?
<br>
<p>For the BTL(s)/MTL this is a much more subtle question since this  
<br>
depends on the connectivity of the interfaces on a machine, and the  
<br>
runtime selection logic. If we added a parameter to mpirun (e.g. &quot;-- 
<br>
showme connectivity&quot;) that displayed connectivity information to  
<br>
stdout (or a file) would this be useful? What should it look like?
<br>
<p>We have talked about some of this in the past, but I could not find a  
<br>
Bug talking about it in MTT.
<br>
<p>What do you think about this?
<br>
<p>Cheers,
<br>
Josh
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2008/02/0233.php">Jeff Squyres: "Re: [MTT devel] Extracting transparent data from OMPI"</a>
<li><strong>Previous message:</strong> <a href="0231.php">Josh Hursey: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1147"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2008/02/0233.php">Jeff Squyres: "Re: [MTT devel] Extracting transparent data from OMPI"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2008/02/0233.php">Jeff Squyres: "Re: [MTT devel] Extracting transparent data from OMPI"</a>
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
