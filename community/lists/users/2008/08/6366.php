<?
$subject_val = "[OMPI users] Q: OpenMPI's use of /tmp and hanging apps via FS problems?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug 16 15:41:03 2008" -->
<!-- isoreceived="20080816194103" -->
<!-- sent="Sat, 16 Aug 2008 15:40:58 -0400" -->
<!-- isosent="20080816194058" -->
<!-- name="Brian Dobbins" -->
<!-- email="bdobbins_at_[hidden]" -->
<!-- subject="[OMPI users] Q: OpenMPI's use of /tmp and hanging apps via FS problems?" -->
<!-- id="2b5e0c120808161240h54be8806se5db96a4b776dfe9_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Q: OpenMPI's use of /tmp and hanging apps via FS problems?<br>
<strong>From:</strong> Brian Dobbins (<em>bdobbins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-16 15:40:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6367.php">Andy Georgi: "[OMPI users] TCP Bandwidth"</a>
<li><strong>Previous message:</strong> <a href="6365.php">Ashley Pittman: "Re: [OMPI users] problem with alltoall with ppn=8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6373.php">George Bosilca: "Re: [OMPI users] Q: OpenMPI's use of /tmp and hanging apps via FS problems?"</a>
<li><strong>Reply:</strong> <a href="6373.php">George Bosilca: "Re: [OMPI users] Q: OpenMPI's use of /tmp and hanging apps via FS problems?"</a>
<li><strong>Reply:</strong> <a href="6378.php">Ralph Castain: "Re: [OMPI users] Q: OpenMPI's use of /tmp and hanging apps via FS problems?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi guys,
<br>
<p>&nbsp;&nbsp;I was hoping someone here could shed some light on OpenMPI's use of /tmp
<br>
(or, I guess, TMPDIR) and save me from diving into the source.. ;)
<br>
<p>&nbsp;&nbsp;The background is that I'm trying to run some applications on a system
<br>
which has a flaky parallel file system which TMPDIR is mapped to - so, on
<br>
start up, OpenMPI creates it's 'openmpi-sessions-&lt;user&gt;' directory there,
<br>
and under that, a few files.  Sometimes I see 1 subdirectory (usually a 0),
<br>
sometimes a 0 and a 1, etc.  In one of these, sometimes I see files such as
<br>
'shared_memory_pool.&lt;host&gt;', and 'shared_memory_module.&lt;host&gt;'.
<br>
<p>&nbsp;&nbsp;My questions are, one, what are the various numbers / files for?  (If
<br>
there's a write-up on this somewhere, just point me towards it!)
<br>
<p>&nbsp;&nbsp;And two, the real question, are these 'files' used during runtime, or only
<br>
upon startup / shutdown?  I'm having issues with various codes, especially
<br>
those heavy on messages and I/O, failing to complete a run, and haven't
<br>
resorted to sifting through strace's output yet.  This doesn't happen all
<br>
the time, but I've seen it happen reliably now with one particular code -
<br>
it's success rate (it DOES succeed sometimes) is about 25% right now.  My
<br>
best guess is that this is because the file system is overloaded, thus not
<br>
allowing timely I/O or access to OpenMPI's files, but I wanted to get a
<br>
quick understanding of how these files are used by OpenMPI and whether the
<br>
FS does indeed seem a likely culprit before going with that theory for sure.
<br>
<p>&nbsp;&nbsp;Thanks very much,
<br>
&nbsp;&nbsp;- Brian
<br>
<p><p>Brian Dobbins
<br>
Yale Engineering HPC
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6366/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6367.php">Andy Georgi: "[OMPI users] TCP Bandwidth"</a>
<li><strong>Previous message:</strong> <a href="6365.php">Ashley Pittman: "Re: [OMPI users] problem with alltoall with ppn=8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6373.php">George Bosilca: "Re: [OMPI users] Q: OpenMPI's use of /tmp and hanging apps via FS problems?"</a>
<li><strong>Reply:</strong> <a href="6373.php">George Bosilca: "Re: [OMPI users] Q: OpenMPI's use of /tmp and hanging apps via FS problems?"</a>
<li><strong>Reply:</strong> <a href="6378.php">Ralph Castain: "Re: [OMPI users] Q: OpenMPI's use of /tmp and hanging apps via FS problems?"</a>
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
