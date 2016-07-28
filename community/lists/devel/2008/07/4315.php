<?
$subject_val = "[OMPI devel] PLM consistency: launch agent param";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 11 10:17:30 2008" -->
<!-- isoreceived="20080711141730" -->
<!-- sent="Fri, 11 Jul 2008 08:17:20 -0600" -->
<!-- isosent="20080711141720" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] PLM consistency: launch agent param" -->
<!-- id="C49CC790.E41C%rhc_at_lanl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] PLM consistency: launch agent param<br>
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-11 10:17:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4316.php">Jeff Squyres: "Re: [OMPI devel] v1.3 RM: need a ruling"</a>
<li><strong>Previous message:</strong> <a href="4314.php">Ralph H Castain: "Re: [OMPI devel] v1.3 RM: need a ruling"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4318.php">Jeff Squyres: "Re: [OMPI devel] PLM consistency: launch agent param"</a>
<li><strong>Reply:</strong> <a href="4318.php">Jeff Squyres: "Re: [OMPI devel] PLM consistency: launch agent param"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Since the question of backward compatibility of params came up... ;-)
<br>
<p>I've been perusing the various PLM modules to check consistency. One thing I
<br>
noted right away is that -every- PLM module registers an MCA param to let
<br>
the user specify an orted cmd. I believe this specifically was done so
<br>
people could insert their favorite debugger in front of the &quot;orted&quot; on the
<br>
spawned command line - e.g., &quot;valgrind orted&quot;.
<br>
<p>The problem is that this forces the user to have to figure out the name of
<br>
the PLM module being used as the param is called &quot;-mca plm_rsh_agent&quot;, or
<br>
&quot;-mca plm_lsf_orted&quot;, or...you name it.
<br>
<p>For users that only ever operate in one environment, who cares. However,
<br>
many users (at least around here) operate in multiple environments, and this
<br>
creates confusion.
<br>
<p>I propose to create a single MCA param name for this value - something like
<br>
&quot;-mca plm_launch_agent&quot; or whatever - and get rid of all these individual
<br>
registrations to reduce the user confusion.
<br>
<p>Comments? I'll put my helmet on....
<br>
Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4316.php">Jeff Squyres: "Re: [OMPI devel] v1.3 RM: need a ruling"</a>
<li><strong>Previous message:</strong> <a href="4314.php">Ralph H Castain: "Re: [OMPI devel] v1.3 RM: need a ruling"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4318.php">Jeff Squyres: "Re: [OMPI devel] PLM consistency: launch agent param"</a>
<li><strong>Reply:</strong> <a href="4318.php">Jeff Squyres: "Re: [OMPI devel] PLM consistency: launch agent param"</a>
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
