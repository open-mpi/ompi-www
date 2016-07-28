<?
$subject_val = "[OMPI users] Checkpoint/Restart in OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 30 04:51:40 2009" -->
<!-- isoreceived="20091030085140" -->
<!-- sent="Fri, 30 Oct 2009 01:51:35 -0700 (PDT)" -->
<!-- isosent="20091030085135" -->
<!-- name="Andreea m. \(Costea\)" -->
<!-- email="doodlie_snew_at_[hidden]" -->
<!-- subject="[OMPI users] Checkpoint/Restart in OpenMPI" -->
<!-- id="57272.88433.qm_at_web54306.mail.re2.yahoo.com" -->
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
<strong>Subject:</strong> [OMPI users] Checkpoint/Restart in OpenMPI<br>
<strong>From:</strong> Andreea m. \(Costea\) (<em>doodlie_snew_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-30 04:51:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11013.php">Sergio Díaz: "Re: [OMPI users] Checkpoint/Restart in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="11011.php">Brock Palen: "Re: [OMPI users] mpi functions are slow when first called and become normal afterwards"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11013.php">Sergio Díaz: "Re: [OMPI users] Checkpoint/Restart in OpenMPI"</a>
<li><strong>Reply:</strong> <a href="11013.php">Sergio Díaz: "Re: [OMPI users] Checkpoint/Restart in OpenMPI"</a>
<li><strong>Reply:</strong> <a href="11027.php">Abhishek Kulkarni: "Re: [OMPI users] Checkpoint/Restart in OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm a newbie, and I want to test the checkpoint/restart mechanism included in OpenMPI v 1.3.3. I have tried to search for some documentation about how to install the OpenMPI implementation in order to support checkpoint/restart, and I found lots of links to 
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p><a href="https://svn.open-mpi.org/trac/ompi/wiki/ProcessFT_CR">https://svn.open-mpi.org/trac/ompi/wiki/ProcessFT_CR</a>
<br>
which seems not to work. Can you please advise me what to read or what steps to follow in order to have everything working?
<br>
<p>I already installed OpenMPI but checkpoint/restart doesn't work. During installation, in installation log I found teh following lines (don't know if it's my software configuration fault or the way I installed OpenMPI):
<br>
--------------------------------------------------------------------------------
<br>
--- MCA component pml:crcpw (m4 configuration macro)
<br>
checking for MCA component pml:crcpw compile mode... dso
<br>
checking if MCA component pml:crcpw can compile... no
<br>
<p>+++ Configuring MCA framework crcp
<br>
checking for no configure components in framework crcp... 
<br>
checking for m4 configure components in framework crcp... bkmrk
<br>
<p>--- MCA component crcp:bkmrk (m4 configuration macro)
<br>
checking for MCA component crcp:bkmrk compile mode... dso
<br>
checking if MCA component crcp:bkmrk can compile... no
<br>
--------------------------------------------------------------------------------
<br>
<p>Thanks,
<br>
Andreea
<br>
<p><p><p><p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11012/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11013.php">Sergio Díaz: "Re: [OMPI users] Checkpoint/Restart in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="11011.php">Brock Palen: "Re: [OMPI users] mpi functions are slow when first called and become normal afterwards"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11013.php">Sergio Díaz: "Re: [OMPI users] Checkpoint/Restart in OpenMPI"</a>
<li><strong>Reply:</strong> <a href="11013.php">Sergio Díaz: "Re: [OMPI users] Checkpoint/Restart in OpenMPI"</a>
<li><strong>Reply:</strong> <a href="11027.php">Abhishek Kulkarni: "Re: [OMPI users] Checkpoint/Restart in OpenMPI"</a>
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
