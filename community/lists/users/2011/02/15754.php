<?
$subject_val = "[OMPI users] mpirun error: &quot;error while loading shared libraries: libopen-rte.so.0: cannot open shared object file:&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb 27 16:33:22 2011" -->
<!-- isoreceived="20110227213322" -->
<!-- sent="Sun, 27 Feb 2011 13:33:14 -0800 (PST)" -->
<!-- isosent="20110227213314" -->
<!-- name="Sonyx Wonda" -->
<!-- email="sonyx_at_[hidden]" -->
<!-- subject="[OMPI users] mpirun error: &amp;quot;error while loading shared libraries: libopen-rte.so.0: cannot open shared object file:&amp;quot;" -->
<!-- id="684290.76980.qm_at_web36807.mail.mud.yahoo.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] mpirun error: &quot;error while loading shared libraries: libopen-rte.so.0: cannot open shared object file:&quot;<br>
<strong>From:</strong> Sonyx Wonda (<em>sonyx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-27 16:33:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15755.php">swagat mishra: "Re: [OMPI users] mpirun error: &quot;error while loading shared libraries: libopen-rte.so.0: cannot open shared object file:&quot;"</a>
<li><strong>Previous message:</strong> <a href="15753.php">Damien Hocking: "Re: [OMPI users] OpenMPI Binaries on Windows XP with MinGW"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15755.php">swagat mishra: "Re: [OMPI users] mpirun error: &quot;error while loading shared libraries: libopen-rte.so.0: cannot open shared object file:&quot;"</a>
<li><strong>Reply:</strong> <a href="15755.php">swagat mishra: "Re: [OMPI users] mpirun error: &quot;error while loading shared libraries: libopen-rte.so.0: cannot open shared object file:&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello!
<br>
<p>I am a newbie to openmpi and I am having some trouble running openmpi programs. 
<br>
I downloaded and installed the latest version from the web site (openmpi-1.4.3) 
<br>
and the whole process completed successfully. Both ./configure and make all 
<br>
install commands were successful. I am able to compile open-mpi codes (using 
<br>
mpicc and mpiCC) as I did with the example files provided within the source 
<br>
package, but I have a problem when it comes to actually running the executable 
<br>
created. For example, when I tried to run the &quot;hello world&quot; program using: 
<br>
mpirun -np  2 ./hello_c I got the following output:
<br>
<p>hello_c: error while loading shared libraries: libopen-rte.so.0: cannot open 
<br>
shared object file: No such file or directory
<br>
<p>(I did find the libopen-rte.so.0 file in the /usr/local/lib/ folder)
<br>
I have tried re-installing but this doesn't seem to work.
<br>
I use Linux Mandriva 2007 with the bash shell. The attached compressed folder 
<br>
contains the config.log file and the output from the ompi_info --all command 
<br>
(ompi_info.out), and below is the value of the $PATH environment variable
<br>
<p>/sbin:/usr/sbin:/bin:/usr/bin:/usr/X11R6/bin:/usr/local/bin:/usr/local/sbin:/usr/lib/qt3//bin:
<br>
<p><p>Thanks in advance for your help.
<br>
Regards.
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>

<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15754/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15754/ompi-output.tar.bz2">ompi-output.tar.bz2</a>
</ul>
<!-- attachment="ompi-output.tar.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15755.php">swagat mishra: "Re: [OMPI users] mpirun error: &quot;error while loading shared libraries: libopen-rte.so.0: cannot open shared object file:&quot;"</a>
<li><strong>Previous message:</strong> <a href="15753.php">Damien Hocking: "Re: [OMPI users] OpenMPI Binaries on Windows XP with MinGW"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15755.php">swagat mishra: "Re: [OMPI users] mpirun error: &quot;error while loading shared libraries: libopen-rte.so.0: cannot open shared object file:&quot;"</a>
<li><strong>Reply:</strong> <a href="15755.php">swagat mishra: "Re: [OMPI users] mpirun error: &quot;error while loading shared libraries: libopen-rte.so.0: cannot open shared object file:&quot;"</a>
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
