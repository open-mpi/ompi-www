<?
$subject_val = "Re: [OMPI devel] SnapC";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 31 12:05:06 2008" -->
<!-- isoreceived="20080131170506" -->
<!-- sent="Thu, 31 Jan 2008 12:04:59 -0500" -->
<!-- isosent="20080131170459" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SnapC" -->
<!-- id="6C3CD7BA-EF20-4841-9D2F-8FE762555B6F_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="c8bcfafa0801310651u470e9155jc386cda2450b9ff0_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] SnapC<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-31 12:04:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3105.php">Matthias Jurenz: "Re: [OMPI devel] vt compiler warnings and errors"</a>
<li><strong>Previous message:</strong> <a href="3103.php">Leonardo Fialho: "[OMPI devel] SnapC"</a>
<li><strong>In reply to:</strong> <a href="3103.php">Leonardo Fialho: "[OMPI devel] SnapC"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
So the ompi-checkpoint command connects with the Global Coordinator in  
<br>
the SnapC 'full' component. The Global Coordinator lives in the HNP  
<br>
(mpirun/orterun) as determined by the 'full' component. As a result to  
<br>
start a checkpoint ompi-checkpoint must connect to the HNP.
<br>
<p>&nbsp;From a user standpoint, they are typically running ompi-checkpoint  
<br>
from the same machine where they started mpirun. So it made the most  
<br>
sense to have these two connect to each other, especially if we ask  
<br>
the user to provide the PID of the mpirun process to checkpoint.
<br>
<p>That being said, with the proper changes to 'full' (or with a new  
<br>
SnapC component), ompi-checkpoint could issue the checkpoint request  
<br>
to any process in the MPI job [orterun, orted, application processes]  
<br>
and have the correct things happen.
<br>
<p>I have received one request for this functionality, but have not had  
<br>
the time yet to dig into it.
<br>
<p>Does that help?
<br>
<p>Cheers,
<br>
Josh
<br>
<p>On Jan 31, 2008, at 9:51 AM, Leonardo Fialho wrote:
<br>
<p><span class="quotelev1">&gt; Hi all (and Josh),
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Why the ompi-checkpoint have to contact the HNP specifically? If I use
</span><br>
<span class="quotelev1">&gt; another process to start the snapshot coordinator, apparently it&#180;s
</span><br>
<span class="quotelev1">&gt; works fine, no?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PS: I prefer to send this message to the list... to keep it on the
</span><br>
<span class="quotelev1">&gt; history for further use...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Leonardo Fialho
</span><br>
<span class="quotelev1">&gt; Computer Architecture and Operating Systems Department - CAOS
</span><br>
<span class="quotelev1">&gt; Universidad Autonoma de Barcelona - UAB
</span><br>
<span class="quotelev1">&gt; ETSE, Edifcio Q, QC/3088
</span><br>
<span class="quotelev1">&gt; <a href="http://www.caos.uab.es">http://www.caos.uab.es</a>
</span><br>
<span class="quotelev1">&gt; Phone: +34-93-581-2888
</span><br>
<span class="quotelev1">&gt; Fax: +34-93-581-2478
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3105.php">Matthias Jurenz: "Re: [OMPI devel] vt compiler warnings and errors"</a>
<li><strong>Previous message:</strong> <a href="3103.php">Leonardo Fialho: "[OMPI devel] SnapC"</a>
<li><strong>In reply to:</strong> <a href="3103.php">Leonardo Fialho: "[OMPI devel] SnapC"</a>
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
