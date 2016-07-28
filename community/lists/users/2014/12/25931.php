<?
$subject_val = "[OMPI users] Cannot open configuration file - openmpi/mpic++-wrapper-data.txt";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  9 01:26:57 2014" -->
<!-- isoreceived="20141209062657" -->
<!-- sent="Tue, 9 Dec 2014 11:56:35 +0530" -->
<!-- isosent="20141209062635" -->
<!-- name="Manoj Vaghela" -->
<!-- email="manoj.vaghela_at_[hidden]" -->
<!-- subject="[OMPI users] Cannot open configuration file - openmpi/mpic++-wrapper-data.txt" -->
<!-- id="CAJfsQWRk0APCoaox0g3VA+qTPdofevO91JQxq1eQfBqS9znUQw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Cannot open configuration file - openmpi/mpic++-wrapper-data.txt<br>
<strong>From:</strong> Manoj Vaghela (<em>manoj.vaghela_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-09 01:26:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25932.php">Reuti: "Re: [OMPI users] Cannot open configuration file - openmpi/mpic++-wrapper-data.txt"</a>
<li><strong>Previous message:</strong> <a href="25930.php">Gilles Gouaillardet: "Re: [OMPI users] Warning about not enough registerable memory on SL6.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25932.php">Reuti: "Re: [OMPI users] Cannot open configuration file - openmpi/mpic++-wrapper-data.txt"</a>
<li><strong>Reply:</strong> <a href="25932.php">Reuti: "Re: [OMPI users] Cannot open configuration file - openmpi/mpic++-wrapper-data.txt"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi OpenMPI Users,
<br>
<p>I am trying to build OpenMPI libraries using standard configuration and
<br>
compile procedure. It is just the one thing that I want to install all in a
<br>
user specified path like following:
<br>
<p>OMPI_DIR is something like $HOME/Shared_Build/openmpi-1.8.3
<br>
<p>[OMPI_DIR] $ ./configure --prefix=$PWD/linux_x64
<br>
<p>It all went successfully and it installed all in the path above.
<br>
<p>I then moved the linux_x64 folder to location $HOME/mpi/openmpi/1.8.3. Now
<br>
the path of installation is $HOME/mpi/openmpi/1.8.3/linux_x64
<br>
<p>I added PATH and LD_LIBRARY_PATH as below:
<br>
<p>export PATH=$HOME/mpi/openmpi/1.8.3/linux_x64/bin:$PATH
<br>
export LD_LIBRARY_PATH=$HOME/mpi/openmpi/1.8.3/linux_x64/lib
<br>
<p>which when using mpic++ command gives following:
<br>
<p>Cannot open configuration file
<br>
/home/manoj//linux_x64/share/openmpi/mpic++-wrapper-data.txt
<br>
Error parsing data file mpic++: Not found
<br>
<p>This shows the OLD installation path for which --prefix was specified. Now
<br>
the installation folder moved to NEW path. But still searches the same OLD
<br>
location.
<br>
<p>I searched on the web, but with that info (./configure --with-devel-headers
<br>
--enable-binaries did not work and gave the same issue)
<br>
<p>This question may be a repeat but please experts guide me. I also will need
<br>
to copy linux_x64 folder to other similar machine from which these
<br>
libraries can be used to compile and run application without compiling the
<br>
whole source code.
<br>
<p>Thanks.
<br>
<p><pre>
--
regards,
Manoj
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25931/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25932.php">Reuti: "Re: [OMPI users] Cannot open configuration file - openmpi/mpic++-wrapper-data.txt"</a>
<li><strong>Previous message:</strong> <a href="25930.php">Gilles Gouaillardet: "Re: [OMPI users] Warning about not enough registerable memory on SL6.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25932.php">Reuti: "Re: [OMPI users] Cannot open configuration file - openmpi/mpic++-wrapper-data.txt"</a>
<li><strong>Reply:</strong> <a href="25932.php">Reuti: "Re: [OMPI users] Cannot open configuration file - openmpi/mpic++-wrapper-data.txt"</a>
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
