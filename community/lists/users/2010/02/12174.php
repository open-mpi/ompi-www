<?
$subject_val = "Re: [OMPI users] Segfault in mca_odls_default.so with &gt; ~100 process.";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb 27 06:06:17 2010" -->
<!-- isoreceived="20100227110617" -->
<!-- sent="Sat, 27 Feb 2010 11:06:12 +0000" -->
<!-- isosent="20100227110612" -->
<!-- name="Oliver Ford" -->
<!-- email="openmpi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segfault in mca_odls_default.so with &amp;gt; ~100 process." -->
<!-- id="4B88FCA4.7010901_at_oliford.co.uk" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="096979E7-964C-4D13-9552-C51C73024CB6_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segfault in mca_odls_default.so with &gt; ~100 process.<br>
<strong>From:</strong> Oliver Ford (<em>openmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-27 06:06:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12175.php">Micha Feigin: "Re: [OMPI users] openMPI (multiple CPUs)"</a>
<li><strong>Previous message:</strong> <a href="12173.php">Ralph Castain: "Re: [OMPI users] Number of processes and spawn"</a>
<li><strong>In reply to:</strong> <a href="12172.php">Ralph Castain: "Re: [OMPI users] Segfault in mca_odls_default.so with &gt; ~100 process."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12177.php">Oliver Ford: "Re: [OMPI users] Segfault in mca_odls_default.so with &gt; ~100 process."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Yeah, the system won't like this. Your approach makes it look like you are launching 136 app_contexts. We currently only support up to 128 app_contexts. I don't think anyone anticipated somebody trying to use the system this way.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can expand the number to something larger. Will have to see how big a change it requires (mostly a question of how many places are touched) before we know what release this might show up in.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
I see.
<br>
<p>Is there a better way that I should be doing this - to run the programs 
<br>
on specific hosts with specific args?
<br>
<p>Alternatively, if you point me at the appropriate piece of code, I'll 
<br>
have a go at making the number a #define or something, and putting some 
<br>
checks in so it doesn't just crash.
<br>
<p>Oliver
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12175.php">Micha Feigin: "Re: [OMPI users] openMPI (multiple CPUs)"</a>
<li><strong>Previous message:</strong> <a href="12173.php">Ralph Castain: "Re: [OMPI users] Number of processes and spawn"</a>
<li><strong>In reply to:</strong> <a href="12172.php">Ralph Castain: "Re: [OMPI users] Segfault in mca_odls_default.so with &gt; ~100 process."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12177.php">Oliver Ford: "Re: [OMPI users] Segfault in mca_odls_default.so with &gt; ~100 process."</a>
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
