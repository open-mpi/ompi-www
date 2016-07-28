<?
$subject_val = "Re: [OMPI users] About POSIX APIs used on openMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 15 08:37:14 2015" -->
<!-- isoreceived="20150515123714" -->
<!-- sent="Fri, 15 May 2015 12:37:12 +0000" -->
<!-- isosent="20150515123712" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] About POSIX APIs used on openMPI" -->
<!-- id="BDAEC98A-C05A-4777-9CEA-AED2EA03B38C_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CADB=1m_=R9Bps_Z+YE4UAc8Yo7dfJx1WRFyA+-eTABDrgVW8XQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] About POSIX APIs used on openMPI<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-15 08:37:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26875.php">Siegmar Gross: "Re: [OMPI users] openmpi-1.8.5: Java UnsupportedClassVersionError for Solaris"</a>
<li><strong>Previous message:</strong> <a href="26873.php">Gilles Gouaillardet: "Re: [OMPI users] openmpi-1.8.5: ORTE was unable to start daemons"</a>
<li><strong>In reply to:</strong> <a href="26869.php">Chaitra Kumar: "[OMPI users] About POSIX APIs used on openMPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 14, 2015, at 11:29 PM, Chaitra Kumar &lt;chaitragkumar_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We are developing an application which can handle only POSIX threads and POSIX synchronization APIs.   I would like to know if the OpenMPI runtime implementation makes use of the POSIX threads and POSIX synchronization APIs (lock, mutex, semaphore, signal, etc.) or not,  in particular, the communication/buffer management layer. 
</span><br>
<p>Yes, it does.
<br>
<p>If you have specific questions about the internals of the Open MPI code base, you probably want to ask them on the &quot;devel&quot; list:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26875.php">Siegmar Gross: "Re: [OMPI users] openmpi-1.8.5: Java UnsupportedClassVersionError for Solaris"</a>
<li><strong>Previous message:</strong> <a href="26873.php">Gilles Gouaillardet: "Re: [OMPI users] openmpi-1.8.5: ORTE was unable to start daemons"</a>
<li><strong>In reply to:</strong> <a href="26869.php">Chaitra Kumar: "[OMPI users] About POSIX APIs used on openMPI"</a>
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
