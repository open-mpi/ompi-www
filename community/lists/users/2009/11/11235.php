<?
$subject_val = "[OMPI users] Building Name Service for Intercommunication";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 18 12:16:27 2009" -->
<!-- isoreceived="20091118171627" -->
<!-- sent="Wed, 18 Nov 2009 20:16:22 +0300" -->
<!-- isosent="20091118171622" -->
<!-- name="Alexander Gordeyev" -->
<!-- email="gordey_at_[hidden]" -->
<!-- subject="[OMPI users] Building Name Service for Intercommunication" -->
<!-- id="9a2b13bf0911180916q13a45ac8w9e8274d201308d2c_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Building Name Service for Intercommunication<br>
<strong>From:</strong> Alexander Gordeyev (<em>gordey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-18 12:16:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11236.php">Ashley Pittman: "Re: [OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0"</a>
<li><strong>Previous message:</strong> <a href="11234.php">Laurin M&#195;&#188;ller: "Re: [OMPI users] Antw: Re: mpirun not working on more than	 one	 node"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>Hope, this list is a good starter.
<br>
<p>I'm struggling with &quot;Example 3: Building Name Service for
<br>
Intercommunication&quot; (at page 217) from the &quot;MPI: A Message-Passing
<br>
Interface Standard Version 2.1&quot;
<br>
<p>1. There is an error in line 29 at page 217: &quot;server_key_val&quot; integer
<br>
should be &quot;server_keyval&quot;
<br>
2. An array buffer[10] on line 46 at page 220 does not get initialized
<br>
for non-leaders, thus                      13
<br>
MPI_Intercomm_create on line 13-14 at page 221 gets a corrupted remote
<br>
leader rank.
<br>
<p>Due to the latter bug and lack of en_queue/de_queue routines, I do not
<br>
realize the whole point of the example. Is there a working copy
<br>
available?
<br>
<p><p><pre>
-- 
With best regards!
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11236.php">Ashley Pittman: "Re: [OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0"</a>
<li><strong>Previous message:</strong> <a href="11234.php">Laurin M&#195;&#188;ller: "Re: [OMPI users] Antw: Re: mpirun not working on more than	 one	 node"</a>
<!-- nextthread="start" -->
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
