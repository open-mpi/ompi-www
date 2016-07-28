<?
$subject_val = "[MTT users] questions on MTT setup instructions.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 23 17:36:38 2008" -->
<!-- isoreceived="20080123223638" -->
<!-- sent="Wed, 23 Jan 2008 15:36:26 -0700" -->
<!-- isosent="20080123223626" -->
<!-- name="Jennis Pruett" -->
<!-- email="jennyp_at_[hidden]" -->
<!-- subject="[MTT users] questions on MTT setup instructions." -->
<!-- id="008f01c85e10$63e04930$bcf3a580_at_lanl.gov" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [MTT users] questions on MTT setup instructions.<br>
<strong>From:</strong> Jennis Pruett (<em>jennyp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-23 17:36:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0489.php">Ethan Mallove: "Re: [MTT users] questions on MTT setup instructions."</a>
<li><strong>Previous message:</strong> <a href="0487.php">Jennis Pruett: "[MTT users] question on MTT setup instructions."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0489.php">Ethan Mallove: "Re: [MTT users] questions on MTT setup instructions."</a>
<li><strong>Reply:</strong> <a href="0489.php">Ethan Mallove: "Re: [MTT users] questions on MTT setup instructions."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;
<br>
To followup on this, I think I got it right by just using:  
<br>
&nbsp;
<br>
perl Makefile.PL LIB=/usr/projects/hpctools/jennyp/mtt
<br>
PREFIX=/usr/projects/hpctools/jennyp/mtt
<br>
setenv PERLIB /usr/projects/hpctools/jennyp/mtt
<br>
&nbsp;
<br>
I then copied ompi-core-template.ini  (made no changes to it).  But:
<br>
&nbsp;
<br>
ffe2:/&lt;2&gt;hpctools/jennyp/mtt [205] &gt; ./client -d --force -f
<br>
ompi-core-template.ini
<br>
Unable to find MTT support libraries at ./client line 78.
<br>
BEGIN failed--compilation aborted at ./client line 81.
<br>
ffe2:/&lt;2&gt;hpctools/jennyp/mtt [206] &gt; ./client -help 
<br>
Unable to find MTT support libraries at ./client line 78.
<br>
BEGIN failed--compilation aborted at ./client line 81.
<br>
&nbsp;
<br>
&nbsp;
<br>
I can't help but feel that I'm doing something wrong. 
<br>
Help?  Do I need to read another document?
<br>
&nbsp;
<br>
------------original issue-----------------
<br>
<p>I'm following the instructions on the MTT setup page. 
<br>
&nbsp;&nbsp;
<br>
Would someone clarify the &lt;your dir&gt; parameters below. 
<br>
PREFIX is logically (to me) &quot;where I am putting MTT&quot; , yes? 
<br>
&nbsp;&nbsp;
<br>
But LIB is always confusing. Is this some MPI lib directory, 
<br>
a perl library or the same as &lt;your dir&gt; above - where I am putting MTT. 
<br>
&nbsp;&nbsp;
<br>
And if so, how do I find where those happen 
<br>
to reside? 
<br>
&nbsp;&nbsp;
<br>
Pointing PERLLIB means setting the env var, right? 
<br>
&nbsp;&nbsp;
<br>
New to this, thanks., 
<br>
Jenny 
<br>
&nbsp;
<br>
-----------------------------------------------------------------------
<br>
Jennis (Jenny) Pruett
<br>
Los Alamos National Laboratory
<br>
505-667-1955
<br>
&nbsp;
<br>
<p><p>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/mtt-users/att-0488/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0489.php">Ethan Mallove: "Re: [MTT users] questions on MTT setup instructions."</a>
<li><strong>Previous message:</strong> <a href="0487.php">Jennis Pruett: "[MTT users] question on MTT setup instructions."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0489.php">Ethan Mallove: "Re: [MTT users] questions on MTT setup instructions."</a>
<li><strong>Reply:</strong> <a href="0489.php">Ethan Mallove: "Re: [MTT users] questions on MTT setup instructions."</a>
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
