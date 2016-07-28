<?
$subject_val = "[OMPI users] Cygwin compilation problems for openmpi-1.8";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr 12 12:42:10 2014" -->
<!-- isoreceived="20140412164210" -->
<!-- sent="Sat, 12 Apr 2014 09:42:09 -0700 (PDT)" -->
<!-- isosent="20140412164209" -->
<!-- name="Cristian Butincu" -->
<!-- email="cbutincu_at_[hidden]" -->
<!-- subject="[OMPI users] Cygwin compilation problems for openmpi-1.8" -->
<!-- id="1397320929.84848.YahooMailNeo_at_web164905.mail.bf1.yahoo.com" -->
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
<strong>Subject:</strong> [OMPI users] Cygwin compilation problems for openmpi-1.8<br>
<strong>From:</strong> Cristian Butincu (<em>cbutincu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-12 12:42:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24166.php">Marco Atzeri: "Re: [OMPI users] Cygwin compilation problems for openmpi-1.8"</a>
<li><strong>Previous message:</strong> <a href="24164.php">Saliya Ekanayake: "Re: [OMPI users] Optimal mapping/binding when threads are used?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24166.php">Marco Atzeri: "Re: [OMPI users] Cygwin compilation problems for openmpi-1.8"</a>
<li><strong>Reply:</strong> <a href="24166.php">Marco Atzeri: "Re: [OMPI users] Cygwin compilation problems for openmpi-1.8"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello.

The latest precompiled version to date of openmpi for cygwin is 1.7.4-1.
Because I got some runtime errors when trying to run simple MPI programs, I have decided to upgrade to openmpi-1.8.


When trying to compile openmpi-1.8 under cygwin I get the following error during &quot;make all&quot; and the build process halts:
Error: symbol `Lhwloc1' is already defined

The commands issued:
&#160;./configure --prefix=$HOME/Apps/openmpi-1.8
&#160;make all


Platform:
&#160;Operating system: Windows 8, 32 bits
&#160;CPU: Intel Core2 Duo
&#160;Memory: 4 GB
&#160;Cygwin version: 1.7.29

I have attached to this message an archive containing the output of config and build processes.
Thank you.

<br>

<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24165/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24165/ompi-output.tar.bz2">ompi-output.tar.bz2</a>
</ul>
<!-- attachment="ompi-output.tar.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24166.php">Marco Atzeri: "Re: [OMPI users] Cygwin compilation problems for openmpi-1.8"</a>
<li><strong>Previous message:</strong> <a href="24164.php">Saliya Ekanayake: "Re: [OMPI users] Optimal mapping/binding when threads are used?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24166.php">Marco Atzeri: "Re: [OMPI users] Cygwin compilation problems for openmpi-1.8"</a>
<li><strong>Reply:</strong> <a href="24166.php">Marco Atzeri: "Re: [OMPI users] Cygwin compilation problems for openmpi-1.8"</a>
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
