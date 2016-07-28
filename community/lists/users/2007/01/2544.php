<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jan 25 13:58:26 2007" -->
<!-- isoreceived="20070125185826" -->
<!-- sent="Thu, 25 Jan 2007 13:58:18 -0500" -->
<!-- isosent="20070125185818" -->
<!-- name="john.shin1_at_[hidden]" -->
<!-- email="john.shin1_at_[hidden]" -->
<!-- subject="[OMPI users] Trouble Building Open MPI on SGI" -->
<!-- id="e0a2aca06fd6.45b8b77a_at_us.army.mil" -->
<!-- charset="windows-1252" -->
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
<strong>From:</strong> <a href="mailto:john.shin1_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Trouble%20Building%20Open%20MPI%20on%20SGI"><em>john.shin1_at_[hidden]</em></a><br>
<strong>Date:</strong> 2007-01-25 13:58:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2545.php">Jeff Squyres: "Re: [OMPI users] Trouble Building Open MPI on SGI"</a>
<li><strong>Previous message:</strong> <a href="2543.php">Peter Kjellstrom: "[OMPI users] MPI comparison on openib"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2545.php">Jeff Squyres: "Re: [OMPI users] Trouble Building Open MPI on SGI"</a>
<li><strong>Reply:</strong> <a href="2545.php">Jeff Squyres: "Re: [OMPI users] Trouble Building Open MPI on SGI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm trying to install Open MPI 1.1.2 on an Octane 2 SGI machine running IRIX 6.5.25f and gcc 3.3.  I understand that the SGI is not officially supported by Open MPI, but I found some advice on how to overcome several problems I was facing at <a href="http://www.open-mpi.org/community/lists/users/2006/02/0729.php">http://www.open-mpi.org/community/lists/users/2006/02/0729.php</a>.  However, there's still a problem I don't know how to resolve.  I tried to build and install Open MPI using the following steps:
<br>
<p>1.	setenv FC /usr/local/bin/g95
<br>
2.	setenv F77 /usr/local/bin/g77
<br>
3.	setenv CC /usr/local/bin/gcc
<br>
4.	setenv CXX /usr/local/bin/g++
<br>
5.	./configure --prefix=/usr/local/openmpi-1.1.2-INSTALL
<br>
6.	make all
<br>
<p>After a while, the make process stops with the following error:
<br>
<p>maffinity_first_use_component.c:55: error: syntax error before &#145;,&#146; token
<br>
maffinity_first_use_component.c:61: warning: initialization makes integer from pointer without a cast
<br>
make[2]: *** [maffinity_first_use_component.lo] Error 1
<br>
make[2]: Leaving directory &#145;/usr/people/jshin/openmpi-1.1.2/opal/mca/maffinity/first_use&#146;
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory &#145;/usr/people/jshin/openmpi-1.1.2/opal&#146;
<br>
make: *** [all-recursive] Error 1
<br>
<p>What could be causing this error?  I've attached the outputs from the configure and make processes, along with my config.log file.  Any help would be much appreciated!
<br>
<p>Thanks,
<br>
<p>John Shin
<br>
<p>Walter Reed Army Institute of Research
<br>
Division of Molecular Pharmacology
<br>
Department of Biochemistry
<br>
503 Robert Grant Ave.
<br>
Silver Spring, MD 20910
<br>
Tel: 301-319-9054
<br>
<p><p>
<br><hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2544/ompi-output.tar.gz">ompi-output.tar.gz</a>
</ul>
<!-- attachment="ompi-output.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2545.php">Jeff Squyres: "Re: [OMPI users] Trouble Building Open MPI on SGI"</a>
<li><strong>Previous message:</strong> <a href="2543.php">Peter Kjellstrom: "[OMPI users] MPI comparison on openib"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2545.php">Jeff Squyres: "Re: [OMPI users] Trouble Building Open MPI on SGI"</a>
<li><strong>Reply:</strong> <a href="2545.php">Jeff Squyres: "Re: [OMPI users] Trouble Building Open MPI on SGI"</a>
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
