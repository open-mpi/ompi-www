<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul  4 11:50:29 2006" -->
<!-- isoreceived="20060704155029" -->
<!-- sent="Tue, 04 Jul 2006 17:50:13 +0200" -->
<!-- isosent="20060704155013" -->
<!-- name="Samuel Wieczorek" -->
<!-- email="samuel.wieczorek_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compilation problem" -->
<!-- id="C0D05AD5.1492%samuel.wieczorek_at_cea.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="950E1735-324B-4C51-A5B6-7D05B413CC37_at_open-mpi.org" -->
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
<strong>From:</strong> Samuel Wieczorek (<em>samuel.wieczorek_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-04 11:50:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1548.php">Chengwen Chen: "Re: [OMPI users] error in running openmpi on remote node"</a>
<li><strong>Previous message:</strong> <a href="1546.php">George Bosilca: "Re: [OMPI users] Where can I get mpi api reference"</a>
<li><strong>In reply to:</strong> <a href="1542.php">Brian Barrett: "Re: [OMPI users] Compilation problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Great !  It works now !
<br>
<p>Thanks
<br>
<p>Samuel
<br>
<p><p>Le 4/07/06 16:00, &#171;&#160;Brian Barrett&#160;&#187; &lt;brbarret_at_[hidden]&gt; a &#233;crit&#160;:
<br>
<p><span class="quotelev1">&gt; On Jul 3, 2006, at 11:49 PM, Samuel Wieczorek wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi, I tried to install open-mpi on a Mac OS X (10.4), but the
</span><br>
<span class="quotelev2">&gt;&gt; compilation
</span><br>
<span class="quotelev2">&gt;&gt; step failed due to undefined symbols.
</span><br>
<span class="quotelev2">&gt;&gt; Here is the compressed output files.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Any idea to help me ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is very odd, but it appears that /usr/bin/find isn't executable
</span><br>
<span class="quotelev1">&gt; on your machine.  This results in the libraries in Open MPI not being
</span><br>
<span class="quotelev1">&gt; built properly.  There were many lines like this in your log file:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    ../libtool: line 1: /usr/bin/find: cannot execute binary file
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not sure how this could happen, but fixing your 'find' command
</span><br>
<span class="quotelev1">&gt; should fix the Open MPI build.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<p><pre>
-- 
Samuel Wieczorek
Laboratoire de Biologie, Informatique et Mathematiques
Departement Reponse et Dynamique Cellulaires
DSV / CEA  - Grenoble
Tel : (33) 4.38.78.98.23
Fax : (33) 4.38.78.43.37
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1548.php">Chengwen Chen: "Re: [OMPI users] error in running openmpi on remote node"</a>
<li><strong>Previous message:</strong> <a href="1546.php">George Bosilca: "Re: [OMPI users] Where can I get mpi api reference"</a>
<li><strong>In reply to:</strong> <a href="1542.php">Brian Barrett: "Re: [OMPI users] Compilation problem"</a>
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
