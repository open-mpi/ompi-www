<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct 31 12:08:59 2006" -->
<!-- isoreceived="20061031170859" -->
<!-- sent="Tue, 31 Oct 2006 18:08:50 +0100" -->
<!-- isosent="20061031170850" -->
<!-- name="Florian Fleissner" -->
<!-- email="fleissner_at_[hidden]" -->
<!-- subject="[OMPI users] ompi_info fails: ...invalid ELF header (ignored)" -->
<!-- id="45478322.5000705_at_itm.uni-stuttgart.de" -->
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
<strong>From:</strong> Florian Fleissner (<em>fleissner_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-31 12:08:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2093.php">Jeff Squyres: "Re: [OMPI users] [openib-general] psm.h not found"</a>
<li><strong>Previous message:</strong> <a href="2091.php">Galen M. Shipman: "Re: [OMPI users] Fault Tolerance &amp; Behavior"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2095.php">Rainer Keller: "Re: [OMPI users] ompi_info fails: ...invalid ELF header (ignored)"</a>
<li><strong>Reply:</strong> <a href="2095.php">Rainer Keller: "Re: [OMPI users] ompi_info fails: ...invalid ELF header (ignored)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I sucessfully build and installed OpenMPI on a Debian machine running Sarge.
<br>
<p><span class="quotelev1">  &gt; uname -a
</span><br>
<span class="quotelev1">  &gt; Linux karush 2.6.11-1-686-smp #1 SMP Mon Jun 20 20:18:45 MDT 2005 
</span><br>
i686 GNU/Linux
<br>
<p>As I am not root, I installed OpenMPI into my home to ~/bin/OpenMPI. I
<br>
added ..../OpenMPI/bin to my PATH and ..../OpenMPI/lib to my
<br>
LD_LIBRARY_PATH.
<br>
<p>Unfortunately ompi_info failed, complaining that it cannot find some
<br>
libraries that are obviously installed in ..../OpenMPI/lib/openmpi .
<br>
Although all installation manuals I found only require ..../OpenMPI/lib
<br>
to be added to LD_LIBRARY_PATH, I tried adding the subdirectory
<br>
..../lib/openmpi to LD_LIBRARY_PATH as well.
<br>
The result is that now the libraries seem to be found but ompi_info
<br>
still complains about the libraries to have &quot;invalid ELF header&quot; (see
<br>
attached output of ompi_info).
<br>
<p>Is there anything that I have to configure additionally to make it run?
<br>
Unfortunately I am not familiar with libtool's load mechanism for .la libs.
<br>
<p>Thanks for any help in advance.
<br>
<p>Yours
<br>
Florian Fleissner
<br>
<p><pre>
-- 
---------------------------------------------------
   Dipl.-Ing. Florian Flei&#223;ner
   Institut f&#252;r Technische und Numerische Mechanik
   Universit&#228;t Stuttgart
   Pfaffenwaldring 9
   70550 Stuttgart
   Deutschland
   Zimmer: 4.120
   Tel: 0711/685-66395, Fax 685-66400
   URL: <a href="http://www.itm.uni-stuttgart.de">http://www.itm.uni-stuttgart.de</a>
   email: fleissner_at_[hidden]
---------------------------------------------------

</pre>
<hr>
<ul>
<li>application/x-compressed attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2092/ompi.tgz">ompi.tgz</a>
</ul>
<!-- attachment="ompi.tgz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2093.php">Jeff Squyres: "Re: [OMPI users] [openib-general] psm.h not found"</a>
<li><strong>Previous message:</strong> <a href="2091.php">Galen M. Shipman: "Re: [OMPI users] Fault Tolerance &amp; Behavior"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2095.php">Rainer Keller: "Re: [OMPI users] ompi_info fails: ...invalid ELF header (ignored)"</a>
<li><strong>Reply:</strong> <a href="2095.php">Rainer Keller: "Re: [OMPI users] ompi_info fails: ...invalid ELF header (ignored)"</a>
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
