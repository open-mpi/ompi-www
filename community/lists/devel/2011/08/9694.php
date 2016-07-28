<?
$subject_val = "Re: [OMPI devel] [torquedev] Communication between Torque and MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 25 08:35:45 2011" -->
<!-- isoreceived="20110825123545" -->
<!-- sent="Thu, 25 Aug 2011 22:35:37 +1000" -->
<!-- isosent="20110825123537" -->
<!-- name="Chris Samuel" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [torquedev] Communication between Torque and MPI" -->
<!-- id="201108252235.37921.samuel_at_unimelb.edu.au" -->
<!-- charset="iso-8859-15" -->
<!-- inreplyto="CAPDKCfdxQCints7fssr9hOpmAr73eCZ8_HU3+N-CEpua7X4Lvg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [torquedev] Communication between Torque and MPI<br>
<strong>From:</strong> Chris Samuel (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-25 08:35:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9695.php">Jeff Squyres: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<li><strong>Previous message:</strong> <a href="9693.php">Xin He: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9696.php">Ralph Castain: "Re: [OMPI devel] [torquedev] Communication between Torque and MPI"</a>
<li><strong>Reply:</strong> <a href="9696.php">Ralph Castain: "Re: [OMPI devel] [torquedev] Communication between Torque and MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 25 Aug 2011 09:07:48 PM Jayavant Patil wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<p>Hiya,
<br>
<p><span class="quotelev1">&gt; Is anybody having a tutorial or reference pages
</span><br>
<span class="quotelev1">&gt; explaining about the communication between Torque
</span><br>
<span class="quotelev1">&gt; and MPI?
</span><br>
<p>Open-MPI uses the PBS Task Manager (TM) API to talk to
<br>
Torque pbs_mom's.  If you have the Torque manual pages
<br>
installed you can &quot;man tm&quot; to see the docs.
<br>
<p>The code in Open-MPI that launches jobs is in the code:
<br>
<p>$openmpi/orte/mca/plm/tm/
<br>
<p>Hope that helps!
<br>
Chris
<br>
<pre>
-- 
   Christopher Samuel - Senior Systems Administrator
 VLSCI - Victorian Life Sciences Computation Initiative
 Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
         <a href="http://www.vlsci.unimelb.edu.au/">http://www.vlsci.unimelb.edu.au/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9695.php">Jeff Squyres: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<li><strong>Previous message:</strong> <a href="9693.php">Xin He: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9696.php">Ralph Castain: "Re: [OMPI devel] [torquedev] Communication between Torque and MPI"</a>
<li><strong>Reply:</strong> <a href="9696.php">Ralph Castain: "Re: [OMPI devel] [torquedev] Communication between Torque and MPI"</a>
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
