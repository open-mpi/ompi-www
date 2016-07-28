<?
$subject_val = "Re: [OMPI users] defining different values for same environment variable";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 27 12:46:21 2009" -->
<!-- isoreceived="20090227174621" -->
<!-- sent="Fri, 27 Feb 2009 10:46:16 -0700" -->
<!-- isosent="20090227174616" -->
<!-- name="Matt Hughes" -->
<!-- email="matt.c.hughes+ompi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] defining different values for same environment variable" -->
<!-- id="d105ee120902270946vdbcc5d7k50fa578ab1807425_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="7dd7eb6e0902270936i7d397955y43949be00a12be73_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] defining different values for same environment variable<br>
<strong>From:</strong> Matt Hughes (<em>matt.c.hughes+ompi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-27 12:46:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8248.php">Mahmoud Payami: "[OMPI users] Threading fault"</a>
<li><strong>Previous message:</strong> <a href="8246.php">Nicolas Deladerriere: "[OMPI users] defining different values for same environment variable"</a>
<li><strong>In reply to:</strong> <a href="8246.php">Nicolas Deladerriere: "[OMPI users] defining different values for same environment variable"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8251.php">Nicolas Deladerriere: "Re: [OMPI users] defining different values for same environment variable"</a>
<li><strong>Reply:</strong> <a href="8251.php">Nicolas Deladerriere: "Re: [OMPI users] defining different values for same environment variable"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
2009/2/27 Nicolas Deladerriere &lt;nicolas.deladerriere_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; I am looking for a way to set environment variable with different value on
</span><br>
<span class="quotelev1">&gt; each node before running MPI executable. (not only export the environment
</span><br>
<span class="quotelev1">&gt; variable !)
</span><br>
<p>I typically use a script for things like this.  So instead of
<br>
specifying your executable directly on the mpirun command line,
<br>
instead specify the script.  The script can set the environment
<br>
variable, then launch your executable.
<br>
<p>#!/bin/csh
<br>
setenv GMON_OUT_PREFIX 'gmon.out_'`/bin/uname -n`
<br>
myexe
<br>
<p>mpirun -np 2 --bynode --hostfile CLUSTER_NODES myscript
<br>
<p>I'm not sure if that csh syntax is right, but you get the idea.
<br>
<p>mch
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8248.php">Mahmoud Payami: "[OMPI users] Threading fault"</a>
<li><strong>Previous message:</strong> <a href="8246.php">Nicolas Deladerriere: "[OMPI users] defining different values for same environment variable"</a>
<li><strong>In reply to:</strong> <a href="8246.php">Nicolas Deladerriere: "[OMPI users] defining different values for same environment variable"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8251.php">Nicolas Deladerriere: "Re: [OMPI users] defining different values for same environment variable"</a>
<li><strong>Reply:</strong> <a href="8251.php">Nicolas Deladerriere: "Re: [OMPI users] defining different values for same environment variable"</a>
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
