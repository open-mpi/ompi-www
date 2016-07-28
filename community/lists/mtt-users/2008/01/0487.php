<?
$subject_val = "[MTT users] question on MTT setup instructions.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 23 16:44:50 2008" -->
<!-- isoreceived="20080123214450" -->
<!-- sent="Wed, 23 Jan 2008 14:44:37 -0700" -->
<!-- isosent="20080123214437" -->
<!-- name="Jennis Pruett" -->
<!-- email="jennyp_at_[hidden]" -->
<!-- subject="[MTT users] question on MTT setup instructions." -->
<!-- id="008701c85e09$26bee360$bcf3a580_at_lanl.gov" -->
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
<strong>Subject:</strong> [MTT users] question on MTT setup instructions.<br>
<strong>From:</strong> Jennis Pruett (<em>jennyp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-23 16:44:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0488.php">Jennis Pruett: "[MTT users] questions on MTT setup instructions."</a>
<li><strong>Previous message:</strong> <a href="0486.php">Pavel Shamis (Pasha): "Re: [MTT users] mtt reports arrive without subject."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0490.php">Ethan Mallove: "Re: [MTT users] question on MTT setup instructions."</a>
<li><strong>Reply:</strong> <a href="0490.php">Ethan Mallove: "Re: [MTT users] question on MTT setup instructions."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;
<br>
I'm following the instructions on the MTT setup page.
<br>
&nbsp;
<br>
Would someone clarify the &lt;your dir&gt; parameters below.
<br>
PREFIX is logically (to me) &quot;where I am putting MTT&quot; , yes?
<br>
&nbsp;
<br>
But LIB is always confusing.  Is this some MPI lib directory,
<br>
a perl library or the same as &lt;your dir&gt; above - where I am putting MTT. 
<br>
&nbsp;
<br>
And if so, how do I find where those happen 
<br>
to reside?
<br>
&nbsp;
<br>
Pointing PERLLIB means setting the env var, right?
<br>
&nbsp;
<br>
New to this, thanks.,
<br>
Jenny
<br>
-----
<br>
&nbsp;
<br>
If you do not have root access:
<br>
<p>$ perl Makefile.PL LIB=&lt;your dir&gt; PREFIX=&lt;your dir&gt;
<br>
$ make
<br>
$ make install
<br>
<p>You will then need to point PERLLIB to &lt;your dir&gt; to run MTT.
<br>
<p><p><p>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/mtt-users/att-0487/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0488.php">Jennis Pruett: "[MTT users] questions on MTT setup instructions."</a>
<li><strong>Previous message:</strong> <a href="0486.php">Pavel Shamis (Pasha): "Re: [MTT users] mtt reports arrive without subject."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0490.php">Ethan Mallove: "Re: [MTT users] question on MTT setup instructions."</a>
<li><strong>Reply:</strong> <a href="0490.php">Ethan Mallove: "Re: [MTT users] question on MTT setup instructions."</a>
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
