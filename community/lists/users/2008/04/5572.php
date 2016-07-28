<?
$subject_val = "Re: [OMPI users] &quot;Permission denied&quot; during MPI installation";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 29 16:01:16 2008" -->
<!-- isoreceived="20080429200116" -->
<!-- sent="Tue, 29 Apr 2008 17:01:13 -0300" -->
<!-- isosent="20080429200113" -->
<!-- name="Davi Vercillo C. Garcia" -->
<!-- email="davivercillo_at_[hidden]" -->
<!-- subject="Re: [OMPI users] &amp;quot;Permission denied&amp;quot; during MPI installation" -->
<!-- id="dd4eed670804291301o1726387du78262add8fe08807_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7B760F51-3433-41BE-9D5F-B9FB37AF1F4B_at_rit.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] &quot;Permission denied&quot; during MPI installation<br>
<strong>From:</strong> Davi Vercillo C. Garcia (<em>davivercillo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-29 16:01:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5573.php">Doug Reeder: "Re: [OMPI users] &quot;Permission denied&quot; during MPI installation"</a>
<li><strong>Previous message:</strong> <a href="5571.php">Alberto Giannetti: "Re: [OMPI users] &quot;Permission denied&quot; during MPI installation"</a>
<li><strong>In reply to:</strong> <a href="5570.php">Linwei Wang: "[OMPI users] &quot;Permission denied&quot; during MPI installation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5573.php">Doug Reeder: "Re: [OMPI users] &quot;Permission denied&quot; during MPI installation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p><span class="quotelev1">&gt;  Making install in etc
</span><br>
<span class="quotelev1">&gt;  test -z &quot;/usr/local/etc&quot; || ../../config/install-sh -c -d &quot;/usr/local/
</span><br>
<span class="quotelev1">&gt;  etc&quot;
</span><br>
<span class="quotelev1">&gt;  /usr/bin/install -c -m 644 openmpi-mca-params.conf /usr/local/etc/
</span><br>
<span class="quotelev1">&gt;  openmpi-mca-params.conf
</span><br>
<span class="quotelev1">&gt;  install: /usr/local/etc/openmpi-mca-params.conf: Permission denied
</span><br>
<span class="quotelev1">&gt;  make[3]: *** [install-data-local] Error 71
</span><br>
<span class="quotelev1">&gt;  make[2]: *** [install-am] Error 2
</span><br>
<span class="quotelev1">&gt;  make[1]: *** [install-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;  make: *** [install-recursive] Error 1
</span><br>
<p>Which user are you using to execute make install ? Maybe you need some
<br>
privileges to do it. See if you have them.
<br>
<p><pre>
-- 
Davi Vercillo Carneiro Garcia
Universidade Federal do Rio de Janeiro
Departamento de Ci&#234;ncia da Computa&#231;&#227;o
DCC-IM/UFRJ - <a href="http://www.dcc.ufrj.br">http://www.dcc.ufrj.br</a>
&quot;Good things come to those who... wait.&quot; - Debian Project
&quot;A computer is like air conditioning: it becomes useless when you open
windows.&quot; - Linus Torvalds
&quot;H&#225; duas coisas infinitas, o universo e a burrice humana. E eu estou
em d&#250;vida quanto o primeiro.&quot; - Albert Einstein
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5573.php">Doug Reeder: "Re: [OMPI users] &quot;Permission denied&quot; during MPI installation"</a>
<li><strong>Previous message:</strong> <a href="5571.php">Alberto Giannetti: "Re: [OMPI users] &quot;Permission denied&quot; during MPI installation"</a>
<li><strong>In reply to:</strong> <a href="5570.php">Linwei Wang: "[OMPI users] &quot;Permission denied&quot; during MPI installation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5573.php">Doug Reeder: "Re: [OMPI users] &quot;Permission denied&quot; during MPI installation"</a>
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
