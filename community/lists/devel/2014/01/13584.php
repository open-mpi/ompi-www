<?
$subject_val = "Re: [OMPI devel] Missing --bycore option in Open MPI 1.7.?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  8 09:10:44 2014" -->
<!-- isoreceived="20140108141044" -->
<!-- sent="Wed, 8 Jan 2014 15:10:41 +0100 (CET)" -->
<!-- isosent="20140108141041" -->
<!-- name="Christoph Niethammer" -->
<!-- email="niethammer_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Missing --bycore option in Open MPI 1.7.?" -->
<!-- id="2002169187.168806.1389190241439.JavaMail.root_at_hlrs.de" -->
<!-- charset="utf-8" -->
<!-- inreplyto="1081860238.168150.1389188994765.JavaMail.root_at_hlrs.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Missing --bycore option in Open MPI 1.7.?<br>
<strong>From:</strong> Christoph Niethammer (<em>niethammer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-08 09:10:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13585.php">Nathan Hjelm: "Re: [OMPI devel] RFC: OB1 optimizations"</a>
<li><strong>Previous message:</strong> <a href="13583.php">Christoph Niethammer: "[OMPI devel] Missing --bycore option in Open MPI 1.7.?"</a>
<li><strong>In reply to:</strong> <a href="13583.php">Christoph Niethammer: "[OMPI devel] Missing --bycore option in Open MPI 1.7.?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Just found the following ticket which answers my question:
<br>
<a href="https://svn.open-mpi.org/trac/ompi/ticket/4044">https://svn.open-mpi.org/trac/ompi/ticket/4044</a>
<br>
<p>Sorry for spam. :/
<br>
<p>Regards
<br>
Christoph
<br>
<p><p>----- Urspr&#195;&#188;ngliche Mail -----
<br>
Von: &quot;Christoph Niethammer&quot; &lt;niethammer_at_[hidden]&gt;
<br>
An: &quot;Open MPI Developers&quot; &lt;devel_at_[hidden]&gt;
<br>
Gesendet: Mittwoch, 8. Januar 2014 14:49:54
<br>
Betreff: Missing --bycore option in Open MPI 1.7.?
<br>
<p>Hello
<br>
<p>Using Open MPI 1.7.3 I got the following error message when executing
<br>
mpirun -np 16 --bycore /bin/hostname
<br>
<p>mpirun: Error: unknown option &quot;--bycore&quot;
<br>
<p>The option is documented in the man pages and with Open MPI 1.6.5 everything works fine.
<br>
For --bysocket I get the same error but --bynode seems to be working.
<br>
Is this option on the way to be removed?
<br>
<p>Regards
<br>
Christoph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13585.php">Nathan Hjelm: "Re: [OMPI devel] RFC: OB1 optimizations"</a>
<li><strong>Previous message:</strong> <a href="13583.php">Christoph Niethammer: "[OMPI devel] Missing --bycore option in Open MPI 1.7.?"</a>
<li><strong>In reply to:</strong> <a href="13583.php">Christoph Niethammer: "[OMPI devel] Missing --bycore option in Open MPI 1.7.?"</a>
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
