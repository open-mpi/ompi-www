<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Feb 22 03:53:57 2007" -->
<!-- isoreceived="20070222085357" -->
<!-- sent="Thu, 22 Feb 2007 16:53:04 +0530 (IST)" -->
<!-- isosent="20070222112304" -->
<!-- name="Sai Lakshmi. S" -->
<!-- email="sailakshmi_at_[hidden]" -->
<!-- subject="[OMPI users] Query reg. MPI for Perl" -->
<!-- id="59326.192.168.1.182.1172143384.squirrel_at_webmail.ibab.ac.in" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Sai Lakshmi. S (<em>sailakshmi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-22 06:23:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2728.php">Jeff Squyres: "Re: [OMPI users] Query reg. MPI for Perl"</a>
<li><strong>Previous message:</strong> <a href="2726.php">Eric Thibodeau: "Re: [OMPI users] Compiling HPCC with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2728.php">Jeff Squyres: "Re: [OMPI users] Query reg. MPI for Perl"</a>
<li><strong>Reply:</strong> <a href="2728.php">Jeff Squyres: "Re: [OMPI users] Query reg. MPI for Perl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am trying to install Perl Parallel::MPI::Simple (or Parallel::MPI)
<br>
module in Linux. I downloaded the modules from CPAN.
<br>
<p>I am getting the following error when i execute &quot;make test&quot;:
<br>
<p>Can't load 'blib/arch/auto/Parallel/MPI/Simple/Simple.so' for module
<br>
Parallel::MPI::Simple: blib/arch/auto/Parallel/MPI/Simple/Simple.so:
<br>
undefined symbol: _kio at
<br>
/usr/lib/perl5/5.8.5/i386-linux-thread-multi/DynaLoader.pm line 230.
<br>
&nbsp;at ic.pl line 3
<br>
Compilation failed in require at ic.pl line 3.
<br>
BEGIN failed--compilation aborted at ic.pl line 3.
<br>
<p>I tried installing the module in home directory and gave that path &quot;use
<br>
lib /home/path/Parallel::MPI::Simple&quot; as the first line of the perl
<br>
program. I encountered the following error for &quot;mpirun n1 perl test.pl&quot; :
<br>
<p>&quot;Undefined subroutine &amp;main::MPI_Init called at test.pl line 4.&quot;
<br>
<p><p>Any help to solve this issue would be greatly appreciated.
<br>
<p>Thanks in advance.
<br>
Sai
<br>
<p><p><p>Thanks and Regards,
<br>
<p>Sai Lakshmi. S
<br>
Research Assistant
<br>
Institute of Bioinformatics and Applied Biotechnology
<br>
G-05, Tech Park Mall, ITPB,
<br>
Whitefield Road, Bangalore 560 066, India.
<br>
Tel: +91 (80) 2841-0029, 2841-2769
<br>
Fax: +91 (80) 2841-2761
<br>
www.ibab.ac.in
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2728.php">Jeff Squyres: "Re: [OMPI users] Query reg. MPI for Perl"</a>
<li><strong>Previous message:</strong> <a href="2726.php">Eric Thibodeau: "Re: [OMPI users] Compiling HPCC with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2728.php">Jeff Squyres: "Re: [OMPI users] Query reg. MPI for Perl"</a>
<li><strong>Reply:</strong> <a href="2728.php">Jeff Squyres: "Re: [OMPI users] Query reg. MPI for Perl"</a>
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
