<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Feb 28 19:45:31 2006" -->
<!-- isoreceived="20060301004531" -->
<!-- sent="Tue, 28 Feb 2006 17:45:26 -0700" -->
<!-- isosent="20060301004526" -->
<!-- name="Durga Choudhury" -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="[OMPI users] Question and possible bugfix patches..." -->
<!-- id="f869b68c0602281645j38b28da8q7751f425a4add49c_at_mail.gmail.com" -->
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
<strong>From:</strong> Durga Choudhury (<em>dpchoudh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-28 19:45:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0730.php">Brian Barrett: "Re: [OMPI users] Question and possible bugfix patches..."</a>
<li><strong>Previous message:</strong> <a href="0728.php">George Bosilca: "Re: [OMPI users] MPI_COMM_SPAWN versus OpenMPI 1.0.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0730.php">Brian Barrett: "Re: [OMPI users] Question and possible bugfix patches..."</a>
<li><strong>Reply:</strong> <a href="0730.php">Brian Barrett: "Re: [OMPI users] Question and possible bugfix patches..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi All
<br>
<p>I am a total novice to the MPI world, so please forgive me if any of my
<br>
questions/comments sound stupid.
<br>
<p>First, a few *possible* bugfixes:
<br>
<p>When I downloaded openMPI and tried to compile it for our MIPS64 platform,
<br>
it broke at 3 places.
<br>
<p>1. The configure script in the root directory did not have a case for
<br>
MIPS64. That is fixed in the attached patch.configure patch file.
<br>
2. The Makefile.am in opal/asm/ directory is incorrect. It creates a
<br>
platform-dependent file called atomic-asm.s that has #include's in it.
<br>
According to gcc manual, .s assembly files are NOT preprocessed and hence
<br>
none of the macros in the atomic-asm.s file were expanded.
<br>
Note that it works fine for IA32 platforms because that version of
<br>
atomic-asm.s file does not have macros in it. The patch.Makefile.am fixes
<br>
this. Note that you need to rerun automake after patching this file.
<br>
3. I don't remember the third place it broke right now. I can give out a
<br>
third patch later.
<br>
<p>Now the question is: Is there a benchmark program I can run for the openMPI
<br>
suite of library? I tried NetPipe from Ameslab.gov. It seems to run, but it
<br>
terminates without producing any output, either to the console or to any
<br>
file. I tried specifying the output file explicitly with the -o option, but
<br>
to no avail.
<br>
<p>Any help is deeply appreciated.
<br>
<p>Thanks
<br>
<p>Durga
<br>
<p>N.B. I noticed from the mailing list archive that there are other people in
<br>
this mailing list who are interested in the MIPS64 architecture. I would
<br>
especially love hearing from them in off-line conversations.
<br>
<pre>
--
Devil wanted omnipresence;
He therefore created communists.
</pre>
<p>
<p>

<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0729/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0729/patch.configure">patch.configure</a>
</ul>
<!-- attachment="patch.configure" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0729/patch.Makefile.am">patch.Makefile.am</a>
</ul>
<!-- attachment="patch.Makefile.am" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0730.php">Brian Barrett: "Re: [OMPI users] Question and possible bugfix patches..."</a>
<li><strong>Previous message:</strong> <a href="0728.php">George Bosilca: "Re: [OMPI users] MPI_COMM_SPAWN versus OpenMPI 1.0.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0730.php">Brian Barrett: "Re: [OMPI users] Question and possible bugfix patches..."</a>
<li><strong>Reply:</strong> <a href="0730.php">Brian Barrett: "Re: [OMPI users] Question and possible bugfix patches..."</a>
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
