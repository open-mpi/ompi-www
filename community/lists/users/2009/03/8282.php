<?
$subject_val = "Re: [OMPI users] Calculation stuck in MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  4 09:40:01 2009" -->
<!-- isoreceived="20090304144001" -->
<!-- sent="Wed, 4 Mar 2009 09:39:54 -0500" -->
<!-- isosent="20090304143954" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Calculation stuck in MPI" -->
<!-- id="1EB782ED-CCDF-46D6-B1C5-BC796A81A3F1_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="97b6a4330903030222n4b6da31fxdbcc68c3ce518cb8_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Calculation stuck in MPI<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-04 09:39:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8283.php">Jeff Squyres: "Re: [OMPI users] Lahey 64 bit and openmpi 1.3?"</a>
<li><strong>Previous message:</strong> <a href="8281.php">Jeff Squyres: "Re: [OMPI users] MPI-IO Inconsistency over Lustre using OMPI 1.3"</a>
<li><strong>In reply to:</strong> <a href="8272.php">Ondrej Marsalek: "[OMPI users] Calculation stuck in MPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No, it is not obvious, unfortunately.  Can you send all the  
<br>
information listed here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p><p>On Mar 3, 2009, at 5:22 AM, Ondrej Marsalek wrote:
<br>
<p><span class="quotelev1">&gt; Dear everyone,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a calculation (the CP2K program) using MPI over Infiniband and
</span><br>
<span class="quotelev1">&gt; it is stuck. All processes (16 on 4 nodes) are running, taking 100%
</span><br>
<span class="quotelev1">&gt; CPU. Attaching a debugger reveals this (only the end of the stack
</span><br>
<span class="quotelev1">&gt; shown here):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (gdb) backtrace
</span><br>
<span class="quotelev1">&gt; #0  0x00002b3460916dbf in btl_openib_component_progress () from
</span><br>
<span class="quotelev1">&gt; /home/marsalek/opt/openmpi-1.3-intel/lib/openmpi/mca_btl_openib.so
</span><br>
<span class="quotelev1">&gt; #1  0x00002b345c22c778 in opal_progress () from
</span><br>
<span class="quotelev1">&gt; /home/marsalek/opt/openmpi-1.3-intel/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; #2  0x00002b345bd2d66d in ompi_request_default_wait_any () from
</span><br>
<span class="quotelev1">&gt; /home/marsalek/opt/openmpi-1.3-intel/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #3  0x00002b345bd6021a in PMPI_Waitany () from
</span><br>
<span class="quotelev1">&gt; /home/marsalek/opt/openmpi-1.3-intel/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #4  0x00002b345bae77f1 in pmpi_waitany__ () from
</span><br>
<span class="quotelev1">&gt; /home/marsalek/opt/openmpi-1.3-intel/lib/libmpi_f77.so.0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It has survived a restart of the IB switch, unlike &quot;healthy&quot; runs. My
</span><br>
<span class="quotelev1">&gt; question is - is it obvious at what level the problem is? IB, Open
</span><br>
<span class="quotelev1">&gt; MPI, application?I would be glad to provide detailed information, if
</span><br>
<span class="quotelev1">&gt; anyone was willing to help. I want to work on this, but unfortunately
</span><br>
<span class="quotelev1">&gt; I am not sure where to begin.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Ondrej Marsalek
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="8283.php">Jeff Squyres: "Re: [OMPI users] Lahey 64 bit and openmpi 1.3?"</a>
<li><strong>Previous message:</strong> <a href="8281.php">Jeff Squyres: "Re: [OMPI users] MPI-IO Inconsistency over Lustre using OMPI 1.3"</a>
<li><strong>In reply to:</strong> <a href="8272.php">Ondrej Marsalek: "[OMPI users] Calculation stuck in MPI"</a>
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
