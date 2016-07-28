<?
$subject_val = "Re: [OMPI users] memchecker overhead?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 26 15:59:20 2009" -->
<!-- isoreceived="20091026195920" -->
<!-- sent="Mon, 26 Oct 2009 13:59:16 -0600" -->
<!-- isosent="20091026195916" -->
<!-- name="Samuel K. Gutierrez" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] memchecker overhead?" -->
<!-- id="27F807EB-2CED-4767-AF05-F45BC38BFA2E_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4AE5FB7F.1000603_at_59A2.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] memchecker overhead?<br>
<strong>From:</strong> Samuel K. Gutierrez (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-26 15:59:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10972.php">Jed Brown: "Re: [OMPI users] memchecker overhead?"</a>
<li><strong>Previous message:</strong> <a href="10970.php">Jed Brown: "Re: [OMPI users] memchecker overhead?"</a>
<li><strong>In reply to:</strong> <a href="10970.php">Jed Brown: "Re: [OMPI users] memchecker overhead?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10972.php">Jed Brown: "Re: [OMPI users] memchecker overhead?"</a>
<li><strong>Reply:</strong> <a href="10972.php">Jed Brown: "Re: [OMPI users] memchecker overhead?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jed,
<br>
<p>I'm not sure if this will help, but it's worth a try.  Turn off OMPI's  
<br>
memory wrapper and see what happens.
<br>
<p>c-like shell
<br>
setenv OMPI_MCA_memory_ptmalloc2_disable 1
<br>
<p>bash-like shell
<br>
export OMPI_MCA_memory_ptmalloc2_disable=1
<br>
<p>Also add the following MCA parameter to you run command.
<br>
<p>--mca mpi_leave_pinned 0
<br>
<p><pre>
--
Samuel K. Gutierrez
Los Alamos National Laboratory
On Oct 26, 2009, at 1:41 PM, Jed Brown wrote:
&gt; Jeff Squyres wrote:
&gt;&gt; Using --enable-debug adds in a whole pile of developer-level run-time
&gt;&gt; checking and whatnot.  You probably don't want that on production  
&gt;&gt; runs.
&gt;
&gt; I have found that --enable-debug --enable-memchecker actually produces
&gt; more valgrind noise than leaving them off.  Are there options to make
&gt; Open MPI strict about initializing and freeing memory?  At one point I
&gt; tried to write policy files, but even with judicious globbing, I kept
&gt; getting different warnings when run on a different program.  (All  
&gt; these
&gt; codes were squeaky-clean under MPICH2.)
&gt;
&gt; Jed
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10972.php">Jed Brown: "Re: [OMPI users] memchecker overhead?"</a>
<li><strong>Previous message:</strong> <a href="10970.php">Jed Brown: "Re: [OMPI users] memchecker overhead?"</a>
<li><strong>In reply to:</strong> <a href="10970.php">Jed Brown: "Re: [OMPI users] memchecker overhead?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10972.php">Jed Brown: "Re: [OMPI users] memchecker overhead?"</a>
<li><strong>Reply:</strong> <a href="10972.php">Jed Brown: "Re: [OMPI users] memchecker overhead?"</a>
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
