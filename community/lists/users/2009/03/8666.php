<?
$subject_val = "Re: [OMPI users] [OMPI devel] mpirun: symbol lookup error:/usr/local/lib/openmpi/mca_plm_lsf.so: undefined symbol: ls b_init";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 30 21:39:46 2009" -->
<!-- isoreceived="20090331013946" -->
<!-- sent="Mon, 30 Mar 2009 21:39:41 -0400" -->
<!-- isosent="20090331013941" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [OMPI devel] mpirun: symbol lookup error:/usr/local/lib/openmpi/mca_plm_lsf.so: undefined symbol: ls b_init" -->
<!-- id="602E6D89-E314-493E-B99C-7C5A3D8F2E3D_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="adbbb9af0903300743m417f563ej305ec1f8b51b535e_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] [OMPI devel] mpirun: symbol lookup error:/usr/local/lib/openmpi/mca_plm_lsf.so: undefined symbol: ls b_init<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-30 21:39:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8667.php">Jeff Squyres: "Re: [OMPI users] 'orte_ess_base_select failed'"</a>
<li><strong>Previous message:</strong> <a href="8665.php">Eugene Loh: "Re: [OMPI users] Bogus memcpy or bogus  valgrind record"</a>
<li><strong>In reply to:</strong> <a href="8633.php">Alessandro Surace: "[OMPI users] mpirun: symbol lookup error: /usr/local/lib/openmpi/mca_plm_lsf.so: undefined symbol: ls b_init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8670.php">Alessandro Surace: "Re: [OMPI users] [OMPI devel] mpirun: symbol lookup error:/usr/local/lib/openmpi/mca_plm_lsf.so: undefined symbol: ls b_init"</a>
<li><strong>Maybe reply:</strong> <a href="8670.php">Alessandro Surace: "Re: [OMPI users] [OMPI devel] mpirun: symbol lookup error:/usr/local/lib/openmpi/mca_plm_lsf.so: undefined symbol: ls b_init"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
(snipping the devel list out of the CC)
<br>
<p>Do you have the LSF support libraries installed on all nodes?  Are  
<br>
they all the same version?  Do they include the lsb_init symbol?  If  
<br>
memory serves, the name of the library is simply &quot;liblsf&quot; or  
<br>
&quot;libbat&quot; (.a or .so; I don't know which).
<br>
<p><p>On Mar 30, 2009, at 10:43 AM, Alessandro Surace wrote:
<br>
<p><span class="quotelev1">&gt; Hi guys,
</span><br>
<span class="quotelev1">&gt; I've a problem with the last stable build and the last nightly  
</span><br>
<span class="quotelev1">&gt; snapshot.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I run a job directly with mpirun no problem.
</span><br>
<span class="quotelev1">&gt; If I try to submit it with lsf:
</span><br>
<span class="quotelev1">&gt; bsub -a openmpi -m grid01 mpirun.lsf /mnt/ewd/mpi/fibonacci/ 
</span><br>
<span class="quotelev1">&gt; fibonacci_mpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I get the follow error:
</span><br>
<span class="quotelev1">&gt; mpirun: symbol lookup error: /usr/local/lib/openmpi/mca_plm_lsf.so:  
</span><br>
<span class="quotelev1">&gt; undefined symbol: lsb_init
</span><br>
<span class="quotelev1">&gt; Job  /opt/lsf/7.0/linux2.6-glibc2.3-x86/bin/openmpi_wrapper /mnt/ewd/ 
</span><br>
<span class="quotelev1">&gt; mpi/fibonacci/fibonacci_mpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My lsf version is:
</span><br>
<span class="quotelev1">&gt; Platform LSF 7.0.4.115872, Sep 24 2008
</span><br>
<span class="quotelev1">&gt; Copyright 1992-2008 Platform Computing Corporation
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   binary type: linux2.6-glibc2.3-x86
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; while in attach the info about Open mpi.
</span><br>
<span class="quotelev1">&gt; &lt; 
</span><br>
<span class="quotelev1">&gt; ompi_info 
</span><br>
<span class="quotelev1">&gt; .txt&gt;&lt;config.log.gz&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8667.php">Jeff Squyres: "Re: [OMPI users] 'orte_ess_base_select failed'"</a>
<li><strong>Previous message:</strong> <a href="8665.php">Eugene Loh: "Re: [OMPI users] Bogus memcpy or bogus  valgrind record"</a>
<li><strong>In reply to:</strong> <a href="8633.php">Alessandro Surace: "[OMPI users] mpirun: symbol lookup error: /usr/local/lib/openmpi/mca_plm_lsf.so: undefined symbol: ls b_init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8670.php">Alessandro Surace: "Re: [OMPI users] [OMPI devel] mpirun: symbol lookup error:/usr/local/lib/openmpi/mca_plm_lsf.so: undefined symbol: ls b_init"</a>
<li><strong>Maybe reply:</strong> <a href="8670.php">Alessandro Surace: "Re: [OMPI users] [OMPI devel] mpirun: symbol lookup error:/usr/local/lib/openmpi/mca_plm_lsf.so: undefined symbol: ls b_init"</a>
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
