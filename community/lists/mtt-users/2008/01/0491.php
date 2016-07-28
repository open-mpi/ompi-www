<?
$subject_val = "Re: [MTT users] [OMPI devel] Svn password issues with MTT";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 24 17:16:52 2008" -->
<!-- isoreceived="20080124221652" -->
<!-- sent="Thu, 24 Jan 2008 17:16:22 -0500" -->
<!-- isosent="20080124221622" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] [OMPI devel] Svn password issues with MTT" -->
<!-- id="87C9BB49-D13F-4C1B-85DC-AC664AFFAAAC_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="002a01c85ed6$0df288f0$bcf3a580_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [MTT users] [OMPI devel] Svn password issues with MTT<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-24 17:16:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0492.php">Jennis Pruett: "[MTT users] Help starting out with MTT"</a>
<li><strong>Previous message:</strong> <a href="0490.php">Ethan Mallove: "Re: [MTT users] question on MTT setup instructions."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Moving this post to the MTT users list...
<br>
<p>Jennis --
<br>
<p>Are you going to be submitting official Open MPI MTT regression  
<br>
testing for Los Alamos on a regular basis (potentially nightly)?   
<br>
That's what the database at Indiana University (i.e., www.open- 
<br>
mpi.org) is for.
<br>
<p>If so, I'll be happy to reset the lanl password and tell you what it is.
<br>
<p>If not, you have several other options for getting the output (e.g.,  
<br>
text files, setting up your own database, etc.).
<br>
<p><p><p>On Jan 24, 2008, at 5:11 PM, Jennis Pruett wrote:
<br>
<p><span class="quotelev1">&gt; Hi, Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ethan Mallove has been helping me with an MTT setup, but it appears  
</span><br>
<span class="quotelev1">&gt; that
</span><br>
<span class="quotelev1">&gt; I now have an MTT svn password issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do  you know who I should contact for this? Is it Ethan?
</span><br>
<span class="quotelev1">&gt; He may be in a meeting or maybe is busy, but I'm curious.
</span><br>
<span class="quotelev1">&gt; I didn't see a place to apply for a password...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --Jenny
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ffe2:~ [124] &gt; svn co <a href="https://svn.open-mpi.org/svn/ompi-tests/trunk/">https://svn.open-mpi.org/svn/ompi-tests/trunk/</a> 
</span><br>
<span class="quotelev1">&gt; ibm
</span><br>
<span class="quotelev1">&gt; Authentication realm: &lt;<a href="https://svn.open-mpi.org:443">https://svn.open-mpi.org:443</a>&gt; Open MPI  
</span><br>
<span class="quotelev1">&gt; Subversion
</span><br>
<span class="quotelev1">&gt; repositories access
</span><br>
<span class="quotelev1">&gt; Password for 'jennyp':
</span><br>
<span class="quotelev1">&gt; Authentication realm: &lt;<a href="https://svn.open-mpi.org:443">https://svn.open-mpi.org:443</a>&gt; Open MPI  
</span><br>
<span class="quotelev1">&gt; Subversion
</span><br>
<span class="quotelev1">&gt; repositories access
</span><br>
<span class="quotelev1">&gt; Username: jennyp
</span><br>
<span class="quotelev1">&gt; Password for 'jennyp':
</span><br>
<span class="quotelev1">&gt; Authentication realm: &lt;<a href="https://svn.open-mpi.org:443">https://svn.open-mpi.org:443</a>&gt; Open MPI  
</span><br>
<span class="quotelev1">&gt; Subversion
</span><br>
<span class="quotelev1">&gt; repositories access
</span><br>
<span class="quotelev1">&gt; Username: svn: PROPFIND request failed on '/svn/ompi-tests/trunk/ibm'
</span><br>
<span class="quotelev1">&gt; svn: PROPFIND of '/svn/ompi-tests/trunk/ibm': authorization failed
</span><br>
<span class="quotelev1">&gt; (<a href="https://svn.open-mpi.org">https://svn.open-mpi.org</a>)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /ompi-core-testers [328] &gt; client/mtt --file samples/ompi-core- 
</span><br>
<span class="quotelev1">&gt; template.ini
</span><br>
<span class="quotelev1">&gt; --debug
</span><br>
<span class="quotelev1">&gt; -- this also eventually requests a password of user jennyp...... 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0492.php">Jennis Pruett: "[MTT users] Help starting out with MTT"</a>
<li><strong>Previous message:</strong> <a href="0490.php">Ethan Mallove: "Re: [MTT users] question on MTT setup instructions."</a>
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
