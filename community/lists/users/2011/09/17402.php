<?
$subject_val = "[OMPI users] PATH settings";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 22 23:06:39 2011" -->
<!-- isoreceived="20110923030639" -->
<!-- sent="Thu, 22 Sep 2011 20:06:34 -0700" -->
<!-- isosent="20110923030634" -->
<!-- name="Martin Siegert" -->
<!-- email="siegert_at_[hidden]" -->
<!-- subject="[OMPI users] PATH settings" -->
<!-- id="20110923030634.GA13653_at_stikine.sfu.ca" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] PATH settings<br>
<strong>From:</strong> Martin Siegert (<em>siegert_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-22 23:06:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17403.php">Uday Kumar Reddy B: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<li><strong>Previous message:</strong> <a href="17401.php">Tom Hilinski: "[OMPI users] on cluster job slowdown near end"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17422.php">Jeff Squyres: "Re: [OMPI users] PATH settings"</a>
<li><strong>Reply:</strong> <a href="17422.php">Jeff Squyres: "Re: [OMPI users] PATH settings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am trying to figure out how openmpi (1.4.3) sets its PATH
<br>
for executables. From the man page:
<br>
<p>Locating Files
<br>
&nbsp;&nbsp;&nbsp;&nbsp;If no relative or absolute path is specified for a file, Open MPI  will
<br>
&nbsp;&nbsp;&nbsp;&nbsp;first  look  for  files  by  searching the directories specified by the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--path option.  If there is no --path option set or if the file is  not
<br>
&nbsp;&nbsp;&nbsp;&nbsp;found at the --path location, then Open MPI will search the user&#226;&#128;&#153;s PATH
<br>
&nbsp;&nbsp;&nbsp;&nbsp;environment variable as defined on the source node(s).
<br>
<p>This does not appear to be entirely correct - as far as I can tell
<br>
openmpi always prepends its own bin directory to the PATH before
<br>
searching for the executable. Can that be switched off?
<br>
<p>Furthermore, openmpi appears to use
<br>
a) the current value of PATH on the node where mpiexec is running;
<br>
b) whatever PATH is used by ssh on the remote nodes.
<br>
<p>Correct?
<br>
<p>Thus,
<br>
<p>export PATH=/path/to/special/bin:$PATH
<br>
mpiexec -n 2 -H n1,n2 special
<br>
<p>(n1 being the local node)
<br>
will usually fail even if the directory structure is identical on
<br>
the two nodes. For this to work
<br>
<p>mpiexec -n 2 -H n1,n2 -x PATH special
<br>
<p>is necessary.
<br>
<p>What I would like to see is a configure option that allows me to configure
<br>
openmpi such that the current PATH on the node where mpiexec is running
<br>
is used as the PATH on all nodes (by default). Or is there a reason why
<br>
that is a really bad idea?
<br>
<p>Cheers,
<br>
Martin
<br>
<p><pre>
-- 
Martin Siegert
Head, Research Computing
WestGrid/ComputeCanada Site Lead
IT Services                                phone: 778 782-4691
Simon Fraser University                    fax:   778 782-4242
Burnaby, British Columbia                  email: siegert_at_[hidden]
Canada  V5A 1S6
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17403.php">Uday Kumar Reddy B: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<li><strong>Previous message:</strong> <a href="17401.php">Tom Hilinski: "[OMPI users] on cluster job slowdown near end"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17422.php">Jeff Squyres: "Re: [OMPI users] PATH settings"</a>
<li><strong>Reply:</strong> <a href="17422.php">Jeff Squyres: "Re: [OMPI users] PATH settings"</a>
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
