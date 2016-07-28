<?
$subject_val = "Re: [OMPI users] Run-time problem";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 17 13:04:17 2009" -->
<!-- isoreceived="20090317170417" -->
<!-- sent="Tue, 17 Mar 2009 13:04:10 -0400" -->
<!-- isosent="20090317170410" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Run-time problem" -->
<!-- id="8FE798B3-0447-4EB1-A2DD-7F7E782710C3_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="307267.45021.qm_at_web63005.mail.re1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Run-time problem<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-17 13:04:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8484.php">Elvedin Trnjanin: "Re: [OMPI users] WRF Slow Down"</a>
<li><strong>Previous message:</strong> <a href="8482.php">Philip Hayes: "[OMPI users] WRF Slow Down"</a>
<li><strong>In reply to:</strong> <a href="8474.php">justin oppenheim: "Re: [OMPI users] Run-time problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 16, 2009, at 7:23 PM, justin oppenheim wrote:
<br>
<p><span class="quotelev1">&gt; I managed to run it just recently... It turns out that some  
</span><br>
<span class="quotelev1">&gt; libraries libib* were missing, as well as some others. I learned  
</span><br>
<span class="quotelev1">&gt; this by trying to install an old version of openmpi that was in the  
</span><br>
<span class="quotelev1">&gt; repository of my Suse Linux. The &quot;software manager&quot; of Suse told me  
</span><br>
<span class="quotelev1">&gt; the missing libraries for the old openmpi. After installing these  
</span><br>
<span class="quotelev1">&gt; libraries, the already installed new openmpi (downloaded from open- 
</span><br>
<span class="quotelev1">&gt; mpi.org) works. Maybe it is a good idea to spell this out on open- 
</span><br>
<span class="quotelev1">&gt; mpi web site. People would just install the openmpi without knowing  
</span><br>
<span class="quotelev1">&gt; that there might be some missing libraries...
</span><br>
<p><p>The problems you described:
<br>
<p>/programs/my_mpi_program: symbol lookup error: /programs/openmpi/lib/ 
<br>
libmpi_cxx.so.0: undefined symbol: ompi_registered_datareps
<br>
<p>Should not have been caused by missing libib* libraries.  The missing  
<br>
symbol that that error message talks about is a symbol in libmpi  
<br>
itself.  It sounds more like you somehow had mis-matched versions of  
<br>
Open MPI installed / being used, perchance...?
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8484.php">Elvedin Trnjanin: "Re: [OMPI users] WRF Slow Down"</a>
<li><strong>Previous message:</strong> <a href="8482.php">Philip Hayes: "[OMPI users] WRF Slow Down"</a>
<li><strong>In reply to:</strong> <a href="8474.php">justin oppenheim: "Re: [OMPI users] Run-time problem"</a>
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
