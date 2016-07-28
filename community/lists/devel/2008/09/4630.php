<?
$subject_val = "[OMPI devel] Display map and allocation";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  4 10:29:55 2008" -->
<!-- isoreceived="20080904142955" -->
<!-- sent="Thu, 4 Sep 2008 08:29:44 -0600" -->
<!-- isosent="20080904142944" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Display map and allocation" -->
<!-- id="D7443A94-D920-4350-BB0F-9E995A5F6B2C_at_lanl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] Display map and allocation<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-04 10:29:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4631.php">Lenny Verkhovsky: "Re: [OMPI devel] mtt IBM SPAWN error"</a>
<li><strong>Previous message:</strong> <a href="4629.php">Jeff Squyres: "Re: [OMPI devel] 1.4 first plans"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks
<br>
<p>I am giving a series of talks here about OMPI 1.3, beginning with a  
<br>
description of the user-oriented features - i.e., cmd line options,  
<br>
etc. In working on the presentation, and showing a draft to some  
<br>
users, questions arose about two options: --display-map and --display- 
<br>
allocation. To be fair, Greg Watson had raised similar questions before.
<br>
<p>The questions revolve around the fact that the data provided by those  
<br>
options contains a lot of stuff that, while immensely useful to an  
<br>
OMPI developer, are of no use to a user and actually cause confusion.  
<br>
What we propose, therefore, is to revise these options:
<br>
<p>--display-map: displays a list of nodes, to include node name and  
<br>
state and a list of the procs on that node. For each proc,  show the  
<br>
MPI rank, local and node ranks, any slot list for that proc (if  
<br>
given), and state.
<br>
<p>--display-allocation: displays a list of nodes to include node name,  
<br>
slot info, username (if given), and state (&quot;unknown&quot; if not known)
<br>
<p>We would then add two new options that show the broader output we have  
<br>
today: --debug-display-map, and --debug-display-allocation.
<br>
<p>Anybody have heartburn and/or comments on this? If not, I plan to make  
<br>
the change by the end of the week.
<br>
<p>Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4631.php">Lenny Verkhovsky: "Re: [OMPI devel] mtt IBM SPAWN error"</a>
<li><strong>Previous message:</strong> <a href="4629.php">Jeff Squyres: "Re: [OMPI devel] 1.4 first plans"</a>
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
