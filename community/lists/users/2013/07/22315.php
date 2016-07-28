<?
$subject_val = "[OMPI users] Open MPI 1.6.5 &quot;make all&quot; fails on Win7 with &quot;system cannot find file specified&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 11 05:15:18 2013" -->
<!-- isoreceived="20130711091518" -->
<!-- sent="Thu, 11 Jul 2013 18:15:11 +0900" -->
<!-- isosent="20130711091511" -->
<!-- name="Don Warren" -->
<!-- email="don.warren_at_[hidden]" -->
<!-- subject="[OMPI users] Open MPI 1.6.5 &amp;quot;make all&amp;quot; fails on Win7 with &amp;quot;system cannot find file specified&amp;quot;" -->
<!-- id="22549_1373534118_r6B9FDKw008855_CAHjMdoPtZCUQTYJX9ksP3vYEhYLb4bFDQXb=hNa87-9DdT6GJQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Open MPI 1.6.5 &quot;make all&quot; fails on Win7 with &quot;system cannot find file specified&quot;<br>
<strong>From:</strong> Don Warren (<em>don.warren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-11 05:15:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22316.php">marco atzeri: "Re: [OMPI users] Open MPI 1.6.5 &quot;make all&quot; fails on Win7 with &quot;system cannot find file specified&quot;"</a>
<li><strong>Previous message:</strong> <a href="22314.php">Shamis, Pavel: "Re: [OMPI users] using the xrc queues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22316.php">marco atzeri: "Re: [OMPI users] Open MPI 1.6.5 &quot;make all&quot; fails on Win7 with &quot;system cannot find file specified&quot;"</a>
<li><strong>Reply:</strong> <a href="22316.php">marco atzeri: "Re: [OMPI users] Open MPI 1.6.5 &quot;make all&quot; fails on Win7 with &quot;system cannot find file specified&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello, all,
<br>
<p>I'm attempting to install Open MPI in a cygwin environment on Windows 7
<br>
(64-bit, but I think Open MPI is treating things like a 32-bit environment).
<br>
<p>The command I used to configure Open MPI was
<br>
-----------------------
<br>
./configure --with-mpi-f90-size=medium -prefix=/home/Don/openmpi
<br>
F77=gfortran FC=gfortran
<br>
-----------------------
<br>
<p>This allowed the configure script to finish without crashing out partway
<br>
through. (Omitting the F77 and FC flags *did* cause an aborted
<br>
configuration because of some sort of mismatch between 32-byte complex
<br>
types in C++ and Fortran...?)
<br>
<p>I then attempted to run &quot;make all&quot;, and the process halts with the
<br>
following error:
<br>
----------------------
<br>
Making all in mca/backtrace
<br>
make[2]: Entering directory
<br>
`C:/FLASH/Utilities/openmpi-1.6.5/opal/mca/backtrace'
<br>
process_begin: CreateProcess(NULL, /usr/bin/mkdir -p base, ...) failed.
<br>
make (e=2): The system cannot find the file specified.
<br>
make[2]: *** [base/.dirstamp] Error 2
<br>
make[2]: Leaving directory
<br>
`C:/FLASH/Utilities/openmpi-1.6.5/opal/mca/backtrace'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `C:/FLASH/Utilities/openmpi-1.6.5/opal'
<br>
make: *** [all-recursive] Error 1
<br>
----------------------
<br>
<p>I am attaching {config.out, config.log, make.out} as requested in the
<br>
&quot;Getting Help&quot; page.  Any explanation of what's going on would be greatly
<br>
appreciated.  Advice on how to fix this problem would be even more
<br>
appreciated.
<br>
<p>Thanks very much,
<br>
Don Warren
<br>
<p><p>*****************************************************************************
<br>
**                                                                         **
<br>
** WARNING:  This email contains an attachment of a very suspicious type.  **
<br>
** You are urged NOT to open this attachment unless you are absolutely     **
<br>
** sure it is legitimate.  Opening this attachment may cause irreparable   **
<br>
** damage to your computer and your files.  If you have any questions      **
<br>
** about the validity of this message, PLEASE SEEK HELP BEFORE OPENING IT. **
<br>
**                                                                         **
<br>
** This warning was added by the IU Computer Science Dept. mail scanner.   **
<br>
*****************************************************************************
<br>
<p><p><p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22315/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/zip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22315/output.zip">output.zip</a>
</ul>
<!-- attachment="output.zip" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22316.php">marco atzeri: "Re: [OMPI users] Open MPI 1.6.5 &quot;make all&quot; fails on Win7 with &quot;system cannot find file specified&quot;"</a>
<li><strong>Previous message:</strong> <a href="22314.php">Shamis, Pavel: "Re: [OMPI users] using the xrc queues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22316.php">marco atzeri: "Re: [OMPI users] Open MPI 1.6.5 &quot;make all&quot; fails on Win7 with &quot;system cannot find file specified&quot;"</a>
<li><strong>Reply:</strong> <a href="22316.php">marco atzeri: "Re: [OMPI users] Open MPI 1.6.5 &quot;make all&quot; fails on Win7 with &quot;system cannot find file specified&quot;"</a>
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
