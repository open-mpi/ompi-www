<?
$subject_val = "Re: [OMPI users] compile openmpi with a gcc that is not default gcc??";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep 27 18:58:28 2008" -->
<!-- isoreceived="20080927225828" -->
<!-- sent="Sun, 28 Sep 2008 00:58:28 +0200" -->
<!-- isosent="20080927225828" -->
<!-- name="Fabian H&#195;&#164;nsel" -->
<!-- email="fabian.haensel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] compile openmpi with a gcc that is not default gcc??" -->
<!-- id="20080928005828.77701bad.fabian.haensel_at_zih.tu-dresden.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="98534.65971.qm_at_web34801.mail.mud.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] compile openmpi with a gcc that is not default gcc??<br>
<strong>From:</strong> Fabian H&#195;&#164;nsel (<em>fabian.haensel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-27 18:58:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6751.php">Zhiliang Hu: "[OMPI users] qsub - mpirun problem"</a>
<li><strong>Previous message:</strong> <a href="6749.php">Doug Reeder: "Re: [OMPI users] compile openmpi with a gcc that is not default gcc??"</a>
<li><strong>In reply to:</strong> <a href="6748.php">Shafagh Jafer: "[OMPI users] compile openmpi with a gcc that is not default gcc??"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6789.php">Jeff Squyres: "Re: [OMPI users] MPI_ERR_TRUNCATE on MPI_Testsome"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hej,
<br>
<p><span class="quotelev1">&gt; My default gcc is 2.95.3, so I installed a newer version in my own
</span><br>
<span class="quotelev1">&gt; home directory, it's gcc-3.4.4. Now I want to install openmpi and
</span><br>
<span class="quotelev1">&gt; compile it with this new version. I dont know how to force it not to
</span><br>
<p>You do generally compile and install openmpi (and many other free
<br>
software) by running
<br>
<p>&nbsp;&nbsp;./configure
<br>
&nbsp;&nbsp;make
<br>
&nbsp;&nbsp;make install
<br>
<p>where configure looks for your system's peculiarities. Just tell
<br>
configure to use your own gcc by e.g. setting an environment variable:
<br>
<p>&nbsp;&nbsp;export CC=/home/mine/gcc/gcc
<br>
&nbsp;&nbsp;./configure
<br>
<p>hint: you can also tell configure where to install openmpi with prefix,
<br>
e.g.
<br>
<p>&nbsp;&nbsp;export CC=/home/mine/gcc/gcc
<br>
&nbsp;&nbsp;./configure --prefix=/home/mine/openmpi/
<br>
<p>Maybe you'll have to set other env vars as well (if your system's
<br>
linker e.g. does not like the new gcc). For more information have a
<br>
look at configure's help (./configure --help)
<br>
<p>Best regards
<br>
&nbsp;&nbsp;Fabian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6751.php">Zhiliang Hu: "[OMPI users] qsub - mpirun problem"</a>
<li><strong>Previous message:</strong> <a href="6749.php">Doug Reeder: "Re: [OMPI users] compile openmpi with a gcc that is not default gcc??"</a>
<li><strong>In reply to:</strong> <a href="6748.php">Shafagh Jafer: "[OMPI users] compile openmpi with a gcc that is not default gcc??"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6789.php">Jeff Squyres: "Re: [OMPI users] MPI_ERR_TRUNCATE on MPI_Testsome"</a>
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
