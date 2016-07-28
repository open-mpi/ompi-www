<?
$subject_val = "[OMPI users] how to build a relocatable OpenMPI RPM ?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep  9 23:02:23 2013" -->
<!-- isoreceived="20130910030223" -->
<!-- sent="Tue, 10 Sep 2013 11:02:21 +0800" -->
<!-- isosent="20130910030221" -->
<!-- name="caohaijun" -->
<!-- email="amao.chj_at_[hidden]" -->
<!-- subject="[OMPI users] how to build a relocatable OpenMPI RPM ?" -->
<!-- id="CAJZ1kLEv2U7-CoNFzDpR7+YvsB2QCshBWu06CusRwv4oyLMsWA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] how to build a relocatable OpenMPI RPM ?<br>
<strong>From:</strong> caohaijun (<em>amao.chj_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-09 23:02:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22629.php">Ralph Castain: "Re: [OMPI users] how to build a relocatable OpenMPI RPM ?"</a>
<li><strong>Previous message:</strong> <a href="22627.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OMPI_LIST_GROW keeps allocating memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22629.php">Ralph Castain: "Re: [OMPI users] how to build a relocatable OpenMPI RPM ?"</a>
<li><strong>Reply:</strong> <a href="22629.php">Ralph Castain: "Re: [OMPI users] how to build a relocatable OpenMPI RPM ?"</a>
<li><strong>Reply:</strong> <a href="22630.php">Jeff Squyres (jsquyres): "Re: [OMPI users] how to build a relocatable OpenMPI RPM ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all
<br>
<p>How to build a relocatable OpenMPI RPM ?
<br>
<p>I just use the following command to build a OpenMPI RPM from SRPM.
<br>
<p>rpmbuild --rebuild --define 'configure_options --with-devel-headers'
<br>
openmpi-1.7.2-1.src.rpm
<br>
<p>It can successfully build the RPM. After installing with 'rpm -ivh
<br>
--prefix=/somewhere  openmpi-1.7.2-1.x86_64.rpm',  I tried to run a MPI
<br>
job, and then got:
<br>
<p># mpirun -bynode -hostfile ./hostfile -np 40 ./mpi/hello
<br>
<p>--------------------------------------------------------------------------
<br>
<p>Sorry!  You were supposed to get help about:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;opal_init:startup:internal-failure
<br>
<p>But I couldn't open the help file:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;/usr/share/openmpi/help-opal-runtime.txt: No such file or directory.
<br>
&nbsp;Sorry!
<br>
<p>--------------------------------------------------------------------------
<br>
<p>--------------------------------------------------------------------------
<br>
<p>Sorry!  You were supposed to get help about:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;orte_init:startup:internal-failure
<br>
<p>But I couldn't open the help file:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;/usr/share/openmpi/help-orte-runtime: No such file or directory.  Sorry!
<br>
<p>--------------------------------------------------------------------------
<br>
<p>It seems the directory 'share'  is supposed to be under /usr.
<br>
<p>Anyone can help me?
<br>
<pre>
-- 
   Best Regards!
            Jimmy Haijun Cao   (&#230;&#155;&#185;&#230;&#181;&#183;&#229;&#134;&#155;)
-----------------------------------------------------------
Tel:   +86-188 1787 9959
Email:amao.chj_at_[hidden]
-----------------------------------------------------------
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22628/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22629.php">Ralph Castain: "Re: [OMPI users] how to build a relocatable OpenMPI RPM ?"</a>
<li><strong>Previous message:</strong> <a href="22627.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OMPI_LIST_GROW keeps allocating memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22629.php">Ralph Castain: "Re: [OMPI users] how to build a relocatable OpenMPI RPM ?"</a>
<li><strong>Reply:</strong> <a href="22629.php">Ralph Castain: "Re: [OMPI users] how to build a relocatable OpenMPI RPM ?"</a>
<li><strong>Reply:</strong> <a href="22630.php">Jeff Squyres (jsquyres): "Re: [OMPI users] how to build a relocatable OpenMPI RPM ?"</a>
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
