<?
$subject_val = "Re: [MTT users] questions on MTT setup instructions.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 23 17:44:24 2008" -->
<!-- isoreceived="20080123224424" -->
<!-- sent="Wed, 23 Jan 2008 17:44:17 -0500" -->
<!-- isosent="20080123224417" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] questions on MTT setup instructions." -->
<!-- id="20080123224417.GV17034_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="008f01c85e10$63e04930$bcf3a580_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [MTT users] questions on MTT setup instructions.<br>
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-23 17:44:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0490.php">Ethan Mallove: "Re: [MTT users] question on MTT setup instructions."</a>
<li><strong>Previous message:</strong> <a href="0488.php">Jennis Pruett: "[MTT users] questions on MTT setup instructions."</a>
<li><strong>In reply to:</strong> <a href="0488.php">Jennis Pruett: "[MTT users] questions on MTT setup instructions."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Jan/23/2008 03:36:26PM, Jennis Pruett wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    To followup on this, I think I got it right by just using:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    perl Makefile.PL LIB=/usr/projects/hpctools/jennyp/mtt
</span><br>
<span class="quotelev1">&gt;    PREFIX=/usr/projects/hpctools/jennyp/mtt
</span><br>
<span class="quotelev1">&gt;    setenv PERLIB /usr/projects/hpctools/jennyp/mtt
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    I then copied ompi-core-template.ini  (made no changes to it).  But:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    ffe2:/&lt;2&gt;hpctools/jennyp/mtt [205] &gt; ./client -d --force -f
</span><br>
<span class="quotelev1">&gt;    ompi-core-template.ini
</span><br>
<span class="quotelev1">&gt;    Unable to find MTT support libraries at ./client line 78.
</span><br>
<span class="quotelev1">&gt;    BEGIN failed--compilation aborted at ./client line 81.
</span><br>
<span class="quotelev1">&gt;    ffe2:/&lt;2&gt;hpctools/jennyp/mtt [206] &gt; ./client -help
</span><br>
<span class="quotelev1">&gt;    Unable to find MTT support libraries at ./client line 78.
</span><br>
<span class="quotelev1">&gt;    BEGIN failed--compilation aborted at ./client line 81.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    I can't help but feel that I'm doing something wrong.
</span><br>
<span class="quotelev1">&gt;    Help?  Do I need to read another document?
</span><br>
<p><p>You may need to do this:
<br>
<p>&nbsp;&nbsp;$ setenv PERLIB /usr/projects/hpctools/jennyp/mtt/lib
<br>
<p>-Ethan
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    ------------original issue-----------------
</span><br>
<span class="quotelev1">&gt;    I'm following the instructions on the MTT setup page.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Would someone clarify the &lt;your dir&gt; parameters below.
</span><br>
<span class="quotelev1">&gt;    PREFIX is logically (to me) &quot;where I am putting MTT&quot; , yes?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    But LIB is always confusing. Is this some MPI lib directory,
</span><br>
<span class="quotelev1">&gt;    a perl library or the same as &lt;your dir&gt; above - where I am putting MTT.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    And if so, how do I find where those happen
</span><br>
<span class="quotelev1">&gt;    to reside?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Pointing PERLLIB means setting the env var, right?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    New to this, thanks.,
</span><br>
<span class="quotelev1">&gt;    Jenny
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    -----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;    Jennis (Jenny) Pruett
</span><br>
<span class="quotelev1">&gt;    Los Alamos National Laboratory
</span><br>
<span class="quotelev1">&gt;    505-667-1955
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0490.php">Ethan Mallove: "Re: [MTT users] question on MTT setup instructions."</a>
<li><strong>Previous message:</strong> <a href="0488.php">Jennis Pruett: "[MTT users] questions on MTT setup instructions."</a>
<li><strong>In reply to:</strong> <a href="0488.php">Jennis Pruett: "[MTT users] questions on MTT setup instructions."</a>
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
