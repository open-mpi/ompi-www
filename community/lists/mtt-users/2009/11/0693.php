<?
$subject_val = "[MTT users] autogen.sh in svn_post_export";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  4 13:52:01 2009" -->
<!-- isoreceived="20091104185201" -->
<!-- sent="Wed, 4 Nov 2009 13:51:55 -0500" -->
<!-- isosent="20091104185155" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="[MTT users] autogen.sh in svn_post_export" -->
<!-- id="20091104185155.GC53339_at_sun.com" -->
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
<strong>Subject:</strong> [MTT users] autogen.sh in svn_post_export<br>
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-04 13:51:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0694.php">Jeff Squyres: "Re: [MTT users] autogen.sh in svn_post_export"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2009/06/0692.php">Jeff Squyres: "Re: [MTT users] MPI inside MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0694.php">Jeff Squyres: "Re: [MTT users] autogen.sh in svn_post_export"</a>
<li><strong>Reply:</strong> <a href="0694.php">Jeff Squyres: "Re: [MTT users] autogen.sh in svn_post_export"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I recently ran into the error &quot;./configure: No such file or directory&quot;
<br>
in my nightly test build for the ibm, mpicxx, and onesided test
<br>
suites:
<br>
<p>&nbsp;&nbsp;<a href="http://www.open-mpi.org/mtt/index.php?do_redir=1169">http://www.open-mpi.org/mtt/index.php?do_redir=1169</a>
<br>
<p>This problem had something to do with autogen.sh being run in the Test
<br>
get section (different environment settings, maybe?). Moving the
<br>
autogen.sh into the Test build section (before &quot;configure&quot; in the
<br>
shell_build_command) resolved the problem. To prevent this problem,
<br>
would it be too uncouth to add pre-generated configure scripts (a la
<br>
the nightly Open MPI tarballs) in the ompi-tests repository?
<br>
<p>-Ethan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0694.php">Jeff Squyres: "Re: [MTT users] autogen.sh in svn_post_export"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2009/06/0692.php">Jeff Squyres: "Re: [MTT users] MPI inside MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0694.php">Jeff Squyres: "Re: [MTT users] autogen.sh in svn_post_export"</a>
<li><strong>Reply:</strong> <a href="0694.php">Jeff Squyres: "Re: [MTT users] autogen.sh in svn_post_export"</a>
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
