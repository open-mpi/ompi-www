<?
$subject_val = "Re: [OMPI users] New warning messages in 1.3.2 (not present in1.2.8)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 12 08:48:10 2009" -->
<!-- isoreceived="20090512124810" -->
<!-- sent="Tue, 12 May 2009 08:48:02 -0400" -->
<!-- isosent="20090512124802" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] New warning messages in 1.3.2 (not present in1.2.8)" -->
<!-- id="6BB7BE2C-C521-4EC7-9879-15848054EE76_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="e76aa17f0905120517v2c826bb5yd4c286fa73c3e90_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] New warning messages in 1.3.2 (not present in1.2.8)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-12 08:48:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9308.php">Matthieu Brucher: "Re: [OMPI users] New warning messages in 1.3.2 (not present in1.2.8)"</a>
<li><strong>Previous message:</strong> <a href="9306.php">Anton Starikov: "Re: [OMPI users] strange bug"</a>
<li><strong>In reply to:</strong> <a href="9305.php">Matthieu Brucher: "Re: [OMPI users] New warning messages in 1.3.2 (not present in1.2.8)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9308.php">Matthieu Brucher: "Re: [OMPI users] New warning messages in 1.3.2 (not present in1.2.8)"</a>
<li><strong>Reply:</strong> <a href="9308.php">Matthieu Brucher: "Re: [OMPI users] New warning messages in 1.3.2 (not present in1.2.8)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 12, 2009, at 8:17 AM, Matthieu Brucher wrote:
<br>
<p><span class="quotelev1">&gt; OK, this is indeed the case. I'll try to clean the tree (I have
</span><br>
<span class="quotelev1">&gt; several other package and deleted the original 1.2.8 package) and test
</span><br>
<span class="quotelev1">&gt; again.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>This misleading libltdl error message continues to bite us over and  
<br>
over again (users and developers alike), so I just put in a workaround  
<br>
with some heuristics to try to print a better error message in cases  
<br>
like yours.  Now you'll see something like this:
<br>
<p>[foo.example.com:24273] mca: base: component_find: unable to open / 
<br>
home/jsquyres/bogus/lib/openmpi/mca_btl_openib: perhaps a missing  
<br>
symbol, or compiled for a different version of Open MPI? (ignored)
<br>
<p>Changeset here (Shiqing tells me it'll work on Windows, too -- MTT  
<br>
will tell us for sure :-) ):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/changeset/21214">https://svn.open-mpi.org/trac/ompi/changeset/21214</a>
<br>
<p>And I filed to move it to v1.3.3 here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/1917">https://svn.open-mpi.org/trac/ompi/ticket/1917</a>
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
<li><strong>Next message:</strong> <a href="9308.php">Matthieu Brucher: "Re: [OMPI users] New warning messages in 1.3.2 (not present in1.2.8)"</a>
<li><strong>Previous message:</strong> <a href="9306.php">Anton Starikov: "Re: [OMPI users] strange bug"</a>
<li><strong>In reply to:</strong> <a href="9305.php">Matthieu Brucher: "Re: [OMPI users] New warning messages in 1.3.2 (not present in1.2.8)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9308.php">Matthieu Brucher: "Re: [OMPI users] New warning messages in 1.3.2 (not present in1.2.8)"</a>
<li><strong>Reply:</strong> <a href="9308.php">Matthieu Brucher: "Re: [OMPI users] New warning messages in 1.3.2 (not present in1.2.8)"</a>
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
